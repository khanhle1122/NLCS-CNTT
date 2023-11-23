@include('layouts.header')  
<div class="">
    <img class="mx-auto bg-hr" src="image/hr.png" alt="hr">
</div>
<main class="">
    <section class="mx-5 p-5">
        
        <p class="text-secondary text-center with-thin mb-0 pb-3 h3">Chào mừng bạn đến với skanka! </p>
        <p class="text-secondary text-center with-thin h4">Dịch vụ photocopy trực tuyến nhanh chóng và chất lượng cao, tạo sự tiện lợi của bạn.</p>
        <div class="text-center">
            <img src="image/line1.png" alt="">
        </div>
    </section>
    <section class="mx-5 px-5 ">
        <h2 class="ms-5 ps-5 text-black-50">Dịch Vụ Của Chúng Tôi</h2>
        <div class="d-flex justify-content-between mx-5 ">
            <ul class=" ms-5">
                <li class=""><i class="fa-regular fa-paper-plane me-2" style="color: #00942c;"></i>Photocopy Trực Tuyến Nhanh Chóng và Tiện Lợi</li>
                <li><i class="fa-regular fa-star me-2" style="color: #00942c;" ></i>Bản In Chất Lượng Cao</li>
                <li><i class="fa-solid fa-shield-heart me-2" style="color: #00942c;" ></i>Xử Lý Tài Liệu An Toàn</li>
                <li><i class="fa-solid fa-headset me-2" style="color: #00942c;" ></i>Hỗ Trợ Khách Hàng 24/7</li>
                <li><i class="fa-solid fa-truck me-1" style="color: #00942c;" ></i>Giao Tài Liệu Đến Tận Nơi Bạn Cần</li>
                
            </ul>
            <div class="ms-5 mt-5 ps-5"><img class="img-sao" style="height: 60px" src="image/sao.png" alt=""></div>            
        </div>
    </section>
    <div class="mx-auto container_div">
        <h3 class="text-center text-danger with-thin h4">Tải tài liệu bạn lên tại đây</h3>
        <a href="{{ route('photo') }}" class="nav-link btn-hover"><i class="fa-solid fa-upload fa-fade"></i>tai len</a>
    </div>
    <section class="mx-5 px-5 my-5">
        <div class="d-flex justify-content-around">
            <h2 class="ms-5 ps-5 text-black-50">Liên Hệ Với Chúng Tôi</h2>
            <div class="text-center"> <img class="img-line" src="image/line.png" alt=""></div>
        </div>
        <div class=" row">
        
            <div class="col-8 ms-5   ">
                <form>
                    <div class="form-group">
                        <label for="name"><b>Tên của bạn</b></label>
                        <br>
                        <input class="col-10" type="text" placeholder="Tên của bạn" />
                    </div>
                    <div class="form-group  ">
                        <label for="email"><b>Email của bạn</b></label>
                        <br>
                        <input class="col-10" type="email" placeholder="Email của bạn" />
                    </div>
                    <div class="form-group ">
                        <label><b>Nội dung</b></label>
                        <br>
                        <textarea class="col-10" rows="8" placeholder="Nội dung bạn muốn gửi"></textarea>
                    </div>
                    <button class="btn btn-primary mx-auto" type="submit">Gửi</button>
                </form>
            </div>
            
            <div class="col mt-3">
                
                <a href="#">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.841518442039!2d105.76804037515804!3d10.029933690077037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBD4bqnbiBUaMah!5e0!3m2!1svi!2s!4v1694594316393!5m2!1svi!2s" width="320" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </a> 
                <div>
                    <span class=""><i class="fa-solid fa-phone-volume me-2"></i>099999999</span><br>
                    <span class=""><i class="fa-solid fa-envelope me-2"></i>skanka.cskh@gmail.com</span><br>
                </div>
            </div>
        </div>
    </section>
</main>
@include('layouts.footer')
