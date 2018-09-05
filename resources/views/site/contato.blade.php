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
                        <h2 class="title">Entre em contato</h2>
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
                    <div class="col-md-5 ml-auto mr-auto">
                        <div class="info info-horizontal mt-5">
                            <div class="icon icon-primary">
                                <i class="now-ui-icons location_pin"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Find us at the office</h4>
                                <p> Na montanha, nr. 8,<br>
                                    Na trilha,<br>
                                    No mundo
                                </p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="now-ui-icons tech_mobile"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Give us a ring</h4>
                                <p> Michael Jordan<br>
                                    +40 762 321 762<br>
                                    Mon - Fri, 8:00-22:00
                                </p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="business_briefcase-24 now-ui-icons"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Legal Information</h4>
                                <p> Creative Tim Ltd.<br>
                                    VAT · EN2341241<br>
                                    IBAN · EN8732ENGB2300099123<br>
                                    Bank · Great Britain Bank
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection