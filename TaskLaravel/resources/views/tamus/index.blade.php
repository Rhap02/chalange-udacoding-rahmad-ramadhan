@extends('layouts.app')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h2 class="mb-0">Buku Tamu</h2>
    <a href="{{ route('tamus.create')}}" class="btn btn-primary">Add</a>
</div>
<hr />

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success' )}}
</div>
@endif

<div class="table-responsive">
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th class="align-middle">#</th>
                <th class="align-middle">ASAL</th>
                <th class="align-middle">JUMLAH</th>
                <th class="align-middle">PIC</th>
                <th class="align-middle">TANGGAL</th>
                <th class="align-middle">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tamu as $rs)
            <tr>
                <td class="align-middle">{{ $loop->iteration }}</td>
                <td class="align-middle">{{ $rs->asal }}</td>
                <td class="align-middle">{{ $rs->jumlah }}</td>
                <td class="align-middle">{{ $rs->pic }}</td>
                <td class="align-middle">{{ $rs->tanggal }}</td>
                <td class="align-middle">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('tamus.show', $rs->id) }}" class="btn btn-secondary">Detail</a>
                        <a href="{{ route('tamus.edit', $rs->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('tamus.destroy', $rs->id) }}" method="POST" class="btn btn-danger btn-sm">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm m-0">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td class="text-center" colspan="6">Data not found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
