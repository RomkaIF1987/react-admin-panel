<!-- Start Header Section -->
<header class="main_menu_sec navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="lft_hd">
                    <a href="index.html"><img src="img/jewelry.png" alt=""/></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="rgt_hd">
                    <div class="main_menu">
                        <nav id="nav_menu">
                            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div id="navbar">
                                <ul>
                                    @foreach($header_navs as $header_nav)
                                        @if(!$header_nav->is_dropdown)
                                            <li>
                                                <a class="page-scroll" href="{{$header_nav->link_url}}">{{$header_nav->name}}@if(count($header_nav->sub_items))<i class="fa fa-angle-down"></i>@endif</a>
                                                @if($header_nav->sub_items)
                                                    @foreach($header_nav->sub_items as $child_header_nav)
                                                        <ul>
                                                            <li><a class="page-scroll" href="{{$child_header_nav->link_url}}">{{$child_header_nav->name}}</a></li>
                                                        </ul>
                                                    @endforeach
                                                @endif
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Section -->
