<div class="row">
            <div class="dm">
                <h1>Thêm Mới Danh Mục</h1>
            </div>
            <div class="dm1">
                <form action="index.php?act=adddm" method="POST">
                    <div class="dm2">
                        Mã Loại <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="dm2">
                        Tên Loại <br>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="dm3">
                        <input type="submit" name="themmoi" value="Thêm Mới">
                        <input type="submit" value="Nhập Lại">
                       <a href="index.php?act=listdm"> <input type="button" value="Danh Sách"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>