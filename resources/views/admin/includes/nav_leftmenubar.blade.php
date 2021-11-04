<li class="nav-item active">
    <a class="nav-link" href="{{  url('/dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>
{{--
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
        aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Catagory Info</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{{url('/category/add')}}">Add Catagory</a>
            <a class="collapse-item" href="{{url('/product/manage')}}">Manage Catagory</a>
        </div>
    </div>
</li>




<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"  >
        <i class="fas fa-fw fa-cog"></i>
        <span>Manufacturer  Info</span>
    </a>
    <div id="collapseTwo" class="collapse"  data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{{url('/manufacturer/add')}}">Add Manufacturer</a>
            <a class="collapse-item" href="{{url('/manufacturer/manage')}}">Manage Manufacturer</a>
        </div>
    </div>
</li>





<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
        aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Product Info</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{{url('/product/add')}}">Add Product</a>
            <a class="collapse-item" href="{{url('/product/manage')}}">Manage Product</a>
        </div>
    </div>
</li>

 --}}



<!--Accordion wrapper-->
<div >
    <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">

    <!-- Accordion card -->
    <div class="card">
        <!-- Card header -->
        <div class="card-header" role="tab" id="headingTwo1">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo1"
            aria-expanded="false" aria-controls="collapseTwo1">
            <h5 class="mb-0">Catagory <i class="fas fa-angle-down rotate-icon"></i></h5>
        </a>
        </div>
        <!-- Card body -->
        <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1"
        data-parent="#accordionEx1">
        <div class="card-body">
        <div><a class="collapse-item"  href="{{url('/category/add')}}">Add Catagory</a></div>
        <div><a class="collapse-item" href="{{url('/product/manage')}}">Manage Catagory</a></div>
        </div>
        </div>
    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">
        <!-- Card header -->
        <div class="card-header" role="tab" id="headingTwo2">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo21"
            aria-expanded="false" aria-controls="collapseTwo21">
            <h5 class="mb-0">Manufacturer <i class="fas fa-angle-down rotate-icon"></i></h5>
        </a>
        </div>
        <!-- Card body -->
        <div id="collapseTwo21" class="collapse" role="tabpanel" aria-labelledby="headingTwo21"
        data-parent="#accordionEx1">
        <div class="card-body">
            <div><a class="collapse-item" href="{{url('/manufacturer/add')}}">Add Manufacturer</a></div>
            <div><a class="collapse-item" href="{{url('/manufacturer/manage')}}">Manage Manufacturer</a></div>
        </div>
        </div>
    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">
        <!-- Card header -->
        <div class="card-header" role="tab" id="headingThree31">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree31"
            aria-expanded="false" aria-controls="collapseThree31">
            <h5 class="mb-0">Product <i class="fas fa-angle-down rotate-icon"></i></h5>
        </a>
        </div>
        <!-- Card body -->
        <div id="collapseThree31" class="collapse" role="tabpanel" aria-labelledby="headingThree31"
        data-parent="#accordionEx1">
        <div class="card-body">
           <div> <a class="collapse-item" href="{{url('/product/add')}}">Add Product</a></div>
           <div><a class="collapse-item" href="{{url('/product/manage')}}">Manage Product</a></div>
        </div>
        </div>
    </div>
    <!-- Accordion card -->
</div>
<!-- Accordion wrapper -->




<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true"
        aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Utilities</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
        aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
        </div>
    </div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
</li>
