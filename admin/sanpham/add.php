<div class="row3">
            <div class="sp">
                <h1>Thêm Mới Sản Phẩm</h1>
            </div>
            
            <div class="sp1">
                <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
                    <div class="sp2">
                    <label for="">Danh Mục</label><br>
                        <select name="iddm">
                            <?php
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'"> '.$name.' </option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="sp2">
                        <label for="">Tên Sản Phẩm</label><br>
                        <input type="text" name="tensp">
                    </div>
                    <div class="sp2">
                    <label for="">Giá Sản Phẩm</label><br>
                        <input type="text" name="giasp">
                    </div>
                    <div class="sp2">
                        Ảnh Sản phẩm <br>
                        <input type="file" name="hinh" id="">
                    </div>
                    <div class="sp2">
                        Mô Tả Sản phẩm <br>
                        <textarea name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="dm3">
                        <input type="submit" name="themmoi" value="Thêm Mới">
                        <input type="submit" value="Nhập Lại">
                       <a href="index.php?act=listsp"> <input type="button" value="Danh Sách"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
</div>