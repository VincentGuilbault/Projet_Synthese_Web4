<div class="form-group">
    <label for="categorie_id">Groupe de catégorie</label>
    <select name="categorie_id" id="categorie_id">
        @foreach ($categories as $categorie)
            @if (isset($categorie) && $categorie->id == $categorie->categorie_id)
                <option value="{{ $categorie->id }}" selected>{{ $categorie->nom }}</option>
            @else
                <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
            @endif
        @endforeach
    </select>
</div>
