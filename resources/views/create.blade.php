@section('Accueil','resultat')
@section('main')
  <h1>Insertion musique</h1>

  <form class="flexcenterform flexwrap" method="post" action="/music/insert">
    {{ csrf_field() }}
        <label for="name">Nom de l'artiste </label>
        <input type="text" name="nom de l'artiste"><br>

        <label for="firstname">Prenom de l'artiste </label>
          <input type="text" name="prenom de l'artiste"><br>

        <label for="title">Titre du cd </label>
        <input type="text" name="titre du cd"><br>

        <label for="year">Année </label>
        <input type="number" name="year"><br>

          @foreach(musics as $music)
              <option value="{{ $music->id}}">{{ $music->music}}</option>
          @endforeach
        </select>

        <input type="submit" value="Envoyer">
  </form>
@endsection
