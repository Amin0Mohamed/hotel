@extends('layouts.dashbord.app')

@section('content')

            <div class="box w-75 m-auto table-responsive card p-5">

                <div class="box-body">

{{--                    @include('partials._errors')--}}

                    <form action="{{ route('dashboard.cities.update', [$city->id])}}" method="post" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>@lang('site.name')</label>
                            <input type="text" name="name" class="form-control" value="{{ $city->name }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.countries')</label>
                            <select name="country_id" class="form-control">
                                <option value=""> select countries</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}"
                                        @if($country->name == $city->country->name)
                                            selected
                                        @endif
                                    >
                                        {{$country->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> @lang('site.edit')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

@endsection
