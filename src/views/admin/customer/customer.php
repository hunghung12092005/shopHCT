  

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
                  <td>Ten_user</td>
                  <td>Password</td>
                  <td>Email</td>
                  <td>Dia_chi</td>
                  <td>Role</td>
                  <td>Thao tác</td>
                </tr>
              </thead>
              <tbody>
              <?php foreach($dataCustomer as $itemCustomer): ?>
                <tr>
                  <td><?= $itemCustomer['id'] ?></td>
                  <td><?= $itemCustomer['ten_user'] ?></td>
                  <td><?= $itemCustomer['password'] ?></td>
                  <td><?= $itemCustomer['email'] ?></td>
                  <td><?= $itemCustomer['dia_chi'] ?></td>
                  <td><?= $itemCustomer['role'] ?></td>
                  <td>
                  <button type="button" class="btn btn-danger">
                  <a href="<?= BASE_URL ?>/admin/DeleteKH?ID=<?= $itemCustomer['id'] ?>"><ion-icon name="trash-outline"></ion-icon></a>
                  </button>  
                  <button type="button" class="btn btn-danger">
                  <a href="<?= BASE_URL ?>/admin/CommentKH?ID=<?= $itemCustomer['id'] ?>"> <ion-icon name="eye-outline"></ion-icon></a>
                  </button>  
                  </td>
                </tr>
                <?php endforeach?>
              </tbody>
            </table>    
          </div>
          
        </div>
      </div>
      
  </body>
