<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 col-md-8">
        <form action="traitement.php" method="post">
            <div class="form-group">
                <label for="">Prenom</label>
                <input type="text" name="prenom" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" name="nom" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Pays</label>
                <select name="pays" class="form-control" id="">
                    <option value="">Veuillez selectionner un pays</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Mali">Mali</option>
                    <option value="Guinee">Guinee</option>
                    <option value="Mauritanie">Mauritanie</option>
                </select>
            </div>
            <button type="submit" name="ajouter" class="btn mt-2 btn-success">Ajouter</button>
        </form>
    </div>

<script src="assets/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php 

    if (isset($_GET["retour"])) {
        echo $_GET["retour"];
    }

?>