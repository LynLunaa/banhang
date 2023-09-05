@extends('layouts.master')

@section('main-content')
<!-- inner page section -->
<section class="inner_page_head" style="background-color: #f7444e; color: white;">
   <div class="container_fuild">
      <div class="row">
         <div class="col-md-12">
            <div class="full">
               <h3>Danh Sách Sản Phẩm</h3>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end inner page section -->
<!-- product section -->
<section class="product_section layout_padding" style="background-color: white;">
   <div class="container">
      <div class="row">
         @foreach($productList as $item)
         <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="box">
               <div class="option_container">
                  <div class="options">
                     <a href="{{ route('frontend.detail', ['id'=>$item->id, 'href_param'=>$item->slug]) }}" class="option1" style="color: black;">
                        {{ $item->title }}
                     </a>
                     <a href="{{ route('frontend.detail', ['id'=>$item->id, 'href_param'=>$item->slug]) }}" class="option2" style="color: white; background-color: black;">
                        Mua ngay
                     </a>
                  </div>
               </div>
               <div class="img-box">
                  <img src="{{ $item->thumbnail }}" alt="{{ $item->title }}">
               </div>
               <div class="detail-box">
                  <h5 style="color: black;">
                     {{ $item->title }}
                  </h5>
                  <h6 style="color: black;">
                     {{ number_format($item->discount, 0) }} vnd
                  </h6>
               </div>
            </div>
         </div>
         @endforeach

      </div>
      <div class="btn-box">
         {{ $productList->links() }}
      </div>
   </div>
</section>
<!-- end product section -->
@stop