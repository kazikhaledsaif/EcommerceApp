<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">



        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"></li>
            <!-- Optionally, you can add icons to the links -->
            <li class=""><a href="{{ route('backend.dashboard') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa  fa-book"></i> <span>Product</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" {{ route('backend.product.list') }}">Product List</a></li>
                    <li><a href="{{ route('backend.product.add') }}">Add Product</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa  fa-bandcamp"></i> <span>Category</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" {{ route('backend.category.list') }}">Category List</a></li>
                    <li><a href="{{ route('backend.category.add') }}">Add Category</a></li>

                </ul>
            </li>
            <li class=""><a href="{{ route('backend.order.list') }}"><i class="fa fa-bank"></i> <span>Order's Report</span></a></li>

            <li class="treeview">
                <a href="#"><i class="fa  fa-buysellads"></i> <span>Featured Category</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" {{ route('backend.featuredcategories.list') }}">Featured Category List</a></li>
                    <li><a href="{{ route('backend.featuredcategories.add') }}">Add Featured Category</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa  fa-camera-retro"></i> <span>Slider</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" {{ route('backend.slider.list') }}">Slider List</a></li>
                    <li><a href="{{ route('backend.slider.add') }}">Add Slider</a></li>

                </ul>
            </li>
            <li class=""><a href="{{ route('backend.report.index') }}"><i class="fa fa-cc-mastercard"></i> <span>Sales Report</span></a></li>
            <li class=""><a href="{{ route('backend.coupon.list') }}"><i class="fa fa-barcode"></i> <span>Coupon</span></a></li>
            <li class=""><a href="{{ route('backend.reviews.list') }}"><i class="fa fa-star-o"></i> <span>Product Reviews</span></a></li>

            <li class=""><a href="{{ route('backend.user.list') }}"><i class="fa fa-android"></i> <span>User</span></a></li>
            <li class=""><a href="{{ route('backend.feedback.list') }}"><i class="fa fa-database"></i> <span>Feedback</span></a></li>
            <li class=""><a href="{{ route('backend.newsletter.index') }}"><i class="fa fa-newspaper-o"></i> <span>Newsletter</span></a></li>


        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>