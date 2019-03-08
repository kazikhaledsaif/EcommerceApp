@extends('frontend.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-2 mb-3">
            <div class="card">

                @if(session()->has('success_message'))
                    <div class="alert alert-success">
                        <h4> {{session()->get('success_message')}}</h4>
                    </div><br><br>

                @elseif(session()->has('error_massage'))
                    <div class="alert alert-danger">
                        <h4> {{session()->get('error_massage')}}</h4>
                    </div><br><br>
                @elseif(session()->has('alert_massage'))
                    <div class="alert alert-info">
                        <h4> {{session()->get('alert_massage')}}</h4>
                    </div><br><br>
                @endif

                <div class="card-body">
                     
                        <div class="account-details-form">
                            <form method="POST" action="{{ route('frontend.update-pass') }}">
                                <div class="row">
                                    {{ csrf_field() }}
                                     
                                    <div class="col-12 mb-30"><h4>Password change</h4></div>

                                    <div class="col-12 mb-30">
                                        <input name="passwordold" placeholder="Current Password" type="password" class="form-control{{ $errors->has('passwordold') ? ' is-invalid' : '' }}" required>
                                    </div>
                                    
                                    @if ($errors->has('passwordold'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('passwordold') }}</strong>
                                    </span>
                                    @endif

                                    <div class="col-lg-6 col-12 mb-30">
                                        <input  name="passwordnew" placeholder="New Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                                    </div>
                                    
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif

                                    <div class="col-lg-6 col-12 mb-30">
                                        <input name="passwordconfirm" placeholder="Confirm Password" type="password" class="form-control" required>
                                    </div>

                                     <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn pataku-btn">
                                         {{ __('Update Password') }}
                                        </button>
                            </div>

                                </div>
                            </form>
                        </div>
 

                         
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
