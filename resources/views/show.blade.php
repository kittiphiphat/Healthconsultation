
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    @section('content')
     @extends('navbarshow')


     <div class="grid flex-col items-center justify-center grid-cols-1 gap-6 px-6 py-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 min-h-max bg-gradient-to-t from-[#72b2e4] to-[#92e1e2]">


        @foreach($posts as $post)
        <div class="container max-w-lg px-2 py-2 m-3 transition duration-500 transform bg-white shadow-lg rounded-xl hover:scale-90 hover:shadow-2xl">
        <div>

            @foreach($post->blogs as $blog)
            <h1 class="mt-2 ml-4 text-2xl font-bold text-gray-800 transition duration-100 cursor-pointer hover:text-gray-900">{{ $blog->email }}</h1>
            <p class="mt-1 mb-2 ml-4 text-sm text-gray-700 cursor-pointer hover:underline">เบอร์โทรศัพท์ :{{ $blog->phone }}</p>
        </div>
        <span  class="inline-flex items-center gap-1 px-2 py-1 text-sm font-semibold text-green-600 rounded-full bg-green-50">ชื่อเรื่องที่ต้องการปรึกษา :</span> <span class="px-2 text-lg font-bold">{{ $blog->section }}</span><br>
        <span  class="inline-flex items-center gap-1 px-2 py-1 text-sm font-semibold text-yellow-600 rounded-full bg-green-50">รายละเอียดต้องการปรึกษา :</span> <span class="px-2 text-lg font-bold">{{ $blog->content }}</span><br>
        <span  class="inline-flex items-center gap-1 px-2 py-1 text-sm font-semibold text-red-600 rounded-full bg-green-50">รายละเอียดตอบกลับของแพทย์ :</span>
        <span class="px-2 text-lg ">{{ $post->respond }}</span>

        <div class="flex justify-between p-4">
            <div class="flex items-center space-x-2">
                @if ($blog->sex =='Female')
                <img class="w-10 rounded-full" src="https://cdn.discordapp.com/attachments/833096639332876339/1213855113014157422/a975934bb378afc4ca8c133df451f56e.jpg?ex=65f6fdab&is=65e488ab&hm=fa80e509653428620bc3900546a4501874257ff31da32b0b721786f3a38370b6&" alt="sara" />
            @else
                <img class="w-10 rounded-full" src="https://cdn.discordapp.com/attachments/833096639332876339/1213854988208709652/bd428e6bb156d90045700dbf3e967c3e.jpg?ex=65f6fd8d&is=65e4888d&hm=927ff0ea283b52ebb01651931cfc12a360644e16241bade3bd0c10679b01b92e&" alt="sara" />
            @endif


            <h2 class="font-bold text-gray-800 cursor-pointer">{{ $blog->name }}</h2>
            </div>
            @endforeach
            <div class="flex space-x-2">
            <div class="flex items-center space-x-1">
                <span>

                </span>
                @if ($blog->sex =='Female')
                                <span class="px-2 py-1 text-sm font-semibold text-red-700 bg-red-100 rounded-sm ri-women-line"></span>
                            @else
                            <span class="px-2 py-1 text-sm font-semibold rounded-sm bg-sky-100 text-sky-700 ri-men-line"></span>
                            @endif

            </div>
            <div class="flex items-center space-x-1">
                <span>
                    <i class="ri-message-3-line"></i>
                </span>
                <span>อายุ :{{ $blog->age }}</span>
            </div>
            </div>
        </div>
        </div>
        @endforeach
    </div>
    @endsection

</body>


</html>
