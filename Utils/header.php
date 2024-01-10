
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <title>Librairie</title>
</head>
<body>
<header>
<!-- <nav>
    <ul class="links">
      <li><a href="?controller=home&action=home">Accueil</a></li>
      <li class="deroulant"><a class="liens" href="?controller=livres&action=all_livres">Livres </a>
        <ul class="sous">
          <li><a href="?controller=livres&action=all_livres">Tous les livres</a></li>
          <li><a href="?controller=livres&action=par_titre">Par Titre</a></li>
          <li><a href="?controller=livres&action=par_auteur">Par Auteur</a></li>
          <li><a href="?controller=livres&action=par_editeur">Par Editeur</a></li>
        </ul>
      </li>
      <li class="deroulant"><a class="liens" href="?controller=fournisseurs&action=all_fournisseurs">Fournisseurs</a>
        <ul class="sous">
          <li><a  href="?controller=fournisseurs&action=all_fournisseurs">Tous les Fournisseurs</a></li>
          <li><a  href="?controller=fournisseurs&action=par_raison_sociale">Par raison sociale</a></li>
          <li><a  href="?controller=fournisseurs&action=par_localite">Par localite</a></li>
          <li><a  href="?controller=fournisseurs&action=par_pays">Par pays</a></li>
        </ul>
      </li>
        
      <li class="deroulant"><a class="liens" href="?controller=commandes&action=all_commandes">Commandes</a>
        <ul class="sous">
          <li><a  href="?controller=commandes&action=all_commandes">Toutes les commandes</a></li>
          <li><a  href="?controller=commandes&action=par_editeur">Par editeur</a></li>
          <li><a  href="?controller=commandes&action=par_fournisseur">Par fournisseur</a></li>
          <li><a  href="?controller=commandes&action=par_date">Par date</a></li>
        </ul>
      </li>
</nav> -->
<nav class="navbar navbar-expand-lg " style="background-color: #9AC8EB;">
  <div class="container-fluid">
    <a class="navbar-brand" href="?controller=home&action=home">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="?controller=livres&action=all_livres" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Livres
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?controller=livres&action=all_livres">Tout les livres</a></li>
            <li><a class="dropdown-item" href="?controller=livres&action=par_titre">Par Titre</a></li>
            <li><a class="dropdown-item" href="?controller=livres&action=par_auteur">Par Auteur</a></li>
            <li><a class="dropdown-item" href="?controller=livres&action=par_editeur">Par Editeur</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="?controller=fournisseurs&action=all_fournisseurs" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fournisseurs
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?controller=fournisseurs&action=all_fournisseurs">Tous les fournisseurs</a></li>
            <li><a class="dropdown-item" href="?controller=fournisseurs&action=par_raison_sociale">Par Raison Sociale</a></li>
            <li><a class="dropdown-item" href="?controller=fournisseurs&action=par_localite">Par Localite</a></li>
            <li><a class="dropdown-item" href="?controller=fournisseurs&action=par_pays">Par Pays</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="?controller=commandes&action=all_commandes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Commandes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?controller=commandes&action=all_commandes">Toutes les commandes</a></li>
            <li><a class="dropdown-item" href="?controller=commandes&action=par_editeur_commandes">Par Editeur</a></li>
            <li><a class="dropdown-item" href="?controller=commandes&action=par_fournisseur">Par Fournisseur</a></li>
            <li><a class="dropdown-item" href="?controller=commandes&action=par_date">Par Date</a></li>
          </ul>
        </li>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
    

</header>
</body>
</html>