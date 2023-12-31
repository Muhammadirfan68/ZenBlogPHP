<!DOCTYPE html>
<html lang="en">

<head>


  <title>Components / Tooltips - NiceAdmin Bootstrap Template</title>
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
      <h1>Tooltips</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Components</li>
          <li class="breadcrumb-item active">Tooltips</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tooltips Examples</h5>
              <p>Hover over the buttons below to see the four tooltips directions: top, right, bottom, and left. </p>

              <!-- Tooltips Examples -->
              <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                Tooltip on top
              </button>
              <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
                Tooltip on right
              </button>
              <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                Tooltip on bottom
              </button>
              <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
                Tooltip on left
              </button>
              <!-- End Tooltips Examples -->

            </div>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- including footer from include folder -->
  <?php include("./include/footer.php"); ?>
  
  <!-- Scroll to top button -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Inlcuding Script files from include folder -->
    <?php include("./include/script.php"); ?>
</body>

</html>