@extends('dashboard.admin')
@section('judul')
    Create produk
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('alert'))
        <script>
            Swal.fire({
                icon: '{{ session('alert')['type'] }}', // e.g., success, error
                title: '{{ session('alert')['message'] }}', // Pesan dinamis dari controller
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
@endsection

@section('isi')
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex flex-row-reverse">
                            <a href="{{ route('admin.product.index') }}">
                                <button type="button" class="btn btn-outline-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                    </svg>
                                    Back</button>
                            </a>
                        </div>
                        <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <label for="name">name :</label>
                                <input type="text" name="name" placeholder="Name" class="form-control">
                                @error('name')
                                    <span class="me-2 text-danger fw-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <label for="price">price :</label>
                                <input type="text" name="price" placeholder="Price" class="form-control">
                                @error('price')
                                    <span class="me-2 text-danger fw-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <label for="stocks">stocks :</label>
                                <input type="number" name="stocks" placeholder="Stocks" class="form-control">
                                @error('stocks')
                                    <span class="me-2 text-danger fw-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <label for="category">category :</label>
                                <select name="category_id" id="" class="form-control">
                                    @foreach ($categories as $item)
                                        {
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        }
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="me-2 text-danger fw-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <label for="photo">Upload Photo :</label>
                                <input type="file" name="photo" placeholder="Upload Photo">
                                @error('photo')
                                    <span class="me-2 text-danger fw-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary col-md-4">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                        <path
                                            d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                                    </svg>
                                    Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
@endsection
