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
  <div class="row">
    <!-- Branches -->
    <div class="col-lg-3 col-md-6 mb-3">
      <div class="card h-100">
        <div class="card-body text-center">
          <p class="mb-2 text-uppercase text-muted">Branches</p>
          <h4 class="mb-3 fw-bold">350,256</h4>
          <small class="text-success fw-medium">
            <i class="bx bx-up-arrow-alt"></i> +72.80%
          </small>
        </div>
      </div>
    </div>

    <!-- Newly Approved -->
    <div class="col-lg-3 col-md-6 mb-3">
      <div class="card h-100">
        <div class="card-body text-center">
          <p class="mb-2 text-uppercase text-muted">Newly Approved</p>
          <h4 class="mb-3 fw-bold">150,256</h4>
          <small class="text-success fw-medium">
            <i class="bx bx-up-arrow-alt"></i> +72.80%
          </small>
        </div>
      </div>
    </div>

    <!-- Under Review -->
    <div class="col-lg-3 col-md-6 mb-3">
      <div class="card h-100">
        <div class="card-body text-center">
          <p class="mb-2 text-uppercase text-muted">Under Review</p>
          <h4 class="mb-3 fw-bold">350,256</h4>
          <small class="text-warning fw-medium">
            <i class="bx bx-up-arrow-alt"></i> +72.80%
          </small>
        </div>
      </div>
    </div>

    <!-- Closed -->
    <div class="col-lg-3 col-md-6 mb-3">
      <div class="card h-100">
        <div class="card-body text-center">
          <p class="mb-2 text-uppercase text-muted">Closed</p>
          <h4 class="mb-3 fw-bold">5</h4>
          <small class="text-danger fw-medium">
            <i class="bx bx-down-arrow-alt"></i> -0.2%
          </small>
        </div>
      </div>
    </div>
  </div>

  <!-- List Section -->
  <div class="row mt-4">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="card-title mb-0">Branch List</h5>
          <button class="btn btn-primary btn-sm">
            <i class="fa fa-plus me-1"></i> Add New
          </button>
        </div>
       <div class="col-12">
       <div class="card-body">
          <table class="table table-hover" id="myTable">
            <thead class="table-light">
              <tr>
                <th>#ID</th>
                <th>Branch</th>
                <th>Location</th>
                <th>District</th>
                <th>Pastor</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
               <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr> <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Abuasu</td>
                <td>Kumasi Anyaa Road</td>
                <td>Asante Akyem South</td>
                <td>Maxwell Asante</td>
                <td>
                  <span class="badge bg-warning text-dark">Opened</span>
                </td>
                <td>
                  <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-sm">
                    <i class="fa-solid fa-trash"></i>
                  </a>
                </td>
              </tr>
              <!-- Additional rows can be added here -->
            </tbody>
          </table>
        

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