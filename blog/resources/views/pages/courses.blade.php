@extends('layouts.master')

@section('content')

    <div class="course-text">Cursurile noastre</div>
    <div class="search-container pull-left">
        <form role="search" method="get" action="#">
            <div class="input-group">
                <label for="search-courses" class="sr-only">Find a product</label>
                <input class="form-control search input-lg" data-list=".list" id="search-courses" name="query" placeholder="Caută un curs..." type="text">
                <span class="input-group-btn">
        <button aria-label="Search Courses" id="search-course-button" class="btn search btn-default btn-lg" type="submit"><i class="fa fa-search"></i></button>
      </span>
            </div>
        </form>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-img-top course-box-image-container">
                    <img class="course-box-image" src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/EyEZlt0rTNeOafVHQ880" role="presentation" alt="">
                </div>
                <div class="card-body">
                    <h2 class="card-title course-listing-title">Blazor & ASP.NET Core</h2>
                    <p class="card-text course-listing-subtitle">Access all courses in the Net Ninja Pro library, extra courses not available on YouTube &amp; all Premium Udemy courses too. Plus early access to new courses.</p>
                    <p class="card-text course-listing-price">$199</p>
                    <div class="progressbar course-listing-enrolled">
                    </div>
                    <a href="/study" class="btn btn-primary">
                        <i class="fa fa-shopping-cart"></i>
                        Achiziționeaza
                    </a>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-img-top course-box-image-container">
                    <img class="course-box-image" src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/EyEZlt0rTNeOafVHQ880" role="presentation" alt="">
                </div>
                <div class="card-body">
                    <h2 class="card-title course-listing-title">Angular</h2>
                    <p class="card-text course-listing-subtitle">Access all courses in the Net Ninja Pro library, extra courses not available on YouTube &amp; all Premium Udemy courses too. Plus early access to new courses.</p>
                    <p class="card-text course-listing-price">$199</p>
                    <div class="progressbar course-listing-enrolled">
                    </div>
                    <a href="/study" class="btn btn-primary">
                        <i class="fa fa-shopping-cart"></i>
                        Achiziționeaza
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-img-top course-box-image-container">
                    <img class="course-box-image" src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/EyEZlt0rTNeOafVHQ880" role="presentation" alt="">
                </div>
                <div class="card-body">
                    <h2 class="card-title course-listing-title">React JS</h2>
                    <p class="card-text course-listing-subtitle">Access all courses in the Net Ninja Pro library, extra courses not available on YouTube &amp; all Premium Udemy courses too. Plus early access to new courses.</p>
                    <p class="card-text course-listing-price">$199</p>
                    <div class="progressbar course-listing-enrolled">
                    </div>
                    <a href="/study" class="btn btn-primary">
                        <i class="fa fa-shopping-cart"></i>
                        Achiziționeaza
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-img-top course-box-image-container">
                    <img class="course-box-image" src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=width:705/https://www.filepicker.io/api/file/EyEZlt0rTNeOafVHQ880" role="presentation" alt="">
                </div>
                <div class="card-body">
                    <h2 class="card-title course-listing-title">Unity 3d</h2>
                    <p class="card-text course-listing-subtitle">Access all courses in the Net Ninja Pro library, extra courses not available on YouTube &amp; all Premium Udemy courses too. Plus early access to new courses.</p>
                    <p class="card-text course-listing-price">$199</p>
                    <div class="progressbar course-listing-enrolled">
                    </div>
                    <a href="/study" class="btn btn-primary">
                        <i class="fa fa-shopping-cart"></i>
                        Achiziționeaza
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
