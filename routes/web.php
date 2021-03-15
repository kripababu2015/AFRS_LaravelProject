<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AirlineController;

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

Route::get('index', function () {
    return view('index');
});

Route::get('admindashboard', function () {
    return view('admindashboard');
});

Route::view('/userdashboard','userdashboard');



Route::get('airportdet', function () {
    return view('airportdet');
});


// Route::get('addnotification', function () {
//     return view('addnotification');
// });

// Route::get('viewnotifadmin', function () {
//     return view('viewnotifadmin');
// });

// Route::get('viewreguser', function () {
//     return view('viewreguser');
// });
// Route::get('viewbookeduser', function () {
//     return view('viewbookeduser');
// });
// Route::get('viewairport', function () {
//     return view('viewairport');
// });
// Route::get('adviewflight', function () {
//     return view('adviewflight');
// });


  //
    /*******************
*@function:flight details add page
*@Author:Kripa Babu
*@date:10/03/2021
*******************/
Route::view('flightadd','flightadd');


/*******************
*@function:flight details insert
*@Author:Kripa Babu
*@date:10/03/2021
*******************/
Route::post("insertflight",[AirlineController::class,'flightAdd']);

/*******************
*@function:flight view by admin
*@Author:Kripa Babu
*@date:10/03/2021
*******************/
Route::get("flightviewad",[AirlineController::class,'flightviewad']);

/*******************
*@function:flight details delete by admin
*@Author:Kripa Babu
*@date:10/03/2021
*******************/
Route::get("deleteflight/{id}",[AirlineController::class,'deleteflight']);
/*******************
*@function: update flight details page
*@Author:Kripa Babu
*@date:10/03/2021
*******************/
Route::get("updateflightform/{id}",[AirlineController::class,'updateflightform']);

/*******************
*@function:flight details updation
*@Author:Kripa Babu
*@date:10/03/2021
*******************/
Route::post("/updateflight/{id}",[AirlineController::class,'updateflight']);


/*******************
*@function:search flight view page
*@Author:Kripa Babu
*@date:11/03/2021
*******************/
Route::view('searchflightform','searchflight');

/*******************
*@function:search flight
*@Author:Kripa Babu
*@date:11/03/2021
*******************/
Route::get('searchflight',[AirlineController::class,'searchflight']);

/*******************
*@function:ticket booking view
*@Author:Kripa Babu
*@date:12/03/2021
*******************/
Route::get('tickectbooking', function () {
    return view('tickectbooking');
});

/*******************
*@function:payment page
*@Author:Kripa Babu
*@date:12/03/2021
*******************/
Route::view('payment','payment');
/*******************
*@function:payment success page
*@Author:Kripa Babu
*@date:13/03/2021
*******************/
Route::view('pay','pay');
/*******************
*@function:login page(admin and user)
*@Author:Anisha
*@date:10/03/2021
*******************/ 
Route::get("login",[AirlineController::class,'check']);
/*******************
*@function:loginpage view
*@Author:Anisha
*@date:10/03/2021
*******************/ 
Route::get('log_in', function () {
    return view('login');
});
/*******************
*@function:rgister page view
*@Author:Anisha
*@date:10/03/2021
*******************/

Route::get("users",[AirlineController::class,'register']);


/*******************
*@function:booking view
*@Author:Kripa Babu
*@date:13/03/2021
*******************/
Route::get("booking/{id}",[AirlineController::class,'booking']);


/*******************
*@function:booking function
*@Author:Kripa Babu
*@date:13/03/2021
*******************/
Route::post("book",[AirlineController::class,'book']);



/*******************
*@function:inserting airport details
*@Author:Revathy
*@date:10/03/2021
*******************/

Route::post("insertairport",[AirlineController::class, 'airportAdd']);

/*******************
*@function:viewing airport details
*@Author:Revathy
*@date:11/03/2021
*******************/
Route::get("viewairport",[AirlineController::class,'data1']);

/*******************
*@function:deleting airport details
*@Author:Revathy
*@date:11/03/2021
*******************/
Route::get('/delete/{id}',[AirlineController::class,'deleteairport']);

/*******************
*@function:viewing update form airport details
*@Author:Revathy
*@date:11/03/2021
*******************/
Route::get("update/{id}",[AirlineController::class,'update']);

/*******************
*@function:updating airport details
*@Author:Revathy
*@date:11/03/2021
*******************/
Route::post("/updates/{id}",[AirlineController::class,'update_fun']);



/*******************
*@function name:notification
*@function:add notification
*@Author:stefiyajoy
*@date:12/03/2021
*******************/

Route::get('addnotification',[AirlineController::class,'addnotification']);
Route::get('insertnotification',[AirlineController::class,'insertnotification']); 
/*******************
*@function name:notification
*@function:view notification by admin
*@Author:stefiyajoy
*@date:12/03/2021
*******************/
Route::get('getnoti',[AirlineController::class,'notificationlist']);
/*******************
*@function name:notification
*@function:delete notification
*@Author:stefiyajoy
*@date:12/03/2021
*******************/

Route::get('deletenoti/{id}',[AirlineController::class,'deletenoti']);

/*******************
*@function:registered user page  view by admin
*@Author:Anisha
*@date:11/03/2021
*******************/ 
 
Route::get("tableview",[AirlineController::class, 'dataview']);
/*******************
*@function:booked user page  view by admin
*@Author:Anisha
*@date:13/03/2021
*******************/ 

Route::get("adminrecord",[AirlineController::class, 'adminview']);

/*******************
*@function name:notification
*@function:view notification by user
*@Author:stefiyajoy
*@date:12/03/2021
*******************/

Route::get('usernoti',[AirlineController::class,'usernotifylist']);

Route::get("logout",[AirlineController::class,'logout']);

/*******************
*@function:viewing single passenger record 
*@Author:Revathy
*@date:12/03/2021
*******************/

Route::get("getrecord",[AirlineController::class, 'recordview']);
/*******************
*@function:viewing ticket
*@Author:Revathy
*@date:12/03/2021
*******************/

Route::get("getticket",[AirlineController::class, 'ticketview']);

Route::get("airportviewuser",[AirlineController::class, 'airportviewuser']);
