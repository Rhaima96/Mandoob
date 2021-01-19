@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col" style="background: url(&quot;assets/img/Capture1.png&quot;) no-repeat;background-size: cover;">
                @include('partials.header')
                <div class="row d-flex flex-column-reverse flex-sm-column-reverse flex-lg-row" style="padding-top: 138px;">
                    <div class="col text-center d-lg-flex d-xl-flex justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center">
                        <h1 class="display-4 text-center" style="color: #44b595;font-weight: bold;">Anything from<br>anywhere in your<br>city</h1>
                    </div>
                    <div class="col-sm-12 col-lg-6 text-center"><img class="img-fluid" src="assets/img/wx.png" style="width: 25rem;"></div>
                </div>
                <div class="row mt-5">
                    <div class="col d-flex flex-column justify-content-center align-items-center">
                        <h1 style="color: #5b6670;font-family: Conv_Rockwell;">What is Mndoob?</h1>
                        <p class="text-center" style="max-width: 800px;color: #5b6670;font-family: 'Roboto Condensed', sans-serif;font-weight: bold;">Mndoob is one of the largest delivery platform in the region. Mndoob's unique on-demand experience earned it the highest user ratings amongst all the other large delivery platforms both in Apple’s App Store and Google's Play store. In 2018, Mrsool reported GMV exceeding 1 billion SR and more than 6 million registered users. Mndoob provides a true order anything from anywhere experience, only possible by our huge fleet of registered on-demand couriers anything from anywhere with a huge fleet of registered couriers.</p><a class="btn btn-primary mb-5" role="button" id="btn-know" style="background: linear-gradient(90deg, #A8E490, #73C382);border-style: none;font-family: 'Roboto Condensed', sans-serif;font-weight: bold;color: rgb(55,52,52);border-top-left-radius: 1.5rem;border-top-right-radius: 1.5rem;border-bottom-right-radius: 1.5rem;border-bottom-left-radius: 1.5rem;font-size: 1.2rem;">Know more about us</a>
                    </div>
                </div>
                <div class="row text-center d-flex d-xl-flex align-items-end align-items-xl-end mt-5">
                    <div class="col-sm-12 col-lg-4 d-xl-flex flex-column justify-content-xl-center align-items-xl-center"><img class="img-fluid" src="assets/img/Country-operating.png" width="400rem">
                        <h2 class="display-4" style="font-weight: normal;color: #44b595;">3</h2>
                        <p>Countries</p>
                    </div>
                    <div class="col-sm-12 col-lg-4 d-xl-flex flex-column justify-content-xl-center align-items-xl-center"><img class="img-fluid" src="assets/img/zahir-accounting-software-have-more-than-60000-users-the-best-users-png-600_400.png" width="400rem">
                        <h2 class="display-4" style="font-weight: normal;color: #44b595;">1M+</h2>
                        <p>Users Monthly</p>
                    </div>
                    <div class="col-sm-12 col-lg-4 d-xl-flex flex-column justify-content-xl-center align-items-xl-center"><img class="img-fluid" src="assets/img/74265470-boîte-de-courrier-de-caractère-livreur-illustration-de-dessin-animé-plane-vectorielle.png" width="200rem">
                        <h2 class="display-4" style="font-weight: normal;color: #44b595;">+500k</h2>
                        <p>Couriers</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" style="padding: 0;">
                <header class="header mt-5" style="margin: 0;">
                    <div class="header-container" style="padding: 0;padding-top: 100px;padding-bottom: 20px;background: url(&quot;assets/img/laptop-1280536_1920.png&quot;) center / cover no-repeat;filter: hue-rotate(37deg) invert(1%) sepia(0%);">
                        <div class="container text-center d-flex flex-column justify-content-center align-items-center">
                            <div class="col header-title" style="max-width: 620px;">
                                <h1 class="display-4 text-center" style="color: #ffffff;font-style: normal;font-weight: normal;">Reach Millions of Customers</h1>
                                <p style="color: rgb(255,255,255);text-align: center;font-weight: bold;font-style: oblique;font-size: 1.2rem;">Mndoob for Business provides your business an access to a huge user base, whether you want to transform to on-demand eCommerce, or simply looking for an additional channel, Mndoob is always there to help!</p>
                            </div><a class="btn btn-primary mb-5" role="button" id="btn-know-1" style="background: linear-gradient(90deg, #A8E490, #73C382);border-style: none;font-family: 'Roboto Condensed', sans-serif;font-weight: bold;color: rgb(17,17,17);border-top-left-radius: 1.5rem;border-top-right-radius: 1.5rem;border-bottom-right-radius: 1.5rem;border-bottom-left-radius: 1.5rem;font-size: 1.2rem;margin-top: 15px;padding: 6px 30px;">Learn more</a>
                        </div>
                    </div>
                </header>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col text-center d-flex d-xl-flex flex-column justify-content-center align-items-center justify-content-xl-center align-items-xl-center">
                <h1 class="text-center" style="color: #5b6670;font-family: Conv_Rockwell;">How Do We Do It?</h1>
                <p class="text-center" style="max-width: 800px;color: #2a2929;font-family: 'Roboto Condensed', sans-serif;font-weight: bold;font-size: 1.2rem;"><strong>By building an intuitive product that mimics and facilitates generic service fulfillment,</strong><br><strong>so the simple answer was to provide users with three things.</strong></p>
            </div>
        </div>
        <div class="row text-center d-flex d-xl-flex align-items-end align-items-xl-end mt-5">
            <div class="col-sm-12 col-lg-4 d-xl-flex flex-column justify-content-xl-center align-items-xl-center"><img class="img-fluid" src="assets/img/téléchargement.png" width="250rem">
                <h3 style="font-weight: normal;color: #44b595;">Personalized Delivery<br>Experience</h3>
                <p>Control your delivery experiences<br>in real-time through an open<br>chat with your courier</p>
            </div>
            <div class="col-sm-12 col-lg-4 d-xl-flex flex-column justify-content-xl-center align-items-xl-center"><img class="img-fluid" src="assets/img/right-and-wrong-check-marks-45754.png" width="250rem">
                <h3 style="font-weight: normal;color: #44b595;">Flexible Bidding System<br></h3>
                <p>Service prices are determined<br>beforehand through our bidding<br>system, giving customers the<br>freedom to choose from multiple<br>service providers</p>
            </div>
            <div class="col-sm-12 col-lg-4 d-xl-flex flex-column justify-content-xl-center align-items-xl-center"><img class="img-fluid" src="assets/img/unnamed.png" width="250rem">
                <h3 style="font-weight: normal;color: #44b595;">Integrated Map Solution<br><br></h3>
                <p>Pick anywhere on the map for&nbsp;<br>your delivery order, and track<br>your order in real-time<br><br></p>
            </div>
        </div>
        <hr style="width: 70%;font-weight: bold;border-color: rgb(24,25,27);">
        <div class="row">
            <div class="col" style="padding-right: 8%;padding-left: 8%;">
                <h1 class="text-center" style="color: #5b6670;font-family: Conv_Rockwell;margin-top: 25px;margin-bottom: 55px;">How It Work ?</h1>
                <div style="position: relative;overflow: hidden;padding-top: 56.25%;"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/ScMzIvxBSi4" style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;"></iframe></div>
            </div>
        </div>
        <hr style="width: 70%;font-weight: bold;border-color: rgb(24,25,27);">
        <div class="row">
            <div class="col d-flex d-xl-flex flex-column justify-content-center align-items-center justify-content-xl-center align-items-xl-center" style="background: url(&quot;assets/img/Capture.png&quot;) bottom / cover no-repeat;padding-bottom: 101px;">
                <h1 class="text-center" style="color: #5b6670;font-family: Conv_Rockwell;margin-top: 25px;margin-bottom: 55px;">Hurry up and download<br>the application !!</h1><img class="img-fluid" src="assets/img/unnamewwd.png" style="width: 180px;">
                <div class="row mt-3">
                    <div class="col d-flex justify-content-center"><a href="#"><img src="assets/img/hero-playstore.png" width="150px"></a></div>
                    <div class="col d-flex justify-content-center"><a href="#"><img src="assets/img/hero-appstore.png" width="150px"></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h2 style="font-family: Conv_Lora;margin-left: -1px;"><strong>Site Menu</strong></h2>
                        <ul>
                            <li style="font-family: 'Ink Free';"><a href="#" style="font-size: 1.5rem;">Home</a></li>
                            <li><a href="#" style="font-family: 'Ink Free';font-size: 1.5rem;">About us</a></li>
                            <li><a href="#" style="font-family: 'Ink Free';font-size: 1.5rem;">Get in Touch</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h2 style="font-family: Conv_Lora;margin-left: -1px;"><strong>Contacts</strong></h2>
                        <ul>
                            <li><i class="fa fa-map-marker" style="font-size: 28px;color: #00bed6;"></i>&nbsp; King Abudullaziz Rd, Riyadh,<br>Saudi Arabia</li>
                            <li><i class="fa fa-envelope" style="font-size: 20px;color: #00bed6;"></i>&nbsp; inquiries@mndoob.co</li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h2 style="font-family: Conv_Lora;margin-left: -1px;"><strong>Follow us</strong></h2>
                        <div class="row">
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-center">
                                <h3 style="font-family: 'Ink Free';font-size: 1.5rem;">For Customer</h3>
                                <div class="row">
                                    <div class="col-lg-6"><a href="#"><img src="assets/img/hero-playstore.png" width="110px"></a></div>
                                    <div class="col-lg-6"><a href="#"><img src="assets/img/hero-appstore.png" width="110px"></a></div>
                                </div>
                            </div>
                            <div class="col d-xl-flex flex-column justify-content-xl-center align-items-xl-center">
                                <h3 style="font-family: 'Ink Free';font-size: 1.5rem;">For&nbsp;Provider</h3>
                                <div class="row">
                                    <div class="col-lg-6"><a href="#"><img src="assets/img/hero-playstore.png" width="110px"></a></div>
                                    <div class="col-lg-6"><a href="#"><img src="assets/img/hero-appstore.png" width="110px"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col item social" style="border-color: rgb(255,255,255);"><a href="#" style="background: #ffffff;"><i class="fa fa-facebook" style="color: #00bed6;"></i></a><a href="#" style="background: #ffffff;"><i class="icon ion-social-twitter" style="color: #00bed6;"></i></a><a href="#" style="background: #ffffff;"><i class="fa fa-instagram" style="color: #00bed6;"></i></a><a href="#" style="background: #ffffff;"><i class="fa fa-youtube-play" style="color: #00bed6;"></i></a></div>
                </div>
                <hr style="border-color: rgb(108,118,124);width: 70%;">
                <div class="col d-flex justify-content-between"><span>© 2020 MNDOOB Inc.</span><span><a class="text-decoration-none" href="#" style="color: rgb(251,253,255);font-family: 'Ink Free';font-size: 1.2rem;">Privacy Policy&nbsp; &nbsp; &nbsp;&nbsp;</a><a class="text-decoration-none" href="#" style="color: rgb(251,253,255);font-family: 'Ink Free';font-size: 1.2rem;"><span style="text-decoration: underline;">Terms of use</span></a></span></div>
            </div>
        </footer>
    </div>
    @include('partials.footer')


    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>

@endsection
