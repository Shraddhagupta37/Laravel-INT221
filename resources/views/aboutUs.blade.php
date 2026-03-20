<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <div style="padding:20px; text-align:center;">
        <h1 style='color:brown; font-weight:bold;'><marquee>Lovely Professional University</marquee></h1>
        <p>Hello, We are learning MVC Programming with Laravel!</p>
    </div>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://www.lpu.in/lpu-assets/images/admissions/hero-frame.jpg" class="d-block w-100" alt="Img1" height="500px" width="700px">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('myImages/lpuCampus.jpg') }}" class="d-block w-100" alt="Img2" height="500px" width="700px">
            </div>
            <div class="carousel-item">
            <img src="https://abped-college-dashboard.s3.us-east-2.amazonaws.com/tted/college-backend/college/5f5819e6-8c78-4981-bfbe-7d7afee54c72.jpg" class="d-block w-100" alt="Img3" height="500px" width="700px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    
  </body>
</html>