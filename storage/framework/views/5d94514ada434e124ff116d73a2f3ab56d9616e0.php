<?php $__env->startSection('title', 'Association de l\'étudiant à un cours'); ?>

<?php $__env->startSection('contents'); ?>
    <!----------------------------NAVBAR-------------------------->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-md">
            <a class="navbar-brand mb-0 h1" href="<?php echo e(route('gestionnaire.home')); ?>"><span style="background-color:#ffa400; padding: 0px 5px;">Ma</span> page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('gestionnaire.home')); ?>">Accueil</a>
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

    <!----------------------------------Formulaire--------------------------->
    <div class="container-sm">
        <!----------------------------Back-------------------------------->
        <a class="btn btn-info" href="<?php echo e(route('gestionnaire.seance.index')); ?>"><i class="bi bi-arrow-left-circle-fill"></i> Back</a>

        <h3>Associé un utilisateur Enseignant à un cours</h3>
        <form action='<?php echo e(route('gestionnaire.associer.enseignant', [$cours->id])); ?>' method="POST">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">id</label>
                <input type="text" class="form-control" name="id" id="formGroupExampleInput" readonly value="<?php echo e(old('id', $cours->id)); ?>">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">intitule</label>
                <input type="text" class="form-control" name="intitule" id="formGroupExampleInput" readonly value="<?php echo e(old('intitule', $cours->intitule)); ?>">
            </div>

            

            <select name="id_users">
                <option value="">--Please choose an option--</option>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option title="<?php echo e($user->id); ?>" value="<?php echo e($user->id); ?>"><?php echo e($user->nom); ?> <?php echo e($user->prenom); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <input class="btn btn-success" type="submit" name="associer" value="Associer">
            <?php echo csrf_field(); ?>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modele', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projet2022\resources\views/gestionnaire/Seances/associeEnseignant.blade.php ENDPATH**/ ?>