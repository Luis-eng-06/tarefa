<?php

use App\Http\Controllers\ItemController;

Route::get('/items', [ItemController::class, "index"])->name('items.index');





?>