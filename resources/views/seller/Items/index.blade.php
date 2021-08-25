@extends('seller.main')
@section('content')

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg " id="main-scrollbar">
        <!-- Navbar -->
        @include('seller.layouts.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4" style="height: 87vh;">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="row">
                            <div class="col mt-3 mb-1 d-flex justify-content-start">
                                <span class="ms-4" style="font-weight: bold; font-size: 18pt">My
                                    Product</span>
                            </div>
                            <div class="col mt-3 mb-1 d-flex justify-content-end">
                                <button type="button" class="btn bg-gradient-success text-secondary mb-0 me-4"
                                    data-bs-toggle="modal" data-bs-target="#modalAdd">
                                    <i class="fa fa-plus text-xs text-white" aria-hidden="true"></i>
                                    <span style="color: white">Add
                                        Product</span>
                                </button>
                                <!-- Add Modal -->
                                <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog"
                                    aria-labelledby="modalAddTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Item</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('product.add') }}" method="POST"
                                                    enctype="multipart/form-data" id="addForm">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="form-group align-content-start col">
                                                            <label for="name" class="col-form-label"
                                                                style="float: left">Name:</label>
                                                            <input type="text" class="form-control" id="name" name="name">
                                                        </div>
                                                        <div class="form-group col">
                                                            <label for="price" class="col-form-label"
                                                                style="float: left">Price:</label>
                                                            <input type="number" class="form-control" id="price"
                                                                name="price"></input>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="detail" class="col-form-label"
                                                            style="float: left">Detail:</label>
                                                        <textarea name="detail" id="detail" class="form-control"></textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col">
                                                            <label for="condition" class="col-form-label"
                                                                style="float: left">Condition:</label>
                                                            <select class="form-control" name="condition" id="condition">
                                                                <option value="Baru">Baru
                                                                </option>
                                                                <option value="Bekas">Bekas
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class=" form-group col">
                                                            <label for="weight" class="col-form-label"
                                                                style="float: left">Weight:</label>
                                                            <input type="number" class="form-control" id="weight"
                                                                name="weight"></input>
                                                        </div>
                                                        <div class="form-group col">
                                                            <label for="category" class="col-form-label"
                                                                style="float: left">Category:</label>
                                                            <select class="form-control" id="category" name="category">
                                                                @foreach ($category as $categories)
                                                                    <option value="{{ $categories->id }}">
                                                                        {{ $categories->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class=" form-group col">
                                                            <label for="stock" class="col-form-label"
                                                                style="float: left">Stock:</label>
                                                            <input type="number" class="form-control" id="stock"
                                                                name="stock"></input>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="col-form-label ms-1">Picture:</div>
                                                <form method="post" action="{{ route('product.store') }}"
                                                    enctype="multipart/form-data" class="form-control dropzone"
                                                    id="dropzone">
                                                    @csrf
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <input type="button" value="Submit" class="btn bg-gradient-success"
                                                    id="saveButton" />
                                                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                                {{-- Dropzone js --}}
                                                <script src="{{ asset('js/plugins/dropzone.js') }}" type="text/javascript"></script>
                                                <script type="text/javascript">
                                                    Dropzone.options.dropzone = {
                                                        maxFilesize: 12,
                                                        renameFile: function(file) {
                                                            var dt = new Date();
                                                            var time = dt.getTime();
                                                            let filename = file.name;
                                                            const myArr = filename.split(".");
                                                            var name = myArr[1];
                                                            return time + "." + name;
                                                        },
                                                        acceptedFiles: ".jpeg,.jpg,.png,.gif",
                                                        addRemoveLinks: true,
                                                        timeout: 50000,
                                                        removedfile: function(file) {
                                                            var name = file.upload.filename;
                                                            $.ajax({
                                                                headers: {
                                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                                },
                                                                type: 'POST',
                                                                url: '{{ route('product.destroy') }}',
                                                                data: {
                                                                    filename: name
                                                                },
                                                                success: function(data) {
                                                                    console.log("File has been successfully removed!!");
                                                                },
                                                                error: function(e) {
                                                                    console.log(e);
                                                                }
                                                            });
                                                            var fileRef;
                                                            return (fileRef = file.previewElement) != null ?
                                                                fileRef.parentNode.removeChild(file.previewElement) : void 0;
                                                        },

                                                        success: function(file, response) {
                                                            console.log(response);
                                                        },
                                                        error: function(file, response) {
                                                            return false;
                                                        }
                                                    };
                                                </script>
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
                                </div>
                                <!-- End Add Modal -->
                            </div>

                        </div>
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
                                                                <form action="{{ route('product.edit') }}" method="POST"
                                                                    enctype="multipart/form-data" id="editForm">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $item->id }}" id="id" name="id"
                                                                            style="display: none">
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
                                                                            <select class="form-control" id="condition"
                                                                                name="condition">
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
                                                                            <select class="form-control" id="category"
                                                                                name="category">
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
                                                                                name="stock"></input>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn bg-gradient-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn bg-gradient-info"
                                                                    id="editButton">
                                                                    Save
                                                                </button>
                                                            </div>
                                                            <script type="text/javascript">
                                                                $(document).ready(function() {
                                                                    $("#editButton").click(function() {
                                                                        $("#editForm").submit();
                                                                    });
                                                                });
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Info Modal -->
                                                <a href="{{ route('product.delete', $item->id) }}"
                                                    class="btn bg-gradient-danger text-secondary mb-0">
                                                    <i class="fa fa-trash text-xs text-white" aria-hidden="true"></i>
                                                </a>
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

        {{-- footer --}}
        @include('seller.layouts.footer')
        {{-- end footer --}}

    </main>
@endsection
