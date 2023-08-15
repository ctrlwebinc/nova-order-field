<?php

use Illuminate\Support\Facades\Route;
use Ctrlweb\NovaOrderField\Http\OrderFieldRequestHandler;

Route::post('{resource}', OrderFieldRequestHandler::class);
