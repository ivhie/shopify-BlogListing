<!-- Add this on head tag -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

<!-- CSS style-->
<style>
 .single_post_main_wrap { max-width: 1200px; margin:50px auto 50px ; }
 .single_post_main { 
        max-width: 100%;
		margin: 0 auto 50px;
		display: flex;
		column-gap: 0px;
		flex-wrap: wrap;
		justify-content: space-between;
 }
 .post_left_content { width:63%; padding-right:70px; }
 .post_right_sidebar { width:37%; }
 
 .post_left_content .post_date_time { color:#97989f;font-size: 14px;display: block; margin-bottom: 5px; }
 .post_left_content .post_title { font-weight: 700;color:#49453e;font-size: 35px; line-height: 35px;margin-bottom: 35px; }
 .post_left_content .post_featured_image img { width:100%; margin-bottom:30px; }
 
 .post_right_sidebar h2.recent_heading { font-weight: 600;color:#49453e;font-size: 19px; line-height: 21px;margin-bottom: 25px; }
 .post_right_sidebar .post_item { display:flex; width: 100%; justify-content: space-between; padding:20px 12px; border-radius:15px; border:1px solid #e88d9740;box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px; margin-bottom: 30px; }
 .post_right_sidebar .post_image {  border-radius:10px; overflow:hidden;margin-bottom: 15px;width:198px;height:131px;background-size:cover;background-position:center;background-repeat:no-repeat; }
 .post_right_sidebar .post_image img { opacity:0; width:100%; }
 .post_right_sidebar .post_content { width:50%; padding-left:10px; }
 .post_right_sidebar .post_date_time { color:#97989f;font-size: 14px;display: block; margin-bottom: 2px; }
 .post_right_sidebar .post_title { font-weight: 600;color:#49453e;font-size: 15px; line-height: 17px;margin-bottom: 5px; }
 .post_right_sidebar .post_excerpt { line-height: 20px; font-size: 14px;}
 .post_right_sidebar .read_more { color: #fff;
	background-color: #e88d97;
	border-radius: 25px;
	padding: 6px;
	font-size: 14px;
	display: block;
	width: 150px;
	text-align: center;
	margin: 10px auto 0;
	font-weight: 500;
 }
 .post_right_sidebar .view_more {
    color: #fff;
    background-color: #e88d97;
    border-radius: 25px;
    padding: 10px;
    display: block;
    width: 150px;
    text-align: center;
    margin: 25px auto 0;
    font-weight: 500;
}

.post_recommeded_products {margin-bottom:50px;}
.recommended_heading {  font-weight: 700;color:#49453e;font-size: 28px; line-height: 35px;margin-bottom: 30px; }

/* owl carousel css here */
.owl-prev {
	width: 15px;
	height: 100px;
	position: absolute;
	top: 30%;
	margin-left: -35px !important;
	display: block !important;
	border:0px solid black;
}

.owl-next {
	width: 15px;
	height: 100px;
	position: absolute;
	top: 30%;
	right: -35px !important;
	display: block !important;
	border:0px solid black;
}
.owl-prev i, .owl-next i { }
.owl-prev:hover, .owl-next:hover { background-color:transparent;  }
.owl-theme .owl-nav [class*=owl-] { background-color:transparent !important;}
.slider-w { display:flex; column-gap: 25px;    margin: 30px 0 50px; justify-content: center; }
.slide-item_wrap { border:1px solid #d16e89; border-radius: 20px; padding:0px 10px 30px; }
.slide-item {  margin:0 auto;  }
.slide-item .slide-image { text-align:center; min-height: 130px; }
.slide-vendor { text-align:center; font-weight: 600;color:#49453e; font-size:14px; }
.slide-item .slide-image img { margin:0 auto; width:unset !important; }
.slide-prod_name {     color: #49453e;
    font-weight: 600;
    font-size: 18px;
    margin-top: 10px;
    line-height: 22px;
    margin-bottom: 5px;
    text-align: center;min-height: 45px;  }
.slide-ratings {     color: #49453e;
    display: flex;
    font-size: 12px;
    justify-content: center; }
.slide-ratings img { height:9px; margin-top: 4px; margin-right: 6px;  width:unset !important; }
.slide-small {font-size:11px; color:#d16e89; font-weight: 600; }
.slide-price {     color: #6d675e;
    font-weight: 600;
    text-align: center;
    margin-bottom: 10px;
    margin-top: 10px;
    font-size: 18px; } 

.buy-buttons {
	max-width: 150px;
    font-size: 15px;
	text-transform: uppercase;
    position: relative;
    text-align: center;
    text-decoration: none;
    color: #d16e89;
    font-weight: 600;
    margin: 12px auto 0;
    display: block;
    background-color: #fff;
    padding: 7px 15px;
    border-radius: 20px;
    border: 2px solid #d16e89;
}
.shopify-product-form { margin-bottom:0px; }

@media only screen and (max-width: 999px) {
	  #owl-carousel2 .owl-next {
		right: 35px !important;
	}

	#owl-carousel2 .owl-prev {
		margin-left: 35px !important;
	}
}

@media only screen and (max-width: 350px) {
	#owl-carousel2 .owl-next {
			right: 45px !important;
	 }
	#owl-carousel2 .owl-prev {
		margin-left: 50px !important;
	}
}
</style>


<!-- Custom Liquid Script -->
<div class="single_post_main_wrap">
  
	<div class="single_post_main">
		<div class="post_left_content">
		   <span class="post_date_time">{{ article.published_at | date: "%B %d, %Y" }}</span>
		   <h1 class="post_title">{{- article.title | link_to: article.url }}</h1>
		   <div class="post_featured_image"><img src="{{ article.image | img_url: 'master' }}" alt="" /></div>
		   <!-- Show article content -->
		   {{ article.content }}
		</div>
		<div class="post_right_sidebar">
				<!-- Get Current --Listing -->
				<h2 class="recent_heading">Recent Articles</h2>
				{% for article in blogs.news.articles limit:5 %}
				   <div class="post_item post_item-1">
						<div class="post_image" style="background-image:url('{{ article.image | img_url: 'master' }}');">
							<a href="{{ article.url }}"><img src="{{ article.image | img_url: 'master' }}" alt="" /></a>
						</div>
						<div class="post_content">
							<span class="post_date_time">{{ article.published_at | date: "%B %d, %Y" }}</span>
							<h3 class="post_title">{{- article.title | link_to: article.url }}</h3>
							<div class="post_excerpt">{{ article.excerpt | truncatewords: 17 }}</div>
							<a class="read_more" href="{{ article.url }}">READ MORE</a>
						</div>
					</div>
				{% endfor %}
				<a class="view_more" href="/blogs/news/">VIEW MORE</a>

		</div>
	</div>
	
	<div class="post_recommeded_products">
		<h3 class="recommended_heading">Recommended Products</h3>
		<div id="owl-carousel2" class="slider-w owl-carousel owl-theme">
			
			 {% for recommended in article.metafields.custom.recommended_products.value %}
              <div class="item slide-item_wrap">
				<div class="slide-item">
					<div class="slide-image"><a href="https://dewha.co/products/{{ recommended.handle }}"><img src="{{ recommended.images[0] | img_url: 'master' }}"></a></div>
					<div class="slide-vendor">{{ recommended.vendor }}</div>
					<div class="slide-prod_name"><a href="https://dewha.co/products/{{ recommended.handle }}">{{ recommended.title }}</a> </div>
					<div class="slide-price">{{ recommended.price_max | money }}</div>
					<div class="slide-ratings">
					5.0&nbsp;&nbsp; <img src="https://cdn.shopify.com/s/files/1/0613/6119/3115/files/star-ico.png?v=1729551399"> <br>
					</div>
					
					<!--<div class="slide-add-to-cart"><a href="#">ADD TO CART</a></div>-->
					
					<form method="post" action="/cart/add" class="shopify-product-form">
					  <input type="hidden" name="id" value="{{ recommended.variants.first.id }}" />
					  <input min="1" type="hidden" id="quantity" name="quantity" value="1"/>
					  <input type="submit" value="Add to cart" class="btn buy-buttons" />
					</form>


				</div>
			  </div>	
             {%- endfor -%}
			 
		</div>
	</div>
	
</div>



<!-- jQuery Owl carousel Add this on head or footer part -->
<script>
	  jQuery(function($){
		  $("#owl-carousel2").owlCarousel({
			 margin:30,
			 nav: true,
			 dots: false,
			 loop: true,
			 responsive: {
			  0: {
				items: 1
			  },
			  600: {
				items: 1
			  },
			  1000: {
				items: 4
			  }
			},
			 navText : ['<i class="fa fa-angle-left" aria-hidden="true"><img src="https://cdn.shopify.com/s/files/1/0613/6119/3115/files/arrow-left.png?v=1728289795"/></i>','<i class="fa fa-angle-right" aria-hidden="true"><img src="https://cdn.shopify.com/s/files/1/0613/6119/3115/files/arrow-right.png?v=1728289795"/></i>']
		  });
		  
		  
	   })
</script>
