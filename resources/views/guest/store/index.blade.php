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
                <div class="bg-white border-radius-lg shadow-blur col-sm-12 col-md-9 col-lg-10 align-self-center row justify-content-center mt-xl-9 mt-lg-7 mt-md-7 mt-sm-7"
                    style="background-color: steelblue">
                    <div class="text-start border-radius-md my-3">
                        <div class="row align-items-center">
                            <div class="col-lg-1 col-sm-2 col-md-2">
                                <img class="col-12 border-radius-xl overflow-hidden"
                                    src="{{ asset('img/bruce-mars.jpg') }}">
                            </div>
                            <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
                                <div>
                                    <b style="font-size: 25px">{{ $seller->name }}</b>
                                </div>
                                <div class="mt-1 align-items-center">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>{{ $seller->city }}</span>
                                </div>
                                <div class="mt-2">
                                    <a href="#">
                                        <div class="btn btn-dark" style="padding: 0.5rem 0.75rem;">Chat</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <p>{{ $seller->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-sm-12 col-md-9 col-lg-10 align-self-center row justify-content-center mt-xl-6 mt-lg-5 mt-md-5 mt-sm-5">
                    @forelse ($items as $items )
                        <div class="btn col-sm-4 col-md-4 col-lg-3 col-xl-2 mb-xl-0 bg-white border-radius-xl"
                            style="transform: scale(0.9);">
                            <div class="card card-blog card-plain my-2">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl overflow-hidden" style="height: 150px"
                                        href="{{ route('buy', $items->id) }}">
                                        <img src="{{ asset('img/product/furniture.jpg') }}" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0 furniture_items">
                                    <a href="{{ route('buy', $items->id) }}">
                                        <div class="text-overflow">
                                            <p class="title">
                                                {{ $items->name }}
                                            </p>
                                        </div>
                                        <p class="price mt-n3">
                                            Rp {{ number_format($items->price, 0, ',', '.') }}
                                        </p>
                                        <div class="d-flex name_store justify-content-start mt-n2">
                                            <img style="width: 10%; height: 10%;" class="d-flex align-items-center"
                                                src="{{ asset('img/store.svg') }}">
                                            <p class="ms-2 d-flex align-items-center">
                                                {{ $items->price }}
                                            </p>
                                        </div>
                                        <p class="sold d-flex align-items-end">
                                            Terjual {{ $items->sold }}
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>Belum ada barang yang dijual</p>
                    @endforelse
                </div>
            </div>
        </div>
        {{-- footer --}}
        @include('guest.layouts.footer')
        {{-- end footer --}}
    </main>
@endsection
