@extends('layouts.master')

@section('css')
   
@endsection

@section('content')
<div class="content-wrapper" ng-controller="driver_management" ng-init="login_user_type = '{{ LOGIN_USER_TYPE }}'; driver_doc = {{ $driver_doc }}; errors = {{ json_encode($errors->getMessages()) }};">
	<section class="content-header">
		<h1 style="display: inline-block; "> Add Driver </h1>
		<ol style=" float: right;" class="breadcrumb">
			<li>
				<a href="{{ url(LOGIN_USER_TYPE.'/dashboard') }}"> <i class="fa fa-dashboard"> </i> Home </a>
			</li>
			<li>
				<a href="{{ url(LOGIN_USER_TYPE.'/driver') }}">/ Drivers </a>
			</li>
			<li class="active">/ Add </li>
		</ol>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-8 offset-2">
				<div class="card card-danger">
					<div class="card-header shadow p-3 mb-5 bg-body rounded with-border">
						<h3 class="card-title">Add Driver Form</h3>
					</div>
					{!! Form::open(['url' => LOGIN_USER_TYPE.'/add_driver', 'class' => 'form-horizontal','files' => true]) !!}
					{{ Form::hidden('user_id', '', array('id'=>'user_id')) }}
					<div class="card-body ed_bld">
						<span class="text-danger">(*)Fields are Mandatory</span>
						<div class="form-group">
							<label for="input_first_name" class="col-sm-3 control-label">First Name<em class="text-danger">*</em></label>
							<div class="col-sm-8">
								{!! Form::text('first_name',  old('first_name'), ['class' => 'form-control', 'id' => 'input_first_name', 'placeholder' => 'First Name']) !!}
								<span class="text-danger">{{ $errors->first('first_name') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_last_name" class="col-sm-3 control-label">Last Name<em class="text-danger">*</em></label>
							<div class="col-sm-8">
								{!! Form::text('last_name', old('last_name'), ['class' => 'form-control', 'id' => 'input_last_name', 'placeholder' => 'Last Name']) !!}
								<span class="text-danger">{{ $errors->first('last_name') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_email" class="col-sm-3 control-label">Email<em class="text-danger">*</em></label>
							<div class="col-sm-8">
								{!! Form::text('email', old('email'), ['class' => 'form-control', 'id' => 'input_email', 'placeholder' => 'Email']) !!}
								<span class="text-danger">{{ $errors->first('email') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_password" class="col-sm-3 control-label">Password<em class="text-danger">*</em></label>
							<div class="col-sm-8">
								{!! Form::password('password', ['class' => 'form-control', 'id' => 'input_password', 'placeholder' => 'Password']) !!}
								<span class="text-danger">{{ $errors->first('password') }}</span>
							</div>
						</div>
						{!! Form::hidden('user_type','Driver', ['class' => 'form-control', 'id' => 'user_type', 'placeholder' => 'Select']) !!}
						<div class="form-group">
							<label for="input_country_code" class="col-sm-3 control-label">Country Code<em class="text-danger">*</em></label>
							<div class="col-sm-8">
								<select class ='form-control' id = 'input_country_code' name='country_code'>
									<option value=""> Select </option>
									@foreach($country_code_option as $country_code)
									<option value="{{@$country_code->phone_code}}" {{ ($country_code->id == old('country_id')) ? 'Selected' : ''}} data-id="{{ $country_code->id }}">{{$country_code->long_name}}</option>
									@endforeach
									{!! Form::hidden('country_id', old('country_id'), array('id'=>'country_id')) !!}
								</select>
								<span class="text-danger">{{ $errors->first('country_code') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_status" class="col-sm-3 control-label">Mobile Number <em class="text-danger">*</em></label>
							<div class="col-sm-8">
								{!! Form::text('mobile_number', old('mobile_number'), ['class' => 'form-control', 'id' => 'mobile_number', 'placeholder' => 'Mobile Number']) !!}
								<span class="text-danger">{{ $errors->first('mobile_number') }}</span>
							</div>
						</div>
						@if (LOGIN_USER_TYPE!='company')
						<div class="form-group">
							<label for="input_company" class="col-sm-3 control-label">Company Name<em class="text-danger">*</em></label>
							<div class="col-sm-8">
								{!! Form::select('company_name', $company, 1, ['class' => 'form-control', 'id' => 'input_company_name', 'placeholder' => 'Select']) !!}
								<span class="text-danger">{{ $errors->first('company_name') }}</span>
							</div>
						</div>
						@endif
						<div class="form-group">
							<label for="input_status" class="col-sm-3 control-label">Status<em class="text-danger">*</em></label>
							<div class="col-sm-8">
								{!! Form::text('status', 'Car_details', ['class' => 'form-control', 'id' => 'input_status', 'readonly']) !!}
							</div>
						</div>
						<div class="form-group">
							<label for="input_status" class="col-sm-3 control-label">Address Line 1 </label>
							<div class="col-sm-8">
								{!! Form::text('address_line1', old('address_line1'), ['class' => 'form-control', 'id' => 'address_line1', 'placeholder' => 'Address Line 1']) !!}
								<span class="text-danger">{{ $errors->first('address_line1') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_status" class="col-sm-3 control-label">Address Line 2 </label>
							<div class="col-sm-8">
								{!! Form::text('address_line2', old('address_line2'), ['class' => 'form-control', 'id' => 'address_line2', 'placeholder' => 'Address Line 2']) !!}
								<span class="text-danger">{{ $errors->first('address_line2') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_status" class="col-sm-3 control-label">City </label>
							<div class="col-sm-8">
								{!! Form::text('city', old('city'), ['class' => 'form-control', 'id' => 'city', 'placeholder' => 'City']) !!}
								<span class="text-danger">{{ $errors->first('city') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_status" class="col-sm-3 control-label">State</label>
							<div class="col-sm-8">
								{!! Form::text('state', old('state'), ['class' => 'form-control', 'id' => 'state', 'placeholder' => 'State']) !!}
								<span class="text-danger">{{ $errors->first('state') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_status" class="col-sm-3 control-label">Postal Code </label>
							<div class="col-sm-8">
								{!! Form::text('postal_code', old('postal_code'), ['class' => 'form-control', 'id' => 'postal_code', 'placeholder' => 'Postal Code']) !!}
								<span class="text-danger">{{ $errors->first('postal_code') }}</span>
							</div>
						</div>
						<span class="loading" id="document_loading" style="padding-left: 80%;display: inline-block;height: 50px;" ng-if="driver_doc==''"></span>
						<div class="form-group" ng-repeat="doc in driver_doc" ng-cloak ng-if="driver_doc">
							<label class="col-sm-3 control-label">@{{doc.document_name}} <em class="text-danger">*</em></label>
							<div class="col-sm-8">
								<input type="file" name="file_@{{doc.id}}" class="form-control">
								<span class="text-danger">@{{ errors['file_'+doc.id][0] }}</span>
							</div>
							</br></br>
							<label class="col-sm-3 control-label" ng-if="doc.expiry_required=='1'">Expire Date <em class="text-danger">*</em></label>
							<div class="col-sm-8" ng-if="doc.expiry_required=='1'">
								<input type="text" min="{{ date('Y-m-d') }}" name="expired_date_@{{doc.id}}" class="form-control document_expired" placeholder="Expire date" autocomplete="off">
								<span class="text-danger">@{{ errors['expired_date_'+doc.id][0] }}</span>
							</div>
							<label class="col-sm-3 control-label"> @{{doc.document_name}} Status<em class="text-danger">*</em></label>
							<div class="col-sm-8">
								<select class ='form-control' name='@{{doc.doc_name}}_status'>
									<option value="0" ng-selected="doc.status==0">Pending</option>
									<option value="1" ng-selected="doc.status==1">Approved</option>
									<option value="2" ng-selected="doc.status==2">Rejected</option>
								</select>
							</div>
						</div>
	
						@if(LOGIN_USER_TYPE!='company' || Auth::guard('company')->user()->id != 1)
						<span class="bank_detail">
							<div class="form-group">
								<label for="input_status" class="col-sm-3 control-label">Account Holder Name <em class="text-danger">*</em></label>
								<div class="col-sm-8">
									{!! Form::text('account_holder_name', old('account_holder_name'), ['class' => 'form-control', 'id' => 'account_holder_name', 'placeholder' => 'Account Holder Name']) !!}
									<span class="text-danger">{{ $errors->first('account_holder_name') }}</span>
								</div>
							</div>
							<div class="form-group">
								<label for="input_status" class="col-sm-3 control-label">Account Number <em class="text-danger">*</em></label>
								<div class="col-sm-8">
									{!! Form::text('account_number', old('account_number'), ['class' => 'form-control', 'id' => 'account_number', 'placeholder' => 'Account Number']) !!}
									<span class="text-danger">{{ $errors->first('account_number') }}</span>
								</div>
							</div>
							<div class="form-group">
								<label for="input_status" class="col-sm-3 control-label">Name of Bank <em class="text-danger">*</em></label>
								<div class="col-sm-8">
									{!! Form::text('bank_name', old('bank_name'), ['class' => 'form-control', 'id' => 'bank_name', 'placeholder' => 'Name of Bank']) !!}
									<span class="text-danger">{{ $errors->first('bank_name') }}</span>
								</div>
							</div>
							<div class="form-group">
								<label for="input_status" class="col-sm-3 control-label">Bank Location <em class="text-danger">*</em></label>
								<div class="col-sm-8">
									{!! Form::text('bank_location', old('bank_location'), ['class' => 'form-control', 'id' => 'bank_location', 'placeholder' => 'Bank Location']) !!}
									<span class="text-danger">{{ $errors->first('bank_location') }}</span>
								</div>
							</div>
							<div class="form-group">
								<label for="input_status" class="col-sm-3 control-label">BIC/SWIFT Code <em class="text-danger">*</em></label>
								<div class="col-sm-8">
									{!! Form::text('bank_code', old('bank_code'), ['class' => 'form-control', 'id' => 'bank_code', 'placeholder' => 'BIC/SWIFT Code']) !!}
									<span class="text-danger">{{ $errors->first('bank_code') }}</span>
								</div>
							</div>
						</span>
						@endif
					</div>
					<div class="card-footer shadow-sm bg-body rounded">
						<button type="submit" class="btn btn-info pull-right" name="submit" value="submit">Submit</button>
						<button type="submit" class="btn btn-default pull-left" name="cancel" value="cancel">Cancel</button>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</section>
</div>
@endsection
