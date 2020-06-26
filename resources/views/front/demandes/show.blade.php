@extends ('front.layout.layout_default')
@section('title')
Deatils
@endsection
@section('content')
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated fadeInUp" data-animate="fadeInUp" style="opacity: 1;">
                    <h1><span>Details</span></h1>
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
                <li><span>Detail de la Demande</span></li>
            </ul>
        </div>
    </section>
    <section>
      <head>
        <style>
          .vertical-line{
            border-left: 2px solid #000;
            display: inline-block;
            height: 130px;
            margin: 0 20px;
          }
        </style>
      </head>
      <body>
     <div class="container" style="border: 1px solid silver;height:1000px; width: 1000px; border-color: orange">
         <center>
       <h2>Info</h2><br/>
       <strong>
        Eden Group's Bat est un département de EDEN GROUP'S ENTREPRISE, notre mission est de servir une clientèle nombreuse dans la promotion immobilière; la réalisation et la réhabilitation des travaux de construction.
       </strong>
         </center>
       <hr width="90%">
       <h2>Coordonnée</h2><br/>
       <strong>
          TANOH PARFAIT NGORAN GEORGES<br/>
         Abatta careffour bceao rue 45<br/>
         78852243/42517780
       </strong>
       <hr width="90%">
       <h2>Demandes dans votre commande</h2><br/>
       <strong>
           <font color="#FF0000">Peinture</font><br/>
            Description<br/>
           Lorsque vous demandé ce service, nous mettons à votre disposition un personnel qualifié pour peintre votre maison sous toutes ses formes à fin de faire ressortir sa clarté<br/>
           Date de demande<br/>
           12 mars 2020
       </strong>
       <hr width="90%">
       <strong>
          <strong>
           <font color="#FF0000">Technologie</font><br/>
            Description<br/>
           Lorsque vous demandé ce service, nous mettons à votre disposition un personnel qualifié pour peintre votre maison sous toutes ses formes à fin de faire ressortir sa clarté<br/>
           Date de demande<br/>
           12 mars 2020
       </strong>
       </strong>
       <hr width="90%">
       <strong>
           <font color="#FF0000">Electicité</font><br/>
            Description<br/>
           Lorsque vous demandé ce service, nous mettons à votre disposition un personnel qualifié pour peintre votre maison sous toutes ses formes à fin de faire ressortir sa clarté<br/>
           Date de demande<br/>
           12 mars 2020
       </strong>
       <hr width="90%">
       <h2>Statut</h2><br/>
       <strong>
          La demande sera traitée entre Mardi 26 Nov et Mercredi 27 nov<br/>
         <font color="vert">En cours de traitement...</font>
       </strong>
     </div>
      </body>
    </section>
</div>
@endsection