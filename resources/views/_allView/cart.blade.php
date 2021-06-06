@extends('index')

@section('content')
<main>
  <input type="hidden" value="1" id="userId">
  <div class="container">
    <div class="cart-layout">
      <div class="title-cart">
        <h1>Giỏ hàng của bạn</h1>
      </div>
      <div class="content-cart">
        <div class="left-main">
          <div class="title-count-cart">
            Bạn đang có <span id="count-cart"></span> sản phẩm trong giỏ
            hàng
          </div>
          <div class="table-cart">

            <?php
            $total = 0;
            ?>
            @foreach ($carts as $cart)
            <div class="row-product">
              <div class="img-pro">
                <a href="">
                  <img src="{{$cart->products->thumbnail}}" alt="" /> <!-- Thumbnail -->
                </a>
              </div>
              <div class="info-pro">
                <div class="name-product">
                  <h3>{{$cart->products->title}}</h3> <!-- Title -->
                </div>
                <div class="price-product">
                  <span>
                      <?php 
                          echo number_format($cart->products->price, 0, ',', '.');
                      ?>
                </div>
                <div class="product-quantity">
                  <button class="subtract-pro float-left" data-proid="{{$cart->idPro}}">
                    <i class="fas fa-minus"></i>
                  </button>
                  <input type="text" onkeypress="isInputNumber(event)" value="<?php echo number_format($cart->amount, 0, ',', '.'); ?>" class="quantity-input float-left" />
                  <button class="plus-pro float-left" data-proid="{{$cart->idPro}}">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <div class="total-price">
                  <p class="money-p">
                    <span>Thành tiền: </span><span class="money-pro">
                      <?php
                      $totalItem = 0;
                      $price = $cart->products->price;
                      $amount =  $cart->amount;
                      $totalItem = $price * $amount;
                      $total = $total + $totalItem;
                      echo number_format($totalItem, 0, ',', '.');
                      ?>
                    </span>
                  </p>
                </div>
                <button class="delete-product" data-proid="{{$cart->idPro}}">
                  <i class="far fa-trash-alt"></i>
                </button>
              </div>
            </div>
            @endforeach

          </div>
          <div class="note-cart">
            <div class="left-note">
              <form action="" method="post" id="note-order">
                <h5>Ghi chú đơn hàng</h5>
                <textarea name="" id="" rows="6"></textarea>
                {{-- <button type="button" id="btn-note">Gửi</button> --}}
              </form>
            </div>
            <div class="right-note">
              <h5>Chính Sách Mua Hàng</h5>
              <ul>
                <li>
                  <p>
                    VẬN CHUYỂN TỨC THỜI Giao Nhanh Nội Thành Hà Nội - Hồ Chí
                    Minh
                  </p>
                </li>
                <li>
                  <p>
                    CHẤT LƯỢNG ĐẢM BẢO Hơn 200 Thương Hiệu hàng đầu Thế Giới
                  </p>
                </li>
                <li>
                  <p>CAM KẾT HỖ TRỢ 24/7 Gọi Diện - SMS - Messenger</p>
                </li>
                <li>
                  <p>
                    ĐỔI TRẢ TRÊN TOÀN HỆ THỐNG Miễn Phí Trong Vòng 30 Ngày
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="right-main">
          <div class="box-right">
            <h3>Thông tin đơn hàng</h3>

            <form action="{{route('post.payment')}}">
              <div class="total-bill">
                <p>
                  Tổng tiền: <span><span id="all-money-product"><?php echo number_format($total, 0, ',', '.'); ?></span><span>₫</span></span>
                  <input type="hidden" name="total" value="<?php echo $total?>">
                  <input type="hidden" name="note" value="text">
                </p>
              </div>
              <div class="payment">
                <p>Bạn có thể nhập mã giảm giá ở trang thanh toán</p>
                <button>THANH TOÁN</button>
              </div>
            </form>
            <div class="back-store">
              <a href="/products"> <i class="fa fa-reply mr-2"></i>Tiếp tục mua hàng </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/Cart/reset.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/Cart/cart.css') }}">
@endsection

@section('script')
<script type="text/javascript" src="/assets/js/cart.js"></script>
@endsection