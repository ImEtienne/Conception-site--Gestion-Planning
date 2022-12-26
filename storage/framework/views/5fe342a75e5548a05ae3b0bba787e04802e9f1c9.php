<?php $__env->startSection('title', 'ajout étudiant'); ?>

<?php $__env->startSection('contents'); ?>
    <!------------------------ Nav--------------------------------->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-md">
            <a class="navbar-brand mb-0 h1" href="<?php echo e(route('gestionnaire.home')); ?>"><span style="background-color:#ffa400; padding: 0px 5px;">Ma</span> page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('gestionnaire.home')); ?>"><i class="bi bi-house-door-fill"></i> Accueil</a>
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

    <?php if (! (empty($etudiants))): ?>
        <div class="container-sm">
            <!-------------------------Boutton Ajoute ----------------------->
            <a type="buttom" style="margin-top:20px; margin-bottom: 20px;" class="btn btn-info" href="<?php echo e(route('gestionnaire.etudiant.add')); ?>"><i class="bi bi-plus-circle-fill"></i> Ajouter Etudiant</a>

            <!---------------------------- Barre de recherche --------------->
            <form action="<?php echo e(route('gestionnaire.etudiant.search')); ?>" class="d-flex">
                <input class="form-control me-2" type="search" name="q" value="<?php echo e(request()->q ?? ''); ?>" placeholder="Search..." aria-label="Search">
                <button class="btn btn-outline-primary"  type="submit"> Recherche</button>
            </form>

            <!---------------------- Table ----------------------------------->
            <table class="table table-hover caption-top" style="box-shadow: 5px 10px 20px rgba(0,0,0, 0.3);">
                <caption>Liste des étudiants</caption>
                <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Noet</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
                <?php $__empty_1 = true; $__currentLoopData = $etudiants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etudiant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($etudiant->id); ?></td>
                        <td><?php echo e($etudiant->nom); ?></td>
                        <td><?php echo e($etudiant->prenom); ?></td>
                        <td><?php echo e($etudiant->noet); ?></td>
                        <td><?php echo e($etudiant->created_at); ?></td>
                        <td><?php echo e($etudiant->updated_at); ?></td>
                        <td><a type="button" class="btn btn-primary" href="<?php echo e(route('gestionnaire.etudiant.edit',['id'=>$etudiant->id])); ?>"><i class="bi bi-pencil-square"></i>&nbsp;Modifier</a></td>
                        <td><a type="button" class="btn btn-danger" href="<?php echo e(route('gestionnaire.etudiant.delete', ['id'=>$etudiant->id])); ?>"><i class="bi bi-trash3-fill"></i>&nbsp;Supprimer</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p> Aucun utilisateur Etudiant trouvé ! </p>
                <?php endif; ?>
            </table>
            <?php echo e($etudiants -> links()); ?>

        </div><br><br><br><br>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modele', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projet2022\resources\views/gestionnaire/index.blade.php ENDPATH**/ ?>