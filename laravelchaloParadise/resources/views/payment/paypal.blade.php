@extends('frontEnd.layouts.master')
@section('title','Review Order Page')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <h3 class="text-center">VOTRE COMMANDE A ÉTÉ ENREGISTRÉE</h3>
        <p class="text-center">Numéro de votre commande est  <b>{{$who_buying->id}}</b> et le total à payé <b> {{$who_buying->grand_total}} DH</b> </p>
        <p class="text-center">Veuillez effectuer le paiement en cliquant sur le bouton de paiement ci-dessous</p>

        <div class="text-center">
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="henglayshops@gmail.com">
            <input type="hidden" name="item_name" value="Buyer ({{$who_buying->name}})">
            <input type="hidden" name="amount" value="{{$who_buying->grand_total}}">
            <input type="hidden" name="currency_code" value="USD">
            <input type="submit" value="Acheter Maintenant" name="submit"> 
        </form>
        </div>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection