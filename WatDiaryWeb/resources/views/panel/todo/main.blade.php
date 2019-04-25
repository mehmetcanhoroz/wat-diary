@extends('layouts.panel.main')

@prepend('breadcrumb')
    <li><a href="{{route('panel.todo.index')}}">@lang('pages.page_main_todo')</a></li>
@endprepend
