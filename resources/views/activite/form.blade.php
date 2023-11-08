<div class="form-group">
    <label for="nom">Nom de l'activité</label>
    <span><input type="text" name="nom" id="nom" class="form-control" placeholder="Nom de l'activité" value="{{$activite->nom}}"></span>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <span><input type="text" name="description" id="description" class="form-control" placeholder="Description" value="{{$activite->description}}"></span>
</div>
<div class="form-group">
    <label for="prix">Prix</label>
    <span><input type="text" name="prix" id="prix" class="form-control" placeholder="Prix" value="{{$activite->prix}}"></span>
</div>
<div class="form-group">
    <label for="date_activite">Date de l'activité</label>
    <span><input type="text" name="date_activite" id="date_activite" class="form-control" placeholder="Date de l'activité" value="{{$activite->date_activite}}"></span>
</div>
{{-- @include('activite.selectEntreprise') --}}
