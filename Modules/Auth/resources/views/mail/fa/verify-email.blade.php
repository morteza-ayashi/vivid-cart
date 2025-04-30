<x-mail.layouts.main>
    <x-slot:heading>
        تأیید آدرس ایمیل
    </x-slot:heading>

    <div class="p-6 text-right">
        <p class="text-gray-600 mt-4">
            از ثبت‌نام شما در {{ config('app.name') }} سپاسگزاریم. لطفاً برای تکمیل فرآیند ثبت‌نام و فعال‌سازی حساب خود، آدرس ایمیل‌تان را تأیید کنید.
        </p>

        <p class="text-gray-600 mt-4">
            برای تأیید ایمیل، روی دکمه زیر کلیک کنید:
        </p>

        <div class="mt-6 mb-6 text-center">
            <a href="{{ $url }}" class="inline-block text-white font-bold py-2 px-4 rounded shadow" style="background-color: #fd3d57;">
                تأیید ایمیل
            </a>
        </div>

        <hr />

        <p class="text-gray-600 mt-4">
            اگر در کلیک روی دکمه «تأیید ایمیل» مشکلی دارید، لینک زیر را در مرورگر خود کپی و جای‌گذاری کنید:
        </p>
        <p class="text-gray-600 break-words text-left">{{ $url }}</p>
    </div>
</x-mail.layouts.main>
