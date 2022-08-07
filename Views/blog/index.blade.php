@extends('elements.layouts.app')
@section('content')
    <section id="middle">
        <div class="cui__layout__content">
            <div class="cui__breadcrumbs">
                <div class="cui__breadcrumbs__path">
                    <a href="javascript: void(0);">Stone</a>
                    <span>
                        <span class="cui__breadcrumbs__arrow"></span>
                        <strong>{{ trans('Blog::Blog/Blog.title_header') }}</strong>
                    </span>
                </div>
            </div>
            <div class="cui__utils__content">
                <div class="kit__utils__heading">
                    <h5>
                        <span class="mr-3">{{ trans('Blog::Blog/Blog.blog_stone') }}</span>
                        <a href="{{ route(app('urlBack').'.multi.applications.create') }}" class="btn btn-sm btn-light">
                            <i class="fa fa-edit"></i> {{ trans('Blog::Blog/Blog.create_blog') }}
                        </a>
                    </h5>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-4">
                            <strong>{{ trans('Blog::Blog/Blog.list_blog') }}</strong>
                        </h5>
                        <div class="row">
                            <div class="col-lg-12">
                                 Test view blog !
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

