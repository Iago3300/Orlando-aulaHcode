<?php include_once("header.php");?>

<link rel="stylesheet" href="lib/plyr/dist/plyr.css">

<section>
    <div id="call-to-action">
        <div class="text-center">

            <h2>Videos</h2>
            <hr>

        </div>

        <div class="container">
            <div class="row">
                <div class="mx-auto video-player">
                   
                       <video id="player" src="mp4/highlights.mp4" type="video/mp4 controls data-poster="img/highlights.jpg>
                            
                           <track kind="captions" label="Português (Brasil)" src="vtt/legendas.vtt" srclang="pt-br" default />
                        
                        </video>                  

                    <input type="range" id="volume" min="0" max="1" step="0.01" value="1">
                    <button type="button" id="btn-play-pause" class="btn btn-success">PLAY</button>

                </div>
            </div>
        </div>
    </div>
    <div id="news" class="container">
        <div class="text-center">

            <h2 class="lastest-videos">Latest Videos</h2>
            <hr>

        </div>
        <div class="row thumbnails owl-carousel owl-theme">            
            <div class="item" data-video="highlights">                
                <div class="item-inner">                    
                
                    <img src="img/highlights.jpg" alt="Notícia">
                    <h3>Highlights</h3>
                    
                </div>            
            </div>            
            <div class="item" data-video="Orlando_City_Foundation_2015">                
                <div class="item-inner">     
                
                    <img src="img/Orlando_City_Foundation_2015.jpg" alt="Notícia">
                    <h3>Orlando City Foundation 2015</h3>
            
                </div>
            </div>
            <div class="item" data-video="highlights">                
                <div class="item-inner">                    
                
                    <img src="img/highlights.jpg" alt="Notícia">
                    <h3>Highlights</h3>
                    
                </div>            
            </div>            
            <div class="item" data-video="Orlando_City_Foundation_2015">                
                <div class="item-inner">     
                
                    <img src="img/Orlando_City_Foundation_2015.jpg" alt="Notícia">
                    <h3>Orlando City Foundation 2015</h3>
            
                </div>
            </div>
            <div class="item" data-video="highlights">
                
                <div class="item-inner">                    
                
                    <img src="img/highlights.jpg" alt="Notícia">
                    <h3>Highlights</h3>
                    
                </div>            
            </div>            
            <div class="item" data-video="Orlando_City_Foundation_2015">                
                <div class="item-inner">     
                
                    <img src="img/Orlando_City_Foundation_2015.jpg" alt="Notícia">
                    <h3>Orlando City Foundation 2015</h3>
            
                </div>
            </div>
            <div class="item" data-video="highlights">                
                <div class="item-inner">                    
                
                    <img src="img/highlights.jpg" alt="Notícia">
                    <h3>Highlights</h3>
                    
                </div>            
            </div>            
            <div class="item" data-video="Orlando_City_Foundation_2015">                
                <div class="item-inner">     
                
                    <img src="img/Orlando_City_Foundation_2015.jpg" alt="Notícia">
                    <h3>Orlando City Foundation 2015</h3>
            
                </div>
            </div>            
        </div>
</section>

<?php include_once("footer.php");?>

<script src ="lib/plyr/dist/plyr.js"></script>
<script>
$(function(){

    $(".thumbnails .item").on("click", function(){

        $("video").attr({
            "src":"mp4/"+$(this).data('video')+".mp4",
            "data-poster":"img/"+$(this).data('video')+".jpg"
        });
    });

    $("#volume").on("mousemove", function(){

        $("video")[0].volume = parseFloat($(this).val());

    });

   $("#btn-play-pause").on("click", function(){

        var video = $("video")[0];

        if ($(this).hasClass("btn-success")) {
        
            $(this).text("STOP");
        
            video.play();
        
        } else {

            $(this).text("PLAY");
            video.pause();

        }

        $(this).toggleClass("btn-success btn-danger");

   }); 

   const player = new Plyr('#player');

});

</script>