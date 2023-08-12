<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<style>/* Style de base pour le formulaire */
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
        <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
        <br>
        <a href="login">Se connecter si vous avez déja un compte</a>
      </form>
    </div>
    
  </div>
</div>


</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
