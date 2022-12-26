<?php $__env->startSection('title', 'SignUp'); ?>

<?php $__env->startSection('contents'); ?>
    <div class="center">
        <h1>SignUp</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" name="login" value="<?php echo e(old('login')); ?>" required>
                <span></span>
                <label> Login </label>
            </div>

            <div class="txt_field">
                <input type="text" name="nom" value="<?php echo e(old('nom')); ?>" required>
                <span></span>
                <label> Nom </label>
            </div>

            <div class="txt_field">
                <input type="text" name="prenom" value="<?php echo e(old('prenom')); ?>" required>
                <span></span>
                <label> Prénom </label>
            </div>

            <div class="txt_field">
                <input type="password" name="mdp" required>
                <span></span>
                <label> password </label>
            </div>

            <div class="txt_field">
                <input type="password" name="mdp_confirmation" required>
                <span></span>
                <label>Confirmation password </label>
            </div>

            <input type="submit" value="S'inscrire">
            <?php echo csrf_field(); ?>
        </form>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('modele', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projet2022\resources\views/auth/register.blade.php ENDPATH**/ ?>