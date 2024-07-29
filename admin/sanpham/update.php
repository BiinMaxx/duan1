<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "no photo";
}
?>

<div class="row3">
    <div class="sp">
        <h1>Cập Nhật Sản phẩm</h1>
    </div>
    <div class="sp1">
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="sp2">
            <select name="iddm">
                <option value="0" selected>Tất Cả</option>
                <?php
                foreach($listdanhmuc as $danhmuc){
                    if ($iddm==$danhmuc['id']) 
                    echo '<option value="'.$danhmuc['id'].'" selected>'.$danhmuc['name'].'</option>';
                    else echo '<option value="'.$danhmuc['id'].'">'.$danhmuc['name'].'</option>';
                }
                ?>
            </select>
            </div>
            <div class="sp2">
                Tên Sản phẩm <br>
                <input type="text" name="tensp" value="<?= $name ?>">
            </div>
            <div class="sp2">
                Giá Sản phẩm <br>
                <input type="text" name="giasp" value="<?=$don_gia?>">
            </div>
            <div class="sp2">
                Ảnh Sản phẩm <br>
                <input type="file" name="hinh" id="">
                <?=$hinh?>
            </div>
            <div class="sp2">
                Mô Tả Sản phẩm <br>
                <textarea name="mota" id="" cols="30" rows="10" ><?=$mo_ta?></textarea>
            </div>
            <div class="dm3">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="Cập Nhât">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listsp"> <input type="button" value="Danh Sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>