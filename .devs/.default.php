<!--================================MAP SECTION==========================================-->
		
		<section id="map-section">
			<div id="wrapper">
				<div id="map_canvas"></div>
			</div>
		</section>

		<!--================================ STATIC HEADER SECTION==========================================-->
		
		<section class="search-section padding-top-50 padding-bottom-50">
			<div class="container">
				<div class="static-header-text">
						<h1 class="black"><spane>su</spane><span>j</span><spane>se</spane></h1>
						<h3 class="black margin-bottom-30">Honest Results</h3>
					</div>
					<div class="search-form-wrap2 shadow-3">
						<form class="clearfix" action="#">
							<div class="input-field-wrap pull-left">
								<input class="search-form-input" name="key-word" placeholder="enter keyword" type="text"/>
							</div>
							<div class="select-field-wrap pull-left">
								<select class="search-form-select" name="categories" >
									<option class="options" value="all">All Categories</option>
									<? 
						if(!empty($JesusCats)){
							foreach($JesusCats as $Cats){
							echo '<option class="options" value="'. $Cats{catID} .'">'. $Cats{category} .'</option>';
							} }
							
							?>
									
								</select>
							</div>
							<div class="select-field-wrap pull-left">
								<select class="search-form-select" name="location" >
									<option class="options" value="all">All Locations</option>
									<? 
						if(!empty($JesusLocs)){
							foreach($JesusLocs as $Locs){
							echo '<option class="options" value="'. $Locs{locId} .'">'. $Locs{city} .'</option>';
							} }
							
							?>
									
									
								</select>
							</div>
							<div class="submit-field-wrap pull-left">
								<input class="search-form-submit bgblue-1 white" name="key-word" type="submit"/>
							</div>
						</form>
					</div>
				</div>
		</section>
		
	
		<!--================================ STATIC HEADER SECTION==========================================-->
		

		<!--================================FEATURE LISTING SECTION==========================================-->
		
		<section class="feature-section border-top padding-bottom-100">
			<div class="container-fluid"><!-- section container -->
				<div class="feature-wrap">
					<ul class="feature-slider clearfix" data-items="5" data-items-tab-ls="4" data-items-tab="3" data-autoplay="true" data-loop="true" data-nav="false" data-gutter="0">
						<? 
						if(!empty($JesusFeatured)){
							foreach($JesusFeatured as $Featured){

								echo '<li class="item"><!-- .ITEM -->
							<div class="feature-item">
								<div class="figure">
									<img src="'. $Featured{imgOne} .'" width="384" height="300" alt="feature item"/>
									<div class="item-love"><a href="#"><i class="fa fa-heart-o"></i><i class="fa fa-heart "></i></a></div>
									<div class="hover-overlay"><div class="hover-overlay-inner"></div></div>
									<div class="feature-content clearfix">
										
										
										<div class="feature-location pull-left"><!-- location-->
											<a href="#"><i class="fa fa-map-marker"></i>'. $Featured{city} .'</a>
										</div><!-- location end-->
										<div class="star-rating pull-right"><!-- rating-->
											<div class="score-callback" data-score="'. $Featured{eRating} .'"></div>
										</div><!-- rating end-->
									</div>
								</div>
							</div>
						</li><!-- /.ITEM -->';
							}
						}
						
						?>
						
						
						
						
					</ul>
				</div>
			</div>
		</section>
		
		<!--================================CATEGORY SECTION ==========================================-->
		
				<section class="categories-section padding-bottom-70"><!-- content area column -->
					<div class="container">
						<div class="section-title-wrap shadow-1 bgwhite padding-bottom-30 padding-top-30 margin-bottom-50"><!-- section title -->
							<h5>Directory<spane>Category</spane></h5>
						</div><!-- section title end -->
						<div class="category-section-wrap cat-style-3 cat-slider clearfix">
							<? 
						if(!empty($JesusCats)){
							foreach($JesusCats as $Cats){
							echo '<div class="main-wrap"><!-- category column -->
								<div class="cat-wrap shadow-1">
									<div class="cat-wrap-inner">
										<p><i class="fa '. $Cats{symbol} .' yallow-1 white"></i></p>
										<h5><a href="?'. $Cats{catID} .'">'. $Cats{category} .'</a></h5>
									</div>
								</div>
							</div><!-- category column end -->';
							} }
							
							?>
							
							
							
						</div>
					</div><!--/container-->
				</section>
		
		
		
		<!--================================LISTING SECTION ==========================================-->
		
		<section class="listing-section padding-top-100 padding-bottom-70 bgwhite">
			<div class="container"><!-- section container -->
				<div class="section-title-wrap margin-bottom-50"><!-- section title -->
					<h4>recent<spane>listings</spane></h4>
					<div class="title-divider">
						<div class="line"></div>
						<div class="box"></div>
						<div class="line"></div>
					</div>
					<p>We help new customers & search engines to find your business online</p>
				</div><!-- section title end -->
				<div class="add-listing-wrapper">
					<div class="listing-main gridview tab-content">
						  <div id="latest-listing" class="tab-pane active">
								<div class="listing-wrapper row">
								<? 
						if(!empty($JesusRecent)){
							foreach($JesusRecent as $Recent){
							echo '<div class="item col-md-4 col-sm-6 col-xs-12"><!-- .ITEM -->
										<div class="listing-item clearfix">
											<div class="figure">
												<img src="'. $Recent{imgOne} .'" width="384" height="300" alt="feature item"/>
												<div class="item-love"><a href="#"><i class="fa fa-heart-o"></i><i class="fa fa-heart "></i></a></div>
												<div class="hover-overlay"><div class="hover-overlay-inner"></div></div>
												<div class="listing-content clearfix">
													<div class="listing-meta-cat">
														<a class="bgyallow-1 c333" href="#">'. $Recent{category} .'</a>
													</div>
													<div class="listing-title">
														<h6><a href="single-listing.html">'. $Recent{title} .'</a></h6>
													</div>
													<div class="listing-location pull-left"><!-- location-->
														<a href="#"><i class="fa fa-map-marker"></i>'. $Recent{city} .'</a>
													</div><!-- location end-->
													<div class="star-rating pull-right"><!-- rating-->
														<div class="score-callback" data-score="'. $Recent{eRating} .'"></div>
													</div><!-- rating end-->
												</div>
											</div>
										</div>
									</div><!-- /.ITEM -->';
							}
							} ?> 
									
									
								</div>
							</div>
					</div>
				</div>
			</div><!-- section container end -->
		</section>
		
		
		<!--================================CALLOUT SECTION==========================================-->
		
		<section class="callout-section padding-top-100 padding-bottom-100 bgwhite">
			<div class="container"><!-- section container -->
				<div class="callout-wrapper">
					<div class="callout-1">
						<div class="callout-message"><!--blog entry column-->
							<h2 class="white">START YOUR new BUSINESS</h2>
							<h4 class="white">AMAZING directory html Template</h4>
						</div><!--blog entry column end-->
						<div class="callout-btns"><!--blog entry column-->
							<a class="bgwhite c333" href="#">Read More</a>
							<a class="bgyallow-1 c333" href="#">Purchase</a>
						</div><!--blog entry column end-->
					</div>
				</div>
			</div><!-- section container end -->
		</section>
		
		<!--================================LOCATION SECTION==========================================-->
		
		<section class="location-section padding-top-100 padding-bottom-70">
			<div class="container"><!-- section container -->
				<div class="section-title-wrap margin-bottom-50"><!-- section title -->
					<h4>Explore<spane>locations</spane></h4>
					<div class="title-divider">
						<div class="line"></div>
						<div class="box"></div>
						<div class="line"></div>
					</div>
					<p>We help new customers & search engines to find your business online</p>
				</div><!-- section title end -->
				<div class="location-wrapper style1">
					<div class="row">
					<? 
						if(!empty($JesusLocs)){
							foreach($JesusLocs as $Locs){
							echo '<div class="col-md-4 col-sm-6 col-xs-12"><!--blog entry column-->
							<div class="location-entry">
								<div class="figure">
									<img src="'. $Locs{cityImg} .'" width="384" height="384" alt="location"/>
									<div class="hover-overlay"><div class="hover-overlay-inner"></div></div>
									<div class="location-content-1 clearfix">
										<div class="location-icon">
											<i class="fa fa-map-marker bgyallow-1 white"></i>
										</div>
										<div class="location-title-disc">
											<h5><a href="?'. $Locs{locId} .'">'. $Locs{city} .'</a></h5>
										</div>
									</div>
								</div>
							</div>
						</div><!--blog entry column end-->';
							} }
							
							?>
							
						
					</div>
				</div>
			</div><!-- section container end -->
		</section>
		
		<!--================================FUNFACTS COUNTER SECTION==========================================-->
		
		<section id="funfact" class=" padding-top-100 padding-bottom-70 bgwhite">
			<div class="container">
				<div class="row" id="funfact-1">
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margin-bottom-30 text-center clearfix">
						<div class="funfact-1 color-1  clearfix">
							<div class="fun-wrap">
								<div class="count" id="items" data-to="160" data-speed="4000">160</div>
								<div class="funfact"><p> items</p></div>
							</div>
						</div>
					</div><!-- /.col-md-3 col -->
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margin-bottom-30 text-center clearfix">
						<div class="funfact-1 color-1  clearfix">
							<div class="fun-wrap">
								<div class="count" id="location" data-to="210" data-speed="4000">210</div>
								<div class="funfact"><p> locations</p></div>
							</div>
						</div>
					</div><!-- /.col-md-3 col -->  				
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margin-bottom-30 text-center clearfix">
						<div class="funfact-1 color-1  clearfix">
							<div class="fun-wrap">
								<div class="count" id="projects" data-to="795" data-speed="4000">795</div>
								<div class="funfact"><p> projects</p></div>
							</div>
						</div>
					</div><!-- /.col-md-3 col -->
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 margin-bottom-30 text-center clearfix">
						<div class="funfact-1 color-1  clearfix">
							<div class="fun-wrap">
								<div class="count" id="events" data-to="158" data-speed="4000">158</div>
								<div class="funfact"><p> event</p></div>
							</div>
						</div>
					</div><!-- /.col-md-3 col -->
				</div><!-- /#funfact-1 -->
			</div><!-- container end -->
		</section>
		
		<!--================================BLOG SECTION==========================================-->
		
		<section class="blog-section padding-top-100 padding-bottom-70">
			<div class="container"><!-- section container -->
				<div class="section-title-wrap margin-bottom-50"><!-- section title -->
					<h4>our<spane>blog</spane></h4>
					<div class="title-divider">
						<div class="line"></div>
						<div class="box"></div>
						<div class="line"></div>
					</div>
					<p>We help new customers & search engines to find your business online</p>
				</div><!-- section title end -->
				<div class="blog-wrapper">
					<div class="row">
						<div class="col-md-4 col-sm-12 col-xs-12"><!--blog entry column-->
							<div class="blog-entry shadow-1">
								<div class="figure">
									<img src="images/news/home/01.jpg" alt="blog entry"/>
									<div class="hover-overlay"><div class="hover-overlay-inner"></div></div>
								</div>
								<div class="entry-content">
									<div class="entry-title">
										<h6>Take me out of country</h6>
									</div>
									<div class="entry-disc">
										<p>Check it out, y'all. Everyone who was invited is here. Well, thanks to the Internet I'm now bored with Is there a place on th.</p>
									</div>
									<div class="entry-metas clearfix">
										<a class="date" href="#"><i class="fa fa-calendar"></i>March 16, 2015</a>
										<a class="permalink bgyallow-1 c333" href="#">read more</a>
									</div>
								</div>
							</div>
						</div><!--blog entry column end-->
						<div class="col-md-4 col-sm-12 col-xs-12"><!--blog entry column-->
							<div class="blog-entry shadow-1">
								<div class="figure">
									<img src="images/news/home/02.jpg" alt="blog entry"/>
									<div class="hover-overlay"><div class="hover-overlay-inner"></div></div>
								</div>
								<div class="entry-content">
									<div class="entry-title">
										<h6>Take me out of country</h6>
									</div>
									<div class="entry-disc">
										<p>Check it out, y'all. Everyone who was invited is here. Well, thanks to the Internet I'm now bored with Is there a place on th.</p>
									</div>
									<div class="entry-metas clearfix">
										<a class="date" href="#"><i class="fa fa-calendar"></i>March 16, 2015</a>
										<a class="permalink bgyallow-1 c333" href="#">read more</a>
									</div>
								</div>
							</div>
						</div><!--blog entry column end-->
						<div class="col-md-4 col-sm-12 col-xs-12"><!--blog entry column-->
							<div class="blog-entry shadow-1">
								<div class="figure">
									<img src="images/news/home/03.jpg" alt="blog entry"/>
									<div class="hover-overlay"><div class="hover-overlay-inner"></div></div>
								</div>
								<div class="entry-content">
									<div class="entry-title">
										<h6>Take me out of country</h6>
									</div>
									<div class="entry-disc">
										<p>Check it out, y'all. Everyone who was invited is here. Well, thanks to the Internet I'm now bored with Is there a place on th.</p>
									</div>
									<div class="entry-metas clearfix">
										<a class="date" href="#"><i class="fa fa-calendar"></i>March 16, 2015</a>
										<a class="permalink bgyallow-1 c333" href="#">read more</a>
									</div>
								</div>
							</div>
						</div><!--blog entry column end-->
					</div>
				</div>
			</div><!-- section container end -->
		</section>
		
		
		<!--================================TESTIMONIAL SECTION==========================================-->
		
		<section class="testimonial-section bgwhite padding-top-100 padding-bottom-100">
			<div class="container"><!-- section container -->
				<div id="testimonial" class="testimonial">
							<div class="item shadow-3">
								<div class="testi-cap-1">
									<div class="author-thumb">
										<img src="images/testimonial/thumb.png" alt="testimonial"/>
									</div>
									<div class="author-details">
										<h5 class="yallow-1">John doe</h5>
										<p>CEO / Listing inc.</p>
										<div class="star-rating"><!-- rating-->
											<div class="score-callback" data-score="5"></div>
										</div><!-- rating end-->
									</div>
									<div class="clear"></div>
								</div>
								<div class="testi-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
							</div>
							<div class="item shadow-3">
								<div class="testi-cap-1">
									<div class="author-thumb">
										<img src="images/testimonial/thumb2.png" alt="testimonial"/>
									</div>
									<div class="author-details">
										<h5 class="yallow-1">John doe</h5>
										<p>CEO / Listing inc.</p>
										<div class="star-rating"><!-- rating-->
											<div class="score-callback" data-score="5"></div>
										</div><!-- rating end-->
									</div>
									<div class="clear"></div>
								</div>
								<div class="testi-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
							</div>
							<div class="item shadow-3">
								<div class="testi-cap-1">
									<div class="author-thumb">
										<img src="images/testimonial/thumb.png" alt="testimonial"/>
									</div>
									<div class="author-details">
										<h5 class="yallow-1">John doe</h5>
										<p>CEO / Listing inc.</p>
										<div class="star-rating"><!-- rating-->
											<div class="score-callback" data-score="5"></div>
										</div><!-- rating end-->
									</div>
									<div class="clear"></div>
								</div>
								<div class="testi-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
							</div>
						</div>
			</div><!-- section container end -->
		</section>
