<x-mail.layouts.main>
    <x-slot:heading>
        به {{ config('app.name') }} خوش آمدید!
    </x-slot:heading>

    <x-slot:title>
        سفر خرید شما از اینجا آغاز می‌شود
    </x-slot:title>

    <div class="p-6 text-right">
        <h2 class="text-xl font-semibold text-gray-800">سلام {{ $user->username }}،</h2>

        <p class="text-gray-600 mt-4">
            از اینکه به {{ config('app.name') }} پیوستید از شما سپاسگزاریم. خوشحالیم که شما را در جامعه خریداران خود داریم. از پیشنهادهای ویژه بهره‌مند شوید، دسته‌بندی‌های برتر را مرور کنید و از یک تجربه خرید روان لذت ببرید.
        </p>

        <p class="text-gray-600 mt-4">
            برای شروع خرید، روی دکمه زیر کلیک کرده و وارد حساب کاربری خود شوید:
        </p>

        <div class="mt-6 text-center">
            <a href="{{ url(route('login.form')) }}" class="inline-block text-white font-bold py-2 px-4 rounded shadow" style="background-color: #fd3d57;">
                شروع خرید
            </a>
        </div>

        <p class="text-gray-600 mt-8">
            نیاز به کمک دارید؟ <a href="mailto:{{ config('app.email_address') }}" class="text-gray-800 underline" style="color: #fd3d57;">با تیم پشتیبانی ما تماس بگیرید</a>. ما همیشه در کنار شما هستیم!
        </p>
    </div>
</x-mail.layouts.main>
