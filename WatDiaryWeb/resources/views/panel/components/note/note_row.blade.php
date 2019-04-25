<li data-id="{{$note->id}}" class="item">
    <div class="product-info">
        <a href="javascript:void(0)" class="product-title">{{$note->title}}</a>
        <span class="product-description">{{strip_tags($note->content)}}</span>
    </div>
</li>
<!-- /.item -->
