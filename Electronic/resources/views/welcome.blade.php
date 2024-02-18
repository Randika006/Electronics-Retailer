<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lanka Electricals</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>

        <style>
            :root{
               --box-sizing:border-box;
               --body-font-family: Arial;
               --body-font-size: 17px;

               --container-one-position: relative;
               --container-one-max-width: 600px;
               --container-one-margin: 0 auto;

               --container-one-img-vertical-align: middle;

               --content-one-position: absolute;
               --content-one-bottom: 0;
               --content-one-background-fallback: rgb(0, 0, 0); /* Fallback color */
               --content-one-background-optical: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
               --content-one-color: #f1f1f1;
               --content-one-width: 100%;
               --content-one-padding: 20px;

                --container-two-position: relative;
                --container-two-max-width: 600px;
                --container-two-margin: 0 auto;

                --container-two-img-vertical-align: middle;

                --content-two-position: absolute;
                --content-two-bottom: 0;
                --content-two-background-fallback: rgb(0, 0, 0); /* Fallback color */
                --content-two-background-opacity: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
                --content-two-color:#f1f1f1;
                --content-two-width:100%;
                --content-two-padding:20px;



                --container-thiree-position: relative;
                --container-thiree-max-width: 600px;
                --container-thiree-margin: 0 auto;

                --container-thiree-img-vertical-align: middle;

                --content-thiree-position: absolute;
                --content-thiree-bottom: 0;
                --content-thiree-background-fallback: rgb(0, 0, 0); /* Fallback color */
                --content-thiree-background-opacity: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
                --content-thiree-color:#f1f1f1;
                --content-thiree-width:100%;
                --content-thiree-padding:20px;
       /***********************************************************************************/
                --container-four-position: relative;
                --container-four-max-width: 700px;
                --container-four-left:23px;
                --container-four-margin: 0 auto;

                --container-four-img-vertical-align: middle;

                --content-four-position: absolute;
                --content-four-bottom:38px;
                --content-four-background-fallback: rgb(0, 0, 0); /* Fallback color */
                --content-four-background-opacity: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
                --content-four-color:#f1f1f1;
                --content-four-width:100%;
                --content-four-padding:20px;

                /**************************************/
                --container-five-position: relative;
                --container-five-max-width: 600px;
                --container-five-left:23px;
                --container-five-margin: 0 auto;

                --container-five-img-vertical-align: middle;

                --content-five-position: absolute;
                --content-five-bottom: 40px;
                --content-five-background-fallback: rgb(0, 0, 0); /* Fallback color */
                --content-five-background-opacity: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
                --content-five-color:#f1f1f1;
                --content-five-width:100%;
                --content-five-padding:20px;

                --section-3-position: relative;
                --section-3-top:358px;

                --cont-five-position: relative;
                --cont-five-left:23px;
                /*******************************************************/
                 --section-4-position: relative;
                 --section-4-top:648px;
                /******************************************************/
                --container-six-position: relative;
                --container-six-max-width:700px;
                --container-six-left:23px;
                --container-six-margin: 0 auto;

                --container-six-img-vertical-align: middle;

                --content-six-position: absolute;
                --content-six-bottom:-128px;
                --content-six-right:1px;
                --content-six-background-fallback: rgb(0, 0, 0); /* Fallback color */
                --content-six-background-opacity: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
                --content-six-color:#f1f1f1;
                --content-six-width:100%;
                --content-six-padding:20px;

                --cont-six-position: relative;
                --cont-six-left:-8px;
                --cont-six-height:224px;
                /*************************************************************************/
                --container-seven-position: relative;
                --container-seven-max-width: 600px;
                --container-seven-left:23px;
                --container-seven-margin: 0 auto;

                --container-seven-img-vertical-align: middle;

                --content-seven-position: absolute;
                --content-seven-bottom:225px;
                --content-seven-background-fallback: rgb(0, 0, 0); /* Fallback color */
                --content-seven-background-opacity: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
                --content-seven-color:#f1f1f1;
                --content-seven-width:100%;
                --content-seven-padding:20px;

                --cont-seven-position: relative;
                --cont-seven-left:23px;


                /**************************************************************************/
                 --section-5-position: relative;
                 --section-5-top:648px;
                /******************************************************/
                --container-eight-position: relative;
                --container-eight-max-width:700px;
                --container-eight-left:23px;
                --container-eight-margin: 0 auto;

                --container-eight-img-vertical-align: middle;

                --content-eight-position: absolute;
                --content-eight-bottom:-128px;
                --content-eight-right:1px;
                --content-eight-background-fallback: rgb(0, 0, 0); /* Fallback color */
                --content-eight-background-opacity: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
                --content-eight-color:#f1f1f1;
                --content-eight-width:100%;
                --content-eight-padding:20px;

                --cont-eight-position: relative;
                --cont-eight-left:-8px;
                --cont-eight-height:224px;
                /*************************************************************************/
                --container-nine-position: relative;
                --container-nine-max-width: 600px;
                --container-nine-left:23px;
                --container-nine-margin: 0 auto;

                --container-nine-img-vertical-align: middle;

                --content-nine-position: absolute;
                --content-nine-bottom:225px;
                --content-nine-background-fallback: rgb(0, 0, 0); /* Fallback color */
                --content-nine-background-opacity: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
                --content-nine-color:#f1f1f1;
                --content-nine-width:100%;
                --content-nine-padding:20px;

                --cont-nine-position: relative;
                --cont-nine-left:23px;

                /************************************Carousel***************************************/
                --carousel-position: relative;
                --carousel-top:823px;
               /*****************************************************/

               /*****************Navigation************************************/
                --topnav-overflow: hidden;
                --topnav-background-color: #333;

                --topnav-a-float: left;
                --topnav-a-display: block;
                --topnav-a-color: #f2f2f2;
                --topnav-a-text-align: center;
                --topnav-a-padding: 14px 16px;
                --topnav-a-text-decoration: none;
                --topnav-a-font-size: 17px;

                --topnav-a-hover-background-color: #ddd;
                --topnav-a-hover-color: black;

                --topnav-active-background-color: #04AA6D;
                --topnav-active-color: white;

                --topnav-icon-display: none;
                --topnav-a-not-display: none;

                --topnav-a-icon-2-float: right;
                --topnav-a-icon-2-display: block;

                --topnav-responsiveness-position: relative;
                --topnav-responsive-icon-position: absolute;
                --topnav-responsive-icon-right: 0;
                --topnav-responsive-icon-top: 0;

                --topnav-responsive-a-float: none;
                --topnav-responsive-a-display: block;
                --topnav-responsive-a-text-align: left;
                /************************Footer****************************************/
                 --footer-nb-footer-background: #222;
                 --footer-nb-footer-border-top: 4px solid #b78c33;

                 --footer-nb-footer-about-margin: 0 auto;
                 --footer-nb-footer-about-margin-top: 40px;
                 --footer-nb-footer-about-max-width: 1170px;
                 --footer-nb-footer-about-text-align: center;

                 --footer-nb-footer-about-p-font-size: 13px;
                 --footer-nb-footer-about-p-color: #999;
                 --footer-nb-footer-about-p-margin-top: 30px;

                 --footer-nb-footer-about-social-media-margin-top: 15px;

                 --footer-nb-footer-about-social-media-ul-li-a-display: inline-block;
                 --footer-nb-footer-about-social-media-ul-li-a-width: 45px;
                 --footer-nb-footer-about-social-media-ul-li-a-height: 45px;
                 --footer-nb-footer-about-social-media-ul-li-a-line-height: 45px;
                 --footer-nb-footer-about-social-media-ul-li-a-border-radius: 50%;
                 --footer-nb-footer-about-social-media-ul-li-a-font-size: 16px;
                 --footer-nb-footer-about-social-media-ul-li-a-color: #b78c33;
                 --footer-nb-footer-about-social-media-ul-li-a-border: 1px solid rgba(255, 255, 255, 0.3);


                 --footer-nb-footer-about-social-media-ul-li-a-hover-background: #b78c33;
                 --footer-nb-footer-about-social-media-ul-li-a-hover-color: #fff;
                 --footer-nb-footer-about-social-media-ul-li-a-hover-border-color: #b78c33;


                 --footer-nb-footer-footer-info-single-margin-top: 30px;

                 --footer-nb-footer-footer-info-single-title-color: #aaa;
                 --footer-nb-footer-footer-info-single-title-text-transform: uppercase;
                 --footer-nb-footer-footer-info-single-title-font-size: 16px;
                 --footer-nb-footer-footer-info-single-title-border-left: 4px solid #b78c33;
                 --footer-nb-footer-footer-info-single-title-padding-left: 5px;


                 --footer-nb-footer-footer-info-single-ul-li-a-display: block;
                 --footer-nb-footer-footer-info-single-ul-li-a-color: #aaa;
                 --footer-nb-footer-footer-info-single-ul-li-a-padding: 2px 0;

                 --footer-nb-footer-footer-info-single-ul-li-a-hover-color: #b78c33;


                 --footer-nb-footer-footer-info-single-p-font-size: 13px;
                 --footer-nb-footer-footer-info-single-p-line-height: 20px;
                 --footer-nb-footer-footer-info-single-p-color: #aaa;

                 --footer-nb-footer-copyright-margin-top: 15px;
                 --footer-nb-footer-copyright-background: #111;
                 --footer-nb-footer-copyright-padding: 7px 0;
                 --footer-nb-footer-copyright-color: #999;


                 --footer-nb-footer-copyright-p-margin: 0;
                 --footer-nb-footer-copyright-p-padding: 0;


                 --ft-position: relative;
                 --ft-top:934px;

                 --section-4-font-1-font-size:23px;
                 --section-5-font-1-font-size:23px;
                 --section-6-font-1-font-size:23px;

                 --first-thiree-sections-main-headings-font-size-font-size:23px;


            }

          * {
              box-sizing:var(--box-sizing);
           }

         .body {
              font-family:var(--body-font-family);
              font-size:var(--body-font-size);
          }

          .container-one{
             position:var(--container-one-position);
             max-width:var(--container-one-max-width);
             margin:var(--container-one-margin);
           }

           .container-one img {vertical-align:var(--container-one-img-vertical-align);}

           .container-one .content-one {
             position:var(--content-one-position);
             bottom:var(--content-one-bottom);
             background:var(--content-one-background-fallback); /* Fallback color */
             background:var(--content-one-background-optical); /* Black background with 0.5 opacity */
             color:var(--content-one-color);
             width:var(--content-one-width);
             padding:var(--content-one-padding);
          }


           .container-two{
             position:var(--container-two-position);
             max-width:var(--container-two-max-width);
             margin:var(--container-two-margin);
           }

           .container-two img {vertical-align:var(--container-two-img-vertical-align);}

           .container-two .content-two {
             position:var(--content-two-position);
             bottom:var(--content-two-bottom);
             background:var(--content-two-background-fallback); /* Fallback color */
             background:var(--content-two-background-opacity); /* Black background with 0.5 opacity */
             color:var(--content-two-color);
             width:var(--content-two-width);
             padding:var(--content-two-padding);
          }


          .container-thiree{
             position:var(--container-thiree-position);
             max-width:var(--container-thiree-max-width);
             margin:var(--container-thiree-margin);
           }

           .container-thiree img {vertical-align:var(--container-thiree-img-vertical-align);}

           .container-thiree .content-thiree {
             position:var(--content-thiree-position);
             bottom:var(--content-thiree-bottom);
             background:var(--content-thiree-background-fallback); /* Fallback color */
             background:var(--content-thiree-background-opacity); /* Black background with 0.5 opacity */
             color:var(--content-thiree-color);
             width:var(--content-thiree-width);
             padding:var(--content-thiree-padding);
          }

          .container-four{
             position:var(--container-four-position);
             max-width:var(--container-four-max-width);
             margin:var(--container-four-margin);
           }

           .container-four img {vertical-align:var(--container-four-img-vertical-align);}

           .container-four .content-four {
             position:var(--content-four-position);
             bottom:var(--content-four-bottom);
             background:var(--content-four-background-fallback); /* Fallback color */
             background:var(--content-four-background-opacity); /* Black background with 0.5 opacity */
             color:var(--content-four-color);
             width:var(--content-four-width);
             padding:var(--content-four-padding);
          }

          /**************************************/

          .container-five{
             position:var(--container-five-position);
             max-width:var(--container-five-max-width);
             margin:var(--container-five-margin);
           }

           .container-five img {vertical-align:var(--container-five-img-vertical-align);}

           .container-five .content-five {
             position:var(--content-five-position);
             bottom:var(--content-five-bottom);
             background:var(--content-five-background-fallback); /* Fallback color */
             background:var(--content-five-background-opacity); /* Black background with 0.5 opacity */
             color:var(--content-five-color);
             width:var(--content-five-width);
             padding:var(--content-five-padding);
          }

          .cont-five{
            position:var(--cont-five-position);
            left:var(--cont-five-left);

          }


          /*************************************************************************/
          .container-six{
             position:var(--container-six-position);
             max-width:var(--container-six-max-width);
             margin:var(--container-six-margin);
           }

           .container-six img {vertical-align:var(--container-six-img-vertical-align);}

           .container-six .content-six {
             position:var(--content-six-position);
             bottom:var(--content-six-bottom);
             right:var(--content-six-right);
             background:var(--content-six-background-fallback); /* Fallback color */
             background:var(--content-six-background-opacity); /* Black background with 0.5 opacity */
             color:var(--content-six-color);
             width:var(--content-six-width);
             padding:var(--content-six-padding);
          }

         .cont-six{
            position:var(--cont-six-position);
            left:var(--cont-six-left);
            height:var(--cont-six-height);
          }
          /***************************************************************************/
           .container-seven{
             position:var(--container-seven-position);
             max-width:var(--container-seven-max-width);
             margin:var(--container-seven-margin);
           }

           .container-seven img {vertical-align:var(--container-seven-img-vertical-align);}

           .container-seven .content-seven {
             position:var(--content-seven-position);
             bottom:var(--content-seven-bottom);
             background:var(--content-seven-background-fallback); /* Fallback color */
             background:var(--content-seven-background-opacity); /* Black background with 0.5 opacity */
             color:var(--content-seven-color);
             width:var(--content-seven-width);
             padding:var(--content-seven-padding);
          }

          .cont-seven{
            position:var(--cont-seven-position);
            left:var(--cont-seven-left);

          }
          /****************************************************************************************/

          .container-eight{
             position:var(--container-eight-position);
             max-width:var(--container-eight-max-width);
             margin:var(--container-eight-margin);
           }

           .container-eight img {vertical-align:var(--container-eight-img-vertical-align);}

           .container-eight .content-eight {
             position:var(--content-eight-position);
             bottom:var(--content-eight-bottom);
             right:var(--content-eight-right);
             background:var(--content-eight-background-fallback); /* Fallback color */
             background:var(--content-eight-background-opacity); /* Black background with 0.5 opacity */
             color:var(--content-eight-color);
             width:var(--content-eight-width);
             padding:var(--content-eight-padding);
          }

         .cont-eight{
            position:var(--cont-eight-position);
            left:var(--cont-eight-left);
            height:var(--cont-eight-height);
          }
          /*********************************************************************************/
          .container-nine{
             position:var(--container-nine-position);
             max-width:var(--container-nine-max-width);
             margin:var(--container-nine-margin);
           }

           .container-nine img {vertical-align:var(--container-nine-img-vertical-align);}

           .container-nine .content-nine {
             position:var(--content-nine-position);
             bottom:var(--content-nine-bottom);
             background:var(--content-nine-background-fallback); /* Fallback color */
             background:var(--content-nine-background-opacity); /* Black background with 0.5 opacity */
             color:var(--content-nine-color);
             width:var(--content-nine-width);
             padding:var(--content-nine-padding);
          }

          .cont-nine{
            position:var(--cont-nine-position);
            left:var(--cont-nine-left);
          }


          /************************************************************************/
          .section-3-position{
            position:var(--section-3-position);
            top:var(--section-3-top);
          }

          .section-4-position{
            position:var(--section-4-position);
            top:var(--section-4-top);
          }

          .section-5-position{
            position:var(--section-5-position);
            top:var(--section-5-top);
          }
          /***************************Carousel Position*************************************************/
          .cont-carousel{
            position:var(--carousel-position);
            top:var(--carousel-top);
         }
         /********************************************************************************************/
         /******************************Navigation Bar**********************************************/
          .topnav {
            overflow:var(--topnav-overflow);
            background-color:var(--topnav-background-color);
          }

         .topnav a {
            float:var(--topnav-a-float);
            display:var(--topnav-a-display);
            color:var(--topnav-a-color);
            text-align:var(--topnav-a-text-align);
            padding:var(--topnav-a-padding);
            text-decoration:var(--topnav-a-text-decoration);
            font-size:var(--topnav-a-font-size);
        }

        .topnav a:hover {
           background-color:var(--topnav-a-hover-background-color);
           color:var(--topnav-a-hover-color);
        }

       .topnav a.active {
           background-color:var(--topnav-active-background-color);
           color:var(--topnav-active-color);
        }

       .topnav .icon {
         display:var(--topnav-icon-display);
       }

      @media screen and (max-width: 600px) {
        .topnav a:not(:first-child) {display:var(--topnav-a-not-display);}
        .topnav a.icon {
          float:var(--topnav-a-icon-2-float);
          display:var(--topnav-a-icon-2-display);
       }
     }

     @media screen and (max-width: 600px) {
        .topnav.responsive {position:var(--topnav-responsiveness-position);}
        .topnav.responsive .icon {
         position:var(--topnav-responsive-icon-position);
         right:var(--topnav-responsive-icon-right);
         top:var(--topnav-responsive-icon-top);
     }
     .topnav.responsive a {
       float:var(--topnav-responsive-a-float);
       display:var(--topnav-responsive-a-display);
       text-align:var(--topnav-responsive-a-text-align);
    }
   }
 /*************************************************************************************************/
