@extends('components.layout')

@section('css')
<link rel="stylesheet" href="/assets/css/Home.css" media="screen">
@endsection

@section('content')
<section
    class="skrollable u-clearfix u-image u-section-1"
    id="home"
    data-image-width="1080"
    data-image-height="1920"
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
        class="u-custom-font u-text u-text-body-alt-color u-text-default u-text-1"
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
    <p class="u-text u-text-body-alt-color u-text-default u-text-5">
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
    data-image-height="1920"
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
    data-image-height="1920"
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
        Rumah Ibu Theo Syafe'i / Graha T 65
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
    <p
        class="u-align-center u-text u-text-body-alt-color u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-4"
    >
        Scroll down
    </p>
    <span
        class="u-align-center u-file-icon u-icon u-text-white u-icon-1"
        data-href="#dresscode"
        data-custom-animation='{"animation":{"XXL":{"steps":[],"hidden":false,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}},"XL":{"steps":[{"dist":1,"skip":0,"blur":10,"sticky":false,"fixed":true,"mx":0,"my":0,"op":0.5,"rot":0,"sx":3,"sy":3,"bgy":0}],"hidden":false,"start":{"at":"middle","off":0},"end":{"at":"top","off":0}},"LG":{"steps":[],"hidden":false,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}},"MD":{"steps":[],"hidden":false,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}},"SM":{"steps":[],"hidden":true,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}},"XS":{"steps":[],"hidden":true,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}}},"container":""}'
        ><img src="/assets/images/iconArrowDown.png" alt=""
    /></span>
    </div>
</section>
<section
    class="u-clearfix u-image u-section-4"
    id="dresscode"
    data-image-width="1080"
    data-image-height="1920"
>
    <div class="u-clearfix u-sheet u-sheet-1">
    <h5
        class="u-align-center u-custom-font u-text u-text-body-alt-color u-text-default u-text-1"
    >
        Dress Code Theme
    </h5>
    <h1 class="u-align-center u-custom-font u-text u-text-default u-text-2">
        SKENA OUTFIT
    </h1>
    <p
        class="u-align-center u-text u-text-body-alt-color u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-3"
    >
        More Detail
    </p>
    <span
        class="u-align-center u-file-icon u-icon u-text-white u-icon-1"
        data-href="#dresscode-details"
        data-custom-animation='{"animation":{"XXL":{"steps":[],"hidden":false,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}},"XL":{"steps":[{"dist":1,"skip":0,"blur":10,"sticky":false,"fixed":true,"mx":0,"my":0,"op":0.5,"rot":0,"sx":3,"sy":3,"bgy":0}],"hidden":false,"start":{"at":"middle","off":0},"end":{"at":"top","off":0}},"LG":{"steps":[],"hidden":false,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}},"MD":{"steps":[],"hidden":false,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}},"SM":{"steps":[],"hidden":true,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}},"XS":{"steps":[],"hidden":true,"start":{"at":"bottom","off":0},"end":{"at":"top","off":0}}},"container":""}'
        ><img src="/assets/images/iconArrowDown.png" alt=""
    /></span>
    </div>
</section>
<section
    class="u-clearfix u-container-align-center u-image u-section-5"
    id="dresscode-details"
    data-image-width="1080"
    data-image-height="1920"
>
    <div class="u-clearfix u-sheet u-sheet-1">
    <div
        class="u-align-center u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-layout-horizontal u-list u-list-1"
    >
        <div class="u-repeater u-repeater-1">
        <div
            class="u-align-left u-container-style u-list-item u-repeater-item"
        >
            <div
            class="u-container-layout u-similar-container u-valign-top u-container-layout-1"
            >
            <img
                class="custom-expanded u-border-10 u-border-white u-image u-image-round u-radius u-image-1"
                alt=""
                data-image-width="1536"
                data-image-height="806"
                src="/assets/images/kaos-oversize.jpg"
            />
            <h4 class="u-align-left u-text u-text-body-alt-color u-text-1">
                Oversize Shirt
            </h4>
            <p class="u-align-left u-text u-text-body-alt-color u-text-2">
                Source: villagepipol.com
            </p>
            </div>
        </div>
        <div
            class="u-align-left u-container-style u-list-item u-repeater-item"
        >
            <div
            class="u-container-layout u-similar-container u-valign-top u-container-layout-2"
            >
            <img
                class="custom-expanded u-border-10 u-border-white u-image u-image-round u-radius u-image-2"
                alt=""
                data-image-width="1536"
                data-image-height="806"
                src="/assets/images/kaos-band.jpg"
            />
            <h4 class="u-align-left u-text u-text-body-alt-color u-text-3">
                Band Shirt
            </h4>
            <p class="u-align-left u-text u-text-body-alt-color u-text-4">
                Source: glamour.com
            </p>
            </div>
        </div>
        <div
            class="u-align-left u-container-style u-list-item u-repeater-item"
        >
            <div
            class="u-container-layout u-similar-container u-valign-top u-container-layout-3"
            >
            <img
                class="custom-expanded u-border-10 u-border-white u-image u-image-round u-radius u-image-3"
                alt=""
                data-image-width="1536"
                data-image-height="806"
                src="/assets/images/cargo_pants.jpeg"
            />
            <h4 class="u-align-left u-text u-text-body-alt-color u-text-5">
                Cargo Pants
            </h4>
            <p class="u-align-left u-text u-text-body-alt-color u-text-6">
                Source: pinterest.com
            </p>
            </div>
        </div>
        <div
            class="u-align-left u-container-style u-list-item u-repeater-item"
        >
            <div
            class="u-container-layout u-similar-container u-valign-top u-container-layout-4"
            >
            <img
                class="custom-expanded u-border-10 u-border-white u-image u-image-round u-radius u-image-4"
                alt=""
                data-image-width="735"
                data-image-height="934"
                src="/assets/images/cargo_skirts.jpg"
            />
            <h4 class="u-align-left u-text u-text-body-alt-color u-text-7">
                Cargo Skirts
            </h4>
            <p class="u-align-left u-text u-text-body-alt-color u-text-8">
                Source: pinterest.com
            </p>
            </div>
        </div>
        </div>
        <a
        class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1"
        href="#"
        role="button"
        >
        <span aria-hidden="true">
            <svg viewBox="0 0 451.847 451.847">
            <path
                d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"
            ></path>
            </svg>
        </span>
        <span class="sr-only">
            <svg viewBox="0 0 451.847 451.847">
            <path
                d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"
            ></path>
            </svg>
        </span>
        </a>
        <a
        class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2"
        href="#"
        role="button"
        >
        <span aria-hidden="true">
            <svg viewBox="0 0 451.846 451.847">
            <path
                d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"
            ></path>
            </svg>
        </span>
        <span class="sr-only">
            <svg viewBox="0 0 451.846 451.847">
            <path
                d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"
            ></path>
            </svg>
        </span>
        </a>
    </div>
    </div>
