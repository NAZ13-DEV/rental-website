
{{-- <x-guest-layout>
    <h1 class="m-5">Admin Registration</h1>
    <form method="POST" action="{{ route('admin.register.post') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- username -->
        <div class="mt-4">
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block w-full mt-1" type="text" name="username" :value="old('username')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- role -->
        <div class="mt-4">
            <x-input-label for="username" :value="__('Role')" />
            <x-text-input id="role" class="block w-full mt-1" type="hidden" name="role" value="admin" required autocomplete="role" />

            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block w-full mt-1"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
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
                            <li class="breadcrumb-item">
                                <a href="" class="no-underline">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Register</li>
                        </ol>
                    </div>
                </nav>

                <h1>Admin Registration</h1>
            </div>
        </div>

        <div class="container login-container">
            <div class="row">
                <div class="mx-auto col-lg-12">
                    <div class="row">
                        <div class="mx-auto col-md-6">
                            <div class="mb-1 heading">
                                <h2 class="title">Register</h2>
                            </div>

                            <form action="{{ route('admin.registersss') }}" method="POST">

                                @csrf

                                <div class="form-group">
                                    <label for="name">
                                        Full Name
                                        <span class="required">*</span>
                                    </label>
                                    <x-text-input
                                        id="name"
                                        id="login-password"
                                        class="block w-full mt-1 form-input form-wide"
                                        type="text"
                                        name="name"
                                        :value="old('name')"
                                        required
                                        autofocus
                                        autocomplete="name"
                                    />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-2xl" />
                                </div>

                                <div class="form-group">
                                    <label for="email">
                                        Email
                                        <span class="required">*</span>
                                    </label>
                                    <x-text-input
                                        id="email"
                                        class="block w-full mt-1 form-input form-wide"
                                        type="email"
                                        name="email"
                                        :value="old('email')"
                                        required
                                        autocomplete="username"
                                    />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-2xl" />
                                </div>

                                <div class="form-group">
                                    <label for="username">
                                        Username
                                        <span class="required">*</span>
                                    </label>
                                    <x-text-input
                                        id="username"
                                        class="block w-full mt-1 form-input form-wide"
                                        type="text"
                                        name="username"
                                        :value="old('username')"
                                        required
                                        autocomplete="username"
                                    />
                                    <x-input-error :messages="$errors->get('username')" class="mt-2 text-2xl" />
                                </div>

                                <div class="mt-4">
                                    {{-- <x-input-label for="username" :value="__('Role')" /> --}}
                                    <x-text-input id="role" class="block w-full mt-1" type="hidden" name="role" value="admin" required autocomplete="role" />

                                    {{-- <x-input-error :messages="$errors->get('role')" class="mt-2" /> --}}
                                </div>

                                <div class="form-group">
                                    <label for="password">
                                        Password
                                        <span class="required">*</span>
                                    </label>
                                    <x-text-input
                                        id="password"
                                        class="block w-full mt-1 form-input form-wide"
                                        type="password"
                                        name="password"
                                        required
                                        autocomplete="new-password"
                                    />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">
                                        Confirm Password
                                        <span class="required">*</span>
                                    </label>
                                    <x-text-input
                                        id="password_confirmation"
                                        class="block w-full mt-1 form-input form-wide"
                                        type="password"
                                        name="password_confirmation"
                                        required
                                        autocomplete="new-password"
                                    />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="flex items-center justify-between mt-4">
                                    <a
                                        href="{{ route('login') }}"
                                        class="text-3xl no-underline forget-password text-primary form-footer-right"
                                    >
                                        Already Registered?
                                    </a>
                                    <button
                                        type="submit"
                                        class="py-2 mx- btn btn-lg btn-primary form-footer-right font-weight-normal text-transform-none"
                                    >
                                        Register
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
