@extends('layouts.app')

<div>
<div>
    @if (Session::has('error'))
    <p class="text-danger">
        {{Session::get('error')}}
    </p>
    @endif
    @if (Session::has('success'))
    <p class="text-success">
        {{Session::get('success')}}
    </p>
    @endif

    <form method="POST" action="{{ route('login')}}" >
        @csrf
        @method('post')
        <div class="form-outline mb-4">
          <label class="form-label" for="">Email address</label>
          <input type="email" name ='email' id="" class="form-control" />
        </div>
        {{-- @if ($error->has('email'))
            <p class="'text-danger">
                {{ $error->first('email')}}
            </p>
            @endif --}}
            
      
        <div class="form-outline mb-4">
          <label class="form-label" for="">Password</label>
          <input type="password" name ="password" id="" class="form-control" />
        </div>
        <div class="row mb-4 ">
            <button type="submit" class="btn btn-primary btn-block row " value = "Login">Sign in</button>
        
          </div>
        <div class="row mb-4">
          <div class="col d-flex justify-content-space-evenly">
            
            <div class="form-check ">
              <input class="form-check-input" type="checkbox" value="" id="" checked />
              <label class="form-check-label" for=""> Remember me </label>
              <div>
                <a href="#!">Forgot password?</a>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center">
          <p>Not a member? <a href="#!">Register</a></p>
        </div>
      </form>
</div>
</div>
