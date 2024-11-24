<main>
    <!-- Related Products Section -->
    <section class="related-products">
        <h2>Sản phẩm dành cho nữ</h2>
        <div class="product-grid">
            <!-- Lấy danh sách sản phẩm thuộc danh mục "nữ" -->
            <?php
                include 'models/sanpham.php';

                // Định nghĩa đường dẫn đến thư mục chứa hình ảnh
                $img_path = "images/";

                // Giả sử id_danh_muc của danh mục "nữ" là 2
                $id_danh_muc = 2;

                // Lấy danh sách sản phẩm thuộc danh mục có id_danh_muc = 2
                $products = loadall_san_pham("", $id_danh_muc);

                if (!empty($products)) { // Kiểm tra nếu có sản phẩm
                    foreach ($products as $product) {
                        extract($product);

                        // Tạo đường dẫn hình ảnh
                        $hinh_full_path = $img_path . $hinh;

                        // Tạo link chi tiết sản phẩm
                        $linksp = "index.php?act=chitietsp&id_san_pham=" . $id_san_pham;

                        // Hiển thị thông tin sản phẩm
                        echo '
                            <div class="product-item">
                                <img src="' . $hinh_full_path . '" alt="' . htmlspecialchars($ten_san_pham) . '">
                                <h3><a href="' . $linksp . '">' . htmlspecialchars($ten_san_pham) . '</a></h3>
                                <p class="price">$' . number_format($gia, 2) . '</p>
                            </div>
                        ';
                    }
                } else {
                    echo "<p>Không có sản phẩm nào trong danh mục này.</p>";
                }
            ?>
        </div>
    </section>
    <section class="new-arrival">
        <h2>Nổi Bật</h2>
        <div class="collections">
            <div class="collection-item man">
                <h3>Thời Trang Nam</h3>
                <button><a href="index.php?act=nam">Shop Now</a></button>
            </div>
            <div class="collection-item woman">
                <h3>Thời Trang Nữ</h3>
                <button><a href="index.php?act=nu">Shop Now</a></button>
            </div>
        </div>
    </section>
</main>