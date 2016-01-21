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
		$newProfileId = filter_var($newProfileId, FILTER_VALIDATE_INT);
		if($newProfileId === false) {
			throw(new InvalidArgumentException("profile id is not an integer punk"));
		}
		if($newProfileId <= 0) {
			throw(new RangeException("proflie id must be positive fool"));
		}
	}

	/**
	 * @param $newemail
	 * @throws InvalidArgumentException $newemail is not a string
	 */
	public function setemail($newemail) {
		$newemail = filter_var($newemail, FILTER_SANITIZE_EMAIL);
		if ($newemail === false){
			throw(new InvalidArgumentException("email is not a string please try again"));
		}
	}
	/**
	 * @param $username
	 * @throws InvalidArgumentException $newusername is not a sting
	 */
	public function setUsername($newusername) {
		$newusername = filter_var($newusername, FILTER_SANITIZE_STRING);
		if($newusername === false){
			throw(new InvalidArgumentException("username is and invalid string you failed"));
		}
	}
}

