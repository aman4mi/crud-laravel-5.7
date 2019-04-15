@extends('layouts.app') 
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Edit Student</h2> <a href="/" class="btn btn-secondary inline">Back</a>
    </div>
    <div class="card-body">
        <form action="{{ url('students/update', [$students->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName" class="form-control" value="{{$students->first_name}}" />
            </div>
            <div class="form-group">
                <label for="middleName">Middle Name</label>
                <input type="text" name="middleName" id="middleName" class="form-control" value="{{$students->middle_name}}" />
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName" class="form-control" value="{{$students->last_name}}" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{$students->email}}" />
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" id="mobile" class="form-control" value="{{$students->mobile}}" />
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="text" class="form-control datepicker" name="date_of_birth" id="date_of_birth" value="{{$students->date_of_birth}}"
                />
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" id="age" class="form-control" value="{{$students->age}}" />
            </div>
            <div class="form-group">
                <label>Gender </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="1" {{$students->gender == 1 ? 'checked' : ''}}>Male
                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="2" {{$students->gender == 2 ? 'checked' : ''}}>Female
                </label>
            </div>
            <div class="form-group">
                <label for="language">Language</label>
                <select name="language" id="language" class="form-control">
                    <option value="" {{$students->language =="" ? 'selected' : ''}}>----</option>
                    <option value="english" {{$students->language == "english" ? 'selected' : ''}}>English</option>
                    <option value="bengali" {{$students->language == "bengali" ? 'selected' : ''}}>Bengali</option>
                    <option value="hindi" {{$students->language == "hindi" ? 'selected' : ''}}>Hindi</option>                    
                </select>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" id="address" cols="30" rows="6" class="form-control">{{$students->address}}</textarea>
            </div>
            <div class="form-group custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="active_status" id="active_status" {{$students->active_status == "1" ? 'checked' : ''}}>
                <label class="custom-control-label" for="active_status">Status</label>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection