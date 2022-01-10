<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\PasswordChangeController;
use App\Http\Controllers\SingUpController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\CommissionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlertController;
use App\Http\Controllers\BraipController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\IntegrationController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\UpdatesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('dashboard.index');
});
Auth::routes();
Route::middleware(['auth'])->group(function () {

    Route::resource('dashboard', DashboardController::class);

    Route::resource('colaboradores', CollaboratorController::class);
    Route::put('distribuicao/{id}', [CollaboratorController::class, 'distribution'])->name('collaborator.distribution');
    Route::get('resetClick/{id}', [CollaboratorController::class, 'resetClick'])->name('collaborator.resetClick');
    Route::get('pause-play/{id}', [CollaboratorController::class, 'pausePlay'])->name('collaborator.pausePlay');

    Route::resource('user', UserController::class);
    Route::post('updatePass/{id}', [UserController::class, 'updatatePass'])->name('user.updatePass');
    Route::post('pixel-facebook', [UserController::class, 'pixelFacebook'])->name('user.pixelFacebook');
    Route::post('pixel-gtm', [UserController::class, 'pixelGtm'])->name('user.pixelGtm');
    Route::post('user-active', [UserController::class, 'userActive'])->name('user.active');

    Route::resource('faq', FaqController::class);

    Route::resource('reset', ResetController::class);

    Route::resource('change', PasswordChangeController::class);

    Route::resource('singup', SingUpController::class);

    Route::resource('sales', SalesController::class);

    Route::resource('commissions', CommissionsController::class);

    Route::resource('admin', AdminController::class);
    Route::resource('updates', UpdatesController::class);
    Route::resource('notifications', NotificationController::class);

    Route::resource('integration', IntegrationController::class);
    Route::get('braip', [BraipController::class, 'index'])->name('braip.index');

    Route::resource('links', LinksController::class);
    Route::get('links/show-add-collaborators/{id}',[LinksController::class, 'showAddCollaborators'])->name('showAddCollaborators');
    Route::post('links/add-collaborators/',[LinksController::class, 'addCollaborators'])->name('addCollaborators');
    Route::get('links/collaborators-link/{id}',[LinksController::class, 'collaboratorsLink'])->name('collaboratorsLink');
    Route::post('links/delete-collaborator-link/',[LinksController::class, 'deleteCollaboratorLink'])->name('deleteCollaboratorLink');

    Route::resource('alerts', AlertController::class);
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::post('postback', [CommissionsController::class, 'postback'])->name('postback');
Route::get('get/postback', [CommissionsController::class, 'postback'])->name('get.postback');
