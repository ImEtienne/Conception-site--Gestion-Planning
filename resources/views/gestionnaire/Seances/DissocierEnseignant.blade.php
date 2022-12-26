
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

        <h3>Dissocié un enseignant à un cours</h3>
        <form action='{{route('gestionnaire.dissocier.enseignant')}}' method="POST">
            <select name="id">
                <option value="">--Please choose an option--</option>
                @foreach($cours as $cour)
                    <option title="{{$cour->id}}" value="{{$cour->id}}">{{$cour->intitule}}</option>
                @endforeach
            </select>
            {{--<div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">id</label>
                <input type="text" class="form-control" name="id" id="formGroupExampleInput" readonly value="{{old('id', $cours->id)}}">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">intitule</label>
                <input type="text" class="form-control" name="intitule" id="formGroupExampleInput" readonly value="{{old('intitule', $cours->intitule)}}">
            </div>--}}

            {{--<div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Cours_id</label>
                <input type="text" class="form-control" name="cours" id="formGroupExampleInput" readonly value="{{old('cours_id',$seances->cours_id)}}">
            </div>--}}

            <select name="id_users">
                <option value="">--Please choose an option--</option>
                @foreach($users as $user)
                    <option title="{{$user->id}}" value="{{$user->id}}">{{$user->nom}} {{$user->prenom}}</option>
                @endforeach
            </select>
            <input class="btn btn-success" type="submit" name="Dissocier" value="Dissocier">
            @csrf
        </form>
    </div>
@endsection
