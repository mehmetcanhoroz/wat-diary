@extends('layouts.panel.main')

@section('title')
    @lang('pages.dashboard')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$counts->todo_count}}</h3>

                    <p>@lang("pages.todos")</p>
                </div>
                <div class="icon">
                    <i class="fa fa-check-square"></i>
                </div>
                <a href="{{route('panel.todo.index')}}" class="small-box-footer">@lang("dashboard.more_info") <i
                            class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{$counts->income_count}}</h3>

                    <p>@lang("pages.incomes")</p>
                </div>
                <div class="icon">
                    <i class="fa fa-dollar"></i>
                </div>
                <a href="{{route('panel.income.index')}}" class="small-box-footer">@lang("dashboard.more_info") <i
                            class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{$counts->note_count}}</h3>

                    <p>@lang("pages.notes")</p>
                </div>
                <div class="icon">
                    <i class="fa fa-file-text-o"></i>
                </div>
                <a href="{{route('panel.note.index')}}" class="small-box-footer">@lang("dashboard.more_info") <i
                            class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{$counts->work_day_count}}</h3>

                    <p>@lang("pages.work_days")</p>
                </div>
                <div class="icon">
                    <i class="fa fa-clock-o"></i>
                </div>
                <a href="{{route('panel.work_day.index')}}" class="small-box-footer">@lang("dashboard.more_info") <i
                            class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>

    <div class="row">
        @component('panel.components.todo.todo_list', ['column_size' => '4', 'todos' => $todos, 'see_more' => true])
        @endcomponent
        @component('panel.components.note.note_list', ['column_size' => '4', 'notes' => $notes, 'see_more' => true])
        @endcomponent
        @component('panel.components.announcement.announcement_list', ['column_size' => '4', 'announcements' => $announcements, 'see_more' => false])
        @endcomponent


    </div>
@endsection