/********************Footer******************************************/
  footer.nb-footer {
     background:var(--footer-nb-footer-background);
     border-top:var(--footer-nb-footer-border-top);
  }

  footer.nb-footer .about {
    margin:var(--footer-nb-footer-about-margin);
    margin-top:var(--footer-nb-footer-about-margin-top);
    max-width:var(--footer-nb-footer-about-max-width);
    text-align:var(--footer-nb-footer-about-text-align);
 }
footer.nb-footer .about p {
   font-size:var(--footer-nb-footer-about-p-font-size);
   color:var(--footer-nb-footer-about-p-color);
   margin-top:var(--footer-nb-footer-about-p-margin-top);
}
footer.nb-footer .about .social-media {
   margin-top:var(--footer-nb-footer-about-social-media-margin-top);
}
footer.nb-footer .about .social-media ul li a {
   display:var(--footer-nb-footer-about-social-media-ul-li-a-display);
   width:var(--footer-nb-footer-about-social-media-ul-li-a-width);
   height:var(--footer-nb-footer-about-social-media-ul-li-a-height);
   line-height:var(--footer-nb-footer-about-social-media-ul-li-a-line-height);
   border-radius:var(--footer-nb-footer-about-social-media-ul-li-a-border-radius);
   font-size:var(--footer-nb-footer-about-social-media-ul-li-a-font-size);
   color:var(--footer-nb-footer-about-social-media-ul-li-a-color);
   border:var(--footer-nb-footer-about-social-media-ul-li-a-border);
}
footer.nb-footer .about .social-media ul li a:hover {
   background:var(--footer-nb-footer-about-social-media-ul-li-a-hover-background);
   color:var(--footer-nb-footer-about-social-media-ul-li-a-color);
   border-color:var( --footer-nb-footer-about-social-media-ul-li-a-hover-border-color);
}
footer.nb-footer .footer-info-single {
   margin-top:var(--footer-nb-footer-footer-info-single-margin-top);
}
footer.nb-footer .footer-info-single .title {
   color:var(--footer-nb-footer-footer-info-single-title-color);
   text-transform:var(--footer-nb-footer-footer-info-single-title-text-transform);
   font-size:var(--footer-nb-footer-footer-info-single-title-font-size);
   border-left:var(--footer-nb-footer-footer-info-single-title-border-left);
   padding-left:var(--footer-nb-footer-footer-info-single-title-padding-left);
}
footer.nb-footer .footer-info-single ul li a {
   display:var(--footer-nb-footer-footer-info-single-ul-li-a-display);
   color:var(--footer-nb-footer-footer-info-single-ul-li-a-color);
   padding:var(--footer-nb-footer-footer-info-single-ul-li-a-padding);
}
footer.nb-footer .footer-info-single ul li a:hover {
   color:var(--footer-nb-footer-footer-info-single-ul-li-a-hover-color);
}
footer.nb-footer .footer-info-single p {
   font-size:var(--footer-nb-footer-footer-info-single-p-font-size);
   line-height:var(--footer-nb-footer-footer-info-single-p-line-height);
   color:var(--footer-nb-footer-footer-info-single-p-color);
}
footer.nb-footer .copyright {
   margin-top:var(--footer-nb-footer-copyright-margin-top);
   background:var(--footer-nb-footer-copyright-background);
   padding:var(--footer-nb-footer-copyright-padding);
   color:var(--footer-nb-footer-copyright-color);
}
footer.nb-footer .copyright p {
   margin:var(--footer-nb-footer-copyright-p-margin);
   padding:var(--footer-nb-footer-copyright-p-padding);
}

