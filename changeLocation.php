<?php
  // Change player location
function changeLocation(){	
  // Write your code here:
  global $location;
  echo "Where do you want to go?\n";
  $lo=readline(">> ");
  $loc=strtolower($lo);
  if($location=="kitchen" && $loc=="bathroom"){
    echo "You go to: bathroom.\n";
    $location="bathroom";
  }
  elseif($location=="kitchen" && $loc=="woods"){
    echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.\n";
    $location="woods";
  }
  elseif($location=="bathroom" && $loc=="kitchen"){
    echo "You go to: kitchen.\n";
    $location="kitchen";
  }
  elseif($location=="woods" && $loc=="kitchen"){
    echo "You go to: kitchen.\n";
    $location="kitchen";
  }
  elseif($loc=="woods" || $loc=="kitchen" ||$loc=="bathroom"){
    echo "You can't go directly to there from your current location. Try going somewhere else first.\n";
  }
  else
  {
   echo "That doesn't make sense. Are you confused? Try 'look around'.\n" ;
  }
  
  
}