@extends('layouts.master')
@section('css')
@endsection

@section('content')
<div class="content-wrapper" ng-controller="driver_management">
  <section class="content-header">
    <h1> Add Vehicle Model </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url(LOGIN_USER_TYPE.'/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ url(LOGIN_USER_TYPE.'/vehicle_model') }}">Vehicle Model</a></li>
      <li class="active">Add</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-8 col-sm-offset-2 ne_ed">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Add Vehicle Model Form</h3>
          </div>
          {!! Form::open(['url' => LOGIN_USER_TYPE.'/add-vehicle_model', 'class' => 'form-horizontal','files' => true]) !!}
          <div class="box-body ed_bld">
            <span class="text-danger">(*)Fields are Mandatory</span>
            <div class="form-group">
              <label for="input_status" class="col-sm-3 control-label">Vehicle Make<em class="text-danger">*</em></label>
              <div class="col-sm-6">
                {!! Form::select('vehicle_make_id',$make, '', ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']) !!}
                <span class="text-danger">{{ $errors->first('vehicle_make_id') }}</span>
              </div>
            </div>
            <div class="form-group">
              <label for="input_first_name" class="col-sm-3 control-label">Vehicle Model Name<em class="text-danger">*</em></label>
              <div class="col-sm-6">
                {!! Form::text('model_name', '', ['class' => 'form-control', 'id' => 'input_make_name', 'placeholder' => 'Vehicle Model Name']) !!}
                <span class="text-danger">{{ $errors->first('model_name') }}</span>
              </div>
            </div>
            
            <div class="form-group">
              <label for="input_status" class="col-sm-3 control-label">Status<em class="text-danger">*</em></label>
              <div class="col-sm-6">
                {!! Form::select('status', array('Active' => 'Active', 'Inactive' => 'Inactive'), '', ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']) !!}
                <span class="text-danger">{{ $errors->first('status') }}</span>
              </div>
            </div>
          </div>
          <div class="box-footer">
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