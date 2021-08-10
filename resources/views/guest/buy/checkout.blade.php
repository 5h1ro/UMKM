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
        <div class="container-fluid py-4 vh-100" style="position: relative;">
            <div class="row justify-content-center">
                <div class="col-md-9 align-self-center">
                    <div class="bg-cover row align-content-center">
                        <div class="mt-2">
                            <h3>Beli Langsung</h3>
                        </div>
                        <div class="col-9 text-start mt-2">
                            <div class="card-body bg-white p-3 text-start border-radius-md shadow-blur d-inline-flex">
                                <b style="font-size: 20px">Barang yang dibeli</b>
                            </div>
                            <div class="card-body bg-white p-3 text-start col-md-auto border-radius-md shadow-blur mt-3">
                                <div class="row align-items-center mt-1">
                                    <div class="col">
                                        <img class="col-12 border-radius-xl overflow-hidden"
                                            src="{{ asset('img/bruce-mars.jpg') }}">
                                    </div>
                                    <div class="col-10">
                                        <b style="font-size: 25px">Masker SENSI MASK DUCKBILL 3-Ply Face Mask BOX Isi 50 Pcs
                                            ORIGINAL</b>
                                        <div class="mt-1 align-items-center">
                                            <b style="font-size: 18px">Rp10.399.000</b>
                                        </div>
                                        <input type="text" placeholder="1" class="border-0 col-sm-2 mt-1"
                                            style="font-size: 18px">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body bg-white p-3 text-start border-radius-md shadow-blur d-inline-flex mt-5">
                                <b style="font-size: 20px">Pengiriman</b>
                            </div>
                            <div class="card-body bg-white p-3 text-start col-md-auto border-radius-md shadow-blur mt-3">
                                <a href="#">
                                    <div class="border-bottom border-2 row align-content-between pb-2">
                                        <div class="col-10">
                                            <div>
                                                <b>Desa Winong</b> - Nurhakiki (6285806651560)
                                            </div>
                                            <div>
                                                Ds winong rt 1 rw 1, Gemarang, Kab. Madiun
                                            </div>
                                        </div>
                                        <div class="col text-end align-self-center" data-dismiss="modal" aria-label="Close">
                                            &#10095;
                                        </div>
                                    </div>
                                </a>

                                <div class="row align-items-center mt-3">
                                    <div class="col">
                                        <b>Pilih Pengiriman</b>
                                        <div class="dropdown">
                                            <button
                                                class="btn col-12 bg-white shadow-none border border-2 dropdown-toggle align-content-between"
                                                type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <span>
                                                    Reguler
                                                </span>
                                            </button>
                                            <ul class="dropdown-menu col-12" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="#">
                                                        <div>
                                                            <span>Reguler (2-4 hari)</span><br>
                                                            <span style="font-size: 11px">Rp 19.000 - Rp 33.000</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">
                                                        <div>
                                                            <span>Reguler (5-9 hari)</span><br>
                                                            <span style="font-size: 11px">Rp 31.000 - Rp 35.000</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">
                                                        <div>
                                                            <span>Kargo (5-7 hari)</span><br>
                                                            <span style="font-size: 11px">Rp 80.000</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <b>Pilih Kurir</b>
                                        <div class="dropdown">
                                            <button
                                                class="btn col-12 bg-white shadow-none border border-2 dropdown-toggle align-content-between"
                                                type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <span>
                                                    J&T
                                                </span>
                                            </button>
                                            <ul class="dropdown-menu col-12" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="#">
                                                        <div>
                                                            <span>J&T</span><br>
                                                            <span style="font-size: 11px">Rp 33.000</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">
                                                        <div>
                                                            <span>JNE</span><br>
                                                            <span style="font-size: 11px">Rp 30.000</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- ====== sidebar ====== --}}
                        <div class="col text-center mt-2">
                            <div class="card-body bg-white p-3 text-start border-radius-md shadow-blur">
                                <b>Ringkasan Belanja</b>
                                <div class="row justify-content-between align-items-center mt-3">
                                    <p class="col-7 text-start" style="font-size: 10pt">Total
                                        Harga (1 Barang)</p>
                                    <p class="col-5 text-end" style="font-size: 10pt">
                                        <b>Rp115.000</b>
                                    </p>
                                </div>
                                <div class="row justify-content-between align-items-center mt-n2 border-bottom border-2">
                                    <p class="col-7 text-start" style="font-size: 10pt">Total Ongkos Kirim</p>
                                    <p class="col-5 text-end" style="font-size: 10pt">
                                        <b>Rp19.000</b>
                                    </p>
                                </div>
                                <div class="row justify-content-between align-items-center mt-3 border-bottom border-2">
                                    <p class="col-7 text-start" style="font-size: 13pt">
                                        <b>Total Tagihan</b>
                                    </p>
                                    <p class="col-5 text-end" style="font-size: 13pt">
                                        <b>Rp132.000</b>
                                    </p>
                                </div>
                                <div class="mt-3 d-grid align-items-center">
                                    <button class="btn btn-dark ">Bayar</button>
                                </div>
                            </div>
                        </div>
                        {{-- ====== end sidebar ====== --}}
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
