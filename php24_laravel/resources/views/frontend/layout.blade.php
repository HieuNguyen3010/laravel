<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
	<!-- wrapper -->
	<div id="wrapper">
		<!-- header -->
		<header>
			<div class="logo">
				<a href="">New Magazine</a>
			</div>
			<div class="menu">
				<ul>
                    <li><a href="">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul> 
			</div>
			<div class="border_bottom"></div>
			<div class="clear"></div>
		</header>
		<!-- end header -->
		<!-- start slider -->
        <div class="cn_wrapper">
        	<!-- cn_preview -->
            <div id="cn_preview" class="cn_preview">
               <!-- first hot news -->
                <div class="cn_content" style="background: url('{{ asset('frontend/img/ip6.jpg') }}') no-repeat center #ffffff; background-size:715px 355px;">
                    <div class="caption">
                        <h3><a href="">Sony trình diễn loạt thiết bị công nghệ mới tại Sony Show 2016</a></h3>
                        <p>
                        	(Dân trí) - Triển lãm Sony Show 2017 đã chính thức mở cửa đón khách vào sáng nay 15/9 tại TPHCM. Tại đây, thương hiệu đến từ Nhật Bản đã trình diễn hàng lọat thiết bị mới vừa được ra mắt trên toàn cầu dành cho người tiêu dùng trong nước.
                        </p>
                        <div class="date">
                            <h3>Hot<br><span>News</span></h3>
                        </div>
                    </div>
                </div>
                <!-- end first hot news -->            
            </div>
            <!-- end cn_preview -->
            <!-- cn_list -->
            <div id="cn_list" class="cn_list">
                <div class="cn_page" style="display:block;">
                    <!-- list hot news -->
                    <div class="cn_item">
                        <div class="left-box">
                            <img src="{{ asset('frontend/img/ip6.jpg') }}" alt="">
                        </div>
                        <div class="right-box">
                            <h4>Sony trình diễn loạt thiết bị công nghệ mới tại Sony Show 2016</h4>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- end list hot news -->
                    <!-- list hot news -->
                    <div class="cn_item">
                        <div class="left-box">
                            <img src="{{ asset('frontend/img/ip6.jpg') }}" alt="">
                        </div>
                        <div class="right-box">
                            <h4>Sony trình diễn loạt thiết bị công nghệ mới tại Sony Show 2016</h4>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- end list hot news -->
                    <!-- list hot news -->
                    <div class="cn_item">
                        <div class="left-box">
                            <img src="{{ asset('frontend/img/ip6.jpg') }}" alt="">
                        </div>
                        <div class="right-box">
                            <h4>Sony trình diễn loạt thiết bị công nghệ mới tại Sony Show 2016</h4>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- end list hot news -->
                </div>                      
            </div>
            <!-- end cn_list -->
        </div>
        <!-- end slider -->

        <!-- start div #main -->
	    <div id="main">
            <div class="main-content">
                <div class="left-container">
                <!-- ========================================= -->
                    <!-- @yield('controller') -->
                    <!-- list category tin tuc -->
                    <div class="row-fluid">
                        <div class="marked-title">
                            <h3><a href="" style="color:white">Tin nhân ái</a></h3>
                        </div>
                    </div>                    
                    <div class="row-fluid">
                        <div class="span2">
                           <!-- first news -->
                            <article>
                                <div class="post-thumb">
                                    <a href=""><img src="{{ asset('frontend/img/ip6.jpg') }}" alt=""></a>
                                </div>
                                <div class="cat-post-desc">
                                    <h3><a href="">Sony trình diễn loạt thiết bị công nghệ mới tại Sony Show 2016</a></h3>
                                    <p>
                                    	"(Dân trí) - Triển lãm Sony Show 2017 đã chính thức mở cửa đón khách vào sáng nay 15/9 tại TPHCM. Tại đây, thương hiệu đến từ Nhật Bản đã trình diễn hàng lọat thiết bị mới vừa được ra mắt trên toàn cầu dành cho người tiêu dùng trong nước."
                                    </p>
                                </div>
                            </article>
                            <!-- end first news -->
                        </div>
                        <div class="span2">
                           <!-- list news -->
                            <article class="twoboxes">
								<div class="right-desc">
								    <h3><a href=""><img src="{{ asset('frontend/img/ip6.jpg') }}" alt=""></a><a href="">
								    	Thay vì mua iPhone X, 50 triệu đồng có thể mua được những gì?
								    </a>
								    </h3>  
								    <div class="clear"></div>    
								</div>
                                <div class="clear"></div>
                            </article>
                            <!-- end list news -->
                            <!-- list news -->
                            <article class="twoboxes">
								<div class="right-desc">
								    <h3><a href=""><img src="{{ asset('frontend/img/ip6.jpg') }}" alt=""></a><a href="">
								    	Thay vì mua iPhone X, 50 triệu đồng có thể mua được những gì?
								    </a>
								    </h3>  
								    <div class="clear"></div>    
								</div>
                                <div class="clear"></div>
                            </article>
                            <!-- end list news -->
                            <!-- list news -->
                            <article class="twoboxes">
								<div class="right-desc">
								    <h3><a href=""><img src="{{ asset('frontend/img/ip6.jpg') }}" alt=""></a><a href="">
								    	Thay vì mua iPhone X, 50 triệu đồng có thể mua được những gì?
								    </a>
								    </h3>  
								    <div class="clear"></div>    
								</div>
                                <div class="clear"></div>
                            </article>
                            <!-- end list news -->
                        </div>
                    </div>
                    <div class="clear"></div>
                    <!-- end list category tin tuc -->
                    <!-- list category tin tuc -->
                    <div class="row-fluid">
                        <div class="marked-title">
                            <h3><a href="" style="color:white">Tin giáo dục</a></h3>
                        </div>
                    </div>                    
                    <div class="row-fluid">
                        <div class="span2">
                           <!-- first news -->
                            <article>
                                <div class="post-thumb">
                                    <a href=""><img src="{{ asset('frontend/img/ip6.jpg') }}" alt=""></a>
                                </div>
                                <div class="cat-post-desc">
                                    <h3><a href="">Sony trình diễn loạt thiết bị công nghệ mới tại Sony Show 2016</a></h3>
                                    <p>
                                    	"(Dân trí) - Triển lãm Sony Show 2017 đã chính thức mở cửa đón khách vào sáng nay 15/9 tại TPHCM. Tại đây, thương hiệu đến từ Nhật Bản đã trình diễn hàng lọat thiết bị mới vừa được ra mắt trên toàn cầu dành cho người tiêu dùng trong nước."
                                    </p>
                                </div>
                            </article>
                            <!-- end first news -->
                        </div>
                        <div class="span2">
                           <!-- list news -->
                            <article class="twoboxes">
								<div class="right-desc">
								    <h3><a href=""><img src="{{ asset('frontend/img/ip6.jpg') }}" alt=""></a><a href="">
								    	Thay vì mua iPhone X, 50 triệu đồng có thể mua được những gì?
								    </a>
								    </h3>  
								    <div class="clear"></div>    
								</div>
                                <div class="clear"></div>
                            </article>
                            <!-- end list news -->
                            <!-- list news -->
                            <article class="twoboxes">
								<div class="right-desc">
								    <h3><a href=""><img src="{{ asset('frontend/img/ip6.jpg') }}" alt=""></a><a href="">
								    	Thay vì mua iPhone X, 50 triệu đồng có thể mua được những gì?
								    </a>
								    </h3>  
								    <div class="clear"></div>    
								</div>
                                <div class="clear"></div>
                            </article>
                            <!-- end list news -->
                            <!-- list news -->
                            <article class="twoboxes">
								<div class="right-desc">
								    <h3><a href=""><img src="{{ asset('frontend/img/ip6.jpg') }}" alt=""></a><a href="">
								    	Thay vì mua iPhone X, 50 triệu đồng có thể mua được những gì?
								    </a>
								    </h3>  
								    <div class="clear"></div>    
								</div>
                                <div class="clear"></div>
                            </article>
                            <!-- end list news -->
                        </div>
                    </div>
                    <div class="clear"></div>
                    <!-- end list category tin tuc -->
                 <!-- ========================================= -->   
                </div>
                <div class="right-container">
                    <div class="sidebar">
                       <div class="widget">
                            <div class="marked-title">
                                <h3>Danh mục tin tức</h3>
                            </div>
                            <ul class="tags">
                                <li><a class="photo" href="">Tin nhan ai</a></li>                
                                <li><a class="photo" href="">Tin giao duc</a></li>                
                                <li><a class="photo" href="">Tin the thao</a></li>                
                                <li><a class="photo" href="">Tin su kien</a></li>                
                                <li><a class="photo" href="">Tin khoa hoc</a></li>                
                                <li><a class="photo" href="">Tin the gioi</a></li>                
                                <li><a class="photo" href="">Tin xa hoi</a></li>                
                            </ul>
                            <div class="clear"></div>
                        </div>
                        <div class="widget">
                            <div class="marked-title">
                                <h3>Kết nối</h3>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <span class="icon fb"></span>
                                        25875<br><span>facebook fans</span>   
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon tw"></span>
                                        25875<br><span>twitter fans</span>   
                                    </a>
                                </li>
                                <li class="third">
                                    <a href="#">
                                        <span class="icon rss"></span>
                                        25875<br><span>subscribers</span>   
                                    </a>
                                </li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        <div class="widget">
                            <div class="marked-title">
                                <h3>Quảng cáo</h3>
                            </div>
                            <iframe width="350" height="300" src="https://www.youtube.com/embed/d8dCiTki6-E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <img class="ads" src="{{ asset('frontend/img/ip6.jpg') }}" alt="">
                            <div class="clear"></div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="clear"></div>
            </div>	
        </div>
	    <!-- end div #main -->
	</div>
	<!-- end wrapper -->
	<!-- start footer -->
    <footer>
        
        <div class="footer-bottom">
            <div class="copyright">
                <p>Copyright 2017 @ <span>Laravel</span>. // A mega awesome NEWS MAGAZINE </p>
            </div>
            <div class="clear"></div>
        </div>  
    </footer>
    <!-- end footer -->
</body>
</html>