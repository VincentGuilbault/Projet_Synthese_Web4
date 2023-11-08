<div class="form-group">
    <label for="nom">Nom de la categorie</label>
    <span><input type="text" name="nom" id="nom" class="form-control" placeholder="Nom de la catégorie" value="{{$categorie->nom}}"></span>
</div>
{{-- Faire un select pour les groupes de catégories --}}
@include('categorie.selectGroupe')

