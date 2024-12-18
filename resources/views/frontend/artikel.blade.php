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
        <div class="page-header py-0 bg-secondary px-3 px-xl-0 border-radius-2-top p-relative mb-0 overflow-hidden">
            <div class="overflow-hidden p-absolute top-0 left-0 bottom-0 h-100 w-100">
                <div class="custom-el-5 custom-pos-4">
                    <img class="img-fluid opacity-2 opacity-hover-2" src="img/demos/accounting-1/svg/waves.svg" alt="">
                </div>
            </div>
            <div class="container p-relative z-index-1 py-2">
                <div class="row mh-200px mh-lg-300px align-items-center py-4">
                    <div class="col">
                        <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                            <span class="badge bg-color-dark-rgba-30 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span class="d-inline-flex py-1 px-2">Our Blog</span></span>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                            <h1 class="text-9 text-lg-12 text-color-light font-weight-semibold line-height-1 mb-2">Latest News</h1>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                            <ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
                                <li><a href="demo-accounting-1.html" class="text-light text-decoration-none">Home</a></li>
                                <li class="active text-color-light opacity-7">Our Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- News -->
        <div class="bg-grey-100 px-3 px-xl-0 border-radius-2-bottom p-relative overflow-hidden">
            <div class="container py-5">
                <div class="row pt-5">
                    <div class="col-lg-4 mb-4 pb-1">
                        <article class="post">
                            <div class="card rounded-3 border-0 bg-transparent box-shadow-10 box-shadow-1 box-shadow-1-hover anim-hover-translate-top-10px transition-3ms">
                                <div class="p-relative rounded-3 overflow-hidden">
                                    <div class="post-date p-absolute top-20 left-20">
                                        <span class="day py-1 text-4 font-weight-bold text-secondary">15</span>
                                        <span class="month bg-secondary">Jan</span>
                                    </div>
                                    <div class="p-absolute right-10 top-10">
                                        <i class="fa-regular fa-message text-color-light text-4 p-absolute right-10 top-20"></i>
                                        <span class="badge badge-comments-count bg-secondary text-color-light rounded-pill p-0 p-relative z-index-1">5</span>
                                    </div>
                                    <a href="demo-accounting-1-news-post.html" class="text-decoration-none">
                                        <img class="card-img-top" src="img/demos/accounting-1/blog/blog-thumb-1.jpg" loading="lazy" alt="Card Image">
                                    </a>
                                    <div class="card-body bg-light p-4">
                                        <span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">business</span>
                                        <h4 class="my-2"><a href="demo-accounting-1-news-post.html" class="text-decoration-none text-dark text-color-hover-primary">Common Tax Mistakes</a></h4>
                                        <p class="card-text text-3-5 mb-1">Tax season can be a stressful time for small business owners, especially when navigating the complex web of tax...</p>
                                        <a href="demo-accounting-1-news-post.html" class="read-more text-color-secondary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                        <div class="d-flex align-items-center mt-3 pt-1">
                                            <img src="img/avatars/avatar.jpg" loading="lazy" class="img-fluid rounded-circle me-2" width="25" alt="">
                                            <strong class="text-color-dark text-2">by John Doe</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 mb-4 pb-1">
                        <article class="post">
                            <div class="card rounded-3 border-0 bg-transparent box-shadow-10 box-shadow-1 box-shadow-1-hover anim-hover-translate-top-10px transition-3ms">
                                <div class="p-relative rounded-3 overflow-hidden">
                                    <div class="post-date p-absolute top-20 left-20">
                                        <span class="day py-1 text-4 font-weight-bold text-secondary">15</span>
                                        <span class="month bg-secondary">Jan</span>
                                    </div>
                                    <div class="p-absolute right-10 top-10">
                                        <i class="fa-regular fa-message text-color-light text-4 p-absolute right-10 top-20"></i>
                                        <span class="badge badge-comments-count bg-secondary text-color-light rounded-pill p-0 p-relative z-index-1">5</span>
                                    </div>
                                    <a href="demo-accounting-1-news-post.html" class="text-decoration-none">
                                        <img class="card-img-top" src="img/demos/accounting-1/blog/blog-thumb-2.jpg" loading="lazy" alt="Card Image">
                                    </a>
                                    <div class="card-body bg-light p-4">
                                        <span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">business</span>
                                        <h4 class="my-2"><a href="demo-accounting-1-news-post.html" class="text-decoration-none text-dark text-color-hover-primary">Cash and Accrual Accounting</a></h4>
                                        <p class="card-text text-3-5 mb-1">Many business owners struggle with choosing the right accounting method for their business. This blog post would...</p>
                                        <a href="demo-accounting-1-news-post.html" class="read-more text-color-secondary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                        <div class="d-flex align-items-center mt-3 pt-1">
                                            <img src="img/avatars/avatar.jpg" loading="lazy" class="img-fluid rounded-circle me-2" width="25" alt="">
                                            <strong class="text-color-dark text-2">by John Doe</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 mb-4 pb-1">
                        <article class="post">
                            <div class="card rounded-3 border-0 bg-transparent box-shadow-10 box-shadow-1 box-shadow-1-hover anim-hover-translate-top-10px transition-3ms">
                                <div class="p-relative rounded-3 overflow-hidden">
                                    <div class="post-date p-absolute top-20 left-20">
                                        <span class="day py-1 text-4 font-weight-bold text-secondary">15</span>
                                        <span class="month bg-secondary">Jan</span>
                                    </div>
                                    <div class="p-absolute right-10 top-10">
                                        <i class="fa-regular fa-message text-color-light text-4 p-absolute right-10 top-20"></i>
                                        <span class="badge badge-comments-count bg-secondary text-color-light rounded-pill p-0 p-relative z-index-1">5</span>
                                    </div>
                                    <a href="demo-accounting-1-news-post.html" class="text-decoration-none">
                                        <img class="card-img-top" src="img/demos/accounting-1/blog/blog-thumb-3.jpg" loading="lazy" alt="Card Image">
                                    </a>
                                    <div class="card-body bg-light p-4">
                                        <span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">business</span>
                                        <h4 class="my-2"><a href="demo-accounting-1-news-post.html" class="text-decoration-none text-dark text-color-hover-primary">Prepare for a Financial Audit</a></h4>
                                        <p class="card-text text-3-5 mb-1">Preparing for a financial audit can be daunting for businesses, but it doesn't have to be...</p>
                                        <a href="demo-accounting-1-news-post.html" class="read-more text-color-secondary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                        <div class="d-flex align-items-center mt-3 pt-1">
                                            <img src="img/avatars/avatar.jpg" loading="lazy" class="img-fluid rounded-circle me-2" width="25" alt="">
                                            <strong class="text-color-dark text-2">by John Doe</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 mb-4 pb-1">
                        <article class="post">
                            <div class="card rounded-3 border-0 bg-transparent box-shadow-10 box-shadow-1 box-shadow-1-hover anim-hover-translate-top-10px transition-3ms">
                                <div class="p-relative rounded-3 overflow-hidden">
                                    <div class="post-date p-absolute top-20 left-20">
                                        <span class="day py-1 text-4 font-weight-bold text-secondary">15</span>
                                        <span class="month bg-secondary">Jan</span>
                                    </div>
                                    <div class="p-absolute right-10 top-10">
                                        <i class="fa-regular fa-message text-color-light text-4 p-absolute right-10 top-20"></i>
                                        <span class="badge badge-comments-count bg-secondary text-color-light rounded-pill p-0 p-relative z-index-1">5</span>
                                    </div>
                                    <a href="demo-accounting-1-news-post.html" class="text-decoration-none">
                                        <img class="card-img-top" src="img/demos/accounting-1/blog/blog-thumb-4.jpg" loading="lazy" alt="Card Image">
                                    </a>
                                    <div class="card-body bg-light p-4">
                                        <span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">business</span>
                                        <h4 class="my-2"><a href="demo-accounting-1-news-post.html" class="text-decoration-none text-dark text-color-hover-primary">Prepare for a Financial Audit</a></h4>
                                        <p class="card-text text-3-5 mb-1">Preparing for a financial audit can be daunting for businesses, but it doesn't have to be...</p>
                                        <a href="demo-accounting-1-news-post.html" class="read-more text-color-secondary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                        <div class="d-flex align-items-center mt-3 pt-1">
                                            <img src="img/avatars/avatar.jpg" loading="lazy" class="img-fluid rounded-circle me-2" width="25" alt="">
                                            <strong class="text-color-dark text-2">by John Doe</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 mb-4 pb-1">
                        <article class="post">
                            <div class="card rounded-3 border-0 bg-transparent box-shadow-10 box-shadow-1 box-shadow-1-hover anim-hover-translate-top-10px transition-3ms">
                                <div class="p-relative rounded-3 overflow-hidden">
                                    <div class="post-date p-absolute top-20 left-20">
                                        <span class="day py-1 text-4 font-weight-bold text-secondary">15</span>
                                        <span class="month bg-secondary">Jan</span>
                                    </div>
                                    <div class="p-absolute right-10 top-10">
                                        <i class="fa-regular fa-message text-color-light text-4 p-absolute right-10 top-20"></i>
                                        <span class="badge badge-comments-count bg-secondary text-color-light rounded-pill p-0 p-relative z-index-1">5</span>
                                    </div>
                                    <a href="demo-accounting-1-news-post.html" class="text-decoration-none">
                                        <img class="card-img-top" src="img/demos/accounting-1/blog/blog-thumb-5.jpg" loading="lazy" alt="Card Image">
                                    </a>
                                    <div class="card-body bg-light p-4">
                                        <span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">business</span>
                                        <h4 class="my-2"><a href="demo-accounting-1-news-post.html" class="text-decoration-none text-dark text-color-hover-primary">Cash and Accrual Accounting</a></h4>
                                        <p class="card-text text-3-5 mb-1">Many business owners struggle with choosing the right accounting method for their business. This blog post would...</p>
                                        <a href="demo-accounting-1-news-post.html" class="read-more text-color-secondary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                        <div class="d-flex align-items-center mt-3 pt-1">
                                            <img src="img/avatars/avatar.jpg" loading="lazy" class="img-fluid rounded-circle me-2" width="25" alt="">
                                            <strong class="text-color-dark text-2">by John Doe</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 mb-4 pb-1">
                        <article class="post">
                            <div class="card rounded-3 border-0 bg-transparent box-shadow-10 box-shadow-1 box-shadow-1-hover anim-hover-translate-top-10px transition-3ms">
                                <div class="p-relative rounded-3 overflow-hidden">
                                    <div class="post-date p-absolute top-20 left-20">
                                        <span class="day py-1 text-4 font-weight-bold text-secondary">15</span>
                                        <span class="month bg-secondary">Jan</span>
                                    </div>
                                    <div class="p-absolute right-10 top-10">
                                        <i class="fa-regular fa-message text-color-light text-4 p-absolute right-10 top-20"></i>
                                        <span class="badge badge-comments-count bg-secondary text-color-light rounded-pill p-0 p-relative z-index-1">5</span>
                                    </div>
                                    <a href="demo-accounting-1-news-post.html" class="text-decoration-none">
                                        <img class="card-img-top" src="img/demos/accounting-1/blog/blog-thumb-6.jpg" loading="lazy" alt="Card Image">
                                    </a>
                                    <div class="card-body bg-light p-4">
                                        <span class="badge badge-dark badge-sm rounded-pill text-uppercase me-1">business</span>
                                        <h4 class="my-2"><a href="demo-accounting-1-news-post.html" class="text-decoration-none text-dark text-color-hover-primary">Common Tax Mistakes</a></h4>
                                        <p class="card-text text-3-5 mb-1">Tax season can be a stressful time for small business owners, especially when navigating the complex web of tax...</p>
                                        <a href="demo-accounting-1-news-post.html" class="read-more text-color-secondary font-weight-semibold text-2">Read More <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                        <div class="d-flex align-items-center mt-3 pt-1">
                                            <img src="img/avatars/avatar.jpg" loading="lazy" class="img-fluid rounded-circle me-2" width="25" alt="">
                                            <strong class="text-color-dark text-2">by John Doe</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="pt-3 pb-5">
                    <ul class="pagination pagination-rounded pagination-md justify-content-center">
                        <li class="page-item"><a class="page-link bg-transparent text-dark" href="#" data-cursor-effect-hover="fit"><i class="fas fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link bg-secondary text-light border-color-secondary" href="#" data-cursor-effect-hover="fit">1</a></li>
                        <li class="page-item"><a class="page-link bg-transparent text-dark" href="#" data-cursor-effect-hover="fit">2</a></li>
                        <li class="page-item"><a class="page-link bg-transparent text-dark" href="#" data-cursor-effect-hover="fit">3</a></li>
                        <li class="page-item"><a class="page-link bg-transparent text-dark" href="#" data-cursor-effect-hover="fit"><i class="fas fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.partials.footer')
</div>
@endsection