@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php $user = Auth::user() ?>

                <h3>Alle orders</h3>
                @foreach($user->orders as $order)
                    {{ $order->total }}
                @endforeach

                <h3>Alle subscriptions</h3>
                    @foreach($user->subscriptions as $subscription)
                        {{ $subscription->plan }}
                    @endforeach
            </div>
        </div>
    </div>

@endsection
