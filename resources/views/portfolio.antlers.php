<div class="PortfolioPage">
    <section class="Hero mb-15">
        <div class="container-fluid py-4 lg:py-16">
            <h1 class="font-bold text-heading-text uppercase lg:text-center">{{ portfolio_page_title }}</h1>
        </div>
    </section>

    <section class="Portfolio mb-15">
        <div class="container-fluid">
            <div class="portfolio-wrapper grid gap-8 lg:grid-cols-2">
                {{ portfolio }}
                    <div class="portfolio">
                        <div class="image h-[40dvh] lg:h-[60dvh]">
                            <img src={{ image }} alt={{ image:alt ?? title }} class="h-full w-full object-cover" />
                        </div>

                        <div class="content space-y-1 py-4 px-2">
                            <p class="font-bold">{{ title }}</p>
                            <p class="text-caption-text">{{ project_year }}</p>
                        </div>
                    </div>
                {{ /portfolio }}
            </div>
        </div>
    </section>
</div>