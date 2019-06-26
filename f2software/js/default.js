/* Ajax */
function ajaxPOST(p) {

	/*  DEBUG
	alert(p.action);
	alert(p.task);
	alert(p.params);
	alert(p.results_div);
	alert(p.show_loading);
	alert(p.return_url);
	alert('task=' + p.task + p.params);
	*/

	//alert(p.task);
	//alert(p.params);
	//alert(p.action);

	jQuery(document).ready(function(){

        	jQuery.ajax({
                	type: p.type,
                        url: p.action,
 			data: 'task=' + p.task + p.params + '&random=' + Math.random()*99999,
			async: p.async,
	                beforeSend: function(){     

				content_before = jQuery(p.results_div).html();
				jQuery('#pav_error').html('');

	                          if(p.show_loading_div != ""){
					jQuery(p.show_loading_div).html(p.show_loading_value);
                                        jQuery(p.show_loading_div).addClass(p.show_loading_class);
					jQuery(p.show_loading_div).show();
				  }
                        },

			success: function(response){

				response = jQuery.trim(response);

				var redirect_response = 0;
				if(response.indexOf('{REDIRECT_RESPONSE}') >= 0) redirect_response = 1;

				if(redirect_response){

					var res = response.split("{REDIRECT_RESPONSE}");
					redirect_response = res[1];
					jQuery(redirect_response).html(response);
	
				} else {	
				 	jQuery(p.results_div).html(response);
				}

				if(p.hide_div_on_success == "yes") jQuery(p.show_loading_div).hide();
			 	if(p.return_url) location.href = p.return_url;
			
				// Se apertou o botão salvar, não é mais necessário avisar ao deixar a página
				if(p.btn_triggered == 'btn_save'){
	                                jQuery('#changedContent').html("");
				}
                       },

                       error: function(txt){
                       		jQuery('#pav_content').html(txt);
                       },

                       complete: function(txt){
				if(p.exec_on_complete) eval(page.exec_on_complete);
                       }
		}) 
		return false;
	});
}
