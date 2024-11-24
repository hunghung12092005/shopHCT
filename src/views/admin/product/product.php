  <!-- navigation -->
  <?php
  require_once './src/views/admin/nav.php';
  ?>

  <!-- main -->
  <div class="main-Admin col-md-2">

    <div class="topbar-Admin">
      <div class="toggle-Admin">
        <ion-icon name="menu-outline"></ion-icon>
      </div>
      <div class="search-Admin">
        <label>
          <input type="text" placeholder="Search here" />
        </label>
      </div>
      <div class="user-Admin">
        <img src="https://i.ytimg.com/vi/I3YFu0lvD7o/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBkWfUXXwcYxxPBjvQ8uX2NGvHGiA" />
      </div>
    </div>

<!-- chia Page -->
      <div class="d-flex justify-content-center align-items-center">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item <?= $currentPage == 1 ? 'disabled' : '' ?>">
              <a class="page-link" href="?page=<?= $currentPage - 1 ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
              <li class="page-item <?= $currentPage == $i ? 'active' : '' ?>">
                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
              </li>
            <?php endfor; ?>
            <li class="page-item <?= $currentPage == $totalPages ? 'disabled' : '' ?>">
              <a class="page-link" href="?page=<?= $currentPage + 1 ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    <div class="details-Admin">
      <div class="recentOrders-Admin">
        <div class="cardHeader-Admin">
          <h2>Khách Hàng</h2>
          <a href="#" class="btn-Admin">View All</a>
        </div>
        <table>
          <thead>
            <tr>
              <td>ID</td>
              <td>Mã sản phẩm</td>
              <td>Tên sản phẩm</td>
              <td>Mô tả</td>
              <td>Giá bán</td>
              <td>Hình ảnh</td>
              <td>Lượt xem</td>
              <td>Khuyến mại</td>
              <td>Thuộc Danh Mục</td>
              <td>Lượt Mua </td>
              <td>Giới tính</td>
              <td>Size</td>
              <td>Thao Tác</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($dataProduct as $itemProduct): ?>
              <tr>
                <td><?= $itemProduct['id'] ?></td>
                <td><?= $itemProduct['ma_san_pham'] ?></td>
                <td><?= $itemProduct['ten_san_pham'] ?></td>
                <td><?= $itemProduct['mo_ta'] ?></td>
                <td><?= $itemProduct['gia_ban'] ?></td>
                <td>
                  <img id="zoomableImage" src="<?= $itemProduct['hinh_anh_prod'] ?>" alt="" style="width: 50px; height: 50px; cursor: pointer;">
                </td>
                <td><?= $itemProduct['luot_xem'] ?></td>
                <td><?= $itemProduct['khuyen_mai'] ?></td>
                <td><?= $itemProduct['ten_danh_muc'] ?></td>
                <td><?= $itemProduct['luot_mua'] ?></td>
                <td><?= $itemProduct['gioi_tinh'] ?></td>
                <td><?= $itemProduct['size'] ?></td>
                <td>
                  <button type="button" class="btn btn-danger m-2">
                    <a href="<?= BASE_URL ?>/admin/DeleteKH?ID=<?= $itemProduct['id'] ?>"><ion-icon name="trash-outline"></ion-icon></a>
                  </button>
                  <button type="button" class="btn btn-danger m-2">
                    <a href="<?= BASE_URL ?>/admin/CommentKH?ID=<?= $itemProduct['id'] ?>"> <ion-icon name="eye-outline"></ion-icon></a>
                  </button>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>

      </div>
      
    </div>
  </div>

  <script>
    document.getElementById('zoomableImage').onclick = function() {
      // Create overlay
      const overlay = document.createElement('div');
      overlay.style.position = 'fixed';
      overlay.style.top = '0';
      overlay.style.left = '0';
      overlay.style.width = '100%';
      overlay.style.height = '100%';
      overlay.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
      overlay.style.display = 'flex';
      overlay.style.justifyContent = 'center';
      overlay.style.alignItems = 'center';
      overlay.style.zIndex = '1000';

      // Create image element for zoomed image
      const zoomedImage = document.createElement('img');
      zoomedImage.src = this.src;
      zoomedImage.alt = 'Zoomed Image';
      zoomedImage.style.maxWidth = '90%';
      zoomedImage.style.maxHeight = '90%';

      // Append image to overlay
      overlay.appendChild(zoomedImage);

      // Append overlay to body
      document.body.appendChild(overlay);

      // Close overlay on click
      overlay.onclick = function() {
        document.body.removeChild(overlay);
      };
    };
  </script>
  </body>