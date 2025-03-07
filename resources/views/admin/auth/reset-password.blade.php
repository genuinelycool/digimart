<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ __('Admin Login') }}</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/admin/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/demo.min.css') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="{{ asset('assets/admin/js/demo-theme.min.js') }}"></script>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark">
                    <img src="./static/logo.svg" width="110" height="32" alt="Tabler"
                        class="navbar-brand-image">
                </a>
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">{{ __('Reset your password') }}</h2>

                    <form method="POST" action="{{ route('admin.password.store') }}">
                        @csrf
                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">


                        <div class="mb-3">
                            <label class="form-label">{{ __('Email address') }}</label>
                            <input type="email" name="email" class="form-control" placeholder="your@email.com"
                                autocomplete="off" value="{{ old('email', $request->email) }}" required>
                            <x-input-error :message="$errors->first('email')" class="mt-2" />
                        </div>

                        <div class="mb-2">
                            <label class="form-label">
                                {{ __('Password') }}
                            </label>
                            <div class="input-group input-group-flat">
                                <input type="password" name="password" required autocomplete="current-password"
                                    class="form-control" placeholder="Your password">
                            </div>
                            <x-input-error :message="$errors->first('password')" class="mt-2" />
                        </div>
                        <div class="mb-2">
                            <label class="form-label">
                                {{ __('Confirm Password') }}
                            </label>
                            <div class="input-group input-group-flat">
                                <input type="password" name="password_confirmation" required
                                    autocomplete="current-password" class="form-control" placeholder="Confirm password">
                            </div>
                            <x-input-error :message="$errors->first('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">{{ __('Reset Password') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('assets/admin/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('assets/admin/js/demo.min.js') }}" defer></script>
</body>

</html>
