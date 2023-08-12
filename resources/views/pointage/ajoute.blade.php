<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            margin-bottom: 10px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="time"],
        input[type="date"],
        input[type="nombre"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .button-container {
            text-align: center;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }

        .alert {
            padding: 15px;
            margin-bottom: 10px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .alert-danger {
            background-color: #f44336;
            color: white;
            border-color: #f44336;
        }

        .alert-success {
            background-color: #4CAF50;
            color: white;
            border-color: #4CAF50;
        }

        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <ul>
        @foreach ($errors->all() as $error )
            <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
    </ul>

    <div class="container">
        <h2>Pointage</h2>
        <form action="/ajouter/traite" method="POST">
            @csrf
            <div class="container">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="">
            </div>
            <div class="container">
                <label for="module">Module</label>
                <input type="text" class="form-control" id="module" name="module" value="">
            </div>
            <div class="container">
                <label for="heured">Heure de début</label>
                <input type="time" class="form-control" id="heured" name="heured" value="">
            </div>
            <div class="container">
                <label for="heuref">Heure de fin</label>
                <input type="time" class="form-control" id="heuref" name="heuref" value="">
            </div>
            <div class="container">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="">
            </div>
            <div class="container">
                <label for="prof_id">ID Prof</label>
                <input type="nombre" class="form-control" id="prof_id" name="prof_id" value="">
            </div>
            <div class="button-container">
                <button type="submit" class="button">Ajouter</button>
            </div>
            <br>
            <a class="btn btn-success" href="pointage">Revenir à la liste</a>
        </form>
    </div>
</body>
</html>
