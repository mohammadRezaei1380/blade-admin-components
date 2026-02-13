<!--begin::Input row-->
<div class="d-flex fv-row">
@foreach($items as $key => $item)
    <!--begin::Radio-->
        <div class="form-check form-check-custom form-check-solid" style="margin: 1.2rem 1.4rem 0px 0px">
            <!--begin::Input-->
            <input class="form-check-input" name="{{$name}}" type="radio"
                   id="_{{$name}}_{{$item['id']}}"
                   value="{{$item['id']}}"
                   @if(isset($activeKey) && $activeKey == $item['id'] )  checked="checked" @endif
            />
            <!--end::Input-->
            <!--begin::Label-->
            <label class="form-check-label" for="_{{$name}}_{{$item['id']}}">
                <div class="fw-bolder text-gray-800">{{ $item['title'] }}</div>
                @if(isset($item['description']))  <div class="text-gray-600">{{ $item['description'] }}</div> @endif
            </label>
            <!--end::Label-->
        </div>
        <!--end::Radio-->
    @endforeach

</div>
<!--end::Input row-->
