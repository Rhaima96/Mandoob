@extends('layouts.app')

@section('content')

<div class="d-xl-flex flex-column align-items-xl-center register-photo" style="height: 750px;">
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
            <h2 class="text-center"><strong>Log In</strong></h2>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-5"><select class="form-control" style="border-style: none;">
                            <option value="" selected="">Country code</option>
                            <option value="13">This is item 2</option>
                            <option value="14">This is item 3</option>
                        </select></div>
                    <div class="col-7"><input class="form-control" type="email" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="phone" placeholder="Phone number"
                            autofocus=""></div>
                </div>
            </div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <div class="form-check"><label class="form-check-label"><input class="form-check-input"
                            type="checkbox">Remember me</label></div>
            </div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit"
                    style="background: #4AB690;font-family: Conv_Rockwell;font-weight: bold;">Sign In</button></div><a
                class="already" href="/signup">You don't have an account yet? sign up here</a>
        </form>
    </div>
</div>

@endsection
