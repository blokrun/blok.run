<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use App\Models\Page;

// Assuming you have an Eloquent model named "Page" for the "pages" table.

class PagesController extends Controller
{
    public function showPage($slug)
    {
        $page = Page::where('slug', $slug)->first();

        if (!$page) {
            abort(404); // Handle page not found
        }

        return view('pages.show', ['page' => $page]);
    }

    public function listPages()
    {
        $pages = Page::orderBy('id', 'desc')->get();

        return view('pages.ai-tools', ['pages' => $pages]);
    }

    public function home()
    {
        return view('pages.home');
    }

    public function susisiekite()
    {
        return view('pages.susisiekite');
    }
    public function apie()
    {
        return view('pages.apie');
    }
}
