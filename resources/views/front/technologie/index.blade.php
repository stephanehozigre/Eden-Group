@extends ('front.layout.layout_default')
@section('title')
Tecnologie
@endsection

@section('content')
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated fadeInUp" data-animate="fadeInUp" style="opacity: 1;float: left;">
                    <h1><span>Informatique</span></h1>
                </div>
                <div style="float:right;opacity: 1;left: 100%;" class="custom-heading style-1 triggerAnimation animated fadeInUp" data-animate="fadeInUp">
                    <span><img src="{{ asset(config('pictures.path').'/styles/img/logoNewEden.png') }}" class="img-responsive" style="width: 200px; height: 100px;"/></span>
                </div>
                <!-- .custom-heading.style-1 end -->
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div>
<div class="page-content">
    <section class="breadcumb-wrapper">
        <div class="container clearfix">
            <ul class="breadcumb">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('apropos') }}">A propos</a></li>
                <li><a href="#">Services</a></li>
                <li><span>Informatique</span></li>
            </ul>
        </div>
    </section>
</div>
<div class="page-content">
    <div class="container">
        <section class="single-service-page">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-4 single-side-left">
                        <div class="single-sidebar-widget">
                            <div class="special-links">
                                <ul>
                                    <li ><a href="{{ Route('front-immobilier.index') }}">Immobilier</a></li>
                                    <li class="active"><a href="chemical.html">Technologie</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="single-service-contact">
                                <h3>    Avez-vous bésion d'une assistance?</h3>
                                <p>Vous pouvez nous laisser un message en cliquant.</p>
                                <a href="#!/Nous-contacter">Par ici<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 pull-right tab-content">
                        <!-- meterial engineering-->
                        <div id="meterial" class="tab-pane fade in active">
                            <div id="myCarousel" class="image-box clearfix carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                            
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active animated fadeInUp">
                                        <img src="{{ asset(config('pictures.path').'/styles/img/Immobilier/aa1.jpg') }}" alt="Chania">
                                        <div class="carousel-caption">
                                            <h3>Los Angeles</h3>
                                            <p>LA is always so much fun!</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset(config('pictures.path').'/styles/img/Immobilier/aa2.jpg') }}" alt="Chicago">
                                        <div class="carousel-caption">
                                            <h3>Chicago</h3>
                                            <p>Thank you, Chicago!</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset(config('pictures.path').'/styles/img/Immobilier/aa3.jpg') }}" alt="New York">
                                        <div class="carousel-caption">
                                            <h3>New York</h3>
                                            <p>We love the Big Apple!</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset(config('pictures.path').'/styles/img/Immobilier/aa4.jpg') }}" alt="New York">
                                        <div class="carousel-caption">
                                            <h3>New York</h3>
                                            <p>We love the Big Apple!</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Left and right controls -->
                                <a class="left carousel-control" data-target="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" data-target="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- <div class="image-box clearfix">
                                <img src="./styles/img/Immobilier/matirial_engineering_01.jpg" alt="">
                            </div> -->
                            <div class="sec-title">
                                <h2><span>Gestion Informatique</span></h2>
                                <p><strong>Eden Group's Technologie</strong> est un département de <strong>EDEN GROUP'S ENTREPRISE</strong>, notre mission est de servir une clientèle nombreuse dans la promotion immobilière; la réalisation et la réhabilitation des travaux de construction.</p>
                                <p>
                                    A cet effet, nous rendons les services suivants : <br>
                                    - Creation Mobile; <br>
                                    - Creation web; <br>
                                    - Creation de logo; <br>
                                    - Creation d'application desktop; <br>
                                    - Creation de page fb dynamique ; <br>
                                    - Creation de flyer; <br>
                                    - Maintenace informatique; <br>
                                    - Froid / Climatisation; <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 image-caption-box">
                        <div class="caption-box-img pad46"><img src="{{ asset(config('pictures.path').'/styles/img/Immobilier/MARCON1.jpg') }}" alt="Awesome Image"></div>
                        <div class="text-box">
                            <h2><a href="chemical.html">Creation web</a></h2>
                            <p>Elle intervient dans la construction des maisons basses, duplex, immeubles, étages etc...</p>
                        </div>
                    </div>
                    <div class="col-md-3 image-caption-box">
                        <div class="caption-box-img pad46"><img src="{{ asset(config('pictures.path').'/styles/img/Immobilier/VITERIEF2.jpg') }}" alt="Awesome Image"></div>
                            <div class="text-box">
                                <h2><a href="chemical.html">Creation Mobile</a></h2>
                                <p>Elle intervient dans la construction, toiture métallique; la fabrication des portes, portails, fenêtres, les anti-vols,<a data-toggle="collapse" data-target="#collapse1">Suivant...</a> <span id="collapse1" class="collapse" style="color: #898989;">rideau métallique, rampe d'escalier, balcon, bâche bras robot fer forgé, charpente métaillique / miroiterie aluminuim, mur rideau, store rideau, jalousie alucobond etc...</span></p>
                            </div>
                    </div>
                    <div class="col-md-3 image-caption-box">
                        <div class="caption-box-img pad46"><img src="{{ asset(config('pictures.path').'/styles/img/Immobilier/CARRELAGE2.jpg') }}" alt="Awesome Image"></div>
                        <div class="text-box">
                            <h2><a href="chemical.html">Creation de logo</a></h2>
                            <p>Il intervient dans la réahabilitation et placements des carreaux dans les travaux de construction.</p>
                        </div>
                    </div>
                    <div class="col-md-3 image-caption-box">
                        <div class="caption-box-img pad46"><img src="{{ asset(config('pictures.path').'/styles/img/Immobilier/matirial_engineering_03.jpg') }}" alt="Awesome Image"></div>
                        <div class="text-box">
                            <h2><a href="chemical.html">Creation de page fb</a></h2>
                            <p>
                                Elle intervient dans l'installation électrique de tout type de bâtiments... <br>
                                Aussi dans les dépanages,<a data-toggle="collapse" data-target="#collapse3">Suivant...</a> <span id="collapse3" class="collapse" style="color: #898989;">installations des clôtures électriques, de vidéos surveillances, des câblages reseaux informatiques(Cyber, bureau, entreprises...). <br>
                                L'installation de portails capatifs, de serrures avec emprunte digitale (carte électronique, code digital) etc... <br>
                                L'installation électrique d'une maison connectée (domotique...), automatisation de portails et porte de garage, tuyauterie, lavabo,chauff eau etc...</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 image-caption-box">
                        <div class="caption-box-img pad46"><img src="{{ asset(config('pictures.path').'/styles/img/Immobilier/COFFRAGE1.jpg') }}" alt="Awesome Image"></div>
                        <div class="text-box">
                            <h2><a href="chemical.html">Creation de flyer</a></h2>
                            <p>
                                Il s'agit d'intervenir surtout dans la réalisation des immeubles, étages, pour l'éfficacité des dalles, escaliers (bois ou fer) etc...
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 image-caption-box">
                        <div class="caption-box-img pad46"><img src="{{ asset(config('pictures.path').'/styles/img/Immobilier/ALU.jpg') }}" alt="Awesome Image"></div>
                        <div class="text-box">
                            <h2 style="text-transform: initial"><a href="chemical.html">Creation d'application desktop</a></h2>
                            <p>
                                Pour la conception et installations des portes, cadres, fenêtres, pour les travaux de toitures,<a data-toggle="collapse" data-target="#collapse2">Suivant</a> <span id="collapse2" class="collapse" style="color: #898989;">plafonnages, placards au mur, 
                                lambris... <br>
                                Au niveau des meubles : chaises, tables, lits, fauteuils, bibliothèques, placards etc...</span>
                            </p>
                        </div>
                    </div>
        
                </div>
                <a href="{{ Route('front-immobilier.create') }}" class="btn col-md-12 col-xs-12 col-sm-12" style="font-size: 18px;background-color:#ffcc00;border: none;font-weight: bold;line-height: 38px;text-align: center;color: #000000;">
                    Demander un service
                </a>
            </div>
        </section>
    </div>
</div>
<style>
   .text-box{
       display: block !important;
   }
</style>
@endsection