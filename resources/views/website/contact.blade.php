@extends('website.layouts.layout')
@section('content')
<!-- @include('message.notification') -->

    @if(Session::get('success'))
        <script>
            swal("Good job!", "{{Session::get('success')}}", "success");
        </script>
    @endif

    @if(Session::get('error'))
        <script>
            swal("Sorry!", "{{Session::get('error')}}", "error");
        </script>
    @endif


    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{ asset('public/website') }}/images/background/9.jpg)">
        <div class="auto-container">
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Contact Us</li>
            </ul>
            <h2>Contact Us</h2>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <!-- Sec Title Three -->
            <div class="sec-title-three centered">
                <h2>Contact Us</h2>
            </div>

            <div class="row clearfix">

                <!-- Location Block -->
                <div class="location-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <span class="icon flaticon-message"></span>
                            <strong>Email Address</strong>
                            Sent mail anytime
                            <p class="contactp">{{$contact_us->email}}</p>
                        </div>
                     
                    </div>
                </div>

                <!-- Location Block -->
                <div class="location-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <span class="icon flaticon-call"></span>
                            <strong>Phone Number</strong>
                            Call us anytime
                            <p class="contactp">{{$contact_us->phone}}</p>
                        </div>
                        
                    </div>
                </div>

                <!-- Location Block -->
                <div class="location-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <span class="icon flaticon-home"></span>
                            <strong>Office Address</strong>
                            Visit us
                            <p class="contactp">{{$contact_us->address}}</p>
                        </div>
                       
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Location Section -->

    <!-- Map Column -->
    <section class="map-section">
        <div class="auto-container">
            <div class="inner-container">
                <!-- Map Outer -->
                <div class="map-outer">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117925.2168964497!2d88.26495015954832!3d22.535564937570197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1707402257903!5m2!1sen!2sin"
                        allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Column -->

    <!-- Contact Form Section -->
    <div class="contact-form-section">
        <div class="pattern-layer"
            style="background-image:url({{ asset('public/website') }}/images/background/pattern-25.png)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title alternate centered">
                <div class="title">Submit Question</div>
                <h2>Needs Help? Let’s Get in Touch</h2>
            </div>
            <div class="inner-container">

                <!-- Contact Form -->
                <div class="contact-form">

                    <!-- Contact Form -->
                    {{-- <form method="post" action="https://html.themexriver.com/industo/sendemail.php" id="contact-form"> --}}

                    <form method="post" action="{{route('contact_us_insert')}} " id="contact_form" >
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label>Name:<span style="color:red;">*</span></label>
                                <input type="text" id="username" name="username" placeholder="Name">
                                
                                <small class="text-danger" id="error_message_username"></small>
                                
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label>Email:<span style="color:red;">*</span></label>
                                <input type="email" id="email" name="email" placeholder="Your Email">
                             
                                <small class="text-danger" id="error_message_email"></small>
                             
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label>Phone:<span style="color:red;">*</span></label>
                                <input type="text" id="phone" name="phone" placeholder="Your Phone">
                               
                                <small class="text-danger" id="error_message_phone"></small>
                               
                              
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <label>Subject:<span style="color:red;">*</span></label>
                                <input type="text" name="subject" id="subject" placeholder="Your Subject" >
                             
                                <small class="text-danger" id="error_message_subject"></small>
                            
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label>Message:<span style="color:red;">*</span></label>
                                <textarea class="" name="message" id="messagesdad" placeholder="Message"></textarea>
                             
                                <small class="text-danger" id="error_message_message"></small>
                            
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <button class="theme-btn btn-style-eight clearfix" type="submit">
                                    <span class="btn-wrap">
                                        <span class="text-one">Send Message</span>
                                        <span class="text-two">Send Message</span>
                                    </span>
                                </button>
                            </div>

                        </div>
                    </form>

                </div>
                <!--End Contact Form -->

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
$(document).ready(function () {
    $('#contact_form').submit(function (e) {
        e.preventDefault();
        $('#error_message_phone').empty();
        $('#error_message_username').empty();
        $('#error_message_email').empty();
        $('#error_message_subject').empty();
        $('#error_message_message').empty();

        if ($('#username').val() == '') {
            $('#error_message_username').html('Please enter a Name.');
            return;
        }
        else if (!validateEmail($('#email').val())) {
            $('#error_message_email').html('Please enter a valid email.');
            return;
        }
        else if (!isValidPhoneNumber($('#phone').val())) {
            $('#error_message_phone').html('Please enter a valid 10-digit Phone Number.');
            return;
        }
       
        else if ($('#subject').val() == '') {
            $('#error_message_subject').html('Please enter a Subject.');
            return;
        }
        
        else if ($('#messagesdad').val() == '') {
            $('#error_message_message').html('Please Fill Message.');
            return;
        }

        // else if ($('#bed').val() === '') {
        //     alert('Please Select a Bed.');
        //     return;
        // }
     

        $(this).unbind('submit').submit();
    });
});
function isValidPhoneNumber(phoneNumber) {
        var cleanedPhoneNumber = phoneNumber.replace(/\D/g, '');
        return cleanedPhoneNumber.length === 10;
}
function validateEmail(email)
{
    const re = /\S+@\S+\.\S+/;
    return re.test(email);
}
</script>
    <!-- End Contact Form Section -->
@endsection
