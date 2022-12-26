<?php $__env->startSection('title', 'Association de l\'étudiant à un cours'); ?>

<?php $__env->startSection('contents'); ?>
    <!--------------------- NavBar ------------------------------->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-md">
            <a class="navbar-brand mb-0 h1" href="<?php echo e(route('enseignant.home')); ?>"><span style="background-color:#ffa400; padding: 0px 5px;">Ma</span> page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('enseignant.home')); ?>">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nothing</a>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo e(route('enseignant.account.edit')); ?>">Changer son mot de passe</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('enseignant.account.editNomPrenom', ['id'=>Auth::user()->id])); ?>">Modifier son nom/prénom</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>

    <!----------------------------------Formulaire--------------------------->
    <div class="container-sm">
        <!----------------------------Back-------------------------------->
        <a class="btn btn-info" href="<?php echo e(route('enseignant.showSeance')); ?>"><i class="bi bi-arrow-left-circle-fill"></i> Back</a>

        <h3>Pointage de plusieurs étudiants d’un coup pour la séance.</h3>
        <form method="POST">

            <select name="id">
                <option value="">--Choix une séance--</option>
                <?php $__currentLoopData = $seances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option title="<?php echo e($seance->id); ?>" value="<?php echo e($seance->id); ?>"><?php echo e($seance->id); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>


                <legend>--choisir les etudiants--</legend>
                <?php $__currentLoopData = $etudiants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etudiant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="<?php echo e($etudiant->id); ?>" name="id_etudiant[]" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault" title="<?php echo e($etudiant->id); ?>"><?php echo e($etudiant->nom); ?><?php echo e($etudiant->prenom); ?> </label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            <input class="btn btn-success" type="submit" name="associer" value="Pointer">
            <?php echo csrf_field(); ?>
        </form>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('modele', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projet2022\resources\views/enseignant/pointage/pointageEtudiantPlusieurs.blade.php ENDPATH**/ ?>