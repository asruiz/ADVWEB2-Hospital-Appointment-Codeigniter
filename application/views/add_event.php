<?php
	$h = '<select name="hour" id="hour">';
	$m = '<select name="minute" id="minute">';
	for($i = 0; $i< 60; $i++){
		if($i < 24){
			$h .= '<option value="'.(($i > 9)? $i : "0$i").'">'.(($i > 9)? $i : "0$i").'</option>';
		}
		$m .= '<option value="'.(($i > 9)? $i : "0$i").'">'.(($i > 9)? $i : "0$i").'</option>';
	}
	$h .= '</select>';
	$m .= '</select>';
?>
<!-- <div style="width:500px; height:135px; overflow:auto; color:#000000; margin-bottom:20px;" align="center"> -->
<div style="background-color: salmon; height:500px;">
	<h4>Adding event for <?php echo "$day $month $year"?></h4>
	<table>
		<tr>
			<td>Time <span class="require">*</span></td>
			<td>:</td>
			<td><?php echo "$h&nbsp;:&nbsp;$m";?>&nbsp;
			</td>
		</tr>

		<tr>
			<td>Event <span class="require">*</span></td>
			<td>:</td>
			<td><input type="text" name="event" id="event" maxlength="50" size="30" /></td>
		</tr>

		<tr>
			<td colspan="2"></td>
			<td><input type="button" name="cancel" value="Cancel" class="cancel">&nbsp;&nbsp;
					<input type="button" name="save" value="Save" class="save"></td>
		</tr>
	</table>
	<script>
	$('.cancel').click(function(){
		var data = false;
		$.fn.colorbox.close(data);
	});

	$('.save').click(function(){
		if($('#event').val().length > 0){
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: "<?php echo site_url("index.php/evencal/do_add");?>",
				data:{<?php echo "year:$year,mon:$mon,day:$day";?>, hour:$('#hour').val(), minute: $('#minute').val(), event:$('#event').val()},
				success: function(data) {
					if(data.status){
						//$.fn.colorbox.close(data);
						window.location = '<?php echo site_url("index.php/evencal")?>';
					}else{
						$('.spacer').html(data.message);
					}
				}
			});
		}else{
			$('.spacer').html('Please complete the field')
			$('#event').attr('class','error_require');
		}
	});
	</script>
</div>
