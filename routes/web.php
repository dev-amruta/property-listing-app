
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PropertyController;

Route::get('/', [PropertyController::class,'publicIndex']);
Route::get('/property/{id}', [PropertyController::class,'show']);

Route::middleware(['auth','admin'])->group(function(){

Route::get('/admin/properties',[PropertyController::class,'index']);
Route::get('/admin/properties/create',[PropertyController::class,'create']);
Route::post('/admin/properties',[PropertyController::class,'store']);
Route::get('/admin/properties/{id}/edit',[PropertyController::class,'edit']);
Route::put('/admin/properties/{id}',[PropertyController::class,'update']);
Route::delete('/admin/properties/{id}',[PropertyController::class,'destroy']);

});
