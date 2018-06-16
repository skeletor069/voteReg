<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>fancyBox v3.2 - Grouping</title>
  
  
  <link rel='stylesheet prefetch' href='allCss/css/ryxren.css'>
  <link rel='stylesheet prefetch' href='allCss/css/eezerq.css'>

  <style type="text/css">
    body{
      font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif; 
      font-size:12px;
    }
    p, h1, form, button{border:0; margin:0; padding:0;}
    .spacer{clear:both; height:1px;}
    /* ----------- My Form ----------- */
    .myform{
      margin:0 auto;
      width:400px;
      padding:14px;
    }
      /* ----------- basic ----------- */
      #basic{
        border:solid 2px #DEDEDE; 
      }
      #basic h1 {
        font-size:14px;
        font-weight:bold;
        margin-bottom:8px;
      }
      #basic p{
        font-size:11px;
        color:#666666;
        margin-bottom:20px;
        border-bottom:solid 1px #dedede;
        padding-bottom:10px;
      }
      #basic label{
        display:block;
        font-weight:bold;
        text-align:right;
        width:140px;
        float:left;
      }
      #basic .small{
        color:#666666;
        display:block;
        font-size:11px;
        font-weight:normal;
        text-align:right;
        width:140px;
      }
      #basic input{
        float:left;
        width:200px;
        margin:2px 0 30px 10px;
      }
      #basic button{ 
        clear:both;
        margin-left:150px;
        background:#888888;
        color:#FFFFFF;
        border:solid 1px #666666;
        font-size:11px;
        font-weight:bold;
        padding:4px 6px;
      }


      /* ----------- stylized ----------- */
      #stylized{
        border:solid 2px #b7ddf2;
        background:#ebf4fb;

      }
      #stylized h1 {
        font-size:14px;
        font-weight:bold;
        margin-bottom:8px;
      }
      #stylized p{
        font-size:11px;
        color:#666666;
        margin-bottom:20px;
        border-bottom:solid 1px #b7ddf2;
        padding-bottom:10px;
      }
      #stylized label{
        display:block;
        font-weight:bold;
        text-align:right;
        width:140px;
        float:left;
      }
      #stylized .small{
        color:#666666;
        display:block;
        font-size:11px;
        font-weight:normal;
        text-align:right;
        width:140px;
      }
      #stylized input{
        float:left;
        font-size:12px;
        padding:4px 2px;
        border:solid 1px #aacfe4;
        width:200px;
        margin:2px 0 20px 10px;
      }
      #stylized button{ 
        clear:both;
        margin-left:160px;
        width:125px;
        height:31px;
        background:#444;
        text-align:center;
        line-height:31px;
        color:#FFFFFF;
        font-size:11px;
        font-weight:bold;
      }

    </style>
  
</head>

<body>



  <h2>Category 2</h2>
  <h2 class="content-head is-center">
      Voting</h2>
    <aside>
      <center>
        Kategorie 2 - Bildserien &#9474 category 2 - photo series</center>
      <center>
        Gib deine Stimmen ab!  &#9474 Cast your votes!</center>
    </aside>
   </aside>

   <div style="display:none;" id="thankyou_message">
    <h2><em>Thanks</em> for contacting us!
      We will get back to you soon!</h2>
  </div>





   <link rel="stylesheet" href="allCss/Gcss/style.css">
  





<!-- form start --> 

<form class="form-inline" id="gform" method="POST" class="pure-form pure-form-stacked" data-email="example@email.net"
  action="vote_gallery_process.php">


<div id="formdata">
  <div>

    <h4>Series 1</h4>

    <p class="imglist">
      <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2031.jpg" data-fancybox="gallery01">
          <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2031.jpg" />
      </a>
      
      <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2032.jpg" data-fancybox="gallery01">
          <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2032.jpg" />
      </a>
      
      <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2033.jpg" data-fancybox="gallery01">
          <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2033.jpg" />
      </a>
      
      <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2034.jpg" data-fancybox="gallery01">
          <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2034.jpg" />
      </a>
    </p>

  <!-- </div> -->
  <fieldset class="pure-group">
      
    <input id="checkboxes--javascript" type="checkbox" name="checkboxes" value="gallery1"  /> <label for="checkboxes--javascript"></label>

  </fieldset>
