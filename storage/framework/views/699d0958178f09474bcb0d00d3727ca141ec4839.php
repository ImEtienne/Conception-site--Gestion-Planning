<!doctype html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $__env->yieldContent('title'); ?></title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Boostrap ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

        <!-- CSS perso -->
        <link href="style.css" rel="stylesheet" type="text/css"/>

        <!-- Redirection des pages -->
        <?php echo $__env->yieldContent('redirect'); ?>
    </head>
    <body>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous"></script>

            <!-- Messages Flash -->
            <?php $__env->startSection('Messages_flash'); ?>
                <?php if(session()->has('etat')): ?>
                    <div class="position-relative" style="z-index:1;">
                        <div class="position-absolute top-0 start-50 translate-middle-x">
                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="40" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/>
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                <div>
                                    <p class="etat">
                                        <?php echo e(session()->get('etat')); ?> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endif; ?>
            <?php echo $__env->yieldSection(); ?>

            <!--error validation-->
            <?php $__env->startSection('validation'); ?>
                <?php if($errors->any()): ?>
                    <div class="position-relative" style="z-index:1;">
                        <div class="position-absolute top-0 start-50 translate-middle-x">
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                                <div>
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php echo $__env->yieldSection(); ?>

        <!-- Contents Page-->
        <?php echo $__env->yieldContent('contents'); ?>

        <!------------- Footer ------------------->
        <?php $__env->startSection('footer'); ?>
            <?php if(auth()->guard()->check()): ?>
                <footer class="footer mt-auto py-3 bg-light fixed-bottom">
                    <div class="container d-flex">
                        <p class="text-muted">Vous êtes connecté en tant que <?php echo e(Auth::user()->nom); ?> <?php echo e(Auth::user()->prenom); ?> | <?php echo e(Auth::user()->type); ?>

                            <a style="margin-left:10px;" class="btn btn-outline-secondary" href="<?php echo e(route('logout')); ?>">Deconnexion</a>
                        </p>
                        <p style="position: absolute; right: 90px;" class="text-muted"> Copyright &copy; <script> document.write(new Date().getFullYear());</script>, Projet</p>
                    </div>
                </footer>
            <?php endif; ?>
        <?php echo $__env->yieldSection(); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    </body>
</html>
<?php /**PATH C:\wamp64\www\projet2022\resources\views/modele.blade.php ENDPATH**/ ?>