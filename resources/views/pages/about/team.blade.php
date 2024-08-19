@extends('index')
@section('name')
    <!-- Page Title Section -->
    <section class="page-title-section" style="background-image: url(/images/background/1.jpg)">
        <div class="auto-container">
            <div class="content-boxed">
                <div class="title"><h2>ĐỘi Ngũ Nhân Sự LUẬT LEGALINK</h2></div>
            </div>
        </div>
    </section>
    <!-- End Page Title Section -->

    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <!-- Lower Section -->
            <div class="lower-section-about">
                <div class="row clearfix" style="padding-bottom: 5%">

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-sm-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <div class="title">Về chúng tôi</div>
                                <h2>CÔNG TY LUẬT LEGALINK</h2>
                            </div>
                            <div class="text">Công ty cung cấp các dịch vụ tư vấn pháp lý chuyên nghiệp cho cá
                                nhân và doanh nghiệp trong nhiều lĩnh vực khác nhau. Làm việc với phương châm Tâm –
                                Trí – Tín. Chúng tôi không chỉ là một công ty luật, mà còn là người bạn đồng hành
                                đáng tin cậy trên con đường pháp lý của bạn.
                                Cùng với đội ngũ luật sư và chuyên viên dày dặn kinh nghiệm, tâm huyết và nhiệt
                                huyết, chúng tôi luôn nỗ lực mang đến cho khách hàng những giải pháp pháp lý hiệu
                                quả và tối ưu nhất.
                            </div>
                            <a href="" class="theme-btn btn-style-one" style="margin-top: 5%"><span class="txt">xem
                                    thêm</span></a>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-sm-12 col-sm-12">
                        <div class="inner-column wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="">
                                <img src="/images/resource/legal.png" alt="" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- End Lower Section -->

        </div>
    </section>
    <!-- End About Section -->
    @include('pages.home.section_team')

    @include('pages.home.section_contact')


    <section class="cta-section" style="background-image: url(images/background/1.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <div class="title">Tư vấn miễn phí, vui lòng liên hệ</div>
                    <a class="phone" href="tel:+0014-323-68-48">(+84) 906 213 683</a>
                </div>
                <div class="pull-right">
                    <a href="" class="theme-btn btn-style-two"><span class="txt">Liên hệ với chúng
                            tôi</span></a>
                </div>
            </div>
        </div>
    </section>
@endsection
