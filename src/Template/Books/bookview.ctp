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
    <a class="navbar-brand" href="#"><b>Library.</b></a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav navbar-right">
        <li><a  href="/Library_management/">Book</a></li>
        <li><a href="/Library_management/books/authors/">Author</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container">
 <div class="row">
   <div class="col-md-5"><a href="/Library_management/">Books</a> / Details</div>
 </div>
 <br>
<div class="row">
    <div class="col-md-10">
      <div class="list-group">
      <?php foreach ($books as $book): ?>
        <div style="margin-right:15px;" class="list-group-item">
          <h3 class="list-group-item-heading"><strong><?= h($book->Name) ?></strong></h3>
          <p class="list-group-item-text">by <strong><?= h($book->Author) ?></strong></p>
          <p class="list-group-item-text">ISBN <?= h($book->ISBN) ?></p>
        <p class="list-group-item-text"><br>
        <?= h($book->Content) ?><br><br><br>
        </div><?php endforeach; ?></div>
    </div>
         <div class="col-md-2" align="center">
         <?php if($prev==null):?>
      <button style="width:80px;" type="button" class="btn btn-default disabled"><span class="glyphicon glyphicon-chevron-left"></span></button>
<?php endif;?>
<?php if($prev!=null):?>
      <a href="/Library_management/books/bookview/<?php echo $prev; ?>" style="width:80px;" type="button" class="btn btn-default "><span class="glyphicon glyphicon-chevron-left"></span></a>
<?php endif;?>
<?php if($next==null):?>
      <button style="width:80px;" type="button" class="btn btn-default disabled"><span class="glyphicon glyphicon-chevron-right"></span></button>
<?php endif;?>
<?php if($next!=null):?>
      <a href="/Library_management/books/bookview/<?php echo $next; ?>" style="width:80px;" type="button" class="btn btn-default "><span class="glyphicon glyphicon-chevron-right"></span></a>
<?php endif;?>
      <br><p style="font-size:12px;">Navigate to previous/Next book</p> 
    </div>
  </div>
	</div>	
  <?php
  echo $this->Html->script('jquery-1.11.3.min.js'); ?>
<?php
  echo $this->Html->script('bootstrap.js'); ?>
</body>
</html>
