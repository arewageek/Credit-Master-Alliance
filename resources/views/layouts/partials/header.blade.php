<!DOCTYPE html>
<html class=light lang=en>
	<head>
		<meta charset=utf-8>
		<title>{{ env('APP_NAME')}} - {{ env('TAGLINE') }}</title>
		<meta content=247-Cointrading name=author>
		<meta content="width=device-width, initial-scale=1.0" name=viewport>
		<meta content="{{ env('APP_URL') }}" property=og:url>
		<meta content=origin name=referrer>
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
			    g.src = './resources/cdn.matomo.cloud/bitpanda.matomo.cloud/matomo.js';
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
															<a class=bp-dropdown__item href="/education/counseling/derogatory-marks">
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
							<div><a class="bp-button bg-core text-white text-sm" href="/register" target=_blank title=Sign-up>Sign-up</a></div>
						</div>
						<div class=util-visible-mobile>
							<div><a class="bp-button bg-core text-white text-sm" href="/register" target=_blank title=Sign-up>Sign-up</a></div>
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
										<li><a href="login">Head <small>Body</small></a>
										<li><a href="login">Head <small>Body</small></a>
										<li><a href="login">Head <small>Body</small></a>
										<li><a href="login">Head <small>Body</small></a>
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
					<div class=bp-offcanvas__footer><a class="bp-button bp-button--large" href="/login" title="Log in">Log in</a> <a class="bp-button bp-button--large bg-core text-white" href="/register" target=_blank title=Sign-up>Sign-up</a></div>
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
					
<<<<<<< HEAD
				
=======
				</script>
			</header>
			<div id=mobile-nav uk-offcanvas="overlay: true;">
				<div class=uk-offcanvas-bar>
					<div class=offcanvas-logo-wrapper><a class=navbar-logo href="/"><img alt="Logo" class=lazyload data-src="/resources/1/img/logo.png "> </a> <a class=uk-offcanvas-close type=button><span class="bp-icon bp-icon--close"></span> </a></div>
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
								<li><a href="/register"> Get started </a>
								<li><a href="#"> Payment methods and limits </a>
								<li><a href="#"> Privacy policy </a>
								<li><a href="#"> Helpdesk </a>
							</ul>
                        </li>
					</ul>
					<ul class="bp-offcanvas-buttons uk-nav uk-nav-default" uk-nav="">
						<div>
							<li><a class="uk-button uk-button-primary uk-width-1-1 text-white" href="/register">Sign-up</a></li>
							<li class=uk-margin-small-top><a class="uk-button uk-button-secondary uk-width-1-1" href="/login">Log in</a></li>
						</div>
					</ul>
				</div>
			</div>
			<script>
>>>>>>> dcfb3f45 (Resolved the issues with nested pages)
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