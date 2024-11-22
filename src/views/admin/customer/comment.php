<?php
    require_once './src/views/admin/nav.php';
    ?>
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
              <h2>User - Bình Luận </h2>
              <a href="#" class="btn-Admin">View All</a>
            </div>
            <table>
              <thead>
                <tr>
                  <td>user_id</td>
                  <td>san_pham_id</td>
                  <td>san_pham_ten</td>
                  <td>ndung</td>
                 
                  <td>Thao tác</td>
                </tr>
              </thead>
              <tbody>
              <?php foreach($dataCustomerComment as $itemComment): ?>
                <tr>
                  <td><?= $itemComment['user_id'] ?></td>
                  <td><?= $itemComment['san_pham_id'] ?></td>
                  <td><?= $itemComment['san_pham_ten'] ?></td>
                  <td><?= $itemComment['ndung'] ?></td>
                  
                  <td>
                  <button type="button" class="btn btn-danger">
                  <a href="<?= BASE_URL ?>/admin/DeleteKHBL?ID=<?= $itemComment['ndung'] ?>"><ion-icon name="trash-outline"></ion-icon></a>
                  </button>  
                 
                  </td>
                </tr>
                <?php endforeach?>
              </tbody>
            </table>    
          </div>
          <div class="recentCustomers-Admin">
            <div class="cardHeader-Admin">
              <h2>Khách Hàng Top</h2>
            </div>
            <table>
              <tr>
                <td>
                  <div class="imgBx-Admin"><ion-icon name="person-outline"></ion-icon></div>
                </td>
                <td>
                  <h4>Coding World<br /><span>Italy</span></h4>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="imgBx-Admin"><ion-icon name="person-outline"></ion-icon></div>
                </td>
                <td>
                  <h4>Coding World<br /><span>Italy</span></h4>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="imgBx-Admin"><ion-icon name="person-outline"></ion-icon></div>
                </td>
                <td>
                  <h4>Coding World<br /><span>Italy</span></h4>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="imgBx-Admin"><ion-icon name="person-outline"></ion-icon></div>
                </td>
                <td>
                  <h4>Coding World<br /><span>Italy</span></h4>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="imgBx-Admin"><ion-icon name="person-outline"></ion-icon></div>
                </td>
                <td>
                  <h4>Coding World<br /><span>Italy</span></h4>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>