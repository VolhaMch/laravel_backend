<x-app-layout>

    <div class="m-4 bg-white rounded-2xl pb-8">
    <h1 class="text-center text-xl font-bold pt-6 pb-4 lg:text-2xl">Skills</h1>

    <div class="grid grid-cols-2  md:grid-cols-4 gap-4">

        <div class="grid grid-col-1 justify-items-center" x-data="{ open: false }">
            <div><button  @click="open = !open"  class="btn btn-outline m-2">Marketing</button></div>
            <div x-show="open">
                <ul>
                    <li class="m-2">Leadconnect</li><hr>
                    <li class="m-2">Sales Navigator</li><hr>
                    <li class="m-2">LinkedHelper</li><hr>
                </ul>
            </div>
        </div>

        <div class="grid grid-col-1 justify-items-center" x-data="{ open: false }">
            <button  @click="open = !open"  class="btn btn-outline m-2">Tech skills</button>
            <div x-show="open">
                <ul>
                    <li class="m-2">Vue.js</li><hr>
                    <li class="m-2">Laravel</li><hr>
                    <li class="m-2">Git</li><hr>
                </ul>
            </div>
        </div>
        <div class="grid grid-col-1 justify-items-center" x-data="{ open: false }">
            <button  @click="open = !open"  class="btn btn-outline m-2">Languages</button>
            <div x-show="open">
                <ul>
                    <li class="m-2">English, C1</li><hr>
                    <li class="m-2">Polish, A1</li><hr>
                    <li class="m-2">German, A1</li><hr>
                </ul>
            </div>
        </div>
        <div class="grid grid-col-1 justify-items-center" x-data="{ open: false }">
            <button  @click="open = !open"  class="btn btn-outline m-2">All skills</button>
            <div x-show="open">
                <ul>
                    <li class="m-2">Leadconnect</li> <hr>
                    <li class="m-2">Sales Navigator</li> <hr>
                    <li class="m-2">LinkedHelper</li> <hr>
                    <li class="m-2">Vue.js</li> <hr>
                    <li class="m-2">Laravel</li> <hr>
                    <li class="m-2">Git</li> <hr>
                    <li class="m-2">English</li> <hr>
                    <li class="m-2">Polish</li> <hr>
                    <li class="m-2">German</li> <hr>
                </ul>
            </div>
        </div>
    </div>
    </div>

    <div class="m-4 bg-white rounded-2xl">
    <h1 class="text-center text-xl font-bold pt-6 pb-4 lg:text-2xl">Working experience</h1>
    <div class="flex flex-col overflow-y-auto text-base ml-2 mr-2 md:text-lg ml-10">


        <div class="flex flex-row mt-16 gap-6 lg:ml-10">
            <div>
                <img class="h-20 w-20"  src="/img/scnsoft.png" alt="ScienceSoft">
            </div>

            <div>
                <h1 class="font-bold">Customer Relationship Manager</h1>
                <h2>ScienceSoft</h2>
                <h3 class="text-gray-400">May 2020-present</h3>
            </div>


        </div>
        <div class="ml-2 md:ml-24">

            <!-- <p>International IT consulting company with HQ in McKinney, USA, and branches in the UAE and Europe. <br>
              With 700+ middle and senior level specialists on board, ScienceSoft have been bringing custom and platform-based solutions to large and midsized companies in Healthcare, Banking, Retail, Telecom and other industries. Walmart, Nestle, eBay, NASA JPL, T-Mobile, Baxter along with other influencers rely on company's solutions in their daily operations.</p> -->
            <br>
            <p>Responsibilities:
            <ul>
                <li> > incoming requests processing from the company's website;</li>
                <li> > establishing of partnership relations with potential suppliers of IT services;</li>
                <li> > search of potential clients, consulting regarding company's services, finding a basis for potential collaboration.</li>
            </ul>
            </p>
            <br>
        </div>
        <hr>
        <div class="flex flex-row mt-16 gap-6 lg:ml-10">
            <div>
                <img class="h-20 w-20"  src="/img/ocsico.png" alt="OCSICO">
            </div>
            <div>

                <h1 class="font-bold">Marketing assistant</h1>
                <h2><abbr>OCSICO</abbr></h2>
                <h3 class="text-gray-400">Sep 2018 - May 2020</h3>
            </div>

            <!-- <p>Software development services provider, offering project-based software development.
            <br> Technical expertise includes .NET, Java, PHP technologies, Mobile solutions development (native, cross-platform), Quality Assurance, Web and Mobile design.
            The company has been successfully collaborated with the clients from Europe, USA and Canada since 2002 till 2020, after then it was merged with ScienceSoft.</p> -->
        </div>
        <br>
        <div class="ml-4 mb-16 md:ml-24">
            <p>Responsibilities:
            <ul>
                <li> > business consulting of possible and existing customers concerning IT services;</li>
                <li> > targeted search of potential customers;</li>
                <li> > clients database accumulation and enlargement.</li>
            </ul>
            </p>
        </div>
    </div>
    </div>

    <div class="m-4 bg-white rounded-2xl">
<h1 class="text-center text-xl font-bold pt-6 pb-4 lg:text-2xl">Education</h1>
    <div class="flex flex-col gap-4 pb-4 text-sm lg:ml-10 text-lg">
    <div class="flex flex-row gap-4 ml-2 mr-2">
        <div>
            <img class="h-20 w-20"  src="/img/bsuir.png" alt="bsuir">
        </div>
        <div>
            <p class="font-bold"> <a href="https://iti.bsuir.by">Belarusian State University of Informatics and Radioelectronics</a></p>
            <div>
                <p class="text-gray-400">2023-2024</p>
                <p>Web designer and programmer</p>
                <br>
                <p>Postgraduate diploma (PGDip)</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="flex flex-row gap-4 ml-2 mr-2">
        <div>
            <img class="h-20 w-20"  src="/img/bsu.jpg" alt="bsu">
        </div>
        <div>
            <p class="font-bold"> <a href="https://hist.bsu.by">Belarusian State University, faculty of History</a></p>
            <div>
                <p class="text-gray-400">2013-2019</p>
                <p>History and political science</p>
                <br>
                <p>Bachelor's degree, Master's degree</p>
            </div>

    </div>
</div>
<hr>

    <div class="flex flex-row gap-4 ml-2 mr-2">
        <div>
            <img class="h-20 w-20"  src="/img/streamline.jpg" alt="streamline">
        </div>
        <div>
            <p class="font-bold"><a href="https://str.by/">Streamline language school</a></p>
            <div>
                <p class="text-gray-400">2017-2019</p>
                <p>English, C1</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="flex flex-row gap-4 ml-2 mr-2">
        <div>
            <img class="h-20 w-20"  src="/img/universityofKent.jpg" alt="kent">
        </div>
        <div>
            <p class="font-bold"><a href="https://www.kent.ac.uk/">University of Kent</a></p>
            <div>
                <p class="text-gray-400">Jan-Feb 2018</p>
                <p>Internship as an Erasmus+ student in political science</p>
            </div>
        </div>
    </div>
    </div>

</div>
<hr>
<br>
    </div>

    </x-app-layout>
