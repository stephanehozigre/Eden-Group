@extends ('front.layout.layout_default')
@section('title')
Detail
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
                <li><span>DETAIL</span></li>
            </ul>
        </div>
    </section>
    <section>
    <div class="col-sm-4" style="border: px solid; width: 260px; height: 300px; margin-left: 200px">
        <img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}">
    </div>
    <div class="col-sm-5" style="border: 2px solid; border-color: orange">
        <center>
        <div class="col-md-12">
            <p> </p>
            <h2 style="font-family: Alegreya">Designation : Sac à main</h2>
            <p></p>
        </div>
        <div class="col-md-12">
            <h2 style="font-family: Alegreya">Prix : 5000fr</h2>
            <p></p>
        </div>
        <div class="col-md-12">
            <h2 style="font-family: Alegreya">Description : Sac blanc<br></h2> 
            <p></p>
        </div>
        <div class="col-md-12">
            <h2 style="font-family: Alegreya">Categorie : Sac</h2>
            <p></p>
        </div>
        <div class="col-md-12">
            <h2 style="font-family: Alegreya">Stock : 5</h2>
            <p></p>
        </div>
        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                <form action="#" method="post">
                    <fieldset>
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="business" value=" ">
                        <input type="hidden" name="item_name" value="Formal Blue Shirt">
                        <input type="hidden" name="amount" value="30.99">
                        <input type="hidden" name="discount_amount" value="1.00">
                        <input type="hidden" name="currency_code" value="USD">
                        <input type="hidden" name="return" value=" ">
                        <input type="hidden" name="cancel_return" value=" ">
                        <input type="submit" name="submit" value="Ajouter au panier" class="button">
                    </fieldset>
                </form>
        </div>                                          
        </center>
    </div>
    <div class="col-md-10" style="margin-left: 90px; margin-top: 15px">
        <div id="menu1" class="tab-pane fade in active">
            <div class="col-md-3 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}"  alt="" class="pro-image-front">
                        <img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Voir détail</a>
                            </div>
                        </div>
                        <span class="product-new-top">Nouveau</span>  
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Formal Blue Shirt</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">FCFA 5000</span>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="business" value=" ">
                                    <input type="hidden" name="item_name" value="Formal Blue Shirt">
                                    <input type="hidden" name="amount" value="30.99">
                                    <input type="hidden" name="discount_amount" value="1.00">
                                    <input type="hidden" name="currency_code" value="USD">
                                    <input type="hidden" name="return" value=" ">
                                    <input type="hidden" name="cancel_return" value=" ">
                                    <input type="submit" name="submit" value="Ajouter au panier" class="button">
                                </fieldset>
                            </form>
                        </div>                                           
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}" alt="" class="pro-image-front">
                        <img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Voir détail</a>
                            </div>
                        </div>
                        <span class="product-new-top">Nouveau</span>  
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Formal Blue Shirt</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">FCFA 5000</span>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="business" value=" ">
                                    <input type="hidden" name="item_name" value="Formal Blue Shirt">
                                    <input type="hidden" name="amount" value="30.99">
                                    <input type="hidden" name="discount_amount" value="1.00">
                                    <input type="hidden" name="currency_code" value="USD">
                                    <input type="hidden" name="return" value=" ">
                                    <input type="hidden" name="cancel_return" value=" ">
                                    <input type="submit" name="submit" value="Ajouter au panier" class="button">
                                </fieldset>
                            </form>
                        </div>                                           
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}" alt="" class="pro-image-front">
                        <img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Voir détail</a>
                            </div>
                        </div>
                        <span class="product-new-top">Nouveau</span>  
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Formal Blue Shirt</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">FCFA 5000</span>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="business" value=" ">
                                    <input type="hidden" name="item_name" value="Formal Blue Shirt">
                                    <input type="hidden" name="amount" value="30.99">
                                    <input type="hidden" name="discount_amount" value="1.00">
                                    <input type="hidden" name="currency_code" value="USD">
                                    <input type="hidden" name="return" value=" ">
                                    <input type="hidden" name="cancel_return" value=" ">
                                    <input type="submit" name="submit" value="Ajouter au panier" class="button">
                                </fieldset>
                            </form>
                        </div>                                           
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}" alt="" class="pro-image-front">
                        <img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}" alt="" class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single.html" class="link-product-add-cart">Voir détail</a>
                            </div>
                        </div>
                        <span class="product-new-top">Nouveau</span>  
                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">Formal Blue Shirt</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">FCFA 5000</span>
                        </div>
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="business" value=" ">
                                    <input type="hidden" name="item_name" value="Formal Blue Shirt">
                                    <input type="hidden" name="amount" value="30.99">
                                    <input type="hidden" name="discount_amount" value="1.00">
                                    <input type="hidden" name="currency_code" value="USD">
                                    <input type="hidden" name="return" value=" ">
                                    <input type="hidden" name="cancel_return" value=" ">
                                    <input type="submit" name="submit" value="Ajouter au panier" class="button">
                                </fieldset>
                            </form>
                        </div>                                           
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>
@endsection