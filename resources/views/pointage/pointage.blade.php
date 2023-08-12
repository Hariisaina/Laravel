<!DOCTYPE html>
<html>
<head>
    <title>Page de Pointage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #cacccf;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            color: #333;
        }

        table {
            margin: 20px auto;
            width: 90%;
            border-collapse: collapse;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #e0e0e0;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        td {
            background-color: #ffffff;
            color: #333;
        }

        tr:nth-child(even) td {
            background-color: #f9f9f9;
        }

        tr:hover td {
            background-color: #f0f0f0;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #7eb4e1;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #597ad6;
        }

        .return-link {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .return-link:hover {
            background-color: #2980b9;
        }


        a {
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            color: #2980b9;
        }
    </style>
</head>
<body>



<h1>Pointage des Professeurs</h1>

    <table>
        <thead>
            <tr>
                <th>N°</th>
                <th>Nom du Professeur</th>
                <th>Modules</th>
                <th>Heure de Début</th>
                <th>Heure de Fin</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @php

            $dureeTotale = 0;
        @endphp
            @foreach ($pointages as $pointage)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pointage->nom}}</td>
                    <td>{{ $pointage->module }}</td>
                    <td>{{ $pointage->heured }}</td>
                    <td>{{ $pointage->heuref }}</td>
                    <td>{{ $pointage->date }}</td>

                </tr>

                @php
                // Mettre à jour la durée totale à l'intérieur de la boucle
                $heureDebut = new DateTime($pointage->heured);
                $heureFin = new DateTime($pointage->heuref);
                $diff = $heureDebut->diff($heureFin);
                $dureeTotale += ($diff->h * 60 + $diff->i);
            @endphp

            @endforeach
        </tbody>
</table>
<br>
<div>
    durée totals
    <input type="text" value="
        @php
            $dureeTotaleHeures = floor($dureeTotale / 60);
            $dureeTotaleMinutes = $dureeTotale % 60;
            echo $dureeTotaleHeures . ' heures ' . $dureeTotaleMinutes . ' minutes';
        @endphp
    " readonly>
</div>

<div class="button-container">
    <a class="button primary" href="{{ route('pointage.ajoute') }}">Ajouter</a>
</div>
<div class="button-container">
    <a class="button" href="{{ route('pointage.pointprof') }}">Retour</a>
</div>

</body>
</html>
