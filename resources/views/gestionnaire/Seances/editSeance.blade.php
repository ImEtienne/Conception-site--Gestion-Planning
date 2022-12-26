@extends('modele')

@section('title', 'Modifier la séance')

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
    <!------------------------ Formulaire ------------------------>
    <div class="container-sm">
        <h3>Modifier une séance de cours</h3>
        <form action='{{route('gestionnaire.seance.edit',['id'=>$seances->id])}}' method="POST">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Cours_id</label>
                <input type="text" class="form-control" name="cours" id="formGroupExampleInput" readonly value="{{old('cours_id',$seances->cours_id)}}">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Date de début : </label>
                <input type="datetime-local" class="form-control" name="date_debut" id="formGroupExampleInput" value="{{old('date_debut',$seances->date_debut)}}">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Date de fin : </label>
                <input type="datetime-local" class="form-control" name="date_fin" id="formGroupExampleInput" value="{{old('date_fin',$seances->date_fin)}}">
            </div>

            <input class="btn btn-primary" type="submit" name="Modifier" value="Modifier">
            <input class="btn btn-danger" type="submit" name="Annuler" value="Annuler">
            @csrf
        </form><br><br><br>
    </div>
@endsection
