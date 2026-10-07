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

        $waMessage = "Halo *Holong Siregar & Co. Law Office*,\n"
            ."Saya ingin mengajukan permohonan konsultasi hukum melalui website:\n\n"
            ."*Nama Lengkap:* {$validated['name']}\n"
            ."*Nomor Kontak/WA:* {$validated['phone']}\n"
            ."*Kebutuhan Hukum:* {$validated['legal_need']}\n\n"
            ."*Ringkasan Permasalahan:*\n{$validated['message']}\n\n"
            .'Mohon informasi jadwal dan arahan konsultasi selanjutnya. Terima kasih.';

        $waUrl = LawFirm::whatsappUrl($waMessage);

        return redirect()->away($waUrl);
    }
}
