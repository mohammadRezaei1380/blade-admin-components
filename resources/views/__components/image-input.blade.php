<!--begin::Image input-->

<div class="image-input image-input-empty image-input-outline" data-kt-image-input="true"
     style="background-image: url({{asset('admin-assets/media/svg/files/blank-image.svg')}});margin: 10px" >
    <!--begin::Preview existing avatar-->
    <div class="image-input-wrapper w-125px h-125px"
         @if(isset($imageUrl)) style="background-image: url({{ $imageUrl }})" @endif ></div>
    <!--end::Preview existing avatar-->
    <!--begin::Label-->
    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
           data-kt-image-input-action="change" data-bs-toggle="tooltip" title="تغییر تصویر">
        <i class="bi bi-pencil-fill fs-7"></i>
        <!--begin::Inputs-->
        <input type="file" name="{{$name}}"   />
        <input type="hidden" name="{{$name}}_remove" />
        <!--end::Inputs-->
    </label>
    <!--end::Label-->
    <!--begin::Cancel-->
    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
          data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="بازنشانی تصویر">
				            <i class="bi bi-x fs-2"></i>
					    </span>
    <!--end::Cancel-->
    <!--begin::Remove-->
    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
          data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="حذف تصویر">
						    <i class="bi bi-x fs-2"></i>
				        </span>
    <!--end::Remove-->
</div>
<!--end::Image input-->
<!--begin::Hint-->
{{--<div class="form-text">فایل های مجاز: png, jpg, jpeg.</div>--}}
<!--end::Hint-->

@error($name)
<p class="text-danger">{{$message}}</p>
@enderror
