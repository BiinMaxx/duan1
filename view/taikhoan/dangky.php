<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">Đăng kí tài khoản</div>
            <div class=" row boxcontent formtaikhoan">
                <form action="index.php?act=dangky" method="post">
                    <div class="row mb10">
                        Tên Đăng Ký
                        <input type="text" name="user">
                    </div>
                    <div class="row mb10">
                        Email
                        <input type="email" name="email">
                    </div>
                    <div class="row mb10">
                        Mật Khẩu
                        <input type="password" name="pass" id="">
                    </div>
                    <div class="row mb10">
                        Địa Chỉ
                        <input type="text" name="address">
                    </div>
                    <div class="row mb10">
                        Điện Thoại
                        <input type="text" name="tel">
                    </div>

                    <input type="submit" value="Đăng Ký" name="dangky">


                    <input type="reset" value="Nhập Lại">

                    <button class="long4"><a href="index.php?act=dangnhap">Đăng Nhập</a></button>

                </form>
                <h2 class="thongbao">
                <?php
                     if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                     }
                ?></h2>
            </div>

        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>