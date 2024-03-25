<!DOCTYPE html>
<html class=light lang=en>
	<head>
		<meta charset=utf-8>
		<title>{{ env('APP_NAME')}} - {{ env('TAGLINE') }}</title>
		<meta content=247-Cointrading name=author>
		<meta content="width=device-width, initial-scale=1.0" name=viewport>
		<meta content="{{ env('APP_URL') }}" property=og:url>
		<meta 	content=origin name=referrer>
		<link href="/resources/cdn.bitpanda.com/media/redesign/favicon/favicon-32x32.png" rel=icon sizes=32x32 type=image/png>
		<link href="/resources/cdn.bitpanda.com/media/redesign/favicon/favicon-16x16.png" rel=icon sizes=16x16 type=image/png>
		<meta content="IE=EmulateIE11" http-equiv=X-UA-Compatible>
		<link href="/resources/cdn.bitpanda.com/index.html" rel=preconnect>
		<link href="/resources/code.highcharts.com/index.html" rel=preconnect>
		<link href="/resources/cdn.segment.com/index.html" rel=preconnect>
		<link as=font crossorigin=anonymous href="/resources/cdn.bitpanda.com/media/fonts/bp-assets/bp-assets.woff2" rel=preload type=font/woff2>
		<link as=font crossorigin=anonymous href="/resources/cdn.bitpanda.com/media/fonts/EuclidSquare/EuclidSquare-Regular.woff2" rel=preload type=font/woff2>
		<link as=font crossorigin=anonymous href="/resources/cdn.bitpanda.com/media/fonts/EuclidSquare/EuclidSquare-Medium.woff2" rel=preload type=font/woff2>
		<link as=font crossorigin=anonymous href="/resources/cdn.bitpanda.com/media/fonts/EuclidSquare/EuclidSquare-Semibold.woff2" rel=preload type=font/woff2>

		@vite(['resources/css/app.css', 'resources/js/app.js'])

		{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		
		<style>
			@font-face {
			font-family: 'bp-assets';
			src:
			url("/resources/cdn.bitpanda.com/media/fonts/bp-assets/bp-assets.woff2") format("woff2");
			font-weight: normal;
			font-style: normal;
			font-display: swap;
			}
		</style>
		<style>
			@font-face {
			font-family: EuclidSquare;
				src:
					url("/resources/cdn.bitpanda.com/media/fonts/EuclidSquare/EuclidSquare-Regular.woff2") format("woff2"),
					url("https://cdn.bitpanda.com/media/fonts/EuclidSquare/EuclidSquare-Regular.woff") format("woff");
				font-weight: normal;
				font-style: normal;
				font-display: swap;
			}
			@font-face {
				font-family: EuclidSquare;
				src:
					url("/resources/cdn.bitpanda.com/media/fonts/EuclidSquare/EuclidSquare-Medium.woff2") format("woff2"),
					url("https://cdn.bitpanda.com/media/fonts/EuclidSquare/EuclidSquare-Medium.woff") format("woff");
				font-weight: 500;
				font-style: normal;
				font-display: swap;
			}
			@font-face {
			font-family: EuclidSquare;
				src:
					url("/resources/cdn.bitpanda.com/media/fonts/EuclidSquare/EuclidSquare-Semibold.woff2") format("woff2");
					url("https://cdn.bitpanda.com/media/fonts/EuclidSquare/EuclidSquare-Semibold.woff") format("woff");
				font-weight: 600;
				font-style: normal;
				font-display: swap;
			}
		</style>
		<meta content="Trade in minutes from only $1.
			Your No.1 America broker for stocks, crypto, indices, ETFs and precious metals. Trade 24/7." name=description>
		<meta content="Bitpanda - Start investing today" name=title>
		{{-- 
		<link href="/" rel=canonical>
		<link href="/" hreflang=x-default rel=alternate>
		<link href="/" hreflang=en rel=alternate>
		<link href="de.html" hreflang=de rel=alternate>
		<link href="fr.html" hreflang=fr rel=alternate>
		<link href="es.html" hreflang=es rel=alternate>
		<link href="it.html" hreflang=it rel=alternate>
		<link href="pl.html" hreflang=pl rel=alternate>
		--}}
		<meta content="index, follow " name=robots>
		<meta content=article property=og:type>
		<meta content="{{ env('APP_NAME') }} - {{ env('TAGLINE') }}" property=og:title>
		<meta content="Trade in minutes from only 1$.
			Your N. 1 America Broker for stocks, crypto, indices, ETFs and precious metals. Trade 24/7." property=og:description>
		<meta content=# property=og:image>
		<link href="/resources/cdn.bitpanda.com/app/v2/css/all.minb4e4.css?id=21c769637faa4e5e25cf" rel=stylesheet>
		<script src="/resources/cdn.bitpanda.com/app/v2/js/head.min085f.js?id=e37b5634f1d9be3b8e80"></script>
		<script>
			function getUrlVars() {
			    var vars = {};
			    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m, key, value) {
			        vars[key] = value;
			    });
			    return vars;
			}
			
			function getUrlParam(param) {
			    let value = "";
			    //console.log(window.location.href);
			    if (window.location.href.indexOf(param) > -1)
			        value = getUrlVars()[param];
			    return value;
			}
			
			function setCookie(name, value, days) {
			    var expires = "";
			    if (days) {
			        var date = new Date();
			        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
			        expires = "; expires=" + date.toUTCString();
			    }
			    document.cookie = name + "=" + (value || "") + expires + "; domain=.bitpanda.com; path=/";
			}
			
			function getCookie(name) {
			    var nameEQ = name + "=";
			    var ca = document.cookie.split(';');
			    for (var i = 0; i < ca.length; i++) {
			        var c = ca[i];
			        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
			        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
			    }
			    return null;
			}
			
			function eraseCookie(name) {
			    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT; domain=.bitpanda.com; path=/';
			}
			const s_id = getUrlParam('s_id');
			if (!!s_id) {
			    setCookie('s_id', s_id, 60);
			}
			const ref = getUrlParam('ref');
			if (!!ref) {
			    setCookie('ref', ref, 30);
			    eraseCookie('tag');
			    eraseCookie('s_id');
			}
			const tag = getUrlParam('tag');
			if (!!tag) {
			    setCookie('tag', tag, 30);
			    //eraseCookie('s_id');
			}
			const clickId = getUrlParam('irclickid');
			if (!!clickId) {
			    setCookie('irclickid', clickId, 30);
			}
			
		</script>
		<script>
			window.addEventListener('DOMContentLoaded', (event) => {
			    let hash = window.location.hash;
			    hash = hash.replace("##", "#");
			    hash = hash.replace("%23", "");
			    window.location.hash = hash;
			    const targetNode = document.querySelectorAll('.uk-switcher')[0];
			    if (typeof targetNode !== "undefined") {
			        const config = {
			            attributes: true,
			            childList: true,
			            subtree: true
			        };
			        const callback = function(mutationsList, observer) {
			            document.querySelectorAll(".uk-switcher > li").forEach(_li => {
			                if (_li.getAttribute('id') !== null) {
			                    _li.setAttribute("id", _li.getAttribute("id").replace("#", ""));
			                }
			            });
			
			            document.querySelectorAll("#tab-module > li > a").forEach(_a => {
			                if (_a.getAttribute('href') !== null) {
			                    _a.setAttribute("href", _a.getAttribute("href").replace("##", "#"));
			                }
			            });
			
			            observer.disconnect();
			        };
			        const observer = new MutationObserver(callback);
			        observer.observe(targetNode, config);
			    }
			});
			
		</script>
		<script>
			var _paq = window._paq = window._paq || [];
			/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
			_paq.push(['trackPageView']);
			_paq.push(['enableLinkTracking']);
			(function() {
			    var u = "https://bitpanda.matomo.cloud/";
			    _paq.push(['setTrackerUrl', u + 'matomo.php']);
			    _paq.push(['setSiteId', '1']);
			    var d = document,
			        g = d.createElement('script'),
			        s = d.getElementsByTagName('script')[0];
			    g.async = true;
			    g.src = '/resources/cdn.matomo.cloud/bitpanda.matomo.cloud/matomo.js';
			    s.parentNode.insertBefore(g, s);
			})();
			
		</script>
		<script async src="/resources/widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js"></script>
		{{-- 
		<meta content=Bitpanda name=smartbanner:title>
		<meta content=Bitpanda name=smartbanner:author>
		<meta content=FREE name=smartbanner:price>
		<meta content=" - In Google Play" name=smartbanner:price-suffix-google>
		<meta content="- Now in App Store" name=smartbanner:price-suffix-apple>
		<meta content=https://cdn.bitpanda.com/media/android-chrome-192x192.png name=smartbanner:icon-google>
		<meta content=https://cdn.bitpanda.com/media/apple-touch-icon.png name=smartbanner:icon-apple>
		<meta content=SHOW name=smartbanner:button>
		<meta content=android,ios name=smartbanner:enabled-platforms>
		<meta content="https://play.google.com/store/apps/details?id=com.bitpanda.bitpanda&referrer=utm_source%3Dmobile%26utm_medium%3Dsmartbanner" name=smartbanner:button-url-google>
		<meta content="https://apps.apple.com/at/app/bitpanda/id1449018960?referrer=utm_source%3Dmobile%26utm_medium%3Dsmartbanner_apple" name=smartbanner:button-url-apple>
		--}}
		<script>
			let apiUrls = {
			    bpIcons: "https://bitpanda-broker-production-assets.s3-eu-west-1.amazonaws.com/static/cryptocoin/",
			    base: "https://api.bitpanda.com/v1/",
			    baseV2: "https://api.bitpanda.com/v2/",
			    baseV3: "https://api.bitpanda.com/v3/"
			}
			
		</script>
		<script>
			let utmTextReplace = {
			    utmParameter: '',
			    utmValue: '',
			    cssSelector: '',
			    text: '',
			}
			window.footer_banner = {
			    show_in_countries: ["TR"]
			}
			
		</script>
		<script src="/resources/geoip-js.com/js/apis/geoip2/v2.1/geoip2.js"></script>
		<script>
			window.adjustSettings = {
			    appToken: '7hrkmq2yb3b4',
			    environment: 'production'
			}
		
		</script>
		<script type=application/ld+json>
			{
			    "@context": "https://schema.org",
			    "@graph": [{
			            "@type": "Organization",
			            "@id": "https:\/\/bitpanda.com\/#organization",
			            "name": "Bitpanda",
			            "url": "https:\/\/www.bitpanda.com\/en",
			            "sameAs": ["https:\/\/en.wikipedia.org\/wiki\/Bitpanda", "index.html\/\/www.facebook.com\/BITPANDA", "index.html\/\/twitter.com\/bitpanda", "index.html\/\/www.linkedin.com\/company\/bitpanda\/", "index.html\/\/www.wikidata.org\/wiki\/Q109391386", "index.html\/\/www.youtube.com\/c\/BitpandaOfficial", "index.html\/\/www.instagram.com\/bitpanda\/", "index.html\/\/www.reddit.com\/r\/bitpanda\/", "index.html\/\/vk.com\/bitpanda", "index.html\/\/apps.apple.com\/at\/app\/bitpanda-buy-bitcoin\/id1449018960", "index.html\/\/play.google.com\/store\/apps\/details?id=com.bitpanda.bitpanda", "https:\/\/t.me\/bitpanda_announcements"],
			            "logo": {
			                "@type": "ImageObject",
			                "@id": "https:\/\/bitpanda.com\/#logo",
			                "inLanguage": "en-US",
			                "url": "https:\/\/cdn.bitpanda.com\/media\/Ukraine\/U-bitpanda-logo.svg",
			                "width": 180,
			                "height": 180,
			                "caption": "Bitpanda - Cryptocurrency, Stocks, Metals, and Indices Exchange"
			            },
			            "image": {
			                "@id": "https:\/\/bitpanda.com\/#logo"
			            }
			        },
			        {
			            "@type": "WebSite",
			            "@id": "https:\/\/bitpanda.com\/#website",
			            "url": "https:\/\/www.bitpanda.com\/en",
			            "name": "Bitpanda - Cryptocurrency, Stocks, Metals, and Indices Exchange",
			            "description": "Invest in what you believe in",
			            "publisher": {
			                "@id": "https:\/\/bitpanda.com\/#organization"
			            },
			            "potentialAction": [{
			                "@type": "SearchAction",
			                "target": "https:\/\/www.bitpanda.com\/en\/search?query={search_term_string}",
			                "query-input": "required name=search_term_string"
			            }],
			            "inLanguage": "en-US"
			        },
			        {
			            "@type": "WebPage",
			            "@id": "https:\/\/bitpanda.com\/#webpage",
			            "url": "https:\/\/www.bitpanda.com\/en",
			            "name": "Bitpanda's user-friendly, trade-everything platform empowers you to invest in the stocks, cryptocurrencies and metals you want \u2014 with any amount of money",
			            "isPartOf": {
			                "@id": "https:\/\/bitpanda.com\/#website"
			            },
			            "about": {
			                "@id": "https:\/\/bitpanda.com\/#organization"
			            },
			            "datePublished": "2018-06-13T13:52:10+00:00",
			            "dateModified": "2022-05-20T10:39:00+00:00",
			            "description": "Trade in minutes with Bitpanda from only \u20ac1. Your No.1 America broker for stocks, crypto, indices, ETFs and precious metals. Trade 24\/7."
			        }
			    ]
			}
			
		</script>
		<script type=application/ld+json>
			{
			    "@context": "https://schema.org",
			    "@type": "BreadcrumbList",
			    "itemListElement": [
			        [{
			            "@type": "ListItem",
			            "position": 1,
			            "name": "Home",
			            "item": "https:\/\/www.bitpanda.com\/en"
			        }]
			    ]
			}
			
		</script>
    </head>
	<body class="default home light" style="position: unset;">
		<header id=layout-header>
			<header>
				<div class="bp-nav js-contains-anchor">
					<div class=bp-nav__container>
						<div class=util-flex-shrink-0><a href="/"><img alt=247-Cointrading class=lazyload data-src="/resources/1/img/logo.png" style="height: 30pt;"> </a> </div>
						<div class=util-visible-desktop>
							<ul class=bp-nav__navigation>
								<li>
									<a href="/about" class="bp-nav__item text-black hover:text-slate-600 hover:decoration-none">
										<div class=bp-nav__item__text>Fix My Credit</div>
									</a>
								</li>
                                    
                                    <li>
									<div class=bp-nav__item>
										<a class=bp-nav__item__text href="#">About Credit</a>
										<div class=bp-dropdown>
											<ul class=bp-dropdown__grid>
												<li class=bp-dropdown__grid-list>
													<div class=bp-dropdown__title>Negative items</div>
													<ul>
														<li>
															<a class=bp-dropdown__item href="#">
																<div><small>What are negative items?</small> </div>
															</a>
														
														<li>
															<a class=bp-dropdown__item href="#">
																<div><small>How to remove collections</small> </div>
															</a>
														
														<li>
															<a class=bp-dropdown__item href="#">
																<div><small>How to remove late payments</small> </div>
															</a>
															
														<li>
															<a class=bp-dropdown__item href="#">
																<div><small>How to remove bankruptcy</small> </div>
															</a>
														
														<li>
															<a class=bp-dropdown__item href="#">
																<div><small>How to remove bankruptcy</small> </div>
															</a>
													</ul>
													<div class=bp-dropdown__title>Credit scores</div>
													<ul>
														<li>
															<a class=bp-dropdown__item href="#">
																<div><small>What is a good credit score?</small> </div>
															</a>
															
															<li>
															<a class=bp-dropdown__item href="#">
																<div><small>What is a bad credit score?</small> </div>
															</a>
															
														<li>
															<a class=bp-dropdown__item href="#">
																<div><small>How to check your credit score</small> </div>
															</a>
														<li>
															<a class=bp-dropdown__item href="#">
																<div><small>How to build credit</small> </div>
															</a>
													</ul>
												<li class=bp-dropdown__grid-list>
													<div class=bp-dropdown__title>Credit reports</div>
													<ul>
														<li>
															<a class=bp-dropdown__item href="#">
																<div><small>What is a credit report?</small> </div>
															</a>
														
														<li>
															<a class=bp-dropdown__item href="#">
																<div><small>How to read a credit report</small> </div>
															</a>
														<li>
															<a class=bp-dropdown__item href="#">
																<div><small>How to dispute a credit report</small> </div>
															</a>
														
														<li>
															<a class=bp-dropdown__item href="#">
																<div><small>Credit reporting agencies</small> </div>
															</a>
														<li>
															<a class=bp-dropdown__item href="#">
																<div><small>Who can check your credit report?</small> </div>
															</a>
													</ul>
													<div class=bp-dropdown__title>Credit repair</div>
													<ul>
														<li>
															<a class=bp-dropdown__item href="#">
																<div><small>How to fix my credit</small> </div>
															</a>
														
														<li>
															<a class=bp-dropdown__item href="#">
																<div><small>DIY credit repair</small> </div>
															</a>
														
														<li>
															<a class=bp-dropdown__item href="#">
																<div><small>How quickly will my credit score update?</small> </div>
															</a>
														
														<li>
															<a class=bp-dropdown__item href="#">
																<div><small>What is a credit repair company?</small> </div>
															</a>
														<li>
															<a class=bp-dropdown__item href="#">
																<div><small>How to avoid credit repair scams</small> </div>
															</a>
													</ul>
											</ul>
										</div>
									</div>
								<li>
									<a href="/about" class="bp-nav__item text-black hover:text-slate-600 hover:decoration-none">
										<div class=bp-nav__item__text>About Us</div>
									</a>
								</li>
								

								
							
							</ul>
						</div>
						<div class=util-visible-desktop>
							<div><a class=bp-button href="/login" title="Log in">Log in</a></div>
							<div><a class="bp-button bg-core" href="/register" target=_blank title=Sign-up>Sign-up</a></div>
						</div>
						<div class=util-visible-mobile>
							<div><a class="bp-button bg-core" href="/register" target=_blank title=Sign-up>Sign-up</a></div>
							<div>
								<button class="bp-button bp-button--transparent" onclick=toggleOffcanvas();>
									<svg class=bp-symbol style="--bp-symbol-size: 20px;">
										<use xlink:href=#icon-hamburger></use>
									</svg>
								</button>
							</div>
						</div>
					</div>
				</div>
				<script>
					function toggleTarget(e) {
					    const item = e.currentTarget;
					    const currentTarget = document.getElementById(e.currentTarget.getAttribute("bp-expand"));
					    if (currentTarget !== activeTarget) {
					        activeTarget.setAttribute("aria-expanded", "false");
					        currentTarget.setAttribute("aria-expanded", "true");
					        activeTarget = currentTarget;
					
					        activeItem.setAttribute("aria-current", "false");
					        item.setAttribute("aria-current", "true");
					        activeItem = item;
					    }
					}
					let activeTarget = document.getElementById("bp-expand-1");
					let activeItem = document.querySelectorAll("[bp-expand=bp-expand-1]")[0];
					document.querySelectorAll("[bp-expand]").forEach(function(item) {
					    item.addEventListener("mouseenter", toggleTarget, false);
					    item.addEventListener("focus", toggleTarget, false);
					});
					
				</script>
				<div aria-expanded=false class=bp-offcanvas>
					<div class=bp-offcanvas__header>
						<a href="/"><img alt=Bitpanda class=lazyload data-src="/resources/1/img/logo.png " height=40 width=136> </a>
						<button class="bp-button bp-button--transparent" onclick=toggleOffcanvas();>
							<svg class=bp-symbol>
								<use xlink:href=#icon-close></use>
							</svg>
						</button>
					</div>
					
					<div class="livecoinwatch-widget-5" lcw-base="USD" lcw-color-tx="#999999" lcw-marquee-1="coins" lcw-marquee-2="movers" lcw-marquee-items="10"></div>
					<div class=bp-offcanvas__body>
						<nav id=js-offcanvas-nav>
							<ul>
								<li aria-expanded=false>
									<span class=bp-offcanvas__item>
										Fix My Credit
										<svg class=bp-symbol>
											<use xlink:href=#icon-chevron-down></use>
										</svg>
									</span>
									<ul>
										<li><a href="/login">Head <small>Body</small></a>
										<li><a href="/login">Head <small>Body</small></a>
										<li><a href="/login">Head <small>Body</small></a>
										<li><a href="/login">Head <small>Body</small></a>
									</ul>
								
								<li aria-expanded=false>
									<span class=bp-offcanvas__item>
										About Us
										<svg class=bp-symbol>
											<use xlink:href=#icon-chevron-down></use>
										</svg>
									</span>
									<ul>
										<li><a href="#">About Us</a>
										
									</ul>
							</ul>
						</nav>
					</div>
					<div class=bp-offcanvas__footer><a class="bp-button bp-button--large" href="/login" title="Log in">Log in</a> <a class="bp-button bp-button--large bp-button--primary" href="/register" target=_blank title=Sign-up>Sign-up</a></div>
				</div>
				<script>
					function minimiseAll() {
					    document.querySelectorAll("#js-offcanvas-nav > ul > li").forEach(function(li) {
					        li.setAttribute("aria-expanded", false);
					    })
					}
					document.querySelectorAll("#js-offcanvas-nav > ul > li").forEach(function(li) {
					    li.addEventListener("click", function(e) {
					        if (e.currentTarget.getAttribute("aria-expanded") === "true") {
					            e.currentTarget.setAttribute("aria-expanded", false);
					        } else {
					            minimiseAll();
					            e.currentTarget.setAttribute("aria-expanded", true);
					        }
					    });
					})
					
					function toggleOffcanvas(e) {
					    const offcanvas = document.querySelectorAll(".bp-offcanvas")[0];
					    if (offcanvas.getAttribute("aria-expanded") === "false") {
					        offcanvas.setAttribute("aria-expanded", "true");
					    } else {
					        offcanvas.setAttribute("aria-expanded", "false");
					    }
					}
					
					function changeLanguage(e) {
					    document.location = e.value;
					}
					
				</script>
			</header>
			<div id=mobile-nav uk-offcanvas="overlay: true;">
				<div class=uk-offcanvas-bar>
					<div class=offcanvas-logo-wrapper><a class=navbar-logo href="/"><img alt="Bitpanda Logo" class=lazyload data-src="/resources/1/img/logo.png "> </a> <a class=uk-offcanvas-close type=button><span class="bp-icon bp-icon--close"></span> </a></div>
					<ul class="uk-nav uk-nav-default" uk-nav="">
						<li class=uk-parent>
							<a href="/index#">Invest</a>
							<ul class=uk-nav-sub>
								<li><a href="/"> Invest in: </a></li>
							</ul>
                        </li>
						<li class=uk-parent>
							<a href="/index#">Prices</a>
							<ul class=uk-nav-sub>
								<li><a href="#"> Cryptocurrency prices </a></li>
								<li><a href="#"> Crypto Index prices </a></li>
								<li><a href="#"> Stock* prices </a></li>
								<li><a href="#"> ETF* prices </a></li>
								<li><a href="#"> Metals prices </a></li>
							</ul>
                        </li>
						<li class=uk-parent>
							<a href="/index#">Features</a>
							<ul class=uk-nav-sub>
								<li><a href="#"> Popular features </a></li>
								<li><a href="#"> Save time &amp; money </a></li>
								<li><a href="#"> Benefits &amp; Rewards </a></li>
								<li><a href="#"> Cash in </a></li>
							</ul>
                        </li>
						<li class=uk-parent>
							<a href="#">Company</a>
							<ul class=uk-nav-sub>
								<li><a href="about"> About </a></li>
								<li><a href="security"> Security </a></li>
								<li><a href="career"> Careers </a></li>
							</ul>
                        </li>
						<li class=uk-parent>
							<a href="#">Help</a>
							<ul class=uk-nav-sub>
								<li><a href="register/"> Get started </a>
								<li><a href="#"> Payment methods and limits </a>
								<li><a href="#"> Privacy policy </a>
								<li><a href="#"> Helpdesk </a>
							</ul>
                        </li>
					</ul>
					<ul class="bp-offcanvas-buttons uk-nav uk-nav-default" uk-nav="">
						<div>
							<li><a class="uk-button uk-button-primary uk-width-1-1" href="register/">Sign-up</a></li>
							<li class=uk-margin-small-top><a class="uk-button uk-button-secondary uk-width-1-1" href="/login">Log in</a></li>
						</div>
					</ul>
				</div>
			</div>
			<script>
				const ENTER_KEY_CODE = 13;
				$(document).ready(function() {
				    $('#search-input-modal').keydown(function(event) {
				        const keyCode = (event.keyCode ? event.keyCode : event.which);
				        if (keyCode === ENTER_KEY_CODE) {
				            const searchFilter = '' || '';
				            const searchLink = `/search?${searchFilter.length === 0 ? '' : 'filter=' + searchFilter + '&'}query=${$(this).val()}`;
				            document.location.href = searchLink;
				        }
				    });
				});
				
			</script>
		</header>
        <div class="font-sans text-gray-700 antialiased mt-[100pt] text-[10pt] md:text-[12pt] lg:text-[15pt]">
            {{ $slot }}
        </div>
        <footer id=layout-footer>
            <footer class=footer>
                <section class=footer__main>
                    <div class=uk-container>
                        <div uk-grid="">
                            <div class="uk-flex uk-width-auto@s uk-width1-1"><a href="https_/247cointrading.com/index.html"><img alt="{{ env('APP_NAME') }}" class=lazyload data-src="/resources/1/img/logo.png" height=40 width=136> </a> </div>
                        </div>
                        <div uk-grid="">
                            <div class=uk-width-1-1>
                                <nav class="uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid="">
                                    <div class=footer__main__nav>
                                        <span class=footer__main__nav__title> Invest </span>
                                        <ul>
                                            <li><a href="#l">Cryptocurrencies</a>
                                            <li><a href="#">Crypto Indices</a>
                                            <li><a href="#">Stocks*</a>
                                            <li><a href="#">ETFs*</a>
                                            <li><a href="#">Metals</a>
                                            <li><a href="#">Commodities*</a>
                                        </ul>
                                    </div>
                                    <div class=footer__main__nav>
                                        <span class=footer__main__nav__title> Earn </span>
                                        <ul>
                                            <li><a href="#">Staking</a>
                                            <li><a href="#">BEST</a>
                                            <li><a href="#">Tell-a-Friend</a>
                                            <li><a href="#">Affiliate programme</a>
                                        </ul>
                                    </div>
                                    <div class=footer__main__nav>
                                        <span class=footer__main__nav__title> Learn </span>
                                        <ul>
                                            <li><a href="#" target=_blank>Academy</a>
                                            <li><a href="index.html#" target=_blank>Maker and taker fees</a>
                                            <li><a href="#" target=_blank>6 questions about Bitcoin </a>
                                            <li><a href="#" target=_blank>Buy my first digital assets</a>
                                            <li><a href="#">What are NFTs</a>
                                        </ul>
                                    </div>
                                    <div class=footer__main__nav>
                                        <span class=footer__main__nav__title> Features </span>
                                        <ul>
                                            <li><a href="#">Payments</a>
                                            <li><a href="#">Savings plan</a>
                                            <li><a href="#">Swap</a>
                                            <li><a href="#">Plus</a>
                                            <li><a href="#">Security</a>
                                        </ul>
                                    </div>
                                    <div class=footer__main__nav>
                                        <span class=footer__main__nav__title> Products </span>
                                        <ul>
                                            <li><a href="#">Card</a>
                                            <li><a href="#">Bitpanda To Go</a>
                                            <li><a href="#">BEST</a>
                                        </ul>
                                    </div>
        
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=footer__navbar>
                    <div class=uk-container>
                        <div class="uk-child-width-auto@s uk-flex-between uk-flex-middle" uk-grid="">
        
                            <div>
                                <ul>
                                    <li><a href="/about">About us</a>
                                </ul>
                            </div>
                            <div>
                                <ul class=footer__social>
                                    <li><a class="footer__social--facebook footer__social__icon" href="#"></a>
                                    <li><a class="footer__social--twitter footer__social__icon" href="#"></a>
                                    <li><a class="footer__social--telegram footer__social__icon" href="#"></a>
                                    <li><a class="footer__social--reddit footer__social__icon" href="#"></a>
                                    <li><a class="footer__social--linkedin footer__social__icon" href="#"></a>
                                    <li><a class="footer__social--youtube footer__social__icon" href="#"></a>
                                    <li><a class="footer__social--discord footer__social__icon" href="#"></a>
                                    <li><a class="footer__social--instagram footer__social__icon" href="#"></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="footer__navbar footer__navbar--sm footer__navbar__gradient">
                    <div class=uk-container>
                        <div class=uk-flex-between uk-grid="">
        
                            <div class="uk-text-center uk-text-right@m uk-width-1-1 uk-width-auto@m"><span>&copy;Copyright {{ env('COPYRIGHT') }} <a href="{{ env('APP_URL') }}">{{ env('APP_NAME') }}</a></span> </div>
                        </div>
                    </div>
                </section>
            </footer>
        </footer>
        <section class=bp-banner__container>
            <div class="bp-banner bp-banner--hidden" id=cookie-banner>
                <div class=bp-banner__content>
                    <div class=bp-banner__content__text>
                        <div>
                            <h4>The website uses cookies.</h4>
                            We use cookies to optimize our services. The information we collect is used by us as part of our EU-wide activities. <a class=cookie-policy-button href="#" target=_blank>Cookie policy</a>
                        </div>
                        <div class=bp-banner__cookie-settings id=cookie-settings-modal>
                            <div>
                                <h5 class=cookie-settings__light-text>Cookie settings</h5>
                                <ul toggle=.uk-accordion-title uk-accordion="">
                                    <li>
                                        <div class="uk-flex uk-flex-between uk-flex-middle uk-margin-small-bottom uk-margin-small-top">
                                            <span class="cookie-settings__accordion-title uk-accordion-title">Essential cookies</span>
                                            <p class=cookie-settings__light-text>Always active
                                        </div>
                                        <p class="cookie-settings-description uk-accordion-content"> As the name would suggest, some cookies on our website are essential. They are necessary to remember your settings when using Bitpanda, (such as privacy or language settings), to protect the platform from attacks, or simply to stay logged in after you originally log in. You have the option to refuse, block or delete them, but this will significantly affect your experience using the website and not all our services will be available to you.
                                            <hr>
                                    <li>
                                        <div class="uk-flex uk-flex-between uk-flex-middle uk-margin-small-bottom uk-margin-small-top">
                                            <span class="cookie-settings__accordion-title uk-accordion-title">Performance cookies</span>
                                            <div class="cookie-settings__switch-block performance-cookies-switch"><span class="active-inactive-text cookie-settings__light-text"><span class=active>Active</span> <span class=inactive>Inactive</span></span> <label class="bp-switch uk-margin-small-right" for=performance-cookies-check><input id=performance-cookies-check type=checkbox> <span class=bp-switch__slider></span></label></div>
                                        </div>
                                        <p class="cookie-settings-description uk-accordion-content"> We use such cookies and similar technologies to collect information as users browse our website to help us better understand how it is used and then improve our services accordingly. It also helps us measure the overall performance of our website. We receive the date that this generates on an aggregated and anonymous basis. Blocking these cookies and tools does not affect the way our services work, but it does make it much harder for us to improve your experience.
                                            <hr>
                                    <li>
                                        <div class="uk-flex uk-flex-between uk-flex-middle uk-margin-small-bottom uk-margin-small-top">
                                            <span class="cookie-settings__accordion-title uk-accordion-title">Advertisement cookies</span>
                                            <div class="ad-cookies-switch cookie-settings__switch-block"><span class="active-inactive-text cookie-settings__light-text"><span class=active>Active</span> <span class=inactive>Inactive</span></span> <label class="bp-switch uk-margin-small-right" for=ad-cookies-check><input id=ad-cookies-check type=checkbox> <span class=bp-switch__slider></span></label></div>
                                        </div>
                                        <p class="cookie-settings-description uk-accordion-content"> These cookies are used to provide you with adverts relevant to Bitpanda. The tools for this are usually provided by third parties. With the help of these cookies and such third parties, we can ensure for example, that you don’t see the same ad more than once and that the advertisements are tailored to your interests. We can also use these technologies to measure the success of our marketing campaigns. Blocking these cookies and similar technologies does not generally affect the way our services work. Please note, however, that while you’ll still see advertisements about Bitpanda on websites, the adverts will no longer be personalised for you.
                                </ul>
                            </div>
                        </div>
                        <div class=cookies_buttons>
                            <button class="uk-button uk-button-default uk-button-medium" id=bpCookieAcceptButton>Accept all cookies</button> <button class="uk-button uk-button-default uk-button-medium" id=bpCookieSaveButton>Save settings</button>
                            <div class=cookies-settings-link><a class=cookie-settings-button href="features.html#cookie-settings-modal" uk-toggle="cls: cookie-banner__settings--visible;">Settings</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                const segment_key = "4R4o0hpahOARcVhpszPnj7cD2ehz1Ys3";
                const google_analytics_property = "UA-55274179-2";
        
            </script>
        </section>
        <div class="search-container uk-modal-full" id=search-modal uk-modal="">
            <div class=uk-modal-dialog>
                <button class="uk-close-large uk-modal-close-full" type=button uk-close=""></button>
                <div class=uk-padding-large>
                    <input class=search-container--input id=search-input-modal placeholder="Type to search" type=search>
                    <div class="blog-module search-container--results uk-child-width-1-3@m uk-grid" id=search-results></div>
                </div>
            </div>
        </div>
        <script async src="/resources/cdn.bitpanda.com/app/v2/js/all.min3b73.js?id=67e4d4319fbaeabb283e"></script>
        <script async src="/resources/cdn.bitpanda.com/app/v2/js/stock.min3cea.js?id=72bce0a791e192ad0fb0"></script>
        <script>
            var refAtt = getUrlParam('ref') || getCookie('ref');
            var tagAtt = getUrlParam('tag') || getCookie('tag');
        
            if (refAtt && tagAtt) {
                var androidLink = "https://bitpanda.page.link/?link=https://www.bitpanda.com/user/register/" + refAtt + "?tag%3D" + tagAtt + "&apn=com.bitpanda.bitpanda&ofl=https://play.google.com/store/apps/details?id=com.bitpanda.bitpanda&ifl=https://apps.apple.com/at/app/bitpanda/id1449018960?ibi=com.bitpanda.bitpanda";
                var iosLink = "https://bitpanda.page.link/?link=https://www.bitpanda.com/user/register/" + refAtt + "?tag%3D" + tagAtt + "&apn=com.bitpanda.bitpanda&ofl=https://apps.apple.com/at/app/bitpanda/id1449018960?ifl=https://apps.apple.com/at/app/bitpanda/id1449018960?ibi=com.bitpanda.bitpanda";
                $('.android-button').attr("href", androidLink);
                $('.ios-button').attr("href", iosLink);
            } else if (refAtt) {
                var androidLink = "https://bitpanda.page.link/?link=https://www.bitpanda.com/user/register/" + refAtt + "&apn=com.bitpanda.bitpanda&ofl=https://play.google.com/store/apps/details?id=com.bitpanda.bitpanda&ifl=https://apps.apple.com/at/app/bitpanda/id1449018960?ibi=com.bitpanda.bitpanda";
                var iosLink = "https://bitpanda.page.link/?link=https://www.bitpanda.com/user/register/" + refAtt + "&apn=com.bitpanda.bitpanda&ofl=https://apps.apple.com/at/app/bitpanda/id1449018960?ifl=https://apps.apple.com/at/app/bitpanda/id1449018960?ibi=com.bitpanda.bitpanda";
                $('.android-button').attr("href", androidLink);
                $('.ios-button').attr("href", iosLink);
            }
        
        </script>
        <script async src="/resources/cdn.bitpanda.com/app/v2/js/dotcom-components/dotcom-components.esmcb35.js?id=418046627d829dcf7600" type=module></script>
        <script async nomodule="" src="/resources/cdn.bitpanda.com/app/v2/js/dotcom-components/dotcom-components165a.js?id=0b52396aaf0e4308e3af"></script>
        <div class=fa_OyCkAkzwJOc8Gw2AUwuC>
            <script>
                //<! [CDATA[
                window._fa = window._fa || [];
                window._fa.push({
                    id: "OyCkAkzwJOc8Gw2AUwuC"
                });
                (function(d) {
                    var s = d.createElement("script");
                    s.async = true;
                    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//www.fndsda.net/beige.js";
                    var a = d.getElementsByTagName("script")[0];
                    a.parentNode.insertBefore(s, a)
                }(document));
                //]]>
        
            </script>
        </div>
        <svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink style="display: none;">
            <symbol id=icon-close viewbox="0 0 15.414 15.414">
                <g fill=currentColor>
                    <path d="m14 15.414-14-14L1.414 0l14 14Z"></path>
                    <path d="M1.414 15.414 0 14 14 0l1.414 1.414Z"></path>
                </g>
            </symbol>
            <symbol id=icon-magnifier viewbox="0 0 16.922 16.922">
                <path d="M12.418 10.922a6.9 6.9 0 1 0-1.5 1.5l4.5 4.5 1.5-1.5Zm-5.544.711a4.759 4.759 0 1 1 4.759-4.759 4.764 4.764 0 0 1-4.759 4.76Z" fill=currentColor></path>
            </symbol>
            <symbol id=icon-globe viewbox="0 0 18.467 18.467">
                <path d="M9.233 18.467A9.233 9.233 0 1 0 0 9.233a9.244 9.244 0 0 0 9.233 9.234Zm0-1.5c-.777 0-1.81-1.628-2.307-4.359h4.614c-.496 2.731-1.529 4.359-2.307 4.359Zm2.581-.451a12.588 12.588 0 0 0 1.245-3.905h3.123a7.783 7.783 0 0 1-4.368 3.904Zm5.152-7.282a7.688 7.688 0 0 1-.239 1.874h-3.481c.055-.622.087-1.252.087-1.874s-.032-1.254-.087-1.874h3.481a7.688 7.688 0 0 1 .24 1.873Zm-.787-3.374h-3.122a12.469 12.469 0 0 0-1.245-3.905 7.752 7.752 0 0 1 4.368 3.904ZM9.233 1.5c.777 0 1.81 1.628 2.307 4.359H6.926C7.423 3.128 8.456 1.5 9.233 1.5Zm2.51 5.859a20.174 20.174 0 0 1 0 3.748h-5.02a20.118 20.118 0 0 1-.002-3.748ZM6.652 1.951a12.588 12.588 0 0 0-1.245 3.905H2.284a7.783 7.783 0 0 1 4.369-3.904ZM1.5 9.233a7.688 7.688 0 0 1 .239-1.874H5.22c-.055.622-.087 1.252-.087 1.874s.032 1.254.087 1.874H1.74a7.688 7.688 0 0 1-.24-1.874Zm3.91 3.374a12.469 12.469 0 0 0 1.245 3.905 7.757 7.757 0 0 1-4.366-3.905Z" fill=currentColor></path>
            </symbol>
            <symbol id=icon-chevron-up viewbox="0 0 11.718 7.982">
                <path d="m5.858 0 5.861 5.86-2.122 2.122-3.739-3.739-3.736 3.739L0 5.861Z" fill=currentColor></path>
            </symbol>
            <symbol id=icon-chevron-down viewbox="0 0 11.569 7.904">
                <path d="M5.784 7.904 0 2.121 2.121 0l3.663 3.662L9.448 0l2.121 2.121Z" fill=currentColor></path>
            </symbol>
            <symbol id=icon-hamburger viewbox="0 0 96 96">
                <path d="M0 12h96v12H0zM0 42h96v12H0zM0 72h96v12H0z" fill=currentColor></path>
            </symbol>
        </svg>
    </body>
</html>