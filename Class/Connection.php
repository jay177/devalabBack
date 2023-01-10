<?php
class Connection{
	public PDO $pdo;
	
	public function __construct(){
		$this->pdo = new PDO('mysql:dbname=back-dev;host=127.0.0.1','root','');
	}
	
	public function insertUser(User $user):bool
	{
		$query = "INSERT INTO `user` (first_name, last_name, email, password)
		VALUES (:first_name, :last_name, :email, :password)";
		
		$statement = $this->pdo->prepare($query);
		
		return $statement->execute([
			'first_name' =>$user->firstName,
			'last_name' => $user->lastName,
			'email' => $user->email,
			'password' => md5($user->password)
		]);
	}
	
	public function selectUser(string $mail):array
	{
		$query = "SELECT * FROM `user`
		WHERE email = :email";
		
		$statement = $this->pdo->prepare($query);
		$statement->execute([
			'email' => $mail
		]);
		return $statement->fetch(PDO::FETCH_ASSOC);
	}

	public function getUserAlbums(string $mail):array
	{
		$userData = $this->selectUser($mail);
		
		$query = "SELECT * FROM album
							WHERE user_id = :user_id";
		$statement = $this->pdo->prepare($query);
		$statement->execute([
			'user_id' => $userData['id']
		]);
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	public function insertAlbum(Album $album){
		$query = "INSERT INTO `album` (name, user_id, is_private)
		VALUES (:name, :user_id, :is_private)";
		$statement = $this->pdo->prepare($query);
		
		return $statement->execute([
			'name' =>$album->name,
			'user_id' => $album->user_id,
			'is_private' => $album->is_private
		]);
	}
}
