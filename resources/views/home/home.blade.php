@extends('components.layout')

@section('css')
<link rel="stylesheet" href="/assets/css/Home.css" media="screen">
@endsection

@section('content')
<section
    class="skrollable u-clearfix u-image u-section-1"
    id="home"
    data-image-width="1080"
    data-image-height="1080"
>
    <div class="u-clearfix u-sheet u-sheet-1">
    <div
        class="u-container-style u-group u-preserve-proportions u-shape-circle u-white u-group-1"
    >
        <div class="u-container-layout u-valign-middle u-container-layout-1">
        <img
            class="u-image u-image-contain u-image-default u-image-1"
            src="/assets/images/logoGP.png"
            alt=""
            data-image-width="260"
            data-image-height="300"
        />
        </div>
    </div>
    <h5
        class="u-align-center-lg u-align-center-xl u-custom-font u-text u-text-body-alt-color u-text-default u-text-1"
    >
        You're invited to
    </h5>
    <h1
        class="u-custom-font u-text u-text-body-alt-color u-text-default u-text-2"
    >
        Humanity?
    </h1>
    <h1 class="u-custom-font u-text u-text-default u-text-3">
        <span class="u-icon"></span>SKEn​A!
    </h1>
    <div
        class="u-border-3 u-border-white u-container-style u-expanded-width-xs u-group u-group-2"
    >
        <div class="u-container-layout u-valign-middle u-container-layout-2">
        <p class="u-text u-text-body-alt-color u-text-default u-text-4">
            Simpati, Kemanusiaan, Empati, n Aksi
        </p>
        </div>
    </div>
    <p
        class="u-align-center-lg u-align-center-xl u-text u-text-body-alt-color u-text-default u-text-5"
    >
        Scroll down
    </p>
    <span
        class="u-file-icon u-hover-feature u-icon u-text-white u-icon-2"
        data-href="#date"
        data-custom-animation='{"animation":{"XXL":{"steps":[],"hidden":false,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}},"XL":{"steps":[{"dist":1,"skip":0,"blur":10,"sticky":false,"fixed":true,"mx":0,"my":0,"op":0.5,"rot":0,"sx":3,"sy":3,"bgy":0}],"hidden":false,"start":{"at":"middle","off":0},"end":{"at":"top","off":0}},"LG":{"steps":[],"hidden":false,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}},"MD":{"steps":[],"hidden":false,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}},"SM":{"steps":[],"hidden":true,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}},"XS":{"steps":[],"hidden":true,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}}},"container":""}'
        ><img src="/assets/images/iconArrowDown.png" alt=""
    /></span>
    </div>
</section>
<section
    class="u-clearfix u-image u-section-2"
    id="date"
    data-image-width="1080"
    data-image-height="1080"
>
    <div class="u-clearfix u-sheet u-sheet-1">
    <h5
        class="u-align-center u-custom-font u-text u-text-body-alt-color u-text-default u-text-1"
    >
        Saved The Date
    </h5>
    <p
        class="u-align-center u-text u-text-body-alt-color u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-2"
    >
        27 Juli 2024, 17.00 WIB
    </p>
    <div
        class="u-countdown u-hover-feature u-countdown-1"
        data-timer-id="6ef7"
        data-type="to-date"
        data-target-date="Sat, 27 Jul 2024 09:00:37 GMT"
        data-for="everyone"
        data-direction="down"
        data-after-count="message"
        data-count-animation="slide"
        data-animation-name="customAnimationIn"
        data-animation-duration="1000"
        data-animation-direction=""
        data-time-left="750m"
        data-target-number="100"
        data-start-time="Mon Jul 01 2024 23:59:57 GMT+0700 (Western Indonesia Time)"
        data-frequency="1s"
        data-redirect-url="https://"
    >
        <div class="u-countdown-wrapper u-spacing-0">
        <div
            class="u-countdown-item u-countdown-years u-hidden u-spacing-10 u-countdown-item-1"
        >
            <div
            class="u-black u-countdown-counter u-radius u-spacing-5 u-countdown-counter-1"
            >
            <div class="u-countdown-number">0</div>
            <div class="u-countdown-number u-hidden">0</div>
            </div>
            <div
            class="u-countdown-label u-text-body-alt-color u-countdown-label-1"
            >
            Years
            </div>
        </div>
        <div class="u-countdown-separator u-hidden u-countdown-separator-1">
            :
        </div>
        <div
            class="u-countdown-days u-countdown-item u-spacing-10 u-countdown-item-2"
        >
            <div
            class="u-black u-countdown-counter u-radius u-spacing-5 u-countdown-counter-2"
            >
            <div class="u-countdown-number">2</div>
            <div class="u-countdown-number">5</div>
            <div class="u-countdown-number u-hidden">0</div>
            </div>
            <div
            class="u-countdown-label u-text-body-alt-color u-countdown-label-2"
            >
            Days
            </div>
        </div>
        <div class="u-countdown-separator u-countdown-separator-2">:</div>
        <div
            class="u-countdown-hours u-countdown-item u-spacing-10 u-countdown-item-3"
        >
            <div
            class="u-black u-countdown-counter u-radius u-spacing-5 u-countdown-counter-3"
            >
            <div class="u-countdown-number">1</div>
            <div class="u-countdown-number">6</div>
            </div>
            <div
            class="u-countdown-label u-text-body-alt-color u-countdown-label-3"
            >
            Hours
            </div>
        </div>
        <div class="u-countdown-separator u-countdown-separator-3">:</div>
        <div
            class="u-countdown-item u-countdown-minutes u-spacing-10 u-countdown-item-4"
        >
            <div
            class="u-black u-countdown-counter u-radius u-spacing-5 u-countdown-counter-4"
            >
            <div class="u-countdown-number">2</div>
            <div class="u-countdown-number">0</div>
            </div>
            <div
            class="u-countdown-label u-text-body-alt-color u-countdown-label-4"
            >
            Minutes
            </div>
        </div>
        <div class="u-countdown-separator u-countdown-separator-4">:</div>
        <div
            class="u-countdown-item u-countdown-seconds u-spacing-10 u-countdown-item-5"
        >
            <div
            class="u-black u-countdown-counter u-radius u-spacing-5 u-countdown-counter-5"
            >
            <div class="u-countdown-number">4</div>
            <div class="u-countdown-number">4</div>
            </div>
            <div
            class="u-countdown-label u-text-body-alt-color u-countdown-label-5"
            >
            Seconds
            </div>
        </div>
        <div class="u-countdown-separator u-hidden u-countdown-separator-5">
            :
        </div>
        <div
            class="u-countdown-item u-countdown-numbers u-hidden u-spacing-10 u-countdown-item-6"
        >
            <div
            class="u-black u-countdown-counter u-radius u-spacing-5 u-countdown-counter-6"
            >
            <div class="u-countdown-number">0</div>
            <div class="u-countdown-number">0</div>
            </div>
            <div
            class="u-countdown-label u-text-body-alt-color u-countdown-label-6"
            >
            Items
            </div>
        </div>
        </div>
        <div class="u-countdown-message u-hidden u-text-body-alt-color">
        <p>THE DAY!</p>
        </div>
    </div>
    <p
        class="u-align-center u-text u-text-body-alt-color u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-3"
    >
        Scroll down
    </p>
    <span
        class="u-align-center u-file-icon u-icon u-text-white u-icon-1"
        data-href="#maps"
        data-custom-animation='{"animation":{"XXL":{"steps":[],"hidden":false,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}},"XL":{"steps":[{"dist":1,"skip":0,"blur":10,"sticky":false,"fixed":true,"mx":0,"my":0,"op":0.5,"rot":0,"sx":3,"sy":3,"bgy":0}],"hidden":false,"start":{"at":"middle","off":0},"end":{"at":"top","off":0}},"LG":{"steps":[],"hidden":false,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}},"MD":{"steps":[],"hidden":false,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}},"SM":{"steps":[],"hidden":true,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}},"XS":{"steps":[],"hidden":true,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}}},"container":""}'
        ><img src="/assets/images/iconArrowDown.png" alt=""
    /></span>
    </div>
