@extends ('front.layout.layout_default')
@section('title')
Technologie
@endsection
@section('content')
<!-- .page-content start -->
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                    <h1><span>Informati</span>que</h1>
                </div><!-- .custom-heading.style-1 end -->
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->
<div class="page-content">
    <section class="breadcumb-wrapper">
        <div class="container clearfix">
            <ul class="breadcumb">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="#">Nos services</a></li>
                <li><span>Informatique</span></li>
            </ul>
        </div>
    </section>
</div>
@endsection