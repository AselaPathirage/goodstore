<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('/css/bootstrap/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('/css/ad/ad-form.css') }}" type="text/css">
</head>

<body>
    <section class="wizard-section">
        <div class="row no-gutters">

            <div class="">
                <div class="form-wizard">
                    <form action="/advertisement/vehicle" method="post" enctype="multipart/form-data" role="form">
                        @csrf
                        <div class="form-wizard-header">
                            <p>Fill all form field to go next step</p>
                            <ul class="list-unstyled form-wizard-steps clearfix">
                                <li class="active"><span>1</span></li>
                                <li><span>2</span></li>
                                <li><span>3</span></li>

                            </ul>
                        </div>
                        <fieldset class="wizard-fieldset show">
                            <h5>Personal Information</h5>
                            <div class="form-group">
                                <input type="text" value="{{ $vehicle->name ?? '' }}" class="form-control wizard-required" id="name" name="name">
                                <label for="name" class="wizard-form-text-label">Display Name*</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" value="{{ $vehicle->email ?? '' }}" class="form-control wizard-required" id="email" name="email">
                                <label for="email" class="wizard-form-text-label">Email*</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <!-- <div class="form-group">
                                Gender
                                <div class="wizard-form-radio">
                                    <input name="radio-name" id="radio1" type="radio">
                                    <label for="radio1">Male</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="radio-name" id="radio2" type="radio">
                                    <label for="radio2">Female</label>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <input type="number" value="{{ $vehicle->phonenumber ?? '' }}" class="form-control wizard-required" id="phonenumber" name="phonenumber">
                                <label for="phonenumber" class="wizard-form-text-label">Phone number*</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" value="{{ $vehicle->location ?? '' }}" class="form-control wizard-required" id="location" name="location">
                                <label for="location" class="wizard-form-text-label">Location*</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group clearfix">
                                <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                            </div>
                        </fieldset>
                        <fieldset class="wizard-fieldset">
                            <h5>Vehicle Information</h5>
                            <div class="form-group">
                                <input type="text" value="{{ $vehicle->title ?? '' }}" class="form-control wizard-required" id="title" name="title">
                                <label for="title" class="wizard-form-text-label">Title*</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="row">
                                <div class="col-12">Brand*</div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control" name="brand">
                                            <option {{{ (isset($vehicle->brand) && $vehicle->brand == 'Astain Martin') ? "selected=\"selected\"" : "" }}}>Astain Martin</option>
                                            <option {{{ (isset($vehicle->brand) && $vehicle->brand == 'Benz') ? "selected=\"selected\"" : "" }}}>Benz</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" value="{{ $vehicle->model ?? '' }}" class="form-control wizard-required" id="model" name="model">
                                <label for="model" class="wizard-form-text-label">Model*</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" value="{{ $vehicle->edition ?? '' }}" class="form-control wizard" id="edition" name="edition">
                                <label for="edition" class="wizard-form-text-label">Edition*</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <input type="number" value="{{ $vehicle->modelyear ?? '' }}" class="form-control wizard" id="modelyear" name="modelyear">
                                <label for="modelyear" class="wizard-form-text-label">Model year*</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <input type="number" value="{{ $vehicle->mileage ?? '' }}" class="form-control wizard" id="mileage" name="mileage">
                                <label for="mileage" class="wizard-form-text-label">Mileage*</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <input type="number" value="{{ $vehicle->engcapacity ?? '' }}" class="form-control wizard" id="engcapacity" name="engcapacity">
                                <label for="engcapacity" class="wizard-form-text-label">Engine Capacity*</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="row">
                                <div class="col-12">Condition*</div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control" name="condition">
                                            <option {{{ (isset($vehicle->condition) && $vehicle->condition == 'Brand New') ? "selected=\"selected\"" : "" }}}>Brand New</option>
                                            <option {{{ (isset($vehicle->condition) && $vehicle->condition == 'Second Hand') ? "selected=\"selected\"" : "" }}}>Second Hand</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">Body Type*</div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control" name="bodytype">
                                            <option {{{ (isset($vehicle->bodytype) && $vehicle->bodytype == 'Atype') ? "selected=\"selected\"" : "" }}}>Atype</option>
                                            <option {{{ (isset($vehicle->bodytype) && $vehicle->bodytype == 'Btype') ? "selected=\"selected\"" : "" }}}>Btype</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">Vehicle Type*</div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control" name="vehicletype">
                                            <option {{{ (isset($vehicle->vehicletype) && $vehicle->vehicletype == 'Car') ? "selected=\"selected\"" : "" }}}>Car</option>
                                            <option {{{ (isset($vehicle->vehicletype) && $vehicle->vehicletype == 'Bus') ? "selected=\"selected\"" : "" }}}>Bus</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">transmition*</div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control" name="transmition">
                                            <option {{{ (isset($vehicle->transmition) && $vehicle->transmition == 'A') ? "selected=\"selected\"" : "" }}}>A</option>
                                            <option {{{ (isset($vehicle->transmition) && $vehicle->transmition == 'B') ? "selected=\"selected\"" : "" }}}>B</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">Fuel Type*</div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control" name="fueltype">
                                            <option {{{ (isset($vehicle->fueltype) && $vehicle->fueltype == 'Diesel') ? "selected=\"selected\"" : "" }}}>Diesel</option>
                                            <option {{{ (isset($vehicle->fueltype) && $vehicle->fueltype == 'Petrol') ? "selected=\"selected\"" : "" }}}>Petrol</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                Description*
                                <textarea rows="4" cols="50" value="{{ $vehicle->description ?? '' }}" name="description" id="description"></textarea>
                                <label for="description" class="wizard-form-text-label">Description*</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <input type="number" value="{{ $vehicle->price ?? '' }}" class="form-control wizard" id="price" name="price">
                                <label for="price" class="wizard-form-text-label">Price* (RS)</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" value="1" class="form-control wizard" id="negotiable" name="negotiable">
                                <label for="negotiable" class="wizard-form-text-label">negotiable*</label>
                                <div class="wizard-form-error"></div>
                            </div>

                            <div class="form-group clearfix">
                                <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                            </div>
                        </fieldset>
                        <fieldset class="wizard-fieldset">
                            <h5>Uplod your photoes- upto 5</h5>


                            <div class="form-group">
                                <input type="file" {{ (!empty($vehicle->productimg1)) ? "disabled" : ''}} class="form-control-file" name="productimg1" id="productimg1" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                            </div>
                            <div class="wizard-form-error"></div>

                            <!-- <div class="form-group">
                                <div class="form-group">
                                    <input type="file" {{ (!empty($vehicle->productimg2)) ? "disabled" : ''}} class="form-control-file" name="productimg2" id="productimg2" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                                </div>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <input type="file" {{ (!empty($vehicle->productimg3)) ? "disabled" : ''}} class="form-control-file" name="productimg3" id="productimg3" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                                </div>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <input type="file" {{ (!empty($vehicle->productimg4)) ? "disabled" : ''}} class="form-control-file" name="productimg4" id="productimg4" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                                </div>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <input type="file" {{ (!empty($vehicle->productimg5)) ? "disabled" : ''}} class="form-control-file" name="productimg5" id="productimg5" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                                </div>
                                <div class="wizard-form-error"></div>
                            </div> -->

                            <div class="form-group clearfix">
                                <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                <a href="javascript:;" class="form-wizard-submit float-right">Submit</a>
                            </div>

                        </fieldset>
                        <button type="submit" class="btn btn-primary">Create Product</button>

                    </form>
                </div>
            </div>
        </div>
    </section>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif



    <script type="text/javascript" src="/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/ad/ad-form.js') }}"></script>
</body>

</html>