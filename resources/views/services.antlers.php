<div class="ServicesPage">
    <section class="Hero mb-15">
        <div class="container-fluid py-4 lg:py-16">
            <h1 class="font-bold text-l-text uppercase lg:text-center">{{ services_page_title }}</h1>
        </div>
    </section>

    <section class="Services mb-15">
        <div class="container-fluid">
            <div class="services-wrapper grid gap-8 lg:grid-cols-2">
                {{ services }}
                    <div class="service">
                        <div class="image h-[40dvh] lg:h-[60dvh]">
                            <img src={{ image }} alt={{ image:alt ?? title }} class="h-full w-full object-cover" />
                        </div>

                        <div class="content space-y-1 py-4 px-2">
                            <p class="font-bold">{{ title }}</p>
                            <p class="text-caption-text">{{ short_description }}</p>
                        </div>
                    </div>
                {{ /services }}
            </div>
        </div>
    </section>
</div>