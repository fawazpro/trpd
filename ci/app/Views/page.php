<?php
function valid($text)
{
    if (empty($text)) {
        return 'TBA';
    } else {
        return $text;
    }
}

function timediff($dt)
{
    // $compare = new DateTime(strtotime($dt));
    $compare = new DateTime($dt);
    $now = new DateTime(Date('d M, H:i e'));
    $diff = $now->diff($compare);
    return $diff->format('%a days, %H hours');
}

function price(int $pri)
{
    $len =  mb_strlen($pri);
    if ($len == 4) {
        $end = substr($pri, -3);
        $first = substr($pri, 0, 1);
        return $first . ',' . $end;
    } elseif ($len == 3) {
        return $pri;
    } elseif ($len == 2) {
        return $pri;
    } elseif ($len == 1) {
        return $pri;
    } elseif ($len == 5) {
        $end = substr($pri, -3);
        $first = substr($pri, 0, 2);
        return $first . ',' . $end;
    } elseif ($len == 6) {
        $end = substr($pri, -3);
        $first = substr($pri, 0, 3);
        return $first . ',' . $end;
    } elseif ($len == 7) {
        $end = substr($pri, -3);
        $mid = substr($pri, -6, 3);
        $first = substr($pri, 0, 1);
        return $first . ',' . $mid . ',' . $end;
    } elseif ($len == 8) {
        $end = substr($pri, -3);
        $mid = substr($pri, -6, 3);
        $first = substr($pri, 0, 2);
        return $first . ',' . $mid . ',' . $end;
    }
}
?>
<div class="z-10 jumbotron relative mb-0 bg-transparent py-12 2xl:pb-40 2xl:pt-24">
    <div>
        <div class="Jumbo_bg__2LcnK"></div>
        <div class="Jumbo_bg__2LcnK Jumbo_bg2__2s2yy"></div>
    </div>
    <div class="relative container">
        <div>
            <div class="flex items-stretch md:space-x-3 flex-col md:flex-row">
                <div class="p-3 md:w-1/3 mb-3 md:mb-0 bg-dark bg-opacity-90 rounded-lg border-r border-dark shadow-2xl">
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="mr-3">
                                <div class="inline-block rounded-full p-1 brand-bg">
                                    <div class="h-16 w-16 bg-darkGray rounded-full"><img src="<?= $pool['image'] ?>" alt="<?= $pool['code'] ?>" class="h-full rounded-full" /></div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div>
                                    <h2 class="text-2xl font-secondary tracking-wide"><?= $pool['name'] ?></h2>
                                    <div class="text-sm font-secondary text-ignored text-uppercase"><?= $pool['code'] ?>
                                        <!-- --> /
                                        <!-- -->BUSD
                                    </div>
                                </div>
                                <?php if ($pool['status'] == 'ended' || $pool['status'] == 'filled'  || $pool['status'] == 'active') : ?>

                                    <div class="flex items-center space-x-2 flex-wrap"><span class="py-1 px-2 font-normal bg-opacity-40 flex items-center space-x-1 bg-red-600 text-red-500 badge badge-pill badge-danger"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="inline overflow-visible false" height="0.75em" width="0.75em" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="8" cy="8" r="8"></circle>
                                            </svg><span><?= $pool['status'] == 'active' ? 'Active' : 'Closed' ?></span></span><span class="py-1 px-2 bg-opacity-40 bg-green-700 text-green-500 font-normal badge badge-pill badge-success"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="inline overflow-visible" height="0.75em" width="0.75em" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M9.655 8H2.333c-.264 0-.398.068-.471.121a.73.73 0 00-.224.296 1.626 1.626 0 00-.138.59V14c0 .342.076.531.14.635.064.106.151.18.256.237a1.122 1.122 0 00.436.127l.013.001h7.322c.264 0 .398-.068.471-.121a.73.73 0 00.224-.296 1.627 1.627 0 00.138-.59V9c0-.342-.076-.531-.14-.635a.658.658 0 00-.255-.237A1.122 1.122 0 009.655 8zm.012-1H2.333C.5 7 .5 9 .5 9v5c0 2 1.833 2 1.833 2h7.334c1.833 0 1.833-2 1.833-2V9c0-2-1.833-2-1.833-2zM8.5 4a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd"></path>
                                            </svg> <!-- -->Levels
                                        </span></div>
                            </div>
                        </div>
                        <?php if ($pool['status'] == 'active') : ?>
                        <?php else : ?>
                            <div class="space-y-3">
                                <div class="bg-gray-500 bg-opacity-10 p-2 rounded-2xl relative">
                                    <div class="space-y-3">
                                        <h2 class="text-lg text-center">🎉 The sale is sold out! 🎉</h2>
                                        <p class="">Thank you for participation!</p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="bg-mainDark rounded-2xl p-3 bg-opacity-50 space-y-1 mb-1">
                            <div>
                                <div class="flex space-x-3 items-center justify-center"><a title="Buy on PancakeSwap" href="#" target="_blank" class="btn-sm py-2 no-hover btn btn-main"><img src="assets/brand/pancakeswap.svg" alt="PancakeSwap" class="h-6 inline mr-1" /> <!-- -->Buy
                                        <!-- --> <span class="text-uppercase">$<?= $pool['code'] ?></span>
                                    </a><a title="Live Chart" href="#" target="_blank" class="btn-sm no-hover btn btn-outline-primary"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="inline mr-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z"></path>
                                        </svg> <!-- -->Live Chart</a></div>
                            </div>
                        </div>


                        <div class="space-y-6">
                            <div>
                                <div class="text-2xl brand-text">1
                                    <!-- -->BUSD
                                    <!-- --> =
                                    <!-- -->
                                    <!-- -->
                                    <!-- --><?= $pool['swap_rate'] ?>
                                    <span class="text-uppercase"> <?= $pool['code'] ?></span>
                                </div>
                                <div class="text-lg brand-text">1
                                    <!-- --><span class="text-uppercase"> <?= $pool['code'] ?></span>
                                    <!-- --> =
                                    <!-- --><?= (1 / $pool['swap_rate']) ?>
                                    <!-- -->
                                    <!-- -->BUSD
                                </div>
                            </div>
                            <div class="space-y-1">
                                <div class="flex justify-between text-sm tracking-wide space-x-3">
                                    <div class=""><span>
                                            <!-- --><?= empty($pool['start']) ? 'TBA' : 'finished ' . timediff($pool['start']) . ' ago' ?>
                                        </span></div>
                                    <div class="font-medium opacity-90 text-right"><span class="text-main "><?= $pool['progress_bar'] ?>
                                            <!-- -->%
                                        </span></div>
                                </div>
                                <div class="h-2 bg-gray-600 progress">
                                    <div role="progressbar" class="progress-bar bg-primary" style="width:<?= $pool['progress_bar'] ?>%" aria-valuenow="NaN" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">0%</span></div>
                                </div>
                                <div class="flex justify-between text-sm tracking-wide space-x-3">
                                    <div class="text-ignored opacity-90 flex-shrink-0"><?= price(($pool['progress_bar'] / 100) * $pool['hard_cap']) ?>
                                        <!-- -->
                                        <!-- -->BUSD
                                    </div>
                                    <div class="text-ignored opacity-90 text-right text-uppercase"><?= price(($pool['progress_bar'] / 100) * ($pool['hard_cap'] * $pool['swap_rate'])) ?>
                                        <!-- --> /
                                        <!-- --><?= price(($pool['hard_cap'] * $pool['swap_rate'])) ?>
                                        <!-- -->
                                        <!-- --><?= $pool['code'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center space-x-2 text-sm"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z"></path>
                                    </svg><span>Fixed price</span></div>
                                <div class="flex items-center space-x-2 text-sm"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 192h424c6.6 0 12 5.4 12 12v260c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V204c0-6.6 5.4-12 12-12zm436-44v-36c0-26.5-21.5-48-48-48h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v36c0 6.6 5.4 12 12 12h424c6.6 0 12-5.4 12-12z"></path>
                                    </svg>
                                    <div>Sale
                                        <!-- -->10 Aug, 09:00
                                        <!-- --> –
                                        <!-- -->10 Aug, 17:00
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2 text-sm"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 192h424c6.6 0 12 5.4 12 12v260c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V204c0-6.6 5.4-12 12-12zm436-44v-36c0-26.5-21.5-48-48-48h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v36c0 6.6 5.4 12 12 12h424c6.6 0 12-5.4 12-12z"></path>
                                    </svg>
                                    <div>FCFS
                                        <!-- -->10 Aug, 16:30
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php elseif ($pool['status'] == 'upcoming') : ?>

                        <div class="flex items-center space-x-2 flex-wrap"><span class="py-1 px-2 font-normal bg-opacity-40 flex items-center space-x-1 text-gray-200 bg-gray-400 badge badge-pill badge-secondary"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="inline overflow-visible false" height="0.75em" width="0.75em" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="8" cy="8" r="8"></circle>
                                </svg><span>Soon</span></span><span class="py-1 px-2 bg-opacity-40 bg-green-700 text-green-500 font-normal badge badge-pill badge-success"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="inline overflow-visible" height="0.75em" width="0.75em" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M9.655 8H2.333c-.264 0-.398.068-.471.121a.73.73 0 00-.224.296 1.626 1.626 0 00-.138.59V14c0 .342.076.531.14.635.064.106.151.18.256.237a1.122 1.122 0 00.436.127l.013.001h7.322c.264 0 .398-.068.471-.121a.73.73 0 00.224-.296 1.627 1.627 0 00.138-.59V9c0-.342-.076-.531-.14-.635a.658.658 0 00-.255-.237A1.122 1.122 0 009.655 8zm.012-1H2.333C.5 7 .5 9 .5 9v5c0 2 1.833 2 1.833 2h7.334c1.833 0 1.833-2 1.833-2V9c0-2-1.833-2-1.833-2zM8.5 4a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd"></path>
                                </svg> <!-- -->Levels</span></div>
                    </div>
                </div>
                <div class="space-y-3">
                    <div class="bg-gray-500 bg-opacity-10 p-2 rounded-2xl relative">
                        <div class="space-y-3">
                            <h2 class="text-center">We are preparing the information</h2><span>
                                <style data-emotion-css="k31kfd-skeletonStyles-Skeleton animation-16jpnkj">
                                    .css-k31kfd-skeletonStyles-Skeleton {
                                        background-color: #eee;
                                        background-image: linear-gradient(90deg, #eee, #f5f5f5, #eee);
                                        background-size: 200px 100%;
                                        background-repeat: no-repeat;
                                        border-radius: 4px;
                                        display: inline-block;
                                        line-height: 1;
                                        width: 100%;
                                        -webkit-animation: animation-16jpnkj 1.2s ease-in-out infinite;
                                        animation: animation-16jpnkj 1.2s ease-in-out infinite;
                                    }

                                    @-webkit-keyframes animation-16jpnkj {
                                        0% {
                                            background-position: -200px 0;
                                        }

                                        100% {
                                            background-position: calc(200px + 100%) 0;
                                        }
                                    }

                                    @keyframes animation-16jpnkj {
                                        0% {
                                            background-position: -200px 0;
                                        }

                                        100% {
                                            background-position: calc(200px + 100%) 0;
                                        }
                                    }
                                </style><span class="react-loading-skeleton css-k31kfd-skeletonStyles-Skeleton">‌</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="space-y-6">
                    <div>
                        <div class="text-2xl brand-text">Rate TBA</div>
                    </div>
                    <div class="space-y-1">
                        <div class="flex justify-between text-sm tracking-wide space-x-3">
                            <div class=""><span>TBA</span></div>
                            <div class="font-medium opacity-90 text-right"><span class="text-main ">0
                                    <!-- -->%
                                </span></div>
                        </div>
                        <div class="h-2 bg-gray-600 progress">
                            <div role="progressbar" class="progress-bar bg-primary" style="width:0%" aria-valuenow="NaN" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">0%</span></div>
                        </div>
                        <div class="flex justify-between text-sm tracking-wide space-x-3">
                            <div class="text-ignored opacity-90 flex-shrink-0">0
                                <!-- -->
                                <!-- -->BUSD
                            </div>
                            <div class="text-ignored opacity-90 text-right text-uppercase">0
                                <!-- --> /
                                <!-- -->0
                                <!-- -->
                                <!-- --><?= $pool['code'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-2 text-sm"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z"></path>
                            </svg><span>Fixed price</span></div>
                        <div class="flex items-center space-x-2 text-sm"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 192h424c6.6 0 12 5.4 12 12v260c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V204c0-6.6 5.4-12 12-12zm436-44v-36c0-26.5-21.5-48-48-48h-48V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H160V12c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v36c0 6.6 5.4 12 12 12h424c6.6 0 12-5.4 12-12z"></path>
                            </svg>
                            <div>Sale
                                <!-- --><?= empty($pool['start']) ? 'TBA ' : Date('d M, H:i e', strtotime($pool['start'])) ?>
                                <!-- --> –
                                <!-- --><?= empty($pool['end']) ? ' TBA' : Date('d M, H:i e', strtotime($pool['end'])) ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endif; ?>
            </div>
        </div>
        <div class="p-3 md:w-2/3 bg-dark bg-opacity-80 rounded-lg border-r border-dark shadow-lg">
            <div class="p-3 space-y-8">
                <div class="pb-3">
                    <div class="flex items-center justify-between mb-3 flex-wrap">
                        <div class="flex items-center mb-3 md:mb-0">
                            <div class="mr-1">
                                <div style="width:45px;height:45px"><img src="<?= $pool['image'] ?>" alt="<?= $pool['code'] ?>" class="h-full rounded-full" /></div>
                            </div>
                            <h2 class="text-2xl font-secondary tracking-wide"><?= $pool['name'] ?></h2>
                        </div>
                        <div class="space-x-3 flex items-center"><img src="<?= base_url('assets/brand/binance_logo.png') ?>" alt="Binance Smart Chain" class="md:h-6 h-5" /></div>
                    </div>
                    <div class="mb-3">
                        <div><?= $pool['description'] ?></div>
                        <div class="space-x-6 flex items-center">
                            <ul class="flex flex-wrap items-center text-main space-x-6 z-20 relative text-2xl">
                                <li><a href="#" target="_blank" class="text-main"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"></path>
                                        </svg></a></li>
                                <li><a href="#" target="_blank" class="text-main"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M576 240c0-23.63-12.95-44.04-32-55.12V32.01C544 23.26 537.02 0 512 0c-7.12 0-14.19 2.38-19.98 7.02l-85.03 68.03C364.28 109.19 310.66 128 256 128H64c-35.35 0-64 28.65-64 64v96c0 35.35 28.65 64 64 64h33.7c-1.39 10.48-2.18 21.14-2.18 32 0 39.77 9.26 77.35 25.56 110.94 5.19 10.69 16.52 17.06 28.4 17.06h74.28c26.05 0 41.69-29.84 25.9-50.56-16.4-21.52-26.15-48.36-26.15-77.44 0-11.11 1.62-21.79 4.41-32H256c54.66 0 108.28 18.81 150.98 52.95l85.03 68.03a32.023 32.023 0 0 0 19.98 7.02c24.92 0 32-22.78 32-32V295.13C563.05 284.04 576 263.63 576 240zm-96 141.42l-33.05-26.44C392.95 311.78 325.12 288 256 288v-96c69.12 0 136.95-23.78 190.95-66.98L480 98.58v282.84z"></path>
                                        </svg></a></li>
                                <li><a href="#" target="_blank" class="text-main"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                        </svg></a></li>
                                <li><a href="#" target="_blank" class="text-main"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 32v448h448V32H0zm372.2 106.1l-24 23c-2.1 1.6-3.1 4.2-2.7 6.7v169.3c-.4 2.6.6 5.2 2.7 6.7l23.5 23v5.1h-118V367l24.3-23.6c2.4-2.4 2.4-3.1 2.4-6.7V199.8l-67.6 171.6h-9.1L125 199.8v115c-.7 4.8 1 9.7 4.4 13.2l31.6 38.3v5.1H71.2v-5.1l31.6-38.3c3.4-3.5 4.9-8.4 4.1-13.2v-133c.4-3.7-1-7.3-3.8-9.8L75 138.1V133h87.3l67.4 148L289 133.1h83.2v5z"></path>
                                        </svg></a></li>
                                <li><a href="#" target="_blank" class="text-main"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z"></path>
                                        </svg></a></li>
                                <li><a href="#" target="_blank" class="text-main"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm57.1 120H305c7.7 0 13.4 7.1 11.7 14.7l-38 168c-1.2 5.5-6.1 9.3-11.7 9.3h-38c-5.5 0-10.3-3.8-11.6-9.1-25.8-103.5-20.8-81.2-25.6-110.5h-.5c-1.1 14.3-2.4 17.4-25.6 110.5-1.3 5.3-6.1 9.1-11.6 9.1H117c-5.6 0-10.5-3.9-11.7-9.4l-37.8-168c-1.7-7.5 4-14.6 11.7-14.6h24.5c5.7 0 10.7 4 11.8 9.7 15.6 78 20.1 109.5 21 122.2 1.6-10.2 7.3-32.7 29.4-122.7 1.3-5.4 6.1-9.1 11.7-9.1h29.1c5.6 0 10.4 3.8 11.7 9.2 24 100.4 28.8 124 29.6 129.4-.2-11.2-2.6-17.8 21.6-129.2 1-5.6 5.9-9.5 11.5-9.5zM384 121.9v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"></path>
                                        </svg></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <h2 class="text-lg mb-2 font-secondary tracking-wider text-primary">Pool Details</h2>
                        <div class="flex flex-col md:flex-row flex-wrap">
                            <div class="md:w-1/2">
                                <ul>
                                    <li class="flex py-1 justify-between md:justify-start items-center">
                                        <div class="font-semibold mr-3">Access Type
                                            <!-- -->:
                                        </div>
                                        <div class="">Levels</div>
                                    </li>
                                    <li class="flex py-1 justify-between md:justify-start items-center">
                                        <div class="font-semibold mr-3">Hard Cap
                                            <!-- -->:
                                        </div>
                                        <div class=""><?= empty($pool['hard_cap']) ? 'TBA' : '$' . price($pool['hard_cap']) ?></div>
                                    </li>
                                    <li class="flex py-1 justify-between md:justify-start items-center">
                                        <div class="font-semibold mr-3">Swap Rate
                                            <!-- -->:
                                        </div>
                                        <?php if (!empty($pool['swap_rate'])) : ?>
                                            <div class=""><span class="text-main text-uppercase"><?= $pool['swap_rate'] ?>
                                                    <!-- -->
                                                    <!-- --><?= $pool['code'] ?>
                                                </span> <!-- -->per <span class="text-main ">1
                                                    <!-- -->BUSD
                                                </span></div>
                                        <?php else : ?>
                                            <div class=""><span class="text-main">TBA</span></div>
                                        <?php endif; ?>
                                    </li>
                                    <!--<li class="flex py-1 justify-between md:justify-start items-center">
                                        <div class="font-semibold mr-3">Listing Price
                                             :
                                        </div>
                                        <div class=""><span class="text-main ">$0.70</span></div>
                                    </li>-->
                                </ul>
                            </div>
                            <div class="md:w-1/2">
                                <ul>
                                    <li class="flex py-1 justify-between md:justify-start items-center">
                                        <div class="font-semibold mr-3">Start
                                            <!-- -->:
                                        </div>
                                        <div class=""><?= empty($pool['start']) ? 'TBA ' : Date('d M, H:i e', strtotime($pool['start'])) ?></div>
                                    </li>
                                    <li class="flex py-1 justify-between md:justify-start items-center">
                                        <div class="font-semibold mr-3">End
                                            <!-- -->:
                                        </div>
                                        <div class=""><?= empty($pool['end']) ? 'TBA ' : Date('d M, H:i e', strtotime($pool['end'])) ?>
                                        </div>
                                    </li>
                                    <li class="flex py-1 justify-between md:justify-start items-center">
                                        <div class="font-semibold mr-3">FCFS Opens
                                            <!-- -->:
                                        </div>
                                        <div class=""><?= empty($pool['fcfs']) ? 'TBA ' : Date('d M, H:i e', strtotime($pool['fcfs'])) ?>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="">
                                <li class="flex py-1 justify-between md:justify-start items-center">
                                    <div class="font-semibold mr-3">Max. Contribution
                                        <!-- -->:
                                    </div>
                                    <div class=""><span class="text-main ">$5000</span><span class="opacity-95 text-sm tracking-wider ml-2">[whitelist]</span></div>
                                </li>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-lg mb-2 font-secondary tracking-wider text-primary">Token</h2>
                        <ul>
                            <li class="flex py-1 justify-between md:justify-start items-center">
                                <div class="font-semibold mr-3">Token
                                    <!-- -->:
                                </div>
                                <div class=""><span class="text-main "><?= $pool['name'] ?>
                                        <!-- -->
                                        <!-- --> <span class="text-uppercase"><?= $pool['code'] ?></span>
                                    </span></div>
                            </li>
                            <li class="flex py-1 justify-between md:justify-start items-center">
                                <div class="font-semibold mr-3">Type
                                    <!-- -->:
                                </div>
                                <div class=""><?= ($pool['wallet'] == ',eth,') ? 'ERC-20' : 'BEP-20' ?></div>
                            </li>
                            <li class="flex py-1 justify-between md:justify-start items-center">
                                <div class="font-semibold mr-3">Total Supply
                                    <!-- -->:
                                </div>
                                <div class="text-uppercase"><?= empty($pool['hard_cap']) ? 'TBA' : price(($pool['hard_cap'] * $pool['swap_rate'])) ?>
                                    <!-- -->
                                    <!-- --><?= $pool['code'] ?>
                                </div>
                            </li>
                        </ul>
                        <?php if (empty($pool['initial_supply'])) : ?>
                        <?php else : ?>
                            <li class="flex py-1 justify-between md:justify-start items-center">
                                <div class="font-semibold mr-3">Initial Supply
                                    <!-- -->:
                                </div>
                                <div class=""><span class=""><?= $pool['initial_supply'] ?>
                                    </span>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if (empty($pool['token_listing'])) : ?>
                        <?php else : ?>
                            <li class="flex py-1 justify-between md:justify-start items-center">
                                <div class="font-semibold mr-3">Token Listing
                                    <!-- -->:
                                </div>
                                <div class=""><?= $pool['token_listing'] ?></div>
                            </li>
                        <?php endif; ?>
                        <!--<div class="flex items-center space-x-3 py-1">
                            <div class="font-semibold">Address <span class="font-light">[
                                     ]
                                </span>:</div><a href="#" class="break-all no-underline text-white"><span>0xb35c9eaa5957563594f7411c6ca2755640253c15</span></a><a href="https://bscscan.com/address/0xb35c9eaa5957563594f7411c6ca2755640253c15" target="_blank" class="flex-shrink-0 "><img src="../brand/bscscan.svg" alt="VLTY on BscScan" class="h-6 -mt-1 " /></a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<main class="relative"></main>