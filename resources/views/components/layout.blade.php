<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
 
  <x-navbar></x-navbar>

  <div class="container-fluid">
 {{ $slot }}
 </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>

  <footer class="bg-dark text-light py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>About Us</h5>
        <p>We provide the best services to our customers with quality and satisfaction.</p>
        <p><i class="bi bi-geo-alt-fill"></i>Mejasem, Kabupaten Tegal, Jawa Tengah, Indonesia</p>
        <p><i class="bi bi-envelope-fill"></i> ihsannafishidayat@gmail.com</p>
        <p><i class="bi bi-telephone-fill"></i> +6287735490222</p>
      </div>
      
      <div class="col-md-4">
        <h5>Follow Us</h5>
        <a href="https://www.facebook.com" class="text-light me-2"><i class="bi bi-facebook"></i> Facebook</a><br>
        <a href="https://www.instagram.com/ihsannfs/" class="text-light me-2"><i class="bi bi-instagram"></i> Instagram</a><br>
        <a href="https://www.twitter.com" class="text-light"><i class="bi bi-twitter"></i> Twitter</a>
      </div>
    </div>

    <hr class="my-3">
    <div class="text-center">
      <p class="mb-0">&copy; 2025 Renzz. All Rights Reserved.</p>
    </div>
  </div>
</footer>
</html>