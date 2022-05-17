<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sitepagecontroller;


Route:: get("/", [sitepagecontroller::class , 'gotoindexpage']);



