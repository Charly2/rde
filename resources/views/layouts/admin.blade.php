@include('layouts.admin.header')
@include('layouts.admin.nav',['item_active'=>$item_active])
@yield('content')

@include('layouts.admin.fotter')
