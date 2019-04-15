@extends('layouts.app') 
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Add Student</h2> <a href="/" class="btn btn-secondary inline">Back</a>
    </div>
    <div class="card-body">
        <form action="{{ url('/students/store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName" class="form-control" />
            </div>
            <div class="form-group">
                <label for="middleName">Middle Name</label>
                <input type="text" name="middleName" id="middleName" class="form-control" />
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName" class="form-control" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" />
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" id="email" class="form-control" />
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="text" class="form-control datepicker" name="date_of_birth" id="date_of_birth" />
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" id="age" class="form-control" />
            </div>
            <div class="form-group">
                <label>Gender </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="1" checked>Male
                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="2">Female
                </label>
            </div>
            <div class="form-group">
                <label for="language">Language</label>
                <select name="language" id="language" class="form-control">
                    <option value="">----</option>
                    <option value="english">English</option>
                    <option value="bengali">Bengali</option>
                    <option value="hindi">Hindi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" id="address" cols="30" rows="6" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection