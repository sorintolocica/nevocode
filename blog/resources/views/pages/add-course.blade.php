@extends('layouts.dash')

@section('content')
    <div class="container-fluid">
        <h1>Adăugare curs nou</h1>
        <hr>
        <form>
            <div class="form-group">
                <label for="titlu">Titlu</label>
                <input type="text" class="form-control" id="titlu" placeholder="Introduceți titlul cursului">
            </div>
            <div class="form-group">
                <label for="descriere">Descriere</label>
                <textarea class="form-control" id="descriere" rows="3" placeholder="Introduceți o descriere a cursului"></textarea>
            </div>
            <div class="form-group">
                <label for="link">Link video</label>
                <input type="text" class="form-control" id="link" placeholder="Introduceți link-ul video pentru curs">
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" class="form-control" id="autor" placeholder="Introduceți numele autorului">
            </div>
            <button type="submit" class="btn btn-primary">Adăugare</button>
        </form>
    </div>
@endsection
