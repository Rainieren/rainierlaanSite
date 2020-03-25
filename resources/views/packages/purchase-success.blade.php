@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1><i class="fad fa-check-circle color-green mr-3"></i>Payment Successful!</h1>
                <p class="m-0">Thank you for your purchase, A receipt has been send to <a href="mailto:rainier.laan@home.nl">rainier.laan@home.nl</a></p>
            </div>
            <div class="col-5 my-5">
                <h3 class="my-3">Your order</h3>
                <ul class="list-unstyled">
                    <li>Payment type: Henk</li>
                    <li>Item: Visitors package</li>
                    <li>Description: Package Visitors</li>
                </ul>
                <h5>Amount: $0.99</h5>
                <ul class="list-unstyled">
                    <li>Transation id: HFHSDHDSH2938</li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <button class="btn btn-primary">Print PDF</button>
            </div>
        </div>
        </div>
    </div>
@endsection

