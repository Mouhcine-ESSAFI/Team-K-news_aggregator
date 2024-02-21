@extends('layouts.homeLayout')

@section('content')

    @if (Request::url() === 'http://localhost/register')

        @section('title')
            register
        @endsection

        <x-authentication.register/>

    @else

        @section('title')
            login
        @endsection

        <x-authentication.login/>

    @endif

@endsection
