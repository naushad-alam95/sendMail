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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('email-test', function(){
  
	$details['email'] = 'your_email@gmail.com';
  
    dispatch(new App\Jobs\SendEmailJob($details));
  
    dd('done');
});*/

Route::get('send-mail', function () {
   
    $details = [
        'email' => 'your_email@gmail.com',
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
    dispatch(new App\Jobs\SendEmailJob($details));
    //\Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\SendEmailTest($details));
   
    dd("Email is Sent.");
});
