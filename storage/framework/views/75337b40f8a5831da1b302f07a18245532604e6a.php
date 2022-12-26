<?php $__env->startSection('modele'); ?>

<?php $__env->startSection('contents'); ?>
    <div class="container-sm">
        <h3>Modification du mot de passe - Admin</h3>
        <form action="<?php echo e(route('admin.account.edit')); ?>" method="POST">
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Ancien Mot de passe</label>
                <input type="password" class="form-control" name="mdp_old"  id="formGroupExampleInput2" placeholder="ancien mot de passe.." required>
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nouveau mot de passe</label>
                <input type="password" class="form-control" name="mdp"  id="formGroupExampleInput2" placeholder="nouveau mot de passe.." required>
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Confirmer</label>
                <input type="password" class="form-control" name="mdp_confirmation"  id="formGroupExampleInput2" placeholder="Confirmer mot de passe.." required>
            </div>
            <input class="btn btn-primary" type="submit" name="Supprimer" value="Confirmer">
            <?php echo csrf_field(); ?>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('modele', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projet2022\resources\views/admin/account/editMdp.blade.php ENDPATH**/ ?>