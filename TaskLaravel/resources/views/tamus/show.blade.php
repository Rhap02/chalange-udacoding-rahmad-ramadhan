@extends('layouts.app')

@section('contents')
    <h2 class="mb-0">Detail Siswa</h2>
    <hr />

    <div class="row mb-3">
        <div class="col-12 mb-4">
            <label for="asal" class="form-label">Asal</label>
            <input type="text" id="asal" name="asal" class="form-control" readonly value="{{ $tamu->asal }}">
        </div>

        <div class="col-12 mb-4">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="text" id="jumlah" name="jumlah" class="form-control" readonly value="{{ $tamu->jumlah }}">
        </div>

        <div class="col-12 mb-4">
            <label for="pic" class="form-label">PIC</label>
            <input type="text" id="pic" name="pic" class="form-control" readonly value="{{ $tamu->pic }}">
        </div>

        <div class="col-12 mb-4">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" id="tanggal" name="tanggal" class="form-control" readonly value="{{ $tamu->tanggal }}">
        </div>
    </div>
@endsection