.ft{
    position:var(--ft-position);
    top:var(--ft-top);
}
/*****************************************************/
.section-4-font-1{
    font-size:var(--section-4-font-1-font-size);
}

.section-5-font-1{
    font-size:var(--section-5-font-1-font-size);
}

.section-6-font-1{
    font-size:var(--section-6-font-1-font-size);
}

.first-thiree-sections-main-headings-font-size{
    font-size:var(--first-thiree-sections-main-headings-font-size-font-size);
}
</style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--------using bootstrap-------->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



<link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
    <body class="antialiased">

         {{--<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">

                        <a href="/" class="my-font-1 ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                        <a href="#" class="my-font-1 ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Contact</a>
                        <a href="#" class="my-font-1 ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">About</a>

                        @auth
                            <a href="{{ url('/dashboard') }}" class="my-font font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="my-font font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="my-font ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

            <div style="height:100px;"></div>
            <div class="max-w-7xl mx-auto p-6 lg:p-8 section-1-position">
                <div class="flex justify-center">
                   <div class="container-one">
                       <img src="/image/tab2.jpg" alt="Tab" style="width:100%">
                       <div class="content-one">
                           <h1>SAMSUNG Galaxy Tab A8 2022 LTE Calls</h1>
                           <p>WiFi Calling allows you to make and receive calls over a WiFi network.</p>
                       </div>
                   </div>
               </div>
            </div>


            </div>--}}

            <!-- Your content here -->
            <div class="topnav" id="myTopnav">
                <a href="#home" class="active">Home</a>
                <a href="#vision">Vision</a>
                <a href="#mision">Mission</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
                <a href="#products">Products</a>

                @auth
                    <a href="{{ url('/dashboard') }}" >Dashboard</a>
                @else
                    <a href="{{ route('login') }}" >Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
             <a href="javascript:void(0);" class="icon" onclick="myFunction()">
               <i class="fa fa-bars"></i>
             </a>
            </div>

            <div style="height:130px;"></div>
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                   <div class="container-one">
                       <img src="/image/tab2.jpg" alt="Tab" style="width:100%">
                       <div class="content-one">
                           <h1 class="first-thiree-sections-main-headings-font-size">SAMSUNG Galaxy Tab A8 2022 LTE Calls</h1>
                           <p>WiFi Calling allows you to make and receive calls over a WiFi network.</p>
                       </div>
                   </div>
               </div>
            </div>

            <div style="height:140px;"></div>


            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                        <div class="container-two">
                       <img src="/image/tab.jpg" alt="Tab" style="width:100%">
                         <div class="content-two">
                             <h1 class="first-thiree-sections-main-headings-font-size">Samsung Galaxy Tab S7 FE 4GB/64GB </h1>
                              <p>64GB 4GB RAM, 128GB 6GB RAM, 256GB 8GB RAM.</p>
                          </div>
                    </div>
                </div>
            </div>
            <div style="height:178px;"></div>

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <div class="container-thiree">
                       <img src="/image/tab3.jpg" alt="Tab" style="width:100%">
                         <div class="content-thiree">
                             <h1 class="first-thiree-sections-main-headings-font-size">Samsung Galaxy Tab S7 FE 4GB RAM 64GB - 4G</h1>
                              <p>Samsung Galaxy Tab S7 FE 4GB Wi Fi Mystic Sliver 2.</p>
                          </div>
                    </div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto p-6 lg:p-8 section-3-position">
                <div class="flex justify-center">
                    <div class="container-four">
                       <img src="/image/toshiba_hard_disk.jpg" alt="Toshiba" style="width:908px;height:510px;">
                         <div class="content-four">
                             <h1 class="section-4-font-1">Canvio Toshiba Portable Hard Drive.</h1>
                              <p>Storing your photos, videos, and data has never been easier.</p>
                          </div>
                     </div>

                     <div class="container-five cont-five">
                        <img src="/image/hard_2.jpg" alt="Hikvision" style="width:800px;height:510px;">
                          <div class="content-five">
                              <h1 class="section-4-font-1">Canvio Hard Drive.</h1>
                               <p>Hikvision Canvio Slim Portable HDD offers 2TB of sleek storage.</p>
                           </div>
                      </div>

                </div>
            </div>

            <div class="max-w-7xl mx-auto p-6 lg:p-8 section-4-position">
                <div class="flex justify-center">
                    <div class="container-six cont-six">
                       <img src="/image/dell.jpg" alt="Dell" style="width:908px;height:560px;">
                         <div class="content-six">
                             <h1 class="section-5-font-1">Dell Inspiron 3530 – 13th Gen i3.</h1>
                              <p>Intel Core i3-13 Gen Processor - 8GB RAM - 512GB.</p>
                          </div>
                     </div>

                     <div class="container-seven cont-seven">
                        <img src="/image/hp.jpg" alt="HP" style="width:790px;height:760px;">
                          <div class="content-seven">
                              <h1 class="section-5-font-1">HP 14 - Intel 13th Gen Core i7 - 1355U</h1>
                               <p>512GB SSD/ 8GB RAM.</p>
                           </div>
                      </div>

                </div>
            </div>

            <div class="max-w-7xl mx-auto p-6 lg:p-8 section-5-position">
                <div class="flex justify-center">
                    <div class="container-eight cont-eight">
                       <img src="/image/iphone_1.jpg" alt="iphone" style="width:998px;height:500px;">
                         <div class="content-eight">
                             <h1 class="section-6-font-1">Pre-Owned Apple iPhone.</h1>
                          </div>
                     </div>

                     <div class="container-nine cont-nine">
                        <img src="/image/iphone_2.jpg" alt="iphone" style="width:990px;height:500px;">
                          <div class="content-nine">
                              <h1 class="section-6-font-1">iPhone X 64GB Prata – SEMI NOVO.</h1>
                           </div>
                      </div>
                </div>
            </div>

            <div class="container cont-carousel">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="/image/toshiba_hard_disk.jpg" alt="iphone_1" style="width:100%;">
                    </div>

                    <div class="item">
                      <img src="/image/iphone_2.jpg" alt="iphone_2" style="width:100%;">
                    </div>

                    <div class="item">
                      <img src="/image/tab3.jpg" alt="hp" style="width:100%;">
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>



      <footer class="nb-footer ft">
         <div class="container">
         <div class="row">
       <div class="col-sm-12">
        <div class="about">
          <img src="images/logo.png" class="img-responsive center-block" alt="">
          <p>Bootstrap Footer example snippets with CSS, Javascript and HTML. Code example of bootstrap-3 footer using HTML, Javascript, jQuery, and CSS. 5 Beautiful and Responsive Footer Templates. Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS.</p>

         <div class="social-media">
          <ul class="list-inline">
            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-facebook"></i></a></li>
            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-twitter"></i></a></li>
            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-google-plus"></i></a></li>
            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      </div>

      <div class="col-md-3 col-sm-6">
      <div class="footer-info-single">
        <h2 class="title">Help Center</h2>
        <ul class="list-unstyled">
          <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> How to Pay</a></li>
          <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
          <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Sitemap</a></li>
          <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Delivery Info</a></li>
        </ul>
      </div>
      </div>

      <div class="col-md-3 col-sm-6">
      <div class="footer-info-single">
        <h2 class="title">Customer information</h2>
        <ul class="list-unstyled">
          <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> About Us</a></li>
          <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
          <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Sell Your Items</a></li>
          <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
          <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> RSS</a></li>
        </ul>
      </div>
      </div>

      <div class="col-md-3 col-sm-6">
      <div class="footer-info-single">
        <h2 class="title">Security & privacy</h2>
        <ul class="list-unstyled">
          <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Terms Of Use</a></li>
          <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Privacy Policy</a></li>
          <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Return / Refund Policy</a></li>
          <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-angle-double-right"></i> Store Locations</a></li>
        </ul>
      </div>
      </div>

      <div class="col-md-3 col-sm-6">
      <div class="footer-info-single">
        <h2 class="title">Payment</h2>
        <p>Sample HTML page with Twitter's Bootstrap. Code example of Easy Sticky Footer using HTML, Javascript, jQuery, and CSS. This bootstrap tutorial covers all the major elements of responsive</p>

      </div>
      </div>
      </div>
      </div>

      <section class="copyright">
      <div class="container">
      <div class="row">
      <div class="col-sm-6">
      <p>Copyright © 2024. Lanka Electricals.</p>
      </div>
      <div class="col-sm-6"></div>
      </div>
      </div>
      </section>
      </footer>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script>
            function myFunction() {
              var x = document.getElementById("myTopnav");
              if (x.className === "topnav") {
                x.className += " responsive";
              } else {
                x.className = "topnav";
              }
            }
        </script>

    </body>

</html>
