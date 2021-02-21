jQuery(function ($) {

    var modalWindow = jQuery("#modal-product");

    var currenProduct , productId ;


    jQuery("a.modal-product-link").on("click" , function (event) {
        currenProduct = jQuery(this);
        productId = currenProduct.data("product");

        var data = {
          id:productId ,
          nonce: quickViewProductData.nonce,
            action: "ajax_quick_view_product"
        };

        $.ajax({
            url: quickViewProductData.url,
           // action: "ajax_quick_view_product",
            data: data,
            type: "post",
          //  dataType: 'json',
            beforeSend: function () {
               // $("#modal-product .modal-body").text(productId);
                jQuery(".modal-body-section").empty();

            },
            success: function (resp) {
                console.log(resp.product);
                $(".modal-body-section").html(resp.product);
            }
        })





    });
















//     modalWindow.on("shown.bs.modal" , function (event) {
// console.log("event show bs -- post id :" + productId);
//     });


});