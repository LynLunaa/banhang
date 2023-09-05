@extends('layouts.master')

@section('main-content')
<!-- inner page section -->
<section class="inner_page_head" style="background-color: #f7444e; color: white;">
 <div class="container_fuild">
    <div class="row">
       <div class="col-md-12">
          <div class="full">
             <h3>Liên Hệ</h3>
          </div>
       </div>
    </div>
 </div>
</section>
<!-- end inner page section -->
<!-- why section -->
<section class="why_section layout_padding" style="background-color: white;">
   <div class="container">
   
      <div class="row">
         <div class="col-lg-8 offset-lg-2">
            <div class="full">
               <form action="{{ route('frontend.contact.send') }}" method="post">
                  <fieldset>
                     {{ csrf_field() }}
                     <input type="text" placeholder="Nhập họ & tên" name="fullname" required style="background-color: white; color: black;">
                     <input type="email" placeholder="Nhập email" name="email" required style="background-color: white; color: black;">
                     <input type="tel" placeholder="Nhập số điện thoại" name="phone_number" required style="background-color: white; color: black;">
                     <input type="text" placeholder="Nhập chủ đề" name="subject_name" required style="background-color: white; color: black;">
                     <textarea placeholder="Nội dung" required name="note" style="background-color: white; color: black;"></textarea>
                     <input type="submit" value="Gửi Phản Hồi" style="background-color: black; color: white;">
                  </fieldset>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end why section -->
<!-- arrival section -->
<section class="arrival_section">
   <div class="container">
      <div class="box">
         <div class="arrival_bg_box">
            <img src="{{ asset('themes/frontend/images/arrival-bg.jpg') }}" alt="">
         </div>
         <div class="row">
            <div class="col-md-6 ml-auto">
               <div class="heading_container remove_line_bt">
                  <h2>
                     Giá ưu đãi cực tốt khi mua tại đây
                  </h2>
               </div>
               <p style="margin-top: 20px; margin-bottom: 30px;">
                  Bạn sẽ tìm thấy giá cực kỳ ưu đãi khi mua sắm tại đây. Chúng tôi cam kết cung cấp cho bạn những sản phẩm chất lượng với giá hấp dẫn nhất trên thị trường. Đừng bỏ lỡ cơ hội tuyệt vời này!
               </p>
               <a href="{{ route('frontend.products') }}">
                  Mua Ngay
               </a>
            </div>
         </div>
      </div>
   </div>
   </div>
</section>

<!-- end arrival section -->
@stop
