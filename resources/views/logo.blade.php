
    @extends('layout.mastar')
    @section('tittle')
     login page
@endsection
    @section('contant')

    <div class="container">
        <div class="row mt-5">
            <div class="col-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="text-white"> Login</h3>
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
                   
                        <form method="POST" action="{{ url('loginuser/storeLogin') }}">
                  
                            {{ csrf_field() }}
{{-- <div class="form-group" >
   

    @if($errors->any())
    <h4>{{$errors->first()}}</h4>
    @endif

</div> --}}
@if ($errors->any())
<div class="alert alert-danger alert-styled-left alert-dismissible">
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    <span class="font-weight-semibold">Oops!</span> {{ implode('<br>', $errors->all()) }}
</div>
@endif



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
                                <button class="btn btn-success btn-submit">login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<br>
<br>
<br>
<br>


    @endsection



