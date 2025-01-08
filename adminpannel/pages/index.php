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
              style="width: 70%; height: 200px; margin: 0 auto; margin-bottom: 20px;">
              <div class="inner">
                <h3 style="text-align: center;font-size: 30px;font-weight: bold;text-shadow: 2px 2px 2px black; margin-top:50px;">150</h3>
                <p style="text-align: center;font-size: 30px;font-weight: bold;text-shadow: 2px 2px 2px black;">Parsel Received</p>
              </div>

            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="small-box text-bg-success"
              style="width: 70%; height: 200px;  margin-bottom: 20px;">
              <div class="inner">
                <h3 style="text-align: center;font-size: 30px;font-weight: bold;text-shadow: 2px 2px 2px black; margin-top:50px;">400</h3>
                <p style="text-align: center;font-size: 30px;font-weight: bold;text-shadow: 2px 2px 2px black;">Old Parsel</p>
              </div>

            </div>
          </div>
        </div>

        <!-- Second Row -->
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="small-box text-bg-warning"
              style="width: 70%; height: 200px; margin: 0 auto; margin-bottom: 20px;">
              <div class="inner">
                <h3 style="text-align: center;font-size: 30px;font-weight: bold;text-shadow: 2px 2px 2px black; margin-top:50px; color:white;">44</h3>
                <p style="text-align: center;font-size: 30px;font-weight: bold;text-shadow: 2px 2px 2px black;color:white;">Total Parsel</p>
              </div>

            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="small-box text-bg-danger"
              style="width: 70%; height: 200px;  margin-bottom: 20px;">
              <div class="inner">
                <h3 style="text-align: center;font-size: 30px;font-weight: bold;text-shadow: 2px 2px 2px black; margin-top:50px;">65</h3>
                <p style="text-align: center;font-size: 30px;font-weight: bold;text-shadow: 2px 2px 2px black;">Pending Delivered</p>
              </div>

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

      <!-- Branch -->
      <div id="branch-id" class="hidden">
        <?php
        include_once "./branch/branch.php";
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