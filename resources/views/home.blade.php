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
    <section class="p-4 row d-flex align-items-center section-container w-100 bg-primary no-gutters">
        <div class="col-12 col-sm-6 d-flex justify-content-center" style="text-align: center">
            <div class="col-12">
                <h2 class="display-5 display-sm-4 text-center text-white">
                    Olá, meu nome é Lucas Barbosa!
                </h2>
                <p class="text-light fs-5 fs-sm-4 fs-md-3 text-center">Desenvolvedor Back-end</p>                
                <div class="col-12 d-flex justify-content-center gap-2 flex-column flex-md-row">
                    <button class="btn btn-success">Download CV</button>
                    <button class="btn btn-outline-light">Entrar em contato</button>
                </div>
                
            </div>
        </div>
        <div class="col-12 col-sm-6 d-flex justify-content-center">
            <div class="image-container border-white bg-primary-subtle">
                <img class="rounded responsive-image" src="{{ asset('images/img1.png') }}" alt="Logo">
            </div>
        </div>
    </section>
    
    <section class="p-4 section-container w-100 d-flex flex-column align-items-center gap-4 justify-content-center bg-light">
        <h3 class="display-6 text-center ">Um pouco sobre mim</h3>
        <div class="col-12 col-md-8 d-flex justify-content-center p-2 mx-auto">
            <p class="text-dark fs-4 fs-sm-5 fs-md-6 text-muted">
                Sou desenvolvedor Back-end e tenho bastante experiência em tecnologias como PHP, Laravel e tenho ótimos conhecimentos em Java. Sou extremamente dedicado ao desenvolvimento de aplicações web utilizando técnicas modernas. Apesar de ter preferência pela programação Back-end, também conheço tecnologias Front-end como HTML e Bootstrap 5 e Vue.js.
            </p> 
        </div>
    </section>

    <section class="p-4 section-container w-100 d-flex flex-column align-items-center justify-content-center bg-white">
        <h3 class="display-6 text-center">Habilidades</h3>
        <ul class="list-unstyled row row-b w-100 justify-content-center">
            <li class="col-12 col-md-4 mb-4 text-center habilidade-item">
                <span class="badge bg-primary fs-4 w-100 text-center">PHP</span>
            </li>
            <li class="col-12 col-md-4 mb-4 text-center habilidade-item">
                <span class="badge bg-success fs-4 w-100 text-center">Laravel</span>
            </li>
            <li class="col-12 col-md-4 mb-4 text-center habilidade-item">
                <span class="badge bg-warning fs-4 w-100 text-center">Java</span>
            </li>
            <li class="col-12 col-md-4 mb-4 text-center habilidade-item">
                <span class="badge bg-danger fs-4 w-100 text-center">HTML</span>
            </li>
            <li class="col-12 col-md-4 mb-4 text-center habilidade-item">
                <span class="badge bg-info fs-4 w-100 text-center">CSS</span>
            </li>
            <li class="col-12 col-md-4 mb-4 text-center habilidade-item">
                <span class="badge bg-dark fs-4 w-100 text-center">Bootstrap 5</span>
            </li>
        </ul>
    </section>
    
    
    
    
    
    

</main>
@endsection