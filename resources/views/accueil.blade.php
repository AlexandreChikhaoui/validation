<!DOCTYPE html>
<html lang="en">
<head>
  <title>Application de gestion de stock specialisé</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
        body {background-color: black;}
        h1   {color: white;}
        h3   {color: white;}
        h4   {color: white;}
        p    {color: white;}
        .a {width: 70%;
            background-color: grey;
        color:white;}
  </style>


</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">AppMusic</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Accueil</a></li>
        <li><a href="resultat.blade">Resultats</a></li>
      </ul>
    </div>
  </nav>
<div class="jumbotron text-center">
  <h1>Application de gestion de stock</h1>
  <p> Jamais la gestion de stock de musique ne sera pour vous un secret!</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Qui nous sommes?</h3>
      <p>Nous sommes une start up permettant de gerer les stocks de magasin specialisé dans la musique</p>
      <p>Nous sommes situés à Confluence , n'hesitez donc pas à venir prendre le café et de nous parler de vos projets</p>
    </div>
    <div class="col-sm-4">
      <h3>Notre Role</h3>
      <p>Proposer un service, produit adapté à la demande client</p>
      <p>Gestion des stocks et des approvisionnements</p>
      <p>Vérifier la conformité de la livraison</p>
    </div>
    <div class="col-sm-4">
      <h3>Utilisation simplifié</h3>
      <p>Notre application a su créer une expérience engageante et intuitive pour nos utilisateurs.</p>
      <p>De nos jours, de plus en plus d’entreprises se rendent compte que l’expérience utilisateur peut réellement être un avantage compétitif si elle est bien designée au sein de l’application.</p>
      <p>Notre philophie se base la dessus</p>
    </div>
  </div>
</div>
 <br>
 <br>
 <br>
 <br>



<h4>Verifiez la disponibilité de vos produits en un seul clic!</h4>


<div class="a">
  <label for="pwd">Nom de l'artiste:</label>
  <input type="text" class="form-control" id="pwd">
</div>
<div class="a">
  <label for="pwd">Prenom de l'artiste:</label>
  <input type="text" class="form-control" id="pwd">
</div>
<div class="a">
  <label for="pwd">Titre du cd</label>
  <input type="text" class="form-control" id="pwd">
</div>
<div class="a">
  <label for="pwd">Année</label>
  <input type="text" class="form-control" id="pwd">
  <label for="pwd">Quantité</label>
  <input type="text" class="form-control" id="pwd">

<button type="submit" class="btn btn-default">Envoyer</button>
<button type="reset" value="Reset">Effacer</button>


</div>

<div class="w3-container w3-padding-64" id="contact">
  <br></br>
  <br></br>

   <h1>Contact</h1><br>

   <form action="/action_page.php" target="_blank">
     <p><input class="w3-input w3-padding-16" type="text" placeholder="Noms" required name="Name"></p>
     <p><input class="w3-input w3-padding-16" type="number" placeholder="telephone" required name="telephone"></p>
     <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
     <p><button class="w3-button w3-light-grey w3-section" type="submit">Envoyer le message</button></p>
   </form>
 </div>

</div>





</body>
</html>
