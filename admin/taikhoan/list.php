<div class="row4">
            <div class="lsp">
                <h1>Danh Sách Tài Khoản</h1>
            </div>
            <div class="lsp1">
                <form action="" method="POST">
                    <div class="lsp2">
                       <table>
                        <tr>
                            <th></th>
                            <th>Mã Tài Khoản</th>
                            <th>Tên Đăng Nhập</th>
                            <th>Mật Khẩu</th>
                            <th>Email</th>
                            <th>Địa Chỉ</th>
                            <th>Điện Thoại</th>
                            <th>Vai Trò</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listtaikhoan as $taikhoan){
                                extract($taikhoan);
                                $xoatk="index.php?act=xoakh&id=".$id;
                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$email.'</td>
                                <td>'.$address.'</td>
                                <td>'.$tel.'</td>
                                <td>'.$role.'</td>
                                <td><a href="'.$xoatk.'"><input type="button" value="Xóa"></td></a>
                            </tr>';
                            }
                        ?>
                       </table>
                    </div>
                </form>
            </div>
        </div>