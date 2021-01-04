@extends('layouts.master')

@section('title')

AlMahir Home

@endsection




@section('content')
<form action="">
    <div class="formHolder">
        <label for="amcaIntro">Introduction</label>
        <textarea name="amcaIntro" id="" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btnStyle">Save</button>
</form>
@endsection

@section('scripts')

@endsection