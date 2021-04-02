@extends('layouts.master')

@section('header')
    @include('layouts.header.header')
@endsection
@section('our-services')
    @include('layouts.our-services.our-service')
@endsection
@section('our-work')
    @include('layouts.our-work.our-work')
@endsection
@section('price-table')
    @include('price-tabel.price-table')
@endsection
@section('footer')
    @include('footer.footer')
@endsection