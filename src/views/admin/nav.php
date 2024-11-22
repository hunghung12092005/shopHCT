<style>
        .searchBox,.cart-shop {
            display: <?php echo  $_SESSION['admin'] ? 'none' : 'block'; ?>; /* Ẩn component nếu admin đăng nhập */
        }
        .navbar{
          display: <?php echo  $_SESSION['admin'] ? 'none' : 'block'; ?>; /* Ẩn component nếu admin đăng nhập */

        }
    </style>
<div class="navigation-Admin col-md-5">
        <ul>
          <li>
            <a href="#">
              <span class="title-Admin" style="font-size: 1.2em; font-weight: 500">HCT CLOTHER</span>
            </a>
          </li>
          <li class="hovered-Admin">
            <a href="<?= BASE_URL.'/admin' ?>" class="active">
              <span class="icon-Admin"><ion-icon name="home-outline"></ion-icon></span>
              <span class="title-Admin">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="<?= BASE_URL.'/admin/customers' ?>">
              <span class="icon-Admin"><ion-icon name="people-outline"></ion-icon></span>
              <span class="title-Admin">Customers</span>
            </a>
          </li>
          <li>
            <a href="<?= BASE_URL.'/admin/products' ?>">
              <span class="icon-Admin"><ion-icon name="boat-outline"></ion-icon></span>
              <span class="title-Admin">Products</span>
            </a>
          </li>
          <li>
            <a href="<?= BASE_URL.'/admin/cart' ?>">
              <span class="icon-Admin"><ion-icon name="bag-handle-outline"></ion-icon></span>
              <span class="title-Admin">Cart</span>
            </a>
          </li>
          <li>
            <a href="<?= BASE_URL.'/admin/statistical' ?>">
              <span class="icon-Admin"><ion-icon name="stats-chart-outline"></ion-icon></span>
              <span class="title-Admin">Statistical </span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon-Admin"><ion-icon name="settings-outline"></ion-icon></span>
              <span class="title-Admin">Settings</span>
            </a>
          </li>
          <li>
            <a href="<?= BASE_URL.'/logout' ?>">
              <span class="icon-Admin"><ion-icon name="log-out-outline"></ion-icon></span>
              <span class="title-Admin">Sign Out</span>
            </a>
          </li>
        </ul>
      </div>