<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\MemberController;
  use App\Http\Controllers\Admincontroller;
    use App\Http\Controllers\Eventcontroller;


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
//     return view('Admin/admin_login');
// });
Route::post('admin_login',[Admincontroller::class,'userlogin']);

Route::get('/', function () {

   // if (session()->has('admin'))
   //  {
   //      return redirect('/dashboard');
   //  }
   return view('Admin/admin_login');
});



Route::get('/logout', function () {
   if (session()->has('admin')) {
       
       session()->pull('admin',null);
   }
   return redirect('/');
});


// public function showLoginForm()
// {
//     if(!session()->has('url.intended'))
//     {
//         session(['url.intended' => url()->previous()]);
//     }
//     return view('auth.login');    
// }

Route::get('/dashboard', function () {
    return view('Admin/index');
});
// Route::get('/Adduser', function () {
//     return view('Admin/form');
// });
 // Route::get('/ManageUser', function () {
 //     return view('Admin/table');
 // });
/***************************Gallery*********************/
Route::view('/Adduser','Admin/form');
Route::post('add',[MemberController::class,'addData']);

 Route::view('/ManageUser','Admin/table');
 Route::get('/ManageUser',[MemberController::class,'show']);

 Route::get('delete/{id}',[MemberController::class,'delete']);


Route::get('/edit/{id}',[MemberController::class,'showdata']);
Route::post('edit',[MemberController::class,'update']);

/********************************************************/

/***********User Register*****************/
Route::view('/Register','Admin/user');

/*************************Events Route******************************/


Route::view('/Event','Admin/event_create');
Route::post('AddEvent',[Eventcontroller::class,'addevent']);

 Route::view('/ManageEvent','Admin/ManageEvent');
 Route::get('/ManageEvent',[Eventcontroller::class,'show']);

//  Route::get('delete/{id}',[Eventcontroller::class,'delete']);


// Route::get('/edit/{id}',[Eventcontroller::class,'showdata']);
// Route::post('edit',[Eventcontroller::class,'update']);


/********************************************************************/


