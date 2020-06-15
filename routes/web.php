<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Front')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@index')->name('home');
    Route::middleware('userfront')->group(function(){
        Route::get('/home_logger', 'HomeController@index');
    });
  Route::post('front-users/login','Auth\LoginController@login');
  Route::get('front-users/logout','Auth\LoginController@logout')->name('front-users.logout');
  Route::namespace('Users')->group(function(){
      Route::get('front-users/create', 'UserController@create')->name('front-users.create');
      Route::resource('front-users','UserController',['except'=>['show','destroy','create']]);
   });
   Route::namespace('Immobilier')->group(function(){
    Route::get('front-immobilier/create', 'ImmobilierController@create')->name('front-immobilier.create');
   	Route::resource('front-immobilier','ImmobilierController',['except'=>['show','edit','update','destroy']]);
   });
   Route::namespace('Ecommerce')->group(function(){
   		Route::resource('front-ecommerce','EcommerceController',['except'=>['show','edit','update','destroy']]);
   });
   Route::namespace('Technologie')->group(function(){
   		Route::resource('front-technologie','TechnologieController',['except'=>['show','edit','update','destroy']]);
   });
   Route::namespace('Restauration')->group(function(){
      Route::get('front-restauration/restauration/{detail}/detail', 'RestaurationController@show')->name('front-restauration.show');
      Route::resource('front-restauration','RestaurationController',['except'=>['show','edit','update','destroy']]);
   });

   Route::namespace('Ecommerce')->group(function(){
      Route::get('front-ecommerce/ecommerce/{detail}/detail', 'EcommerceController@show')->name('front-ecommerce.show');
      Route::resource('front-ecommerce','EcommerceController',['except'=>['show','edit','update','destroy']]);
   });
   Route::namespace('Apropos')->group(function(){
      Route::resource('front-apropos/apropos','AproposController',['except'=>['show','edit','update','destroy']]);
   });
   Route::namespace('Messages')->group(function(){
      Route::resource('front-messages','MessageController',['except'=>['index','show','edit','update','destroy']]);
   });
   Route::namespace('NewsLetters')->group(function (){
        Route::post('front-newsletters/store','NewsletterController@store')->name('front-newsletters.store');
    });

   Route::namespace('Quisommesnous')->group(function(){
      Route::resource('front-quisommesnous/quisommesnous','QuisommesnousController',['except'=>['show','edit','update','destroy']]);
    });

   Route::namespace('NotreEquipe')->group(function(){
      Route::resource('front-notreequipe/notreequipe','NotreequipeController',['except'=>['show','edit','update','destroy']]);
    });

    Route::namespace('Faq')->group(function(){
      Route::resource('front-faq/faq','FaqController',['except'=>['show','edit','update','destroy']]);
    });

    Route::namespace('Profil')->group(function(){
      Route::resource('front-profil/profil','ProfilController',['except'=>['show','edit','update','destroy']]);
    });

    Route::namespace('Dashboard')->group(function(){
      Route::resource('front-dashboard/dashboard','DashboardController',['except'=>['show','edit','update','destroy']]);
    });

    Route::namespace('Demandes')->group(function(){
      Route::post('front-demandes/update','DemandesController@update')->name('front-demandes.update');
      Route::post('front-demandes/update-statut','DemandesController@UpdateStatut')->name('front-demandes.updateStatut');
      Route::get('front-demandes/detail}/detail', 'DemandesController@show')->name('front-demandes.show');
      Route::resource('front-demandes','DemandesController',['except'=>['show','edit','update','destroy']]);
    });

    Route::namespace('Commandes')->group(function(){
      Route::get('front-commandes/commandes/{detail}/detail', 'CommandesController@show')->name('front-commandes.show');
      Route::resource('front-commandes/commandes','CommandesController',['except'=>['show','edit','update','destroy']]);
    });

    Route::namespace('Notifications')->group(function(){
      Route::get('front-notifications/notifications/{detail}/detail', 'NotificationsController@show')->name('front-notifications.show');
      Route::resource('front-notifications/notifications','NotificationsController',['except'=>['show','edit','update','destroy']]);
    });

    Route::namespace('Notifications')->group(function(){
      Route::resource('front-notifications/notifications','NotificationsController',['except'=>['show','edit','update','destroy']]);
    });

    Route::namespace('Panier')->group(function(){
      Route::resource('front-panier/panier','PanierController',['except'=>['show','edit','update','destroy']]);
    });

    Route::namespace('Detail')->group(function(){
      Route::resource('front-detail/detail','DetailController',['except'=>['show','edit','update','destroy']]);
    });

});

/* Admin */

Route::group(['prefix' => 'admin'], function () {
    Route::get('/',function (){
        return redirect('/admin/login');
    });
    Route::namespace('Back')->group(function(){
        Route::get('/home','HomeController@index');

        Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
        Route::post('/login', 'AdminAuth\LoginController@login');
        Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');
    });
});