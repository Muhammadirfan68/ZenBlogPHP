<!DOCTYPE html>
<html lang="en">

<head>

  <title>Components / Breadcrumbs - NiceAdmin Bootstrap Template</title>
   <!-- Including links from include folder -->
   <?php include("./include/links.php"); ?>

</head>

<body>

  <!-- Including header from include folder -->
  <?php include("./include/header.php"); ?>

  <!-- Including side bar from include folder -->
  <?php include("./include/side-bar.php"); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Breadcrumbs</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Breadcrumbs</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Default Breadcrumbs</h5>

              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active">Default</li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Centered</h5>

              <nav class="d-flex justify-content-center">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active">Centered Position</li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Right Positioned</h5>

              <nav class="d-flex justify-content-end">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active">Right Position</li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">With Home Icon</h5>

              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house-door"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active">Default</li>
                </ol>
              </nav>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Breadcrumbs with a page title</h5>

              <div class="pagetitle">
                <h1>Page Title</h1>
                <nav>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Components</li>
                    <li class="breadcrumb-item active">Breadcrumbs</li>
                  </ol>
                </nav>
              </div><!-- End Breadcrumbs with a page title -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Breadcrumbs with different dividers</h5>

              <nav style="--bs-breadcrumb-divider: '>';">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active">Data</li>
                </ol>
              </nav>

              <nav style="--bs-breadcrumb-divider: '|';">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active">Data</li>
                </ol>
              </nav>

              <nav style="--bs-breadcrumb-divider: '-';">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active">Data</li>
                </ol>
              </nav>

              <nav style="--bs-breadcrumb-divider: '•';">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active">Data</li>
                </ol>
              </nav>

              <nav style="--bs-breadcrumb-divider: '';">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active">Data</li>
                </ol>
              </nav>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

</html>