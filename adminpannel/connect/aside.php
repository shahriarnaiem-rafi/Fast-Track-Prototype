<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="./index.php" class="brand-link">
      <!--begin::Brand Image-->
      <img
        src="../assets/img/shahriar.png"
        alt="AdminLTE Logo"
        class="brand-image opacity-75 shadow" />
      <!--end::Brand Image-->
      <!--begin::Brand Text-->
      <span class="brand-text fw-light">Admin</span>
      <!--end::Brand Text-->
    </a>
    <!--end::Brand Link-->
  </div>
  <!--end::Sidebar Brand-->
  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <!--begin::Sidebar Menu-->
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="menu"
        data-accordion="false">
        <li class="nav-item menu-open">


          <a href="" class="nav-link active" id="dashboard-btn">
            <i class="fa-solid fa-gauge"></i>
            <p>Dashboard </p>
          </a>

        </li>
        <!-- User Management -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-people-roof"></i>
            <p>
              User Management
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item" disabled>
              <a href="#" class="nav-link" id="user-btn">
                <i class="nav-icon bi bi-circle"></i>
                <p>User Section</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="" class="nav-link" id="customer-btn">
                <i class="nav-icon bi bi-circle"></i>
                <p>Customer Section</p>
              </a>
            </li> -->
          </ul>
        </li>



        <!-- Delivery  Management -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-truck"></i>
            <p>
              Delivery Management
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link" id="delivery-order-list-btn">
                <i class="nav-icon bi bi-circle"></i>
                <p>Order list</p>
                <!-- Order list : Order List: A table with columns like order ID, customer name, pickup location, delivery location, status, etc.-->
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" id="delivery-status-btn">
                <i class="nav-icon bi bi-circle"></i>
                <p>Status Updates</p>
                <!-- Update delivery status (e.g., pending, in transit, delivered).-->
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" id="delivery-assing-btn">
                <i class="nav-icon bi bi-circle"></i>
                <p>Assign Drivers</p>
                <!-- Assign delivery staff or vehicles to specific orders.-->
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" id="delivery-track-btn">
                <i class="nav-icon bi bi-circle"></i>
                <p>Tracking Info</p>
                <!--  Update or view tracking numbers for shipments.-->
              </a>
            </li>
          </ul>
        </li>
        <!-- ENd this section -->

        <!-- Driver Management -->
        <li class="nav-item">
          <a href="#" class="nav-link dashboard-show">
            <i class="fa-regular fa-id-card"></i>
            <p>
              Driver Management
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link " id="driver-btn">
                <i class="nav-icon bi bi-circle"></i>
                <p>Drivers</p>
                <!-- Add and manage driver profiles.
View drivers' availability and performance metrics (e.g., completed deliveries).
Assign tasks to drivers. -->
              </a>
            </li>
          </ul>
        </li>

        <!-- Financial Management -->
        <li class="nav-item">
          <a href="#" class="nav-link dashboard-show">
            <i class="fa-solid fa-coins"></i>
            <p>
              Financial Management
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link " id="payment-btn">
                <i class="fa-solid fa-money-bill"></i>
                <p>Payments</p>
                <!-- View payment history from customers.
Generate invoices for completed deliveries.
Handle driver payments and commissions.
Display profit/loss analytics. -->
              </a>
            </li>
          </ul>
        </li>



        <!-- Customer Suport -->
        <li class="nav-item">
          <a href="#" class="nav-link dashboard-show">
            <i class="fa-solid fa-handshake-angle"></i>
            <p>
              Customer Suport
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link" id="support-btn">
                <i class="fa-solid fa-handshake-angle"></i>
                <p>Suport</p>
                <!-- View and manage customer queries or complaints.
Respond to queries directly from the admin panel. -->
              </a>
            </li>
          </ul>
        </li>
        <!-- Settings -->

        <li class="nav-item">
          <a href="#" class="nav-link dashboard-show">
          <i class="fa-solid fa-gear"></i>
            <p>
              Settings
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link " id="setting-btn">
              <i class="fa-solid fa-gear"></i>
                <p>Settings</p>
                <!-- Change admin profile details.
Configure service zones (areas your courier service covers).
Set delivery charges or pricing models (e.g., per km or flat rate).
Manage notification settings (email/SMS alerts for delivery updates). -->
              </a>
            </li>
          </ul>
        </li>




        <li class="nav-header">EXAMPLES</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-box-arrow-in-right"></i>
            <p>
              Auth
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon bi bi-box-arrow-in-right"></i>
                <p>
                  Version 1
                  <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link" id="aurth-login-btn">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Login</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link" id="aurth-registry-btn">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Register</p>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </li>

        <li class="nav-item" >
          <a href="" class="nav-link" id="browser-btn">
            <i class="nav-icon bi bi-browser-edge"></i>
            <p>Browser Support</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="" class="nav-link" id="faq-btn">
            <i class="nav-icon bi bi-question-circle-fill"></i>
            <p>FAQ</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link" id="licence-btn">
            <i class="nav-icon bi bi-patch-check-fill"></i>
            <p>License</p>
          </a>
        </li>

      </ul>
      <!--end::Sidebar Menu-->
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>