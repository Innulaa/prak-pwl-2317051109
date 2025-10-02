<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm px-4">
    <a class="navbar-brand fw-bold text-primary" href="#">Unicom</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            @foreach(['Home', 'About', 'Contact', 'Product'] as $menu)
                <li class="nav-item mx-2">
                    <a class="btn btn-outline-primary nav-link px-3 py-2 fw-semibold"
                       href="#">{{ $menu }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
