<?php $__env->startSection('title', 'Gestion des Utilisateurs'); ?>

<?php $__env->startSection('contents'); ?>
    <!--------------------- NavBar --------------------------->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-sm">
            <a class="navbar-brand mb-0 h1" href="<?php echo e(route('admin.home')); ?>"><span style="background-color:#ffa400; padding: 0px 5px;">Ma</span> page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('admin.home')); ?>"><i class="bi bi-house-door-fill"></i> Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('admin.users.index')); ?>">Utilisateur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('admin.cours.index')); ?>">Cours</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php if (! (empty($users))): ?>

        <div class="container-sm">
            <!-----------------------------Btn Back------------------------------>
            <a class="btn btn-info" href="<?php echo e(URL::previous()); ?>"><i class="bi bi-arrow-left-circle-fill"></i> Back</a>
        <!--------------------- FILTRE ------------------------>
            <div class="btn-group">
                <button style="margin: 20px 0px 20px 0px;" type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-filter-left"></i> Filtre
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo e(route('admin.users.indexAll')); ?>">Tous</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('admin.users.indexEnseignant')); ?>">Enseignant</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('admin.users.indexGestionnaire')); ?>">Gestionnaire</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('admin.users.index')); ?>">Type null</a></li>
                </ul>
            </div>
        <!---------------------- Create User ----------------------->

            <div class="btn-group">
                <button style="margin: 20px 0px 20px 0px;" type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle"></i> Créer un utilisateur
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo e(route('admin.user.createAdmin')); ?>">Administrateur</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('admin.user.createEnseignant')); ?>">Enseignant</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(route('admin.user.createGestionnaire')); ?>">Gestionnaire</a></li>
                </ul>
            </div>

        <!---------------------------- Barre de recherche --------------->
            <form action="<?php echo e(route('admin.users.search')); ?>" class="d-flex">
                <input class="form-control me-2" type="search" name="q" value="<?php echo e(request()->q ?? ''); ?>" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary"  type="submit">Recherche</button>
            </form>

        <!---------------------------------- Table ---------------------------->
        <table class="table table-hover caption-top" style="box-shadow: 5px 10px 20px rgba(0,0,0, 0.3);">
            <caption>Liste des utilisateurs</caption>
            <thead class="table-dark">
            <tr>
                <th>id</th>
                <th>Login</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Type</th>
                <th>Modifier & Validé</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($user ->id); ?></td>
                    <td><?php echo e($user ->login); ?></td>
                    <td><?php echo e($user ->nom); ?></td>
                    <td><?php echo e($user ->prenom); ?></td>
                    <td><?php echo e($user ->type); ?></td>
                    <td><a type="button" class="btn btn-primary" href="<?php echo e(route('admin.users.edit', ['id'=>$user->id])); ?>"><i class="bi bi-pencil-square"></i> Modifier</a></td>
                    <td><a type="button" class="btn btn-danger" href="<?php echo e(route('admin.users.delete', ['id'=>$user->id])); ?>"><i class="bi bi-trash3"></i> Supprimer</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p> Aucun utilisateur trouvé ! </p>
            <?php endif; ?>
        </table>
        </div><br><br><br><br>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modele', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projet2022\resources\views/admin/users/index.blade.php ENDPATH**/ ?>