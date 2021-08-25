@extends('seller.main')
@section('content')

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg " id="main-scrollbar">
        <!-- Navbar -->
        @include('seller.layouts.navbar')
        <!-- End Navbar -->
        <div class="container-fluid">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="../assets/img/bruce-mars.jpg" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                Alec Thompson
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                CEO / Co-Founder
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- footer --}}
        @include('seller.layouts.footer')
        {{-- end footer --}}
    </main>
@endsection
