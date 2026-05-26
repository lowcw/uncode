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
    <link rel="stylesheet" href="../assets/css/404-not-found.css">
    
</head>
<body>
    <?php include('../header/header.php'); ?>
    
    <section>
      <div class="focus">
        <div class="container d-flex justify-content-center custom-width mx-5 mx-md-0">
            <div class="row text-center ">
                <div class="col-12">
                    <h1>404</h1>
                </div>
                <div class="col-12">
                    <h2>Page not found</h2>
                </div>
                <div class="col-12">
                    <p>The resource you are looking for doesn't exist, or might have been removed.</p>
                </div>
                <div class="col-12 my-3">
                <div class=" box border border-1 border-white"></div>
                </div>
                <div class="col-12 mt-4">
                    <button class="btn px-4 py-2"  onclick="window.location.href='../index.php'">Back Homepage</button>
                </div>
            </div>
        </div>
      </div>
    </section>

    <?php include('../footer/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../assets/js/404-not-found.js"></script>

</body>
</html>