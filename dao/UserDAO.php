<?php 
require_once("models/User.php");

class UserDAO implements UserDAOInterface 
{
    private $conn;
    private $url;

    public function __construct(PDO $conn, $url)
    {
        $this->conn = $conn;
        $this->url = $url;
    }

     public function buildUser($data)
     {
        $user = new User();

        $user = $data['id'];   
        $user = $data['name'];   
        $user = $data['lastname'];   
        $user = $data['email'];   
        $user = $data['password'];   
        $user = $data['image'];   
        $user = $data['bio'];   
        $user = $data['id'];   
        $user = $data['token'];   

        return $user;
        
     }
     
     public function create(User $user, $authUser = false)
     {
      
     }

     
    public function update(User $user) 
    {
        
    }
      
    public function verifyToken($protected = false)
    {
        
    }
      
    public function setTokenToSession($token, $redirect = true)
    {
        
    }


    public function authenticateUser($email, $password)
    {
        
    }

    public function findByEmail($email)
    {
        
    
    }
    
    public function findById($id)
    {
        
    }

    public function findByToken($token)
    {
        
    }
    
    public function changePassword(User $user)
    {
        
    }
  
}