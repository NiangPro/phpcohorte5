<div class="container card mt-3 col-md-8">
    <div class="card-header row bg-warning">
        <h1 class="card-title col-md-10">Formulaire d'<?= isset($_GET["id"]) ? "edition" : "ajout" ?> élève</h1>
        <div class="col-md-2 text-end">
            <a href="?page=eleve" class="btn btn-info">Retour</a>
        </div>
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <?php if(isset($_GET["id"])): ?>
                <input type="hidden" name="id" value="<?= $e->id ?>">
            <?php endif; ?>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Prénom</label>
                    <input type="text" name="prenom" value="<?= isset($e) ? $e->prenom : '' ?>" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Nom</label>
                    <input type="text" name="nom" value="<?= isset($e) ? $e->nom : '' ?>"  required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Date de naissance</label>
                    <input type="date" name="datnais"  value="<?= isset($e) ? $e->datnais : '' ?>"  required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Lieu de naissance</label>
                    <input type="text" name="lieunais" value="<?= isset($e) ? $e->lieunais : '' ?>"  required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Telephone</label>
                    <input type="text" name="tel"  value="<?= isset($e) ? $e->tel : '' ?>"  required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Classe</label>
                    <select name="idclasse" id="" required class="form-control">
                        <option value="">Veuillez selectionner une classe</option>
                        <?php foreach($classes as $c): ?>
                            <option value="<?= $c->id ?>" <?= (isset($e) && $e->idclasse == $c->id) ? "selected" : ""  ?>><?= $c->nom ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Sexe</label><br>
                    <label for="" class="radio-inline">Masculin <input type="radio" value="Masculin" <?= (isset($e) && $e->sexe == "Masculin") ? "checked": ""  ?> name="sexe"></label>
                    <label for="" class="radio-inline">Feminin <input type="radio"  <?= (isset($e) && $e->sexe == "Feminin") ? "checked": ""  ?> value="Feminin" name="sexe"></label>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Image de profil</label>
                    <input type="file" name="profil"  class="form-control">
                </div>
            </div>

            <?php if(isset($_GET["id"])): ?>
                <button type="submit" class="btn btn-outline-warning" name="editer">Modifier</button>
            <?php else: ?>
                <button type="submit" class="btn btn-outline-success" name="ajouter">Ajouter</button>
                <?php endif; ?>
        </form>
    </div>
</div>