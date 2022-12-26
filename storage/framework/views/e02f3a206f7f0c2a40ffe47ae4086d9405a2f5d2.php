<?php $__env->startSection('title', 'Modication et validation'); ?>

<?php $__env->startSection('contents'); ?>

    <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav>-->
    <!--------------------- NavBar ------------------------------->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-sm">
            <a class="navbar-brand mb-0 h1" href="<?php echo e(route('admin.home')); ?>"><span style="background-color:#ffa400; padding: 0px 5px;">Ma</span> page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('admin.home')); ?>">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"  href="<?php echo e(route('admin.users.index')); ?>">Utilisateur</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('admin.cours.index')); ?>">Cours</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('gestionnaire.home')); ?>">Partie gestionnaire</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('enseignant.home')); ?>">Partie enseignant</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo e(route('admin.account.edit')); ?>">Changer son mot de passe</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('admin.account.editNomPrenom',['id'=>Auth::user()->id])); ?>">Modifier son nom/prénom</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>

    <!---------------------- FORM ------------------------------->
    <div class="d-flex flex-column h-90">
        <div class="position-relative">
            <div class="container-sm">
                <div class="position-absolute top-50 start-50 translate-middle-x">
                    <p>Formulaire de modification</p>
                    <form action="<?php echo e(route('admin.users.edit',['id'=>$users->id])); ?>" method="POST">
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Nom</label>
                            <input type="text" class="form-control" name="nom" id="formGroupExampleInput2" placeholder="nom..." value="<?php echo e(old('nom',$users->nom)); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Prenom</label>
                            <input type="text" class="form-control" name="prenom" id="formGroupExampleInput2" placeholder="prenom.." value="<?php echo e(old('prenom',$users->prenom)); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Type</label>
                            <select name="type">
                                <option value="">--Veuillez choisir un type--</option>
                                <option value="admin">Administrateur</option>
                                <option value="enseignant">Enseignant</option>
                                <option value="gestionnaire">Gestionnaire</option>
                            </select>
                        </div>

                        

                        <input class="btn btn-success" type="submit" name="Accepter" value="Accepter">
                        <input class="btn btn-danger" type="submit" name="Refuser" value="Refuser">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--------------------------------- END FORM ------------------------------------>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('modele', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projet2022\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>