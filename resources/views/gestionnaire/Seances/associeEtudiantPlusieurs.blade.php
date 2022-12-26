
@extends('modele')

@section('title', 'Association de l\'étudiant à un cours')

@section('contents')
    <!----------------------------NAVBAR-------------------------->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-md">
            <a class="navbar-brand mb-0 h1" href="{{route('gestionnaire.home')}}"><span style="background-color:#ffa400; padding: 0px 5px;">Ma</span> page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('gestionnaire.home')}}">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('gestionnaire.etudiant.index')}}">Gestion des Etudiant</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('gestionnaire.seance.index')}}">Gestion des séances des cours</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('gestionnaire.account.edit')}}">Changer son mot de passe</a></li>
                            <li><a class="dropdown-item" href="{{route('gestionnaire.account.editNomPrenom',['id'=>Auth::user()->id])}}">Modifier son nom/prénom</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>

    <!----------------------------------Formulaire--------------------------->
    <div class="container-sm">
        <!----------------------------Back-------------------------------->
        <a class="btn btn-info" href="{{route('gestionnaire.seance.index')}}"><i class="bi bi-arrow-left-circle-fill"></i> Back</a>

        <h3>Associé plusieurs étudiants d’un coup pour la séance.</h3>
        <form method="POST">

            <select name="id">
                <option value="">--Choix un d'un cours--</option>
                @foreach($cours as $cour)
                    <option title="{{$cour->id}}" value="{{$cour->id}}">{{$cour->intitule}}</option>
                @endforeach
            </select>

            <legend>--choisir les etudiants--</legend>
            @foreach($etudiants as $etudiant)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{$etudiant->id}}" name="id_etudiant[]" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault" title="{{$etudiant->id}}">{{$etudiant->nom}}{{$etudiant->prenom}} </label>
                </div>
            @endforeach

            <input class="btn btn-success" type="submit" name="associer" value="Associer">
            @csrf
        </form>
    </div>
@endsection

