      function isInputNumber(evt) {
        var char = String.fromCharCode(evt.which);
        if (!/[0-9]/.test(char)) {
          evt.preventDefault();
        }
      }
      $(document).ready(function () {
        let curren;
        let inside;
        let totalRoot = 0;
        $(".plus-pro").click(function (e) {
          var proId = $(this).data("proid");
          var countRoot = 0;
          var priceCurrent = 0;
          curren = $(this);
          inside = curren.closest(".product-quantity").find(".quantity-input");
          totalRoot  = $('#all-money-product').text().trim();
          totalRoot = totalRoot.replaceAll('.','');
          let amount = curren
            .closest(".info-pro")
            .find(".total-price")
            .find(".money-p")
            .find(".money-pro");
          let get_price = curren
            .closest(".info-pro")
            .find(".price-product")
            .children()
            .text();
          let get_value = $(inside).val();
          countRoot =  get_value;
          get_value++;
          $price = get_price * get_value;
          $(amount).text($price.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."));
          $(inside).val(get_value);
          priceCurrent = (get_value - countRoot) * get_price;
          var priceTotal = parseInt(totalRoot) + parseInt(priceCurrent);
          $('#all-money-product').text(priceTotal.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."));


          var userId = parseInt($('#userId').val());
          var token = $("meta[name='csrf-token']").attr("content");
          $.ajax({
            url:"/cart/plusorminus",
            method:'POST',
            data: {
                _token: token,
                userId: userId,
                proId: proId,
                amount: get_value
            },
            success: function (response){
              console.log(response);
          }
         });

        });
        $(".subtract-pro").click(function (e) {
          var proId = $(this).data("proid");
          var countRoot = 0;
          var priceCurrent = 0;
          curren = $(this);
          inside = curren.closest(".product-quantity").find(".quantity-input");
          totalRoot  = $('#all-money-product').text();
          totalRoot = totalRoot.replaceAll('.','');
          let amount = curren
            .closest(".info-pro")
            .find(".total-price")
            .find(".money-p")
            .find(".money-pro");
          let get_price = curren
            .closest(".info-pro")
            .find(".price-product")
            .children()
            .text();
          let get_value = $(inside).val();
          countRoot =  get_value;
          if (get_value > 0) {
            get_value--;
            $price = get_price * get_value;
            $(amount).text($price.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."));
            $(inside).val(get_value);

            priceCurrent = (countRoot - get_value) * get_price;
            var priceTotal = parseInt(totalRoot) - parseInt(priceCurrent);
            $('#all-money-product').text(priceTotal.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."));


            var userId = parseInt($('#userId').val());
            
            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
              url:"/cart/plusorminus",
              method:'POST',
              data: {
                  _token: token,
                  userId: userId,
                  proId: proId,
                  amount: get_value
              },
              success: function (response){
                console.log(response);
            }
          });



          }
        });
        $(".delete-product").click(function (e) {
          var proId = $(this).data("proid");
          curren = $(this);
          inside = curren.closest(".row-product");
          var userId = parseInt($('#userId').val());
          var token = $("meta[name='csrf-token']").attr("content");
          $.ajax({
            url:"/cart/delete/{userId}/{proId}",
            type: 'DELETE',
            data: {
                _token: token,
                userId: userId,
                proId: proId
            },
            success: function (response){
              location.reload(true);
          }
         });
        });
      });

