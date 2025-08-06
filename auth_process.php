<?php 

require_once("models/User.php");
require_once("models/Message.php");
require_once("dao/UserDAO.php");
require_once("globals.php");
require_once("db.php");
require_once("vendor/autoload.php");

$message = new Message($BASE_URL);
$userDao = new UserDAO( $conn, $BASE_URL);

// Resgata o tipo do formulário

$type = filter_input(INPUT_POST, "type");

// Verificação do tipo de formulário

if($type === "register") {
  $email = filter_input(INPUT_POST, "email");
  $name = filter_input(INPUT_POST, "name");
  $lastname = filter_input(INPUT_POST, "lastname");
  $password = filter_input(INPUT_POST, "password");
  $confirmPassword = filter_input(INPUT_POST, "confirmpassword");

  // Verificação de dados mínimos 
  if($name && $lastname && $email && $password) {

       if ($password === $confirmPassword)  {
          
            //  Verifica se o e-mail já está cadastrado no sistema
           if($userDao->findByEmail($email) === false){
                
              $user = new User();

              // Criação de token e senha 
              $userToken = $user->generateToken();
              $finalPassword = $user->generatePassword($password);

              $user->name = $name;
              $user->lastname = $lastname;
              $user->email = $email;
              $user->password = $finalPassword;
              $user->token = $userToken;

              $auth = true;
              
              $userDao->create($user, $auth);
              
           }
           else {
                  //Enviar uma msg de erro, usuário já existe
                   $message->setMessage("Usuário já cadastrado, tente outro e-mail", "error", "back");  
                }
      } 
      else {
        
            // Senhas não coincidem
            $message->setMessage("As senhas não coincidem!", "error", "back");
        
          }
  }
  else  {
    // Enviar uma mensagem de erro, dados faltantes
   $message->setMessage("Por favor, preencha todos os campos.", "error", "back");

  }
  
}
else if($type === "login"){
   
  }