@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Siswa</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('product.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>

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
        <form action="{{ route('product.show', $product->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="#">Name</label>
                        <div class="form-control">{{ $product->nama }}</div>
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
                </div>
            </div>
        </form>
    </div>
@endsection

          
            
            