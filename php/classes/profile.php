<?php
/**
 * Created by PhpStorm.
 * User: OldManVin
 * Date: 1/21/2016
 * Time: 8:47 AM
 */
/**
 *profile, made to allow users to use services provided;
 *
 *a profile holds all the information needed to allow a user or customer to  create an account
 *with the website.
 *@author   6 of 13, tertiary adjunct of unimatrix 1483 <6 of 13, tertiary adjunct of unimatrix 1483@thecollective.borg
 */

class Profile {
	/**
	 * id for this profile; is primary key
	 * @var int $profileId
	 */
	private $profileId;
	/**
	 *Username, a unique name that the user creates
	 * @var string $username
	 */
	private $username;
	/**
	 * its an email
	 * @var string
	*/
	 private $email;


	/**
	 * constructor for this profile
	 * @param int $newProfile new profile id
	 * @param string $newUsername
	 *@param string $newEmail
	 * @throws UnexpectedValueException if any of the parameters are invalid
	 */
	public function __construct($newProfileId, $newUsername, $newEmail) {
		try{
			$this->setProfileId($newProfileId);
			$this->setUsername($newUsername);
			$this->setEmail($newEmail);
		} catch(UnexpectedValueException $exception){
			//rethrow to caller
			throw(new UnexpectedValueException("no able to construct profile", 0, $exception));
		}
	}


	/**
	 * accessor method for profile id
	 *
	 * @return int value of profile id
	 */
	public function getProfileId() {
		return ($this->profileId);
	}

	/**
	 * mutator method for profile id
	 *
	 * @param int $newProfileId is new value or profile id
	 * @throws InvalidArgumentException if $newprofileId is not a integer
	 * @throws RangeException if profile id is negative
	 */
	public function setProfileId($newProfileId) {
		// verify profile id
		$newProfileId = filter_var($newProfileId, FILTER_VALIDATE_INT);
		//if filter_var()frejects the new id throw an Exception
		if($newProfileId === false) {
			throw(new InvalidArgumentException("profile id is not an integer punk"));
		}
		if($newProfileId <= 0) {
			throw(new RangeException("proflie id must be positive fool"));
		}
		// saving to object
		$this->email = $newProfileId;
	}

	/**
	 * @param $newEmail
	 * @throws InvalidArgumentException $newemail is not a string
	 */
	public function setEmail($newEmail) {
		/**
		 * sanitizing email
		 * if filter_var rejects newEmail throw Exception
		 * save to object
		 */
		$newEmail = filter_var($newEmail, FILTER_SANITIZE_EMAIL);
		if ($newEmail === false){
			throw(new InvalidArgumentException("email is not a string please try again"));
		}
		// saving to object
		$this->email = $newEmail;
	}
	/**
	 * @param $username
	 * @throws InvalidArgumentException $newusername is not a sting
	 */
	public function setUsername($newUsername) {
		/**
		 * sanitizing newUsername
		 * if filter_var rejects newUsername throw Exception
		 * save to object
		 */
		$newUsername = filter_var($newUsername, FILTER_SANITIZE_STRING);
		if($newUsername === false){
			throw(new InvalidArgumentException("username is and invalid string you failed"));
		}
		// saving to object
		$this->username = $newUsername;
	}
}

