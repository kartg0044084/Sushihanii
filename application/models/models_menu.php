<?php
class models_menu extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        } //!必須

        function getmenu(){
          $query = $this->db->query('SELECT * FROM product'); //SELECT

          if($query->num_rows() > 0){ //如果載入多行，則返回true
            return $query->result(); //返回一個數組
          }else{
            return NULL;
          }
        }
          // function addusers(){
          //   $data = array(
          //                'firstname' => 'My Name' ,
          //                'email' => 'My email'
          //             );
          //             $this->db->insert('users', $data);
          // } 新增範例


}
 ?>
