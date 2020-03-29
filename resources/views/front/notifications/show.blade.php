@extends ('front.layout.layout_default')
@section('title')
Deatil
@endsection
@section('content')
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated fadeInUp" data-animate="fadeInUp" style="opacity: 1;">
                    <h1><span>Detail Notifications</span></h1>
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
                <li><span>Detail Notification</span></li>
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
       <h2>EdenGroups</h2><br/>
       <strong>
          3 services demandés<br/>
         <font color="#FF0000">*Immobilier<br/>
            *Electricité<br/>
            *Plombierie
        </font>
         
       </strong>
         </center>
       <hr width="90%">
       <h2>Mes Coordonnées</h2><br/>
       <strong>
          TANOH PARFAIT NGORAN GEORGES<br/>
         Abatta careffour bceao rue 45<br/>
         78852243/42517780
       </strong>
       <hr width="90%">
       <h2>Messages</h2><br/>
       <strong>
          Votre demande de service est en cour de traitement<br/>
           Service demander d'immobilier<br/>
           date:<span>25 janv 2020</span><br/>
       </strong>
       <hr width="90%">
       <strong>
          Votre demande de service est en cour de traitement<br/>
           Service demander dans l'eletricité<br/>
           date:<span>25 janv 2020</span><br/>
       </strong>
       <hr width="90%">
       <strong>
          Votre demande de service est en cour de traitement</br>
           Service demander das la plombierie<br/>
           date:<span>25 janv 2020</span><br/>
       </strong>
       <hr width="90%">
       <h2>Statut</h2><br/>
       <strong>
          En cours....<br/>
       </strong>
     </div>
      </body>
    </section>
</div>
@endsection