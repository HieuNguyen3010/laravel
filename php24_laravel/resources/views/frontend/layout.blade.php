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
				<a href="{{ url('/') }}">New Magazine</a>
			</div>
            <div class="search">
                <form action="{{ route('search') }}" method="get">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" name="key" placeholder="Bạn tìm gì..">
                    <button type="submit">Tìm kiếm</button>
                </form>
            </div>
			<div class="menu">
				<ul class="menucha">
                    <li><a href="{{ url('/') }}">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="{{ url('/') }}">Tin tức</a></li>
                    <li><a href="{{ url('product') }}">Sản phẩm</a>
                        <ul class="menucon">
                            <?php 
                                $category_product = DB::table('tbl_category_product')->orderBy('pk_category_product_id','asc')->get();
                             ?>
                             @foreach($category_product as $rows_category)
                            <li><a href="{{ url('categoryProduct/'.$rows_category->pk_category_product_id) }}">{{ $rows_category->c_name }}</a></li>
                            @endforeach
                        </ul>
                    </li>                    
                    <li><a href="{{ url('detailProduct') }}">Liên hệ</a></li>
                </ul> 
			</div>
            <div id="time"></div>
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
                        <h3><a href="{{ asset('news/detail/'.$arr_first_hot_news->pk_news_id.'/'.php24::remove_unicode($arr_first_hot_news->c_name)) }}">{{ $arr_first_hot_news->c_name }}</a></h3>
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
                            <a href="{{ asset('news/detail/'.$arr_first_hot_news->pk_news_id.'/'.php24::remove_unicode($arr_first_hot_news->c_name)) }}">
                            <img src="{{ asset('upload/news/'.$arr_first_hot_news->c_img) }}" alt="">
                            </a>
                        </div>
                        <div class="right-box">
                            <a href="{{ asset('news/detail/'.$arr_first_hot_news->pk_news_id.'/'.php24::remove_unicode($arr_first_hot_news->c_name)) }}">
                            <h4>{{ $arr_first_hot_news->c_name }}</h4>
                            </a>
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
                                    <a href="https://www.facebook.com/" >
                                        <span class="icon fb"></span>
                                        25875<br><span>facebook fans</span>   
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/">
                                        <span class="icon tw"></span>
                                        25875<br><span>twitter fans</span>   
                                    </a>
                                </li>
                                <li class="third">
                                    <a href="https://www.youtube.com/subscribers">
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
                            <iframe width="350" height="300" src="https://www.youtube.com/embed/q6MaMwL_n8g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
    <div id="scrollTop" onclick="topFunction()" >Top</div>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-1.8.3.min.js') }}" ></script>
    <script type="text/javascript">
        setInterval(function(){
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth()+1;
            var year = date.getFullYear();
            var hours = date.getHours();
            var minute = date.getMinutes();
            if(minute < 10){
                minute = "0" + minute;
            }
            var second = date.getSeconds();
            if(second < 10){
                second = "0" + second;
            }
            var time = day + "/" + month + "/" + year + " " + hours + ":" + minute + ":" + second;
            document.getElementById('time').innerHTML = time;
        },1000);
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            // ================
            // setInterval(function(){
            //     $('.cn_content.active').first().animate({marginLeft: -720}, 500,function(){
            //         $(this).removeClass('active').next().addClass('active');
            //     });
               
            // },2000);
            // ================

            // $('.scrollTop').on('click', function(event) {
            // event.preventDefault();
            //      Act on the event 
            //     $('html,body').animate({scrollTop: 0}, 500);
            // });     
        }); 
    </script>
    <script type="text/javascript">
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("scrollTop").style.display = "block";
            } else {
                document.getElementById("scrollTop").style.display = "none";
            }
        }
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>
</html>