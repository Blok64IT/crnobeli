<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#e84e1b">
<meta name="viewport" content="width=device-width">
<title>Crno beli Timovi</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php echo BASE_ROOT . '/js/jquery.bxslider.min.js'; ?>"></script>

<link rel="stylesheet" type="text/css" href="<?php echo BASE_ROOT . '/css/font-awesome.min.css'; ?>">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,100italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo BASE_ROOT . '/css/jquery.bxslider.css'; ?>">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_ROOT . '/css/style.css'; ?>">


<script>
$(document).ready(function(){
  $('.oldtimes').bxSlider({
    slideWidth: 220,
    minSlides: 2,
    maxSlides: 6,
    slideMargin: 25,
    moveSlides: 1,
    pager: false,
    auto: true
  });
});
</script>


<script>
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
</script>

<script>
$(document).ready(function() {
        
    var respmenu        = $('#respmenu');
    var menu            = $('#nav>ul');

    $(respmenu).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });
    
    $(window).resize(function(){
        var sirina = $(window).width();
        if(sirina > 768 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }   
    });
    
}); 
    


</script>


</head>

<body>

<a name="top"></a>

<header id="header">
    
        <div id="headerTop">
            <div class="wrapper">
                <div id="headerTopLeft">
                    <span><i class="fa fa-lg fa-phone"></i>&nbsp;&nbsp;&nbsp;011.945.10.04</span>
                    <span><i class="fa fa-lg fa-envelope-o"></i>&nbsp;&nbsp;&nbsp;crnobeli.rs</span>
                </div>
                <div id="headerTopRight">
                    <a href="#" target="_blank"><i class="fa fa-lg fa-facebook-square"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-lg fa-twitter-square"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-lg fa-linkedin-square"></i></a>
                </div>
            </div>
        </div>
        
       

        <div id="headerBottom">
            <div class="wrapper">
            
                <div id="logo">
                    <?php  foreach($this->title as $rw) : ?>
                              
                        <?php foreach($rw as $r) : ?>
                    
                            <?php if ($r['menu_id']==1) { ?>
                                <a href="?mvcctrl=site&mvcmethod=<?php echo $r['title'] ?>&id=<?=$r['menu_id']?>">
                            <?php } ; ?>
                        <?php endforeach;  ?>
                    <?php endforeach; ?>     
                    <img src="images/bwdug.png" alt="logo">
                    </a>
                </div>
                 
                <nav id="nav">
                    
                    <ul>
                         
                        
                           
                        

                        <?php  foreach($this->title as $rw) : ?>
                              
                            <?php foreach($rw as $r) : ?>
                                <?php if ($r['menu_id']==1) {}
                                    elseif ($r['menu_id']==count($rw)) {}
                                    else { ?> 
                                      <li><a href="?mvcctrl=site&mvcmethod=<?php echo $r['title'] ?>&id=<?=$r['menu_id']?>"><?=$r['title']?></a></li>
                                <?php } ; ?>
                            <?php endforeach;  ?>
                        <?php endforeach; ?>  

                    
                    </ul>
                    
                    <a href="#" id="respmenu" class="button"><i class="fa fa-lg fa-navicon"></i>&nbsp;&nbsp;&nbsp;&nbsp;Navigation</a>
                </nav>
           
            </div>
        </div>   
    
    </header><!-- kraj #header -->

    <body>
