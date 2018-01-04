<STYLE>
        
        a.morelink {
        	text-decoration:none;
        	outline: none;
        }
        .morecontent span {
        	display: none;
        
        }
</STYLE>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Library</title>

<!-- Bootstrap -->
<?php echo $this->Html->css('bootstrap'); ?>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script src="http://use.edgefonts.net/roboto:n2:default.js" type="text/javascript"></script>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <span style="color:#6379f6;" class="navbar-brand" href=""><strong><b>Library.</b></strong></span></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav navbar-right">
        <li><a  href="/">Book</a></li>
        <li><a href="/books/authors/">Author</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container">
 <div class="row">
   <div class="col-md-5"><a href="/books/authors">Authors</a> / Details</div>
 </div>
 <br>
<div class="row">
    <div class="col-md-10">
      <div class="list-group">
      <?php foreach ($authors as $author): ?>
        <div style="margin-right:15px;" class="list-group-item">
        <img style="float:left;height:40px;width:40px;text-align: center;margin-right:20px;margin-top:15px;" src="/webroot/img/author_icon.svg"></img>
          <h3 style="display:inline-block;margin-top:10px;" class="list-group-item-heading"><strong><?= h($author->Name) ?></strong></h3><span style="float:right;" class="list-group-item-text">Born in <?= h($author->Born_in) ?></span><br>
          <p class="list-group-item-text">Age &nbsp;<?= h($author->Age) ?>&nbsp;/&nbsp;<?= h($author->Gender) ?></p>
          <br><p style="margin-bottom:10px;" class="list-group-item-text"><?= h($author->About) ?></p>
            
        </div><?php endforeach; ?>
       <br><b>&nbsp; Books Written <?= h($count) ?></b> 
       <br><br>
       <?php foreach ($books as $book): ?><div style"display:inline-block;">
        <a href="/books/bookview/<?php echo $book->Slug?>" style="margin-right:15px;" class="list-group-item">
        <img style="float:left;height:40px;width:40px;text-align: center;margin-right:10px" src="/webroot/img/book_icon.svg"></img>
        <h4 style="display:inline;" class="list-group-item-heading"><b><?= h($book->Name) ?></b></h4>
        <span style="float:right;" class="list-group-item-text">ISBN&nbsp;<?= h($book->ISBN) ?></span>
        <p class="list-group-item-text"><div class="comment more"><?= h($book->Content) ?></div></p>
        </a></div><?php endforeach; ?>
        </div>
    </div>
         <div class="col-md-2" align="center">
         <?php if($prev==null):?>
      <button style="width:80px;" type="button" class="btn btn-default disabled"><span class="glyphicon glyphicon-chevron-left"></span></button>
<?php endif;?>
<?php if($prev!=null):?>
      <a href="/books/authorview/<?php echo $prev; ?>" style="width:80px;" type="button" class="btn btn-default "><span class="glyphicon glyphicon-chevron-left"></span></a>
<?php endif;?>
<?php if($next==null):?>
      <button style="width:80px;" type="button" class="btn btn-default disabled"><span class="glyphicon glyphicon-chevron-right"></span></button>
<?php endif;?>
<?php if($next!=null):?>
      <a href="/books/authorview/<?php echo $next; ?>" style="width:80px;" type="button" class="btn btn-default "><span class="glyphicon glyphicon-chevron-right"></span></a>
<?php endif;?>
      <br><p style="font-size:12px;">Navigate to previous/Next Author</p> 
    </div>
  </div>
	</div>	
  <?php
  echo $this->Html->script('jquery-1.11.3.min.js'); ?>
<?php
  echo $this->Html->script('bootstrap.js'); ?>
</body>
</html>


<Script>
$(document).ready(function() {
	var showChar = 100;
	var ellipsestext = "......";
	var moretext = "more";
	var lesstext = "less";
	$('.more').each(function() {
		var content = $(this).html();

		if(content.length > showChar) {

			var c = content.substr(0, showChar);
			var h = content.substr(showChar, content.length - showChar);

			var html = c + '<span class="moreelipses">'+ellipsestext;

			$(this).html(html);
		}

	});

	$(".morelink").click(function(){
		if($(this).hasClass("less")) {
			$(this).removeClass("less");
			$(this).html(moretext);
		} else {
			$(this).addClass("less");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});
});
</Script>
