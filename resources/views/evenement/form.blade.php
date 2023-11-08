<div class="form-group">
    <label for="nom">Nom de l'évènement</label>
    <span><input type="text" name="nom" id="nom" class="form-control" placeholder="Nom de l'évènement" value="{{$evenement->nom}}"></span>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <span><input type="text" name="description" id="description" class="form-control" placeholder="Description" value="{{$evenement->description}}"></span>
</div>
<div class="form-group">
    <label for="prix">Prix de l'évènement</label>
    <span><input type="text" name="prix" id="prix" class="form-control" placeholder="Prix de l'évènement" value="{{$evenement->prix}}"></span>
</div>
<div class="form-group">
    <label for="emplacement">Emplacement de l'évènement</label>
    <span><input type="text" name="emplacement" id="emplacement" class="form-control" placeholder="Emplacement de l'évènement" value="{{$evenement->emplacement}}"></span>
</div>
<div class="form-group">
    <label for="ville">Ville</label>
    <span><input type="text" name="ville" id="ville" class="form-control" placeholder="Ville" value="{{$evenement->ville}}"></span>
</div>
<div class="form-group">
    <label for="date_debut">Date début de l'évènement</label>
    <span><input type="text" name="date_debut" id="date_debut" class="form-control" placeholder="Date début de l'évènement" value="{{$evenement->date_debut}}"></span>
</div>
<div class="form-group">
    <label for="date_fin">Date fin de l'évènement</label>
    <span><input type="text" name="date_fin" id="date_fin" class="form-control" placeholder="Date fin de l'évènement" value="{{$evenement->date_fin}}"></span>
</div>
{{-- @include('evenement.selectEntreprise') --}}

