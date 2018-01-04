
<h1>Add Book</h1>
<?php
    echo $this->Form->create($book);
    echo $this->Form->control('Name', ['label'=>'Book name.']);
    echo $this->Form->input('Author', array('label'=>'Authors','empty'=>'Choose One','type'=>'select', 'options'=>$authors));
    echo $this->Form->control('ISBN',['label'=>'ISBN number']);
    echo $this->Form->control('Content',['rows'=>'5']);
    ?>
    <br><br><button type="Submit" class="bttn">Save</button>
    <a class="name" href="/Library_management">Cancel</a>

    <?php
    echo $this->Form->end(); 
?>