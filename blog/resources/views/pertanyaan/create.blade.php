@extends('adminlte.master')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Buat Pertanyaan Baru</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
        <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul pertanyaan Anda">
        </div>
        
        <div class="form-group">
        <label for="isi">Isi</label>
            <textarea class="form-control" rows="3" plid="isi" name="isi" placeholder="Masukkan pertanyaan Anda"></textarea>
        </div>
        
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Buat!</button>
    </div>
    </form>
</div>
@endsection