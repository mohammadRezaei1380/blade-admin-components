<div class="form-group">
    <div id="kt_tree_{{$name}}" class="tree-demo"></div>
    <div id="{{$name}}_selected"></div>
</div>
@error($name)
<p class="text-danger">{{$message}}</p>
@enderror

<script>

    function {{$name}}jsonParse(json_content) {
        json_content = json_content.replace(/&quot;/g, '\"');
        json_content = json_content.replace(/\r\n/g, '\\r\\n');
        return JSON.parse(json_content);
    }
</script>

<script>
    "use strict";
    let {{$name}}JsTreesItems = '{{$items}}';

    {{$name}}JsTreesItems = {{$name}}jsonParse({{$name}}JsTreesItems);

    let {{$name}}KTTreeViewJsTreesItems = function () {
        let _{{$name}} = function () {
            $('#kt_tree_{{$name}}').jstree({
                'plugins': ["wholerow", "checkbox", "types"],
                'core': {
                    "themes": {
                        "responsive": true
                    },
                    multiple: {!! (isset($isMultiple)) ? $isMultiple: false !!},
                    'data': {{$name}}JsTreesItems,
                },
                checkbox: {
                    three_state: false, // to avoid that fact that checking a node also check others
                },
                "types": {
                    "default": {
                        "icon": "fa fa-folder text-warning"
                    },
                    "file": {
                        "icon": "fa fa-file  text-warning"
                    }
                },
            })

            @if(isset($isEdit) && $isEdit)
                .bind("loaded.jstree", function (event, data) {
                    let nodesSelected = $("#kt_tree_{{$name}}").jstree("get_selected", true);
                    let {{$name}}KTTreeViewHtml = '';
                    $.each(nodesSelected, function (index, value) {
                        {{$name}}KTTreeViewHtml += '<input type="hidden" name="{{$name}}[]" value="' + value.id + '">';
                    });
                    $('#{{$name}}_selected').html({{$name}}KTTreeViewHtml);

                })
                @endif
                .on("select_node.jstree , deselect_node.jstree", function (evt, data) {
                        let {{$name}}Selected = $("#kt_tree_{{$name}}").jstree("get_selected", true);
                        let html = '';
                        $.each({{$name}}Selected, function (index, value) {
                            html += '<input type="hidden" name="{{$name}}[]" value="' + value.id + '">';
                        });

                        $('#{{$name}}_selected').html(html)
                    }
                );
        };
        return {
            init: function () {
                _{{$name}}();
            }
        };
    }();
    jQuery(document).ready(function () {
        {{$name}}KTTreeViewJsTreesItems.init();
    });

</script>
