<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from argon-dashboard-pro-laravel.creative-tim.com/password/reset by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2019 08:08:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1118.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="R0Mu0UI7yB3wp4o5wyhupwoAuLvN59h8g91jLqT2">

        <title itemprop="name">Argon Dashboard PRO Laravel - Premium Frontend Preset for Laravel</title>

        <!-- Canonical SEO -->
        <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" />

        <!--  Social tags      -->
        <meta name="keywords" content="creative tim, updivision, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, laravel dashboard, bootstrap 4, laravel, css3 dashboard, bootstrap 4 admin, argon laravel dashboard, bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, argon laravel design, argon laravel dashboard bootstrap">
        <meta name="description" content="Argon Laravel Dashboard PRO is a beautiful Bootstrap 4 & Laravel admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">

        <!-- Schema.org markup for Google -->
        <meta itemprop="name" content="Argon Dashboard PRO Laravel - Premium Frontend Preset for Laravel">
        <meta itemprop="description" content="Argon Dashboard PRO Laravel is a beautiful Bootstrap 4 admin dashboard with a large number of components built by Creative Tim & UPDIVISION. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">

        <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/146/original/opt_adp_laravel_thumbnail.jpg">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product">
        <meta name="twitter:site" content="@creativetim">
        <meta name="twitter:title" content="Argon Dashboard PRO Laravel - Premium Frontend Preset for Laravel">

        <meta name="twitter:description" content="Argon Dashboard PRO Laravel is a beautiful Bootstrap 4 admin dashboard with a large number of components built by Creative Tim & UPDIVISION. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
        <meta name="twitter:creator" content="@creativetim">
        <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/146/original/opt_adp_laravel_thumbnail.jpg">

        <!-- Open Graph data -->
        <meta property="fb:app_id" content="655968634437471">
        <meta property="og:title" content="Argon Dashboard PRO Laravel - Premium Frontend Preset for Laravel" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://argon-dashboard-pro-laravel.creative-tim.com/" />
        <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/146/original/opt_adp_laravel_thumbnail.jpg"/>
        <meta property="og:description" content="Argon Dashboard PRO Laravel is a beautiful Bootstrap 4 admin dashboard with a large number of components built by Creative Tim & UPDIVISION. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you." />
        <meta property="og:site_name" content="Creative Tim & UPDIVISION" />
        
        <!-- Favicon -->
        <link href="../argon/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=OpenSans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="../argon/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="../argon/vendor/%40fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        
                
        <!-- Argon CSS -->
        <link type="text/css" href="{{asset('css/argone209.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('css/app.css')}}" rel="stylesheet">
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body class="bg-default">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
                
        <div class="main-content">
            <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="../login.html">
            <img src="../argon/img/brand/white.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
            <!-- Collapse header -->
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="../login.html">
                            <img src="../argon/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navbar items -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../login.html">
                        <span class="nav-link-inner--text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../pricing.html" class="nav-link">
                        <span class="nav-link-inner--text">Pricing</span>
                    </a>
                </li>
                                    <li class="nav-item">
                        <a class="nav-link" href="../login.html">
                            <span class="nav-link-inner--text">Login</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../register.html">
                            <span class="nav-link-inner--text">Register</span>
                        </a>
                    </li>
                                <li class="nav-item">
                    <a href="../lock.html" class="nav-link">
                        <span class="nav-link-inner--text">Lock</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login.html">
                        <span class="nav-link-inner--text">Profile</span>
                    </a>
                </li>
            </ul>
            <hr class="d-lg-none" />
            <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip" title="" data-original-title="Like us on Facebook">
                        <i class="fab fa-facebook-square"></i>
                        <span class="nav-link-inner--text d-lg-none">Facebook</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Instagram">
                        <i class="fab fa-instagram"></i>
                        <span class="nav-link-inner--text d-lg-none">Instagram</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Twitter">
                        <i class="fab fa-twitter-square"></i>
                        <span class="nav-link-inner--text d-lg-none">Twitter</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="" data-original-title="Star us on Github">
                        <i class="fab fa-github"></i>
                        <span class="nav-link-inner--text d-lg-none">Github</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>                <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
    <div class="container">
        <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <h1 class="text-white">Welcome!</h1>
                    <p class="text-lead text-light">
                        Use these awesome forms to login or create new account in your project for free.
                                            </p>
                </div>
            </div>
        </div>
    </div>
    <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</div>
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>Reset password</small>
                        </div>

                        
                        <form role="form" method="POST" action="http://argon-dashboard-pro-laravel.creative-tim.com/password/email">
                            <input type="hidden" name="_token" value="R0Mu0UI7yB3wp4o5wyhupwoAuLvN59h8g91jLqT2">
                            <div class="form-group mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Email" type="email" name="email" value="" required autofocus>
                                </div>
                                                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Send Password Reset Link</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>

                    <footer class="py-5">
    <div class="container">
        <div class="row align-items-center justify-content-lg-between">
    <div class="col-xl-6">
        <div class="copyright text-center text-lg-left text-muted">
            &copy; 2019 <a href="https://www.creative-tim.com/" class="font-weight-bold ml-1" target="_blank">Creative Tim</a> &amp; <a href="https://www.updivision.com/" class="font-weight-bold ml-1" target="_blank">Updivision</a>
        </div>
    </div>
    <div class="col-xl-6">
        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
                <a href="https://www.creative-tim.com/" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
                    <a href="https://www.updivision.com/" class="nav-link" target="_blank">Updivision</a>
            </li>
            <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
                <a href="http://blog.creative-tim.com/" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
        </ul>
    </div>
</div>    </div>
</footer>        
        <script src="../argon/vendor/jquery/dist/jquery.min.js"></script>
        <script src="../argon/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../argon/vendor/js-cookie/js.cookie.js"></script>
        <script src="../argon/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="../argon/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <script src="../argon/vendor/lavalamp/js/jquery.lavalamp.min.js"></script>
        <!-- Optional JS -->
        <script src="../argon/vendor/chart.js/dist/Chart.min.js"></script>
        <script src="../argon/vendor/chart.js/dist/Chart.extension.js"></script>
        
                
        <!-- Argon JS -->
        <script src="../argon/js/argone209.js?v=1.0.0"></script>
        <script src="../argon/js/demo.min.js"></script>
    <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"e436701188","applicationID":"243106736","transactionName":"YlNTZBMEWkMDVRAPDFsZcFMVDFteTUYFFRBCWUNUTxdRQRdTFxI=","queueTime":5,"applicationTime":390,"atts":"ThRQElseSU0=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>

<!-- Mirrored from argon-dashboard-pro-laravel.creative-tim.com/password/reset by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2019 08:08:45 GMT -->
</html>