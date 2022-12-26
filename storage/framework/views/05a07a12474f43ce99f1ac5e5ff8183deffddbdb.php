<?php $__env->startSection('title', 'Gestion des séances des cours'); ?>

<?php $__env->startSection('contents'); ?>
    <!---------------------- Nav------------------------->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-md">
            <a class="navbar-brand mb-0 h1" href="<?php echo e(route('gestionnaire.home')); ?>"><span style="background-color:#ffa400; padding: 0px 5px;">Ma</span>Page</a>
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

    <?php if (! (empty($cours))): ?>
        <div class="container-sm">
            <!-------------------------Liste des séances-------------------->
            <button title="Liste des séances de cours" style="margin: 0px 0px 10px 0px;" type="button" class="btn btn-info"  aria-expanded="false">
                <a href="<?php echo e(route('gestionnaire.seance.afficheList')); ?>" style="text-decoration: none; color: black;"><i class="bi bi-eye-fill"></i>&nbsp;Voir liste séances</a>
            </button>

            <!-------------------------Liste des cours associés à des enseignants-------------------->
            <button title="Liste des séances de cours" style="margin: 0px 0px 10px 0px;" type="button" class="btn btn-info"  aria-expanded="false">
                <a href="<?php echo e(route('gestionnaire.liste.enseignant')); ?>" style="text-decoration: none; color: black;"><i class="bi bi-chevron-contract"></i>&nbsp;Liste des cours associés à des enseignants</a>
            </button>

            <!-------------------------Associer des étudiants au cours (plusieurs d’un coup).-------------------->
            <button title="Liste des séances de cours" style="margin: 0px 0px 10px 0px;" type="button" class="btn btn-info"  aria-expanded="false">
                <a href="<?php echo e(route('gestionnaire.etudiant.associePlusieurs')); ?>" style="text-decoration: none; color: black;"><i class="bi bi-chevron-contract"></i>&nbsp;Associé Plusieurs Etudiant</a>
            </button>

            <!-------------------------Dissocier étudiants plusieurs au cours (plusieurs d’un coup).-------------------->
            <button title="Liste des séances de cours" style="margin: 0px 0px 10px 0px;" type="button" class="btn btn-info"  aria-expanded="false">
                <a href="<?php echo e(route('gestionnaire.etudiant.dissociePlusieurs')); ?>" style="text-decoration: none; color: black;"><i class="bi bi-chevron-contract"></i>&nbsp;dissocié Plusieurs Etudiant</a>
            </button>

            <!------------------------ Formulaire -------------------------->
            
            <!---------------------- Table --------------------------------->
            <table class="table table-hover caption-top" style="box-shadow: 5px 10px 20px rgba(0,0,0, 0.3);">
                <caption>Liste des cours</caption>
                <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>intitule</th>
                    <th>created_at</th>
                    <th>update_at</th>
                    <th>Créer séance</th>
                    <th>séances pour un cours</th>
                    <th>Associé étudiant</th>
                    <th>Voir étudiant associé cours</th>
                    <th>Associé enseignant</th>
                    <th>Voir ens. associé au cours</th>
                </tr>
                </thead>
                <?php $__empty_1 = true; $__currentLoopData = $cours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($cour ->id); ?></td>
                        <td><?php echo e($cour ->intitule); ?></td>
                        <td><?php echo e($cour ->created_at); ?></td>
                        <td><?php echo e($cour ->updated_at); ?></td>
                        <td><a type="button" class="btn btn-primary" href="<?php echo e(route('gestionnaire.seance.create',['id'=>$cour->id])); ?>"><i class="bi bi-plus-circle"></i>&nbsp;Créer séance</a></td>
                        <td><a type="button" class="btn btn-dark" href="<?php echo e(route('gestionnaire.seance.afficheListSeanceUncours',['id'=>$cour->id])); ?>"><i class="bi bi-eye-fill"></i>&nbsp;Voir la liste</a></td>
                        <td><a type="button" class="btn btn-info" href="<?php echo e(route('gestionnaire.etudiant.associe', [$cour->id])); ?>"><i class="bi bi-chevron-contract"></i>&nbsp;Associé etudiant</a></td>
                        <td><a type="button" class="btn btn-success" href="<?php echo e(route('gestionnaire.seance.showListAssociationEtudaint', [$cour->id])); ?>"><i class="bi bi-eye-fill"></i>&nbsp;Voir Etudiant</a></td>
                        <td><a type="button" class="btn btn-info" href="<?php echo e(route('gestionnaire.associer.enseignant', [$cour->id])); ?>"><i class="bi bi-chevron-contract"></i>&nbsp;Associer Enseignant</a></td>
                        <td><a type="button" class="btn btn-success" href="<?php echo e(route('gestionnaire.seance.showListAssociationEnseignant', [$cour->id])); ?>"><i class="bi bi-eye-fill"></i>&nbsp;Voir Enseignant</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p>Aucun cours trouvé !</p>
                <?php endif; ?>
            </table><br><br><br><br><br><br>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modele', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projet2022\resources\views/gestionnaire/Seances/homeSeance.blade.php ENDPATH**/ ?>