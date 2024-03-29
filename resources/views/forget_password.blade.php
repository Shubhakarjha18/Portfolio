@extends('layouts/main_layout')
@section('forgot')
<div class="row justify-content-center wrapper" id="forgot-box" >
    <div class="col-lg-10 my-auto myShadow">
      <div class="row">
        <div class="col-lg-7 bg-white p-4">
          <h1 class="text-center font-weight-bold text-primary">Forgot Your Password?</h1>
          <hr class="my-3" />
          <p class="lead text-center text-secondary">To reset your password, enter the registered e-mail adddress and we will send you password reset instructions on your e-mail!</p>
          <form action="{{route('forget.password.post')}}" method="post" class="px-3" id="forgot-form">
            @csrf
            <div id="forgotAlert"></div>
            <div class="input-group input-group-lg form-group">
              <div class="input-group-prepend">
                <span class="input-group-text rounded-0"><i class="far fa-envelope fa-lg"></i></span>
              </div>
              <input type="email" id="femail" name="email" class="form-control rounded-0" placeholder="E-Mail" required />
            </div>
            <div class="form-group">
              <input type="submit" id="forgot-btn" value="Reset Password" class="btn btn-primary btn-lg btn-block myBtn" />
            </div>
          </form>
        </div>
        <div class="col-lg-5 d-flex flex-column justify-content-center myColor p-4">
          <h1 class="text-center font-weight-bold text-white">Reset Password!</h1>
          <hr class="my-4 bg-light myHr" />
          <button class="btn btn-outline-light btn-lg font-weight-bolder myLinkBtn align-self-center" id="back-link">Back</button>
        </div>
      </div>
    </div>
  </div>
    
@endsection