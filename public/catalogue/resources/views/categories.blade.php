@extends('layouts.app')

@section('content')
<div calss = 'container'>
    @foreach($categories as $category)
        <b>{{$category->name}}</b><br>
    @endforeach
</div>
@endsection