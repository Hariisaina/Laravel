<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f5f6f8;
    }

    /* Styles pour la barre de navigation */
    .navbar {
        background-color: #fff;
        border-bottom: 1px solid #ccc;
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 10px 0;
    }

    .navbar a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        font-size: 14px;
    }

    /* Styles pour le conteneur principal */
    .facture {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        font-weight: bold;
        font-size: 24px;
        margin-bottom: 20px;
    }

    /* Styles pour la liste des professeurs */
    #facture {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        text-align: center;
        border-bottom: 1px solid #ccc;
    }

    th {
        background-color: #f2f2f2;
    }

    /* Styles pour les boutons */
    .button-container {
        text-align: center;
        margin-top: 20px;
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #0095f6;
        color: #fff;
        text-decoration: none;
        border-radius: 6px;
        font-weight: bold;
        transition: background-color 0.3s;
    }

    .button:hover {
        background-color: #007acc;
    }
    .container {
        max-width: 300px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
</style>
<body>

    <div class="container">

            @php
                $ide = 1;
            @endphp

            @foreach ($paiements as $paiement)


<h1>Facture</h1>

N°: {{ $ide }}

<br>

Nom: {{ $paiement->name }}

<br>

Module: {{ $paiement->module }}

<br>
Durée:{{ $paiement->duree }}
<br>

@php
    if ($paiement->duree == 1) {
        $montantCalcule = 20000;
    } else {
        $montantCalcule = 20000 * $paiement->duree;
    }
@endphp

Montant: {{ $montantCalcule }}

           @php
                    $ide += 1;
                @endphp
            @endforeach




<!-- Bouton d'impression -->
<br>
<button id="imprimer">Imprimer</button>

<!-- Script JavaScript pour gérer l'impression -->
<script>
    document.getElementById("imprimer").addEventListener("click", function () {
        window.print();
    });
</script>

<!-- resources/views/paiementdetails.blade.php -->


<div class="button-container">
    <a class="button" href="{{ route('paiement.paiement') }}">Retour</a>
</div>


   </div>
</body>
</html>
