@extends('layouts.dashbord.app')
@section('content')
        <div class="container">
                <div class="row">
                {{--       new         --}}
                 <div class="card w-100 mt-3 rounded-lg" style="border: 2px solid #3bb7e1;">
                                <div class="card-header d-flex justify-content-between">
                                    <h3 class="card-title"> @lang('site.rooms')</h3>
                                    <a href="{{route('dashboard.room.create')}}" class="btn btn-primary add_btn ml-auto">
                                        <i class="fa fa-plus"></i> @lang('site.add')
                                    </a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body overflow-auto">
                                    <table id="example1" class="table table-bordered table-striped text-center">
                                        <thead class="text-capitalize ">
                                        <tr>
                                            <th>#</th>
                                            <th>@lang('site.room_area')</th>
                                            <th>@lang('site.bathrooms')</th>
                                            <th>@lang('site.beds')</th>
                                            <th>@lang('site.max_adults')</th>
                                            <th>@lang('site.max_children')</th>
                                            <th>@lang('site.price')</th>
                                            <th>@lang('site.hotel_id')</th>
                                            <th>@lang('site.room_type_id')</th>
                                            <th>@lang('site.edit')</th>
                                            <th>@lang('site.delete')</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($rooms as $room)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$room->room_area}} </td>
                                                <td>{{$room->bathrooms}}</td>
                                                <td>{{$room->beds}} </td>
                                                <td>{{$room->max_adults}}</td>
                                                <td>{{$room->max_children}} </td>
                                                <td>{{$room->price}}</td>
                                                <td>
                                                    {{\App\Models\Hotel::where('id',$room->hotel_id)->pluck('title')->first()}}
                                                </td>
                                                <td>
                                                    {{\App\Models\RoomType::where('id',$room->room_type_id)->pluck('type_name')->first()}}
                                                </td>
                                                <td>
                                                    <a class="btn btn-success" href="{{route('dashboard.room.edit',['id'=> $room->id
                                                    ])}}"><i class="fa fa-edit fa-1x"></i></a>
                                                </td>
                                                <td>
                                                    <form action="{{route('dashboard.room.destroy',[$room->id])}}" method="post" style="display: inline-block">
                                                        {{csrf_field()}}
                                                        {{method_field('delete')}}
                                                        <button type="submit" class="delete btn btn-danger"><i class="fa fa-trash fa-1x"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                            </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

                </div><!-- end of row -->
        </div>
@endsection

