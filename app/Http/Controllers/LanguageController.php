<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switch($locale)
    {
        // Check if the locale is supported
        if (!in_array($locale, ['en', 'lt'])) {
            abort(400);
        }

        // Store the locale in session
        Session::put('locale', $locale);

        // Redirect back to the previous page
        return redirect()->back();
    }
}