<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <div x-data="{ sidebarIsOpen: false }" class="relative flex w-full flex-col md:flex-row">
        <!-- This allows screen readers to skip the sidebar and go directly to the main content. -->
        <a class="sr-only" href="#main-content">skip to the main content</a>
        
        <!-- dark overlay for when the sidebar is open on smaller screens  -->
        <div x-cloak x-show="sidebarIsOpen" class="fixed inset-0 z-20 bg-surface-dark/10 backdrop-blur-xs md:hidden" aria-hidden="true" x-on:click="sidebarIsOpen = false" x-transition.opacity ></div>
    
        <nav x-cloak class="fixed left-0 z-30 flex h-svh w-60 shrink-0 flex-col border-r border-outline bg-surface-alt p-4 transition-transform duration-300 md:w-64 md:translate-x-0 md:relative dark:border-outline-dark dark:bg-surface-dark-alt" x-bind:class="sidebarIsOpen ? 'translate-x-0' : '-translate-x-60'" aria-label="sidebar navigation">
            <!-- logo  -->
            <a href="#" class="ml-2 w-fit text-2xl font-bold text-on-surface-strong dark:text-on-surface-dark-strong">
                <span class="sr-only">homepage</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 376 155" fill="none" class="w-24" aria-hidden="true">
                    <path d="M54.009 101.344C54.137 103.733 54.777 105.867 55.929 107.744C57.081 109.621 58.745 111.093 60.921 112.16C63.1397 113.227 65.785 113.76 68.857 113.76C71.6303 113.76 74.0623 113.419 76.153 112.736C78.2863 112.053 80.0783 111.221 81.529 110.24C83.0223 109.216 84.1317 108.235 84.857 107.296L91.577 117.28C90.3823 118.773 88.7823 120.16 86.777 121.44C84.8143 122.677 82.297 123.659 79.225 124.384C76.1957 125.152 72.3983 125.536 67.833 125.536C62.073 125.536 57.017 124.405 52.665 122.144C48.313 119.883 44.921 116.619 42.489 112.352C40.057 108.085 38.841 103.008 38.841 97.12C38.841 92 39.929 87.392 42.105 83.296C44.281 79.1573 47.4383 75.8933 51.577 73.504C55.7583 71.1147 60.7717 69.92 66.617 69.92C72.121 69.92 76.8783 70.9867 80.889 73.12C84.9423 75.2107 88.0783 78.2827 90.297 82.336C92.5157 86.3893 93.625 91.3387 93.625 97.184C93.625 97.5253 93.6037 98.2293 93.561 99.296C93.561 100.32 93.5183 101.003 93.433 101.344H54.009ZM78.393 91.296C78.3503 89.9307 77.9237 88.4587 77.113 86.88C76.345 85.3013 75.129 83.9573 73.465 82.848C71.801 81.7387 69.5823 81.184 66.809 81.184C64.0357 81.184 61.753 81.7173 59.961 82.784C58.2117 83.8507 56.889 85.1733 55.993 86.752C55.097 88.288 54.585 89.8027 54.457 91.296H78.393ZM134.234 69.92C137.818 69.92 141.317 70.6667 144.73 72.16C148.143 73.6107 150.938 75.936 153.114 79.136C155.333 82.336 156.442 86.5173 156.442 91.68V124H140.122V94.496C140.122 90.1867 139.098 86.9867 137.05 84.896C135.045 82.8053 132.399 81.76 129.114 81.76C126.981 81.76 124.933 82.3573 122.97 83.552C121.05 84.704 119.471 86.3253 118.234 88.416C117.039 90.464 116.442 92.8107 116.442 95.456V124H100.186V71.456H116.442V79.84C116.911 78.3893 117.978 76.896 119.642 75.36C121.306 73.824 123.418 72.544 125.978 71.52C128.538 70.4533 131.29 69.92 134.234 69.92ZM189.297 152.096C185.457 152.096 181.766 151.733 178.225 151.008C174.726 150.283 171.548 149.152 168.689 147.616C165.83 146.08 163.441 144.075 161.521 141.6L171.377 131.616C172.273 132.768 173.425 133.92 174.833 135.072C176.284 136.267 178.118 137.248 180.337 138.016C182.556 138.827 185.329 139.232 188.657 139.232C191.814 139.232 194.524 138.613 196.785 137.376C199.089 136.181 200.86 134.475 202.097 132.256C203.377 130.037 204.017 127.456 204.017 124.512V123.04H219.953V125.472C219.953 131.275 218.588 136.16 215.857 140.128C213.126 144.096 209.457 147.083 204.849 149.088C200.241 151.093 195.057 152.096 189.297 152.096ZM204.017 124V114.848C203.633 115.787 202.652 117.109 201.073 118.816C199.494 120.523 197.361 122.08 194.673 123.488C192.028 124.853 188.913 125.536 185.329 125.536C180.294 125.536 175.836 124.341 171.953 121.952C168.07 119.52 165.02 116.213 162.801 112.032C160.625 107.808 159.537 103.051 159.537 97.76C159.537 92.4693 160.625 87.7333 162.801 83.552C165.02 79.328 168.07 76 171.953 73.568C175.836 71.136 180.294 69.92 185.329 69.92C188.828 69.92 191.857 70.5173 194.417 71.712C197.02 72.864 199.11 74.2293 200.689 75.808C202.31 77.344 203.356 78.7307 203.825 79.968V71.456H219.953V124H204.017ZM175.473 97.76C175.473 100.704 176.134 103.307 177.457 105.568C178.78 107.787 180.529 109.515 182.705 110.752C184.881 111.989 187.249 112.608 189.809 112.608C192.497 112.608 194.886 111.989 196.977 110.752C199.068 109.472 200.71 107.723 201.905 105.504C203.142 103.243 203.761 100.661 203.761 97.76C203.761 94.8587 203.142 92.2987 201.905 90.08C200.71 87.8187 199.068 86.048 196.977 84.768C194.886 83.488 192.497 82.848 189.809 82.848C187.249 82.848 184.881 83.488 182.705 84.768C180.529 86.0053 178.78 87.7547 177.457 90.016C176.134 92.2347 175.473 94.816 175.473 97.76ZM346.854 69.92C350.438 69.92 353.937 70.6667 357.35 72.16C360.763 73.6107 363.558 75.936 365.734 79.136C367.953 82.336 369.062 86.5173 369.062 91.68V124H352.742V94.496C352.742 90.1867 351.718 86.9867 349.67 84.896C347.665 82.8053 345.019 81.76 341.734 81.76C339.601 81.76 337.553 82.3573 335.59 83.552C333.67 84.704 332.091 86.3253 330.854 88.416C329.659 90.464 329.062 92.8107 329.062 95.456V124H312.806V71.456H329.062V79.84C329.531 78.3893 330.598 76.896 332.262 75.36C333.926 73.824 336.038 72.544 338.598 71.52C341.158 70.4533 343.91 69.92 346.854 69.92Z" class="fill-on-surface-strong dark:fill-on-surface-dark-strong"></path>
                    <path d="M242.508 96.608C242.508 101.301 243.447 105.056 245.324 107.872C247.201 110.645 250.231 112.032 254.412 112.032C258.636 112.032 261.687 110.645 263.564 107.872C265.441 105.056 266.38 101.301 266.38 96.608V71.456H282.38V98.464C282.38 103.883 281.292 108.64 279.116 112.736C276.94 116.789 273.761 119.947 269.58 122.208C265.441 124.427 260.385 125.536 254.412 125.536C248.481 125.536 243.425 124.427 239.244 122.208C235.105 119.947 231.948 116.789 229.772 112.736C227.596 108.64 226.508 103.883 226.508 98.464V71.456H242.508V96.608ZM288.739 124V71.456H304.931V124H288.739ZM297.059 57.888C294.371 57.888 292.088 56.9493 290.211 55.072C288.376 53.1947 287.459 50.9547 287.459 48.352C287.459 45.7493 288.398 43.488 290.275 41.568C292.152 39.648 294.414 38.688 297.059 38.688C298.808 38.688 300.408 39.136 301.859 40.032C303.31 40.8853 304.483 42.0373 305.379 43.488C306.275 44.9387 306.723 46.56 306.723 48.352C306.723 50.9547 305.763 53.1947 303.843 55.072C301.966 56.9493 299.704 57.888 297.059 57.888Z" class="fill-primary dark:fill-primary-dark"></path>
                    <g>
                        <path d="M36.9195 49.9344C37.7242 49.9344 38.3765 49.2951 38.3765 48.5065C38.3765 47.7179 37.7242 47.0786 36.9195 47.0786C36.1147 47.0786 35.4624 47.7179 35.4624 48.5065C35.4624 49.2951 36.1147 49.9344 36.9195 49.9344Z" class="fill-on-surface-strong dark:fill-on-surface-dark-strong"></path>
                        <path d="M68.6288 43.4241C65.7147 38.8016 61.4918 35.244 55.9846 32.7512C50.4528 30.2585 43.7849 29.0242 35.981 29.0242H4V126.024H19.6324C17.8049 112.471 18.2742 101.048 19.8547 91.7063C14.7427 95.7238 12.446 101.46 12.446 101.46C8.24767 90.6415 17.1135 80.0896 24.1024 75.6607C24.7445 73.9908 25.4112 72.4419 26.0533 71.014C29.6589 62.7854 27.1646 56.9528 23.4109 53.0806C18.9903 48.5307 12.8411 46.643 12.8411 46.643C12.8411 46.643 15.9034 41.1734 26.1027 46.8124C27.1152 47.369 28.3747 47.3448 29.3626 46.7398C30.0787 46.3041 30.8443 45.9411 31.6346 45.6023C37.5369 43.0611 44.2541 43.3999 49.3661 46.6672C55.1203 50.3458 62.2079 56.8076 58.3554 69.2715C57.7874 69.5619 56.2563 70.0701 55.7377 70.3363C48.5265 74.1844 40.4263 82.1709 42.2538 92.2146C42.2538 92.2146 47.6621 83.6956 56.7255 82.1225C56.7255 82.1225 70.9749 78.4197 72.8024 63.1969C72.9012 62.1078 73 61.0429 73 59.9054C73 53.5162 71.5429 48.0225 68.6041 43.4241H68.6288Z" class="fill-on-surface-strong dark:fill-on-surface-dark-strong"></path>
                    </g>
                </svg>
            </a>
    
            <!-- search  -->
            <div class="relative my-4 flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" class="absolute left-2 top-1/2 size-5 -translate-y-1/2 text-on-surface/50 dark:text-on-surface-dark/50" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
                </svg>
                <input type="search" class="w-full border border-outline rounded-radius bg-surface px-2 py-1.5 pl-9 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark/50 dark:focus-visible:outline-primary-dark" name="search" aria-label="Search" placeholder="Search"/>
            </div>
    
            <!-- sidebar links  -->
            <div class="flex flex-col gap-2 overflow-y-auto pb-6">
    
                <a href="#" class="flex items-center rounded-radius gap-2 px-2 py-1.5 text-sm font-medium text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus-visible:underline focus:outline-hidden dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true">
                        <path d="M15.5 2A1.5 1.5 0 0 0 14 3.5v13a1.5 1.5 0 0 0 1.5 1.5h1a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 16.5 2h-1ZM9.5 6A1.5 1.5 0 0 0 8 7.5v9A1.5 1.5 0 0 0 9.5 18h1a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 10.5 6h-1ZM3.5 10A1.5 1.5 0 0 0 2 11.5v5A1.5 1.5 0 0 0 3.5 18h1A1.5 1.5 0 0 0 6 16.5v-5A1.5 1.5 0 0 0 4.5 10h-1Z"/>
                    </svg>
                    <span>Dashboard</span>
                </a>
    
                <a href="#" class="flex items-center rounded-radius gap-2 bg-primary/10 px-2 py-1.5 text-sm font-medium text-on-surface-strong underline-offset-2 focus-visible:underline focus:outline-hidden dark:bg-primary-dark/10 dark:text-on-surface-dark-strong">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true">
                        <path d="M13.92 3.845a19.362 19.362 0 0 1-6.3 1.98C6.765 5.942 5.89 6 5 6a4 4 0 0 0-.504 7.969 15.97 15.97 0 0 0 1.271 3.34c.397.771 1.342 1 2.05.59l.867-.5c.726-.419.94-1.32.588-2.02-.166-.331-.315-.666-.448-1.004 1.8.357 3.511.963 5.096 1.78A17.964 17.964 0 0 0 15 10c0-2.162-.381-4.235-1.08-6.155ZM15.243 3.097A19.456 19.456 0 0 1 16.5 10c0 2.43-.445 4.758-1.257 6.904l-.03.077a.75.75 0 0 0 1.401.537 20.903 20.903 0 0 0 1.312-5.745 2 2 0 0 0 0-3.546 20.902 20.902 0 0 0-1.312-5.745.75.75 0 0 0-1.4.537l.029.078Z"/>
                    </svg>
                    <span>Marketing</span>
                    <span class="sr-only">active</span>
                </a>
    
                <a href="#" class="flex items-center rounded-radius gap-2 px-2 py-1.5 text-sm font-medium text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus-visible:underline focus:outline-hidden dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true">
                        <path fill-rule="evenodd" d="M4.606 12.97a.75.75 0 0 1-.134 1.051 2.494 2.494 0 0 0-.93 2.437 2.494 2.494 0 0 0 2.437-.93.75.75 0 1 1 1.186.918 3.995 3.995 0 0 1-4.482 1.332.75.75 0 0 1-.461-.461 3.994 3.994 0 0 1 1.332-4.482.75.75 0 0 1 1.052.134Z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M5.752 12A13.07 13.07 0 0 0 8 14.248v4.002c0 .414.336.75.75.75a5 5 0 0 0 4.797-6.414 12.984 12.984 0 0 0 5.45-10.848.75.75 0 0 0-.735-.735 12.984 12.984 0 0 0-10.849 5.45A5 5 0 0 0 1 11.25c.001.414.337.75.751.75h4.002ZM13 9a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" clip-rule="evenodd"/>
                    </svg>
                    <span>Sales</span>
                </a>
    
                <a href="#" class="flex items-center rounded-radius gap-2 px-2 py-1.5 text-sm font-medium text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus-visible:underline focus:outline-hidden dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true">
                        <path fill-rule="evenodd" d="M1 2.75A.75.75 0 0 1 1.75 2h16.5a.75.75 0 0 1 0 1.5H18v8.75A2.75 2.75 0 0 1 15.25 15h-1.072l.798 3.06a.75.75 0 0 1-1.452.38L13.41 18H6.59l-.114.44a.75.75 0 0 1-1.452-.38L5.823 15H4.75A2.75 2.75 0 0 1 2 12.25V3.5h-.25A.75.75 0 0 1 1 2.75ZM7.373 15l-.391 1.5h6.037l-.392-1.5H7.373Zm7.49-8.931a.75.75 0 0 1-.175 1.046 19.326 19.326 0 0 0-3.398 3.098.75.75 0 0 1-1.097.04L8.5 8.561l-2.22 2.22A.75.75 0 1 1 5.22 9.72l2.75-2.75a.75.75 0 0 1 1.06 0l1.664 1.663a20.786 20.786 0 0 1 3.122-2.74.75.75 0 0 1 1.046.176Z" clip-rule="evenodd"/>                
                    </svg>
                    <span>Performance</span>
                </a>
    
                <a href="#" class="flex items-center rounded-radius gap-2 px-2 py-1.5 text-sm font-medium text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus-visible:underline focus:outline-hidden dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true">
                        <path d="M10 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM6 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM1.49 15.326a.78.78 0 0 1-.358-.442 3 3 0 0 1 4.308-3.516 6.484 6.484 0 0 0-1.905 3.959c-.023.222-.014.442.025.654a4.97 4.97 0 0 1-2.07-.655ZM16.44 15.98a4.97 4.97 0 0 0 2.07-.654.78.78 0 0 0 .357-.442 3 3 0 0 0-4.308-3.517 6.484 6.484 0 0 1 1.907 3.96 2.32 2.32 0 0 1-.026.654ZM18 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0ZM5.304 16.19a.844.844 0 0 1-.277-.71 5 5 0 0 1 9.947 0 .843.843 0 0 1-.277.71A6.975 6.975 0 0 1 10 18a6.974 6.974 0 0 1-4.696-1.81Z"/>
                    </svg>
                    <span>Referrals</span>
                </a>
    
                <a href="#" class="flex items-center rounded-radius gap-2 px-2 py-1.5 text-sm font-medium text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus-visible:underline focus:outline-hidden dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true">
                        <path fill-rule="evenodd" d="M1 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v8a3 3 0 0 1-3 3H4a3 3 0 0 1-3-3V6Zm4 1.5a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm2 3a4 4 0 0 0-3.665 2.395.75.75 0 0 0 .416 1A8.98 8.98 0 0 0 7 14.5a8.98 8.98 0 0 0 3.249-.604.75.75 0 0 0 .416-1.001A4.001 4.001 0 0 0 7 10.5Zm5-3.75a.75.75 0 0 1 .75-.75h2.5a.75.75 0 0 1 0 1.5h-2.5a.75.75 0 0 1-.75-.75Zm0 6.5a.75.75 0 0 1 .75-.75h2.5a.75.75 0 0 1 0 1.5h-2.5a.75.75 0 0 1-.75-.75Zm.75-4a.75.75 0 0 0 0 1.5h2.5a.75.75 0 0 0 0-1.5h-2.5Z" clip-rule="evenodd"/>
                    </svg>
                    <span>Licenses</span>
                </a>
    
                <a href="#" class="flex items-center rounded-radius gap-2 px-2 py-1.5 text-sm font-medium text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus-visible:underline focus:outline-hidden dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.84 1.804A1 1 0 0 1 8.82 1h2.36a1 1 0 0 1 .98.804l.331 1.652a6.993 6.993 0 0 1 1.929 1.115l1.598-.54a1 1 0 0 1 1.186.447l1.18 2.044a1 1 0 0 1-.205 1.251l-1.267 1.113a7.047 7.047 0 0 1 0 2.228l1.267 1.113a1 1 0 0 1 .206 1.25l-1.18 2.045a1 1 0 0 1-1.187.447l-1.598-.54a6.993 6.993 0 0 1-1.929 1.115l-.33 1.652a1 1 0 0 1-.98.804H8.82a1 1 0 0 1-.98-.804l-.331-1.652a6.993 6.993 0 0 1-1.929-1.115l-1.598.54a1 1 0 0 1-1.186-.447l-1.18-2.044a1 1 0 0 1 .205-1.251l1.267-1.114a7.05 7.05 0 0 1 0-2.227L1.821 7.773a1 1 0 0 1-.206-1.25l1.18-2.045a1 1 0 0 1 1.187-.447l1.598.54A6.992 6.992 0 0 1 7.51 3.456l.33-1.652ZM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd"/>
                    </svg>
                    <span>Settings</span>
                </a>
            </div>
        </nav>
    
        <!-- top navbar & main content  -->
        <div class="h-svh w-full overflow-y-auto bg-surface dark:bg-surface-dark">
            <!-- top navbar  -->
            <nav class="sticky top-0 z-10 flex items-center justify-between border-b border-outline bg-surface-alt px-4 py-2 dark:border-outline-dark dark:bg-surface-dark-alt" aria-label="top navibation bar">
    
                <!-- sidebar toggle button for small screens  -->
                <button type="button" class="md:hidden inline-block text-on-surface dark:text-on-surface-dark" x-on:click="sidebarIsOpen = true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-5" aria-hidden="true">
                        <path d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5-1v12h9a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM4 2H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h2z"/>
                    </svg>
                    <span class="sr-only">sidebar toggle</span>
                </button>
    
                <!-- breadcrumbs  -->
                <nav class="hidden md:inline-block text-sm font-medium text-on-surface dark:text-on-surface-dark" aria-label="breadcrumb">
                    <ol class="flex flex-wrap items-center gap-1">
                    <li class="flex items-center gap-1">
                        <a href="#" class="hover:text-on-surface-strong dark:hover:text-on-surface-dark-strong">Dashboard</a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" class="size-4" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>
                        </svg>
                    </li>
    
                    <li class="flex items-center gap-1 font-bold text-on-surface-strong dark:text-on-surface-dark-strong" aria-current="page">Marketing</li>
                    </ol>
                </nav>
    
               
                <!-- Profile Menu  -->
                <div x-data="{ userDropdownIsOpen: false }" class="relative" x-on:keydown.esc.window="userDropdownIsOpen = false">
                    <button type="button" class="flex w-full items-center rounded-radius gap-2 p-2 text-left text-on-surface hover:bg-primary/5 hover:text-on-surface-strong focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong dark:focus-visible:outline-primary-dark" x-bind:class="userDropdownIsOpen ? 'bg-primary/10 dark:bg-primary-dark/10' : ''" aria-haspopup="true" x-on:click="userDropdownIsOpen = ! userDropdownIsOpen" x-bind:aria-expanded="userDropdownIsOpen">
                        <img src="https://penguinui.s3.amazonaws.com/component-assets/avatar-7.webp" class="size-8 object-cover rounded-radius" alt="avatar" aria-hidden="true"/>
                        <div class="hidden md:flex flex-col">
                            <span class="text-sm font-bold text-on-surface-strong dark:text-on-surface-dark-strong">Alex Martinez</span>
                            <span class="text-xs" aria-hidden="true">@alexmartinez</span>
                            <span class="sr-only">profile settings</span>
                        </div>
                    </button>  
                    
                    <!-- menu -->
                    <div x-cloak x-show="userDropdownIsOpen" class="absolute top-14 right-0 z-20 h-fit w-48 border divide-y divide-outline border-outline bg-surface dark:divide-outline-dark dark:border-outline-dark dark:bg-surface-dark rounded-radius" role="menu" x-on:click.outside="userDropdownIsOpen = false" x-on:keydown.down.prevent="$focus.wrap().next()" x-on:keydown.up.prevent="$focus.wrap().previous()" x-transition="" x-trap="userDropdownIsOpen">
                    
                        <div class="flex flex-col py-1.5">
                            <a href="#" class="flex items-center gap-2 px-2 py-1.5 text-sm font-medium text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus-visible:underline focus:outline-hidden dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong" role="menuitem">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true">
                                    <path d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z"/>
                                </svg>
                                <span>Profile</span>
                            </a>
                        </div>
    
                        <div class="flex flex-col py-1.5">
                            <a href="#" class="flex items-center gap-2 px-2 py-1.5 text-sm font-medium text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus-visible:underline focus:outline-hidden dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong" role="menuitem">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.84 1.804A1 1 0 0 1 8.82 1h2.36a1 1 0 0 1 .98.804l.331 1.652a6.993 6.993 0 0 1 1.929 1.115l1.598-.54a1 1 0 0 1 1.186.447l1.18 2.044a1 1 0 0 1-.205 1.251l-1.267 1.113a7.047 7.047 0 0 1 0 2.228l1.267 1.113a1 1 0 0 1 .206 1.25l-1.18 2.045a1 1 0 0 1-1.187.447l-1.598-.54a6.993 6.993 0 0 1-1.929 1.115l-.33 1.652a1 1 0 0 1-.98.804H8.82a1 1 0 0 1-.98-.804l-.331-1.652a6.993 6.993 0 0 1-1.929-1.115l-1.598.54a1 1 0 0 1-1.186-.447l-1.18-2.044a1 1 0 0 1 .205-1.251l1.267-1.114a7.05 7.05 0 0 1 0-2.227L1.821 7.773a1 1 0 0 1-.206-1.25l1.18-2.045a1 1 0 0 1 1.187-.447l1.598.54A6.992 6.992 0 0 1 7.51 3.456l.33-1.652ZM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd"/>
                                </svg>
                                <span>Settings</span>
                            </a>
                            <a href="#" class="flex items-center gap-2 px-2 py-1.5 text-sm font-medium text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus-visible:underline focus:outline-hidden dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong" role="menuitem">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M2.5 4A1.5 1.5 0 0 0 1 5.5V6h18v-.5A1.5 1.5 0 0 0 17.5 4h-15ZM19 8.5H1v6A1.5 1.5 0 0 0 2.5 16h15a1.5 1.5 0 0 0 1.5-1.5v-6ZM3 13.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75Zm4.75-.75a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z" clip-rule="evenodd"/>
                                </svg>
                                <span>Payments</span>
                            </a>
                        </div>
    
                        <div class="flex flex-col py-1.5">
                            <a href="#" class="flex items-center gap-2 px-2 py-1.5 text-sm font-medium text-on-surface underline-offset-2 hover:bg-primary/5 hover:text-on-surface-strong focus-visible:underline focus:outline-hidden dark:text-on-surface-dark dark:hover:bg-primary-dark/5 dark:hover:text-on-surface-dark-strong" role="menuitem">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd"/>
                                    <path fill-rule="evenodd" d="M6 10a.75.75 0 0 1 .75-.75h9.546l-1.048-.943a.75.75 0 1 1 1.004-1.114l2.5 2.25a.75.75 0 0 1 0 1.114l-2.5 2.25a.75.75 0 1 1-1.004-1.114l1.048-.943H6.75A.75.75 0 0 1 6 10Z" clip-rule="evenodd"/>
                                </svg>
                                <span>Sign Out</span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- main content  -->
            <div id="main-content" class="p-4">
                <div class="overflow-y-auto">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>
