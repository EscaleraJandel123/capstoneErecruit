<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//home routes
Route::get('/',[HomeController::class,'index']);

//Applicant routes
// Route::get('/Ahome',[ApplicantController::class,'login']);
Route::get('/ApplicantDashboard',[ApplicantController::class,'index']);
Route::get('/ApplicantLogin',[ApplicantController::class,'login']);
Route::get('/ApplicantRegister',[ApplicantController::class,'register']);

//Admin routes

//Agents routes

// Route::group(['prefix' => 'agents', 'middleware' => 'auth', 'namespace' => 'Agents'], function () {
//     // Define your agent routes here
//     Route::get('/', [AgentsController::class, 'index']);
//     Route::get('/profile', [AgentsController::class, 'profile']);
//     // Add more agent routes as needed
// });