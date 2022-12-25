<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OnlineadmissionController;
use App\Http\Controllers\FormlabelController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\SocialmediaController;
use App\Http\Controllers\BlogcatagoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoController;

// General Pages
// home
Route::get('/',[HomeController::class,'index'])->name('home');

// honorable_teacher
Route::get('/honorable_teacher', function () {
    return view('honorable_teacher');
})->name('honorable_teacher');

// about
Route::get('/about', function () {
    return view('about');
})->name('about');

// aim
Route::get('/aim', function () {
    return view('aim');
})->name('aim');

// management_message
Route::get('/management_message', function () {
    return view('management_message');
})->name('management_message');

// info_for_parents
Route::get('/info_for_parents', function () {
    return view('info_for_parents');
})->name('info_for_parents');

// rules_and_regulation
Route::get('/rules_and_regulation', function () {
    return view('rules_and_regulation');
})->name('rules_and_regulation');

// extra_curricular_activities
Route::get('/extra_curricular_activities', function () {
    return view('extra_curricular_activities');
})->name('extra_curricular_activities');

// online_admission
Route::get('/online_admission', [OnlineadmissionController::class, 'index'])->name('online_admission');
Route::post('/online_admission', [OnlineadmissionController::class, 'create'])->name('online_admission_form');

// notices
Route::get('/notices',[NoticeController::class,'allNotice'])->middleware(['auth:admin', 'verified'])->name('allNotice');

Route::get('/notice/{id}/view',[NoticeController::class,'viewNotice'])->middleware(['auth:admin', 'verified'])->name('viewNotice');


// news_events
Route::get('/news_events', function () {
    return view('news_events');
})->name('news_events');

// gallery
Route::get('/gallery', [GalleryController::class,'viewPhotos'])->name('gallery');

// video
Route::get('/video', function () {
    return view('video');
})->name('video');

// contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

// Admin view
Route::prefix('admin')->group(function(){

// Student Form Setup_View
Route::get('/student_applicationForm', [FormlabelController::class, 'show'])->middleware(['auth:admin', 'verified'])->name('studentFormsetupView');
// Student Form Setup Submit
Route::post('/student_applicationForm', [FormlabelController::class, 'create'])->middleware(['auth:admin', 'verified'])->name('studentFormsetupSubmit');

// Online Applications
Route::get('/online_applications', [OnlineadmissionController::class, 'show'])->middleware(['auth:admin', 'verified'])->name('allApplications');

// Online Application details view
Route::get('/online_applications/{id}', [OnlineadmissionController::class, 'applicationDetails'])->middleware(['auth:admin', 'verified']);


//navbar, slider, logo, socila media, blog, notice, gallery, video CRUD

    Route::get('/nav', [NavbarController::class, 'index'])->middleware(['auth:admin', 'verified'])->name('navbar');
    Route::post('/nav', [NavbarController::class, 'store'])->middleware(['auth:admin', 'verified'])->name('createNav');
    Route::get('/socialMedia', [SocialmediaController::class, 'index'])->middleware(['auth:admin', 'verified'])->name('socialMedia');
    Route::post('/socialMedia', [SocialmediaController::class, 'store'])->middleware(['auth:admin', 'verified'])->name('createSocialMedia');
    Route::get('/catagory', [BlogcatagoryController::class, 'index'])->middleware(['auth:admin', 'verified'])->name('catagory');
    Route::post('/catagory', [BlogcatagoryController::class, 'store'])->middleware(['auth:admin', 'verified'])->name('createCatagory');
    Route::get('/logo',[LogoController::class,'index'])->middleware(['auth:admin', 'verified'])->name('logo');
    Route::post('/logo',[LogoController::class,'store'])->middleware(['auth:admin', 'verified'])->name('createLogo');
    Route::get('/slider',[SliderController::class,'index'])->middleware(['auth:admin', 'verified'])->name('slider');
    Route::post('/slider',[SliderController::class,'store'])->middleware(['auth:admin', 'verified'])->name('createSlider');
    Route::post('/delete/catagory',[BlogcatagoryController::class,'destroy'])->middleware(['auth:admin', 'verified'])->name('deleteCatagory');
    Route::post('/update/catagory/status',[BlogcatagoryController::class,'updateCatagoryStatus'])->middleware(['auth:admin', 'verified'])->name('updateCatagoryStatus');
    Route::post('/delete/logo',[LogoController::class,'destroy'])->middleware(['auth:admin', 'verified'])->name('deleteLogo');
    Route::post('/update/logo/status',[LogoController::class,'updateLogoStatus'])->middleware(['auth:admin', 'verified'])->name('updateLogoStatus');
    Route::post('/delete/nav',[NavbarController::class,'destroy'])->middleware(['auth:admin', 'verified'])->name('deleteNav');
    Route::post('/update/nav/status',[NavbarController::class,'updateNavStatus'])->middleware(['auth:admin', 'verified'])->name('updateNavStatus');
    Route::post('/delete/slider',[SliderController::class,'destroy'])->middleware(['auth:admin', 'verified'])->name('deleteSlider');
    Route::post('/update/slider/status',[SliderController::class,'updateSliderStatus'])->middleware(['auth:admin', 'verified'])->name('updateSliderStatus');
    Route::get('/blog',[BlogController::class,'index'])->middleware(['auth:admin', 'verified'])->name('blog');
    Route::post('/blog',[BlogController::class,'store'])->middleware(['auth:admin', 'verified'])->name('createBlog');
    Route::get('/photos',[GalleryController::class,'index_photos'])->middleware(['auth:admin', 'verified'])->name('photos');
    Route::get('/videos',[GalleryController::class,'index_videos'])->middleware(['auth:admin', 'verified'])->name('videos');
    Route::post('/photos',[GalleryController::class,'addPhotos'])->middleware(['auth:admin', 'verified'])->name('addPhotos');
    Route::post('/photo/delete',[GalleryController::class,'deletePhotos'])->middleware(['auth:admin', 'verified'])->name('deletePhoto');
    Route::get('/notice',[NoticeController::class,'index'])->middleware(['auth:admin', 'verified'])->name('notice');
    Route::post('/notice/create',[NoticeController::class,'store'])->middleware(['auth:admin', 'verified'])->name('createNotice');
    Route::post('/notice/delete',[NoticeController::class,'deleteNotice'])->middleware(['auth:admin', 'verified'])->name('deleteNotice');







   

});

require __DIR__.'/adminauth.php';