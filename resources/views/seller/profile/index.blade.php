@extends('seller.main')
@section('content')

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg " id="main-scrollbar">
        <!-- Navbar -->
        @include('seller.layouts.navbar')
        <!-- End Navbar -->
        <div class="container-fluid">
            <div class="page-header min-height-300 border-radius-xl mt-4" style="background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ asset('img/profile/' . $seller->image) }}" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h3 class="mb-1">
                                {{ $seller->name }}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">Profile Information</h6>
                                </div>
                                <div class="col-md-4 text-end">
                                    <button type="button" class="btn btn-icon-only shadow-none" data-bs-toggle="modal"
                                        data-bs-target="#modalEdit">
                                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="" aria-hidden="true"
                                            data-bs-original-title="Edit Profile" aria-label="Edit Profile"></i><span
                                            class="sr-only"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <p class="text-sm">
                                {{ $seller->description }}
                            </p>
                            <hr class="horizontal gray-light my-4">
                            <ul class="list-group">
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">Owner:</strong> &nbsp; {{ $seller->owner }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Number:</strong>
                                    &nbsp; {{ $seller->number }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong>
                                    &nbsp; {{ $seller->user->email }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Address:</strong>
                                    &nbsp; {{ $seller->address }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">City:</strong>
                                    &nbsp; {{ $seller->city->name }}</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Province:</strong>
                                    &nbsp; {{ $seller->province->name }}</li>
                                <li class="list-group-item border-0 ps-0 pb-0">
                                    <strong class="text-dark text-sm">Social:</strong> &nbsp;
                                    <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                        <i class="fab fa-facebook fa-lg" aria-hidden="true"></i>
                                    </a>
                                    <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                        <i class="fab fa-twitter fa-lg" aria-hidden="true"></i>
                                    </a>
                                    <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0"
                                        href="{{ $seller->instagram }}">
                                        <i class="fab fa-instagram fa-lg" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Edit Modal -->
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('profile.edit') }}" method="POST" enctype="multipart/form-data" id="addForm">
                        @csrf
                        <div class="row">
                            <div class="form-group align-content-start col">
                                <label for="name" class="col-form-label" style="float: left">Name:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $seller->name }}">
                            </div>
                            <div class="form-group align-content-start col">
                                <label for="owner" class="col-form-label" style="float: left">Owner:</label>
                                <input type="text" class="form-control" id="owner" name="owner"
                                    value="{{ $seller->owner }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label" style="float: left">Description:</label>
                            <textarea name="description" id="description"
                                class="form-control">{{ $seller->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="number" class="col-form-label" style="float: left">Number:</label>
                            <input type="text" class="form-control" id="number" name="number"
                                value="{{ $seller->number }}">
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-form-label" style="float: left">Address:</label>
                            <input type="text" class="form-control" id="address" name="address"
                                value="{{ $seller->address }}">
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="province" class="col-form-label" style="float: left">Province:</label>
                                <select class="form-control" name="province" id="province">
                                    @foreach ($province as $provinces)
                                        @if ($seller->province->id == $provinces->id)
                                            <option value="{{ $provinces->id }}" selected>
                                                {{ $provinces->name }}
                                            </option>
                                        @else
                                            <option value="{{ $provinces->id }}">
                                                {{ $provinces->name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="city" class="col-form-label" style="float: left">City:</label>
                                <select class="form-control" name="city" id="city">
                                    @foreach ($city as $cities)
                                        @if ($seller->city->id == $cities->id)
                                            <option value="{{ $cities->id }}" selected>
                                                {{ $cities->name }}
                                            </option>
                                        @else
                                            <option value="{{ $cities->id }}">
                                                {{ $cities->name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group align-content-start col">
                                <label for="facebook" class="col-form-label" style="float: left">Facebook:</label>
                                <input type="text" class="form-control" id="facebook" name="facebook"
                                    value="{{ $seller->facebook }}">
                            </div>
                            <div class="form-group align-content-start col">
                                <label for="twitter" class="col-form-label" style="float: left">Twitter:</label>
                                <input type="text" class="form-control" id="twitter" name="twitter"
                                    value="{{ $seller->twitter }}">
                            </div>
                            <div class="form-group align-content-start col">
                                <label for="instagram" class="col-form-label" style="float: left">Instagram:</label>
                                <input type="text" class="form-control" id="instagram" name="instagram"
                                    value="{{ $seller->instagram }}">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="button" value="Save" class="btn bg-gradient-success" id="saveButton" />
                </div>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#saveButton").click(function() {
                            $("#addForm").submit();
                        });
                    });
                </script>
            </div>
        </div>
    </div>
    <!-- End Add Modal -->
@endsection
