@extends('layouts.dashbord.app')
@section('content')



        <div class="box w-75 m-auto table-responsive card p-5">
            <form action="{{ route('dashboard.room_types.store') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label>@lang('site.type_name')</label>
                    <input type="text" name="type_name" class="form-control" value="{{ old('type_name') }}">
                </div>
                <div class="form-group">
                    <label>@lang('site.description')</label>
                    <input type="text" name="description" class="form-control" value="{{ old('description') }}">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary text-capitalize font-size-4"><i class="fa fa-plus"></i> @lang('site.add')</button>
                </div>
            </form><!-- end of form -->
        </div><!-- end of box body -->



@endsection
