@extends('layouts.dash')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Utilizatori înregistrați</h5>
                        <p class="card-text">3</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Toate comenzile</h5>
                        <p class="card-text">1</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Venitul lunar</h5>
                        <p class="card-text">$329</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
    <div class="container-fluid">
        <h1>Lista cursurilor</h1>
        <hr>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Imagine</th>
                <th scope="col">Titlu</th>
                <th scope="col">Vizualizări</th>
                <th scope="col">Autor</th>
                <th scope="col">Preț</th>
                <th scope="col">Acțiuni</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><img src="https://glosmartlearning.com/wp-content/uploads/2020/10/Angular-Training.png" alt="Curs 1"></td>
                <td>Învață Angular și ASP.NET Core</td>
                <td><i class="fas fa-eye"></i> 100 vizualizări</td>
                <td>Ion Munteanu</td>
                <td>199$</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary">Editare</button>
                        <button type="button" class="btn btn-danger">Ștergere</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td><img src="https://static.gunnarpeipman.com/wp-content/uploads/2019/10/aspnet-core-featured.png" alt="Curs 2"></td>
                <td>Învață ASP.NET Core & Blazor</td>
                <td><i class="fas fa-eye"></i> 50 vizualizări</td>
                <td>Ion Munteanu</td>
                <td>299$</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary">Editare</button>
                        <button type="button" class="btn btn-danger">Ștergere</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td><img src="https://www.mindinventory.com/blog/wp-content/uploads/2022/10/unity-3d-for-game-development.png" alt="Curs 3"></td>
                <td>Învață Unity 3d</td>
                <td><i class="fas fa-eye"></i> 200 vizualizări</td>
                <td>Ion Munteanu</td>
                <td>499$</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary">Editare</button>
                        <button type="button" class="btn btn-danger">Ștergere</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
