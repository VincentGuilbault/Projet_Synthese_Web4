<div class="form-group">
    <label for="nom">Nom du produit</label>
    <span><input type="text" name="nom" id="nom" class="form-control" placeholder="Nom du produit" value="{{$produit->nom}}"></span>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <span><input type="text" name="description" id="description" class="form-control" placeholder="Description" value="{{$produit->description}}"></span>
</div>
<div class="form-group">
    <label for="prix">Prix</label>
    <span><input type="text" name="prix" id="prix" class="form-control" placeholder="Prix" value="{{$produit->prix}}"></span>
</div>
@include('produit.selectEntreprise')


