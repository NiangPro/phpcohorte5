   
<div class="container mt-5">
    <div class="row">

        <h1 class="col-md-10">La liste des classes</h1>
        <div class="col-md-2 text-end">
            <a href="?page=classe&type=add" class="btn btn-outline-success">Ajouter</a>
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Taille</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($classes as $c): ?>
            <tr>
                <td><?php echo $c->nom; ?></td>
                <td><?= $c->taille ?></td>
                <td></td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

</div>
