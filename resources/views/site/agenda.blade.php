@extends('layouts.contato')
@section('content')

    <div class="page-header page-header-small">
        <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('now-ui-kit-v1.1.0/assets/img/IMG-20180502-WA0200.jpg')}}'); transform: translate3d(0px, 0px, 0px);">
        </div>
    </div>
<div class="projects-1" style="padding: 80px 0;">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title">Confira alguns de nossos próximos eventos</h2>

                <ul hidden class="nav nav-pills nav-pills-danger justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pill1" role="tablist">
                            All
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pill2" role="tablist">
                            History
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab" href="#pill3" role="tablist">
                            Satire
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pill4" role="tablist">
                            Fiction
                        </a>
                    </li>
                </ul>
                <div class="tab-content tab-space">
                    <div class="tab-pane" id="pill1">

                    </div>
                    <div class="tab-pane" id="pill2">

                    </div>
                    <div class="tab-pane active show" id="pill3">

                    </div>
                    <div class="tab-pane" id="pill4">

                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-6 px-0">
                <div class="card card-background card-background-product card-no-shadow" style="background-image: url('assets/img/project1.jpg')">

                    <div class="card-body">
                        <h6 class="category">History</h6>
                        <h3 class="card-title">
                            The City Lost &amp; Found
                        </h3>

                        <p class="card-description">
                            Developed on the occasion of an exhibition of the same name, The City Lost &amp; Found: Capturing New York...
                        </p>
                        <a href="#pablo" class="btn btn-danger btn-round">
                            <i class="now-ui-icons ui-1_send"></i> View Book
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 px-0">
                <div class="card card-raised card-background card-background-product card-no-shadow" style="background-image: url('{{asset('now-ui-kit-v1.1.0/assets/img/project18.jpg')}}')">
                    <div class="card-body">
                        <h6 class="category">Satire</h6>
                        <h3 class="card-title">A Confederacy of Dunces</h3>
                        <p class="card-description">
                            Satires, in the most basic definition, are works making fun of some sort of person or institution...
                        </p>
                        <a href="#pablo" class="btn btn-neutral btn-round">
                            <i class="now-ui-icons ui-1_send"></i> View more
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 px-0">
                <div class="card card-background card-background-product card-no-shadow" style="background-image: url('assets/img/project20.jpg')">
                    <div class="card-body">
                        <h6 class="category">Fiction</h6>
                        <h3 class="card-title">The Sun Also Rises</h3>
                        <p class="card-description">
                            The most commonly read works are works of fiction. Fiction books are ones that have been made up...
                        </p>
                        <a href="#pablo" class="btn btn-neutral btn-round">
                            <i class="now-ui-icons ui-1_send"></i> Read Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 px-0">
                <div class="card card-background card-background-product card-no-shadow" style="background-image: url('assets/img/project19.jpg')">
                    <div class="card-body">
                        <h6 class="category">Basic Civitas</h6>
                        <h3 class="card-title">The Right Mistake</h3>
                        <p class="card-description">
                            Living in South Central L.A., Socrates Fortlow is a sixty-year-old ex-convict, still strong enough to kill men with...
                        </p>
                        <a href="#pablo" class="btn btn-danger btn-round">
                            <i class="now-ui-icons ui-1_send"></i> Read Now
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection