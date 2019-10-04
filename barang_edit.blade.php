@extends('template')
@section('content')
<section class="mais-section">
    <div class="content">
        <h1>EDIT CAR</h1>
        <hr>

        @foreach($data as $datas)
        <form action="{{ route('barang.update', $datas->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
        <div class="form-group">
            <label for="kode_barang">Brand Car : </label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" value=" {{ $datas->kode_barang}} ">
        </div>
        <div class="form-group">
            <label for="nama_barang">Number Plate : </label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value=" {{ $datas->nama_barang}} ">
        </div>
        <div class="form-group">
            <label for="stok">Stock : </label>
            <input type="text" class="form-control" id="stok" name="stok" value=" {{ $datas->stok}} ">
        </div>
        <div class="form-group">
            <label for="harga">Price : </label>
            <input type="text" class="form-control" id="harga" name="harga" value=" {{ $datas->harga}} ">
        </div>
            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                <button type="reset" class="btn btn-md btn-danger">Cancel</button>
            </div>
        </form>
        @endforeach
    </div>
</section>
@endsection