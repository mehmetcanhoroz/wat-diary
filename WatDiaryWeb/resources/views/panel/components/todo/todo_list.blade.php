<section class="col-lg-{{$column_size ?? 12}} connectedSortable">
    <!-- TO DO List -->
    <div class="box box-primary">
        <div class="box-header">
            <i class="ion ion-clipboard"></i>

            <h3 class="box-title">To Do List</h3>

            <div class="box-tools pull-right">
                @if(!empty($see_more) && $see_more)
                    <a href="{{route('panel.todo.index')}}"><span><i class="ion ion-eye"></i> @lang('pagination.see_more')</span></a>
                @endif
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
            <ul class="todo-list">
                @foreach ($todos as $todo)
                    @component('panel.components.todo.todo_row', ['todo' => $todo])
                    @endcomponent
                @endforeach
            </ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix no-border">
            <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
        </div>
    </div>
    <!-- /.box -->
</section>
