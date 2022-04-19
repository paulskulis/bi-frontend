// Importing JavaScript
//
// You have two choices for including Bootstrap's JS files—the whole thing,
// or just the bits that you need.


// Option 1
//
// Import Bootstrap's bundle (all of Bootstrap's JS + Popper.js dependency)

 import "../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js";


// Option 2
//
// Import just what we need

// If you're importing tooltips or popovers, be sure to include our Popper.js dependency
// import "../../node_modules/popper.js/dist/popper.min.js";

//import "../../node_modules/bootstrap/js/dist/util.js";
//import "../../node_modules/bootstrap/js/dist/modal.js";
window.addEventListener('load', function(event) {
	//Prime all popovers
	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
	var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
	  return new bootstrap.Popover(popoverTriggerEl)
	})

	//Init Owl Carousel
	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    lazyLoad: true,
	    video:true,
	    center:true,
	    autoHeight: true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:4
	        },
	        1000:{
	            items:4
	        }
	    }
	})


	/* Ajax search */
	    $(".headerSearch").on("input", function(){
	    	var query = $(this).val();

	    	if(query.length >= 2) {
				$.post( "/ajax_search.php", { query: query})
				  .done(function( data ) {
				  	$('#searchResultsContainer').html(data);
	    			$("#searchCollapse").collapse('show');
				  });
	    	}
	    	else {
	    		$("#searchCollapse").collapse('hide');
	    	}
    });

	/*Cart and checkout functions */
	$( ".btn-increment" ).click(function(e) {
		var target = $(e.target);
		console.log(target);
		var counter = target.siblings('.counter');
		var value = Number(counter.text());
  		counter.text(value + 1);

  		//Update product page modal count
  		$('#modalCount').text(value + 1);

		//Cart ecxlusive things
		var productId = target.attr('data-product');
		console.log(productId);
		$('#product-' + productId).val(value + 1)
	});

	$( ".btn-decrement" ).click(function(e) {
		var target = $(e.target);
		console.log(target);

		var counter = target.siblings('.counter');
		var value = Number(counter.text());
		if (value > 1) {
  			counter.text(value - 1);
	  	
	  		//Update product page modal count
	  		$('#modalCount').text(value - 1);

			//Cart ecxlusive things
			var productId = target.attr('data-product');
			console.log(productId);
			$('#product-' + productId).val(value - 1)
		}
	});

	$( ".addToCart" ).click(function(e) {
		var target = $(e.target);
		var counter = $('.counter');
		var productId = target.attr('data-productId');
		var productCount = Number(counter.text());
		console.log(target);
		console.log(productId);
		console.log(productCount);


		$.post( "/cart/update", { productId: productId, count: productCount})
		  .done(function( data ) {
		    console.log( "Server response: " + data );
		});
	});

	$( ".toggleWishlist" ).click(function(e) {
		var target = $(e.target);
		var productId = target.attr('data-productId');
		console.log(target);
		console.log(productId);
		console.log($(target.parent().children()[0]));
		
		$.post( "/profile/wishlist/update", { productId: productId, action: 'toggle'})
		  .done(function( data ) {
		   console.log( "Server response: " + data );
		    $(target.children()[0]).toggleClass('desired');
		});
	});

	
});

window.addEventListener("cookieAlertAccept", function() {
    alert("Cookies accepted, inject JS here");
    //Example: https://usefulangle.com/post/101/javascript-load-js-file-dynamic
})