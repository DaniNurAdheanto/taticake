<x-app-layout>

</x-app-layout>



<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss")
</head>

<body>

    <div class="container-scroller">
        @include("admin.navbar")
        <div style="position: relative; margin:0 auto; padding: 30px;">
            <H1>Selamat Datang Di Halaman Admin</H1>
        </div>
    </div>
    @include("admin.adminscript")
</body>

</html>