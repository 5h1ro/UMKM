@extends('guest.main')
@section('content')
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                @include('guest.layouts.navbar')
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg" id="main-scrollbar"
        data-scrollbar>
        <div style="height: 8vh;"></div>
        <div class="container-fluid py-4 min-vh-100" style="position: relative;">
            <div class="row justify-content-center">
                <div class="col-md-9 align-self-center">
                    <div class="bg-cover row align-content-center">
                        <div class="mt-2">
                            <h5><b>Keranjang</b></h5>
                        </div>

                        <div class="col-9 text-start">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Pilih semua
                                </label>
                            </div>
                            <div class="card-body p-3 text-start col-md-auto border-radius-md shadow-blur bg-white">
                                <div class="form-check d-inline-flex">
                                    <div class="align-self-center">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                    <div class="row align-items-center mt-1">
                                        <div class="col-2 text-center">
                                            <img class="col-8 border-radius-lg overflow-hidden"
                                                src="{{ asset('img/bruce-mars.jpg') }}">
                                        </div>
                                        <div class="col-9">
                                            <span style="font-size: 12pt">
                                                Masker SENSI MASK DUCKBILL 3-Ply Face Mask BOX Isi 50 Pcs ORIGINAL
                                            </span>
                                            <div class="mt-1 align-items-center">
                                                <b style="font-size: 16px">Rp10.399.000</b>
                                            </div>
                                            <input type="text" placeholder="1" class="border-0 col-sm-2 mt-1"
                                                style="font-size: 13px">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{-- ====== sidebar ====== --}}
                        <div class="col text-center">
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

        {{-- footer --}}
        @include('guest.layouts.footer')
        {{-- end footer --}}
    </main>
@endsection
