<!DOCTYPE html>

<html lang="en">
    <head>

        @include('template.mahasiswa.head')

    </head>
    <body>
                @include('template.mahasiswa.header')
                @include('template.mahasiswa.nav')

                    @yield('content')
                @include('template.mahasiswa.footer')
                @include('template.mahasiswa.script')

                </div> <!-- content -->

            </div>

        </div>
    </body>

</html>