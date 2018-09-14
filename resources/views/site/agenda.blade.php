@extends('layouts.contato')
@section('content')

    <div class="page-header page-header-small">
        <div class="page-header-image" data-parallax="true"
             style="background-image: url('{{asset('now-ui-kit-v1.1.0/assets/img/IMG-20180502-WA0200.jpg')}}'); transform: translate3d(0px, 0px, 0px);">
        </div>
    </div>
    <div class="main">
        <div class="contact-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">Confira alguns de nossos próximos eventos</h2>
                    </div>
                </div>

                <div class="row">
                    @foreach($events as $event)
                        <div class="col-md-6 px-0">
                            <div class="card card-background card-background-product card-no-shadow"
                                 style="background-image: url('{{asset('storage/'.$event->picture)}}')">

                                <div class="card-body">
                                    <h6 class="category">{{$event->type}}</h6>
                                    <h3 class="card-title">
                                        {{$event->title}}
                                    </h3>

                                    <p class="card-description">
                                        {{str_limit($event->description,120)}}
                                    </p>
                                    <a href="{{ route('detalhe',$event->id) }}" class="btn btn-neutral btn-round">
                                        <i class="now-ui-icons ui-1_send"></i> Veja mais
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-md-6 px-0">
                        <div class="card card-raised card-background card-background-product card-no-shadow"
                             style="background-image: url('{{asset('now-ui-kit-v1.1.0/assets/img/project18.jpg')}}')">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
