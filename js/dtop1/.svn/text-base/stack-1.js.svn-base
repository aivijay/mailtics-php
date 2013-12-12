jQuery(function () { 
	// Stack initialize
	var openspeed = 300;
	var closespeed = 300;
	jQuery('.stack>img').toggle(function(){
		var vertical = 0;
		var horizontal = 0;
		var el=jQuery(this);
		jQuery(el).next().children().each(function(){
			jQuery(this).animate({top: '-' + vertical + 'px', left: horizontal + 'px'}, openspeed);
			vertical = vertical + 55;
			horizontal = (horizontal+.75)*2;
		});
		jQuery(el).next().animate({top: '-50px', left: '10px'}, openspeed).addClass('openStack')
		   .find('li a>img').animate({width: '50px', marginLeft: '9px'}, openspeed);
		jQuery(el).animate({paddingTop: '0'});
	}, function(){
		//reverse above
		var el=$(this);
		jQuery(el).next().removeClass('openStack').children('li').animate({top: '55px', left: '-10px'}, closespeed);
		jQuery(el).next().find('li a>img').animate({width: '79px', marginLeft: '0'}, closespeed);
		jQuery(el).animate({paddingTop: '35px'});
	});
	
	// Stacks additional animation
	jQuery('.stack li a').hover(function(){
		jQuery("img",this).animate({width: '56px'}, 100);
		jQuery("span",this).animate({marginRight: '30px'});
	},function(){
		jQuery("img",this).animate({width: '50px'}, 100);
		jQuery("span",this).animate({marginRight: '0'});
	});
});
