@extends('layouts.homeLayout')

@section('content')

    @if (url()->current() === url('register'))
        @section('title', 'register')
        <x-authentication.register />
    @elseif (url()->current() === url('login'))
        @section('title', 'login')
        <x-authentication.login />
    @elseif (url()->current() === url('preferences'))
        @section('title', 'preferences')
        <x-authentication.preferences :categories="$categories"/>
    @else
        @section('title','profil')
        <x-authentication.profil :categories="$categories" :userInfos="$userInfos" />

            @endif

        @endsection
