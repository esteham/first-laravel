<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" 
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" 
                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        2nd Class
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="{{ route('products.index') }}" target="_blank">
                                Products
                            </a>
                        </li>                  
                        <li>
                            <a class="dropdown-item" href="{{ url('with') }}" target="_blank">With</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link " href="{{ route('contact.page') }}" role="button">
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
