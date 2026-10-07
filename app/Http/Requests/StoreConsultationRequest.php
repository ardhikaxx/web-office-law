<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConsultationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        $serviceTitles = collect(config('lawfirm.services', []))->pluck('title')->all();

        return [
            'name' => ['required', 'string', 'min:3', 'max:100'],
            'phone' => ['required', 'string', 'min:9', 'max:20', 'regex:/^[0-9+\-\s()]+$/'],
            'legal_need' => ['required', 'string', 'in:'.implode(',', $serviceTitles).',Lainnya'],
            'message' => ['required', 'string', 'min:5', 'max:3000'],
            'agreement' => ['accepted'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama lengkap wajib diisi.',
            'phone.required' => 'Nomor WhatsApp/telepon wajib diisi.',
            'phone.regex' => 'Format nomor telepon tidak valid.',
            'legal_need.required' => 'Pilih jenis kebutuhan hukum.',
            'message.required' => 'Ringkasan permasalahan wajib diisi.',
            'message.min' => 'Ringkasan permasalahan minimal 5 karakter.',
            'agreement.accepted' => 'Anda harus menyetujui pernyataan persetujuan.',
        ];
    }
}
