@extends('layouts.dash')

@section('content')
    <div class="container-fluid">
        <h1>Adăugare noutăți</h1>
        <hr>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('add-news') }}">
            @csrf
            <div class="form-group">
                <label for="title">Titlu</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Introduceți titlul noutății" value="{{ old('title') }}">
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Descriere</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Introduceți descrierea noutății..." value="{{ old('description') }}"></textarea>
   @error('description')
                  <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Adăugare</button>
    </form>
    </div>
@endsection
