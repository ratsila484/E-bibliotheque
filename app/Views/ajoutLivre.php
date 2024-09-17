<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?=base_url('bootstrap/css/bootstrap.min.css')?>>
    <link rel="stylesheet" href="<?= base_url('fontawesome/css/all.min.css')?>">
    <title>Document</title>
</head>

<style>
    .text-center{
        color: green;
        font-weight: bolder;
    }
    #blocBtnAjout{
        display: flex;
        justify-content: center;
    }
    .blocCollapse{
        display: none;
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
    #formAdd{
        width: 90%;
        transform: translateX(9.9%);
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
            <div class="row" id="selected">
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
    <h1 class="text-center">Ajout d'un livre</h1>
    <form action="AddLivre" method="post" class="p-5" id="formAdd">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titre du livre</label>
            <input type="text" class="form-control"  placeholder="Ex After ...." required name="titre">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Auteur</label>
            <input type="text" class="form-control"  placeholder="Ex Rado" required name="auteur">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Date de création du livre</label>
            <input type="date" class="form-control"   required name="dateCreation">
        </div>
        <div class="mb-3" id="blocBtnAjout">
            <button class="btn btn-success"><i class="fa fa-add"></i>  Ajouter</button>
        </div>
    </form>
    <div class="blocCollapse">
        <h1>Ajout du livre réussi</h1>
    </div>
</body>

</html>