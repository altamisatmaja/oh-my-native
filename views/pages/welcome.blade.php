<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="<?= BASE_URL . '/public/icons.svg' ?>" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?= BASE_URL . '/public/css/output.css' ?>" rel="stylesheet">
    <title><?= $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="bg-[#D2544F] py-10 sm:py-10">
        <div class="mx-auto max-w-7xl max-h-screen px-6 lg:px-8">
            <div class="mx-auto max-w-2xl sm:text-center">
                <img src="<?= BASE_URL . '/public/assets/icons/ohmynative.svg' ?>" alt="ohmynative">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Simple and Useable 🤩</h2>
                <p class="mt-6 text-lg leading-8 text-white">Made because of the hassle in PWEB class where they make
                    us use PHP Native instead of Laravel. So, here's like a mini version of Laravel, you know, to keep
                    it chill. 🌾🤩

                </p>
            </div>
            <div
                class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
                <div class="p-8 sm:p-10 lg:flex-auto">
                    <h3 class="text-2xl font-bold tracking-tight text-white">Why OhMyNative?</h3>
                    <p class="mt-6 text-base leading-7 text-white">Lorem ipsum dolor sit amet consect etur
                        adipisicing elit. Itaque amet indis perferendis blanditiis repellendus etur quidem assumenda.
                    </p>
                    <div class="mt-10 flex items-center gap-x-4">
                        <h4 class="flex-none text-sm font-semibold leading-6 text-white">Inside of OhMyNative</h4>
                        <div class="h-px flex-auto bg-gray-100"></div>
                    </div>
                    <ul role="list"
                        class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-white sm:grid-cols-2 sm:gap-6">
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            PHP MVC
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            OOP Pattern
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            Custom Routes
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                    clip-rule="evenodd" />
                            </svg>
                            REST API
                        </li>
                    </ul>
                </div>
                <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
                    <div
                        class="rounded-2xl bg-[#C2433E] py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                        <div class="mx-auto max-w-xs px-8">
                            <p class="text-base font-semibold text-white">Use now and Boom!</p>
                            <p class="mt-6 flex items-baseline justify-center gap-x-2">
                                <span class="text-5xl font-bold tracking-tight text-white">Chill! 🤪</span>
                            </p>
                            <a target="_blank" href="https://github.com/altamisatmaja/oh-my-native"
                                class="mt-10 block w-full rounded-md ring-1 ring-gray-200 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-400">Clone</a>
                            <a href="<?= BASE_URL . '/crud' ?>"
                                class="mt-10 block w-full rounded-md ring-1 ring-gray-200 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-400">Form</a>
                            <p class="mt-6 text-xs leading-5 text-white">Got any problems or requests? Just hit up the
                                issues section and drop it there, no stress! 👋
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>

</html>
