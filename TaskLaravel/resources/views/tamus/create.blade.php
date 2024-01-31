@extends('layouts.app')

@section('title', 'Add Tamu')

@section('contents')
<div class="container">
    
    <hr />

    <form action="{{ route('tamus.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label for="asal" class="form-label">Asal</label>
            <input type="text" id="asal" name="asal" class="form-control" placeholder="Enter Asal" value="{{ old('asal') }}" required>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="text" id="jumlah" name="jumlah" class="form-control" placeholder="Enter Jumlah" value="{{ old('jumlah') }}" required>
        </div>

        <div class="mb-3">
            <label for="pic" class="form-label">PIC</label>
            <input type="text" id="pic" name="pic" class="form-control" placeholder="Enter PIC" value="{{ old('pic') }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Enter Tanggal" value="{{ old('tanggal') }}" required>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
