@extends('layouts.nofooter')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3 style="color: black;" class="fw-bold">Edit Motorcycle Data</h3>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('admin.motorcycles.update', $motorcycle) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="product_id" class="form-label">Product</label>
                                <select class="form-select" id="product_id" name="product_id">
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $motorcycle->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" id="price" name="price"
                                    value="{{ $motorcycle->price }}">
                            </div>
                            <div class="mb-3">
                                <label for="condition" class="form-label">Condition</label>
                                <textarea class="form-control" id="condition" name="condition" rows="5" placeholder="Enter Condition">{{ $motorcycle->condition }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image_path" class="form-label">Condition</label>
                                <textarea class="form-control" id="image_path" name="image_path" rows="3" placeholder="Image Link Address">{{ $motorcycle->image_path }}</textarea>
                            </div>
                            {{-- <div class="mb-3">
                                <label for="image_path" class="form-label">Image</label>
                                <input type="text" class="form-control" id="image_path" name="image_path"
                                    value="{{ $motorcycle->image_path }}">
                            </div> --}}
                            <div class="mb-3">
                                <label for="link" class="form-label">Link</label>
                                <input type="text" class="form-control" id="link" name="link"
                                    value="{{ $motorcycle->link }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
