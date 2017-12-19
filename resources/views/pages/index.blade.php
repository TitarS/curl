@extends('layouts')

@section('content')
    <!-- Promo Block -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall " data-options='{direction: "reverse", settings_mode_oneelement_max_offset: "150"}'>
        <div class="divimage dzsparallaxer--target w-100 g-bg-pos-bottom-center" style="height: 120%; background-image: url(../../../assets/img-temp/1920x1080/img25.jpg);"></div>

        <div class="container g-py-200 ">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="g-color-black g-font-weight-300 g-font-size-40 g-line-height-1_2 mb-4">Have an easy
                        <br>
                        website with Unify
                    </h3>
                    <span class="d-block g-color-black-opacity-0_8 g-font-size-16 mb-5">Build, share, sell and enjoy.</span>
                    <a class="js-fancybox u-link-v5 g-color-black" href="https://vimeo.com/167434033" title="Single Image">
              <span class="align-middle u-icon-v3 u-block-hover--scale g-bg-white g-color-black g-color-primary--hover g-rounded-50x g-cursor-pointer mr-2">
            <i class="g-font-size-18 g-pos-rel g-left-2 fa fa-play"></i>
          </span>
                        1:41 minutes
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Promo Block -->


    <!-- Icon Blocks -->
    <section id="offers-section" class="g-bg-secondary">
        <div class="container g-pt-100 g-pb-130">
            <!-- Icon Blocks -->
            <div class="row no-gutters">
                <div class="col-sm-6 col-lg-3">
                    <div class="g-pr-40 g-mt-20">
                        <div class="g-mb-30">
                            <h2 class="h2 g-color-black g-font-weight-600 g-line-height-1_2 mb-4">{{ trans('site.provider') }}
                            </h2>
                            <p class="g-font-weight-300 g-font-size-16">The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div id="we-provide" class="js-carousel" data-infinite="true" data-slides-show="3" data-slides-scroll="3" data-center-mode="true" data-center-padding="1px" data-pagi-classes="u-carousel-indicators-v1 g-absolute-centered--x g-bottom-minus-30">
                        <div class="js-slide">
                            <!-- Icon Blocks -->
                            <div class="u-shadow-v21--hover g-brd-around g-brd-gray-light-v3 g-brd-left-none g-brd-transparent--hover g-bg-white--hover g-transition-0_3 g-cursor-pointer g-px-30 g-pt-30 g-pb-50 g-ml-minus-1">
                                <div class="mb-4">
                                    <span class="d-block g-color-gray-dark-v4 g-font-weight-700 text-right mb-3">01</span>
                                    <span class="u-icon-v3 u-shadow-v19 g-bg-white g-color-primary rounded-circle mb-4">
                  <i class="icon-education-087 u-line-icon-pro"></i>
                </span>
                                    <h3 class="h5 g-color-black g-font-weight-600 mb-3">Creative</h3>
                                    <p>This is where we sit down, grab a cup of coffee and dial in the details.</p>
                                </div>
                                <a class="g-brd-bottom g-brd-gray-dark-v5 g-brd-primary--hover g-color-gray-dark-v5 g-color-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-text-underline--none--hover" href="#">Read more</a>
                            </div>
                            <!-- End Icon Blocks -->
                        </div>

                        <div class="js-slide">
                            <!-- Icon Blocks -->
                            <div class="u-shadow-v21--hover g-brd-around g-brd-gray-light-v3 g-brd-left-none g-brd-transparent--hover g-bg-white--hover g-transition-0_3 g-cursor-pointer g-px-30 g-pt-30 g-pb-50 g-ml-minus-1">
                                <div class="mb-4">
                                    <span class="d-block g-color-gray-dark-v4 g-font-weight-700 text-right mb-3">02</span>
                                    <span class="u-icon-v3 u-shadow-v19 g-bg-white g-color-primary rounded-circle mb-4">
                  <i class="icon-education-035 u-line-icon-pro"></i>
                </span>
                                    <h3 class="h5 g-color-black g-font-weight-600 mb-3">Features</h3>
                                    <p>This is where we sit down, grab a cup of coffee and dial in the details.</p>
                                </div>
                                <a class="g-brd-bottom g-brd-gray-dark-v5 g-brd-primary--hover g-color-gray-dark-v5 g-color-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-text-underline--none--hover" href="#">Read more</a>
                            </div>
                            <!-- End Icon Blocks -->
                        </div>

                        <div class="js-slide">
                            <!-- Icon Blocks -->
                            <div class="u-shadow-v21--hover g-brd-around g-brd-gray-light-v3 g-brd-left-none g-brd-transparent--hover g-bg-white--hover g-transition-0_3 g-cursor-pointer g-px-30 g-pt-30 g-pb-50 g-ml-minus-1">
                                <div class="mb-4">
                                    <span class="d-block g-color-gray-dark-v4 g-font-weight-700 text-right mb-3">03</span>
                                    <span class="u-icon-v3 u-shadow-v19 g-bg-white g-color-primary rounded-circle mb-4">
                  <i class="icon-education-141 u-line-icon-pro"></i>
                </span>
                                    <h3 class="h5 g-color-black g-font-weight-600 mb-3">Responsive</h3>
                                    <p>This is where we sit down, grab a cup of coffee and dial in the details.</p>
                                </div>
                                <a class="g-brd-bottom g-brd-gray-dark-v5 g-brd-primary--hover g-color-gray-dark-v5 g-color-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-text-underline--none--hover" href="#">Read more</a>
                            </div>
                            <!-- End Icon Blocks -->
                        </div>

                        <div class="js-slide">
                            <!-- Icon Blocks -->
                            <div class="u-shadow-v21--hover g-brd-around g-brd-gray-light-v3 g-brd-left-none g-brd-transparent--hover g-bg-white--hover g-transition-0_3 g-cursor-pointer g-px-30 g-pt-30 g-pb-50 g-ml-minus-1">
                                <div class="mb-4">
                                    <span class="d-block g-color-gray-dark-v4 g-font-weight-700 text-right mb-3">04</span>
                                    <span class="u-icon-v3 u-shadow-v19 g-bg-white g-color-primary rounded-circle mb-4">
                  <i class="icon-finance-256 u-line-icon-pro"></i>
                </span>
                                    <h3 class="h5 g-color-black g-font-weight-600 mb-3">Code</h3>
                                    <p>This is where we sit down, grab a cup of coffee and dial in the details.</p>
                                </div>
                                <a class="g-brd-bottom g-brd-gray-dark-v5 g-brd-primary--hover g-color-gray-dark-v5 g-color-primary--hover g-font-weight-600 g-font-size-12 text-uppercase g-text-underline--none--hover" href="#">Read more</a>
                            </div>
                            <!-- End Icon Blocks -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Icon Blocks -->
        </div>
    </section>
    <!-- End Icon Blocks -->


    <!-- Projects -->
    <section id="projects-section" class="container g-py-100">
        <div class="text-center g-mb-50">
            <h2 class="h1 g-color-black g-font-weight-600">Branding Projects</h2>
            <p class="lead">This is where we begin to visualize your napkin sketches and make them into pixels.</p>
        </div>

        <div class="row no-gutters g-mx-minus-10">
            <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
                <!-- Projects -->
                <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-purple--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
                    <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="../../../assets/img-temp/425x250/img1.png" alt="Image Description">
                    <span class="g-font-weight-600 g-font-size-12 text-uppercase">Mockups</span>
                    <h3 class="h4 g-font-weight-600 mb-0">Kitchen Tools</h3>
                    <a class="u-link-v2" href="#"></a>
                </div>
                <!-- End Projects -->
            </div>

            <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
                <!-- Projects -->
                <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-cyan--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
                    <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="../../../assets/img-temp/425x250/img2.png" alt="Image Description">
                    <span class="g-font-weight-600 g-font-size-12 text-uppercase">Others</span>
                    <h3 class="h4 g-font-weight-600 mb-0">Brochure</h3>
                    <a class="u-link-v2" href="#"></a>
                </div>
                <!-- End Projects -->
            </div>

            <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
                <!-- Projects -->
                <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-teal--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
                    <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="../../../assets/img-temp/425x250/img3.png" alt="Image Description">
                    <span class="g-font-weight-600 g-font-size-12 text-uppercase">Hi-Tech</span>
                    <h3 class="h4 g-font-weight-600 mb-0">MacBook Pro</h3>
                    <a class="u-link-v2" href="#"></a>
                </div>
                <!-- End Projects -->
            </div>

            <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
                <!-- Projects -->
                <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-lightred--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
                    <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="../../../assets/img-temp/425x250/img4.png" alt="Image Description">
                    <span class="g-font-weight-600 g-font-size-12 text-uppercase">Hi-tech</span>
                    <h3 class="h4 g-font-weight-600 mb-0">Latest VR product</h3>
                    <a class="u-link-v2" href="#"></a>
                </div>
                <!-- End Projects -->
            </div>

            <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
                <!-- Projects -->
                <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-primary--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
                    <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="../../../assets/img-temp/425x250/img5.png" alt="Image Description">
                    <span class="g-font-weight-600 g-font-size-12 text-uppercase">Others</span>
                    <h3 class="h4 g-font-weight-600 mb-0">Brochure</h3>
                    <a class="u-link-v2" href="#"></a>
                </div>
                <!-- End Projects -->
            </div>

            <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
                <!-- Projects -->
                <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-pink--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
                    <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="../../../assets/img-temp/425x250/img6.png" alt="Image Description">
                    <span class="g-font-weight-600 g-font-size-12 text-uppercase">Cosmetics</span>
                    <h3 class="h4 g-font-weight-600 mb-0">Spa Cosmetics</h3>
                    <a class="u-link-v2" href="#"></a>
                </div>
                <!-- End Projects -->
            </div>
        </div>
    </section>
    <!-- End Projects -->


    <!-- Call To Action -->
    <section class="g-bg-primary g-color-white g-pa-30" style="background-image: url(../../../assets/img/bg/pattern5.png);">
        <div class="d-md-flex justify-content-md-center text-center">
            <div class="align-self-md-center">
                <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md">We offer best in class service for your needs</p>
            </div>
            <div class="align-self-md-center">
                <a class="btn btn-lg u-btn-white text-uppercase g-font-weight-600 g-font-size-12" target="_blank" href="https://wrapbootstrap.com/theme/unify-responsive-website-template-WB0412697?ref=htmlstream">Purchase Now</a>
            </div>
        </div>
    </section>
    <!-- End Call To Action -->
@endsection