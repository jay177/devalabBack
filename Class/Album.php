<?php

class Album{
  public function __construct(
    public string $name,
    public string $user_id,
    public int $is_private
    ){
      
    }
  }