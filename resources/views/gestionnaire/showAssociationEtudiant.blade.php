@extends('modele')

@section('title', 'ajout étudiant')

@section('contents')
    <!------------------------ Nav--------------------------------->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-md">
            <a class="navbar-brand mb-0 h1" href="{{route('gestionnaire.home')}}"><span style="background-color:#ffa400; padding: 0px 5px;">Ma</span> page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('gestionnaire.home')}}"><i class="bi bi-house-door-fill"></i>&nbsp;Accueil</a>
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

    @unless(empty($etudiants))
        <div class="container-sm">
            <!----------------------------Back-------------------------------->
            <a class="btn btn-info" href="{{route('gestionnaire.seance.index')}}"><i class="bi bi-arrow-left-circle-fill"></i>&nbsp;Back</a>

            <!-------------------------Boutton Ajoute ----------------------->
            <a type="buttom" style="margin-top:20px; margin-bottom: 20px;" class="btn btn-info" href="{{route('gestionnaire.etudiant.add')}}"><i class="bi bi-plus-circle-fill"></i>&nbsp;Ajouter Etudiant</a>

            <!---------------------------- Barre de recherche --------------->
            <form action="{{route('gestionnaire.etudiant.search')}}" class="d-flex">
                <input class="form-control me-2" type="search" name="q" value="{{request()->q ?? ''}}" placeholder="Search..." aria-label="Search">
                <button class="btn btn-outline-primary"  type="submit">&nbsp;Recherche</button>
            </form>

            <!---------------------- Table ----------------------------------->
            <table class="table table-hover caption-top" style="box-shadow: 5px 10px 20px rgba(0,0,0, 0.3);">
                <caption>Liste des étudiants associés à un cours</caption>
                <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Noet</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th>Dissocier</th>
                    <th>Liste de présences détaillée (par étudiant)</th>
                </tr>
                </thead>
                @forelse($etudiants as $etudiant)
                    <tr>
                        <td>{{$etudiant->id}}</td>
                        <td>{{$etudiant->nom}}</td>
                        <td>{{$etudiant->prenom}}</td>
                        <td>{{$etudiant->noet}}</td>
                        <td>{{$etudiant->created_at}}</td>
                        <td>{{$etudiant->updated_at}}</td>
                        <td><a type="button" class="btn btn-warning" href="{{route('gestionnaire.dissocier', ['id'=>$etudiant->id])}}"><i class="bi bi-trash3-fill"></i>&nbsp;Dissocier</a></td>
                        <td><a type="button" class="btn btn-dark" href="{{route('gestionnaire.listePresenceDetaille', ['id'=>$etudiant->id])}}"><i class="bi bi-eye"></i>&nbsp;Voir les détailles</a></td>
                    </tr>
                @empty
                    <p>Aucun utilisateur Etudiant trouvé !</p>
                @endforelse
            </table><br><br><br><br>
        </div>
    @endunless
@endsection

