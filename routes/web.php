<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FreelancerController;
use App\Models\Freelancer;

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
    
    $categories = Category::all();
    if(!empty(Auth::user())){
        return redirect()->route( Auth::user()->usertype.'.home' );
    }
    return view('welcome', [
        'nav_categories' => $categories,
        'top_freelancers' => Freelancer::paginate(5),
    ]);
})->name('welcome');    

Route::prefix('category')->name('category.')->group(function(){
    Route::get('/', [FreelancerController::class, 'viewAllFreelancers'])->name('home');
    Route::get('/{id}', [FreelancerController::class, 'viewFreelancersCategory'])->name('view');
});


Auth::routes();

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->name('admin.')->group(function (){
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
    Route::get('/my-profile', [ProfileController::class, 'index'])->name('my.profile');
    Route::get('/user-profile/{id}', [ProfileController::class, 'viewProfile'])->name('user.view');

    Route::resource('category', CategoryController::class);
});

Route::prefix('c')->middleware(['auth', 'isClient'])->name('client.')->group(function (){
    Route::get('/', [HomeController::class, 'clientIndex']);
    Route::get('/dashboard', [HomeController::class, 'clientIndex'])->name('home');
    Route::get('/my-profile', [ProfileController::class, 'index'])->name('my.profile');
    
    Route::get('/freelancer-profile/{id}', [ProfileController::class, 'viewProfile'])->name('freelancer.view');
});

Route::prefix('f')->middleware(['auth', 'isFreelancer'])->name('freelancer.')->group(function (){
    Route::get('/', [HomeController::class, 'freelancerIndex']);
    Route::get('/dashboard', [HomeController::class, 'freelancerIndex'])->name('home');
    Route::get('/my-profile', [ProfileController::class, 'index'])->name('my.profile');

    Route::get('/client-profile/{id}', [ProfileController::class, 'viewProfile'])->name('client.view');

    Route::resource('freelancer', FreelancerController::class)->only(['update']);
});

Route::prefix('test')->name('test.')->group(function (){
    Route::get('{id}',function ($id)
    {
        return "Test Page ".$id;
    });

    Route::get('responses',function ()
    {
        $band = [
            'name' => 'The Rose',
            'num_members' => 5,
        ];
        return response($band, 201)->header('Content-type','application/json')->cookie('MY_COOKIE','mat',3600);
    });
    Route::get('away',function ()
    {
        return redirect()->away('https:/google.com');
    });

    Route::get('json',function ()
    {
        $users = User::all();
        return response()->json($users);
    });

    Route::get('download',function ()
    {
        return response()->download(public_path('\assets\images\bgimage.jpg'),'download.jpg');
    });
    Route::get('request',function (Request $request)
    {
        $request = (bool) request()->input('name',1);
        return response()->json($request);
    });
    Route::resource('users', UserController::class)->only(['index']);
});