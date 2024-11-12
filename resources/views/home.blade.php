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
    <section class="p-4 row d-flex align-items-center section-container w-100">
        <div class="col-4" style="text-align: center">
            <h2 class="display-6">
                Olá, meu nome é Lucas Barbosa! 
            </h2>
            <p class="text-primary fs-4">Desenvolvedor Back-end</p>
            <button class="btn btn-primary">Download CV</button>
            <button class="btn btn-outline-primary">Entrar em contato</button>
        </div>
        <div class="col-6" style="text-align: center">
            <img src="" alt="">
        </div>
    </section>
@endsection