<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BorangController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CalonController;
use App\Http\Controllers\KawasanController;
use App\Http\Controllers\PartiController;
use App\Http\Controllers\TinjauanController;

Route::get('', [BeritaController::class, 'home'])->name('home'); 

Route::get('berita', [BeritaController::class, 'sekarang']); 
Route::get('berita/senarai', [BeritaController::class, 'senarai_berita']); 
Route::get('berita/{id}', [BeritaController::class, 'satu_berita']); 

Route::get('calon', [CalonController::class, 'senarai_calon']); 
Route::get('calon/{id}', [CalonController::class, 'satu_calon']); 

Route::get('kawasan', [KawasanController::class, 'senarai_kawasan']);  
Route::get('kawasan/{id}', [KawasanController::class, 'satu_kawasan']);

Route::get('parti', [PartiController::class, 'senarai_parti']); 
Route::get('parti/{id}', [PartiController::class, 'satu_parti']);

Route::get('promosi', [PromosiController::class, 'senarai_promosi']); 
Route::get('promosi/{id}', [PromosiController::class, 'satu_promosi']);

Route::get('soalan', [SoalanController::class, 'senarai_soalan']); 
Route::get('soalan/{id}', [SoalanController::class, 'satu_soalan']);

Route::get('tinjauan', [TinjauanController::class, 'rawak']); 
Route::get('tinjauan/senarai', [TinjauanController::class, 'senarai']); 
Route::get('tinjauan/{id}', [TinjauanController::class, 'satu']);


Route::middleware(['auth'])->group(function () {

    Route::get('profile', [UserController::class, 'tunjuk_profile']);
    Route::put('profile', [UserController::class, 'ubah_profile']);

    Route::get('soalan/{id}/ya', [SoalanController::class, 'soalan_ya']);
    Route::get('soalan/{id}/tidak', [SoalanController::class, 'soalan_tidak']);

    Route::get('tinjauan/{id}/ya', [TinjauanController::class, 'undi_ya']);
    Route::get('tinjauan/{id}/tidak', [TinjauanController::class, 'undi_tidak']);

    Route::get('/billing-portal', function (Request $request) {
        try {

            return $request->user()->redirectToBillingPortal();
          
          } catch (\Exception $e) {
          
              if($e->getMessage() == 'User is not a Stripe customer yet. See the createAsStripeCustomer method.') {
                $user = $request->user();
                $user->createAsStripeCustomer();
                return $user->redirectToBillingPortal();
              }
          }        
    });    

});

Route::middleware(['role:admin'])->prefix('admin')->group(function () {

    Route::get('borang', [BorangController::class, 'senarai']);

    Route::get('user', [UserController::class, 'senarai_user']);
    Route::get('user/{id}', [UserController::class, 'satu_user']);

    Route::get('berita', [BeritaController::class, 'borang_berita']); 
    Route::get('calon', [CalonController::class, 'borang_calon']); 
    Route::get('kawasan', [KawasanController::class, 'borang_kawasan']);
    Route::get('parti', [PartiController::class, 'borang_parti']); 
    Route::get('promosi', [PromosiController::class, 'borang_promosi']); 
    Route::get('soalan', [SoalanController::class, 'borang_soalan']); 
    Route::get('tinjauan', [TinjauanController::class, 'borang_tinjauan']);     

    Route::post('berita', [BeritaController::class, 'cipta_berita']); 
    Route::post('calon', [CalonController::class, 'cipta_calon']); 
    Route::post('kawasan', [KawasanController::class, 'cipta_kawasan']);
    Route::post('parti', [PartiController::class, 'cipta_parti']); 
    Route::post('promosi', [PromosiController::class, 'cipta_promosi']); 
    Route::post('soalan', [SoalanController::class, 'cipta_soalan']); 
    Route::post('tinjauan', [TinjauanController::class, 'cipta_tinjauan']); 

    Route::put('berita/{id}', [BeritaController::class, 'ubah_berita']); 
    Route::put('calon/{id}', [CalonController::class, 'ubah_calon']); 
    Route::put('kawasan/{id}', [KawasanController::class, 'ubah_kawasan']);
    Route::put('parti/{id}', [PartiController::class, 'ubah_parti']); 
    Route::put('promosi/{id}', [PromosiController::class, 'ubah_promosi']); 
    Route::put('soalan/{id}', [SoalanController::class, 'ubah_soalan']);    
    Route::put('tinjauan/{id}', [TinjauanController::class, 'ubah_tinjauan']);  

});


require __DIR__.'/auth.php';
