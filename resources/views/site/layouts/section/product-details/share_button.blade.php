<div>
    @php
        $social = option('default_template_social', '');
    @endphp
    @if (in_array(1, $social))
        <div class="relative" x-data="{ open: false }" x-cloak
            @keydown.window.escape="open = false">
            <div @click="open = !open">
                <button class="flex items-center">
                    <svg class="bi bi-share text-gray-10" width="14" height="16" viewBox="0 0 14 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0513 11.8454C10.4521 11.4831 10.9763 11.2519 11.5621 11.2519C12.8031 11.2519 13.8128 12.2616 13.8128 13.5026C13.8128 14.7436 12.8031 15.7534 11.5621 15.7534C10.3211 15.7534 9.31132 14.7436 9.31132 13.5026C9.31132 13.333 9.33444 13.1634 9.37298 13.0016L3.88485 9.79503C3.46862 10.1804 2.92135 10.4194 2.31241 10.4194C1.03288 10.4194 0 9.38651 0 8.10697C0 6.82744 1.03288 5.79456 2.31241 5.79456C2.92135 5.79456 3.46862 6.03351 3.88485 6.41891L9.31903 3.2509C9.28049 3.07362 9.24965 2.89633 9.24965 2.71134C9.24965 1.4318 10.2825 0.398926 11.5621 0.398926C12.8416 0.398926 13.8745 1.4318 13.8745 2.71134C13.8745 3.99088 12.8416 5.02375 11.5621 5.02375C10.9531 5.02375 10.4059 4.7848 9.98963 4.3994L4.55545 7.56741C4.59399 7.74469 4.62483 7.92198 4.62483 8.10697C4.62483 8.29196 4.59399 8.46925 4.55545 8.64653L10.0513 11.8454ZM12.3327 2.71134C12.3327 2.2874 11.9858 1.94054 11.5619 1.94054C11.1379 1.94054 10.7911 2.2874 10.7911 2.71134C10.7911 3.13529 11.1379 3.48215 11.5619 3.48215C11.9858 3.48215 12.3327 3.13529 12.3327 2.71134ZM2.31175 8.87779C1.88781 8.87779 1.54095 8.53093 1.54095 8.10699C1.54095 7.68304 1.88781 7.33618 2.31175 7.33618C2.7357 7.33618 3.08256 7.68304 3.08256 8.10699C3.08256 8.53093 2.7357 8.87779 2.31175 8.87779ZM10.7911 13.518C10.7911 13.9419 11.1379 14.2888 11.5619 14.2888C11.9858 14.2888 12.3327 13.9419 12.3327 13.518C12.3327 13.0941 11.9858 12.7472 11.5619 12.7472C11.1379 12.7472 10.7911 13.0941 10.7911 13.518Z"/>
                    </svg>
                </button>
            </div>

            <div x-show.transition="open" @click.away="open = false" class="absolute ltr:right-0 rtl:left-0 -mt-2 text-gray-600 bg-white rounded-md border border-gray-400 dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700 z-40">

                <div class=" absolute mt-7 ltr:ml-10 ltr:border-r-0 ltr:rotate-45 ltr:-translate-x-12 rtl:mr-10 rtl:border-l-0 rtl:-rotate-45 rtl:translate-x-12 border-b-0 z-20 bg-white border border-gray-300 h-4 w-4 transform  -translate-y-3">

                </div>
                <div x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu" class="absolute flex z-10 ltr:-right-16 rtl:-left-16 top-4 w-80 px-4 py-6 mt-2 space-y-2 text-gray-600 bg-white border border-gray-200 rounded-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700" aria-label="submenu">
                    <p class=" dm-sans font-medium text-gray-12 ltr:mr-3 rtl:ml-3 mt-2">{{ __('Share on') }}:</p>
                    @if ($social['facebook'])
                    <a href="https://www.facebook.com/sharer.php?u={{ urlencode(route('site.productDetails', ['slug' => $slug])) }}"
                    target="_blank">
                        <svg class="ltr:mr-7p rtl:ml-7p transition ease-in-out delay-130 hover:text-gray-12 hover:border-gray-12 border border-gray-2 rounded-full cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <path d="M17.6004 8.38641C17.6004 7.47764 16.7986 6.67578 15.8898 6.67578H8.99383C8.08506 6.67578 7.2832 7.47764 7.2832 8.38641V15.2824C7.2832 16.1912 8.08506 16.993 8.99383 16.993H12.4685V13.0906H11.1856V11.38H12.4685V10.6851C12.4685 9.50901 13.3239 8.49332 14.393 8.49332H15.7829V10.204H14.393C14.2326 10.204 14.0723 10.3643 14.0723 10.6851V11.38H15.7829V13.0906H14.0723V16.993H15.8898C16.7986 16.993 17.6004 16.1912 17.6004 15.2824V8.38641Z" fill="currentColor" />
                        </svg>
                    </a>
                    @endif
                    @if ($social['whatsapp'])
                    <a href="https://api.whatsapp.com/send?text={{ urlencode(route('site.productDetails', ['slug' => $slug])) }}"
                        target="_blank">
                        <svg class="ltr:mr-7p rtl:ml-7p hover:text-gray-12 transition  ease-in-out delay-130 hover:border-gray-12 border border-gray-2 rounded-full cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                            <path d="M17.2938 7.32151C16.0948 6.12668 14.4961 5.46289 12.8087 5.46289C9.30052 5.46289 6.45847 8.29507 6.45847 11.7911C6.45847 12.8974 6.76932 14.0037 7.3022 14.933L6.41406 18.2077L9.789 17.3227C10.7215 17.8094 11.7429 18.075 12.8087 18.075C16.3168 18.075 19.1589 15.2428 19.1589 11.7468C19.1145 10.1094 18.4928 8.51634 17.2938 7.32151ZM15.8728 14.0479C15.7395 14.402 15.1178 14.756 14.807 14.8002C14.5406 14.8445 14.1853 14.8445 13.83 14.756C13.608 14.6675 13.2972 14.579 12.9419 14.402C11.3432 13.7382 10.3219 12.1451 10.2331 12.0123C10.1443 11.9238 9.56697 11.1715 9.56697 10.375C9.56697 9.57841 9.96663 9.22438 10.0998 9.04737C10.2331 8.87036 10.4107 8.87036 10.5439 8.87036C10.6327 8.87036 10.766 8.87036 10.8548 8.87036C10.9436 8.87036 11.0768 8.82611 11.21 9.13588C11.3432 9.44565 11.6541 10.2422 11.6985 10.2865C11.7429 10.375 11.7429 10.4635 11.6985 10.552C11.6541 10.6405 11.6097 10.729 11.5209 10.8175C11.4321 10.906 11.3432 11.0388 11.2988 11.083C11.21 11.1715 11.1212 11.26 11.21 11.3928C11.2988 11.5698 11.6097 12.0566 12.0982 12.4991C12.7199 13.0301 13.2083 13.2071 13.386 13.2957C13.5636 13.3842 13.6524 13.3399 13.7412 13.2514C13.83 13.1629 14.1409 12.8089 14.2297 12.6319C14.3185 12.4548 14.4517 12.4991 14.585 12.5434C14.7182 12.5876 15.5175 12.9859 15.6507 13.0744C15.8284 13.1629 15.9172 13.2071 15.9616 13.2514C16.006 13.3842 16.006 13.6939 15.8728 14.0479Z" fill="currentColor" />
                        </svg>
                    </a>
                    @endif
                    @if ($social['instagram'])
                    <a href="https://www.instagram.com/sharer.php?u={{ urlencode(route('site.productDetails', ['slug' => $slug])) }}"
                        target="_blank">
                        <svg class="ltr:mr-7p rtl:ml-7p transition  ease-in-out delay-130 hover:text-gray-12 hover:border-gray-12 border border-gray-2 rounded-full cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" width="25" height="25"viewBox="0 0 25 25" fill="none">
                            <path d="M16.8217 7.2832H9.44088C8.60756 7.2832 7.97266 7.91811 7.97266 8.75143V16.1322C7.97266 16.9655 8.60756 17.6004 9.44088 17.6004H16.8217C17.655 17.6004 18.2899 16.9655 18.2899 16.1322V8.75143C18.2899 7.91811 17.655 7.2832 16.8217 7.2832ZM13.1313 15.537C14.8376 15.537 16.2264 14.1878 16.2264 12.5609C16.2264 12.2831 16.1868 11.9656 16.1074 11.7276H16.9804V15.9338C16.9804 16.1322 16.8217 16.3306 16.5836 16.3306H9.67897C9.48056 16.3306 9.28215 16.1719 9.28215 15.9338V11.6879H10.1948C10.1155 11.9656 10.0758 12.2434 10.0758 12.5212C10.0361 14.1878 11.425 15.537 13.1313 15.537ZM13.1313 14.3465C12.0202 14.3465 11.1472 13.4735 11.1472 12.4021C11.1472 11.3307 12.0202 10.4577 13.1313 10.4577C14.2424 10.4577 15.1154 11.3307 15.1154 12.4021C15.1154 13.5132 14.2424 14.3465 13.1313 14.3465ZM16.9407 10.1006C16.9407 10.3387 16.7423 10.5371 16.5042 10.5371H15.3931C15.155 10.5371 14.9566 10.3387 14.9566 10.1006V9.0292C14.9566 8.79111 15.155 8.5927 15.3931 8.5927H16.5042C16.7423 8.5927 16.9407 8.79111 16.9407 9.0292V10.1006Z"
                                fill="currentColor" />
                        </svg>
                    </a>
                    @endif
                    @if ($social['linkedin'])
                    <a href="http://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('site.productDetails', ['slug' => $slug])) }}"
                        target="_blank">
                        <svg class="ltr:mr-7p rtl:ml-7p transition  ease-in-out delay-130 hover:text-gray-12  hover:border-gray-12  border border-gray-2  rounded-full cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            viewBox="0 0 25 25" fill="none">

                            <path
                                d="M17.0273 12.5901V15.9376H15.0678V12.7943C15.0678 12.0186 14.782 11.4879 14.088 11.4879C13.5574 11.4879 13.2308 11.8553 13.1083 12.1819C13.0675 12.3044 13.0267 12.4677 13.0267 12.6718V15.9376H11.0672C11.0672 15.9376 11.108 10.6307 11.0672 10.1H13.0267V10.9164C13.2716 10.5082 13.7615 9.93668 14.782 9.93668C16.0475 9.93668 17.0273 10.794 17.0273 12.5901ZM9.02604 7.2832C8.37288 7.2832 7.92383 7.73225 7.92383 8.30377C7.92383 8.87529 8.33205 9.32434 8.98522 9.32434C9.6792 9.32434 10.0874 8.87529 10.0874 8.30377C10.1283 7.69143 9.72002 7.2832 9.02604 7.2832ZM8.0463 15.9376H10.0058V10.1H8.0463V15.9376Z"
                                fill="currentColor" />
                        </svg>
                    </a>
                    @endif
                    @if ($social['pinterest'])
                    <a href="http://pinterest.com/pin/create/button/?url={{ urlencode(route('site.productDetails', ['slug' => $slug])) }}"
                        target="_blank">
                        <svg class="ltr:mr-7p rtl:ml-7p transition  ease-in-out delay-130 hover:text-gray-12  hover:border-gray-12  border border-gray-2  rounded-full cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            viewBox="0 0 25 25" fill="none">

                            <path
                                d="M16.1614 7.83793C15.3867 7.06317 14.273 6.67578 13.0624 6.67578C11.2223 6.67578 10.1086 7.45055 9.47912 8.08004C8.70436 8.8548 8.26855 9.87168 8.26855 10.937C8.26855 12.2444 8.8012 13.2128 9.72123 13.6002C9.76966 13.6486 9.8665 13.6486 9.91492 13.6486C10.1086 13.6486 10.2539 13.5034 10.3023 13.3097C10.3507 13.2128 10.3992 12.9223 10.4476 12.777C10.496 12.5349 10.4476 12.4381 10.3023 12.2444C10.0602 11.9538 9.91492 11.5665 9.91492 11.0822C9.91492 9.67799 10.9802 8.17689 12.9171 8.17689C14.4667 8.17689 15.4351 9.04849 15.4351 10.4527C15.4351 11.3244 15.2414 12.1475 14.9025 12.777C14.6603 13.2128 14.2245 13.6971 13.595 13.6971C13.3045 13.6971 13.0624 13.6002 12.9171 13.3581C12.7719 13.1644 12.7234 12.9223 12.7719 12.6802C12.8203 12.3897 12.9171 12.0991 13.014 11.8086C13.1592 11.2759 13.3529 10.7433 13.3529 10.3559C13.3529 9.67799 12.9171 9.19376 12.2876 9.19376C11.4644 9.19376 10.8349 10.0169 10.8349 11.0338C10.8349 11.5665 10.9802 11.9054 11.0287 12.0507C10.9318 12.4865 10.3023 15.0529 10.2055 15.4887C10.157 15.7792 9.72123 18.0067 10.3991 18.1519C11.1255 18.3456 11.8034 16.1666 11.8518 15.9245C11.9002 15.7308 12.0939 14.956 12.1908 14.5202C12.5297 14.8592 13.1108 15.1013 13.6919 15.1013C14.7572 15.1013 15.6772 14.6171 16.3551 13.7455C16.9846 12.9223 17.372 11.7602 17.372 10.4527C17.3236 9.58114 16.9362 8.56427 16.1614 7.83793Z"
                                fill="currentColor" />
                        </svg>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    @endif
</div>
