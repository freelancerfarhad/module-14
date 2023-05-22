<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DemoController;

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
// Route::post('/demo',[DemoController::class,'DemoCons']);
// Question 1
Route::post( '/user-info', [DemoController::class, 'UserInfo'] );

// Question 2
Route::get( '/user-agent', [DemoController::class, 'UserAgent'] );

// Question 3
Route::get( '/query', [DemoController::class, 'queryParameter'] );

// Question 4
Route::get( '/json-response', [DemoController::class, 'JsonResponse'] );

// Question 5
Route::post( '/upload', [DemoController::class, 'FileUploads'] );

// Question 6
Route::post( '/cookie', [DemoController::class, 'SetCookie'] );

// Question 7
Route::post( '/submit', function ( Request $request ) {
    $email = $request->input( 'email' );

    $response = array(
        "success" => true,
        "message" => "Form submitted successfully.",
    );

    if ( $email ) {
        return response()->json( $response );
    } else {
        return "Email should not be empty!";
    }
} );



