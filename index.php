<?php
session_start();
ob_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/cart.php";
include "view/header.php";
include "global.php";

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] =[];

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        case 'sanphamct':

            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cungloai = load_sanpham_cungloai($id, $iddm);

                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = "Đã Đăng Ký Thành Công";
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    // $thongbao="Bạn Đã Đăng Nhập Thành Công";
                    header('Location: index.php');
                } else {
                    $thongbao = "Tài Khoản Không Tồn Tại. Vui Lòng Kiểm Tra Lại Hoặc Đăng ký";
                }
                $thongbao = "Đã Đăng Ký Thành Công Vui Lòng Đăng Nhập";
            }
            include "view/taikhoan/dangnhap.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user']=checkuser($user,$pass);

                header('Location: index.php?act=edit_taikhoan');
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
            case 'quenmk':
                if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                    
                    $email = $_POST['email'];
                  
                    $checkemail=checkemail($email);
                    if(is_array($checkemail)){
                            $thongbao = "Mật Khẩu Của Bạn Là:" .$checkemail['pass'];
                    }else{
                        $thongbao = "Email Này Không Tồn Tại";
                    }
                   
                }
                include "view/taikhoan/quenmk.php";
                break;
                case 'thoat':
                    session_unset();
                    header('Location: index.php');
                    break;

                case 'addtocart':
                    if (isset($_POST['addtocart']) && ($_POST['addtocart'])){
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        $img = $_POST['img'];
                        $don_gia = $_POST['don_gia'];
                        $soluong=$_POST['soluong'];
                        $size =$_POST['size'];
                        $ttien= $soluong * $don_gia;
                        $i = 0;
                        $fg = 0;
                        //Tìm sản phẩm giống nhau
                        if (isset($_SESSION['mycart'])&&(count($_SESSION['mycart'])>0)) {
                           foreach ($_SESSION['mycart'] as $sp) {
                               if ($sp[0]==$id) {
                                   $soluong+=$sp[4];
                                   $fg=1;
                                   $_SESSION['mycart'][$i][4]= $soluong;
                                   break;
                               }
                               $i++;
                           }
                        }
                        // tạo mảng khi số lượng ban đầu ko thay đổi 
                        if ($fg==0) {
                            
                            $spadd=[$id,$name,$img,$don_gia,$soluong,$size,$ttien];
                            //ghi lên session
                            array_push($_SESSION['mycart'],$spadd);
                        }
                        
                    }
                    include "view/cart/viewcart.php";
                    break;

                case 'delcart':
                    if (isset($_GET['idcart'])) {
                        array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                    }else{
                        $_SESSION['mycart']=[];
                    }
                    header('location: index.php?act=viewcart');
                    break;
                case 'viewcart':
                    include "view/cart/viewcart.php";
                    break;
                case 'bill';
                    include "view/cart/bill.php";
                    break;
                case 'billcomfirm':
                    //tạo bill
                    if (isset($_POST['dongydathang'])&&($_POST['dongydathang'])) {
                        if (isset($_SESSION['user'])) {
                            $iduser = $_SESSION['user']['id'];
                        }else{
                            $id = 0;
                        }
                        $name = $_POST['name'];
                        $address = $_POST['address'];
                        $email = $_POST['email'];
                        $tel = $_POST['tel'];
                        $pttt = $_POST['pttt'];
                        $ngaydathang = date('h:i:sa d/m/Y');
                        $tongdonhang = tongdonhang();
                        //tạo bill
                        $idbill= insert_bill($iduser,$name,$address,$email,$tel,$pttt,$ngaydathang,$tongdonhang);

                        // insert into cart : $session['mycart'] & idbill

                        foreach($_SESSION['mycart'] as $cart){
                            insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[5],$cart[3],$cart[4],$cart[6],$idbill);

                        }
                        //xóa cart
                        $_SESSION['cart']=[];

                        //unset
                        unset($_SESSION['mycart']);
                    }         
                        $bill = loadone_bill($idbill);
                        $billct = loadall_cart($idbill);
                    include "view/cart/billcomfirm.php";
                    break;    
                case'mybill':
                    $listbill=loadall_bill($_SESSION['user']['id']);
                    include "view/cart/mybill.php";
                    break;  
                case 'ctbill':
                    if (isset($_GET['act']) && $_GET['act'] == 'ctbill' && isset($_GET['id'])) {
                        $id = $_GET['id'];
                        include "view/cart/ctbill.php";
                    }
                    break;                           
                case 'gioithieu':
                    include "view/gioithieu.php";
                    break;
                case 'lienhe':
                    include "view/lienhe.php";
                    break;
                default:
                    include "view/home.php";
                    break;
        }
} else {
    include "view/home.php";
}
include "view/footer.php";
ob_end_flush();
