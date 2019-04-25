
<section class="col-md-{{$column_size ?? 12}}">
    <!-- PRODUCT LIST -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">@lang('pages.box_title_note')</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                            class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
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