<div class="row mb ">
    <div class="boxtrai mr">     
             <form action="index.php?act=billcomfirm" method="post">
                  <div class="row mb">
                       <h1 class="boxtitle">Cảm ơn</h1>
                        <div class="row boxcontent" style="text-align: center;">
                            <h2>Cảm ơn quý Khách đã đặt hàng</h2>
                        </div>
                    </div>
                        <div class="row mb">
                                <?php
                                if (isset($bill)&&(is_array($bill))) {
                                    extract($bill);
                                }
                                
                                ?>
                                <div class="row mb">
                                    <div class="boxtitle">Thông tin Đơn Hàng</div>
                                    <div class="row boxcontent formtaikhoan" style="text-align: center;">
                                        <li>Mã đơn hàng: PH_<?=$bill['id'];?></li>
                                        <li>Ngày đặt hàng: <?=$bill['ngaydathang'];?></li>
                                        <li>Tổng đơn hàng: <?=$bill['total'];?></li> 
                                        <li>Phương thức thanh toán:<?=$bill['bill_pttt'];?></li> 
                                    </div>
                                </div>
                        </div>
                                
                    <div class="row mb">
                    <div class="boxtitle">Thông tin khách hàng</div>
                        <div class="row boxcontent formtaikhoan">
                            <table>
                                <tbody style="text-align: left;">
                                    <tr>
                                        <td width="20%">Người đặt:</td>
                                        <td style="position: relative; left: 350px"><?=$bill['bill_name'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ:</td>
                                        <td style="position: relative; left: 350px"><?=$bill['bill_address'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td style="position: relative; left: 350px"><?=$bill['bill_email'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Điện thoại:</td>
                                        <td style="position: relative; left: 350px"><?=$bill['bill_tel'];?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mb">
                        <div class="boxtitle">Chi Tiết Đơn Hàng</div>
                        <div class="row boxcontent cart">
                            <table>
                                <?php
                                bill_chi_tiet($billct);
                                ?>
                            </table>
                        </div>
                    </div>
          </form>
    </div>
        <div class="boxphai">
            <?php include "view/boxright.php"; ?>
        </div>
</div>