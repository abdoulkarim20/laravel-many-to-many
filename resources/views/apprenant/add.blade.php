@include("layouts.menu.header")

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/form.css')}}">

</head>

<body>
    <div class="container container-div">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Ajouter un Apprenant</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('enregistrer-apprenant')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="matricule" class="form-label"></label>
                                <input type="text" class="form-control" id="matricule" name="matricule"
                                    placeholder="Entrer votre matricule">

                            </div>
                            <div class="mb-3">
                                <label for="nom" class="form-label"></label>
                                <input type="text" class="form-control" id="nom" name="nom"
                                    placeholder="Entrer votre nom">

                            </div>
                            <div class="mb-3">
                                <label for="prenom" class="form-label"></label>
                                <input type="text" class="form-control" id="prenom" name="prenom"
                                    placeholder="Entrer votre prenom">

                            </div>
                            <div class="selec">
                                <label for="niveau" class="form-label"></label>
                                <select class="form-select" name="niveau">
                                    <option selected class="form-group">Sélectionner le niveau
                                    </option>
                                    <option value="Débutnt">Débutnt</option>
                                    <option value="Avancer">Avancé</option>
                                    <option class="form-group"></option>
                                </select>
                            </div>
                            <div class="selec">
                                <label>Formation</label>
                                <select class="form-select" name="formation_id[]" multiple="">
                                    <option selected class="form-group"></option>
                                    @foreach ($formations as $formation)
                                    <option class="form-group" value="{{$formation->id}}">{{$formation->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="submit-btn-form">
                                <button type="submit" class="btn btn-success">Enregistrer</button>
                                <button class="mx-3 btn btn-primary"><a href="{{route('liste-apprenant')}}"
                                        class="btn-retour">Retour</a></button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </div>

    </div>
</body>

</html>

@include("layouts.menu.footer")