</section>
<section
    class="u-clearfix u-image u-section-6"
    id="attend"
    data-image-width="1080"
    data-image-height="1920"
>
    <div class="u-clearfix u-sheet u-sheet-1">
    <h2
        class="u-align-center u-custom-font u-text u-text-palette-5-light-3 u-text-1"
    >
        Will you attend this event?
    </h2>
    <div class="u-expanded-width-xs u-form u-form-1">
        <form
        action="https://forms.nicepagesrv.com/v2/form/process"
        class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form"
        source="email"
        name="form"
        style="padding: 10px"
        >
        <div class="u-form-group u-label-none">
            <label for="email-bb9b" class="u-label">Name</label>
            <input
            type="text"
            placeholder="Enter your name"
            id="email-bb9b"
            name="name"
            class="u-grey-10 u-input u-input-rectangle u-radius-50"
            required="required"
            />
        </div>
        <div class="u-form-group u-form-select u-label-none u-form-group-2">
            <label for="select-0c59" class="u-label">Dropdown</label>
            <div class="u-form-select-wrapper">
            <select
                id="select-0c59"
                name="gereja"
                class="u-grey-10 u-input u-input-rectangle u-radius u-input-2"
            >
                <option value="Bethania" data-calc="Bethania">
                GP Bethania
                </option>
                <option value="Taman Harapan" data-calc="Taman Harapan">
                GP Taman Harapan
                </option>
                <option value="Marturia" data-calc="Marturia">
                GP Marturia
                </option>
                <option data-calc="Cawang Baru" value="GP Cawang Baru">
                GP Cawang Baru
                </option>
                <option data-calc="Penabur" value="GP Penabur">
                GP Penabur
                </option>
                <option data-calc="Horeb" value="GP Horeb">GP Horeb</option>
                <option data-calc="Pelita Harapan" value="GP Pelita Harapan">
                GP Pelita Harapan
                </option>
                <option data-calc="Menara Iman" value="GP Menara Iman">
                GP Menara Iman
                </option>
                <option data-calc="Agape" value="GP Agape">GP Agape</option>
                <option data-calc="Martin Luther" value="Martin Luther">
                GP Martin Luther
                </option>
                <option data-calc="Nazareth" value="GP Nazareth">
                GP Nazareth
                </option>
                <option data-calc="Torsina" value="GP Torsina">
                GP Torsina
                </option>
                <option data-calc="Koinonia" value="GP Koinonia">
                GP Koinonia
                </option>
                <option data-calc="Surya Kasih" value="GP Surya Kasih">
                GP Surya Kasih
                </option>
                <option data-calc="Kharis" value="GP Kharis">
                GP Kharis
                </option>
            </select>
            <svg
                class="u-caret u-caret-svg"
                version="1.1"
                id="Layer_1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                width="16px"
                height="16px"
                viewBox="0 0 16 16"
                style="fill: currentColor"
                xml:space="preserve"
            >
                <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
            </svg>
            </div>
        </div>
        <div class="u-align-left u-form-group u-form-submit u-label-none">
            <input
            type="submit"
            value="submit"
            class="u-form-control-hidden"
            />
            <a
            href="#"
            class="u-active-palette-3-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-3-base u-palette-4-base u-radius-50 u-btn-1"
            >Attend</a
            >
        </div>
        <div class="u-form-send-message u-form-send-success">
            Thank you! Your message has been sent.
        </div>
        <div class="u-form-send-error u-form-send-message">
            Unable to send your message. Please fix errors then try again.
        </div>
        <input type="hidden" value="" name="recaptchaResponse" />
        <input
            type="hidden"
            name="formServices"
            value="b36e3a0c-7c42-1868-0c46-62cc347c1719"
        />
        </form>
    </div>
    <h5
        class="u-align-center u-custom-font u-text u-text-body-alt-color u-text-default u-text-2"
    >
        For more Information
    </h5>
    <div class="u-social-icons u-spacing-10 u-social-icons-1">
        <a
        class="u-social-url"
        title="whatsapp"
        target="_blank"
        href="https://wa.me/+6285813501033"
        ><span
            class="u-file-icon u-icon u-social-icon u-social-twitter u-icon-1"
            ><img src="/assets/images/5619132.png" alt=""
        /></span>
        </a>
        <a
        class="u-social-url"
        title="instagram"
        target="_blank"
        href="https://instagram.com/gepe.multi"
        ><span
            class="u-file-icon u-icon u-social-icon u-social-instagram u-icon-2"
            ><img src="/assets/images/5619061.png" alt=""
        /></span>
        </a>
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