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
                        <div class="col text-center mt-2">
                            <div class="col-12 card-body bg-white p-3 text-start border-radius-md shadow-blur">
                                <img class="col-12 border-radius-xl overflow-hidden"
                                    src="{{ asset('img/product/furniture.jpg') }}">
                            </div>
                        </div>
                        <div class="col-6 text-center mt-2">
                            <div class="card-body bg-white p-3 text-start col-md-auto border-radius-md shadow-blur">
                                <b style="font-size: 20px">{{ $item->name }}</b>
                                <div class="row align-items-center mt-1">
                                    <p class="col-sm-auto ">Terjual {{ $item->sold }}</p>
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
                                        <b>Rp {{ number_format($item->price, 0, ',', '.') }}</b>
                                    </p>
                                </div>
                            </div>
                            <div class="card-body bg-white p-3 text-start col-md-auto border-radius-md mt-2 shadow-blur">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-link active" id="nav-detail-tab" data-bs-toggle="tab"
                                            href="#nav-detail" role="tab" aria-controls="nav-detail"
                                            aria-selected="true">Detail</a>
                                        <a class="nav-link" id="nav-info-tab" data-bs-toggle="tab" href="#nav-info"
                                            role="tab" aria-controls="nav-info" aria-selected="false">Info</a>
                                    </div>
                                </nav>
                                <div class="tab-content d-inline-flex" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-detail" role="tabpanel"
                                        aria-labelledby="nav-detail-tab">
                                        <dl class="row mt-2">
                                            <dt class="col-sm-3">Kondisi</dt>
                                            <dd class="col-sm-9">{{ $item->condition }}</dd>

                                            <dt class="col-sm-3">Berat</dt>
                                            <dd class="col-sm-9">{{ $item->weight }} Kg</dd>

                                            <dt class="col-sm-3">Kategori</dt>
                                            <dd class="col-sm-9">{{ $item->category->name }}</dd>

                                            <dd class="col-sm-12">{{ $item->detail }}</dd>
                                        </dl>
                                    </div>
                                    <div class="tab-pane fade min-height-250" id="nav-info" role="tabpanel"
                                        aria-labelledby="nav-info-tab">
                                        <h5 class="mt-2">Kebijakan Pengembalian Produk</h5>
                                        <div class="text-overflow3">
                                            <p>
                                                Kami menggaransi setiap product yang kami jual,
                                                caranya! (dibaca ya)- Apabila anda mengalami kendala dari produk yang Frui!
                                                kirimkan, mohon mengklik 'KOMPLAIN PESANAN' agar dapat segera kami proses.
                                                Oleh sebab itu kami memerlukan bantuanmu sebagai berikut ini:1. VIDEO proses
                                                buka
                                                produk yang kamu terima dari Frui! sebagai bukti.2. Lampirkan kode/nomor
                                                pesananmu.*Proses pengembalian dana atau pengiriman kembali akan dilakukan
                                                sehari
                                                setelah solusi pada bagian komplain pesanan disetujui. *Karena ini kesalahan
                                                kami,
                                                kamu tidak perlu bayar biaya pengiriman barang ya!
                                                Jika ada pertanyaan, silahkan menghubungi kami lewat official store kami
                                                ya..Thank
                                                you and happy shopping guys! :)
                                                #GrowingHappiness#HasilPerkebunanIndonesia#SehatBersamaFrui
                                            </p>
                                        </div>
                                        <a style="font-weight: bold" href="#">Selengkapnya</a>

                                        <h5 class="mt-2">[FRUI OFFICIAL STORE INFORMATION]</h5>
                                        <div class="text-overflow3">
                                            <p>
                                                Jam Operasional Toko : 08.00 18.00 (Customer Service)

                                                *Order diluar jam operasional toko, akan direspon pada jam 08.00 (dihari
                                                berikutnya)

                                                *Hari Sabtu dan Minggu tetap beroperasional dan ada pengiriman

                                                Info Pengiriman Frui! Jakarta Area Only:

                                                1. Order yang masuk pukul (00.00-12.00) akan dikirimkan H+1

                                                2. Order yang masuk pukul (12.01-23.59) akan dikirimkan H+2

                                                3. Untuk saat ini, pengiriman masih menggunakan mitra kurir tokopedia, kami
                                                akan berupaya menjaga kualitas produk kami hingga ke tangan customer dengan
                                                pengiriman instant.

                                                *HANYA MELAYANI JAKARTA AREA!*
                                            </p>
                                        </div>
                                        <a style="font-weight: bold" href="#">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('store', $item->idSeller) }}">
                                <div
                                    class="card-body bg-white p-3 text-start col-md-auto border-radius-md mt-2 shadow-blur">
                                    <div class="row align-items-center mt-1">
                                        <div class="col">
                                            <img class="col-12 border-radius-xl overflow-hidden"
                                                src="{{ asset('img/bruce-mars.jpg') }}">
                                        </div>
                                        <div class="col-8">
                                            <b style="font-size: 16px">{{ $item->seller->name }}</b> <br>
                                            <b style="font-size: 16px" class="text-success">Online</b>
                                        </div>
                                        <div class="col d-grid">
                                            <div class="mt-1 d-grid align-items-center">
                                                <button class="btn btn-white shadow-none border border-dark border-2">
                                                    <span class="text-dark">Follow</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col text-center mt-2">
                            <div class="card-body bg-white p-3 text-start col-md-10 border-radius-md shadow-blur">
                                <b>Atur jumlah dan catatan</b>
                                <div class="mt-1">
                                    <input type="text" placeholder="1" class="border-0 col-sm-2">
                                </div>
                                <div class="row justify-content-between align-items-center mt-1">
                                    <p class="col-sm-5 text-start">Subtotal</p>
                                    <p class="col text-end" style="font-size: 20px">
                                        <b>Rp {{ number_format($item->price, 0, ',', '.') }}</b>
                                    </p>
                                </div>
                                <div class="mt-1 d-grid align-items-center">
                                    <button class="btn btn-dark ">Keranjang</button>
                                </div>
                                <div class="mt-1 d-grid align-items-center">
                                    <a href="{{ route('checkout') }}"
                                        class="btn btn-white shadow-none border border-dark border-2">
                                        <span class="text-dark">Beli Langsung</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- footer --}}
        @include('guest.layouts.footer')
        {{-- end footer --}}
    </main>
@endsection
