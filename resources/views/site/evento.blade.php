@extends('layouts.contato')
@section('content')
<style type="text/css">
    .product-page{background-color:#eee}.product-page .carousel{margin:-90px 0 0}.product-page .carousel img{border-radius:.1875rem;height:auto}.product-page .section{padding-top:30px}.product-page .main-price{margin:10px 0 25px;font-weight:300}.product-page .blockquote{width:90%;margin-top:-10px;margin-left:5%}.product-page .pick-size{margin-top:15px;margin-bottom:15px}.product-page .pick-size .form-group{margin-top:5px}.product-page .related-products .title{margin-bottom:80px}.product-page .features{padding-top:30px}.product-page .accordeon .card{margin-bottom:15px}
</style>
    <div class="page-header page-header-small">
        <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('now-ui-kit-v1.1.0/assets/img/IMG-20180502-WA0200.jpg')}}'); transform: translate3d(0px, 0px, 0px);">
        </div>
    </div>
    <div hidden class="main">
        <div class="contact-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 ml-auto mr-auto">
                        <h2 class="title">{{$event->title}}</h2>
                        <p class="description">Você pode nos contatar com qualquer coisa relacionada aos nossos eventos. Entraremos em contato o mais breve possível.<br><br>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section product-page">
        <div class="container">
            <div class="row">
                <div class="col-md-5">

                    <div id="productCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">
                        <ol class="carousel-indicators">
                            <li data-target="#productCarousel" data-slide-to="0" class=""></li>
                            <li data-target="#productCarousel" data-slide-to="1" class="active"></li>
                            <li data-target="#productCarousel" data-slide-to="2" class=""></li>
                            <li data-target="#productCarousel" data-slide-to="3" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item">
                                <img class="d-block img-raised" src="https://demos.creative-tim.com/now-ui-kit-pro/assets/img/pp-1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item active">
                                <img class="d-block img-raised" src="https://demos.creative-tim.com/now-ui-kit-pro/assets/img/pp-2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-raised" src="https://demos.creative-tim.com/now-ui-kit-pro/assets/img/pp-3.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-raised" src="https://demos.creative-tim.com/now-ui-kit-pro/assets/img/pp-4.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                            <button type="button" class="btn btn-primary btn-icon btn-round btn-sm" name="button">
                                <i class="now-ui-icons arrows-1_minimal-left"></i>
                            </button>
                        </a>
                        <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
                            <button type="button" class="btn btn-primary btn-icon btn-round btn-sm" name="button">
                                <i class="now-ui-icons arrows-1_minimal-right"></i>
                            </button>
                        </a>
                    </div>

                    <p class="blockquote blockquote-primary">
                        "And thank you for turning my personal jean jacket into a couture piece. Wear yours with mirrored sunglasses on vacation."<br><br>
                        <small>Kanye West</small>
                    </p>

                </div>
                <div class="col-md-6 ml-auto mr-auto">
                    <h2 class="title"> {{$event->title}} </h2>
                    <h5 class="category">Slim-Fit Leather Biker Jacket</h5>
                    <h2 class="main-price">{{$event->price}}</h2>

                    <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                        <div class="card card-plain">
                            <div class="card-header" role="tab" id="headingOne">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="">
                                    Description
                                    <i class="now-ui-icons arrows-1_minimal-down"></i>
                                </a>
                            </div>

                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" style="">
                                <div class="card-body">
                                    <p>Eres' daring 'Grigri Fortune' swimsuit has the fit and coverage of a bikini in a one-piece silhouette. This fuchsia style is crafted from the label's sculpting peau douce fabric and has flattering cutouts through the torso and back. Wear yours with mirrored sunglasses on vacation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-plain">
                            <div class="card-header" role="tab" id="headingTwo">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Designer Information

                                    <i class="now-ui-icons arrows-1_minimal-down"></i>
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    <p>An infusion of West Coast cool and New York attitude, Rebecca Minkoff is synonymous with It girl style. Minkoff burst on the fashion scene with her best-selling 'Morning After Bag' and later expanded her offering with the Rebecca Minkoff Collection - a range of luxe city staples with a "downtown romantic" theme.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-plain">
                            <div class="card-header" role="tab" id="headingThree">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Details and Care

                                    <i class="now-ui-icons arrows-1_minimal-down"></i>
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="card-body">
                                    <ul>
                                        <li>Storm and midnight-blue stretch cotton-blend</li>
                                        <li>Notch lapels, functioning buttoned cuffs, two front flap pockets, single vent, internal pocket</li>
                                        <li>Two button fastening</li>
                                        <li>84% cotton, 14% nylon, 2% elastane</li>
                                        <li>Dry clean</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <button class="btn btn-primary mr-3">Quero participar &nbsp;<i class="now-ui-icons shopping_cart-simple"></i></button>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center mr-5">
                        <h2 class="title">How to wear it</h2>
                        <h4 class="description">You need more information? Check what other persons are saying about our product. They are very happy with their purchase.</h4>
                    </div>
                </div>
                <div class="section-story-overview">
                    <div class="row">
                        <div class="col-md-4 ml-auto mr-auto">
                            <div class="image-container image-left" style="background-image: url('https://demos.creative-tim.com/now-ui-kit-pro/assets/img/pp-5.jpg')">
                                <!-- First image on the left side -->
                                <p class="blockquote blockquote-primary">"Over the span of the satellite record, Arctic sea ice has been declining significantly, while sea ice in the Antarctichas increased very slightly"
                                    <br>
                                    <br>
                                    <small> - NOAA</small>
                                </p>
                            </div>
                            <!-- Second image on the left side of the article -->
                            <div class="image-container" style="background-image: url('https://demos.creative-tim.com/now-ui-kit-pro/assets/img/bg29.jpg')"></div>
                        </div>
                        <div class="col-md-4 ml-auto mr-auto">
                            <!-- First image on the right side, above the article -->
                            <div class="image-container image-right" style="background-image: url('https://demos.creative-tim.com/now-ui-kit-pro/assets/img/pp-4.jpg')"></div>
                            <h3>So what does the new record for the lowest level of winter ice actually mean</h3>
                            <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
                            </p>
                            <p>For a start, it does not automatically follow that a record amount of ice will melt this summer. More important for determining the size of the annual thaw is the state of the weather as the midnight sun approaches and temperatures rise. But over the more than 30 years of satellite records, scientists have observed a clear pattern of decline, decade-by-decade.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="features-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Outros eventos interessantes</h2>
                            <h4 class="description">Confira alguns eventos que ainda vão acontecer</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-background card-raised" data-background-color="" style="background-image: url('https://demos.creative-tim.com/now-ui-kit-pro/assets/img/bg24.jpg')">
                                <div class="info">
                                    <div class="icon icon-white">
                                        <i class="now-ui-icons shopping_delivery-fast"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">1 Day Delivery </h4>
                                        <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                        <a href="#pablo" class="ml-3">Find more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-background card-raised" data-background-color="" style="background-image: url('https://demos.creative-tim.com/now-ui-kit-pro/assets/img/bg28.jpg')">
                                <div class="info">
                                    <div class="icon icon-white">
                                        <i class="now-ui-icons business_badge"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Refund Policy</h4>
                                        <p>Divide details about your product or agency work into parts. Write a few lines about each one. Very good refund policy just for you.</p>
                                        <a href="#pablo">Find more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-background card-raised" data-background-color="" style="background-image: url('https://demos.creative-tim.com/now-ui-kit-pro/assets/img/bg25.jpg')">
                                <div class="info">

                                    <div class="icon">
                                        <i class="now-ui-icons ui-2_favourite-28"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Popular Item</h4>
                                        <p>Share a floor plan, and we'll create a visualization of your room. A paragraph describing a feature will be enough. This is a popular item for you.</p>
                                        <a href="#pablo" class="ml-3">Find more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
