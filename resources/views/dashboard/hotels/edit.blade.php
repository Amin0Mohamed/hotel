@extends('layouts.dashbord.app')

@section('content')

            <div class="box w-75 m-auto table-responsive card p-5">

                <div class="box-body">

{{--                    @include('partials._errors')--}}

                    <form action="{{ route('dashboard.hotels.update', [$hotel->id])}}" method="post" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>@lang('site.title')</label>
                            <input type="text" name="title" class="form-control" value="{{ $hotel->title }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.address')</label>
                            <input type="text" name="address" class="form-control" value="{{ $hotel->address }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.description')</label>
                            <input type="text" name="description" class="form-control" value="{{ $hotel->description }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.phone')</label>
                            <input type="text" name="phone" class="form-control" value="{{ $hotel->phone }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.name')</label>
                            <input type="text" name="name" class="form-control" value="{{ $hotel->name }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.mobile')</label>
                            <input type="text" name="mobile" class="form-control" value="{{ $hotel->mobile }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.email')</label>
                            <input type="text" name="email" class="form-control" value="{{ $hotel->email }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.lattitude')</label>
                            <input type="text" name="lattitude" class="form-control" value="{{ $hotel->lattitude }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.longitude')</label>
                            <input type="text" name="longitude" class="form-control" value="{{ $hotel->longitude }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.rating')</label>
                            <input type="number" name="rating" class="form-control" value="{{ $hotel->rating }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.rate_count')</label>
                            <input type="number" name="rate_count" class="form-control" value="{{ $hotel->rate_count }}">
                        </div>

                        <div class="location">
                            <h3 class="text-capitalize text-center font-italic">location</h3>
                            <div class="form-group">
                                <label>@lang('site.countries')</label>
                                <select name="country_id" id="gov" class="form-control">
                                    <option value=""> select countries</option>
                                    @foreach($counteries as $country)
                                        <option value="{{$country->id}}"
                                            @if($country->name == $hotel->city->country->name)
                                                selected
                                            @endif
                                        >
                                            {{$country->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group  d-none" id="city">
                                <label>@lang('site.cities')</label>
                                <select name="city_id" id="cities" class="form-control">
                                    <option>Select cities</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> @lang('site.edit')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

@endsection
