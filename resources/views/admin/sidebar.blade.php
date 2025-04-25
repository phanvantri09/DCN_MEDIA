<nav
	class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" role="button">
				<i class="fas fa-bars"></i>
			</a>
		</li>
	</ul>

	<!-- Right navbar links -->
	<ul
		class="navbar-nav ml-auto">
		<!-- Notifications Dropdown Menu -->
		<li class="nav-item dropdown">
			<div class="info w-100">
				<a href="{{ route('logout') }}" class="w-100 btn btn-danger">
					<i class="fas fa-sign-out-alt"></i>
					Đăng
					                    xuất</a>
			</div>
		</li>
	</ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside
	class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link d-flex flex-column">
		<img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image  elevation-3" style="opacity: .8">
	</a>

	<!-- Sidebar -->
	<div
		class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a class="d-block">{{ Auth::user()->email ?? null }}</a>
			</div>
		</div>

		<!-- SidebarSearch Form -->
		<div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

				<li class="nav-item menu-open">

					<ul class="nav nav-treeview">
						<li class="nav-item bg-orange ">
							<a href="{{ route('index') }}" class="nav-link" target="_blank">
								<i class="fas fa-home"></i>
								<p>Trang người dùng</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('index') }}" class="nav-link active" target="_blank">
								<i class="fas fa-tachometer-alt"></i>
								<p>Tổng quang</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('index') }}" class="nav-link active" target="_blank">
								<i class="fas fa-tachometer-alt"></i>
								<p>Link liên hệ</p>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Người dùng
									<i class="fas fa-angle-left right"></i>
									<span class="badge badge-info right"></span>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="{{ route('blog.list') }}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Danh sách</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('blog.add') }}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Thêm</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Blogs
									<i class="fas fa-angle-left right"></i>
									<span class="badge badge-info right"></span>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="{{ route('blog.list') }}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Danh sách</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('blog.add') }}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Thêm</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Loại Sản Phẩm
									<i class="fas fa-angle-left right"></i>
									<span class="badge badge-info right"></span>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="{{ route('category.list') }}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Danh sách</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('category.add') }}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Thêm</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Sản Phẩm
									<i class="fas fa-angle-left right"></i>
									<span class="badge badge-info right"></span>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="{{ route('product.list') }}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Danh sách</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('product.add') }}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Thêm</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Cài đặt ảnh theo page
									<i class="fas fa-angle-left right"></i>
									<span class="badge badge-info right"></span>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="{{ route('banner.list') }}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Danh sách</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('banner.add') }}" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Thêm</p>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>


			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>

