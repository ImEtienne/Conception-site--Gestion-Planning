<?php $__env->startSection('title', 'Liste de toutes les séances'); ?>

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
                        <a class="nav-link" href="<?php echo e(route('enseignant.showSeance')); ?>">Voir séance</a>
                    <li>

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

    <?php if (! (empty($seances))): ?>
        <div class="container-sm">
            <!----------------------------Back-------------------------------->
            <a class="btn btn-info" href="<?php echo e(route('enseignant.showSeance')); ?>"><i class="bi bi-arrow-left-circle-fill"></i> Back</a>

            <!----------------------------Associé plusieurs-------------------------------->
            <button title="Liste des séances de cours"  type="button" class="btn btn-info"  aria-expanded="false">
                <a href="<?php echo e(route('enseignant.pointer.etudiantPlusieurs')); ?>" style="text-decoration: none; color: black;"><i class="bi bi-chevron-contract"></i>&nbsp;Associé Plusiers Etudiants</a>
            </button>

            <button title="Liste des séances de cours"  type="button" class="btn btn-info"  aria-expanded="false">
                <a href="<?php echo e(route('gestionnaire.seance.ListEnseignant', ['id'=>Auth::user()->id])); ?>" style="text-decoration: none; color: black;"><i class="bi bi-eye-fill"></i>&nbsp;Voir la liste des cours associés</a>
            </button>
            <!----------------------------Table------------------------------>
            <table class="table table-hover caption-top" style="box-shadow: 5px 10px 20px rgba(0,0,0, 0.3);">
                <caption>Liste des Séances</caption>
                <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>cours_id</th>
                    <th>date_debut</th>
                    <th>date_fin</th>
                    <th>Pointage Etudiant</th>
                </tr>
                </thead>
                <?php $__empty_1 = true; $__currentLoopData = $seances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($seance ->id); ?></td>
                        <td><?php echo e($seance ->cours_id); ?></td>
                        <td><?php echo e($seance ->date_debut); ?></td>
                        <td><?php echo e($seance ->date_fin); ?></td>
                        <td><a type="button" class="btn btn-primary" href="<?php echo e(route('enseignant.pointer.etudiant', [$seance->id])); ?>">&nbsp;Pointer présent.e</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p> Aucune séance trouvée ! </p>
                <?php endif; ?>
            </table><br><br><br><br><br><br>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modele', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projet2022\resources\views/enseignant/pointage/ListeSeanceCours.blade.php ENDPATH**/ ?>