<div class="topbar stick">
    <div class="logo">
        <a title="" href="newsfeed.html"><img src="images/logo.png" alt=""></a>
    </div>

    <div class="top-area">
        <ul class="main-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('references') }}">References</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
            <li>
                <a class="nav-link" href="{{ route('post.create') }}">Create Post</a>
                <ul>
                    <li><a href="/posts">Show Posts</a>
                </ul>
            </li>


                @if (!Auth::user())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    Friend Request <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    @foreach (optional(Auth::user())->friends1 as $friend1)
                        <li>

                            <div style="mb-3">

                                <div>
                                    <a href="#" class="btn btn-primary rounded-pill m-1">Accept</a>
                                    <a href="#" class="btn btn-danger rounded-pill m-1">Cancel</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    @if (Auth::user()->friends1->where('approved', '=', false)->count() == 0)
                        You Don't have any Friend Request
                    @endif
                </ul>
                @endif
            </li>
            <li>
                @auth
                    <a href="#" title="">{{ Auth::user()->name }}</a>
                    <ul>
                        <a href="/logoutuser">log out</a>
                        <li><a href="/users" title="">Users</a></li>
                        <li><a href="/userpanel" title="">Edit Profile</a></li>
                    </ul>
                @endauth
            </li>



        </ul>

        <div class="user-img">
            <img src="{{ asset('assets') }}/images/resources/admin.jpg" alt="">
            <span class="status f-online"></span>
            <div class="user-setting">
                <a href="#" title=""><span class="status f-online"></span>online</a>
                <a href="#" title=""><span class="status f-away"></span>away</a>
                <a href="#" title=""><span class="status f-off"></span>offline</a>
                <a href="#" title=""><i class="ti-user"></i> view profile</a>
                <a href="{{ route('userpanel.index') }}" title=""><i class="ti-pencil-alt"></i>edit profile</a>
                <a href="#" title=""><i class="ti-target"></i>activity log</a>
                <a href="#" title=""><i class="ti-settings"></i>account setting</a>
                <a href="{{ route('faq') }}">log out</a>
            </div>
        </div>

    </div>
</div><!-- topbar -->
