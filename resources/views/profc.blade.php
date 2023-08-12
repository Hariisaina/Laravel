<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <style>/* Style de base pour le formulaire */
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
        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f7f7f7;
        }
        
        /* Style pour les labels */
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        /* Style pour les champs de saisie */
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        /* Style pour le bouton de soumission */
        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>



<nav class="navbar">
    <a href="prof">Liste des Professeurs</a>
    <a href="{{ route('pointage.pointprof') }}">Pointage</a>
    <a href="{{ route('paiementprof') }}">Paiement</a>
    <a href="profc">Créer un compte</a>
    <a href="#">Se Deconnecter</a>
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-4  col-md-offset-4" style="margin-top:20px">
      <h2 class="text-center">Connexion</h2>
      <form action="{{route('register-user')}}" method="POST" >
      @if(Session::has('success'))
      <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif 
      @if(Session::has('fail'))
      <div class="alert alert-danger">{{Session::get('fail')}}</div>
      @endif 
      @csrf 
        <div class="form-group">
          <label for="email">Nom d'utilisateur</label>
          <input type="name" class="form-control" id="name" placeholder="Votre nom"  value="{{old('name')}}">
        <span class="text-danger">@error('name') {{$message}} @enderror</span>
        </div>
        <div class="form-group">
          <label for="email">Adresse e-mail</label>
          <input type="email" class="form-control" id="email" placeholder="Votre adresse e-mail" value="{{old('email')}}">
         <span class="text-danger">@error('email') {{$message}} @enderror</span>
        </div>
        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input type="password" class="form-control" id="password" placeholder="Votre mot de passe" value="{{old('password')}}">
         <span class="text-danger">@error('password') {{$message}} @enderror</span>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Créer</button>
        <br>
      </form>
    </div>
    
  </div>
</div>


</body>
<script>
    // Fonction pour afficher la notification
    function afficherNotification() {
      // Créer un élément div pour la notification
      var notificationDiv = document.createElement('div');
      notificationDiv.className = 'alert alert-success';
      notificationDiv.innerText = 'Créé avec succès';
  
      // Insérer l'élément de notification avant le formulaire
      var formulaire = document.querySelector('form');
      formulaire.parentNode.insertBefore(notificationDiv, formulaire);
  
      // Supprimer la notification après quelques secondes
      setTimeout(function () {
        notificationDiv.remove();
      }, 3000); // Supprime la notification après 3 secondes (3000 millisecondes)
    }
  
    // Ajouter un écouteur d'événement au bouton "Créer"
    var boutonCreer = document.querySelector('button[type="submit"]');
    boutonCreer.addEventListener('click', function (event) {
      event.preventDefault(); // Empêcher la soumission normale du formulaire
      afficherNotification(); // Appeler la fonction d'affichage de la notification
    });
  </script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
