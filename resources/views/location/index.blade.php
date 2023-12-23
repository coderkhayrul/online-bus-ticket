@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Pickup Location</label>
                                <div class="input-group">
                                    <div class="input-group-text"><i class="fa-solid fa-location-dot"></i></div>
                                    <select id="inputState" class="form-select">
                                        <option selected>Select City</option>
                                        <option>Dhaka</option>
                                        <option>Sylet</option>
                                        <option>Barisal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">GOING TO</label>
                                <div class="input-group">
                                    <div class="input-group-text"><i class="fa-solid fa-location-arrow"></i></div>
                                    <select id="inputState" class="form-select">
                                        <option selected>Select City</option>
                                        <option>Dhaka</option>
                                        <option>Sylet</option>
                                        <option>Barisal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">DEPARTING DATE</label>
                                <input type="date" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="col-6">
                                <label for="tripType" class="form-label">Trip Type</label>
                                <select id="tripType" class="form-select">
                                    <option selected disabled>Select Type</option>
                                    <option value="single">Single</option>
                                    <option value="rounded">Rounded</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
