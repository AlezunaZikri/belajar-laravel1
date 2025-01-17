@extends('layouts.main')
@section('navbar')
    
    {{-- login start --}}
    <div class="hero min-h-screen bg-base-200">
      <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="text-center lg:text-left">
          {{-- <h1 class="text-5xl font-bold">Login now!</h1>
          <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p> --}}
        </div>
        <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
          <form action="/input" method="GET" class="card-body">
            <div class="form-control">
              <span class="text-center font-bold">{{ $salam }}</span>
              <label class="label">
                <span class="label-text">Email</span>
              </label>
              <input type="email" placeholder="email here..." class="input input-bordered border-primary hover:border-primary"  />
            </div>
            <div class="form-control">
              <label class="label">
                <span class="label-text">Password</span>
              </label>
              <input type="password" placeholder="password here..." class="input input-bordered border-primary hover:border-primary"  />
              <label class="label">
                <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
              </label>
            </div>
            <div class="form-control mt-6">
              <a href="/input"><button class="btn btn-primary">Login</button></a>
            </div>
          </form>
        </div>
      </div>
    </div>
    {{-- login end --}}


    @endsection