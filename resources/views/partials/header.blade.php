@extends('layouts.app')




<nav class="navbar navbar-light navbar-expand-lg fixed-top navigation-clean-button"
    style="background: rgba(255,255,255,0);">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="padding: 0;"><img class="img-fluid" src="assets/img/logo.png"
                style="width: 4.3rem;margin: 0;"></a><button data-toggle="collapse" class="navbar-toggler"
            data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav d-flex d-xl-flex justify-content-between mx-auto justify-content-xl-end"
                style="margin-right: 331px;margin-left: 156px;">
                <li class="nav-item"><a class="nav-link" href="/"
                        style="font-size: 1.3rem;font-family: Roboto, sans-serif;font-weight: bold;filter: brightness(53%);">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/about"
                        style="font-size: 1.3rem;font-family: Roboto, sans-serif;font-weight: bold;filter: brightness(53%);">About
                        us</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact"
                        style="font-size: 1.3rem;font-family: Roboto, sans-serif;font-weight: bold;filter: brightness(53%);">Get
                        in Touch&nbsp;</a></li>
            </ul><span class="navbar-text actions"> <a class="login" href="/signin"
                    style="filter: brightness(25%);font-size: 1.3rem;font-family: Roboto, sans-serif;">Log In</a><a
                    class="btn btn-light action-button" role="button" href="/register"
                    style="border-top-left-radius: 0.375rem;border-top-right-radius: 0.375rem;border-bottom-right-radius: 0.375rem;border-bottom-left-radius: 0.375rem;color: rgb(0,0,0);background: #D2F2C3;box-shadow: 1px 4px 9px rgba(52,58,64,0.29);margin-left: 12px;">Sign
                    Up&nbsp;<i class="fa fa-dropbox"
                        style="border-color: rgba(0,0,0,0);color: rgb(0,0,0);font-size: 1.2rem;"></i></a></span>
        </div>
    </div>
</nav>
