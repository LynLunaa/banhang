<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>{{ $title }}</title>
   <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('themes/frontend/images/images.png') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('themes/frontend/css/bootstrap.css') }}">
   <link href="{{ asset('themes/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
   <link href="{{ asset('themes/frontend/css/style.css') }}" rel="stylesheet">
   <link href="{{ asset('themes/frontend/css/responsive.css') }}" rel="stylesheet">

   <style>
      /* Add your custom CSS here */
      /* Expand container */
      .container {
         max-width: 1200px;
      }

      /* Header */
      .header_section {
         background-color: #fff;
         color: #333;
         padding: 20px 0;
      }

      .navbar {
         background-color: transparent;
      }

      .navbar-brand img {
         max-width: 250px;
      }

      .navbar-toggler-icon {
         background-color: #333;
      }

      .navbar-nav .nav-link {
         color: #333;
      }

      .navbar-nav .nav-link:hover {
         color: #ff5722;
      }

      .nav_search-btn {
         background-color: #ff5722;
         color: #fff;
         border: none;
      }

      /* Slider */
      .slider-section {
         background-image: url('your-slider-image.jpg');
         background-size: cover;
         background-position: center;
         height: 400px;
      }

      .slider-content {
         text-align: center;
         padding: 100px 0;
         color: #fff;
      }

      .slider-content h1 {
         font-size: 36px;
         margin-bottom: 20px;
      }

      .slider-content p {
         font-size: 18px;
         margin-bottom: 30px;
      }

      /* Footer */
      footer {
         background-color: #333;
         color: #fff;
         padding: 50px 0;
      }

      .footer_menu {
         text-align: center;
      }

      .footer_menu ul {
         padding: 0;
         list-style: none;
      }

      .footer_menu ul li {
         margin-bottom: 10px;
      }

      .badge.bg-danger {
         color: #fff;
      }

      /* Màu chữ mặc định */
      .widget_menu ul li a {
         color: #fff;
         transition: color 0.3s;
         /* Thêm hiệu ứng chuyển đổi màu trong 0.3 giây */
      }

      /* Hiệu ứng khi rê chuột qua */
      .widget_menu ul li a:hover {
         color: #ff5722;
         /* Đổi màu chữ khi rê chuột qua */
      }

      /* Other changes for different sections of the website */
      /* Ẩn input tìm kiếm mặc định */
   </style>
   @yield('css')
</head>

<body>
   <!-- Header section -->
   <header class="header_section">
      <div class="container">
         <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{ route('home_index') }}"><img width="200" src="{{ asset('themes/frontend/images/logo.png') }}" alt="#" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class=""></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav">
                  <li class="nav-item active">
                     <a class="nav-link" href="{{ route('home_index') }}">Trang chủ <span class="sr-only">(Hiện tại)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#about">Về chúng tôi</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('frontend.products') }}">Sản phẩm</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('frontend.news') }}">Tin tức</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('frontend.contact') }}">Liên hệ</a>
                  </li>
                  <li class="nav-item">
                     @if($cartNum > 0)
                     <label class="badge bg-danger" style="position: absolute; top: -2px; color: #fff">{{ $cartNum }}</label>
                     @endif
                     <a class="nav-link" href="{{ route('frontend.cart') }}">
                        <i class="fa fa-shopping-cart"></i>
                     </a>
                  </li>

                  <form class="form-inline">
                     <div class="input-group">
                        <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Bạn tìm mua gì...">
                     </div>
                  </form>
               </ul>
            </div>
         </nav>
      </div>
   </header>
   <!-- End header section -->
   @yield('slider')

   <!-- Main content section -->
   @yield('main-content')

   <!-- Footer -->
   <footer>
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="full">
                  <div class="logo_footer">
                     <a href="#"><img width="210" src="{{ asset('themes/frontend/images/logo.png') }}" alt="#" /></a>
                  </div>
                  <div class="information_f">
                     <p><strong>ĐỊA CHỈ:</strong> 28 White tower, Tên đường, Thành phố New York, Hoa Kỳ</p>
                     <p><strong>ĐIỆN THOẠI:</strong> +84 762 103 668</p>
                     <p><strong>EMAIL:</strong> support@gokisoft.com</p>
                  </div>
               </div>
            </div>
            <div class="col-md-8">
               <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="widget_menu">
                              <h3>Trang của chúng tôi</h3>
                              <ul>
                                 <li><a href="{{ route('home_index') }}">Trang chủ</a></li>
                                 <li><a href="{{ route('frontend.products') }}">Sản phẩm</a></li>
                                 <li><a href="{{ route('frontend.news') }}">Tin tức</a></li>
                                 <li><a href="{{ route('frontend.contact') }}">Liên hệ</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="widget_menu">
                              <h3>Tin tức mới nhất</h3>
                              <ul>
                                 <li><a href="#">Tài khoản</a></li>
                                 <li><a href="#">Thanh toán</a></li>
                                 <li><a href="#">Đăng nhập</a></li>
                                 <li><a href="#">Đăng ký</a></li>
                                 <li><a href="#">Mua sắm</a></li>
                                 <li><a href="#">Tiện ích</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3>Thư thông báo</h3>
                        <div class="information_f">
                           <p>Đăng ký thông báo bằng thư và cập nhật hàng ngày.</p>
                        </div>
                        <div class="form_sub">
                           <form>
                              <fieldset>
                                 <div class="field">
                                    <input type="email" placeholder="Nhập địa chỉ Email của bạn" name="email" />
                                    <input type="submit" value="Đăng ký" />
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- End footer -->
   <div class="cpy_">
      <p class="mx-auto">© 2021 Bản quyền thuộc về <a href="https://gokisoft.com">MyShop.com</a></p>
   </div>
   <!-- jQuery -->
   <script src="{{ asset('themes/frontend/js/jquery-3.4.1.min.js') }}"></script>
   <!-- Popper.js -->
   <script src="{{ asset('themes/frontend/js/popper.min.js') }}"></script>
   <!-- Bootstrap.js -->
   <script src="{{ asset('themes/frontend/js/bootstrap.js') }}"></script>
   <!-- Custom.js -->
   <script src="{{ asset('themes/frontend/js/custom.js') }}"></script>

   <script>
      $(document).ready(function() {
         // Bắt sự kiện khi focus vào input tìm kiếm
         $('#keyword').focus(function() {
            toggleSearchBar();
         });

         // Bắt sự kiện khi mất focus khỏi input tìm kiếm
         $('#keyword').blur(function() {
            toggleSearchBar();
         });

         // Bắt sự kiện khi người dùng nhấn phím Enter trong input tìm kiếm
         $('#keyword').keypress(function(event) {
            if (event.keyCode === 13) { // Mã phím Enter
               performSearch();
            }
         });

         // Hàm hiển thị/ẩn input tìm kiếm
         function toggleSearchBar() {
            $('#keyword').toggleClass('active');
         }

         // Hàm thực hiện tìm kiếm và chuyển trang
         function performSearch() {
            var searchText = $('#keyword').val();
            // Điều hướng đến trang danh sách sản phẩm với tham số tìm kiếm
            window.location.href = '/danh-sach-san-pham?search=' + searchText;
         }
      });
   </script>

   @yield('js')
</body>

</html>