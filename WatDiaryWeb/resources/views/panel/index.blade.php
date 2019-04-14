@extends('layouts.panel.main')

@section('title')
    @lang('pages.dashboard')
@endsection

@section('content')
    <p>Dashboard Content here graph and list</p>
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>150</h3>

                    <p>@lang("dashboard.todo")</p>
                </div>
                <div class="icon">
                    <i class="fa fa-check-square"></i>
                </div>
                <a href="#" class="small-box-footer">@lang("dashboard.more_info") <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>@lang("dashboard.income")</p>
                </div>
                <div class="icon">
                    <i class="fa fa-dollar"></i>
                </div>
                <a href="#" class="small-box-footer">@lang("dashboard.more_info") <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>44</h3>

                    <p>@lang("dashboard.notes")</p>
                </div>
                <div class="icon">
                    <i class="fa fa-sticky-note-o"></i>
                </div>
                <a href="#" class="small-box-footer">@lang("dashboard.more_info") <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>65</h3>

                    <p>@lang("dashboard.work_days")</p>
                </div>
                <div class="icon">
                    <i class="fa fa-clock-o"></i>
                </div>
                <a href="#" class="small-box-footer">@lang("dashboard.more_info") <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
@endsection
