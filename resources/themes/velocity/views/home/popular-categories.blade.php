<?php
$categories = [];
foreach (app('Webkul\Category\Repositories\CategoryRepository')->getVisibleCategoryTree(core()->getCurrentChannel()->root_category_id) as $category) {
  if($category->slug)
    array_push($categories, $category);
}

?>
<div class="container-fluid popular-categories-container fof-main-categories">


    <div class="row">
        @foreach ($categories as $slug)
            @php
                $categoryDetails = app('Webkul\Category\Repositories\CategoryRepository')->findByPath($slug->url_path);
            @endphp

            @if ($categoryDetails)
                <div class="col-lg-3 col-md-12 popular-category-wrapper">
                    <div class="card col-12 no-padding">
                        <div class="category-image">
                          <a href="/{{ $categoryDetails->url_path }}">
                            <span class="fof-category-overlay">
                            </span>
                            <span class="fof-category-image"><img src="{{ asset('/storage/' . $categoryDetails->image) }}" /></span>
                            <span class="fof-category-name">{{ $categoryDetails->name }}</span>
                          </a>
                        </div>

                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
