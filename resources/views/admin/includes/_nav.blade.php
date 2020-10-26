<aside class="left-sidebar">
	<!-- Sidebar scroll-->
	<div class="scroll-sidebar">
		<!-- Sidebar navigation-->
		<nav class="sidebar-nav">
			<ul id="sidebarnav">
				<li class="sidebar-item">
					<a class="sidebar-link waves-effect waves-dark" href="{{route('admin.home')}}"
						 aria-expanded="false">
						<span class="hide-menu">Dashboard </span>
					</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link waves-effect waves-dark" href="{{route('admin.appointment')}}"
						 aria-expanded="false">
						<i data-feather="mail" class="mr-2"></i>
						<span class="hide-menu">Appointments</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
						 aria-expanded="false">
						<i data-feather="align-justify" class="mr-2"></i>
						<span class="hide-menu">Services</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="{{ route('admin.services') }}" class="sidebar-link">
								<i data-feather="droplet" class="mr-2"></i>
								<span class="hide-menu"> All  </span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="{{ route('admin.service.create') }}" class="sidebar-link">
								<i data-feather="droplet" class="mr-2"></i>
								<span class="hide-menu"> Create </span>
							</a>
						</li>
					</ul>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
						 aria-expanded="false">
						<i data-feather="align-justify" class="mr-2"></i>
						<span class="hide-menu">Articles</span>
					</a>
					<ul aria-expanded="false" class="collapse  first-level">
						<li class="sidebar-item">
							<a href="{{ route('admin.articles') }}" class="sidebar-link">
								<i data-feather="droplet" class="mr-2"></i>
								<span class="hide-menu"> All  </span>
							</a>
						</li>
						<li class="sidebar-item">
							<a href="{{ route('admin.article.create') }}" class="sidebar-link">
								<i data-feather="droplet" class="mr-2"></i>
								<span class="hide-menu"> Create </span>
							</a>
						</li>
					</ul>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link waves-effect waves-dark" href="{{route('admin.gallery')}}"
						 aria-expanded="false">
						<i data-feather="camera" class="mr-2"></i>
						<span class="hide-menu">Gallery</span>
					</a>
				</li>
				<li onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="sidebar-item">
					<a class="sidebar-link waves-effect waves-dark" aria-expanded="false" href="#">
						<i data-feather="log-out" class="mr-2"></i>
						<span class="hide-menu">Logout</span>
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">{{ csrf_field() }}</form>
				</li>
			</ul>
		</nav>
		<!-- End Sidebar navigation -->
	</div>

</aside>