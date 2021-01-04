@extends('layouts.master')

@section('title')

AlMahir Academics

@endsection




@section('content')
<form action="">
    <div class="formHolder">
        <label for="admissionNew">Admission Process for New Students</label>
        <textarea name="admissionNew" id="" rows="5"></textarea>
    </div>
    <div class="formHolder">
        <label for="admissionReturn"> Admission Process for Returning Students</label>
        <textarea name="admissionReturn" id="" rows="5"></textarea>
    </div>
    <div class="formHolder">
        <label for="classDates">Class Dates</label>
        <textarea name="classDates" id="" rows="5"></textarea>
    </div>
    
    <button type="submit" class="btnStyle">Save</button>
</form>
@endsection

@section('scripts')

@endsection