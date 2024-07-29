<div class="row4">
            <div class="lsp">
                <h1>Thống Kê Sản Phẩm Theo Loại</h1>
            </div>
            <div class="lsp1">
      
                    <div class="lsp2">
                       <table>
                        <tr>
                            <th>STT</th>
                            <th>Loại Hàng</th>
                            <th>Số Lượng</th>
                            <th>Giá Cao Nhất</th>
                            <th>Giá Thấp Nhất</th>
                            <th>Giá Trung Bình</th>
                        </tr>
                        <?php
                                foreach ($listthongke as $thongke){
                                    extract($thongke);
                                    echo '  <tr>
                                    <td>'.$madm.'</td>
                                    <td>'.$tendm.'</td>
                                    <td>'.$countsp.'</td>
                                    <td>'.$maxprice.'</td>
                                    <td>'.$minprice.'</td>
                                    <td>'.$avgprice.'</td>
                                </tr>';
                                }                        
                        ?>
                      
                      
                        
                       </table>
                    </div>
                    <div class="lsp3">
                       <a href="index.php?act=bieudo"><input type="button" value="Xem Biểu Đồ"></a>
                       
                    </div>
          
            </div>
        </div>