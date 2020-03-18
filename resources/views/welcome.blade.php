@extends('layouts.app')

@section('content')
    <div class="fluid-container">
        <section class="landing py-5 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center flex-column">
                        <h1 class="title-bold">Het CMS voor de mensen die geen gezeik willen ofzo</h1>
                        <div class="my-4">
                            <a href="" class="btn btn-primary">{{ __('Try out for free') }}</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="shadow" src="{{ asset('/images/preview.png') }}" width="100%">
                    </div>
                </div>
            </div>
        </section>
        <section class="history my-5 py-5 grey-background">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        illustreatie
                    </div>
                    <div class="col-md-9">
                        <h2 class="title-bold">Kijk hoe RainierlaanCMS is onstaan</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad doloribus error et ipsa perspiciatis quasi quisquam reiciendis unde voluptatem. Aliquam animi dolores et laborum molestiae molestias, qui voluptatem voluptates!</p>
                        <div class="my-4">
                            <a href="" class="btn btn-outline-primary">{{ __('Take a look') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="unique my-5 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mb-5">
                        <h2 class="title-bold">What makes us unique?</h2>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aperiam commodi cupiditate Nobis.</h4>
                    </div>
                    <div class="col-md-4">
                        <i class="fad fa-hand-pointer fa-3x"></i>
                        <h4 class="my-4">Simpelheid</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aliquid at aut consequuntur doloremque eaque</p>
                    </div>
                    <div class="col-md-4">
                        <i class="fad fa-expand-arrows-alt fa-3x"></i>
                        <h4 class="my-4">Eenvoudige uitbreidingen</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aliquid at aut consequuntur doloremque eaque</p>
                    </div>
                    <div class="col-md-4">
                        <i class="fad fa-code-branch fa-3x"></i>
                        <h4 class="my-4">Het vierde</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aliquid at aut consequuntur doloremque eaque</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="plans my-5 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mb-5">
                        <h2 class="title-bold">Our plans</h2>
                        <h4>Clear and simple, no strings attached</h4>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <h3 class="title-bold text-center">Free</h3>
                                <h2 class="title-bold text-center">0,99</h2>
                                <div class="perks my-4 position-relative text-center">
                                    <ul class="list-unstyled">
                                        <li><i class="fad fa-check mr-3 color-primary"></i>5 Gebruikers</li>
                                        <li><i class="fad fa-check mr-3 color-primary"></i>item</li>
                                        <li><i class="fad fa-check mr-3 color-primary"></i>item</li>
                                        <li><i class="fad fa-check mr-3 color-primary"></i>item</li>
                                    </ul>
                                </div>
                                <div class="my-4 text-center">
                                    <a href="" class="btn btn-primary">Probeer nu ofzo</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <h3 class="title-bold text-center">Free</h3>
                                <h2 class="title-bold text-center">0,99</h2>
                                <div class="perks my-4 position-relative text-center">
                                    <ul class="list-unstyled">
                                        <li><i class="fad fa-check mr-3 color-primary"></i>5 Gebruikers</li>
                                        <li><i class="fad fa-check mr-3 color-primary"></i>item</li>
                                        <li><i class="fad fa-check mr-3 color-primary"></i>item</li>
                                        <li><i class="fad fa-check mr-3 color-primary"></i>item</li>
                                    </ul>
                                </div>
                                <div class="my-4 text-center">
                                    <a href="" class="btn btn-primary">Probeer nu ofzo</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <h3 class="title-bold text-center">Free</h3>
                                <h2 class="title-bold text-center">0,99</h2>
                                <div class="perks my-4 position-relative text-center">
                                    <ul class="list-unstyled">
                                        <li><i class="fad fa-check mr-3 color-primary"></i>5 Gebruikers</li>
                                        <li><i class="fad fa-check mr-3 color-primary"></i>item</li>
                                        <li><i class="fad fa-check mr-3 color-primary"></i>item</li>
                                        <li><i class="fad fa-check mr-3 color-primary"></i>item</li>
                                    </ul>
                                </div>
                                <div class="my-4 text-center">
                                    <a href="" class="btn btn-primary">Probeer nu ofzo</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

