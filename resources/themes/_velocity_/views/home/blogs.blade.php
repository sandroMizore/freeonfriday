@php
 $blogs = app('Webkul\CMS\Repositories\CmsRepository')->fofGetBlogs(3);
@endphp

<div class="fof-blogs-container row">
  @foreach($blogs as $blog)
    @php
      $text_cut = mb_substr(strip_tags($blog->html_content), 0, 100, "UTF-8");
      $text_explode = explode(" ", $text_cut);
      unset($text_explode[count($text_explode) - 1]);
      $text_implode = implode(" ", $text_explode);
      $desc = $text_implode."...";

      $xpath = new DOMXPath(@DOMDocument::loadHTML($blog->html_content));
      $image = $xpath->evaluate("string(//img/@src)");
    @endphp
    <div class="col col-lg-4 col-md-12 blog-container">
      <div class="blog-image-container" style="background: url('{{ $image }}') no-repeat center center / cover;">
        <a href="/page/{{ $blog->url_key }}"></a>
      </div>
      <div class="blog-title">
        <a href="/page/{{ $blog->url_key }}">{{ $blog->page_title }}</a>
      </div>
      <div class="blog-desc">
        {{ $desc }}
      </div>
    </div>
  @endforeach
</div>
