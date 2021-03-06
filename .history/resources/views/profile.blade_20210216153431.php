@extends('layouts.general')

@section('title', Auth::user()->name)

@section('content')
    <div class="container-fluid pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 text-center shadow p-4">
                        <div class="avatar-profile">
                            <img src="{{ asset('img/user/valen.png') }}" class="image-fit-card rad" alt="{{ Auth::user()->name }}">
                        </div>
                        <h4 class="viga mt-3">{{ Auth::user()->name }}</h4>
                        <p class="textm-gray">{{ Auth::user()->level }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
