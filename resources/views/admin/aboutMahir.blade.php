@extends('layouts.master')

@section('title')

AlMahir About

@endsection




@section('content')
@if(session('message') != null)
   <!-- should be as allert -->
   <p>{{session('message')}}</p> 
@endif
<form  method='post' action = "{{action('almahirController@postUpdateAbout')}}">
{{csrf_field()}}
    <div class="formHolder">
        <label for="breif">who are we</label>
        <textarea name="breif" id="" rows="5">{{$whoContent->content}}</textarea>
    </div>
    <div class="formHolder">
        <label for="mission">mission</label>
        <textarea name="mission" id="" rows="5">{{$missionContent->content}}</textarea>
    </div>
    <div class="formHolder">
        <label for="vision">vision</label>
        <textarea name="vision" id="" rows="5">{{$visionContent->content}}</textarea>
    </div>
    <div class="formHolder">
        <label for="vision">Goals</label>
        <textarea name="vision" id="" rows="5">{{$visionContent->content}}</textarea>
    </div>
    <div class="formHolder">
        <label for="vision">Stuff</label>
        <textarea name="vision" id="" rows="5">{{$visionContent->content}}</textarea>
    </div>
    <button type="submit" class="btnStyle">Save</button>
</form>
@endsection

@section('scripts')

@endsection