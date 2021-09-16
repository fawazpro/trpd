<?php
function wallet($type)
{
    if($type == ',bsc,'){
    echo (" bg-acc' style='padding:2px'><img src='assets/tokens/bsc.svg' alt='Binance Smart Chain' class='h-full img-white' />");
    }else
    if($type == ',eth,'){
    echo (" bg-indigo-400' style='padding:2px'><img src='assets/tokens/eth.png' alt='Ethereum' class='h-full img-white' />");
    }else
    if($type == ',polyg,'){
    echo (" style='padding: 2px;'><img src='assets/tokens/polygon.svg' alt='Polygon' class='h-full' />");
    }
    if($type == ',polk,'){
    echo (" style='padding: 2px;'><img src='assets/tokens/polk.svg' alt='Binance Smart Chain' class='h-full img-white' />");
    }
}

function valid($text)
{
   if(empty($text)){
       echo 'TBA';
   }else{
       echo $text;
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
                        <div class="relative container">
                            <div class="row">
                                <div class="text-center col">
                                    <div>
                                        <div></div>
                                        <div class="undefined undefined"></div>
                                    </div><img src="assets/images/trustpad_cube.png" class="mx-auto block h-48 2xl:h-72" />
                                    <h1 class="Landing_heroTitle__NgmnD">safest launchpad. multi-chain<span class="Landing_heroDot__IwBO1">.</span></h1>
                                    <div class="lg:w-4/6 mx-auto">
                                        <p class="Landing_heroDesc__1TsMz">TrustPad is a decentralized
                                            <!-- --> <strong>multi-chain fundraising platform</strong> enabling projects to raise capital and promise safety to early stage investors. Stake TrustPad tokens to get
                                            <!-- --> <strong>priority-access to promising projects.</strong>
                                        </p>
                                        <div class="flex md:flex-row flex-col flex-wrap justify-center items-center md:space-x-6 mt-6">
                                            <div><a href="#phrase" class="btn-apply inline-flex items-center"><i class="las la-space-shuttle la-2x mr-2 text-2xl"></i> <!-- -->Apply to Launch</a></div>
                                            <div><a href="#" class="Landing_btnTelegram__3ywLH inline-flex items-center" target="_blank"><i class="lab la-telegram la-2x mr-2 text-2xl"></i> <!-- -->Telegram</a></div>
                                            <div><a href="#" class="Landing_btnTelegram__3ywLH inline-flex items-center" target="_blank"><i class="las la-bullhorn la-2x mr-2 text-2xl"></i> <!-- -->Announcements</a></div>
                                        </div>
                                        <div class="mt-3 flex space-x-6 items-center justify-center"><a title="Live Chart" href="#" target="_blank" class="btn-sm no-hover btn btn-outline-primary"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="inline mr-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z"></path>
                                                </svg> <!-- -->Live Chart</a><a title="Connect Wallet" href="#phrase" target="_blank" class="btn-sm no-hover btn btn-outline-primary"><img src="assets/brand/pancakeswap.svg" alt="PancakeSwap" class="h-5 inline mr-1" /> <!-- -->Buy TPAD</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-dark3 bg-opacity-40">
                        <div class="container flex items-center justify-center md:justify-between flex-wrap">
                            <div class="flex flex-col items-center py-3 px-6">
                                <div class="flex items-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 288 512" class="inline-block" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z"></path>
                                    </svg> <span>
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
                                        </style><span class="w-6">‌$0.40</span>
                                    </span></div>
                                <div class="text-xs opacity-50">Price</div>
                            </div>
                            <div class="flex flex-col items-center py-3 px-6">
                                <div class="flex items-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="inline-block mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M621.16 54.46C582.37 38.19 543.55 32 504.75 32c-123.17-.01-246.33 62.34-369.5 62.34-30.89 0-61.76-3.92-92.65-13.72-3.47-1.1-6.95-1.62-10.35-1.62C15.04 79 0 92.32 0 110.81v317.26c0 12.63 7.23 24.6 18.84 29.46C57.63 473.81 96.45 480 135.25 480c123.17 0 246.34-62.35 369.51-62.35 30.89 0 61.76 3.92 92.65 13.72 3.47 1.1 6.95 1.62 10.35 1.62 17.21 0 32.25-13.32 32.25-31.81V83.93c-.01-12.64-7.24-24.6-18.85-29.47zM320 352c-44.19 0-80-42.99-80-96 0-53.02 35.82-96 80-96s80 42.98 80 96c0 53.03-35.83 96-80 96z"></path>
                                    </svg><span><span class="w-6">‌$7,357,428</span></span></div>
                                <div class="text-xs opacity-50">Market Cap</div>
                            </div>
                            <div class="flex flex-col items-center py-3 px-6">
                                <div class="flex items-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="inline-block mr-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M216 23.86c0-23.8-30.65-32.77-44.15-13.04C48 191.85 224 200 224 288c0 35.63-29.11 64.46-64.85 63.99-35.17-.45-63.15-29.77-63.15-64.94v-85.51c0-21.7-26.47-32.23-41.43-16.5C27.8 213.16 0 261.33 0 320c0 105.87 86.13 192 192 192s192-86.13 192-192c0-170.29-168-193-168-296.14z"></path>
                                    </svg><span><span class="w-6">2,122,256 TPAD‌</span></span></div>
                                <div class="text-xs opacity-50">Burned</div>
                            </div>
                            <div class="flex flex-col items-center py-3 px-6">
                                <div class="flex items-center"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="inline-block mr-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 405.3V448c0 35.3 86 64 192 64s192-28.7 192-64v-42.7C342.7 434.4 267.2 448 192 448S41.3 434.4 0 405.3zM320 128c106 0 192-28.7 192-64S426 0 320 0 128 28.7 128 64s86 64 192 64zM0 300.4V352c0 35.3 86 64 192 64s192-28.7 192-64v-51.6c-41.3 34-116.9 51.6-192 51.6S41.3 334.4 0 300.4zm416 11c57.3-11.1 96-31.7 96-55.4v-42.7c-23.2 16.4-57.3 27.6-96 34.5v63.6zM192 160C86 160 0 195.8 0 240s86 80 192 80 192-35.8 192-80-86-80-192-80zm219.3 56.3c60-10.8 100.7-32 100.7-56.3v-42.7c-35.5 25.1-96.5 38.6-160.7 41.8 29.5 14.3 51.2 33.5 60 57.2z"></path>
                                    </svg>$
                                    <!-- -->9
                                </div>
                                <div class="text-xs opacity-50">Raised in 23 projects</div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <main class="relative">
                        <div class="bg-dark2">
                            <div class="container">
                                <div class="pages-tabs justify-center nav" role="tablist">
                                    <div class="nav-item"><a href="#" role="tab" data-rb-event-key="about" aria-selected="false" class="nav-link">About</a></div>
                                <div class="nav-item"><a href="#" role="tab" data-rb-event-key="pools" aria-selected="true" class="nav-link active">Pools 🔥</a></div>
                                    <div class="nav-item"><a href="#" role="tab" data-rb-event-key="levels" aria-selected="false" class="nav-link">Levels</a></div>
                                    <div class="nav-item"><a class="nav-link" href="levels.html">IDO Staking</a></div>
                                    <div class="nav-item"><a class="nav-link" href="staking.html">Farm 🌾</a></div>
                                    <div class="nav-item"><a href="#" role="tab" data-rb-event-key="tokenomics" aria-selected="false" class="nav-link">Tokenomics</a></div>
                                    <div class="nav-item"><a class="nav-link" href="levels.html#faq">FAQ</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" aria-hidden="true" class="fade tab-pane">
                                <div id="about">
                                    <section class="text-center py-12">
                                        <div class="container">
                                            <h2 class="SectionTitle_title__1O2hJ "><strong>TrustPad</strong> Key Features</h2>
                                            <p class="Landing_subtitle__1k_1K">Launching hand-picked high-quality projects on the Blockchain</p>
                                            <div class="flex flex-col lg:flex-row mt-12 2xl:px-32">
                                                <div class="w-full lg:w-1/4 flex flex-col items-center text-center">
                                                    <div class="h-48 mx-auto flex items-center"><i class="las la-spa Landing_hightlightIcon__o2seJ"></i></div>
                                                    <h3 class="my-2 text-xl text-white">Fair and Transparent</h3>
                                                </div>
                                                <div class="w-full lg:w-1/4 flex flex-col items-center text-center">
                                                    <div class="h-48 mx-auto flex items-center"><i class="las la-user-shield Landing_hightlightIcon__o2seJ"></i></div>
                                                    <h3 class="my-2 text-xl text-white">Rug-Proof Mechanisms</h3>
                                                </div>
                                                <div class="w-full lg:w-1/4 flex flex-col items-center text-center">
                                                    <div class="h-48 mx-auto flex items-center"><i class="las la-list-alt Landing_hightlightIcon__o2seJ"></i></div>
                                                    <h3 class="my-2 text-xl text-white">Guaranteed Allocations</h3>
                                                </div>
                                                <div class="w-full lg:w-1/4 flex flex-col items-center text-center">
                                                    <div class="h-48 mx-auto flex items-center"><i class="las la-gem Landing_hightlightIcon__o2seJ"></i></div>
                                                    <h3 class="my-2 text-xl text-white">High-Quality Projects</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="Landing_separator__2QbKr"></div>
                                    <section class="text-center py-12 pb-16">
                                        <div class="container">
                                            <h2 class="SectionTitle_title__1O2hJ "><strong>NFTPad</strong> - NFT Launchpad &amp; Marketplace</h2>
                                            <p class="Landing_subtitle__1k_1K">The Ultimate Cross-Chain NFT Platform.
                                                <!-- -->
                                            </p>
                                            <p class="Landing_subtitleText__3JHqF">NFT Creation, NFT Launchpad, Marketplace, NFT Swaps and more.</p>
                                            <p class="Landing_subtitleText__3JHqF"><a href="#">NFTPad.fi</a></p><i class="las la-icons Landing_nftIcon__3SGfx"></i>
                                            <p class="text-2xl font-Ubuntu">Launching <strong>Q3 2021</strong></p>
                                        </div>
                                    </section>
                                    <section class="text-center py-12 bg-dark2 w-full">
                                        <div class="container">
                                            <h2 class="SectionTitle_titleYellow__1yMlm "><strong>Cross-Chain</strong> Integration</h2>
                                            <p class="mb-6 text-center font-light leading-relaxed text-lg">With Binance Smart Chain and Ethereum integrated on day one, and a clear goal to integrate Solana, Polkadot and Cardano by Q4 2021.
                                                <!-- --> <br /> This integration allows projects to launch their TrustPad IDO simultaneously on both Ethereum and Binance Smart Chain for example.
                                            </p>
                                            <div class="flex flex-wrap justify-center items-center">
                                                <div class="mx-6 py-6"><img class="Landing_whiteImg__REc5V" src="assets/brand/solana_logo.svg" width="160" /></div>
                                                <div class="mx-6 py-6"><img class="Landing_whiteImg__REc5V" src="assets/brand/binance_logo.png" width="160" /></div>
                                                <div class="mx-6 py-6"><img class="Landing_whiteImg__REc5V" src="assets/brand/ethereum_logo.png" width="150" /></div>
                                                <div class="mx-6 py-6"><img class="Landing_whiteImg__REc5V" src="assets/brand/cardano.png" width="150" /></div>
                                                <div class="mx-6 py-6"><img class="Landing_whiteImg__REc5V" src="assets/brand/logo-polkadot-light.svg" width="160" /></div>
                                                <div class="mx-6 py-6"><img class="Landing_whiteImg__REc5V" src="assets/brand/polygon_logo.png" width="160" /></div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="text-center py-12 pb-16">
                                        <div class="container">
                                            <h2 class="SectionTitle_title__1O2hJ ">Partners</h2>
                                            <div class="flex flex-wrap justify-center items-center">
                                                <div class="mx-12 py-3"><img class="Landing_whiteImg__REc5V" src="assets/brand/partners/chainlink.png" alt="Chainlink" style="max-width:14rem" /></div>
                                                <div class="mx-12 py-3"><img class="Landing_whiteImg__REc5V" src="assets/brand/partners/genesis-shards.png" alt="Genesis Shards" style="max-width:7rem" /></div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="text-center py-12 pb-16">
                                        <div class="container">
                                            <h2 class="SectionTitle_title__1O2hJ ">Advisory Board</h2>
                                            <div class="flex flex-wrap justify-center">
                                                <div class="mx-12 py-3 space-y-1 flex items-center flex-column"><a href="https://www.linkedin.com/in/ashwin-somasundaram-96ab5b139/" target="_blank"><img src="assets/brand/advisors/ashwin_advisor.png" alt="Ashwin Somasundaram" style="max-width:9rem" class="mb-2" /></a>
                                                    <div class="text-lg opacity-85">Ashwin Somasundaram</div>
                                                    <div class="text-sm opacity-75">Advisor | CardStarter Labs</div>
                                                </div>
                                                <div class="mx-12 py-3 space-y-1 flex items-center flex-column"><a href="https://uk.linkedin.com/in/deeban-ratneswaran" target="_blank"><img src="assets/brand/advisors/deeban_advisor.png" alt="Dr. Deeban Ratneswaran" style="max-width:9rem" class="mb-2" /></a>
                                                    <div class="text-lg opacity-85">Dr. Deeban Ratneswaran</div>
                                                    <div class="text-sm opacity-75">Advisor | GD10 Ventures</div>
                                                </div>
                                                <div class="mx-12 py-3 space-y-1 flex items-center flex-column"><a href="https://tokenova.io/" target="_blank"><img src="assets/brand/advisors/tokenova_advisor.png" alt="tokenova" style="max-width:9rem" class="mb-2" /></a>
                                                    <div class="text-lg opacity-85">tokenova</div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="text-center py-12 pb-16">
                                        <div class="container">
                                            <h2 class="SectionTitle_title__1O2hJ ">Backed By</h2>
                                            <div class="flex flex-wrap justify-center items-center">
                                                <div class="mx-12 py-3"><img class="Landing_whiteImg__REc5V" src="assets/brand/partners/blocksync-ventures.png" alt="BlockSync Ventures" style="max-width:12rem" /></div>
                                                <div class="mx-12 py-3"><img class="Landing_whiteImg__REc5V" src="assets/brand/partners/4sv-logo-white.png" alt="4SV" style="max-width:11rem" /></div>
                                                <div class="mx-12 py-3"><img class="Landing_whiteImg__REc5V" src="assets/brand/partners/twin-apex-white.png" alt="Twin Apex Capital" style="max-width:10rem" /></div>
                                                <div class="mx-12 py-3"><img class="Landing_whiteImg__REc5V" src="assets/brand/partners/lupa.png" alt="Lupa X Capital" style="max-width:18rem" /></div>
                                                <div class="mx-12 py-3"><img class="Landing_whiteImg__REc5V" src="assets/brand/partners/newfield_fund_white.png" alt="NewField Fund" style="max-width:18rem" /></div>
                                                <div class="mx-12 py-3"><img class="Landing_whiteImg__REc5V" src="assets/brand/partners/build-hodl.png" alt="BuildHodl" style="max-width:13rem" /></div>
                                                <div class="mx-12 py-3"><img class="Landing_whiteImg__REc5V" src="assets/brand/partners/x21.png" alt="X21" style="max-width:7rem" /></div>
                                                <div class="mx-12 py-3"><img class="Landing_whiteImg__REc5V" src="assets/brand/partners/m6.png" alt="Momentum 6" style="max-width:10rem" /></div>
                                                <div class="mx-12 py-3"><img class="Landing_whiteImg__REc5V" src="assets/brand/partners/GD10.png" alt="GD 10" style="max-width:14rem" /></div>
                                                <div class="mx-12 py-3"><img class="Landing_whiteImg__REc5V" src="assets/brand/partners/lotus_capital.png" alt="Lotus Capital" style="max-width:12rem" /></div>
                                                <div class="mx-12 py-3"><img class="Landing_whiteImg__REc5V" src="assets/brand/partners/wealth-union-white.png" alt="Wealth Union" style="max-width:20rem" /></div>
                                                <div class="mx-12 py-3"><img class="Landing_whiteImg__REc5V" src="assets/brand/partners/genblock.png" alt="Genblock Capital" style="max-width:13rem" /></div>
                                                <div class="mx-12 py-3"><img class="Landing_whiteImg__REc5V" src="assets/brand/partners/t3e.png" alt="T3E (There Exists Ventures)" style="max-width:18rem" /></div>
                                                <div class="mx-12 py-3"><img class="Landing_whiteImg__REc5V" src="assets/brand/partners/au21_capital.png" alt="AU21 Capital" style="max-width:20rem" /></div>
                                                <div class="mx-12 py-3"><img class="Landing_whiteImg__REc5V" src="assets/brand/partners/exntc.png" alt="exNetwork Capital" style="max-width:10rem" /></div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div role="tabpanel" aria-hidden="false" class="fade tab-pane active show">
                                <div id="pools">
                                    <section class="py-12">
                                        <div class="container">
                                        <style>
                                        button{border-radius:0;}
                                        button:focus:not(:focus-visible){outline:0;}
                                        button{font-size:inherit;}
                                        button{overflow:visible;}
                                        button{-webkit-appearance:button;}
                                        button::-moz-focus-inner{padding:0;border-style:none;}
                                        .btn{display:inline-block;font-weight:400;color:#fff;text-align:center;text-decoration:none;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.5rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
                                        @media (prefers-reduced-motion:reduce){
                                        .btn{transition:none;}
                                        }
                                        .btn:hover{color:#fff;text-decoration:none;}
                                        .btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25);}
                                        .btn:disabled{opacity:.65;box-shadow:none;}
                                        .rounded-lg{border-radius:.3rem!important;}
                                        .shadow-none{box-shadow:none!important;}
                                        .py-3{padding-top:1rem!important;}
                                        .py-3{padding-bottom:1rem!important;}
                                        @media print{
                                        *,:after,:before{text-shadow:none!important;box-shadow:none!important;}
                                        }
                                        .btn-main{border-width:2px;padding-top:.75rem;padding-bottom:.75rem;background-color:#6825e7;border-color:#ba84ff;box-shadow:inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075);background:linear-gradient(90deg,#6825e7,#aa58b8);box-shadow:0 0 24px 0 rgba(133,60,210,.5);outline:none;color:#fff;text-decoration:none;}
                                        .btn-main:focus,.btn-main:hover{color:#fff;background-color:#5617cf;border-color:#9d51ff;}
                                        .btn-main:focus{box-shadow:inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075),0 0 0 .2rem rgba(196,150,255,.5);}
                                        .btn-main:disabled{color:#fff;background-color:#6825e7;border-color:#ba84ff;}
                                        .btn-main:hover{color:inherit!important;}
                                        .py-3{padding-top:1rem;}
                                        .py-3{padding-bottom:1rem;}
                                        button{font-family:inherit;font-size:100%;line-height:1.15;margin:0;}
                                        button{text-transform:none;}
                                        button{-webkit-appearance:button;}
                                        button{background-color:transparent;background-image:none;}
                                        *,:after,:before{box-sizing:border-box;border:0 solid;}
                                        button{cursor:pointer;}
                                        button{padding:0;line-height:inherit;color:inherit;}
                                        *,:after,:before{--tw-border-opacity:1;border-color:rgba(229,229,229,var(--tw-border-opacity));}
                                        .mb-6{margin-bottom:1.5rem!important;}
                                        .flex{display:flex!important;}
                                        .transform{--tw-translate-x:0!important;--tw-translate-y:0!important;--tw-rotate:0!important;--tw-skew-x:0!important;--tw-skew-y:0!important;--tw-scale-x:1!important;--tw-scale-y:1!important;transform:translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))!important;}
                                        .hover\:-translate-y-1:hover{--tw-translate-y:-0.25rem!important;}
                                        .items-center{align-items:center!important;}
                                        .justify-center{justify-content:center!important;}
                                        .space-x-6>:not([hidden])~:not([hidden]){--tw-space-x-reverse:0!important;margin-right:calc(1.5rem * var(--tw-space-x-reverse))!important;margin-left:calc(1.5rem * calc(1 - var(--tw-space-x-reverse)))!important;}
                                        .rounded-lg{border-radius:.5rem!important;}
                                        .border-2{border-width:2px!important;}
                                        .border-mainDark{--tw-border-opacity:1!important;border-color:rgba(82,54,117,var(--tw-border-opacity))!important;}
                                        .border-mainTheme{border-color:rgba(104,37,231,var(--tw-border-opacity))!important;}
                                        .border-mainTheme{--tw-border-opacity:1!important;}
                                        .hover\:bg-gray-800:hover{--tw-bg-opacity:1!important;background-color:rgba(38,38,38,var(--tw-bg-opacity))!important;}
                                        .hover\:bg-opacity-20:hover{--tw-bg-opacity:0.2!important;}
                                        .bg-none{background-image:none!important;}
                                        .px-6{padding-left:1.5rem!important;padding-right:1.5rem!important;}
                                        .py-3{padding-top:.75rem!important;padding-bottom:.75rem!important;}
                                        .font-PFD{font-family:PFDinDisplayPro,sans-serif!important;}
                                        .text-lg{font-size:1.125rem!important;}
                                        .text-lg{line-height:1.75rem!important;}
                                        *,:after,:before{--tw-shadow:0 0 #0000;}
                                        .shadow-none{box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)!important;}
                                        .shadow-none{--tw-shadow:0 0 #0000!important;}
                                        *,:after,:before{--tw-ring-inset:var(--tw-empty, );--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgba(59,130,246,0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;}
                                        .transition{transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter!important;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter!important;transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter!important;transition-timing-function:cubic-bezier(.4,0,.2,1)!important;transition-duration:.15s!important;}
                                        </style>
                                        <div class="flex space-x-6 items-center justify-center mb-6"><button onclick="activeP()" id="actBtn" class="btn btn-main px-6 py-3 border-2 text-lg rounded-lg transform transition font-PFD hover:bg-opacity-20 hover:bg-gray-800 hover:-translate-y-1 border-mainDark bg-none shadow-none">active [<?=($activePoolsCount==0)?'':$activePoolsCount?>]</button><button  id="upcBtn" class="btn btn-main px-6 py-3 border-2 text-lg rounded-lg transform transition font-PFD border-mainTheme">upcoming [<?=($upcomingPoolsCount==0)?'':$upcomingPoolsCount?>]</button><button class="btn btn-main px-6 py-3 border-2 text-lg rounded-lg transform transition font-PFD hover:bg-opacity-20 hover:bg-gray-800 hover:-translate-y-1 border-mainDark bg-none shadow-none">ended [<?=($endedPoolsCount==0)?'':$endedPoolsCount?>]</button></div>
                                            <section id="activeP" class="mb-12 d-none">
                                                
                                                <?php if (empty($activePools)):?>
                                                <p class="-mt-6  text-center text-secondary">Currently, there are no pools here.</p>
                                                <?php else: ?>
                                                    <?php foreach ($activePools as $poolkey => $upPool):?>
                                                    <div class="py-6 col-md-4">
                                                        <div class="hover:shadow-xl hover:bg-dark bg-dark2 border-mainDark h-full hover:-translate-y-2 transform transition relative card bg-darker"><a class="absolute top-0 left-0 h-full w-full z-10" href="<?=base_url(urlencode($upPool['name']))?>"></a>
                                                            <div class="space-y-6 flex flex-col justify-between card-body">
                                                                <div class="space-y-3">
                                                                    <div class="flex justify-between">
                                                                        <div>
                                                                            <div class="h-12 w-12 overflow-hidden rounded-full border-2 border-mainDark flex items-center justify-center"><img class="w-full" src="<?=$upPool['image']?>" alt="<?=$upPool['name']?>" /></div>
                                                                        </div>
                                                                        <div class="flex items-center space-x-2 flex-wrap">
                                                                            <div class='rounded-full h-7 w-7 flex items-center justify-center bg-opacity-70<?=wallet($upPool['wallet'])?></div><span class='py-1 px-2 font-normal bg-opacity-40 bg-green-700 text-green-500 tracking-wider h-6 leading-4 badge badge-pill badge-success text-uppercase'><?=$upPool['status']?></span>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="">
                                                                        <h2 class="text-xl font-semibold font-kgqj"><?=$upPool['name']?></h2>
                                                                        <p class="text-secondary text-sm text-uppercase"><?=empty($upPool['code'])? '' : $upPool['code'].' / '?>BUSD</p>
                                                                    </div>
                                                                    <div class="text-sm opacity-70">
                                                                        <div><?=$upPool['description']?></div>
                                                                    </div>
                                                                    <ul class="flex flex-wrap items-center text-main space-x-6 z-20 relative text-xl">
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
                                                                        <li class="flex items-center"><a href="#" target="_blank" class="text-sm text-main py-3">Whitelist</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="space-y-3">
                                                                    <div class="text-sm">Access: <span class="text-main">whitelist</span></div>
                                                                    <div class="text-sm">Swap Rate: <div class="text-main inline text-uppercase"><?=empty($upPool['swap_rate']) ? 'TBA' : '1 '.$upPool['code'].' = '.(1/$upPool['swap_rate']).' BUSD'?></div>
                                                                    </div>
                                                                    <div class="text-sm">Start:
                                                                        <!-- --> <span class="text-main"><?=empty($upPool['start'])? 'TBA' : date('d M, H:i e', strtotime($upPool['start']))?></span>
                                                                    </div>
                                                                    <div class="mb-6">
                                                                        <div class="space-y-1">
                                                                            <div class="flex justify-between text-sm tracking-wide space-x-3">
                                                                                <div class=""><span>
                                                                                        <!-- --><?=empty($upPool['start'])? 'TBA' : 'finished '.timediff($upPool['start']).' ago'?>
                                                                                    </span></div>
                                                                                <div class="font-medium opacity-90 text-right"><span class="text-main "><?=$upPool['progress_bar']?>
                                                                                        <!-- -->%
                                                                                    </span></div>
                                                                            </div>
                                                                            <div class="h-2 bg-gray-600 progress">
                                                                                <div role="progressbar" class="progress-bar bg-primary" style="width:<?=$upPool['progress_bar']?>%" aria-valuenow="NaN" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">0%</span></div>
                                                                            </div>
                                                                            <div class="flex justify-between text-sm tracking-wide space-x-3">
                                                                                <div class="text-ignored opacity-90 flex-shrink-0"><?=price(($upPool['progress_bar']/100)*$upPool['hard_cap'])?>
                                                                                    <!-- -->
                                                                                    <!-- -->BUSD
                                                                                </div>
                                                                                <div class="text-ignored opacity-90 text-right text-uppercase"><?=price(($upPool['progress_bar']/100)*($upPool['hard_cap']*$upPool['swap_rate']))?>
                                                                                    <!-- --> /
                                                                                    <!-- --><?=price(($upPool['hard_cap']*$upPool['swap_rate']))?>
                                                                                    <!-- -->
                                                                                    <!-- --><?=$upPool['code']?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex justify-between">
                                                                        <div>
                                                                            <h4 class="text-xs">Total Raise</h4>
                                                                            <div class="text-sm text-main">$<?=price($upPool['hard_cap'])?></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach;endif; ?>
                                                
                                            </section>
                                            <section  id="upcomingP"  class="mb-12">
                                            <?php if (empty($upcomingPools)):?>
                                                <p class="-mt-6  text-center text-secondary">Currently, there are no pools here.</p>
                                                <?php else: ?>
                                                <div class="row">
                                                <?php foreach ($upcomingPools as $poolkey => $upPool):?>
                                                    
                                                    <div class="py-6 col-md-4">
                                                        <div class="hover:shadow-xl hover:bg-dark bg-dark2 border-mainDark h-full hover:-translate-y-2 transform transition relative card bg-darker"><a class="absolute top-0 left-0 h-full w-full z-10" href="<?=base_url(urlencode($upPool['name']))?>"></a>
                                                            <div class="space-y-6 flex flex-col justify-between card-body">
                                                                <div class="space-y-3">
                                                                    <div class="flex justify-between">
                                                                        <div>
                                                                            <div class="h-12 w-12 overflow-hidden rounded-full border-2 border-mainDark flex items-center justify-center"><img class="w-full" src="<?=$upPool['image']?>" alt="<?=$upPool['name']?>" /></div>
                                                                        </div>
                                                                        <div class="flex items-center space-x-2 flex-wrap">
                                                                            <div class='rounded-full h-7 w-7 flex items-center justify-center bg-opacity-70<?=wallet($upPool['wallet'])?></div><span class='py-1 px-2 font-normal bg-opacity-40 bg-green-700 text-green-500 tracking-wider h-6 leading-4 badge badge-pill badge-success'>UPCOMING</span>
                                                                            <div class="text-lg">🔥</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="">
                                                                        <h2 class="text-xl font-semibold font-kgqj"><?=$upPool['name']?></h2>
                                                                        <p class="text-secondary text-sm text-uppercase"><?=empty($upPool['code'])? '' : $upPool['code'].' / '?>BUSD</p>
                                                                    </div>
                                                                    <div class="text-sm opacity-70">
                                                                        <div><?=$upPool['description']?></div>
                                                                    </div>
                                                                    <ul class="flex flex-wrap items-center text-main space-x-6 z-20 relative text-xl">
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
                                                                        <li class="flex items-center"><a href="#" target="_blank" class="text-sm text-main py-3">Whitelist</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="space-y-3">
                                                                    <div class="text-sm">Access: <span class="text-main">whitelist</span></div>
                                                                    <div class="text-sm">Swap Rate: <div class="text-main inline text-uppercase"><?=empty($upPool['swap_rate']) ? 'TBA' : '1 '.$upPool['code'].' = '.$upPool['swap_rate'].' BUSD'?></div>
                                                                    </div>
                                                                    <div class="text-sm">Start:
                                                                        <!-- --> <span class="text-main"><?=empty($upPool['start'])? 'TBA' : date('d M, H:i e', strtotime($upPool['start']))?></span>
                                                                    </div>
                                                                    <div class="mb-6">
                                                                        <div class="space-y-1">
                                                                            <div class="flex justify-between text-sm tracking-wide space-x-3">
                                                                                <div class=""><span>
                                                                                        <!-- --><?=empty($upPool['start'])? 'TBA' : 'opens in '.timediff($upPool['start'])?>
                                                                                    </span></div>
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
                                                                                    <!-- --><?=$upPool['code']?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex justify-between">
                                                                        <div>
                                                                            <h4 class="text-xs">Total Raise</h4>
                                                                            <div class="text-sm text-main">TBA</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach;endif; ?>
                                                </div>
                                            </section>
                                            <section  id="endedP"  class="mb-12 d-none">
                                                <?php if (empty($endedPools)):?>
                                                <p class="-mt-6  text-center text-secondary">Currently, there are no pools here.</p>
                                                <?php else: ?>
                                                <div class="row">
                                                <?php foreach ($endedPools as $poolkey => $upPool):?>
                                                    <div class="py-6 col-md-4">
                                                        <div class="hover:shadow-xl hover:bg-dark bg-dark2 border-mainDark h-full hover:-translate-y-2 transform transition relative card bg-darker"><a class="absolute top-0 left-0 h-full w-full z-10" href="<?=base_url(urlencode($upPool['name']))?>"></a>
                                                            <div class="space-y-6 flex flex-col justify-between card-body">
                                                                <div class="space-y-3">
                                                                    <div class="flex justify-between">
                                                                        <div>
                                                                            <div class="h-12 w-12 overflow-hidden rounded-full border-2 border-mainDark flex items-center justify-center"><img class="w-full" src="<?=$upPool['image']?>" alt="<?=$upPool['name']?>" /></div>
                                                                        </div>
                                                                        <div class="flex items-center space-x-2 flex-wrap">
                                                                            <div class='rounded-full h-7 w-7 flex items-center justify-center bg-opacity-70<?=wallet($upPool['wallet'])?></div><span class='py-1 px-2 font-normal bg-opacity-40 bg-green-700 text-green-500 tracking-wider h-6 leading-4 badge badge-pill badge-success text-uppercase'><?=$upPool['status']?></span>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="">
                                                                        <h2 class="text-xl font-semibold font-kgqj"><?=$upPool['name']?></h2>
                                                                        <p class="text-secondary text-sm text-uppercase"><?=empty($upPool['code'])? '' : $upPool['code'].' / '?>BUSD</p>
                                                                    </div>
                                                                    <div class="text-sm opacity-70">
                                                                        <div><?=$upPool['description']?></div>
                                                                    </div>
                                                                    <ul class="flex flex-wrap items-center text-main space-x-6 z-20 relative text-xl">
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
                                                                        <li class="flex items-center"><a href="#" target="_blank" class="text-sm text-main py-3">Whitelist</a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="space-y-3">
                                                                    <div class="text-sm">Access: <span class="text-main">whitelist</span></div>
                                                                    <div class="text-sm">Swap Rate: <div class="text-main inline text-uppercase"><?=empty($upPool['swap_rate']) ? 'TBA' : '1 '.$upPool['code'].' = '.(1/$upPool['swap_rate']).' BUSD'?></div>
                                                                    </div>
                                                                    <div class="text-sm">Start:
                                                                        <!-- --> <span class="text-main"><?=empty($upPool['start'])? 'TBA' : date('d M, H:i e', strtotime($upPool['start']))?></span>
                                                                    </div>
                                                                    <div class="mb-6">
                                                                        <div class="space-y-1">
                                                                            <div class="flex justify-between text-sm tracking-wide space-x-3">
                                                                                <div class=""><span>
                                                                                        <!-- --><?=empty($upPool['start'])? 'TBA' : 'finished '.timediff($upPool['start']).' ago'?>
                                                                                    </span></div>
                                                                                <div class="font-medium opacity-90 text-right"><span class="text-main "><?=$upPool['progress_bar']?>
                                                                                        <!-- -->%
                                                                                    </span></div>
                                                                            </div>
                                                                            <div class="h-2 bg-gray-600 progress">
                                                                                <div role="progressbar" class="progress-bar bg-primary" style="width:<?=$upPool['progress_bar']?>%" aria-valuenow="NaN" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">0%</span></div>
                                                                            </div>
                                                                            <div class="flex justify-between text-sm tracking-wide space-x-3">
                                                                                <div class="text-ignored opacity-90 flex-shrink-0"><?=price(($upPool['progress_bar']/100)*$upPool['hard_cap'])?>
                                                                                    <!-- -->
                                                                                    <!-- -->BUSD
                                                                                </div>
                                                                                <div class="text-ignored opacity-90 text-right text-uppercase"><?=price(($upPool['progress_bar']/100)*($upPool['hard_cap']*$upPool['swap_rate']))?>
                                                                                    <!-- --> /
                                                                                    <!-- --><?=price(($upPool['hard_cap']*$upPool['swap_rate']))?>
                                                                                    <!-- -->
                                                                                    <!-- --><?=$upPool['code']?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex justify-between">
                                                                        <div>
                                                                            <h4 class="text-xs">Total Raise</h4>
                                                                            <div class="text-sm text-main">$<?=price($upPool['hard_cap'])?></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach;endif; ?>
                                                </div>
                                            </section>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div role="tabpanel" aria-hidden="true" class="fade tab-pane">
                                <div id="levels">
                                    <section class="py-12 bg-gray-600 bg-opacity-5">
                                        <div class="container">
                                            <h2 class="SectionTitle_title__1O2hJ "><strong>TrustPAD</strong> Levels</h2>
                                            <h2 class="SectionTitle_title__1O2hJ ">Lottery Levels</h2>
                                            <div class="flex flex-wrap md:-mx-6">
                                                <div class="p-3 py-6 md:w-1/3 w-full">
                                                    <div class="bg-dark2 border-dark hover:bg-dark2-hover border-2     shadow-xl hover:shadow-none hover:border-dark2-hover card bg-darker">
                                                        <div class="space-y-8 text-center py-8 card-body">
                                                            <h2 class="font-secondary uppercase text-2xl tracking-wider">chance</h2>
                                                            <div class="bg-mainDark bg-opacity-25 -mx-5 py-3 space-y-6 shadow-xl">
                                                                <div class="opacity-60 text-sm">Staking Requirements</div>
                                                                <div class="font-Ubuntu tracking-wide flex items-center justify-center">
                                                                    <div class="mx-2 brand-text text-5xl font-Rubik">2,000</div>
                                                                    <div class="text-lg opacity-60">TPAD</div>
                                                                </div>
                                                                <div class="text-xl font-Ubuntu tracking-wide opacity-75">Locked for
                                                                    <!-- -->5 days
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Pool Weight</div>
                                                                <div class="text-5xl brand-text">1
                                                                    <!-- -->x
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Allocation Type</div>
                                                                <div class="text-xl inline-flex items-center justify-center"><span>Lottery (
                                                                        <!-- -->10
                                                                        <!-- -->%)
                                                                    </span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 py-6 md:w-1/3 w-full">
                                                    <div class="bg-dark2 border-dark hover:bg-dark2-hover border-2     shadow-xl hover:shadow-none hover:border-dark2-hover card bg-darker">
                                                        <div class="space-y-8 text-center py-8 card-body">
                                                            <h2 class="font-secondary uppercase text-2xl tracking-wider">prospect</h2>
                                                            <div class="bg-mainDark bg-opacity-25 -mx-5 py-3 space-y-6 shadow-xl">
                                                                <div class="opacity-60 text-sm">Staking Requirements</div>
                                                                <div class="font-Ubuntu tracking-wide flex items-center justify-center">
                                                                    <div class="mx-2 brand-text text-5xl font-Rubik">4,000</div>
                                                                    <div class="text-lg opacity-60">TPAD</div>
                                                                </div>
                                                                <div class="text-xl font-Ubuntu tracking-wide opacity-75">Locked for
                                                                    <!-- -->5 days
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Pool Weight</div>
                                                                <div class="text-5xl brand-text">2
                                                                    <!-- -->x
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Allocation Type</div>
                                                                <div class="text-xl inline-flex items-center justify-center"><span>Lottery (
                                                                        <!-- -->25
                                                                        <!-- -->%)
                                                                    </span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 py-6 md:w-1/3 w-full">
                                                    <div class="bg-dark2 border-dark hover:bg-dark2-hover border-2     shadow-xl hover:shadow-none hover:border-dark2-hover card bg-darker">
                                                        <div class="space-y-8 text-center py-8 card-body">
                                                            <h2 class="font-secondary uppercase text-2xl tracking-wider">affiliate</h2>
                                                            <div class="bg-mainDark bg-opacity-25 -mx-5 py-3 space-y-6 shadow-xl">
                                                                <div class="opacity-60 text-sm">Staking Requirements</div>
                                                                <div class="font-Ubuntu tracking-wide flex items-center justify-center">
                                                                    <div class="mx-2 brand-text text-5xl font-Rubik">8,000</div>
                                                                    <div class="text-lg opacity-60">TPAD</div>
                                                                </div>
                                                                <div class="text-xl font-Ubuntu tracking-wide opacity-75">Locked for
                                                                    <!-- -->5 days
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Pool Weight</div>
                                                                <div class="text-5xl brand-text">2
                                                                    <!-- -->x
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Allocation Type</div>
                                                                <div class="text-xl inline-flex items-center justify-center"><span>Lottery (
                                                                        <!-- -->50
                                                                        <!-- -->%)
                                                                    </span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h2 class="SectionTitle_title__1O2hJ ">Guaranteed Levels</h2>
                                            <div class="flex flex-wrap md:-mx-6">
                                                <div class="p-3 py-6 md:w-1/3 w-full">
                                                    <div class="bg-dark2 border-dark hover:bg-dark2-hover border-2     shadow-xl hover:shadow-none hover:border-dark2-hover card bg-darker">
                                                        <div class="space-y-8 text-center py-8 card-body">
                                                            <h2 class="font-secondary uppercase text-2xl tracking-wider">member</h2>
                                                            <div class="bg-mainDark bg-opacity-25 -mx-5 py-3 space-y-6 shadow-xl">
                                                                <div class="opacity-60 text-sm">Staking Requirements</div>
                                                                <div class="font-Ubuntu tracking-wide flex items-center justify-center">
                                                                    <div class="mx-2 brand-text text-5xl font-Rubik">10,000</div>
                                                                    <div class="text-lg opacity-60">TPAD</div>
                                                                </div>
                                                                <div class="text-xl font-Ubuntu tracking-wide opacity-75">Locked for
                                                                    <!-- -->5 days
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Pool Weight</div>
                                                                <div class="text-5xl brand-text">2
                                                                    <!-- -->x
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Allocation Type</div>
                                                                <div class="text-xl inline-flex items-center justify-center"><span>Guaranteed</span> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="inline text-green-600 ml-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 py-6 md:w-1/3 w-full">
                                                    <div class="bg-dark2 border-dark hover:bg-dark2-hover border-2     shadow-xl hover:shadow-none hover:border-dark2-hover card bg-darker">
                                                        <div class="space-y-8 text-center py-8 card-body">
                                                            <h2 class="font-secondary uppercase text-2xl tracking-wider">club</h2>
                                                            <div class="bg-mainDark bg-opacity-25 -mx-5 py-3 space-y-6 shadow-xl">
                                                                <div class="opacity-60 text-sm">Staking Requirements</div>
                                                                <div class="font-Ubuntu tracking-wide flex items-center justify-center">
                                                                    <div class="mx-2 brand-text text-5xl font-Rubik">16,000</div>
                                                                    <div class="text-lg opacity-60">TPAD</div>
                                                                </div>
                                                                <div class="text-xl font-Ubuntu tracking-wide opacity-75">Locked for
                                                                    <!-- -->5 days
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Pool Weight</div>
                                                                <div class="text-5xl brand-text">3
                                                                    <!-- -->x
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Allocation Type</div>
                                                                <div class="text-xl inline-flex items-center justify-center"><span>Guaranteed</span> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="inline text-green-600 ml-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 py-6 md:w-1/3 w-full">
                                                    <div class="bg-dark2 border-dark hover:bg-dark2-hover border-2     shadow-xl hover:shadow-none hover:border-dark2-hover card bg-darker">
                                                        <div class="space-y-8 text-center py-8 card-body">
                                                            <h2 class="font-secondary uppercase text-2xl tracking-wider">associate</h2>
                                                            <div class="bg-mainDark bg-opacity-25 -mx-5 py-3 space-y-6 shadow-xl">
                                                                <div class="opacity-60 text-sm">Staking Requirements</div>
                                                                <div class="font-Ubuntu tracking-wide flex items-center justify-center">
                                                                    <div class="mx-2 brand-text text-5xl font-Rubik">30,000</div>
                                                                    <div class="text-lg opacity-60">TPAD</div>
                                                                </div>
                                                                <div class="text-xl font-Ubuntu tracking-wide opacity-75">Locked for
                                                                    <!-- -->5 days
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Pool Weight</div>
                                                                <div class="text-5xl brand-text">6
                                                                    <!-- -->x
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Allocation Type</div>
                                                                <div class="text-xl inline-flex items-center justify-center"><span>Guaranteed</span> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="inline text-green-600 ml-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 py-6 md:w-1/3 w-full">
                                                    <div class="bg-dark2 border-dark hover:bg-dark2-hover border-2     shadow-xl hover:shadow-none hover:border-dark2-hover card bg-darker">
                                                        <div class="space-y-8 text-center py-8 card-body">
                                                            <h2 class="font-secondary uppercase text-2xl tracking-wider">executive</h2>
                                                            <div class="bg-mainDark bg-opacity-25 -mx-5 py-3 space-y-6 shadow-xl">
                                                                <div class="opacity-60 text-sm">Staking Requirements</div>
                                                                <div class="font-Ubuntu tracking-wide flex items-center justify-center">
                                                                    <div class="mx-2 brand-text text-5xl font-Rubik">60,000</div>
                                                                    <div class="text-lg opacity-60">TPAD</div>
                                                                </div>
                                                                <div class="text-xl font-Ubuntu tracking-wide opacity-75">Locked for
                                                                    <!-- -->5 days
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Pool Weight</div>
                                                                <div class="text-5xl brand-text">12
                                                                    <!-- -->x
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Allocation Type</div>
                                                                <div class="text-xl inline-flex items-center justify-center"><span>Guaranteed</span> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="inline text-green-600 ml-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 py-6 md:w-1/3 w-full">
                                                    <div class="bg-dark2 border-dark hover:bg-dark2-hover border-2     shadow-xl hover:shadow-none hover:border-dark2-hover card bg-darker">
                                                        <div class="space-y-8 text-center py-8 card-body">
                                                            <h2 class="font-secondary uppercase text-2xl tracking-wider">partner</h2>
                                                            <div class="bg-mainDark bg-opacity-25 -mx-5 py-3 space-y-6 shadow-xl">
                                                                <div class="opacity-60 text-sm">Staking Requirements</div>
                                                                <div class="font-Ubuntu tracking-wide flex items-center justify-center">
                                                                    <div class="mx-2 brand-text text-5xl font-Rubik">100,000</div>
                                                                    <div class="text-lg opacity-60">TPAD</div>
                                                                </div>
                                                                <div class="text-xl font-Ubuntu tracking-wide opacity-75">Locked for
                                                                    <!-- -->5 days
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Pool Weight</div>
                                                                <div class="text-5xl brand-text">21
                                                                    <!-- -->x
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Allocation Type</div>
                                                                <div class="text-xl inline-flex items-center justify-center"><span>Guaranteed</span> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="inline text-green-600 ml-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 py-6 md:w-1/3 w-full">
                                                    <div class="bg-dark2 border-dark hover:bg-dark2-hover border-2     shadow-xl hover:shadow-none hover:border-dark2-hover card bg-darker">
                                                        <div class="space-y-8 text-center py-8 card-body">
                                                            <h2 class="font-secondary uppercase text-2xl tracking-wider">orbit</h2>
                                                            <div class="bg-mainDark bg-opacity-25 -mx-5 py-3 space-y-6 shadow-xl">
                                                                <div class="opacity-60 text-sm">Staking Requirements</div>
                                                                <div class="font-Ubuntu tracking-wide flex items-center justify-center">
                                                                    <div class="mx-2 brand-text text-5xl font-Rubik">125,000</div>
                                                                    <div class="text-lg opacity-60">TPAD</div>
                                                                </div>
                                                                <div class="text-xl font-Ubuntu tracking-wide opacity-75">Locked for
                                                                    <!-- -->5 days
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Pool Weight</div>
                                                                <div class="text-5xl brand-text">28
                                                                    <!-- -->x
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Allocation Type</div>
                                                                <div class="text-xl inline-flex items-center justify-center"><span>Guaranteed</span> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="inline text-green-600 ml-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 py-6 md:w-1/3 mx-auto w-full">
                                                    <div style="min-height:300px" class="bg-black border-black hover:bg-opacity-60     border-2 shadow-xl hover:shadow-none h-full card bg-darker">
                                                        <div class="space-y-6 text-center py-8 card-body">
                                                            <h2 class="font-secondary uppercase text-2xl tracking-wider">black</h2>
                                                            <div class="brand-text text-2xl leading-relaxed uppercase">Private access</div>
                                                            <div class="bg-mainDark bg-opacity-25 -mx-5 py-3 space-y-6 shadow-xl">
                                                                <div class="opacity-60 text-sm">Staking Requirements</div>
                                                                <div class="font-Ubuntu tracking-wide flex items-center justify-center">
                                                                    <div class="mx-2 brand-text text-5xl font-Rubik">350,000</div>
                                                                    <div class="text-lg opacity-60">TPAD</div>
                                                                </div>
                                                                <div class="text-xl font-Ubuntu tracking-wide opacity-75">Locked for
                                                                    <!-- -->6 months
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Pool Weight</div>
                                                                <div class="text-5xl brand-text">28
                                                                    <!-- -->x
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Allocation Type</div>
                                                                <div class="text-xl inline-flex items-center justify-center"><span>Guaranteed</span> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="inline text-green-600 ml-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-3 py-6 md:w-1/3 mx-auto w-full">
                                                    <div style="min-height:300px" class="bg-black border-black hover:bg-opacity-60     border-2 shadow-xl hover:shadow-none h-full card bg-darker">
                                                        <div class="space-y-6 text-center py-8 card-body">
                                                            <h2 class="font-secondary uppercase text-2xl tracking-wider">black</h2>
                                                            <div class="brand-text text-2xl leading-relaxed uppercase">Private access</div>
                                                            <div class="bg-mainDark bg-opacity-25 -mx-5 py-3 space-y-6 shadow-xl">
                                                                <div class="opacity-60 text-sm">Staking Requirements</div>
                                                                <div class="font-Ubuntu tracking-wide flex items-center justify-center">
                                                                    <div class="mx-2 brand-text text-5xl font-Rubik">500,000</div>
                                                                    <div class="text-lg opacity-60">TPAD</div>
                                                                </div>
                                                                <div class="text-xl font-Ubuntu tracking-wide opacity-75">Locked for
                                                                    <!-- -->3 months
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Pool Weight</div>
                                                                <div class="text-5xl brand-text">28
                                                                    <!-- -->x
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="text-sm opacity-60 mb-1">Allocation Type</div>
                                                                <div class="text-xl inline-flex items-center justify-center"><span>Guaranteed</span> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="inline text-green-600 ml-2" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mx-auto mt-6 py-6 text-center"><a title="Stake" href="levels.html" class="text-xl btn btn-main btn-lg">Stake</a></div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div role="tabpanel" aria-hidden="true" class="fade tab-pane">
                                <div id="tokenomics">
                                    <section class="py-12">
                                        <div class="container">
                                            <h2 class="SectionTitle_title__1O2hJ "><strong>TrustPad</strong> Token</h2>
                                            <div class="flex flex-wrap md:-mx-6">
                                                <div class="w-full md:w-1/3">
                                                    <div class="Landing_tokenomicsCard__4VUNB">
                                                        <h3 class="text-xl font-Ubuntu opacity-80 mb-3">Total Supply</h3>
                                                        <div class="text-3xl">100M</div>
                                                    </div>
                                                </div>
                                                <div class="w-full md:w-1/3">
                                                    <div class="Landing_tokenomicsCard__4VUNB">
                                                        <h3 class="text-xl font-Ubuntu opacity-80 mb-3">Token Symbol</h3>
                                                        <div class="text-3xl">TPAD</div>
                                                    </div>
                                                </div>
                                                <div class="w-full md:w-1/3">
                                                    <div class="Landing_tokenomicsCard__4VUNB">
                                                        <h3 class="text-xl font-Ubuntu opacity-80 mb-3">Initial Mkt. Cap</h3>
                                                        <div class="text-3xl">$875K</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap md:-mx-6">
                                                <div class="md:w-1/2 w-full">
                                                    <div class="md:m-6 my-3 py-3 px-6 bg-dark2 rounded-2xl">
                                                        <h3 class="text-lg font-Ubuntu opacity-80 mb-3">Token Mechanism</h3>
                                                        <div class="text-xl ">2% re-distribution fee on each transaction</div>
                                                    </div>
                                                </div>
                                                <div class="md:w-1/2 w-full">
                                                    <div class="md:m-6 my-3 py-3 px-6 bg-dark2 rounded-2xl">
                                                        <h3 class="text-lg font-Ubuntu opacity-80 mb-3">Deflationary</h3>
                                                        <div class="text-xl ">Yes</div>
                                                    </div>
                                                </div>
                                                <div class="md:w-1/2 w-full">
                                                    <div class="md:m-6 my-3 py-3 px-6 bg-dark2 rounded-2xl">
                                                        <h3 class="text-lg font-Ubuntu opacity-80 mb-3">Initial Circulating Supply</h3>
                                                        <div class="text-xl ">8.75M</div>
                                                    </div>
                                                </div>
                                                <div class="md:w-1/2 w-full">
                                                    <div class="md:m-6 my-3 py-3 px-6 bg-dark2 rounded-2xl">
                                                        <h3 class="text-lg font-Ubuntu opacity-80 mb-3">Listing Price</h3>
                                                        <div class="text-xl ">$0.10 USD</div>
                                                    </div>
                                                </div>
                                                <div class="md:w-1/2 w-full">
                                                    <div class="md:m-6 my-3 py-3 px-6 bg-dark2 rounded-2xl">
                                                        <h3 class="text-lg font-Ubuntu opacity-80 mb-3">Token Type</h3>
                                                        <div class="text-xl ">BEP-20 (Binance Smart Chain)</div>
                                                    </div>
                                                </div>
                                                <div class="md:w-1/2 w-full">
                                                    <div class="md:m-6 my-3 py-3 px-6 bg-dark2 rounded-2xl">
                                                        <h3 class="text-lg font-Ubuntu opacity-80 mb-3">Contract Address</h3>
                                                        <div class="text-xl break-all">0xADCFC6bf853a0a8ad7f9Ff4244140D10cf01363C</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </main>
<script>
    const toggleClass =  (el, cls) => {
    if (Array.isArray(cls)) {
        cls.map((cl) => {
            el.classList.toggle(cl);
        });
    } else {
        el.classList.toggle(cls);
    }
};
    function activeP(){
        document.querySelector('#activeP').classList.toggle('d-none');
        toggleClass(document.querySelector('#actBtn'), ['hover:bg-opacity-20', 'hover:bg-gray-800', 'hover:-translate-y-1', 'border-mainDark', 'bg-none', 'shadow-none', 'border-mainTheme']);

        document.querySelector('#upcomingP').classList.toggle('d-none');
        toggleClass(document.querySelector('#upcBtn'), ['hover:bg-opacity-20', 'hover:bg-gray-800', 'hover:-translate-y-1', 'border-mainDark', 'bg-none', 'shadow-none', 'border-mainTheme']);

        document.querySelector('#endedP').classList.toggle('d-none');
        
    }
</script>