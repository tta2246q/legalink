@extends('index')
@section('name')
    <!-- Page Title Section -->
    <section class="page-title-section" style="background-image: url(/images/background/1.jpg)">
        <div class="auto-container">
            <div class="content-boxed">
                <div class="title">CÔNG TY TNHH LUẬT</div>
                <h1>LEGALINK</h1>
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
                        <div class="inner-column-about">
                            <div class="sec-title">
                                <div class="title">Legalink</div>
                                <h2>The more law, the <br> less Justice</h2>
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. dapibus <br>
                                Tincidunt mollis pretium. Vivamus sodales eu sapien sitamet iaculis. <br> Curabitur mollis
                                quam dolor, quis gravida orci mattis non. Nam erat erat, <br> tristique a elit at
                                consectetur.</div>

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
                <div class="row clearfix" style="padding-bottom: 5%">

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-sm-12 col-sm-12">
                        <div class="inner-column wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="">
                                <img src="/images/resource/legal.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-sm-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <div class="title">Legalink</div>
                                <h2>The more law, the <br> less Justice</h2>
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. dapibus <br>
                                Tincidunt mollis pretium. Vivamus sodales eu sapien sitamet iaculis. <br> Curabitur mollis
                                quam dolor, quis gravida orci mattis non. Nam erat erat, <br> tristique a elit at
                                consectetur.</div>

                        </div>
                    </div>

                </div>

                <div class="row clearfix" style="padding-bottom: 5%">

                    <!-- About Block -->
                    <div class="about-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="number">1</div>
                            <div class="icon flaticon-checked"></div>
                            <h3><a href="">TÂM</a></h3>
                            <div class="text">Là tận tâm, tâm huyết cố gắng hết sức, làm hết trách nhiệm và khả
                                năng để đạt được kết quả tốt nhất.</div>
                        </div>
                    </div>

                    <!-- About Block -->
                    <div class="about-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="number">2</div>
                            <div class="icon flaticon-checked"></div>
                            <h3><a href="">TRÍ</a></h3>
                            <div class="text">Là thông minh, trí tuệ trong cách xử lý công việc, có tầm nhìn và
                                chiến lược rõ ràng. </div>
                        </div>
                    </div>

                    <!-- About Block -->
                    <div class="about-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="number">3</div>
                            <div class="icon flaticon-checked"></div>
                            <h3><a href="">TÍN</a></h3>
                            <div class="text">Là uy tín, tin cậy và trung thực trong công việc, giữ đúng cam kết
                                với khách hàng. </div>
                        </div>
                    </div>

                </div>


            </div>
            <!-- End Lower Section -->
        </div>
    </section>
    <!-- End About Section -->

    <section class="consulation-section" style="background-image: url('/images/background/slide-bg-1.jpg')">
        <div class="auto-container">
            <div class="sec-title centered">
                <div class="title">Phản Hồi</div>
                <h2>Câu Hỏi Hoặc Phản Hồi Của Bạn</h2>
            </div>
            <div class="inner-container">

                <!-- Consulation Form -->
                <div class="consulation-form">
                    <!-- Consulation Form -->
                    <form method="post" action="sendemail.php" id="contact-form">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <select name="country" class="custom-select-box">
                                    <option>Chọn danh mục</option>
                                    <option>Câu hỏi</option>
                                    <option>Phản hồi</option>
                                    <option>Liên hệ</option>
                                </select>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <input type="text" name="name" placeholder="Họ tên" required>
                            </div>

                            <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Địa chỉ email" required>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="Nhập nội dung câu hỏi/phản hồi/liên hệ của bạn tại đây"></textarea>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 text-center form-group">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                        class="txt">Gửi Nội Dung</span></button>
                            </div>

                        </div>
                    </form>

                </div>
                <!-- End Consulation Form -->

            </div>
        </div>
    </section>


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
