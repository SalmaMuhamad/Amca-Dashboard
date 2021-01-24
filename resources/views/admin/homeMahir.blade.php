@extends('layouts.master')

@section('title')

AlMahir Home

@endsection




@section('content')
@if(session('message') != null)
   <!-- should be as allert -->
   <p>{{session('message')}}</p> 
@endif
<form  method='post' action="
  {{action('almahirController@postUpdateIntro')}}">
  {{csrf_field()}}
  <input type='hidden' name='_method' value="POST">
    <div class="formHolder">
        <label for="intro">Introduction</label>
        <textarea name="intro" id="" cols="30" rows="10" > {{$introContent->content}} </textarea>
    </div>
    <button type="submit" class="btnStyle">Save</button>
</form>
@endsection

@section('scripts')

@endsection