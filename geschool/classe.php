   
<div class="container">
    <h1>La liste des classes</h1>

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
                <td><?= $c["nom"];  ?></td>
                <td><?php echo $c["taille"]; ?> </td>
                <td>
                <a href="" class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></a>
                <a href="" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
