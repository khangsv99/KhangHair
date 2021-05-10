$(document).ready(function () {
  var active_slot;
  var inside_slot;
  function change_status() {
    $(".slot-status").each(function (index, element) {
      let status = $(this).text();
      if (status !== "Còn chỗ") {
          let current = $(this).closest("td");
        $(current).addClass('het-slot');
      }
    });
  }

  function change_position() {
    let position = 0;
    $(".msg-box").each(function (index, element) {
      position += 1;
      if( (position % 2) == 0) {
        $(this).addClass('right');
      }
      
    });
  }

  function select_stylish(){
    $(".list-avatar-item").click(function () {
      let select = $(this);
      // $(".list-avatar-item").css("background-color", "unset")
      // select.css("background-color", "rgb(159, 154, 154)")
      $(".list-avatar-item").removeClass('stylish-active');
      $(select).addClass('stylish-active');
      
    });
  }



  change_status();
  change_position();
  select_stylish();
});
