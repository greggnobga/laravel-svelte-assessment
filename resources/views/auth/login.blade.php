@extends('layouts.default') @section('content')

<section class="signin">
    <div class="signin-header">
        <h1 class="header-text animated-element" data-animation="animate-fade-in-up">Sign in</h1>
    </div>

    <form class="signin-form animated-element" data-animation="animate-fade-in" method="POST" action="{{ route('login') }}">
        @csrf @if ($errors->has('error'))
        <div class="form-error">
            <p class="error-message">{{ $errors->first('error') }}</p>
        </div>
        @endif

        <div class="form-group">
            <label class="form-label" for="name">Username</label>
            <input class="form-input" type="text" id="name" name="name" />
        </div>
        <div class="form-group">
            <label class="form-label" for="password">Password</label>
            <input class="form-input" type="password" id="password" name="password" />
        </div>

        <div class="form-action">
            <button class="btn-pink action-button" type="submit">Sign in</button>
            <p class="action-forgot">Forgot password?</p>
        </div>
    </form>
    <div class="signin-rule animated-element" data-animation="animate-fade-in">
        <p class="rule-text">Policy</p>
        <p class="rule-text">Terms</p>
    </div>
</section>
@endsection
