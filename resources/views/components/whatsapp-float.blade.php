<div class="wa-float-container" id="waFloatContainer">
    {{-- WhatsApp Tooltip Bubble --}}
    <div class="wa-tooltip" id="waTooltip" role="tooltip" aria-hidden="true">
        <button type="button" class="wa-tooltip-close" id="waTooltipClose" aria-label="Tutup pesan">&times;</button>
        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="wa-tooltip-link text-decoration-none">
            <div class="wa-tooltip-header">
                <span class="wa-online-dot"></span>
                <strong>Holong Siregar &amp; Co.</strong>
            </div>
            <p class="wa-tooltip-text mb-0">
                Butuh konsultasi hukum? <span>Chat WhatsApp kami sekarang</span>
            </p>
        </a>
    </div>

    {{-- WhatsApp Float Button --}}
    <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener"
       class="wa-float" aria-label="Hubungi via WhatsApp"
       title="Hubungi via WhatsApp">
        <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
    </a>
</div>
