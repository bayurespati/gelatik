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
        <div class="page-header py-0 bg-primary px-3 px-xl-0 border-radius-2 p-relative mb-5 overflow-hidden">
            <div class="overflow-hidden p-absolute top-0 left-0 bottom-0 h-100 w-100">
                <div class="custom-el-5 custom-pos-4">
                    <img class="img-fluid opacity-2 opacity-hover-2" src="img/demos/accounting-1/svg/waves.svg" alt="">
                </div>
            </div>
            <div class="container p-relative z-index-1 py-2">
                <div class="row mh-200px mh-lg-300px align-items-center py-4">
                    <div class="col">
                        <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                            <span class="badge bg-color-dark-rgba-10 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span class="d-inline-flex py-1 px-2">How We Do It</span></span>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                            <h1 class="text-dark text-9 text-lg-12 font-weight-semibold line-height-1 mb-2">Our Process</h1>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                            <ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
                                <li><a href="demo-accounting-1.html" class="text-dark text-decoration-none">Home</a></li>
                                <li class="active">Our Process</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-lg-5" id="intro">
            <div class="row mb-5">
                <div class="col text-center">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">How to Set Financial Goals for Your Future</h2>
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <p class="pe-lg-5 mb-0">At Porto, we believe that a personalized and systematic approach is key to providing exceptional accounting and financial services. Our process is designed to ensure transparency, accuracy, and efficiency at every step, allowing us to deliver the highest level of service to our clients. Here’s how we work with you to achieve your financial goals:</p>
                    </div>

                </div>
            </div>
            <div class="row counters mb-5">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
                    <div class="d-flex flex-column pt-2 pb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                        <p class="d-inline-block mb-0 font-weight-bold line-height-1 counter"><mark class="text-dark mark mark-pos-2 mark-height-50 mark-color bg-color-before-primary-rgba-30 font-secondary text-15 mark-height-30 n-ls-5 p-0" data-to="30" data-append="+"></mark></p>
                        <span class="custom-font-tertiary text-6 text-dark n-ls-1 fst-italic pt-2">Years of Experience</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
                    <div class="d-flex flex-column pt-2 pb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <p class="d-inline-block mb-0 font-weight-bold line-height-1 counter"><mark class="text-dark mark mark-pos-2 mark-height-50 mark-color bg-color-before-primary-rgba-30 font-secondary text-15 mark-height-30 n-ls-5 p-0" data-to="100" data-append="+"></mark></p>
                        <span class="custom-font-tertiary text-6 text-dark n-ls-1 fst-italic pt-2">Active Clients</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
                    <div class="d-flex flex-column pt-2 pb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <p class="d-inline-block mb-0 font-weight-bold line-height-1 counter"><mark class="text-dark mark mark-pos-2 mark-height-50 mark-color bg-color-before-primary-rgba-30 font-secondary text-15 mark-height-30 n-ls-5 p-0" data-to="50" data-append="+"></mark></p>
                        <span class="custom-font-tertiary text-6 text-dark n-ls-1 fst-italic pt-2">Teram Members</span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
                    <div class="d-flex flex-column pt-2 pb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                        <p class="d-inline-block mb-0 font-weight-bold line-height-1 counter"><mark class="text-dark mark mark-pos-2 mark-height-50 mark-color bg-color-before-primary-rgba-30 font-secondary text-15 mark-height-30 n-ls-5 p-0" data-to="99" data-append="%"></mark></p>
                        <span class="custom-font-tertiary text-6 text-dark n-ls-1 fst-italic pt-2">Positive Feedback</span>
                    </div>
                </div>
            </div>

            <div class="row counters mb-lg-5">
                <div class="col">
                    <section class="timeline mt-5">
                        <div class="timeline-body">
                            <div class="timeline-number bg-color-secondary box-shadow-8">
                                <h3 class="text-light text-5">1</h3>
                            </div>

                            <div class="row mt-5 align-items-center justify-content-around mb-5">
                                <div class="col-lg-5 bg-color-light p-3 order-0">
                                    <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                                        <img src="img/demos/accounting-1/process/process-1.jpg" class="img-fluid border-radius-2" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-5 bg-color-light p-3 pt-0 text-center text-lg-start">
                                    <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                                        <span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3">
                                            <span class="d-inline-flex py-1 px-2">Step 1</span>
                                        </span>
                                    </div>
                                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                        <h4 class="text-6 font-weight-semibold line-height-1 mb-4">Initial Consultation</h4>
                                    </div>
                                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                        <p class="pe-lg-5">We start with a comprehensive consultation to understand your business, financial goals, and unique needs. This allows us to tailor our services to ensure the best possible outcomes for your business.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-number bg-color-secondary box-shadow-8">
                                <h3 class="text-light text-5">2</h3>
                            </div>

                            <div class="row mt-5 align-items-center justify-content-around">
                                <div class="col-lg-5 bg-color-light p-3 order-lg-1">
                                    <div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0">
                                        <img src="img/demos/accounting-1/process/process-2.jpg" class="img-fluid border-radius-2" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-5 bg-color-light p-3 pt-0 text-center text-lg-start">
                                    <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                                        <span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3">
                                            <span class="d-inline-flex py-1 px-2">Step 2</span>
                                        </span>
                                    </div>
                                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                        <h4 class="text-6 font-weight-semibold line-height-1 mb-4">Customized Strategy Development</h4>
                                    </div>
                                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                        <p class="pe-lg-5">Based on our initial consultation, we craft a personalized accounting strategy. This plan is designed to address your specific financial challenges and capitalize on opportunities for growth and efficiency.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-number bg-color-secondary box-shadow-8">
                                <h3 class="text-light text-5">3</h3>
                            </div>

                            <div class="row mt-5 align-items-center justify-content-around mb-5">
                                <div class="col-lg-5 bg-color-light p-3 order-0">
                                    <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                                        <img src="img/demos/accounting-1/process/process-3.jpg" class="img-fluid border-radius-2" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-5 bg-color-light p-3 pt-0 text-center text-lg-start">
                                    <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                                        <span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3">
                                            <span class="d-inline-flex py-1 px-2">Step 3</span>
                                        </span>
                                    </div>
                                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                        <h4 class="text-6 font-weight-semibold line-height-1 mb-4">Implementation</h4>
                                    </div>
                                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                        <p class="pe-lg-5">Once the strategy is approved, our team gets to work. We handle all the details, from setting up efficient bookkeeping systems to managing payroll, taxes, and compliance, ensuring everything runs smoothly and on time.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-number bg-color-secondary box-shadow-8">
                                <h3 class="text-light text-5">4</h3>
                            </div>

                            <div class="row mt-5 align-items-center justify-content-around">
                                <div class="col-lg-5 bg-color-light p-3 order-lg-1">
                                    <div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0">
                                        <img src="img/demos/accounting-1/process/process-4.jpg" class="img-fluid border-radius-2" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-5 bg-color-light p-3 pt-0 text-center text-lg-start">
                                    <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                                        <span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3">
                                            <span class="d-inline-flex py-1 px-2">Step 4</span>
                                        </span>
                                    </div>
                                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                        <h4 class="text-6 font-weight-semibold line-height-1 mb-4">Ongoing Monitoring and Support</h4>
                                    </div>
                                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                        <p class="pe-lg-5">We don’t just set things up and walk away. Our team continuously monitors your financials, providing regular reports and insights. We’re always available to answer questions, make adjustments, and offer guidance.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>

        <!-- FAQs -->
        <div class="text-center overflow-hidden w-100">
            <div class="appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
                <h2 class="text-resp-150 ws-nowrap font-weight-semi-bold text-overflow-center text-color-grey-100 n-ls-5 mb-5">FAQ's</h2>
            </div>
        </div>
        <div class="bg-grey-100 px-3 px-xl-0 border-radius-2 p-relative overflow-hidden custom-pos-3">
            <div class="container py-5">
                <div class="row pt-5">
                    <div class="col">
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                            <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Frequently Asked Questions</h2>
                        </div>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col">
                        <div class="toggle toggle-minimal toggle-faqs toggle-dark m-0" data-plugin-toggle>
                            <section class="toggle">
                                <a class="toggle-title text-4 text-dark">What types of businesses do you work with?</a>
                                <div class="toggle-content">
                                    <p class="mb-0">We work with a wide range of businesses, from small startups to large corporations, across various industries. Our team is equipped to handle the unique accounting needs of any business.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title text-4 text-dark">How do you charge for your services?</a>
                                <div class="toggle-content">
                                    <p class="mb-0">Our pricing is flexible and depends on the scope of work required. We offer competitive hourly rates, flat fees for specific services, and custom packages tailored to your business’s needs.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title text-4 text-dark">What accounting software do you use?</a>
                                <div class="toggle-content">
                                    <p class="mb-0">We use industry-leading software like QuickBooks, Xero, and Sage, but we’re also proficient in a variety of other platforms. We can work with your existing system or recommend the best software for your needs.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title text-4 text-dark">Can you help with tax planning and preparation?</a>
                                <div class="toggle-content">
                                    <p class="mb-0">Yes, we provide comprehensive tax services, including tax planning, preparation, and filing. Our goal is to help you minimize your tax liabilities while ensuring full compliance with all regulations.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title text-4 text-dark">How often will I receive financial reports?</a>
                                <div class="toggle-content">
                                    <p class="mb-0">The frequency of reporting is up to you. We can provide monthly, quarterly, or annual reports, depending on your needs. Regular communication ensures that you’re always informed about your financial standing.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title text-4 text-dark">Do you offer bookkeeping services?</a>
                                <div class="toggle-content">
                                    <p class="mb-0">Absolutely. We provide full-service bookkeeping, including transaction recording, bank reconciliations, payroll processing, and more, to keep your financials in order.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title text-4 text-dark">What makes your firm different from others?</a>
                                <div class="toggle-content">
                                    <p class="mb-0">Our firm is distinguished by our personalized approach, deep industry knowledge, and commitment to building long-term relationships with our clients. We’re not just accountants—we’re your business partners.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title text-4 text-dark">How do you ensure the security of my financial data?</a>
                                <div class="toggle-content">
                                    <p class="mb-0">We take data security very seriously. Our firm uses the latest encryption technologies and follows strict protocols to protect your financial information from unauthorized access.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title text-4 text-dark">Can you assist with financial forecasting and budgeting?</a>
                                <div class="toggle-content">
                                    <p class="mb-0">Yes, we offer strategic financial planning services, including forecasting, budgeting, and cash flow analysis, to help you make informed decisions and achieve your business goals.</p>
                                </div>
                            </section>
                            <section class="toggle">
                                <a class="toggle-title text-4 text-dark">How do I get started with your services?</a>
                                <div class="toggle-content">
                                    <p class="mb-0">Getting started is easy! Simply contact us to schedule an initial consultation, where we’ll discuss your needs and how we can best support your business.</p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Your Jorney -->
        <div class="container" id="intro">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mt-5 mt-lg-0 py-lg-5">
                    <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                        <span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Are You Ready</span></span>
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 pe-lg-5 mb-4">Start Your Journey with Us Today</h2>
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <p class="pe-lg-5">Our proven process is designed to provide clarity, confidence, and peace of mind. Ready to take control of your financial future? Contact us today to schedule your initial consultation and discover how we can help you achieve your financial goals.</p>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                        <div class="py-2 d-flex flex-column flex-md-row align-items-center text-4-5 n-ls-1 text-dark">
                            <img src="img/demos/accounting-1/icons/icon-4.svg" width="28" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary me-md-2'}" /> <strong class="custom-font-secondary pe-2">Join Us</strong><span class="d-none d-md-inline-block pe-2"> | </span>1000+ clients globally!
                            <p class="ms-md-2 mb-0 text-3-5 p-relative bottom-2"><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i></p>
                        </div>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                        <div class="d-flex flex-column flex-lg-row pt-3 mt-2 align-items-lg-center">
                            <div class="text-center text-lg-start">
                                <a href="demo-accounting-1-contact.html" class="btn btn-rounded btn-dark box-shadow-7 font-weight-medium btn-swap-1" data-clone-element="1">
                                    <span>Become a Client <i class="fa-solid fa-arrow-right ms-2 p-relative left-10"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 text-center p-relative py-5">
                    <div class="opacity-2 p-absolute w-100">
                        <img src="img/icons/abstract-bg-1.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary w-100'}" />
                    </div>
                    <div class="cascading-images-wrapper custom-cascading-images-wrapper-1">
                        <div class="cascading-images p-relative">
                            <div class="custom-mask-img custom-mask-img-2">
                                <img class="img-fluid" src="img/demos/accounting-1/generic/generic-2.jpg" loading="lazy" alt="">
                            </div>
                            <div class="p-absolute w-100 custom-mask-img custom-mask-img-3" style="top: 21%; left: -30%;">
                                <img src="img/demos/accounting-1/generic/generic-3.jpg" loading="lazy" class="img-fluid" alt="" />
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
                                <a href="demo-accounting-1-projects.html" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">View Our Projects <i class="fas fa-arrow-right ms-2"></i></a>
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