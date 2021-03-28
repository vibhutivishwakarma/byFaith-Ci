<?php


class User_model extends CI_Model
{

    public function getdata()
    {

        $query = $this->db->get('users', 10);
        return $query->result();
    }

    public function registerModel($formData)
    {

        $this->db->insert('users', $formData);
    }

    public function loginModel($Email, $Pass)
    {   
        $this->db->where('email', $Email);
        $hashed_password = password_hash($Pass, PASSWORD_BCRYPT);

        // $this->db->where('password',$hashed_password);

        $query= $this->db->get('users');
        // return $query->row();

        if (password_verify('password', $hashed_password )) {

            $row = $query->row();
            $data = array(
              'uid' => $row->id,
              'firstname' => $row->firstname,
              'email' => $row->email,
              'validated' => TRUE
            );
      
            $this->session->set_userdata($data);  
            
            return TRUE;

        } else {

            return FALSE;
        }
    }
}
