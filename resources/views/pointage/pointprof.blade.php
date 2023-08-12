
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Professeurs</title>
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
                .container {
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
                #professeurs {
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

                .link-button {
       display: inline-block;
       padding: 8px 16px;
       background-color: #007bff;
       color: white;
       border: none;
       border-radius: 4px;
       text-decoration: none;
       transition: background-color 0.3s;
          }

       .link-button:hover {
        background-color: #0056b3;
        }
            </style>
  </head>
  <body>

    <nav class="navbar">
        <a href="accueil">Accueil</a>
        <a href="prof">Liste des Professeurs</a>
        <a href="pointprof">Pointage</a>
        <a href="{{ route('paiementprof') }}">Paiement</a>
        <a href="propos">À Propos</a>
        <a href="#">Se Deconnecter</a>
    </nav>
    <div class="container">
        <h2>Liste des Professeurs</h2>
     <table id="professeurs">
        <thead>
            <tr>
                <th>N°</th>
                <th>Nom</th>
                <th>Modules</th>
            </tr>
        </thead>
        <tbody>
            @php
                $ide = 1;
            @endphp

            @foreach ($profs as $prof)
                <tr>
                    <td>{{ $ide }}</td>
                    <td>{{ $prof->name }}</td>
                    <td>{{ $prof->module }}</td>

                    <td>
                        <a class="link-button" href="{{ route('pointage.show', ['id' => $prof->id]) }}">POINTAGE</a>
                    </td>
                </tr>
                @php
                    $ide += 1;
                @endphp
            @endforeach
        </tbody>
     </table>
    </div>


  </body>
</html>

