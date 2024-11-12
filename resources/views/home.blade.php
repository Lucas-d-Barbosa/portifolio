{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('components.basico')
@section('title', 'Home')
@section('conteudo')
<main class="flex-grow-1">
    <section class="p-4 row d-flex align-items-center section-container w-100">
        <div class="col-6 d-flex justify-content-center" style="text-align: center">
            <div class="col-7">
                <h2 class="display-6">
                    Olá, meu nome é Lucas Barbosa! 
                </h2>
                <p class="text-primary fs-4">Desenvolvedor Back-end</p>
                <button class="btn btn-primary">Download CV</button>
                <button class="btn btn-outline-primary">Entrar em contato</button>
            </div>
        </div>
        <div class="col-6 d-flex justify-content-center">
            <div class="image-container border-primary">
                <img class="rounded responsive-image" src="{{ asset('images/img1.png') }}" alt="Logo">
            </div>
        </div>
    </section>
    <section class="p-4 row d-flex flex-column align-items-center justify-content-center g-4 section-container w-100 bg-body-secondary">
        <h3 class="display-6" style="text-align: center">Um pouco sobre mim</h3>
        <div class="col-8 d-flex justify-content-center p-2">
            <p class="text-dark fs-4">Sou desenvolvedor Back-end e tenho bastante experiência em tecnologias como PHP, Laravel e tenho ótimos conhecimentos em Java. Sou extremamente dedicado ao desenvolvimento de aplicações web utilizando técnicas modernas. Apesar de ter preferência pela programação Back-end, também conheço tecnologias Front-end como HTML e Bootstrap 5 e Vue.js.</p>
        </div>
    </section>
</main>
@endsection