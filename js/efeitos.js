$(document).ready(function(){

	$("#logotipo").on("mouseover", function(){ //".on" é o equivalente ao addEventListener do javascript

		$("#banner h1").addClass("efeito");//adiciona a classe efeito lá do css

	}).on("mouseout", function(){

			$("#banner h1").removeClass("efeito");

	});

			$("#input-search").on("focus", function(){

				$("li.search").addClass("ativo");

			}).on("blur", function(){
					
				$("li.search").removeClass("ativo");

			});

				
        $("#btn-bars").click(function(){
        	$("header").toggleClass("open-menu");
        });
        $("#menu-mobile-mask, .btn-close").click(function(){
        	$("header").removeClass("open-menu");
        });
        $("#btn-search").click(function(){
        	$("header").toggleClass("open-search");
        	$("#input-search-mobile").focus();
        });

});