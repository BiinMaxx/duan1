<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">TÀI KHOẢN</div>
                <div class="row boxcontent formtaikhoan">
                    <?php
                    if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                        ?>
                            <div class="row mb10">
                            Xin Chào  <strong><?=$user?></strong>
                        </div>
                        <div class="row mb10">
                            <li>
                                <a href="index.php?act=mybill">Đơn Hàng của Tôi</a>
                            </li>
                            <li>
                                <a href="index.php?act=quenmk">Quên Mật Khẩu</a>
                            </li>
                            <li>
                                <a href="index.php?act=edit_taikhoan">Cập Nhật Tài Khoản</a>
                            </li>
                            <?php if($role==1){?>
                            <li>
                                <a href="admin/index.php">Đăng Nhập Admin</a>
                            </li>
                            <?php }?>
                            <li>
                                <a href="index.php?act=thoat">Đăng Xuất</a>
                            </li>
                        </div>
                        <?php

                    }else{

                    
                    ?>
                    <form action="index.php?act=dangnhap" method="POST">
                        <div class="row mb10">
                            Tên Đăng Nhập <br>
                            <input type="text" name="user" id="">
                        </div>
                        <div class="row mb10">
                            Mật Khẩu<br>
                            <input type="password" name="pass" id="">
                        </div>
                        
                        <div class="row mb10">
                            <input type="submit" value="Đăng Nhập" name="dangnhap">
                        </div>
                    </form>
                    <li>
                        <a href="">Quên Mật Khẩu</a>
                    </li>
                    <li>
                        <a href="index.php?act=dangky">Đăng Ký Thành Viên</a>
                    </li>
                    <?php }?>
                </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>
