<?php $__env->startSection('title', 'Formulaire de création des séances'); ?>

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
    </nav>

    <!------------------------ Formulaire ------------------------>
    <div class="container-sm">

        <!----------------------------Back-------------------------------->
        <a class="btn btn-info" style="margin-top:10px;margin-bottom:10px;" href="<?php echo e(URL::previous()); ?>"><i class="bi bi-arrow-left-circle-fill"></i> Back</a>

        <h3>Créer une séance de cours</h3>
        <form action='<?php echo e(route('gestionnaire.seance.create',['id'=>$cours->id])); ?>' method="POST">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Intitule</label>
                <input type="text" class="form-control" name="cours" id="formGroupExampleInput" readonly value="<?php echo e(old('intitule',$cours->intitule)); ?>">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Date de début : </label>
                <input type="datetime-local" step="1" class="form-control" name="date_debut" id="formGroupExampleInput">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Date de fin : </label>
                <input type="datetime-local" step="1" class="form-control" name="date_fin" id="formGroupExampleInput">
            </div>

            <input class="btn btn-primary" type="submit" name="creer" value="Créer">
            <input class="btn btn-danger" type="submit" name="Annuler" value="Annuler">
            <?php echo csrf_field(); ?>
        </form><br><br><br><br>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modele', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projet2022\resources\views/gestionnaire/Seances/CreationSeance.blade.php ENDPATH**/ ?>