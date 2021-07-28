<select autocomplete="off" name="ward" class="wide">
    @forelse(@$wards as $row)
        <option {{ old('ward') == @$row->id ? 'selected' : ''}} value="{{ @$row->id }}">{{ @$row->name }}</option>
    @empty
    @endforelse
</select>