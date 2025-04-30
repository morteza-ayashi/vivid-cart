<div class="bg-gray-100 text-gray-500 text-center p-4">
    <p class="text-xs">
        © {{ date('Y') }} {{ config('app.name') }}.
        @if(app()->getLocale() === 'fa')
            تمام حقوق محفوظ است.
        @else
            All rights reserved.
        @endif
    </p>
    <p class="text-xs mt-2">
        {{ config('app.email_address') }}
    </p>
</div>
