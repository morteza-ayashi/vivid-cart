<x-mail.layouts.main>
    <x-slot:heading>
        بازنشانی رمز عبور
    </x-slot:heading>

    <div class="p-6 text-right">
        <p class="text-gray-600 mt-4">
            ما درخواستی برای بازنشانی رمز عبور حساب شما در {{ config('app.name') }} دریافت کردیم. اگر شما این درخواست را ارسال نکرده‌اید، می‌توانید این ایمیل را نادیده بگیرید.
        </p>

        <p class="text-gray-600 mt-4">
            برای بازنشانی رمز عبور خود، روی دکمه زیر کلیک کنید:
        </p>

        <div class="mt-6 mb-6 text-center">
            <a href="{{ $url }}" class="inline-block text-white font-bold py-2 px-4 rounded shadow" style="background-color: #fd3d57;">
                بازنشانی رمز عبور
            </a>
        </div>

        <hr />

        <p class="text-gray-600 mt-4">
            اگر در کلیک روی دکمه «بازنشانی رمز عبور» مشکلی دارید، لینک زیر را در مرورگر خود کپی و جای‌گذاری کنید:
        </p>
        <p class="text-gray-600 break-words text-left">{{ $url }}</p>
    </div>
</x-mail.layouts.main>
