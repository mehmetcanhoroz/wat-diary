<li data-id="{{$announcement->id}}" class="item">
    <div class="product-info">
        <a href="#{{$announcement->id}}" class="product-title">{{$announcement->title}}</a>
        <span class="product-description">{{strip_tags($announcement->content)}}</span>
    </div>
</li>
<!-- /.item -->
