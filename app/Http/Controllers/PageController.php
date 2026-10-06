<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function faq(): View
    {
        return view('pages.faq', [
            'faqs' => config('lawfirm.faqs', []),
        ]);
    }

    public function disclaimer(): View
    {
        return view('pages.disclaimer');
    }

    public function privacy(): View
    {
        return view('pages.privacy');
    }

    public function terms(): View
    {
        return view('pages.terms');
    }
}
