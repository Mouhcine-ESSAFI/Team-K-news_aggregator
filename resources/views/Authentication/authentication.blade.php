@extends('layouts.homeLayout')

@section('content')

    @if (Request::url() === 'http://localhost/register')
        @section('title')
            register
        @endsection

        <x-authentication.register />
    @elseif (Request::url() === 'http://localhost/login')

        @section('title')
            login
        @endsection

        <x-authentication.login />
    @else

        @section('title')
            preferences
        @endsection

        <x-authentication.preferences :categories="$categories"/>
    @endif

@endsection
