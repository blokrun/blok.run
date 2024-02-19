<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use App\Models\Page;

use App\Models\ProductCategory;

// Assuming you have an Eloquent model named "Page" for the "pages" table.

class PagesController extends Controller
{
    public function showProductCategory($slug)
    {
        $category = ProductCategory::where('slug', $slug)->first();

        if (!$category) {
            abort(404); // Handle page not found
        }

        return view('pages.showProductCategory', ['category' => $category]);
    }

    public function listPages()
    {
        $pages = Page::orderBy('id', 'desc')->get();

        return view('pages.ai-tools', ['pages' => $pages]);
    }

    public function home()
    {

        $page = Page::where('is_homepage', 1)->first();

        return view('pages.home', ['page' => $page]);
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
