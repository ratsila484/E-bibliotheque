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
#login{
        border-radius: 20px;
        box-shadow: 3px 3px 3px #333;
        border: 1px solid black;
        
    }

    #blocBtn{
        display: flex;
        justify-content: center;
    }

</style>
<body>
    <div class="container w-25 mt-5" id="login">
        <h1 class="text-center">S'inscrire</h1>
        <form action="signInClick" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" placeholder="Ex dems.." required name="username">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" placeholder="...." required name="password">
            </div>
            <div class="m-5" id="blocBtn">
                <button class="btn btn-primary" type="submit">S'inscrire</button>
            </div>
            <div class="container">
                <div class="row">
                    <p>Vou avez déja un compte ? <a href="/">Se connecter</a></p>
                </div>
            </div>
        </form>
    </div>
</body>
</html>