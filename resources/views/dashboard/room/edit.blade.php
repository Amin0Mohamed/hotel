@extends('layouts.dashbord.app')

@section('content')

            <div class="box w-75 m-auto table-responsive card p-5">

                <div class="box-body">

{{--                    @include('partials._errors')--}}

                    <form action="{{ route('dashboard.room.update', [$room->id])}}" method="post" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>@lang('site.room_area')</label>
                            <input type="text" name="room_area" class="form-control" value="{{ $room->room_area }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.bathrooms')</label>
                            <input type="text" name="bathrooms" class="form-control" value="{{ $room->bathrooms }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.beds')</label>
                            <input type="text" name="beds" class="form-control" value="{{ $room->beds }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.max_adults')</label>
                            <input type="text" name="max_adults" class="form-control" value="{{$room->max_adults }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.max_children')</label>
                            <input type="text" name="max_children" class="form-control" value="{{ $room->max_children }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.price')</label>
                            <input type="text" name="price" class="form-control" value="{{ $room->price }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.hotels_Name')</label>
                            <select name="hotel_id" class="form-control">
                                @foreach($hotel as $h)
                                    <option value="{{ $h->id}}"
                                            @if($h->title == $room->hotel->title) selected @endif
                                    >
                                        {{$h->title}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>@lang('site.room_type_id')</label>
                            <select name="room_type_id" class="form-control">
                                <option>Hotels Name</option>
                                @foreach(\App\Models\RoomType::all() as $roomstype)
                                    <option value="{{$roomstype->id}}"
                                            @if($roomstype->type_name == $room->roomsType->type_name)
                                            selected
                                        @endif

                                    >
                                        {{$roomstype->type_name}}
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
