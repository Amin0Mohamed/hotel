@extends('layouts.dashbord.app')
@section('content')
        <div class="container">
                <div class="row">
                {{--       new         --}}
                 <div class="card w-100 mt-3 rounded-lg" style="border: 2px solid #3bb7e1;">
                                <div class="card-header d-flex justify-content-between">
                                    <h3 class="card-title"> @lang('site.room_types')</h3>
                                    <a href="{{route('dashboard.room_types.create')}}" class="btn btn-primary add_btn ml-auto">
                                        <i class="fa fa-plus"></i> @lang('site.add')
                                    </a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped text-center">
                                        <thead class="text-capitalize ">
                                        <tr>
                                            <th>#</th>
                                            <th>@lang('site.type_name')</th>
                                            <th>@lang('site.description')</th>
                                            <th>@lang('site.edit')</th>
                                            <th>@lang('site.delete')</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($rooms as $city)

                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$city->type_name}} </td>
                                                <td>{{$city->description}} </td>
                                                <td>
                                                    <a class="btn btn-success" href="{{route('dashboard.room_types.edit',['id'=> $city->id])}}"><i class="fa fa-edit fa-1x"></i></a>
                                                </td>
                                                <td>
                                                    <form action="{{route('dashboard.room_types.destroy',[$city->id])}}" method="post" style="display: inline-block">
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

