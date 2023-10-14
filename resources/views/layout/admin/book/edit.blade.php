@extends('templates.admin.layout')
@section('content')
    <div class="container-fluid p-2 border border-2 border-white rounded-2 my-5">
        <form class="row g-3" action="{{ route('edit_book', ['id' => $book->id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <label for="inputAddress" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputAddress" value="{{ $book->name }}" name="name">
                @if ($errors->has('name'))
                    <p><small class="px-2 text-danger">{{ $errors->first('name') }}</small></p>
                @endif
            </div>
            <div class="col-md-6">
                <label for="inputAddress1" class="form-label">Price</label>
                <input type="text" class="form-control" id="inputAddress1" value="{{ $book->price }}" name="price">
                @if ($errors->has('price'))
                    <p><small class="px-2 text-danger">{{ $errors->first('price') }}</small></p>
                @endif
            </div>
            <div class="col-md-4">
                <label for="inputAddress2" class="form-label">Category</label>
                <select class="form-select" name="id_cate" aria-label="Default select example">
                    @foreach ($cate as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $book->id_cate ? 'selected' : '' }}>
                            {{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputAddress3" class="form-label">Count</label>
                <input type="text" class="form-control" id="inputAddress3"value="{{ $book->soLuong }}" name="soLuong">
                @if ($errors->has('soLuong'))
                    <p><small class="px-2 text-danger">{{ $errors->first('soLuong') }}</small></p>
                @endif
            </div>
            <div class="col-md-4">
                <label for="inputAddress4" class="form-label">Author</label>
                <input type="text" class="form-control" id="inputAddress4"value="{{ $book->author }}" name="author">
                @if ($errors->has('author'))
                    <p><small class="px-2 text-danger">{{ $errors->first('author') }}</small></p>
                @endif
            </div>
            <div class="col-md-12">
                <div class="col-6">
                    <label for="image" class="form-label">File Image</label>
                    <input type="file" class="@error('image') is-invalid @enderror form-control" name="image"
                        id="image" accept="image/*">
                </div>
                <div class="col-md-6 my-2">
                    <img id="image_preview" style="width: 300px ; height:150px" src="{{ Storage::url($book->image) }}"
                        alt="User">
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="" class="form-label">Descrition</label>
                        <textarea class="form-control" name="description" id="" rows="4">{{ $book->description }}</textarea>
                        @if ($errors->has('description'))
                            <p><small class="px-2 text-danger">{{ $errors->first('description') }}</small></p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
