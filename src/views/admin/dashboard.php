  

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
        <h4 class="m-3 text-secondary">Thống kê trong ngày</h4>
        <!-- thống kê hàng ngày -->
        <div class="cardBox-Admin">
          <div class="card-Admin">
            <div>
              <div class="numbers-Admin"><?= $dailyView ?></div>
              <div class="cardName-Admin">Daily Views</div>
            </div>
            <div class="iconBx-Admin">
              <ion-icon name="eye-outline"></ion-icon>
            </div>
          </div>
          <div class="card-Admin">
            <div>
              <div class="numbers-Admin">80</div>
              <div class="cardName-Admin">Sales</div>
            </div>
            <div class="iconBx-Admin">
              <ion-icon name="cart-outline"></ion-icon>
            </div>
          </div>
          <div class="card-Admin">
            <div>
              <div class="numbers-Admin"><?= $dailyComment ?></div>
              <div class="cardName-Admin">Comments</div>
            </div>
            <div class="iconBx-Admin">
              <ion-icon name="chatbubbles-outline"></ion-icon>
            </div>
          </div>
          <div class="card-Admin">
            <div>
              <div class="numbers-Admin">$7,842</div>
              <div class="cardName-Admin">Earning</div>
            </div>
            <div class="iconBx-Admin">
              <ion-icon name="cash-outline"></ion-icon>
            </div>
          </div>
        </div>
        <h4 class="m-3 text-secondary">Thống kê theo tháng</h4>
        <!-- biểu đồ -->
        <div class="graphBox-Admin">
          <div class="box-Admin">
            <canvas id="myChart"></canvas>
          </div>
          <div class="box-Admin">
            <canvas id="earning"></canvas>
          </div>
        </div>

        <div class="details-Admin">
          <div class="recentOrders-Admin">
            <div class="cardHeader-Admin">
              <h2>Đơn hàng gần đây</h2>
              <a href="#" class="btn-Admin">View All</a>
            </div>
            <table>
              <thead>
                <tr>
                  <td>Name</td>
                  <td>Price</td>
                  <td>Payment</td>
                  <td>Status</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Star Refrigerator</td>
                  <td>$1200</td>
                  <td>Paid</td>
                  <td><span class="status delivered">Delivered</span></td>
                </tr>
                <tr>
                  <td>Star Refrigerator</td>
                  <td>$1200</td>
                  <td>Paid</td>
                  <td><span class="status delivered">Delivered</span></td>
                </tr>
                <tr>
                  <td>Star Refrigerator</td>
                  <td>$1200</td>
                  <td>Paid</td>
                  <td><span class="status delivered">Delivered</span></td>
                </tr>
                <tr>
                  <td>Star Refrigerator</td>
                  <td>$1200</td>
                  <td>Paid</td>
                  <td><span class="status delivered">Delivered</span></td>
                </tr>
                <tr>
                  <td>Star Refrigerator</td>
                  <td>$1200</td>
                  <td>Paid</td>
                  <td><span class="status delivered">Delivered</span></td>
                </tr>
                <tr>
                  <td>Star Refrigerator</td>
                  <td>$1200</td>
                  <td>Paid</td>
                  <td><span class="status delivered">Delivered</span></td>
                </tr>
                <tr>
                  <td>Star Refrigerator</td>
                  <td>$1200</td>
                  <td>Paid</td>
                  <td><span class="status delivered">Delivered</span></td>
                </tr>
                <tr>
                  <td>Star Refrigerator</td>
                  <td>$1200</td>
                  <td>Paid</td>
                  <td><span class="status delivered">Delivered</span></td>
                </tr>
                
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

    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
   
  </body>
