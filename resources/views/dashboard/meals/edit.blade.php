@extends('layouts.dashbord.app')

@section('content')

            <div class="box w-75 m-auto table-responsive card p-5">

                <div class="box-body">

                    <form action="{{ route('dashboard.meals.update', [$meal->id] )}}" method="post" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>@lang('site.meal_type')</label>
                            <input type="text" name="meal_type" class="form-control" value="{{ $meal->meal_type }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.price')</label>
                            <input type="number" name="price" class="form-control" value="{{ $meal->price}}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.hotels_Name')</label>
                            <select name="hotel_id" class="form-control">
                                @foreach($hotel as $h)
                                    <option value="{{ $h->id}}"
                                            @if($h->title == $meal->hotel->title) selected @endif
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
