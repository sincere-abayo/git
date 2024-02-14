<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\News;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserPackageController;
use App\Http\Controllers\User\PaymentController;
use App\Http\Controllers\User\Position;
use App\Http\Controllers\User\WebhookController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\User\ActivationController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Users;
use App\Http\Controllers\Admin\TasksController;
use App\Http\Controllers\Admin\manage;
use App\Http\Controllers\Admin\Requested;
use App\Http\Controllers\Fearloss\Payclick;
use App\Http\Controllers\Fearloss\Videos;
// use App\Http\Controllers\Fearloss\Advertisment;
use App\Http\Controllers\project\Project;
use App\Http\Controllers\User\Balance;
use App\Http\Controllers\User\Club;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\User\Team;
use App\Http\Controllers\User\Events;


    // Your routes here


Route::get('/', function () {
    return view('home.welcome');
})->name('front');

Route::get('/team', function () {
    return view('user.team.teamtest');
});

Route::get('/clubfix', function () {
    return view('user.team.clubfix');
});

Route::get('user/pay/fc1', [PaymentController::class, 'fc1'])->name('fc1');
 Route::get('user/pay/fc2', [PaymentController::class, 'fc2'])->name('fc2');
 Route::get('guest-request', [HomeController::class, 'requested'])->name('request');



Route::middleware(['auth:sanctum','verified'])->group(function () {
    // return view('user.dashboard');
Route::post('dashboard', [ActivationController::class, 'g_upgrade'])->name('validate');
    Route::get('user/package/payment/free', [PaymentController::class, 'free'])->name('free');
    
     Route::get('user/package/payment/status', [PaymentController::class, 'pscallback']);
 Route::get('user/package/payment/error', [PaymentController::class, 'pserror']);

  Route::get('user/package/payment/success', [PaymentController::class, 'pssuccess']);
  

    Route::get('user/package', [UserPackageController::class, 'index'])->name('user.package');


    // Route::get('user/package/pay', [PaymentController::class, 'pay'])->name('user.pay')->withoutMiddleware('user-package');
Route::Post('user/package/payment',[PaymentController::class,'blockpay'])->name('payment');
// Route::get('user/package/pay',[PaymentController::class,'test']);
Route::get('user/package/unconfirmed',[PaymentController::class,'unconfirmed']);

});

Route::middleware(['auth:sanctum', 'verified','user-package','contract'])->group(function () {

    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');

Route::get('user/dashboard/activate/', [ActivationController::class, 'index'])->name('user.dashboard.activate');

Route::get('user/dashboard/balance/', [Balance::class, 'index'])->name('user.dashboard.balance');
Route::get('user/dashboard/deposit/', [Balance::class, 'deposit'])->name('user.dashboard.deposit');
Route::post('user/dashboard/deposit/', [Balance::class, 'api'])->name('user.deposit');


Route::post('user/club/create-club/', [Club::class, 'create'])->name('club.create');
Route::post('user/club/invite-user/', [Club::class, 'invite'])->name('club.invite');
Route::get('user/club/accept-request/', [Club::class, 'accept'])->name('club.accept');
Route::get('user/club/accept-invitaion', [Club::class, 'acceptInvite'])->name('club.invite.accept');
Route::post('user/club/request-to-join/', [Club::class, 'request'])->name('club.request');;


Route::post('user/dashboard/activate/validate', [ActivationController::class, 'upgrade'])->name('user.dashboard.validate');


Route::get('user/dashboard/package', [ActivationController::class, 'package'])->name('user.package.history');

Route::get('user/dashboard/referral', [UserDashboardController::class, 'referral'])->name('user.referral.show');

Route::get('user/dashboard/task', [UserDashboardController::class, 'showtask'])->name('user.task.show');
Route::get('user/contract', [UserPackageController::class, 'contract'])->name('user.contract')->withoutmiddleware('contract');
Route::post('user/contract/preview', [UserPackageController::class, 'Savecontract'])->name('user.contract.save')->withoutmiddleware('contract');

Route::post('user/contract/confirm', [UserPackageController::class, 'Confirmcontract'])->name('user.contract.confirm')->withoutmiddleware('contract');
Route::get('user/dashboard/payclick', [Payclick::class, 'Showclick'])->name('user.dashboard.payclick');
// Route::get('user/dashboard/advertisment', [Advertisment::class, 'Showads'])->name('user.dashboard.advertisment');
Route::get('user/dashboard/project', [Project::class, 'Showproject'])->name('user.dashboard.project');
Route::get('user/dashboard/project/ptc', [Project::class, 'Showptc'])->name('user.dashboard.ptc');
Route::post('user/dashboard/project/ptc', [Project::class, 'Storeptc'])->name('user.ptc');
Route::post('user/dashboard/project/video', [Project::class, 'Storevideo'])->name('user.video');
Route::get('user/dashboard/videos', [Videos::class, 'Showvideo'])->name('user.dashboard.payvideo');
Route::get('user/dashboard/project/watch', [videos::class, 'watch'])->name('user.watch');
Route::get('user/dashboard/project/video', [Project::class, 'Showvideo'])->name('user.dashboard.video');
Route::get('user/dashboard/project/myptc', [Project::class, 'Showmyptc'])->name('user.dashboard.myptc');
Route::get('user/dashboard/project/myvideo', [Project::class, 'Showmyvideo'])->name('user.dashboard.myvideo');
Route::get('/user/dashboard/payments', [UserDashboardController::class, 'payments'])->name('user.dashboard.payments');
// Route::get('user/dashboard/ppc', [Payclick::class, 'Viewclick'])->name('user.click.view');
Route::get('user/dashboard/ppcu', [Payclick::class, 'url'])->name('user.url');
Route::get('user/dashboard/ppc', [Payclick::class, 'click'])->name('user.click');
Route::post('user/dashboard/ppc', [Payclick::class, 'Payads'])->name('user.ads');

// club
Route::get('user/club', [Team::class, 'create'])->name('user.dashboard.create');
});

