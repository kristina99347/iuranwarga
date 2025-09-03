@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Officer</h3>
    <form action="{{ route('officer.update', $officer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $officer->name }}" required>
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" value="{{ $officer->username }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('officer.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
