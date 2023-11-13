   
<div class="container mt-5">
    <div class="row">

        <h1 class="col-md-10">La liste des élèves</h1>
        <div class="col-md-2 text-end">
            <a href="?page=eleve&type=add" class="btn btn-outline-success">Ajouter</a>
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Date de naissance</th>
                <th>Lieu de naissance</th>
                <th>Telephone</th>
                <th>Sexe</th>
                <th>Classe</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($eleves as $e): ?>
            <tr>
                <td><?= $e->prenom; ?></td>
                <td><?= $e->nom; ?></td>
                <td><?= date("d/m/Y", strtotime($e->datnais)) ?></td>
                <td><?= $e->lieunais; ?></td>
                <td><?= $e->tel; ?></td>
                <td><?= $e->sexe; ?></td>
                <td><?= $e->nomclasse; ?></td>
                <td>
                    <a href="?page=eleve&type=edit&id=<?= $e->id ?>" class="btn btn-outline-warning">Modifier</a>
                    <a href="" class="btn btn-outline-danger">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

</div>
