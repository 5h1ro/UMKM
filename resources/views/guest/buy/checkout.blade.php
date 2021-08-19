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
                                        <b style=" font-size: 25px">{{ $item->name }}</b>
                                        <div class="mt-1 align-items-center">
                                            <b style="font-size: 18px">Rp.
                                                {{ number_format($item->price, 0, ',', '.') }}</b>
                                        </div>
                                        <button class="btn btn-icon-only shadow-none mt-2 minus">
                                            <i class="fas fa-minus-circle" style="transform: scale(2)"></i>
                                        </button>
                                        <input type="text" value="1" id="total_order"
                                            class="border border-dark border-2 border-radius-md col-sm-2 total_order"
                                            style="font-size: 18px; font-weight: bold; color: slategray">
                                        <button class="btn btn-icon-only shadow-none mt-2 plus">
                                            <i class="fas fa-plus-circle" style="transform: scale(2)"></i>
                                        </button>
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
                                                <b>{{ $buyer->address }}</b> - {{ $buyer->name }}
                                                ({{ $buyer->number }})
                                            </div>
                                            <div>
                                                {{ $buyer->city->name }} - {{ $buyer->province->name }}
                                            </div>
                                        </div>
                                        <div class="col text-end align-self-center" data-dismiss="modal" aria-label="Close">
                                            &#10095;
                                        </div>
                                    </div>
                                </a>

                                <div class="row align-items-center mt-3">
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
                                                <li><button class="dropdown-item courier" id="courier" value="jne">
                                                        <div>
                                                            <span>JNE</span>
                                                        </div>
                                                    </button>
                                                </li>
                                                <li><button class="dropdown-item courier" id="courier" value="pos">
                                                        <div>
                                                            <span>POS</span>
                                                        </div>
                                                    </button>
                                                </li>
                                                <li><button class="dropdown-item courier" id="courier" value="tiki">
                                                        <div>
                                                            <span>TIKI</span>
                                                        </div>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
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
                                            <ul class="dropdown-menu col-12" aria-labelledby="dropdownMenuButton"
                                                id="ongkir">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
                                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
                                <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
                                <script>
                                    //ajax check ongkir
                                    $(".courier").click(function() {
                                        var courier_value = $(this).val();
                                        let token = $("meta[name='csrf-token']").attr("content");
                                        let city_origin = {!! json_encode($city_origin[0]) !!};
                                        let city_destination = {!! json_encode($city_destination[0]) !!};
                                        let courier = courier_value;
                                        let weight = {!! json_encode($weight) !!};

                                        isProcessing = true;
                                        jQuery.ajax({
                                            url: "/ongkir",
                                            data: {
                                                _token: token,
                                                city_origin: city_origin,
                                                city_destination: city_destination,
                                                courier: courier,
                                                weight: weight,
                                            },
                                            dataType: "JSON",
                                            type: "POST",
                                            success: function(response) {
                                                isProcessing = false;
                                                if (response) {
                                                    $('#ongkir').empty();
                                                    $.each(response[0]['costs'], function(key, value) {
                                                        $('#ongkir').append(
                                                            '<li><button class="dropdown-item cost" id="cost" value="' +
                                                            value.cost[0].value + '"><div>' +
                                                            response[0].code.toUpperCase() + ' : <strong>' +
                                                            value.service + '</strong> - Rp. ' + value.cost[
                                                                0].value + ' (' + value.cost[0].etd +
                                                            ' hari)</div></button></li>');


                                                    });
                                                    $(".cost").click(function() {
                                                        var cost = $(this).val();
                                                        $('.cost_total').empty();
                                                        $(".cost_total").append("<b>Rp. <span id='ongkir_price'>" + cost +
                                                            "</span></b>");

                                                        var price_total = parseInt($('#price').text());
                                                        var ongkir_total = parseInt($('#ongkir_price').text());
                                                        var total_fix = price_total + ongkir_total;
                                                        $('.total_fix').empty();
                                                        $(".total_fix").append("<b>Rp <span id='price'>" + total_fix +
                                                            "</span></b>");
                                                    });
                                                }
                                            }
                                        });
                                    });

                                    $(".plus").click(function() {
                                        let price = {!! json_encode($price) !!};
                                        var value = parseInt($(".total_order").val());
                                        var total = value + 1;
                                        var item_total = total * price;
                                        document.getElementById("total_order").value = total;

                                        $('.item_total').empty();
                                        $(".item_total").append("<b>Rp <span id='price'>" + item_total + "</span></b>");
                                        var price_total = parseInt($('#price').text());
                                        var ongkir_total = parseInt($('#ongkir_price').text());
                                        var total_fix = price_total + ongkir_total;
                                        $('.total_fix').empty();
                                        $(".total_fix").append("<b>Rp <span id='price'>" + total_fix + "</span></b>");

                                    });

                                    $(".minus").click(function() {
                                        let price = {!! json_encode($price) !!};
                                        var value = parseInt($(".total_order").val());
                                        if (value > 1) {
                                            var total = value - 1;
                                            var item_total = total * price;
                                            document.getElementById("total_order").value = total;

                                            $('.item_total').empty();
                                            $(".item_total").append("<b>Rp <span id='price'>" + item_total + "</span></b>");
                                            var price_total = parseInt($('#price').text());
                                            var ongkir_total = parseInt($('#ongkir_price').text());
                                            var total_fix = price_total + ongkir_total;
                                            $('.total_fix').empty();
                                            $(".total_fix").append("<b>Rp <span id='price'>" + total_fix + "</span></b>");
                                        }
                                    });

                                    $(".total_order").change(function() {
                                        let price = {!! json_encode($price) !!};
                                        var value = parseInt($(".total_order").val());
                                        if (value >= 1) {
                                            var item_total = value * price;
                                            document.getElementById("total_order").value = value;

                                            $('.item_total').empty();
                                            $(".item_total").append("<b>Rp <span id='price'>" + item_total + "</span></b>");
                                            var price_total = parseInt($('#price').text());
                                            var ongkir_total = parseInt($('#ongkir_price').text());
                                            var total_fix = price_total + ongkir_total;
                                            $('.total_fix').empty();
                                            $(".total_fix").append("<b>Rp <span id='price'>" + total_fix + "</span></b>");
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        {{-- ====== sidebar ====== --}}
                        <div class="col text-center mt-2">
                            <div class="card-body bg-white p-3 text-start border-radius-md shadow-blur">
                                <b>Ringkasan Belanja</b>
                                <div class="row justify-content-between align-items-center mt-3">
                                    <p class="col-7 text-start" style="font-size: 10pt">Total
                                        Harga (1 Barang)</p>
                                    <p class="col-5 text-end item_total" style="font-size: 10pt">
                                        <b>Rp <span id="price">{{ $item->price }}</span></b>
                                    </p>
                                </div>
                                <div class="row justify-content-between align-items-center mt-n2 border-bottom border-2">
                                    <p class="col-7 text-start" style="font-size: 10pt">Total Ongkos Kirim</p>
                                    <p class="col-5 text-end cost_total" style="font-size: 10pt">
                                        <b>Rp <span id="ongkir_price">0</span></b>
                                    </p>
                                </div>
                                <div class="row justify-content-between align-items-center mt-3 border-bottom border-2">
                                    <p class="col-7 text-start" style="font-size: 13pt">
                                        <b>Total Tagihan</b>
                                    </p>
                                    <p class="col-5 text-end total_fix" style="font-size: 13pt">
                                        <b>Rp <span id="total_fix">{{ $item->price }}</span></b>
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
