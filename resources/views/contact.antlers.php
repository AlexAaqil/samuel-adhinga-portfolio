<div class="ContactPage mb-15 py-4 lg:py-16">
    <div class="container-fluid">
        <div class="contact-page-wrapper grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="content">
                <h1 class="text-heading-text lg:text-l-text font-bold uppercase leading-13 mb-4">
                    {{ contact_page_heading | nl2br }}
                </h1>
                <p class="mb-8 max-w-md">
                    {{ contact_page_description | nl2br }}
                </p>
                <div class="space-y-2">
                    <p>{{ footer:address | nl2br }}</p>
                    <p>{{ footer:email_address }}</p>
                    <p>{{ footer:phone_number }}</p>
                </div>
            </div>

            <div class="max-w-xl contact-form">
                {{ form:create in="contact_us" }}
                    {{ if success }}
                        <p class="text-green-600">Thanks — your message has been sent.</p>
                    {{ /if }}

                    {{ fields }}
                        <div class="mb-6">
                            <label for="{{ handle }}" class="block font-medium mb-2">{{ display }}</label>

                            {{ if type == 'textarea' }}
                                <textarea
                                    name="{{ handle }}"
                                    id="{{ handle }}"
                                    rows="4"
                                    class="w-full border border-gray-300 p-4 focus:outline-none focus:border-black rounded-sm"
                                    placeholder="Enter your message or project description."
                                >{{ old }}</textarea>
                            {{ else }}
                                <input
                                    type="{{ if handle == 'email' }}email{{ else }}text{{ /if }}"
                                    name="{{ handle }}"
                                    id="{{ handle }}"
                                    class="w-full border border-gray-300 p-4 focus:outline-none focus:border-black rounded-sm"
                                    placeholder="{{ if handle == 'email' }}janedoe@gmail.com{{ else }}Jane Doe{{ /if }}"
                                    value="{{ old }}"
                                />
                            {{ /if }}

                            {{ if error }}
                                <p class="text-red-500 text-sm mt-1">{{ error }}</p>
                            {{ /if }}
                        </div>
                    {{ /fields }}

                    <button type="submit" class="bg-foreground text-background px-8 py-4 font-bold uppercase tracking-wide hover:bg-gray-800 transition rounded-sm">
                        Send Message
                    </button>
                {{ /form:create }}
            </div>
        </div>
    </div>
</div>