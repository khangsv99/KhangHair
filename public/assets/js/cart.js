      function isInputNumber(evt) {
        var char = String.fromCharCode(evt.which);
        if (!/[0-9]/.test(char)) {
          evt.preventDefault();
        }
      }
      $(document).ready(function () {
        let curren;
        let inside;

        $(".plus-pro").click(function (e) {
          curren = $(this);
          inside = curren.closest(".product-quantity").find(".quantity-input");
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
          get_value++;
          $(amount).text(get_price * get_value);
          $(inside).val(get_value);
        });
        $(".subtract-pro").click(function (e) {
          curren = $(this);
          inside = curren.closest(".product-quantity").find(".quantity-input");
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

          if (get_value > 0) {
            get_value--;
            $(amount).text(get_price * get_value);
            $(inside).val(get_value);
          }
        });
        $(".delete-product").click(function (e) {
          curren = $(this);
          inside = curren.closest(".row-product");

          inside.remove();
        });
      });