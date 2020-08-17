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
                    <div class="col text-eft">Product</div>
                    <div class="col text-right">
                    <a href="{{ route('product.index') }}" class="btn btn-xs btn-dark">
                        <i class="fa fa-backspace"></i> Back  
                    </a>
                </div>
                </div>
            </div>
            <div class="card-body">
            <form action="{{ route('product.show', $product->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="#">Name</label>
                    <div class="form-control">{{ $product->name }}</div>
                </div>
                <div class="form-group">
                    <label for="#">Merk</label>
                    <div class="form-control">{{ $product->merk }}</div>
                </div>
                <div class="form-group">
                    <label for="#">Harga jual</label>
                    <div class="form-control">{{ $product->harga_jual }}</div>
                </div>
                <div class="form-group">
                    <label for="#">Harga beli</label>
                    <div class="form-control">{{ $product->harga_beli }}</div>
                </div>
                <div class="form-group">
                    <label for="#">Stock</label>
                    <div class="form-control">{{ $product->stock }}</div>
                </div>
                <div class="form-group">
                    <label for="#">Discount</label>
                    <div class="form-control">{{ $product->disc }}</div>
                </div>
            </form>                    
            </div>
            </div>
        </div>
    </div>
@endsection