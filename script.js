$(document).ready(function(){
	chargerNews();
});

	function chargerNews(){
		$.ajax({
			url : 'news.php',
			dataType : 'html',
			success : function(data){
				$(".article").empty();
				$(".article").after(data);
				}
			
			
		})
		
	}