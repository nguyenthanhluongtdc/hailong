<select autocomplete="off" name="district" class="wide">
    @forelse(@$districts as $row)
        <option {{ old('district') == @$row->id ? 'selected' : ''}} value="{{ @$row->id }}">{{ @$row->name }}</option>
    @empty
    @endforelse
</select>