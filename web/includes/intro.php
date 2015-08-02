	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="slogan">
			<h1>Muzamil Syed</h1>
			<p>Student - Programmer - Web Developer</p>
		</div>	
    </section>
	<!-- /Section: intro -->

<script>
	//Array of images which you want to show: Use path you want.
var images=new Array('../img/chicago.jpg','../img/chicago.jpg');
var nextimage=0;
doSlideshow();

function doSlideshow(){
    if(nextimage>=images.length){nextimage=0;}
    $('.intro')
    .css('background-image','url("'+images[nextimage++]+'")')
    .fadeIn(500,function(){
        setTimeout(doSlideshow,1000);
    });
}
</script>