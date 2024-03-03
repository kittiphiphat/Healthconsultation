
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project_Hospitel</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    </head>
    <body class="font-[Kanit] bg-gradient-to-t from-[#72b2e4] to-[#92e1e2] h-screen">
        @extends('navbarhomeadmin')

        @section('content')



        <div class="max-w-4xl m-5 mx-auto overflow-hidden border border-gray-200 rounded-lg shadow-md">
            <table class="w-full text-sm text-left text-gray-500 bg-white border-collapse">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="px-6 py-4 font-medium text-gray-900">ชื่อ-นามสกุล</th>
                  <th scope="col" class="px-6 py-4 font-medium text-gray-900">สถานะ</th>
                  <th scope="col" class="px-2 py-4 font-medium text-gray-900">ชื่อหัวข้อที่ปรึกษา</th>
                  <th scope="col" class="px-6 py-4 font-medium text-gray-900">วันที่เผยแพร่</th>
                  <th scope="col" class="px-2 py-2 font-medium text-gray-900">แถบจัดการเมนู</th>
                </tr>
              </thead>
              @foreach($posts as $post)
              <tbody class="border-t border-gray-100 divide-y divide-gray-100">
                <tr class="hover:bg-gray-50">
                  <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                    <div class="text-sm">
                      <div class="font-medium text-gray-700">{{$post->name}}</div>
                      <div class="text-gray-400">{{$post->email}}</div>
                    </div>
                  </th>
                  <td class="px-4 py-2">
                    <span
                      class="inline-flex items-center gap-1 px-2 py-1 text-xs font-semibold text-green-600 rounded-full bg-green-50"
                    >

                      @if ($post->status ==true)
                      <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                      <a href="{{route('change',$post->id)}}" class="px-2 py-1 text-sm font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">ตอบกลับแล้ว</a>
                        @else
                        <span class="h-1.5 w-1.5 rounded-full bg-orange-700"></span>
                            <a href="{{route('change',$post->id)}}" class="px-2 py-1 text-sm font-semibold leading-tight text-orange-700 bg-yellow-100 rounded-sm">ยังไม่ได้ตอบกลับ</a>
                        @endif
                    </span>
                  </td>

                  <td class="px-4 py-2 text-sm font-medium text-black">{{$post->section}}</td>
                  <td class="px-4 py-2">
                    <div class="flex gap-2">
                      <span
                        class="inline-flex items-center gap-1 px-2 py-1 text-sm font-semibold text-gray-800 rounded-full bg-blue-50"
                      >
                      {{ substr($post->created_at, 0, 10) }}
                      </span>

                    </div>

                  </td>
                  <td class="px-4 py-2">
                    <div class="flex justify-end gap-4 ">
                      <a x-data="{ tooltip: 'Delete' }" href="{{route('admin.delete',$post->id)}} " class="hover:text-red-500">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="w-6 h-6"
                          x-tooltip="tooltip"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                          />
                        </svg>
                      </a>
                      <a x-data="{ tooltip: 'Edite' }" href="{{route('admin.edit',$post->id)}}" class="hover:text-sky-600">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="w-6 h-6"
                          x-tooltip="tooltip"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                          />
                        </svg>
                      </a>
                      <a x-data="{ tooltip: 'show' }" href="/show" class="hover:text-yellow-600">
                        <i class="text-2xl fa-regular fa-eye"></i>
                      </a>
                    </div>
                  </td>
                </tr>


              </tbody>
            @endforeach
            </table>
          </div>
          @endsection

    </body>

</html>
