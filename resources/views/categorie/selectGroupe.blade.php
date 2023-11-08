<div class="form-group">
    <label for="groupe_categorie_id">Groupe de catégorie</label>
    <select name="groupe_categorie_id" id="groupe_categorie_id">
        @foreach ($groupeCategories as $groupeCategorie)
            @if (isset($categorie) && $groupeCategorie->id == $categorie->groupe_categorie_id)
                <option value="{{ $groupeCategorie->id }}" selected>{{ $groupeCategorie->nom }}</option>
            @else
                <option value="{{ $groupeCategorie->id }}">{{ $groupeCategorie->nom }}</option>
            @endif
        @endforeach
    </select>
</div>
