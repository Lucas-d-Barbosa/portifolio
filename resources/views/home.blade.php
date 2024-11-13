@extends('components.basico')
@section('title', 'Home')
@section('conteudo')
<main class="flex-grow-1">
    <section class="p-4 row d-flex align-items-center section-container w-100 bg-primary no-gutters" id="home">
        <div class="col-12 col-sm-6 d-flex justify-content-center" style="text-align: center">
            <div class="col-12">
                <h2 class="display-5 display-sm-4 text-center text-white">
                    Lucas Barbosa, Desenvolvedor Back-end
                </h2>
                <div class="col-12 d-flex justify-content-center gap-2 flex-column flex-md-row">
                    <a href="{{ asset('documents/cv.pdf') }}" download>
                        <button type="button" class="btn btn-success">Download CV</button>
                    </a>
                    <a href="https://www.linkedin.com/in/francisco-barbosa-aa16b82b7/" target="_blank">
                        <button type="button" class="btn btn-outline-light">Entrar em contato</button>
                    </a>
                    
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 d-flex justify-content-center">
            <div class="image-container border-white bg-primary-subtle">
                <img class="rounded responsive-image" src="{{ asset('images/img1.png') }}" alt="Logo">
            </div>
        </div>
    </section>
    
    <section class="p-4 section-container w-100 d-flex flex-column align-items-center gap-4 justify-content-center bg-light" id="sobre">
        <h3 class="display-6 text-center ">Um pouco sobre mim</h3>
        <div class="col-12 col-md-8 d-flex justify-content-center p-2 mx-auto">
            <p class="text-dark fs-4 fs-sm-5 fs-md-6 text-muted">
                Sou desenvolvedor Back-end e tenho bastante experiência em tecnologias como PHP, Laravel e tenho ótimos conhecimentos em Java. Sou extremamente dedicado ao desenvolvimento de aplicações web utilizando técnicas modernas. Apesar de ter preferência pela programação Back-end, também conheço tecnologias Front-end como HTML e Bootstrap 5 e Vue.js.
            </p> 
        </div>
    </section>
    
    <section class="p-4 section-container w-100 d-flex flex-column align-items-center gap-4 justify-content-center bg-white" id="formacao">
        <h3 class="display-6 text-center ">Ensino médio</h3>
        <div class="col-12 col-md-8 d-flex justify-content-center p-2 mx-auto">
            <p class="text-dark fs-4 fs-sm-5 fs-md-6 text-muted">
                Conclui meu ensino médio na instituição E.E.E.P Irmã Ana Zélia da Fonseca. Nessa mesma instituição, concluí meu técnico em informática, onde tive meu primeiro contato com programação web com HTML, CSS, JQuery, JavaScript e PHP. Também tive contato com programação orientada a objetos em Java. 
            </p> 
        </div>
    </section>    

    <section class="p-4 section-container w-100 d-flex flex-column align-items-center gap-4 justify-content-center bg-light">
        <h3 class="display-6 text-center ">Ensino Superior</h3>
        <div class="col-12 col-md-8 d-flex justify-content-center p-2 mx-auto">
            <p class="text-dark fs-4 fs-sm-5 fs-md-6 text-muted">
                Estou cursando Sistemas de Informação no renomado Centro Universitário Paraíso do Ceará - UniFAP, uma referência quando se trata do curso de S.I. A cada semestre tenho contato com novas tecnologias e experiências, principalmente com o desenvolvimento de projetos práticos.
            </p> 
        </div>
    </section>
    
    <section class="p-4 section-container w-100 d-flex flex-column align-items-center gap-4 justify-content-center bg-white" id="experiencia">
        <h3 class="display-6 text-center ">Estágio NexTI</h3>
        <div class="col-12 col-md-8 d-flex justify-content-center p-2 mx-auto">
            <p class="text-dark fs-4 fs-sm-5 fs-md-6 text-muted">
                Estagiei durante 6 meses na empresa NexTI, da UniFAP, onde desenvolvi algumas aplicações web. Dentre essas, desenvolvi uma aplicação web para uma escola de negócios para advogados onde utilizei tecnologias como: HTML, CSS, Bootstrap, PHP e SQL. 
            </p> 
        </div>
    </section>   
    
    <section class="p-4 section-container w-100 d-flex flex-column align-items-center justify-content-center bg-light" id="habilidades">
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
    
    <section class="p-4 section-container w-100 d-flex flex-column align-items-center justify-content-center bg-white" id="trabalhos">
        <h3 class="display-6 text-center">Trabalhos Acadêmicos</h3>
        <div class="card" style="width: 14rem;">
            <div class="card-body">
                <h5 class="card-title trabalho-titulo">ATUAIS PROBLEMÁTICAS NO TOCANTE À SEGURANÇA DE DISPOSITIVOS IOT</h5>
                <p class="card-text trabalho-descricao">Uma análise das atuais problemáticas no tocante à segurança de dispositivos IOT, desde protocolos defasados a mal uso por parte dos usuários dessas tecnologias. </p>
                <a href="{{asset('documents/ATUAIS-PROBLEMATICAS-NO-TOCANTE-A-SEGURANÇA-DE-DISPOSITIVOS-IoT.pdf')}}" class="btn btn-primary" download>Baixar Arquivo</a>
            </div>
        </div>
    </section>
</main>
@endsection