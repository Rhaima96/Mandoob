@extends('layouts.app')

@section('content')
<div class="d-xl-flex flex-column align-items-xl-center register-photo">
    <div class="container">
        <div class="row">
            <div class="col" style="padding-left: 7.3rem;"><a class="text-decoration-none" href="/"
                    style="font-size: 2rem;font-family: Roboto, sans-serif;color: rgb(74,182,144);"><i
                        class="fa fa-home" style="font-size: 2.7rem;color: #4AB690;"></i>&nbsp;Home&nbsp;</a></div>
        </div>
    </div>
    <div class="form-container">
        <div class="image-holder" style="background: url(&quot;assets/img/wx.png&quot;) center / cover no-repeat;">
        </div>
        <form method="post">
            <h2 class="text-center"><strong>Create</strong> an account.</h2>
            <div class="form-group"><input class="form-control" type="text" name="f_name" placeholder="First name"
                    autofocus=""></div>
            <div class="form-group"><input class="form-control" type="text" name="l_name" placeholder="Last name"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" onblur="verifMail(this)" id="email" placeholder="Email"><small class="form-text text-danger" id="msgerror"></small></div>
            <div class="form-group"><select class="form-control" style="border-style: none;">
                    <option value="" selected="">Role</option>
                    <option value="pr">Provider</option>
                    <option value="ct">Customer</option>
                </select></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group"><input class="form-control" type="password" name="password-repeat"
                    placeholder="Repeat Password "></div>
            <div class="form-group">
                <div class="form-check"><label class="form-check-label"><input class="form-check-input"
                            type="checkbox">I agree to the license terms.</label></div>
            </div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit"
                    style="background: #4AB690;font-family: Conv_Rockwell;font-weight: bold;">Sign Up</button></div><a
                class="already" href="/signin">You already have an account? Login here.</a>
        </form>
    </div>
</div>

@endsection
