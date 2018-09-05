@extends('layouts.contato')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="{{ asset('css/compact-gallery.css') }}">
    <div class="page-header page-header-small">
        <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('now-ui-kit-v1.1.0/assets/img/IMG-20180502-WA0200.jpg')}}'); transform: translate3d(0px, 0px, 0px);">
        </div>
    </div>
<div class="projects-1" style="padding: 80px 0;">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title">Fotos dos nossos eventos, amigos e parceiros</h2>
            </div>
        </div>

        <section class="gallery-block compact-gallery">
            <div class="container">
                <div class="heading">
                </div>
                <div class="row no-gutters">
                    @foreach($instagrams as $instagram)
                    <div class="col-md-6 col-lg-4 item zoom-on-hover">
                        <a class="lightbox" href="{{$instagram->images->standard_resolution->url}}">
                            <img class="img-fluid image" src="{{$instagram->images->standard_resolution->url}}">
                            <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
        </script>

    </div>
</div>
@endsection
