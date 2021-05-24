<?php 

class Signup

{
    private $error = "";

    public function evaluate($data)
    {
        foreach ($data as $key => $value)
        {
            # code...
            if(empty($value))
            {
                $error =   $key . "is empty!<br>";
            }
        }

        if($error == "")
        {
            //no error
            $this->create_user($data);
        }else
        {
            return $error;
        }

    }

    public function create_user($data)
    {
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $gender = $data['gender'];
        $email = $data['email'];
        $password = $data['password'];

        // create these
        $url_address = strtolower($first_name) . strtolower($last_name);
        $userid = create_userid(); 


        $query = "insert into users
        (userid,first_name,last_name,gender,email,password,url_address) 
        values
        ('$userid','$first_name','$last_name','$gender','$email','$password','$url_address')";

        return $query;


        //$DB = new Database();
        //$DB->save($query);
    }

    
    private function create_userid()
    {
        $length = rand(4,19);
        $number="";
        for( $i=0; $i<$length ; $i++){
            #code...
            $new_rand= rand(0,9);

            $number = $number . $new_rand;
        }
        return $number;
    }
}