</section>
<section
    class="u-clearfix u-image u-section-3"
    id="maps"
    data-image-width="1080"
    data-image-height="1080"
>
    <div class="u-clearfix u-sheet u-sheet-1">
    <h5
        class="u-align-center u-custom-font u-text u-text-body-alt-color u-text-default u-text-1"
    >
        Saved The Location
    </h5>
    <p
        class="u-align-center u-text u-text-body-alt-color u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-2"
    >
        Rumah Ibu Theo Syafe'i
    </p>
    <div
        class="u-align-center u-border-3 u-border-white u-container-style u-expanded-width-xs u-group u-group-1"
    >
        <div class="u-container-layout u-valign-middle u-container-layout-1">
        <p class="u-text u-text-body-alt-color u-text-default u-text-3">
            Jl. Raya Mabes Hankam No. T65, Bambu Apus, Cilangkap, Jakarta
            Timur
        </p>
        </div>
    </div>
    <div class="u-grey-light-2 u-map u-map-1">
        <div class="embed-responsive">
        <iframe
            class="embed-responsive-item"
            src="https://maps.google.com/maps?output=embed&amp;q=Graha%20T%2065&amp;z=10&amp;t=m"
            data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWFkZHJlc3MlMjIlMkMlMjJhZGRyZXNzJTIyJTNBJTIyR3JhaGElMjBUJTIwNjUlMjIlMkMlMjJ6b29tJTIyJTNBMTAlMkMlMjJ0eXBlSWQlMjIlM0ElMjJyb2FkJTIyJTJDJTIybGFuZyUyMiUzQW51bGwlMkMlMjJhcGlLZXklMjIlM0FudWxsJTJDJTIybWFya2VycyUyMiUzQSU1QiU1RCU3RA=="
        ></iframe>
        </div>
    </div>
    </div>
</section>
<span
    style="
    height: 64px;
    width: 64px;
    margin-left: 0px;
    margin-right: auto;
    margin-top: 0px;
    right: 20px;
    bottom: 20px;
    padding: 20px;
    background-image: none;
    --radius: 10px;
    box-shadow: 5px 5px 20px 0 rgba(0, 0, 0, 0.4);
    "
    class="u-back-to-top u-icon u-icon-rounded u-opacity u-opacity-85 u-radius u-text-black u-white"
    data-href="#"
>
    <svg
    class="u-svg-link"
    preserveAspectRatio="xMidYMin slice"
    viewBox="0 0 551.13 551.13"
    >
    <use
        xmlns:xlink="http://www.w3.org/1999/xlink"
        xlink:href="#svg-1d98"
    ></use>
    </svg>
    <svg
    class="u-svg-content"
    enable-background="new 0 0 551.13 551.13"
    viewBox="0 0 551.13 551.13"
    xmlns="http://www.w3.org/2000/svg"
    id="svg-1d98"
    >
    <path
        d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"
    ></path>
    </svg>
</span>
@endsection