@section('title','Swadesh - Properties')
@extends('laoyout.app')
@section('content')


    <!-- Page title start-->
    <div class="page-title-area header-next">
        <img class="lazyload blur-up bg-img" src="{{ url('swadesh') }}/assets/img/6511175715121.jpg" />
        <div class="container">
          <div class="content text-center">
            <h1 class="color-white">Signup</h1>
            <ul class="list-unstyled">
              <li class="d-inline-block">
                <a href="/">Home</a>
              </li>
              <li class="d-inline-block">>></li>
              <li class="d-inline-block active">Signup</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page title end-->
      <!-- Authentication-area start -->
      <div class="authentication-area ptb-100">
        <div class="container">
          <div class="auth-form border radius-md">
            <form action="/sign-up" method="post">
                @csrf
              <div class="title">
                <h4 class="mb-20">Signup</h4>
              </div>
              <div class="form-group mb-30">
               <label for="" class="mb-1">I Am an</label>
               <select name="role" class="form-select" id="" required>
                <option value="agent">Agent</option>
                <option value="builder">Builder</option>
               </select>
              </div>

              <div class="form-group mb-30">
                <input
                  type="text"
                  class="form-control"
                  name="name"
                  placeholder="Name"
                  required
                  value="{{ old('name') }}"
                />
                @error('name')
<div class="text-danger">{{ $message }}</div>
@enderror
              </div>


              <div class="form-group mb-30">
                <input
                  type="text"
                  class="form-control"
                  name="email"
                  placeholder="Email"
                  value="{{ old('email') }}"
                  required

                />

                @error('email')
<div class="text-danger">{{ $message }}</div>
@enderror


              </div>
              <div class="form-group mb-30">
                <input
                  type="password"
                  class="form-control"
                  name="password"
                  placeholder="Password"
                  value="{{ old('password') }}"
                  required
                />
                @error('password')
<div class="text-danger">{{ $message }}</div>
@enderror
              </div>
              <div class="form-group mb-30">
                <input
                  type="password"
                  name="password_confirmation"
                  value="{{ old('password_confirmation') }}"
                  class="form-control"
                  placeholder="Confirm Password"
                  required
                />
                @error('password_confirmation')
<div class="text-danger">{{ $message }}</div>
@enderror
              </div>

              <div class="row align-items-center mb-20">
                <div class="col-12">
                  <div class="link">
                    Already have an account?
                    <a href="/sign-in">Click Here</a> to Login
                  </div>
                </div>
              </div>
              <button
                type="submit"
                class="btn btn-lg btn-primary radius-md w-100"
              >
                Signup
              </button>
            </form>
          </div>
        </div>
      </div>
      <!-- Authentication-area end -->

@endsection
