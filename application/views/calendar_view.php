<div class='container'>
	<?php echo $calendar; ?>
	<br />
	<?php if ($this->session->userdata('admin_area') != 0):
	?>
	<script type="text/javascript">
		
		$(document).ready(function() {
		  $('.calendar .day').click(function(){
		  	day_num = $(this).find('.day_num').html();
		  	day_data = prompt('Voer een activiteit in!');
		  	if (day_data != null) {
		  		
		  		$.ajax({
		  			url: window.location,
		  			type: 'POST',
		  			data: {
		  				day: day_num,
		  				data: day_data
		  			},
		  			success: function(msg){
		  				location.reload();
		  			}
		  		});
		  		
		  	}
		  });
		});
		
	</script>
	<?php endif; ?>
</div>
<br />
</body>
<footer>