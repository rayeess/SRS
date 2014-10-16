 <?php
 class AccountController extends BaseController
	 {
	 	//Need to create this view and routing
	 	public function getLogin() {
	 		return View::make('loginpage');
	 	}

	 	//Need to create this routing
	 	public function postLogin() {
	 		$validator = Validator::make(Input::all(),
	 			array(
	 				'Email' => 'required|email',
	 				'password' => 'required'
	 				)
	 			);

	 		if($validator->fails()) {
	 			//Redirect to the login page
	 			return Redirect::route('account-login')
	 					->withErrors($validator)
	 					->withInput();
	 		}
	 		else {

	 			$remember = (Input::has('remember')) ? true : false;

	 			//Attempt login
	 			$auth = Auth::attempt(array(
	 				'Email' => Input::get('Email'),
	 				'password' => Input::get('password'),
	 				'Active' => 1
	 			), $remember);

	 			if($auth) {
	 				//Redirect to the intended page
	 				return Redirect::intended('dashboard');
	 			}
	 			else {
	 				//Wrong credentials
	 				return Redirect::route('account-login')
	 						->with('global', 'Wrong Email or password. Have you activated your account yet?');
	 			}
	 		}

	 		return Redirect::route('account-login')
	 				->with('global', 'There was a problem logging you in. Please try again later.');
	 	}
	 	**/

	 	public function getSignup()
	 	{
	 		return View::make('signup-form');
	 	}

	 	public function postSignup()
	 	{
	 		$validator = Validator::make(Input::all(),
	 			array(
	 				//Validation parameters
	 				'Title' => 'max:5|min:2',
	 				'FirstName' => 'required|max:20|min:3',
	 				'Surname' => 'required|max:20|min:3',
	 				'Company' => 'required|max:100|min:2',
	 				'DOB' => 'required|max:10|min:6',
	 				'Street' => 'required|max:30|min:5',
	 				'Town' => 'max:30',
	 				'County' => 'max:30',
	 				'Postcode' => 'required|max:10|min:3',
	 				'Phone' => 'required|max:11',
	 				'Email' => 'required|max:50|email|unique:users',
	 				'password' => 'required|min:6',
	 				'RetypePassword' => 'required|same:password',
	 				)
	 			);

	 		if($validator->fails()) {
	 			//Redirect to register page with errors
	 			return Redirect::route('signup')
	 				->withErrors($validator)
	 				->withInput();
	 		} else {

	 			$Title = Input::get('Title');
	 			$FirstName = Input::get('FirstName');
	 			$Surname = Input::get('Surname');
	 			$Company = Input::get('Company');
	 			$DOB = Input::get('DOB');
	 			$Street = Input::get('Street');
	 			$Town = Input::get('Town');
	 			$County = Input::get('County');
	 			$Postcode = Input::get('Postcode');
	 			$Phone = Input::get('Phone');
	 			$Email = Input::get('Email');
	 			$password = Input::get('password');

	 			//Activation code
	 			$Code = str_random(60);

	 			//Create user
	 			$create = User::create(array(
	 				'Title' => $Title,
				 	'First_name' => $FirstName,
				 	'Surname' => $Surname,
				 	'Company' => $Surname,
				 	'DOB' => $DOB,
				 	'Street' => $Address,
				 	'Town' => $Town,
				 	'County' => $County,
				 	'Postcode' => $Postcode,
				 	'Phone' => $Phone,
	 				'Email' => $Email,
			 		'password' => Hash::make($password),
			 		'Code' => $Code,
			 		'Active' => 0
			 		));

				if($create) {
					
					//Send activation mail to the provided e-mail
					//Mail::send('emails.auth.activate', array('link' => URL::route('account-activate', $Code), 'First_name' => $FirstName), function($message) use ($create) {
					//	$message->to($create->Email, $create->FirstName)->subject('Activate your account');
					//});

					//Redirect to home page
					return Redirect::route('index');
							//->with('global', 'You have been successfully registered! we have sent you an e-mail to activate your account.');
				}
	 		}
	 	}

	 	public function getLogOut() {
	 		Auth::logout();
	 		return Redirect::route('index');
	 	}

	 	public function getActivate($code) {
	 		$create = User::where('code', '=', $code)->where('active', '=', 0);

	 		if($create->count()) {
	 			$create = $create->first();

	 			//Update user to active state
	 			$create->active = 1;
	 			$create->code = '';

	 			if($create->save()) {
	 				return Redirect::route('index');
	 						->with('global', 'Your account has been activated. You can now log in!');
	 			}
	 	}
	 	return Redirect::route('index');
	 			->with('global', 'We could not activate your account. Please try again later.');
	 		
	 	}
	 	**/

//Need to create this view and routing
	 	public function getChangePassword() {
	 		return View::make('account.password');
	 	}

//Need to create this routing
	 	public function postChangePassword() {
	 		$validator = Validator::make(Input::all(),
	 			array(
	 				'old_password' => 'required',
	 				'password' => 'required|min:6',
	 				'confirm_password' => 'required|same:password'
	 				));
	 		if($validator->fails()) {
	 			//redirect
	 			return Redirect::route('account-change-password')
	 				->withErrors($validator);
	 		} else {
	 			//change password
	 			$customer = User::find(Auth::user()->id);
	 			$old_password = Input::get('old_password');
	 			$password = Input::get('password');

	 			if(Hash::check($old_password, $customer->getAuthPassword())) {
	 				//The provided password matches
	 				$customer->password = Hash::make($password);

	 				if($customer->save()) {
	 					return Redirect::route('dashboard')
	 						->with('global', 'Your password has been changed.');
	 				}
	 			} else {
	 				return Redirect::route('account-change-password')
	 					->with('global', 'Your old password is incorrect!');
	 			}

	 			}

	 		return Redirect::route('account-change-password')
	 			->with('global', 'Your password could not be changed.');

	 	}
**/

	 	public function getUpdatedetail() {
	 		$id = Auth::user()->id;
	 		$user_type = Auth::user()->user_type;

	 		if($user_type == 'Manager')
	 		{
	 			$users = DB::table('managers')->where('user_id', $id)->first();

	 		} else {

	 			if($user_type == 'Engineer')
	 			{
	 				$users = DB::table('engineers')->where('user_id', $id)->first();

	 			} else {
	 				$users = DB::table('customers')->where('user_id', $id)->first();

	 			}
	 		}

	 		return View::make('updatedetail')
	 			->with('users', $users);
	 	}

	 	public function postUpdatedetail() {
	 		$id = Auth::user()->id;
	 		$user_type = Auth::user()->user_type;
	 		$Title = Input::get('Title');
	 		$FirstName = Input::get('FirstName');
	 		$Surname = Input::get('Surname');
	 		$DOB = Input::get('DOB');
	 		$Address = Input::get('Address');
	 		$Town = Input::get('Town');
	 		$County = Input::get('County');
	 		$Postcode = Input::get('Postcode');
	 		$Email = Input::get('Email');
	 		$Tel = Input::get('Tel');
	 		$Mob = Input::get('Mob');

	 		$validator = Validator::make(Input::all(),
	 			array(
	 				'Title' => 'required|In:Mr,Mrs,Miss,Ms,Other',
	 				'FirstName' => 'required|max:20|min:3',
	 				'Surname' => 'required|max:20|min:3',
	 				'DOB' => 'required|max:10|min:6',
	 				'Address' => 'required|max:30|min:5',
	 				'Town' => 'max:30',
	 				'County' => 'max:30',
	 				'Postcode' => 'required|max:10|min:3',
	 				'Email' => 'required|max:50|email', //Email shouldnt be unique when updating
	 				'Tel' => 'max:11',
	 				'Mob' => 'required|max:11'
	 				)
	 			);

	 		if($validator->fails()) {
	 			return Redirect::route('updatedetail')
	 				->withErrors($validator)
	 				->withInput();
	 		} else {
	 			DB::table('users')
	 					->where('id', $id)
	 					->update(array('Email' => $Email));

	 			if($user_type == 'Manager')
	 			{
	 				DB::table('managers')
	 					->where('user_id', $id)
	 					->update(array(
				 			'Title' => $Title,
				 			'First_name' => $FirstName,
			 				'Surname' => $Surname,
			 				'DOB' => $DOB,
			 				'Address' => $Address,
			 				'Town' => $Town,
			 				'County' => $County,
			 				'Postcode' => $Postcode,
			 				'Tel' => $Tel,
			 				'Mob' => $Mob
			 				));
	 			} else {
	 				if($user_type == 'Engineer')
	 				{
		 				DB::table('engineers')
			 				->where('user_id', $id)
		 					->update(array(
					 			'Title' => $Title,
					 			'First_name' => $FirstName,
				 				'Surname' => $Surname,
				 				'DOB' => $DOB,
				 				'Address' => $Address,
				 				'Town' => $Town,
				 				'County' => $County,
				 				'Postcode' => $Postcode,
				 				'Tel' => $Tel,
				 				'Mob' => $Mob
				 				));
	 				} else {
	 					DB::table('customers')
			 				->where('user_id', $id)
		 					->update(array(
					 			'Title' => $Title,
					 			'First_name' => $FirstName,
				 				'Surname' => $Surname,
				 				'DOB' => $DOB,
				 				'Address' => $Address,
				 				'Town' => $Town,
				 				'County' => $County,
				 				'Postcode' => $Postcode,
				 				'Tel' => $Tel,
				 				'Mob' => $Mob
				 				));
	 				}
	 			}
	 		return Redirect::route('dashboard')
	 			->with('global', 'Your detail has been successfully updated.');
	 		}
	 	}
**/


	 }
	}
}
