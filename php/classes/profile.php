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
 **/

class Profile {
	/**
	 * id for this profile; is primary key
	 *@var int $profileId
	 **/
	private $profileId;
	/**
	 *Username, a unique name that the user creates
	 * @var varchar $username
	 **/
	private $username;
	/**
	 * its an email
	 * @var varchar
	 */
	private $email;
	/**
	 * accessor method for profile id
	 *
	 * @return int val
	 */
}