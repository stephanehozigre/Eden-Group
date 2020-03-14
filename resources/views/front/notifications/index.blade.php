@extends ('front.layout.layout_default')
@section('style')
@include('front.dashboard.style')
<style type="text/css">
.table {
    border-top: 1px solid #d6d6d6;
    border-bottom: 1px solid #d6d6d6;
}
table th {
    color: #343434;
    font-weight: normal;
}
th {
    text-transform: initial !important;
}
.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    padding: 13px 8px;
    border-color: #d6d6d6;
}
table td, table th {
    padding: 13px 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border: 1px solid #d6d6d6;
}
table tbody tr td{
    text-align: left;
}
</style>
@endsection
@section('title')
Tableau de bord
@endsection
@section('content')
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated fadeInUp" data-animate="fadeInUp" style="opacity: 1;">
                    <h1>Notifi<span>cations</span></h1>
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
                <li><span>Notifications</span></li>
            </ul>
        </div>
    </section>
    <section class="breadcumb-wrapper">
        <main id="tg-main" class="tg-main tg-haslayout">
            <div class="container">
                <div class="row">
                    <div id="tg-twocolumns" class="tg-twocolumns tg-haslayout">
                        <!-- Aside !--> 
                         @include('front.aside.aside')       
                        <div class="col-lg-8 col-md-9 col-sm-8 col-xs-12 pull-right">
                            <div class="tg-dashboard">
                                <div class="tg-border-heading">
                                    <h3>Bonjour/Bonsoir <a href="#" >{{ Auth::user()->nom }}</a>, bienvenue dans votre espace de Notifications</h3>
                                </div>
                                <div class="tg-radarsupport tg-sectionborder">
                                    <div class="row" style="margin-bottom: 30px;padding:0 15px;">
                                        <div class="tg-border-heading">
                                            <h3>Mes Notifications</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="db-container">
                                                    <a href="/membre/mes-annonces">
                                                        <i class="fa fa-bullhorn"></i> 
                                                        J'ai <span class="red">0</span> commandes en cours
                                                    </a>                                        
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="db-container">
                                                    <a href="/membre/mes-annonces">
                                                        <i class="fa fa-bullhorn"></i> 
                                                        J'ai <span class="red">0</span> livraison en effectuée
                                                    </a>                                        
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="db-container">
                                                    <a href="/membre/mes-annonces">
                                                        <i class="fa fa-bell"></i> 
                                                        J'ai <span class="red">0</span> notification
                                                    </a>                                        
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="db-container">
                                                    <a href="/membre/tirelire">
                                                        <i class="fa fa-money"></i> 
                                                        J'ai <span class="red">0</span> proposition de trajet
                                                    </a>                                        
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="db-container">
                                                    <a href="/membre/messages">
                                                        <i class="fa fa-envelope"></i> J'ai 
                                                        <span class="red">0</span> message en attente
                                                    </a>                                        
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="db-container">
                                                    <i class="fa fa-plane"></i> J'ai 
                                                    <span class="red">0</span> transaction en cours                                     
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="db-container">
                                                    <a href="/membre/mon-profil#avis">
                                                        <i class="fa fa-comments"></i> J'ai 
                                                        <span class="red">0</span> avis reçus et 
                                                        <span class="red">0</span> avis postés
                                                    </a>                                        
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="db-container">
                                                    <a href="/membre/avis#avis-a-poster">
                                                        <i class="fa fa-comments"></i> J'ai 
                                                        <span class="red">0</span> avis à poster
                                                    </a>                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                       
                        </div>            
                    </div>
                </div>       
            </div>
        </main> 
    </section>
</div>

@endsection