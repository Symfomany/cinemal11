<h3>Lister nos categories</h3>


@if(count($mesCategories) > 0)
<p> Nombre de catégories
    {{ count($mesCategories) }} </p>

@foreach($mesCategories as $categorie)
        <p>{{ $categorie['title'] }}
        {{ $categorie['description'] }} </p>
@endforeach

@else
    <p>Aucune catégorie</p>
@endif