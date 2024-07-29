<?php
if (isset($id)) {

    $bill = loadone_bill($id);
    $billDetails = loadall_cart($id);
}
?>

<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">Chi Tiết Đơn Hàng</div>
            <div class="row boxcontent">
                <table>
                    <?php
                    if (isset($billDetails) && is_array($billDetails)) {
                        bill_chi_tiet($billDetails);
                    } else {
                        echo "<tr><td>Không có sản phẩm nào trong đơn hàng này.</td></tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>