// events
Route::get('user/dashboard/events/', [Events::class, 'getEvents'])->name('user.dashboard.events');

Route::post('admin/check', [AdminController::class, 'check'])->name('admin.login');
Route::get('admin/login', [AdminController::class, 'login'])->name('admin.log');

Route::middleware(['auth:sanctum', 'verified','user-package'])->group(function () {
Route::get('admin/', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('admin/dashboard/contacted', [AdminController::class, 'contacted'])->name('admin.contacted');

Route::post('admin/login', [AdminController::class, 'logout'])->name('admin.logout');


Route::get('admin/manage-ads', [manage::class, 'ads'])->name('admin.ads');

Route::get('admin/check-ad', [manage::class, 'clicked'])->name('clicks');
Route::get('admin/check-ads', [manage::class, 'approveAds'])->name('admin.ads.approve');

Route::get('admin/add-ads', [manage::class, 'addAds'])->name('admin.ads.create');
Route::post('admin/add-ptc', [manage::class, 'createAds'])->name('admin.add.ads');

//apply for position
Route::post('user/dashboard/apply', [Position::class, 'apply'])->name('user.position.apply');



Route::get('admin/manage-video', [manage::class, 'videos'])->name('admin.videos');

Route::get('admin/check-video', [manage::class, 'watch'])->name('admin.watch');
Route::get('admin/check-videos', [manage::class, 'approveWatch'])->name('admin.video.approve');

Route::get('admin/add-video', [manage::class, 'videoAds'])->name('admin.video.create');
Route::post('admin/add-ads', [manage::class, 'createvideo'])->name('admin.video');



 Route::get('admin/profile', [ProfileController::class, 'ad_edit'])->name('admin.profile.edit');

       Route::post('admin/profile', [ProfileController::class, 'ad_updates'])->name('admin.profile.updates');

Route::get('admin/user/ft', [AdminController::class, 'ft'])->name('admin.ft');
Route::get('admin/user/requested', [Requested::class, 'requested'])->name('admin.requested');
Route::get('admin/user/verify', [AdminController::class, 'verify'])->name('admin.verify');
Route::get('admin/user/pending', [AdminController::class, 'pending'])->name('admin.pending');
Route::get('admin/user/fc1', [AdminController::class, 'fc1'])->name('admin.fc1');
Route::get('admin/user/fc2', [AdminController::class, 'fc2'])->name('admin.fc2');
Route::post('admin/user/ft/save', [ActivationController::class, 'saveCode'])->name('admin.ft.save');
Route::post('admin/user/task', [TasksController::class, 'store'])->name('admin.task.store');
Route::get('admin/user/task', [TasksController::class, 'task'])->name('admin.user.task');
Route::get('admin/user-subscribed', [Requested::class, 'subscribe'])->name('admin.subscribe');

Route::get('admin/user-add', [Users::class, 'add_user'])->name('admin.add_user');

 Route::get('balance/', [HomeController::class, 'balance']);



});

Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');

       Route::post('profile', [ProfileController::class, 'updates'])->name('profile.updates');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



 Route::get('try', [HomeController::class, 'try']);

 Route::get('about', [HomeController::class, 'about'])->name('about');
 Route::get('contact', [HomeController::class, 'contact'])->name('contact');
  Route::post('contact', [HomeController::class, 'contacted'])->name('contact.us');
 Route::get('getnews', [News::class, 'activate'])->name('latest');
 Route::get('deactivate', [News::class, 'deactivate']);

  Route::get('project', [HomeController::class, 'project'])->name('project');
Route::get('success', [PaymentController::class, 'success']);
Route::get('error', [PaymentController::class, 'error']);

Route::middleware('auth')->group(function(){

}); 
//logout
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('/download/{file}', [FileController::class, 'download'])->name('file.download');


Route::get('/privancy', [HomeController::class, 'privacy'])->name('policy');
Route::get('/term_and_condition', [HomeController::class, 'condition'])->name('tam');
Route::get('/info', [HomeController::class, 'info'])->name('info');
// Route::post('/register/request', [HomeController::class, 'request'])->name('guest.request');

Route::get('psio',[HomeController::class, 'psio']);

require __DIR__.'/auth.php';