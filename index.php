<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!-- HeadBand -->
        <section class="headBand">
            <h1><span class="title">Mon Portfolio</span></h1>
        </section>
        <!-- NavBar -->
        <nav class="navbar nav-sticky navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link text-light active" aria-current="page" href="#accueil">Accueil</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-light" href="#projet">Projet</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-light" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Accueil -->
        <section class="accueil" id="accueil">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h1>accueil</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="grid col-md-4">
                        <a href="#"><img src="ressource/bg.jpg" width="400" height="180" alt=""></a>
                    </div>
                    <div class="grid col-md-4">
                        <a href="#"><img src="ressource/bg.jpg" width="400" height="180" alt=""></a>
                    </div>
                    <div class="grid col-md-4">
                        <a href="#"><img src="ressource/bg.jpg" width="400" height="180" alt=""></a>
                    </div>
                    <div class="grid col-md-4">
                        <a href="#"><img src="ressource/bg.jpg" width="400" height="180" alt=""></a>
                    </div>
                    <div class="grid col-md-4">
                        <a href="#"><img src="ressource/bg.jpg" width="400" height="180" alt=""></a>
                    </div>
                    <div class="grid col-md-4">
                        <a href="#"><img src="ressource/bg.jpg" width="400" height="180" alt=""></a>
                    </div>
                    <div class="grid col-md-4">
                        <a href="#"><img src="ressource/bg.jpg" width="400" height="180" alt=""></a>
                    </div>
                    <div class="grid col-md-4">
                        <a href="#"><img src="ressource/bg.jpg" width="400" height="180" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projets -->
        <section class="projet" id="projet">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h1>Projet</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!-- Projet 1 : Showroom -->
                    <div class="col-md-4">
                        <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="ressource/bg.jpg" class="d-block w-100" alt="ressource/bg.jpg">
                                </div>
                                <div class="carousel-item">
                                <img src="ressource/fd4.png" class="d-block w-100" alt="ressource/fd4.png">
                                </div>
                                <div class="carousel-item">
                                <img src="ressource/bg.jpg" class="d-block w-100" alt="ressource/bg.jpg">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" title="Précédent" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Précédent</span>
                            </button>
                            <button class="carousel-control-next" type="button" title="Suivant" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Suivant</span>
                            </button>
                        </div>
                    </div>
                    <!-- Projet 2 : Web4Event -->
                    <div class="col-md-4">
                        <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="ressource/bg.jpg" class="d-block w-100" alt="ressource/bg.jpg">
                              </div>
                              <div class="carousel-item">
                                <img src="ressource/fd4.png" class="d-block w-100" alt="ressource/fd4.png">
                              </div>
                              <div class="carousel-item">
                                <img src="ressource/bg.jpg" class="d-block w-100" alt="ressource/bg.jpg">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" title="Précédent" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Précédent</span>
                            </button>
                            <button class="carousel-control-next" type="button" title="Suivant" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Suivant</span>
                            </button>
                        </div>
                    </div>
                    <!-- Projet 3 : Stage SCIManager -->
                    <div class="col-md-4">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="ressource/bg.jpg" class="d-block w-100" alt="ressource/bg.jpg">
                              </div>
                              <div class="carousel-item">
                                <img src="ressource/fd4.png" class="d-block w-100" alt="ressource/fd4.png">
                              </div>
                              <div class="carousel-item">
                                <img src="ressource/bg.jpg" class="d-block w-100" alt="ressource/bg.jpg">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" title="Précédent" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Précédent</span>
                            </button>
                            <button class="carousel-control-next" type="button" title="Suivant" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Suivant</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h1>Contact</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="contact-form">
                        <form action="send_mail.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nom" class="form-label">Nom</label>
                                    <input type="text" class="form-control" name="nom" id="nom">
                                </div>
                                <div class="col-md-6">
                                    <label for="prenom" class="form-label">Prénom</label>
                                    <input type="text" class="form-control" name="prenom" id="prenom">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="adresseMail" class="form-label">Adresse mail</label>
                                <input type="email" class="form-control" name="mail" id="mail">
                            </div>
                            <div class="form-group col-md-12">
                              <label for="objet" class="form-label">Objet</label>
                              <input type="text" class="form-control" name="objet" id="objet">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" name="message" id="message" cols="30" rows="5" placeholder="Écrire un message..." value=""></textarea>
                              </div>
                              <br>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>