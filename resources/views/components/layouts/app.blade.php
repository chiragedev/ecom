<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tech Heaven</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

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

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('theme_asset/home/css/home.css') }}" />

    @livewireStyles
  </head>a
  <body>
    <!-- Navigation Bar -->
    @include('components.header')


    <!-- Main Content -->
    <main class="container my-5">
      {{ $slot }}
    </main>

    <!-- Footer -->
    <footer>
      <p>&copy; {{ date('Y') }} Tech Heaven. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('theme_asset/home/js/home.js') }}"></script>
    @livewireScripts
  </body>
</html>
