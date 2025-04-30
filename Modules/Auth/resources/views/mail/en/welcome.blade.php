<x-mail.layouts.main>
    <x-slot:heading>
        Welcome to {{ config('app.name') }}!
    </x-slot:heading>

    <x-slot:title>
        Your shopping journey starts here
    </x-slot:title>

    <div class="p-6">
        <h2 class="text-xl font-semibold text-gray-800">Hello {{ $user->username }},</h2>

        <p class="text-gray-600 mt-4">
            Thank you for signing up with {{ config('app.name') }}. We’re thrilled to have you join our community. Browse exclusive deals, explore top categories, and enjoy a seamless shopping experience.
        </p>

        <p class="text-gray-600 mt-4">
            To start shopping, click the button below and log in to your account:
        </p>

        <div class="mt-6 text-center">
            <a href="{{ url(route('login.form')) }}" class="inline-block text-white font-bold py-2 px-4 rounded shadow" style="background-color: #fd3d57;">
                Start Shopping
            </a>
        </div>

        <p class="text-gray-600 mt-8">
            Need help? <a href="mailto:{{ config('app.email_address') }}" class="text-gray-800 underline" style="color: #fd3d57;">Contact our support team</a> anytime. We're here to make your shopping easy and enjoyable!
        </p>
    </div>
</x-mail.layouts.main>
