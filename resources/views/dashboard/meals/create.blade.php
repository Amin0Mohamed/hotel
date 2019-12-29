@extends('layouts.dashbord.app')
@section('content')



        <div class="box w-75 m-auto table-responsive card p-5">
            <form action="{{ route('dashboard.meals.store') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label>@lang('site.meal_type')</label>
                    <input type="text" name="meal_type" class="form-control" value="{{ old('meal_type') }}">
                </div>
                <div class="form-group">
                    <label>@lang('site.price')</label>
                    <input type="number" name="price" class="form-control" value="{{ old('price') }}">
                </div>
                <div class="form-group">
                    <label>@lang('site.hotels_name')</label>
                    <select name="hotel_id" class="form-control">
{{--                        <option>Hotels Name</option>--}}
                        @foreach(\App\Models\Hotel::all() as $hotel)
                            <option value="{{$hotel->id}}">{{$hotel->title}}</option>
                        @endforeach
                    </select>
                </div>



                <div class="form-group">
                    <button type="submit" class="btn btn-primary text-capitalize font-size-4"><i class="fa fa-plus"></i> @lang('site.add')</button>
                </div>
            </form><!-- end of form -->
        </div><!-- end of box body -->



@endsection
