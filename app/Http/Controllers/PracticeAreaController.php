<?php

namespace App\Http\Controllers;

use App\Support\LawFirm;
use Illuminate\View\View;

class PracticeAreaController extends Controller
{
    public function index(): View
    {
        return view('pages.practice-areas.index', [
            'areas' => LawFirm::practiceAreas(),
        ]);
    }

    public function show(string $slug): View
    {
        $area = LawFirm::findPracticeArea($slug);

        abort_if($area === null, 404);

        return view('pages.practice-areas.show', [
            'area' => $area,
            'others' => array_values(array_filter(
                LawFirm::practiceAreas(),
                fn ($item) => $item['slug'] !== $slug
            )),
        ]);
    }
}
