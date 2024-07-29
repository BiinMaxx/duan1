<div class="row4">
    <div class="lsp">
        <h1>Danh Sách Sản Phẩm</h1>
    </div>
    <div class="lsp1">
        <form action="index.php?act=listsp" method="POST">
            <div class="lsp2">
                <div class="lsp4">
                    <form action="" method="POST">
                        <input type="text" name="kyw">
                        <select name="iddm">
                            <option value="0" selected>Tất Cả</option>
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="' . $id . '"> ' . $name . ' </option>';
                            }
                            ?>
                        </select>
                        <input type="submit" name="listok" value="OK">
                    </form>
                </div>
                <table>
                    <tr>
                        <th></th>
                        <th>Mã Loại</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Ảnh</th>
                        <th>Lượt Xem</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id=" . $id;
                        $xoasp = "index.php?act=xoasp&id=" . $id;
                        $detailsp = "index.php?act=detailsp&id=" .$id;
                        $hinhpath = "../upload/" . $img;
                        if (is_file($hinhpath)) {
                            $hinh = "<img src='" . $hinhpath . "' height='80'>";
                        } else {
                            $hinh = "no photo";
                        }
                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td>' . $don_gia . '</td>
                                <td>' . $hinh . '</td>
                                <td>' . $view . '</td>
                                <td>
                                <a href=" ' . $detailsp . '"><input type="button" value="Xem chi tiết"></a>
                                <a href="' . $suasp . '"><input type="button" value="Sửa"></a>
                                <a href="' . $xoasp . '"><input type="button" value="Xóa"></a>
                                </td>
                            </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="lsp3">
                <input type="button" value="Chọn Tất Cả">
                <input type="button" value="Bỏ Chọn Tất Cả">
                <input type="button" value="Xóa Các Mục Đã Chọn">
                <a href="index.php?act=addsp"> <input type="button" value="Nhập Thêm"></a>
            </div>
        </form>
    </div>
</div>
