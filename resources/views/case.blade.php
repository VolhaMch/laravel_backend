<x-app-layout>
    <h1>Примеры проектов</h1>
    <p>Описания запросов от лидов, приведенных в компанию. Подробные детали проектов и заказчиков скрыты согласно договора о неразглашении</p>
    <div class="carousel w-full mt-8 mx-4">

        <div id="item1" class="carousel-item w-full">
            <div class="grid grid-cols-2 m-2 md:grid-cols-4 gap-2">
                <div class="col-span-1 h-40 w-40"><img src="/img/QA.jpg"></div>
                <div class="col-span-1"><p class="text-blue-500">{{__('menu.technologies') }}</p> <p>ИТ консалтинг</p></div>
                <div class="col-span-2">
                    <div class="grid grid-cols-2 grid-rows-3 gap-2">
                        <div> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>крупный банк из Омана</p></div>
                        <div><p class="text-blue-500">{{__('menu.requirements') }}</p> <p>Consultancy Services for the Update of IT Strategy</p></div>
                        <div> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>Транспортный центр из ОАЭ</p></div>
                        <div> <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>Consultancy Services for the Update of IT Strategy</p></div>
                        <div> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>крупный банк из Омана</p></div>
                        <div><p class="text-blue-500">{{__('menu.requirements') }}</p> <p>Consultancy Services for the Update of IT Strategy</p></div>
                        <div> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>Транспортный центр из ОАЭ</p></div>
                        <div> <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>Consultancy Services for the Update of IT Strategy</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="item2" class="carousel-item w-full">
            <div class="grid grid-cols-2 m-2 md:grid-cols-4 gap-2">
                <div class="col-span-1 h-40 w-40"><img src="/img/QA.jpg"></div>
                <div class="col-span-1"><p class="text-blue-500">{{__('menu.technologies') }}</p> <p>Кибербезопасность</p></div>
                <div class="col-span-2">
                    <div class="grid grid-cols-2 grid-rows-3 gap-2">
                    <div> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>Recruitment provider in the supply chain industry from the UK</p></div>
                        <div> <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>Vulnerability assesment and pen testing(VAPT)</p></div>
                        <div>  <p class="text-blue-500">{{__('menu.customer') }}</p> <p> full-fledged systems integrator and managed security services provider</p></div>
                        <div>  <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>Penetration testing</p></div>
                </div>
                            </div>
                </div>
            </div>

        <div id="item3" class="carousel-item w-full">
            <div class="grid grid-cols-2 m-2 md:grid-cols-4 gap-2">
                <div class="col-span-1 h-40 w-40"><img src="/img/QA.jpg"></div>
                <div class="col-span-1"><p class="text-blue-500">{{__('menu.technologies') }}</p> <p>Custom software development</p></div>
                <div class="col-span-2">
                    <div class="grid grid-cols-2 grid-rows-3 gap-2">
                        <div> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>Компания по разработке ПО с главным офисом в ОАЭ</p></div>
                        <div><p class="text-blue-500">{{__('menu.requirements') }}</p> <p>Development of E-Commerce platform from scratch</p></div>
                        <div> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>Компания по разработке ПО с главным офисом в ОАЭ</p></div>
                        <div> <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>Development of project management tool from scratch</p></div>
                        <div> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>some company</p></div>
                        <div><p class="text-blue-500">{{__('menu.requirements') }}</p> <p>Development, Implementation and Maintenance of Smart
                                Parking Solution</p></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="item4" class="carousel-item w-full">
            <div class="grid grid-cols-2 m-2 md:grid-cols-4 gap-2">
                <div class="col-span-1 h-40 w-40"><img src="/img/QA.jpg"></div>
                <div class="col-span-1"><p class="text-blue-500">{{__('menu.technologies') }}</p> <p>Outstaffing</p></div>
                <div class="col-span-2">
                    <div class="grid grid-cols-2 grid-rows-3 gap-2">
                        <div> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>Software development outsourcing company from the UK</p></div>
                        <div><p class="text-blue-500">{{__('menu.requirements') }}</p> <p>Senior Magento developers</p></div>
                        <div> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>IT Solutions and Services Provider company, UAE</p></div>
                        <div> <p class="text-blue-500">{{__('menu.requirements') }}</p> <p>.Net, Sharepoint developers</p></div>
                        <div> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>Software development outsourcing company, UAE</p></div>
                        <div><p class="text-blue-500">{{__('menu.requirements') }}</p> <p>UX designers</p></div>
                        <div> <p class="text-blue-500">{{__('menu.customer') }}</p> <p>Компания, занимающаяся корпоративной платформой банковского программного обеспечения</p></div>
                        <div><p class="text-blue-500">{{__('menu.requirements') }}</p> <p>Java/GWT developers</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex w-full justify-center gap-2 py-2">
        <a href="#item1" class="btn btn-md">1</a>
        <a href="#item2" class="btn btn-md">2</a>
        <a href="#item3" class="btn btn-md">3</a>
        <a href="#item4" class="btn btn-md">4</a>
    </div>
</x-app-layout>
