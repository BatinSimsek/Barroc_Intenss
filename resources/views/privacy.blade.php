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

    <title>Barroc Intense Privacy</title>
    <!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<h1>Privacy verklaring</h1>

<h2>Privacy verklaring Barroc Intens</h2>

<p>Barroc Intens respecteert de privacy van al haar klanten en gebruikers van haar site en draagt er zorg voor dat de persoonlijke informatie die u ons verschaft vertrouwelijk wordt behandeld. Dit privacybeleid is van toepassing op alle persoonsgegevens die geregistreerd worden in onze winkel en via onze website. In het geval dat dit privacybeleid wijzigt, vindt u op deze pagina de meest recente informatie.

    Registratie persoonsgegevens
    Barroc Intens gebruikt de verzamelde gegevens om haar klanten de volgende diensten te leveren: Als u een bestelling plaatst in de winkel, telefonisch of per mail, hebben we uw naam, e-mailadres, afleveradres nodig om uw bestelling uit te voeren en u van het verloop daarvan op de hoogte te houden. Verder slaan we via de website gegevens op over het gebruik van onze site. De feedback die we op deze manier krijgen van onze bezoekers, helpen ons om onze site verder te ontwikkelen en te verbeteren.

    Cookiebeleid  van Barroc Intens
    Bij gebruik van de website van Barroc Intens kan door Barroc Intens of door derde partijen informatie verzameld worden over het gebruik van de website. Hiervoor wordt door Barroc Intens gebruik gemaakt van cookies die de website optimaal laten functioneren, die voorkeuren bijhouden en onthouden dat u eerder op de website bent geweest, die de statistieken van de website bijhouden, die conversies meten van advertenties en cookies die u gerichte advertenties laten zien, afgestemd op uw profiel. Alle data in onze cookies is anoniem en bevat geen persoonlijk identificeerbare informatie. Als u wilt, kunt u cookies verwijderen via uw browser instellingen, en instellen dat nieuwe cookies worden geweigerd. Omdat er veel verschillende soorten browsers zijn, verwijzen wij naar de helppagina van uw browser.

    Barroc Intens verkoopt uw gegevens niet
    Barroc Intens zal uw persoonlijke gegevens niet aan derden verkopen en zal deze uitsluitend aan derden ter beschikking stellen die zijn betrokken bij het uitvoeren van uw bestelling. Onze werknemers en de door ons ingeschakelde derden zijn verplicht om de vertrouwelijkheid van uw gegevens te respecteren.

    Contactadres
    Alle vragen of opmerkingen over ons privacy beleid en de wijze waarop wij gegevens verzamelen en bewaren, verzoeken tot toezending, inzage, aanpassing of verwijdering van uw persoonsgegevens, beperking van de verwerking van uw persoonsgegevens en overdracht van uw persoonsgegevens kunt u richten aan:

    Barroc Intens
    Terheijdenseweg 350
    4826 AA Breda
    Tel: +31(0)76 - 5733444
    E-mail: info@barrocintens.nl

    Ook kunt u altijd aangeven dat u niet benaderd wilt worden met marketingactiviteiten.</p>

</body>
</html>

@endsection
