﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blue Wave Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/css/tooplate_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!--   Free Website Template by t o o p l a t e . c o m   -->
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

</head>
<body>

<div id="tooplate_wrapper">

	<div id="tooplate_header">
    	
        <div id="tooplate_menu">
        	<ul>
                <li><a href="/articles" class="current">Home</a></li>
                <li><a href="articles/create">Add New Post</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <div class="cleaner"></div>
        </div> <!-- end of menu -->
        
		<div id="site_title"><h1><a href="#">Blue Wave</a><span>Your Tagline Goes Here</span></h1></div>
    
    </div> <!-- end of header -->
    
    <div id="tooplate_middle">
   		<div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Search" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div> <!-- end of search box -->
    </div> <!-- end of middle -->
    
    <div id="tooplate_main">
                
        <div id="tooplate_content">
        
        	<div class="col_w880 home_intro">
            	<p><em>Pellentesque habitant morbi tristique senectus et netus et.</em> Quisque blandit porttitor consequat. Praesent viverra lorem at magna tempor vitae egestas risus convallis.Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>. </p>
                <a href="#" class="learnmore"></a>
                <div class="cleaner"></div>
            </div>
        
        	<div class="col_w880">

                @yield('content')
                
                <div class="cleaner"></div>
            </div>
            
            <div class="col_w880 portfolio">
			
            	<h2>Portfolio</h2>
            	<div class="col_w260">
                	<h6>Etiam Magna Metus</h6>
                    <img src="/images/tooplate_image_01.jpg" alt="Image 01" />
                	<p>Nunc ut nisi felis, et iaculis erat ut mauris sit amet purus molestie malesuada.</p>
                    <a class="more" href="#">Learn more</a>
                </div>
                
                <div class="col_w260">
                	<h6>Morbi Battis Porta</h6>
                    <img src="/images/tooplate_image_02.jpg" alt="Image 02" />
                    <p>Etiam et quam metus, vitae sodales tortor. In risus urna, scelerisque eu vetibulums.</p>
                    <a class="more" href="#">Learn more</a>
                </div>
                
                <div class="col_w260 col_last">
                	<h6>Nullam ut Neque Neque</h6>
                    <img src="/images/tooplate_image_03.jpg" alt="Image 03" />
                    <p>Curabitur lobortis imperdiet nisi, malesuada egestas purus viverra vitae.</p>
                    <a class="more" href="#">Learn more</a>
                </div>
                
                <div class="cleaner"></div>
            </div>
        
        </div> <!-- end of content -->
        
    </div>	<!-- end of main -->
    
    <div id="tooplate_footer">
    
        Copyright © 2048 <a href="#">Your Company Name</a>
    
    </div> <!-- end of tooplate_footer -->

</div> <!-- end of wrapper -->
<!--   Free Website Template by t o o p l a t e . c o m   -->
</body>
</html>