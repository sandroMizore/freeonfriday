@inject ('toolbarHelper', 'Webkul\Product\Helpers\Toolbar')

{!! view_render_event('bagisto.shop.products.list.toolbar.before') !!}

<div class="catalog__row">
    <div class="catalog__filter">
        <div class="catalog__link-all">все <i class="ic-arrow-down"></i> </div>
        <div class="catalog__filter-wrap">
            <a href="#" class="catalog__link">Для бороды</a>
            <a href="#" class="catalog__link">Для волос</a>
            <a href="#" class="catalog__link">Мастхев</a>
            <a href="#" class="catalog__link">Подарок</a>
        </div>
    </div>

    <select name="" id="select-catalog" data-placeholder='Бестселлеры' class="select-catalog">
        <option value=""></option>
        <option value="Lorem ipsum dolor Lorem ipsum dolor ">Lorem ipsum dolor
        </option>
        <option value="adipisicing elit">adipisicing elit</option>
        <option value="Dolores fuga ipsum">Dolores fuga ipsum</option>
        <option value="consectetur adipisicing">consectetur adipisicing</option>
        <option value="dicta odio at nam">dicta odio at nam</option>
    </select>
</div>

{!! view_render_event('bagisto.shop.products.list.toolbar.after') !!}
