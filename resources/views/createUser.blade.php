
@extends('layout.mastar')
@section('tittle')
Registration page
@endsection

@section('contant')

<div class="container">
    <div class="row mt-5">
        <div class="col-8 offset-2 mt-5">
            <div class="card">
                <div class="card-header bg-info">
                    <h3 class="text-white">registration</h3>
                </div>
                <div class="card-body">
                    
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                    @endif
               
                    <form method="POST" action="{{ url('user/store') }}">
              
                        {{ csrf_field() }}
              
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>


                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                
                       
               
                        <div class="form-group text-center">
                            <button class="btn btn-success btn-submit">Submit</button>
                        </div>
                        <p class="sign-up text-center">Already have an Account?<a href="{{ route('login') }}"> Sign In</a></p>
                         <p class="terms ">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


