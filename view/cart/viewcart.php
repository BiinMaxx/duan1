<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent cart">
                <table>
                   

                    <?php
                    viewcart(1);
                    ?>

                    <!-- <tr>
                        <td><img src="" alt="" height="80px"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><input type="button" value="Xóa"></td>
                    </tr> -->
                </table>
                <div class="mua">
        <a href="index.php?act=bill"><input type="submit" value="Tiếp Tục Đặt Hàng"></a> <a href="index.php"><input type="button" value="Thêm Sản Phẩm"></a> <a href="index.php?act=delcart"><input type="button" value="Xóa Giỏ Hàng"></a>
    </div>
            </div>
        </div>
    </div>
        <div class="boxphai">
            <?php include "view/boxright.php"; ?>
        </div>
</div>

