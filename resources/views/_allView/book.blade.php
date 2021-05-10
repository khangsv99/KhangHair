@extends('index')

@section('content')
<main>
	<div class="book-container">
            <div class="container">
                <div class="steps">
                    <div class="slogan">
                        <b>THƯ GIÃN 30 PHÚT VÀ BẠN SẼ TỎA SÁNG</b>
                    </div>
                    <div class="three-steps">
                        <a href="#"><span class="badge">1</span></a>                 
                        <hr>
                        <a href="#"><span class="badge">2</span></a>     
                        <hr>
                        <a href="#"><span class="badge">3</span></a>     
                    </div>
                </div>
                <div class="stylist">
                    <div class="stylist-label">                 
                      <b><i class="fas fa-minus-circle"></i>  CHỌN STYLIST</b>
                    </div>
                    <div class="list-avatar">
                        <div class="list-avatar-item">
                          <span data-toggle="modal" data-target="#myModal">
                            <img src="assets/img/Book/avatar-anonymous-300x300.png" alt="Avatar" class="avatar">
                          </span>
                          <p class="user-name">
                            Mặc định
                          </p>
                          
                        </div>
                        <div class="list-avatar-item">
                          <span data-toggle="modal" data-target="#myModal">
                            <img src="assets/img/Book/img_avatar2.png" alt="Avatar" class="avatar">
                          </span>
                          <p class="user-name">
                            Quang Trương
                          </p>
                          
                        </div>
                        <div class="list-avatar-item">
                          <span data-toggle="modal" data-target="#myModal">
                            <img src="assets/img/Book/img_avatar.png" alt="Avatar" class="avatar">
                          </span>
                          <p class="user-name">
                            Bảo Nhân
                          </p>
                        
                        </div>

						<div class="list-avatar-item">
                          <span data-toggle="modal" data-target="#myModal">
                            <img src="assets/img/Book/avatar-anonymous-300x300.png" alt="Avatar" class="avatar">
                          </span>
                          <p class="user-name">
                            Mặc định
                          </p>
                          
                        </div>
                        <div class="list-avatar-item">
                          <span data-toggle="modal" data-target="#myModal">
                            <img src="assets/img/Book/img_avatar2.png" alt="Avatar" class="avatar">
                          </span>
                          <p class="user-name">
                            Quang Trương
                          </p>
                          
                        </div>
                        <div class="list-avatar-item">
                          <span data-toggle="modal" data-target="#myModal">
                            <img src="assets/img/Book/img_avatar.png" alt="Avatar" class="avatar">
                          </span>
                          <p class="user-name">
                            Bảo Nhân
                          </p>
                        
                        </div>

                        <div class="list-avatar-item">
                          <span>
                            <img src="assets/img/Book/img_avatar2.png" alt="Avatar" class="avatar">
                          </span>
                          <p class="user-name">
                            Ngọc Tỷ
                          </p>
                        
                        </div>
                        <div class="list-avatar-item">
                          <span>
                            <img src="assets/img/Book/img_avatar.png" alt="Avatar" class="avatar">
                          </span>
                          <p class="user-name">
                            Hoàng Vũ
                          </p>             
                        </div>
                        <div class="list-avatar-item">
                          <span>
                            <img src="assets/img/Book/img_avatar.png" alt="Avatar" class="avatar">
                          </span>
                          <p class="user-name">
                            Hoàng Đẹp Trai
                          </p>             
                        </div>
                        <div class="list-avatar-item">
                          <span>
                            <img src="assets/img/Book/img_avatar.png" alt="Avatar" class="avatar">
                          </span>
                          <p class="user-name">
                            Nhoxsok vjppro
                          </p>             
                        </div>
                        <div class="list-avatar-item">
                          <span>
                            <img src="assets/img/Book/img_avatar.png" alt="Avatar" class="avatar">
                          </span>
                          <p class="user-name">
                            Hoàng Vũ
                          </p>             
                        </div>
                        <div class="list-avatar-item">
                          <span>
                            <img src="assets/img/Book/img_avatar.png" alt="Avatar" class="avatar">
                          </span>
                          <p class="user-name">
                            Hoàng Vũ
                          </p>             
                        </div>
                        <div class="list-avatar-item">
                          <span>
                            <img src="assets/img/Book/img_avatar.png" alt="Avatar" class="avatar">
                          </span>
                          <p class="user-name">
                            Hoàng Vũ
                          </p>             
                        </div>
                        <div class="list-avatar-item">
                          <span>
                            <img src="assets/img/Book/img_avatar.png" alt="Avatar" class="avatar">
                          </span>
                          <p class="user-name">
                            Hoàng Vũ
                          </p>             
                        </div>
                        
                        
                        
                    </div>
                </div>
                <div class="schedule">
                    <b>CHỌN NGÀY GIỜ CẮT (301 TRƯƠNG ĐỊNH)</b>
                    <div class="select-day">
                      <ul class="nav nav-tabs">
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
                            <table class="slot">
                              <tbody>
                                <tr>
                                  <td>8h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>9h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>9h30<br><span class="slot-status">Hết chỗ</span></td>
                                  <td>10h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>10h30<br><span class="slot-status">Còn chỗ</span></td>
                                </tr>
                                <tr>
                                  <td>11h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>11h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>12h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>12h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>13h00<br><span class="slot-status">Còn chỗ</span></td>
                                </tr>
                                <tr>
                                  <td>13h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>14h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>14h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>15h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>15h30<br><span class="slot-status">Còn chỗ</span></td>
                                </tr>
                                <tr>
                                  <td>16h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>16h30<br><span class="slot-status">Hết chỗ</span></td>
                                  <td>17h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>17h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>18h00<br><span class="slot-status">Còn chỗ</span></td>
                                </tr>
                                <tr>
                                  <td>18h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>19h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>19h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>20h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>20h30<br><span class="slot-status">Còn chỗ</span></td>
                                </tr>
                              </tbody>
                              </table>
                          </div>
                          <div id="tomorrow" class="tab-pane fade">
                            <table class="slot" >
                              <tbody> 
                                <tr>
                                  <td>8h30<br><span class="slot-status">Hết chỗ</span></td>
                                  <td>9h00<br><span class="slot-status">Hết chỗ</span></td>
                                  <td>9h30<br><span class="slot-status">Hết chỗ</span></td>
                                  <td>10h00<br><span class="slot-status">Hết chỗ</span></td>
                                  <td>10h30<br><span class="slot-status">Hết chỗ</span></td>
                                </tr>
                                <tr>
                                  <td>11h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>11h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>12h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>12h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>13h00<br><span class="slot-status">Còn chỗ</span></td>
                                </tr>
                                <tr>
                                  <td>13h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>14h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>14h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>15h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>15h30<br><span class="slot-status">Còn chỗ</span></td>
                                </tr>
                                <tr>
                                  <td>16h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>16h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>17h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>17h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>18h00<br><span class="slot-status">Còn chỗ</span></td>
                                </tr>
                                <tr>
                                  <td>18h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>19h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>19h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>20h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>20h30<br><span class="slot-status">Còn chỗ</span></td>
                                </tr>
                              </tbody>
                              </table>
                          </div>
                          <div id="after-tomorrow" class="tab-pan fade">
                            <table class="slot" >
                              <tbody>
                                <tr>
                                  <td>8h30<br><span class="slot-status">Hết chỗ</span></td>
                                  <td>9h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>9h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>10h00<br><span class="slot-status">Hết chỗ</span></td>
                                  <td>10h30<br><span class="slot-status">Còn chỗ</span></td>
                                </tr>
                                <tr>
                                  <td>11h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>11h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>12h00<br><span class="slot-status">Hết chỗ</span></td>
                                  <td>12h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>13h00<br><span class="slot-status">Còn chỗ</span></td>
                                </tr>
                                <tr>
                                  <td>13h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>14h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>14h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>15h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>15h30<br><span class="slot-status">Còn chỗ</span></td>
                                </tr>
                                <tr>
                                  <td>16h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>16h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>17h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>17h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>18h00<br><span class="slot-status">Còn chỗ</span></td>
                                </tr>
                                <tr>
                                  <td>18h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>19h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>19h30<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>20h00<br><span class="slot-status">Còn chỗ</span></td>
                                  <td>20h30<br><span class="slot-status">Còn chỗ</span></td>
                                </tr>
                              </tbody>
                              </table>
                          </div>

                        </div>
                    </div>
                    
                </div>
                <div class="navigation"></div>

                <!-- Modal -->
                  <div id="myModal" class="modal fade" role="dialog">
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
                          <div class="list-cmt">
                            <div class="msg-box">
                              <b class="cmt-user">User A</b>
                              <p>Một comment vô danh nào đó </p>
                            </div>
                            <div class="msg-box">
                              <b class="cmt-user">User A</b>
                              <p>Một comment vô danh nào đó </p>
                            </div>
                            <div class="msg-box">
                              <b class="cmt-user">User A</b>
                              <p>Một comment vô danh nào đó </p>
                            </div>
                            <div class="msg-box">
                              <b class="cmt-user">User A</b>
                              <p>Một comment vô danh nào đó </p>
                            </div>
                            <div class="msg-box">
                              <b class="cmt-user">User A</b>
                              <p>Một comment vô danh nào đó </p>
                            </div>
                            <div class="msg-box">
                              <b class="cmt-user">User A</b>
                              <p>Một comment vô danh nào đó </p>
                            </div>
                            <div class="msg-box">
                              <b class="cmt-user">User A</b>
                              <p>Một comment vô danh nào đó </p>
                            </div>
                            <div class="msg-box">
                              <b class="cmt-user">User A</b>
                              <p>Một comment vô danh nào đó </p>
                            </div>
                            <div class="msg-box">
                              <b class="cmt-user">User A</b>
                              <p>Một comment vô danh nào đó </p>
                            </div>
                          </div>

                        </div>
                      </div>

                    </div>
                  </div>
            </div>
        </div>
</main>


	<!-- <br><br><br><br>
	<h3>Danh sach cac stylic</h3>
	@foreach ($emps as $emp)
		{{$emp->name}}	
	@endforeach
	
	<h3>Danh sach lich da duoc dat cua cac stylic</h3>

	@foreach ($listReserved as $item)
		{{$item->emp_book->name}}	|| <p> phuc vu </p> {{$item->users_book->name}} <p> vao luc </p> {{$item->time}} <p> ngay </p> {{$item->date}}
		<h3>/////////////</h3>
	@endforeach -->
@endsection

@section('css')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/Book/book.css" >
@endsection

@section('script')
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="assets/js/book.js"></script>
@endsection
