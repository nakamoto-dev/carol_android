$(function () {
	 var austDay = new Date("September 17, 2021");
		$('#launch_date').countdown(
	{
	until: austDay,
	 layout: '<ul class="countdown"><li><p class="number">{dn}<\/p><p class="time">{dl}<\/p><\/li><li><p class="number">{hn}<\/p><p class="time">{hl}<\/p><\/li><li><p class="number">{mn}<\/p><p class="time">{ml}<\/p><\/li><li><p class="number">{sn}<\/p><p class="time">{sl}<\/p><\/li><\/ul>'
	  });
  		$('#year').text(austDay.getFullYear());
		
		
	var austDay = new Date("March 1, 2021");
	$('#launch_date1').countdown(
	{
	until: austDay,
	 layout: '<ul class="countdown"><li><p class="number">{dn}<\/p><p class="time">{dl}<\/p><\/li><li><p class="number">{hn}<\/p><p class="time">{hl}<\/p><\/li><li><p class="number">{mn}<\/p><p class="time">{ml}<\/p><\/li><li><p class="number">{sn}<\/p><p class="time">{sl}<\/p><\/li><\/ul>'
	  });
  		$('#year').text(austDay.getFullYear());
});