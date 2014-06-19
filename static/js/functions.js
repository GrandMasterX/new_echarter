jQuery(document).ready(function() 
{/*
	var s=parseInt($(".lefttarget").height());
	var s2=parseInt($(".righttarget").height());
	var h=0;
	if(s>=s2) h=s;
	else h=s2; 
	$(".targetframe").css({'height' : h});*/
var s=parseInt($(".targetframe").height());
$(".targetframe").css({'min-height' : s});
	$(".rightclick").live('click',function(){
		$(".rightbtndiv").toggleClass('passive').toggleClass('active').removeClass('rightclick');		
		$(".leftbtndiv").toggleClass('active').toggleClass('passive').toggleClass('leftclick');
		$(".lefttarget").hide('slow',function(){
		$(".righttarget").show('slow','');
		});
	});



	$(".leftclick").live('click',function(){
		$(".rightbtndiv").toggleClass('passive').toggleClass('active').toggleClass('rightclick');
		$(".leftbtndiv").toggleClass('active').toggleClass('passive').toggleClass('leftclick');
		$(".righttarget").hide('slow',function(){
		$(".lefttarget").show('slow','');
		});
	});		
	
});	