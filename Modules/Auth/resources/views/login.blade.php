<x-home::layouts.raw title="{{ __('Login') }}">
    <div class="container py-16">
        <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
            <x-auth::page-heading heading="{{ __('Login') }}">
                {{ __('Welcome back') }}
            </x-auth::page-heading>

            <form action="{{ route('login') }}" method="POST" autocomplete="off">
                @csrf

                <div class="space-y-2">
                    <div>
                        <label for="email" class="text-gray-600 mb-2 block">{{ __('Email address') }}</label>
                        <input type="email" name="email" id="email" value="{{ old('email')}}"
                               class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400
                               @error('email') border-red-500 @enderror">

                        @error('email')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="text-gray-600 mb-2 block">{{ __('Password') }}</label>
                        <input type="password" name="password" id="password"
                               class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-primary placeholder-gray-400
                               @error('password') border-red-500 @enderror">

                        @error('password')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember"
                               class="text-primary focus:ring-0 rounded-sm cursor-pointer rtl:order-2 rtl:ml-3 ltr:mr-3">
                        <label for="remember" class="text-gray-600 cursor-pointer">{{ __('Remember me') }}</label>
                    </div>
                    <a href="{{ route('forgot-password.form') }}" class="text-primary transition-colors duration-300 hover:text-gray-600">
                        {{ __('Forgot password') }}
                    </a>
                </div>

                <div class="mt-4">
                    <x-forms.button style="wide">
                        {{ __('Login') }}
                    </x-forms.button>
                </div>
            </form>

            <x-auth::login-with />

            <p class="mt-4 text-center text-gray-600">
                {{ __("Don't have account?") }}
                <a href="{{ route('register.form') }}" class="text-primary transition-colors duration-300 hover:text-gray-600">
                    {{ __('Register now') }}
                </a>
            </p>
        </div>
    </div>
</x-home::layouts.raw>
