@extends('layouts.default') @section('content')

<section class="dashboard">
    <div class="dashboard-header">
        <h1 class="header-text animated-element" data-animation="animate-fade-in-up">Dashboard</h1>
    </div>

    <form class="dashboard-form animated-element" data-animation="animate-fade-in" action="{{ route('logout') }}" method="POST">
        @csrf
        <div class="form-message">
            @if (session()->get('success') )
            <p class="message-box">{{ session()->get('success')  }}</p>
            @endif
        </div>

        <div class="form-action">
            <button class="btn-pink action-button" type="submit">Sign out</button>
        </div>
    </form>
</section>

@endsection
