<?php

use Illuminate\Support\Facades\Route;

Route::get('hello/{Krel}', function ($Krel) {
    return 'hi ' . $Krel;
});
