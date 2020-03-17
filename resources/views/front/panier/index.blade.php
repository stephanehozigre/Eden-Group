@extends ('front.layout.layout_default')
@section('title')
Mon panier
@endsection
@section('style')
<style type="text/css">
    #decrem,#increm{
        float: left;
        margin-left: 2px;
        display: block;
        border: 1px solid #ddd;
        vertical-align: middle;
        width: 26px;
        line-height: 22px;
        text-align: center;
        padding: 4px 0 0 0;
        background: white;
        font-size: 16px;
        color: #000000;
        cursor:pointer;
    }
    #produ {
        height: 32px;
        width: 70px;
        margin-left: 8px;
        margin-top: 5px;
    }
</style>
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
    <center>
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
            <div class="col-md-12">
                <ul class="list-unstyled amounts" style="font-size: 18px;">
                    <li style="text-align: right;margin-right: 205px;">
                        <strong>Total Produit : </strong> 
                        <span class="prixtt">2</span>                                              
                    </li>
                    <li style="text-align: right;margin-right: 205px;">
                        <strong>Total Montant : </strong> 
                        <span class="prixtt">3.375</span>                                              
                    </li> 
                </ul>
            </div>
        </div>
        <div class="col-md-offset-5">
            <a data-toggle="modal" data-target="#myModal4">
                <button class="btn btn-success">Commander</button>
            </a>
                <button class="btn btn-primary">Retour</button>
        </div>
    </center>
    </section>
</div>
@endsection
@section('script')
    <?php $this->_script = "<script src='./style/js/panier.js'></script>"; ?>
@endsection