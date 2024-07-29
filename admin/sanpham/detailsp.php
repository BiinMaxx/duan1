<div class="row4">
<div class="col-12 mb-4">
            <div class="product-detail-header">
                <h1>Chi tiết Sản Phẩm</h1>
            </div>
        </div>
            <!-- Hình ảnh sản phẩm -->
            <div class="col-md-6">
                <img src="../upload/<?= $sanpham['img'] ?>" class="img-fluid rounded" alt="<?= $sanpham['name'] ?>">
            </div>
            <!-- Thông tin sản phẩm -->
            <div class="col-md-6">
                <h2><?= $sanpham['name'] ?></h2>
                <p class="text-muted">Loại sản phẩm: <?= load_ten_dm($sanpham['iddm']) ?></p>
                <div class="price mt-3 mb-4">
                    <h3 class="text-danger"><?= number_format($sanpham['don_gia'], 0, ',', '.') ?> VND</h3>
                    <!-- <p><small>Giá mới: <?= number_format($sanpham['don_gia'], 0, ',', '.') ?> VND</small></p> -->
                </div>
                <!-- <div class="buttons mb-4">
                    <button class="btn btn-primary btn-lg">
                        <i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng
                    </button>
                    <button class="btn btn-outline-secondary btn-lg ml-2">
                        <i class="fas fa-heart"></i> Thêm vào yêu thích
                    </button>
                </div>
                <div class="social-share mt-4">
                    <a href="#" class="text-muted mr-3"><i class="fab fa-facebook-square fa-2x"></i></a>
                    <a href="#" class="text-muted mr-3"><i class="fab fa-twitter-square fa-2x"></i></a>
                    <a href="#" class="text-muted mr-3"><i class="fas fa-envelope-square fa-2x"></i></a>
                    <a href="#" class="text-muted"><i class="fas fa-rss-square fa-2x"></i></a>
                </div>
            </div> -->
            <div class="row5">
            <div class="col-12">
                <ul class="nav nav-tabs" id="product-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Mô tả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Bình luận</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Đánh giá</a>
                    </li>
                </ul>
                <div class="tab-content mt-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                        <?= $sanpham['mo_ta'] ?>
                    </div>
                    <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                        <!-- Nội dung bình luận -->
                    </div>
                    <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">
                        <!-- Nội dung đánh giá -->
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Mô tả, bình luận và đánh giá sản phẩm -->
       