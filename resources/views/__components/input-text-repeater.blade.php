<!--begin::Input group-->
<div id="{{$repeaterName}}_repeater_wrapper"
     class="row g-9 mb-6 mt-7" >

    <!--begin::Repeater-->
    <div id="kt_{{$repeaterName}}_repeater_advanced">
        <!--begin::Form group-->
        <div class="form-group">

            @include('admin.__components.label', ['value' => $title])



            <div data-repeater-list="{{$repeaterName}}">
                @if(isset($entityInstanceValues))

                    @foreach($entityInstanceValues as  $entityInstanceValue)

                        <div data-repeater-item>
                            @if(isset($entityInstanceValue[$inputName]) && !is_null($entityInstanceValue[$inputName]))

                                    <div class="form-group row mb-5">
                                        <div class="col-lg-10">
                                            @include('admin.__components.input-text', [
                                                       'name' => $inputName,
                                                       'value' => $entityInstanceValue[$inputName],
                                                       'placeholder' => $inputTitle
                                                    ])
                                        </div>

                                        <div class="col-md-2">
                                            <a href="javascript:;" data-repeater-delete
                                               class="btn btn-sm btn-light-danger">
                                                <i class="la la-trash-o fs-3"></i>حذف
                                            </a>
                                        </div>
                                    </div>
                            @else
                                <div data-repeater-item>
                                    <div class="form-group row mb-5">
                                        <div class="col-lg-10">
                                            @include('admin.__components.input-text', [
                                                        'name' => $inputName,
                                                        'placeholder' => $inputTitle
                                                     ])
                                        </div>

                                        <div class="col-md-2">
                                            <a href="javascript:;" data-repeater-delete
                                               class="btn btn-sm btn-light-danger">
                                                <i class="la la-trash-o fs-3"></i>حذف
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                    @endforeach
                @else
                    <div data-repeater-item>
                        <div class="form-group row mb-5">
                            <div class="col-lg-10">
                                @include('admin.__components.input-text', [
                                            'name' => $inputName,
                                            'placeholder' => $inputTitle
                                         ])
                            </div>

                            <div class="col-md-2">
                                <a href="javascript:;" data-repeater-delete
                                   class="btn btn-sm btn-light-danger">
                                    <i class="la la-trash-o fs-3"></i>حذف
                                </a>
                            </div>
                        </div>
                    </div>
                @endif


            </div>
        </div>
        <!--end::Form group-->

        <!--begin::Form group-->
        <div class="form-group">
            <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                <i class="la la-plus"></i>افزودن
            </a>
        </div>
        <!--end::Form group-->
    </div>
    <!--end::Repeater-->

</div>
<!--end::Input group-->
@error($inputName)
<p class="text-danger">{{$message}}</p>
@enderror



<script>
    $('#kt_{{$repeaterName}}_repeater_advanced').repeater({
        initEmpty: false,


        show: function () {
            $(this).slideDown();

        },


        hide: function (deleteElement) {
            if(confirm('آیااز حذف این مورد اطمینان دارید ؟')) {
                $(this).slideUp(deleteElement);
            }
        },

        ready: function(){

        }
    });
</script>
