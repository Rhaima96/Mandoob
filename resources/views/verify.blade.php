@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col" style="padding-top: 2rem;"><a class="text-decoration-none" href="#"
                style="font-size: 2rem;font-family: Roboto, sans-serif;color: rgb(74,182,144);"><i class="fa fa-home"
                    style="font-size: 2.7rem;color: #4AB690;"></i>&nbsp;Home&nbsp;</a></div>
    </div>
</div>
<div class="container d-md-flex d-xl-flex align-items-md-center align-items-xl-center" style="height: 700px;">
    <div class="row">
        <div class="col-sm-12 col-md-8 mb-5">
            <h1 style="font-family: 'Ink Free';font-weight: bold;"><strong>Verify your mobile number</strong></h1>
            <p style="font-family: Roboto, sans-serif;">A text message with a 6 digit verification code has been sent to
                your phone number.</p>
            <p style="font-family: Roboto, sans-serif;">Please enter this code bellow : </p>
            <form method="" action="/signup">
                <div class="form-row mb-4">
                    <div class="col"><input class="form-control" type="text" autofocus=""></div>
                    <div class="col"><input class="form-control" type="text"></div>
                    <div class="col"><input class="form-control" type="text"></div>
                    <div class="col"><input class="form-control" type="text"></div>
                    <div class="col"><input class="form-control" type="text"></div>
                    <div class="col"><input class="form-control" type="text"></div>
                </div>
                <p style="font-family: Roboto, sans-serif;">If you do not receive code within 2 minutes ,&nbsp;&nbsp;<a
                        class="text-decoration-none" href="#" style="color: rgb(74,182,144);">resend code</a></p><button
                    class="btn btn-primary" type="submit"
                    style="background: #4AB690;font-family: Conv_Rockwell;font-size: 1.3rem;">Verify</button><button
                    class="btn btn-light ml-2" type="reset"
                    style="font-size: 1.3rem;color: rgb(74,182,144);font-family: Conv_Rockwell;">Cancel</button>
            </form>
        </div>
        <div class="col"><img class="img-fluid"
                src="assets/img/86745753-your-smartphone-friend-have-a-message-for-you-vector-flat-illustration-icon-cartoon-phone-character-.png">
        </div>
    </div>
</div>

@endsection
