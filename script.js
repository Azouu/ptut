$(document).ready(function(){
	chargerNews();
	setInterval(chargerNews,10000);
	
});

	function chargerNews(){
		$.ajax({
			url : 'news.php',
			dataType : 'html',
			success : function(data){
				$(".article").empty();
				$(".article").append(data);
				}
			
			
		})
		
	}