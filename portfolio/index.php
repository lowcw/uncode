<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
   <?php include('../inc/css.php'); ?>
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
            <a href="../sportfolio" class="text-decoration-none">
            <div class="portfolio-image">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=900" alt="">
            </div>
            <div class="portfolio-title">
                Givenchy Paris
            </div>
            </a>
        </div>
        
         <div class="col-12 col-md-4 menu-item shoes">
            <a href="../sportfolio" class="text-decoration-none">
            <div class="portfolio-image">
                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=900" alt="">
            </div>
            <div class="portfolio-title">
                Nike Boost
            </div>
        </a>
        </div>

        <div class="col-12 col-md-4 menu-item clothes">
            <a href="../sportfolio" class="text-decoration-none">
            <div class="portfolio-image">
                <img src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?w=900" alt="">
            </div>
            <div class="portfolio-title">
                Portrait Studio
            </div>
            </a>
        </div>

        <!-- PRODUCT -->

        <div class="col-12 col-md-4 menu-item shoes">
            <a href="../sportfolio" class="text-decoration-none">
            <div class="portfolio-image">
                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=900" alt="">
            </div>
            <div class="portfolio-title">
                Nike Boost
            </div>
            </a>
        </div>

        <div class="col-12 col-md-4 menu-item shoes">
            <a href="../sportfolio" class="text-decoration-none">
            <div class="portfolio-image">
                <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?w=900" alt="">
            </div>
            <div class="portfolio-title">
                Ray-Ban Wayfarer
            </div>
            </a>
        </div>

        <div class="col-12 col-md-4 menu-item shoes">
            <a href="../sportfolio" class="text-decoration-none">
            <div class="portfolio-image">
                <img src="https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?w=900" alt="">
            </div>
            <div class="portfolio-title">
                Adidas Runner
            </div>
            </a>
        </div>

        <!-- WEB -->

        <div class="col-12 col-md-4 menu-item web">
            <a href="../sportfolio" class="text-decoration-none">
            <div class="portfolio-image">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=900" alt="">
            </div>
            <div class="portfolio-title">
                Creative Workspace
            </div>
            </a>
        </div>

        <div class="col-12 col-md-4 menu-item web">
            <a href="../sportfolio" class="text-decoration-none">
            <div class="portfolio-image">
                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=900" alt="">
            </div>
            <div class="portfolio-title">
                Landing Page Design
            </div>
            </a>
        </div>

    </div>

</div>
</section>



    <?php include('../inc/footer.php'); ?>
    <?php include('../inc/js.php'); ?>
<script src="../assets/js/isotop.js"></script>
<script src="../assets/js/custom.js"></script>
</body>
</html>
