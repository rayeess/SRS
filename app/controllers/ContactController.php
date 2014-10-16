<?php

class ContactController extends BaseController {

	public function getContact()
	{
		//Returns the contact-form view
		return View::make('contact-form');
	}

	public function postContact()
	{
		//Form validation
		$validator = Validator::make(Input::all(),
	 			array(
	 				//Validation parameters
	 				'inputFirstName' => 'required|max:20|min:3|alpha', //Only alphabets
	 				'inputLastName' => 'required|max:20|min:3|alpha', //Only alphabets
	 				'inputEmail' => 'required|max:50|email', //built-in rule to check if it is an actual e-mail
	 				'inputTel' => 'required|digits:11', //Only eleven numbers
	 				'inputBusiness' => 'alpha_dash', //May have alpha-numeric characters, as well as dashes and underscores
	 				'inputMessage' => 'max:250', //Maximum 250 characters
	 				)
	 			);

		if($validator->fails()) {
			/*
			| Redirect the user back to the contact-form if validation fails
			*/
			return Redirect::route('contact')
	 				->withErrors($validator) //Takes all the errors from the validator and passes it to this page
	 				->withInput(); //Allows access to the input that has already been sent with the request
		} else {
			/*
			| Submit the form if validation passes
			|
			| Gathering the variables that needs to be inserted into the database
			*/
			$FirstName = Input::get('inputFirstName');
	 		$LastName = Input::get('inputLastName');
	 		$Email = Input::get('inputEmail');
			$Tel = Input::get('inputTel');
	 		$Business = Input::get('inputBusiness');
			$Message = Input::get('inputMessage');
			$Subscription = Input::has('inputSubscription') ? true : false;

			/*
			| Insert the variables into the messages table
			*/
			$insert = DB::table('messages')->insert(array(
	 			'firstname' => $FirstName,
		 		'lastname' => $LastName,
		 		'email' => $Email,
		 		'tel' => $Tel,
			 	'business' => $Business,
			 	'message' => $Message,
			 	'subscription' => $Subscription
			 	));

	 		if($insert) {
	 			/*
				| Send e-mail to the user if the variables are inserted
				*/
				Mail::send('emails.usermail', array('FirstName' => $FirstName, 
					'LastName' => $LastName, 
					'Email' => $Email,
					'Tel' => $Tel,
					'Business' => $Business,
					'Message' => $Message),
				function($message) 
					use ($FirstName, $LastName, $Email, $Tel, $Business, $Message) {
						$message->to($Email, $FirstName, $LastName, $Email, $Tel, $Business, $Message)
					->subject('Thanks for your enquiry');
				});

				/*
				| Send e-mail to the owner if the variables are inserted
				*/
				Mail::send('emails.ownermail', array('FirstName' => $FirstName, 
					'LastName' => $LastName, 
					'Email' => $Email,
					'Tel' => $Tel,
					'Business' => $Business,
					'Message' => $Message),
				function($message) 
					use ($FirstName, $LastName, $Email, $Tel, $Business, $Message) {
						$message->to('p.rayees@gmail.com', $FirstName, $LastName, $Email, $Tel, $Business, $Message)
					->subject('Customer enquiry');
				});

				/*
				| Redirect the user back to the contact-form and display a message
				*/
	        	return Redirect::Route('contact')
	        		->with('global', 'Thank you for your feedback.');

	 		} else {
	 			/*
				| Error message just in case something goes wrong
				*/
	 			die('Sorry, Please try again at a later time');
	 		}
		}
	}

}
