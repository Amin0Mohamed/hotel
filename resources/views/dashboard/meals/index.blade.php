@extends('layouts.dashbord.app')
@section('content')
        <div class="container">
                <div class="row">
                {{--       new         --}}
                 <div class="card w-100 mt-3 rounded-lg" style="border: 2px solid #3bb7e1;">
                                <div class="card-header d-flex justify-content-between">
                                    <h3 class="card-title"> @lang('site.meals')</h3>
                                    <a href="{{route('dashboard.meals.create')}}" class="btn btn-primary add_btn ml-auto">
                                        <i class="fa fa-plus"></i> @lang('site.add')
                                    </a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped text-center">
                                        <thead class="text-capitalize ">
                                        <tr>
                                            <th>#</th>
                                            <th>@lang('site.meal_type')</th>
                                            <th>@lang('site.price')</th>
                                            <th>@lang('site.hotel_id')</th>
                                            <th>@lang('site.edit')</th>
                                            <th>@lang('site.delete')</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($meals as $meal)

                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$meal->meal_type}} </td>
                                                <td>{{$meal->price}} </td>
                                                <td>
                                                    {{\App\Models\Hotel::where('id',$meal->hotel_id)->pluck('title')->first()}}
                                                </td>
                                                <td>
                                                    <a class="btn btn-success" href="{{route('dashboard.meals.edit',['id'=> $meal->id])}}"><i class="fa fa-edit fa-1x"></i></a>
                                                </td>
                                                <td>
                                                    <form action="{{route('dashboard.meals.destroy',[$meal->id])}}" method="post" style="display: inline-block">
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

