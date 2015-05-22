<div class='container'>
	<?php echo $calendar; ?>
	<br />
	<?php if ($this->session->userdata('admin_area') != 0):
	?>
	<script type="text/javascript">
		
		$(document).ready(function() {
		  $('.calendar .day').click(function(){
		  	day_num = $(this).find('.day_num').html();
		  	alert(day_num);
		  });
		});
		
	</script>
	<?php endif; ?>
</div>
<br />
</body>
<footer>