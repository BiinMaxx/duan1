<?php
ob_start();
include "../model/pdo.php";
include "header.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";

//controller
if (isset($_GET['act'])) {
     $act = $_GET['act'];
     switch ($act) {
          case 'adddm':
               // ktra ng dung cos click vaof nut add hay kh
               if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm Thành Công";
               }

               include "danhmuc/add.php";
               break;
          case 'listdm':
               $listdanhmuc = loadall_danhmuc();
               include "danhmuc/list.php";
               break;
          case 'xoadm':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_danhmuc($_GET['id']);
               }
               $listdanhmuc = loadall_danhmuc();
               include "danhmuc/list.php";
               break;
          case 'suadm':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $dm = loadone_danhmuc($_GET['id']);
               }
               include "danhmuc/update.php";
               break;
          case 'updatedm':
               if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($tenloai, $id);
                    $thongbao = "Cập Nhật Thành Công";
               }
               $listdanhmuc = loadall_danhmuc();
               include "danhmuc/list.php";
               break;


          // Controller san pham 
          case 'addsp':
               // ktra ng dung cos click vaof nut add hay kh
               if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    }
                    insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                    $thongbao = "Thêm Thành Công";
               }
               $listdanhmuc = loadall_danhmuc();
               include "sanpham/add.php";
               break;
          case 'listsp':
               if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
               } else {
                    $kyw = '';
                    $iddm = 0;
               }
               $listdanhmuc = loadall_danhmuc();
               $listsanpham = loadall_sanpham($kyw, $iddm);
               include "sanpham/list.php";
               break;
          case 'xoasp':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_sanpham($_GET['id']);
               }
               $listsanpham = loadall_sanpham();
               include "sanpham/list.php";
               break;
          case 'suasp':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sanpham = loadone_sanpham($_GET['id']);
               }
               $listdanhmuc = loadall_danhmuc();
               include "sanpham/update.php";
               break;
          case 'updatesp':
               if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    }
                    update_sanpham($id, $tensp, $giasp, $hinh, $mota, $iddm);
                    $thongbao = "Cập Nhật Thành Công";
               }
               $listdanhmuc = loadall_danhmuc();
               $listsanpham = loadall_sanpham();
               include "sanpham/list.php";
               break;
          
          case 'detailsp':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $sanpham = loadone_sanpham($_GET['id']);
                    }
               include "sanpham/detailsp.php";
                    $listdanhmuc = loadall_danhmuc();
               break;
          case 'login':
               break;
          case 'logout':
               break;
          case 'dskh':
               $listtaikhoan = loadall_taikhoan();
               include "taikhoan/list.php";
               break;
          case 'xoakh':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_taikhoan($_GET['id']);
               }
               $listtaikhoan = loadall_taikhoan();
               include "taikhoan/list.php";
               break;
          case 'dsbl':

               $listbinhluan = loadall_binhluan(0);
               include "binhluan/list.php";
               break;
          case 'xoabl':
               if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_binhluan($_GET['id']);
               }
               $listbinhluan = loadall_binhluan(0);
               include "binhluan/list.php";
               break;
          case 'thongke':
               $listthongke = loadall_thongke();
               include "thongke/list.php";
               break;
          case 'bieudo':
               $listthongke = loadall_thongke();
               include "thongke/bieudo.php";
               break;
          case 'listbill':
               $listbill=loadall_bill(0);
               include "bill/listbill.php";
               break;   

              case 'donhangct':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $donhangct = loadone_donhangct($id);
                
                // Kiểm tra xem có dữ liệu không trước khi include file
                if ($donhangct) {
                    include('bill/onebill.php'); // Nơi hiển thị thông tin đơn hàng chi tiết
                } else {
                    echo "Không tìm thấy đơn hàng."; // Hoặc xử lý thông báo nếu không tìm thấy đơn hàng
                }
            }      
            break;      
            case 'update_donhangct':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $id = $_GET['id'];
                    $donhangct = loadone_donhangct($id);
            
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bill_status'])) {
                        $bill_status = $_POST['bill_status'];
            
                        // Thực hiện cập nhật trạng thái đơn hàng trong cơ sở dữ liệu
                        update_donhangct($id, $bill_status);
                        // Chuyển hướng hoặc thực hiện hành động tiếp theo sau khi cập nhật
            
                        // Ví dụ: chuyển hướng người dùng sau khi cập nhật
                        header('Location: index.php?act=donhangct&id='.$id);
                        exit(); // Kết thúc quá trình thực thi để tránh tiếp tục chạy mã
                    }
                }
                include('bill/updatebill.php');
                break;

          

          default:
               include "home.php";
               break;
     }
} else {
     include "home.php";
}

include "footer.php";

ob_end_flush();
?>
