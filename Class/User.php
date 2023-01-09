<?php

class User{
  public function __construct(
    public string $firstName,
    public string $lastName,
    public string $email,
    public string $password
    ){
      
    }
    
    
  }