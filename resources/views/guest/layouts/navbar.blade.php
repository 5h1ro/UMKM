<nav
    class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4 d-flex justify-content-center">
    <div class="container-fluid">
        <div class="container-fluid row justify-content-between">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 col-2" href=" {{ url('/') }}" id="brand">
                UMKM
            </a>
            <div class="col-6 align-self-center">
                <div class="d-flex justify-content-center">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Type here...">
                        <span class="input-group-text text-body">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>

            </div>
            <button class="navbar-toggler shadow-none ms-2 col-1 justify-content-end" type="button"
                data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="ms-6 col-1 row align-items-center border-end border-2">
                <div class="col-6">
                    <a href="#">
                        <i class="fas fa-shopping-cart opacity-6 text-dark me-1 mx-2"></i>
                    </a>
                </div>
                <div class="col-6">
                    <i class="fas fa-envelope opacity-6 text-dark me-1 mx-2"></i>
                </div>
            </div>
            <div class="collapse navbar-collapse col-1" id="navigation">
                <div class="col-12">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link me-2" href="../pages/sign-up.html">
                                <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                Sign Up
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="{{ url('/login') }}">
                                <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                Sign In
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</nav>
