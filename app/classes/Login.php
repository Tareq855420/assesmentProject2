<?php

namespace App\classes;

class Login
{
    protected $email;
    protected $password;
    protected $loginEmail;
    protected $loginPassword;

    public function __construct($post=null)
    {
        if ($post)
        {
            $this->email = $post['email'];
            $this->password = $post['password'];
        }
    }

    public function login()
    {
        $this->loginEmail = 'admin@ad.com';
        $this->loginPassword = '855420';

        if ($this->email == $this->loginEmail && $this->password == $this->loginPassword)
        {
            session_start();
            $_SESSION['id'] = rand(10, 1000);
            header('Location: action.php?pages=product-upload');
        }
        else
        {
            return 'Abar Try Kor Beta!!!!';
        }
    }

    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        header('Location: action.php?pages=login');
    }
}