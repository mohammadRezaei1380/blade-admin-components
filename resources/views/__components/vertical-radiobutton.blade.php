<!--begin::Options-->
<div class="mt-5">
@foreach($items as $key => $item)


        <!--begin:Option-->
        <label class="d-flex   mb-5 cursor-pointer align-items-start"  for="_{{$name}}_{{$item['id']}}">

            <!--begin:Input-->
            <span class="form-check form-check-custom form-check-solid">
			        <input class="form-check-input" type="radio"
                           id="_{{$name}}_{{$item['id']}}"
                           name="{{$name}}"
                           value="{{$item['id']}}"
                           @if(isset($activeKey) && $item['id'] == $activeKey)  checked="checked" @endif
                    />
			    </span>
            <!--end:Input-->


            <!--begin:Label-->
            <span class="d-flex align-items-center me-2" style="margin-right: 5px">

                    <!--begin::Description-->
					<span class="d-flex flex-column">
					    <span class="text-gray-800 text-hover-primary fs-5">{{$item['title']}}</span>
					    <span class="fs-6 text-muted">{{(isset($item['description'])) ? $item['description'] : ''}}</span>
				    </span>
                <!--end:Description-->
		        </span>
            <!--end:Label-->

        </label>
        <!--end::Option-->


 @endforeach

</div>
<!--end::Options-->
@error($name)
<p class="text-danger">{{$message}}</p>
@enderror
