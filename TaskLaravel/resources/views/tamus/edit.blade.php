@extends('layouts.app')

@section('contents')
    <div class="container">
        <h4 class="mb-4">Edit Tamu</h4 >
        <hr />
        <form action="{{ route('tamus.update', $tamu->id) }}" method="POST">
            @csrf
            @method('PUT')

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row mb-3">
                <div class="col-12 mb-4">
                    <label for="asal" class="form-label">Asal</label>
                    <input type="text" id="asal" name="asal" class="form-control" placeholder="Asal" value="{{ $tamu->asal }}">
                </div>

                <div class="col-12 mb-4">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="text" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah" value="{{ $tamu->jumlah }}">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12">
                    <label for="pic" class="form-label">PIC</label>
                    <input type="text" id="pic" name="pic" class="form-control" placeholder="PIC" value="{{ $tamu->pic }}">
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal" value="{{ $tamu->tanggal }}">
                </div>
            </div>

            <div class="row">
                <div class="d-grid">
                    <button class="btn btn-warning">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
