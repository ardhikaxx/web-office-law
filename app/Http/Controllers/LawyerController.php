<?php

namespace App\Http\Controllers;

use App\Support\LawFirm;
use Illuminate\View\View;

class LawyerController extends Controller
{
    public function index(): View
    {
        return view('pages.lawyers.index', [
            'lawyers' => LawFirm::lawyers(),
        ]);
    }

    public function show(string $slug): View
    {
        $lawyer = LawFirm::findLawyer($slug);

        abort_if($lawyer === null || empty($lawyer['has_detail']), 404);

        $others = array_values(array_filter(
            LawFirm::lawyers(),
            fn ($item) => $item['slug'] !== $slug && ! empty($item['has_detail'])
        ));

        return view('pages.lawyers.show', [
            'lawyer' => $lawyer,
            'others' => array_slice($others, 0, 3),
        ]);
    }
}
