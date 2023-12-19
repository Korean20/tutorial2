@extends('layouts.app')
@section('title', '| Nevek')

@section('content')
    {{-- itt lesz majd a tartalom --}}
    <p>Valaminev</p>

    <main role="main" class="container">
        <div class="jumbotron">
            <h1> {{ Date('Y-m-d H:i:s') }}</h1>
            <p class="lead">Ez az első demo route-unk!</p>
            <a class="btn btn-lg btn-primary" href="https://learn.pvga.hu" role="button">PVGA Learn »</a>
        </div>
    </main>
@endsection

