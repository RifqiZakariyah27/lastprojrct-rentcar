@extends('template')
@section('content')
<section class="main-section">
    <div class="content">
        <h1>Add Rent Car</h1>
        <hr>
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li><strong>{{ $error }}</strong></li>
            @endforeach
        </div>
        @endif

        <form action="{{ route('penjualan.store') }}" method="post"">
        {{ csrf_field() }}
        </div>
        <div class="form-group">
            <label for="kode_barang">Brand Car : </label>
            <select name="kode_barang" id="kode_barang" class="form-control">
                @foreach($data as $datas)
                <option value="{{ $datas->kode_barang }}">{{ $datas->kode_barang }} || {{ $datas->nama_barang }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jml">Quantity  : </label>
            <input type="text" class="form-control" id="jml" name="jml">
        </div>
        <div class="form-group">
            <label for="total_harga">Total Price : </label>
            <input type="text" class="form-control" id="total_harga" name="total_harga">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
        </form>
    </div>
</section>
@endsection