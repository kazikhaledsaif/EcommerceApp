@extends('frontend.layouts.master')
@section('title' , 'Contact')
@section('content')



    <!--=============================================
    =            Breadcrumb Area         =
    =============================================-->

    <div class="breadcrumb-area breadcrumb-bg pt-85 pb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="{{ route('frontend.index') }}">Home</a> <span class="separator">/</span></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Breadcrumb Area  ======-->


    <!--=============================================
=            Contact page content         =
=============================================-->

    <div class="page-content mb-45">

        <!--=============================================
        =            google map container         =
        =============================================-->

        <div class="google-map-container mb-80">
            <div id="google-map"></div>
        </div>

        <!--=====  End of google map container  ======-->

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 mb-sm-70">
                    <!--=======  contact page side content  =======-->

                    <div class="contact-page-side-content">
                        <h3 class="contact-page-title">Contact Us</h3>

                        <!--=======  single contact block  =======-->

                        <div class="single-contact-block">
                            <h4><img src="{{ asset('frontend/assets/images/icons/contact-icon1.png') }}" alt=""> Address</h4>
                            <p>Haji Khalek Gamsa Super Market, Shekherchar Bazar, Mosjid road,</p>
                            <p> Gamsa potti,Madhabdi,Narsingdi</p>
                        </div>

                        <!--=======  End of single contact block  =======-->

                        <!--=======  single contact block  =======-->

                        <div class="single-contact-block">
                            <h4><img src="{{ asset('frontend/assets/images/icons/contact-icon2.png') }}" alt=""> Phone</h4>
                            <p>Mobile: +88 017 11 227 959</p>
                            <p>Hotline: +88 019 24 707 806</p>
                        </div>

                        <!--=======  End of single contact block  =======-->

                        <!--=======  single contact block  =======-->

                        <div class="single-contact-block">
                            <h4><img src="{{ asset('frontend/assets/images/icons/contact-icon3.png') }} " alt=""> Email</h4>
                            <p>jh.jahangir227@gmail.com</p>
                            <p> ja.jahangir227@gmail.com
                            </p>
                        </div>

                        <!--=======  End of single contact block  =======-->
                    </div>

                    <!--=======  End of contact page side content  =======-->

                </div>
                <div class="col-lg-9 col-md-8 pl-100 pl-sm-15">
                    <!--=======  contact form content  =======-->

                    <div class="contact-form-content">
                        <h3 class="contact-page-title">Tell Us Your Message</h3>

                        <div class="contact-form">
                            <form  id="contact-form" action="{{ route('frontend.feedback.add') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Your Name <span class="required">*</span></label>
                                    <input type="text" name="customerName" id="customername" required>
                                </div>
                                <div class="form-group">
                                    <label>Your Email <span class="required">*</span></label>
                                    <input type="email" name="customerEmail" id="customerEmail" required>
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="contactSubject" id="contactSubject">
                                </div>
                                <div class="form-group">
                                    <label>Your Message</label>
                                    <textarea name="contactMessage" id="contactMessage" ></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" value="submit" id="submit" class="pataku-btn" name="submit">send</button>
                                </div>
                            </form>
                        </div>
                        <p class="form-messege pt-10 pb-10 mt-10 mb-10"></p>
                    </div>

                    <!--=======  End of contact form content =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Contact page content  ======-->



@endsection()


@push('js')
    <!-- AJAX mail JS -->
    <script src="assets/js/ajax-mail.js"></script>

    <!-- Google Map -->
    <script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>

    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(40.740610, -73.935242), // New York

                // How you would like to style the map.
                // This is where you would paste any style found on

                styles: [{
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#e9e9e9"
                    },
                        {
                            "lightness": 17
                        }
                    ]
                },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#f5f5f5"
                        },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#ffffff"
                        },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "color": "#ffffff"
                        },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#ffffff"
                        },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#ffffff"
                        },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#f5f5f5"
                        },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#dedede"
                        },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "visibility": "on"
                        },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "saturation": 36
                        },
                            {
                                "color": "#333333"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#f2f2f2"
                        },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#fefefe"
                        },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "color": "#fefefe"
                        },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    }
                ]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('google-map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.740610, -73.935242),
                map: map,
                title: 'Greenfarm',
                icon: "{{ asset('frontend/assets/images/icons/map-marker.png') }} ",
                animation: google.maps.Animation.BOUNCE
            });
        }
    </script>
@endpush