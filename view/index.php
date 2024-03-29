<?php include_once("header.php");?>

<section>
    <div id="banner">

        <h1>Orlando City<small>Orlando City Soccer Club</small></h1>

    </div>

    <div id="news" class="container">
        <div class="text-center">

            <h2>Latest News</h2>
            <hr>

        </div>

        <button type="button" id="btn-news-prev"><i class="fa fa-angle-left"></i></button>
        <button type="button" id="btn-news-next"><i class="fa fa-angle-right"></i></button>

        <div class="row thumbnails owl-carousel owl-theme">            
            <div class="item">                
                <div class="item-inner">                    
                
                    <img src="img/noticiathumb.jpg" alt="Notícia">
                    <h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
                    <time>December 21, 2015</time>
                
                </div>            
            </div>
            
            <div class="item">                
                <div class="item-inner">     
                
                    <img src="img/noticiathumb.jpg" alt="Notícia">
                    <h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
                    <time>December 21, 2015</time>
            
                </div>
            </div>

            <div class="item">
                <div class="item-inner">     
            
                    <img src="img/noticiathumb.jpg" alt="Notícia">
                    <h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
                    <time>December 21, 2015</time>

                </div>
            </div>

            <div class="item">
                <div class="item-inner">     

                    <img src="img/noticiathumb.jpg" alt="Notícia">
                    <h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
                    <time>December 21, 2015</time>

                </div>
            </div>

            <div class="item">
                <div class="item-inner">     

                    <img src="img/noticiathumb.jpg" alt="Notícia">
                    <h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
                    <time>December 21, 2015</time>

                </div>
            </div>
        </div> 
    </div>

    <div id="estatisticas">

        <div class="container">

            <div class="row">
                
                <div class="col-md-4">

                    <p>61348<small>Stadium Capacity</small></p>

                </div>
                
                <div class="col-md-4">

                    <p>2010<small>Founded</small></p>

                </div>
                    
                <div class="col-md-4">
                    
                    <p>7th<small>Eastern Conference</small></p>
            
                </div>
            </div>
        </div>
    </div>

    <div id="call-to-action">

        <div class="text-center">

            <h2>American club number one in Brazil</h2>
            <hr>

        </div>

        <div class="container">
            <div class="row">

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero laborum veritatis minus voluptatem iste maiores asperiores dignissimos hic facilis quos, a rerum, ab corrupti omnis natus atque soluta reprehenderit nobis.</p>

            </div>

            <div class="row">
                <div class="col-md-6">

                    <a href="#" class="btn btn-roxo float-right">Shop</a>

                </div>

                <div class="col-md-6">

                    <a href="#" class="btn btn-amarelo float-left">Register</a>

                </div>
            </div>
        </div>
    </div>
</section>




<?php include_once("footer.php");?>
<script>

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
    
    //Retirado do script efeitos.js pois estava dando conflito com o carousel do shop.

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

</script>