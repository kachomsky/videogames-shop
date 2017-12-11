$( document ).ready(function() {
	 $('#menuProfile').click(function(){
	 	if($(".userMenu").css('display') == 'none'){
	 		$(".userMenu").addClass("userMenuShow");
            $(".userMenu").show();            
        }
        else {
        	$(".userMenu").removeClass("userMenuShow");
            $(".userMenu").hide();
        }
	 });


    $("#cart").on("click", function() {
        if($(".shopping-cart-menu").css('display') != 'none'){
            $('#menuCartProducts').load('index.php?action=cart-management&menu=1', function(){
                console.log("Product loaded.");
            })
            $(".shopping-cart-menu").fadeToggle( "fast");
        }else{
            $(".shopping-cart-menu").fadeToggle( "fast");
        }

    });

});