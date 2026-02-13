<!--begin::Checkboxes-->

<div class="d-flex align-items-center">
    @foreach($items as $item)
    <!--begin::Checkbox-->
    <label class="form-check form-check-custom form-check-solid me-10">
        <input class="form-check-input h-20px w-20px"
               type="checkbox"
               name="{{$name}}[]"
               value="{{$item['id']}}"
               @if(isset($item['isActive']) && $item['isActive'])  checked="checked" @endif
               />
        <span class="form-check-label fw-bold">{{$item['title']}}</span>
    </label>
    <!--end::Checkbox-->
    @endforeach
</div>
<!--end::Checkboxes-->

@error($name)
<p class="text-danger">{{$message}}</p>
@enderror

