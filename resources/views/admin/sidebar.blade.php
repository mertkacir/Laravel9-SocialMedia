<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('assets')}}/admin/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle  border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Mert Kacır</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/admin" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Home</a>

                    <a href="/admin/category" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Category</a>
                    <a href="{{route('admin.faq.index')}}" class="nav-item nav-link"><ion-icon size="large" name="help-circle-outline" style="vertical-align: middle;"></ion-icon></i> FAQ</a>
                    <a href="{{route('admin.message.index')}}" class="nav-item nav-link"><ion-icon size="large" name="mail-outline" style="vertical-align: middle;"></ion-icon></i> Messages</a>
                    <a href="/admin/user" class="nav-item nav-link"><ion-icon size="large" name="people-outline" style="vertical-align: middle;"></ion-icon></i> Users</a>
                    <a href="/admin/social" class="nav-item nav-link"><ion-icon size="large" name="share-social-outline" style="vertical-align: middle;"></ion-icon></i> Social</a>
                    <a href="/admin/friend/0" class="nav-item nav-link"><ion-icon size="large" name="person-add-outline" style="vertical-align: middle;"></ion-icon> Friends</a>
                    <a href="/admin/setting" class="nav-item nav-link"><ion-icon size="large" name="settings-outline" style="vertical-align: middle;"></ion-icon> Settings</a>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
