@php
    $hidden = false;
    $id_box="note_list_box";
    if (Cookie::get($id_box) === 'hide') {
        $hidden = true;
    }
@endphp
<section class="col-md-{{$column_size ?? 12}}">
    <!-- PRODUCT LIST -->
    <div class="box box-primary @if($hidden) collapsed-box @endif" id="{{$id_box}}">
        <div class="box-header with-border">
            <i class="ion ion-document"></i>
            <h3 class="box-title">@lang('pages.box_title_note')</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                            class="fa @if($hidden) fa-plus @else fa-minus @endif"></i>
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" @if($hidden) style="display: none;" @endif>
            <ul class="products-list product-list-in-box">
                @foreach ($notes as $note)
                    @component('panel.components.note.note_row', ['note' => $note])
                    @endcomponent
                @endforeach
                @if($notes->count() == 0)
                    <p class="text-muted text-center">@lang('pagination.no_data_note')</p>
                @endif

            </ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
            <a href="{{route('panel.note.index')}}" class="uppercase"><i
                        class="ion ion-eye"></i> @lang('pagination.view_all')</a>
        </div>
        <!-- /.box-footer -->
    </div>
    <!-- /.box -->
</section>