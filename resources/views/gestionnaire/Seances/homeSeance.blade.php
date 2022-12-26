@extends('modele')

@section('title', 'Gestion des séances des cours')

@section('contents')
    <!---------------------- Nav------------------------->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-md">
            <a class="navbar-brand mb-0 h1" href="{{route('gestionnaire.home')}}"><span style="background-color:#ffa400; padding: 0px 5px;">Ma</span>Page</a>
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

    @unless(empty($cours))
        <div class="container-sm">
            <!-------------------------Liste des séances-------------------->
            <button title="Liste des séances de cours" style="margin: 0px 0px 10px 0px;" type="button" class="btn btn-info"  aria-expanded="false">
                <a href="{{route('gestionnaire.seance.afficheList')}}" style="text-decoration: none; color: black;"><i class="bi bi-eye-fill"></i>&nbsp;Voir liste séances</a>
            </button>

            <!-------------------------Liste des cours associés à des enseignants-------------------->
            <button title="Liste des séances de cours" style="margin: 0px 0px 10px 0px;" type="button" class="btn btn-info"  aria-expanded="false">
                <a href="{{route('gestionnaire.liste.enseignant')}}" style="text-decoration: none; color: black;"><i class="bi bi-chevron-contract"></i>&nbsp;Liste des cours associés à des enseignants</a>
            </button>

            <!-------------------------Associer des étudiants au cours (plusieurs d’un coup).-------------------->
            <button title="Liste des séances de cours" style="margin: 0px 0px 10px 0px;" type="button" class="btn btn-info"  aria-expanded="false">
                <a href="{{route('gestionnaire.etudiant.associePlusieurs')}}" style="text-decoration: none; color: black;"><i class="bi bi-chevron-contract"></i>&nbsp;Associé Plusieurs Etudiant</a>
            </button>

            <!-------------------------Dissocier étudiants plusieurs au cours (plusieurs d’un coup).-------------------->
            <button title="Liste des séances de cours" style="margin: 0px 0px 10px 0px;" type="button" class="btn btn-info"  aria-expanded="false">
                <a href="{{route('gestionnaire.etudiant.dissociePlusieurs')}}" style="text-decoration: none; color: black;"><i class="bi bi-chevron-contract"></i>&nbsp;dissocié Plusieurs Etudiant</a>
            </button>

            <!------------------------ Formulaire -------------------------->
            {{--<form action="{{route('gestionnaire.seance.afficheListSeanceUncours')}}">
                <h6>Liste des séances pour un cours</h6>
                <select name="cours" style="margin-bottom: 5px;" class="form-select" aria-label="Default select example">
                        <option value="" selected>--Veuillez choisir le cours--</option>
                    @foreach($cours as $cour)
                        <option title="{{$cour->id}}" value="{{$cour->id}}">{{$cour->intitule}}</option>
                    @endforeach
                </select>
                <input class="btn btn-primary" type="submit" name="liste" value="Voir la liste">
            </form>--}}
            <!---------------------- Table --------------------------------->
            <table class="table table-hover caption-top" style="box-shadow: 5px 10px 20px rgba(0,0,0, 0.3);">
                <caption>Liste des cours</caption>
                <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>intitule</th>
                    <th>created_at</th>
                    <th>update_at</th>
                    <th>Créer séance</th>
                    <th>séances pour un cours</th>
                    <th>Associé étudiant</th>
                    <th>Voir étudiant associé cours</th>
                    <th>Associé enseignant</th>
                    <th>Voir ens. associé au cours</th>
                </tr>
                </thead>
                @forelse($cours as $cour)
                    <tr>
                        <td>{{$cour ->id}}</td>
                        <td>{{$cour ->intitule}}</td>
                        <td>{{$cour ->created_at}}</td>
                        <td>{{$cour ->updated_at}}</td>
                        <td><a type="button" class="btn btn-primary" href="{{route('gestionnaire.seance.create',['id'=>$cour->id])}}"><i class="bi bi-plus-circle"></i>&nbsp;Créer séance</a></td>
                        <td><a type="button" class="btn btn-dark" href="{{route('gestionnaire.seance.afficheListSeanceUncours',['id'=>$cour->id])}}"><i class="bi bi-eye-fill"></i>&nbsp;Voir la liste</a></td>
                        <td><a type="button" class="btn btn-info" href="{{route('gestionnaire.etudiant.associe', [$cour->id])}}"><i class="bi bi-chevron-contract"></i>&nbsp;Associé etudiant</a></td>
                        <td><a type="button" class="btn btn-success" href="{{route('gestionnaire.seance.showListAssociationEtudaint', [$cour->id])}}"><i class="bi bi-eye-fill"></i>&nbsp;Voir Etudiant</a></td>
                        <td><a type="button" class="btn btn-info" href="{{route('gestionnaire.associer.enseignant', [$cour->id])}}"><i class="bi bi-chevron-contract"></i>&nbsp;Associer Enseignant</a></td>
                        <td><a type="button" class="btn btn-success" href="{{route('gestionnaire.seance.showListAssociationEnseignant', [$cour->id])}}"><i class="bi bi-eye-fill"></i>&nbsp;Voir Enseignant</a></td>
                    </tr>
                @empty
                    <p>Aucun cours trouvé !</p>
                @endforelse
            </table><br><br><br><br><br><br>
        </div>
    @endunless
@endsection
