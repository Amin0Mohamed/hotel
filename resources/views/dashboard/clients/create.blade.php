@extends('layouts.dashbord.app')
@section('content')



    <div class="box w-75 m-auto table-responsive card p-5">
        <form action="{{ route('dashboard.clients.store') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label>@lang('site.first_name')</label>
                <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
            </div>
            <div class="form-group">
                <label>@lang('site.last_name')</label>
                <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}">
            </div>
            <div class="form-group">
                <label>@lang('site.phone')</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
            </div>
            <div class="form-group">
                <label>@lang('site.mobile')</label>
                <input type="text" name="mobile" class="form-control" value="{{ old('mobile') }}">
            </div>
            <div class="form-group">
                <label>@lang('site.dob')</label>
                <input type="date" name="dob" class="form-control" value="{{ old('dob') }}">
            </div>
            <div class="form-group">
                <label>@lang('site.email')</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label>@lang('site.email_verfied_At')</label>
                <input type="email" name="email_verfied_At" class="form-control" value="{{ old('email_verfied_At') }}">
            </div>
            <div class="form-group">
                <label>@lang('site.password')</label>
                <input type="password" name="password" class="form-control" value="{{ old('password') }}">
            </div>
             <div class="form-group">
                 <label>@lang('site.hotels')</label>
                 <select name="hotel_id" class="form-control">
                     <option value="">hotels select</option>
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
