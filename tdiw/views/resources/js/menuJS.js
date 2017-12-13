$( document ).ready(function() {
    var hide = true;

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
        if(hide){
            $('#menuCartProducts').load('index.php?action=cart-management&menu=1', function(){
                console.log("Product loaded.");
                $(".shopping-cart-menu").fadeToggle( "fast");
                hide = false;
            })
            
        }else{
            $(".shopping-cart-menu").fadeToggle( "fast");
            hide = true;
        }

    });

});