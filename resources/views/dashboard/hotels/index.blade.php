@extends('layouts.dashbord.app')
@section('content')
        <div class="container">
                <div class="row">
                {{--       new         --}}
                 <div class="card w-100 mt-3 rounded-lg" style="border: 2px solid #3bb7e1;">
                                <div class="card-header d-flex justify-content-between">
                                    <h3 class="card-title"> @lang('site.hotels')</h3>
                                    <a href="{{route('dashboard.hotels.create')}}" class="btn btn-primary add_btn ml-auto">
                                        <i class="fa fa-plus"></i> @lang('site.add')
                                    </a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body overflow-auto">
                                    <table id="example1" class="overflow-auto table table-bordered table-striped text-center">
                                        <thead class="text-capitalize ">
                                        <tr>
                                            <th>id</th>
                                            <th>@lang('site.title')</th>
                                            <th>@lang('site.address')</th>
                                            <th>@lang('site.description')</th>
                                            <th>@lang('site.phone')</th>
                                            <th>@lang('site.name')</th>
                                            <th>@lang('site.mobile')</th>
                                            <th>@lang('site.email')</th>
                                            <th>@lang('site.lattitude')</th>
                                            <th>@lang('site.longitude')</th>
                                            <th>@lang('site.rating')</th>
                                            <th>@lang('site.rate_count')</th>
                                            <th>@lang('site.city_id')</th>
                                            <th>@lang('site.edit')</th>
                                            <th>@lang('site.delete')</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($hotels as $hotel)

                                            <tr>
                                                <td>{{$hotel->id}}</td>
                                                <td>{{$hotel->title}} </td>
                                                <td>{{$hotel->address}} </td>
                                                <td>{{$hotel->description}} </td>
                                                <td>{{$hotel->phone}} </td>
                                                <td>{{$hotel->name}} </td>
                                                <td>{{$hotel->mobile}} </td>
                                                <td>{{$hotel->email}} </td>
                                                <td>{{$hotel->lattitude}} </td>
                                                <td>{{$hotel->longitude}} </td>
                                                <td>{{$hotel->rating}} </td>
                                                <td>{{$hotel->rate_count}} </td>
                                                <td>{{$hotel->city_id}} </td>
                                                    <td>
                                                        <a class="btn btn-success" href="{{route('dashboard.hotels.edit',['id'=> $hotel->id])}}"><i class="fa fa-edit fa-1x"></i></a>
                                                    </td>
                                                    <td>
                                                        <form action="{{route('dashboard.hotels.destroy',[$hotel->id])}}" method="post" style="display: inline-block">
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

