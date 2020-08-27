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
					<a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
						 aria-expanded="false">
						<i data-feather="mail" class="mr-2"></i>
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
						<i data-feather="mail" class="mr-2"></i>
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
			</ul>
		</nav>
		<!-- End Sidebar navigation -->
	</div>
	<!-- End Sidebar scroll-->
</aside>