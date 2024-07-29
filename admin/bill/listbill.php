<div class="row4">
    <div class="lsp">
        <h1>Danh Sách Đơn Hàng</h1>
    </div>
    <div class="lsp1">
        <form action="index.php?act=listbill" method="POST">
            <div class="lsp2">
                <table>
                    <tr>
                        <th></th>
                        <th>Mã Đơn Hàng</th>
                        <th>Khách Hàng</th>
                        <th>Số Loại Hàng</th>
                        <th>Giá trị Đơn Hàng</th>
                        <th>Tình Trạng Đơn Hàng</th>
                        <th>Ngày Đặt Hàng</th>
                        <th>Tương Tác</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $kh=$bill["bill_name"].'
                        <br> '.$bill["bill_email"].'
                        <br> '.$bill["bill_address"].'
                        <br> '.$bill["bill_tel"];
                        $ttdh=get_ttdh($bill["bill_status"]);
                        $countsp=loadall_cart_count($bill["id"]);
                        echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>PH_' .$bill['id'] . '</td>
                                <td>' . $kh . '</td>
                                <td>' . $countsp . '</td>
                                <td>' . $bill["total"] . '</td>
                                <td scope="col" style="color:red;">' . $ttdh . '</td>
                                <td>' . $bill["ngaydathang"] . '</td>
                                <td><a href="index.php?act=donhangct&id=' . $bill['id'] . '"><input type="button" value="xem trạng thái"></a></td>
                            </tr>';
                    }
                    ?>
                </table>
            </div>
        </form>
    </div>
</div>