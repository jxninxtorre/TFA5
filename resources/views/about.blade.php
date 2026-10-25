@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="card">
        <h1>About This App</h1>
        <p>
            This is a Laravel project made for TFA1. It has four pages: a landing page,
            an about page, a Customer Accounts page, and a User Accounts page.
        </p>
        <p>
            The account pages use a <strong>static PHP array</strong> as a temporary data source,
            which is looped in Blade using <strong>@@foreach</strong>. A database will be added later.
        </p>
        <p>Built by: <strong>Janina Charisse Torre</strong></p>
        <div class="center">
            <a href="{{ route('home') }}" class="btn">Back to Home</a>
        </div>
    </div>
@endsection