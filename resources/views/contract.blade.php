@include('layouts.header')
<main class="mx-5  mt-4">
    <section class="mx-5">
        <h3 class="text-center h2 with-thin">Liên hệ với chúng tôi!</h3>
        <div class="mx-5 d-flex my-5">          
            <img src="image/contract.png" style="width: 500px;" alt="">
            <div class="">
                <p class="text-dark mx-5">Chúng tôi mong muốn lắng nghe từ bạn. Hãy liên hệ với chúng tôi và một thành viên của chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất. Chúng tôi yêu thích việc nhận được email của bạn mỗi ngày <em>mỗi ngày</em>.</p>      
                <img src="image/contract2.png" class="float-end me-5 mt-5" style="width: 300px;" alt="">
            </div>
        </div>
    </section>
    <section class="mb-5">
        <div >
            <div class="text-center">
                <a href="#">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.841518442039!2d105.76804037515805!3d10.029933690077037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBD4bqnbiBUaMah!5e0!3m2!1svi!2s!4v1694701581209!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </a>
                <br />
                
            </div>
            <div class="my-4 text-center">
                <span><i class="fa-solid fa-location-dot me-2 " style="color: #ad0303;"></i>Đại học Cần Thơ, Đường 3 Tháng 2, Xuân Khánh, Ninh Kiều, Cần Thơ</span>
            </div>
            <div class="">
                <div class="col-4"></div>
                <div class="p-100">
                    <span class="m-0">Hotline: 099999999</span><br>
                    <span>Email: skanka@gmail.com</span>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </section>
    <section class="mb-5 p-100">
        <div class="">
            <div class="form-group mb-3">
                <label for="name">Tên của bạn</label><br>
                <input class="form-control form-control-lg mt-2" type="text" placeholder="Tên của bạn" />
            </div>
            <div class="form-group mb-3">
                <label for="email">Email của bạn</label><br>
                <input class="form-control form-control-lg mt-2" type="email" placeholder="Email của bạn" />
            </div>
            <div class="form-group mb-3">
                <label>Nội dung</label><br>
                <textarea class="form-control form-control-lg. mt-2" rows="5"></textarea>
            </div>
            <button class="btn btn-primary float-end mt-2 mb-5" type="submit">Gửi</button>
        </div>
    </section>
</main>
@include('layouts.footer')