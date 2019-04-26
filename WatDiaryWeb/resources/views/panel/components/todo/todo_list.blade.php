@php
    $hidden = false;
    $id_box="todo_list_box";
    if (Cookie::get($id_box) === 'hide') {
        $hidden = true;
    }
@endphp
<section class="col-md-{{$column_size ?? 12}} connectedSortable">
    <!-- TO DO List -->
    <div class="box box-primary @if($hidden) collapsed-box @endif" id="{{$id_box}}">
        <div class="box-header">
            <i class="ion ion-clipboard"></i>
            <h3 class="box-title">@lang('pages.box_title_todo')</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                            class="fa @if($hidden) fa-plus @else fa-minus @endif"></i>
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" @if($hidden) style="display: none;" @endif>
            <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
            <ul class="todo-list">
                @if($todos->count() == 0)
                    <p class="text-muted text-center">@lang('pagination.no_data_todo')</p>
                @else
                    @foreach ($todos as $todo)
                        @component('panel.components.todo.todo_row', ['todo' => $todo])
                        @endcomponent
                    @endforeach
                @endif
            </ul>
        </div>
        <!-- /.box-body -->
        <!--<div class="box-footer clearfix no-border">
            <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
        </div>-->

        <!-- /.box-body -->
        <div class="box-footer text-center">
            @if(!empty($see_more) && $see_more)
                <a href="{{route('panel.todo.index')}}" class="uppercase"><i
                            class="ion ion-eye"></i> @lang('pagination.view_all')</a>
            @endif
        </div>
        <!-- /.box-footer -->
    </div>
    <!-- /.box -->
</section>
