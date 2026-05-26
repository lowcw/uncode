<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- My CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
    <link rel="stylesheet" href="../assets/css/about.css">
</head>
<body>
    <?php include('../header/header.php'); ?>
    
    <section class="banner-c pb-5">
        <div class="custom-width container my-5 my-md-5">
          <div class="row mx-3 mx-md-0">
            <div class="col-12 my-3 my-md-0">
              <h5 class="text-uppercase">About us</h5>
            </div>
            <div class="col-12">
              <h1>We make sh*t happen</h1>
            </div>
            <div class="col-12 d-flex justify-content-center">
              <div class="banner-p-w my-5">
                <p class="banner-p">Leverage agile frameworks to provide a robust high level overviews. Iterative approaches to 
                    corporate strategy foster collaborative thinking to further the overall value.</p>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col">

          </div>
        </div>
      
        <div class="swiper about_swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="about-card">
                    <img src="../assets/img/about.jpg" alt="" class="about-img">
                  </div>                  
                </div>
                <div class="swiper-slide">
                  <div class="about-card">
                    <img src="../assets/img/about.jpg" alt="" class="about-img">
                  </div>                  
                </div>
                <div class="swiper-slide">
                  <div class="about-card">
                    <img src="../assets/img/about.jpg" alt="" class="about-img">
                  </div>                  
                </div>
                <div class="swiper-slide">
                  <div class="about-card">
                    <img src="../assets/img/about.jpg" alt="" class="about-img">
                  </div>                  
                </div>
                <div class="swiper-slide">
                  <div class="about-card">
                    <img src="../assets/img/about.jpg" alt="" class="about-img">
                  </div>                  
                </div>
                <div class="swiper-slide">
                  <div class="about-card">
                    <img src="../assets/img/about.jpg" alt="" class="about-img">
                  </div>                  
                </div>
                <div class="swiper-slide">
                  <div class="about-card">
                    <img src="../assets/img/about.jpg" alt="" class="about-img">
                  </div>                  
                </div>
            </div>
            
          </div>
           <div class="swiper-pagination my-5 position-relative"></div>
      </div>
    </section>




























<section class="l-p">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">    
                <h5 class="text-uppercase" style="color:#FFFFFF;">Start a project</h5>
            </div>
            <div class="col-12">
                <h2 style="color:#FFFFFF;">Ready to rock together?!</h2>
            </div>
            <div class="col-12 mt-4">
                <button class="btn-lp px-4 py-3"  onclick="window.location.href='../index.php'">Contact Us</button>
            </div>
        </div>
    </div>
</section>
    <?php include('../footer/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../assets/js/custom.js"></script>
</body>
</html>