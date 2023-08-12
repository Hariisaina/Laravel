<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un Professeur</title>
  <style>
                body {
                    margin: 0;
                    padding: 0;
                    font-family: Arial, sans-serif;
                    background-color: #c8cbd0;
                }

                .container {
                    width: 300px;
                    margin: 20px auto;
                    padding: 15px;
                    background-color: #a9aaab;
                    border-radius: 40px;
                    box-shadow: 3px 3px 10px rgba(124, 122, 122, 0.1);
                }

                input[type="text"],
                input[type="number"],
                input[type="email"] {
                    width: 90%;
                    padding: 10px;
                    border: 1px solid #ddd;
                    border-radius: 8px;
                    font-size: 16px;
                    margin-bottom: 20px;
                }

                .button-container {
                    text-align: center;
                }

                .button {
                    padding: 10px 20px;
                    background-color: #333;
                    color: #fff;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }

                .button:hover {
                    background-color: #555;
                }

                h2 {
                    text-align: center;
                    font-style: italic;
                }
            </style>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        </head>
        <body>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <ul>
                @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
                @endforeach
            </ul>

            <div class="container">
                <h2>Ajouter un Professeur</h2>

                <form action="/ajouter/traitement" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="">
                    </div>

                    <div class="mb-3">
                        <label for="module" class="form-label">Module</label>
                        <input type="text" class="form-control" id="module" name="module" value="">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="">
                    </div>

                    <div class="mb-3">
                        <label for="telephone" class="form-label">Telephone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" value="">
                    </div>

                    <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" value="">
                    </div>

                    <div class="button-container">
                        <button type="submit" class="button">Ajouter</button>
                    </div>

                    <br>
                    <a class="btn btn-success" href="prof">Revenir à la liste</a>
                </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-rKj/1AgGtp5CE/Cp2DRAeEmJeMwS46186f4lu/VX4qU6q0p8r+9S8kv4h9a8lDp" crossorigin="anonymous"></script>
</body>
</html>
