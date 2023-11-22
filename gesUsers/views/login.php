<?php if($message): ?>
<div class="container mt-4 col-md-10">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <?= $message ?>
    </div>
    
</div>
<?php endif; ?>
<div class="container card col-md-4 mt-4">
            <div class="card-header bg-warning">
                <div class="row">

                    <h3 class="col-md-6">Connexion</h3>
                    <div class="col-md-6 text-end">
                        <a href="?page=register" class="btn btn-outline-info">S'inscrire</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mot de passe</label>
                        <input type="password" name="mdp" required class="form-control">
                    </div>
                    <button class="btn btn-outline-success mt-3" type="submit" name="login">Se connecter</button>
                </form>
            </div>
        </div>