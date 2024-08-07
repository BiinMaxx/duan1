<?php
function loadall_thongke(){
    $sql="SELECT danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.don_gia) as minprice, max(sanpham.don_gia) as maxprice, avg(sanpham.don_gia) as avgprice";
    $sql.=" FROM sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql.=" group by danhmuc.id order by danhmuc.id desc";
    $listtk=pdo_query($sql);
    return $listtk;
}


function viewcart($del){
    global $img_path;
    $tong=0;
    $i=0;
    if ($del==1) {
        $xoasp_th ='<th>Thao Tác</th>';
    }else{
        $xoasp_th ='';
    }
    echo'
    <tr>
        <th>Hình</th>
        <th>Sản Phẩm</th>
        <th>SIZE</th>
        <th>Đơn Giá</th>
        <th>Số Lượng</th>
        <th>Thành Tiền</th>
        '.$xoasp_th.'
    </tr>';
    
    foreach($_SESSION['mycart'] as $cart){
        $hinh = $img_path.$cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        if ($del==1) {
            $xoasp_td = '<td><a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a></td>';
        }else{
            $xoasp_td ='';
        }
        echo '<tr>
                <td><img src="'.$hinh.'" alt="" height="80px"></td>
                <td>'.$cart[1].'</td>
                <td>'.$cart[5].'</td>
                <td>'.$cart[3].'</td>
                <td>'.$cart[4].'</td>
                <td>'.$ttien.'</td>
                '.$xoasp_td.'
             </tr>';
        $i+=1;
    }
    echo '  <tr>
                <td colspan="3">Tổng Đơn Hàng</td>
                <td colspan="4">=   '.$tong.'</td>
            </tr>';
}

function bill_chi_tiet($listbill){
    global $img_path;
    $tong=0;
    $i=0;
    echo'
    <tr>
        <th>Hình</th>
        <th>Sản Phẩm</th>
        <th>SIZE</th>
        <th>Đơn Giá</th>
        <th>Số Lượng</th>
        <th>Thành Tiền</th>
    </tr>';
    
    foreach( $listbill as $cart){
        $hinh = $img_path.$cart['img'];
        $tong += $cart['thanhtien'];
        echo '<tr>
                <td><img src="'.$hinh.'" alt="" height="80px"></td>
                <td>'.$cart['name'].'</td>
                <td>'.$cart['size'].'</td>
                <td>'.$cart['price'].'</td>
                <td>'.$cart['soluong'].'</td>
                <td>'.$cart['thanhtien'].'</td>
             </tr>';
        $i+=1;
    }
    echo '  <tr>
                <td colspan="3">Tổng Đơn Hàng</td>
                <td colspan="4">=   '.$tong.'</td>
            </tr>';
}
function tongdonhang(){
    $tong=0;
    foreach($_SESSION['mycart'] as $cart){
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}

function insert_bill($iduser,$name,$address,$email,$tel,$pttt,$ngaydathang,$tongdonhang){
    $sql = "INSERT INTO bill(iduser,bill_name,bill_address,bill_email,bill_tel,bill_pttt,ngaydathang,total) values('$iduser','$name','$address','$email','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_lastIsertID($sql);
}


function insert_cart($iduser,$idpro,$img,$name,$size,$price,$soluong,$thanhtien,$idbill){
    $sql = "INSERT INTO cart(iduser,idpro,img,name,size,price,soluong,thanhtien,idbill) values ('$iduser','$idpro','$img','$name','$size','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}

function loadone_bill($id){
    $sql = "SELECT * FROM bill WHERE id=" .$id;
    $bill = pdo_query_one($sql);
    return $bill;
}

function loadall_cart($idbill){
    $sql = "SELECT * FROM cart WHERE idbill=" .$idbill;
    $bill = pdo_query($sql);
    return $bill;
}


function loadall_cart_count($idbill){
    $sql = "SELECT * FROM cart WHERE idbill=" .$idbill;
    $bill = pdo_query($sql);
    return  sizeof($bill);
}

function loadall_bill($iduser){
    $sql = "SELECT * FROM bill WHERE 1";
    if ($iduser>0) $sql .= " AND iduser=" .$iduser;
    $sql .= " ORDER BY id DESC";
    $listbill = pdo_query($sql);
    return $listbill;
}

function loadone_donhangct($id){
    $sql="select * from bill where id=$id";
    $load_oneill = pdo_query_one($sql);
    return $load_oneill;
}
function update_donhangct($id, $bill_status) {
    $sql = "UPDATE bill SET bill_status='".$bill_status."' WHERE id=$id";
    
    // Chuẩn bị và thực thi truy vấn
    
    pdo_execute($sql);
}

function get_ttdh($n){
    switch ($n) {
        case '0':
            $tt= "Đơn hàng mới";
            break;
        case '1':
             $tt= "Đang xử lý";
            break;
        case '2':
            $tt= "Đang giao hàng";
            break;
        case '3':
            $tt= "Đã nhận hàng";
            break;
        
        default:
            $tt= "Đơn hàng mới";
            break;
    }
    return $tt;
}
?>