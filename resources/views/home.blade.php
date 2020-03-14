@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
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
                    <form action="{{ route('subscribe') }}" method="POST">
                        @csrf
                        <button class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
