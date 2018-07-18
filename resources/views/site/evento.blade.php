@extends('layouts.contato')
@section('content')

    <div class="page-header page-header-small">
        <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('now-ui-kit-v1.1.0/assets/img/IMG-20180502-WA0200.jpg')}}'); transform: translate3d(0px, 0px, 0px);">
        </div>
    </div>
    <div class="main">
        <div class="contact-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 ml-auto mr-auto">
                        <h2 class="title">{{$event->title}}</h2>
                        <p class="description">Você pode nos contatar com qualquer coisa relacionada aos nossos eventos. Entraremos em contato o mais breve possível.<br><br>
                        </p>
                        <form role="form" id="contact-form" method="post">
                            <label>Nome</label>
                            <div class="">
                                <div hidden class="input-group-prepend">
                                    <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Your Name..." aria-label="Your Name...">
                            </div>
                            <label>E-mail</label>
                            <div class="">
                                <div hidden class="input-group-prepend">
                                    <span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Email Here..." aria-label="Email Here...">
                            </div>
                            <label>Celular</label>
                            <div class="">
                                <div hidden class="input-group-prepend">
                                    <span class="input-group-text"><i class="now-ui-icons tech_mobile"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Number Here...">
                            </div>
                            <div class="form-group">
                                <label>Sua mensagem</label>
                                <textarea name="message" class="form-control" id="message" rows="6"></textarea>
                            </div>
                            <div class="submit text-center">
                                <input type="submit" class="btn btn-primary btn-raised btn-round" value="Contact Us">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection