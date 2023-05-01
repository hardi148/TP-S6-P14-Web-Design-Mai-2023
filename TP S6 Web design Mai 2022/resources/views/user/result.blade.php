<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Tojo va vous aider a decouvrir l'intelligence artificielle : Définition,articles et FAQ">
  <title>L'intelligence artificielle par Tojo - Définition,articles et FAQ</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container my-5">
    <div class="row">
      <div class="col-md-8">
        @foreach($articles as $rows) <!-- boucle pour afficher 12 cartes -->
        <div class="col-md-3">
          <div class="card">
            <img src="{{ $rows->img }}" width="100px" height="300px" class="card-img-top" alt="...">
            <div class="card-body">
              <h1 class="card-title">{{ $rows->titre }}</h1>
              <h2 class="my-3">Auteur : {{ $rows->auteur }}</h2>
              <a href="{{ url('/article') }}/{{Str::slug($rows->titre) }}-{{ $rows->idarticle }}-index.html" class="btn btn-primary">Voir plus</a>
            </div>
          </div>
        </div>
  @endforeach
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNVe1Xw"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>
</html>
