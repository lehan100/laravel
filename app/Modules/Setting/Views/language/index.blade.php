@extends('backend.layouts.admin')
@section('title',__('Ngôn ngữ'))
@section('content')
@include('backend.templates.breadcrumb',[
    'controllerName'=>$controllerName,
    'buttons'=>$buttonGroup,
    'title'=>__('Danh sách')." ".__('Ngôn ngữ')
])
@include('Setting::language.partials.list')
@endsection