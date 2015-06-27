<?php

class DbModel extends CI_Model{



           public function createEntry(){

          //  $arrayName = array('name' =>'Rajesh','b'=>'Hello' );

         	$s=$this->db->get('qa1');
          
           foreach($s->result() as $row){
           	 echo 'Name : '.$row->name;
           	 echo '<br>Bad : '.$row->b;
           	  
           }
          
           }   

    }

?>