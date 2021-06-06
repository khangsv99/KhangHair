@extends('index')

@section('content')
	<main>
		<div class="book-container">
            <div class="book-container-flex">
                <div class="stylist">
                    <div class="stylist-label">
                      <b>CHỌN STYLIST</b>
                    </div>
                    <div class="list-avatar">

                    <?php $loadFirst = true; ?>
                    @foreach ($emps as $emp)
                      <?php
                        if($loadFirst)
                        {
                          ?>
                            <div class="wrap-avatar-boookig">
                              <div class="icon-info-bookig" data-toggle="modal" data-target="#comment-Modal" data-user="{{$emp->id}}">
                                <img src="assets/img/Book/icon-info.png" alt="" >
                              </div>
                              <div class="list-avatar-item stylish-active" data-user="{{$emp->id}}">
                                <span data-toggle="modal">
                                  <img src="assets/img/Book/avatar-anonymous-300x300.png" alt="Avatar" class="avatar">
                                </span>
                                <p class="user-name">
                                  {{$emp->name}}
                                </p>
                              </div>
                            </div>
                          <?php
                        } else {
                          ?>
                            <div class="wrap-avatar-boookig">
                              <div class="icon-info-bookig" data-toggle="modal"  data-target="#comment-Modal" data-user="{{$emp->id}}">
                                <img src="assets/img/Book/icon-info.png" alt="" >
                              </div>
                              <div class="list-avatar-item" data-user="{{$emp->id}}">
                                <span data-toggle="modal">
                                  <img src="assets/img/Book/avatar-anonymous-300x300.png" alt="Avatar" class="avatar">
                                </span>
                                <p class="user-name">
                                  {{$emp->name}}
                                </p>
                              </div>
                            </div>
                          <?php
                        }
                        $loadFirst = false;
                      ?>
                    @endforeach

                



                    </div>
                </div>

                <div class="schedule">
                    <b>CHỌN NGÀY GIỜ CẮT (301 TRƯƠNG ĐỊNH)</b>
                    <div class="select-day">
                      <ul class="nav nav-tabs time-booking">
                        <li class="active">
                          <a data-toggle="tab" href="#today">
                            <b>Hôm nay</b>
                            <span>Thứ Tư, 27/06</span>
                          </a>
                        </li>
                        <li>
                          <a data-toggle="tab" href="#tomorrow">
                            <b>Ngày mai</b>
                            <span>Thứ Năm, 28/06</span>
                          </a>
                        </li>
                        <li>
                          <a data-toggle="tab" href="#after-tomorrow">
                            <b>Ngày kia</b>
                            <span>Thứ Sáu, 29/06</span>
                          </a>
                        </li>
                      </ul>
                        <div class="tab-content">
                          <div id="today" class="tab-pane fade in active">
                            <div class="wrap-day" id="today">
                              <div class="item-time">8h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">9h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">9h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">10h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">10h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">11h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">11h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">12h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">12h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">13h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">13h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">14h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">14h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">15h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">15h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">16h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">16h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">17h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">17h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">18h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">18h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">19h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">19h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">20h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">20h30<br><span class="slot-status">Còn chỗ</span></div>
                            </div>
                          </div>
                          <div id="tomorrow" class="tab-pane fade">
                            <div class="wrap-day" id="tomorrow">
                              <div class="item-time">8h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">9h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">9h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">10h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">10h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">11h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">11h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">12h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">12h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">13h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">13h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">14h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">14h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">15h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">15h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">16h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">16h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">17h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">17h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">18h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">18h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">19h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">19h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">20h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">20h30<br><span class="slot-status">Còn chỗ</span></div>
                            </div>

                          </div>
                          <div id="after-tomorrow" class="tab-pane fade">
                            <div class="wrap-day" id="aftertomorrow">
                              <div class="item-time">8h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">9h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">9h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">10h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">10h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">11h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">11h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">12h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">12h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">13h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">13h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">14h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">14h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">15h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">15h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">16h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">16h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">17h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">17h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">18h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">18h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">19h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">19h30<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">20h00<br><span class="slot-status">Còn chỗ</span></div>
                              <div class="item-time">20h30<br><span class="slot-status">Còn chỗ</span></div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="service">
                  <b class="service-tittle" >DỊCH VỤ</b>
                  <div class="ser-cut">
                    <b class="ser-tittle">
                      Cắt tóc
                    </b>
                    <div>
                      <label class="container-checkbox-service">Combo 10 bước
                        <input type="radio" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>

                  <div class="ser-perm">
                    <b class="ser-tittle">Uốn</b>
                    <div>
                      <label class="container-checkbox-service line-1-1">Cao cấp
                        <input type="radio" checked="checked" name="perm">
                        <span class="checkmark"></span>
                      </label>
                      <label class="container-checkbox-service line-1-2">Tiêu chuẩn
                        <input type="radio" name="perm">
                        <span class="checkmark"></span>
                      </label>
                      <label class="container-checkbox-service line-1-3">Con sâu
                        <input type="radio" name="perm">
                        <span class="checkmark"></span>
                      </label>
                      <label class="container-checkbox-service line-1-4">Premlock
                        <input type="radio" name="perm">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>

                  <div class="ser-dye">
                    <b class= "ser-tittle">
                      Nhuộm tóc
                    </b>
                    <div>
                      <label class="container-checkbox-service line-2-1">Đen phủ bạc
                        <input type="radio" checked="checked" name="dye">
                        <span class="checkmark"></span>
                      </label>
                      <label class="container-checkbox-service line-2-2">Nâu cao cấp
                        <input type="radio" name="dye">
                        <span class="checkmark"></span>
                      </label>
                      <label class="container-checkbox-service line-2-3">Đỏ nâu cao cấp
                        <input type="radio" name="dye">
                        <span class="checkmark"></span>
                      </label>
                      <label class="container-checkbox-service line-2-4">Bạc cao cấp
                        <input type="radio" name="dye">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                  <div class="btn-book">
                    <button type="button">
                      Đặt vé
                    </button>
                  </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="comment-Modal">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <img src="assets/img/Book/avatar-anonymous-300x300.png" alt="Avatar" class="avatar">
                <h4 class="modal-title popup-name">Nguyễn Văn An</h4>
                <div class="rate">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
              <div class="modal-body">
                <div class="list-cmt" id="list-cmt">
                    
                </div>
            </div>
          </div>
        </div>



</main>

{{-- 
	<br><br><br><br>
	<h3>Danh sach cac stylic</h3>
	@foreach ($emps as $emp)
		{{$emp->name}}
	@endforeach

	<h3>Danh sach lich da duoc dat cua cac stylic</h3>

	@foreach ($listReserved as $item)
		{{$item->emp_book->name}}	|| <p> phuc vu </p> {{$item->users_book->name}} <p> vao luc </p> {{$item->time}} <p> ngay </p> {{$item->date}}
		<h3>/////////////</h3>
	@endforeach


	<h3>Noi dung comment</h3>
	@foreach ($comments as $comment)<!-- if theo mã stylic -->
		{{$comment->idEmp}} : {{$comment->emp_comment->name}} <br>
		{{$comment->idUser}} : {{$comment->users_comment->name}} <p>{{$comment->content}}</p>
		<h3>///</h3>
	@endforeach
@endsection --}}

@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/Book/book.css" >
@endsection

@section('script')
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="assets/js/book.js"></script>
@endsection
