@extends('frontend.layout.base')

@push('title')
<title>Sigelatik</title>
@endpush

@push('additional_css')
<style>
</style>
@endpush

@section('content')
<div class="body">
    @include('frontend.partials.header')
    <div role="main" class="main px-3 px-lg-5">
        <div class="page-header py-0 bg-tertiary px-3 px-xl-0 border-radius-2 p-relative mb-0 overflow-hidden bg-size-cover bg-position-center overlay overlay-color-dark overlay-show overlay-op-5" style="background-image: url(img/demos/accounting-1/bg/bg-2.jpg);">>
            <div class="container p-relative z-index-5 py-2">
                <div class="row mh-200px mh-lg-300px align-items-center py-4">
                    <div class="col">
                        <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                            <span class="badge bg-color-dark-rgba-30 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span class="d-inline-flex py-1 px-2">Get In Touch</span></span>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                            <h1 class="text-dark text-9 text-lg-12 text-color-light font-weight-semibold line-height-1 mb-2">Contact Us</h1>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                            <ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
                                <li><a href="demo-accounting-1.html" class="text-light text-decoration-none">Home</a></li>
                                <li class="active text-light opacity-7">Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Intro -->
        <div class="container pt-4 pt-lg-5 pb-4" id="intro">
            <div class="row pt-4">
                <div class="col">
                    <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                        <span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Let's Get Started</span></span>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                        <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-2">Reach out to us using the options below:</h2>
                    </div>
                </div>
                <div class="col-lg-6 p-relative">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <p class="mb-0">Whether you have a question about our services, need advice on tax planning, or want to schedule a consultation, our team of experienced professionals is ready to assist you.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-2">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">

                        <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'autoplay': true, 'dots': false, 'autoplayTimeout': 5000, 'margin': 10, 'animateOut': 'fadeOut'}">
                            <div>
                                <img class="img-fluid border-radius-2" src="img/demos/accounting-1/generic/generic-14.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-fluid border-radius-2" src="img/demos/accounting-1/generic/generic-15.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-fluid border-radius-2" src="img/demos/accounting-1/generic/generic-16.jpg" alt="">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0">

                    <div class="feature-box feature-box-secondary">
                        <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                            <img src="img/icons/pin-light.svg" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': ''}" />
                        </div>
                        <div class="feature-box-info ps-3">
                            <strong class="d-block text-4-5 text-dark mb-1">Office Address</strong>
                            <p class="mb-0 text-3-5 line-height-7">123 Financial Avenue, Suite 456,</p>
                            <p class="mb-0 text-3-5 line-height-7">Cityville, State, 12345</p>
                            <p class="mb-0 text-3-5 line-height-7"><a href="https://www.google.com/maps" target="_blank" class="text-color-secondary text-color-hover-primary font-weight-semi-bold text-decoration-underline">Get Directions</a></p>
                        </div>
                    </div>

                    <div class="feature-box feature-box-secondary mt-4 pt-2">
                        <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                            <img src="img/icons/email.svg" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        </div>
                        <div class="feature-box-info ps-3">
                            <strong class="d-block text-4-5 text-dark mb-1">E-mail</strong>
                            <p class="mb-0 text-3-5 line-height-7">General Inquiries:</p>
                            <p class="mb-0 text-3-5 line-height-7 pb-3"><a href="mailto:info@youraccountingfirm.com" class="text-color-secondary text-color-hover-primary font-weight-semi-bold text-decoration-underline">info@youraccountingfirm.com</a></p>
                            <p class="mb-0 text-3-5 line-height-7">Client Support:</p>
                            <p class="mb-0 text-3-5 line-height-7 pb-3"><a href="mailto:support@youraccountingfirm.com" class="text-color-secondary text-color-hover-primary font-weight-semi-bold text-decoration-underline">support@youraccountingfirm.com</a></p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">

                    <div class="feature-box feature-box-secondary">
                        <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                            <img src="img/icons/phone-2.svg" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        </div>
                        <div class="feature-box-info ps-3">
                            <strong class="d-block text-4-5 text-dark mb-1">Phone</strong>
                            <p class="mb-0 text-3-5 line-height-7">Main Office: <a href="tel:1234567890" class="text-color-secondary text-color-hover-primary font-weight-semi-bold text-decoration-underline">800 123 4567</a></p>
                            <p class="mb-0 text-3-5 line-height-7">Sales: <a href="tel:1234567890" class="text-color-secondary text-color-hover-primary font-weight-semi-bold text-decoration-underline">800 123 4567</a></p>
                            <p class="mb-0 text-3-5 line-height-7">Client Support: <a href="tel:1234567890" class="text-color-secondary text-color-hover-primary font-weight-semi-bold text-decoration-underline">800 123 4567</a></p>
                        </div>
                    </div>

                    <div class="feature-box feature-box-secondary mt-4 pt-2">
                        <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                            <img src="img/icons/clock.svg" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        </div>
                        <div class="feature-box-info ps-3">
                            <strong class="d-block text-4-5 text-dark mb-1">Business Hours</strong>
                            <p class="mb-0 text-3-5 line-height-7">Monday to Friday: 9:00 AM - 6:00 PM</p>
                            <p class="mb-0 text-3-5 line-height-7">Saturday: 10:00 AM - 2:00 PM</p>
                            <p class="mb-0 text-3-5 line-height-7">Sunday: Closed</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row pt-4">
                <div class="col pt-4">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <p class="mb-0 text-dark d-flex justify-content-center">
                            <img src="img/demos/accounting-1/icons/icon-5.svg" width="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark me-2'}" />
                            24/7 Availability - Round-the-clock support for all your accounting needs, anytime.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <div class="bg-grey-100 px-3 px-xl-0 border-radius-2 p-relative overflow-hidden mt-5">
            <div id="googlemaps" class="google-map m-0" style="min-height: 580px;"></div>
        </div>

        <!-- Free Quote -->
        <div class="container pt-5">
            <div class="row pt-4 pt-lg-5">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                        <span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Contact Form</span></span>
                    </div>
                    <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Get in Touch with Our Team</h2>

                    <form class="contact-form pt-3" action="php/contact-form.php" method="POST">
                        <div class="contact-form-success alert alert-success d-none mt-4">
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>

                        <div class="contact-form-error alert alert-danger d-none mt-4">
                            <strong>Error!</strong> There was an error sending your message.
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Your Name *</label>
                                <input type="text" value="" placeholder="Enter your name" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Email Address</label>
                                <input type="email" value="" placeholder="Enter your e-mail address" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Phone Number</label>
                                <input type="tel" value="" placeholder="Enter your phone number" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="phone">
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Company Name</label>
                                <input type="text" value="" placeholder="Enter your company name" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="company">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Additional Information</label>
                                <textarea maxlength="5000" placeholder="Enter Additional Information or Questions" rows="8" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <button type="submit" class="btn btn-rounded btn-dark box-shadow-7 font-weight-medium btn-swap-1" data-clone-element="1">
                                    <span>Submit <i class="fa-solid fa-arrow-right ms-2 p-relative left-10"></i></span>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-5 ps-lg-5">

                    <div class="appear-animation pt-lg-5 mt-lg-2" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                        <div class="d-flex align-items-center pt-2 pb-4">
                            <p class="d-inline-block mb-0 font-weight-bold line-height-1"><mark class="text-dark mark mark-pos-2 mark-height-50 mark-color bg-color-before-primary-rgba-30 font-secondary text-15 mark-height-30 n-ls-5 p-0">30+</mark></p>
                            <span class="custom-font-tertiary text-6 text-dark n-ls-1 fst-italic ps-2">Years of Experience</span>
                        </div>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                        <div class="py-2 d-flex align-items-center text-4-5 n-ls-1 text-dark">
                            <div>
                                <img src="img/demos/accounting-1/icons/icon-4.svg" width="48" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary me-md-2 p-relative top-2'}" />
                            </div>
                            <div class="ps-1">
                                <p class="mb-0 text-3-5 p-relative bottom-2"><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i></p>
                                <strong class="custom-font-secondary pe-2">Join Us</strong><span class="d-none d-md-inline-block pe-2"> | </span>1000+ clients globally!
                            </div>
                        </div>
                    </div>

                    <div class="appear-animation pt-4" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                        <span class="badge bg-light text-dark border custom-font-secondary border-all-light box-shadow-8 n-ls-05 rounded-pill text-uppercase font-weight-semibold text-2 px-3 py-2 px-1 me-1"><span class="d-inline-flex py-1 px-2">Quick Reply</span></span>
                        <p class="mb-0 text-dark mt-2 text-3-5">Usually in 24 hours in working days.</p>
                    </div>

                    <!-- Explore Further -->
                    <div class="bg-secondary border-radius-2 p-relative overflow-hidden mt-5">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col px-0 text-center text-color-light">
                                    <div class="d-flex flex-column">
                                        <div class="flex-grow-1">
                                            <span class="d-inline-block text-3 py-4 px-5 text-uppercase font-weight-medium custom-bg-gradient-1 w-100">Explore Further:</span>
                                        </div>
                                        <div class="me-3 ps-3 p-relative bottom-1 pt-3">
                                            <a href="demo-accounting-1-process.html" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2">Learn About Our Process <i class="fas fa-arrow-right ms-2"></i></a>
                                        </div>
                                        <div class="py-3 p-relative bottom-1 border-start border-color-light-rgba-20">
                                            <a href="demo-accounting-1-projects.html" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2">View Our Projects <i class="fas fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('frontend.partials.footer')
    <script>
        /* 
			Map Markers:
			- Get an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key
			- Generate Map Id: https://console.cloud.google.com/google/maps-apis/studio/maps
			- Use https://www.latlong.net/convert-address-to-lat-long.html to get Latitude and Longitude of a specific address
			*/
        (g => {
            var h, a, k, p = "The Google Maps JavaScript API",
                c = "google",
                l = "importLibrary",
                q = "__ib__",
                m = document,
                b = window;
            b = b[c] || (b[c] = {});
            var d = b.maps || (b.maps = {}),
                r = new Set,
                e = new URLSearchParams,
                u = () => h || (h = new Promise(async (f, n) => {
                    await (a = m.createElement("script"));
                    e.set("libraries", [...r] + "");
                    for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                    e.set("callback", c + ".maps." + q);
                    a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                    d[q] = f;
                    a.onerror = () => h = n(Error(p + " could not load."));
                    a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                    m.head.append(a)
                }));
            d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
        })
        ({
            key: "YOUR_API_KEY",
            v: "weekly"
        });

        async function initMap() {
            const {
                Map,
                InfoWindow
            } = await google.maps.importLibrary("maps");
            const {
                AdvancedMarkerElement,
                PinElement
            } = await google.maps.importLibrary(
                "marker",
            );
            const map = new Map(document.getElementById("googlemaps"), {
                zoom: 14,
                center: {
                    lat: -37.817240,
                    lng: 144.955820
                },
                mapId: "YOUR_MAP_API_ID",
            });
            const markers = [{
                position: {
                    lat: -37.817240,
                    lng: 144.955820
                },
                title: "Office 1<br>Melbourne, 121 King St, Australia<br>Phone: 123-456-1234",
            }];

            const infoWindow = new InfoWindow();

            markers.forEach(({
                position,
                title
            }, i) => {
                const pin = new PinElement({
                    background: "#e36159",
                    borderColor: "#e36159",
                    glyphColor: "#FFF",
                });
                const marker = new AdvancedMarkerElement({
                    position,
                    map,
                    title: `${title}`,
                    content: pin.element,
                });

                marker.addListener("click", ({
                    domEvent,
                    latLng
                }) => {
                    const {
                        target
                    } = domEvent;

                    infoWindow.close();
                    infoWindow.setContent(marker.title);
                    infoWindow.open(marker.map, marker);
                });
            });

        }

        initMap();
    </script>

    <!-- Current Page Vendor and Views -->
    <script src="js/views/view.contact.js"></script>
</div>
@endsection