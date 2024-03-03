
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project_Hospitel</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    </head>
    <body class="font-[Kanit] bg-gradient-to-t from-[#72b2e4] to-[#92e1e2] h-screen">
        @extends('navbarhomeuser')

        @section('content')

<!-- This is an example component -->
        <div class="py-3 mx-auto max-w-7xl">

            <div id="default-carousel" class="relative" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <span class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                        <img src="https://cdn.discordapp.com/attachments/833096639332876339/1213503261727002694/1.png?ex=65f5b5fb&is=65e340fb&hm=d4a15da2da41d92074719a6c5fba2e13990634ad46a756ac7b3131f28e808cee&" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://cdn.discordapp.com/attachments/833096639332876339/1213503294807347230/2.png?ex=65f5b603&is=65e34103&hm=38a284d7c65d15f0150b30e3331ab78741220aa9f8662334fd9bc31977b64728&" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://cdn.discordapp.com/attachments/833096639332876339/1213503313576861748/3.png?ex=65f5b607&is=65e34107&hm=9a18b681673d6664bf28024aefe25cae807a6d1387f4205135e8673be014b740&" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>

                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://cdn.discordapp.com/attachments/833096639332876339/1213503325094289498/4.png?ex=65f5b60a&is=65e3410a&hm=840156f9fe7adcaf0c2841c59bca0110bd8e60d8bd0a833984136e2f0a0fed66&" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://cdn.discordapp.com/attachments/833096639332876339/1213503334086873168/5.png?ex=65f5b60c&is=65e3410c&hm=786f49d3015bd8014bcfe165d506f33e094eb09c585d39bf2d6648220ebe0efd&" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 text-white -translate-x-1/2 bottom-5 left-1/2 dark:text-gray-100">
                    <button type="button" class="w-3 h-3 rounded-full " aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-100/30 group-hover:bg-white/50 dark:group-hover:bg-gray-100/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-100/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-100/30 group-hover:bg-white/50 dark:group-hover:bg-gray-100/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-100/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>


            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        </div>

        {{-- Features components --}}
        <section class="px-4 py-3 mx-auto max-w-7xl dark:bg-wheite opacity-2 rounded-xl">
            <div class="container px-6 py-10 mx-auto ">
                <h1 class="text-2xl font-bold text-gray-800 capitalize lg:text-3xl dark:text-blue-800">รายการรักษาที่รองรับสำหรับผู้ป่วยเบื้องต้น <i class="text-2xl text-blue-600 fa-solid fa-staff-snake "></i></h1>
                <p class="mt-3 text-lg text-gray-500 xl:mt-6 dark:text-gray-900">
                    สามารถศึกษาข้อมูลการรักษาได้ที่นี้ เป็นข้อมูลของโรงพยาบาลเมืองนารายณ์
                </p>

                <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
                    <div class="p-8 space-y-3 bg-white border-2 border-blue-100 shadow-xl dark:border-blue-100 rounded-xl">
                        <span class="inline-block text-blue-500 dark:text-blue-400">
                            <i class="text-4xl ri-heart-pulse-line dark:text-blue-800"></i>
                        </span>

                        <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-indigo-800">คลินิกโรคหัวใจ</h1>

                        <p class="text-gray-500 dark:text-gray-600">
                            แผนกอายุรกรรมหัวใจ ได้เปิดให้บริการตรวจรักษาผู้ป่วยโรคหลอดเลือดหัวใจด้วย<br>ความมุ่งมั่นที่จะให้บริการดูแลผู้ป่วย พร้อมด้วยอุปกรณ์การแพทย์ที่ทันสมัย แพทย์ผู้เชี่ยวชาญเฉพาะทางด้านโรคหัวใจ
                        </p>

                        <a href="https://www.meungnarai-hospital.com/%E0%B8%84%E0%B8%A5%E0%B8%B4%E0%B8%99%E0%B8%B4%E0%B8%81%E0%B9%82%E0%B8%A3%E0%B8%84%E0%B8%AB%E0%B8%B1%E0%B8%A7%E0%B9%83%E0%B8%88" class="inline-flex px-3 text-2xl text-blue-500 capitalize transition-colors duration-300 transform bg-blue-100 rounded-full ri-arrow-right-s-line rtl:-scale-x-100 dark:bg-blue-500 dark:text-white hover:text-blue-300 dark:hover:text-blue-300">

                        </a>
                    </div>

                    <div class="p-8 space-y-3 bg-white border-2 border-blue-100 shadow-xl dark:border-blue-100 rounded-xl">
                        <span class="inline-block text-blue-500 dark:text-blue-800">
                            <i class="text-4xl fa-solid fa-child "></i>
                        </span>

                        <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-indigo-800">คลินิกกุมารเวช</h1>

                        <p class="text-gray-500 dark:text-gray-600">
                            คลินิกกุมารเวช เชื่อมั่นในพื้นฐานของความรักและความเข้าใจในครอบครัวด้วยคำแนะนำ<br>เพื่อการเลี้ยงดูเด็กอย่างถูกวิธีจากกุมารแพทย์<br>ผู้มีประสบการณ์อย่างแท้จริงเป็นแรงผลักดันสำคัญให้เด็กมีพัฒนาการที่สมวัย<br>เติบโตอย่างมั่นใจ และมีสุขภาพที่แข็งแรง ยั่งยืน
                        </p>
                        <a href="https://www.meungnarai-hospital.com/%E0%B8%84%E0%B8%A5%E0%B8%B4%E0%B8%99%E0%B8%B4%E0%B8%81%E0%B8%81%E0%B8%B8%E0%B8%A1%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%A7%E0%B8%8A" class="inline-flex px-3 text-2xl text-blue-500 capitalize transition-colors duration-300 transform bg-blue-100 rounded-full ri-arrow-right-s-line rtl:-scale-x-100 dark:bg-blue-500 dark:text-white hover:text-blue-300 dark:hover:text-blue-300">
                        </a>
                    </div>

                    <div class="p-8 space-y-3 bg-white border-2 border-blue-100 shadow-xl dark:border-blue-100 rounded-xl">
                        <span class="inline-block text-blue-500 dark:text-blue-800">
                            <i class="text-4xl fa-solid fa-person-pregnant"></i>
                        </span>

                        <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-indigo-800">คลินิกสูติ-นรีเวช</h1>

                        <p class="text-gray-500 dark:text-gray-700">
                            โรงพยาบาลเมืองนารายณ์ให้บริการดูแลสุขภาพสตรีโดยแพทย์ผู้เชี่ยวชาญทางด้าน<br>สูติ-นรีเวชบริการทางการแพทย์ที่เกี่ยวข้อง<br>กับการเจ็บป่วยหรือปัญหาทางระบบสืบพันธุ์ของผู้หญิง และให้คำปรึกษาปัญหาต่างๆ
                        </p>

                        <a href="https://www.meungnarai-hospital.com/%E0%B8%84%E0%B8%A5%E0%B8%B4%E0%B8%99%E0%B8%B4%E0%B8%81%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%B4-%E0%B8%99%E0%B8%A3%E0%B8%B5%E0%B9%80%E0%B8%A7%E0%B8%8A" class="inline-flex px-3 text-2xl text-blue-500 capitalize transition-colors duration-300 transform bg-blue-100 rounded-full ri-arrow-right-s-line rtl:-scale-x-100 dark:bg-blue-500 dark:text-white hover:text-blue-300 dark:hover:text-blue-300">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