</div>
<div>
<h4>Series 2</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2041.JPG" data-fancybox="gallery02">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2041.JPG" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2042.JPG" data-fancybox="gallery02">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2042.JPG" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2043.JPG" data-fancybox="gallery02">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2043.JPG" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2044.JPG" data-fancybox="gallery02">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2044.JPG" />
  </a>
  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes2" value="gallery2"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>
<!-- gallery start -->
<div>
<h4>Series 3</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2061.JPG" data-fancybox="gallery03">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2061.JPG" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2062.JPG" data-fancybox="gallery03">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2062.JPG" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2063.JPG" data-fancybox="gallery03">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2063.JPG" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2064.JPG" data-fancybox="gallery03">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2064.JPG" />
  </a>
  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes3" value="gallery3"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>

<!-- gallery ends -->

<!-- gallery start -->
<div>
<h4>Series 4</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2071.jpg" data-fancybox="gallery04">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2071.jpg" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2072.jpg" data-fancybox="gallery04">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2072.jpg" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2073.jpg" data-fancybox="gallery04">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2073.jpg" />
  </a>
  
 
  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes4" value="gallery4"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>

<!-- gallery ends -->

<!-- gallery start -->
<div>
<h4>Series 5</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2101.JPG" data-fancybox="gallery05">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2101.JPG" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2102.JPG" data-fancybox="gallery05">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2102.JPG" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2103.JPG" data-fancybox="gallery05">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2103.JPG" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2104.JPG" data-fancybox="gallery05">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2104.JPG" />
  </a>
  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes5" value="gallery5"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>

<!-- gallery ends -->
<!-- gallery start -->
<div>
<h4>Series 6</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2141.jpg" data-fancybox="gallery06">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2141.jpg" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2142.jpg" data-fancybox="gallery06">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2142.jpg" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2143.jpg" data-fancybox="gallery06">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2143.jpg" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2144.jpg" data-fancybox="gallery06">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2144.jpg" />
  </a>
  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes6" value="gallery6"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>

<!-- gallery ends -->

<!-- gallery start -->
<div>
<h4>Series 7</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2151.jpg" data-fancybox="gallery07">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2151.jpg" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2152.jpg" data-fancybox="gallery07">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2152.jpg" />
  </a>
  
  
  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes7" value="gallery7"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>

<!-- gallery ends -->
<!-- gallery start -->
<div>
<h4>Series 8</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2161.JPG" data-fancybox="gallery08">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2161.JPG" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2162.JPG" data-fancybox="gallery08">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2162.JPG" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2163.JPG" data-fancybox="gallery08">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2163.JPG" />
  </a>
  

  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes8" value="gallery8"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>

<!-- gallery ends -->
<!-- gallery start -->
<div>
<h4>Series 9</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2171.jpg" data-fancybox="gallery09">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2171.jpg" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2172.jpg" data-fancybox="gallery09">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2172.jpg" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2173.jpg" data-fancybox="gallery09">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2173.jpg" />
  </a>
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2174.jpg" data-fancybox="gallery09">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2174.jpg" />
  </a>
  

  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes9" value="gallery9"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>

<!-- gallery ends -->

<!-- gallery start -->
<div>
<h4>Series 10</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2211.jpg" data-fancybox="gallery10">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2211.jpg" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2212.jpg" data-fancybox="gallery10">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2212.jpg" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2213.jpg" data-fancybox="gallery10">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2213.jpg" />
  </a>
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2214.jpg" data-fancybox="gallery10">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2214.jpg" />
  </a>
  

  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes10" value="gallery10"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>

<!-- gallery ends -->

<!-- gallery start -->
<div>
<h4>Series 11</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2221.JPG" data-fancybox="gallery11">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2221.JPG" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2222.JPG" data-fancybox="gallery11">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2222.JPG" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2223.JPG" data-fancybox="gallery11">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2223.JPG" />
  </a>
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2224.jpg" data-fancybox="gallery11">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2224.jpg" />
  </a>
  

  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes11" value="gallery11"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>

<!-- gallery ends -->

