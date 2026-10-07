<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConsultationRequest;
use App\Support\LawFirm;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('pages.contact', [
            'services' => LawFirm::services(),
        ]);
    }

    public function store(StoreConsultationRequest $request): RedirectResponse
    {
        // Mode hard-coded: tanpa database. Data yang tervalidasi tidak disimpan di
        // database, melainkan dikonfirmasi ke pengguna dan disiapkan tautan WhatsApp langsung.
        $validated = $request->validated();

        $waMessage = "Halo Holong Siregar & Co., saya {$validated['name']} ingin berkonsultasi mengenai kebutuhan hukum: {$validated['legal_need']}.\n\n"
            ."Subjek: {$validated['subject']}\n"
            ."Telepon/WA: {$validated['phone']}\n"
            ."Email: {$validated['email']}\n\n"
            ."Ringkasan Permasalahan:\n{$validated['message']}";

        $waUrl = LawFirm::whatsappUrl($waMessage);

        return redirect()
            ->route('contact')
            ->with('consultation_success', 'Terima kasih, '.$validated['name'].'. Permintaan konsultasi Anda telah kami terima untuk ditinjau lebih lanjut.')
            ->with('consultation_name', $validated['name'])
            ->with('consultation_wa_url', $waUrl);
    }
}
