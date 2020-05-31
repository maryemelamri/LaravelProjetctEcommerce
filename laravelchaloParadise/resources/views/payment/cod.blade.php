@extends('frontEnd.layouts.master')
@section('title','Review Order Page')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <h3 class="text-center">VOTRE COMMANDE A ÉTÉ ENREGISTRÉE</h3>
        <p class="text-center">Merci pour votre commande qui utilise les options de paiement à la livraison</p>
        <p class="text-center">Nous vous contacterons par votre email (<b>{{$user_order->users_email}}</b>) Ou votre numéro de téléphone (<b>{{$user_order->mobile}}</b>)</p>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection