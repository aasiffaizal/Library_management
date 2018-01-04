<STYLE>
        
        a.morelink {
        	text-decoration:none;
        	outline: none;
        }
        .morecontent span {
        	display: none;
        
        }
        div.message {
    text-align: center;
    cursor: pointer;
    display: block;
    font-weight: normal;
    padding: 0 1.5rem 0 1.5rem;
    transition: height 300ms ease-out 0s;
    background-color: #a0d3e8;
    color: #626262;
    top: 15px;
    right: 15px;
    z-index: 999;
    overflow: hidden;
    height: 50px;
    line-height: 2.5em;
    box-radius: 5px;
}

div.message:before {
    line-height: 0px;
    font-size: 20px;
    height: 12px;
    width: 12px;
    border-radius: 15px;
    text-align: center;
    vertical-align: middle;
    display: inline-block;
    position: relative;
    left: -11px;
    background-color: #FFF;
    padding: 12px 14px 12px 10px;
    content: "i";
    color: #a0d3e8;
}

div.message.error {
    background-color: #C3232D;
    color: #FFF;
}

div.message.error:before {
    padding: 11px 16px 14px 7px;
    color: #C3232D;
    content: "x";
}
div.message.hidden {
    height: 0;
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
    <span style="color:#6379f6;" class="navbar-brand" href=""><strong><b>Library.</b></strong></span></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav navbar-right">
        <li><a style="color:#6379f6;" class="active" href=""><strong>Book</strong></a></li>
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
        <?php foreach ($books as $bookEntity): ?><div style"display:inline-block;">
        <a href="books/bookview/<?php echo $bookEntity->Slug?>" class="list-group-item">
        <img style="float:left;height:40px;width:40px;  text-align: center;" src="/Library_management/webroot/img/book_icon.svg"></img>
        <div style="margin-left:50px;">
        <h4 style="display:inline-block;" class="list-group-item-heading"><b><?= h($bookEntity->Name) ?></b></h4><span style="float:right;" class="list-group-item-text">ISBN&nbsp;<?= h($bookEntity->ISBN) ?></span>
        <p class="list-group-item-text">by&nbsp;<b><?= h($bookEntity->Author) ?></b></p>
		
        <p class="list-group-item-text"><div class="comment more"><?= h($bookEntity->Content) ?></div></div></p>
        </a></div><?php endforeach; ?>
        </div>
    </div>
    <div class="col-md-2" align="center">
      <button align="center" type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-modal">Add Book</button>
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
	var showChar = 120;
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
