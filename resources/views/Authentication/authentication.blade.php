@extends('layouts.homeLayout')

@section('content')

    @if (url()->current() === url('register'))
        @section('title', 'register')
        <x-authentication.register />
    @elseif (url()->current() === url('login'))
        @section('title', 'login')
        <x-authentication.login />
    @else
        @section('title', 'preferences')
            <x-authentication.preferences :categories="$categories"/>
            @endif

        @endsection
