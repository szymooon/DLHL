@extends('layouts.main')
@section('content')



            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Don't leave home league
                </div>

                <div class="links">
                    <a href="{{ route('sponsorzy') }}">Sponsorzy</a>
                    <a href="{{ route('ekipa') }}">Ekipa</a>
                    <a href="{{ route('wiadomosci') }}">Wiadomości</a>
                    <a href="{{ route('transmisje') }}">Transmisje</a>
                    <a href="{{ route('turnieje') }}">Turnieje</a>
                </div>
            </div>
            @endsection


