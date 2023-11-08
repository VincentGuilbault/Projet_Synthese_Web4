<div class="form-group">
    <label for="entreprise_id">Entreprise</label>
    <select name="entreprise_id" id="entreprise_id">
        @foreach ($entreprises as $entreprise)
            @if (isset($entreprise) && $entreprise->id == $entreprise->entreprise_id)
                <option value="{{ $entreprise->id }}" selected>{{ $entreprise->nom }}</option>
            @else
                <option value="{{ $entreprise->id }}">{{ $entreprise->nom }}</option>
            @endif
        @endforeach
    </select>
</div>

