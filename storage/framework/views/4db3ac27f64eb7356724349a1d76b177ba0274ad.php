<?php $__env->startSection('title', 'Page d\'accueil'); ?>

<?php $__env->startSection('redirect'); ?>
    <?php if(auth()->guard()->check()): ?>
        <?php switch($type = Auth::user()->type):
            case ('admin'): ?>
                <meta http-equiv="refresh" content="0; URL=http://localhost/admin" />
            <?php break; ?>
            <?php case ('gestionnaire'): ?>
                <meta http-equiv="refresh" content="0; URL=http://localhost/gestionnaire" />
            <?php break; ?>
            <?php case ('enseignant'): ?>
                <meta http-equiv="refresh" content="0; URL=http://localhost/enseignant" />
            <?php break; ?>
            <?php default: ?>
                <meta http-equiv="refresh" content="0; URL=http://localhost/home" />
            <?php break; ?>
        <?php endswitch; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
    <div class="container-css">
        <nav>
            <h1></a><span class="f-letter">Ma</span> Page</h1>
            <ul>
                <li><a  style="color:#ddd;" href="/">Accueil</a></li>
                <li><a  style="color:#ddd; "href="#">Nous contacter</a></li>
                <li><a  style="color:#ddd;" href="#">À propos</a></li>
            </ul>
        </nav>

        <div class="side-container">
            <p class="para">Bienvenue à</p>
            <h2 class="planning">Planning</h2>
            <h4 class="paraLorem">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>

            <div class="row-css">
                <?php if(auth()->guard()->guest()): ?>
                    <a href="<?php echo e(route('login')); ?>">Connexion</a>
                    <a href="<?php echo e(route('register')); ?>">S'inscrire</a>
                <?php endif; ?>

                <span>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            <br />Recusandae veritatis ad cupiditate libero sequi iusto.
          </span>
            </div>
        </div>
    </div>
    <!--<h1 style="font-size: 20px; font-weight:bold;">Planning Enseignant</h1>-->
   
<?php $__env->stopSection(); ?>
















<?php echo $__env->make('modele', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projet2022\resources\views/home.blade.php ENDPATH**/ ?>