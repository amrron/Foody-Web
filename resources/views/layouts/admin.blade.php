<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | {{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="/img/LOGO.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Freckle+Face&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <main class="vh-100 w-100 d-flex">
        <aside class="bg-biru-muda vh-100" style="width: 300px">
            <div class="py-5">
                <h1 class="text-center">
                    <a href="/adminpanel">
                        <svg width="194" height="83" viewBox="0 0 194 83" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M28.6195 22.2892V29.8439H12.8484V38.0051H24.6492V45.3392H12.8484V61H3.4189V22.2892H28.6195ZM51.8832 61.386C48.2437 61.386 44.8983 60.5405 41.847 58.8494C38.8325 57.1583 36.4246 54.8055 34.6232 51.791C32.8586 48.7398 31.9764 45.3209 31.9764 41.5343C31.9764 37.7478 32.8586 34.3473 34.6232 31.3328C36.4246 28.3183 38.8325 25.9655 41.847 24.2744C44.8983 22.5833 48.2437 21.7378 51.8832 21.7378C55.5226 21.7378 58.8496 22.5833 61.8641 24.2744C64.9154 25.9655 67.305 28.3183 69.0328 31.3328C70.7974 34.3473 71.6797 37.7478 71.6797 41.5343C71.6797 45.3209 70.7974 48.7398 69.0328 51.791C67.2682 54.8055 64.8787 57.1583 61.8641 58.8494C58.8496 60.5405 55.5226 61.386 51.8832 61.386ZM51.8832 52.7836C54.9712 52.7836 57.4343 51.7543 59.2724 49.6956C61.1473 47.6369 62.0847 44.9165 62.0847 41.5343C62.0847 38.1154 61.1473 35.395 59.2724 33.3731C57.4343 31.3144 54.9712 30.2851 51.8832 30.2851C48.7584 30.2851 46.2585 31.296 44.3836 33.3179C42.5455 35.3399 41.6265 38.0787 41.6265 41.5343C41.6265 44.9532 42.5455 47.692 44.3836 49.7507C46.2585 51.7726 48.7584 52.7836 51.8832 52.7836ZM95.2333 61.386C91.5938 61.386 88.2484 60.5405 85.1972 58.8494C82.1827 57.1583 79.7747 54.8055 77.9734 51.791C76.2088 48.7398 75.3265 45.3209 75.3265 41.5343C75.3265 37.7478 76.2088 34.3473 77.9734 31.3328C79.7747 28.3183 82.1827 25.9655 85.1972 24.2744C88.2484 22.5833 91.5938 21.7378 95.2333 21.7378C98.8728 21.7378 102.2 22.5833 105.214 24.2744C108.266 25.9655 110.655 28.3183 112.383 31.3328C114.148 34.3473 115.03 37.7478 115.03 41.5343C115.03 45.3209 114.148 48.7398 112.383 51.791C110.618 54.8055 108.229 57.1583 105.214 58.8494C102.2 60.5405 98.8728 61.386 95.2333 61.386ZM95.2333 52.7836C98.3213 52.7836 100.784 51.7543 102.623 49.6956C104.497 47.6369 105.435 44.9165 105.435 41.5343C105.435 38.1154 104.497 35.395 102.623 33.3731C100.784 31.3144 98.3213 30.2851 95.2333 30.2851C92.1085 30.2851 89.6087 31.296 87.7338 33.3179C85.8957 35.3399 84.9766 38.0787 84.9766 41.5343C84.9766 44.9532 85.8957 47.692 87.7338 49.7507C89.6087 51.7726 92.1085 52.7836 95.2333 52.7836ZM134.779 22.2892C138.859 22.2892 142.425 23.098 145.476 24.7156C148.528 26.3331 150.88 28.6124 152.535 31.5534C154.226 34.4576 155.071 37.8213 155.071 41.6446C155.071 45.4311 154.226 48.7949 152.535 51.7359C150.88 54.6769 148.509 56.9561 145.421 58.5737C142.37 60.1912 138.822 61 134.779 61H120.276V22.2892H134.779ZM134.172 52.8388C137.738 52.8388 140.513 51.8646 142.499 49.9162C144.484 47.9677 145.476 45.2106 145.476 41.6446C145.476 38.0787 144.484 35.3031 142.499 33.3179C140.513 31.3328 137.738 30.3402 134.172 30.3402H129.705V52.8388H134.172ZM193.537 22.2892L180.138 48.2067V61H170.708V48.2067L157.308 22.2892H168.006L175.505 38.5014L182.95 22.2892H193.537Z"
                                fill="#131049" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M100.072 35.7402C100.125 35.8141 100.163 35.8977 100.183 35.9862C100.204 36.0747 100.207 36.1663 100.192 36.2559C100.177 36.3455 100.144 36.4313 100.096 36.5083C100.048 36.5854 99.9853 36.6522 99.9113 36.7049L98.4584 37.743C98.2349 37.9024 98.0649 38.1257 97.9709 38.3836C97.8768 38.6415 97.8631 38.9218 97.9314 39.1876L100.243 36.8757C100.307 36.8097 100.383 36.757 100.468 36.7208C100.552 36.6845 100.643 36.6654 100.735 36.6646C100.827 36.6638 100.918 36.6813 101.003 36.7161C101.088 36.7509 101.165 36.8022 101.23 36.8672C101.295 36.9321 101.346 37.0093 101.381 37.0943C101.416 37.1793 101.433 37.2704 101.432 37.3622C101.431 37.454 101.412 37.5448 101.376 37.6291C101.34 37.7135 101.287 37.7898 101.221 37.8536L98.9093 40.1655C99.1751 40.2338 99.4554 40.2201 99.7133 40.126C99.9712 40.0319 100.195 39.862 100.354 39.6385L101.392 38.1856C101.501 38.0415 101.661 37.9456 101.839 37.9182C102.018 37.8908 102.199 37.9342 102.346 38.039C102.493 38.1438 102.593 38.3018 102.625 38.4793C102.657 38.6568 102.618 38.8398 102.517 38.9891L101.48 40.4428C101.082 41 100.49 41.3882 99.8197 41.531C99.15 41.6738 98.451 41.5609 97.8602 41.2146L96.2717 42.8031L99.1465 45.6779C99.2725 45.8084 99.3422 45.983 99.3406 46.1644C99.339 46.3457 99.2663 46.5192 99.1381 46.6474C99.0098 46.7756 98.8364 46.8483 98.6551 46.8499C98.4737 46.8515 98.299 46.7818 98.1686 46.6558L95.2938 43.781L92.419 46.6558C92.3552 46.7218 92.2789 46.7745 92.1945 46.8108C92.1101 46.847 92.0194 46.8661 91.9275 46.8669C91.8357 46.8677 91.7447 46.8502 91.6597 46.8154C91.5747 46.7807 91.4975 46.7293 91.4325 46.6644C91.3676 46.5994 91.3162 46.5222 91.2815 46.4372C91.2467 46.3522 91.2292 46.2612 91.23 46.1694C91.2308 46.0775 91.2499 45.9868 91.2861 45.9024C91.3224 45.818 91.3751 45.7417 91.4411 45.6779L94.3159 42.8031L93.2025 41.6897C92.8823 41.8626 92.4992 41.994 92.0919 42.0417C91.6782 42.0938 91.2581 42.0491 90.8647 41.9111C90.4713 41.7731 90.1153 41.5455 89.8249 41.2464C89.1825 40.6033 88.8152 39.7948 88.724 39.0182C88.6341 38.254 88.8069 37.4352 89.3671 36.8757C89.9266 36.3156 90.7447 36.1427 91.5089 36.2326C92.2855 36.3246 93.0946 36.6918 93.7371 37.3342C94.0362 37.6247 94.2637 37.9806 94.4018 38.374C94.5398 38.7674 94.5845 39.1875 94.5324 39.6012C94.4857 39.9901 94.366 40.3666 94.1797 40.7111L95.2938 41.8245L96.8823 40.2367C96.5362 39.646 96.4234 38.9472 96.5662 38.2775C96.709 37.6079 97.0971 37.0159 97.6541 36.6178L99.1078 35.5797C99.257 35.4731 99.4424 35.4301 99.6233 35.4602C99.8043 35.4903 99.9658 35.591 100.072 35.7402ZM90.0974 38.8564C90.1527 39.3266 90.3816 39.8474 90.8028 40.2678C91.1638 40.6288 91.5628 40.7104 91.9307 40.6676C92.3318 40.6205 92.661 40.4269 92.7896 40.299C92.9183 40.1703 93.1112 39.8412 93.1582 39.44C93.2018 39.0714 93.1202 38.6724 92.7592 38.3121C92.3374 37.8909 91.8173 37.662 91.347 37.6067C90.8643 37.55 90.5179 37.68 90.3443 37.8536C90.1714 38.0272 90.0407 38.373 90.0974 38.8564Z"
                                fill="#131049" />
                            <path
                                d="M50.4731 41.9762V32.4745C50.4731 32.1463 50.5873 31.861 50.8155 31.6327C51.0438 31.4044 51.3291 31.2903 51.6573 31.2903C51.9854 31.2903 52.2707 31.4044 52.499 31.6327C52.7273 31.861 52.8414 32.1463 52.8414 32.4745V39.9075L56.8076 37.6676C57.0929 37.4964 57.3925 37.4536 57.7064 37.5392C58.0203 37.6248 58.2628 37.8245 58.4197 38.1241C58.591 38.4095 58.6195 38.7091 58.5339 39.0229C58.4483 39.3368 58.2628 39.5936 57.9775 39.7505L52.442 42.8464C52.2258 43.0498 51.9397 43.1622 51.643 43.1603C51.4875 43.1629 51.333 43.1339 51.189 43.0751C51.0449 43.0163 50.9143 42.929 50.805 42.8183C50.6956 42.7076 50.6098 42.576 50.5528 42.4312C50.4958 42.2865 50.4687 42.1317 50.4731 41.9762Z"
                                fill="#131049" />
                            <path
                                d="M96.718 60.7801C94.8409 60.8561 92.0107 60.3319 92.0107 60.3319C92.0107 60.3319 90.1735 63.0117 88.7043 64.6456C88.0879 65.3311 81.5786 68.3964 82.5399 71.8723C83.7749 76.3373 93.388 71.7886 96.718 68.567C100.192 65.2058 101.762 59.9958 101.762 59.9958C101.762 59.9958 98.8129 60.6953 96.718 60.7801Z"
                                fill="#131049" />
                            <path d="M36.46 18.7741L42.378 26.0525" stroke="#131049" stroke-width="3.67321"
                                stroke-linecap="round" />
                            <path d="M67.2742 18.7741L61.3562 26.0525" stroke="#131049" stroke-width="3.67321"
                                stroke-linecap="round" />
                            <path d="M51.5479 15.373L52.1744 24.7328" stroke="#131049" stroke-width="3.67321"
                                stroke-linecap="round" />
                            <path d="M79.9943 18.7741L85.9123 26.0525" stroke="#131049" stroke-width="3.67321"
                                stroke-linecap="round" />
                            <path d="M110.809 18.7741L104.891 26.0525" stroke="#131049" stroke-width="3.67321"
                                stroke-linecap="round" />
                            <path d="M95.0822 15.373L95.7087 24.7328" stroke="#131049" stroke-width="3.67321"
                                stroke-linecap="round" />
                        </svg>
                    </a>
                </h1>
            </div>
            <nav class="d-flex flex-column align-items-center">
                <ul class="list-unstyled w-100 px-3">
                    <li class="mb-3">
                        <p class="text-biru fw-normal">MONITORING</p>
                    </li>
                    <li class="mb-3">
                        <a class="text-biru  fw-medium" href="/adminpanel">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30"
                                fill="none">
                                <g clip-path="url(#clip0_1095_2041)">
                                    <path
                                        d="M20.5514 10.3239L15.5425 15.534C15.0022 15.2586 14.3872 15.1942 13.8063 15.3521C13.2255 15.51 12.7161 15.8801 12.3681 16.3969C12.0202 16.9138 11.8561 17.5441 11.9049 18.1766C11.9537 18.809 12.2123 19.4029 12.6349 19.8532C13.0574 20.3035 13.6168 20.5812 14.2142 20.6373C14.8116 20.6934 15.4085 20.5243 15.8995 20.1598C16.3904 19.7953 16.7438 19.259 16.8971 18.6455C17.0505 18.032 16.9939 17.381 16.7375 16.8073L21.7549 11.5973L20.5514 10.3239Z"
                                        fill="#131049" />
                                    <path
                                        d="M14.361 2.0648C11.6359 2.06141 8.96676 2.90342 6.66889 4.49136C4.37102 6.07931 2.54038 8.34687 1.39319 11.0262C0.245999 13.7056 -0.169831 16.6849 0.194813 19.6122C0.559456 22.5394 1.68934 25.2925 3.45102 27.5461L3.71079 27.8746H25.0113L25.2711 27.5461C27.0327 25.2925 28.1626 22.5394 28.5273 19.6122C28.8919 16.6849 28.4761 13.7056 27.3289 11.0262C26.1817 8.34687 24.3511 6.07931 22.0532 4.49136C19.7553 2.90342 17.0862 2.06141 14.361 2.0648ZM24.1801 25.9975H4.54203C2.98837 23.8902 2.05068 21.3281 1.84916 18.6394H4.83642V16.7623H1.84916C1.99416 13.7822 3.04446 10.9377 4.83642 8.67211L6.95782 10.9715L8.1787 9.64819L6.07462 7.33939C8.13823 5.36239 10.7473 4.18101 13.4952 3.97942V7.2643H15.2269V3.9888C18.2622 4.2274 21.1136 5.65529 23.2488 8.00586C25.3839 10.3564 26.6567 13.469 26.8296 16.7623H23.8164V18.6394H26.8729C26.6714 21.3281 25.7337 23.8902 24.1801 25.9975Z"
                                        fill="#131049" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1095_2041">
                                        <rect width="28.5893" height="29.9394" fill="white"
                                            transform="translate(0.0664062)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span class="ms-3">Dashboard</span>
                        </a>
                    </li>
                    <li class="mb-3">
                        <p class="text-biru fw-normal">MASTER DATA</p>
                    </li>
                    <li class="mb-3">
                        <a class="text-biru  fw-medium" href="/adminpanel/userdata">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30"
                                fill="none">
                                <path
                                    d="M5.80876 11.1313C5.1607 11.1313 4.53918 10.8617 4.08093 10.3818C3.62268 9.90196 3.36523 9.25108 3.36523 8.57242V4.73403C3.36523 4.05536 3.62268 3.40449 4.08093 2.9246C4.53918 2.44471 5.1607 2.17511 5.80876 2.17511H10.6958C11.3439 2.17511 11.9654 2.44471 12.4237 2.9246C12.8819 3.40449 13.1393 4.05536 13.1393 4.73403V8.57242C13.1393 9.25108 12.8819 9.90196 12.4237 10.3818C11.9654 10.8617 11.3439 11.1313 10.6958 11.1313H5.80876ZM5.80876 8.57242H10.6958V4.73403H5.80876V8.57242ZM5.80876 27.7643C5.1607 27.7643 4.53918 27.4947 4.08093 27.0148C3.62268 26.535 3.36523 25.8841 3.36523 25.2054V14.9697C3.36523 14.2911 3.62268 13.6402 4.08093 13.1603C4.53918 12.6804 5.1607 12.4108 5.80876 12.4108H10.6958C11.3439 12.4108 11.9654 12.6804 12.4237 13.1603C12.8819 13.6402 13.1393 14.2911 13.1393 14.9697V25.2054C13.1393 25.8841 12.8819 26.535 12.4237 27.0148C11.9654 27.4947 11.3439 27.7643 10.6958 27.7643H5.80876ZM5.80876 25.2054H10.6958V14.9697H5.80876V25.2054ZM15.5829 25.2054C15.5829 25.8841 15.8403 26.535 16.2986 27.0148C16.7568 27.4947 17.3783 27.7643 18.0264 27.7643H22.9135C23.5615 27.7643 24.183 27.4947 24.6413 27.0148C25.0995 26.535 25.357 25.8841 25.357 25.2054V22.6465C25.357 21.9678 25.0995 21.3169 24.6413 20.8371C24.183 20.3572 23.5615 20.0876 22.9135 20.0876H18.0264C17.3783 20.0876 16.7568 20.3572 16.2986 20.8371C15.8403 21.3169 15.5829 21.9678 15.5829 22.6465V25.2054ZM22.9135 25.2054H18.0264V22.6465H22.9135V25.2054ZM18.0264 17.5286C17.3783 17.5286 16.7568 17.259 16.2986 16.7792C15.8403 16.2993 15.5829 15.6484 15.5829 14.9697V4.73403C15.5829 4.05536 15.8403 3.40449 16.2986 2.9246C16.7568 2.44471 17.3783 2.17511 18.0264 2.17511H22.9135C23.5615 2.17511 24.183 2.44471 24.6413 2.9246C25.0995 3.40449 25.357 4.05536 25.357 4.73403V14.9697C25.357 15.6484 25.0995 16.2993 24.6413 16.7792C24.183 17.259 23.5615 17.5286 22.9135 17.5286H18.0264ZM18.0264 14.9697H22.9135V4.73403H18.0264V14.9697Z"
                                    fill="#131049" fill-opacity="0.8" />
                            </svg>
                            <span class="ms-3">User Data</span>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a class="text-biru  fw-medium" href="/adminpanel/fooddata">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30"
                                fill="none">
                                <g clip-path="url(#clip0_1095_2036)">
                                    <path
                                        d="M5.62702 6.82057C5.59088 6.43092 5.63298 6.03767 5.75061 5.66607C5.86823 5.29448 6.05878 4.95276 6.31002 4.66287C6.56125 4.37298 6.86762 4.14134 7.20943 3.98282C7.55124 3.8243 7.92093 3.74242 8.29476 3.74242H12.5742C12.8112 3.74242 13.0384 3.841 13.206 4.01646C13.3735 4.19192 13.4676 4.42989 13.4676 4.67803V5.39283C13.4676 6.6952 12.5796 7.60461 11.9095 8.14164C11.8289 8.20166 11.7592 8.27647 11.704 8.36245C11.6951 8.37706 11.6879 8.39277 11.6826 8.40923L11.6808 8.42045V8.42607L11.6862 8.44478C11.6933 8.46349 11.7112 8.49717 11.7505 8.54395C11.8872 8.69667 12.0511 8.81998 12.2329 8.90697C12.735 9.16894 13.4855 9.35606 14.361 9.35606C15.2402 9.35606 15.9906 9.16894 16.4874 8.90697C16.6698 8.82019 16.8343 8.69687 16.9716 8.54395C17.0012 8.50922 17.0248 8.46932 17.0413 8.42607V8.40923C17.036 8.39276 17.0288 8.37705 17.0198 8.36245C16.9646 8.27647 16.895 8.20166 16.8144 8.14164C16.1443 7.60461 15.2562 6.6952 15.2562 5.39283V4.67803C15.2562 4.43022 15.3501 4.19252 15.5173 4.01712C15.6844 3.84171 15.9112 3.74292 16.1479 3.74242H20.4273C20.8012 3.74242 21.1708 3.8243 21.5127 3.98282C21.8545 4.14134 22.1608 4.37298 22.4121 4.66287C22.6633 4.95276 22.8539 5.29448 22.9715 5.66607C23.0891 6.03767 23.1312 6.43092 23.0951 6.82057L22.6609 12.1629H23.0843C23.4328 12.1629 23.8348 11.8878 24.2905 11.2647C24.6657 10.752 25.2339 10.2917 25.9754 10.2917C26.9904 10.2917 27.6676 11.1281 28.0374 11.9047C28.4359 12.7373 28.6557 13.8226 28.6557 14.9697C28.6557 16.1167 28.4359 17.2021 28.0374 18.0347C27.6676 18.8113 26.9904 19.6477 25.9754 19.6477C25.2339 19.6477 24.6657 19.1874 24.2905 18.6747C23.8348 18.0516 23.4328 17.7765 23.0843 17.7765H22.6609L23.0951 23.1188C23.1312 23.5085 23.0891 23.9017 22.9715 24.2733C22.8539 24.6449 22.6633 24.9866 22.4121 25.2765C22.1608 25.5664 21.8545 25.7981 21.5127 25.9566C21.1708 26.1151 20.8012 26.197 20.4273 26.197H16.1479C15.9109 26.197 15.6837 26.0984 15.5161 25.9229C15.3486 25.7475 15.2545 25.5095 15.2545 25.2614V24.5466C15.2545 23.2442 16.1425 22.3348 16.8126 21.7978C16.8932 21.7377 16.9628 21.6629 17.0181 21.5769C17.027 21.5623 17.0342 21.5466 17.0395 21.5302L17.0413 21.5189V21.5133C17.025 21.4694 17.0014 21.4289 16.9716 21.3936C16.8347 21.2415 16.6709 21.1188 16.4892 21.0324C15.9871 20.7705 15.2366 20.5833 14.361 20.5833C13.4837 20.5833 12.7315 20.7705 12.2347 21.0324C12.0522 21.1192 11.8877 21.2425 11.7505 21.3954C11.7209 21.4302 11.6973 21.4701 11.6808 21.5133V21.5189L11.6826 21.5302C11.6879 21.5466 11.6951 21.5623 11.704 21.5769C11.7326 21.6275 11.7934 21.7042 11.9095 21.7978C12.5796 22.3348 13.4676 23.2442 13.4676 24.5466V25.2614C13.4676 25.5095 13.3735 25.7475 13.206 25.9229C13.0384 26.0984 12.8112 26.197 12.5742 26.197H8.29476C7.92093 26.197 7.55124 26.1151 7.20943 25.9566C6.86762 25.7981 6.56125 25.5664 6.31002 25.2765C6.05878 24.9866 5.86823 24.6449 5.75061 24.2733C5.63298 23.9017 5.59088 23.5085 5.62702 23.1188L6.06301 17.7765H5.63774C5.28931 17.7765 4.88727 18.0516 4.43163 18.6747C4.0564 19.1874 3.48818 19.6477 2.74665 19.6477C1.73173 19.6477 1.05452 18.8113 0.684649 18.0347C0.286186 17.2021 0.0664062 16.1167 0.0664062 14.9697C0.0664062 13.8226 0.286186 12.7373 0.684649 11.9047C1.05452 11.1281 1.73173 10.2917 2.74665 10.2917C3.48818 10.2917 4.0564 10.752 4.43163 11.2647C4.88727 11.8878 5.28931 12.1629 5.63774 12.1629H6.06301L5.62702 6.82057ZM8.29476 5.61364C8.16982 5.6135 8.04625 5.64081 7.93202 5.6938C7.81779 5.74679 7.71544 5.82428 7.63158 5.92127C7.54772 6.01825 7.48422 6.13258 7.44518 6.25686C7.40614 6.38115 7.39242 6.51262 7.40492 6.6428L7.4067 6.6559L7.92488 13.018C7.93553 13.1472 7.92043 13.2772 7.88055 13.3999C7.84067 13.5226 7.77687 13.6353 7.69321 13.7309C7.60955 13.8264 7.50784 13.9027 7.39454 13.9549C7.28124 14.0071 7.15882 14.0341 7.03504 14.0341H5.63774C4.39411 14.0341 3.52571 13.1041 3.01289 12.4024C2.95558 12.3179 2.88414 12.245 2.80204 12.1872C2.7881 12.1778 2.77309 12.1703 2.75737 12.1648L2.74665 12.1629H2.74129C2.69935 12.1799 2.66063 12.2046 2.62693 12.2359C2.48175 12.3792 2.36461 12.5508 2.28207 12.7411C2.03192 13.2669 1.85324 14.0528 1.85324 14.9697C1.85324 15.8885 2.03192 16.6762 2.28207 17.1964C2.40715 17.4584 2.53223 17.6175 2.62872 17.7035C2.66188 17.7346 2.69998 17.7593 2.74129 17.7765H2.74665L2.75737 17.7746C2.77309 17.7691 2.7881 17.7616 2.80204 17.7522C2.88414 17.6944 2.95558 17.6215 3.01289 17.537C3.52571 16.8353 4.39411 15.9053 5.63774 15.9053H7.03504C7.15866 15.9054 7.28091 15.9323 7.39408 15.9844C7.50725 16.0365 7.60887 16.1126 7.6925 16.2079C7.77614 16.3032 7.83998 16.4157 7.87998 16.5382C7.91998 16.6607 7.93527 16.7905 7.92488 16.9195L7.4067 23.2966C7.39422 23.4266 7.40789 23.5579 7.44683 23.6821C7.48577 23.8062 7.54911 23.9205 7.63277 24.0174C7.71643 24.1144 7.81856 24.1919 7.93258 24.245C8.0466 24.2981 8.16997 24.3256 8.29476 24.3258H11.6504C11.5647 24.0151 11.302 23.6671 10.8231 23.2835C10.3335 22.8905 9.89397 22.2955 9.89397 21.5189C9.89397 20.4561 10.6927 19.7469 11.4342 19.3596C12.2294 18.9423 13.2657 18.7121 14.361 18.7121C15.4564 18.7121 16.4927 18.9423 17.2879 19.3596C18.0294 19.7469 18.8281 20.4561 18.8281 21.5189C18.8281 22.2955 18.3886 22.8905 17.899 23.2835C17.4201 23.6671 17.1574 24.0133 17.0717 24.3258H20.4273C20.5523 24.3259 20.6758 24.2986 20.7901 24.2456C20.9043 24.1926 21.0066 24.1151 21.0905 24.0181C21.1744 23.9211 21.2379 23.8068 21.2769 23.6825C21.3159 23.5582 21.3297 23.4268 21.3172 23.2966L21.3154 23.2835L20.7972 16.9214C20.7866 16.7922 20.8017 16.6622 20.8415 16.5395C20.8814 16.4168 20.9452 16.3041 21.0289 16.2085C21.1125 16.113 21.2142 16.0367 21.3275 15.9845C21.4408 15.9323 21.5633 15.9053 21.687 15.9053H23.0843C24.328 15.9053 25.1964 16.8353 25.7092 17.537C25.7985 17.6586 25.8718 17.7223 25.92 17.7522C25.9433 17.7672 25.9576 17.7709 25.9647 17.7746C25.9682 17.7758 25.9718 17.7765 25.9754 17.7765H25.9808C26.0227 17.7594 26.0614 17.7347 26.0952 17.7035C26.2403 17.5602 26.3575 17.3886 26.44 17.1983C26.6902 16.6744 26.8689 15.8885 26.8689 14.9697C26.8689 14.0491 26.6902 13.2632 26.44 12.743C26.3571 12.5519 26.2394 12.3796 26.0934 12.2359C26.0602 12.2049 26.0221 12.1802 25.9808 12.1629H25.9754L25.9647 12.1648C25.949 12.1703 25.934 12.1778 25.92 12.1872C25.8379 12.245 25.7665 12.3179 25.7092 12.4024C25.1964 13.1041 24.328 14.0341 23.0843 14.0341H21.687C21.5633 14.0341 21.4408 14.0071 21.3275 13.9549C21.2142 13.9027 21.1125 13.8264 21.0289 13.7309C20.9452 13.6353 20.8814 13.5226 20.8415 13.3999C20.8017 13.2772 20.7866 13.1472 20.7972 13.018L21.3154 6.6428C21.3279 6.51278 21.3142 6.38146 21.2753 6.25731C21.2363 6.13315 21.173 6.01892 21.0893 5.92196C21.0057 5.825 20.9035 5.74748 20.7895 5.69437C20.6755 5.64127 20.5521 5.61377 20.4273 5.61364H17.0717C17.1574 5.92426 17.4201 6.2723 17.899 6.6559C18.3886 7.04886 18.8281 7.6439 18.8281 8.42045C18.8281 9.4833 18.0294 10.1925 17.2879 10.5798C16.4927 10.9971 15.4564 11.2273 14.361 11.2273C13.2657 11.2273 12.2294 10.9971 11.4342 10.5798C10.6927 10.1925 9.89397 9.4833 9.89397 8.42045C9.89397 7.6439 10.3335 7.04886 10.8231 6.6559C11.302 6.2723 11.5647 5.92613 11.6504 5.61364H8.29476Z"
                                        fill="#131049" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1095_2036">
                                        <rect width="28.5893" height="29.9394" fill="white"
                                            transform="translate(0.0664062)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span class="ms-3">Food Data</span>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a class="text-biru  fw-medium" href="/adminpanel/feedback">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27" fill="none">
                                <g clip-path="url(#clip0_1095_2079)">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.44873 0.247476V20.6228H16.0049V19.1674H1.83848V1.70286H20.6001V3.24556H21.9899V0.247476H0.44873ZM21.9899 7.52439C21.9899 7.91038 21.8435 8.28056 21.5828 8.5535C21.3222 8.82644 20.9687 8.97977 20.6001 8.97977C20.2315 8.97977 19.8781 8.82644 19.6174 8.5535C19.3568 8.28056 19.2104 7.91038 19.2104 7.52439C19.2104 7.1384 19.3568 6.76821 19.6174 6.49528C19.8781 6.22234 20.2315 6.06901 20.6001 6.06901C20.9687 6.06901 21.3222 6.22234 21.5828 6.49528C21.8435 6.76821 21.9899 7.1384 21.9899 7.52439ZM23.3796 7.52439C23.3796 8.29637 23.0868 9.03673 22.5655 9.58261C22.0443 10.1285 21.3373 10.4352 20.6001 10.4352C19.863 10.4352 19.156 10.1285 18.6347 9.58261C18.1135 9.03673 17.8206 8.29637 17.8206 7.52439C17.8206 6.75241 18.1135 6.01204 18.6347 5.46617C19.156 4.92029 19.863 4.61362 20.6001 4.61362C21.3373 4.61362 22.0443 4.92029 22.5655 5.46617C23.0868 6.01204 23.3796 6.75241 23.3796 7.52439Z" fill="#131049"/>
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M17.1904 11.7669C17.578 11.3795 18.0931 11.1632 18.6288 11.1629H21.4653C22.4826 11.1629 23.4297 11.5253 24.1593 12.2471C24.8612 12.9414 25.2267 13.8313 25.3761 14.6747C25.6109 16.0006 25.3677 17.4494 24.7694 18.7338V24.6252C24.7695 25.0817 24.6056 25.5216 24.3103 25.8574C24.015 26.1933 23.61 26.4006 23.1755 26.4383C22.7411 26.4759 22.309 26.3412 21.965 26.0607C21.6211 25.7802 21.3903 25.3746 21.3187 24.9243L20.9476 22.5927L20.5766 24.9243C20.5049 25.3746 20.2742 25.7802 19.9302 26.0607C19.5863 26.3412 19.1542 26.4759 18.7197 26.4383C18.2853 26.4006 17.8802 26.1933 17.5849 25.8574C17.2897 25.5216 17.1258 25.0817 17.1258 24.6252V20.2619V17.7798C16.8089 17.9714 16.4494 18.0723 16.0835 18.0723H12.5382C11.9854 18.0723 11.4551 17.8423 11.0642 17.4329C10.6732 17.0235 10.4536 16.4682 10.4536 15.8892C10.4536 15.3103 10.6732 14.755 11.0642 14.3456C11.4551 13.9362 11.9854 13.7062 12.5382 13.7062H15.2483L17.1904 11.7661V11.7669ZM18.5156 20.2408V24.6252C18.5158 24.7163 18.5487 24.8041 18.6077 24.871C18.6668 24.938 18.7477 24.9793 18.8344 24.9868C18.9211 24.9943 19.0074 24.9674 19.0761 24.9115C19.1449 24.8556 19.1911 24.7747 19.2056 24.6848L19.9303 20.1324C19.9573 19.9625 20.041 19.8081 20.1664 19.6967C20.2919 19.5853 20.451 19.5241 20.6155 19.5241H21.2798C21.4443 19.5241 21.6034 19.5853 21.7288 19.6967C21.8543 19.8081 21.938 19.9625 21.9649 20.1324L22.6897 24.6848C22.7042 24.7747 22.7504 24.8556 22.8191 24.9115C22.8878 24.9674 22.9741 24.9943 23.0609 24.9868C23.1476 24.9793 23.2285 24.938 23.2875 24.871C23.3466 24.8041 23.3795 24.7163 23.3797 24.6252V18.5606C23.3797 18.4441 23.4064 18.3293 23.4575 18.2259C23.994 17.1416 24.1892 15.9533 24.0099 14.9403C23.9009 14.3247 23.6458 13.7411 23.2053 13.3052C22.7557 12.8606 22.1595 12.6183 21.4653 12.6183H18.6295C18.4509 12.6183 18.2786 12.6903 18.1494 12.8191L16.0064 14.96C15.8772 15.0892 15.7055 15.1614 15.5269 15.1616H12.5382C12.3539 15.1616 12.1772 15.2382 12.0469 15.3747C11.9166 15.5112 11.8434 15.6962 11.8434 15.8892C11.8434 16.0822 11.9166 16.2673 12.0469 16.4038C12.1772 16.5403 12.3539 16.6169 12.5382 16.6169H16.0835C16.2621 16.6168 16.4338 16.5446 16.563 16.4154L17.3412 15.6382C17.4397 15.5399 17.5635 15.474 17.6974 15.4488C17.8313 15.4235 17.9693 15.4399 18.0943 15.496C18.2194 15.5521 18.3259 15.6454 18.4008 15.7643C18.4757 15.8833 18.5156 16.0226 18.5156 16.165V20.2416V20.2408Z" fill="#131049"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_1095_2079">
                                    <rect width="25.0156" height="26.197" fill="white" transform="translate(0.44873 0.247476)"/>
                                  </clipPath>
                                </defs>
                            </svg>
                            <span class="ms-3">Feedback</span>
                        </a>
                    </li>
                    <li class="mb-3">
                        <p class="text-biru fw-normal">SYSTEM</p>
                    </li>
                    <li class="mb-3">
                        <a class="text-biru  fw-medium" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="29" viewBox="0 0 27 29" fill="none">
                                <g clip-path="url(#clip0_1095_2066)">
                                  <path d="M23.96 15.4036V14.6566V13.8997L25.811 12.2484C26.1522 11.9418 26.3761 11.522 26.4431 11.0634C26.5101 10.6047 26.416 10.1366 26.1773 9.74189L23.9022 5.81012C23.7331 5.51157 23.4901 5.26359 23.1973 5.09106C22.9046 4.91854 22.5725 4.82753 22.2344 4.82718C22.0249 4.82554 21.8165 4.85874 21.6174 4.92548L19.2749 5.73149C18.8704 5.45745 18.4485 5.21117 18.012 4.99428L17.5203 2.51727C17.4322 2.06473 17.1907 1.65822 16.8382 1.3689C16.4858 1.07958 16.0447 0.925893 15.5923 0.934733H11.0806C10.6282 0.925893 10.1871 1.07958 9.83466 1.3689C9.48218 1.65822 9.24072 2.06473 9.15257 2.51727L8.66091 4.99428C8.22125 5.21112 7.79615 5.45739 7.3884 5.73149L5.09401 4.88616C4.89282 4.83271 4.68447 4.81279 4.47703 4.82718C4.13893 4.82753 3.80685 4.91854 3.51413 5.09106C3.2214 5.26359 2.97832 5.51157 2.80927 5.81012L0.534161 9.74189C0.309144 10.136 0.225529 10.5977 0.297636 11.0478C0.369743 11.4979 0.593085 11.9084 0.929412 12.2091L2.75142 13.9096V15.4135L0.929412 17.0648C0.583585 17.3675 0.354134 17.7854 0.281777 18.2443C0.20942 18.7031 0.298838 19.1733 0.534161 19.5713L2.80927 23.5031C2.97832 23.8016 3.2214 24.0496 3.51413 24.2221C3.80685 24.3947 4.13893 24.4857 4.47703 24.486C4.68657 24.4876 4.89496 24.4544 5.09401 24.3877L7.4366 23.5817C7.84105 23.8557 8.26294 24.102 8.69948 24.3189L9.19113 26.7959C9.27929 27.2485 9.52074 27.655 9.87322 27.9443C10.2257 28.2336 10.6668 28.3873 11.1192 28.3785H15.6694C16.1218 28.3873 16.5629 28.2336 16.9154 27.9443C17.2678 27.655 17.5093 27.2485 17.5975 26.7959L18.0891 24.3189C18.5288 24.1021 18.9539 23.8558 19.3616 23.5817L21.6946 24.3877C21.8936 24.4544 22.102 24.4876 22.3115 24.486C22.6497 24.4857 22.9817 24.3947 23.2745 24.2221C23.5672 24.0496 23.8103 23.8016 23.9793 23.5031L26.1773 19.5713C26.4023 19.1772 26.4859 18.7155 26.4138 18.2654C26.3417 17.8153 26.1184 17.4048 25.782 17.1041L23.96 15.4036ZM22.2344 22.5201L18.9278 21.3799C18.1538 22.0484 17.2691 22.571 16.3153 22.9231L15.6308 26.4519H11.0806L10.3962 22.9625C9.4499 22.6003 8.57002 22.0786 7.79329 21.4192L4.47703 22.5201L2.20193 18.5884L4.82408 16.2293C4.64583 15.2118 4.64583 14.1702 4.82408 13.1527L2.20193 10.7248L4.47703 6.79306L7.78365 7.93328C8.5577 7.26477 9.44236 6.7422 10.3962 6.39006L11.0806 2.8613H15.6308L16.3153 6.35074C17.2616 6.71288 18.1414 7.23454 18.9182 7.89396L22.2344 6.79306L24.5095 10.7248L21.8874 13.0839C22.0656 14.1014 22.0656 15.143 21.8874 16.1605L24.5095 18.5884L22.2344 22.5201Z" fill="#131049"/>
                                  <path d="M13.3605 20.3739C12.2807 20.3739 11.2251 20.0386 10.3273 19.4103C9.42947 18.7821 8.7297 17.8892 8.31647 16.8444C7.90324 15.7997 7.79513 14.6501 8.00579 13.541C8.21645 12.432 8.73642 11.4132 9.49997 10.6136C10.2635 9.81401 11.2363 9.26948 12.2954 9.04887C13.3544 8.82826 14.4522 8.94149 15.4498 9.37423C16.4474 9.80697 17.3001 10.5398 17.9 11.48C18.4999 12.4202 18.8201 13.5257 18.8201 14.6565C18.8274 15.4094 18.6912 16.1563 18.4194 16.8534C18.1476 17.5506 17.7457 18.1839 17.2373 18.7163C16.7289 19.2488 16.1241 19.6696 15.4584 19.9543C14.7927 20.2389 14.0795 20.3815 13.3605 20.3739ZM13.3605 10.8448C12.8795 10.8331 12.4011 10.9237 11.9545 11.1111C11.5078 11.2985 11.1021 11.5788 10.7619 11.9351C10.4216 12.2914 10.1539 12.7163 9.97498 13.184C9.79603 13.6518 9.70955 14.1527 9.72075 14.6565C9.70955 15.1602 9.79603 15.6611 9.97498 16.1289C10.1539 16.5966 10.4216 17.0215 10.7619 17.3778C11.1021 17.7341 11.5078 18.0145 11.9545 18.2019C12.4011 18.3893 12.8795 18.4798 13.3605 18.4681C13.8415 18.4798 14.3199 18.3893 14.7665 18.2019C15.2132 18.0145 15.6189 17.7341 15.9591 17.3778C16.2994 17.0215 16.5671 16.5966 16.746 16.1289C16.925 15.6611 17.0114 15.1602 17.0002 14.6565C17.0114 14.1527 16.925 13.6518 16.746 13.184C16.5671 12.7163 16.2994 12.2914 15.9591 11.9351C15.6189 11.5788 15.2132 11.2985 14.7665 11.1111C14.3199 10.9237 13.8415 10.8331 13.3605 10.8448Z" fill="#131049"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_1095_2066">
                                    <rect width="26.2068" height="27.4444" fill="white" transform="translate(0.257324 0.934372)"/>
                                  </clipPath>
                                </defs>
                            </svg>
                            <span class="ms-3">Setting</span>
                        </a>
                    </li>
                    <li class="mb-3">
                        <a class="text-biru  fw-medium" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                <g clip-path="url(#clip0_1095_2028)">
                                  <path d="M8.00037 0.0606384C6.8946 0.0606384 5.83412 0.520649 5.05222 1.33947C4.27032 2.1583 3.83105 3.26886 3.83105 4.42685V21.8917C3.83105 23.0497 4.27032 24.1603 5.05222 24.9791C5.83412 25.7979 6.8946 26.2579 8.00037 26.2579H14.9492C15.3178 26.2579 15.6713 26.1046 15.932 25.8316C16.1926 25.5587 16.339 25.1885 16.339 24.8025C16.339 24.4165 16.1926 24.0463 15.932 23.7734C15.6713 23.5004 15.3178 23.3471 14.9492 23.3471H8.00037C7.63178 23.3471 7.27829 23.1938 7.01766 22.9208C6.75702 22.6479 6.6106 22.2777 6.6106 21.8917V4.42685C6.6106 4.04085 6.75702 3.67067 7.01766 3.39773C7.27829 3.12478 7.63178 2.97145 8.00037 2.97145H14.9492C15.3178 2.97145 15.6713 2.81811 15.932 2.54517C16.1926 2.27223 16.339 1.90204 16.339 1.51604C16.339 1.13005 16.1926 0.759858 15.932 0.486916C15.6713 0.213975 15.3178 0.0606384 14.9492 0.0606384H8.00037Z" fill="#CD224C"/>
                                  <path d="M20.9158 6.30843C21.1764 6.03559 21.5298 5.88231 21.8983 5.88231C22.2669 5.88231 22.6203 6.03559 22.8809 6.30843L28.44 12.1301C28.7005 12.403 28.8469 12.7731 28.8469 13.159C28.8469 13.5449 28.7005 13.9151 28.44 14.188L22.8809 20.0096C22.6188 20.2747 22.2677 20.4214 21.9033 20.4181C21.5389 20.4148 21.1904 20.2617 20.9327 19.9919C20.675 19.722 20.5289 19.357 20.5257 18.9754C20.5225 18.5938 20.6626 18.2262 20.9158 17.9517L24.1025 14.6144H13.5597C13.1911 14.6144 12.8376 14.4611 12.577 14.1881C12.3163 13.9152 12.1699 13.545 12.1699 13.159C12.1699 12.773 12.3163 12.4028 12.577 12.1299C12.8376 11.857 13.1911 11.7036 13.5597 11.7036H24.1025L20.9158 8.36637C20.6552 8.09344 20.5089 7.72332 20.5089 7.3374C20.5089 6.95148 20.6552 6.58136 20.9158 6.30843Z" fill="#CD224C"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_1095_2028">
                                    <rect width="28.5893" height="29.9394" fill="white" transform="translate(0.257324 0.0606384)"/>
                                  </clipPath>
                                </defs>
                            </svg>
                            <span class="ms-3" style="color: #CD224C">Log Out</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        @yield('section')
    
    </main>
</body>

</html>
