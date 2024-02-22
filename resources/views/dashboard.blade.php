@extends('layouts.dashboardLayout')



@section('content')
    @if(Request::url() === 'http://127.0.0.1:8000/dashboard')
        @section('title')
            Static
        @endsection
        <x-dashboard.static-section/>

    @elseif(Request::url() === 'http://127.0.0.1:8000/category')
        @section('title')
            Static
        @endsection
        <x-dashboard.category-section/>
    @else
        @section('title')
            Rss
        @endsection
        <x-dashboard.rss-section/>
    @endif
@endsection
