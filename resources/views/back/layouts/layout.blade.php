<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" ng-app="lavalizApp"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" ng-app="lavalizApp"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" ng-app="lavalizApp"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" ng-app="lavalizApp">
<!--<![endif]-->

<head>
	<title>EDEN-GROUP ADMINISTRATEUR</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    {!! Html::style('style/css/bootstrap.min.css') !!}
    {!! Html::style('style/css/animations.css') !!}
    {!! Html::style('style/css/fonts.css') !!}
    {!! Html::style('style/css/main.css') !!}
    {!! Html::script('style/js/vendor/modernizr-2.6.2.min.js') !!}

	<!--[if lt IE 9]>
        {!! Html::script('styles/js/vendor/html5shiv.min.js') !!}
        {!! Html::script('styles/js/vendor/respond.min.js') !!}
        {!! Html::script('styles/js/vendor/jquery-1.12.4.min.js') !!}
	<![endif]-->
    @yield('style')
    <link rel="icon" type="image/png" href="{{ asset(config('pictures.path').'/styles/img/EdenGroup4.png' ) }}"/>
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">
            You are using an <strong>outdated</strong> browser.
            Please <a href="http://browsehappy.com/" class="highlight">
            upgrade your browser</a> to improve your experience.
        </div>
	<![endif]-->
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--		
		<ul>
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			@yield('content')
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
    {!! Html::script('angularjs/angular.min.js') !!}
    {!! Html::script('angularjs/angular-route.min.js') !!}

    {!! Html::script('style/js/compressed.js') !!}
    {!! Html::script('style/js/vendor/Chart.bundle.min.js') !!}
    {!! Html::script('style/js/main.js') !!}
    {!! Html::script('style/js/admin-charts.js') !!}

    <!-- Data table -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#liste').DataTable( {
                "language": {
                    "decimal": ",",
                    "thousands": ".",
                    "sProcessing":     "Traitement en cours...",
                    "sSearch":         "Rechercher&nbsp;:",
                    "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
                    "sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                    "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
                    "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                    "sInfoPostFix":    "",
                    "sLoadingRecords": "Chargement en cours...",
                    "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                    "sEmptyTable":     "Aucune offres disponible",
                    "oPaginate": {
                        "sFirst":      "Premier",
                        "sPrevious":   "Pr&eacute;c&eacute;dent",
                        "sNext":       "Suivant",
                        "sLast":       "Dernier"
                    },
                    "oAria": {
                        "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                        "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                    },
                    "select": {
                        "rows": {
                            _: "%d lignes sÃ©lÃ©ctionnÃ©es",
                            0: "Aucune ligne sÃ©lÃ©ctionnÃ©e",
                            1: "1 ligne sÃ©lÃ©ctionnÃ©e"
                        }
                    }
                }
            });
        });

        var lavalizApp = new angular.module('lavalizApp',[]);
        var controllers = {};
        var factories = {};
        //Factory
        factories.CountMessageNotReadFactory = function ($http) {
            var factory = {};
            factory.getCountMessageNotRead = function () {
                return $http.get('/admin/messages/count');
            }
            return factory;
        };
        //Controller
        controllers.CountMessageNotReadController = function ($scope,CountMessageNotReadFactory) {
            CountMessageNotReadFactory.getCountMessageNotRead().then(function (data) {
                $scope.count = data;
                console.log($scope.count)
            });
        };
        lavalizApp.controller(controllers);
        lavalizApp.factory(factories);

    </script>
</body>

</html>