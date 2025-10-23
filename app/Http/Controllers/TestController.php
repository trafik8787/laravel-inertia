<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TestController extends Controller
{
    public function index()
    {
        return Inertia::render('Welcome', [
            'name' => 'Vitaliy',
            'framework' => 'Laravel + Inertia + Vue 3',
        ]);
    }

    public function contract()
    {
        return Inertia::render('Contract', [
            'info' => 'Это страница Contract',
        ]);
    }

    public function about()
    {
        return Inertia::render('About', [
            'info' => 'Это страница About',
        ]);
    }
}
