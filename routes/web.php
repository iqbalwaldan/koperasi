<?php

use App\Http\Controllers\Client\Admin\AuthController;
use App\Http\Controllers\Client\Admin\ManageController;
use App\Http\Controllers\Client\User\AnnouncementController;
use App\Http\Controllers\Client\User\DashboardController;
use App\Http\Controllers\Client\User\ProfileController;
use App\Http\Controllers\Client\User\PublicationController;
use App\Http\Controllers\Client\User\PublicServiceController;
use App\Http\Controllers\Client\User\RegulationController;
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

Route::get('/', [DashboardController::class, 'index']);

// Profile
Route::get('/profil/struktur-organisasi', [ProfileController::class, 'organizationalStructure']);
Route::get('/profil/visi-dan-misi', [ProfileController::class, 'visiMisi']);
Route::get('/profil/regulasi-tugas-dan-fungsi', [ProfileController::class, 'dutiesFunctions']);

// Publikasi
Route::get('/publikasi/siaran-pers', [PublicationController::class, 'pressRelease']);
Route::get('/publikasi/siaran-pers/{slug}', [PublicationController::class, 'showPressRelease']);
Route::get('/publikasi/informasi', [PublicationController::class, 'information']);
Route::get('/publikasi/informasi/{slug}', [PublicationController::class, 'showInformation']);
Route::get('/publikasi/galeri-foto', [PublicationController::class, 'photoGallery']);
Route::get('/publikasi/galeri-foto/{slug}', [PublicationController::class, 'showPhotoGallery']);

// Announcement
Route::get('/kegiatan', [AnnouncementController::class, 'activity']);
Route::get('/kegiatan/{slug}', [AnnouncementController::class, 'showActivity']);

// Regulation
Route::get('/regulasi/{slug}', [RegulationController::class, 'index']);

// Service
Route::get('/layanan-publik', [PublicServiceController::class, 'index']);
// Route::get('/layanan-publik/bidang-perdagangan', [PublicServiceController::class, 'tradeSector']);
// Route::get('/layanan-publik/bidang-pemberdayaan-koperasi-dan-usaha-mikro', [PublicServiceController::class, 'umkm']);
Route::get('/layanan-publik/{slug}', [PublicServiceController::class, 'serviceDetail'])->name('service-detail');


Route::group(['prefix' => 'admin'], function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
        Route::post('/login', [AuthController::class, 'postLogin'])->name('admin.login.submit');
    });
    Route::middleware('auth')->group(function () {
        Route::get('/siaran-pers', [ManageController::class, 'pressRelease'])->name('admin.manage-press-release.index');
        Route::get('/siaran-pers/tambah', [ManageController::class, 'pressReleaseCreate'])->name('admin.manage-press-release.create');
        Route::post('/siaran-pers', [ManageController::class, 'pressReleaseStore'])->name('admin.manage-press-release.store');
        Route::get('/siaran-pers/{slug}', [ManageController::class, 'pressReleaseEdit'])->name('admin.manage-press-release.edit');
        Route::put('/siaran-pers/{slug}', [ManageController::class, 'pressReleaseUpdate'])->name('admin.manage-press-release.update');
        Route::delete('/siaran-pers/{id}', [ManageController::class, 'pressReleaseDestroy'])->name('admin.manage-press-release.destroy');
        
        Route::get('/kegiatan', [ManageController::class, 'activity'])->name('admin.manage-activity.index');
        Route::get('/kegiatan/tambah', [ManageController::class, 'activityCreate'])->name('admin.manage-activity.create');
        Route::post('/kegiatan', [ManageController::class, 'activityStore'])->name('admin.manage-activity.store');
        Route::get('/kegiatan/{slug}', [ManageController::class, 'activityEdit'])->name('admin.manage-activity.edit');
        Route::put('/kegiatan/{slug}', [ManageController::class, 'activityUpdate'])->name('admin.manage-activity.update');
        Route::delete('/kegiatan/{id}', [ManageController::class, 'activityDestroy'])->name('admin.manage-activity.destroy');

        Route::get('/galeri', [ManageController::class, 'gallery'])->name('admin.manage-gallery.index');
        Route::get('/galeri/tambah', [ManageController::class, 'galleryCreate'])->name('admin.manage-gallery.create');
        Route::post('/galeri', [ManageController::class, 'galleryStore'])->name('admin.manage-gallery.store');
        Route::get('/galeri/{slug}', [ManageController::class, 'galleryEdit'])->name('admin.manage-gallery.edit');
        Route::put('/galeri/{slug}', [ManageController::class, 'galleryUpdate'])->name('admin.manage-gallery.update');
        Route::delete('/galeri/{id}', [ManageController::class, 'galleryDestroy'])->name('admin.manage-gallery.destroy');

        Route::get('/data/{slug}', [ManageController::class, 'data'])->name('admin.manage-data.index');
        Route::get('/data/tambah/{slug}', [ManageController::class, 'dataCreate'])->name('admin.manage-data.create');
        Route::post('/data/store', [ManageController::class, 'dataStore'])->name('admin.manage-data.store');
        Route::get('/data/edit/{id}', [ManageController::class, 'dataEdit'])->name('admin.manage-data.edit');
        Route::put('/data/{id}', [ManageController::class, 'dataUpdate'])->name('admin.manage-data.update');
        Route::delete('/data/{id}', [ManageController::class, 'dataDestroy'])->name('admin.manage-data.destroy');
        
        Route::get('/profil/edit/{slug}', [ManageController::class, 'profileEdit'])->name('admin.manage-profile.edit');
        Route::put('/profil/{slug}', [ManageController::class, 'profileUpdate'])->name('admin.manage-profile.update');
        
        Route::get('/pengaturan', [ManageController::class, 'settingEdit'])->name('admin.manage-setting.edit');
        Route::put('/pengaturan', [ManageController::class, 'settingUpdate'])->name('admin.manage-setting.update');

        Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    });
});



// // News
// Route::get('/siaran-pers', [NewsController::class, 'pressRelease']);
// Route::get('/siaran-pers/{slug}', [NewsController::class, 'showPressRelease']);
// Route::get('/berita-media', [NewsController::class, 'journalistUMKM']);
// Route::get('/berita-media/{slug}', [NewsController::class, 'showJournalistUMKM']);

// // Publication
// Route::get('/laporan-keuangan', [PublicationController::class, 'financialReport']);
// Route::get('/alamat-dinas', [PublicationController::class, 'officeAddress']);
// Route::get('/publikasi/{slug}', [PublicationController::class, 'basicLaw']);

// // Announcement
// Route::get('/informasi-kios', [AnnouncementController::class, 'kioskInformation']);

// // Tips Info
