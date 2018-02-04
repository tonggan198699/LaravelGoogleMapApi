@extends('app')

  @section('content')

  <div class="container">
      <div class="panel panel-primary">
          <div class="panel-heading">Address Lookup</div>
              <div class="panel-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                  <input type="text" name="fullname" id="firstname" class="form-control" placeholder="Enter your full name"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                    <input type="text" name="fullname" id="autocomplete" class="form-control" placeholder="Enter your address" onFocus="geolocate()"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="number">Number</label>
                                    <input type="text" name="firstname" id="street_number" class="form-control"/>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="route">Street Name</label>
                                    <input type="text" name="route" id="route" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="locality">City</label>
                                    <input type="text" name="locality" id="locality" class="form-control"/>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="administrative_area_level_1">State/County</label>
                                    <input type="text" name="administrative_area_level_1" id="administrative_area_level_1" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="country">Country</label>
                                    <input type="text" name="country" id="country" class="form-control"/>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="postal_code">Zip Code/Post Code</label>
                                    <input type="text" name="postal_code" id="postal_code" class="form-control"/>
                            </div>
                        </div>
                    </div>

              </div>
      </div>
  </div>

  @endsection
