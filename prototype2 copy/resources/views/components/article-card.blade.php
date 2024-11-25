<div class="article-card">
<li>
    <li> - :<a href="articles/{{$article['id']}}">{{ $article['title'] }}</a></li>
    <hr>    
</ul>

<form action="" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
</div>