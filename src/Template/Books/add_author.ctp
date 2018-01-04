
<h1>Add Author</h1>
<?php
    echo $this->Form->create($author);
    echo $this->Form->control('Name', ['label'=>'Author name']);
    echo $this->Form->control('Age',['label'=>'Age']);
    echo $this->Form->input('Gender', array('label'=>'Gender', 'type'=>'select','empty'=>'Choose one','options'=>array('Male','Female','Other')));
    echo $this->Form->control('Born_in',['label'=>'Born in']);
    echo $this->Form->control('About',['rows'=>'5']);
    ?>
    <br><br><button type="Submit" class="bttn">Save</button>
    <a class="name" href="/Library_management">Cancel</a>

    <?php
    echo $this->Form->end(); 
?>