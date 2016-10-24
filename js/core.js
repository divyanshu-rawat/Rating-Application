var rateObject = {
	urlRate : 'mod/rate.php',
	urlReset : 'mod/reset.php',
	rate : function(obj) {
		obj.on('click', function(e) {

			var thisObj = $(this);
			var thisType  = thisObj.hasClass('rateUp') ? 'up' : 'down';
			var thisItem  = thisObj.attr('data-item');
			var thisValue = thisObj.children('span').text();
			
			var test = {
		        type:"POST",
		        url:"mod/rate.php",
		        data : { item : thisItem , rate : thisType},
		        cache: true,
		      }
				
		      $.ajax(test).done(function(data){

		      		thisObj.children('span').html(parseInt(thisValue, 10) + 1);
					thisObj.parent('.rateWrapper').find('.rate').addClass('rateDone').removeClass('rate');
					thisObj.addClass('active');

		       console.log(2,data);   

		      }).fail(function(error){
		      		console.log(1,error);
		      });

			   e.preventDefault();
		});
	},
	reset : function(obj) {
		obj.on('click', function(e) {

			var test = {
		        type:"POST",
		        url: rateObject.urlReset,
		        cache: true,
		      }
				
		      $.ajax(test).done(function(data){

		      	if (!data.error) {
					location.reload();
				}

		       console.log(2,data);   

		      }).fail(function(error){
		      		console.log(1,error);
		      });

			e.preventDefault();
		});
	}
};
$(function() {
	jQuery.ajaxSetup({ cache:false });
	rateObject.rate($('.rate'));
	rateObject.reset($('.reset'));
});





