<?php

if($_POST['action'] == 'call_this') {
  
  // Get the current value.
$count = (int) get_field('wynik');

// Increase it.
$count++;

// Update with new value.
update_field('wynik', $count);
  
  
  
}

?>