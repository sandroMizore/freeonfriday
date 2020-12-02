<?php
$categories = [];
foreach (app('Webkul\Category\Repositories\CategoryRepository')->getVisibleCategoryTree(core()->getCurrentChannel()->root_category_id as $category)) {
  if($category->slug)
    array_push($categories, $category);
}
?>
<div class="container-fluid popular-categories-container">
    <card-list-header heading="{{ __('velocity::app.home.popular-categories') }}">
    </card-list-header>

    <div class="row">
        @foreach ($categories as $slug)
            @php
                $categoryDetails = app('Webkul\Category\Repositories\CategoryRepository')->findByPath($slug);
            @endphp

            @if ($categoryDetails)
                <div class="col-lg-3 col-md-12 popular-category-wrapper">
                    <div class="card col-12 no-padding">
                        <div class="category-image">
                            <img src="{{ asset('/storage/' . $categoryDetails->image) }}" />
                        </div>

                        <div class="card-description">
                            <h3 class="fs20">{{ $categoryDetails->name }}</h3>

                            <ul class="font-clr pl30">
                                @foreach ($categoryDetails->children as $subCategory)
                                    <li>
                                        <a href="{{ $subCategory->slug }}" class="remove-decoration normal-text">
                                            {{ $subCategory->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
