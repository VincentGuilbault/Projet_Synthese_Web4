<div class="form-group">
    <label for="nom">Nom de la MRC</label>
    <span><input type="text" name="nom" id="nom" class="form-control" placeholder="Nom de la MRC" value="{{$mrc->nom}}"></span>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <span><input type="text" name="description" id="description" class="form-control" placeholder="Description" value="{{$mrc->description}}"></span>
</div>
<div class="form-group">
    <label for="texte">Texte à intégrer</label>
    <span><input type="text" name="texte" id="texte" class="form-control" placeholder="Texte à intégrer" value="{{$mrc->texte}}"></span>
</div>
<div class="form-group">
    <label for="region">Région reconnue</label>
    <span><input type="text" name="region" id="region" class="form-control" placeholder="Région reconnue" value="{{$mrc->region}}"></span>
</div>
<div class="form-group">
    <label for="carte">Carte de la MRC</label>
    <span><input type="text" name="carte" id="carte" class="form-control" placeholder="Carte de la MRC" value="{{$mrc->carte}}"></span>
</div>
