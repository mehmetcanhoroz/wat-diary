@php
    $hidden = false;
    $id_box="announcement_list_box";
    if (Cookie::get($id_box) === 'hide') {
        $hidden = true;
    }
@endphp
<section class="col-md-{{$column_size ?? 12}}">
    <!-- PRODUCT LIST -->
    <div class="box box-primary @if($hidden) collapsed-box @endif" id="{{$id_box}}">
        <div class="box-header with-border">
            <i class="fa fa-bullhorn"></i>
            <h3 class="box-title">@lang('pages.box_title_announcement')</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                            class="fa @if($hidden) fa-plus @else fa-minus @endif"></i>
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" @if($hidden) style="display: none;" @endif>
            <ul class="products-list product-list-in-box">
                @if($announcements->count() == 0)
                    <p class="text-muted text-center">@lang('pagination.no_data_announcement')</p>
                @else
                    @foreach ($announcements as $announcement)
                        @component('panel.components.announcement.announcement_row', ['announcement' => $announcement])
                        @endcomponent
                    @endforeach
                @endif
            </ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
            @if(!empty($see_more) && $see_more)
                <a href="{{route('panel.note.index')}}" class="uppercase"><i
                            class="ion ion-eye"></i> @lang('pagination.view_all')</a>
            @endif
        </div>
        <!-- /.box-footer -->
    </div>
    <!-- /.box -->
</section>