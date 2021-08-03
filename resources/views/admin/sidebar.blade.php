		
	<nav class="main-menu menu-vertical-js menu-dark toggler-hide">
		<div class="top-bar">
			<div class="menu-toggler-small mtt-2"><i class="toggler-small-icon  mdi mdi-arrow-left-bold "></i></div>
		</div>
		<div id="mmScroll" class="scroller">
			<div class="sidemenu-header">
				<img src="" alt="">
			</div>						
			<ul id="mainMenu" class="menubar treeview ">
				<li class="user-menu">
					<a class="sidemenu-username media" href="#">
						<div class="media-left">
							<img class="avatar circle" src="https://cdn.pixabay.com/photo/2019/08/11/18/59/icon-4399701_960_720.png" alt="">
						</div>
						<div class="media-body">
							<h5>Melissa Milano</h5>
							<span class="media-subhead">melissa@gmail.com</span>
						</div>			            
			        </a>
		            <ul id="settings-dropdown" class="sidemenu-dropdown">
		            	<li>
							<a class="menu-dropdown" href="#">
								<span class="text">Email</span>
							</a>
							<ul class="submenu lvl-1">
								<li class="submenu-item">
									<a href="inbox.html" class="submenu-target"><i class="icon mdi mdi-email"></i>Inbox</a>
								</li>
							</ul>
						</li>		
		                <li>
		                    <a href="#:;">Profile</a>
		                </li>
		                <li>
		                    <a href="#:;">Settings</a>
		                </li>			                
		                <li class="divider"></li>
		                <li>
		                    <a href="{{url('admin/logout')}}">Logout</a>
		                </li>
		            </ul>
		        </li>

				<li class="menubar-item">
					<a class="menu-dropdown" href="{{url('admin/dashboard')}}">
						<i class="icon mdi mdi-speedometer"></i>
						<span class="text">Dashboards</span>
					</a>
				</li>
				<li class="menubar-item">
					<a class="menu-dropdown" href="{{url('admin/category')}}">
						<i class="icon mdi mdi-format-list-bulleted-type"></i>
						<span class="text">Food Category</span>
					</a>
				</li>
				<li class="menubar-item">
					<a class="menu-dropdown" href="{{url('admin/foods')}}">
						<i class="icon mdi mdi-food-fork-drink"></i>
						<span class="text">Foods</span>
					</a>
				</li>
				<li class="menubar-item">
					<a class="menu-dropdown" href="{{url('admin/setting')}}">
						<i class="icon mdi mdi-settings"></i>
						<span class="text">Setting</span>
					</a>
				</li>				

				<li class="menubar-item">
					<a class="menu-dropdown" href="{{url('admin/form-elements')}}">
						<i class="icon mdi mdi-google-pages"></i>
						<span class="text">FormElement</span>
					</a>
				</li>
				<li class="menubar-item">
					<a class="menu-dropdown" href="#">
						<i class="icon mdi mdi-menu"></i>
						<span class="text">Menu Levels</span>
					</a>
					<ul class="submenu lvl-1">
						<li class="submenu-item"><a href="#" class="submenu-target" >Menu level 1</a></li>
						<li class="submenu-item"><a href="#" class="submenu-target" >Menu level 1</a></li>
						<li class="submenu-item"><a href="#" class="menu-dropdown" >Menu level 1</a>
							<ul class="submenu lvl-2">
								<li class="submenu-item"><a href="#" class="menu-dropdown" >Level 2</a>
									<ul class="submenu lvl-3">
										<li class="submenu-item"><a href="#" class="submenu-target" >Level 3</a>
										</li>
										<li class="submenu-item"><a href="#" class="menu-dropdown" >Level 3</a>
											<ul class="submenu lvl-4">
												<li class="submenu-item"><a href="#" class="submenu-target" >Level 4</a>
												</li>
												<li class="submenu-item"><a href="#" class="menu-dropdown" >Level 4</a>
													<ul class="submenu lvl-5">
														<li class="submenu-item"><a href="#" class="menu-dropdown" >Level 5</a>
														<ul class="submenu lvl-6">
															<li class="submenu-item"><a href="#" class="submenu-target" >Level 6</a>
															</li>
															<li class="submenu-item"><a href="#" class="submenu-target" >Level 6</a></li>
														</ul>
														</li>
														<li class="submenu-item"><a href="#" class="submenu-target" >Level 5</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="submenu-item"><a href="#" class="submenu-target" >Level 2</a></li>
							</ul>
						</li>				
					</ul>
				</li>														
			</ul>
		</div>	
	</nav>
	<div class="menu-toggler-hide pos-left"><i class="toggler-hide-icon mdi mdi-menu"></i></div>