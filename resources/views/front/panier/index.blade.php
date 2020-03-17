@extends ('front.layout.layout_default')
@section('title')
Mon panier
@endsection
@section('style')
@include('front.panier.style')
@endsection
@section('script')
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
@endsection
@section('content')
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated fadeInUp" data-animate="fadeInUp" style="opacity: 1;">
                    <h1>Mon <span>Panier</span></h1>
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
                <li><span>Mon Panier</span></li>
            </ul>
        </div>
    </section>
    <section>
        <div class="col-md-10" style="margin-left:145px">
                <div class="table-responsive" >
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Produit</th>
                                <th>Quantité</th>
                                <th>Nom Produit</th>
                                <th>Prix Unitaire</th>
                                <th>Coût Total</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="rem1">
                                <td class="invert">1</td>
                                <td class="invert-image">
                                    <a href="single.html">
                                        <img src="{{ asset(config('pictures.path').'/styles/img/articles/a.jpg') }}" alt=" " class="img-responsive">
                                    </a>
                                </td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus">&nbsp;</div>
                                            <div class="entry value">
                                                <span>1</span>
                                            </div>
                                            <div class="entry value-plus active">&nbsp;</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert">Back Cover</td>
                                <td class="invert">$259</td>
                                <td class="invert">$259</td>
                                <td class="invert">
                                    <div class="rem">
                                        <div class="close1"> </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="rem2">
                                <td class="invert">2</td>
                                <td class="invert-image">
                                    <a href="single2.html">
                                        <img src="{{ asset(config('pictures.path').'/styles/img/articles/a3.jpg') }}" alt=" " class="img-responsive">
                                    </a>
                                </td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus">&nbsp;</div>
                                            <div class="entry value">
                                                <span>1</span>
                                            </div>
                                            <div class="entry value-plus active">&nbsp;</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert">Cordless Trimmer</td>
                                <td class="invert">$1,999</td>
                                <td class="invert">$1,999</td>
                                <td class="invert">
                                    <div class="rem">
                                        <div class="close2"> </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="rem3">
                                <td class="invert">3</td>
                                <td class="invert-image">
                                    <a href="single.html">
                                        <img src="{{ asset(config('pictures.path').'/styles/img/articles/a4.jpg') }}" alt=" " class="img-responsive">
                                    </a>
                                </td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus">&nbsp;</div>
                                            <div class="entry value">
                                                <span>1</span>
                                            </div>
                                            <div class="entry value-plus active">&nbsp;</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert">Nikon Camera</td>
                                <td class="invert">$37,490</td>
                                <td class="invert">$37,490</td>
                                <td class="invert">
                                    <div class="rem">
                                        <div class="close3"> </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table><br>
                    <div class="col-md-offset-10">
                        <p style="font-size: 25px; font-weight: bold; color: #0f263a">Total : 5000F</p>
                    </div>
                </div>
                <div class="col-md-offset-9">
                    <div class="checkout-right-basket">
                        <a href="payment.html">Passer la commande
                            <span class="fa fa-shopping-cart"></span>
                        </a>
                    </div>
                </div>
        </div>
    <!--<center>
        <div class="row">
            <div class="col-xs-12">
                <table style="width : 70%;"class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Désignation
                            </th>
                            <th class="hidden-480">
                                Catégorie
                            </th>
                            <th>
                                Quantité
                            </th>
                             <th>
                                Prix unitaire
                            </th>
                             <th>
                                Coût total
                            </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1                                                      
                            </td>
                            <td>
                                Eau de Javel-12° 2L                                                  
                            </td>
                            <td class="hidden-480">
                                Entretien                                                       
                            </td>
                            <td>
                                <input class="form-control post1" name="" style="width:30%;text-align:center;background:#fff;cursor:default" type="text" >
                                <div id="produ">
                                    <span id="decrem" onclick="decrement(1,500)"><i class="fa fa-minus"></i></span>
                                    <span id="increm" onclick="increment(1,500)"><i class="fa fa-plus"></i></span>
                                </div>
                            </td>
                            <td>
                                875                                                       
                            </td>
                            <td class="sub1">
                                875                                                      
                            </td>
                            <td>
                               <a href="javascript:;" class="delete" onClick="supprimer(1)" title="supprimer l'article">
                                <i class="glyphicon glyphicon-trash"></i>
                               </a>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                1 
                            </td>                                                 
                            <td>
                                Riz Riziére Parfumé-4,5kg                                                
                            </td>
                            <td class="hidden-480">
                                Alimentation                                                       
                            </td>
                            <td>
                                <input class="form-control post1" name="" style="width:30%;text-align:center;background:#fff;cursor:default" type="text">
                                <div id="produ">
                                    <span id="decrem" onclick="decrement(1,500)"><i class="fa fa-minus"></i></span>
                                    <span id="increm" onclick="increment(1,500)"><i class="fa fa-plus"></i></span>
                                </div>
                            </td>
                            <td>
                                2.500                                                       
                            </td>
                            <td class="sub1">
                                2.500                                                      
                            </td>
                            <td>
                               <a href="javascript:;" class="delete" onClick="supprimer(1)" title="supprimer l'article">
                                <i class="glyphicon glyphicon-trash"></i>
                               </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-xs-4">
            </div>
            <div class="col-xs-8 invoice-block">
                <ul class="list-unstyled amounts" style="font-size: 18px;">
                    <li style="text-align: right;margin-right: 205px;">
                        <strong>Total : </strong> 
                        <span class="prixtt">3.375</span>                                              
                    </li> 
                </ul>
            </div>
        </div>
        <div class="row" style="padding:8px;margin-left:px;margin-right:190px;">
            <div style="float:right;">
            <a data-toggle="modal" data-target="#myModal4">
                <button class="btn btn-success">Commander</button>
            </a>
            </div>
            <div style="float:right; margin-right: 10px;
    margin-top: 2px;">
                <button class="btn btn-primary">Retour</button>
            </div>
        </div>
    </center>-->
    </section>
</div>
@endsection
