<div class="row mb ">
    <div class="boxtrai mr">
        <form action="index.php?act=billcomfirm" method="post">
                    <div class="row mb">
                        <h1 class="boxtitle">THÔNG TIN KHÁCH HÀNG</h1>
                        <div class="row boxcontent formtaikhoan">
                            <table>
                                <?php
                                if (isset($_SESSION['user'])) {
                                $name=$_SESSION['user']['user']; 
                                $address=$_SESSION['user']['address'];
                                $email=$_SESSION['user']['email'];
                                $tel=$_SESSION['user']['tel'];
                                }else{
                                    $name="";
                                    $address="";
                                    $email="";
                                    $tel="";
                                }
                                
                                ?>

                                <tr>
                                    <td width="20%">Người đặt</td>
                                    <td><input type="text" name="name" value="<?php echo $name ?>"></td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td><input type="text" name="address" value="<?php echo $address ?>"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="text" name="email" value="<?php echo $email ?>"></td>
                                </tr>
                                <tr>
                                    <td>Điện thoại</td>
                                    <td><input type="text" name="tel" value="<?php echo $tel ?>"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row mb">
                        <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                        <div class="row boxcontent formtaikhoan">
                            <table>
                                <tr>
                                    <td><input type="radio" value="1" name="pttt" checked>Trả tiền khi nhận hàng</td>
                                    <td><input type="radio" value="2" name="pttt" >Chuyển khoản ngân hàng</td>
                                    <td><input type="radio" value="3" name="pttt" >Thanh toán online</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row mb">
                        <div class="boxtitle">GIỎ HÀNG</div>
                        <div class="row boxcontent cart">
                            <table>
                                <?php
                                viewcart(0);
                                ?>
                            </table>
                        </div>
                    </div>
                    <div class="row mb">
                      <input type="submit" name="dongydathang" value="ĐỒNG Ý ĐẶT HÀNG">  
                    </div>
        </form>
    </div>
        <div class="boxphai">
            <?php include "view/boxright.php"; ?>
        </div>
</div>