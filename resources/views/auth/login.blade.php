{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email/Username')" />
            <x-text-input id="login" class="block w-full mt-1" type="text" name="login" :value="old('login')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('login')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500" name="remember">
                <span class="text-sm text-gray-600 ms-2">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



<x-us-layout>
    <main class="main">
        <div class="page-header">
            <div class="container d-flex flex-column align-items-center">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="" class="no-underline">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Login
                            </li>
                        </ol>
                    </div>
                </nav>

                <h1>Login</h1>
            </div>
        </div>


        <div class="container login-container">
            <div class="row">
                <div class="mx-auto col-lg-12">
                    <div class="row">
                        <div class="mx-auto col-md-6">
                            <div class="mb-1 heading">
                                <h2 class="title">Login</h2>
                            </div>

                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <label for="login-email">
                                    Username or email address
                                    <span class="required">*</span>
                                </label>
                                <x-text-input id="password" type="text" name="login" required
                                    autocomplete="current-password" class="form-input form-wide" id="login-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-xl" />

                                <label for="login-password">
                                    Password
                                    <span class="required">*</span>
                                </label>
                                <x-text-input class="form-input form-wide" id="login-password" type="password"
                                    name="password" required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox"
                                            class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500"
                                            name="remember">
                                        <span class="text-gray-600 text-xxl ms-2">{{ __('Remember me') }}</span>
                                    </label>
                                </div>

                                <div class="flex items-center justify-between mt-4">
                                    <a href="{{ route('password.request') }}"
                                        class="no-underline forget-password text-primary form-footer-right">Forgot
                                        Password?</a>
                                    <button type="submit" class="py-2 mx-5 btn btn-lg btn-primary form-footer-right font-weight-normal text-transform-none">
                                        LOGIN
                                    </button>
                                </div>


                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        </div>



        </div>






    </main>
</x-us-layout>
