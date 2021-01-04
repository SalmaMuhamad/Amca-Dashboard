@extends('layouts.master')

@section('title')

AlMahir About

@endsection




@section('content')
<form action="">
    <div class="formHolder">
        <label for="whoAreWe">who are we</label>
        <textarea name="whoAreWe" id="" rows="5"></textarea>
    </div>
    <div class="formHolder">
        <label for="mission">mission</label>
        <textarea name="mission" id="" rows="5"></textarea>
    </div>
    <div class="formHolder">
        <label for="vision">vision</label>
        <textarea name="vision" id="" rows="5"></textarea>
    </div>
    <button type="submit" class="btnStyle">Save</button>
</form>
@endsection

@section('scripts')

@endsection