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

@extends('app')
@section('content')

<header class="leasesshow">

    <h1>Contractnummer: {{$leases->id}}</h1>

    <p>Contracttypen: {{$leases->lease_type_id}}</p>
    <p>Klantnummer: {{$leases->customer_id}}</p>
    <p>Financiënnummer: {{$leases->finance_id}}</p>
    <p>Startdatum: {{$leases->startdate}}</p>
    <p>Einddatum: {{$leases->enddate}}</p>
    <p>Aansluitkosten: {{$leases->connectioncosts}}</p>
    <p>Opzegtermijn: {{$leases->noticeperiod}}</p>

</header>


@endsection

</body>
</html>

