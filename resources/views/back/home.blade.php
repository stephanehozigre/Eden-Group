@extends('back.layouts.layout_content')
@section('content_body')
<div class="row">
	<div class="col-sm-12">
		<h3>Dashboard
			<small>Home</small>
		</h3>
	</div>
</div>
<!-- .row -->
<div class="row">
	<div class="col-sm-6 col-lg-3">

		<div class="teaser media after_cover color_bg_1">

			<div class="media-body">
				<h4 class="counter highlight" data-from="0" data-to="2630" data-speed="1800">0</h4>
				<p>Reviews / Month</p>
			</div>

			<div class="media-right">
				<div class="teaser_icon size_small">
					<i class="fa fa-star-half-o"></i>
				</div>
			</div>
		</div>
	</div>
	<!-- .col-* -->
	<div class="col-sm-6 col-lg-3">
		<div class="teaser media after_cover color_bg_2">

			<div class="media-body">
				<h4 class="highlight counter-wrap">
					<span class="counter" data-from="0" data-to="223" data-speed="2500">0</span>
				</h4>
				<p>Clients / Month</p>
			</div>

			<div class="media-right">
				<div class="teaser_icon size_small">
					<i class="fa fa-users"></i>
				</div>
			</div>
		</div>
	</div>
	<!-- .col-* -->
	<div class="col-sm-6 col-lg-3">
		<div class="teaser media after_cover color_bg_3">

			<div class="media-body">
				<h4 class="counter highlight" data-from="0" data-to="325" data-speed="2100">0</h4>
				<p>Orders / Month</p>
			</div>
			<div class="media-right">
				<div class="teaser_icon size_small">
					<i class="fa fa-shopping-cart"></i>
				</div>
			</div>
		</div>
	</div>
	<!-- .col-* -->
	<div class="col-sm-6 col-lg-3">
		<div class="teaser media after_cover color_bg_1">
			<div class="media-body">
				<h4 class="highlight counter-wrap">
					$
					<span class="counter" data-from="0" data-to="121" data-speed="2500">0</span>
					<span class="counter-add">K</span>
				</h4>
				<p>Total Profit</p>
			</div>
			<div class="media-right">
				<div class="teaser_icon size_small">
					<i class="fa fa-line-chart"></i>
				</div>
			</div>
		</div>
	</div>
	<!-- .col-* -->
</div>
<!-- .row -->
<div class="row">
	<!-- Yearly Visitors -->
	<div class="col-xs-12 col-md-6">
		<div class="with_background with_padding">
			<canvas class="canvas-chart-line-yearly-visitors"></canvas>
		</div>
	</div>
	<!-- .col-* -->
	<!-- Monthly Visitors -->
	<div class="col-xs-12 col-md-6">
		<div class="with_background with_padding">
			<canvas class="canvas-chart-line-monthly-visitors"></canvas>
		</div>
	</div>
	<!-- .col-* -->
