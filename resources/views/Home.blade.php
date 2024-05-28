@extends("Layout.app")

@section('content')
@include('component.Hero')
    @include('component.PackagePrice')
    @include('component.ExtraSection')
    @include('component.TowSecton')
    @include('component.Visoinspeed')
    @include('component.OurService')
    @include('component.Client')
    @include('component.Contact')
@endsection
