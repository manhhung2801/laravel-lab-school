<?php

use App\Http\Controllers\SinhVienController;
use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;

/** lab 1 */
// Route::get('/', [TinController::class, 'index']);
// Route::get('/lien-he', [TinController::class, 'lienhe']);
// Route::get('/gioi-thieu', [TinController::class, 'gioithieu']);

// Route::get('/ct/{id}', [TinController::class, 'lay1tin']);

// Route::get('/sinhvien', [SinhVienController::class, 'index']);

/** lab 1 */

/** lab 2 */

Route::get('/', function () {
    return view('index');
})->name('trang-chu');
Route::get('/gioi-thieu', function () {
    return view('gioithieu');
})->name('gioi-thieu');
Route::get('/lien-he', function () {
    return view('lienhe');
})->name('lien-he');
Route::get('/dich-vu', function () {
    return view('dichvu');
})->name('dich-vu');

/** tin tuc */
Route::get('/tinmoi', function() {
    $query = DB::table('tins')
    ->select('id', 'tieuDe', 'ngayDang')
    ->orderBy('ngayDang', 'desc')
    ->limit(10);
    $data = $query->get();
    return view('tinmoi', ['data' => $data]);
})->name('tin-tuc');

Route::get('/chi-tiet-tin-tuc/{id}', function($id) {
    $data = DB::table('tins')
    ->select('id', 'tieuDe', 'tomTat', 'xem', 'ngayDang')
    ->where('id', '=', $id)
    ->first();
    return view('chi-tiet-tin-tuc', compact('data'));
})->name('chi-tiet-tin-tuc');

Route::get('/txn', function() {
    $query = DB::table('tins')
    ->select('id', 'tieuDe', 'ngayDang', 'xem')
    ->orderBy('xem', 'desc')
    ->limit(10);
    $data = $query->get();
    return view('txn', ['data' => $data]);
})->name('txn');

Route::get('/tintrongloai/{id}', function($id) {
    $query = DB::table('tins')
    ->select('id', 'tieuDe', 'tomTat', 'ngayDang')
    ->where('idLT', '=', $id)
    ->orderBy('ngayDang', 'desc');
    $data = $query->get();
    return view('tintrongloai', ['data' => $data]);
});
