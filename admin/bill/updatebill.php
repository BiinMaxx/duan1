<!-- Content Wrapper. Contains page content -->
<div class="row4" >
    <!-- Content Header (Page header) -->
                <div class="lsp">
                    <h1>Sửa Trạng thái Đơn hàng</h1>
                </div>

    <!-- Main content -->
                    <div class="card">
                        <div class="card-body">
                        <form action="index.php?act=update_donhangct&id=<?= $id?>" method="POST">
                                
                            
                                <?php
                                // Mảng ánh xạ giá trị và nhãn của các trạng thái đơn hàng
                            $trangThaiDonHang = [
                                0 => 'Đơn hàng mới',
                                1 => 'Đang xử lý',
                                2 => 'Đang giao hàng',
                                3 => 'Đã nhận hàng'
                                ];
                                ?>
                                <div class="mb-3">
                                        <label for="bill_status" class="form-label">Chọn trạng thái mới</label>
                                        <select class="form-select" name="bill_status">
                                            <?php foreach ($trangThaiDonHang as $value => $label) {
                                                $selected = ($value == $bill_status) ? 'selected' : '';
                                                echo "<option value='$value' $selected>$label</option>";
                                            } ?>
                                        </select>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary" name="suadonhangct">Cập nhật trạng thái</button>
                                        <a href="index.php?act=donhangct&id=<?= $id ?>"class="btn btn-secondary">Quay lại</a>
                                    </div>
                                </form>
                        </div>
                    </div>
</div>
