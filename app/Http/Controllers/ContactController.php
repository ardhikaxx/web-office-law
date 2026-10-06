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
        // Hard-coded mode: tanpa database. Data yang tervalidasi tidak disimpan
        // permanen, hanya dikonfirmasi kembali ke pengguna. Nantinya dapat
        // dihubungkan ke ConsultationRequest model / notifikasi WhatsApp/email.
        $validated = $request->validated();

        return redirect()
            ->route('contact')
            ->with('consultation_success', 'Terima kasih, '.$validated['name'].'. Permintaan konsultasi Anda telah kami terima untuk ditinjau lebih lanjut.')
            ->with('consultation_name', $validated['name']);
    }
}
