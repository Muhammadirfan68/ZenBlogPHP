<!DOCTYPE html>
<html lang="en">

<head>

  <title>Components / Spinners - NiceAdmin Bootstrap Template</title>
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
      <h1>Spinners</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Spinners</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Border spinner</h5>
              <p>Use the border spinners for a lightweight loading indicator.</p>

              <!-- Border spinner -->
              <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
              </div><!-- End Border spinner -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Colors</h5>

              <!-- Color spinners -->
              <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-secondary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-success" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-warning" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-info" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-light" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-border text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
              </div><!-- End Color spinners -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Alignment</h5>
              <p>Use flexbox utilities, float utilities, or text alignment utilities to place spinners exactly where you need them in any situation.</p>

              <!-- Center aligned spinner -->
              <div class="d-flex justify-content-center">
                <div class="spinner-border" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
              </div><!-- End Center aligned spinner -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Buttons</h5>
              <p>Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed.</p>

              <!-- Button spinners -->
              <button class="btn btn-primary" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                <span class="visually-hidden">Loading...</span>
              </button>
              <button class="btn btn-primary" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>

              <button class="btn btn-primary" type="button" disabled>
                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                <span class="visually-hidden">Loading...</span>
              </button>
              <button class="btn btn-primary" type="button" disabled>
                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>
              <!-- End Button spinners -->

            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Growing spinner</h5>
              <p>If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>

              <!-- Growing spinner -->
              <div class="spinner-grow" role="status">
                <span class="visually-hidden">Loading...</span>
              </div><!-- End Growing spinner -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Growing Color spinners</h5>

              <!-- Growing Color spinnersr -->
              <div class="spinner-grow text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-grow text-secondary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-grow text-success" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-grow text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-grow text-warning" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-grow text-info" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-grow text-light" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <div class="spinner-grow text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
              </div><!-- End Growing Color spinners -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Sizes</h5>
              <p>Add <code>.spinner-border-sm</code> and <code>.spinner-grow-sm</code> to make a smaller spinner that can quickly be used within other components. Or, use custom CSS or inline styles to change the dimensions as needed.</p>

              <!-- Sized spinners -->
              <div class="spinner-border spinner-border-sm" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>

              <div class="spinner-border" style="width: 30px; height: 30px;" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>

              <div class="spinner-border" style="width: 40px; height: 40px;" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>

              <div class="spinner-border" style="width: 50px; height: 50px;" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>

              <div class="spinner-grow spinner-grow-sm" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>

              <div class="spinner-grow" style="width: 30px; height: 30px;" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>

              <div class="spinner-grow" style="width: 40px; height: 40px;" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>

              <div class="spinner-grow" style="width: 50px; height: 50px;" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <!-- End Sized spinners -->

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