@extends('layout.mainlayout')
@section('title', 'Registration Page')
@section('header')
@endsection
@section('contentpg')
<div class="container">
    <div class="row my-5">
        <div class="col-md-12 border border-primary p-3">
            <form action="" method="post">
                @csrf 
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control"><br>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control"><br>
                <label for="password">Password</label>
                <input type="password" name="pass" id="pass" value="{{old('pass')}}" class="form-control"><br>
                <input type="submit" value="Save">
            </form>
        </div>
    </div>
</div>
@endsection