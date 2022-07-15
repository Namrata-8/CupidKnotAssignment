<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;

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
Route::group(['middleware'=>'userCheck'],function(){

    Route::get('/userhome', function () {
            $current_user = DB::table('users')->where('id',Session::get('id'))->first();
            $users = DB::table('users')->where('id','<>',1)->get();

            
            foreach($users as $data){
                $count = 0;
                $check = 0;

                if($data->occupation == $current_user->occupation){
                    $count++;
                    $check++;
                }

                if($data->family_type == $current_user->family_type){
                    $count++;
                    $check++;
                }

                if($data->manglik == $current_user->manglik){
                    $count++;
                    $check++;
                }

                if($current_user->expected_occupation !== ''){
                    $check++;
                    if($data->occupation == $current_user->expected_occupation){
                        $count++;
                    }
                }

                if($current_user->expected_family_type !== ''){
                    $check++;
                    if($data->family_type == $current_user->expected_family_type){
                        $count++;
                    }
                }

                if($current_user->expected_manglik !== ''){
                    $check++;
                    if($data->manglik == $current_user->expected_manglik){
                        $count++;
                    }
                }

                
                $data->percentage = round(( $count * 100 )/$check,2);
            }
            $users = $users->sortBy('percentage', SORT_REGULAR, true);

            return view('usershome',['users'=>$users]);
    });

});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});

Route::group(['middleware'=>'adminCheck'],function(){
        Route::get('/adminhome', function () {
            $users = DB::table('users')
                ->when(request()->has('gender') && request('gender') !== 'All', function ($query) {
                    
                        $query->where('gender', request('gender'));
                    
                    })->when(request()->has('occupation') && request('occupation') !== 'All' , function ($query) {

                        $query->where('occupation', request('occupation'));

                    })->when(request()->has('family_type') && request('family_type') !== 'All', function ($query) {

                        $query->where('family_type', request('family_type'));

                    })->when(request()->has('manglik') && request('manglik') !== 'Both', function ($query) {

                        $query->where('manglik', request('manglik'));

                    })->paginate(10)
                    ->appends('gender',request('gender'))
                    ->appends('occupation',request('occupation'))
                    ->appends('family_type',request('family_type'))
                    ->appends('manglik',request('manglik'));

            return view('adminhome',['users'=>$users]);
        });
});
Route::post('/adminLogin', [AdminController::class, 'adminLogin']);
Route::get('/adminLogout',[AdminController::class,'adminLogout']);
Route::post('/login', [UserController::class, 'userLogin']);
Route::get('/logout',[UserController::class,'userLogout']);
Route::post('/signup',[UserController::class,'userSignup']);

Route::get('auth/google','App\Http\Controllers\GoogleController@redirectToGoogle');
Route::get('auth/google/callback','App\Http\Controllers\GoogleController@handleGoogleCallBack');




