<?php
session_start();
if (!isset($_SESSION['Uname'], $_SESSION['Upass'])) {
    header("Location:login.php");
    exit();
}
?>


<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

           

            <!-- Heading -->
            <div class="sidebar-heading">
                Products
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Products</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Maintain Products</h6>
                        <a class="collapse-item" href="maintainproduct.php">Maintain Products</a>
                        <a class="collapse-item" href="viewProduct.php">View Products</a>
                      
                        <div class="collapse-divider"></div>
                      
                    </div>
                </div>
            </li>

           <!-- Heading -->
           <div class="sidebar-heading">
                Categories
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categories"
                    aria-expanded="true" aria-controls="categories">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Category</span>
                </a>
                <div id="categories" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Category</h6>
                        <a class="collapse-item" href="maintaincategory.php">Maintain Category</a>
                        <a class="collapse-item" href="viewcategory.php">View Category</a>
                      
                        <div class="collapse-divider"></div>
                      
                    </div>
                </div>
            </li>
            <div class="sidebar-heading">
                Roles
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#roles"
                    aria-expanded="true" aria-controls="roles">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Roles</span>
                </a>
                <div id="roles" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Role</h6>
                        <a class="collapse-item" href="maintainrole.php">Maintain Role</a>
                        <a class="collapse-item" href="viewrole.php">View Roles</a>
                      
                        <div class="collapse-divider"></div>
                      
                    </div>
                </div>
            </li>
        <!-- Nav Item - Charts -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Logout</span></a>
            </li> -->
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>Are you sure ?</strong><br>You want to logout</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Logout</a>
            </div>

        </ul>