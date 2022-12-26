<?php $__env->startSection('title', 'Modifier le cours'); ?>

<?php $__env->startSection('contents'); ?>
    <div class="container-sm">
        <h3>Voulez-vous supprimer le cours de : <?php echo e($cours->intitule); ?> ?</h3>
        <form action='<?php echo e(route('admin.cours.delete',['id'=>$cours->id])); ?>' method="POST">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Intitule</label>
                <input type="text" class="form-control" name="intitule" id="formGroupExampleInput" placeholder="login..." value="<?php echo e(old('intitule',$cours->intitule)); ?>">
            </div>

            <input class="btn btn-primary" type="submit" name="Supprimer" value="Supprimer">
            <input class="btn btn-danger" type="submit" name="Annuler" value="Annuler">
            <?php echo csrf_field(); ?>
        </form><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modele', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projet2022\resources\views/admin/cours/delete.blade.php ENDPATH**/ ?>