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


/************************************************************
 * Les routes du site
 ************************************************************/
/*Route::get('/', function () {
    return view('site.welcome');
});

Route::get('/accueil','AccueilController@showRegister');*/

/*Route::get('/traduction',function() {
    return view('site.traduction');
});

Route::get('/traducteur',function(){
    return view('site.traducteur');
});

Route::get('/recrutement','DemandeDevisController@index');

Route::get('/blog',function(){
    return view('site.blog');
});

Route::get('/propos',function(){
    return view('site.propos');
});*/

//Route::get('/register','AccueilController@showRegister');

/************************************************************
 * Les routes du clients
 ************************************************************/
/*Route::get('/dashboard',function(){
    return view('client.dashboard');
});

Route::get('/profile',function(){
    return view('client.profile');
});

Route::get('/demandeDevis',function(){
  return view('client.demandeDevis');
});

Route::get('/demandeValide',function(){
    return view('client.demandeValide');
});

Route::get('/notification',function(){
    return view('client.notification');
});

Route::get('/details',function(){
    return view('client.details');
});

Route::get('/detailsValidation',function(){
    return view('client.detailsValidation');
});
*/

/************************************************************
 * Les route du dashboard
 ************************************************************/


 /*Route::get('/dashboardTraducteur',function(){ return view('traducteur.dashboard');});

 Route::get('/notificationTraducteur',function(){
     return view('traducteur.notificationTraducteur');
 });


 Route::get('/propositionDevis',function(){
    return view('traducteur.propositionDevis');
 });

 Route::get('/coutTraduction',function(){
    return view('traducteur.coutTradcution');
 });

 Route::get('/profileTraducteur',function(){
    return view('traducteur.profileTraducteur');
 });*/


 //Route::get('recrutement','DemandeDevisController@index');
 //Route::get('get-wilaya-list','DemandeDevisController@getCommunesList');


 use Illuminate\Support\Facades\Auth;



Route::get('/accueil','ClientControllers\DemandeDevisController@getListTraducteur');

Route::get('/',function(){
    return view('site.accueil');
});


Route::get('/traduction',function() {
    return view('site.traductions');
});

Route::get('/traducteur',function(){
    return view('site.traducteur');
});

Route::get('/recrutement','DemandeDevisController@index');

Route::post('/recrutementTraducteur','RecrutementController@store');

Route::get('/blog',function(){
    return view('site.blog');
});

Route::get('/propos',function(){
    return view('site.propos');
});

/*Route::get('/CheckAuthUser',function(){
    return (Auth::check()) ? true : false ;
});*/

Auth::routes();



Route::group(['middleware' => ['auth','traducteur']],function(){

    Route::get('/home', function(){return view('traducteur.dashboard');});

    Route::get('/traducteur',function(){
        return view('traducteur.dashboard');
    });

    Route::get('/profileTraducteur','TraducteurControllers\ProfilTraducteurController@index');


    Route::get('/CheckAuthUser','AccueilController@check');


    Route::get('/coutTraduction','TraducteurControllers\TraductionController@getTraductionInfo');

    Route::put('/setcout','TraducteurControllers\TraductionController@setcout');

    Route::put('/cout','TraductionController\TraductionController@setCout');

    Route::put('/proposedevis','TraducteurControllers\DemandeDevisTraducteurController@proposeDevis');

    Route::get('/notificationTraducteur','TraducteurControllers\DemandeDevisTraducteurController@showInformationDevis');

    Route::get('/propositionDevis','TraducteurControllers\DemandeDevisTraducteurController@showInformationtoPropose');

    Route::put('/profil-update-traducteur','TraducteurControllers\ProfilTraducteurController@updateProfil');

    Route::get('/download/{demande_devis_id}/{user_id}','TraducteurControllers\DemandeDevisTraducteurController@getDownload');
});

Route::group(['middleware' => ['auth','client']],function(){

    Route::get('/home','ClientControllers\PropositionClientController@showMoreInformationDevis');

    Route::put('/signaler/{id}','ClientControllers\TraductionClientController@signalerClient');


    Route::get('/client','ClientControllers\PropositionClientController@showMoreInformationDevis');

    Route::get('/coutTraduction/{id}','ClientControllers\TraductionClientController@showCoutTraduction');

    Route::post('/demandeDevis','ClientControllers\DemandeDevisController@storeToDemandeDevis');

    Route::get('/profileClient','ClientControllers\ProfilClientController@index');

    Route::put('/profil-update-client','ClientControllers\ProfilClientController@updateProfil');


    Route::get('/downloadTranslated/{demande_devis_id}/{user_id}','ClientControllers\PropositionClientController@getDownloadTranslated');
    /*Route::get('/coutTraductionClient',function(){
        return view('client.coutTraduction');
    });*/

    Route::get('/details/{id}','ClientControllers\PropositionClientController@showdetails');

    Route::put('/addFiletoTranslate','ClientControllers\PropositionClientController@addFileToTranslate');

    Route::get('/valideDemandeClient',function(){
        return view('client.demandeValide');
    });

    Route::get('/notificationClient','ClientControllers\PropositionClientController@showMoreInformationDevis');

    Route::get('/demandeDevisClient','ClientControllers\DemandeDevisController@showDemandeDevis');

    Route::get('/deleteDemande/{demande_id}/{user_id}','ClientControllers\DemandeDevisController@deleteDemande');

});

Route::group(['middleware' => ['auth','admin']],function(){

    Route::get('/home','AdmineController\GestionTraducteurController@showTraductors');

    Route::get('/admin','AdmineController\GestionTraducteurController@showTraductors');

    Route::get('/gestionTraducteur','AdmineController\GestionTraducteurController@showTraductors');

    Route::get('/moreInformationTraducteur/{id}','AdmineController\GestionTraducteurController@moreInformationTraducteur');

    Route::get('/moreInformationClient/{id}','AdmineController\GestionClientController@moreInformationClient');


    Route::get('/gestionClient','AdmineController\GestionClientController@showClients');

    Route::get('/gestionDocument','AdmineController\GestionDocumentController@showDocuments');

    Route::get('/statistiques','AdmineController\StatistiqueController@index');

    Route::put('/ediTraducteur/{id}','AdmineController\GestionTraducteurController@updateTraducteur');

    Route::put('/editClient/{id}','AdmineController\GestionClientController@updateClient');

    Route::delete('/deleteTraducteur/{id}','AdmineController\GestionTraducteurController@deleteTraducteur');

    Route::delete('/deleteClient/{id}','AdmineController\GestionClientController@deleteClient');

    Route::put('/bloqueTraducteur/{id}','AdmineController\GestionTraducteurController@bloquerTraducteur');

    Route::put('/bloqueClient/{id}','AdmineController\GestionClientController@bloquerClient');

    Route::get('/download/{demande_devis_id}/{user_id}','AdmineController\GestionDocumentController@getDownload');

    Route::get('/downloadTranslated/{demande_devis_id}/{user_id}','AdmineController\GestionDocumentController@getDownloadFileTranslater');

    Route::delete('/deleteDocuments/{id}','AdmineController\GestionDocumentController@deleteDocuments');
    /*Route::get('/gestionDocument',);

    Route::get('/statisques',);

    Route::get('/adminProfile',);*/


});
