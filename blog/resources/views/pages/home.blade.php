@extends('layouts.master')

@section('content')

    <section class="selling-points">
        <div class="container">
            <h2 class="section-title">De ce să devii membru NevoCode?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="selling-point">
                        <img src="./assets/images/header.png" alt="Access Every Course">
                        <h3>Acces la fiecare curs</h3>
                        <p>Obțineți acces instant la întreaga bibliotecă de cursuri de pe NevoCode, fără nicio limită de timp sau restricții.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="selling-point">
                        <img src="./assets/images/header.png" alt="Exclusive Courses">
                        <h3>Cursuri exclusive</h3>
                        <p>Bucurați-vă de cursuri exclusive, concepute special pentru membrii NevoCode care nu sunt disponibile în alte părti.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="selling-point">
                        <img src="./assets/images/header.png" alt="Premium Courses">
                        <h3>Cursuri premium</h3>
                        <p>Primiți acces gratuit la toate cursurile premium NevoCode, inclusiv cele de pe Udemy, și învățați cele mai noi tehnologii.</p>
                    </div>
                </div>
            </div>
            <a href="/register" class="btn btn-primary"><i class="fa fa-user-plus"></i> Înscrieți-vă acum</a>
        </div>
    </section>

    <div class="course-text">Noutăți</div>

    @foreach ($news as $item)
        <h2>{{ $item->title }}</h2>
        <p>{{ $item->description }}</p>

        <div class="line"></div>
    @endforeach

    <div class="pagination">
    </div>

@endsection
