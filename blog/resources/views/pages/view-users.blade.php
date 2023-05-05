@extends('layouts.dash')

@section('content')
    <div class="container-fluid">
        <h1>Lista utilizatorilor</h1>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Nume</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Acțiuni</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Ion Munteanu</td>
                        <td>ion@gmail.com</td>
                        <td>
                            <select class="form-control">
                                <option>Utilizator</option>
                                <option>Editor</option>
                                <option>Administrator</option>
                            </select>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success">Salvare</button>
                            <button type="button" class="btn btn-danger">Ștergere</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Johny</td>
                        <td>jane.doe@example.com</td>
                        <td>
                            <select class="form-control">
                                <option>Utilizator</option>
                                <option>Mentor</option>
                                <option>Administrator</option>
                            </select>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success">Salvare</button>
                            <button type="button" class="btn btn-danger">Ștergere</button>
                        </td>
                    </tr>
                    <!-- Mai multe rânduri pentru alți utilizatori -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
