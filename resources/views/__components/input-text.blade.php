<input class="form-control form-control-lg form-control-solid"
       type="{{ (isset($type)) ? $type : 'text' }}" style="text-align:right"
       name="{{ $name }}"
       @if(isset($placeholder)) placeholder="{{ $placeholder }}" @endif

       @if(isset($value)) value="{{old($name,$value)}}" @else value="{{old($name)}}" @endif
       autocomplete="off" aria-label="{{$name}}" @if(isset($readOnly)) readOnly @endif />

@if(isset($hastNumberFormatLabel) && $hastNumberFormatLabel)
    <label class="form-label fs-6 fw-bolder text-dark" id="_{{ $name }}_number_format" style="padding: 1rem;"></label>
    <script>
        $(document).ready(function () {
            function {{ $name }}Separate(Number) {
                Number += '';
                Number = Number.replace(',', '');
                x = Number.split('.');
                y = x[0];
                z = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(y))
                    y = y.replace(rgx, '$1' + ',' + '$2');
                return y + z;
            }

            $('input[name={{ $name }}]').on('input', function () {
                let _{{ $name }}_value = $(this).val();
                let _{{ $name }}_number_formated = {{ $name }}Separate(_{{ $name }}_value);
                $("#_{{ $name }}_number_format").html(_{{ $name }}_number_formated + " تومان ");
            })
            @if(isset($value))
            let _{{ $name }}_edit_value = $("input[name={{ $name }}]").val();
            let _{{ $name }}_edit_number_formated = {{$name }}Separate(_{{ $name }}_edit_value);
            $("#_{{ $name }}_number_format").html(_{{ $name }}_edit_number_formated + " تومان ");
            @endif
        })
    </script>
@endif
<p id="{{$name}}" class="validation-error-msg text-danger" style="display: none;"></p>
@error($name)
<p class="text-danger">{{$message}}</p>
@enderror

