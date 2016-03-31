define(['jquery','navgoco','bootstrap'], function($,navgoco)
{
	return new function(){
		var self = this;
		self.run = function(){
            $('.sidey .nav').navgoco();

            $('footer h4.title').click(function() {
                $(this).toggleClass('active');
                $(this).next().slideToggle(250);
            });
		};
	}
});