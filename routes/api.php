<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


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
