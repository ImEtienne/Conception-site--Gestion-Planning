<?php $__env->startSection('title', 'Page confirmation - Suppression étudiant'); ?>

<?php $__env->startSection('contents'); ?>
    <div class="container-sm">
        <h3>Voulez-vous supprimer <?php echo e($etudiants->nom); ?> <?php echo e($etudiants->prenom); ?> ?</h3>
        <form action='<?php echo e(route('gestionnaire.etudiant.delete',['id'=>$etudiants->id])); ?>' method="POST">
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" id="formGroupExampleInput2" placeholder="nom..." value="<?php echo e(old('nom',$etudiants->nom)); ?>">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Prenom</label>
                <input type="text" class="form-control" name="prenom" id="formGroupExampleInput2" placeholder="prenom.." value="<?php echo e(old('prenom',$etudiants->prenom)); ?>">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Noet</label>
                <input type="text" class="form-control" name="noet" id="formGroupExampleInput2" placeholder="numéro étudiant.." value="<?php echo e(old('noet',$etudiants->noet)); ?>">
            </div>

            <input class="btn btn-primary" type="submit" name="Supprimer" value="Supprimer">
            <input class="btn btn-danger" type="submit" name="Annuler" value="Annuler">
            <?php echo csrf_field(); ?>
        </form><br><br><br><br><br><br>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modele', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projet2022\resources\views/gestionnaire/delete.blade.php ENDPATH**/ ?>