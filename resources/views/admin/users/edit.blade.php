@extends('modele')

@section('title', 'Modication et validation')

@section('contents')

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
            <a class="navbar-brand mb-0 h1" href="{{route('admin.home')}}"><span style="background-color:#ffa400; padding: 0px 5px;">Ma</span> page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('admin.home')}}">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"  href="{{route('admin.users.index')}}">Utilisateur</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.cours.index')}}">Cours</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('gestionnaire.home')}}">Partie gestionnaire</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('enseignant.home')}}">Partie enseignant</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('admin.account.edit')}}">Changer son mot de passe</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.account.editNomPrenom',['id'=>Auth::user()->id])}}">Modifier son nom/prénom</a></li>
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
                    <form action="{{route('admin.users.edit',['id'=>$users->id])}}" method="POST">
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Nom</label>
                            <input type="text" class="form-control" name="nom" id="formGroupExampleInput2" placeholder="nom..." value="{{old('nom',$users->nom)}}">
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Prenom</label>
                            <input type="text" class="form-control" name="prenom" id="formGroupExampleInput2" placeholder="prenom.." value="{{old('prenom',$users->prenom)}}">
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

                        {{--<div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">type</label>
                            <input type="text" class="form-control" name="type" id="formGroupExampleInput2" placeholder="admin|enseignant|gestionnaire..">
                        </div>--}}

                        <input class="btn btn-success" type="submit" name="Accepter" value="Accepter">
                        <input class="btn btn-danger" type="submit" name="Refuser" value="Refuser">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--------------------------------- END FORM ------------------------------------>

@endsection
