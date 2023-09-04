<?php
	session_start();

	include("connection.php");
	include("functions.php");

?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Kursinis</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">


	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
		
		<!-- Header -->
		<header class="header shop">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-12 col-12">
							<!-- Top Left -->
							<div class="top-left">
								<ul class="list-main">
									<li><i class="ti-headphone-alt"></i> +370 6 047 0673</li>
									<li><i class="ti-email"></i> tautvydas.daubaris@stud.vilniustech.lt</li>
								</ul>
							</div>
							<!--/ End Top Left -->
						</div>
						<div class="col-lg-8 col-md-12 col-12">
							<!-- Top Right -->
							<div class="right-content">
								<ul class="list-main">
									<li><i class="ti-location-pin"></i> <a href="contact.php">Store location</a></li>
									<li><i class="ti-user"></i> <a href="#">My account</a></li>
									<li><i class="ti-power-off"></i><a href="login.php">Login</a></li>
								</ul>
							</div>
							<!-- End Top Right -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<div class="middle-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-12">
							<!-- Logo -->
							<div class="logo">
								<a href="index.php"><img src="images/logo.png" alt="logo"></a>
							</div>
							<!--/ End Logo -->
							<!-- Search Form -->
							<div class="search-top">
								<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
								<!-- Search Form -->
								<div class="search-top">
									<form class="search-form">
										<input type="text" placeholder="Search here..." name="search">
										<button value="search" type="submit"><i class="ti-search"></i></button>
									</form>
								</div>
								<!--/ End Search Form -->
							</div>
							<!--/ End Search Form -->
							<div class="mobile-nav"></div>
						</div>
						<div class="col-lg-8 col-md-7 col-12">
							<div class="search-bar-top">
								<div class="search-bar">
									<select>
										<option selected="selected">All Category</option>
										<option>watch</option>
										<option>mobile</option>
										<option>kid’s item</option>
									</select>
									<form>
										<input name="search" placeholder="Search Products Here....." type="search">
										<button class="btnn"><i class="ti-search"></i></button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-12">
							<div class="right-bar">
								<!-- Search Form -->
								<div class="sinlge-bar">
									<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
								</div>
								<div class="sinlge-bar">
									<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
								</div>
								<div class="sinlge-bar shopping">
									<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">2</span></a>
									<!-- Shopping Item -->
									<div class="shopping-item">
										<div class="dropdown-cart-header">
											<span>2 Items</span>
											<a href="#">View Cart</a>
										</div>
										<ul class="shopping-list">
											<li>
												<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
												<a class="cart-img" href="#"><img src="https://cdn.pixabay.com/photo/2016/02/05/22/25/isolated-1182220__480.png" alt="#"></a>
												<h4><a href="#">Man's Jeans</a></h4>
												<p class="quantity">1x - <span class="amount">99.00€</span></p>
											</li>
											<li>
												<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
												<a class="cart-img" href="#"><img src="https://cdn.pixabay.com/photo/2016/02/05/22/25/isolated-1182220__480.png" alt="#"></a>
												<h4><a href="#">Man's Jeans</a></h4>
												<p class="quantity">1x - <span class="amount">35.00€</span></p>
											</li>
										</ul>
										<div class="bottom">
											<div class="total">
												<span>Total</span>
												<span class="total-amount">134.00€</span>
											</div>
											<a href="checkout.php" class="btn animate">Checkout</a>
										</div>
									</div>
									<!--/ End Shopping Item -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="cat-nav-head">
						<div class="row">
							<div class="col-12">
								<div class="menu-area">
									<!-- Main Menu -->
									<nav class="navbar navbar-expand-lg">
										<div class="navbar-collapse">	
											<div class="nav-inner">	
												<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="#">Home</a></li>
													<li><a href="#">Product</a></li>												
													<li><a href="#">Service</a></li>
													<li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
														<ul class="dropdown">
															<li><a href="shop-grid.php">Shop Grid</a></li>
															<li><a href="cart.php">Cart</a></li>
															<li><a href="checkout.php">Checkout</a></li>
														</ul>
													</li>
													<li><a href="#">Pages</a></li>									
													<li><a href="#">Blog<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<li><a href="blog-single-sidebar.php">Blog Single Sidebar</a></li>
														</ul>
													</li>
													<li><a href="contact.php">Contact Us</a></li>
												</ul>
											</div>
										</div>
									</nav>
									<!--/ End Main Menu -->	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!--/ End Header -->
	
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.php">Cart</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
			
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">UNIT PRICE</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">TOTAL</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<?php

							$query = "SELECT * FROM prekes";
							$result = mysqli_query($con, $query);

							if(mysqli_num_rows($result) > 0)
							{
								while($row = mysqli_fetch_array($result))
								{
							?>
								
								}
							}

						?>
						<tbody>
							<tr>
								<td class="image" data-title="No"><img src="data:image/jpeg;base64,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" alt="#"></td>
								<td class="product-des" data-title="Description">
									<p class="product-name"><a href="#">Women Dress</a></p>
									<p class="product-des">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p>
								</td>
								<td class="price" data-title="Price"><span>110.00€ </span></td>
								<td class="qty" data-title="Qty"><!-- Input Order -->
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="100" value="1">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</td>
								<td class="total-amount" data-title="Total"><span>$220.88</span></td>
								<td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
							</tr>
							<tr>
								<td class="image" data-title="No"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAJCggICAsIBwgIBxYKBwkJChsIFQcKIB0iIiAdHx8kKCgsJCYxJx8fLTEtMSkrLi4uIyszODMsNygtLisBCgoKDg0OGhAQFysdFR0rLS0tKy0tLS0tLSstLS0tKy0rKystLSs3LS0tLS0rNzcrLS0tKy03NzcrLSstKy0rK//AABEIAGQAZAMBEQACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAADAAIEBQYBB//EAEUQAAIBAwICBgUIBggHAAAAAAECAwAEERIhBTETQVFxgZEGYaGx0RQiIyQyUsHhU3SCkpPwQmJkcnOissIHFTM1Q1Rj/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAECBAUDBv/EACURAAICAgICAgIDAQAAAAAAAAABAhEDIQQSIjETMjNRBSNhQv/aAAwDAQACEQMRAD8AzMVquAcdXXXb4yr8pJS2XsFS+Mj8odLZfuipfGReUkXNuvyWUKoUmMkkDfrp9Qc9BUXKRt94ofaKkzkSrlNrM/2rHspICn4tfzT3S2nDRPJLbyAlIjpDuNyCezqqnnmaXFw+Jc8GN5C7DjUIt4buXNrJkYtpCdl7jy35bVCGSjpl49xL9Yu3mK0E7MqushssP1gZ/wDXPvFSIP7HTAP57qdioZ8n28KLFQw23qpi6mNjTYde1caLIdI6lRAkIlBF+yS8ebeQdZjI9/xpUTb0CtxmC2J61Q+0VJEGG4nOI4YW5lLnVjwFJhEz3odcyx391cxW8l5K8xfQpCkjJ3J7M7ZrLyu2buFVA9D9ImnvuHSlYYo4DZmWR2k3gmXJwMbHcY9tczvVxCWZ6SNDnUdA19uav8bJ2Rj8rH1mPlT6wD/Zz7xVmO2VJLY8pzFMKOaOfjQFDSlMDCxrsO6oUOw6LToi2GUU6FZJT/psp6wR7qVDshW7fV4B90qPIgfhUkJ+wPE31CNRv9LnFQyypE+PC5lJaXp4ZfCQawFuujLR5Y5Kg4x2bHzrKkb0JddGx/5sycP0JLHcm8utCRxKcW2SSSdXqzsK5NliWlZZej96lzGskZAkkGpl6nI54PI/zyqzxp9NGdysffZbOv08f6sfeK0vWzKb3Q8rTA5poA5ooA87S6TA+d1dhqNhQUXafez+yadkWhwvE6if3TTsVBoLtWOkErz+0NOeXwpWOgEbYgP9SRvYxqaIv2RLnVK7CE4aGIzE41YAIH41S5UqL/BhcgfBuBNdXhE7mSOORZHYHVh9zj2nNZ7ka6x27NB6Ti2sbWC0BZJpJuljdBuhByTnqHUPHsNROr8lQzgFm1iAyN0wEoIKnSdsZB2357dx7dl28rObh40a9H6SWNx9kQsuc6usYrXxT7RMPNj6yskEcxXY4ixQA0DPavqxQB52kYwMY8qdEbCBBToVjgg9fmaKF2EUHVnP940UHcBOAkbquwwTz1c8mpJaItlW3FVtZJ4TkG4Qb/a+YAQQOzOQfCszlLZscBGt4bDHw3hq8ZfWi3UYSGN2DZQb5PrwPaao1ZprRlrnXxSWS7uWz0kRkA6oEOygdwJPeT21wnkrRcx47NT6ITvJCYZAHFttrbm5A5E+oYxU07RwyRqzTWWdzyXcY7uVbPHXgef5T/sZKxXcrCxyoA5jupgeZJNJgfQ+cg+FLsL4x4mk64h/E/Kn2F8YjO/6IfxPyo7B8Zzp32HRLk//AE/KjsL4wc7kxyBxoZcqVDahy7fGp3o50ZXjuRNHKOSnSffWbyGbHB0Wl1xdrvhfDuGaizxXJXGf6GcjwwR5VSukaqVyLSWX5NaiFQNbx4OOfLFUK7SNFPrEuv8Ah5MXmvYZQUYRjZjuTjersI6M7Lk9mnsGkWQrJ0fQuXMQVSp2O2Tnfb1Vs4V4Hn+TvIyxzXQ4iNAHD40wPOEOw7qdHOx2alQrEaKF2HLsc7CigshXp2nPbk+wUP0C9opuM2g+TRSvkCWTVleY3wKysz2bvGjVESxVI5I3UyuYupk1a/AcudUZs1Mcdl/FKXIdnUA9Wg58yMVV9Muf8l76BQ6biRiQGaIucHVr3/OtbJGLgqMHH2lObkbKdejuIkHJdQ8MZq/hfijM5P5WGrqcBZoARoA83U8qnZzoeDTsVCzRYqF6hRYUQ704WX/DB9lRn6GvZA9I1+q8Og5fVRI57M8vaax8r2ejhGkhnDtKW0rKAoW6jwOwE/nVHI9mphWiXb3fQ3SxHAV9TSYH298Y8D76jOGrOkZbLSyK21/Zzo5FvNciN0XOMk5BGOW43HXU8GSUtM4cvCmu0TfXx+tx9hyf8tbfFdwPN83UkEzVkqHR1UALNAHmKwnb6STl206I9hwhb9I/nToXYcIW/SPRQtCCMpBDk46iop0LRFvySrg7FkC1GWkSgrkVnpRNmeWIbiK3jgTwAJ/1CsTI9npcS8TsR023EwOUV8oHqAYD8KqT+yL0PqwTS5vrsNsIYHfuywP41OvEV+TLlXJ4ZBc79IgF0D15B1VxjrKWJfhZ6RKxkmtJMfNe1WQtntU/lW9xHo8pzI+SJFWimKgBUAeYpdJt9LFy/SCpWQ6hBcJ1SRn9sU7F1CCZeplPcwp2Q6sRcdoPjTsXVkVmDzQqxwplBY+ob/hXHPqDLPGVzRn+KXXyu46YAqJ2D6TzHzgv+2sSX2Z6aKqCJMO9txv9aZvJq4ZPsixD6sr71yl3xdh18NQjxCfGu0V4ohJ+TNXwjTPa8JtJNo7uVLZ8fcJAPsNVor+07zl/Ueiz3SST2hgK9BLZB7cqdnQEjbu2862+L6PN832guqrZQFq7/KgDhf1e0fGgZ5kgG2QKl1IdwgVeZANPqLuIxJ1on7oo6i7AJYU3ISP9wUuo1Irrx+gDSR4QoNWQNPLNcsusZ2wbmitiXNxbRncrDCX7y2T76xZM9LH2idZ72nFv64lbyY/CuU1/YjvD8bIN4MyXLn/ycFjbyIH4VOHpHOXtlxwyRhb8IkjZ0aG6MmtEEpGMEbEgVBtQkzpSnBRL6y4k54pYFVCRJai2jhB+xDpOBntyuc9tXeHlTmv9Mz+RwKOJy/RshcnrjfwIatejBsd8o7VceA+NFDs4JQc7yDfliigs81R9hUrIhQ9OyIukp2RaBSS7HuosaRTcZctGVTLayAxHUM1S5UqiX+HC5IbD/wBwbHzkEkaKw+cCABWRL0b61Ik2Bxa3SMQplt5sajpySx+NRmn3s6Y5rp7IkqGSNCuWZ+BmMKOZcMTjvqcfdEOyotuCMY7OBpFcCHX0mFLFM4xkVwlic5v/AE7xzQhjUv0WEVtK8trdwowJmRQpIU7FsnyNaPG4jg0/0Y/P50J43D9mqRpfm5BG+/zhy8+6tijAsRaTf7Y54Ory66KHZwPJ2nn2migswisdu6oHVhA1MicLUwBSMaQBuDoHmYuqvpAwGGazuX9jW/j1oP6UALbvoCppG2kYxVTH9i7lfgZ+CFdI26hV5JGVJuybw2JflUG39KuWdaLPDb7m0vIlSGZVGF228RVXB+RF7l/iYfGmO207fTit1Hl5Ewudu6pkAZkPbQA3pT20xH//2Q==" alt="#"></td>
								<td class="product-des" data-title="Description">
									<p class="product-name"><a href="#">Women Dress</a></p>
									<p class="product-des">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p>
								</td>
								<td class="price" data-title="Price"><span>110.00€ </span></td>
								<td class="qty" data-title="Qty"><!-- Input Order -->
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quant[2]" class="input-number"  data-min="1" data-max="100" value="2">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[2]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</td>
								<td class="total-amount" data-title="Total"><span>$220.88</span></td>
								<td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
							</tr>
							<tr>
								<td class="image" data-title="No"><img src="data:image/jpeg;base64,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" alt="#"></td>
								<td class="product-des" data-title="Description">
									<p class="product-name"><a href="#">Women Dress</a></p>
									<p class="product-des">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p>
								</td>
								<td class="price" data-title="Price"><span>110.00€ </span></td>
								<td class="qty" data-title="Qty"><!-- Input Order -->
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[3]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quant[3]" class="input-number"  data-min="1" data-max="100" value="3">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[3]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</td>
								<td class="total-amount" data-title="Total"><span>220.88€</span></td>
								<td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
							</tr>
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
									<div class="coupon">
										<form action="#" target="_blank">
											<input name="Coupon" placeholder="Enter Your Coupon">
											<button class="btn">Apply</button>
										</form>
									</div>
									<div class="checkbox">
										<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Shipping (+10$)</label>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li>Cart Subtotal<span>330.00€</span></li>
										<li>Shipping<span>Free</span></li>
										<li>You Save<span>20.00€</span></li>
										<li class="last">You Pay<span>310.00€</span></li>
									</ul>
									<div class="button5">
										<a href="#" class="btn">Checkout</a>
										<a href="#" class="btn">Continue shopping</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
			
	<!-- Start Shop Services Area  -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over 100€</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Piece</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->
	
	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->
	
	
	
	<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="images/modal1.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/modal2.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/modal3.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/modal4.jpg" alt="#">
											</div>
										</div>
									</div>
								<!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>Flared Shift Dress</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3>$29.00</h3>
                                    <div class="quickview-peragraph">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                    </div>
									<div class="size">
										<div class="row">
											<div class="col-lg-6 col-12">
												<h5 class="title">Size</h5>
												<select>
													<option selected="selected">s</option>
													<option>m</option>
													<option>l</option>
													<option>xl</option>
												</select>
											</div>
											<div class="col-lg-6 col-12">
												<h5 class="title">Color</h5>
												<select>
													<option selected="selected">orange</option>
													<option>purple</option>
													<option>black</option>
													<option>pink</option>
												</select>
											</div>
										</div>
									</div>
                                    <div class="quantity">
										<!-- Input Order -->
										<div class="input-group">
											<div class="button minus">
												<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
													<i class="ti-minus"></i>
												</button>
											</div>
											<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
											<div class="button plus">
												<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
													<i class="ti-plus"></i>
												</button>
											</div>
										</div>
										<!--/ End Input Order -->
									</div>
									<div class="add-to-cart">
										<a href="#" class="btn">Add to cart</a>
										<a href="#" class="btn min"><i class="ti-heart"></i></a>
										<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
	
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.php"><img src="images/logo2.png" alt="#"></a>
							</div>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Customer Service</h4>
							<ul>
								<li><a href="#">Payment Methods</a></li>
								<li><a href="#">Money-back</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Shipping</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>Vilnius Tech</li>
									<li>Vilnius</li>
									<li>tautvydas.daubaris@stud.vilniustech.lt</li>
									<li>+370 6 047 0673</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="index.php" target="_blank">Kursinis darbas</a>  -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
	
	<!-- Jquery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/magnific-popup.js"></script>
	<!-- Fancybox JS -->
	<script src="js/facnybox.min.js"></script>
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
	<!-- Ytplayer JS -->
	<script src="js/ytplayer.min.js"></script>
	<!-- Flex Slider JS -->
	<script src="js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>
</body>
</html>