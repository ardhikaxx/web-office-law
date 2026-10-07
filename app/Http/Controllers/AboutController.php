<?php

namespace App\Http\Controllers;

use App\Support\LawFirm;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        return view('pages.about', [
            'lawyers' => LawFirm::lawyers(),
            'values' => config('lawfirm.values', []),
            'vision' => LawFirm::vision(),
            'mission' => LawFirm::mission(),
        ]);
    }
}
