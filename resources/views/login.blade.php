@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4 offset-sm-4 mt-4">
                <form action="/action_page.php" autocomplete="off">
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter email" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                </div>
                    <button type="submit" class="btn btn-primary justify-content-center">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection