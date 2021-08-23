@extends('seller.main')
@section('content')

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg " id="main-scrollbar">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">{{ $user->name }}</span>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('img') }}/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">Profil</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="{{ route('logout') }}">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('img') }}/small-logos/logo-spotify.svg"
                                                    class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">Logout</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4" style="height: 87vh;">
            <div class="row">
                <div class="col-12">
                    {{-- <div class="card">
                        <div class="card-header justify-content-between">
                            <div class="row">
                                <div class="col">
                                    <h4>Export Table</h4>
                                </div>
                                <a href="#" class="btn btn-primary col-2">
                                    <span class="fa fa-plus">
                                    </span>Tambah Lowongan
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-center w-2">
                                                #
                                            </th>
                                            <th class="w-30">Name</th>
                                            <th class="w-20">Detail</th>
                                            <th>Price</th>
                                            <th>Condition</th>
                                            <th>Weight</th>
                                            <th>Category</th>
                                            <th>Sold</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($item as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->detail }}</td>
                                                <td>Rp. {{ number_format($item->price, 0, ',', '.') }}</td>
                                                <td>{{ $item->condition }}</td>
                                                <td>{{ $item->weight }}</td>
                                                <td>{{ $item->category->name }}</td>
                                                <td>{{ $item->sold }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-info mr-1">Detail</a>
                                                    <a href="#" class="btn btn-success mr-1">Edit</a>
                                                    <a href="#" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Name</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Detail</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Price</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Condition</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Weight</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Category</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Stock</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Sold</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($item as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">

                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-xs">{{ $loop->iteration }}.
                                                            {{ $item->name }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $item->detail }}</p>
                                            </td>
                                            <td>
                                                <span class="text-dark text-xs" style="font-weight: bold">Rp.
                                                    {{ number_format($item->price, 0, ',', '.') }}</span>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $item->condition }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $item->weight }} gram</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $item->category->name }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $item->stock }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $item->sold }}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <button type="button"
                                                    class="btn bg-gradient-info text-secondary mb-0 btnInfo"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modalIessage{{ $loop->iteration }}"
                                                    id="btn{{ $loop->iteration }}">
                                                    <i class="fa fa-info text-xs text-white" aria-hidden="true"></i>
                                                </button>
                                                <!-- Info Modal -->
                                                <div class="modal fade" id="modalIessage{{ $loop->iteration }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="modalIessageTitle"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Item</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="form-group align-content-start col">
                                                                            <label for="name" class="col-form-label"
                                                                                style="float: left">Name:</label>
                                                                            <input type="text" class="form-control"
                                                                                value="{{ $item->name }}" id="name"
                                                                                name="name">
                                                                        </div>
                                                                        <div class="form-group col">
                                                                            <label for="price" class="col-form-label"
                                                                                style="float: left">Price:</label>
                                                                            <input type="number" class="form-control"
                                                                                value="{{ $item->price }}" id="price"
                                                                                name="price"></input>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="detail" class="col-form-label"
                                                                            style="float: left">Detail:</label>
                                                                        <textarea name="detail" id="detail"
                                                                            class="form-control">{{ $item->detail }}</textarea>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col">
                                                                            <label for="condition" class="col-form-label"
                                                                                style="float: left">Condition:</label>
                                                                            <select class="form-control" id="condition">
                                                                                @if ($item->condition == 'Baru')
                                                                                    <option value="Baru" selected>Baru
                                                                                    </option>
                                                                                    <option value="Bekas">Bekas</option>
                                                                                @else
                                                                                    <option value="Baru">Baru
                                                                                    </option>
                                                                                    <option value="Bekas" selected>Bekas
                                                                                    </option>
                                                                                @endif
                                                                            </select>
                                                                        </div>
                                                                        <div class=" form-group col">
                                                                            <label for="weight" class="col-form-label"
                                                                                style="float: left">Weight:</label>
                                                                            <input type="number" class="form-control"
                                                                                value="{{ $item->weight }}" id="weight"
                                                                                name="weight"></input>
                                                                        </div>
                                                                        <div class="form-group col">
                                                                            <label for="category" class="col-form-label"
                                                                                style="float: left">Category:</label>
                                                                            <select class="form-control" id="category">
                                                                                @foreach ($category as $categories)
                                                                                    @if ($item->category->id == $categories->id)
                                                                                        <option
                                                                                            value="{{ $categories->id }}"
                                                                                            selected>
                                                                                            {{ $categories->name }}
                                                                                        </option>
                                                                                    @else
                                                                                        <option
                                                                                            value="{{ $categories->id }}">
                                                                                            {{ $categories->name }}
                                                                                        </option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class=" form-group col">
                                                                            <label for="stock" class="col-form-label"
                                                                                style="float: left">Stock:</label>
                                                                            <input type="number" class="form-control"
                                                                                value="{{ $item->stock }}" id="stock"
                                                                                name="weight"></input>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn bg-gradient-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn bg-gradient-primary">Send
                                                                    message</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Info Modal -->
                                                <button type="button" class="btn bg-gradient-danger text-secondary mb-0">
                                                    <i class="fa fa-trash text-xs text-white" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <script>
            var buttons = document
                .getElementsByTagName("button");
            for (var i = 0; i < buttons.length; i++) {
                var button = buttons[i];
                var id = document.getElementById("btn" + i);
                console.log(id);
                $(document).ready(function() {
                    $("#btn" + i).click(function() {
                        $("#modalIessage").modal();
                    });
                });
            }
        </script> --}}
        <footer class="footer pt-3">
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
