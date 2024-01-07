<header id="header" class="header header-1 header_tran">

	<div class="nav-wrap">
		<div class="reletiv_box">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="logo">
							<h2 style="margin-top: 1em;">TUKONEKT</h2>
							<!-- <a href="javascript:avoid(0);"><img src="assets/images/logo2.png" alt=""></a> -->
						</div>
						<!-- Phone Menu button -->
						<button id="menu" class="menu hidden-md-up"></button>
					</div>
					<div class="col-md-9 nav-bg">
						<nav class="navigation">
							<ul>
								<li><a href="{{ route('home')}}">Home</a></li>
								@if(!$forms->isEmpty())
									@foreach($forms as $form)
										@if($form->selected)
											<li><a href="{{ URL('read-form-builder', $form) }}">Register</a></li>
										@endif
									@endforeach
								@else
									<li><a href="{{ route('home')}}">Home</a></li>
								@endif
								
							</ul>
						</nav>

					</div>
				</div>
			</div>
		</div>
	</div>
</header>