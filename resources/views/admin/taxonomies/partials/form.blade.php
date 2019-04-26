<div class="form-group">
    <label for="title">Наименование</label>
    <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp"
           value="{{ $taxonomy->title ?? "" }}">
    <small id="titleHelp" class="form-text text-muted">Тут типо подсказка для манагеров и тупых</small>
</div>

<div class="form-group">
    <label for="parent_id">URL</label>
    <input type="text" name="slug" class="form-control" id="title" aria-describedby="titleHelp"
           value="{{ $taxonomy->slug ?? "" }}">
</div>

<div class="row">
    <div class="form-group col-8">
        <label for="parent_id">Родительская категория</label>
        <select id="parent_id" class="form-control" name="parent_id">
            <option value="0">-- без родительской --</option>
            @include('admin.taxonomies.partials.form_item_list', ['taxonomies' => $taxonomies, 'parent' => $taxonomy['parent_id'] ])
        </select>
    </div>
    <div id="dfdf" class="form-group col-4">
        <label for="color_input">Цвет</label>
            <div id="color" class="input-group" title="Выберите цвет">
                <span class="input-group-prepend">
                    <span class="input-group-text colorpicker-input-addon" id="inputGroupPrepend" ><i></i></span>
                    <input id="color_input" type="text" name="color" class="form-control input-lg" value="{{ $taxonomy->color ?? "" }}" aria-describedby="inputGroupPrepend"/>
                </span>
        </div>
    </div>
</div>

@push('add_styles')
    <link href="{{ asset('css/components/bootstrap-colorpicker.css') }}" rel="stylesheet">
@endpush
@push('add_scripts')
    <script>
        $(function () {
            $('#color').colorpicker({});
        });
    </script>
@endpush