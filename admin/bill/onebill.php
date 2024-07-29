<div class="row4">
    <div class="lsp">
        <h1>Danh Sách Đơn Hàng</h1>
    </div>
    <div class="lsp1">
        <form action="index.php?act=listbill" method="POST">
            <div class="lsp2">
                <table>
                    <tr>
                        
                        <th>Mã Đơn Hàng</th>
                        <th>Khách Hàng</th>
                        <th>Số Loại Hàng</th>
                        <th>Giá trị Đơn Hàng</th>
                        <th>Tình Trạng Đơn Hàng</th>
                        <th>Ngày Đặt Hàng</th>
                        <th>Tương Tác</th>
                      
                    </tr>
                    <?php if ($donhangct): ?>
                                    <?php
                                             $kh=$donhangct["bill_name"].'
                                             <br> '.$donhangct["bill_email"].'
                                             <br> '.$donhangct["bill_address"].'
                                             <br> '.$donhangct["bill_tel"];                                             
                                             $countsp=loadall_cart_count($donhangct["id"]);
                                        $ttdh=get_ttdh($donhangct['bill_status']);
                                        $sua_donhangct = 'index.php?act=update_donhangct&id='.$id;

                                        ?>
                                        <tr>
                                            <th><?= $donhangct['id'] ?></th>
                                            <th><?= $kh ?></th>
                                            <th><?= $countsp ?></th>
                                            <th><?= $donhangct['total'] ?></th>
                                            <th style="color:red;"><?= $ttdh ?></th>
                                            <th><?= $donhangct['ngaydathang'] ?></th>
                                            <th><a href="<?= $sua_donhangct ?>"><input type="button" value="Sửa"></a></th>
                                        
                                            
                                        </tr>
                                    
                                       <?php
                                       endif;
                                        ?>
                </table>
            </div>
        </form>
    </div>
</div>