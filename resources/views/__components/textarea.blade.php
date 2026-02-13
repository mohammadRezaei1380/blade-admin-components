<!--begin::Input-->
<textarea class="form-control form-control-solid" rows="4"
          @if(isset($placeholder)) placeholder="{{$placeholder}}"  @endif
          name="{{$name}}">{{ (isset($value)) ?  old($name, $value) :  old($name) }}</textarea>
<!--end::Input-->
@error($name)
<p class="text-danger">{{$message}}</p>
@enderror
