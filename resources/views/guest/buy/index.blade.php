@extends('guest.main')
@section('content')
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav
                    class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4 d-flex justify-content-center">
                    <div class="container-fluid">
                        <div class="container-fluid row justify-content-between">
                            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 col-2" href=" {{ url('/') }}"
                                id="brand">
                                UMKM
                            </a>
                            <div class="col-7 align-self-center">
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
                                data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon mt-2">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </span>
                            </button>
                            <div class="collapse navbar-collapse col-1 justify-content-end" id="navigation">
                                <div class="">
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
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg" id="main-scrollbar"
        data-scrollbar>
        <div style="height: 8vh;"></div>
        <div class="container-fluid py-4" style="position: relative;">
            <div class="row justify-content-center">
                <div class="col-md-9 align-self-center">
                    <div class="bg-cover row align-content-center bg-gradient-dark">
                        <div class="col text-center">
                            One of three columns
                        </div>
                        <div class="col-6 text-center mt-2">
                            <div class="card-body bg-white p-3 text-start col-md-auto border-radius-md">
                                <b style="font-size: 20px">Masker SENSI MASK DUCKBILL 3-Ply Face Mask BOX Isi 50 Pcs
                                    ORIGINAL</b>
                                <div class="row align-items-center mt-1">
                                    <p class="col-sm-auto ">Terjual 13,3rb</p>
                                    <p class="col-sm-auto ">•</p>
                                    <p class="col-sm-auto ">
                                        3.480 ulasan
                                    </p>
                                    <p class="col-sm-auto ">•</p>
                                    <p class="col-sm-auto ">
                                        75 diskusi
                                    </p>
                                </div>
                                <div class="mt-1 align-items-center">
                                    <p class="col text-start" style="font-size: 30px">
                                        <b>Rp10.399.000</b>
                                    </p>
                                </div>
                            </div>
                            <div class="card card-body shadow-blur mt-2 overflow-hidden text-start">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home"
                                            role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                                        <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile"
                                            role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                                        <a class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" href="#nav-contact"
                                            role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <dl class="row mt-2">
                                            <dt class="col-sm-3">Description lists</dt>
                                            <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                                            <dt class="col-sm-3">Euismod</dt>
                                            <dd class="col-sm-9">
                                                <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec
                                                    elit.</p>
                                                <p>Donec id elit non mi porta gravida at eget metus.</p>
                                            </dd>

                                            <dt class="col-sm-3">Malesuada porta</dt>
                                            <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                                            <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                            <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris
                                                condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

                                            <dt class="col-sm-3">Nesting</dt>
                                            <dd class="col-sm-9">
                                                <dl class="row">
                                                    <dt class="col-sm-4">Nested definition list</dt>
                                                    <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc
                                                        augue blandit nunc.</dd>
                                                </dl>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <p>clicked profile</p>
                                        <p>clicked profile</p>
                                        <p>clicked profile</p>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <p>clicked contact</p>
                                        <p>clicked contact</p>
                                        <p>clicked contact</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col text-center mt-2">
                            <div class="card-body bg-white p-3 text-start col-md-10 border-radius-md">
                                <b>Atur jumlah dan catatan</b>
                                <div class="mt-1">
                                    <input type="text" placeholder="1" class="border-0 col-sm-2">
                                </div>
                                <div class="row justify-content-between align-items-center mt-1">
                                    <p class="col-sm-5 text-start">Subtotal</p>
                                    <p class="col text-end" style="font-size: 20px">
                                        <b>Rp10.399.000</b>
                                    </p>
                                </div>
                                <div class="mt-1 d-grid align-items-center">
                                    <button class="btn btn-dark ">Keranjang</button>
                                </div>
                                <div class="mt-1 d-grid align-items-center">
                                    <button class="btn btn-white shadow-none border border-dark border-2"><span
                                            class="text-dark">Beli
                                            Langsung</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3 height-300 bg-gradient-white border-top">
            <div class="container-fluid row justify-content-center">
                <div class="row align-items-center justify-content-between col-md-9">
                    <div class="col-lg-6 mt-4">
                        <img src="{{ asset('img/logoumkm.png') }}" style="width: 50%; height: 50%;">
                        <br>
                        <a class="btn mx-2 mt-4" href="#">About</a>
                        <a class="btn mx-2 mt-4" href="#">Contact us</a>
                        <a class="btn mx-2 mt-4" href="#">Instagram</a>
                        <a class="btn mx-2 mt-4" href="#">Facebook</a>
                        <a class="btn mx-2 mt-4" href="#">Telegram</a>
                    </div>
                    <img class="col-3 align-self-end" src="{{ asset('img/animasi.png') }}">
                </div>
            </div>
        </footer>
    </main>
@endsection
