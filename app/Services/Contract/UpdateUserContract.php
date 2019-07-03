<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 02 Jul 2019 11:58:53 +0000
 */

namespace App\Services\Contract;

interface UpdateUserContract
{
	public function getFirstName();

	public function hasFirstName();

	public function getLastName();

	public function hasLastName();

	public function getAge();

	public function hasAge();

	public function getCreatedAt();

	public function hasCreatedAt();

	public function getUpdatedAt();

	public function hasUpdatedAt();
}
