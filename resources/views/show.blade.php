<ul>
<li style="list-style: none"> <img src="{{$book ->image}}" alt=""> </li>
<li>Titolo: {{$book ->title}}</li>
<li>Autore: {{$book ->author}}</li>
<li>Anno di pubblicazione: {{$book ->year}}</li>
<li>Casa editrice: {{$book ->edition}}</li>
<li>Genere: {{$book ->genre}}</li>
<li>Numero di pagine: {{$book ->pages}}</li>
</ul>

<form action="{{route("books.destroy", $book->id)}}" method="POST">

    @method("DELETE")
    @csrf
    <input type="submit" value="Cancella">

</form>