</div>
<!-- .row -->
<div class="row">
	<div class="col-xs-12 col-md-6">
		<div class="with_background with_padding">
			<h4>
				Latest Comments
			</h4>
			<div class="admin-scroll-panel scrollbar-macosx">
				<ul class="list1 no-bullets">
					<li class="item-editable">
						<div class="media">
							<div class="item-edit-controls darklinks">
								<a href="#">
									<i class="fa fa-share-square-o"></i>
								</a>
								<a href="#">
									<i class="fa fa-edit"></i>
								</a>
								<a href="#">
									<i class="fa fa-trash-o"></i>
								</a>
							</div>
							<div class="media-left">
								<img src="images/team/01.jpg" alt="...">
							</div>
							<div class="media-body">
								<h5>
									Alex Walker
									<small>2 hours ago</small>
								</h5>
								<div>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
								</div>
							</div>
						</div>
					</li>
					<li class="item-editable">
						<div class="media">
							<div class="item-edit-controls darklinks">
								<a href="#">
									<i class="fa fa-share-square-o"></i>
								</a>
								<a href="#">
									<i class="fa fa-edit"></i>
								</a>
								<a href="#">
									<i class="fa fa-trash-o"></i>
								</a>
							</div>
							<div class="media-left">
								<img src="images/team/02.jpg" alt="...">
							</div>
							<div class="media-body">
								<h5>
									Janet C. Donnalds
									<small>5 hours ago</small>
								</h5>
								<div>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.
								</div>
							</div>
						</div>
					</li>
					<li class="item-editable">
						<div class="media">
							<div class="item-edit-controls darklinks">
								<a href="#">
									<i class="fa fa-share-square-o"></i>
								</a>
								<a href="#">
									<i class="fa fa-edit"></i>
								</a>
								<a href="#">
									<i class="fa fa-trash-o"></i>
								</a>
							</div>
							<div class="media-left">
								<img src="images/team/03.jpg" alt="...">
							</div>
							<div class="media-body">
								<h5>
									Victoria Grow
									<small>1 day ago</small>
								</h5>
								<div>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<!-- .admin-scroll-panel -->
			<div class="text-right greylinks panel-view-all">
				<a href="admin_comments.html">View All</a>
			</div>
		</div>
		<!-- .with_background -->
	</div>
	<div class="col-xs-12 col-md-6">
		<div class="with_background with_padding">
			<h4>
				Latest Orders
			</h4>
			<div class="admin-scroll-panel scrollbar-macosx">
				<ul class="list1 no-bullets">
					<li class="item-editable small-teaser">
						<div class="media">
							<div class="item-edit-controls darklinks">
								<a href="#">
									<i class="fa fa-share-square-o"></i>
								</a>
								<a href="#">
									<i class="fa fa-edit"></i>
								</a>
								<a href="#">
									<i class="fa fa-trash-o"></i>
								</a>
							</div>
							<div class="media-left">
								<div class="teaser_icon label-success fontsize_16">
									<i class="fa fa-shopping-cart"></i>
								</div>
							</div>
							<div class="media-body">
								<h5>
									Product Name
									<small>365$</small>
								</h5>
								<div>
									<h6>Order Comment:</h6>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
								</div>
							</div>
						</div>
					</li>
					<li class="item-editable small-teaser">
						<div class="media">
							<div class="item-edit-controls darklinks">
								<a href="#">
									<i class="fa fa-share-square-o"></i>
								</a>
								<a href="#">
									<i class="fa fa-edit"></i>
								</a>
								<a href="#">
									<i class="fa fa-trash-o"></i>
								</a>
							</div>
							<div class="media-left">
								<div class="teaser_icon label-success fontsize_16">
									<i class="fa fa-shopping-cart"></i>
								</div>
							</div>
							<div class="media-body">
								<h5>
									6 Products
									<small>129$</small>
								</h5>
							</div>
						</div>
					</li>
					<li class="item-editable small-teaser">
						<div class="media">
							<div class="item-edit-controls darklinks">
								<a href="#">
									<i class="fa fa-share-square-o"></i>
								</a>
								<a href="#">
									<i class="fa fa-edit"></i>
								</a>
								<a href="#">
									<i class="fa fa-trash-o"></i>
								</a>
							</div>
							<div class="media-left">
								<div class="teaser_icon label-success fontsize_16">
									<i class="fa fa-shopping-cart"></i>
								</div>
							</div>
							<div class="media-body">
								<h5>
									Product Name Secont
									<small>199$</small>
								</h5>
								<div>
									<h6>Order Comment:</h6>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<!-- .admin-scroll-panel -->
			<div class="text-right greylinks panel-view-all">
				<a href="admin_orders.html">View All</a>
			</div>
		</div>
		<!-- .with_background -->
	</div>
	<!-- .col-* -->
	<div class="col-xs-12 col-md-6">
		<div class="with_background with_padding">
			<h4>
				DataBase Statistics
			</h4>
			<div class="admin-scroll-panel scrollbar-macosx">

				<ul class="list1 no-bullets">
					<li>
						<div class="media small-teaser">
							<div class="media-left">
								<i class="fa fa-users highlight"></i>
							</div>
							<div class="media-body">
								<strong class="grey">
									25364
								</strong>
								Total Users
							</div>
						</div>
					</li>
					<li>
						<div class="media small-teaser">
							<div class="media-left">
								<i class="fa fa-comment highlight"></i>
							</div>
							<div class="media-body">
								<strong class="grey">
									12520
								</strong>
								Reviews
							</div>
						</div>
					</li>
					<li>
						<div class="media small-teaser">
							<div class="media-left">
								<i class="fa fa-shopping-cart highlight"></i>
							</div>
							<div class="media-body">
								<strong class="grey">
									5674
								</strong>
								Total Products
							</div>
						</div>
					</li>
					<li>
						<div class="media small-teaser">
							<div class="media-left">
								<i class="fa fa-money highlight"></i>
							</div>
							<div class="media-body">
								<strong class="grey">
									$132200
								</strong>
								Total Sales
							</div>
						</div>
					</li>
				</ul>
			</div>
			<!-- .admin-scroll-panel -->
		</div>
		<!-- .with_background -->
	</div>
	<!-- .col-* -->
	<div class="col-xs-12 col-md-6">
		<div class="with_background with_padding">
			<h4>
				Last Notes
			</h4>
			<div class="admin-scroll-panel scrollbar-macosx">

				<ul class="list1 no-bullets">
					<li>
						<div class="media small-teaser">
							<div class="media-left">
								<div class="teaser_icon label-success round">
									<i class="fa fa-shopping-cart"></i>
								</div>
							</div>
							<div class="media-body">
								<span class="grey">
									New order
								</span>
								<small class="pull-right">2 minutes ago</small>
							</div>
						</div>
					</li>
					<li>
						<div class="media small-teaser">
							<div class="media-left">
								<div class="teaser_icon label-success round">
									<i class="fa fa-user"></i>
								</div>
							</div>
							<div class="media-body">
								<span class="grey">
									New user registered
								</span>
								<small class="pull-right">3 minutes ago</small>
							</div>
						</div>
					</li>
					<li>
						<div class="media small-teaser">
							<div class="media-left">
								<div class="teaser_icon label-danger round">
									<i class="fa fa-bolt"></i>
								</div>
							</div>
							<div class="media-body">
								<span class="grey">
									Server overloaded
								</span>
								<small class="pull-right">5 minutes ago</small>
							</div>
						</div>
					</li>
					<li>
						<div class="media small-teaser">
							<div class="media-left">
								<div class="teaser_icon label-warning round">
									<i class="fa fa-bell-o"></i>
								</div>
							</div>
							<div class="media-body">
								<span class="grey">
									Long database query
								</span>
								<small class="pull-right">5 minutes ago</small>
							</div>
						</div>
					</li>
					<li>
						<div class="media small-teaser">
							<div class="media-left">
								<div class="teaser_icon label-success round">
									<i class="fa fa-user"></i>
								</div>
							</div>
							<div class="media-body">
								<span class="grey">
									New user registered
								</span>
								<small class="pull-right">8 minutes ago</small>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<!-- .admin-scroll-panel -->
		</div>
		<!-- .with_background -->
	</div>
	<!-- .col-* -->
</div>
<!-- .row -->
@endsection