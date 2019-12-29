@extends('layouts.dashbord.app')
@section('content')
        <div class="box w-75 m-auto table-responsive card p-5">
            <form action="{{ route('dashboard.room.store') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label>@lang('site.room_area')</label>
                    <input type="number" name="room_area" class="form-control" value="{{ old('room_area') }}">
                </div>
                <div class="form-group">
                    <label>@lang('site.bathrooms')</label>
                    <input type="number" name="bathrooms" class="form-control" value="{{ old('bathrooms') }}">
                </div>
                <div class="form-group">
                    <label>@lang('site.beds')</label>
                    <input type="number" name="beds" class="form-control" value="{{ old('beds') }}">
                </div>
                <div class="form-group">
                    <label>@lang('site.max_adults')</label>
                    <input type="number" name="max_adults" class="form-control" value="{{ old('max_adults') }}">
                </div>
                <div class="form-group">
                    <label>@lang('site.max_children')</label>
                    <input type="number" name="max_children" class="form-control" value="{{ old('max_children') }}">
                </div>
                <div class="form-group">
                    <label>@lang('site.price')</label>
                    <input type="number" name="price" class="form-control" value="{{ old('price') }}">
                </div>

                <div class="form-group">
                    <label>@lang('site.hotels_Name')</label>
                    <select name="hotel_id" class="form-control">
                        <option>Hotels Name</option>
                        @foreach(\App\Models\Hotel::all() as $hotels)
                            <option value="{{$hotels->id}}">{{$hotels->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>@lang('site.room_type')</label>
                    <select name="room_type_id" class="form-control">
                        <option>Hotels Name</option>
                        @foreach(\App\Models\RoomType::all() as $roomstype)
                            <option value="{{$roomstype->id}}">{{$roomstype->type_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary text-capitalize font-size-4"><i class="fa fa-plus"></i> @lang('site.add')</button>
                </div>
            </form><!-- end of form -->
        </div><!-- end of box body -->
@endsection
