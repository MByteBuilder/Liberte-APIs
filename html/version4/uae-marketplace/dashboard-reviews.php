<!DOCTYPE html>


<head>

<!-- Basic Page Needs
================================================== -->
<title>marketplace</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/main-color.css" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->

<?php include './includes/dashboard-header.php';?>

<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>
	
	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Main">
				<li class="active"><a href="dashboard.php"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
				<li><a href="dashboard-messages.php"><i class="sl sl-icon-envelope-open"></i> Messages <span class="nav-tag messages">2</span></a></li>
				<li><a href="dashboard-bookings.php"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
			</ul>
			
			<ul data-submenu-title="Listings">
				<li><a><i class="sl sl-icon-layers"></i> My Listings</a>
					<ul>
						<li><a href="dashboard-my-listings.php">Active <span class="nav-tag green">6</span></a></li>
						<li><a href="dashboard-my-listings.php">Pending <span class="nav-tag yellow">1</span></a></li>
						<li><a href="dashboard-my-listings.php">Expired <span class="nav-tag red">2</span></a></li>
					</ul>	
				</li>
				<li><a href="dashboard-reviews.php"><i class="sl sl-icon-star"></i> Reviews</a></li>
				<li><a href="dashboard-bookmarks.php"><i class="sl sl-icon-heart"></i> Bookmarks</a></li>
				<li><a href="dashboard-add-listing.php"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
			</ul>	

			
		</div>
	</div>
	<!-- Navigation / End -->


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Reviews</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Reviews</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			
			<!-- Listings -->
			<div class="col-lg-6 col-md-12">

				<div class="dashboard-list-box margin-top-0">

					<!-- Sort by -->
					<div class="sort-by">
						<div class="sort-by-select">
							<select data-placeholder="Default order" class="chosen-select-no-single">
								<option>All Listings</option>	
								<option>Tom's Restaurant</option>
								<option>Sticky Band</option>
								<option>Hotel Govendor</option>
								<option>Burger House</option>
								<option>Airport</option>
								<option>Think Coffee</option>
							</select>
						</div>
					</div>

					<h4>Visitor Reviews</h4> 

					<!-- Reply to review popup -->
					<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
						<div class="small-dialog-header">
							<h3>Reply to review</h3>
						</div>
						<div class="message-reply margin-top-0">
							<textarea cols="40" rows="3"></textarea>
							<button class="button">Reply</button>
						</div>
					</div>

					<ul>

						<li>
							<div class="comments listing-reviews">
								<ul>
									<li>
										<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
										<div class="comment-content"><div class="arrow-comment"></div>
											<div class="comment-by">Kathy Brown <div class="comment-by-listing">on <a href="#">Burger House</a></div> <span class="date">June 2019</span>
												<div class="star-rating" data-rating="5"></div>
											</div>
											<p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
											
											<div class="review-images mfp-gallery-container">
												<a href="images/review-image-01.jpg" class="mfp-gallery"><img src="images/review-image-01.jpg" alt=""></a>
											</div>
											<a href="#small-dialog" class="rate-review popup-with-zoom-anim"><i class="sl sl-icon-action-undo"></i> Reply to this review</a>
										</div>
									</li>
								</ul>
							</div>
						</li>

						<li>
							<div class="comments listing-reviews">
								<ul>
									<li>
										<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /> </div>
										<div class="comment-content"><div class="arrow-comment"></div>
											<div class="comment-by">John Doe <div class="comment-by-listing">on <a href="#">Burger House</a></div> <span class="date">May 2019</span>
												<div class="star-rating" data-rating="4"></div>
											</div>
											<p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
											<a href="#small-dialog" class="rate-review popup-with-zoom-anim"><i class="sl sl-icon-action-undo"></i> Reply to this review</a>
										</div>
									</li>
								</ul>
							</div>
						</li>

						<li>
							<div class="comments listing-reviews">
								<ul>
									<li>
										<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
										<div class="comment-content"><div class="arrow-comment"></div>
											<div class="comment-by">Kathy Brown <div class="comment-by-listing">on <a href="#">Burger House</a></div> <span class="date">June 2019</span>
												<div class="star-rating" data-rating="5"></div>
											</div>
											<p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
											
											<div class="review-images mfp-gallery-container">
												<a href="images/review-image-02.jpg" class="mfp-gallery"><img src="images/review-image-02.jpg" alt=""></a>
												<a href="images/review-image-03.jpg" class="mfp-gallery"><img src="images/review-image-03.jpg" alt=""></a>
											</div>
											<a href="#small-dialog" class="rate-review popup-with-zoom-anim"><i class="sl sl-icon-action-undo"></i> Reply to this review</a>
										</div>
									</li>
								</ul>
							</div>
						</li>

						<li>
							<div class="comments listing-reviews">
								<ul>
									<li>
										<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /> </div>
										<div class="comment-content"><div class="arrow-comment"></div>
											<div class="comment-by">John Doe <div class="comment-by-listing">on <a href="#">Burger House</a></div> <span class="date">May 2019</span>
												<div class="star-rating" data-rating="5"></div>
											</div>
											<p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
											<a href="#small-dialog" class="rate-review popup-with-zoom-anim"><i class="sl sl-icon-action-undo"></i> Reply to this review</a>
										</div>

									</li>
								</ul>
							</div>
						</li>

					</ul>
				</div>

				<!-- Pagination -->
				<div class="clearfix"></div>
				<div class="pagination-container margin-top-30 margin-bottom-0">
					<nav class="pagination">
						<ul>
							<li><a href="#" class="current-page">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
						</ul>
					</nav>
				</div>
				<!-- Pagination / End -->

			</div>

			<!-- Listings -->
			<div class="col-lg-6 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4>Your Reviews</h4>
					<ul>

						<li>
							<div class="comments listing-reviews">
								<ul>
									<li>
										<div class="avatar"><img src="images/reviews-avatar.jpg" alt="" /> </div>
										<div class="comment-content"><div class="arrow-comment"></div>
											<div class="comment-by">Your review <div class="comment-by-listing own-comment">on <a href="#">Tom's Restaurant</a></div> <span class="date">May 2019</span>
												<div class="star-rating" data-rating="4.5"></div>
											</div>
											<p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
											<a href="#" class="rate-review"><i class="sl sl-icon-note"></i> Edit</a>
										</div>

									</li>
								</ul>
							</div>
						</li>

						<li>
							<div class="comments listing-reviews">
								<ul>
									<li>
										<div class="avatar"><img src="images/reviews-avatar.jpg" alt="" /> </div>
										<div class="comment-content"><div class="arrow-comment"></div>
											<div class="comment-by">Your review <div class="comment-by-listing own-comment">on <a href="#">Think Coffee</a></div> <span class="date">May 2019</span>
												<div class="star-rating" data-rating="5"></div>
											</div>
											<p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
											<a href="#" class="rate-review"><i class="sl sl-icon-note"></i> Edit</a>
										</div>

									</li>
								</ul>
							</div>
						</li>

					</ul>
				</div>
			</div>


			<!-- Copyrights -->
			<?php include './includes/dashboard-footer.php';?>
		</div>

	</div>
	<!-- Content / End -->


</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="scripts/jquery-migrate-3.3.2.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>


</body>


</html>