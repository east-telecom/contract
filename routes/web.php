<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\MailController;


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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::middleware(['auth', 'isAdmin'])->group(function () {


    /******************** Template ***********************/
    Route::group(['prefix' => '/'], function() {
        Route::get('/template1', [TemplateController::class, 'template1'])->name('template1');
        Route::get('/template2', [TemplateController::class, 'template2'])->name('template2');
        Route::get('/template3', [TemplateController::class, 'template3'])->name('template3');
        Route::get('/template4', [TemplateController::class, 'template4'])->name('template4');
        Route::get('/template5', [TemplateController::class, 'template5'])->name('template5');
        Route::get('/template6', [TemplateController::class, 'template6'])->name('template6');
        Route::get('/template7', [TemplateController::class, 'template7'])->name('template7');
        Route::get('/template8', [TemplateController::class, 'template8'])->name('template8');
        Route::get('/template9', [TemplateController::class, 'template9'])->name('template9');
        Route::get('/template10', [TemplateController::class, 'template10'])->name('template10');
        Route::get('/template11', [TemplateController::class, 'template11'])->name('template11');

//        Route::post('/template-store', [TemplateController::class, 'store'])->name('templates.store');
        Route::post('/template/sum_text', [TemplateController::class, 'sum_text'])->name('sum_text');
    });
    /******************** ./Template *********************/


    /******************** Contract *************************/
    Route::group(['prefix' => '/'], function() {
        Route::resource('/contract', ContractController::class)->except(['create', 'show']);
        Route::get('/contract/{contract}/create-pdf', [ContractController::class, 'show'])->name('contract.show');

        Route::post('/contract/update-status-jurists/', [ContractController::class, 'update_status_and_send_jurists'])->name('contract.update_status_and_send_jurists');
        Route::post('/contract/update-status-employee/', [ContractController::class, 'update_status_and_send_employee'])->name('contract.update_status_and_send_employee');

        Route::post('/contract/file-download/', [ContractController::class, 'files_download'])->name('files_download');
    });
    /******************** ./Contract *********************/



    /******************** Users ***********************/
    Route::group(['prefix' => '/'], function() {
        Route::resource('/user', UsersController::class)->except(['create', 'edit', 'show']);
        Route::get('/user/one-user/{id}', [UsersController::class, 'oneUser'])->name('user.oneUser');
        Route::get('/user-profile-show/', [UsersController::class, 'user_profile_show'])->name('user.user_profile_show');
        Route::put('/user/user-profile-update/{id}', [UsersController::class, 'user_profile_update'])->name('user.user_profile_update');
    });
    /******************** Users ***********************/




});




