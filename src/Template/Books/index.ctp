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
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
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
    <a class="navbar-brand" href=""><b>Library.</b></a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="active" href=""><u>Book</u></a></li>
        <li><a href="books/authors">Author</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container">
 <div class="row">
   <div class="col-md-5">Books</div>
   <div class="col-md-5"><p align="right"><?php echo $count; ?> Books</p></div>
 </div>
<div class="row">
    <div class="col-md-10">
      <div class="list-group">
        <?php foreach ($books as $bookEntity): ?>
        <a href="books/bookview/<?php echo $bookEntity->Slug?>" class="list-group-item">
        <h4 class="list-group-item-heading"><b><?= h($bookEntity->Name) ?></b></h4>
        <p class="list-group-item-text">by&nbsp;<b><?= h($bookEntity->Author) ?></b></p>
		<p style="margin-top:5px;" class="list-group-item-text">ISBN&nbsp;<?= h($bookEntity->ISBN) ?></p>
        <p class="list-group-item-text"><div class="comment more"><?= h($bookEntity->Content) ?></div></p>
        </a><?php endforeach; ?>
        </div>
    </div>
    <div align="center" class="col-md-2">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-modal">Add Book</button>
    </div>
  </div>
</div>




<!-- BEGIN ADD AUTHOR-->
<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-wrapper">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header bg-blue">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><i class="fa fa-envelope"></i><b>Add Book</b></h4>
                          </div>
                          <?php echo $this->Form->create($book);?>
                            <div class="modal-body">
                              <div class="form-group">
                              <?php echo $this->Form->control('Name', ['class'=>'form-control','label'=>'Book Name']);?>
                              </div>
                            <div class="form-group">
                            <?php echo $this->Form->input('Author', array('label'=>'Authors','class'=>'form-control','empty'=>'Choose One','type'=>'select', 'options'=>$authors));?>
                              </div>
							  <div class="form-group">
                              <?php echo $this->Form->control('ISBN',['label'=>'ISBN number','class'=>'form-control']);?>
                              </div>
                              <div class="form-group">
                              <?php echo $this->Form->control('Content', ['row'=>'5','class'=>'form-control','label'=>'Description of content']);?>
                              </div>
                              
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                              <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-envelope"></i> Save Book</button>
                            </div>
                            <?php echo $this->Form->end();?>
                        </div>
                      </div>
                    </div>
                  <!-- END AUTHOR -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<?php
    echo $this->Html->script('jquery-1.11.3.min.js'); ?>
<?php
    echo $this->Html->script('bootstrap.js'); ?>


<!-- Include all compiled plugins (below), or include individual files as needed --> 

</body>
</html>


   
   
   
   
   
   
   
   
   
   
   
   
  




<Script>
$(document).ready(function() {
	var showChar = 200;
	var ellipsestext = "...";
	var moretext = "more";
	var lesstext = "less";
	$('.more').each(function() {
		var content = $(this).html();

		if(content.length > showChar) {

			var c = content.substr(0, showChar);
			var h = content.substr(showChar, content.length - showChar);

			var html = c + '<span class="moreelipses">'+ellipsestext+'</span><span class="morecontent"><span>' + h + '</span><a href="" class="morelink">'+moretext+'</a></span>';

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
