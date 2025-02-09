<!doctype html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
  data-assets-path="../assets/" data-template="vertical-menu-template-free" data-style="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Members | Statistics |HOP</title>

  <meta name="description" content="" />

  <?php
  include_once('head.php')
    ?>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <?php
      include_once('../partials/sidebar.php')
        ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

     <?php include_once('../partials/navbar.php') ?>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
            
          <div class="container-xxl flex-grow-1 container-p-y">
          <div class="col-12">
             <div class="card card-primary card-outine">
              <div class="card-body">
              <select name="" id="" class="form-control">
                <option value="">-choose branch-</option>
                <option value="Tema">-Tema-</option>
              </select>
              </div>
             </div>
             <br>
            
            <div class="row">
              <!-- Total Members -->
              <div class="col-lg-3 col-md-12  mb-3">
                <div class="card h-80">
                  <div class="card-body">

                    <p class="mb-1">Total Members</p>
                    <h4 class="card-title mb-3">350,256</h4>
                    <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                  </div>
                </div>
              </div>

              <!-- Total Men -->
              <div class="col-lg-3 col-md-12  mb-3">
                <div class="card h-80">
                  <div class="card-body">

                    <p class="mb-1">Men</p>
                    <h4 class="card-title mb-3">150,256</h4>
                    <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                  </div>
                </div>
              </div>
              <!-- Women -->
              <div class="col-lg-3 col-md-12  mb-3">
                <div class="card h-80">
                  <div class="card-body">

                    <p class="mb-1">Women</p>
                    <h4 class="card-title mb-3">350,256</h4>
                    <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                  </div>
                </div>
              </div>

              <!--Youth  -->
              <div class="col-lg-3 col-md-12  mb-3">
                <div class="card h-80">
                  <div class="card-body">

                    <p class="mb-1">Youth</p>
                    <h4 class="card-title mb-3">350,256</h4>
                    <small class="text-success fw-medium"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">


              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-tittle">Statistics <i class="fa fa-line-chart"></i></h5>
                    <hr>
                  </div>
                  <div class="card-body">
                    <div class="row">
                
                          <div class="d-flex mb-6">
                            <div class="avatar flex-shrink-0 me-3">
                              <img src="../assets/img/icons/unicons/wallet.png" alt="User" />
                            </div>
                            <div>
                              <p class="mb-0">Growth difference</p>
                              <div class="d-flex align-items-center">
                                <h6 class="mb-0 me-1">25,699</h6>
                                <small class="text-success fw-medium">
                                  <i class="bx bx-chevron-up bx-lg"></i>
                                  42.9%
                                </small>
                              </div>
                            </div>
                          </div>
                          <div id="incomeChart"></div>
                          <div class="d-flex align-items-center justify-content-center mt-6 gap-3">
                            <div class="flex-shrink-0">
                              <div id="expensesOfWeek"></div>
                            </div>
                            <div>
                              <h6 class="mb-0">New converts this week</h6>
                              <small>250 more than last week </small>
                            </div>
                          </div>
                     
                      
                   
                 
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
          <!-- / Content -->

          <!-- Footer -->
          <?php
          include_once('../partials/footer.php');
          ?>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <?php
  include_once('scripts.php');
  ?>
</body>

</html>