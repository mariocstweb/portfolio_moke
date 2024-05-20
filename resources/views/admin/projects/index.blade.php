@extends('layouts.app')
@section('content')

<h1 class="text-center">Hello</h1>
@foreach ($projects as $project)
<li>{{$project->title}}</li>
@endforeach
@endsection