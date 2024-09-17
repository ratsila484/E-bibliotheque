<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?= base_url("bootstrap/css/bootstrap.min.css") ?>>
    <link rel="stylesheet" href=<?= base_url("fontawesome/css/all.min.css") ?>>
    <title>Document</title>
</head>
<style>

    table {
        width: 90%;
        transform: translateX(11%);
    }

    table tr {
        border: 1px solid #333a33;
    }

    #btnModif,
    #btnSuppr {
        width: 200px;
    }

    #row {
        cursor: pointer;
        transition: 0.5s all;
    }

    #btnAjouter {
        display: flex;
        justify-content: center;
    }
    #text-center{
        color: green;
        font-weight: bolder;

    }
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
    a:hover{
        color: white;
    }
    .row{
        margin-bottom: 10px;
        transition: 0.2s all;
        height: 50px;
        cursor: pointer;
        align-items: center;
    }
    .row:hover{
        background-color: blueviolet;
    }
    #selected{
        background-color: blueviolet;
    }
    .green{
        color: greenyellow;
    }
</style>
</style>

<body >
    <!-- navBar -->
    <div class="container-fluid" id="container">
        <div class="header">
            <h3>Gestion biblio</h3>
        </div>
        <hr>
        <div class="body">
            <div class="row" >
                <div class="col-3">
                    <i class="fa fa-home"></i>
                </div>
                <div class="col-9">
                <a href="home">Home</a>
                </div>
            </div>
            <div class="row" >
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
            <div class="row" >
                <div class="col-3">
                    <i class="fa fa-user"></i>
                </div>
                <div class="col-9">
                <a href="listeClient">Liste client</a>
                </div>
            </div>
            <div class="row" id="selected">
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
    <table class="mt-5">
        <h1 class="text-center" id="text-center">Liste des clients Qui ont rendu les livres</h1>
        <thead class="text-center">
            <th>Nom</th>
            <th>Livre rendu</th>
            <th>Date de rendu du livre</th>
            <th>Statut</th>
        </thead>
        <tbody class="text-center">
         
            <?php foreach ($clientclean as $clean) { ?>
                <tr id="row">
                    <td><?= $clean['nom'] ?></td>
                    <td><?= $clean['livre'] ?></td>
                    <td><?= $clean['date'] ?></td>
                    <td class="green">Verifier</td>
                </tr>

            <?php } ?>

        </tbody>

    </table>
   
    <script src="<?= base_url('bootstrap/js/bootstrap.js')?>"></script>
</body>

</html>