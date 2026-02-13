
<select class="form-control select2"
        id="kt_select2_{{ $name }}"
        @if(isset($isMultiple) && $isMultiple)
            multiple="multiple"  name="{{ $name }}[]"
        @else
            name="{{ $name }}"
        @endif
        >
    @if(isset($title))
        <option >{{$title}}</option>
    @endif
    @foreach($items as $item)
        <option value="{{$item['id']}}"
        {{ (isset($selectedItems) && in_array($item['id'], $selectedItems)) ? 'selected' : '' }}>{{$item['title']}}</option>
    @endforeach
</select>
@error($name)
<p class="text-danger">{{$message}}</p>
@enderror

<script>
    $(document).ready(function () {

        // Format selection
        $('#kt_select2_{{ $name }}').select2({
            placeholder: "انتخاب {{ (isset($title))  ? $title : '' }}",
            tags: {{isset($isMultiple) && $isMultiple}},
        });

    })
</script>



