<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url();?>jam/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>jam/jquery.flipcountdown.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>jam/jquery.flipcountdown.css" />
<script>
jQuery(function($){
	var i = 1000;
	$('#retroclockbox1').flipcountdown();
	var i = 1;
	$('#retroclockbox_counter').flipcountdown({
		tick:function(){
			return i++;
		}
	});
	$('#retroclockbox2').flipcountdown({showHour:false,showMinute:false,showSecond:true});
	$('#retroclockbox3').flipcountdown({tzoneOffset:3,showSecond:false});
	$('#retroclockbox4').flipcountdown({am:true});
	$('#retroclockbox5').flipcountdown({speedFlip:50});
	$('#retroclockbox6').flipcountdown({tick:function(){
		return new Date('5/10/2012 12:34:23');
	}});
})
</script>
<div id="main">
					<div id="retroclockbox_sm"></div>
					<script>
					jQuery(function($){
						$('#retroclockbox_lg').flipcountdown({size:'lg'});
						$('#retroclockbox_md').flipcountdown({size:'md'});
						$('#retroclockbox_sm').flipcountdown({size:'sm'});
						$('#retroclockbox_xs').flipcountdown({size:'xs'});
					})
					</script>
				</div>