<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Carousel</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script>
jQuery(document).ready(function() {
        
	jQuery('.carousel[data-type="multi"] .item').each(function(){
		var next = jQuery(this).next();
		if (!next.length) {
			next = jQuery(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo(jQuery(this));
	  
		for (var i=0;i<2;i++) {
			next=next.next();
			if (!next.length) {
				next = jQuery(this).siblings(':first');
			}
			next.children(':first-child').clone().appendTo($(this));
		}
	});
        
});
</script>
<style>
.carousel-control.left, .carousel-control.right {
	background-image:none;
}

.img-responsive{
	width:100%;
	height:auto;
}

@media (min-width: 992px ) {
	.carousel-inner .active.left {
		left: -25%;
	}
	.carousel-inner .next {
		left:  25%;
	}
	.carousel-inner .prev {
		left: -25%;
	}
}

@media (min-width: 768px) and (max-width: 991px ) {
	.carousel-inner .active.left {
		left: -33.3%;
	}
	.carousel-inner .next {
		left:  33.3%;
	}
	.carousel-inner .prev {
		left: -33.3%;
	}
	.active > div:first-child {
		display:block;
	}
	.active > div:first-child + div {
		display:block;
	}
	.active > div:last-child {
		display:none;
	}
}

@media (max-width: 767px) {
	.carousel-inner .active.left {
		left: -100%;
	}
	.carousel-inner .next {
		left:  100%;
	}
	.carousel-inner .prev {
		left: -100%;
	}
	.active > div {
		display:none;
	}
	.active > div:first-child {
		display:block;
	}
}
</style>

</head>
    <body>
        <div class="container">
        <h1>Bootstrap Multiple image sliding demo</h1>
        <!--The main div for carousel-->
            <div class="container text-center">
                <div class="carousel slide row" data-ride="carousel" data-type="multi" data-interval="9000" id="fruitscarousel">

                    <div class="carousel-inner">
                        <div class="item">
                            <div class="col-sm-4 col-xs-12"><a href="#"><img src="http://golfcaruk.co.uk/wp-content/uploads/2019/01/features-refresheroasis-recycling.jpg" class="img-responsive"></a></div>
                        </div>
                        <div class="item active">
                            <div class="col-sm-4 col-xs-12"><a href="#"><img src="http://golfcaruk.co.uk/wp-content/uploads/2018/12/features-hauler-prox-cargobed.jpg" class="img-responsive"></a></div>
                        </div>
                        <div class="item">
                            <div class="col-sm-4 col-xs-12"><a href="#"><img src="http://golfcaruk.co.uk/wp-content/uploads/2018/12/feature-freedomtxt22-headlights.jpg" class="img-responsive"></a></div>
                        </div>
                        <div class="item">
                            <div class="col-sm-4 col-xs-12"><a href="#"><img src="http://golfcaruk.co.uk/wp-content/uploads/2019/01/refresher-oasis-main-01.jpg" class="img-responsive"></a></div>
                        </div>
                        <div class="item">
                            <div class="col-sm-4 col-xs-12"><a href="#"><img src="http://golfcaruk.co.uk/wp-content/uploads/2019/01/rental-main-03.jpg" class="img-responsive"></a></div>
                        </div>
                        <div class="item">
                            <div class="col-sm-4 col-xs-12"><a href="#"><img src="http://golfcaruk.co.uk/wp-content/uploads/2019/01/refresher-oasis-main-01.jpg" class="img-responsive"></a></div>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#fruitscarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                    <a class="right carousel-control" href="#fruitscarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a> 

                </div>
            </div>
        

        </div>
    </body>
</html>
