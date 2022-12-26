<?php $__env->startSection('title', 'Gestion des Cours'); ?>

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
    <!--------------------------- END NAVBAR ----------------------------------->
    <?php if (! (empty($cours))): ?>
        <div class="container-sm">
            <!-----------------------------Btn Back------------------------------>
            <a class="btn btn-info" style="margin-top:20px;" href="<?php echo e(URL::previous()); ?>"><i class="bi bi-arrow-left-circle-fill"></i> Back</a>

            <!------------------------------btn ajoute Cours-------------------------->
            <a type="buttom" style="margin-top:20px;" class="btn btn-info" href="<?php echo e(route('admin.cours.add')); ?>"><i class="bi bi-plus-circle-fill"></i> Ajoute Cours</a>

            <!---------------------------- Barre de recherche --------------->
            <form action="<?php echo e(route('admin.cours.search')); ?>" class="d-flex" style="margin-top:20px;">
                <input class="form-control me-2" type="search" name="q" value="<?php echo e(request()->q ?? ''); ?>" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary"  type="submit">Recherche</button>
            </form>

            <!---------------------- Table --------------------------------->
            <table class="table table-hover caption-top" style="box-shadow: 5px 10px 20px rgba(0,0,0, 0.3);">
                <caption>Liste des cours</caption>
                <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>intitule</th>
                    <th>created_at</th>
                    <th>update_at</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
                <?php $__empty_1 = true; $__currentLoopData = $cours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($cour ->id); ?></td>
                        <td><?php echo e($cour ->intitule); ?></td>
                        <td><?php echo e($cour ->created_at); ?></td>
                        <td><?php echo e($cour ->updated_at); ?></td>
                        <td><a type="button" class="btn btn-primary" href="<?php echo e(route('admin.cours.edit', ['id'=>$cour->id])); ?>"><i class="bi bi-pencil-square"></i> Modifier</a></td>
                        <td><a type="button" class="btn btn-danger" href="<?php echo e(route('admin.cours.delete', ['id'=>$cour->id])); ?>"><i class="bi bi-trash3"></i> Supprimer</a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p> Aucun cours trouvé ! </p>
                <?php endif; ?>
            </table><br><br><br><br><br><br>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modele', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projet2022\resources\views/admin/cours/index.blade.php ENDPATH**/ ?>