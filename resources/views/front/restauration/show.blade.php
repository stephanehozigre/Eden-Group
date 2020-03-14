@extends ('front.layout.layout_default')
@section('title')
Detail des plats
@endsection
@section('content')
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated fadeInUp" data-animate="fadeInUp" style="opacity: 1;">
                    <h1><span>Detail</span></h1>
                </div><!-- .custom-heading.style-1 end -->
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div>
<div class="page-content">
    <section class="breadcumb-wrapper">
        <div class="container clearfix">
            <ul class="breadcumb">
                <li><a href="./">Accueil</a></li>
                <li><span>Detail</span></li>
            </ul>
        </div>
    </section>
    <section>
    <div class="col-sm-4" style="border: px solid; width: 260px; height: 300px; margin-left: 200px">
        <img src="{{ asset(config('pictures.path').'/styles/img/restauration/12.jpg') }}">
    </div>
    <div class="col-sm-5" style="border: 2px solid; border-color: orange">
        <center>
        <div class="col-md-12">
            <p> </p>
            <h2 style="font-family: Alegreya">Designation : Foufou</h2>
            <p></p>
        </div>
        <div class="col-md-12">
            <h2 style="font-family: Alegreya">Prix : 5000fr</h2>
            <p></p>
        </div>
        <div class="col-md-12">
            <h2 style="font-family: Alegreya">Description : foufou sauce claire<br></h2> 
            <p></p>
        </div>
        <div class="col-md-12">
            <h2 style="font-family: Alegreya">Categorie : resaturation</h2>
            <p></p>
        </div>
        <input class="form-control post1" disabled id="" name="" style="width:10%;text-align:center;background:#fff;cursor:default" type="text" min="1" value=1>
                            <div id="produ">
                                <span id="decrem" onclick="decrement(1,500)"><i class="fa fa-minus"></i></span>
                                <span id="increm" onclick="increment(1,500)"><i class="fa fa-plus"></i></span>
                            </div>
        <span id="tooltipster_halte2">
                            <button class="theme-btn btn-style-three" type="submit"><span class="fa fa-shopping-cart" style="color:#4f4;"></span>Ajouter au panier</button>
                        </span>
        </div>                                          
        </center>
    </div><br><br>
    </section>
</div>
@endsection