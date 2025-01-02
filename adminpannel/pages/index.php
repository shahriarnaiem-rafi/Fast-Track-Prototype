<?php
include_once "../headerfooter/header.php";
?>
<!--begin::Sidebar-->

<?php
include_once "../connect/aside.php";
?>


<!--end::Sidebar-->
<!--begin::App Main-->
<main class="app-main">
  <!--begin::App Content Header-->
  <div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Dashboard</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="../../home.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        </div>
      </div>
      <!--end::Row-->
    </div>
    <!--end::Container-->
  </div>
  <!--end::App Content Header-->
  <!--begin::App Content-->


  <div>

    <div class="app-content ">
      <!--begin::Container-->


      <div class="container-fluid dashboard-show " id="dashboard-section">
        <div class="row">
          <!-- First Row -->
          <div class="col-lg-6 col-12">
            <div class="small-box text-bg-primary"
              style="width: 80%; height: 210px; margin: 0 auto; margin-bottom: 20px;">
              <div class="inner">
                <h3>150</h3>
                <p>Parsel Received</p>
              </div>
              <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c..."></path>
              </svg>
              <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                More info <i class="bi bi-link-45deg"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="small-box text-bg-success"
              style="width: 80%; height: 210px; margin: 0 auto; margin-bottom: 20px;">
              <div class="inner">
                <h3>400</h3>
                <p>Old Parsel</p>
              </div>
              <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c..."></path>
              </svg>
              <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                More info <i class="bi bi-link-45deg"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Second Row -->
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="small-box text-bg-warning"
              style="width: 80%; height: 210px; margin: 0 auto; margin-bottom: 20px;">
              <div class="inner">
                <h3>44</h3>
                <p>Total Parsel</p>
              </div>
              <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 018.25-8.25..."></path>
              </svg>
              <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                More info <i class="bi bi-link-45deg"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="small-box text-bg-danger"
              style="width: 80%; height: 210px; margin: 0 auto; margin-bottom: 20px;">
              <div class="inner">
                <h3>65</h3>
                <p>Today Delivered</p>
              </div>
              <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 018.25-8.25..."></path>
              </svg>
              <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                More info <i class="bi bi-link-45deg"></i>
              </a>
            </div>
          </div>
        </div>


      </div>
      <!--end::Row-->

      <!-- graph -->
      <?php
      // include_once("../connect/graph.php");
      ?>

      <!-- User Management -->
      <!-- User section -->
      <div id="user-id" class="hidden">
        <?php
        include_once "./user-management/usersection.php";
        ?>
      </div>
      <!-- customer-section -->

      <div id="customer-id" class="hidden">
        <?php
        include_once "./user-management/customer.php";
        ?>
      </div>
      <!-- delivery section -->

      <div id="delivery-orderlist-id" class="hidden">
        <?php
        include_once "./Delivery-system/orderlist.php";
        ?>
      </div>
      <!-- status -->
      <div id="delivery-status-id" class="hidden">
        <?php
        include_once "./Delivery-system/status.php";
        ?>
      </div>
      <!-- assing -->
      <div id="delivery-assing-id" class="hidden">
        <?php
        include_once "./Delivery-system/asingdrivers.php";
        ?>
      </div>
      <!-- track -->
      <div id="delivery-track-id" class="hidden">
        <?php
        include_once "./Delivery-system/trackinginfo.php";
        ?>
      </div>
      <!-- driver -->
      <div id="driver-id" class="hidden">
        <?php
        include_once "./drivermanagement/driverm.php";
        ?>
      </div>
      <!-- payment -->

      <div id="payment-id" class="hidden">
        <?php
        include_once "./payment/payment.php";
        ?>
      </div>
      <!-- suport -->
      <div id="support-id" class="hidden">
        <?php
        include_once "./customersupport/support.php";
        ?>
      </div>
      <!-- setting -->
      <div id="setting-id" class="hidden">
        <?php
        include_once "./setting/setting.php";
        ?>
      </div>
      <!-- aurth section -->
      <!-- login -->
      <div id="aurth-login-id" class="hidden">
        <?php
        include_once "./login/login.php";
        ?>
      </div>
      <!-- reginstry -->
      <div id="aurth-registry-id" class="hidden">
        <?php
        include_once "./login/registry.php";
        ?>
      </div>
      <!-- Proved section -->
      <!-- browser section -->
       

      <div id="browser-id" class="hidden">
        <?php
        // include_once "./browser-faq-licence/browser.php";
        ?>
      </div>

      <!-- faq section -->

      <div id="faq-id" class="hidden">
        <?php
        // include_once "./browser-faq-licence/faq.php";
        ?>
      </div>
      <!-- licence section -->
      <div id="licence-id" class="hidden">
        <?php
        // include_once "./browser-faq-licence/licence.php";
        ?>
      </div>




      <!-- /.row (main row) -->
    </div>
    <!--end::Container-->
  </div>


  <!--end::App Content-->

</main>
<!--end::App Main-->
<?php
include_once "../headerfooter/footer.php";
?>
<script src="../DOM/show.js"></script>
