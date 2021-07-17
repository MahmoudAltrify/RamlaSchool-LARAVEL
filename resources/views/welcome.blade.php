@extends('layouts.app')

@section('title')
    Home Page
@endsection
@section('content')
    <!--Slider Area Start-->
    <div class="slider-area slider-style-1">
        <div class="preview-2">
            <div id="nivoslider" class="slides">
                <img src="{{asset('img/slider/1.jpg')}}" alt="" title="#slider-1-caption1"/>
                <img src="{{asset('img/slider/2.jpg')}}" alt="" title="#slider-1-caption2"/>
            </div>
            <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                <div class="banner-content slider-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="text-content">
                                    <h1 class="title1">Ramla School Pioneers Academy</h1>
                                    <p class="sub-title">
                                        Ramla School Pioneers Academy where your kids will find there comfort zone.
                                    </p>
                                    <div class="banner-readmore">
                                        <a title="Read more" href="{{route('contact')}}">Enroll your child</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
                <div class="banner-content slider-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="text-content slide-2 hidden-xs">
                                    <h1 class="title1">Education for Kids</h1>
                                    <p class="sub-title">
                                        Ramla School Pioneers Academy where we care about<br/>
                                        your kids as ours
                                    </p>
                                    <div class="banner-readmore">
                                        <a title="Read more" href="{{route('contact')}}">Enroll your child</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Slider Area-->
    <!--Activity Area Start-->
    <div class="activity-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 activity">
                    <div class="single-activity">
                        <div class="single-activity-icon">
                            <i class="fa fa-gamepad"></i>
                        </div>
                        <h4>Funny Games</h4>
                        <p>
                            {{--                            kjfsdkjdskjksdjlksjdmsdlk, dkjskfnrksdfsdmfc, kjdsfklesd.--}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 activity">
                    <div class="single-activity">
                        <div class="single-activity-icon">
                            <i class="fa fa-fort-awesome"></i>
                        </div>
                        <h4>Toys</h4>
                        <p>
                            {{--                            kjfsdkjdskjksdjlksjdmsdlk, dkjskfnrksdfsdmfc, kjdsfklesd.--}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 activity">
                    <div class="single-activity mrg-res-top-md">
                        <div class="single-activity-icon">
                            <i class="fa fa-futbol-o"></i>
                        </div>
                        <h4>Activities</h4>
                        <p>
                            {{--                            kjfsdkjdskjksdjlksjdmsdlk, dkjskfnrksdfsdmfc, kjdsfklesd.--}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 activity">
                    <div class="single-activity mrg-res-top-md">
                        <div class="single-activity-icon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <h4>Education</h4>
                        <p>
                            {{--                            kjfsdkjdskjksdjlksjdmsdlk, dkjskfnrksdfsdmfc, kjdsfklesd.--}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Activity Area-->
    <!--Advertise Area Start-->
    <div class="advertise-area text-center section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>
                        How to <span>Enroll Your Child</span> to a <span>Class</span>?
                    </h2>
                    <a target="_blank"
                       href="https://www.facebook.com/%D9%85%D8%AF%D8%B1%D8%B3%D8%A9-%D8%A3%D9%83%D8%A7%D8%AF%D9%8A%D9%85%D9%8A%D8%A9-%D8%B1%D9%88%D8%A7%D8%AF-%D8%A7%D9%84%D8%B1%D9%85%D9%84%D8%A9-%D8%A7%D9%84%D8%AA%D8%B1%D8%A8%D9%88%D9%8A%D8%A9-175053893054727">
                        Call Us</a>
                </div>
            </div>
        </div>
    </div>
    <!--End of Advertise Area-->
    <!--Class Area Start-->
    <div class="class-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Our Classes</h3>
                            <p>Our preschool program has six dedicated classes</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="class-carousel carousel-style-one owl-carousel">
                <div class="single-class">
                    <div class="single-class-image">
                        <img src="{{asset('img/class/10.jpg')}}" alt=""/>
                        <span class="class-date">Apr 21 <span>2016</span></span>
                    </div>
                    <div class="single-class-text">
                        <div class="class-des">
                            <h4 dir="rtl"><a href="#">Letter Match Class</a></h4>
                            <p>
                                The concept of the activity room is about 'Learning', through
                                play, in a totally different environment. The perfect class
                                for your child with the best.
                            </p>
                        </div>
                        <div class="class-schedule">
                            <span>AGE: 5 - 6 years</span>
                            <span>CLASS SIZE: 25</span>
                            <span class="arrow"
                            ><a href="#"><i class="fa fa-angle-right"></i></a
                                ></span>
                        </div>
                    </div>
                </div>
                <div class="single-class">
                    <div class="single-class-image">

                        <img src="{{asset('img/class/11.jpg')}}" alt=""/>
                        <span class="class-date">OCT 10 <span>2016</span></span>
                    </div>
                    <div class="single-class-text">
                        <div class="class-des">
                            <h4><a href="#">Cool Math Class</a></h4>
                            <p>
                                The students learn different skills like rhythm, flexibility,
                                and coordination. Lorem ipsum dolor sit amet. The perfect
                                class for your child with the best.
                            </p>
                        </div>
                        <div class="class-schedule">
                            <span>AGE: 4 - 5 years</span>
                            <span>CLASS SIZE: 38</span>
                            <span class="arrow"
                            ><a href="#"><i class="fa fa-angle-right"></i></a
                                ></span>
                        </div>
                    </div>
                </div>
                <div class="single-class">
                    <div class="single-class-image">
                        <img src="{{asset('img/class/12.jpg')}}" alt=""/>
                        <span class="class-date">FEB 19 <span>2016</span></span>
                    </div>
                    <div class="single-class-text">
                        <div class="class-des">
                            <h4><a href="#">Alphabet Matching Class</a></h4>
                            <p>
                                The students learn different skills like rhythm, flexibility,
                                and coordination. Lorem ipsum dolor sit amet. The perfect
                                class for your child with the best.
                            </p>
                        </div>
                        <div class="class-schedule">
                            <span>AGE: 3 - 4 years</span>
                            <span>CLASS SIZE: 50</span>
                            <span class="arrow"
                            ><a href="#"><i class="fa fa-angle-right"></i></a
                                ></span>
                        </div>
                    </div>
                </div>
                <div class="single-class">
                    <div class="single-class-image">

                        <img src="{{asset('img/class/10.jpg')}}" alt=""/>
                        <span class="class-date">Apr 21 <span>2016</span></span>
                    </div>
                    <div class="single-class-text">
                        <div class="class-des">
                            <h4><a href="#">Letter Match Class</a></h4>
                            <p>
                                The concept of the activity room is about 'Learning', through
                                play, in a totally different environment. The perfect class
                                for your child with the best.
                            </p>
                        </div>
                        <div class="class-schedule">
                            <span>AGE: 5 - 6 years</span>
                            <span>CLASS SIZE: 25</span>
                            <span class="arrow"
                            ><a href="#"><i class="fa fa-angle-right"></i></a
                                ></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Class Area-->

    <!--Service Area Start-->
    <div class="service-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Our Services</h3>
                            <p>Our best services for your kids</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-service-item-wrapper">
                        <div class="single-service-item">
                            <div class="single-service-text">
                                <h4>Meals Provided</h4>
                                <p>
                                    We provide healthy meals to your children, which helps them
                                    to stay focused and strong.
                                </p>
                            </div>
                            <div class="single-service-icon">
                                <i class="fa fa-cutlery"></i>
                            </div>
                        </div>
                        <div class="single-service-item">
                            <div class="single-service-text">
                                <h4>Language Lessons</h4>
                                <p>
                                    We provide multi language classes to train your kids gaining a multi language
                                    skills.
                                </p>
                            </div>
                            <div class="single-service-icon">
                                <i class="fa fa-language"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="service-image">
                        <img src="{{asset('img/banner/2.jpg')}}" alt=""/>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-service-item-wrapper">
                        <div class="single-service-item">
                            <div class="single-service-icon">
                                <i class="fa fa-calendar-check-o"></i>
                            </div>
                            <div class="single-service-text">
                                <h4>Daily Sessions</h4>
                                <p>
                                    We provide day to day sessions to make sure that your kids get all the
                                    necessary knowledge.
                                </p>
                            </div>
                        </div>

                        <div class="single-service-item">
                            <div class="single-service-text">
                                <h4>Transportation</h4>
                                <p>
                                    We provide safe transportation from your home to school, so don't be wary.
                                </p>
                            </div>
                            <div class="single-service-icon">
                                <i class="fa fa-bus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Service Area-->
    <!--Fun Factor Area Start-->
    <div class="fun-factor-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-fun-factor">
                        <div class="fun-factor-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <h2><span class="counter">47</span></h2>
                        <span>Teacher</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-fun-factor">
                        <div class="fun-factor-icon">
                            <i class="fa fa-bank"></i>
                        </div>
                        <h2><span class="counter">2</span></h2>
                        <span>Campus</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-fun-factor">
                        <div class="fun-factor-icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <h2><span class="counter">400</span></h2>
                        <span>Students</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-fun-factor no-margin">
                        <div class="fun-factor-icon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <h2><span class="counter">5</span></h2>
                        <span>Teaching Days from Sun to Thur</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Fun Factor Area-->
    <!--Teachers Area Start-->
    <div class="teachers-area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Our Teachers</h3>
                            <p>We are glad to introduce our professional staff</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="teacher-image">
                        <img src="{{asset('img/teacher/1.jpg')}}" alt=""/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-image-text-wrapper">
                        <div class="testimonial-image-slider text-center">
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{asset('img/teacher/2.jpg')}}" alt="teacher 1"/>
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{asset('img/teacher/3.jpg')}}" alt="teacher 2"/>
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{asset('img/teacher/4.jpg')}}" alt="teacher 3"/>
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{asset('img/teacher/5.jpg')}}" alt="teacher 4"/>
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{asset('img/teacher/2.jpg')}}" alt="teacher 1"/>
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{asset('img/teacher/3.jpg')}}" alt="teacher 2"/>
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{asset('img/teacher/4.jpg')}}" alt="teacher 3"/>
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{asset('img/teacher/5.jpg')}}" alt="teacher 4"/>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-text-slider">
                            <div class="sin-testiText">
                                <h2>Chowchilla Madera</h2>
                                <span class="language">Spanish Teacher</span>
                                <div class="teacher-info-container">
                                    <p>
                                        <i class="fa fa-graduation-cap"></i>Degree: Spanish
                                        Literature Master
                                    </p>
                                    <p>
                                        <i class="fa fa-star"></i>Experience: 2 Years in Preschool
                                        Education
                                    </p>
                                    <p>
                                        <i class="fa fa-edit"></i>My Courses: Paint Kiddie, Mini
                                        Kiddie
                                    </p>
                                </div>
                                {{--                                <p>--}}

                                {{--                                </p>--}}
                                <div class="teacher-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                                <a href="#" class="button-default">View Profile</a>
                            </div>
                            <div class="sin-testiText">
                                <h2>Kattie Luis</h2>
                                <span class="language">English Teacher</span>
                                <div class="teacher-info-container">
                                    <p>
                                        <i class="fa fa-graduation-cap"></i>Degree: English
                                        Literature Master
                                    </p>
                                    <p>
                                        <i class="fa fa-star"></i>Experience: 5 Years in High
                                        Education
                                    </p>
                                    <p>
                                        <i class="fa fa-edit"></i>My Courses: Paint Kiddie, Mini
                                        Kiddie
                                    </p>
                                </div>
                                {{--                                <p>--}}

                                {{--                                </p>--}}
                                <div class="teacher-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                                <a href="#" class="button-default">View Profile</a>
                            </div>
                            <div class="sin-testiText">
                                <h2>James Slock</h2>
                                <span class="language">Japanese Teacher</span>
                                <div class="teacher-info-container">
                                    <p>
                                        <i class="fa fa-graduation-cap"></i>Degree: Japanese
                                        Literature Master
                                    </p>
                                    <p>
                                        <i class="fa fa-star"></i>Experience: 6 Years in School
                                        Education
                                    </p>
                                    <p>
                                        <i class="fa fa-edit"></i>My Courses: Language Kiddie,
                                        Learn Kiddie
                                    </p>
                                </div>
                                {{--                                <p>--}}

                                {{--                                </p>--}}
                                <div class="teacher-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                                <a href="#" class="button-default">View Profile</a>
                            </div>
                            <div class="sin-testiText">
                                <h2>Julia Thomson</h2>
                                <span class="language">Chinese Teacher</span>
                                <div class="teacher-info-container">
                                    <p>
                                        <i class="fa fa-graduation-cap"></i>Degree: Chinese
                                        Literature Master
                                    </p>
                                    <p>
                                        <i class="fa fa-star"></i>Experience: 1 Years in Preschool
                                        Education
                                    </p>
                                    <p>
                                        <i class="fa fa-edit"></i>My Courses: Activities Kiddie
                                    </p>
                                </div>
                                {{--                                <p>--}}

                                {{--                                </p>--}}
                                <div class="teacher-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                                <a href="#" class="button-default">View Profile</a>
                            </div>
                            <div class="sin-testiText">
                                <h2>Chowchilla Madera</h2>
                                <span class="language">Spanish Teacher</span>
                                <div class="teacher-info-container">
                                    <p>
                                        <i class="fa fa-graduation-cap"></i>Degree: Spanish
                                        Literature Master
                                    </p>
                                    <p>
                                        <i class="fa fa-star"></i>Experience: 2 Years in Preschool
                                        Education
                                    </p>
                                    <p>
                                        <i class="fa fa-edit"></i>My Courses: Paint Kiddie, Mini
                                        Kiddie
                                    </p>
                                </div>
                                {{--                                <p>--}}

                                {{--                                </p>--}}
                                <div class="teacher-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                                <a href="#" class="button-default">View Profile</a>
                            </div>
                            <div class="sin-testiText">
                                <h2>Kattie Luis</h2>
                                <span class="language">English Teacher</span>
                                <div class="teacher-info-container">
                                    <p>
                                        <i class="fa fa-graduation-cap"></i>Degree: English
                                        Literature Master
                                    </p>
                                    <p>
                                        <i class="fa fa-star"></i>Experience: 5 Years in High
                                        Education
                                    </p>
                                    <p>
                                        <i class="fa fa-edit"></i>My Courses: Paint Kiddie, Mini
                                        Kiddie
                                    </p>
                                </div>
                                {{--                                <p>--}}

                                {{--                                </p>--}}
                                <div class="teacher-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                                <a href="#" class="button-default">View Profile</a>
                            </div>
                            <div class="sin-testiText">
                                <h2>James Slock</h2>
                                <span class="language">Japanese Teacher</span>
                                <div class="teacher-info-container">
                                    <p>
                                        <i class="fa fa-graduation-cap"></i>Degree: Japanese
                                        Literature Master
                                    </p>
                                    <p>
                                        <i class="fa fa-star"></i>Experience: 6 Years in School
                                        Education
                                    </p>
                                    <p>
                                        <i class="fa fa-edit"></i>My Courses: Language Kiddie,
                                        Learn Kiddie
                                    </p>
                                </div>
                                {{--                                <p>--}}

                                {{--                                </p>--}}
                                <div class="teacher-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                                <a href="#" class="button-default">View Profile</a>
                            </div>
                            <div class="sin-testiText">
                                <h2>Julia Thomson</h2>
                                <span class="language">Chinese Teacher</span>
                                <div class="teacher-info-container">
                                    <p>
                                        <i class="fa fa-graduation-cap"></i>Degree: Chinese
                                        Literature Master
                                    </p>
                                    <p>
                                        <i class="fa fa-star"></i>Experience: 1 Years in Preschool
                                        Education
                                    </p>
                                    <p>
                                        <i class="fa fa-edit"></i>My Courses: Activities Kiddie
                                    </p>
                                </div>
                                {{--                                <p>--}}

                                {{--                                </p>--}}
                                <div class="teacher-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                                <a href="#" class="button-default">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Teachers Area-->
    <!--Gallery Area Start-->
    <div class="gallery-area section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Our Gallery</h3>
                            <p>Discover Our Photo Gallery</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-menu">
                        <ul>
                            <li class="filter" data-filter="all">All</li>
{{--                            <li class="filter" data-filter=".drawing">Drawing</li>--}}
                            <li class="filter" data-filter=".excursions">Excursions</li>
{{--                            <li class="filter" data-filter=".courses">Courses</li>--}}
                            <li class="filter" data-filter=".play">Play time</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="gallery-row">
                <div class="filter-items row">
                    <div
                        class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items drawing overlay-hover"
                    >
                        <div class="overlay-effect">
                            <a><img src="{{asset('img/gallery/1.jpg')}}" alt=""/></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="img/gallery/1.jpg"
                                ><i class="fa fa-image"></i
                                    ></a>
                                <span class="gallery-text"></span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items play courses overlay-hover"
                    >
                        <div class="overlay-effect">
                            <a><img src="img/gallery/2.jpg" alt=""/></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="img/gallery/2.jpg"
                                ><i class="fa fa-image"></i
                                    ></a>
                                <span class="gallery-text"></span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items play overlay-hover"
                    >
                        <div class="overlay-effect">
                            <a><img src="img/gallery/3.jpg" alt=""/></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="img/gallery/3.jpg"
                                ><i class="fa fa-image"></i
                                    ></a>
                                <span class="gallery-text"></span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items play excursions overlay-hover"
                    >
                        <div class="overlay-effect">
                            <a><img src="img/gallery/4.jpg" alt=""/></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="img/gallery/4.jpg"
                                ><i class="fa fa-image"></i
                                    ></a>
                                <span class="gallery-text"></span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items courses excursions overlay-hover"
                    >
                        <div class="overlay-effect">
                            <a><img src="img/gallery/5.jpg" alt=""/></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="img/gallery/5.jpg"
                                ><i class="fa fa-image"></i
                                    ></a>
                                <span class="gallery-text"></span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items drawing overlay-hover"
                    >
                        <div class="overlay-effect">
                            <a><img src="img/gallery/12.jpg" alt=""/></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="img/gallery/12.jpg"
                                ><i class="fa fa-image"></i
                                    ></a>
                                <span class="gallery-text"></span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items drawing overlay-hover"
                    >
                        <div class="overlay-effect">
                            <a><img src="img/gallery/19.jpg" alt=""/></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="img/gallery/19.jpg"
                                ><i class="fa fa-image"></i
                                    ></a>
                                <span class="gallery-text"></span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items drawing overlay-hover"
                    >
                        <div class="overlay-effect">
                            <a><img src="img/gallery/20.jpg" alt=""/></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="img/gallery/20.jpg"
                                ><i class="fa fa-image"></i
                                    ></a>
                                <span class="gallery-text"></span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items drawing overlay-hover"
                    >
                        <div class="overlay-effect">
                            <a><img src="img/gallery/21.jpg" alt=""/></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="img/gallery/21.jpg"
                                ><i class="fa fa-image"></i
                                    ></a>
                                <span class="gallery-text"></span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items drawing overlay-hover"
                    >
                        <div class="overlay-effect">
                            <a><img src="img/gallery/23.jpg" alt=""/></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="img/gallery/23.jpg"
                                ><i class="fa fa-image"></i
                                    ></a>
                                <span class="gallery-text"></span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items courses excursions overlay-hover"
                    >
                        <div class="overlay-effect">
                            <a><img src="img/gallery/22.jpg" alt=""/></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="img/gallery/22.jpg"
                                ><i class="fa fa-image"></i
                                    ></a>
                                <span class="gallery-text"></span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 col-sm-6 col-12 mb-18 mix single-items drawing excursions overlay-hover"
                    >
                        <div class="overlay-effect">
                            <a><img src="img/gallery/24.jpg" alt=""/></a>
                            <div class="gallery-hover-effect">
                                <a class="gallery-icon venobox" href="img/gallery/24.jpg"
                                ><i class="fa fa-image"></i
                                    ></a>
                                <span class="gallery-text"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Gallery Area-->


@endsection
