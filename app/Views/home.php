<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('fontawesome/css/all.min.css') ?>">
    <title>Document</title>
</head>
<style>
    #container {
        background-color: #333;
        position: fixed;
        left: 0;
        width: 9.8%;
        color: white;
        height: 100%;
    }

    #selected {
        background-color: blueviolet;
    }

    a {
        text-decoration: none;
        list-style-type: none;
        margin-bottom: 10px;
        color: none;
    }

    a:hover {
        color: white;
    }


    #selected {
        background-color: blueviolet;
    }

    #home {
        width: 89%;
        transform: translateX(5.5%);
    }

    .body .row {
        margin-bottom: 10px;
        transition: 0.2s all;
        height: 50px;
        cursor: pointer;
        align-items: center;
    }

    .body .row:hover {
        background-color: blueviolet;
    }

    .profil {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 5px;
    }

    #blocNav {
        margin-bottom: 5%;
        border: 1px solid black;
        padding: px;
        border-radius: 20px;
        box-shadow: 0px 3px 3px #333;
    }

    .div_btn {
        display: flex;
        justify-content: center;
    }

    #pdp {
        width: 60%;
        border: 1px solid black;
        border-radius: 50%;
    }

    #profil {
        position: left;
        width: 100px;
        margin-left: 150px;
    }

    #disabled {
        display: none;
    }
</style>

<body>
    <!-- navBar -->
    <div class="container-fluid" id="container">
        <div class="header">
            <h3>Gestion biblio</h3>
        </div>
        <hr>
        <div class="body">
            <div class="row" id="selected">
                <div class="col-3">
                    <i class="fa fa-home"></i>
                </div>
                <div class="col-9">
                    <a href="home">Home</a>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-book"></i>
                </div>
                <div class="col-9">
                    <a href="liste">Liste livres</a>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-add"></i>
                </div>
                <div class="col-9">
                    <a href="ajoutLivre">Ajouter un livre</a>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-user"></i>
                </div>
                <div class="col-9">
                    <a href="listeClient">Liste client</a>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-check"></i>
                </div>
                <div class="col-9">
                <a href="listeCleanClient">Clients rendu les livre</a>
                </div>
            </div>
        </div>
    </div>
    <!-- navBar -->

    <!-- content -->

    <div class="container-fluid" id="home">
        <div class="row" id="blocNav">
            <div class="col-9">

            </div>
            <div class="col-3 justify-contant-center" id="profil">
                <div class="profil">
                    <img src="<?= base_url('ico.png') ?>" alt="admin" id="pdp">
                </div>
                <p class="text-center">Admin</p>
            </div>
        </div>
        <div class="row" id="content">
            <div class="formulaire">
                <form action="AddClient" method="post">
                    <div id="personneContent" class="hidden">

                        <h3 class="text-center">Emprunter un livre</h3>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Choisir un livre</label>
                            <select class="form-select" aria-label="Default select example" name="book">
                                <?php foreach ($livres as $livre) { ?>
                                    <?php if ($livre['disponibilite'] == 1) { ?>
                                        <option selected value="<?= $livre['titre'] ?>"><?= $livre['titre'] ?></option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nom du client</label>
                            <input type="text" class="form-control" name="nom" placeholder="Nom du client" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Adrèsse du client</label>
                            <input type="text" class="form-control" name="adresse" placeholder="Adrèsse du client "
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Numéros de Tel du client</label>
                            <input type="text" class="form-control" name="tel" placeholder="Tel ...." required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date d'emprunt du livre</label>
                            <input type="date" class="form-control" name="dateEmprunt" placeholder="Ex 2024/09/03"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Dead line du livre</label>
                            <input type="text" class="form-control" placeholder="Ex 2024/09/03"
                                value="le livre doit être rendu au plus tard dans 30j" disabled>
                        </div>

                        <div class="div_btn">
                            <button type="submit" class="btn btn-primary w-50">Valider</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- content -->
    <script src="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
</body>

</html>