<!-- Consulation Section -->
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
<!-- End Consulation Section -->
