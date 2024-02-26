@extends('layouts.dashboardLayout')

@section('content')
    @if(Request::url() === 'http://127.0.0.1:8000/dashboard')
        @section('title')
            Static
        @endsection
        <x-dashboard.static-section :userStatistics="$userStatistics" :totalUsers="$totalUsers"/>

    @elseif(Request::url() === 'http://127.0.0.1:8000/category')
        @section('title')
            Static
        @endsection
        <x-dashboard.category-section :categories="$categories"/>
    @else
        @section('title')
            Rss
        @endsection

        <x-dashboard.rss-section :categories="$categories" :links="$links"/>


    @endif
@endsection
