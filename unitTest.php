<?php

class foo {


	public final function setUp(): void {
		parent::setUp();
		$password = "abc123";
		$this->VALID_PROFILE_SALT = bin2hex(random_bytes(32));
		$this->VALID_PROFILE_HASH = hash_pbkdf2("sha512", $password, $this->VALID_PROFILE_SALT, 26144);

		$this->profile = new Profile(generateUUidV4(), null, "mark@markymark.io", $this->VALID_PROFILE_HASH, "Mark Jones", $this->VALID_PROFILE_SALT);
		$this->profile->insert($this->getPDO());

		$this->VALID_ARTICLEDATETIME = new \DateTime();


	}




}