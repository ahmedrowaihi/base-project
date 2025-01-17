@extends('panel.layout.master',['title' => __('panel.admins'),'is_active'=>'admins'])

@section('subheader')

     <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">@lang('Admins')</h5>
                <!--end::Page Title-->
            </div>
            <!--end::Info-->
        </div>
    </div>

@endsection

@section('content')
    @php
        $item = isset($item) ? $item: null;
    @endphp
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            {!! Form::open(['method'=>isset($item) ? 'PUT' : 'POST', 'url'=> url()->current() , 'to'=> url()->current() ,  'class'=>'form-horizontal','id'=>'form']) !!}

            <div class="row">
                <div class="col-md-8">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b ">

                        <!--begin::Form-->
                        <div class="card-body">

                            <div class="form-group">
                                <label>{{ __('constants.name') }}
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name"
                                       value="{{isset($item)?@$item->name:''}}"
                                       required/>
                            </div>

                            <div class="form-group">
                                <label>{{ __('constants.email') }}
                                    <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email"
                                       value="{{isset($item)?@$item->email:''}}"
                                       required/>
                            </div>

                            <div class="form-group">
                                <label for="exampleSelect1">@lang('panel.permissions')
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-control selectpicker" name="role_id"
                                        title="@lang('panel.permissions')">
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}" {{ isset($item) && @$item->roles()->first()->id==$role->id ? 'selected' :'' }} >{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>@lang('constants.password')<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password"/>
                            </div>



                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card card-custom gutter-b">
                        <div class="card-footer">
                            <button type="submit" id="m_login_signin_submit" class="btn btn-primary mr-2 w-100">@lang('constants.save')
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            {!! Form::close() !!}

        </div>
        <!--end::Container-->
    </div>

@endsection

@push('panel_js')
    <script src="{{ asset('panelAssets/js/post.js') }}"></script>
@endpush
