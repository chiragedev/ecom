<!-- filepath: c:\Users\qqq\Desktop\project\miniecom\resources\views\home.blade.php -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      crossorigin="anonymous"
    />

    <!-- FontAwesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />

    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('theme_asset/home/css/home.css') }}" />

    <title>Tech Heavens - Home</title>
  </head>

  <body>
    <!-- Include the shared header -->
    @include('components.header')

    <!-- Video Bar -->
    <div class="video-bar">
      <video autoplay muted loop class="video-bar__video">
        <source src="{{ asset('theme_asset/home/videos/vid.mp4') }}" type="video/mp4">
        Your browser does not support the video tag. Please ensure the video file exists at `theme_asset/home/videos/vid.mp4`.
      </video>
      <div class="video-bar__overlay">
        <h1 class="video-bar__title">Tech Heaven</h1>
        <p class="video-bar__subtitle">Explore the Future of Technology</p>
      </div>
    </div>

    <!-- Browse Products -->
    <div class="container mt-5">
      @livewire('browse-products-component')
    </div>

    <!-- Find Us -->
    <div class="container mt-5">
      <h2 class="text-center mb-4" style="font-size: 2rem; font-weight: bold;">Find Us</h2>
      <div class="map-container" style="width: 100%; height: 400px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d271.0805790522488!2d-9.535488!3d30.3988736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3c833a697c883%3A0xd499cff904412ef6!2sENSA%20Agadir%20-%20Ecole%20Nationale%20des%20Sciences%20Appliqu%C3%A9es!5e0!3m2!1sen!2sma!4v1697040000000!5m2!1sen!2sma" 
          width="100%" 
          height="100%" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>

    <!-- Footer -->
    <footer id="footer" class="py-5 bg-dark text-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 mb-5">
            <h3 class="fw-bold mb-4">Services</h3>
            <ul class="list-unstyled">
              <li class="mb-3"><a href="#!" class="text-decoration-none text-light fs-5">Customer Service</a></li>
              <li class="mb-3"><a href="#!" class="text-decoration-none text-light fs-5">Store Locator</a></li>
              <li class="mb-3"><a href="#!" class="text-decoration-none text-light fs-5">Gift Cards</a></li>
            </ul>
          </div>
          <div class="col-lg-3 mb-5">
            <h3 class="fw-bold mb-4">Commands</h3>
            <ul class="list-unstyled">
              <li class="mb-3"><a href="#!" class="text-decoration-none text-light fs-5">Track Order</a></li>
              <li class="mb-3"><a href="#!" class="text-decoration-none text-light fs-5">Shipping Info</a></li>
              <li class="mb-3"><a href="#!" class="text-decoration-none text-light fs-5">Returns</a></li>
            </ul>
          </div>
          <div class="col-lg-3 mb-5">
            <h3 class="fw-bold mb-4">About Us</h3>
            <ul class="list-unstyled">
              <li class="mb-3"><a href="#!" class="text-decoration-none text-light fs-5">Our Story</a></li>
              <li class="mb-3"><a href="#!" class="text-decoration-none text-light fs-5">Careers</a></li>
              <li class="mb-3"><a href="#!" class="text-decoration-none text-light fs-5">Press</a></li>
            </ul>
          </div>
          <div class="col-lg-3 mb-5">
            <h3 class="fw-bold mb-4">Legal</h3>
            <ul class="list-unstyled">
              <li class="mb-3"><a href="#!" class="text-decoration-none text-light fs-5">Privacy Policy</a></li>
              <li class="mb-3"><a href="#!" class="text-decoration-none text-light fs-5">Cookie Policy</a></li>
              <li class="mb-3"><a href="#!" class="text-decoration-none text-light fs-5">Terms & Conditions</a></li>
            </ul>
          </div>
        </div>
        <div class="row mt-5 align-items-center">
          <div class="col-lg-6 text-center text-lg-start">
            <p class="mb-0 fs-4">&copy; {{ date('Y') }} Tech Heaven. All rights reserved.</p>
          </div>
          <div class="col-lg-6 text-center text-lg-end">
            <a href="#!" class="text-light me-4 fs-3"><i class="fab fa-facebook-f"></i></a>
            <a href="#!" class="text-light me-4 fs-3"><i class="fab fa-instagram"></i></a>
            <a href="#!" class="text-light me-4 fs-3"><i class="fab fa-twitter"></i></a>
            <a href="#!" class="text-light fs-3"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </footer>

    <div class="backdrop-filter"></div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('theme_asset/home/js/home.js') }}"></script>
  </body>
</html>