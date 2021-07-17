@extends('layouts.app')

@section('title')
    Contact Us
@endsection

@section('content')
    <!--Google Map Area Start -->
    <div class="google-map-area">
        <!--  Map Section -->
        <div id="contacts" class="map-area">
{{--            <div id="googleMap" style="width: 100%; height: 451px;"></div>--}}
            <iframe style="border:0; width: 100%; height: 450px;"
                    src="https://www.google.com/maps?q=31.973842,35.916233&z=20&z=20&hl=en;z=14&amp;output=embed"
{{--                    src="https://www.google.com/maps?ll=31.973842,35.916233&z=20&t=m&hl=en-US&gl=US&mapclient=embed&cid=2827654326265569915"--}}
                    allowfullscreen></iframe>
        </div>
        <div class="breadcrumb-bar">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    <!--End of Google Map Area-->
    <!--Contact Area Strat-->
    <div class="contact-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-area-container">
                        <div class="single-title">
                            <h3>Contact Info</h3>
                        </div>
                        <p>
                            Ramla School Pioneers Academy is one of the leading schools in jordan, here you can feel safe
                            for your kids.
                        </p>
                        <div class="contact-address-container">
                            <div class="contact-address-info">
                                <div class="contact-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Address</h4>
                                    <span>Jabal Al Hussein, Amman</span>
                                </div>
                            </div>
                            <div class="contact-address-info">
                                <div class="contact-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Phone</h4>
                                    <span>(+962) 6 566 4626</span>
                                </div>
                            </div>
                            <div class="contact-address-info">
                                <div class="contact-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Email</h4>
                                    <span>Ramleh.school@yahoo.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <div class="single-title">
                            <h3>Send A Message</h3>
                        </div>
                        <div class="contact-form-container">
                            <form
                                id="contact-form"
                                action="http://whizthemes.com/mail-php/contact/mail.php"
                                method="post"
                            >
                                <div class="row">
                                    <div class="col-md-6">
                                        <input
                                            type="text"
                                            name="name"
                                            placeholder="Your Name *"
                                        />
                                    </div>
                                    <div class="col-md-6">
                                        <input
                                            type="email"
                                            name="email"
                                            placeholder="Your Email *"
                                        />
                                    </div>
                                </div>
                                <input type="text" name="subject" placeholder="Subject *"/>
                                <textarea
                                    name="message"
                                    class="yourmessage"
                                    placeholder="Your message"
                                ></textarea>
                                <button
                                    type="submit"
                                    class="button-default button-yellow submit"
                                >
                                    <i class="fa fa-send"></i>Submit
                                </button>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Contact Area-->
@endsection
