@extends('index')
@section('name')
<!-- Page Title Section -->
<section class="page-title-section style-two" style="background-image: url(images/background/3.jpg)">
    <div class="auto-container">
        <div class="content-boxed">
            <div class="title">our service</div>
            <h1><span>Provide Perfect Solutions</span> <br> For Any Legals</h1>
            <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, <br> sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna <br> aliquam erat volutpat.</div>
        </div>
    </div>
</section>
<!-- End Page Title Section -->


<section class="about-section">
    <div class="auto-container">
        @include('pages.home.section_3t')
    </div>
</section>


@include('pages.home.section_service')

<!-- Pricing Section -->
<section class="pricing-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">pricing & plan</div>
            <h2>Perfect solution with an affordable</h2>
        </div>
        <div class="inner-container">
            <div class="clearfix">

                <!-- Price Block -->
                <div class="price-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon"><img src="images/icons/price-icon-1.png" alt="" /></span>
                        </div>
                        <div class="title">Personal</div>
                        <div class="price"><sup>$</sup> 9.99 <sub>/ month</sub></div>
                        <ul class="list">
                            <li>Custome Domains</li>
                            <li>Sleep after 30 mins of <br> activity</li>
                        </ul>
                        <a class="theme-btn btn-style-three" href="about.html"><span class="txt">get started now</span></a>
                    </div>
                </div>

                <!-- Price Block -->
                <div class="price-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="popular">popular</div>
                        <div class="icon-box">
                            <span class="icon"><img src="images/icons/price-icon-2.png" alt="" /></span>
                        </div>
                        <div class="title">small team</div>
                        <div class="price"><sup>$</sup> 49.99 <sub>/ month</sub></div>
                        <ul class="list">
                            <li>never sleeps</li>
                            <li>multiple workers for more powerful apps</li>
                        </ul>
                        <a class="theme-btn btn-style-three" href="about.html"><span class="txt">get started now</span></a>
                    </div>
                </div>

                <!-- Price Block -->
                <div class="price-block col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon"><img src="images/icons/price-icon-3.png" alt="" /></span>
                        </div>
                        <div class="title">enterprise</div>
                        <div class="price"><sup>$</sup> 99.99 <sub>/ month</sub></div>
                        <ul class="list">
                            <li>dedicated</li>
                            <li>simple horizontal <br> scalability</li>
                        </ul>
                        <a class="theme-btn btn-style-three" href="about.html"><span class="txt">get started now</span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Pricing Section -->

<!-- Faq Section -->
<section class="faq-section">
    <div class="auto-container">
        <div class="inner-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">faqs</div>
                <h2>Maybe help you</h2>
            </div>
            <div class="row clearfix">

                <div class="column col-lg-6 col-md-12 col-sm-12">

                    <ul class="accordion-box">

                        <!--Block-->
                        <li class="accordion block active-block">
                            <div class="acc-btn active">Can I Get A Divorce Without A Lawyer? <div class="icon flaticon-down-arrow-1"></div> <div class="cross-icon flaticon-multiply"></div></div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur elit lacinia ornare. In volutpat rutrum molestie. Vivamus efficitur orci, ac gravida eros bibendum non. Nullam auctor varius fer Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">I Have A Technical Problem Or Support Issue I Need <br> Resolved, Who Do I Email? <div class="icon flaticon-down-arrow-1"></div> <div class="cross-icon flaticon-multiply"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur elit lacinia ornare. In volutpat rutrum molestie. Vivamus efficitur orci, ac gravida eros bibendum non. Nullam auctor varius fer Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">What Other Services Are You Compatible With? <div class="icon flaticon-down-arrow-1"></div> <div class="cross-icon flaticon-multiply"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur elit lacinia ornare. In volutpat rutrum molestie. Vivamus efficitur orci, ac gravida eros bibendum non. Nullam auctor varius fer Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">Are You Hiring? <div class="icon flaticon-down-arrow-1"></div> <div class="cross-icon flaticon-multiply"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur elit lacinia ornare. In volutpat rutrum molestie. Vivamus efficitur orci, ac gravida eros bibendum non. Nullam auctor varius fer Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</div>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
                <div class="column col-lg-6 col-md-12 col-sm-12">

                    <ul class="accordion-box">

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">Can I Get A Divorce Without A Lawyer? <div class="icon flaticon-down-arrow-1"></div> <div class="cross-icon flaticon-multiply"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur elit lacinia ornare. In volutpat rutrum molestie. Vivamus efficitur orci, ac gravida eros bibendum non. Nullam auctor varius fer Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">I Have A Technical Problem Or Support Issue I Need <br> Resolved, Who Do I Email? <div class="icon flaticon-down-arrow-1"></div> <div class="cross-icon flaticon-multiply"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur elit lacinia ornare. In volutpat rutrum molestie. Vivamus efficitur orci, ac gravida eros bibendum non. Nullam auctor varius fer Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">What Other Services Are You Compatible With? <div class="icon flaticon-down-arrow-1"></div> <div class="cross-icon flaticon-multiply"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur elit lacinia ornare. In volutpat rutrum molestie. Vivamus efficitur orci, ac gravida eros bibendum non. Nullam auctor varius fer Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">Are You Hiring? <div class="icon flaticon-down-arrow-1"></div> <div class="cross-icon flaticon-multiply"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur elit lacinia ornare. In volutpat rutrum molestie. Vivamus efficitur orci, ac gravida eros bibendum non. Nullam auctor varius fer Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">What Other Services Are You Compatible With? <div class="icon flaticon-down-arrow-1"></div> <div class="cross-icon flaticon-multiply"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur elit lacinia ornare. In volutpat rutrum molestie. Vivamus efficitur orci, ac gravida eros bibendum non. Nullam auctor varius fer Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn">What Other Services Are? <div class="icon flaticon-down-arrow-1"></div> <div class="cross-icon flaticon-multiply"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur elit lacinia ornare. In volutpat rutrum molestie. Vivamus efficitur orci, ac gravida eros bibendum non. Nullam auctor varius fer Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Faq Section -->

@include('pages.home.section_contact')
@include('pages.home.section_cta')
@endsection
