<?php

use App\Http\Controllers\Exchange;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\referralsController as Referrals;
use App\Http\Controllers\NewPayments;

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

Route::get('/', function () {
    return view('public.index');
});

Route::get('/about', function () {
    return view('public.about');
});

Route::get('/career', function () {
    return view('public.career');
});

Route::get('/security', function () {
    return view('public.security');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/tradinghistory', function () {
        return view('user.tradinghistory');
    })->name('tradinghistory');

    Route::get('/referuser', function () {
        return view('user.referuser');
    })->name('referuser');

    Route::get('/support', function () {
        return view('user.support');
    })->name('support');

    Route::get('/accounthistory', function () {
        return view('user.accounthistory');
    })->name('accounthistory');

    Route::get('/asset-balance', function () {
        return view('user.asset-balance');
    })->name('asset-balance');

    Route::get('/buy-plan', function () {
        return view('user.buy-plan');
    })->name('buy-plan');

    Route::get('/myplans', function () {
        return view('user.myplans');
    })->name('myplans');

    Route::get('/fund', function () {
        return view('user.fund');
    })->name('fund');

    Route::get('/withdraw', function () {
        return view('user.withdraw');
    })->name('withdraw');

    Route::get('/payment', [NewPayments::class, 'index'])->name('payment');
    



    // authentication protected apis
    Route::prefix('/api') -> group(function () {
        Route::get('/referrals', [Referrals::class, 'index']);
        Route::get('/exchange', [Exchange::class, 'index']);
    });
});
