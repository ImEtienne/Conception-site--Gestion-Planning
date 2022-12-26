<?php $__env->startSection('title', 'Enseignant: Modification du Nom & Prenom'); ?>

<?php $__env->startSection('contents'); ?>
    <div class="container-sm">
        <h3>Formulaire de modifaction du Nom & Prenom - Enseignant</h3>
        <form acrion="<?php echo e(route('enseignant.account.editNomPrenom', ['id'=>$users->id])); ?>" method="POST">

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" id="formGroupExampleInput2" placeholder="nom.." value="<?php echo e(old('nom',$users->nom)); ?>">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Prenom</label>
                <input type="text" class="form-control" name="prenom" id="formGroupExampleInput2" placeholder="prenom.." value="<?php echo e(old('prenom',$users->prenom)); ?>">
            </div>

            <input class="btn btn-primary" type="submit" name="Supprimer" value="Confirmer">
            <input class="btn btn-danger" type="submit" name="Annuler" value="Annuler">
            <?php echo csrf_field(); ?>
        </form><br><br><br><br><br><br>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modele', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projet2022\resources\views/enseignant/account/editNomPrenom.blade.php ENDPATH**/ ?>