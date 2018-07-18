@extends('layouts.app')
@section('content')
        <div class="page-header page-header-small">
            <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('now-ui-kit-v1.1.0/assets/img/IMG-20170130-WA0001.jpg')}}');">
            </div>
            <div class="container">
                <div class="content-center">
                    <h1 class="title">Somos os Caveiras da Montanha.</h1>
                    <div class="text-center">
                        <a href="#pablo" class="btn btn-default btn-icon btn-round">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                        <a href="#pablo" class="btn btn-default btn-icon btn-round">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="#pablo" class="btn btn-default btn-icon btn-round">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">O que somos?</h2>
                        <h5 class="description">Somos um grupo que realiza  atividades de montanha, trilhas e viagens sem fins lucrativos, buscando o constante contato com a natureza.
                            Fazendo amigos, mudando vidas e difundido o montanhismo.</h5>
                    </div>
                </div>
                <div class="separator separator-primary"></div>
                <div class="section-story-overview">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image-container image-left" style="background-image: url('{{asset('now-ui-kit-v1.1.0/assets/img/IMG_20180602_072454691.jpg')}}')">
                                <!-- First image on the left side -->
                                <p class="blockquote blockquote-primary">"Um homem precisa viajar, por sua conta, não por meio de histórias, imagens, livros e tevês, precisa viajar, por si, com os olhos e pés, para entender o que é seu."
                                    <br>
                                    <br>
                                    <small>-Amyr Klink</small>
                                </p>
                            </div>
                            <!-- Second image on the left side of the article -->
                            <div class="image-container" style="background-image: url('{{asset('now-ui-kit-v1.1.0/assets/img/18278638_10206856252085112_7043157523118525446_o.jpg')}}')"></div>
                        </div>
                        <div class="col-md-5">
                            <!-- First image on the right side, above the article -->
                            <div class="image-container image-right" style="background-image: url('{{asset('now-ui-kit-v1.1.0/assets/img/IMG-20160626-WA0050.jpg')}}')"></div>
                            <h3>Nosso objetivos</h3>
                            <p> Proporcionar uma maior conexão com a natureza e a oportunidade a todos os interessados de praticar atividades ao ar livre com um acesso sem custos elevados.
                            </p>
                            <p>
                                Criar uma rede de relacionamento entre todos os participantes, proporcionando a amizade e o companheirismo para enfrentar os mais variados desafios.
                            </p>
                            <p>Disseminar o conhecimento sobre o esporte: técnica, equipamentos, alimentação, preparo físico e psicológico.
                            </p>
                            <p>Priorizar a evolução dos nossos membros, proporcionando a oportunidade constante de aprender, se desafiar e desenvolver a auto confiança e auto estima.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-team text-center">
            <div class="container">
                <h2 class="title">Depoimentos</h2>
                <div class="team">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="../assets/img/avatar.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Fulano da Silva</h4>
                                <p class="category text-primary">Espontaneo</p>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus hendrerit congue dui nec pulvinar.
                                    Maecenas non semper tortor. Donec ultrices, justo at accumsan scelerisque, metus risus blandit nulla, eu ultricies sem ipsum vitae nulla.
                                    </p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-instagram"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="../assets/img/ryan.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Ciclano Alves</h4>
                                <p class="category text-primary">Sincera</p>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus hendrerit congue dui nec pulvinar.
                                    Maecenas non semper tortor. Donec ultrices, justo at accumsan scelerisque, metus risus blandit nulla, eu ultricies sem ipsum vitae nulla.</p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="../assets/img/eva.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Beltrano Coimbra</h4>
                                <p class="category text-primary">Ousado</p>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus hendrerit congue dui nec pulvinar.
                                    Maecenas non semper tortor. Donec ultrices, justo at accumsan scelerisque, metus risus blandit nulla, eu ultricies sem ipsum vitae nulla.</p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-google-plus"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-youtube-play"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-contact-us text-center">
            <div class="container">
                <h2 class="title">Quer se juntar a nós?</h2>
                <p class="description">Novas pessoas sempre são bem vindas a fazer parte da familia Caveiras da Montanha.</p>
                <div class="row">
                    <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
                        <div class="input-group input-lg">
                            <span class="input-group-addon">
                                <i class="now-ui-icons users_circle-08"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="First Name...">
                        </div>
                        <div class="input-group input-lg">
                            <span class="input-group-addon">
                                <i class="now-ui-icons ui-1_email-85"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Email...">
                        </div>
                        <div class="textarea-container">
                            <textarea class="form-control" name="name" rows="4" cols="80" placeholder="Type a message..."></textarea>
                        </div>
                        <div class="send-button">
                            <a href="#pablo" class="btn btn-primary btn-round btn-block btn-lg">Send Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
