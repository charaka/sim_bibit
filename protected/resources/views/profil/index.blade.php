@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                 	{{ Form::open(array('url' => 'home/simpan_profil')) }}
                 	 <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
					{{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection