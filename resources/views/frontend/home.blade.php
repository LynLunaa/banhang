@extends('layouts.master')

@section('slider')
<!-- slider section -->
<section class="slider_section">
   <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="{{ asset('themes/frontend/images/bg.jpg') }}" alt="" class="carousel-image">
         </div>
         <div class="carousel-item">
            <img src="{{ asset('themes/frontend/images/banner-kbone.jpg') }}" alt="" class="carousel-image">
         </div>
         <div class="carousel-item">
            <img src="{{ asset('themes/frontend/images/Digione-banner.jpg') }}" alt="" class="carousel-image">
         </div>
      </div>
      <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
      </a>
   </div>
</section>
<style>
   .slider_section {
      padding: 0px 0 75px 0;
   }

   .carousel-image {
      max-width: 80%;
      /* Set the maximum width */
      height: auto;
      /* Maintain aspect ratio */
      margin: 0 auto;
      /* Center the image horizontally */
      display: block;
      /* Remove any inline spacing */
   }

   /* CSS cho nút chuyển cảnh trước và sau */
   .carousel-control-prev,
   .carousel-control-next {
      width: 40px;
      /* Điều chỉnh chiều rộng */
      height: 40px;
      /* Điều chỉnh chiều cao */
      background-color: rgba(0, 0, 0, 0.5);
      /* Màu nền với độ trong suốt */
      border-radius: 50%;
      /* Làm cho nút trở thành hình tròn */
      top: 50%;
      transform: translateY(-50%);
   }

   /* CSS cho biểu tượng nút chuyển cảnh trước và sau */
   .carousel-control-prev-icon,
   .carousel-control-next-icon {
      font-size: 24px;
      /* Điều chỉnh kích thước biểu tượng */
      color: #fff;
      /* Màu của biểu tượng */
   }

   /* Hiệu ứng khi di chuột qua nút chuyển cảnh */
   .carousel-control-prev:hover,
   .carousel-control-next:hover {
      background-color: rgba(0, 0, 0, 0.7);
      /* Màu nền với độ trong suốt tăng cường khi di chuột qua */
   }


   /* CSS cho thanh danh mục lựa chọn */
   .category-bar {
      background-color: #f0f0f0;
      padding: 10px 0;
      text-align: center;
   }

   .category-bar ul {
      list-style: none;
      margin: 0;
      padding: 0;
   }

   .category-bar ul li {
      display: inline;
      margin-right: 20px;
   }

   .category-bar ul li:last-child {
      margin-right: 0;
   }

   .category-bar ul li a {
      text-decoration: none;
      color: #333;
      font-weight: bold;
      font-size: 16px;
   }
</style>



<!-- end slider section -->
@stop

@section('main-content')
<!-- why section -->
<section class="why_section layout_padding">
   <div class="container">
      <div class="heading_container heading_center">
         <h2>
            Tại sao mua sắm của chúng tôi?
         </h2>
      </div>
      <div class="row">
         <div class="col-md-4">
            <div class="box ">
               <div class="img-box">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                     <g>
                        <g>
                           <path d="M476.158,231.363l-13.259-53.035c3.625-0.77,6.345-3.986,6.345-7.839v-8.551c0-18.566-15.105-33.67-33.67-33.67h-60.392
                            V110.63c0-9.136-7.432-16.568-16.568-16.568H50.772c-9.136,0-16.568,7.432-16.568,16.568V256c0,4.427,3.589,8.017,8.017,8.017
                            c4.427,0,8.017-3.589,8.017-8.017V110.63c0-0.295,0.239-0.534,0.534-0.534h307.841c0.295,0,0.534,0.239,0.534,0.534v145.372
                            c0,4.427,3.589,8.017,8.017,8.017c4.427,0,8.017-3.589,8.017-8.017v-9.088h94.569c0.008,0,0.014,0.002,0.021,0.002
                            c0.008,0,0.015-0.001,0.022-0.001c11.637,0.008,21.518,7.646,24.912,18.171h-24.928c-4.427,0-8.017,3.589-8.017,8.017v17.102
                            c0,13.851,11.268,25.119,25.119,25.119h9.086v35.273h-20.962c-6.886-19.883-25.787-34.205-47.982-34.205
                            s-41.097,14.322-47.982,34.205h-3.86v-60.393c0-4.427-3.589-8.017-8.017-8.017c-4.427,0-8.017,3.589-8.017,8.017v60.391H192.817
                            c-6.886-19.883-25.787-34.205-47.982-34.205s-41.097,14.322-47.982,34.205H50.772c-0.295,0-0.534-0.239-0.534-0.534v-17.637
                            h34.739c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017H8.017c-4.427,0-8.017,3.589-8.017,8.017
                            s3.589,8.017,8.017,8.017h26.188v17.637c0,9.136,7.432,16.568,16.568,16.568h43.304c-0.002,0.178-0.014,0.355-0.014,0.534
                            c0,27.996,22.777,50.772,50.772,50.772s50.772-22.776,50.772-50.772c0-0.18-0.012-0.356-0.014-0.534h180.67
                            c-0.002,0.178-0.014,0.355-0.014,0.534c0,27.996,22.777,50.772,50.772,50.772c27.995,0,50.772-22.776,50.772-50.772
                            c0-0.18-0.012-0.356-0.014-0.534h26.203c4.427,0,8.017-3.589,8.017-8.017v-85.511C512,251.989,496.423,234.448,476.158,231.363z
                            M375.182,144.301h60.392c9.725,0,17.637,7.912,17.637,17.637v0.534h-78.029V144.301z M375.182,230.881v-52.376h71.235
                            l13.094,52.376H375.182z M144.835,401.904c-19.155,0-34.739-15.583-34.739-34.739s15.584-34.739,34.739-34.739
                            c19.155,0,34.739,15.583,34.739,34.739S163.99,401.904,144.835,401.904z M427.023,401.904c-19.155,0-34.739-15.583-34.739-34.739
                            s15.584-34.739,34.739-34.739c19.155,0,34.739,15.583,34.739,34.739S446.178,401.904,427.023,401.904z M495.967,299.29h-9.086
                            c-5.01,0-9.086-4.076-9.086-9.086v-9.086h18.171V299.29z" />
                        </g>
                     </g>
                     <g>
                        <g>
                           <path d="M144.835,350.597c-9.136,0-16.568,7.432-16.568,16.568c0,9.136,7.432,16.568,16.568,16.568
                            c9.136,0,16.568-7.432,16.568-16.568C161.403,358.029,153.971,350.597,144.835,350.597z" />
                        </g>
                     </g>
                     <g>
                        <g>
                           <path d="M427.023,350.597c-9.136,0-16.568,7.432-16.568,16.568c0,9.136,7.432,16.568,16.568,16.568
                            c9.136,0,16.568-7.432,16.568-16.568C443.591,358.029,436.159,350.597,427.023,350.597z" />
                        </g>
                     </g>
                     <g>
                        <g>
                           <path d="M332.96,316.393H213.244c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017H332.96
                            c4.427,0,8.017-3.589,8.017-8.017S337.388,316.393,332.96,316.393z" />
                        </g>
                     </g>
                     <g>
                        <g>
                           <path d="M127.733,282.188H25.119c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h102.614
                            c4.427,0,8.017-3.589,8.017-8.017S132.16,282.188,127.733,282.188z" />
                        </g>
                     </g>
                     <g>
                        <g>
                           <path d="M278.771,173.37c-3.13-3.13-8.207-3.13-11.337,0.001l-71.292,71.291l-37.087-37.087c-3.131-3.131-8.207-3.131-11.337,0
                            c-3.131,3.131-3.131,8.206,0,11.337l42.756,42.756c1.565,1.566,3.617,2.348,5.668,2.348s4.104-0.782,5.668-2.348l76.96-76.96
                            C281.901,181.576,281.901,176.501,278.771,173.37z" />
                        </g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                  </svg>
               </div>
               <div class="detail-box">
                  <h5>
                     Giao Hàng Nhanh Chóng
                  </h5>
                  <p>
                     Giao hàng và lắp đặt nhanh chóng
                  </p>

               </div>

            </div>
         </div>
         <div class="col-md-4">
            <div class="box ">
               <div class="img-box">
                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve">
                     <g>
                        <g>
                           <path d="M138.667,192H96c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667
                            v-74.667h32c5.888,0,10.667-4.779,10.667-10.667S144.555,192,138.667,192z" />
                        </g>
                     </g>
                     <g>
                        <g>
                           <path d="M117.333,234.667H96c-5.888,0-10.667,4.779-10.667,10.667S90.112,256,96,256h21.333c5.888,0,10.667-4.779,10.667-10.667
                            S123.221,234.667,117.333,234.667z" />
                        </g>
                     </g>
                     <g>
                        <g>
                           <path d="M245.333,0C110.059,0,0,110.059,0,245.333s110.059,245.333,245.333,245.333s245.333-110.059,245.333-245.333
                            S380.608,0,245.333,0z M245.333,469.333c-123.52,0-224-100.48-224-224s100.48-224,224-224s224,100.48,224,224
                            S368.853,469.333,245.333,469.333z" />
                        </g>
                     </g>
                     <g>
                        <g>
                           <path d="M386.752,131.989C352.085,88.789,300.544,64,245.333,64s-106.752,24.789-141.419,67.989
                            c-3.691,4.587-2.965,11.307,1.643,14.997c4.587,3.691,11.307,2.965,14.976-1.643c30.613-38.144,76.096-60.011,124.8-60.011
                            s94.187,21.867,124.779,60.011c2.112,2.624,5.205,3.989,8.32,3.989c2.368,0,4.715-0.768,6.677-2.347
                            C389.717,143.296,390.443,136.576,386.752,131.989z" />
                        </g>
                     </g>
                     <g>
                        <g>
                           <path d="M376.405,354.923c-4.224-4.032-11.008-3.861-15.061,0.405c-30.613,32.235-71.808,50.005-116.011,50.005
                            s-85.397-17.771-115.989-50.005c-4.032-4.309-10.816-4.437-15.061-0.405c-4.309,4.053-4.459,10.816-0.405,15.083
                            c34.667,36.544,81.344,56.661,131.456,56.661s96.789-20.117,131.477-56.661C380.864,365.739,380.693,358.976,376.405,354.923z" />
                        </g>
                     </g>
                     <g>
                        <g>
                           <path d="M206.805,255.723c15.701-2.027,27.861-15.488,27.861-31.723c0-17.643-14.357-32-32-32h-21.333
                            c-5.888,0-10.667,4.779-10.667,10.667v42.581c0,0.043,0,0.107,0,0.149V288c0,5.888,4.779,10.667,10.667,10.667
                            S192,293.888,192,288v-16.917l24.448,24.469c2.091,2.069,4.821,3.115,7.552,3.115c2.731,0,5.461-1.045,7.531-3.136
                            c4.16-4.16,4.16-10.923,0-15.083L206.805,255.723z M192,234.667v-21.333h10.667c5.867,0,10.667,4.779,10.667,10.667
                            s-4.8,10.667-10.667,10.667H192z" />
                        </g>
                     </g>
                     <g>
                        <g>
                           <path d="M309.333,277.333h-32v-64h32c5.888,0,10.667-4.779,10.667-10.667S315.221,192,309.333,192h-42.667
                            c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667h42.667c5.888,0,10.667-4.779,10.667-10.667
                            S315.221,277.333,309.333,277.333z" />
                        </g>
                     </g>
                     <g>
                        <g>
                           <path d="M288,234.667h-21.333c-5.888,0-10.667,4.779-10.667,10.667S260.779,256,266.667,256H288
                            c5.888,0,10.667-4.779,10.667-10.667S293.888,234.667,288,234.667z" />
                        </g>
                     </g>
                     <g>
                        <g>
                           <path d="M394.667,277.333h-32v-64h32c5.888,0,10.667-4.779,10.667-10.667S400.555,192,394.667,192H352
                            c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667h42.667c5.888,0,10.667-4.779,10.667-10.667
                            S400.555,277.333,394.667,277.333z" />
                        </g>
                     </g>
                     <g>
                        <g>
                           <path d="M373.333,234.667H352c-5.888,0-10.667,4.779-10.667,10.667S346.112,256,352,256h21.333
                            c5.888,0,10.667-4.779,10.667-10.667S379.221,234.667,373.333,234.667z" />
                        </g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                     <g>
                     </g>
                  </svg>
               </div>
               <div class="detail-box">
                  <h5>Miễn Phí Vận Chuyển</h5>
                  <p>Không tính phí vận chuyển và lắp đặt</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="box ">
               <div class="img-box">
                  <svg id="_30_Premium" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg" data-name="30_Premium">
                     <g id="filled">
                        <path d="m252.92 300h3.08a124.245 124.245 0 1 0 -4.49-.09c.075.009.15.023.226.03.394.039.789.06 1.184.06zm-96.92-124a100 100 0 1 1 100 100 100.113 100.113 0 0 1 -100-100z" />
                        <path d="m447.445 387.635-80.4-80.4a171.682 171.682 0 0 0 60.955-131.235c0-94.841-77.159-172-172-172s-172 77.159-172 172c0 73.747 46.657 136.794 112 161.2v158.8c-.3 9.289 11.094 15.384 18.656 9.984l41.344-27.562 41.344 27.562c7.574 5.4 18.949-.7 18.656-9.984v-70.109l46.6 46.594c6.395 6.789 18.712 3.025 20.253-6.132l9.74-48.724 48.725-9.742c9.163-1.531 12.904-13.893 6.127-20.252zm-339.445-211.635c0-81.607 66.393-148 148-148s148 66.393 148 148-66.393 148-148 148-148-66.393-148-148zm154.656 278.016a12 12 0 0 0 -13.312 0l-29.344 19.562v-129.378a172.338 172.338 0 0 0 72 0v129.38zm117.381-58.353a12 12 0 0 0 -9.415 9.415l-6.913 34.58-47.709-47.709v-54.749a171.469 171.469 0 0 0 31.467-15.6l67.151 67.152z" />
                        <path d="m287.62 236.985c8.349 4.694 19.251-3.212 17.367-12.618l-5.841-35.145 25.384-25c7.049-6.5 2.89-19.3-6.634-20.415l-35.23-5.306-15.933-31.867c-4.009-8.713-17.457-8.711-21.466 0l-15.933 31.866-35.23 5.306c-9.526 1.119-13.681 13.911-6.634 20.415l25.384 25-5.841 35.145c-1.879 9.406 9 17.31 17.367 12.618l31.62-16.414zm-53-32.359 2.928-17.615a12 12 0 0 0 -3.417-10.516l-12.721-12.531 17.658-2.66a12 12 0 0 0 8.947-6.5l7.985-15.971 7.985 15.972a12 12 0 0 0 8.947 6.5l17.658 2.66-12.723 12.535a12 12 0 0 0 -3.417 10.516l2.928 17.615-15.849-8.231a12 12 0 0 0 -11.058 0z" />
                     </g>
                  </svg>
               </div>
               <div class="detail-box">
                  <h5>
                     Chất lượng tốt nhất
                  </h5>
                  <p>
                     Nhập hàng chất lượng cao
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end why section -->

