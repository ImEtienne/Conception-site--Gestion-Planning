@extends('modele')

@section('title', 'Modifier le cours')

@section('contents')
    <div class="container-sm">
        <h3>Voulez-vous supprimer le cours de : {{$cours->intitule}} ?</h3>
        <form action='{{route('admin.cours.delete',['id'=>$cours->id])}}' method="POST">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Intitule</label>
                <input type="text" class="form-control" name="intitule" id="formGroupExampleInput" placeholder="login..." value="{{old('intitule',$cours->intitule)}}">
            </div>

            <input class="btn btn-primary" type="submit" name="Supprimer" value="Supprimer">
            <input class="btn btn-danger" type="submit" name="Annuler" value="Annuler">
            @csrf
        </form><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
@endsection
