@extends('layouts.master')

@section('content')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Meniu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Blazor & ASP.NET Core</h1>
                    <h2 class="card-subtitle mb-2 text-muted">Curs de programare web</h2>
                    <p class="card-text">Acest curs te va învăța cum sa dezvolți aplicații web folosind framework-urile Blazor și ASP.NET Core.</p>
                    <h3 class="mt-5">Ce vei învăța</h3>
                    <ul>
                        <li>Conceptele fundamentale ale Blazor si ASP.NET Core</li>
                        <li>Cum sa dezvolti aplicatii web responsive si performante</li>
                        <li>Cum sa folosesti SQL Server pentru a stoca si gestiona datele</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row flex-row-reverse">
        <div class="col-md-4">
            <div class="list-group" id="list-tab" role="tablist">
                <!-- Lista de lectii -->
                <div class="course-text">Conținutul cursului</div>
                <a class="list-group-item list-group-item-action active" id="list-lectia-1-list" data-toggle="list" href="#list-lectia-1" role="tab">Instalarea VS pentru ASP.NET CORE</a>
                <a class="list-group-item list-group-item-action" id="list-lectia-2-list" data-toggle="list" href="#list-lectia-2" role="tab">Folosirea Entity Framework</a>
                <a class="list-group-item list-group-item-action" id="list-lectia-3-list" data-toggle="list" href="#list-lectia-3" role="tab">Invatarea manipularii bazelor de date cu LINQ</a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="tab-content" id="nav-tabContent">
                <!-- Continutul lectiilor -->
                <div class="tab-pane fade show active" id="list-lectia-1" role="tabpanel">
                    <div class="course-text">Instalarea VS pentru ASP.NET CORE</div>
                    <iframe width="1050" height="700" src="https://www.youtube.com/embed/545I7ObRl8Q" title="Colapsul bancar continuă - vine criza?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="tab-pane fade" id="list-lectia-2" role="tabpanel">
                    <div class="course-text">Folosirea Entity Framework</div>
                    <p>Continutul lectiei 2...</p>
                </div>
                <div class="tab-pane fade" id="list-lectia-3" role="tabpanel">
                    <div class="course-text">Invatarea manipularii bazelor de date cu LINQ</div>
                    <p>Continutul lectiei 3...</p>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
