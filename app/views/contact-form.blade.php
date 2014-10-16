<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=yes">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}"> 

    <title>Contact Form</title>

  </head>

  <body>

    <div class="container">

      <div class="row">
        <div class="col-md-6 col-md-offset-3">

          <!--Display if the session contains global message-->
          @if(Session::has('global'))
          <p class="well">{{ Session::get('global') }}</p>
          @endif

          <!--Start of panel-->
          <div class="panel panel-info">
            <!--Panel heading-->
            <div class="panel-heading">
              <h3 class="panel-title">Contact form</h3>
            </div>
            <!--Panel body-->
            <div class="panel-body">
              <!--Contact form-->
              <form role="form" action="{{ URL::route('contact-post') }}" method="post">

                <div class="form-group">
                  <label for="inputFirstName">First name<span class='glyphicon glyphicon-asterisk'></span>:</label>
                  <input type="text" class="form-control" id="inputFirstName" name="inputFirstName"{{ (Input::old('inputFirstName')) ? ' value="' . e(Input::old('inputFirstName')) . '"' : '' }} placeholder="First name">
                  <!--Determining if errors exist for this field-->
                  @if($errors->has('inputFirstName'))
                    <!--Retrieving the first error message for this field-->
                    <p class="text-danger">{{ $errors->first('inputFirstName') }}
                      <!--Button to hide the error message-->
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    </p>
                  @endif
                </div>

                <div class="form-group">
                  <label for="inputLastName">Last name<span class='glyphicon glyphicon-asterisk'></span>:</label>
                  <input type="text" class="form-control" id="inputLastName" name="inputLastName"{{ (Input::old('inputLastName')) ? ' value="' . e(Input::old('inputLastName')) . '"' : '' }} placeholder="Last name">
                  @if($errors->has('inputLastName'))
                      <p class="text-danger">{{ $errors->first('inputLastName') }}
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      </p>
                  @endif
                </div>

                <div class="form-group">
                  <label for="inputEmail">E-mail<span class='glyphicon glyphicon-asterisk'></span>:</label>
                  <input type="email" class="form-control" id="inputEmail" name="inputEmail"{{ (Input::old('inputEmail')) ? ' value="' . e(Input::old('inputEmail')) . '"' : '' }} placeholder="E-mail">
                  @if($errors->has('inputEmail'))
                      <p class="text-danger">{{ $errors->first('inputEmail') }}
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      </p>
                  @endif
                </div>

                <div class="form-group">
                  <label for="inputTel">Telephone number<span class='glyphicon glyphicon-asterisk'></span>:</label>
                  <input type="text" class="form-control" id="inputTel" name="inputTel"{{ (Input::old('inputTel')) ? ' value="' . e(Input::old('inputTel')) . '"' : '' }} placeholder="Telephone number">
                  @if($errors->has('inputTel'))
                      <p class="text-danger">{{ $errors->first('inputTel') }}
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      </p>
                  @endif
                </div>

                <div class="form-group">
                  <label for="inputBusiness">Business name:</label>
                  <input type="text" class="form-control" id="inputBusiness" name="inputBusiness"{{ (Input::old('inputBusiness')) ? ' value="' . e(Input::old('inputBusiness')) . '"' : '' }} placeholder="Business name">
                  @if($errors->has('inputBusiness'))
                      <p class="text-danger">{{ $errors->first('inputBusiness') }}
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      </p>
                  @endif
                </div>

                <div class="form-group">
                  <label for="inputMessage">Message:</label>
                  <textarea type="text" class="form-control" rows="3" id="inputMessage" name="inputMessage" placeholder="Your message">{{ Input::old('inputMessage') }}</textarea>
                  @if($errors->has('inputMessage'))
                      <p class="text-danger">{{ $errors->first('inputMessage') }}
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      </p>
                  @endif
                </div>

                <!--Checkbox for newsletter subscription-->
                <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="inputSubscription" value="1" checked>Subscribe me to the newsletter
                      </label>
                  </div>
                </div>

                <hr>
                <div class="form-group">
                  <button type="submit" class="btn btn-default">Submit</button>
                  <!--Form token-->
                  {{ Form::token() }}
                </div>
              </form>
              <!--Endo of contact form-->
            </div>

            <!--Panel footer-->
            <div class="panel-footer">
              <p class="text-right"><span class='glyphicon glyphicon-asterisk'></span> = Required field</p>
            </div>
          </div>
          <!--End of panel-->
        </div>
        <!--End of col-md-6 col-md-offset-3-->
      </div>
      <!--End of row-->
    </div>
    <!--End of container-->


    <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
