<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">Đơn Hàng Của Bạn</div>
            <div class="row boxcontent">
                <table>
                    <tr>
                        <th>Mã Đơn Hàng</th>
                        <th>Ngày đặt</th>
                        <th>Số Lượng Mặt Hàng</th>
                        <th>Tổng Giá trị Đơn Hàng</th>
                        <th>Tình Trạng Đơn Hàng</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php
                    if (is_array($listbill)) {
                        foreach($listbill as $bill){
                            extract($bill);
                            $ttdh=get_ttdh($bill['bill_status']);
                            $countsp=loadall_cart_count($bill['id']);
                            echo '<tr>
                                    <td>PH_'.$bill['id'].'</td>
                                    <td>'.$bill['ngaydathang'].'</td>
                                    <td>'.$countsp.'</td>
                                    <td>'.$bill['total'].'</td>
                                    <td>'.$ttdh.'</td>
                                    <td><a href="index.php?act=ctbill&id='.$bill['id'].'">Xem chi tiết</a></td>
                                </tr>';
                        }
                    }
                    ?>
                  
                </table>
            </div>
        </div>
    </div>
    <div class="boxphai">
            <?php include "view/boxright.php"; ?>
        </div>
</div>