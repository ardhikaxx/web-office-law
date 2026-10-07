<?php

namespace App\Http\Controllers;

use App\Support\LawFirm;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('pages.home', [
            'services' => LawFirm::services(),
            'practiceAreas' => LawFirm::practiceAreas(),
            'lawyers' => array_slice(LawFirm::lawyers(), 0, 4),
            'articles' => array_slice(LawFirm::articles(), 0, 3),
            'values' => array_slice(config('lawfirm.values', []), 0, 6),
        ]);
    }
}
