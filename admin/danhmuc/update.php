<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row">
            <div class="dm">
                <h1>Cập Nhật Danh Mục</h1>
            </div>
            <div class="dm1">
                <form action="index.php?act=updatedm" method="POST">
                    <div class="dm2">
                        Mã Loại <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="dm2">
                        Tên Loại <br> 
                    <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;?>">
                    </div>
                    <div class="dm3">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                        <input type="submit" name="capnhat" value="Cập Nhật">
                        <input type="reset" value="Nhập Lại">
                       <a href="index.php?act=listdm"> <input type="button" value="Danh Sách"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>