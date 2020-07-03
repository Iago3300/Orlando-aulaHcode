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

				$(".thumbnails").owlCarousel({
					loop:true,
					margin:10,
					//nav:true, /*nav são os botoes de navegação*/
					navText: ["Anterior", "Próximo"],
					responsive: { 
						0: {								
							items:1
						},
						480:{
							items:3
						}, 
						1000: {
							items:4
						}, 
					}

				});
		var owl = $('.owl-carousel');
                owl.owlCarousel();
 
                $('#btn-news-prev').click(function() {
                    owl.trigger('prev.owl.carousel');
                });
 
                $('#btn-news-next').click(function() {
                    owl.trigger('next.owl.carousel');
                });

                $("#page-up").click(function(event){
                	$("body").animate({
                		scrollTop:0
                	},1000);
                	event.preventDefault();

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