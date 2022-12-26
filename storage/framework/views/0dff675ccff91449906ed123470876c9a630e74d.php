<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('contents'); ?>
    <div class="center">
        <h1>login</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" name="login" value="<?php echo e(old('login')); ?>" required>
                <span></span>
                <label> Login </label>
            </div>

            <div class="txt_field">
                <input type="password" name="mdp" required>
                <span></span>
                <label> password </label>
            </div>

            <div class="pass">Forgot Password ?</div>
            <input type="submit" value="Connexion">
            <div class="signup_link">
                <p>Not a member ? <a href="<?php echo e(route('register')); ?>">Signup</a></p>
            </div>
            <?php echo csrf_field(); ?>
        </form>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('modele', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projet2022\resources\views/auth/login.blade.php ENDPATH**/ ?>