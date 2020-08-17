@extends('layout')
@section('title') Tambah Data Baru @endsection
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
                      <div class="col text-eft">Create New Product</div>
                      <div class="col text-right">
                        <a href="{{ route('product.index')}}" class="btn btn-xs btn-dark">
                          <i class="fa fa-backspace"></i> View Products  
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <form action="{{ route('product.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="#">Nama Product</label>
                        <input type="text" name="name" class="form-control"
                         placeholder="Nama Product">
                    </div>
                    <div class="form-group">
                        <label for="#">Merk</label>
                        <input type="text" name="merk" class="form-control" 
                        placeholder="Merk">
                    </div>
                    <div class="form-group">
                        <label for="#">Harga Beli</label>
                        <input type="text" name="harga_beli" class="form-control"
                         placeholder="Harga Beli">
                    </div>
                    <div class="form-group">
                        <label for="#">Harga Jual</label>
                        <input type="text" name="harga_jual" class="form-control"
                         placeholder="Harga Jual">
                    </div>
                    <div class="form-group">
                        <label for="#">Stock</label>
                        <input type="text" name="stock" class="form-control"
                         placeholder="Stock">
                    </div>
                    <div class="form-group">
                        <label for="#">Discount</label>
                        <input type="text" name="disc" class="form-control"
                         placeholder="Discount">
                    </div>
                    <div class="form-group">
                        <label for="#">Category</label>
                        <select class="form-control select2" name ="category_id" id="category_id" width="100%">
                            <option disabled value>Select Category</option>
                            @foreach($category as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>                    
                </div>
                </div>
            </div>
        </div>
@endsection