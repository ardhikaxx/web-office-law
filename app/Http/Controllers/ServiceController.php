<?php

namespace App\Http\Controllers;

use App\Support\LawFirm;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        return view('pages.services.index', [
            'services' => LawFirm::services(),
        ]);
    }

    public function show(string $slug): View
    {
        $service = LawFirm::findService($slug);

        abort_if($service === null, 404);

        return view('pages.services.show', [
            'service' => $service,
            'related' => LawFirm::relatedServices($slug, 3),
        ]);
    }
}
