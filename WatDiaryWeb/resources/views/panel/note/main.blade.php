@extends('layouts.panel.main')

@prepend('breadcrumb')
    <li><a href="{{route('panel.note.index')}}">@lang('pages.page_main_note')</a></li>
@endprepend

