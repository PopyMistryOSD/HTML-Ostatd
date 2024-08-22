<?php 
//$string = "Lorem ipsum dolor sit amet consectetur, adipisicing elit.Esse vitae magni corporis maiores cupiditate reiciendis, commodi adipisci ex explicabo molestias.";
//echo wordwrap($string,26);


$string = "Lorem ipsum dolor sit amet consectetur, adipisicingrrrrrrrrrrrrrrrrrrrrrrrrrrr elit.Esse vitae magni corporis maiores cupiditate reiciendis, commodi adipisci ex explicabo molestias.";
echo wordwrap($string,26,"\n",true);