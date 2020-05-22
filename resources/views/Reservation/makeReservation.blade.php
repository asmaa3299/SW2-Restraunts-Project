@extends('layouts.layout')
@if (Auth::guest())
    <section class="reservation">
        <div class="row justify-content-center">
            <h3 class="col-4 reserve-header" style="margin-top: 50px;" >You Must Login First!</h3>
            <a class= "col-9"href="/" style="margin-bottom: 300px;">back to homepage</a>
        </div>
    </section>
@else
    <section class="reservation">
        <div class="row justify-content-center">
            <h3 class="col-4 reserve-header">Reserve Your best table from here</h3>
        </div>
        <div class="container">
    <div class="row justify-content-center reserve">
        <div class="col-md-8 offset-4">
            <div class="form-group">
                    <form method="POST" action="/Reservation">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('guests') ? ' has-error' : '' }}">
                            <label for="guests" class="col-md-4 control-label">Number of guests:</label>

                            <div class="col-md-6">
                                <input id="guests" type="number" class="form-control" name="guests" required autofocus>

                                @if ($errors->has('guests'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('guests') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('view') ? ' has-error' : '' }}">
                            <label for="view" class="col-md-4 control-label">Choose Table View:</label>

                            <div class="col-md-6">
                                <select class="form-control" id="view" name="view" required>
                                    Table View
                                    <option value="Nile View">Nile View</option>
                                    <option value="Outdoor">Outdoor</option>
                                    <option value="Indoor">Indoor</option>
                                </select>
                            </div>
                                @if ($errors->has('view'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('view') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label" for="date">Select Date:</label>
                            <div class="col-md-6">
                                <input type="date" id="date" class="form-control" name="date" required autofocus />
                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('starttime') ? ' has-error' : '' }} ">
                            <label class="col-md-4 control-label" for="starttime">Start Time:</label>
                            <div class="col-md-6">
                                <input type="time" id="starttime" class="form-control" name="starttime" required autofocus />
                                @if ($errors->has('starttime'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('starttime') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('endtime') ? ' has-error' : '' }} ">
                            <label class="col-md-4 control-label" for="endtime">End Time:</label>
                            <div class="col-md-6">
                                <input type="time" id="endtime" class="form-control" name="endtime" required autofocus />
                                @if ($errors->has('endtime'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('endtime') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-7 col-md-offset-4">
                                <button type="submit" class="btn col-4 form-btn">
                                    Confirm Reserve
                                </button>
                            </div>
                        </div>
                    </form>

    </section>

    @endauth