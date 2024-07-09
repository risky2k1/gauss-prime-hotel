<div class="form-group mb-3">
    <label for="widget-name">{{ trans('core/base::forms.name') }}</label>
    <input type="text" class="form-control" name="name" value="{{ $config['name'] }}">
</div>
<div class="form-group mb-3">
    <label for="widget-name">{{ trans('Menu') }}</label>
    {!! Form::customSelect('menu_slug', $menus, $config['menu_slug'], ['class' => 'form-control select-full']) !!}
</div>
