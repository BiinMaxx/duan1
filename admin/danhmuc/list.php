<div class="row2">
            <div class="ldm">
                <h1>Danh Sách Danh Mục</h1>
            </div>
            <div class="ldm1">
                <form action="" method="POST">
                    <div class="ldm2">
                       <table>
                        <tr>
                            <th></th>
                            <th>Mã Loại</th>
                            <th>Tên Loại</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                $suadm="index.php?act=suadm&id=".$id;
                                $xoadm="index.php?act=xoadm&id=".$id;
                                echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a>
                                    <a href="'.$xoadm.'"><input type="button" value="Xóa"></td></a>
                                </tr>';
                            }
                        ?>
                       </table>
                    </div>
                    <div class="ldm3">
                        <input type="button" value="Chọn Tất Cả">
                        <input type="button" value="Bỏ Chọn Tất Cả">
                        <input type="button" value="Xóa Các Mục Đã Chọn">
                       <a href="index.php?act=adddm"> <input type="button" value="Nhập Thêm"></a>
                    </div>
                </form>
            </div>
        </div>