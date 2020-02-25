@include('admin.layout.master_topbar')
@include('admin.layout.master_sidebar')
<div id="page-wrapper" >
    <div id="page-inner">
@yield('content')
    </div>
</div>
@include('admin.layout.master_footer')