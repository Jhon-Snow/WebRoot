<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	// private $_id;
	public function authenticate()
	{
			//Inicio Login Normal
		echo "<br><br><br><br>";
		var_dump($this->username);
		$user=Usuario::model()->findByAttributes(array('USU_username'=>$this->username));
		if(!$user)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($user->USU_password!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
			// Guarda variables de session
            $this->username=$user->USU_role;
            $this->setState('role', $user->USU_role);
            $this->setState('rut', $user->USU_rut);
            $this->setState('correl', $user->USU_correl);
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}
}