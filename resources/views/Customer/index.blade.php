@extends('app')
@section('content')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>Barroc Intense</title>
    <!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
<br>
<h1 class="text-center">Klantgegevens doorgeven</h1>
<br>

@if ( $user->CustomerDetail == null)

<div class="card text-center">
    <div class="card-body">
        <h5 class="card-title">Gegevens doorgeven</h5>
        <p class="card-text">Geef hier uw gegevens door zodat wij u altijd kunnen blijven bereiken.</p>
        <a href="{{route('Customerdetail.create')}}" class="btn btn-primary">Klik hier</a>
    </div>
</div>
@else
    <br>
    <br>
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">Gegevens wijzigen</h5>
            <p class="card-text">Wijzig hier uw gegevens zodat wij u altijd kunnen blijven bereiken.</p>
            <a href="{{route('Customerdetail.edit', auth()->user()->id)}}" class="btn btn-primary">Klik hier</a>
        </div>
    </div>
@endif
<br>
<br>

<div class="card text-center">
    <div class="card-body">
        <h5 class="card-title">Leasecontract inzien</h5>
        <p class="card-text">Zie hier lease contract gegevens.</p>
        <a href="" class="btn btn-primary">Klik hier</a>
    </div>
</div>
<br>
<br>
<div class="card text-center">
    <div class="card-body">
        <h5 class="card-title">Factuurgegevens inzien</h5>
        <p class="card-text">Bekijk hier al uw facturen en zie welke nog open staan ja of nee.</p>
        <a href="" class="btn btn-primary">Klik hier</a>
    </div>
</div>



</body>
</html>

@endsection
