@extends('layout.master')
@section('content')
<br><br>
<div class="authentication-area ptb-100">
        <div class="container">
            <div class="auth-form border">
            <form method="POST" action="{{ route('register') }}">
            @csrf
                    <div class="title">
                        <h4 class="mb-20">Register</h4>
                    </div>
                    <div class="form-group mb-20">
                        <input  id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus placeholder="username">
                    </div>
                    <div class="form-group mb-20">
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required placeholder="email">
                    </div>
                    <div class="form-group mb-20">
                        <input id="password" class="form-control" type="password" name="password" required placeholder="password">
                    </div>
                    <div class="form-group mb-20">
                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required placeholder="confirm password">
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

                    <div class="row align-items-center mb-20">
                        
                        <div class="col-sm-8">
                            <div class="link go-signup">
                                Sudah punya akun? <a href="/login" target="_self" title="Link">Login</a> 
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary w-100"> Signup </button>
                </form>
            </div>
        </div>
    </div>


@endsection