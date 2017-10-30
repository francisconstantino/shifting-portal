<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;
use App\Permission;
use App\User;

class RoleController extends Controller
{
	public function index()
	{
		$owner = new Role();
		$owner->name         = 'owner';
		$owner->display_name = 'Project Owner'; // optional
		$owner->description  = 'User is the owner of a given project'; // optional
		$owner->save();

		$admin = new Role();
		$admin->name         = 'admin';
		$admin->display_name = 'User Administrator'; // optional
		$admin->description  = 'User is allowed to manage and edit other users'; // optional
		$admin->save();

		$user = new User();
		$user->name="Michelle";
		$user->email="michelle@example.com";
		$user->password="12345";
		$user->save();

		$user->attachRole($admin);

}
}
