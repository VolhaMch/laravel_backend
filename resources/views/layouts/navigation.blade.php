<div class="navbar bg-neutral text-neutral-content">
    <div class="flex-1">
        <a class="btn btn-ghost text-xl text-white">myLogo</a>
    </div>

<div class="flex flex-row">
    <ul class="flex flex-row">
        <li class="px-2 link link-hover"><a href="/">{{__('menu.home')}}</a></li>
        <li class="px-2 link link-hover"><a href="/portfolio">{{__('menu.portfolio')}}</a></li>
        <li class="px-2 link link-hover"><a href="/case">{{__('menu.case_studies')}}</a></li>
        <li class="px-2 link link-hover"><a href="/blogs">{{__('menu.blog')}}</a></li>
        <li class="px-2 link link-hover"><a href="/contact">{{__('menu.contact_me')}}</a></li>
    </ul>

        <ul class="menu menu-horizontal px-4">
            <li>
                <details>
                    <summary>
                        {{App::getLocale()}}
                    </summary>
                    <ul class="p-2 bg-base-100 rounded-t-none">
                        <li><a href="/?lang=en">EN</a></li>
                        <li><a href="/?lang=ru">RU</a></li>
                    </ul>
                </details>
            </li>

    </ul>
</div>
</div>
