<h1>Add Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('message', array('rows' => '3'));
echo $this->Form->end('Save Post');
?>
