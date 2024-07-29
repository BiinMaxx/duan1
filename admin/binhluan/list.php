<div class="row4">
            <div class="lsp">
                <h1>Danh Sách Bình Luận</h1>
            </div>
            <div class="lsp1">
      
                    <div class="lsp2">
                       <table>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Nội Dung</th>
                            <th>IdUser</th>
                            <th>IdPro</th>
                            <th>Ngày Bình Luận</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listbinhluan as $binhluan){
                                extract($binhluan);
                                $xoabl="index.php?act=xoabl&id=".$id;
                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$noidung.'</td>
                                <td>'.$iduser.'</td>
                                <td>'.$idpro.'</td>
                                <td>'.$ngaybinhluan.'</td>
                                <td><a href="'.$xoabl.'"><input type="button" value="Xóa"></td></a>
                            </tr>';
                            }
                        ?>
                       </table>
                    </div>
          
            </div>
        </div>