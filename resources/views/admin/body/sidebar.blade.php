<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="{{url('admin/dashboard')}}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{ asset('admin/images/logo-dark.png') }}" alt="">
						  <h3><b></b> Admin</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li>
          <a href="{{url('admin/dashboard')}}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview">
          <a href="#">
            <i data-feather="wind"></i>
            <span>Brand</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all.brands') }}"><i class="ti-more"></i>All Brands</a></li>
            
          </ul>
        </li> 
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="trello"></i> <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all.category') }}"><i class="ti-more"></i>All Category</a></li>
            <li><a href="{{ route('all.subcategory') }}"><i class="ti-more"></i>All Sub Category</a></li>
            <li><a href="{{ route('all.sub_subcategory') }}"><i class="ti-more"></i>All Sub Sub->Category</a></li>
           
          </ul>
        </li>
		
        <li class="treeview">
          <a href="#">
            <i data-feather="shopping-cart"></i>
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('add.product') }}"><i class="ti-more"></i>Add Products</a></li>
            <li><a href="{{ route('all.product') }}"><i class="ti-more"></i>Manage Products</a></li>
          </ul>
        </li> 		

        <li class="treeview">
          <a href="#">
            <i data-feather="life-buoy"></i>
            <span>Coupons</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('manage-coupon') }}"><i class="ti-more"></i>Manage Coupon</a></li>
           
          </ul>
        </li> 



        <li class="treeview">
          <a href="#">
            <i data-feather="map"></i>
            <span>Shipping Area</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('manage-division') }}"><i class="ti-more"></i>  Ship Division </a></li>
            <li><a href="{{ route('manage-district') }}"><i class="ti-more"></i> Ship District  </a></li>
            <li><a href="{{ route('manage-state') }}"><i class="ti-more"></i> Ship State  </a></li>
           
          </ul>
        </li> 





     <li class="treeview">
          <a href="#">
            <i data-feather="shopping-bag"></i>
            <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('pending-orders') }}"><i class="ti-more"></i>Pending Orders </a></li>
            <li><a href="{{ route('confirmed-orders') }}"><i class="ti-more"></i>Confirmed Orders  </a></li>
            <li><a href="{{ route('processing-orders') }}"><i class="ti-more"></i>Processing Orders  </a></li>
            <li><a href="{{ route('picked-orders') }}"><i class="ti-more"></i>Picked Orders </a></li>
            <li><a href="{{ route('shipped-orders') }}"><i class="ti-more"></i> Shipped Orders </a></li>
            <li><a href="{{ route('delivered-orders') }}"><i class="ti-more"></i> Delivered Orders  </a></li>
            <li><a href=""><i class="ti-more"></i> Cancel Orders</a></li>
          </a></li>
           
          </ul>
        </li> 

        <li class="treeview">
          <a href="#">
            <i data-feather="info"></i>
            <span>Return Order</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('return.request') }}"><i class="ti-more"></i> Return Requests</a></li>
            <li><a href="{{ route('all.request') }}"><i class="ti-more"></i>All Request</a></li>


           
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i data-feather="package"></i>
            <span>Manage Stock</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('product.stock') }}"><i class="ti-more"></i> Product Stock</a></li>
    
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i data-feather="message-square"></i>
            <span>Manage Review</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('pending.review') }}"><i class="ti-more"></i>Pending Product Review</a></li>
            <li><a href="{{ route('publish.review') }}"><i class="ti-more"></i>Publish Product Review</a></li>


           
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i data-feather="slack"></i>
            <span>Mega Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('add.menu') }}"><i class="ti-more"></i>Add Menu</a></li>
            <li><a href="{{ route('manage.menu') }}"><i class="ti-more"></i>Manage Menu</a></li>


           
          </ul>
        </li>


        <li class="treeview">
          <a href="">
            <i data-feather="radio"></i>
            <span>Show by category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('show.category') }}"><i class="ti-more"></i>Show Category</a></li>
            <li><a href="{{ route('manage.show.category') }}"><i class="ti-more"></i>Manage Show Category</a></li>


           
          </ul>
        </li>

        <li class="treeview">
          <a href="">
            <i data-feather="layers"></i>
            <span>Show by Brand</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('show.brand') }}"><i class="ti-more"></i>Show Brand</a></li>
            <li><a href="{{ route('manage.show.brand') }}"><i class="ti-more"></i>Manage Show Brand</a></li>


           
          </ul>
        </li>


        <li class="treeview">
          <a href="">
            <i data-feather="sliders"></i>
            <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('manage-slider') }}"><i class="ti-more"></i>Manage Slider</a></li>
           
          </ul>
        </li>



        <li class="treeview">
          <a href="">
            <i data-feather="paperclip"></i>
            <span>All Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all-reports') }}"><i class="ti-more"></i> All Reports </a></li>

           
          </ul>
        </li> 


        <li class="treeview">
          <a href="#">
            <i data-feather="printer"></i>
            <span>Manage Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('blog.category') }}"><i class="ti-more"></i> Blog Category</a></li>
            <li><a href="{{ route('add.post') }}"><i class="ti-more"></i>Add Blog Post</a></li>
            <li><a href="{{ route('list.post') }}"><i class="ti-more"></i>List Blog Post</a></li>

           
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i data-feather="users"></i>
            <span>All Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('all-users') }}"><i class="ti-more"></i> All Users</a></li>
         

           
          </ul>
        </li>





		 
        <li class="header nav-small-cap">Setting</li>
		  
     
	
		  
		<li class="treeview">
          <a href="#">
            <i data-feather="settings"></i>
			<span>Site Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('header_site.setting') }}"><i class="ti-more"></i>Header Section</a></li>
			<li><a href="{{ route('footer_site.setting') }}"><i class="ti-more"></i>Footer Section</a></li>
          </ul>
        </li> 		 
        
        <li class="treeview">
          <a href="#">
            <i data-feather="credit-card"></i>
			<span>Seo Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('seo.setting') }}"><i class="ti-more"></i>Seo Setting</a></li>
          </ul>
        </li> 
		  
	
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="{{ route('admin.logout') }}" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
