{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
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
                                My Account
                            </li>
                        </ol>
                    </div>
                </nav>

                <h1>Reset Password</h1>
            </div>
        </div>


        <div class="container reset-password-container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <div class="feature-box border-top-primary">
                        <div class="feature-box-content">
                            <form class="mb-0" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <p>
                                    Lost your password? Please enter your
                                    email address. You will receive
                                    a link to create a new password via email.
                                </p>
                                <div class="mb-0 form-group">
                                    <label for="reset-email" class="font-weight-normal">Email</label>
                                    <input type="email" class="form-control" id="reset-email"
                                        name="email":value="old('email')" required autofocus />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2 space-y-1 text-xl text-red-600 " />

                                </div>

                                <div class="mb-0 form-footer">
                                    <a href="{{ route("login")}}" class="no-underline">Click here to login</a>

                                    <button type="submit"
                                        class="mr-0 btn btn-md btn-primary form-footer-right font-weight-normal text-transform-none">
                                        Reset Password
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-us-layout>
