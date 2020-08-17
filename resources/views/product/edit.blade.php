@extends('layout')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Data:</strong> not save <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row align-items-center justify-content-center h-100">
        <div class="col-12">
            <div class="card mt-md-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col text-left">Update Product</div>
                        <div class="col text-right">
                        <a href="{{ route('product.index') }}" class="btn btn-xs btn-dark">
                            <i class="fa fa-backspace"></i> Back  
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('product.update', $product->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="#">Nama Product</label>
                        <input type="text" name="name" class="form-control"
                            placeholder="Nama Product" value="{{ $product->name }}">
                    </div>
                    <div class="form-group">
                        <label for="#">Merk</label>
                        <input type="text" name="merk" class="form-control"
                            placeholder="Nama Merk" value="{{ $product->merk }}">
                    </div>
                    <div class="form-group">
                        <label for="#">Harga Beli</label>
                        <input type="text" name="harga_beli" class="form-control"
                            placeholder="Harga Beli" value="{{ $product->harga_beli }}">
                    </div>
                    <div class="form-group">
                        <label for="#">Harga Jual</label>
                        <input type="text" name="harga_jual" class="form-control"
                            placeholder="Harga Jual" value="{{ $product->harga_jual }}">
                    </div>
                    <div class="form-group">
                        <label for="#">Stock</label>
                        <input type="text" name="stock" class="form-control"
                            placeholder="Stock Product" value="{{ $product->stock }}">
                    </div>
                    <div class="form-group">
                        <label for="#">Discount</label>
                        <input type="text" name="disc" class="form-control"
                            placeholder="Discount" value="{{ $product->disc }}">
                    </div>
                    <div class="form-group">
                        <label for="#">Category</label>
                        <select class="form-control select2" name ="category_id" id="category_id" >
                            <option disabled value>Select Category</option>
                            <option value="{{ $product->category_id }}">{{ $product->category->name }}</option>
                            @foreach($category as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>                    
            </div>
            </div>
        </div>
    </div>
@endsection