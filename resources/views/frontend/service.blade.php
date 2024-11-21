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
        <div class="page-header py-0 bg-primary px-3 px-xl-0 border-radius-2 p-relative mb-5">
            <div class="overflow-hidden p-absolute top-0 left-0 bottom-0 h-100 w-100">
                <div class="custom-el-5 custom-pos-4">
                    <img class="img-fluid opacity-2 opacity-hover-2" src="img/demos/accounting-1/svg/waves.svg" alt="">
                </div>
            </div>
            <div class="container p-relative z-index-1 py-2">
                <div class="row align-items-center py-4">
                    <div class="col-8 col-md-7">
                        <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                            <span class="badge bg-color-dark-rgba-10 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span class="d-inline-flex py-1 px-2">What We Do</span></span>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                            <h1 class="text-dark text-9 text-lg-12 font-weight-semibold line-height-1 mb-2">Services</h1>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                            <ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
                                <li><a href="demo-accounting-1.html" class="text-dark text-decoration-none">Home</a></li>
                                <li class="active">Services</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-4 col-md-5 p-relative">
                        <div class="opacity-2 p-absolute w-100 rotate-r-50 custom-pos-5 d-none d-lg-block">
                            <img src="img/icons/abstract-bg-1.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary w-100'}" />
                        </div>
                        <div class="custom-mask-img custom-mask-img-4 custom-el-6">
                            <img src="img/demos/accounting-1/generic/generic-11.jpg" loading="lazy" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Intro -->
        <div class="container" id="intro">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center p-relative pt-0 pb-2 py-lg-5 pe-lg-5">
                    <div class="opacity-2 p-absolute w-100 pe-5">
                        <img src="img/icons/abstract-bg-1.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary w-100 me-5'}" />
                    </div>
                    <div class="cascading-images-wrapper custom-cascading-images-wrapper-1">
                        <div class="cascading-images p-relative">
                            <div class="p-relative" style="left: -20%;">
                                <img class="img-fluid border-radius-2" src="img/demos/accounting-1/generic/generic-12.jpg" loading="lazy" alt="">
                            </div>
                            <div class="p-absolute w-100 custom-mask-img custom-mask-img-3" style="top: 21%; left: 0%;">
                                <img src="img/demos/accounting-1/generic/generic-13.jpg" loading="lazy" class="img-fluid" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 py-lg-5 ps-lg-4">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Expert finance solutions, tax planning, and so much more...</h2>
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <p class="pe-lg-5">We offer a comprehensive range of accounting and financial services designed to meet the diverse needs of our clients. Whether you are a business owner, an individual, or a non-profit organization, our team of experienced professionals is here to provide the expertise and support you need to achieve your financial goals.</p>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                        <div class="d-flex flex-column flex-lg-row pt-3 align-items-lg-center">
                            <div>
                                <a href="demo-accounting-1-about.html" class="btn btn-rounded btn-dark box-shadow-7 font-weight-medium btn-swap-1" data-clone-element="1">
                                    <span>Learn More <i class="fa-solid fa-arrow-right ms-2 p-relative left-10"></i></span>
                                </a>
                            </div>
                            <div class="text-4 px-3 d-none d-lg-block">-</div>
                            <div class="pt-4 pt-lg-0">
                                <div class="feature-box feature-box-secondary align-items-center">
                                    <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                                        <img src="img/icons/phone-2.svg" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                    </div>
                                    <div class="feature-box-info ps-2">
                                        <strong class="d-block text-uppercase text-color-secondary p-relative top-2">Call Us</strong>
                                        <a href="tel:1234567890" class="text-decoration-none font-secondary text-5 font-weight-semibold text-color-dark text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap p-relative bottom-2">800 123 4567</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Services -->
        <div class="bg-tertiary px-3 px-xl-0 border-radius-2 text-light mt-5 mt-lg-0 p-relative overflow-hidden">
            <div class="custom-el-3 custom-pos-6 opacity-1">
                <img class="img-fluid opacity-5" src="img/demos/accounting-1/svg/waves-2.svg" alt="">
            </div>
            <div class="container p-relative z-index-1">
                <div class="row align-items-center py-5">
                    <div class="col py-4">
                        <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                            <span class="badge bg-gradient-tertiary-dark text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Our Services</span></span>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-2 text-light">Accounting Services</h2>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            <p class="pe-lg-5 text-light opacity-7">Full-service accounting to drive your financial success.</p>
                        </div>

                        <div class="pt-2 pb-4">
                            <div class="row">
                                <div class="col-lg-4 mb-4 pb-1">
                                    <div class="box-shadow-7 border-radius-2 overflow-hidden">
                                        <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                            <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                <a href="demo-accounting-1-services-details.html" title="">
                                                    <img src="img/demos/accounting-1/services/service-1.jpg" loading="lazy" class="img-fluid" alt="">
                                                </a>
                                            </span>
                                            <span class="thumb-info-content">
                                                <span class="thumb-info-content-inner bg-light p-4">
                                                    <h4 class="text-5 mb-2">Accounting</h4>
                                                    <p class="line-height-7 text-3 mb-0">Comprehensive accounting services tailored to your business needs for financial.</p>
                                                    <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                        <a href="demo-accounting-1-services-details.html" class="text-uppercase text-color-secondary text-color-hover-primary font-weight-semibold text-decoration-underline">View Details</a>
                                                        <a href="demo-accounting-1-services-details.html" class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4 pb-1">
                                    <div class="box-shadow-7 border-radius-2 overflow-hidden">
                                        <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                            <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                <a href="demo-accounting-1-services-details.html" title="">
                                                    <img src="img/demos/accounting-1/services/service-2.jpg" loading="lazy" class="img-fluid" alt="">
                                                </a>
                                            </span>
                                            <span class="thumb-info-content">
                                                <span class="thumb-info-content-inner bg-light p-4">
                                                    <h4 class="text-5 mb-2">Tax Planning</h4>
                                                    <p class="line-height-7 text-3 mb-0">Expert tax planning to maximize savings and ensure compliance with tax regulations.</p>
                                                    <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                        <a href="demo-accounting-1-services-details.html" class="text-uppercase text-color-secondary text-color-hover-primary font-weight-semibold text-decoration-underline">View Details</a>
                                                        <a href="demo-accounting-1-services-details.html" class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4 pb-1">
                                    <div class="box-shadow-7 border-radius-2 overflow-hidden">
                                        <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                            <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                <a href="demo-accounting-1-services-details.html" title="">
                                                    <img src="img/demos/accounting-1/services/service-3.jpg" loading="lazy" class="img-fluid" alt="">
                                                </a>
                                            </span>
                                            <span class="thumb-info-content">
                                                <span class="thumb-info-content-inner bg-light p-4">
                                                    <h4 class="text-5 mb-2">Business Advisory</h4>
                                                    <p class="line-height-7 text-3 mb-0">Strategic business advisory to drive growth and enhance financial performance.</p>
                                                    <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                        <a href="demo-accounting-1-services-details.html" class="text-uppercase text-color-secondary text-color-hover-primary font-weight-semibold text-decoration-underline">View Details</a>
                                                        <a href="demo-accounting-1-services-details.html" class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4 pb-1">
                                    <div class="box-shadow-7 border-radius-2 overflow-hidden">
                                        <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                            <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                <a href="demo-accounting-1-services-details.html" title="">
                                                    <img src="img/demos/accounting-1/services/service-4.jpg" loading="lazy" class="img-fluid" alt="">
                                                </a>
                                            </span>
                                            <span class="thumb-info-content">
                                                <span class="thumb-info-content-inner bg-light p-4">
                                                    <h4 class="text-5 mb-2">Payroll Management</h4>
                                                    <p class="line-height-7 text-3 mb-0">Efficient payroll management to ensure timely and accurate employee compensation.</p>
                                                    <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                        <a href="demo-accounting-1-services-details.html" class="text-uppercase text-color-secondary text-color-hover-primary font-weight-semibold text-decoration-underline">View Details</a>
                                                        <a href="demo-accounting-1-services-details.html" class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4 pb-1">
                                    <div class="box-shadow-7 border-radius-2 overflow-hidden">
                                        <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                            <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                <a href="demo-accounting-1-services-details.html" title="">
                                                    <img src="img/demos/accounting-1/services/service-5.jpg" loading="lazy" class="img-fluid" alt="">
                                                </a>
                                            </span>
                                            <span class="thumb-info-content">
                                                <span class="thumb-info-content-inner bg-light p-4">
                                                    <h4 class="text-5 mb-2">Global Accounting</h4>
                                                    <p class="line-height-7 text-3 mb-0">Global accounting solutions to manage international finances and ensure compliance.</p>
                                                    <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                        <a href="demo-accounting-1-services-details.html" class="text-uppercase text-color-secondary text-color-hover-primary font-weight-semibold text-decoration-underline">View Details</a>
                                                        <a href="demo-accounting-1-services-details.html" class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4 pb-1">
                                    <div class="box-shadow-7 border-radius-2 overflow-hidden">
                                        <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                            <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                <a href="demo-accounting-1-services-details.html" title="">
                                                    <img src="img/demos/accounting-1/services/service-6.jpg" loading="lazy" class="img-fluid" alt="">
                                                </a>
                                            </span>
                                            <span class="thumb-info-content">
                                                <span class="thumb-info-content-inner bg-light p-4">
                                                    <h4 class="text-5 mb-2">Admin Services</h4>
                                                    <p class="line-height-7 text-3 mb-0">Comprehensive admin services to streamline operations and support your business growth.</p>
                                                    <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                        <a href="demo-accounting-1-services-details.html" class="text-uppercase text-color-secondary text-color-hover-primary font-weight-semibold text-decoration-underline">View Details</a>
                                                        <a href="demo-accounting-1-services-details.html" class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            <p class="mb-0 text-light d-flex justify-content-center">
                                <img src="img/demos/accounting-1/icons/icon-5.svg" width="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light me-2'}" />
                                24/7 Availability - Round-the-clock support for all your accounting needs, anytime.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Industries We Serve -->
        <div class="container py-4">
            <div class="row align-items-center py-5 my-3">
                <div class="col">
                    <div class="row justify-content-center">
                        <div class="col-9 text-center">
                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
                                <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Industries We Serve</h2>
                                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                    <p>We understand that every industry has its unique financial landscape and challenges. Our team of experienced professionals is dedicated to providing tailored accounting solutions that meet the specific needs of businesses across various sectors. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6 mb-2">
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Agribusiness</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Consumer Markets</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Financial Services</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Insurance</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Metals</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Banking</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Dealerships</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Fintech</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Life Sciences</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Private Equity</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Explore Further -->
        <div class="bg-secondary border-radius-2 p-relative overflow-hidden">
            <div class="container-fluid">
                <div class="row">
                    <div class="col px-0 text-center text-color-light">
                        <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-lg-center">
                            <div class="me-lg-4 flex-grow-1 flex-lg-grow-0">
                                <span class="d-inline-block text-3 py-4 px-5 text-uppercase font-weight-medium custom-bg-gradient-1 w-100 rounded-pill">Explore Further:</span>
                            </div>
                            <div class="me-3 ps-3 p-relative bottom-1 pt-3 pt-lg-0">
                                <a href="demo-accounting-1-process.html" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">Learn About Our Process <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                            <div class="py-3 py-lg-0 p-relative bottom-1 border-start border-color-light-rgba-20">
                                <a href="demo-accounting-1-contact.html" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">Get Free Consultation <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('frontend.partials.footer')
</div>
@endsection