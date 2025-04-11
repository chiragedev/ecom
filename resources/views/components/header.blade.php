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

<div id="header">
    <div class="container">
        <div class="nav-bar">
            <a href="{{ route('home') }}" class="logo">
                <h1 class="video-bar__title">Tech Heaven</h1>
            </a>
            <div class="d-flex align-items-center">
                <div class="theme-wrap me-3">
                    <div class="theme-icon-wrap">
                        <a href="{{ route('cart') }}" class="fa-solid fa-cart-shopping"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="navmenus">
            <div class="nav-links">
                <a href="{{ route('home') }}">Home</a>
                <div class="dropdown">
                    <a href="#!" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <a href="{{ route('cart') }}">Cart</a>
                <a href="{{ route('profile.edit') }}">Profile</a> <!-- Added Profile Option -->
            </div>
            <div class="nav-toggler">
                <i class="bx bx-menu-alt-right"></i>
            </div>
        </div>
    </div>
</div>
