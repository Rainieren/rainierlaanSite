@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3>Make a new plan</h3>
                    <form method="POST" action="{{ route('store_plan') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" id="name" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input class="form-control" type="text" id="price" placeholder="0.00" name="price">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <h3>Alle plannen</h3>
                    @foreach($plans as $plan)
                        <div class="row my-4">
                            <div class="col-8 text-left">
                                <p class="m-0">{{ $plan->name }}</p>
                            </div>
                            <div class="col-4 text-right">
                                <p class="m-0">€ {{ $plan->price }}</p>
                            </div>
                        </div>
                    @endforeach



{{--                    <form action="{{ route('subscribe') }}" method="POST">--}}
{{--                        @csrf--}}
{{--                        <button class="btn btn-primary">Subscribe</button>--}}
{{--                    </form>--}}
                </div>
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3>Choose packages to make available</h3>
                    <form action="">
                        @foreach($packages as $package)
                            <div class="form-group row">
                                <div class="col-8">
                                    <p class="m-0">{{ $package->name }}</p>
                                    <small>{{ $package->creator }}</small>
                                </div>
                                <div class="col-4 d-flex justify-content-end align-items-center">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </div>
                            </div>
                        @endforeach
                        <div class="form-group">
                            <button class="btn btn-primary">Opslaan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    $.ajax({
        headers: {},
        url: 'https://packagist.org/packages/list.json?vendor=[rainieren]',
        type: 'GET',
        data: {},
        success: function(data) {
            alert('lol');
        },
        error: function(e) {
            alert('Niet oke');
        }
    });
</script>

