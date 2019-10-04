<!-- Barang -->

<!--
<section class="main-section">
    <div class="content">
        <h1 align="center"><font face="helvetica">D A T A - B A R A N G</font></h1>
        @if(Session::has('alert_message'))
        <div class="alert alert-success">
            <strong>{{ Session::get('alert_message') }}</strong>
        </div>
        @endif
        <hr>
        <div>&nbsp;
            <button class="btn btn-warning">
                <a href="{{ route('barang.create') }}">NAMBAH BARANG</a>
            </button>
        </div>
        <br>

        <table class="table table-bordered">
            <thead>
            <tr align="center">
                <th>ID</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($data as $datas)
                <tr align="center"> -->
                    <!-- <td>{{ $no++ }}</td> -->
                    <!-- <td>{{ $datas->id }}</td>
                    <td>{{ $datas->kode_barang }}</td>
                    <td>{{ $datas->nama_barang }}</td>
                    <td>{{ $datas->stok }}</td>
                    <td>{{ $datas->harga }}</td>
                    <td>
                        <?php if(Session::get('hak_akses') == "admin"){ ?>
                        <form action="{{ route('barang.destroy', $datas->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('barang.edit', $datas->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                        </form>
                        <?php } ?>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
-->



<!-- RENT CAR -->

@extends('template')
@section('content')
<section class="main-section">
    <div class="content">
        <h1 align="center"><font face="helvetica">CAR LIST</font></h1>
        @if(Session::has('alert_message'))
        <div class="alert alert-success">
            <strong>{{ Session::get('alert_message') }}</strong>
        </div>
        @endif
        <hr>
        <div>&nbsp;
            <button class="btn btn-warning">
                <a href="{{ route('barang.create') }}">Add Car</a>
            </button>
        </div>
        <br>

        <table class="table table-bordered">
            <thead>
            <tr align="center">
                <th>ID</th>
                <th>Car Brand</th>
                <th>Number Plate</th>
                <th>Stock</th>
                <th>Price/day</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($data as $datas)
                <tr align="center">
                    <!-- <td>{{ $no++ }}</td> -->
                    <td>{{ $datas->id }}</td>
                    <td>{{ $datas->kode_barang }}</td>
                    <td>{{ $datas->nama_barang }}</td>
                    <td>{{ $datas->stok }}</td>
                    <td>{{ $datas->harga }}</td>
                    <td>
                        <?php if(Session::get('hak_akses') == "admin"){ ?>
                        <form action="{{ route('barang.destroy', $datas->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('barang.edit', $datas->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                        </form>
                        <?php } ?>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection