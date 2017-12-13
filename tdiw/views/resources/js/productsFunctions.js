
$( document ).ready(function() {
  // Handler for .ready() called.

    //load products
    $('.Category').click(function(){
        $('#products').load('index.php?action=list-products&category_id='+$(this).data("value"), function(){
            console.log("Products loaded.");
        })
    });

    //show or hide description of a product
    $("#products").on("click", "#showDescription", function () {
        if($("#description"+$(this).data("value")).css('display') == 'none'){
            $("#description"+$(this).data("value")).show();
        }
        else {
            $("#description"+$(this).data("value")).hide();
        }
    });

    $("#products").on("click", ".showDetails", function () {
        $('#currentProductDetail').load('index.php?action=product-detail&product_id='+$(this).data("value"), function(){
            console.log("Product loaded.");
        })
    });

    //add to cart function
    $(document).on("click","input[name='addCartButton']", function(){
        var productToAdd = $(this).data("value");
        var quantityAdded = $(".quantityVal").val();
        productToAdd.quantity = quantityAdded;

        $.ajax({
            type: "POST",
            url: "index.php?action=cart-management",
            data: {"data":productToAdd},
            success: function(result){
            if (result == 1)
            {
                alert("Product has been added to the cart correctly.");
            }
            else if (result == 0)
            {
                alert("You need to be logged to use this functionality");
            }
            else{
                alert("There has been some error");
            }
        }});
    });





});

