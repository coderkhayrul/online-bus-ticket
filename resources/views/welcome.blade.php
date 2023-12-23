@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">Welcome To Online Ticket Platform</div>
                    <div class="card-body">
                        <form class="row g-3" method="POST" action="">
                            @csrf
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">PICKUP LOCATION <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-text"><i class="fa-solid fa-location-dot"></i></div>
                                    <select id="inputState" class="form-select">
                                        <option selected>Select City</option>
                                        <option>Dhaka to Cox's Bazar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label"><span class="text-danger">*</span>DROPOFF
                                    LOCATION</label>
                                <div class="input-group">
                                    <div class="input-group-text"><i class="fa-solid fa-location-arrow"></i></div>
                                    <select id="inputState" class="form-select">
                                        <option selected>Select City</option>
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="start_date" class="form-label">Departure Date <span
                                        class="text-danger">*</span></label>
                                <input name="start_date" type="date" class="form-control" id="start_date">
                            </div>
                            <div class="col-6">
                                <label for="tripType" class="form-label">Trip Type</label>
                                <select name="trip_type" id="tripType" class="form-select">
                                    <option value="round" selected>round-trip</option>
                                </select>
                            </div>
                            <div class="col-12 text-center mt-5">
                                <button type="submit" class="btn btn-lg btn-primary">Search Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