<!-- gallery start -->
<div>
<h4>Series 12</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2231.jpg" data-fancybox="gallery12">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2231.jpg" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2232.jpg" data-fancybox="gallery12">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2232.jpg" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2233.jpg" data-fancybox="gallery12">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2233.jpg" />
  </a>
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2234.jpg" data-fancybox="gallery12">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2234.jpg" />
  </a>
  

  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes12" value="gallery12"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>

<!-- gallery ends -->

<!-- gallery start -->
<div>
<h4>Series 13</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2261.jpg" data-fancybox="gallery13">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2261.jpg" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2262.jpg" data-fancybox="gallery13">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2262.jpg" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2263.jpg" data-fancybox="gallery13">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2263.jpg" />
  </a>
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2264.jpg" data-fancybox="gallery13">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2264.jpg" />
  </a>
  

  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes13" value="gallery13"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>

<!-- gallery ends -->

<!-- gallery start -->
<div>
<h4>Series 14</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2271.jpg" data-fancybox="gallery14">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2271.jpg" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2272.jpg" data-fancybox="gallery14">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2272.jpg" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2273.jpg" data-fancybox="gallery14">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2273.jpg" />
  </a>
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2274.jpg" data-fancybox="gallery14">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2274.jpg" />
  </a>
  

  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes14" value="gallery14"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>

<!-- gallery ends --><!-- gallery start -->
<div>
<h4>Series 15</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2301.jpg" data-fancybox="gallery15">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2301.jpg" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2302.jpg" data-fancybox="gallery15">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2302.jpg" />
  </a>
  
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2303.jpg" data-fancybox="gallery15">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2303.jpg" />
  </a>
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2304.jpg" data-fancybox="gallery15">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2304.jpg" />
  </a>
  

  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes15" value="gallery15"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>

<!-- gallery ends -->
<!-- gallery ends --><!-- gallery start -->
<div>
<h4>Series 16</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2311.jpg" data-fancybox="gallery16">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2311.jpg" />
  </a>
  
    <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2312.jpg" data-fancybox="gallery16">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2312.jpg" />
  </a>
  
    <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2313.jpg" data-fancybox="gallery16">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2313.jpg" />
  </a>
     

  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes16" value="gallery16"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>

<!-- gallery ends -->

<!-- gallery start -->
<div>
<h4>Series 17</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2341.jpg" data-fancybox="gallery17">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2341.jpg" />
  </a>
  
    <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2342.jpg" data-fancybox="gallery17">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2342.jpg" />
  </a>
  
    <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2343.jpg" data-fancybox="gallery17">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2343.jpg" />
  
     
</a>
  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes17" value="gallery17"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>

<!-- gallery ends -->

<!-- gallery start -->
<div>
<h4>Series 18</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2351.jpg" data-fancybox="gallery18">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2351.jpg" />
  </a>
  
    <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2352.jpg" data-fancybox="gallery18">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2352.jpg" />
  </a>
  
    <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2353.jpg" data-fancybox="gallery18">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2353.jpg" />
  </a>
  </a>
  
    <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2354.jpg" data-fancybox="gallery18">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2354.jpg" />
  </a>
     

  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes18" value="gallery18"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>

<!-- gallery ends -->

<!-- gallery start -->
<div>
<h4>Series 19</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2361.JPG" data-fancybox="gallery19">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2361.JPG" />
  </a>
  
    <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2362.JPG" data-fancybox="gallery19">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2362.JPG" />
  </a>
  
    <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2363.JPG" data-fancybox="gallery19">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2363.JPG" />
  </a>
  </a>
  
    <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2364.JPG" data-fancybox="gallery19">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2364.JPG" />
  </a>
     

  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes19" value="gallery19"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>

<!-- gallery ends -->
<!-- gallery start -->
<div>
<h4>Series 20</h4>

<p class="imglist">
  <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2331.jpg" data-fancybox="gallery20">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2331.jpg" />
  </a>
  
    <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2332.jpg" data-fancybox="gallery20">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2332.jpg" />
  </a>
  
    <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2333.jpg" data-fancybox="gallery20">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2333.jpg" />
  </a>
  </a>
  
    <a href="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2334.jpg" data-fancybox="gallery20">
      <img src="http://fotowettbewerb-studentenwerke.de/fileadmin/votingtool/category1/Buildserie/ID2334.jpg" />
  </a>
     

  
  
