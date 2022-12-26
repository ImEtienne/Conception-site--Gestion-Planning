<?php $__env->startSection('title', 'Changement du mot de passe'); ?>


<?php $__env->startSection('contents'); ?>
    <!---------------------- Nav------------------------->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-md">
            <a class="navbar-brand mb-0 h1" href="#"><span style="background-color:#ffa400; padding: 0px 5px;">Ma</span> page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('gestionnaire.etudiant.index')); ?>">Gestion des Etudiant</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('gestionnaire.seance.index')); ?>">Gestion des séances des cours</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo e(route('gestionnaire.account.edit')); ?>">Changer son mot de passe</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('gestionnaire.account.editNomPrenom',['id'=>Auth::user()->id])); ?>">Modifier son nom/prénom</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>


    <div class="container-sm">
        <h3>Modification du mot de passe : </h3>
        <form action="<?php echo e(route('gestionnaire.account.edit')); ?>" method="POST">
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Ancien Mot de passe</label>
                <input type="password" class="form-control" name="mdp_old"  id="formGroupExampleInput2" placeholder="ancien mot de passe.." required>
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nouveau mot de passe</label>
                <input type="password" class="form-control" name="mdp"  id="formGroupExampleInput2" placeholder="nouveau mot de passe.." required>
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Confirmer</label>
                <input type="password" class="form-control" name="mdp_confirmation"  id="formGroupExampleInput2" placeholder="Confirmer mot de passe.." required>
            </div>
            <input class="btn btn-primary" type="submit" name="Supprimer" value="Confirmer">
            <?php echo csrf_field(); ?>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modele', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projet2022\resources\views/gestionnaire/account/edit_Mdp.blade.php ENDPATH**/ ?>