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
    .text-center {
        color: green;
        font-weight: bolder;
    }

    #blocBtnAjout {
        display: flex;
        justify-content: center;
    }

    .blocCollapse {
        display: none;
    }
    body{
        margin-top: 10%;
    }
</style>

<body >
    <h1 class="text-center">Modification du livre</h1>
    <form action="/livre/update/<?= $livres['id']?>" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titre du livre</label>
            <input type="text" class="form-control" placeholder="Ex After ...." required name="titre"
                value="<?= esc($livres['titre']) ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Auteur</label>
            <input type="text" class="form-control" placeholder="Ex Rado" required name="auteur"
                value="<?= esc($livres['auteur']) ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Date de création du livre</label>
            <input type="date" class="form-control" required name="dateCreation"
                value="<?= esc($livres['dateCreation']) ?>">
        </div>
        <div class="mb-3" id="blocBtnAjout">
            <button class="btn btn-success m-5" type="submit"><i class="fa fa-pen"></i> Modifier</button>
            <a class="btn btn-secondary m-5" href="<?= site_url('liste')?>"><i class="fa fa-x"></i> Annuler</a>
        </div>
    </form>
</body>

</html>