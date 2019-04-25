<li data-id="{{$todo->id}}" class="{{$todo->status ? 'done' : ''}}">
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
    <input type="checkbox" value="" name="{{$todo->id}}" {{$todo->status ? 'checked' : ''}}>
    <span class="text">{{$todo->title}}</span>
<!--style="    display: block;    overflow: hidden;    white-space: nowrap;    text-overflow: ellipsis;">{{$todo->title}}</span>-->
    <small class="label label-{{$todo->type}}"><i class="fa fa-clock-o"></i> 4 hours</small>
    <div class="tools">
        <i class="fa fa-edit"></i>
        <i class="fa fa-trash-o"></i>
    </div>
</li>
