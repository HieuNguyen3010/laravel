<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" />
</head>
<?php 
    //su dung class theo cau truc: ten_namespace\tenclass
    use App\myclass\unicode as php24;
 ?>
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
                    <li><a href="{{ url('/') }}">Trang chủ</a></li>
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
                <?php 
                    $first_hot_news = DB::select("select * from tbl_news where c_hotnews=1 order by pk_news_id desc limit 0,4 ");
                 ?>
                 @foreach($first_hot_news as $arr_first_hot_news)
               <!-- first hot news -->
                <div class="cn_content" style="background: url('{{ asset('upload/news/'.$arr_first_hot_news->c_img) }}') no-repeat center #ffffff; background-size:715px 355px;">
                    <div class="caption">
                        <h3><a href="">{{ $arr_first_hot_news->c_name }}</a></h3>
                        <p>
                        	{!! $arr_first_hot_news->c_description !!}
                        </p>
                        <div class="date">
                            <h3>Hot<br><span>News</span></h3>
                        </div>
                    </div>
                </div>
                <!-- end first hot news -->  
                @endforeach          
            </div>
            <!-- end cn_preview -->
            <!-- cn_list -->
            <div id="cn_list" class="cn_list">
                <div class="cn_page" style="display:block;">
                    @foreach($first_hot_news as $arr_first_hot_news)
                    <!-- list hot news -->
                    <div class="cn_item">
                        <div class="left-box">
                            <img src="{{ asset('upload/news/'.$arr_first_hot_news->c_img) }}" alt="">
                        </div>
                        <div class="right-box">
                            <h4>{{ $arr_first_hot_news->c_name }}</h4>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- end list hot news -->
                    @endforeach
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
                     @yield('controller')                   
                 <!-- ========================================= -->   
                </div>
                <div class="right-container">
                    <div class="sidebar">
                       <div class="widget">
                            <div class="marked-title">
                                <h3>Danh mục tin tức</h3>
                            </div>
                            <ul class="tags">
                                <?php 
                                    $category = DB::table('tbl_category_news')->orderBy('pk_category_news_id','asc')->get();
                                 ?>
                                 @foreach($category as $rows)
                                <li><a class="photo" href="{{ url('news/category/'.$rows->pk_category_news_id.'/'.php24::remove_unicode($rows->c_name)) }}">{{ $rows->c_name }}</a></li>
                                @endforeach                            
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