</p>
<!-- </div> -->
<fieldset class="pure-group">
      
      <input id="checkboxes--javascript" type="checkbox" name="checkboxes20" value="gallery20"  /> <label for="checkboxes--javascript"></label>

    </fieldset>
  </div>

<!-- gallery ends -->




  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='js/ryxren.js'></script>

  

    <script  src="js/index.js"></script>




</body>

<div style="width:500px;height:100px;border:0px solid #000;"></div>

<!-- row 1 gallery ends -->

      <div><button onclick="return SubmitClick();" id="btn2Submit" class="button-success pure-button button-xlarge">
      <i class="fa fa-paper-plane"></i>&nbsp;Send vote for this category</button></div>










</div>

</form>

  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <!-- Submit the Form to Google Using "AJAX" -->
  
  <!-- <script data-cfasync="false" type="text/javascript"
  src="/form-submission-handler.js"></script> -->
<!-- END -->
<script type="text/javascript">
// $(document).ready(function() {
//    $("#btnSubmit").click(function() {
//        var numberOf = $('#gform').find('input[type=checkbox]:checked').length;
//        if( numberOf !=3 ) {
//            alert("Please select exactly 3 images");
//            return false;
//        } else {
//            alert("Done – you gave your 3 votes");
//            var press = "Send vote for this category";
//            //handlerSubmit(this);
//            return true;
//       }
//       return false;
//    });
// });

function SubmitClick(){
  var numberOf = $('#gform').find('input[type=checkbox]:checked').length;
  if( numberOf !=3 ) {
    alert("Please select exactly 3 images");
    return false;
  } else {
    alert("Done – you gave your 3 votes");
    var press = "Send vote for this category";
    return true;
  }
  return false;
}

</script>



<!-- 
<style type="text/css">
body{
  font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif; 
  font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
  margin:0 auto;
  width:400px;
  padding:14px;
}
  /* ----------- basic ----------- */
  #basic{
    border:solid 2px #DEDEDE; 
  }
  #basic h1 {
    font-size:14px;
    font-weight:bold;
    margin-bottom:8px;
  }
  #basic p{
    font-size:11px;
    color:#666666;
    margin-bottom:20px;
    border-bottom:solid 1px #dedede;
    padding-bottom:10px;
  }
  #basic label{
    display:block;
    font-weight:bold;
    text-align:right;
    width:140px;
    float:left;
  }
  #basic .small{
    color:#666666;
    display:block;
    font-size:11px;
    font-weight:normal;
    text-align:right;
    width:140px;
  }
  #basic input{
    float:left;
    width:200px;
    margin:2px 0 30px 10px;
  }
  #basic button{ 
    clear:both;
    margin-left:150px;
    background:#888888;
    color:#FFFFFF;
    border:solid 1px #666666;
    font-size:11px;
    font-weight:bold;
    padding:4px 6px;
  }


  /* ----------- stylized ----------- */
  #stylized{
    border:solid 2px #b7ddf2;
    background:#ebf4fb;

  }
  #stylized h1 {
    font-size:14px;
    font-weight:bold;
    margin-bottom:8px;
  }
  #stylized p{
    font-size:11px;
    color:#666666;
    margin-bottom:20px;
    border-bottom:solid 1px #b7ddf2;
    padding-bottom:10px;
  }
  #stylized label{
    display:block;
    font-weight:bold;
    text-align:right;
    width:140px;
    float:left;
  }
  #stylized .small{
    color:#666666;
    display:block;
    font-size:11px;
    font-weight:normal;
    text-align:right;
    width:140px;
  }
  #stylized input{
    float:left;
    font-size:12px;
    padding:4px 2px;
    border:solid 1px #aacfe4;
    width:200px;
    margin:2px 0 20px 10px;
  }
  #stylized button{ 
    clear:both;
    margin-left:160px;
    width:125px;
    height:31px;
    background:#444;
    text-align:center;
    line-height:31px;
    color:#FFFFFF;
    font-size:11px;
    font-weight:bold;
  }

</style>
</head>

<body>


 -->


</div> <!-- end of form class -->


<meta charset="UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="allCss/Bcss/style.css">


      <div class="wrapper">




</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>
  





</body>
  










</html>
