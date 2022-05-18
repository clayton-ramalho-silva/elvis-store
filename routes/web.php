<?php

use App\Http\Controllers\EmailListController;
use App\Mail\SendMailList;
use Illuminate\Support\Facades\Mail;
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

// Route::get('/', function () {
//     return view('site.addemail');
// });


Route::get('/', [EmailListController::class, 'create']);
Route::post('/', [EmailListController::class, 'store']);
Route::get('/sendemail', [EmailListController::class, 'sendemail'])->name('formSendmail');
Route::post('/sendemail', [EmailListController::class, 'enviar']);
Route::get('/remove-email', [EmailListController::class, 'remove']);
Route::delete('/remove-email', [EmailListController::class, 'destroy'])->name('remover-email');
Route::get('/listar-email', [EmailListController::class, 'listarEmail'])->name('listar-email');
Route::post('/listar-email', [EmailListController::class, 'deletarEmail'])->name('deletar-email');




// Route::get('envio-email', function(){

//     $user = new stdClass();
//     $user->name = 'Robson V. Leite';
//     $user->email = 'gustavo@upinside.com.br';

//     //return new SendMailList($user);

//     Mail::send(new SendMailList($user));
// });
