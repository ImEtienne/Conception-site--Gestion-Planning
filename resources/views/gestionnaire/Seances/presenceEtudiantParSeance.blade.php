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

    @unless(empty($presences))
        <div class="container-sm">
            <!----------------------------Back-------------------------------->
            <a class="btn btn-info" href="{{URL::previous()}}"><i class="bi bi-arrow-left-circle-fill"></i>&nbsp;Back</a>

            <!---------------------- Table ----------------------------------->
            <table class="table table-hover caption-top" style="box-shadow: 5px 10px 20px rgba(0,0,0, 0.3);">
                <caption>Liste des présences (des étudiants) par séance.</caption>
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Cours_id</th>
                    <th>date_debut</th>
                    <th>date_fin</th>
                    <th>etudiant_id</th>
                </tr>
                </thead>
                @forelse($presences as $presence)
                    <tr>
                        <td>{{$seances->id}}</td>
                        <td>{{$seances->cours_id}}</td>
                        <td>{{$seances->date_debut}}</td>
                        <td>{{$seances->date_fin}}</td>
                        <td>{{$presence->etudiant_id}}</td>
                    </tr>
                @empty
                    <p>Aucune présence trouvée !</p>
                @endforelse
            </table><br><br><br><br>
        </div>
    @endunless
@endsection


