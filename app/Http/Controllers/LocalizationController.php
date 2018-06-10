<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class LocalizationController extends Controller
{
    public function setLocale($locale)
    {
        Cache::forever('locale', $locale);
        return redirect()->back();
    }
}
