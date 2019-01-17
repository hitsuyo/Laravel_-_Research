
jQuery(function() {
	jQuery('#example').DataTable();

	jQuery('#frmCreateNewWpPost').on("submit", function(){
		// var frmdata = jQuery(this).serialize();
		jQuery.post(ajaxurl+"/api/get_nonce/?controller=post&method=create_post", function(
			var nonce = response.nonce;
			// var postdata = "nonce="+nonce;
			var frmdata = "nonce"+ nonce + "&" + jQuery("#frmCreateNewWpPost").serialize()+"&status=publish";
			console.log();
			jQuery.post(ajaxurl+"/api/posts/create_post/", frmdata, function(response){
				console.log(response);
			});
		});
	});
});