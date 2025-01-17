<style>
    @media screen and (max-width: 629px) {
        .hidden-mobile {
            display: none;
        }
    }
</style>
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <!--begin::Logo-->
        <a href="{{ route('panel.index') }}" class="brand-logo">
            <img class="hidden-mobile" alt="Logo" src="{{ asset('logo.png') }}"
                 style="width: 100%;height: auto;object-fit: contain;margin: auto;"/>
            {{--            style="width: 50%; height: 34px !important;"--}}
        </a>
        <!--end::Logo-->
        <!--begin::Toggle-->
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
							<span class="svg-icon svg-icon svg-icon-xl">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24"/>
										<path
                                            d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)"/>
										<path
                                            d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3"
                                            transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)"/>
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>
        </button>
        <!--end::Toolbar-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
             data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
                <li class="menu-item {{@$is_active=='home'?'menu-item-active':''}}" aria-haspopup="true">
                    <a href="{{ route('panel.index') }}" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
											<svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24"/>
													<path
                                                        d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                        fill="#000000" fill-rule="nonzero"/>
													<path
                                                        d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                        fill="#000000" opacity="0.3"/>
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                        <span class="menu-text">@lang('panel.overview')</span>
                    </a>
                </li>

                <li class="menu-section">
                    <h4 class="menu-text">@lang('panel.users_management')</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>


                @canany(['manage_roles' ,'add_admins', 'show_admins'])
                    <li class="menu-item menu-item-submenu {{@$is_active=='admins'|| @$is_active=='roles'?'menu-item-active menu-item-open menu-item-here':''}} "
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="svg-icon menu-icon">
                						    <i class="fa fa-shield-alt"></i>
                                        </span>
                            <span class="menu-text">@lang('panel.site_administration')</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @canany(['add_admins' , 'show_admins'])
                                    <li class="menu-item menu-item-submenu {{@$is_active=='admins'?'menu-item-active menu-item-open menu-item-here':''}} "
                                        aria-haspopup="true" data-menu-toggle="hover">
                                        <a href="javascript:;" class="menu-link menu-toggle">
                                                    <span class="svg-icon menu-icon">
                                                        <i class="fa fa-user-shield"></i>
                                                    </span>
                                            <span class="menu-text">@lang('panel.admins')</span>
                                            <i class="menu-arrow"></i>
                                        </a>
                                        <div class="menu-submenu">
                                            <i class="menu-arrow"></i>
                                            <ul class="menu-subnav">
                                                @can('show_admins')
                                                    <li class="menu-item {{@$route_name =='panel.admins.index'?'menu-item-active':''}}"
                                                        aria-haspopup="true">
                                                        <a href="{{route('panel.admins.index')}}" class="menu-link">
                                                                <span class="svg-icon menu-icon">
                                                                    <i class="fa fa-cogs"></i>
                                                                </span>
                                                            <span class="menu-text">@lang('constants.all')</span>
                                                        </a>
                                                    </li>
                                                @endcan

                                                @can('add_admins')
                                                    <li class="menu-item {{@$route_name =='panel.admins.create' ||  @$route_name =='panel.admins.edit' ?'menu-item-active':''}}"
                                                        aria-haspopup="true">
                                                        <a href="{{route('panel.admins.create')}}" class="menu-link">
                                                                <span class="svg-icon menu-icon">
                                                                    <i class="fa fa-cogs"></i>
                                                                </span>
                                                            <span class="menu-text">@lang('constants.add_new')</span>
                                                        </a>
                                                    </li>
                                                @endcan
                                            </ul>
                                        </div>
                                    </li>
                                @endcanany

                                @can('manage_roles')
                                    <li class="menu-item {{@$is_active=='roles'?'menu-item-active':''}}"
                                        aria-haspopup="true">
                                        <a href="{{route('panel.permission.index')}}" class="menu-link">
                                                                                <span class="svg-icon menu-icon">
                                                                                    <i class="fa fa-toolbox"></i>
                                                                                </span>
                                            <span class="menu-text">@lang('panel.roles_permissions')</span>
                                        </a>
                                    </li>
                                @endcan

                            </ul>
                        </div>
                    </li>
                @endcanany

                @canany('manage_inbox')
                    <li class="menu-item menu-item-submenu {{@$is_active=='help_center'?'menu-item-active menu-item-open menu-item-here':''}} "
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="svg-icon menu-icon">
                						    <i class="fa fa-headset"></i>
                                        </span>
                            <span class="menu-text">@lang('panel.help_center')</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                @can('manage_inbox')
                                    <li class="menu-item {{@$route_name=='panel.help-center.inbox.index'||@$route_name=='panel.help-center.inbox.show'?'menu-item-active':''}}"
                                        aria-haspopup="true">
                                        <a href="{{route('panel.help-center.inbox.index')}}" class="menu-link">
                                                        <span class="svg-icon menu-icon">
                                                            <i class="kt-menu__link-icon fa fa-mail-bulk"></i>
                                                        </span>
                                            <span class="menu-text">@lang('panel.contact_messages')</span>
                                        </a>
                                    </li>
                                @endcan



                                {{--                            <li class="menu-item {{@$route_name=='panel.help-center.complaints.index'?'menu-item-active':''}}"--}}
                                {{--                                aria-haspopup="true">--}}
                                {{--                                <a href="{{route('panel.help-center.complaints.index')}}" class="menu-link">--}}
                                {{--                                                        <span class="svg-icon menu-icon">--}}
                                {{--                                                            <i class="kt-menu__link-icon fa fa-ticket-alt"></i>--}}
                                {{--                                                        </span>--}}
                                {{--                                    <span class="menu-text">@lang('panel.complaints')</span>--}}
                                {{--                                </a>--}}
                                {{--                            </li>--}}
                                {{--                             --}}

                            </ul>
                        </div>
                    </li>
                @endcanany


                <li class="menu-section">
                    <h4 class="menu-text">@lang('panel.constants')</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>


                @can('manage_blogs')
                    <li class="menu-item menu-item-submenu  {{@$is_active=='blog' ? 'menu-item-active':''}}"
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="{{route('panel.blogs.all.index')}}" class="menu-link menu-toggle">
                            <span class="svg-icon menu-icon side-svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="26" viewBox="0 0 20 26">
                                    <path id="المقالات"
                                          d="M5,4V26a2,2,0,0,0,2,2H23a2,2,0,0,0,2-2V4a2,2,0,0,0-2-2H7A2,2,0,0,0,5,4Zm8,18a1,1,0,0,1,1-1h6a1,1,0,0,1,0,2H14A1,1,0,0,1,13,22ZM9,22a1,1,0,1,1,1,1A1,1,0,0,1,9,22Zm4-4a1,1,0,0,1,1-1h6a1,1,0,0,1,0,2H14A1,1,0,0,1,13,18Zm0-4a1,1,0,0,1,1-1h6a1,1,0,0,1,0,2H14A1,1,0,0,1,13,14ZM9,8a1,1,0,0,1,1-1H20a1,1,0,0,1,0,2H10A1,1,0,0,1,9,8Zm0,6a1,1,0,1,1,1,1A1,1,0,0,1,9,14Zm0,4a1,1,0,1,1,1,1A1,1,0,0,1,9,18Z"
                                          transform="translate(-5 -2)" fill="#b5b5c3"/>
                                </svg>
                            </span>
                            <span class="menu-text">@lang('panel.articles')</span>
                        </a>

                    </li>
                @endif


                @can('manage_faq')

                    <li class="menu-item menu-item-submenu {{@$is_active=='faqs'|| @$is_active=='faq_categories'?'menu-item-active menu-item-open menu-item-here':''}} "
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="svg-icon menu-icon">
                						    <i class="fa fa-shield-alt"></i>
                                        </span>
                            <span class="menu-text">@lang('panel.faq')</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">

                                <li class="menu-item {{@$is_active=='faq_categories'?'menu-item-active':''}}"
                                    aria-haspopup="true">
                                    <a href="{{route('panel.faq_categories.index')}}" class="menu-link">
                                                                                <span class="svg-icon menu-icon">
                                                                                    <i class="fa fa-toolbox"></i>
                                                                                </span>
                                        <span class="menu-text">@lang('panel.categories')</span>
                                    </a>
                                </li>
                                <li class="menu-item {{@$is_active=='faqs'?'menu-item-active':''}}"
                                    aria-haspopup="true">
                                    <a href="{{route('panel.faq.index')}}" class="menu-link">
                                                                                <span class="svg-icon menu-icon">
                                                                                    <i class="fa fa-toolbox"></i>
                                                                                </span>
                                        <span class="menu-text">@lang('panel.faq')</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                @endcan


                @can('manage_pages')
                    <li class="menu-item {{@$is_active=='pages'?'menu-item-active':''}}" aria-haspopup="true">
                        <a href="{{route('panel.pages.index')}}" class="menu-link">
                                        <span class="svg-icon menu-icon">
                                            <i class="kt-menu__link-icon fa fa-file-alt"></i>
                                        </span>
                            <span class="menu-text">@lang('panel.site_pages')</span>
                        </a>
                    </li>
                @endcan



                @can('manage_settings')

                    <li class="menu-item menu-item-submenu {{@$is_active=='settings'?'menu-item-active menu-item-open menu-item-here':''}} "
                        aria-haspopup="true" data-menu-toggle="hover">
                        <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="svg-icon menu-icon">
                						    <i class="fa fa-cogs"></i>
                                        </span>
                            <span class="menu-text">@lang('panel.settings')</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu">
                            <i class="menu-arrow"></i>
                            <ul class="menu-subnav">
                                <li class="menu-item {{@$is_active=='settings'?'menu-item-active':''}}"
                                    aria-haspopup="true">
                                    <a href="{{route('panel.settings.index')}}" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <i class="fa fa-cogs"></i>
                                                    </span>
                                        <span class="menu-text">@lang('panel.general_settings')</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endcan


            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
