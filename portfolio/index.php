<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- My CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/portfolio.css">
</head>
<body>
    <?php include('../inc/header.php'); ?>   

<section>
<div class="container-fluid p-0">

    <!-- Menu -->
    <div class="portfolio-menu mb-5">
        <ul class="nav justify-content-center">

            <li class="nav-item">
                <button class="nav-link active" data-filter="*">
                    Show All
                </button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-filter=".clothes">
                    Clothes
                </button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-filter=".web">
                    Web
                </button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-filter=".shoes">
                    Shoes
                </button>
            </li>

        </ul>
    </div>

       <!-- Gallery -->
    <div class="menu_cloumn row gx-0 gy-5 gx-md-5 p-0 ">

        <!-- PHOTO -->

        <div class="col-12 col-md-4 menu-item clothes">
            <div class="portfolio-image">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=900" alt="">
            </div>
            <div class="portfolio-title">
                Givenchy Paris
            </div>
        </div>
        
         <div class="col-12 col-md-4 menu-item shoes">
            <div class="portfolio-image">
                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=900" alt="">
            </div>
            <div class="portfolio-title">
                Nike Boost
            </div>
        </div>

        <div class="col-12 col-md-4 menu-item clothes">
            <div class="portfolio-image">
                <img src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?w=900" alt="">
            </div>
            <div class="portfolio-title">
                Portrait Studio
            </div>
        </div>

        <!-- PRODUCT -->

        <div class="col-12 col-md-4 menu-item shoes">
            <div class="portfolio-image">
                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=900" alt="">
            </div>
            <div class="portfolio-title">
                Nike Boost
            </div>
        </div>

        <div class="col-12 col-md-4 menu-item shoes">
            <div class="portfolio-image">
                <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?w=900" alt="">
            </div>
            <div class="portfolio-title">
                Ray-Ban Wayfarer
            </div>
        </div>

        <div class="col-12 col-md-4 menu-item shoes">
            <div class="portfolio-image">
                <img src="https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?w=900" alt="">
            </div>
            <div class="portfolio-title">
                Adidas Runner
            </div>
        </div>

        <!-- WEB -->

        <div class="col-12 col-md-4 menu-item web">
            <div class="portfolio-image">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=900" alt="">
            </div>
            <div class="portfolio-title">
                Creative Workspace
            </div>
        </div>

        <div class="col-12 col-md-4 menu-item web">
            <div class="portfolio-image">
                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=900" alt="">
            </div>
            <div class="portfolio-title">
                Landing Page Design
            </div>
        </div>

    </div>

</div>
</section>



    <?php include('../inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../assets/js/isotop.js"></script>
<script src="../assets/js/custom.js"></script>
</body>
</html>
