<div class="form-group">
    <label for="nom">Nom de l'entreprise</label>
    <span><input type="text" name="nom" id="nom" class="form-control" placeholder="Nom de l'entreprise" value="{{$entreprise->nom}}"></span>
</div>
<div class="form-group">
    <label for="adresse">Adresse de l'entreprise</label>
    <span><input type="text" name="adresse" id="adresse" class="form-control" placeholder="Adresse de l'entreprise" value="{{$entreprise->adresse}}"></span>
</div>
<div class="form-group">
    <label for="ville">Ville</label>
    <span><input type="text" name="ville" id="ville" class="form-control" placeholder="Ville" value="{{$entreprise->ville}}"></span>
</div>
<div class="form-group">
    <label for="email">Couriel</label>
    <span><input type="text" name="email" id="email" class="form-control" placeholder="Couriel" value="{{$entreprise->email}}"></span>
</div>
<div class="form-group">
    <label for="code_postal">Code postal</label>
    <span><input type="text" name="code_postal" id="code_postal" class="form-control" placeholder="Code postal" value="{{$entreprise->code_postal}}"></span>
</div>
<div class="form-group">
    <label for="num_telephone">Téléphone de l'entreprise</label>
    <span><input type="text" name="num_telephone" id="num_telephone" class="form-control" placeholder="Téléphone de l'entreprise" value="{{$entreprise->num_telephone}}"></span>
</div>
<div class="form-group">
    <label for="url_photo">Lien pour une photo</label>
    <span><input type="text" name="url_photo" id="url_photo" class="form-control" placeholder="Url photo" value="{{$entreprise->url_photo}}"></span>
</div>
<div class="form-group">
    <label for="url_logo">Lien pour le logo</label>
    <span><input type="text" name="url_logo" id="url_logo" class="form-control" placeholder="Url logo" value="{{$entreprise->url_photo}}"></span>
</div>
<div class="form-group">
    <label for="site_web">Lien pour le site web</label>
    <span><input type="text" name="site_web" id="site_web" class="form-control" placeholder="Lien pour le site web" value="{{$entreprise->site_web}}"></span>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <span><input type="text" name="description" id="description" class="form-control" placeholder="Description" value="{{$entreprise->description}}"></span>
</div>
{{-- @include("entreprise.selectCategorie") --}}
{{-- <div class="form-group">
    <label for="categorie_id">Categorie id</label>
    <span><input type="text" name="categorie_id" id="categorie_id" class="form-control" placeholder="categorie_id" value="{{$entreprise->categorie_id}}"></span>
</div> --}}

