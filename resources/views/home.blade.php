@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="card center">
        <h1>Welcome to Cloud Cafe!</h1>
        <p>A soft and fluffy little system for managing accounts. Pick a page below to get started.</p>
        <a href="{{ route('customers') }}" class="btn pink">Customer Accounts</a>
        <a href="{{ route('users') }}" class="btn">User Accounts</a>
        <a href="{{ route('about') }}" class="btn pink">About</a>
    </div>
@endsection