<?php


$string="spome character's and password's we prevent injec'tions";

echo addslashes($string);


/*add slashes ill helps in preventing sql injections*/

/* which adds slashers for every special characters*/

/*so we can prevent sql injections */



/*while sending form data we use this

with $variable =addslashes($_POST['form feild name'])*/



?>
