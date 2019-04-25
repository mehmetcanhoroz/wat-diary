@extends('layouts.panel.main')

@prepend('breadcrumb')
    <li><a href="{{route('panel.income.index')}}">@lang('pages.page_main_income')</a></li>
@endprepend
