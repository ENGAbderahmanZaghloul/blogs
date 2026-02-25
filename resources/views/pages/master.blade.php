<!DOCTYPE html>
<html lang="en">

@include('components.partials.head')

<body>
    @include('components.partials.header')

    @yield('content')

    @include('components.partials.footer')

    @include('components.partials.scripts')
</body>

</html>
