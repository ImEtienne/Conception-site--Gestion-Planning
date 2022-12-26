@extends('modele')

@section('title', 'Enseignant: Modification du Nom & Prenom')

@section('contents')
    <!--------------------- NavBar ------------------------------->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-md">
            <a class="navbar-brand mb-0 h1" href="{{route('enseignant.home')}}"><span style="background-color:#ffa400; padding: 0px 5px;">Ma</span> page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('enseignant.home')}}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nothing</a>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('enseignant.account.edit')}}">Changer son mot de passe</a></li>
                            <li><a class="dropdown-item" href="{{route('enseignant.account.editNomPrenom', ['id'=>Auth::user()->id])}}">Modifier son nom/prénom</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!------------------------------Formulaire--------------------------->
    <div class="container-sm">
        <h3>Formulaire de modifaction du Nom & Prenom - Enseignant</h3>
        <form action="{{route('enseignant.account.editNomPrenom', ['id'=>$users->id])}}" method="POST">

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" id="formGroupExampleInput2" placeholder="nom.." value="{{old('nom',$users->nom)}}">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Prenom</label>
                <input type="text" class="form-control" name="prenom" id="formGroupExampleInput2" placeholder="prenom.." value="{{old('prenom',$users->prenom)}}">
            </div>

            <input class="btn btn-primary" type="submit" name="Supprimer" value="Confirmer">
            <input class="btn btn-danger" type="submit" name="Annuler" value="Annuler">
            @csrf
        </form><br><br><br><br><br><br>
    </div>
@endsection
