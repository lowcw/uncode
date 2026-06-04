<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <?php include('../inc/css.php'); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- My CSS -->
    <link rel="stylesheet" href="/uncode/assets/css/style.css">
    <link rel="stylesheet" href="/uncode/assets/css/404-not-found.css">
    
</head>
<body>
    <?php include('../inc/header.php'); ?>
    
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
                    <button class="btn px-4 py-2"  onclick="window.location.href='/uncode/'">Back Homepage</button>
                </div>
            </div>
        </div>
      </div>
    </section>

    <?php include('../inc/footer.php'); ?>
    <?php include('../inc/js.php'); ?>

</body>
</html>