<div class="max-w-[80rem] px-8 py-10 sm:px-6 lg:px-16 lg:py-16 mx-auto ">
    <h4 class="text-lg font-semibold text-gray-800 sm:text-xl dark:text-blue-800"> ข้อมูลอัตราการป่วยเพิ่มขึ้นระหว่างปี 2557 ถึงปี 2561</h4>
    <!-- Grid -->
    <div class="grid grid-cols-2 gap-6 mt-20 sm:gap-12 lg:grid-cols-3 lg:gap-8">

      <!-- Stats -->
      <div>
        <h4 class="text-lg font-semibold text-gray-800 sm:text-xl dark:text-blue-900">โรคมะเร็ง</h4>
        <p class="mt-2 text-4xl font-bold text-blue-600 sm:mt-3 sm:text-6xl">12%</p>
        <p class="mt-1 font-semibold text-red-700">83,316 คน ในปี 2561</p>
      </div>
      <!-- End Stats -->

      <!-- Stats -->
      <div>
        <h4 class="text-lg font-semibold text-gray-800 sm:text-xl dark:text-blue-900">โรคหลอดเลือดในสมอง หรือ Stroke </h4>
        <p class="mt-2 text-4xl font-bold text-blue-600 sm:mt-3 sm:text-6xl">22%</p>
        <p class="mt-1 font-semibold text-red-700">32,632 คน ในปี 2561</p>
      </div>
      <!-- End Stats -->

      <!-- Stats -->
      <div>
        <h4 class="text-lg font-semibold text-gray-800 sm:text-xl dark:text-blue-900">ปอดอักเสบ หรือ ปอดบวม</h4>
        <p class="mt-2 text-4xl font-bold text-blue-600 sm:mt-3 sm:text-6xl">21%</p>
        <p class="mt-1 font-semibold text-red-700">31,243 คน ในปี 2561</p>
      </div>
      <!-- End Stats -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Features -->


        {{-- new components --}}
        <section class="pt-14 lg:pt-[70px] pb-8 lg:pb-13">
            <div class="container">
               <div class="flex flex-wrap justify-center -mx-4">
                  <div class="w-full px-4">
                     <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
                        <span class="block mb-2 text-lg font-semibold text-primary">

                        </span>
                        <h2
                           class="
                           font-bold
                           text-3xl
                           sm:text-4xl
                           md:text-[40px]
                           dark:text-blue-800
                           "
                           >
                           สาระสุขภาพ
                        </h2>

                     </div>
                  </div>
               </div>
               <div class="flex flex-wrap -mx-4">
                  <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                     <div class="max-w-[370px] mx-auto mb-10">
                        <div class="mb-8 overflow-hidden rounded">
                           <img
                              src="https://cdn.discordapp.com/attachments/833096639332876339/1213478034456313896/health-article-knowledge-how-to-take-care-of-your-health-every-ages-1200x628px.jpg?ex=65f59e7c&is=65e3297c&hm=2348eddb284e9d40e84e82a1c05810e08d2c248d20b1316358ad372492d32e22&"
                              alt="image"
                              class="w-full"
                              />
                        </div>
                        <div>
                           <span
                              class="inline-block px-4 py-1 mb-5 text-xs font-semibold leading-loose text-center text-white rounded bg-primary"
                              >
                           11 ธันวาคม 2022
                           </span>
                           <h3>
                              <a
                                 href="https://pathlab.co.th/how-to-take-care-of-your-health-every-ages/?fbclid=IwAR32w5TZBxi7cI0tuiOE546rcBCgg9SrKLT54Onx42o2Qt4LUKlTw3hDg3A"
                                 class="inline-block mb-4 text-xl font-semibold sm:text-2xl lg:text-xl xl:text-2xl text-dark hover:text-primary"
                                 >
                                 เคล็ดลับการดูแลสุขภาพตามช่วงวัย
                              </a>
                           </h3>
                           <p class="text-base font-semibold text-gray-700">
                                ข้อมูล โดย ทนพ. ชาญเวช ตันติกัลยาภรณ์
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                     <div class="max-w-[370px] mx-auto mb-10">
                        <div class="mb-8 overflow-hidden rounded">
                           <img
                              src="https://cdn.discordapp.com/attachments/833096639332876339/1213479169971851304/Job_-Spider_-1024x512.jpg?ex=65f59f8b&is=65e32a8b&hm=1bb24e2683cdd1b6306eb307aa867cfd00a2e7951e17ad07e32edf72ebebbc00&"
                              alt="image"
                              class="w-full"
                              />
                        </div>
                        <div>
                           <span
                              class="inline-block px-4 py-1 mb-5 text-xs font-semibold leading-loose text-center text-white rounded bg-primary"
                              >
                            26 สิงหาคม 2022
                           </span>
                           <h3>
                              <a
                                 href="https://thainakarin.co.th/article-from-doctor/how-to-fix-office-syndrome/?fbclid=IwAR2E6MhzON9LvWf1pFd3-IlCZGyNYsmceApN3wTJ-2KF-GIa0nsoWlbK0ig"
                                 class="inline-block mb-4 text-xl font-semibold sm:text-2xl lg:text-xl xl:text-2xl text-dark hover:text-primary"
                                 >
                                 โรคออฟฟิศซินโดรมคืออะไร เป็นแล้วต้องรักษาด้วยวิธีใด?
                              </a>
                           </h3>
                           <p class="text-base font-semibold text-gray-700">
                                ข้อมูล โดย พญ. วันทนียา วัชรีอุดมกาล
                            </p>
                        </div>
                     </div>
                  </div>
                  <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                     <div class="max-w-[370px] mx-auto mb-10">
                        <div class="mb-8 overflow-hidden rounded">
                           <img
                              src="https://cdn.discordapp.com/attachments/833096639332876339/1213482269369565204/KBKJ-Web_Article.pptx-27-1024x538.jpg?ex=65f5a26e&is=65e32d6e&hm=fbb2cc346df69264e3ee6be804c316a12d31ff55a0d52584bb98f39f7a318206&"
                              alt="image"
                              class="w-full"
                              />
                        </div>
                        <div>
                           <span
                              class="inline-block px-4 py-1 mb-5 text-xs font-semibold leading-loose text-center text-white rounded bg-primary"
                              >
                           17 พฤศจิกายน 2021
                           </span>
                           <h3>
                              <a
                                 href="https://kbkjclinic.com/5-healthy-tips/"
                                 class="inline-block mb-4 text-xl font-semibold sm:text-2xl lg:text-xl xl:text-2xl text-dark hover:text-primary"
                                 >
                                 5 วิธีดูแลสุขภาพกายและสุขภาพจิต ท่ามกลางวิกฤติโควิด-19
                              </a>
                           </h3>
                           <p class="text-base font-semibold text-gray-700">
                                ข้อมูล โดย  กรมสุขภาพจิต
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="max-w-[370px] mx-auto mb-10">
                       <div class="mb-8 overflow-hidden rounded">
                          <img
                             src="https://cdn.discordapp.com/attachments/833096639332876339/1213681441347735572/10.png?ex=65f65bec&is=65e3e6ec&hm=f4cabcfb708eb9dee289088dbbe5aaa21c5933f4f9686bc8dc8d7d673eeb7da0&"
                             alt="image"
                             class="w-full"
                             />
                       </div>
                       <div>
                          <span
                             class="inline-block px-4 py-1 mb-5 text-xs font-semibold leading-loose text-center text-white rounded bg-primary"
                             >
                             16 พฤศจิกายน 2022
                          </span>
                          <h3>
                             <a
                                href="https://www.thaihealth.or.th/%e0%b8%a3%e0%b8%b9%e0%b9%89%e0%b8%97%e0%b8%b1%e0%b8%99-%e0%b8%99%e0%b9%89%e0%b8%b3%e0%b8%95%e0%b8%b2%e0%b8%a5%e0%b9%83%e0%b8%99%e0%b8%9c%e0%b8%a5%e0%b9%84%e0%b8%a1%e0%b9%89-%e0%b8%81/"
                                class="inline-block mb-4 text-xl font-semibold sm:text-2xl lg:text-xl xl:text-2xl text-dark hover:text-primary"
                                >
                                รู้ทัน ‘น้ำตาลในผลไม้’ กินอย่างไรไม่เสี่ยงเบาหวาน!
                             </a>
                          </h3>
                          <p class="text-base font-semibold text-gray-700">
                               ข้อมูล โดย  autchariya

                          </p>
                       </div>
                    </div>
                 </div>
                 <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="max-w-[370px] mx-auto mb-10">
                       <div class="mb-8 overflow-hidden rounded">
                          <img
                             src="https://cdn.discordapp.com/attachments/833096639332876339/1213506254459379722/lis-1.jpg?ex=65f5b8c4&is=65e343c4&hm=f3195f023f0ecff735b322e7c04e623c9eff3c8e648af81e196db73aa2f34db0&"
                             alt="image"
                             class="w-full"
                             />
                       </div>
                       <div>
                          <span
                             class="inline-block px-4 py-1 mb-5 text-xs font-semibold leading-loose text-center text-white rounded bg-primary"
                             >
                           15 ตุลาคม 2020
                          </span>
                          <h3>
                             <a
                                href="https://www.sukumvithospital.com/healthcontent.php?id=3602&fbclid=IwAR2pM1EyLUS1tIwS7sjFR4IJ1Bc3bNPLS2AReAkRJASBpQ86LDtWsyoyZ0M"
                                class="inline-block mb-4 text-xl font-semibold sm:text-2xl lg:text-xl xl:text-2xl text-dark hover:text-primary"
                                >
                                สัญญาณสายตาสั้นและยาวที่ควรตรวจวัดสายตา
                             </a>
                          </h3>
                          <p class="text-base font-semibold text-gray-700">
                               ข้อมูล โดย  พญ. ณัฐธิดา ชาติบัญชาชัย
                          </p>
                       </div>
                    </div>
                 </div>
                 <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="max-w-[370px] mx-auto mb-10">
                       <div class="mb-8 overflow-hidden rounded">
                          <img
                             src="https://cdn.discordapp.com/attachments/833096639332876339/1213510516929208390/9.png?ex=65f5bcbd&is=65e347bd&hm=3b41d383e3f4079c051224bf793ee56e0013f284b25f8d7841d712fb956c6e93&"
                             alt="image"
                             class="w-full"
                             />
                       </div>
                       <div>
                          <span
                             class="inline-block px-4 py-1 mb-5 text-xs font-semibold leading-loose text-center text-white rounded bg-primary"
                             >
                          30 สิงหาคม 2022
                          </span>
                          <h3>
                             <a
                                href="https://www.thantakit.com/th/dental-blogs/causes-of-mouth-ulcers/?fbclid=IwAR3TpxK8gTec_jBW_bEkH4sN5XWhwdPm2uRTPgpk1MrJ4HB9soyAEQ9o4Wk"
                                class="inline-block mb-4 text-xl font-semibold sm:text-2xl lg:text-xl xl:text-2xl text-dark hover:text-primary"
                                >
                                รู้จักสาเหตุแผลในปาก พร้อมวิธีแก้ร้อนในปากที่สามารถทำได้เอง
                             </a>
                          </h3>
                          <p class="text-base font-semibold text-gray-700">
                               ข้อมูล โดย  ทพ.ธิติ ศิริไกร
                          </p>
                       </div>
                    </div>
                 </div>
               </div>
            </div>


            <div class="flex items-center justify-center">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
                    <!-- 1 card -->
                    <div class="relative w-64 px-6 py-6 my-4 bg-white shadow-xl rounded-3xl">
                        <div class="absolute flex items-center px-4 py-4 text-white bg-pink-500 rounded-full shadow-xl left-4 -top-6">
                            <!-- svg  -->
                            <img src="https://cdn.discordapp.com/attachments/833096639332876339/1213731590782459944/11_preview_rev_1.png?ex=65f68aa1&is=65e415a1&hm=be84d6785bb54329d6cf4a663a48254269acae494c8b8d1ebf99b372f9bac580&" alt="" srcset="">
                        </div>
                        <div class="mt-8">
                            <p class="my-2 text-xl font-semibold">โรงพยาบาลราชเวช</p>
                            <div class="flex space-x-2 text-sm text-gray-400">
                                <!-- svg  -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                 <p>
                                    316/1 โรงพยาบาลราชเวช เชียงใหม่ ถ.เชียงใหม่-ลำพูน ต.วัดเกต อ.เมือง จ.เชียงใหม่ 50000</p>
                            </div>
                            <div class="flex my-3 space-x-2 text-sm text-gray-400">
                                <!-- svg  -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                 <p> 24 ชั่วโมง</p>
                            </div>
                            <div class="border-t-2"></div>

                            <div class="flex justify-between">
                                <div class="my-2">
                                    <a href="https://healthserv.net/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%A3%E0%B8%B2%E0%B8%8A%E0%B9%80%E0%B8%A7%E0%B8%8A%E0%B9%80%E0%B8%8A%E0%B8%B5%E0%B8%A2%E0%B8%87%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88-hospd641"><p class="mb-2 text-base font-semibold">กดดูเพิ่มเติม</p></a>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- 2 card -->
                    <div class="relative w-64 px-6 py-6 my-4 bg-white shadow-xl rounded-3xl">
                        <div class="absolute flex items-center px-4 py-4 text-white bg-red-500 rounded-full shadow-xl left-4 -top-6">
                            <!-- svg  -->
                            <img src="https://cdn.discordapp.com/attachments/833096639332876339/1213740427090460682/download_3-depositphotos-bgremover.png?ex=65f692dc&is=65e41ddc&hm=1177186e89a68dba24026255049a05f49cc205b9fa428ef5bccf23961521e321&" alt="" srcset="" width="50px">
                        </div>
                        <div class="mt-8">
                            <p class="my-2 text-xl font-semibold">โรงพยาบาลเชียงใหม่ราม</p>
                            <div class="flex space-x-2 text-sm text-gray-400">
                                <!-- svg  -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                 <p>
                                    8 ถนนบุญเรืองฤทธิ์ ตำบลสุเทพ อำเภอเมืองเชียงใหม่ เชียงใหม่ 50200</p>
                            </div>
                            <div class="flex my-3 space-x-2 text-sm text-gray-400">
                                <!-- svg  -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                 <p> 24 ชั่วโมง</p>
                            </div>
                            <div class="border-t-2"></div>

                            <div class="flex justify-between">
                                <div class="my-2">
                                    <a href="https://healthserv.net/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B9%80%E0%B8%8A%E0%B8%B5%E0%B8%A2%E0%B8%87%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88%E0%B8%A3%E0%B8%B2%E0%B8%A1-hospd635"><p class="mb-2 text-base font-semibold">กดดูเพิ่มเติม</p></a>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- 3 card -->
                    <div class="relative w-64 px-6 py-6 my-4 bg-white shadow-xl rounded-3xl">
                        <div class="absolute flex items-center px-4 py-4 text-white bg-blue-500 rounded-full shadow-xl left-4 -top-6">
                            <!-- svg  -->
                            <img src="https://cdn.discordapp.com/attachments/833096639332876339/1213738641960996955/download_2-depositphotos-bgremover.png?ex=65f69132&is=65e41c32&hm=6ee415a2a3932fc50566406b963ca2483ade42c8807bb3125ace2b97eac300d2&" alt="" srcset="" width="50px">
                        </div>
                        <div class="mt-8">
                            <p class="my-2 text-xl font-semibold">โรงพยาบาลแมคคอร์มิค</p>
                            <div class="flex space-x-2 text-sm text-gray-400">
                                <!-- svg  -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                 <p>133 ถนนแก้วนวรัฐ ตำบลวัดเกตุ อำเภอเมืองเชียงใหม่ เชียงใหม่ 50000</p>
                            </div>
                            <div class="flex my-3 space-x-2 text-sm text-gray-400">
                                <!-- svg  -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <p> 24 ชั่วโมง</p>
                            </div>
                            <div class="border-t-2 "></div>

                            <div class="flex justify-between">
                                <div class="my-2">
                                    <a href="https://healthserv.net/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B9%81%E0%B8%A1%E0%B8%84%E0%B8%84%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%A1%E0%B8%B4%E0%B8%84-hospd639"><p class="mb-2 text-base font-semibold">กดดูเพิ่มเติม</p></a>

                                </div>

                            </div>
                        </div>
                    </div>

                     <!-- 4 card -->
                    <div class="relative w-64 px-6 py-6 my-4 bg-white shadow-xl rounded-3xl">
                        <div class="absolute flex items-center px-4 py-4 text-white bg-green-500 rounded-full shadow-xl left-4 -top-6">
                            <!-- svg  -->
                            <img src="https://cdn.discordapp.com/attachments/833096639332876339/1213739616998531072/unnamed_1-depositphotos-bgremover.png?ex=65f6921a&is=65e41d1a&hm=e1a1bb88b46db14213c88467fd1ecdc3233fd83ca073f3fbeaf7da47fe8a5f16&" alt="" srcset="" width="60px" height="60px">
                        </div>
                        <div class="mt-8">
                            <p class="my-2 text-xl font-semibold">โรงพยาบาลลานนา</p>
                            <div class="flex space-x-2 text-sm text-gray-400">
                                <!-- svg  -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                 <p>1 ถนนสุขเกษม ต.ป่าตัน อ.เมือง จ.เชียงใหม่ 50300</p>
                            </div>
                            <div class="flex my-3 space-x-2 text-sm text-gray-400">
                                <!-- svg  -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                 <p>24 ชั่วโมง</p>
                            </div>
                            <div class="border-t-2 "></div>

                            <div class="flex justify-between">
                                <div class="my-2">
                                    <a href="https://healthserv.net/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%A5%E0%B8%B2%E0%B8%99%E0%B8%99%E0%B8%B2-hospd642"><p class="mb-2 text-base font-semibold">กดดูเพิ่มเติม</p></a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>

         <footer class="bg-white dark:bg-white">
            <div class="container p-6 mx-auto">
                <div class="lg:flex">
                    <div class="w-full -mx-6 lg:w-2/5">
                        <div class="px-6">
                            <a href="#">
                                <img class="w-auto h-20 mx-28" src="https://cdn.discordapp.com/attachments/833096639332876339/1213512125436395602/423599767_1237264067233475_135039887890431936_n.png?ex=65f5be3c&is=65e3493c&hm=2bf51f79ae604d06f35256c39570d4a206523796f994b76ce04b95b1b8365b0b&" alt="">
                            </a>

                            <p class="max-w-sm mt-2 text-gray-500 dark:text-gray-700">เว็บสอบถามสุขภาพเป็นทางเลือกที่สะดวกและรวดเร็วในการเริ่มต้นการดูแลสุขภาพของคุณ</p>


                        </div>
                    </div>

                    <div class="mt-6 lg:mt-0 lg:flex-1">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                            <div>
                                <h3 class="text-gray-700 uppercase dark:text-white">About</h3>
                                <a  class="block mt-2 text-sm text-gray-600 dark:text-gray-700 ">รายการรักษา</a>
                                <a  class="block mt-2 text-sm text-gray-600 dark:text-gray-700 ">ข้อมูลอัตราการป่วย</a>
                                <a  class="block mt-2 text-sm text-gray-600 dark:text-gray-700 ">สาระสุขภาพ</a>
                            </div>

                            <div>
                                <h3 class="text-gray-700 uppercase dark:text-white">Blog</h3>
                                <a  class="block mt-2 text-sm text-gray-600 dark:text-gray-700 ">โรงพยาบาล</a>
                                <a  class="block mt-2 text-sm text-gray-600 dark:text-gray-700 ">เกี่ยวกับเรา</a>

                            </div>


                            <div>
                                <h3 class="text-gray-700 uppercase dark:text-white">Contact</h3>
                                <span class="block mt-2 text-sm text-gray-600 dark:text-gray-700 "><i class="px-2 text-lg ri-phone-line" ></i>+1 526 654 8965</span>
                                <span class="block mt-2 text-sm text-gray-600 dark:text-gray-700 "><i class="px-2 text-lg ri-mail-line"></i>example@email.com</span>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="h-px my-6 bg-gray-200 border-none dark:bg-gray-700">

                <div>
                    <p class="text-center text-gray-500 dark:text-gray-700">CSMJU<i class="ri-pulse-fill"></i>HEALTH</p>
                </div>
            </div>







    @endsection
    </body>



</html>
