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
        <div class="container-fluid py-4" style="position: relative;">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-10" style="position: absolute; z-index: -1;">
                    <div class="height-300 bg-cover border-radius-2xl overflow-hidden">
                        <div class="height-300 overflow-hidden  position-relative bg-cover col"
                            style="background-image: url('{{ asset('img') }}/ivancik.jpg');">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative d-flex flex-column p-3 height-300">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-sm-12 col-md-9 col-lg-10 align-self-center row justify-content-center mt-xl-8 mt-lg-7 mt-md-7 mt-sm-7">
                    @for ($i = 0; $i <= 9; $i++)
                        <div class="btn col-sm-4 col-md-4 col-lg-3 col-xl-2 mb-xl-0 bg-white border-radius-xl"
                            style="transform: scale(0.9);">
                            <div class="card card-blog card-plain my-2">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl overflow-hidden" style="height: 150px"
                                        href="{{ url('buy') }}">
                                        <img src="{{ asset('img/product/furniture.jpg') }}" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0 furniture_items">
                                    <a href="{{ url('buy') }}">
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
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        {{-- footer --}}
        @include('guest.layouts.footer')
        {{-- end footer --}}
    </main>
@endsection
