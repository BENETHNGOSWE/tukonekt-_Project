<?php

use App\Http\Controllers\FormBuilderController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\QRCodeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/user-profile/{id}', [App\Http\Controllers\Register\RegisterController::class, 'userProfile'])->name('user.profile');




Route::get('/', [App\Http\Controllers\Register\RegisterController::class, 'index'])->name('home');
Route::get('create', [App\Http\Controllers\Register\RegisterController::class, 'create'])->name('create.registers');
Route::post('store', [App\Http\Controllers\Register\RegisterController::class, 'store'])->name('store.registers');
Route::post('update/{register}', [App\Http\Controllers\Register\RegisterController::class, 'update'])->name('update.registers');
Route::get('edit/{register}', [App\Http\Controllers\Register\RegisterController::class, 'edit'])->name('edit.registers');

Route::get('show/{register}', [App\Http\Controllers\Dashboard\DashboardController::class, 'show'])->name('show.registers');

Route::get('register', [App\Http\Controllers\Auth\RegisterauthController::class, 'register'])->name('register.registers');
Route::post('register', [App\Http\Controllers\Auth\RegisterauthController::class, 'registerpost'])->name('registerpost.registers');
Route::get('login', [App\Http\Controllers\Auth\RegisterauthController::class, 'login'])->name('login.registers');
Route::post('login', [App\Http\Controllers\Auth\RegisterauthController::class, 'loginpost'])->name('loginpost.registers');

Route::view('read-form-builder/{id}', 'FormBuilder.read');
Route::get('get-form-builder', [FormsController::class, 'read']);
Route::post('save-form-transaction', [FormsController::class, 'create']);

Route::get('qrcode/{token}', [QRCodeController::class, 'show']);

Route::get('/attendance-table', [App\Http\Controllers\Register\RegisterController::class, 'attendanceTable'])->name('attendance.table');


Route::group(['middleware' => 'guest'], function () {
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('dashboard', [App\Http\Controllers\Dashboard\DashboardController::class, 'indexdashboard'])->name('dashboard');
    Route::get('alllist', [App\Http\Controllers\Dashboard\DashboardController::class, 'index_list'])->name('list.dashboard');
    Route::get('export', [App\Http\Controllers\Register\RegisterController::class, 'export'])->name('export.registers');
    Route::get('exportview', [App\Http\Controllers\Register\RegisterController::class, 'export_view'])->name('export_view.registers');
    Route::post('logout', [App\Http\Controllers\Auth\RegisterauthController::class, 'logout'])->name('logout.registers');
    Route::get('pdf', [App\Http\Controllers\Register\RegisterController::class, 'pdf_generate'])->name('pdf.registers');
    Route::get('attendancepdf', [App\Http\Controllers\Register\RegisterController::class, 'pdf_generate_attendance'])->name('pdf.attendancepdf');
    Route::delete('delete/{register}', [\App\Http\Controllers\Dashboard\DashboardController::class, 'delete'])->name('delete.registers');



    // Form Edit Selected Status Only 
    Route::get('edit-form-builder/{id}', [FormBuilderController::class, 'edit'])->name('selected_status_update');
    Route::get('get-form-builder-edit', [FormBuilderController::class, 'edit']);
    Route::post('/update-form/{id}', [FormBuilderController::class, 'update'])->name('update-form');


    


    // Form Edit Data Only not Selected Status
    Route::get('get-form-data-only', [FormBuilderController::class, 'editData']);
    Route::post('update-form-data-only', [FormBuilderController::class,'updateData']);
    Route::view('edit-form-data-only/{id}', 'FormBuilder.editform');

    // Form Routes
    Route::get('form-builder', [FormBuilderController::class, 'index']);
    Route::view('formbuilder', 'FormBuilder.create');
    Route::post('save-form-builder', [FormBuilderController::class, 'create']);
    Route::delete('/form-delete/{id}', [FormBuilderController::class, 'destroy'])->name('form-delete');


    // display all form data
    Route::get('/form-data', [FormsController::class, 'displayFormData']);

    // filter name by date
    Route::get('/filterdata', [App\Http\Controllers\Dashboard\DashboardController::class, 'filterdata'])->name('filterdata.dashboard');
    Route::get('/chartdata', [App\Http\Controllers\Dashboard\DashboardController::class, 'chartdata'])->name('chartdata.dashboard');

    Route::get('pdfform', [FormsController::class, 'pdf_form'])->name('pdf.formbuilder');


    Route::post('/select', [FormBuilderController::class, 'selectForm'])->name('select-form');
    Route::get('/display-form', [FormBuilderController::class, 'displayForm'])->name('display-form');

});
