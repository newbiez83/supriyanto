@extends('layout.master')
@section('content')

<br><br><br>
    
<div class="authentication-area ptb-100">
        <div class="container">
            <div class="auth-form border">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="title">
                        <h4 class="mb-20">LOGIN</h4>
                    </div>

                    
                    <div class="form-group mb-20">
                        <input  class="form-control" type="text" id="email" name="email" placeholder="username" required value="{{ old('email') }}" required>
                    </div>

                    @error('email')
                                    <div class="alert alert-danger">
                                        {{ $message }}.
                                    </div>
                                @else
                                @enderror

                    <div class="form-group mb-20">
                        <input type="password" name="password" class="form-control" required placeholder="Password">
                    </div>

                    

                    <div class="row align-items-center mb-20">
                        
                        <div class="col-sm-8">
                            <div class="link go-signup">
                                Belum punya akun? <a href="/register" target="_self" title="Link">Register</a> 
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary w-100"> Login </button>
                </form>
            </div>
        </div>
    </div>

    @endsection