<!-- arrival section -->
<style>
   .arrival_section {
      position: relative;
   }

   .arrival_bg_box img {
      width: 100%;
      height: auto;
   }

   .typing-animation {
      overflow: hidden;
      /* Để văn bản không hiện ngay hết từ đầu */
      white-space: nowrap;
      /* Ngăn xuống dòng */
      animation: typing 3s steps(40, end);
      /* Thời gian và số bước */
   }

   @keyframes typing {
      from {
         width: 0;
      }

      /* Bắt đầu từ chiều rộng là 0 */
      to {
         width: 100%;
      }

      /* Kết thúc ở chiều rộng 100% (hiện nguyên câu) */
   }
</style>

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
                     <span id="typing-text"></span>
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

<!-- product section -->
<section class="product_section layout_padding">
   <div class="container">
      <div class="heading_container heading_center">
         <h2>
            Our <span>products</span>
         </h2>
      </div>
      <div class="row">
         @foreach($productList as $item)
         <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
               <div class="option_container">
                  <div class="options">
                     <a href="{{ route('frontend.detail', ['id'=>$item->id, 'href_param'=>$item->slug]) }}" class="option1">
                        {{ $item->title }}
                     </a>
                     <a href="{{ route('frontend.detail', ['id'=>$item->id, 'href_param'=>$item->slug]) }}" class="option2">
                        Mua ngay
                     </a>
                  </div>
               </div>
               <div class="img-box">
                  <img src="{{ $item->thumbnail }}" alt="{{ $item->title }}">
               </div>
               <div class="detail-box">
                  <h5>
                     {{ $item->title }}
                  </h5>
                  <h6>
                     {{ number_format($item->discount, 0) }} vnd
                  </h6>
               </div>
            </div>
         </div>
         @endforeach
      </div>
      <div class="btn-box">
         <a href="{{ route('frontend.products') }}">
            View All products
         </a>
      </div>
   </div>
