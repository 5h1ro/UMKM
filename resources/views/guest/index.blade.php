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
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
        <div style="height: 8vh;"></div>
        {{-- slick --}}
        <div class="container-fluid py-4" style="position: relative;">
            <div class="row justify-content-center">
                <div class="col-md-9 align-self-center">
                    <div class="height-300 slider bg-cover border-radius-2xl overflow-hidden">
                        <div class="height-300 overflow-hidden  position-relative bg-cover col"
                            style="background-image: url('{{ asset('img') }}/ivancik.jpg');">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column p-3 height-300">
                                <h5 class="text-white font-weight-bolder mb-4 pt-2">Work with the rockets</h5>
                                <p class="text-white">Wealth creation is an evolutionarily recent positive-sum game. It is
                                    all
                                    about
                                    who take the opportunity first.</p>
                                <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                                    href="javascript:;">
                                    Read More
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="height-300 overflow-hidden  position-relative bg-cover col"
                            style="background-image: url('{{ asset('img') }}/ivancik.jpg');">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column p-3 height-300">
                                <h5 class="text-white font-weight-bolder mb-4 pt-2">Work with the rockets</h5>
                                <p class="text-white">Wealth creation is an evolutionarily recent positive-sum game. It is
                                    all
                                    about
                                    who take the opportunity first.</p>
                                <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                                    href="javascript:;">
                                    Read More
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="arrow_prev prev">
                        <button class="btn btn-icon-only mb-0 btn-sm d-flex align-items-center justify-content-center"
                            style="box-shadow: none">
                            <i class="fas fa-chevron-circle-left"></i>
                        </button>
                    </div>
                    <div class="arrow_next next">
                        <button class="btn btn-icon-only mb-0 btn-sm d-flex align-items-center justify-content-center"
                            style="box-shadow: none">
                            <i class="fas fa-chevron-circle-right"></i>
                        </button>
                    </div>
                </div>
                {{-- slick end --}}

                {{-- categories --}}
                <div class="col-md-9 align-self-center height-200 mt-4">
                    <h3>Kategori</h3>
                    <div class="categories">
                        <div class="height-200 categories_slider bg-cover row">
                            <div class="card justify-content-center mx-2 mt-2" style="box-shadow: none;">
                                <div class=" card-header mx-4 p-3 text-center justify-content-center">
                                    <div class="icon icon-shape icon-lg bg-gradient-primary shadow pt-2 ps-2">
                                        <img src="{{ asset('img/male_fashion.svg') }}" style="width: 80%; height: 80%;"
                                            class="opacity-9">
                                    </div>
                                </div>
                                <div class="card-body pt-0 p-3 text-center" style="min-height: 68px; max-height: 68px">
                                    <h6 class="text-center mb-0">Fashion Pria</h6>
                                </div>
                            </div>
                            <div class="card justify-content-center mx-2 mt-2" style="box-shadow: none">
                                <div class="card-header mx-4 p-3 text-center justify-content-center">
                                    <div class="icon icon-shape icon-lg bg-gradient-primary shadow pt-2 ps-2">
                                        <img src="{{ asset('img/female_fashion.svg') }}" style="width: 80%; height: 80%;"
                                            class="opacity-9">
                                    </div>
                                </div>
                                <div class="card-body pt-0 p-3 text-center" style="min-height: 68px; max-height: 68px">
                                    <h6 class="text-center mb-0">Fashion Wanita</h6>
                                </div>
                            </div>
                            <div class="card justify-content-center mx-2 mt-2" style="box-shadow: none">
                                <div class="card-header mx-4 p-3 text-center justify-content-center">
                                    <div class="icon icon-shape icon-lg bg-gradient-primary shadow pt-2 ps-2">
                                        <img src="{{ asset('img/baby_fashion.svg') }}" style="width: 80%; height: 80%;"
                                            class="opacity-9">
                                    </div>
                                </div>
                                <div class="card-body pt-0 p-3 text-center" style="min-height: 68px; max-height: 68px">
                                    <h6 class="text-center mb-0">Fashion bayi & anak</h6>
                                </div>
                            </div>
                            <div class="card justify-content-center mx-2 mt-2" style="box-shadow: none">
                                <div class="card-header mx-4 p-3 text-center justify-content-center">
                                    <div class="icon icon-shape icon-lg bg-gradient-primary shadow pt-2 ps-2">
                                        <img src="{{ asset('img/Furniture.svg') }}" style="width: 80%; height: 80%;"
                                            class="opacity-9">
                                    </div>
                                </div>
                                <div class="card-body pt-0 p-3 text-center" style="min-height: 68px; max-height: 68px">
                                    <h6 class="text-center mb-0">Furniture</h6>
                                </div>
                            </div>
                            <div class="card justify-content-center mx-2 mt-2" style="box-shadow: none">
                                <div class="card-header mx-4 p-3 text-center justify-content-center">
                                    <div class="icon icon-shape icon-lg bg-gradient-primary shadow pt-2 ps-2">
                                        <img src="{{ asset('img/food.svg') }}" style="width: 80%; height: 80%;"
                                            class="opacity-9">
                                    </div>
                                </div>
                                <div class="card-body pt-0 p-3 text-center" style="min-height: 68px; max-height: 68px">
                                    <h6 class="text-center mb-0">food</h6>
                                </div>
                            </div>
                            <div class="card justify-content-center mx-2 mt-2" style="box-shadow: none">
                                <div class="card-header mx-4 p-3 text-center justify-content-center">
                                    <div class="icon icon-shape icon-lg bg-gradient-primary shadow pt-2 ps-2">
                                        <img src="{{ asset('img/otomotif.svg') }}" style="width: 80%; height: 80%;"
                                            class="opacity-9">
                                    </div>
                                </div>
                                <div class="card-body pt-0 p-3 text-center" style="min-height: 68px; max-height: 68px">
                                    <h6 class="text-center mb-0">otomotif</h6>
                                </div>
                            </div>
                            <div class="card justify-content-center mx-2 mt-2" style="box-shadow: none">
                                <div class="card-header mx-4 p-3 text-center justify-content-center">
                                    <div class="icon icon-shape icon-lg bg-gradient-primary shadow pt-2 ps-2">
                                        <img src="{{ asset('img/ring.svg') }}" style="width: 80%; height: 80%;"
                                            class="opacity-9">
                                    </div>
                                </div>
                                <div class="card-body pt-0 p-3 text-center" style="min-height: 68px; max-height: 68px">
                                    <h6 class="text-center mb-0">Pernikahan</h6>
                                </div>
                            </div>
                        </div>
                        <div class="arrow_prev_categories prev_categories">
                            <button class="btn btn-icon-only mb-0 btn-sm d-flex align-items-center justify-content-center"
                                style="box-shadow: 0px 0px 40px 5px grey;">
                                <img src="{{ asset('img/kiri.png') }}">
                            </button>
                        </div>
                        <div class="arrow_next_categories next_categories">
                            <button class="btn btn-icon-only mb-0 btn-sm d-flex align-items-center justify-content-center"
                                style="box-shadow: 0px 0px 40px 5px grey;">
                                <img src="{{ asset('img/kanan.png') }}">
                            </button>
                        </div>
                    </div>
                </div>
                {{-- end categories --}}

                {{-- furniture --}}
                <div class="row col-md-9 align-self-center mt-n8 row justify-content-center">
                    <div class="col-md-9 align-self-center" style="position: absolute; z-index: -1;">
                        <h3>Furniture Terlaris</h3>
                        <div class="height-300 bg-cover border-radius-2xl overflow-hidden">
                            <div class="height-300 overflow-hidden  position-relative bg-cover col"
                                style="background-image: url('{{ asset('img') }}/ivancik.jpg');">
                                <span class="mask bg-gradient-dark"></span>
                                <div class="card-body position-relative d-flex flex-column p-3 height-300">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 align-self-center mt-12 row justify-content-center" style="transform: scale(0.9)">
                        <div class="col-md-7 align-self-center text-center mt-6">
                            <h2>Furniture Hasil Pengrajin Madiun</h2>
                        </div>
                        <div class="furniture mt-5">
                            <div class="furniture_slider bg-cover row">
                                @for ($i = 0; $i <= 9; $i++)
                                    <div class="btn col-xl-3 col-md-6 mb-xl-0 bg-white border-radius-xl"
                                        style="transform: scale(0.9);">
                                        <div class="card card-blog card-plain my-2">
                                            <div class="position-relative">
                                                <a class="d-block shadow-xl border-radius-xl overflow-hidden"
                                                    style="height: 150px">
                                                    <img src="{{ asset('img/product/furniture.jpg') }}"
                                                        alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                </a>
                                            </div>
                                            <div class="card-body px-1 pb-0 furniture_items">
                                                <div class="text-overflow">
                                                    <p class="title">
                                                        Ukir kayu jati motif bulgaria 60 cm
                                                    </p>
                                                </div>
                                                <p class="price mt-n3">
                                                    Rp. 50.000
                                                </p>
                                                <div class="d-flex name_store justify-content-start mt-n2">
                                                    <img style="width: 10%; height: 10%;" class="d-flex align-items-center"
                                                        src="{{ asset('img/store.svg') }}">
                                                    <p class="ms-2 d-flex align-items-center">
                                                        CV. Wilis Furniture
                                                    </p>
                                                </div>
                                                <p class="sold d-flex align-items-end">
                                                    Terjual 2,740
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div class="arrow_prev_furniture prev_furniture">
                                <button
                                    class="btn btn-icon-only mb-0 btn-sm d-flex align-items-center justify-content-center"
                                    style="box-shadow: 0px 0px 40px 5px grey;">
                                    <img src="{{ asset('img/kiri.png') }}">
                                </button>
                            </div>
                            <div class="arrow_next_furniture next_furniture">
                                <button
                                    class="btn btn-icon-only mb-0 btn-sm d-flex align-items-center justify-content-center"
                                    style="box-shadow: 0px 0px 40px 5px grey;">
                                    <img src="{{ asset('img/kanan.png') }}">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end furniture --}}

                {{-- recommended store --}}
                <div class="row col-md-9 align-self-center mt-2 row justify-content-center">
                    <h3>Toko Pilihan</h3>
                    <div class="recommended_slider bg-cover border-radius-2xl overflow-hidden">
                        @for ($i = 0; $i <= 9; $i++)
                            <div class="row justify-content-center mx-4 " style="background-color: violet">
                                <div class="btn col align-self-center mb-xl-0 bg-white border-radius-xl my-2">
                                    <div class="card card-blog card-plain my-2">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl overflow-hidden"
                                                style="height: 150px">
                                                <img src="{{ asset('img/product/furniture.jpg') }}" alt="img-blur-shadow"
                                                    class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0 food_and_drink_items">
                                            <div class="text-overflow">
                                                <p style="font-weight: bold; text-transform: none">
                                                    CV Barokah Bakery
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                {{-- end recommended store --}}

                {{-- food and drink --}}
                <div class="row col-md-9 align-self-center mt-n9 row justify-content-center">
                    <div class="col-md-9 align-self-center" style="position: absolute; z-index: -1;">
                        <h3>Makanan dan Minuman Terlaris</h3>
                        <div class="height-300 bg-cover border-radius-2xl overflow-hidden">
                            <div class="height-300 overflow-hidden  position-relative bg-cover col"
                                style="background-image: url('{{ asset('img') }}/ivancik.jpg');">
                                <span class="mask bg-gradient-dark"></span>
                                <div class="card-body position-relative d-flex flex-column p-3 height-300">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 align-self-center mt-12 row justify-content-center" style="transform: scale(0.9)">
                        <div class="col-md-7 align-self-center text-center mt-6">
                            <h2>Makanan dan Minuman Khas Madiun</h2>
                        </div>
                        <div class="food_and_drink mt-5">
                            <div class="food_and_drink_slider bg-cover row">
                                @for ($i = 0; $i <= 9; $i++)
                                    <div class="btn col-xl-3 col-md-6 mb-xl-0 bg-white border-radius-xl"
                                        style="transform: scale(0.9);">
                                        <div class="card card-blog card-plain my-2">
                                            <div class="position-relative">
                                                <a class="d-block shadow-xl border-radius-xl overflow-hidden"
                                                    style="height: 150px">
                                                    <img src="{{ asset('img/product/furniture.jpg') }}"
                                                        alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                </a>
                                            </div>
                                            <div class="card-body px-1 pb-0 food_and_drink_items">
                                                <div class="text-overflow">
                                                    <p class="title">
                                                        Ukir kayu jati motif bulgaria 60 cm
                                                    </p>
                                                </div>
                                                <p class="price mt-n3">
                                                    Rp. 50.000
                                                </p>
                                                <div class="d-flex name_store justify-content-start mt-n2">
                                                    <img style="width: 10%; height: 10%;" class="d-flex align-items-center"
                                                        src="{{ asset('img/store.svg') }}">
                                                    <p class="ms-2 d-flex align-items-center">
                                                        CV. Wilis
                                                    </p>
                                                </div>
                                                <p class="sold d-flex align-items-end">
                                                    Terjual 2,740
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div class="arrow_prev_food_and_drink prev_food_and_drink">
                                <button
                                    class="btn btn-icon-only mb-0 btn-sm d-flex align-items-center justify-content-center"
                                    style="box-shadow: 0px 0px 40px 5px grey;">
                                    <img src="{{ asset('img/kiri.png') }}">
                                </button>
                            </div>
                            <div class="arrow_next_food_and_drink next_food_and_drink">
                                <button
                                    class="btn btn-icon-only mb-0 btn-sm d-flex align-items-center justify-content-center"
                                    style="box-shadow: 0px 0px 40px 5px grey;">
                                    <img src="{{ asset('img/kanan.png') }}">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end food and drink --}}
            </div>
        </div>
        <footer class=" footer pt-3">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                                Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative
                                    Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </main>
@endsection
