@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth

        @endauth

        @guest

        @endguest
    </div>

@endsection