</section>
<!-- end product section -->

<!-- subscribe section -->
<section class="subscribe_section">
   <div class="container-fuild">
      <div class="box">
         <div class="row">
            <div class="col-md-6 offset-md-3">
               <div class="subscribe_form">
                  <div class="heading_container heading_center">
                     <h3>Đăng Ký Để Nhận Ưu Đãi Giảm Giá</h3>
                  </div>
                  <p>Đăng ký ngay để nhận ưu đãi giảm giá độc quyền!</p>
                  <form action="">
                     <input type="email" placeholder="Nhập địa chỉ email của bạn">
                     <button>
                        Đăng ký
                     </button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- end subscribe section -->
<!-- client section -->
<section class="client_section layout_padding">
   <div class="container">
      <div class="heading_container heading_center">
         <h2>
            Đánh giá từ Khách hàng
         </h2>
      </div>
      <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="box col-lg-10 mx-auto">
                  <div class="img_container">
                     <div class="img-box">
                        <div class="img_box-inner">
                           <img src="{{ asset('themes/frontend/images/client.jpg') }}" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="detail-box">
                     <h5>
                        Anna Trevor
                     </h5>
                     <h6>
                        Khách hàng
                     </h6>
                     <p>
                        Tôi rất hài lòng với dịch vụ và sản phẩm của cửa hàng. Sản phẩm chất lượng cao và dịch vụ khách hàng tốt. Tôi sẽ quay lại mua sắm ở đây lần nữa!
                     </p>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="box col-lg-10 mx-auto">
                  <div class="img_container">
                     <div class="img-box">
                        <div class="img_box-inner">
                           <img src="{{ asset('themes/frontend/images/client.jpg') }}" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="detail-box">
                     <h5>
                        Jimmy
                     </h5>
                     <h6>
                        Khách hàng
                     </h6>
                     <p>
                        Mua sắm tại cửa hàng này thực sự là một trải nghiệm tuyệt vời. Sản phẩm đa dạng, giá cả hợp lý và giao hàng nhanh chóng. Tôi rất hài lòng và sẽ giới thiệu cho bạn bè của tôi!
                     </p>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="box col-lg-10 mx-auto">
                  <div class="img_container">
                     <div class="img-box">
                        <div class="img_box-inner">
                           <img src="{{ asset('themes/frontend/images/client.jpg') }}" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="detail-box">
                     <h5>
                        Anna Trevor
                     </h5>
                     <h6>
                        Khách hàng
                     </h6>
                     <p>
                        Đánh giá của tôi về cửa hàng này là hoàn hảo. Chất lượng sản phẩm tuyệt vời, dịch vụ khách hàng chuyên nghiệp, và giá cả hợp lý. Tôi đã mua nhiều lần ở đây và sẽ tiếp tục ủng hộ cửa hàng trong tương lai.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="carousel_btn_box">
            <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
               <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
               <span class="sr-only">Trước</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
               <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
               <span class="sr-only">Tiếp theo</span>
            </a>
         </div>
      </div>
   </div>
</section>
<!-- end client section -->
<script>
   const text = "Giá ưu đãi cực tốt khi mua tại đây!";
   const typingText = document.getElementById("typing-text");
   let i = 0;
   let isDeleting = false;

   function type() {
      const currentText = typingText.innerHTML;
      const currentChar = text.charAt(i);

      if (isDeleting) {
         typingText.innerHTML = currentText.slice(0, -1);
      } else {
         typingText.innerHTML = currentText + currentChar;
         i++;
      }

      if (isDeleting && typingText.innerHTML === "") {
         isDeleting = false;
         i = 0;
      }

      if (!isDeleting && i === text.length) {
         setTimeout(() => {
            isDeleting = true;
            setTimeout(type, 1000); // Đứng im trong 1 giây
         }, 1000); // Đứng im trong 1 giây trước khi lùi lại
      } else {
         const typingSpeed = isDeleting ? 250 : 250; // Thời gian cho mỗi ký tự (lùi lại nhanh hơn)
         setTimeout(type, typingSpeed);
      }
   }

   type(); // Gọi hàm để bắt đầu hiệu ứng typing và lùi lại
</script>
@stop