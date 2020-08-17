@extends('layout')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Dulziz</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Products <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('category.index') }}">Category</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li> -->
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="row mb-md-3 mt-md-3">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a href="{{ route('product.create') }}" class="btn btn-success">
                <i class="fas fa-plus"></i> Create New Product</a>
            </div>
        </div>
    </div>

    @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-hover table-bordered">
        <tr class="bg-light">
            <th class="text-md-center">NO</th>
            <th class="text-md-center">Nama Product</th>
            <th class="text-md-center">Merk</th>
            <th class="text-md-center">Harga Beli</th>
            <th class="text-md-center">Harga Jual</th>
            <th class="text-md-center">Stock</th>
            <th class="text-md-center">Discount</th>
            <th class="text-md-center">Category</th>
            <th width="280px" class="text-md-center">Action</th>
        </tr>
        @forelse ($product as $pr)
        <tr>
            <td class="text-md-center">{{ $loop->iteration }}</td>
            <td class="text-md-center">{{ $pr->name }}</td>
            <td class="text-md-center">{{ $pr->merk }}</td> 
            <td class="text-md-center">{{ $pr->harga_beli }}</td>
            <td class="text-md-center">{{ $pr->harga_jual }}</td>
            <td class="text-md-center">{{ $pr->stock }}</td>
            <td class="text-md-center">{{ $pr->disc }}</td>
            <td class="text-md-center">{{ $pr->category->name }}</td>
            <td class="text-md-center">
                <form action="{{ route('product.destroy', $pr->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('product.show', $pr->id) }}" class="btn btn-info">
                    <i class="fas fa-search"></i></a>
                    <a href="{{ route('product.edit', $pr->id) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i></a>
                    <button type="submit" class="btn btn-danger">
                    <i class="fas fa-trash"></i></button>
                </form>
            </td>
        </tr>    
        @empty
            <tr>
                <td colspan="8" class="text-center">Tidak Ada Data</td>
            </tr>
        @endforelse
        
    </table>

@endsection
