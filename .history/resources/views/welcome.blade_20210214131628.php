@extends('layouts.general')

@section('title', 'Beranda')

@section('content')

<div class="container py-5">
    <div class="row pt-5">
        <div class="col-md-6 pt-5">
            <h1 class="viga">Lelang terpercaya hanya di Lelangind</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis ornare dui, quis molestie </p>
            <button class="btn btnm-primary">Lihat Produk</button>
            <button class="btn btnm-light mx-2">Selengkapnya</button>
        </div>
        <div class="col-md-6 py-md-0 py-4 text-center">
            <img src="{{ asset('img/illust/home.png') }}" class="w-75" alt="">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="viga">Produk Lelangind</h1>
        </div>
    </div>
</div>

@endsection
