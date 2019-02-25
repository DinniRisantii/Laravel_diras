$(function{
	var current = window.location.href;
	$('ul.navbar-nav li a').each(function{
		var $this = $(this);
		if($this.attr('href') == curent){
			$this.parents('li').addClass('actiive');
	}
});
});