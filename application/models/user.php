<?php
class User extends CI_Model {

    var $login    = '';
    var $password = '';
    var $salt     = '';
    var $role     = '';


    
    function check_login($login, $password)
    {
        $query  = $this->db->get_where('user', array('login' => $login));
        $result = $query->row();
  
        if(is_object($result))
        {
            if (hash('sha256', $password . $result->salt) == $result->password)
            {
                //die("Password ok");
                return True;
            }
            else
            {   
                //die("Password not ok");
                return False;
            }
        }
        else
        {
            //die("No user");
            return False;
        }    
    }

    function add_admin($password)
    {
        $this->salt     = hash('sha256', mt_rand());
        $this->password = hash('sha256', $password . $this->salt);
        $this->role     = 1;
        $this->login    = "admin";

        $this->db->insert('user', $this);

        //echo "Salt: ".$salt."<br/> Password: ".$password. "<br/> HashedPassword: ". $hash; 
    }

}
?>