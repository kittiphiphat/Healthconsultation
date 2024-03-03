
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    @section('content')
    @extends('adminnavbardashboard')

    <section class="max-w-6xl mx-auto rounded-lg dark:bg-gray-800 dark:text-gray-100">
        <div class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
            <div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
                <h1 class="text-5xl font-bold leadi sm:text-6xl">Hospitel<i class="text-gray-200 ri-pulse-line tesxt-2xl"></i>
                    <span class="dark:text-sky-300">Take Care</span><i class="ri-stethoscope-line text-sky-300 tesxt-2xl"></i>
                </h1>
                <p class="mt-6 mb-8 text-lg sm:mb-12">เว็บสอบถามสุขภาพเป็นทางเลือกที่สะดวก
                    <br class="hidden md:inline lg:hidden">และรวดเร็วในการเริ่มต้นการดูแลสุขภาพของคุณ
                </p>
                <div class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
                    <a rel="noopener noreferrer" href="/admin/home" class="px-8 py-3 text-lg font-semibold rounded dark:bg-gradient-to-t from-[#72b2e4] to-[#92e1e2] dark:text-white ">เข้าสู่หน้าหลักแอดมิน</a>
                </div>
            </div>
            <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                <img src="https://cdn.discordapp.com/attachments/833096639332876339/1211580735207514122/wepik-export-2024022607371382TF.png?ex=65eeb77d&is=65dc427d&hm=11fad19cb78b5a1863b636889b655559104a30e25cd7a43b2283264a4ceef2ba&" alt="" class="object-contain mt-12 h-72 sm:h-80 lg:h-max xl:h-112 2xl:h-128">
            </div>
        </div>
    </section>
   @endsection
</body>
</html>
