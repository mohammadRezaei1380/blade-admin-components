
<select class="form-control selectpicker"
        id="kt_select2_{{$name}}"
        name="{{$name}}">
    @foreach($items as $item)
        <option value="{{$item['id']}}"
        {{ (isset($selectedItem) && $item['id'] == $selectedItem )
                ? 'selected="selected"'
                : '' }}>{{$item['title']}}</option>
    @endforeach
</select>
@error($name)
<p class="text-danger">{{$message}}</p>
@enderror

<script>

    $(document).ready(function () {
        $('#kt_select2_{{$name}}').selectpicker();
    });

</script>

