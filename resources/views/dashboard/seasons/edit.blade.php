@extends('layouts.dashbord.app')

@section('content')

            <div class="box w-75 m-auto table-responsive card p-5">

                <div class="box-body">

                    <form action="{{ route('dashboard.seasons.update', [$season->id] )}}" method="post" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>@lang('site.season_type')</label>
                            <input type="text" name="season_type" class="form-control" value="{{ $season->season_type }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.season_price')</label>
                            <input type="number" name="season_price" class="form-control" value="{{ $season->season_price}}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.hotels_Name')</label>
                            <select name="hotel_id" class="form-control">
                                @foreach($hotel as $h)
                                    <option value="{{ $h->id}}"
                                            @if($h->title == $season->hotel->title) selected @endif
                                    >
                                        {{$h->title}}
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
