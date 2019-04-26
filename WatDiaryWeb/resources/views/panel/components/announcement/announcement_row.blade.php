<li data-id="{{$announcement->id}}" class="item">
    <div class="product-info">
        <a href="#{{$announcement->id}}" class="product-title">{{$announcement->title}} <span
                    class="label label-success pull-right">{{ucfirst($announcement->type)}}</span></a>
        <span class="product-description announcement-description">{{strip_tags($announcement->content)}}</span>
    </div>
</li>
<!-- /.item -->
