<?php
function myFunction() {
  for ($i = 0; $i < 10; $i++) {
    if ($i === 5) {
      continue; // Skip the rest of the loop for this iteration
    }
    echo $i . ' ';
  }
}

myFunction(); // Outputs: 0 1 2 3 4 6 7 8 9 
?>