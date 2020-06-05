<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <style type="text/css">
/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 *//*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=checkbox],input[type=radio]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{padding:0;border:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */@media print{*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;-webkit-box-shadow:none!important;box-shadow:none!important}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}abbr[title]:after{content:" (" attr(title) ")"}a[href^="javascript:"]:after,a[href^="#"]:after{content:""}blockquote,pre{border:1px solid #999;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}img{max-width:100%!important}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}.navbar{display:none}.btn>.caret,.dropup>.btn>.caret{border-top-color:#000!important}.label{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #ddd!important}}@font-face{font-family:'Glyphicons Halflings';src:url(./fonts/glyphicons-halflings-regular.eot);src:url(./fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),url(./fonts/glyphicons-halflings-regular.woff2) format('woff2'),url(./fonts/glyphicons-halflings-regular.woff) format('woff'),url(./fonts/glyphicons-halflings-regular.ttf) format('truetype'),url(./fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')}.glyphicon{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Halflings';font-style:normal;font-weight:400;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.glyphicon-asterisk:before{content:"\002a"}.glyphicon-plus:before{content:"\002b"}.glyphicon-eur:before,.glyphicon-euro:before{content:"\20ac"}.glyphicon-minus:before{content:"\2212"}.glyphicon-cloud:before{content:"\2601"}.glyphicon-envelope:before{content:"\2709"}.glyphicon-pencil:before{content:"\270f"}.glyphicon-glass:before{content:"\e001"}.glyphicon-music:before{content:"\e002"}.glyphicon-search:before{content:"\e003"}.glyphicon-heart:before{content:"\e005"}.glyphicon-star:before{content:"\e006"}.glyphicon-star-empty:before{content:"\e007"}.glyphicon-user:before{content:"\e008"}.glyphicon-film:before{content:"\e009"}.glyphicon-th-large:before{content:"\e010"}.glyphicon-th:before{content:"\e011"}.glyphicon-th-list:before{content:"\e012"}.glyphicon-ok:before{content:"\e013"}.glyphicon-remove:before{content:"\e014"}.glyphicon-zoom-in:before{content:"\e015"}.glyphicon-zoom-out:before{content:"\e016"}.glyphicon-off:before{content:"\e017"}.glyphicon-signal:before{content:"\e018"}.glyphicon-cog:before{content:"\e019"}.glyphicon-trash:before{content:"\e020"}.glyphicon-home:before{content:"\e021"}.glyphicon-file:before{content:"\e022"}.glyphicon-time:before{content:"\e023"}.glyphicon-road:before{content:"\e024"}.glyphicon-download-alt:before{content:"\e025"}.glyphicon-download:before{content:"\e026"}.glyphicon-upload:before{content:"\e027"}.glyphicon-inbox:before{content:"\e028"}.glyphicon-play-circle:before{content:"\e029"}.glyphicon-repeat:before{content:"\e030"}.glyphicon-refresh:before{content:"\e031"}.glyphicon-list-alt:before{content:"\e032"}.glyphicon-lock:before{content:"\e033"}.glyphicon-flag:before{content:"\e034"}.glyphicon-headphones:before{content:"\e035"}.glyphicon-volume-off:before{content:"\e036"}.glyphicon-volume-down:before{content:"\e037"}.glyphicon-volume-up:before{content:"\e038"}.glyphicon-qrcode:before{content:"\e039"}.glyphicon-barcode:before{content:"\e040"}.glyphicon-tag:before{content:"\e041"}.glyphicon-tags:before{content:"\e042"}.glyphicon-book:before{content:"\e043"}.glyphicon-bookmark:before{content:"\e044"}.glyphicon-print:before{content:"\e045"}.glyphicon-camera:before{content:"\e046"}.glyphicon-font:before{content:"\e047"}.glyphicon-bold:before{content:"\e048"}.glyphicon-italic:before{content:"\e049"}.glyphicon-text-height:before{content:"\e050"}.glyphicon-text-width:before{content:"\e051"}.glyphicon-align-left:before{content:"\e052"}.glyphicon-align-center:before{content:"\e053"}.glyphicon-align-right:before{content:"\e054"}.glyphicon-align-justify:before{content:"\e055"}.glyphicon-list:before{content:"\e056"}.glyphicon-indent-left:before{content:"\e057"}.glyphicon-indent-right:before{content:"\e058"}.glyphicon-facetime-video:before{content:"\e059"}.glyphicon-picture:before{content:"\e060"}.glyphicon-map-marker:before{content:"\e062"}.glyphicon-adjust:before{content:"\e063"}.glyphicon-tint:before{content:"\e064"}.glyphicon-edit:before{content:"\e065"}.glyphicon-share:before{content:"\e066"}.glyphicon-check:before{content:"\e067"}.glyphicon-move:before{content:"\e068"}.glyphicon-step-backward:before{content:"\e069"}.glyphicon-fast-backward:before{content:"\e070"}.glyphicon-backward:before{content:"\e071"}.glyphicon-play:before{content:"\e072"}.glyphicon-pause:before{content:"\e073"}.glyphicon-stop:before{content:"\e074"}.glyphicon-forward:before{content:"\e075"}.glyphicon-fast-forward:before{content:"\e076"}.glyphicon-step-forward:before{content:"\e077"}.glyphicon-eject:before{content:"\e078"}.glyphicon-chevron-left:before{content:"\e079"}.glyphicon-chevron-right:before{content:"\e080"}.glyphicon-plus-sign:before{content:"\e081"}.glyphicon-minus-sign:before{content:"\e082"}.glyphicon-remove-sign:before{content:"\e083"}.glyphicon-ok-sign:before{content:"\e084"}.glyphicon-question-sign:before{content:"\e085"}.glyphicon-info-sign:before{content:"\e086"}.glyphicon-screenshot:before{content:"\e087"}.glyphicon-remove-circle:before{content:"\e088"}.glyphicon-ok-circle:before{content:"\e089"}.glyphicon-ban-circle:before{content:"\e090"}.glyphicon-arrow-left:before{content:"\e091"}.glyphicon-arrow-right:before{content:"\e092"}.glyphicon-arrow-up:before{content:"\e093"}.glyphicon-arrow-down:before{content:"\e094"}.glyphicon-share-alt:before{content:"\e095"}.glyphicon-resize-full:before{content:"\e096"}.glyphicon-resize-small:before{content:"\e097"}.glyphicon-exclamation-sign:before{content:"\e101"}.glyphicon-gift:before{content:"\e102"}.glyphicon-leaf:before{content:"\e103"}.glyphicon-fire:before{content:"\e104"}.glyphicon-eye-open:before{content:"\e105"}.glyphicon-eye-close:before{content:"\e106"}.glyphicon-warning-sign:before{content:"\e107"}.glyphicon-plane:before{content:"\e108"}.glyphicon-calendar:before{content:"\e109"}.glyphicon-random:before{content:"\e110"}.glyphicon-comment:before{content:"\e111"}.glyphicon-magnet:before{content:"\e112"}.glyphicon-chevron-up:before{content:"\e113"}.glyphicon-chevron-down:before{content:"\e114"}.glyphicon-retweet:before{content:"\e115"}.glyphicon-shopping-cart:before{content:"\e116"}.glyphicon-folder-close:before{content:"\e117"}.glyphicon-folder-open:before{content:"\e118"}.glyphicon-resize-vertical:before{content:"\e119"}.glyphicon-resize-horizontal:before{content:"\e120"}.glyphicon-hdd:before{content:"\e121"}.glyphicon-bullhorn:before{content:"\e122"}.glyphicon-bell:before{content:"\e123"}.glyphicon-certificate:before{content:"\e124"}.glyphicon-thumbs-up:before{content:"\e125"}.glyphicon-thumbs-down:before{content:"\e126"}.glyphicon-hand-right:before{content:"\e127"}.glyphicon-hand-left:before{content:"\e128"}.glyphicon-hand-up:before{content:"\e129"}.glyphicon-hand-down:before{content:"\e130"}.glyphicon-circle-arrow-right:before{content:"\e131"}.glyphicon-circle-arrow-left:before{content:"\e132"}.glyphicon-circle-arrow-up:before{content:"\e133"}.glyphicon-circle-arrow-down:before{content:"\e134"}.glyphicon-globe:before{content:"\e135"}.glyphicon-wrench:before{content:"\e136"}.glyphicon-tasks:before{content:"\e137"}.glyphicon-filter:before{content:"\e138"}.glyphicon-briefcase:before{content:"\e139"}.glyphicon-fullscreen:before{content:"\e140"}.glyphicon-dashboard:before{content:"\e141"}.glyphicon-paperclip:before{content:"\e142"}.glyphicon-heart-empty:before{content:"\e143"}.glyphicon-link:before{content:"\e144"}.glyphicon-phone:before{content:"\e145"}.glyphicon-pushpin:before{content:"\e146"}.glyphicon-usd:before{content:"\e148"}.glyphicon-gbp:before{content:"\e149"}.glyphicon-sort:before{content:"\e150"}.glyphicon-sort-by-alphabet:before{content:"\e151"}.glyphicon-sort-by-alphabet-alt:before{content:"\e152"}.glyphicon-sort-by-order:before{content:"\e153"}.glyphicon-sort-by-order-alt:before{content:"\e154"}.glyphicon-sort-by-attributes:before{content:"\e155"}.glyphicon-sort-by-attributes-alt:before{content:"\e156"}.glyphicon-unchecked:before{content:"\e157"}.glyphicon-expand:before{content:"\e158"}.glyphicon-collapse-down:before{content:"\e159"}.glyphicon-collapse-up:before{content:"\e160"}.glyphicon-log-in:before{content:"\e161"}.glyphicon-flash:before{content:"\e162"}.glyphicon-log-out:before{content:"\e163"}.glyphicon-new-window:before{content:"\e164"}.glyphicon-record:before{content:"\e165"}.glyphicon-save:before{content:"\e166"}.glyphicon-open:before{content:"\e167"}.glyphicon-saved:before{content:"\e168"}.glyphicon-import:before{content:"\e169"}.glyphicon-export:before{content:"\e170"}.glyphicon-send:before{content:"\e171"}.glyphicon-floppy-disk:before{content:"\e172"}.glyphicon-floppy-saved:before{content:"\e173"}.glyphicon-floppy-remove:before{content:"\e174"}.glyphicon-floppy-save:before{content:"\e175"}.glyphicon-floppy-open:before{content:"\e176"}.glyphicon-credit-card:before{content:"\e177"}.glyphicon-transfer:before{content:"\e178"}.glyphicon-cutlery:before{content:"\e179"}.glyphicon-header:before{content:"\e180"}.glyphicon-compressed:before{content:"\e181"}.glyphicon-earphone:before{content:"\e182"}.glyphicon-phone-alt:before{content:"\e183"}.glyphicon-tower:before{content:"\e184"}.glyphicon-stats:before{content:"\e185"}.glyphicon-sd-video:before{content:"\e186"}.glyphicon-hd-video:before{content:"\e187"}.glyphicon-subtitles:before{content:"\e188"}.glyphicon-sound-stereo:before{content:"\e189"}.glyphicon-sound-dolby:before{content:"\e190"}.glyphicon-sound-5-1:before{content:"\e191"}.glyphicon-sound-6-1:before{content:"\e192"}.glyphicon-sound-7-1:before{content:"\e193"}.glyphicon-copyright-mark:before{content:"\e194"}.glyphicon-registration-mark:before{content:"\e195"}.glyphicon-cloud-download:before{content:"\e197"}.glyphicon-cloud-upload:before{content:"\e198"}.glyphicon-tree-conifer:before{content:"\e199"}.glyphicon-tree-deciduous:before{content:"\e200"}.glyphicon-cd:before{content:"\e201"}.glyphicon-save-file:before{content:"\e202"}.glyphicon-open-file:before{content:"\e203"}.glyphicon-level-up:before{content:"\e204"}.glyphicon-copy:before{content:"\e205"}.glyphicon-paste:before{content:"\e206"}.glyphicon-alert:before{content:"\e209"}.glyphicon-equalizer:before{content:"\e210"}.glyphicon-king:before{content:"\e211"}.glyphicon-queen:before{content:"\e212"}.glyphicon-pawn:before{content:"\e213"}.glyphicon-bishop:before{content:"\e214"}.glyphicon-knight:before{content:"\e215"}.glyphicon-baby-formula:before{content:"\e216"}.glyphicon-tent:before{content:"\26fa"}.glyphicon-blackboard:before{content:"\e218"}.glyphicon-bed:before{content:"\e219"}.glyphicon-apple:before{content:"\f8ff"}.glyphicon-erase:before{content:"\e221"}.glyphicon-hourglass:before{content:"\231b"}.glyphicon-lamp:before{content:"\e223"}.glyphicon-duplicate:before{content:"\e224"}.glyphicon-piggy-bank:before{content:"\e225"}.glyphicon-scissors:before{content:"\e226"}.glyphicon-bitcoin:before{content:"\e227"}.glyphicon-btc:before{content:"\e227"}.glyphicon-xbt:before{content:"\e227"}.glyphicon-yen:before{content:"\00a5"}.glyphicon-jpy:before{content:"\00a5"}.glyphicon-ruble:before{content:"\20bd"}.glyphicon-rub:before{content:"\20bd"}.glyphicon-scale:before{content:"\e230"}.glyphicon-ice-lolly:before{content:"\e231"}.glyphicon-ice-lolly-tasted:before{content:"\e232"}.glyphicon-education:before{content:"\e233"}.glyphicon-option-horizontal:before{content:"\e234"}.glyphicon-option-vertical:before{content:"\e235"}.glyphicon-menu-hamburger:before{content:"\e236"}.glyphicon-modal-window:before{content:"\e237"}.glyphicon-oil:before{content:"\e238"}.glyphicon-grain:before{content:"\e239"}.glyphicon-sunglasses:before{content:"\e240"}.glyphicon-text-size:before{content:"\e241"}.glyphicon-text-color:before{content:"\e242"}.glyphicon-text-background:before{content:"\e243"}.glyphicon-object-align-top:before{content:"\e244"}.glyphicon-object-align-bottom:before{content:"\e245"}.glyphicon-object-align-horizontal:before{content:"\e246"}.glyphicon-object-align-left:before{content:"\e247"}.glyphicon-object-align-vertical:before{content:"\e248"}.glyphicon-object-align-right:before{content:"\e249"}.glyphicon-triangle-right:before{content:"\e250"}.glyphicon-triangle-left:before{content:"\e251"}.glyphicon-triangle-bottom:before{content:"\e252"}.glyphicon-triangle-top:before{content:"\e253"}.glyphicon-console:before{content:"\e254"}.glyphicon-superscript:before{content:"\e255"}.glyphicon-subscript:before{content:"\e256"}.glyphicon-menu-left:before{content:"\e257"}.glyphicon-menu-right:before{content:"\e258"}.glyphicon-menu-down:before{content:"\e259"}.glyphicon-menu-up:before{content:"\e260"}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}button,input,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:focus,a:hover{color:#23527c;text-decoration:underline}a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}.carousel-inner>.item>a>img,.carousel-inner>.item>img,.img-responsive,.thumbnail a>img,.thumbnail>img{display:block;max-width:100%;height:auto}.img-rounded{border-radius:6px}.img-thumbnail{display:inline-block;max-width:100%;height:auto;padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}[role=button]{cursor:pointer}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{font-weight:400;line-height:1;color:#777}.h1,.h2,.h3,h1,h2,h3{margin-top:20px;margin-bottom:10px}.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small{font-size:65%}.h4,.h5,.h6,h4,h5,h6{margin-top:10px;margin-bottom:10px}.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{font-size:75%}.h1,h1{font-size:36px}.h2,h2{font-size:30px}.h3,h3{font-size:24px}.h4,h4{font-size:18px}.h5,h5{font-size:14px}.h6,h6{font-size:12px}p{margin:0 0 10px}.lead{margin-bottom:20px;font-size:16px;font-weight:300;line-height:1.4}@media (min-width:768px){.lead{font-size:21px}}.small,small{font-size:85%}.mark,mark{padding:.2em;background-color:#fcf8e3}.text-left{text-align:left}.text-right{text-align:right}.text-center{text-align:center}.text-justify{text-align:justify}.text-nowrap{white-space:nowrap}.text-lowercase{text-transform:lowercase}.text-uppercase{text-transform:uppercase}.text-capitalize{text-transform:capitalize}.text-muted{color:#777}.text-primary{color:#337ab7}a.text-primary:focus,a.text-primary:hover{color:#286090}.text-success{color:#3c763d}a.text-success:focus,a.text-success:hover{color:#2b542c}.text-info{color:#31708f}a.text-info:focus,a.text-info:hover{color:#245269}.text-warning{color:#8a6d3b}a.text-warning:focus,a.text-warning:hover{color:#66512c}.text-danger{color:#a94442}a.text-danger:focus,a.text-danger:hover{color:#843534}.bg-primary{color:#fff;background-color:#337ab7}a.bg-primary:focus,a.bg-primary:hover{background-color:#286090}.bg-success{background-color:#dff0d8}a.bg-success:focus,a.bg-success:hover{background-color:#c1e2b3}.bg-info{background-color:#d9edf7}a.bg-info:focus,a.bg-info:hover{background-color:#afd9ee}.bg-warning{background-color:#fcf8e3}a.bg-warning:focus,a.bg-warning:hover{background-color:#f7ecb5}.bg-danger{background-color:#f2dede}a.bg-danger:focus,a.bg-danger:hover{background-color:#e4b9b9}.page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid #eee}ol,ul{margin-top:0;margin-bottom:10px}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;margin-left:-5px;list-style:none}.list-inline>li{display:inline-block;padding-right:5px;padding-left:5px}dl{margin-top:0;margin-bottom:20px}dd,dt{line-height:1.42857143}dt{font-weight:700}dd{margin-left:0}@media (min-width:768px){.dl-horizontal dt{float:left;width:160px;overflow:hidden;clear:left;text-align:right;text-overflow:ellipsis;white-space:nowrap}.dl-horizontal dd{margin-left:180px}}abbr[data-original-title],abbr[title]{cursor:help;border-bottom:1px dotted #777}.initialism{font-size:90%;text-transform:uppercase}blockquote{padding:10px 20px;margin:0 0 20px;font-size:17.5px;border-left:5px solid #eee}blockquote ol:last-child,blockquote p:last-child,blockquote ul:last-child{margin-bottom:0}blockquote .small,blockquote footer,blockquote small{display:block;font-size:80%;line-height:1.42857143;color:#777}blockquote .small:before,blockquote footer:before,blockquote small:before{content:'\2014 \00A0'}.blockquote-reverse,blockquote.pull-right{padding-right:15px;padding-left:0;text-align:right;border-right:5px solid #eee;border-left:0}.blockquote-reverse .small:before,.blockquote-reverse footer:before,.blockquote-reverse small:before,blockquote.pull-right .small:before,blockquote.pull-right footer:before,blockquote.pull-right small:before{content:''}.blockquote-reverse .small:after,.blockquote-reverse footer:after,.blockquote-reverse small:after,blockquote.pull-right .small:after,blockquote.pull-right footer:after,blockquote.pull-right small:after{content:'\00A0 \2014'}address{margin-bottom:20px;font-style:normal;line-height:1.42857143}code,kbd,pre,samp{font-family:Menlo,Monaco,Consolas,"Courier New",monospace}code{padding:2px 4px;font-size:90%;color:#c7254e;background-color:#f9f2f4;border-radius:4px}kbd{padding:2px 4px;font-size:90%;color:#fff;background-color:#333;border-radius:3px;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.25);box-shadow:inset 0 -1px 0 rgba(0,0,0,.25)}kbd kbd{padding:0;font-size:100%;font-weight:700;-webkit-box-shadow:none;box-shadow:none}pre{display:block;padding:9.5px;margin:0 0 10px;font-size:13px;line-height:1.42857143;color:#333;word-break:break-all;word-wrap:break-word;background-color:#f5f5f5;border:1px solid #ccc;border-radius:4px}pre code{padding:0;font-size:inherit;color:inherit;white-space:pre-wrap;background-color:transparent;border-radius:0}.pre-scrollable{max-height:340px;overflow-y:scroll}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.container-fluid{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{margin-right:-15px;margin-left:-15px}.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width:768px){.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width:992px){.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media (min-width:1200px){.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}table{background-color:transparent}caption{padding-top:8px;padding-bottom:8px;color:#777;text-align:left}th{text-align:left}.table{width:100%;max-width:100%;margin-bottom:20px}.table>tbody>tr>td,.table>tbody>tr>th,.table>tfoot>tr>td,.table>tfoot>tr>th,.table>thead>tr>td,.table>thead>tr>th{padding:8px;line-height:1.42857143;vertical-align:top;border-top:1px solid #ddd}.table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid #ddd}.table>caption+thead>tr:first-child>td,.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>td,.table>thead:first-child>tr:first-child>th{border-top:0}.table>tbody+tbody{border-top:2px solid #ddd}.table .table{background-color:#fff}.table-condensed>tbody>tr>td,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>td,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>thead>tr>th{padding:5px}.table-bordered{border:1px solid #ddd}.table-bordered>tbody>tr>td,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>td,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border:1px solid #ddd}.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border-bottom-width:2px}.table-striped>tbody>tr:nth-of-type(odd){background-color:#f9f9f9}.table-hover>tbody>tr:hover{background-color:#f5f5f5}table col[class*=col-]{position:static;display:table-column;float:none}table td[class*=col-],table th[class*=col-]{position:static;display:table-cell;float:none}.table>tbody>tr.active>td,.table>tbody>tr.active>th,.table>tbody>tr>td.active,.table>tbody>tr>th.active,.table>tfoot>tr.active>td,.table>tfoot>tr.active>th,.table>tfoot>tr>td.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>thead>tr.active>th,.table>thead>tr>td.active,.table>thead>tr>th.active{background-color:#f5f5f5}.table-hover>tbody>tr.active:hover>td,.table-hover>tbody>tr.active:hover>th,.table-hover>tbody>tr:hover>.active,.table-hover>tbody>tr>td.active:hover,.table-hover>tbody>tr>th.active:hover{background-color:#e8e8e8}.table>tbody>tr.success>td,.table>tbody>tr.success>th,.table>tbody>tr>td.success,.table>tbody>tr>th.success,.table>tfoot>tr.success>td,.table>tfoot>tr.success>th,.table>tfoot>tr>td.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>thead>tr.success>th,.table>thead>tr>td.success,.table>thead>tr>th.success{background-color:#dff0d8}.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr.success:hover>th,.table-hover>tbody>tr:hover>.success,.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover{background-color:#d0e9c6}.table>tbody>tr.info>td,.table>tbody>tr.info>th,.table>tbody>tr>td.info,.table>tbody>tr>th.info,.table>tfoot>tr.info>td,.table>tfoot>tr.info>th,.table>tfoot>tr>td.info,.table>tfoot>tr>th.info,.table>thead>tr.info>td,.table>thead>tr.info>th,.table>thead>tr>td.info,.table>thead>tr>th.info{background-color:#d9edf7}.table-hover>tbody>tr.info:hover>td,.table-hover>tbody>tr.info:hover>th,.table-hover>tbody>tr:hover>.info,.table-hover>tbody>tr>td.info:hover,.table-hover>tbody>tr>th.info:hover{background-color:#c4e3f3}.table>tbody>tr.warning>td,.table>tbody>tr.warning>th,.table>tbody>tr>td.warning,.table>tbody>tr>th.warning,.table>tfoot>tr.warning>td,.table>tfoot>tr.warning>th,.table>tfoot>tr>td.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>thead>tr.warning>th,.table>thead>tr>td.warning,.table>thead>tr>th.warning{background-color:#fcf8e3}.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr.warning:hover>th,.table-hover>tbody>tr:hover>.warning,.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover{background-color:#faf2cc}.table>tbody>tr.danger>td,.table>tbody>tr.danger>th,.table>tbody>tr>td.danger,.table>tbody>tr>th.danger,.table>tfoot>tr.danger>td,.table>tfoot>tr.danger>th,.table>tfoot>tr>td.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>thead>tr.danger>th,.table>thead>tr>td.danger,.table>thead>tr>th.danger{background-color:#f2dede}.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr.danger:hover>th,.table-hover>tbody>tr:hover>.danger,.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover{background-color:#ebcccc}.table-responsive{min-height:.01%;overflow-x:auto}@media screen and (max-width:767px){.table-responsive{width:100%;margin-bottom:15px;overflow-y:hidden;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #ddd}.table-responsive>.table{margin-bottom:0}.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>td,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>thead>tr>th{white-space:nowrap}.table-responsive>.table-bordered{border:0}.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>thead>tr>th:first-child{border-left:0}.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>thead>tr>th:last-child{border-right:0}.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}}fieldset{min-width:0;padding:0;margin:0;border:0}legend{display:block;width:100%;padding:0;margin-bottom:20px;font-size:21px;line-height:inherit;color:#333;border:0;border-bottom:1px solid #e5e5e5}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700}input[type=search]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}input[type=checkbox],input[type=radio]{margin:4px 0 0;margin-top:1px\9;line-height:normal}input[type=file]{display:block}input[type=range]{display:block;width:100%}select[multiple],select[size]{height:auto}input[type=file]:focus,input[type=checkbox]:focus,input[type=radio]:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}output{display:block;padding-top:7px;font-size:14px;line-height:1.42857143;color:#555}.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)}.form-control::-moz-placeholder{color:#999;opacity:1}.form-control:-ms-input-placeholder{color:#999}.form-control::-webkit-input-placeholder{color:#999}.form-control::-ms-expand{background-color:transparent;border:0}.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{background-color:#eee;opacity:1}.form-control[disabled],fieldset[disabled] .form-control{cursor:not-allowed}textarea.form-control{height:auto}input[type=search]{-webkit-appearance:none}@media screen and (-webkit-min-device-pixel-ratio:0){input[type=date].form-control,input[type=time].form-control,input[type=datetime-local].form-control,input[type=month].form-control{line-height:34px}.input-group-sm input[type=date],.input-group-sm input[type=time],.input-group-sm input[type=datetime-local],.input-group-sm input[type=month],input[type=date].input-sm,input[type=time].input-sm,input[type=datetime-local].input-sm,input[type=month].input-sm{line-height:30px}.input-group-lg input[type=date],.input-group-lg input[type=time],.input-group-lg input[type=datetime-local],.input-group-lg input[type=month],input[type=date].input-lg,input[type=time].input-lg,input[type=datetime-local].input-lg,input[type=month].input-lg{line-height:46px}}.form-group{margin-bottom:15px}.checkbox,.radio{position:relative;display:block;margin-top:10px;margin-bottom:10px}.checkbox label,.radio label{min-height:20px;padding-left:20px;margin-bottom:0;font-weight:400;cursor:pointer}.checkbox input[type=checkbox],.checkbox-inline input[type=checkbox],.radio input[type=radio],.radio-inline input[type=radio]{position:absolute;margin-top:4px\9;margin-left:-20px}.checkbox+.checkbox,.radio+.radio{margin-top:-5px}.checkbox-inline,.radio-inline{position:relative;display:inline-block;padding-left:20px;margin-bottom:0;font-weight:400;vertical-align:middle;cursor:pointer}.checkbox-inline+.checkbox-inline,.radio-inline+.radio-inline{margin-top:0;margin-left:10px}fieldset[disabled] input[type=checkbox],fieldset[disabled] input[type=radio],input[type=checkbox].disabled,input[type=checkbox][disabled],input[type=radio].disabled,input[type=radio][disabled]{cursor:not-allowed}.checkbox-inline.disabled,.radio-inline.disabled,fieldset[disabled] .checkbox-inline,fieldset[disabled] .radio-inline{cursor:not-allowed}.checkbox.disabled label,.radio.disabled label,fieldset[disabled] .checkbox label,fieldset[disabled] .radio label{cursor:not-allowed}.form-control-static{min-height:34px;padding-top:7px;padding-bottom:7px;margin-bottom:0}.form-control-static.input-lg,.form-control-static.input-sm{padding-right:0;padding-left:0}.input-sm{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-sm{height:30px;line-height:30px}select[multiple].input-sm,textarea.input-sm{height:auto}.form-group-sm .form-control{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.form-group-sm select.form-control{height:30px;line-height:30px}.form-group-sm select[multiple].form-control,.form-group-sm textarea.form-control{height:auto}.form-group-sm .form-control-static{height:30px;min-height:32px;padding:6px 10px;font-size:12px;line-height:1.5}.input-lg{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-lg{height:46px;line-height:46px}select[multiple].input-lg,textarea.input-lg{height:auto}.form-group-lg .form-control{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.form-group-lg select.form-control{height:46px;line-height:46px}.form-group-lg select[multiple].form-control,.form-group-lg textarea.form-control{height:auto}.form-group-lg .form-control-static{height:46px;min-height:38px;padding:11px 16px;font-size:18px;line-height:1.3333333}.has-feedback{position:relative}.has-feedback .form-control{padding-right:42.5px}.form-control-feedback{position:absolute;top:0;right:0;z-index:2;display:block;width:34px;height:34px;line-height:34px;text-align:center;pointer-events:none}.form-group-lg .form-control+.form-control-feedback,.input-group-lg+.form-control-feedback,.input-lg+.form-control-feedback{width:46px;height:46px;line-height:46px}.form-group-sm .form-control+.form-control-feedback,.input-group-sm+.form-control-feedback,.input-sm+.form-control-feedback{width:30px;height:30px;line-height:30px}.has-success .checkbox,.has-success .checkbox-inline,.has-success .control-label,.has-success .help-block,.has-success .radio,.has-success .radio-inline,.has-success.checkbox label,.has-success.checkbox-inline label,.has-success.radio label,.has-success.radio-inline label{color:#3c763d}.has-success .form-control{border-color:#3c763d;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-success .form-control:focus{border-color:#2b542c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168}.has-success .input-group-addon{color:#3c763d;background-color:#dff0d8;border-color:#3c763d}.has-success .form-control-feedback{color:#3c763d}.has-warning .checkbox,.has-warning .checkbox-inline,.has-warning .control-label,.has-warning .help-block,.has-warning .radio,.has-warning .radio-inline,.has-warning.checkbox label,.has-warning.checkbox-inline label,.has-warning.radio label,.has-warning.radio-inline label{color:#8a6d3b}.has-warning .form-control{border-color:#8a6d3b;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-warning .form-control:focus{border-color:#66512c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b}.has-warning .input-group-addon{color:#8a6d3b;background-color:#fcf8e3;border-color:#8a6d3b}.has-warning .form-control-feedback{color:#8a6d3b}.has-error .checkbox,.has-error .checkbox-inline,.has-error .control-label,.has-error .help-block,.has-error .radio,.has-error .radio-inline,.has-error.checkbox label,.has-error.checkbox-inline label,.has-error.radio label,.has-error.radio-inline label{color:#a94442}.has-error .form-control{border-color:#a94442;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-error .form-control:focus{border-color:#843534;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483}.has-error .input-group-addon{color:#a94442;background-color:#f2dede;border-color:#a94442}.has-error .form-control-feedback{color:#a94442}.has-feedback label~.form-control-feedback{top:25px}.has-feedback label.sr-only~.form-control-feedback{top:0}.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#737373}@media (min-width:768px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-static{display:inline-block}.form-inline .input-group{display:inline-table;vertical-align:middle}.form-inline .input-group .form-control,.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn{width:auto}.form-inline .input-group>.form-control{width:100%}.form-inline .control-label{margin-bottom:0;vertical-align:middle}.form-inline .checkbox,.form-inline .radio{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.form-inline .checkbox label,.form-inline .radio label{padding-left:0}.form-inline .checkbox input[type=checkbox],.form-inline .radio input[type=radio]{position:relative;margin-left:0}.form-inline .has-feedback .form-control-feedback{top:0}}.form-horizontal .checkbox,.form-horizontal .checkbox-inline,.form-horizontal .radio,.form-horizontal .radio-inline{padding-top:7px;margin-top:0;margin-bottom:0}.form-horizontal .checkbox,.form-horizontal .radio{min-height:27px}.form-horizontal .form-group{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.form-horizontal .control-label{padding-top:7px;margin-bottom:0;text-align:right}}.form-horizontal .has-feedback .form-control-feedback{right:15px}@media (min-width:768px){.form-horizontal .form-group-lg .control-label{padding-top:11px;font-size:18px}}@media (min-width:768px){.form-horizontal .form-group-sm .control-label{padding-top:6px;font-size:12px}}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px}.btn.active.focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn:active:focus,.btn:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.btn.focus,.btn:focus,.btn:hover{color:#333;text-decoration:none}.btn.active,.btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn.disabled,.btn[disabled],fieldset[disabled] .btn{cursor:not-allowed;filter:alpha(opacity=65);-webkit-box-shadow:none;box-shadow:none;opacity:.65}a.btn.disabled,fieldset[disabled] a.btn{pointer-events:none}.btn-default{color:#333;background-color:#fff;border-color:#ccc}.btn-default.focus,.btn-default:focus{color:#333;background-color:#e6e6e6;border-color:#8c8c8c}.btn-default:hover{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default{color:#333;background-color:#e6e6e6;border-color:#adadad}.btn-default.active.focus,.btn-default.active:focus,.btn-default.active:hover,.btn-default:active.focus,.btn-default:active:focus,.btn-default:active:hover,.open>.dropdown-toggle.btn-default.focus,.open>.dropdown-toggle.btn-default:focus,.open>.dropdown-toggle.btn-default:hover{color:#333;background-color:#d4d4d4;border-color:#8c8c8c}.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default{background-image:none}.btn-default.disabled.focus,.btn-default.disabled:focus,.btn-default.disabled:hover,.btn-default[disabled].focus,.btn-default[disabled]:focus,.btn-default[disabled]:hover,fieldset[disabled] .btn-default.focus,fieldset[disabled] .btn-default:focus,fieldset[disabled] .btn-default:hover{background-color:#fff;border-color:#ccc}.btn-default .badge{color:#fff;background-color:#333}.btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4}.btn-primary.focus,.btn-primary:focus{color:#fff;background-color:#286090;border-color:#122b40}.btn-primary:hover{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary.active,.btn-primary:active,.open>.dropdown-toggle.btn-primary{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary.active.focus,.btn-primary.active:focus,.btn-primary.active:hover,.btn-primary:active.focus,.btn-primary:active:focus,.btn-primary:active:hover,.open>.dropdown-toggle.btn-primary.focus,.open>.dropdown-toggle.btn-primary:focus,.open>.dropdown-toggle.btn-primary:hover{color:#fff;background-color:#204d74;border-color:#122b40}.btn-primary.active,.btn-primary:active,.open>.dropdown-toggle.btn-primary{background-image:none}.btn-primary.disabled.focus,.btn-primary.disabled:focus,.btn-primary.disabled:hover,.btn-primary[disabled].focus,.btn-primary[disabled]:focus,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary.focus,fieldset[disabled] .btn-primary:focus,fieldset[disabled] .btn-primary:hover{background-color:#337ab7;border-color:#2e6da4}.btn-primary .badge{color:#337ab7;background-color:#fff}.btn-success{color:#fff;background-color:#5cb85c;border-color:#4cae4c}.btn-success.focus,.btn-success:focus{color:#fff;background-color:#449d44;border-color:#255625}.btn-success:hover{color:#fff;background-color:#449d44;border-color:#398439}.btn-success.active,.btn-success:active,.open>.dropdown-toggle.btn-success{color:#fff;background-color:#449d44;border-color:#398439}.btn-success.active.focus,.btn-success.active:focus,.btn-success.active:hover,.btn-success:active.focus,.btn-success:active:focus,.btn-success:active:hover,.open>.dropdown-toggle.btn-success.focus,.open>.dropdown-toggle.btn-success:focus,.open>.dropdown-toggle.btn-success:hover{color:#fff;background-color:#398439;border-color:#255625}.btn-success.active,.btn-success:active,.open>.dropdown-toggle.btn-success{background-image:none}.btn-success.disabled.focus,.btn-success.disabled:focus,.btn-success.disabled:hover,.btn-success[disabled].focus,.btn-success[disabled]:focus,.btn-success[disabled]:hover,fieldset[disabled] .btn-success.focus,fieldset[disabled] .btn-success:focus,fieldset[disabled] .btn-success:hover{background-color:#5cb85c;border-color:#4cae4c}.btn-success .badge{color:#5cb85c;background-color:#fff}.btn-info{color:#fff;background-color:#5bc0de;border-color:#46b8da}.btn-info.focus,.btn-info:focus{color:#fff;background-color:#31b0d5;border-color:#1b6d85}.btn-info:hover{color:#fff;background-color:#31b0d5;border-color:#269abc}.btn-info.active,.btn-info:active,.open>.dropdown-toggle.btn-info{color:#fff;background-color:#31b0d5;border-color:#269abc}.btn-info.active.focus,.btn-info.active:focus,.btn-info.active:hover,.btn-info:active.focus,.btn-info:active:focus,.btn-info:active:hover,.open>.dropdown-toggle.btn-info.focus,.open>.dropdown-toggle.btn-info:focus,.open>.dropdown-toggle.btn-info:hover{color:#fff;background-color:#269abc;border-color:#1b6d85}.btn-info.active,.btn-info:active,.open>.dropdown-toggle.btn-info{background-image:none}.btn-info.disabled.focus,.btn-info.disabled:focus,.btn-info.disabled:hover,.btn-info[disabled].focus,.btn-info[disabled]:focus,.btn-info[disabled]:hover,fieldset[disabled] .btn-info.focus,fieldset[disabled] .btn-info:focus,fieldset[disabled] .btn-info:hover{background-color:#5bc0de;border-color:#46b8da}.btn-info .badge{color:#5bc0de;background-color:#fff}.btn-warning{color:#fff;background-color:#f0ad4e;border-color:#eea236}.btn-warning.focus,.btn-warning:focus{color:#fff;background-color:#ec971f;border-color:#985f0d}.btn-warning:hover{color:#fff;background-color:#ec971f;border-color:#d58512}.btn-warning.active,.btn-warning:active,.open>.dropdown-toggle.btn-warning{color:#fff;background-color:#ec971f;border-color:#d58512}.btn-warning.active.focus,.btn-warning.active:focus,.btn-warning.active:hover,.btn-warning:active.focus,.btn-warning:active:focus,.btn-warning:active:hover,.open>.dropdown-toggle.btn-warning.focus,.open>.dropdown-toggle.btn-warning:focus,.open>.dropdown-toggle.btn-warning:hover{color:#fff;background-color:#d58512;border-color:#985f0d}.btn-warning.active,.btn-warning:active,.open>.dropdown-toggle.btn-warning{background-image:none}.btn-warning.disabled.focus,.btn-warning.disabled:focus,.btn-warning.disabled:hover,.btn-warning[disabled].focus,.btn-warning[disabled]:focus,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning.focus,fieldset[disabled] .btn-warning:focus,fieldset[disabled] .btn-warning:hover{background-color:#f0ad4e;border-color:#eea236}.btn-warning .badge{color:#f0ad4e;background-color:#fff}.btn-danger{color:#fff;background-color:#d9534f;border-color:#d43f3a}.btn-danger.focus,.btn-danger:focus{color:#fff;background-color:#c9302c;border-color:#761c19}.btn-danger:hover{color:#fff;background-color:#c9302c;border-color:#ac2925}.btn-danger.active,.btn-danger:active,.open>.dropdown-toggle.btn-danger{color:#fff;background-color:#c9302c;border-color:#ac2925}.btn-danger.active.focus,.btn-danger.active:focus,.btn-danger.active:hover,.btn-danger:active.focus,.btn-danger:active:focus,.btn-danger:active:hover,.open>.dropdown-toggle.btn-danger.focus,.open>.dropdown-toggle.btn-danger:focus,.open>.dropdown-toggle.btn-danger:hover{color:#fff;background-color:#ac2925;border-color:#761c19}.btn-danger.active,.btn-danger:active,.open>.dropdown-toggle.btn-danger{background-image:none}.btn-danger.disabled.focus,.btn-danger.disabled:focus,.btn-danger.disabled:hover,.btn-danger[disabled].focus,.btn-danger[disabled]:focus,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger.focus,fieldset[disabled] .btn-danger:focus,fieldset[disabled] .btn-danger:hover{background-color:#d9534f;border-color:#d43f3a}.btn-danger .badge{color:#d9534f;background-color:#fff}.btn-link{font-weight:400;color:#337ab7;border-radius:0}.btn-link,.btn-link.active,.btn-link:active,.btn-link[disabled],fieldset[disabled] .btn-link{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link,.btn-link:active,.btn-link:focus,.btn-link:hover{border-color:transparent}.btn-link:focus,.btn-link:hover{color:#23527c;text-decoration:underline;background-color:transparent}.btn-link[disabled]:focus,.btn-link[disabled]:hover,fieldset[disabled] .btn-link:focus,fieldset[disabled] .btn-link:hover{color:#777;text-decoration:none}.btn-group-lg>.btn,.btn-lg{padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.btn-group-sm>.btn,.btn-sm{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.btn-group-xs>.btn,.btn-xs{padding:1px 5px;font-size:12px;line-height:1.5;border-radius:3px}.btn-block{display:block;width:100%}.btn-block+.btn-block{margin-top:5px}input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block{width:100%}.fade{opacity:0;-webkit-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear}.fade.in{opacity:1}.collapse{display:none}.collapse.in{display:block}tr.collapse.in{display:table-row}tbody.collapse.in{display:table-row-group}.collapsing{position:relative;height:0;overflow:hidden;-webkit-transition-timing-function:ease;-o-transition-timing-function:ease;transition-timing-function:ease;-webkit-transition-duration:.35s;-o-transition-duration:.35s;transition-duration:.35s;-webkit-transition-property:height,visibility;-o-transition-property:height,visibility;transition-property:height,visibility}.caret{display:inline-block;width:0;height:0;margin-left:2px;vertical-align:middle;border-top:4px dashed;border-top:4px solid\9;border-right:4px solid transparent;border-left:4px solid transparent}.dropdown,.dropup{position:relative}.dropdown-toggle:focus{outline:0}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;padding:5px 0;margin:2px 0 0;font-size:14px;text-align:left;list-style:none;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.15);border-radius:4px;-webkit-box-shadow:0 6px 12px rgba(0,0,0,.175);box-shadow:0 6px 12px rgba(0,0,0,.175)}.dropdown-menu.pull-right{right:0;left:auto}.dropdown-menu .divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.dropdown-menu>li>a{display:block;padding:3px 20px;clear:both;font-weight:400;line-height:1.42857143;color:#333;white-space:nowrap}.dropdown-menu>li>a:focus,.dropdown-menu>li>a:hover{color:#262626;text-decoration:none;background-color:#f5f5f5}.dropdown-menu>.active>a,.dropdown-menu>.active>a:focus,.dropdown-menu>.active>a:hover{color:#fff;text-decoration:none;background-color:#337ab7;outline:0}.dropdown-menu>.disabled>a,.dropdown-menu>.disabled>a:focus,.dropdown-menu>.disabled>a:hover{color:#777}.dropdown-menu>.disabled>a:focus,.dropdown-menu>.disabled>a:hover{text-decoration:none;cursor:not-allowed;background-color:transparent;background-image:none;filter:progid:DXImageTransform.Microsoft.gradient(enabled=false)}.open>.dropdown-menu{display:block}.open>a{outline:0}.dropdown-menu-right{right:0;left:auto}.dropdown-menu-left{right:auto;left:0}.dropdown-header{display:block;padding:3px 20px;font-size:12px;line-height:1.42857143;color:#777;white-space:nowrap}.dropdown-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:990}.pull-right>.dropdown-menu{right:0;left:auto}.dropup .caret,.navbar-fixed-bottom .dropdown .caret{content:"";border-top:0;border-bottom:4px dashed;border-bottom:4px solid\9}.dropup .dropdown-menu,.navbar-fixed-bottom .dropdown .dropdown-menu{top:auto;bottom:100%;margin-bottom:2px}@media (min-width:768px){.navbar-right .dropdown-menu{right:0;left:auto}.navbar-right .dropdown-menu-left{right:auto;left:0}}.btn-group,.btn-group-vertical{position:relative;display:inline-block;vertical-align:middle}.btn-group-vertical>.btn,.btn-group>.btn{position:relative;float:left}.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group-vertical>.btn:hover,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus,.btn-group>.btn:hover{z-index:2}.btn-group .btn+.btn,.btn-group .btn+.btn-group,.btn-group .btn-group+.btn,.btn-group .btn-group+.btn-group{margin-left:-1px}.btn-toolbar{margin-left:-5px}.btn-toolbar .btn,.btn-toolbar .btn-group,.btn-toolbar .input-group{float:left}.btn-toolbar>.btn,.btn-toolbar>.btn-group,.btn-toolbar>.input-group{margin-left:5px}.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle){border-radius:0}.btn-group>.btn:first-child{margin-left:0}.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn:last-child:not(:first-child),.btn-group>.dropdown-toggle:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.btn-group>.btn-group{float:left}.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-left-radius:0;border-bottom-left-radius:0}.btn-group .dropdown-toggle:active,.btn-group.open .dropdown-toggle{outline:0}.btn-group>.btn+.dropdown-toggle{padding-right:8px;padding-left:8px}.btn-group>.btn-lg+.dropdown-toggle{padding-right:12px;padding-left:12px}.btn-group.open .dropdown-toggle{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn-group.open .dropdown-toggle.btn-link{-webkit-box-shadow:none;box-shadow:none}.btn .caret{margin-left:0}.btn-lg .caret{border-width:5px 5px 0;border-bottom-width:0}.dropup .btn-lg .caret{border-width:0 5px 5px}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group,.btn-group-vertical>.btn-group>.btn{display:block;float:none;width:100%;max-width:100%}.btn-group-vertical>.btn-group>.btn{float:none}.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group{margin-top:-1px;margin-left:0}.btn-group-vertical>.btn:not(:first-child):not(:last-child){border-radius:0}.btn-group-vertical>.btn:first-child:not(:last-child){border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn:last-child:not(:first-child){border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-left-radius:0;border-top-right-radius:0}.btn-group-justified{display:table;width:100%;table-layout:fixed;border-collapse:separate}.btn-group-justified>.btn,.btn-group-justified>.btn-group{display:table-cell;float:none;width:1%}.btn-group-justified>.btn-group .btn{width:100%}.btn-group-justified>.btn-group .dropdown-menu{left:auto}[data-toggle=buttons]>.btn input[type=checkbox],[data-toggle=buttons]>.btn input[type=radio],[data-toggle=buttons]>.btn-group>.btn input[type=checkbox],[data-toggle=buttons]>.btn-group>.btn input[type=radio]{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.input-group{position:relative;display:table;border-collapse:separate}.input-group[class*=col-]{float:none;padding-right:0;padding-left:0}.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0}.input-group .form-control:focus{z-index:3}.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-group-lg>.form-control,select.input-group-lg>.input-group-addon,select.input-group-lg>.input-group-btn>.btn{height:46px;line-height:46px}select[multiple].input-group-lg>.form-control,select[multiple].input-group-lg>.input-group-addon,select[multiple].input-group-lg>.input-group-btn>.btn,textarea.input-group-lg>.form-control,textarea.input-group-lg>.input-group-addon,textarea.input-group-lg>.input-group-btn>.btn{height:auto}.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn{height:30px;line-height:30px}select[multiple].input-group-sm>.form-control,select[multiple].input-group-sm>.input-group-addon,select[multiple].input-group-sm>.input-group-btn>.btn,textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn{height:auto}.input-group .form-control,.input-group-addon,.input-group-btn{display:table-cell}.input-group .form-control:not(:first-child):not(:last-child),.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child){border-radius:0}.input-group-addon,.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle}.input-group-addon{padding:6px 12px;font-size:14px;font-weight:400;line-height:1;color:#555;text-align:center;background-color:#eee;border:1px solid #ccc;border-radius:4px}.input-group-addon.input-sm{padding:5px 10px;font-size:12px;border-radius:3px}.input-group-addon.input-lg{padding:10px 16px;font-size:18px;border-radius:6px}.input-group-addon input[type=checkbox],.input-group-addon input[type=radio]{margin-top:0}.input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group>.btn,.input-group-btn:first-child>.dropdown-toggle,.input-group-btn:last-child>.btn-group:not(:last-child)>.btn,.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.input-group-addon:first-child{border-right:0}.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:first-child>.btn-group:not(:first-child)>.btn,.input-group-btn:first-child>.btn:not(:first-child),.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group>.btn,.input-group-btn:last-child>.dropdown-toggle{border-top-left-radius:0;border-bottom-left-radius:0}.input-group-addon:last-child{border-left:0}.input-group-btn{position:relative;font-size:0;white-space:nowrap}.input-group-btn>.btn{position:relative}.input-group-btn>.btn+.btn{margin-left:-1px}.input-group-btn>.btn:active,.input-group-btn>.btn:focus,.input-group-btn>.btn:hover{z-index:2}.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group{margin-right:-1px}.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group{z-index:2;margin-left:-1px}.nav{padding-left:0;margin-bottom:0;list-style:none}.nav>li{position:relative;display:block}.nav>li>a{position:relative;display:block;padding:10px 15px}.nav>li>a:focus,.nav>li>a:hover{text-decoration:none;background-color:#eee}.nav>li.disabled>a{color:#777}.nav>li.disabled>a:focus,.nav>li.disabled>a:hover{color:#777;text-decoration:none;cursor:not-allowed;background-color:transparent}.nav .open>a,.nav .open>a:focus,.nav .open>a:hover{background-color:#eee;border-color:#337ab7}.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}.nav>li>a>img{max-width:none}.nav-tabs{border-bottom:1px solid #ddd}.nav-tabs>li{float:left;margin-bottom:-1px}.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover{color:#555;cursor:default;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent}.nav-tabs.nav-justified{width:100%;border-bottom:0}.nav-tabs.nav-justified>li{float:none}.nav-tabs.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}.nav-tabs.nav-justified>li>a{margin-bottom:0}}.nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs.nav-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border-bottom-color:#fff}}.nav-pills>li{float:left}.nav-pills>li>a{border-radius:4px}.nav-pills>li+li{margin-left:2px}.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{color:#fff;background-color:#337ab7}.nav-stacked>li{float:none}.nav-stacked>li+li{margin-top:2px;margin-left:0}.nav-justified{width:100%}.nav-justified>li{float:none}.nav-justified>li>a{margin-bottom:5px;text-align:center}.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}@media (min-width:768px){.nav-justified>li{display:table-cell;width:1%}.nav-justified>li>a{margin-bottom:0}}.nav-tabs-justified{border-bottom:0}.nav-tabs-justified>li>a{margin-right:0;border-radius:4px}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border:1px solid #ddd}@media (min-width:768px){.nav-tabs-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border-bottom-color:#fff}}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.navbar{position:relative;min-height:50px;margin-bottom:20px;border:1px solid transparent}@media (min-width:768px){.navbar{border-radius:4px}}@media (min-width:768px){.navbar-header{float:left}}.navbar-collapse{padding-right:15px;padding-left:15px;overflow-x:visible;-webkit-overflow-scrolling:touch;border-top:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1)}.navbar-collapse.in{overflow-y:auto}@media (min-width:768px){.navbar-collapse{width:auto;border-top:0;-webkit-box-shadow:none;box-shadow:none}.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}.navbar-collapse.in{overflow-y:visible}.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse{padding-right:0;padding-left:0}}.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:340px}@media (max-device-width:480px) and (orientation:landscape){.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:200px}}.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}}.navbar-static-top{z-index:1000;border-width:0 0 1px}@media (min-width:768px){.navbar-static-top{border-radius:0}}.navbar-fixed-bottom,.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030}@media (min-width:768px){.navbar-fixed-bottom,.navbar-fixed-top{border-radius:0}}.navbar-fixed-top{top:0;border-width:0 0 1px}.navbar-fixed-bottom{bottom:0;margin-bottom:0;border-width:1px 0 0}.navbar-brand{float:left;height:50px;padding:15px 15px;font-size:18px;line-height:20px}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-brand>img{display:block}@media (min-width:768px){.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand{margin-left:-15px}}.navbar-toggle{position:relative;float:right;padding:9px 10px;margin-top:8px;margin-right:15px;margin-bottom:8px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}.navbar-toggle:focus{outline:0}.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}@media (min-width:768px){.navbar-toggle{display:none}}.navbar-nav{margin:7.5px -15px}.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}@media (max-width:767px){.navbar-nav .open .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;-webkit-box-shadow:none;box-shadow:none}.navbar-nav .open .dropdown-menu .dropdown-header,.navbar-nav .open .dropdown-menu>li>a{padding:5px 15px 5px 25px}.navbar-nav .open .dropdown-menu>li>a{line-height:20px}.navbar-nav .open .dropdown-menu>li>a:focus,.navbar-nav .open .dropdown-menu>li>a:hover{background-image:none}}@media (min-width:768px){.navbar-nav{float:left;margin:0}.navbar-nav>li{float:left}.navbar-nav>li>a{padding-top:15px;padding-bottom:15px}}.navbar-form{padding:10px 15px;margin-top:8px;margin-right:-15px;margin-bottom:8px;margin-left:-15px;border-top:1px solid transparent;border-bottom:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1)}@media (min-width:768px){.navbar-form .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.navbar-form .form-control{display:inline-block;width:auto;vertical-align:middle}.navbar-form .form-control-static{display:inline-block}.navbar-form .input-group{display:inline-table;vertical-align:middle}.navbar-form .input-group .form-control,.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn{width:auto}.navbar-form .input-group>.form-control{width:100%}.navbar-form .control-label{margin-bottom:0;vertical-align:middle}.navbar-form .checkbox,.navbar-form .radio{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.navbar-form .checkbox label,.navbar-form .radio label{padding-left:0}.navbar-form .checkbox input[type=checkbox],.navbar-form .radio input[type=radio]{position:relative;margin-left:0}.navbar-form .has-feedback .form-control-feedback{top:0}}@media (max-width:767px){.navbar-form .form-group{margin-bottom:5px}.navbar-form .form-group:last-child{margin-bottom:0}}@media (min-width:768px){.navbar-form{width:auto;padding-top:0;padding-bottom:0;margin-right:0;margin-left:0;border:0;-webkit-box-shadow:none;box-shadow:none}}.navbar-nav>li>.dropdown-menu{margin-top:0;border-top-left-radius:0;border-top-right-radius:0}.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu{margin-bottom:0;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}.navbar-btn{margin-top:8px;margin-bottom:8px}.navbar-btn.btn-sm{margin-top:10px;margin-bottom:10px}.navbar-btn.btn-xs{margin-top:14px;margin-bottom:14px}.navbar-text{margin-top:15px;margin-bottom:15px}@media (min-width:768px){.navbar-text{float:left;margin-right:15px;margin-left:15px}}@media (min-width:768px){.navbar-left{float:left!important}.navbar-right{float:right!important;margin-right:-15px}.navbar-right~.navbar-right{margin-right:0}}.navbar-default{background-color:#f8f8f8;border-color:#e7e7e7}.navbar-default .navbar-brand{color:#777}.navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover{color:#5e5e5e;background-color:transparent}.navbar-default .navbar-text{color:#777}.navbar-default .navbar-nav>li>a{color:#777}.navbar-default .navbar-nav>li>a:focus,.navbar-default .navbar-nav>li>a:hover{color:#333;background-color:transparent}.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:focus,.navbar-default .navbar-nav>.active>a:hover{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav>.disabled>a,.navbar-default .navbar-nav>.disabled>a:focus,.navbar-default .navbar-nav>.disabled>a:hover{color:#ccc;background-color:transparent}.navbar-default .navbar-toggle{border-color:#ddd}.navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover{background-color:#ddd}.navbar-default .navbar-toggle .icon-bar{background-color:#888}.navbar-default .navbar-collapse,.navbar-default .navbar-form{border-color:#e7e7e7}.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:focus,.navbar-default .navbar-nav>.open>a:hover{color:#555;background-color:#e7e7e7}@media (max-width:767px){.navbar-default .navbar-nav .open .dropdown-menu>li>a{color:#777}.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover{color:#333;background-color:transparent}.navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover{color:#555;background-color:#e7e7e7}.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover{color:#ccc;background-color:transparent}}.navbar-default .navbar-link{color:#777}.navbar-default .navbar-link:hover{color:#333}.navbar-default .btn-link{color:#777}.navbar-default .btn-link:focus,.navbar-default .btn-link:hover{color:#333}.navbar-default .btn-link[disabled]:focus,.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:focus,fieldset[disabled] .navbar-default .btn-link:hover{color:#ccc}.navbar-inverse{background-color:#222;border-color:#080808}.navbar-inverse .navbar-brand{color:#9d9d9d}.navbar-inverse .navbar-brand:focus,.navbar-inverse .navbar-brand:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-text{color:#9d9d9d}.navbar-inverse .navbar-nav>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav>li>a:focus,.navbar-inverse .navbar-nav>li>a:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.active>a:focus,.navbar-inverse .navbar-nav>.active>a:hover{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav>.disabled>a,.navbar-inverse .navbar-nav>.disabled>a:focus,.navbar-inverse .navbar-nav>.disabled>a:hover{color:#444;background-color:transparent}.navbar-inverse .navbar-toggle{border-color:#333}.navbar-inverse .navbar-toggle:focus,.navbar-inverse .navbar-toggle:hover{background-color:#333}.navbar-inverse .navbar-toggle .icon-bar{background-color:#fff}.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form{border-color:#101010}.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a:focus,.navbar-inverse .navbar-nav>.open>a:hover{color:#fff;background-color:#080808}@media (max-width:767px){.navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header{border-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu .divider{background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a{color:#9d9d9d}.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover{color:#fff;background-color:transparent}.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover{color:#fff;background-color:#080808}.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover{color:#444;background-color:transparent}}.navbar-inverse .navbar-link{color:#9d9d9d}.navbar-inverse .navbar-link:hover{color:#fff}.navbar-inverse .btn-link{color:#9d9d9d}.navbar-inverse .btn-link:focus,.navbar-inverse .btn-link:hover{color:#fff}.navbar-inverse .btn-link[disabled]:focus,.navbar-inverse .btn-link[disabled]:hover,fieldset[disabled] .navbar-inverse .btn-link:focus,fieldset[disabled] .navbar-inverse .btn-link:hover{color:#444}.breadcrumb{padding:8px 15px;margin-bottom:20px;list-style:none;background-color:#f5f5f5;border-radius:4px}.breadcrumb>li{display:inline-block}.breadcrumb>li+li:before{padding:0 5px;color:#ccc;content:"/\00a0"}.breadcrumb>.active{color:#777}.pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.42857143;color:#337ab7;text-decoration:none;background-color:#fff;border:1px solid #ddd}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-top-left-radius:4px;border-bottom-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{z-index:2;color:#23527c;background-color:#eee;border-color:#ddd}.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{z-index:3;color:#fff;cursor:default;background-color:#337ab7;border-color:#337ab7}.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{color:#777;cursor:not-allowed;background-color:#fff;border-color:#ddd}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px;line-height:1.3333333}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-top-left-radius:6px;border-bottom-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px;line-height:1.5}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-top-left-radius:3px;border-bottom-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px}.pager{padding-left:0;margin:20px 0;text-align:center;list-style:none}.pager li{display:inline}.pager li>a,.pager li>span{display:inline-block;padding:5px 14px;background-color:#fff;border:1px solid #ddd;border-radius:15px}.pager li>a:focus,.pager li>a:hover{text-decoration:none;background-color:#eee}.pager .next>a,.pager .next>span{float:right}.pager .previous>a,.pager .previous>span{float:left}.pager .disabled>a,.pager .disabled>a:focus,.pager .disabled>a:hover,.pager .disabled>span{color:#777;cursor:not-allowed;background-color:#fff}.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}a.label:focus,a.label:hover{color:#fff;text-decoration:none;cursor:pointer}.label:empty{display:none}.btn .label{position:relative;top:-1px}.label-default{background-color:#777}.label-default[href]:focus,.label-default[href]:hover{background-color:#5e5e5e}.label-primary{background-color:#337ab7}.label-primary[href]:focus,.label-primary[href]:hover{background-color:#286090}.label-success{background-color:#5cb85c}.label-success[href]:focus,.label-success[href]:hover{background-color:#449d44}.label-info{background-color:#5bc0de}.label-info[href]:focus,.label-info[href]:hover{background-color:#31b0d5}.label-warning{background-color:#f0ad4e}.label-warning[href]:focus,.label-warning[href]:hover{background-color:#ec971f}.label-danger{background-color:#d9534f}.label-danger[href]:focus,.label-danger[href]:hover{background-color:#c9302c}.badge{display:inline-block;min-width:10px;padding:3px 7px;font-size:12px;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:middle;background-color:#777;border-radius:10px}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.btn-group-xs>.btn .badge,.btn-xs .badge{top:0;padding:1px 5px}a.badge:focus,a.badge:hover{color:#fff;text-decoration:none;cursor:pointer}.list-group-item.active>.badge,.nav-pills>.active>a>.badge{color:#337ab7;background-color:#fff}.list-group-item>.badge{float:right}.list-group-item>.badge+.badge{margin-right:5px}.nav-pills>li>a>.badge{margin-left:3px}.jumbotron{padding-top:30px;padding-bottom:30px;margin-bottom:30px;color:inherit;background-color:#eee}.jumbotron .h1,.jumbotron h1{color:inherit}.jumbotron p{margin-bottom:15px;font-size:21px;font-weight:200}.jumbotron>hr{border-top-color:#d5d5d5}.container .jumbotron,.container-fluid .jumbotron{padding-right:15px;padding-left:15px;border-radius:6px}.jumbotron .container{max-width:100%}@media screen and (min-width:768px){.jumbotron{padding-top:48px;padding-bottom:48px}.container .jumbotron,.container-fluid .jumbotron{padding-right:60px;padding-left:60px}.jumbotron .h1,.jumbotron h1{font-size:63px}}.thumbnail{display:block;padding:4px;margin-bottom:20px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:border .2s ease-in-out;-o-transition:border .2s ease-in-out;transition:border .2s ease-in-out}.thumbnail a>img,.thumbnail>img{margin-right:auto;margin-left:auto}a.thumbnail.active,a.thumbnail:focus,a.thumbnail:hover{border-color:#337ab7}.thumbnail .caption{padding:9px;color:#333}.alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px}.alert h4{margin-top:0;color:inherit}.alert .alert-link{font-weight:700}.alert>p,.alert>ul{margin-bottom:0}.alert>p+p{margin-top:5px}.alert-dismissable,.alert-dismissible{padding-right:35px}.alert-dismissable .close,.alert-dismissible .close{position:relative;top:-2px;right:-21px;color:inherit}.alert-success{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.alert-success hr{border-top-color:#c9e2b3}.alert-success .alert-link{color:#2b542c}.alert-info{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.alert-info hr{border-top-color:#a6e1ec}.alert-info .alert-link{color:#245269}.alert-warning{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.alert-warning hr{border-top-color:#f7e1b5}.alert-warning .alert-link{color:#66512c}.alert-danger{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.alert-danger hr{border-top-color:#e4b9c0}.alert-danger .alert-link{color:#843534}@-webkit-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@-o-keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:40px 0}to{background-position:0 0}}.progress{height:20px;margin-bottom:20px;overflow:hidden;background-color:#f5f5f5;border-radius:4px;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.1);box-shadow:inset 0 1px 2px rgba(0,0,0,.1)}.progress-bar{float:left;width:0;height:100%;font-size:12px;line-height:20px;color:#fff;text-align:center;background-color:#337ab7;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);-webkit-transition:width .6s ease;-o-transition:width .6s ease;transition:width .6s ease}.progress-bar-striped,.progress-striped .progress-bar{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);-webkit-background-size:40px 40px;background-size:40px 40px}.progress-bar.active,.progress.active .progress-bar{-webkit-animation:progress-bar-stripes 2s linear infinite;-o-animation:progress-bar-stripes 2s linear infinite;animation:progress-bar-stripes 2s linear infinite}.progress-bar-success{background-color:#5cb85c}.progress-striped .progress-bar-success{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-info{background-color:#5bc0de}.progress-striped .progress-bar-info{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-warning{background-color:#f0ad4e}.progress-striped .progress-bar-warning{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.progress-bar-danger{background-color:#d9534f}.progress-striped .progress-bar-danger{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}.media{margin-top:15px}.media:first-child{margin-top:0}.media,.media-body{overflow:hidden;zoom:1}.media-body{width:10000px}.media-object{display:block}.media-object.img-thumbnail{max-width:none}.media-right,.media>.pull-right{padding-left:10px}.media-left,.media>.pull-left{padding-right:10px}.media-body,.media-left,.media-right{display:table-cell;vertical-align:top}.media-middle{vertical-align:middle}.media-bottom{vertical-align:bottom}.media-heading{margin-top:0;margin-bottom:5px}.media-list{padding-left:0;list-style:none}.list-group{padding-left:0;margin-bottom:20px}.list-group-item{position:relative;display:block;padding:10px 15px;margin-bottom:-1px;background-color:#fff;border:1px solid #ddd}.list-group-item:first-child{border-top-left-radius:4px;border-top-right-radius:4px}.list-group-item:last-child{margin-bottom:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}a.list-group-item,button.list-group-item{color:#555}a.list-group-item .list-group-item-heading,button.list-group-item .list-group-item-heading{color:#333}a.list-group-item:focus,a.list-group-item:hover,button.list-group-item:focus,button.list-group-item:hover{color:#555;text-decoration:none;background-color:#f5f5f5}button.list-group-item{width:100%;text-align:left}.list-group-item.disabled,.list-group-item.disabled:focus,.list-group-item.disabled:hover{color:#777;cursor:not-allowed;background-color:#eee}.list-group-item.disabled .list-group-item-heading,.list-group-item.disabled:focus .list-group-item-heading,.list-group-item.disabled:hover .list-group-item-heading{color:inherit}.list-group-item.disabled .list-group-item-text,.list-group-item.disabled:focus .list-group-item-text,.list-group-item.disabled:hover .list-group-item-text{color:#777}.list-group-item.active,.list-group-item.active:focus,.list-group-item.active:hover{z-index:2;color:#fff;background-color:#337ab7;border-color:#337ab7}.list-group-item.active .list-group-item-heading,.list-group-item.active .list-group-item-heading>.small,.list-group-item.active .list-group-item-heading>small,.list-group-item.active:focus .list-group-item-heading,.list-group-item.active:focus .list-group-item-heading>.small,.list-group-item.active:focus .list-group-item-heading>small,.list-group-item.active:hover .list-group-item-heading,.list-group-item.active:hover .list-group-item-heading>.small,.list-group-item.active:hover .list-group-item-heading>small{color:inherit}.list-group-item.active .list-group-item-text,.list-group-item.active:focus .list-group-item-text,.list-group-item.active:hover .list-group-item-text{color:#c7ddef}.list-group-item-success{color:#3c763d;background-color:#dff0d8}a.list-group-item-success,button.list-group-item-success{color:#3c763d}a.list-group-item-success .list-group-item-heading,button.list-group-item-success .list-group-item-heading{color:inherit}a.list-group-item-success:focus,a.list-group-item-success:hover,button.list-group-item-success:focus,button.list-group-item-success:hover{color:#3c763d;background-color:#d0e9c6}a.list-group-item-success.active,a.list-group-item-success.active:focus,a.list-group-item-success.active:hover,button.list-group-item-success.active,button.list-group-item-success.active:focus,button.list-group-item-success.active:hover{color:#fff;background-color:#3c763d;border-color:#3c763d}.list-group-item-info{color:#31708f;background-color:#d9edf7}a.list-group-item-info,button.list-group-item-info{color:#31708f}a.list-group-item-info .list-group-item-heading,button.list-group-item-info .list-group-item-heading{color:inherit}a.list-group-item-info:focus,a.list-group-item-info:hover,button.list-group-item-info:focus,button.list-group-item-info:hover{color:#31708f;background-color:#c4e3f3}a.list-group-item-info.active,a.list-group-item-info.active:focus,a.list-group-item-info.active:hover,button.list-group-item-info.active,button.list-group-item-info.active:focus,button.list-group-item-info.active:hover{color:#fff;background-color:#31708f;border-color:#31708f}.list-group-item-warning{color:#8a6d3b;background-color:#fcf8e3}a.list-group-item-warning,button.list-group-item-warning{color:#8a6d3b}a.list-group-item-warning .list-group-item-heading,button.list-group-item-warning .list-group-item-heading{color:inherit}a.list-group-item-warning:focus,a.list-group-item-warning:hover,button.list-group-item-warning:focus,button.list-group-item-warning:hover{color:#8a6d3b;background-color:#faf2cc}a.list-group-item-warning.active,a.list-group-item-warning.active:focus,a.list-group-item-warning.active:hover,button.list-group-item-warning.active,button.list-group-item-warning.active:focus,button.list-group-item-warning.active:hover{color:#fff;background-color:#8a6d3b;border-color:#8a6d3b}.list-group-item-danger{color:#a94442;background-color:#f2dede}a.list-group-item-danger,button.list-group-item-danger{color:#a94442}a.list-group-item-danger .list-group-item-heading,button.list-group-item-danger .list-group-item-heading{color:inherit}a.list-group-item-danger:focus,a.list-group-item-danger:hover,button.list-group-item-danger:focus,button.list-group-item-danger:hover{color:#a94442;background-color:#ebcccc}a.list-group-item-danger.active,a.list-group-item-danger.active:focus,a.list-group-item-danger.active:hover,button.list-group-item-danger.active,button.list-group-item-danger.active:focus,button.list-group-item-danger.active:hover{color:#fff;background-color:#a94442;border-color:#a94442}.list-group-item-heading{margin-top:0;margin-bottom:5px}.list-group-item-text{margin-bottom:0;line-height:1.3}.panel{margin-bottom:20px;background-color:#fff;border:1px solid transparent;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);box-shadow:0 1px 1px rgba(0,0,0,.05)}.panel-body{padding:15px}.panel-heading{padding:10px 15px;border-bottom:1px solid transparent;border-top-left-radius:3px;border-top-right-radius:3px}.panel-heading>.dropdown .dropdown-toggle{color:inherit}.panel-title{margin-top:0;margin-bottom:0;font-size:16px;color:inherit}.panel-title>.small,.panel-title>.small>a,.panel-title>a,.panel-title>small,.panel-title>small>a{color:inherit}.panel-footer{padding:10px 15px;background-color:#f5f5f5;border-top:1px solid #ddd;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.list-group,.panel>.panel-collapse>.list-group{margin-bottom:0}.panel>.list-group .list-group-item,.panel>.panel-collapse>.list-group .list-group-item{border-width:1px 0;border-radius:0}.panel>.list-group:first-child .list-group-item:first-child,.panel>.panel-collapse>.list-group:first-child .list-group-item:first-child{border-top:0;border-top-left-radius:3px;border-top-right-radius:3px}.panel>.list-group:last-child .list-group-item:last-child,.panel>.panel-collapse>.list-group:last-child .list-group-item:last-child{border-bottom:0;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child{border-top-left-radius:0;border-top-right-radius:0}.panel-heading+.list-group .list-group-item:first-child{border-top-width:0}.list-group+.panel-footer{border-top-width:0}.panel>.panel-collapse>.table,.panel>.table,.panel>.table-responsive>.table{margin-bottom:0}.panel>.panel-collapse>.table caption,.panel>.table caption,.panel>.table-responsive>.table caption{padding-right:15px;padding-left:15px}.panel>.table-responsive:first-child>.table:first-child,.panel>.table:first-child{border-top-left-radius:3px;border-top-right-radius:3px}.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child,.panel>.table:first-child>thead:first-child>tr:first-child{border-top-left-radius:3px;border-top-right-radius:3px}.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table:first-child>thead:first-child>tr:first-child th:first-child{border-top-left-radius:3px}.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table:first-child>thead:first-child>tr:first-child th:last-child{border-top-right-radius:3px}.panel>.table-responsive:last-child>.table:last-child,.panel>.table:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child{border-bottom-left-radius:3px}.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child{border-bottom-right-radius:3px}.panel>.panel-body+.table,.panel>.panel-body+.table-responsive,.panel>.table+.panel-body,.panel>.table-responsive+.panel-body{border-top:1px solid #ddd}.panel>.table>tbody:first-child>tr:first-child td,.panel>.table>tbody:first-child>tr:first-child th{border-top:0}.panel>.table-bordered,.panel>.table-responsive>.table-bordered{border:0}.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child{border-left:0}.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child{border-right:0}.panel>.table-bordered>tbody>tr:first-child>td,.panel>.table-bordered>tbody>tr:first-child>th,.panel>.table-bordered>thead>tr:first-child>td,.panel>.table-bordered>thead>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,.panel>.table-responsive>.table-bordered>thead>tr:first-child>th{border-bottom:0}.panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}.panel>.table-responsive{margin-bottom:0;border:0}.panel-group{margin-bottom:20px}.panel-group .panel{margin-bottom:0;border-radius:4px}.panel-group .panel+.panel{margin-top:5px}.panel-group .panel-heading{border-bottom:0}.panel-group .panel-heading+.panel-collapse>.list-group,.panel-group .panel-heading+.panel-collapse>.panel-body{border-top:1px solid #ddd}.panel-group .panel-footer{border-top:0}.panel-group .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid #ddd}.panel-default{border-color:#ddd}.panel-default>.panel-heading{color:#333;background-color:#f5f5f5;border-color:#ddd}.panel-default>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ddd}.panel-default>.panel-heading .badge{color:#f5f5f5;background-color:#333}.panel-default>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ddd}.panel-primary{border-color:#337ab7}.panel-primary>.panel-heading{color:#fff;background-color:#337ab7;border-color:#337ab7}.panel-primary>.panel-heading+.panel-collapse>.panel-body{border-top-color:#337ab7}.panel-primary>.panel-heading .badge{color:#337ab7;background-color:#fff}.panel-primary>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#337ab7}.panel-success{border-color:#d6e9c6}.panel-success>.panel-heading{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}.panel-success>.panel-heading+.panel-collapse>.panel-body{border-top-color:#d6e9c6}.panel-success>.panel-heading .badge{color:#dff0d8;background-color:#3c763d}.panel-success>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#d6e9c6}.panel-info{border-color:#bce8f1}.panel-info>.panel-heading{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}.panel-info>.panel-heading+.panel-collapse>.panel-body{border-top-color:#bce8f1}.panel-info>.panel-heading .badge{color:#d9edf7;background-color:#31708f}.panel-info>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#bce8f1}.panel-warning{border-color:#faebcc}.panel-warning>.panel-heading{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}.panel-warning>.panel-heading+.panel-collapse>.panel-body{border-top-color:#faebcc}.panel-warning>.panel-heading .badge{color:#fcf8e3;background-color:#8a6d3b}.panel-warning>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#faebcc}.panel-danger{border-color:#ebccd1}.panel-danger>.panel-heading{color:#a94442;background-color:#f2dede;border-color:#ebccd1}.panel-danger>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ebccd1}.panel-danger>.panel-heading .badge{color:#f2dede;background-color:#a94442}.panel-danger>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ebccd1}.embed-responsive{position:relative;display:block;height:0;padding:0;overflow:hidden}.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive-16by9{padding-bottom:56.25%}.embed-responsive-4by3{padding-bottom:75%}.well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.05);box-shadow:inset 0 1px 1px rgba(0,0,0,.05)}.well blockquote{border-color:#ddd;border-color:rgba(0,0,0,.15)}.well-lg{padding:24px;border-radius:6px}.well-sm{padding:9px;border-radius:3px}.close{float:right;font-size:21px;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;filter:alpha(opacity=20);opacity:.2}.close:focus,.close:hover{color:#000;text-decoration:none;cursor:pointer;filter:alpha(opacity=50);opacity:.5}button.close{-webkit-appearance:none;padding:0;cursor:pointer;background:0 0;border:0}.modal-open{overflow:hidden}.modal{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;display:none;overflow:hidden;-webkit-overflow-scrolling:touch;outline:0}.modal.fade .modal-dialog{-webkit-transition:-webkit-transform .3s ease-out;-o-transition:-o-transform .3s ease-out;transition:transform .3s ease-out;-webkit-transform:translate(0,-25%);-ms-transform:translate(0,-25%);-o-transform:translate(0,-25%);transform:translate(0,-25%)}.modal.in .modal-dialog{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);-o-transform:translate(0,0);transform:translate(0,0)}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal-dialog{position:relative;width:auto;margin:10px}.modal-content{position:relative;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #999;border:1px solid rgba(0,0,0,.2);border-radius:6px;outline:0;-webkit-box-shadow:0 3px 9px rgba(0,0,0,.5);box-shadow:0 3px 9px rgba(0,0,0,.5)}.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000}.modal-backdrop.fade{filter:alpha(opacity=0);opacity:0}.modal-backdrop.in{filter:alpha(opacity=50);opacity:.5}.modal-header{padding:15px;border-bottom:1px solid #e5e5e5}.modal-header .close{margin-top:-2px}.modal-title{margin:0;line-height:1.42857143}.modal-body{position:relative;padding:15px}.modal-footer{padding:15px;text-align:right;border-top:1px solid #e5e5e5}.modal-footer .btn+.btn{margin-bottom:0;margin-left:5px}.modal-footer .btn-group .btn+.btn{margin-left:-1px}.modal-footer .btn-block+.btn-block{margin-left:0}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:768px){.modal-dialog{width:600px;margin:30px auto}.modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,.5);box-shadow:0 5px 15px rgba(0,0,0,.5)}.modal-sm{width:300px}}@media (min-width:992px){.modal-lg{width:900px}}.tooltip{position:absolute;z-index:1070;display:block;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:12px;font-style:normal;font-weight:400;line-height:1.42857143;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;word-wrap:normal;white-space:normal;filter:alpha(opacity=0);opacity:0;line-break:auto}.tooltip.in{filter:alpha(opacity=90);opacity:.9}.tooltip.top{padding:5px 0;margin-top:-3px}.tooltip.right{padding:0 5px;margin-left:3px}.tooltip.bottom{padding:5px 0;margin-top:3px}.tooltip.left{padding:0 5px;margin-left:-3px}.tooltip-inner{max-width:200px;padding:3px 8px;color:#fff;text-align:center;background-color:#000;border-radius:4px}.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-left .tooltip-arrow{right:5px;bottom:0;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-right .tooltip-arrow{bottom:0;left:5px;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-width:5px 5px 5px 0;border-right-color:#000}.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-width:5px 0 5px 5px;border-left-color:#000}.tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-left .tooltip-arrow{top:0;right:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-right .tooltip-arrow{top:0;left:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.popover{position:absolute;top:0;left:0;z-index:1060;display:none;max-width:276px;padding:1px;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;font-style:normal;font-weight:400;line-height:1.42857143;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;word-wrap:normal;white-space:normal;background-color:#fff;-webkit-background-clip:padding-box;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.2);border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,.2);box-shadow:0 5px 10px rgba(0,0,0,.2);line-break:auto}.popover.top{margin-top:-10px}.popover.right{margin-left:10px}.popover.bottom{margin-top:10px}.popover.left{margin-left:-10px}.popover-title{padding:8px 14px;margin:0;font-size:14px;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-radius:5px 5px 0 0}.popover-content{padding:9px 14px}.popover>.arrow,.popover>.arrow:after{position:absolute;display:block;width:0;height:0;border-color:transparent;border-style:solid}.popover>.arrow{border-width:11px}.popover>.arrow:after{content:"";border-width:10px}.popover.top>.arrow{bottom:-11px;left:50%;margin-left:-11px;border-top-color:#999;border-top-color:rgba(0,0,0,.25);border-bottom-width:0}.popover.top>.arrow:after{bottom:1px;margin-left:-10px;content:" ";border-top-color:#fff;border-bottom-width:0}.popover.right>.arrow{top:50%;left:-11px;margin-top:-11px;border-right-color:#999;border-right-color:rgba(0,0,0,.25);border-left-width:0}.popover.right>.arrow:after{bottom:-10px;left:1px;content:" ";border-right-color:#fff;border-left-width:0}.popover.bottom>.arrow{top:-11px;left:50%;margin-left:-11px;border-top-width:0;border-bottom-color:#999;border-bottom-color:rgba(0,0,0,.25)}.popover.bottom>.arrow:after{top:1px;margin-left:-10px;content:" ";border-top-width:0;border-bottom-color:#fff}.popover.left>.arrow{top:50%;right:-11px;margin-top:-11px;border-right-width:0;border-left-color:#999;border-left-color:rgba(0,0,0,.25)}.popover.left>.arrow:after{right:1px;bottom:-10px;content:" ";border-right-width:0;border-left-color:#fff}.carousel{position:relative}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-inner>.item{position:relative;display:none;-webkit-transition:.6s ease-in-out left;-o-transition:.6s ease-in-out left;transition:.6s ease-in-out left}.carousel-inner>.item>a>img,.carousel-inner>.item>img{line-height:1}@media all and (transform-3d),(-webkit-transform-3d){.carousel-inner>.item{-webkit-transition:-webkit-transform .6s ease-in-out;-o-transition:-o-transform .6s ease-in-out;transition:transform .6s ease-in-out;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000px;perspective:1000px}.carousel-inner>.item.active.right,.carousel-inner>.item.next{left:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}.carousel-inner>.item.active.left,.carousel-inner>.item.prev{left:0;-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}.carousel-inner>.item.active,.carousel-inner>.item.next.left,.carousel-inner>.item.prev.right{left:0;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block}.carousel-inner>.active{left:0}.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}.carousel-inner>.next{left:100%}.carousel-inner>.prev{left:-100%}.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}.carousel-inner>.active.left{left:-100%}.carousel-inner>.active.right{left:100%}.carousel-control{position:absolute;top:0;bottom:0;left:0;width:15%;font-size:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6);background-color:rgba(0,0,0,0);filter:alpha(opacity=50);opacity:.5}.carousel-control.left{background-image:-webkit-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,.0001)));background-image:linear-gradient(to right,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);background-repeat:repeat-x}.carousel-control.right{right:0;left:auto;background-image:-webkit-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.0001)),to(rgba(0,0,0,.5)));background-image:linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);background-repeat:repeat-x}.carousel-control:focus,.carousel-control:hover{color:#fff;text-decoration:none;filter:alpha(opacity=90);outline:0;opacity:.9}.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{position:absolute;top:50%;z-index:5;display:inline-block;margin-top:-10px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{left:50%;margin-left:-10px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{right:50%;margin-right:-10px}.carousel-control .icon-next,.carousel-control .icon-prev{width:20px;height:20px;font-family:serif;line-height:1}.carousel-control .icon-prev:before{content:'\2039'}.carousel-control .icon-next:before{content:'\203a'}.carousel-indicators{position:absolute;bottom:10px;left:50%;z-index:15;width:60%;padding-left:0;margin-left:-30%;text-align:center;list-style:none}.carousel-indicators li{display:inline-block;width:10px;height:10px;margin:1px;text-indent:-999px;cursor:pointer;background-color:#000\9;background-color:rgba(0,0,0,0);border:1px solid #fff;border-radius:10px}.carousel-indicators .active{width:12px;height:12px;margin:0;background-color:#fff}.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6)}.carousel-caption .btn{text-shadow:none}@media screen and (min-width:768px){.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{width:30px;height:30px;margin-top:-10px;font-size:30px}.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{margin-left:-10px}.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{margin-right:-10px}.carousel-caption{right:20%;left:20%;padding-bottom:30px}.carousel-indicators{bottom:20px}}.btn-group-vertical>.btn-group:after,.btn-group-vertical>.btn-group:before,.btn-toolbar:after,.btn-toolbar:before,.clearfix:after,.clearfix:before,.container-fluid:after,.container-fluid:before,.container:after,.container:before,.dl-horizontal dd:after,.dl-horizontal dd:before,.form-horizontal .form-group:after,.form-horizontal .form-group:before,.modal-footer:after,.modal-footer:before,.modal-header:after,.modal-header:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.pager:after,.pager:before,.panel-body:after,.panel-body:before,.row:after,.row:before{display:table;content:" "}.btn-group-vertical>.btn-group:after,.btn-toolbar:after,.clearfix:after,.container-fluid:after,.container:after,.dl-horizontal dd:after,.form-horizontal .form-group:after,.modal-footer:after,.modal-header:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.pager:after,.panel-body:after,.row:after{clear:both}.center-block{display:block;margin-right:auto;margin-left:auto}.pull-right{float:right!important}.pull-left{float:left!important}.hide{display:none!important}.show{display:block!important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.hidden{display:none!important}.affix{position:fixed}@-ms-viewport{width:device-width}.visible-lg,.visible-md,.visible-sm,.visible-xs{display:none!important}.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block{display:none!important}@media (max-width:767px){.visible-xs{display:block!important}table.visible-xs{display:table!important}tr.visible-xs{display:table-row!important}td.visible-xs,th.visible-xs{display:table-cell!important}}@media (max-width:767px){.visible-xs-block{display:block!important}}@media (max-width:767px){.visible-xs-inline{display:inline!important}}@media (max-width:767px){.visible-xs-inline-block{display:inline-block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm{display:block!important}table.visible-sm{display:table!important}tr.visible-sm{display:table-row!important}td.visible-sm,th.visible-sm{display:table-cell!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-block{display:block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline{display:inline!important}}@media (min-width:768px) and (max-width:991px){.visible-sm-inline-block{display:inline-block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block!important}table.visible-md{display:table!important}tr.visible-md{display:table-row!important}td.visible-md,th.visible-md{display:table-cell!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-block{display:block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline{display:inline!important}}@media (min-width:992px) and (max-width:1199px){.visible-md-inline-block{display:inline-block!important}}@media (min-width:1200px){.visible-lg{display:block!important}table.visible-lg{display:table!important}tr.visible-lg{display:table-row!important}td.visible-lg,th.visible-lg{display:table-cell!important}}@media (min-width:1200px){.visible-lg-block{display:block!important}}@media (min-width:1200px){.visible-lg-inline{display:inline!important}}@media (min-width:1200px){.visible-lg-inline-block{display:inline-block!important}}@media (max-width:767px){.hidden-xs{display:none!important}}@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none!important}}@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none!important}}@media (min-width:1200px){.hidden-lg{display:none!important}}.visible-print{display:none!important}@media print{.visible-print{display:block!important}table.visible-print{display:table!important}tr.visible-print{display:table-row!important}td.visible-print,th.visible-print{display:table-cell!important}}.visible-print-block{display:none!important}@media print{.visible-print-block{display:block!important}}.visible-print-inline{display:none!important}@media print{.visible-print-inline{display:inline!important}}.visible-print-inline-block{display:none!important}@media print{.visible-print-inline-block{display:inline-block!important}}@media print{.hidden-print{display:none!important}}
 /*# sourceMappingURL=bootstrap.min.css.map */


/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */@font-face{font-family:'FontAwesome';src:url('./fonts/fontawesome-webfont.eot?v=4.7.0');src:url('./fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'),url('./fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'),url('./fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'),url('./fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'),url('./fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');font-weight:normal;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-lg{font-size:1.33333333em;line-height:.75em;vertical-align:-15%}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-fw{width:1.28571429em;text-align:center}.fa-ul{padding-left:0;margin-left:2.14285714em;list-style-type:none}.fa-ul>li{position:relative}.fa-li{position:absolute;left:-2.14285714em;width:2.14285714em;top:.14285714em;text-align:center}.fa-li.fa-lg{left:-1.85714286em}.fa-border{padding:.2em .25em .15em;border:solid .08em #eee;border-radius:.1em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left{margin-right:.3em}.fa.fa-pull-right{margin-left:.3em}.pull-right{float:right}.pull-left{float:left}.fa.pull-left{margin-right:.3em}.fa.pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}.fa-rotate-90{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";-webkit-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";-webkit-transform:scale(-1, 1);-ms-transform:scale(-1, 1);transform:scale(-1, 1)}.fa-flip-vertical{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";-webkit-transform:scale(1, -1);-ms-transform:scale(1, -1);transform:scale(1, -1)}:root .fa-rotate-90,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-flip-horizontal,:root .fa-flip-vertical{filter:none}.fa-stack{position:relative;display:inline-block;width:2em;height:2em;line-height:2em;vertical-align:middle}.fa-stack-1x,.fa-stack-2x{position:absolute;left:0;width:100%;text-align:center}.fa-stack-1x{line-height:inherit}.fa-stack-2x{font-size:2em}.fa-inverse{color:#fff}.fa-glass:before{content:"\f000"}.fa-music:before{content:"\f001"}.fa-search:before{content:"\f002"}.fa-envelope-o:before{content:"\f003"}.fa-heart:before{content:"\f004"}.fa-star:before{content:"\f005"}.fa-star-o:before{content:"\f006"}.fa-user:before{content:"\f007"}.fa-film:before{content:"\f008"}.fa-th-large:before{content:"\f009"}.fa-th:before{content:"\f00a"}.fa-th-list:before{content:"\f00b"}.fa-check:before{content:"\f00c"}.fa-remove:before,.fa-close:before,.fa-times:before{content:"\f00d"}.fa-search-plus:before{content:"\f00e"}.fa-search-minus:before{content:"\f010"}.fa-power-off:before{content:"\f011"}.fa-signal:before{content:"\f012"}.fa-gear:before,.fa-cog:before{content:"\f013"}.fa-trash-o:before{content:"\f014"}.fa-home:before{content:"\f015"}.fa-file-o:before{content:"\f016"}.fa-clock-o:before{content:"\f017"}.fa-road:before{content:"\f018"}.fa-download:before{content:"\f019"}.fa-arrow-circle-o-down:before{content:"\f01a"}.fa-arrow-circle-o-up:before{content:"\f01b"}.fa-inbox:before{content:"\f01c"}.fa-play-circle-o:before{content:"\f01d"}.fa-rotate-right:before,.fa-repeat:before{content:"\f01e"}.fa-refresh:before{content:"\f021"}.fa-list-alt:before{content:"\f022"}.fa-lock:before{content:"\f023"}.fa-flag:before{content:"\f024"}.fa-headphones:before{content:"\f025"}.fa-volume-off:before{content:"\f026"}.fa-volume-down:before{content:"\f027"}.fa-volume-up:before{content:"\f028"}.fa-qrcode:before{content:"\f029"}.fa-barcode:before{content:"\f02a"}.fa-tag:before{content:"\f02b"}.fa-tags:before{content:"\f02c"}.fa-book:before{content:"\f02d"}.fa-bookmark:before{content:"\f02e"}.fa-print:before{content:"\f02f"}.fa-camera:before{content:"\f030"}.fa-font:before{content:"\f031"}.fa-bold:before{content:"\f032"}.fa-italic:before{content:"\f033"}.fa-text-height:before{content:"\f034"}.fa-text-width:before{content:"\f035"}.fa-align-left:before{content:"\f036"}.fa-align-center:before{content:"\f037"}.fa-align-right:before{content:"\f038"}.fa-align-justify:before{content:"\f039"}.fa-list:before{content:"\f03a"}.fa-dedent:before,.fa-outdent:before{content:"\f03b"}.fa-indent:before{content:"\f03c"}.fa-video-camera:before{content:"\f03d"}.fa-photo:before,.fa-image:before,.fa-picture-o:before{content:"\f03e"}.fa-pencil:before{content:"\f040"}.fa-map-marker:before{content:"\f041"}.fa-adjust:before{content:"\f042"}.fa-tint:before{content:"\f043"}.fa-edit:before,.fa-pencil-square-o:before{content:"\f044"}.fa-share-square-o:before{content:"\f045"}.fa-check-square-o:before{content:"\f046"}.fa-arrows:before{content:"\f047"}.fa-step-backward:before{content:"\f048"}.fa-fast-backward:before{content:"\f049"}.fa-backward:before{content:"\f04a"}.fa-play:before{content:"\f04b"}.fa-pause:before{content:"\f04c"}.fa-stop:before{content:"\f04d"}.fa-forward:before{content:"\f04e"}.fa-fast-forward:before{content:"\f050"}.fa-step-forward:before{content:"\f051"}.fa-eject:before{content:"\f052"}.fa-chevron-left:before{content:"\f053"}.fa-chevron-right:before{content:"\f054"}.fa-plus-circle:before{content:"\f055"}.fa-minus-circle:before{content:"\f056"}.fa-times-circle:before{content:"\f057"}.fa-check-circle:before{content:"\f058"}.fa-question-circle:before{content:"\f059"}.fa-info-circle:before{content:"\f05a"}.fa-crosshairs:before{content:"\f05b"}.fa-times-circle-o:before{content:"\f05c"}.fa-check-circle-o:before{content:"\f05d"}.fa-ban:before{content:"\f05e"}.fa-arrow-left:before{content:"\f060"}.fa-arrow-right:before{content:"\f061"}.fa-arrow-up:before{content:"\f062"}.fa-arrow-down:before{content:"\f063"}.fa-mail-forward:before,.fa-share:before{content:"\f064"}.fa-expand:before{content:"\f065"}.fa-compress:before{content:"\f066"}.fa-plus:before{content:"\f067"}.fa-minus:before{content:"\f068"}.fa-asterisk:before{content:"\f069"}.fa-exclamation-circle:before{content:"\f06a"}.fa-gift:before{content:"\f06b"}.fa-leaf:before{content:"\f06c"}.fa-fire:before{content:"\f06d"}.fa-eye:before{content:"\f06e"}.fa-eye-slash:before{content:"\f070"}.fa-warning:before,.fa-exclamation-triangle:before{content:"\f071"}.fa-plane:before{content:"\f072"}.fa-calendar:before{content:"\f073"}.fa-random:before{content:"\f074"}.fa-comment:before{content:"\f075"}.fa-magnet:before{content:"\f076"}.fa-chevron-up:before{content:"\f077"}.fa-chevron-down:before{content:"\f078"}.fa-retweet:before{content:"\f079"}.fa-shopping-cart:before{content:"\f07a"}.fa-folder:before{content:"\f07b"}.fa-folder-open:before{content:"\f07c"}.fa-arrows-v:before{content:"\f07d"}.fa-arrows-h:before{content:"\f07e"}.fa-bar-chart-o:before,.fa-bar-chart:before{content:"\f080"}.fa-twitter-square:before{content:"\f081"}.fa-facebook-square:before{content:"\f082"}.fa-camera-retro:before{content:"\f083"}.fa-key:before{content:"\f084"}.fa-gears:before,.fa-cogs:before{content:"\f085"}.fa-comments:before{content:"\f086"}.fa-thumbs-o-up:before{content:"\f087"}.fa-thumbs-o-down:before{content:"\f088"}.fa-star-half:before{content:"\f089"}.fa-heart-o:before{content:"\f08a"}.fa-sign-out:before{content:"\f08b"}.fa-linkedin-square:before{content:"\f08c"}.fa-thumb-tack:before{content:"\f08d"}.fa-external-link:before{content:"\f08e"}.fa-sign-in:before{content:"\f090"}.fa-trophy:before{content:"\f091"}.fa-github-square:before{content:"\f092"}.fa-upload:before{content:"\f093"}.fa-lemon-o:before{content:"\f094"}.fa-phone:before{content:"\f095"}.fa-square-o:before{content:"\f096"}.fa-bookmark-o:before{content:"\f097"}.fa-phone-square:before{content:"\f098"}.fa-twitter:before{content:"\f099"}.fa-facebook-f:before,.fa-facebook:before{content:"\f09a"}.fa-github:before{content:"\f09b"}.fa-unlock:before{content:"\f09c"}.fa-credit-card:before{content:"\f09d"}.fa-feed:before,.fa-rss:before{content:"\f09e"}.fa-hdd-o:before{content:"\f0a0"}.fa-bullhorn:before{content:"\f0a1"}.fa-bell:before{content:"\f0f3"}.fa-certificate:before{content:"\f0a3"}.fa-hand-o-right:before{content:"\f0a4"}.fa-hand-o-left:before{content:"\f0a5"}.fa-hand-o-up:before{content:"\f0a6"}.fa-hand-o-down:before{content:"\f0a7"}.fa-arrow-circle-left:before{content:"\f0a8"}.fa-arrow-circle-right:before{content:"\f0a9"}.fa-arrow-circle-up:before{content:"\f0aa"}.fa-arrow-circle-down:before{content:"\f0ab"}.fa-globe:before{content:"\f0ac"}.fa-wrench:before{content:"\f0ad"}.fa-tasks:before{content:"\f0ae"}.fa-filter:before{content:"\f0b0"}.fa-briefcase:before{content:"\f0b1"}.fa-arrows-alt:before{content:"\f0b2"}.fa-group:before,.fa-users:before{content:"\f0c0"}.fa-chain:before,.fa-link:before{content:"\f0c1"}.fa-cloud:before{content:"\f0c2"}.fa-flask:before{content:"\f0c3"}.fa-cut:before,.fa-scissors:before{content:"\f0c4"}.fa-copy:before,.fa-files-o:before{content:"\f0c5"}.fa-paperclip:before{content:"\f0c6"}.fa-save:before,.fa-floppy-o:before{content:"\f0c7"}.fa-square:before{content:"\f0c8"}.fa-navicon:before,.fa-reorder:before,.fa-bars:before{content:"\f0c9"}.fa-list-ul:before{content:"\f0ca"}.fa-list-ol:before{content:"\f0cb"}.fa-strikethrough:before{content:"\f0cc"}.fa-underline:before{content:"\f0cd"}.fa-table:before{content:"\f0ce"}.fa-magic:before{content:"\f0d0"}.fa-truck:before{content:"\f0d1"}.fa-pinterest:before{content:"\f0d2"}.fa-pinterest-square:before{content:"\f0d3"}.fa-google-plus-square:before{content:"\f0d4"}.fa-google-plus:before{content:"\f0d5"}.fa-money:before{content:"\f0d6"}.fa-caret-down:before{content:"\f0d7"}.fa-caret-up:before{content:"\f0d8"}.fa-caret-left:before{content:"\f0d9"}.fa-caret-right:before{content:"\f0da"}.fa-columns:before{content:"\f0db"}.fa-unsorted:before,.fa-sort:before{content:"\f0dc"}.fa-sort-down:before,.fa-sort-desc:before{content:"\f0dd"}.fa-sort-up:before,.fa-sort-asc:before{content:"\f0de"}.fa-envelope:before{content:"\f0e0"}.fa-linkedin:before{content:"\f0e1"}.fa-rotate-left:before,.fa-undo:before{content:"\f0e2"}.fa-legal:before,.fa-gavel:before{content:"\f0e3"}.fa-dashboard:before,.fa-tachometer:before{content:"\f0e4"}.fa-comment-o:before{content:"\f0e5"}.fa-comments-o:before{content:"\f0e6"}.fa-flash:before,.fa-bolt:before{content:"\f0e7"}.fa-sitemap:before{content:"\f0e8"}.fa-umbrella:before{content:"\f0e9"}.fa-paste:before,.fa-clipboard:before{content:"\f0ea"}.fa-lightbulb-o:before{content:"\f0eb"}.fa-exchange:before{content:"\f0ec"}.fa-cloud-download:before{content:"\f0ed"}.fa-cloud-upload:before{content:"\f0ee"}.fa-user-md:before{content:"\f0f0"}.fa-stethoscope:before{content:"\f0f1"}.fa-suitcase:before{content:"\f0f2"}.fa-bell-o:before{content:"\f0a2"}.fa-coffee:before{content:"\f0f4"}.fa-cutlery:before{content:"\f0f5"}.fa-file-text-o:before{content:"\f0f6"}.fa-building-o:before{content:"\f0f7"}.fa-hospital-o:before{content:"\f0f8"}.fa-ambulance:before{content:"\f0f9"}.fa-medkit:before{content:"\f0fa"}.fa-fighter-jet:before{content:"\f0fb"}.fa-beer:before{content:"\f0fc"}.fa-h-square:before{content:"\f0fd"}.fa-plus-square:before{content:"\f0fe"}.fa-angle-double-left:before{content:"\f100"}.fa-angle-double-right:before{content:"\f101"}.fa-angle-double-up:before{content:"\f102"}.fa-angle-double-down:before{content:"\f103"}.fa-angle-left:before{content:"\f104"}.fa-angle-right:before{content:"\f105"}.fa-angle-up:before{content:"\f106"}.fa-angle-down:before{content:"\f107"}.fa-desktop:before{content:"\f108"}.fa-laptop:before{content:"\f109"}.fa-tablet:before{content:"\f10a"}.fa-mobile-phone:before,.fa-mobile:before{content:"\f10b"}.fa-circle-o:before{content:"\f10c"}.fa-quote-left:before{content:"\f10d"}.fa-quote-right:before{content:"\f10e"}.fa-spinner:before{content:"\f110"}.fa-circle:before{content:"\f111"}.fa-mail-reply:before,.fa-reply:before{content:"\f112"}.fa-github-alt:before{content:"\f113"}.fa-folder-o:before{content:"\f114"}.fa-folder-open-o:before{content:"\f115"}.fa-smile-o:before{content:"\f118"}.fa-frown-o:before{content:"\f119"}.fa-meh-o:before{content:"\f11a"}.fa-gamepad:before{content:"\f11b"}.fa-keyboard-o:before{content:"\f11c"}.fa-flag-o:before{content:"\f11d"}.fa-flag-checkered:before{content:"\f11e"}.fa-terminal:before{content:"\f120"}.fa-code:before{content:"\f121"}.fa-mail-reply-all:before,.fa-reply-all:before{content:"\f122"}.fa-star-half-empty:before,.fa-star-half-full:before,.fa-star-half-o:before{content:"\f123"}.fa-location-arrow:before{content:"\f124"}.fa-crop:before{content:"\f125"}.fa-code-fork:before{content:"\f126"}.fa-unlink:before,.fa-chain-broken:before{content:"\f127"}.fa-question:before{content:"\f128"}.fa-info:before{content:"\f129"}.fa-exclamation:before{content:"\f12a"}.fa-superscript:before{content:"\f12b"}.fa-subscript:before{content:"\f12c"}.fa-eraser:before{content:"\f12d"}.fa-puzzle-piece:before{content:"\f12e"}.fa-microphone:before{content:"\f130"}.fa-microphone-slash:before{content:"\f131"}.fa-shield:before{content:"\f132"}.fa-calendar-o:before{content:"\f133"}.fa-fire-extinguisher:before{content:"\f134"}.fa-rocket:before{content:"\f135"}.fa-maxcdn:before{content:"\f136"}.fa-chevron-circle-left:before{content:"\f137"}.fa-chevron-circle-right:before{content:"\f138"}.fa-chevron-circle-up:before{content:"\f139"}.fa-chevron-circle-down:before{content:"\f13a"}.fa-html5:before{content:"\f13b"}.fa-css3:before{content:"\f13c"}.fa-anchor:before{content:"\f13d"}.fa-unlock-alt:before{content:"\f13e"}.fa-bullseye:before{content:"\f140"}.fa-ellipsis-h:before{content:"\f141"}.fa-ellipsis-v:before{content:"\f142"}.fa-rss-square:before{content:"\f143"}.fa-play-circle:before{content:"\f144"}.fa-ticket:before{content:"\f145"}.fa-minus-square:before{content:"\f146"}.fa-minus-square-o:before{content:"\f147"}.fa-level-up:before{content:"\f148"}.fa-level-down:before{content:"\f149"}.fa-check-square:before{content:"\f14a"}.fa-pencil-square:before{content:"\f14b"}.fa-external-link-square:before{content:"\f14c"}.fa-share-square:before{content:"\f14d"}.fa-compass:before{content:"\f14e"}.fa-toggle-down:before,.fa-caret-square-o-down:before{content:"\f150"}.fa-toggle-up:before,.fa-caret-square-o-up:before{content:"\f151"}.fa-toggle-right:before,.fa-caret-square-o-right:before{content:"\f152"}.fa-euro:before,.fa-eur:before{content:"\f153"}.fa-gbp:before{content:"\f154"}.fa-dollar:before,.fa-usd:before{content:"\f155"}.fa-rupee:before,.fa-inr:before{content:"\f156"}.fa-cny:before,.fa-rmb:before,.fa-yen:before,.fa-jpy:before{content:"\f157"}.fa-ruble:before,.fa-rouble:before,.fa-rub:before{content:"\f158"}.fa-won:before,.fa-krw:before{content:"\f159"}.fa-bitcoin:before,.fa-btc:before{content:"\f15a"}.fa-file:before{content:"\f15b"}.fa-file-text:before{content:"\f15c"}.fa-sort-alpha-asc:before{content:"\f15d"}.fa-sort-alpha-desc:before{content:"\f15e"}.fa-sort-amount-asc:before{content:"\f160"}.fa-sort-amount-desc:before{content:"\f161"}.fa-sort-numeric-asc:before{content:"\f162"}.fa-sort-numeric-desc:before{content:"\f163"}.fa-thumbs-up:before{content:"\f164"}.fa-thumbs-down:before{content:"\f165"}.fa-youtube-square:before{content:"\f166"}.fa-youtube:before{content:"\f167"}.fa-xing:before{content:"\f168"}.fa-xing-square:before{content:"\f169"}.fa-youtube-play:before{content:"\f16a"}.fa-dropbox:before{content:"\f16b"}.fa-stack-overflow:before{content:"\f16c"}.fa-instagram:before{content:"\f16d"}.fa-flickr:before{content:"\f16e"}.fa-adn:before{content:"\f170"}.fa-bitbucket:before{content:"\f171"}.fa-bitbucket-square:before{content:"\f172"}.fa-tumblr:before{content:"\f173"}.fa-tumblr-square:before{content:"\f174"}.fa-long-arrow-down:before{content:"\f175"}.fa-long-arrow-up:before{content:"\f176"}.fa-long-arrow-left:before{content:"\f177"}.fa-long-arrow-right:before{content:"\f178"}.fa-apple:before{content:"\f179"}.fa-windows:before{content:"\f17a"}.fa-android:before{content:"\f17b"}.fa-linux:before{content:"\f17c"}.fa-dribbble:before{content:"\f17d"}.fa-skype:before{content:"\f17e"}.fa-foursquare:before{content:"\f180"}.fa-trello:before{content:"\f181"}.fa-female:before{content:"\f182"}.fa-male:before{content:"\f183"}.fa-gittip:before,.fa-gratipay:before{content:"\f184"}.fa-sun-o:before{content:"\f185"}.fa-moon-o:before{content:"\f186"}.fa-archive:before{content:"\f187"}.fa-bug:before{content:"\f188"}.fa-vk:before{content:"\f189"}.fa-weibo:before{content:"\f18a"}.fa-renren:before{content:"\f18b"}.fa-pagelines:before{content:"\f18c"}.fa-stack-exchange:before{content:"\f18d"}.fa-arrow-circle-o-right:before{content:"\f18e"}.fa-arrow-circle-o-left:before{content:"\f190"}.fa-toggle-left:before,.fa-caret-square-o-left:before{content:"\f191"}.fa-dot-circle-o:before{content:"\f192"}.fa-wheelchair:before{content:"\f193"}.fa-vimeo-square:before{content:"\f194"}.fa-turkish-lira:before,.fa-try:before{content:"\f195"}.fa-plus-square-o:before{content:"\f196"}.fa-space-shuttle:before{content:"\f197"}.fa-slack:before{content:"\f198"}.fa-envelope-square:before{content:"\f199"}.fa-wordpress:before{content:"\f19a"}.fa-openid:before{content:"\f19b"}.fa-institution:before,.fa-bank:before,.fa-university:before{content:"\f19c"}.fa-mortar-board:before,.fa-graduation-cap:before{content:"\f19d"}.fa-yahoo:before{content:"\f19e"}.fa-google:before{content:"\f1a0"}.fa-reddit:before{content:"\f1a1"}.fa-reddit-square:before{content:"\f1a2"}.fa-stumbleupon-circle:before{content:"\f1a3"}.fa-stumbleupon:before{content:"\f1a4"}.fa-delicious:before{content:"\f1a5"}.fa-digg:before{content:"\f1a6"}.fa-pied-piper-pp:before{content:"\f1a7"}.fa-pied-piper-alt:before{content:"\f1a8"}.fa-drupal:before{content:"\f1a9"}.fa-joomla:before{content:"\f1aa"}.fa-language:before{content:"\f1ab"}.fa-fax:before{content:"\f1ac"}.fa-building:before{content:"\f1ad"}.fa-child:before{content:"\f1ae"}.fa-paw:before{content:"\f1b0"}.fa-spoon:before{content:"\f1b1"}.fa-cube:before{content:"\f1b2"}.fa-cubes:before{content:"\f1b3"}.fa-behance:before{content:"\f1b4"}.fa-behance-square:before{content:"\f1b5"}.fa-steam:before{content:"\f1b6"}.fa-steam-square:before{content:"\f1b7"}.fa-recycle:before{content:"\f1b8"}.fa-automobile:before,.fa-car:before{content:"\f1b9"}.fa-cab:before,.fa-taxi:before{content:"\f1ba"}.fa-tree:before{content:"\f1bb"}.fa-spotify:before{content:"\f1bc"}.fa-deviantart:before{content:"\f1bd"}.fa-soundcloud:before{content:"\f1be"}.fa-database:before{content:"\f1c0"}.fa-file-pdf-o:before{content:"\f1c1"}.fa-file-word-o:before{content:"\f1c2"}.fa-file-excel-o:before{content:"\f1c3"}.fa-file-powerpoint-o:before{content:"\f1c4"}.fa-file-photo-o:before,.fa-file-picture-o:before,.fa-file-image-o:before{content:"\f1c5"}.fa-file-zip-o:before,.fa-file-archive-o:before{content:"\f1c6"}.fa-file-sound-o:before,.fa-file-audio-o:before{content:"\f1c7"}.fa-file-movie-o:before,.fa-file-video-o:before{content:"\f1c8"}.fa-file-code-o:before{content:"\f1c9"}.fa-vine:before{content:"\f1ca"}.fa-codepen:before{content:"\f1cb"}.fa-jsfiddle:before{content:"\f1cc"}.fa-life-bouy:before,.fa-life-buoy:before,.fa-life-saver:before,.fa-support:before,.fa-life-ring:before{content:"\f1cd"}.fa-circle-o-notch:before{content:"\f1ce"}.fa-ra:before,.fa-resistance:before,.fa-rebel:before{content:"\f1d0"}.fa-ge:before,.fa-empire:before{content:"\f1d1"}.fa-git-square:before{content:"\f1d2"}.fa-git:before{content:"\f1d3"}.fa-y-combinator-square:before,.fa-yc-square:before,.fa-hacker-news:before{content:"\f1d4"}.fa-tencent-weibo:before{content:"\f1d5"}.fa-qq:before{content:"\f1d6"}.fa-wechat:before,.fa-weixin:before{content:"\f1d7"}.fa-send:before,.fa-paper-plane:before{content:"\f1d8"}.fa-send-o:before,.fa-paper-plane-o:before{content:"\f1d9"}.fa-history:before{content:"\f1da"}.fa-circle-thin:before{content:"\f1db"}.fa-header:before{content:"\f1dc"}.fa-paragraph:before{content:"\f1dd"}.fa-sliders:before{content:"\f1de"}.fa-share-alt:before{content:"\f1e0"}.fa-share-alt-square:before{content:"\f1e1"}.fa-bomb:before{content:"\f1e2"}.fa-soccer-ball-o:before,.fa-futbol-o:before{content:"\f1e3"}.fa-tty:before{content:"\f1e4"}.fa-binoculars:before{content:"\f1e5"}.fa-plug:before{content:"\f1e6"}.fa-slideshare:before{content:"\f1e7"}.fa-twitch:before{content:"\f1e8"}.fa-yelp:before{content:"\f1e9"}.fa-newspaper-o:before{content:"\f1ea"}.fa-wifi:before{content:"\f1eb"}.fa-calculator:before{content:"\f1ec"}.fa-paypal:before{content:"\f1ed"}.fa-google-wallet:before{content:"\f1ee"}.fa-cc-visa:before{content:"\f1f0"}.fa-cc-mastercard:before{content:"\f1f1"}.fa-cc-discover:before{content:"\f1f2"}.fa-cc-amex:before{content:"\f1f3"}.fa-cc-paypal:before{content:"\f1f4"}.fa-cc-stripe:before{content:"\f1f5"}.fa-bell-slash:before{content:"\f1f6"}.fa-bell-slash-o:before{content:"\f1f7"}.fa-trash:before{content:"\f1f8"}.fa-copyright:before{content:"\f1f9"}.fa-at:before{content:"\f1fa"}.fa-eyedropper:before{content:"\f1fb"}.fa-paint-brush:before{content:"\f1fc"}.fa-birthday-cake:before{content:"\f1fd"}.fa-area-chart:before{content:"\f1fe"}.fa-pie-chart:before{content:"\f200"}.fa-line-chart:before{content:"\f201"}.fa-lastfm:before{content:"\f202"}.fa-lastfm-square:before{content:"\f203"}.fa-toggle-off:before{content:"\f204"}.fa-toggle-on:before{content:"\f205"}.fa-bicycle:before{content:"\f206"}.fa-bus:before{content:"\f207"}.fa-ioxhost:before{content:"\f208"}.fa-angellist:before{content:"\f209"}.fa-cc:before{content:"\f20a"}.fa-shekel:before,.fa-sheqel:before,.fa-ils:before{content:"\f20b"}.fa-meanpath:before{content:"\f20c"}.fa-buysellads:before{content:"\f20d"}.fa-connectdevelop:before{content:"\f20e"}.fa-dashcube:before{content:"\f210"}.fa-forumbee:before{content:"\f211"}.fa-leanpub:before{content:"\f212"}.fa-sellsy:before{content:"\f213"}.fa-shirtsinbulk:before{content:"\f214"}.fa-simplybuilt:before{content:"\f215"}.fa-skyatlas:before{content:"\f216"}.fa-cart-plus:before{content:"\f217"}.fa-cart-arrow-down:before{content:"\f218"}.fa-diamond:before{content:"\f219"}.fa-ship:before{content:"\f21a"}.fa-user-secret:before{content:"\f21b"}.fa-motorcycle:before{content:"\f21c"}.fa-street-view:before{content:"\f21d"}.fa-heartbeat:before{content:"\f21e"}.fa-venus:before{content:"\f221"}.fa-mars:before{content:"\f222"}.fa-mercury:before{content:"\f223"}.fa-intersex:before,.fa-transgender:before{content:"\f224"}.fa-transgender-alt:before{content:"\f225"}.fa-venus-double:before{content:"\f226"}.fa-mars-double:before{content:"\f227"}.fa-venus-mars:before{content:"\f228"}.fa-mars-stroke:before{content:"\f229"}.fa-mars-stroke-v:before{content:"\f22a"}.fa-mars-stroke-h:before{content:"\f22b"}.fa-neuter:before{content:"\f22c"}.fa-genderless:before{content:"\f22d"}.fa-facebook-official:before{content:"\f230"}.fa-pinterest-p:before{content:"\f231"}.fa-whatsapp:before{content:"\f232"}.fa-server:before{content:"\f233"}.fa-user-plus:before{content:"\f234"}.fa-user-times:before{content:"\f235"}.fa-hotel:before,.fa-bed:before{content:"\f236"}.fa-viacoin:before{content:"\f237"}.fa-train:before{content:"\f238"}.fa-subway:before{content:"\f239"}.fa-medium:before{content:"\f23a"}.fa-yc:before,.fa-y-combinator:before{content:"\f23b"}.fa-optin-monster:before{content:"\f23c"}.fa-opencart:before{content:"\f23d"}.fa-expeditedssl:before{content:"\f23e"}.fa-battery-4:before,.fa-battery:before,.fa-battery-full:before{content:"\f240"}.fa-battery-3:before,.fa-battery-three-quarters:before{content:"\f241"}.fa-battery-2:before,.fa-battery-half:before{content:"\f242"}.fa-battery-1:before,.fa-battery-quarter:before{content:"\f243"}.fa-battery-0:before,.fa-battery-empty:before{content:"\f244"}.fa-mouse-pointer:before{content:"\f245"}.fa-i-cursor:before{content:"\f246"}.fa-object-group:before{content:"\f247"}.fa-object-ungroup:before{content:"\f248"}.fa-sticky-note:before{content:"\f249"}.fa-sticky-note-o:before{content:"\f24a"}.fa-cc-jcb:before{content:"\f24b"}.fa-cc-diners-club:before{content:"\f24c"}.fa-clone:before{content:"\f24d"}.fa-balance-scale:before{content:"\f24e"}.fa-hourglass-o:before{content:"\f250"}.fa-hourglass-1:before,.fa-hourglass-start:before{content:"\f251"}.fa-hourglass-2:before,.fa-hourglass-half:before{content:"\f252"}.fa-hourglass-3:before,.fa-hourglass-end:before{content:"\f253"}.fa-hourglass:before{content:"\f254"}.fa-hand-grab-o:before,.fa-hand-rock-o:before{content:"\f255"}.fa-hand-stop-o:before,.fa-hand-paper-o:before{content:"\f256"}.fa-hand-scissors-o:before{content:"\f257"}.fa-hand-lizard-o:before{content:"\f258"}.fa-hand-spock-o:before{content:"\f259"}.fa-hand-pointer-o:before{content:"\f25a"}.fa-hand-peace-o:before{content:"\f25b"}.fa-trademark:before{content:"\f25c"}.fa-registered:before{content:"\f25d"}.fa-creative-commons:before{content:"\f25e"}.fa-gg:before{content:"\f260"}.fa-gg-circle:before{content:"\f261"}.fa-tripadvisor:before{content:"\f262"}.fa-odnoklassniki:before{content:"\f263"}.fa-odnoklassniki-square:before{content:"\f264"}.fa-get-pocket:before{content:"\f265"}.fa-wikipedia-w:before{content:"\f266"}.fa-safari:before{content:"\f267"}.fa-chrome:before{content:"\f268"}.fa-firefox:before{content:"\f269"}.fa-opera:before{content:"\f26a"}.fa-internet-explorer:before{content:"\f26b"}.fa-tv:before,.fa-television:before{content:"\f26c"}.fa-contao:before{content:"\f26d"}.fa-500px:before{content:"\f26e"}.fa-amazon:before{content:"\f270"}.fa-calendar-plus-o:before{content:"\f271"}.fa-calendar-minus-o:before{content:"\f272"}.fa-calendar-times-o:before{content:"\f273"}.fa-calendar-check-o:before{content:"\f274"}.fa-industry:before{content:"\f275"}.fa-map-pin:before{content:"\f276"}.fa-map-signs:before{content:"\f277"}.fa-map-o:before{content:"\f278"}.fa-map:before{content:"\f279"}.fa-commenting:before{content:"\f27a"}.fa-commenting-o:before{content:"\f27b"}.fa-houzz:before{content:"\f27c"}.fa-vimeo:before{content:"\f27d"}.fa-black-tie:before{content:"\f27e"}.fa-fonticons:before{content:"\f280"}.fa-reddit-alien:before{content:"\f281"}.fa-edge:before{content:"\f282"}.fa-credit-card-alt:before{content:"\f283"}.fa-codiepie:before{content:"\f284"}.fa-modx:before{content:"\f285"}.fa-fort-awesome:before{content:"\f286"}.fa-usb:before{content:"\f287"}.fa-product-hunt:before{content:"\f288"}.fa-mixcloud:before{content:"\f289"}.fa-scribd:before{content:"\f28a"}.fa-pause-circle:before{content:"\f28b"}.fa-pause-circle-o:before{content:"\f28c"}.fa-stop-circle:before{content:"\f28d"}.fa-stop-circle-o:before{content:"\f28e"}.fa-shopping-bag:before{content:"\f290"}.fa-shopping-basket:before{content:"\f291"}.fa-hashtag:before{content:"\f292"}.fa-bluetooth:before{content:"\f293"}.fa-bluetooth-b:before{content:"\f294"}.fa-percent:before{content:"\f295"}.fa-gitlab:before{content:"\f296"}.fa-wpbeginner:before{content:"\f297"}.fa-wpforms:before{content:"\f298"}.fa-envira:before{content:"\f299"}.fa-universal-access:before{content:"\f29a"}.fa-wheelchair-alt:before{content:"\f29b"}.fa-question-circle-o:before{content:"\f29c"}.fa-blind:before{content:"\f29d"}.fa-audio-description:before{content:"\f29e"}.fa-volume-control-phone:before{content:"\f2a0"}.fa-braille:before{content:"\f2a1"}.fa-assistive-listening-systems:before{content:"\f2a2"}.fa-asl-interpreting:before,.fa-american-sign-language-interpreting:before{content:"\f2a3"}.fa-deafness:before,.fa-hard-of-hearing:before,.fa-deaf:before{content:"\f2a4"}.fa-glide:before{content:"\f2a5"}.fa-glide-g:before{content:"\f2a6"}.fa-signing:before,.fa-sign-language:before{content:"\f2a7"}.fa-low-vision:before{content:"\f2a8"}.fa-viadeo:before{content:"\f2a9"}.fa-viadeo-square:before{content:"\f2aa"}.fa-snapchat:before{content:"\f2ab"}.fa-snapchat-ghost:before{content:"\f2ac"}.fa-snapchat-square:before{content:"\f2ad"}.fa-pied-piper:before{content:"\f2ae"}.fa-first-order:before{content:"\f2b0"}.fa-yoast:before{content:"\f2b1"}.fa-themeisle:before{content:"\f2b2"}.fa-google-plus-circle:before,.fa-google-plus-official:before{content:"\f2b3"}.fa-fa:before,.fa-font-awesome:before{content:"\f2b4"}.fa-handshake-o:before{content:"\f2b5"}.fa-envelope-open:before{content:"\f2b6"}.fa-envelope-open-o:before{content:"\f2b7"}.fa-linode:before{content:"\f2b8"}.fa-address-book:before{content:"\f2b9"}.fa-address-book-o:before{content:"\f2ba"}.fa-vcard:before,.fa-address-card:before{content:"\f2bb"}.fa-vcard-o:before,.fa-address-card-o:before{content:"\f2bc"}.fa-user-circle:before{content:"\f2bd"}.fa-user-circle-o:before{content:"\f2be"}.fa-user-o:before{content:"\f2c0"}.fa-id-badge:before{content:"\f2c1"}.fa-drivers-license:before,.fa-id-card:before{content:"\f2c2"}.fa-drivers-license-o:before,.fa-id-card-o:before{content:"\f2c3"}.fa-quora:before{content:"\f2c4"}.fa-free-code-camp:before{content:"\f2c5"}.fa-telegram:before{content:"\f2c6"}.fa-thermometer-4:before,.fa-thermometer:before,.fa-thermometer-full:before{content:"\f2c7"}.fa-thermometer-3:before,.fa-thermometer-three-quarters:before{content:"\f2c8"}.fa-thermometer-2:before,.fa-thermometer-half:before{content:"\f2c9"}.fa-thermometer-1:before,.fa-thermometer-quarter:before{content:"\f2ca"}.fa-thermometer-0:before,.fa-thermometer-empty:before{content:"\f2cb"}.fa-shower:before{content:"\f2cc"}.fa-bathtub:before,.fa-s15:before,.fa-bath:before{content:"\f2cd"}.fa-podcast:before{content:"\f2ce"}.fa-window-maximize:before{content:"\f2d0"}.fa-window-minimize:before{content:"\f2d1"}.fa-window-restore:before{content:"\f2d2"}.fa-times-rectangle:before,.fa-window-close:before{content:"\f2d3"}.fa-times-rectangle-o:before,.fa-window-close-o:before{content:"\f2d4"}.fa-bandcamp:before{content:"\f2d5"}.fa-grav:before{content:"\f2d6"}.fa-etsy:before{content:"\f2d7"}.fa-imdb:before{content:"\f2d8"}.fa-ravelry:before{content:"\f2d9"}.fa-eercast:before{content:"\f2da"}.fa-microchip:before{content:"\f2db"}.fa-snowflake-o:before{content:"\f2dc"}.fa-superpowers:before{content:"\f2dd"}.fa-wpexplorer:before{content:"\f2de"}.fa-meetup:before{content:"\f2e0"}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}


@charset "UTF-8";/*!
  Ionicons, v2.0.0
  Created by Ben Sperry for the Ionic Framework, http://ionicons.com/
  https://twitter.com/benjsperry  https://twitter.com/ionicframework
  MIT License: https://github.com/driftyco/ionicons

  Android-style icons originally built by Google’s
  Material Design Icons: https://github.com/google/material-design-icons
  used under CC BY http://creativecommons.org/licenses/by/4.0/
  Modified icons to fit ionicon’s grid from original.
*/@font-face{font-family:"Ionicons";src:url("./fonts/ionicons.eot?v=2.0.0");src:url("./fonts/ionicons.eot?v=2.0.0#iefix") format("embedded-opentype"),url("./fonts/ionicons.ttf?v=2.0.0") format("truetype"),url("./fonts/ionicons.woff?v=2.0.0") format("woff"),url("./fonts/ionicons.svg?v=2.0.0#Ionicons") format("svg");font-weight:normal;font-style:normal}.ion,.ionicons,.ion-alert:before,.ion-alert-circled:before,.ion-android-add:before,.ion-android-add-circle:before,.ion-android-alarm-clock:before,.ion-android-alert:before,.ion-android-apps:before,.ion-android-archive:before,.ion-android-arrow-back:before,.ion-android-arrow-down:before,.ion-android-arrow-dropdown:before,.ion-android-arrow-dropdown-circle:before,.ion-android-arrow-dropleft:before,.ion-android-arrow-dropleft-circle:before,.ion-android-arrow-dropright:before,.ion-android-arrow-dropright-circle:before,.ion-android-arrow-dropup:before,.ion-android-arrow-dropup-circle:before,.ion-android-arrow-forward:before,.ion-android-arrow-up:before,.ion-android-attach:before,.ion-android-bar:before,.ion-android-bicycle:before,.ion-android-boat:before,.ion-android-bookmark:before,.ion-android-bulb:before,.ion-android-bus:before,.ion-android-calendar:before,.ion-android-call:before,.ion-android-camera:before,.ion-android-cancel:before,.ion-android-car:before,.ion-android-cart:before,.ion-android-chat:before,.ion-android-checkbox:before,.ion-android-checkbox-blank:before,.ion-android-checkbox-outline:before,.ion-android-checkbox-outline-blank:before,.ion-android-checkmark-circle:before,.ion-android-clipboard:before,.ion-android-close:before,.ion-android-cloud:before,.ion-android-cloud-circle:before,.ion-android-cloud-done:before,.ion-android-cloud-outline:before,.ion-android-color-palette:before,.ion-android-compass:before,.ion-android-contact:before,.ion-android-contacts:before,.ion-android-contract:before,.ion-android-create:before,.ion-android-delete:before,.ion-android-desktop:before,.ion-android-document:before,.ion-android-done:before,.ion-android-done-all:before,.ion-android-download:before,.ion-android-drafts:before,.ion-android-exit:before,.ion-android-expand:before,.ion-android-favorite:before,.ion-android-favorite-outline:before,.ion-android-film:before,.ion-android-folder:before,.ion-android-folder-open:before,.ion-android-funnel:before,.ion-android-globe:before,.ion-android-hand:before,.ion-android-hangout:before,.ion-android-happy:before,.ion-android-home:before,.ion-android-image:before,.ion-android-laptop:before,.ion-android-list:before,.ion-android-locate:before,.ion-android-lock:before,.ion-android-mail:before,.ion-android-map:before,.ion-android-menu:before,.ion-android-microphone:before,.ion-android-microphone-off:before,.ion-android-more-horizontal:before,.ion-android-more-vertical:before,.ion-android-navigate:before,.ion-android-notifications:before,.ion-android-notifications-none:before,.ion-android-notifications-off:before,.ion-android-open:before,.ion-android-options:before,.ion-android-people:before,.ion-android-person:before,.ion-android-person-add:before,.ion-android-phone-landscape:before,.ion-android-phone-portrait:before,.ion-android-pin:before,.ion-android-plane:before,.ion-android-playstore:before,.ion-android-print:before,.ion-android-radio-button-off:before,.ion-android-radio-button-on:before,.ion-android-refresh:before,.ion-android-remove:before,.ion-android-remove-circle:before,.ion-android-restaurant:before,.ion-android-sad:before,.ion-android-search:before,.ion-android-send:before,.ion-android-settings:before,.ion-android-share:before,.ion-android-share-alt:before,.ion-android-star:before,.ion-android-star-half:before,.ion-android-star-outline:before,.ion-android-stopwatch:before,.ion-android-subway:before,.ion-android-sunny:before,.ion-android-sync:before,.ion-android-textsms:before,.ion-android-time:before,.ion-android-train:before,.ion-android-unlock:before,.ion-android-upload:before,.ion-android-volume-down:before,.ion-android-volume-mute:before,.ion-android-volume-off:before,.ion-android-volume-up:before,.ion-android-walk:before,.ion-android-warning:before,.ion-android-watch:before,.ion-android-wifi:before,.ion-aperture:before,.ion-archive:before,.ion-arrow-down-a:before,.ion-arrow-down-b:before,.ion-arrow-down-c:before,.ion-arrow-expand:before,.ion-arrow-graph-down-left:before,.ion-arrow-graph-down-right:before,.ion-arrow-graph-up-left:before,.ion-arrow-graph-up-right:before,.ion-arrow-left-a:before,.ion-arrow-left-b:before,.ion-arrow-left-c:before,.ion-arrow-move:before,.ion-arrow-resize:before,.ion-arrow-return-left:before,.ion-arrow-return-right:before,.ion-arrow-right-a:before,.ion-arrow-right-b:before,.ion-arrow-right-c:before,.ion-arrow-shrink:before,.ion-arrow-swap:before,.ion-arrow-up-a:before,.ion-arrow-up-b:before,.ion-arrow-up-c:before,.ion-asterisk:before,.ion-at:before,.ion-backspace:before,.ion-backspace-outline:before,.ion-bag:before,.ion-battery-charging:before,.ion-battery-empty:before,.ion-battery-full:before,.ion-battery-half:before,.ion-battery-low:before,.ion-beaker:before,.ion-beer:before,.ion-bluetooth:before,.ion-bonfire:before,.ion-bookmark:before,.ion-bowtie:before,.ion-briefcase:before,.ion-bug:before,.ion-calculator:before,.ion-calendar:before,.ion-camera:before,.ion-card:before,.ion-cash:before,.ion-chatbox:before,.ion-chatbox-working:before,.ion-chatboxes:before,.ion-chatbubble:before,.ion-chatbubble-working:before,.ion-chatbubbles:before,.ion-checkmark:before,.ion-checkmark-circled:before,.ion-checkmark-round:before,.ion-chevron-down:before,.ion-chevron-left:before,.ion-chevron-right:before,.ion-chevron-up:before,.ion-clipboard:before,.ion-clock:before,.ion-close:before,.ion-close-circled:before,.ion-close-round:before,.ion-closed-captioning:before,.ion-cloud:before,.ion-code:before,.ion-code-download:before,.ion-code-working:before,.ion-coffee:before,.ion-compass:before,.ion-compose:before,.ion-connection-bars:before,.ion-contrast:before,.ion-crop:before,.ion-cube:before,.ion-disc:before,.ion-document:before,.ion-document-text:before,.ion-drag:before,.ion-earth:before,.ion-easel:before,.ion-edit:before,.ion-egg:before,.ion-eject:before,.ion-email:before,.ion-email-unread:before,.ion-erlenmeyer-flask:before,.ion-erlenmeyer-flask-bubbles:before,.ion-eye:before,.ion-eye-disabled:before,.ion-female:before,.ion-filing:before,.ion-film-marker:before,.ion-fireball:before,.ion-flag:before,.ion-flame:before,.ion-flash:before,.ion-flash-off:before,.ion-folder:before,.ion-fork:before,.ion-fork-repo:before,.ion-forward:before,.ion-funnel:before,.ion-gear-a:before,.ion-gear-b:before,.ion-grid:before,.ion-hammer:before,.ion-happy:before,.ion-happy-outline:before,.ion-headphone:before,.ion-heart:before,.ion-heart-broken:before,.ion-help:before,.ion-help-buoy:before,.ion-help-circled:before,.ion-home:before,.ion-icecream:before,.ion-image:before,.ion-images:before,.ion-information:before,.ion-information-circled:before,.ion-ionic:before,.ion-ios-alarm:before,.ion-ios-alarm-outline:before,.ion-ios-albums:before,.ion-ios-albums-outline:before,.ion-ios-americanfootball:before,.ion-ios-americanfootball-outline:before,.ion-ios-analytics:before,.ion-ios-analytics-outline:before,.ion-ios-arrow-back:before,.ion-ios-arrow-down:before,.ion-ios-arrow-forward:before,.ion-ios-arrow-left:before,.ion-ios-arrow-right:before,.ion-ios-arrow-thin-down:before,.ion-ios-arrow-thin-left:before,.ion-ios-arrow-thin-right:before,.ion-ios-arrow-thin-up:before,.ion-ios-arrow-up:before,.ion-ios-at:before,.ion-ios-at-outline:before,.ion-ios-barcode:before,.ion-ios-barcode-outline:before,.ion-ios-baseball:before,.ion-ios-baseball-outline:before,.ion-ios-basketball:before,.ion-ios-basketball-outline:before,.ion-ios-bell:before,.ion-ios-bell-outline:before,.ion-ios-body:before,.ion-ios-body-outline:before,.ion-ios-bolt:before,.ion-ios-bolt-outline:before,.ion-ios-book:before,.ion-ios-book-outline:before,.ion-ios-bookmarks:before,.ion-ios-bookmarks-outline:before,.ion-ios-box:before,.ion-ios-box-outline:before,.ion-ios-briefcase:before,.ion-ios-briefcase-outline:before,.ion-ios-browsers:before,.ion-ios-browsers-outline:before,.ion-ios-calculator:before,.ion-ios-calculator-outline:before,.ion-ios-calendar:before,.ion-ios-calendar-outline:before,.ion-ios-camera:before,.ion-ios-camera-outline:before,.ion-ios-cart:before,.ion-ios-cart-outline:before,.ion-ios-chatboxes:before,.ion-ios-chatboxes-outline:before,.ion-ios-chatbubble:before,.ion-ios-chatbubble-outline:before,.ion-ios-checkmark:before,.ion-ios-checkmark-empty:before,.ion-ios-checkmark-outline:before,.ion-ios-circle-filled:before,.ion-ios-circle-outline:before,.ion-ios-clock:before,.ion-ios-clock-outline:before,.ion-ios-close:before,.ion-ios-close-empty:before,.ion-ios-close-outline:before,.ion-ios-cloud:before,.ion-ios-cloud-download:before,.ion-ios-cloud-download-outline:before,.ion-ios-cloud-outline:before,.ion-ios-cloud-upload:before,.ion-ios-cloud-upload-outline:before,.ion-ios-cloudy:before,.ion-ios-cloudy-night:before,.ion-ios-cloudy-night-outline:before,.ion-ios-cloudy-outline:before,.ion-ios-cog:before,.ion-ios-cog-outline:before,.ion-ios-color-filter:before,.ion-ios-color-filter-outline:before,.ion-ios-color-wand:before,.ion-ios-color-wand-outline:before,.ion-ios-compose:before,.ion-ios-compose-outline:before,.ion-ios-contact:before,.ion-ios-contact-outline:before,.ion-ios-copy:before,.ion-ios-copy-outline:before,.ion-ios-crop:before,.ion-ios-crop-strong:before,.ion-ios-download:before,.ion-ios-download-outline:before,.ion-ios-drag:before,.ion-ios-email:before,.ion-ios-email-outline:before,.ion-ios-eye:before,.ion-ios-eye-outline:before,.ion-ios-fastforward:before,.ion-ios-fastforward-outline:before,.ion-ios-filing:before,.ion-ios-filing-outline:before,.ion-ios-film:before,.ion-ios-film-outline:before,.ion-ios-flag:before,.ion-ios-flag-outline:before,.ion-ios-flame:before,.ion-ios-flame-outline:before,.ion-ios-flask:before,.ion-ios-flask-outline:before,.ion-ios-flower:before,.ion-ios-flower-outline:before,.ion-ios-folder:before,.ion-ios-folder-outline:before,.ion-ios-football:before,.ion-ios-football-outline:before,.ion-ios-game-controller-a:before,.ion-ios-game-controller-a-outline:before,.ion-ios-game-controller-b:before,.ion-ios-game-controller-b-outline:before,.ion-ios-gear:before,.ion-ios-gear-outline:before,.ion-ios-glasses:before,.ion-ios-glasses-outline:before,.ion-ios-grid-view:before,.ion-ios-grid-view-outline:before,.ion-ios-heart:before,.ion-ios-heart-outline:before,.ion-ios-help:before,.ion-ios-help-empty:before,.ion-ios-help-outline:before,.ion-ios-home:before,.ion-ios-home-outline:before,.ion-ios-infinite:before,.ion-ios-infinite-outline:before,.ion-ios-information:before,.ion-ios-information-empty:before,.ion-ios-information-outline:before,.ion-ios-ionic-outline:before,.ion-ios-keypad:before,.ion-ios-keypad-outline:before,.ion-ios-lightbulb:before,.ion-ios-lightbulb-outline:before,.ion-ios-list:before,.ion-ios-list-outline:before,.ion-ios-location:before,.ion-ios-location-outline:before,.ion-ios-locked:before,.ion-ios-locked-outline:before,.ion-ios-loop:before,.ion-ios-loop-strong:before,.ion-ios-medical:before,.ion-ios-medical-outline:before,.ion-ios-medkit:before,.ion-ios-medkit-outline:before,.ion-ios-mic:before,.ion-ios-mic-off:before,.ion-ios-mic-outline:before,.ion-ios-minus:before,.ion-ios-minus-empty:before,.ion-ios-minus-outline:before,.ion-ios-monitor:before,.ion-ios-monitor-outline:before,.ion-ios-moon:before,.ion-ios-moon-outline:before,.ion-ios-more:before,.ion-ios-more-outline:before,.ion-ios-musical-note:before,.ion-ios-musical-notes:before,.ion-ios-navigate:before,.ion-ios-navigate-outline:before,.ion-ios-nutrition:before,.ion-ios-nutrition-outline:before,.ion-ios-paper:before,.ion-ios-paper-outline:before,.ion-ios-paperplane:before,.ion-ios-paperplane-outline:before,.ion-ios-partlysunny:before,.ion-ios-partlysunny-outline:before,.ion-ios-pause:before,.ion-ios-pause-outline:before,.ion-ios-paw:before,.ion-ios-paw-outline:before,.ion-ios-people:before,.ion-ios-people-outline:before,.ion-ios-person:before,.ion-ios-person-outline:before,.ion-ios-personadd:before,.ion-ios-personadd-outline:before,.ion-ios-photos:before,.ion-ios-photos-outline:before,.ion-ios-pie:before,.ion-ios-pie-outline:before,.ion-ios-pint:before,.ion-ios-pint-outline:before,.ion-ios-play:before,.ion-ios-play-outline:before,.ion-ios-plus:before,.ion-ios-plus-empty:before,.ion-ios-plus-outline:before,.ion-ios-pricetag:before,.ion-ios-pricetag-outline:before,.ion-ios-pricetags:before,.ion-ios-pricetags-outline:before,.ion-ios-printer:before,.ion-ios-printer-outline:before,.ion-ios-pulse:before,.ion-ios-pulse-strong:before,.ion-ios-rainy:before,.ion-ios-rainy-outline:before,.ion-ios-recording:before,.ion-ios-recording-outline:before,.ion-ios-redo:before,.ion-ios-redo-outline:before,.ion-ios-refresh:before,.ion-ios-refresh-empty:before,.ion-ios-refresh-outline:before,.ion-ios-reload:before,.ion-ios-reverse-camera:before,.ion-ios-reverse-camera-outline:before,.ion-ios-rewind:before,.ion-ios-rewind-outline:before,.ion-ios-rose:before,.ion-ios-rose-outline:before,.ion-ios-search:before,.ion-ios-search-strong:before,.ion-ios-settings:before,.ion-ios-settings-strong:before,.ion-ios-shuffle:before,.ion-ios-shuffle-strong:before,.ion-ios-skipbackward:before,.ion-ios-skipbackward-outline:before,.ion-ios-skipforward:before,.ion-ios-skipforward-outline:before,.ion-ios-snowy:before,.ion-ios-speedometer:before,.ion-ios-speedometer-outline:before,.ion-ios-star:before,.ion-ios-star-half:before,.ion-ios-star-outline:before,.ion-ios-stopwatch:before,.ion-ios-stopwatch-outline:before,.ion-ios-sunny:before,.ion-ios-sunny-outline:before,.ion-ios-telephone:before,.ion-ios-telephone-outline:before,.ion-ios-tennisball:before,.ion-ios-tennisball-outline:before,.ion-ios-thunderstorm:before,.ion-ios-thunderstorm-outline:before,.ion-ios-time:before,.ion-ios-time-outline:before,.ion-ios-timer:before,.ion-ios-timer-outline:before,.ion-ios-toggle:before,.ion-ios-toggle-outline:before,.ion-ios-trash:before,.ion-ios-trash-outline:before,.ion-ios-undo:before,.ion-ios-undo-outline:before,.ion-ios-unlocked:before,.ion-ios-unlocked-outline:before,.ion-ios-upload:before,.ion-ios-upload-outline:before,.ion-ios-videocam:before,.ion-ios-videocam-outline:before,.ion-ios-volume-high:before,.ion-ios-volume-low:before,.ion-ios-wineglass:before,.ion-ios-wineglass-outline:before,.ion-ios-world:before,.ion-ios-world-outline:before,.ion-ipad:before,.ion-iphone:before,.ion-ipod:before,.ion-jet:before,.ion-key:before,.ion-knife:before,.ion-laptop:before,.ion-leaf:before,.ion-levels:before,.ion-lightbulb:before,.ion-link:before,.ion-load-a:before,.ion-load-b:before,.ion-load-c:before,.ion-load-d:before,.ion-location:before,.ion-lock-combination:before,.ion-locked:before,.ion-log-in:before,.ion-log-out:before,.ion-loop:before,.ion-magnet:before,.ion-male:before,.ion-man:before,.ion-map:before,.ion-medkit:before,.ion-merge:before,.ion-mic-a:before,.ion-mic-b:before,.ion-mic-c:before,.ion-minus:before,.ion-minus-circled:before,.ion-minus-round:before,.ion-model-s:before,.ion-monitor:before,.ion-more:before,.ion-mouse:before,.ion-music-note:before,.ion-navicon:before,.ion-navicon-round:before,.ion-navigate:before,.ion-network:before,.ion-no-smoking:before,.ion-nuclear:before,.ion-outlet:before,.ion-paintbrush:before,.ion-paintbucket:before,.ion-paper-airplane:before,.ion-paperclip:before,.ion-pause:before,.ion-person:before,.ion-person-add:before,.ion-person-stalker:before,.ion-pie-graph:before,.ion-pin:before,.ion-pinpoint:before,.ion-pizza:before,.ion-plane:before,.ion-planet:before,.ion-play:before,.ion-playstation:before,.ion-plus:before,.ion-plus-circled:before,.ion-plus-round:before,.ion-podium:before,.ion-pound:before,.ion-power:before,.ion-pricetag:before,.ion-pricetags:before,.ion-printer:before,.ion-pull-request:before,.ion-qr-scanner:before,.ion-quote:before,.ion-radio-waves:before,.ion-record:before,.ion-refresh:before,.ion-reply:before,.ion-reply-all:before,.ion-ribbon-a:before,.ion-ribbon-b:before,.ion-sad:before,.ion-sad-outline:before,.ion-scissors:before,.ion-search:before,.ion-settings:before,.ion-share:before,.ion-shuffle:before,.ion-skip-backward:before,.ion-skip-forward:before,.ion-social-android:before,.ion-social-android-outline:before,.ion-social-angular:before,.ion-social-angular-outline:before,.ion-social-apple:before,.ion-social-apple-outline:before,.ion-social-bitcoin:before,.ion-social-bitcoin-outline:before,.ion-social-buffer:before,.ion-social-buffer-outline:before,.ion-social-chrome:before,.ion-social-chrome-outline:before,.ion-social-codepen:before,.ion-social-codepen-outline:before,.ion-social-css3:before,.ion-social-css3-outline:before,.ion-social-designernews:before,.ion-social-designernews-outline:before,.ion-social-dribbble:before,.ion-social-dribbble-outline:before,.ion-social-dropbox:before,.ion-social-dropbox-outline:before,.ion-social-euro:before,.ion-social-euro-outline:before,.ion-social-facebook:before,.ion-social-facebook-outline:before,.ion-social-foursquare:before,.ion-social-foursquare-outline:before,.ion-social-freebsd-devil:before,.ion-social-github:before,.ion-social-github-outline:before,.ion-social-google:before,.ion-social-google-outline:before,.ion-social-googleplus:before,.ion-social-googleplus-outline:before,.ion-social-hackernews:before,.ion-social-hackernews-outline:before,.ion-social-html5:before,.ion-social-html5-outline:before,.ion-social-instagram:before,.ion-social-instagram-outline:before,.ion-social-javascript:before,.ion-social-javascript-outline:before,.ion-social-linkedin:before,.ion-social-linkedin-outline:before,.ion-social-markdown:before,.ion-social-nodejs:before,.ion-social-octocat:before,.ion-social-pinterest:before,.ion-social-pinterest-outline:before,.ion-social-python:before,.ion-social-reddit:before,.ion-social-reddit-outline:before,.ion-social-rss:before,.ion-social-rss-outline:before,.ion-social-sass:before,.ion-social-skype:before,.ion-social-skype-outline:before,.ion-social-snapchat:before,.ion-social-snapchat-outline:before,.ion-social-tumblr:before,.ion-social-tumblr-outline:before,.ion-social-tux:before,.ion-social-twitch:before,.ion-social-twitch-outline:before,.ion-social-twitter:before,.ion-social-twitter-outline:before,.ion-social-usd:before,.ion-social-usd-outline:before,.ion-social-vimeo:before,.ion-social-vimeo-outline:before,.ion-social-whatsapp:before,.ion-social-whatsapp-outline:before,.ion-social-windows:before,.ion-social-windows-outline:before,.ion-social-wordpress:before,.ion-social-wordpress-outline:before,.ion-social-yahoo:before,.ion-social-yahoo-outline:before,.ion-social-yen:before,.ion-social-yen-outline:before,.ion-social-youtube:before,.ion-social-youtube-outline:before,.ion-soup-can:before,.ion-soup-can-outline:before,.ion-speakerphone:before,.ion-speedometer:before,.ion-spoon:before,.ion-star:before,.ion-stats-bars:before,.ion-steam:before,.ion-stop:before,.ion-thermometer:before,.ion-thumbsdown:before,.ion-thumbsup:before,.ion-toggle:before,.ion-toggle-filled:before,.ion-transgender:before,.ion-trash-a:before,.ion-trash-b:before,.ion-trophy:before,.ion-tshirt:before,.ion-tshirt-outline:before,.ion-umbrella:before,.ion-university:before,.ion-unlocked:before,.ion-upload:before,.ion-usb:before,.ion-videocamera:before,.ion-volume-high:before,.ion-volume-low:before,.ion-volume-medium:before,.ion-volume-mute:before,.ion-wand:before,.ion-waterdrop:before,.ion-wifi:before,.ion-wineglass:before,.ion-woman:before,.ion-wrench:before,.ion-xbox:before{display:inline-block;font-family:"Ionicons";speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;text-rendering:auto;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.ion-alert:before{content:"\f101"}.ion-alert-circled:before{content:"\f100"}.ion-android-add:before{content:"\f2c7"}.ion-android-add-circle:before{content:"\f359"}.ion-android-alarm-clock:before{content:"\f35a"}.ion-android-alert:before{content:"\f35b"}.ion-android-apps:before{content:"\f35c"}.ion-android-archive:before{content:"\f2c9"}.ion-android-arrow-back:before{content:"\f2ca"}.ion-android-arrow-down:before{content:"\f35d"}.ion-android-arrow-dropdown:before{content:"\f35f"}.ion-android-arrow-dropdown-circle:before{content:"\f35e"}.ion-android-arrow-dropleft:before{content:"\f361"}.ion-android-arrow-dropleft-circle:before{content:"\f360"}.ion-android-arrow-dropright:before{content:"\f363"}.ion-android-arrow-dropright-circle:before{content:"\f362"}.ion-android-arrow-dropup:before{content:"\f365"}.ion-android-arrow-dropup-circle:before{content:"\f364"}.ion-android-arrow-forward:before{content:"\f30f"}.ion-android-arrow-up:before{content:"\f366"}.ion-android-attach:before{content:"\f367"}.ion-android-bar:before{content:"\f368"}.ion-android-bicycle:before{content:"\f369"}.ion-android-boat:before{content:"\f36a"}.ion-android-bookmark:before{content:"\f36b"}.ion-android-bulb:before{content:"\f36c"}.ion-android-bus:before{content:"\f36d"}.ion-android-calendar:before{content:"\f2d1"}.ion-android-call:before{content:"\f2d2"}.ion-android-camera:before{content:"\f2d3"}.ion-android-cancel:before{content:"\f36e"}.ion-android-car:before{content:"\f36f"}.ion-android-cart:before{content:"\f370"}.ion-android-chat:before{content:"\f2d4"}.ion-android-checkbox:before{content:"\f374"}.ion-android-checkbox-blank:before{content:"\f371"}.ion-android-checkbox-outline:before{content:"\f373"}.ion-android-checkbox-outline-blank:before{content:"\f372"}.ion-android-checkmark-circle:before{content:"\f375"}.ion-android-clipboard:before{content:"\f376"}.ion-android-close:before{content:"\f2d7"}.ion-android-cloud:before{content:"\f37a"}.ion-android-cloud-circle:before{content:"\f377"}.ion-android-cloud-done:before{content:"\f378"}.ion-android-cloud-outline:before{content:"\f379"}.ion-android-color-palette:before{content:"\f37b"}.ion-android-compass:before{content:"\f37c"}.ion-android-contact:before{content:"\f2d8"}.ion-android-contacts:before{content:"\f2d9"}.ion-android-contract:before{content:"\f37d"}.ion-android-create:before{content:"\f37e"}.ion-android-delete:before{content:"\f37f"}.ion-android-desktop:before{content:"\f380"}.ion-android-document:before{content:"\f381"}.ion-android-done:before{content:"\f383"}.ion-android-done-all:before{content:"\f382"}.ion-android-download:before{content:"\f2dd"}.ion-android-drafts:before{content:"\f384"}.ion-android-exit:before{content:"\f385"}.ion-android-expand:before{content:"\f386"}.ion-android-favorite:before{content:"\f388"}.ion-android-favorite-outline:before{content:"\f387"}.ion-android-film:before{content:"\f389"}.ion-android-folder:before{content:"\f2e0"}.ion-android-folder-open:before{content:"\f38a"}.ion-android-funnel:before{content:"\f38b"}.ion-android-globe:before{content:"\f38c"}.ion-android-hand:before{content:"\f2e3"}.ion-android-hangout:before{content:"\f38d"}.ion-android-happy:before{content:"\f38e"}.ion-android-home:before{content:"\f38f"}.ion-android-image:before{content:"\f2e4"}.ion-android-laptop:before{content:"\f390"}.ion-android-list:before{content:"\f391"}.ion-android-locate:before{content:"\f2e9"}.ion-android-lock:before{content:"\f392"}.ion-android-mail:before{content:"\f2eb"}.ion-android-map:before{content:"\f393"}.ion-android-menu:before{content:"\f394"}.ion-android-microphone:before{content:"\f2ec"}.ion-android-microphone-off:before{content:"\f395"}.ion-android-more-horizontal:before{content:"\f396"}.ion-android-more-vertical:before{content:"\f397"}.ion-android-navigate:before{content:"\f398"}.ion-android-notifications:before{content:"\f39b"}.ion-android-notifications-none:before{content:"\f399"}.ion-android-notifications-off:before{content:"\f39a"}.ion-android-open:before{content:"\f39c"}.ion-android-options:before{content:"\f39d"}.ion-android-people:before{content:"\f39e"}.ion-android-person:before{content:"\f3a0"}.ion-android-person-add:before{content:"\f39f"}.ion-android-phone-landscape:before{content:"\f3a1"}.ion-android-phone-portrait:before{content:"\f3a2"}.ion-android-pin:before{content:"\f3a3"}.ion-android-plane:before{content:"\f3a4"}.ion-android-playstore:before{content:"\f2f0"}.ion-android-print:before{content:"\f3a5"}.ion-android-radio-button-off:before{content:"\f3a6"}.ion-android-radio-button-on:before{content:"\f3a7"}.ion-android-refresh:before{content:"\f3a8"}.ion-android-remove:before{content:"\f2f4"}.ion-android-remove-circle:before{content:"\f3a9"}.ion-android-restaurant:before{content:"\f3aa"}.ion-android-sad:before{content:"\f3ab"}.ion-android-search:before{content:"\f2f5"}.ion-android-send:before{content:"\f2f6"}.ion-android-settings:before{content:"\f2f7"}.ion-android-share:before{content:"\f2f8"}.ion-android-share-alt:before{content:"\f3ac"}.ion-android-star:before{content:"\f2fc"}.ion-android-star-half:before{content:"\f3ad"}.ion-android-star-outline:before{content:"\f3ae"}.ion-android-stopwatch:before{content:"\f2fd"}.ion-android-subway:before{content:"\f3af"}.ion-android-sunny:before{content:"\f3b0"}.ion-android-sync:before{content:"\f3b1"}.ion-android-textsms:before{content:"\f3b2"}.ion-android-time:before{content:"\f3b3"}.ion-android-train:before{content:"\f3b4"}.ion-android-unlock:before{content:"\f3b5"}.ion-android-upload:before{content:"\f3b6"}.ion-android-volume-down:before{content:"\f3b7"}.ion-android-volume-mute:before{content:"\f3b8"}.ion-android-volume-off:before{content:"\f3b9"}.ion-android-volume-up:before{content:"\f3ba"}.ion-android-walk:before{content:"\f3bb"}.ion-android-warning:before{content:"\f3bc"}.ion-android-watch:before{content:"\f3bd"}.ion-android-wifi:before{content:"\f305"}.ion-aperture:before{content:"\f313"}.ion-archive:before{content:"\f102"}.ion-arrow-down-a:before{content:"\f103"}.ion-arrow-down-b:before{content:"\f104"}.ion-arrow-down-c:before{content:"\f105"}.ion-arrow-expand:before{content:"\f25e"}.ion-arrow-graph-down-left:before{content:"\f25f"}.ion-arrow-graph-down-right:before{content:"\f260"}.ion-arrow-graph-up-left:before{content:"\f261"}.ion-arrow-graph-up-right:before{content:"\f262"}.ion-arrow-left-a:before{content:"\f106"}.ion-arrow-left-b:before{content:"\f107"}.ion-arrow-left-c:before{content:"\f108"}.ion-arrow-move:before{content:"\f263"}.ion-arrow-resize:before{content:"\f264"}.ion-arrow-return-left:before{content:"\f265"}.ion-arrow-return-right:before{content:"\f266"}.ion-arrow-right-a:before{content:"\f109"}.ion-arrow-right-b:before{content:"\f10a"}.ion-arrow-right-c:before{content:"\f10b"}.ion-arrow-shrink:before{content:"\f267"}.ion-arrow-swap:before{content:"\f268"}.ion-arrow-up-a:before{content:"\f10c"}.ion-arrow-up-b:before{content:"\f10d"}.ion-arrow-up-c:before{content:"\f10e"}.ion-asterisk:before{content:"\f314"}.ion-at:before{content:"\f10f"}.ion-backspace:before{content:"\f3bf"}.ion-backspace-outline:before{content:"\f3be"}.ion-bag:before{content:"\f110"}.ion-battery-charging:before{content:"\f111"}.ion-battery-empty:before{content:"\f112"}.ion-battery-full:before{content:"\f113"}.ion-battery-half:before{content:"\f114"}.ion-battery-low:before{content:"\f115"}.ion-beaker:before{content:"\f269"}.ion-beer:before{content:"\f26a"}.ion-bluetooth:before{content:"\f116"}.ion-bonfire:before{content:"\f315"}.ion-bookmark:before{content:"\f26b"}.ion-bowtie:before{content:"\f3c0"}.ion-briefcase:before{content:"\f26c"}.ion-bug:before{content:"\f2be"}.ion-calculator:before{content:"\f26d"}.ion-calendar:before{content:"\f117"}.ion-camera:before{content:"\f118"}.ion-card:before{content:"\f119"}.ion-cash:before{content:"\f316"}.ion-chatbox:before{content:"\f11b"}.ion-chatbox-working:before{content:"\f11a"}.ion-chatboxes:before{content:"\f11c"}.ion-chatbubble:before{content:"\f11e"}.ion-chatbubble-working:before{content:"\f11d"}.ion-chatbubbles:before{content:"\f11f"}.ion-checkmark:before{content:"\f122"}.ion-checkmark-circled:before{content:"\f120"}.ion-checkmark-round:before{content:"\f121"}.ion-chevron-down:before{content:"\f123"}.ion-chevron-left:before{content:"\f124"}.ion-chevron-right:before{content:"\f125"}.ion-chevron-up:before{content:"\f126"}.ion-clipboard:before{content:"\f127"}.ion-clock:before{content:"\f26e"}.ion-close:before{content:"\f12a"}.ion-close-circled:before{content:"\f128"}.ion-close-round:before{content:"\f129"}.ion-closed-captioning:before{content:"\f317"}.ion-cloud:before{content:"\f12b"}.ion-code:before{content:"\f271"}.ion-code-download:before{content:"\f26f"}.ion-code-working:before{content:"\f270"}.ion-coffee:before{content:"\f272"}.ion-compass:before{content:"\f273"}.ion-compose:before{content:"\f12c"}.ion-connection-bars:before{content:"\f274"}.ion-contrast:before{content:"\f275"}.ion-crop:before{content:"\f3c1"}.ion-cube:before{content:"\f318"}.ion-disc:before{content:"\f12d"}.ion-document:before{content:"\f12f"}.ion-document-text:before{content:"\f12e"}.ion-drag:before{content:"\f130"}.ion-earth:before{content:"\f276"}.ion-easel:before{content:"\f3c2"}.ion-edit:before{content:"\f2bf"}.ion-egg:before{content:"\f277"}.ion-eject:before{content:"\f131"}.ion-email:before{content:"\f132"}.ion-email-unread:before{content:"\f3c3"}.ion-erlenmeyer-flask:before{content:"\f3c5"}.ion-erlenmeyer-flask-bubbles:before{content:"\f3c4"}.ion-eye:before{content:"\f133"}.ion-eye-disabled:before{content:"\f306"}.ion-female:before{content:"\f278"}.ion-filing:before{content:"\f134"}.ion-film-marker:before{content:"\f135"}.ion-fireball:before{content:"\f319"}.ion-flag:before{content:"\f279"}.ion-flame:before{content:"\f31a"}.ion-flash:before{content:"\f137"}.ion-flash-off:before{content:"\f136"}.ion-folder:before{content:"\f139"}.ion-fork:before{content:"\f27a"}.ion-fork-repo:before{content:"\f2c0"}.ion-forward:before{content:"\f13a"}.ion-funnel:before{content:"\f31b"}.ion-gear-a:before{content:"\f13d"}.ion-gear-b:before{content:"\f13e"}.ion-grid:before{content:"\f13f"}.ion-hammer:before{content:"\f27b"}.ion-happy:before{content:"\f31c"}.ion-happy-outline:before{content:"\f3c6"}.ion-headphone:before{content:"\f140"}.ion-heart:before{content:"\f141"}.ion-heart-broken:before{content:"\f31d"}.ion-help:before{content:"\f143"}.ion-help-buoy:before{content:"\f27c"}.ion-help-circled:before{content:"\f142"}.ion-home:before{content:"\f144"}.ion-icecream:before{content:"\f27d"}.ion-image:before{content:"\f147"}.ion-images:before{content:"\f148"}.ion-information:before{content:"\f14a"}.ion-information-circled:before{content:"\f149"}.ion-ionic:before{content:"\f14b"}.ion-ios-alarm:before{content:"\f3c8"}.ion-ios-alarm-outline:before{content:"\f3c7"}.ion-ios-albums:before{content:"\f3ca"}.ion-ios-albums-outline:before{content:"\f3c9"}.ion-ios-americanfootball:before{content:"\f3cc"}.ion-ios-americanfootball-outline:before{content:"\f3cb"}.ion-ios-analytics:before{content:"\f3ce"}.ion-ios-analytics-outline:before{content:"\f3cd"}.ion-ios-arrow-back:before{content:"\f3cf"}.ion-ios-arrow-down:before{content:"\f3d0"}.ion-ios-arrow-forward:before{content:"\f3d1"}.ion-ios-arrow-left:before{content:"\f3d2"}.ion-ios-arrow-right:before{content:"\f3d3"}.ion-ios-arrow-thin-down:before{content:"\f3d4"}.ion-ios-arrow-thin-left:before{content:"\f3d5"}.ion-ios-arrow-thin-right:before{content:"\f3d6"}.ion-ios-arrow-thin-up:before{content:"\f3d7"}.ion-ios-arrow-up:before{content:"\f3d8"}.ion-ios-at:before{content:"\f3da"}.ion-ios-at-outline:before{content:"\f3d9"}.ion-ios-barcode:before{content:"\f3dc"}.ion-ios-barcode-outline:before{content:"\f3db"}.ion-ios-baseball:before{content:"\f3de"}.ion-ios-baseball-outline:before{content:"\f3dd"}.ion-ios-basketball:before{content:"\f3e0"}.ion-ios-basketball-outline:before{content:"\f3df"}.ion-ios-bell:before{content:"\f3e2"}.ion-ios-bell-outline:before{content:"\f3e1"}.ion-ios-body:before{content:"\f3e4"}.ion-ios-body-outline:before{content:"\f3e3"}.ion-ios-bolt:before{content:"\f3e6"}.ion-ios-bolt-outline:before{content:"\f3e5"}.ion-ios-book:before{content:"\f3e8"}.ion-ios-book-outline:before{content:"\f3e7"}.ion-ios-bookmarks:before{content:"\f3ea"}.ion-ios-bookmarks-outline:before{content:"\f3e9"}.ion-ios-box:before{content:"\f3ec"}.ion-ios-box-outline:before{content:"\f3eb"}.ion-ios-briefcase:before{content:"\f3ee"}.ion-ios-briefcase-outline:before{content:"\f3ed"}.ion-ios-browsers:before{content:"\f3f0"}.ion-ios-browsers-outline:before{content:"\f3ef"}.ion-ios-calculator:before{content:"\f3f2"}.ion-ios-calculator-outline:before{content:"\f3f1"}.ion-ios-calendar:before{content:"\f3f4"}.ion-ios-calendar-outline:before{content:"\f3f3"}.ion-ios-camera:before{content:"\f3f6"}.ion-ios-camera-outline:before{content:"\f3f5"}.ion-ios-cart:before{content:"\f3f8"}.ion-ios-cart-outline:before{content:"\f3f7"}.ion-ios-chatboxes:before{content:"\f3fa"}.ion-ios-chatboxes-outline:before{content:"\f3f9"}.ion-ios-chatbubble:before{content:"\f3fc"}.ion-ios-chatbubble-outline:before{content:"\f3fb"}.ion-ios-checkmark:before{content:"\f3ff"}.ion-ios-checkmark-empty:before{content:"\f3fd"}.ion-ios-checkmark-outline:before{content:"\f3fe"}.ion-ios-circle-filled:before{content:"\f400"}.ion-ios-circle-outline:before{content:"\f401"}.ion-ios-clock:before{content:"\f403"}.ion-ios-clock-outline:before{content:"\f402"}.ion-ios-close:before{content:"\f406"}.ion-ios-close-empty:before{content:"\f404"}.ion-ios-close-outline:before{content:"\f405"}.ion-ios-cloud:before{content:"\f40c"}.ion-ios-cloud-download:before{content:"\f408"}.ion-ios-cloud-download-outline:before{content:"\f407"}.ion-ios-cloud-outline:before{content:"\f409"}.ion-ios-cloud-upload:before{content:"\f40b"}.ion-ios-cloud-upload-outline:before{content:"\f40a"}.ion-ios-cloudy:before{content:"\f410"}.ion-ios-cloudy-night:before{content:"\f40e"}.ion-ios-cloudy-night-outline:before{content:"\f40d"}.ion-ios-cloudy-outline:before{content:"\f40f"}.ion-ios-cog:before{content:"\f412"}.ion-ios-cog-outline:before{content:"\f411"}.ion-ios-color-filter:before{content:"\f414"}.ion-ios-color-filter-outline:before{content:"\f413"}.ion-ios-color-wand:before{content:"\f416"}.ion-ios-color-wand-outline:before{content:"\f415"}.ion-ios-compose:before{content:"\f418"}.ion-ios-compose-outline:before{content:"\f417"}.ion-ios-contact:before{content:"\f41a"}.ion-ios-contact-outline:before{content:"\f419"}.ion-ios-copy:before{content:"\f41c"}.ion-ios-copy-outline:before{content:"\f41b"}.ion-ios-crop:before{content:"\f41e"}.ion-ios-crop-strong:before{content:"\f41d"}.ion-ios-download:before{content:"\f420"}.ion-ios-download-outline:before{content:"\f41f"}.ion-ios-drag:before{content:"\f421"}.ion-ios-email:before{content:"\f423"}.ion-ios-email-outline:before{content:"\f422"}.ion-ios-eye:before{content:"\f425"}.ion-ios-eye-outline:before{content:"\f424"}.ion-ios-fastforward:before{content:"\f427"}.ion-ios-fastforward-outline:before{content:"\f426"}.ion-ios-filing:before{content:"\f429"}.ion-ios-filing-outline:before{content:"\f428"}.ion-ios-film:before{content:"\f42b"}.ion-ios-film-outline:before{content:"\f42a"}.ion-ios-flag:before{content:"\f42d"}.ion-ios-flag-outline:before{content:"\f42c"}.ion-ios-flame:before{content:"\f42f"}.ion-ios-flame-outline:before{content:"\f42e"}.ion-ios-flask:before{content:"\f431"}.ion-ios-flask-outline:before{content:"\f430"}.ion-ios-flower:before{content:"\f433"}.ion-ios-flower-outline:before{content:"\f432"}.ion-ios-folder:before{content:"\f435"}.ion-ios-folder-outline:before{content:"\f434"}.ion-ios-football:before{content:"\f437"}.ion-ios-football-outline:before{content:"\f436"}.ion-ios-game-controller-a:before{content:"\f439"}.ion-ios-game-controller-a-outline:before{content:"\f438"}.ion-ios-game-controller-b:before{content:"\f43b"}.ion-ios-game-controller-b-outline:before{content:"\f43a"}.ion-ios-gear:before{content:"\f43d"}.ion-ios-gear-outline:before{content:"\f43c"}.ion-ios-glasses:before{content:"\f43f"}.ion-ios-glasses-outline:before{content:"\f43e"}.ion-ios-grid-view:before{content:"\f441"}.ion-ios-grid-view-outline:before{content:"\f440"}.ion-ios-heart:before{content:"\f443"}.ion-ios-heart-outline:before{content:"\f442"}.ion-ios-help:before{content:"\f446"}.ion-ios-help-empty:before{content:"\f444"}.ion-ios-help-outline:before{content:"\f445"}.ion-ios-home:before{content:"\f448"}.ion-ios-home-outline:before{content:"\f447"}.ion-ios-infinite:before{content:"\f44a"}.ion-ios-infinite-outline:before{content:"\f449"}.ion-ios-information:before{content:"\f44d"}.ion-ios-information-empty:before{content:"\f44b"}.ion-ios-information-outline:before{content:"\f44c"}.ion-ios-ionic-outline:before{content:"\f44e"}.ion-ios-keypad:before{content:"\f450"}.ion-ios-keypad-outline:before{content:"\f44f"}.ion-ios-lightbulb:before{content:"\f452"}.ion-ios-lightbulb-outline:before{content:"\f451"}.ion-ios-list:before{content:"\f454"}.ion-ios-list-outline:before{content:"\f453"}.ion-ios-location:before{content:"\f456"}.ion-ios-location-outline:before{content:"\f455"}.ion-ios-locked:before{content:"\f458"}.ion-ios-locked-outline:before{content:"\f457"}.ion-ios-loop:before{content:"\f45a"}.ion-ios-loop-strong:before{content:"\f459"}.ion-ios-medical:before{content:"\f45c"}.ion-ios-medical-outline:before{content:"\f45b"}.ion-ios-medkit:before{content:"\f45e"}.ion-ios-medkit-outline:before{content:"\f45d"}.ion-ios-mic:before{content:"\f461"}.ion-ios-mic-off:before{content:"\f45f"}.ion-ios-mic-outline:before{content:"\f460"}.ion-ios-minus:before{content:"\f464"}.ion-ios-minus-empty:before{content:"\f462"}.ion-ios-minus-outline:before{content:"\f463"}.ion-ios-monitor:before{content:"\f466"}.ion-ios-monitor-outline:before{content:"\f465"}.ion-ios-moon:before{content:"\f468"}.ion-ios-moon-outline:before{content:"\f467"}.ion-ios-more:before{content:"\f46a"}.ion-ios-more-outline:before{content:"\f469"}.ion-ios-musical-note:before{content:"\f46b"}.ion-ios-musical-notes:before{content:"\f46c"}.ion-ios-navigate:before{content:"\f46e"}.ion-ios-navigate-outline:before{content:"\f46d"}.ion-ios-nutrition:before{content:"\f470"}.ion-ios-nutrition-outline:before{content:"\f46f"}.ion-ios-paper:before{content:"\f472"}.ion-ios-paper-outline:before{content:"\f471"}.ion-ios-paperplane:before{content:"\f474"}.ion-ios-paperplane-outline:before{content:"\f473"}.ion-ios-partlysunny:before{content:"\f476"}.ion-ios-partlysunny-outline:before{content:"\f475"}.ion-ios-pause:before{content:"\f478"}.ion-ios-pause-outline:before{content:"\f477"}.ion-ios-paw:before{content:"\f47a"}.ion-ios-paw-outline:before{content:"\f479"}.ion-ios-people:before{content:"\f47c"}.ion-ios-people-outline:before{content:"\f47b"}.ion-ios-person:before{content:"\f47e"}.ion-ios-person-outline:before{content:"\f47d"}.ion-ios-personadd:before{content:"\f480"}.ion-ios-personadd-outline:before{content:"\f47f"}.ion-ios-photos:before{content:"\f482"}.ion-ios-photos-outline:before{content:"\f481"}.ion-ios-pie:before{content:"\f484"}.ion-ios-pie-outline:before{content:"\f483"}.ion-ios-pint:before{content:"\f486"}.ion-ios-pint-outline:before{content:"\f485"}.ion-ios-play:before{content:"\f488"}.ion-ios-play-outline:before{content:"\f487"}.ion-ios-plus:before{content:"\f48b"}.ion-ios-plus-empty:before{content:"\f489"}.ion-ios-plus-outline:before{content:"\f48a"}.ion-ios-pricetag:before{content:"\f48d"}.ion-ios-pricetag-outline:before{content:"\f48c"}.ion-ios-pricetags:before{content:"\f48f"}.ion-ios-pricetags-outline:before{content:"\f48e"}.ion-ios-printer:before{content:"\f491"}.ion-ios-printer-outline:before{content:"\f490"}.ion-ios-pulse:before{content:"\f493"}.ion-ios-pulse-strong:before{content:"\f492"}.ion-ios-rainy:before{content:"\f495"}.ion-ios-rainy-outline:before{content:"\f494"}.ion-ios-recording:before{content:"\f497"}.ion-ios-recording-outline:before{content:"\f496"}.ion-ios-redo:before{content:"\f499"}.ion-ios-redo-outline:before{content:"\f498"}.ion-ios-refresh:before{content:"\f49c"}.ion-ios-refresh-empty:before{content:"\f49a"}.ion-ios-refresh-outline:before{content:"\f49b"}.ion-ios-reload:before{content:"\f49d"}.ion-ios-reverse-camera:before{content:"\f49f"}.ion-ios-reverse-camera-outline:before{content:"\f49e"}.ion-ios-rewind:before{content:"\f4a1"}.ion-ios-rewind-outline:before{content:"\f4a0"}.ion-ios-rose:before{content:"\f4a3"}.ion-ios-rose-outline:before{content:"\f4a2"}.ion-ios-search:before{content:"\f4a5"}.ion-ios-search-strong:before{content:"\f4a4"}.ion-ios-settings:before{content:"\f4a7"}.ion-ios-settings-strong:before{content:"\f4a6"}.ion-ios-shuffle:before{content:"\f4a9"}.ion-ios-shuffle-strong:before{content:"\f4a8"}.ion-ios-skipbackward:before{content:"\f4ab"}.ion-ios-skipbackward-outline:before{content:"\f4aa"}.ion-ios-skipforward:before{content:"\f4ad"}.ion-ios-skipforward-outline:before{content:"\f4ac"}.ion-ios-snowy:before{content:"\f4ae"}.ion-ios-speedometer:before{content:"\f4b0"}.ion-ios-speedometer-outline:before{content:"\f4af"}.ion-ios-star:before{content:"\f4b3"}.ion-ios-star-half:before{content:"\f4b1"}.ion-ios-star-outline:before{content:"\f4b2"}.ion-ios-stopwatch:before{content:"\f4b5"}.ion-ios-stopwatch-outline:before{content:"\f4b4"}.ion-ios-sunny:before{content:"\f4b7"}.ion-ios-sunny-outline:before{content:"\f4b6"}.ion-ios-telephone:before{content:"\f4b9"}.ion-ios-telephone-outline:before{content:"\f4b8"}.ion-ios-tennisball:before{content:"\f4bb"}.ion-ios-tennisball-outline:before{content:"\f4ba"}.ion-ios-thunderstorm:before{content:"\f4bd"}.ion-ios-thunderstorm-outline:before{content:"\f4bc"}.ion-ios-time:before{content:"\f4bf"}.ion-ios-time-outline:before{content:"\f4be"}.ion-ios-timer:before{content:"\f4c1"}.ion-ios-timer-outline:before{content:"\f4c0"}.ion-ios-toggle:before{content:"\f4c3"}.ion-ios-toggle-outline:before{content:"\f4c2"}.ion-ios-trash:before{content:"\f4c5"}.ion-ios-trash-outline:before{content:"\f4c4"}.ion-ios-undo:before{content:"\f4c7"}.ion-ios-undo-outline:before{content:"\f4c6"}.ion-ios-unlocked:before{content:"\f4c9"}.ion-ios-unlocked-outline:before{content:"\f4c8"}.ion-ios-upload:before{content:"\f4cb"}.ion-ios-upload-outline:before{content:"\f4ca"}.ion-ios-videocam:before{content:"\f4cd"}.ion-ios-videocam-outline:before{content:"\f4cc"}.ion-ios-volume-high:before{content:"\f4ce"}.ion-ios-volume-low:before{content:"\f4cf"}.ion-ios-wineglass:before{content:"\f4d1"}.ion-ios-wineglass-outline:before{content:"\f4d0"}.ion-ios-world:before{content:"\f4d3"}.ion-ios-world-outline:before{content:"\f4d2"}.ion-ipad:before{content:"\f1f9"}.ion-iphone:before{content:"\f1fa"}.ion-ipod:before{content:"\f1fb"}.ion-jet:before{content:"\f295"}.ion-key:before{content:"\f296"}.ion-knife:before{content:"\f297"}.ion-laptop:before{content:"\f1fc"}.ion-leaf:before{content:"\f1fd"}.ion-levels:before{content:"\f298"}.ion-lightbulb:before{content:"\f299"}.ion-link:before{content:"\f1fe"}.ion-load-a:before{content:"\f29a"}.ion-load-b:before{content:"\f29b"}.ion-load-c:before{content:"\f29c"}.ion-load-d:before{content:"\f29d"}.ion-location:before{content:"\f1ff"}.ion-lock-combination:before{content:"\f4d4"}.ion-locked:before{content:"\f200"}.ion-log-in:before{content:"\f29e"}.ion-log-out:before{content:"\f29f"}.ion-loop:before{content:"\f201"}.ion-magnet:before{content:"\f2a0"}.ion-male:before{content:"\f2a1"}.ion-man:before{content:"\f202"}.ion-map:before{content:"\f203"}.ion-medkit:before{content:"\f2a2"}.ion-merge:before{content:"\f33f"}.ion-mic-a:before{content:"\f204"}.ion-mic-b:before{content:"\f205"}.ion-mic-c:before{content:"\f206"}.ion-minus:before{content:"\f209"}.ion-minus-circled:before{content:"\f207"}.ion-minus-round:before{content:"\f208"}.ion-model-s:before{content:"\f2c1"}.ion-monitor:before{content:"\f20a"}.ion-more:before{content:"\f20b"}.ion-mouse:before{content:"\f340"}.ion-music-note:before{content:"\f20c"}.ion-navicon:before{content:"\f20e"}.ion-navicon-round:before{content:"\f20d"}.ion-navigate:before{content:"\f2a3"}.ion-network:before{content:"\f341"}.ion-no-smoking:before{content:"\f2c2"}.ion-nuclear:before{content:"\f2a4"}.ion-outlet:before{content:"\f342"}.ion-paintbrush:before{content:"\f4d5"}.ion-paintbucket:before{content:"\f4d6"}.ion-paper-airplane:before{content:"\f2c3"}.ion-paperclip:before{content:"\f20f"}.ion-pause:before{content:"\f210"}.ion-person:before{content:"\f213"}.ion-person-add:before{content:"\f211"}.ion-person-stalker:before{content:"\f212"}.ion-pie-graph:before{content:"\f2a5"}.ion-pin:before{content:"\f2a6"}.ion-pinpoint:before{content:"\f2a7"}.ion-pizza:before{content:"\f2a8"}.ion-plane:before{content:"\f214"}.ion-planet:before{content:"\f343"}.ion-play:before{content:"\f215"}.ion-playstation:before{content:"\f30a"}.ion-plus:before{content:"\f218"}.ion-plus-circled:before{content:"\f216"}.ion-plus-round:before{content:"\f217"}.ion-podium:before{content:"\f344"}.ion-pound:before{content:"\f219"}.ion-power:before{content:"\f2a9"}.ion-pricetag:before{content:"\f2aa"}.ion-pricetags:before{content:"\f2ab"}.ion-printer:before{content:"\f21a"}.ion-pull-request:before{content:"\f345"}.ion-qr-scanner:before{content:"\f346"}.ion-quote:before{content:"\f347"}.ion-radio-waves:before{content:"\f2ac"}.ion-record:before{content:"\f21b"}.ion-refresh:before{content:"\f21c"}.ion-reply:before{content:"\f21e"}.ion-reply-all:before{content:"\f21d"}.ion-ribbon-a:before{content:"\f348"}.ion-ribbon-b:before{content:"\f349"}.ion-sad:before{content:"\f34a"}.ion-sad-outline:before{content:"\f4d7"}.ion-scissors:before{content:"\f34b"}.ion-search:before{content:"\f21f"}.ion-settings:before{content:"\f2ad"}.ion-share:before{content:"\f220"}.ion-shuffle:before{content:"\f221"}.ion-skip-backward:before{content:"\f222"}.ion-skip-forward:before{content:"\f223"}.ion-social-android:before{content:"\f225"}.ion-social-android-outline:before{content:"\f224"}.ion-social-angular:before{content:"\f4d9"}.ion-social-angular-outline:before{content:"\f4d8"}.ion-social-apple:before{content:"\f227"}.ion-social-apple-outline:before{content:"\f226"}.ion-social-bitcoin:before{content:"\f2af"}.ion-social-bitcoin-outline:before{content:"\f2ae"}.ion-social-buffer:before{content:"\f229"}.ion-social-buffer-outline:before{content:"\f228"}.ion-social-chrome:before{content:"\f4db"}.ion-social-chrome-outline:before{content:"\f4da"}.ion-social-codepen:before{content:"\f4dd"}.ion-social-codepen-outline:before{content:"\f4dc"}.ion-social-css3:before{content:"\f4df"}.ion-social-css3-outline:before{content:"\f4de"}.ion-social-designernews:before{content:"\f22b"}.ion-social-designernews-outline:before{content:"\f22a"}.ion-social-dribbble:before{content:"\f22d"}.ion-social-dribbble-outline:before{content:"\f22c"}.ion-social-dropbox:before{content:"\f22f"}.ion-social-dropbox-outline:before{content:"\f22e"}.ion-social-euro:before{content:"\f4e1"}.ion-social-euro-outline:before{content:"\f4e0"}.ion-social-facebook:before{content:"\f231"}.ion-social-facebook-outline:before{content:"\f230"}.ion-social-foursquare:before{content:"\f34d"}.ion-social-foursquare-outline:before{content:"\f34c"}.ion-social-freebsd-devil:before{content:"\f2c4"}.ion-social-github:before{content:"\f233"}.ion-social-github-outline:before{content:"\f232"}.ion-social-google:before{content:"\f34f"}.ion-social-google-outline:before{content:"\f34e"}.ion-social-googleplus:before{content:"\f235"}.ion-social-googleplus-outline:before{content:"\f234"}.ion-social-hackernews:before{content:"\f237"}.ion-social-hackernews-outline:before{content:"\f236"}.ion-social-html5:before{content:"\f4e3"}.ion-social-html5-outline:before{content:"\f4e2"}.ion-social-instagram:before{content:"\f351"}.ion-social-instagram-outline:before{content:"\f350"}.ion-social-javascript:before{content:"\f4e5"}.ion-social-javascript-outline:before{content:"\f4e4"}.ion-social-linkedin:before{content:"\f239"}.ion-social-linkedin-outline:before{content:"\f238"}.ion-social-markdown:before{content:"\f4e6"}.ion-social-nodejs:before{content:"\f4e7"}.ion-social-octocat:before{content:"\f4e8"}.ion-social-pinterest:before{content:"\f2b1"}.ion-social-pinterest-outline:before{content:"\f2b0"}.ion-social-python:before{content:"\f4e9"}.ion-social-reddit:before{content:"\f23b"}.ion-social-reddit-outline:before{content:"\f23a"}.ion-social-rss:before{content:"\f23d"}.ion-social-rss-outline:before{content:"\f23c"}.ion-social-sass:before{content:"\f4ea"}.ion-social-skype:before{content:"\f23f"}.ion-social-skype-outline:before{content:"\f23e"}.ion-social-snapchat:before{content:"\f4ec"}.ion-social-snapchat-outline:before{content:"\f4eb"}.ion-social-tumblr:before{content:"\f241"}.ion-social-tumblr-outline:before{content:"\f240"}.ion-social-tux:before{content:"\f2c5"}.ion-social-twitch:before{content:"\f4ee"}.ion-social-twitch-outline:before{content:"\f4ed"}.ion-social-twitter:before{content:"\f243"}.ion-social-twitter-outline:before{content:"\f242"}.ion-social-usd:before{content:"\f353"}.ion-social-usd-outline:before{content:"\f352"}.ion-social-vimeo:before{content:"\f245"}.ion-social-vimeo-outline:before{content:"\f244"}.ion-social-whatsapp:before{content:"\f4f0"}.ion-social-whatsapp-outline:before{content:"\f4ef"}.ion-social-windows:before{content:"\f247"}.ion-social-windows-outline:before{content:"\f246"}.ion-social-wordpress:before{content:"\f249"}.ion-social-wordpress-outline:before{content:"\f248"}.ion-social-yahoo:before{content:"\f24b"}.ion-social-yahoo-outline:before{content:"\f24a"}.ion-social-yen:before{content:"\f4f2"}.ion-social-yen-outline:before{content:"\f4f1"}.ion-social-youtube:before{content:"\f24d"}.ion-social-youtube-outline:before{content:"\f24c"}.ion-soup-can:before{content:"\f4f4"}.ion-soup-can-outline:before{content:"\f4f3"}.ion-speakerphone:before{content:"\f2b2"}.ion-speedometer:before{content:"\f2b3"}.ion-spoon:before{content:"\f2b4"}.ion-star:before{content:"\f24e"}.ion-stats-bars:before{content:"\f2b5"}.ion-steam:before{content:"\f30b"}.ion-stop:before{content:"\f24f"}.ion-thermometer:before{content:"\f2b6"}.ion-thumbsdown:before{content:"\f250"}.ion-thumbsup:before{content:"\f251"}.ion-toggle:before{content:"\f355"}.ion-toggle-filled:before{content:"\f354"}.ion-transgender:before{content:"\f4f5"}.ion-trash-a:before{content:"\f252"}.ion-trash-b:before{content:"\f253"}.ion-trophy:before{content:"\f356"}.ion-tshirt:before{content:"\f4f7"}.ion-tshirt-outline:before{content:"\f4f6"}.ion-umbrella:before{content:"\f2b7"}.ion-university:before{content:"\f357"}.ion-unlocked:before{content:"\f254"}.ion-upload:before{content:"\f255"}.ion-usb:before{content:"\f2b8"}.ion-videocamera:before{content:"\f256"}.ion-volume-high:before{content:"\f257"}.ion-volume-low:before{content:"\f258"}.ion-volume-medium:before{content:"\f259"}.ion-volume-mute:before{content:"\f25a"}.ion-wand:before{content:"\f358"}.ion-waterdrop:before{content:"\f25b"}.ion-wifi:before{content:"\f25c"}.ion-wineglass:before{content:"\f2b9"}.ion-woman:before{content:"\f25d"}.ion-wrench:before{content:"\f2ba"}.ion-xbox:before{content:"\f30c"}




html,body{height:100%}.layout-boxed html,.layout-boxed body{height:100%}body{font-family:'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;font-weight:400;overflow-x:hidden;overflow-y:auto}.wrapper{height:100%;position:relative;overflow-x:hidden;overflow-y:auto}.wrapper:before,.wrapper:after{content:" ";display:table}.wrapper:after{clear:both}.layout-boxed .wrapper{max-width:1250px;margin:0 auto;min-height:100%;box-shadow:0 0 8px rgba(0,0,0,0.5);position:relative}.layout-boxed{background-color:#f9fafc}.content-wrapper,.main-footer{-webkit-transition:-webkit-transform .3s ease-in-out,margin .3s ease-in-out;-moz-transition:-moz-transform .3s ease-in-out,margin .3s ease-in-out;-o-transition:-o-transform .3s ease-in-out,margin .3s ease-in-out;transition:transform .3s ease-in-out,margin .3s ease-in-out;margin-left:230px;z-index:820}.layout-top-nav .content-wrapper,.layout-top-nav .main-footer{margin-left:0}@media (max-width:767px){.content-wrapper,.main-footer{margin-left:0}}@media (min-width:768px){.sidebar-collapse .content-wrapper,.sidebar-collapse .main-footer{margin-left:0}}@media (max-width:767px){.sidebar-open .content-wrapper,.sidebar-open .main-footer{-webkit-transform:translate(230px, 0);-ms-transform:translate(230px, 0);-o-transform:translate(230px, 0);transform:translate(230px, 0)}}.content-wrapper{min-height:100%;background-color:#ecf0f5;z-index:800}.main-footer{background:#fff;padding:15px;color:#444;border-top:1px solid #d2d6de}.fixed .main-header,.fixed .main-sidebar,.fixed .left-side{position:fixed}.fixed .main-header{top:0;right:0;left:0}.fixed .content-wrapper,.fixed .right-side{padding-top:50px}@media (max-width:767px){.fixed .content-wrapper,.fixed .right-side{padding-top:100px}}.fixed.layout-boxed .wrapper{max-width:100%}.fixed .wrapper{overflow:hidden}.hold-transition .content-wrapper,.hold-transition .right-side,.hold-transition .main-footer,.hold-transition .main-sidebar,.hold-transition .left-side,.hold-transition .main-header .navbar,.hold-transition .main-header .logo,.hold-transition .menu-open .fa-angle-left{-webkit-transition:none;-o-transition:none;transition:none}.content{min-height:250px;padding:15px;margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{font-family:'Source Sans Pro',sans-serif}a{color:#3c8dbc}a:hover,a:active,a:focus{outline:none;text-decoration:none;color:#72afd2}.page-header{margin:10px 0 20px 0;font-size:22px}.page-header>small{color:#666;display:block;margin-top:5px}.main-header{position:relative;max-height:100px;z-index:1030}.main-header .navbar{-webkit-transition:margin-left .3s ease-in-out;-o-transition:margin-left .3s ease-in-out;transition:margin-left .3s ease-in-out;margin-bottom:0;margin-left:230px;border:none;min-height:50px;border-radius:0}.layout-top-nav .main-header .navbar{margin-left:0}.main-header #navbar-search-input.form-control{background:rgba(255,255,255,0.2);border-color:transparent}.main-header #navbar-search-input.form-control:focus,.main-header #navbar-search-input.form-control:active{border-color:rgba(0,0,0,0.1);background:rgba(255,255,255,0.9)}.main-header #navbar-search-input.form-control::-moz-placeholder{color:#ccc;opacity:1}.main-header #navbar-search-input.form-control:-ms-input-placeholder{color:#ccc}.main-header #navbar-search-input.form-control::-webkit-input-placeholder{color:#ccc}.main-header .navbar-custom-menu,.main-header .navbar-right{float:right}@media (max-width:991px){.main-header .navbar-custom-menu a,.main-header .navbar-right a{color:inherit;background:transparent}}@media (max-width:767px){.main-header .navbar-right{float:none}.navbar-collapse .main-header .navbar-right{margin:7.5px -15px}.main-header .navbar-right>li{color:inherit;border:0}}.main-header .sidebar-toggle{float:left;background-color:transparent;background-image:none;padding:15px 15px;font-family:fontAwesome}.main-header .sidebar-toggle:before{content:"\f0c9"}.main-header .sidebar-toggle:hover{color:#fff}.main-header .sidebar-toggle:focus,.main-header .sidebar-toggle:active{background:transparent}.main-header .sidebar-toggle .icon-bar{display:none}.main-header .navbar .nav>li.user>a>.fa,.main-header .navbar .nav>li.user>a>.glyphicon,.main-header .navbar .nav>li.user>a>.ion{margin-right:5px}.main-header .navbar .nav>li>a>.label{position:absolute;top:9px;right:7px;text-align:center;font-size:9px;padding:2px 3px;line-height:.9}.main-header .logo{-webkit-transition:width .3s ease-in-out;-o-transition:width .3s ease-in-out;transition:width .3s ease-in-out;display:block;float:left;height:50px;font-size:20px;line-height:50px;text-align:center;width:230px;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;padding:0 15px;font-weight:300;overflow:hidden}.main-header .logo .logo-lg{display:block}.main-header .logo .logo-mini{display:none}.main-header .navbar-brand{color:#fff}.content-header{position:relative;padding:15px 15px 0 15px}.content-header>h1{margin:0;font-size:24px}.content-header>h1>small{font-size:15px;display:inline-block;padding-left:4px;font-weight:300}.content-header>.breadcrumb{float:right;background:transparent;margin-top:0;margin-bottom:0;font-size:12px;padding:7px 5px;position:absolute;top:15px;right:10px;border-radius:2px}.content-header>.breadcrumb>li>a{color:#444;text-decoration:none;display:inline-block}.content-header>.breadcrumb>li>a>.fa,.content-header>.breadcrumb>li>a>.glyphicon,.content-header>.breadcrumb>li>a>.ion{margin-right:5px}.content-header>.breadcrumb>li+li:before{content:'>\00a0'}@media (max-width:991px){.content-header>.breadcrumb{position:relative;margin-top:5px;top:0;right:0;float:none;background:#d2d6de;padding-left:10px}.content-header>.breadcrumb li:before{color:#97a0b3}}.navbar-toggle{color:#fff;border:0;margin:0;padding:15px 15px}@media (max-width:991px){.navbar-custom-menu .navbar-nav>li{float:left}.navbar-custom-menu .navbar-nav{margin:0;float:left}.navbar-custom-menu .navbar-nav>li>a{padding-top:15px;padding-bottom:15px;line-height:20px}}@media (max-width:767px){.main-header{position:relative}.main-header .logo,.main-header .navbar{width:100%;float:none}.main-header .navbar{margin:0}.main-header .navbar-custom-menu{float:right}}@media (max-width:991px){.navbar-collapse.pull-left{float:none !important}.navbar-collapse.pull-left+.navbar-custom-menu{display:block;position:absolute;top:0;right:40px}}.main-sidebar{position:absolute;top:0;left:0;padding-top:50px;min-height:100%;width:230px;z-index:810;-webkit-transition:-webkit-transform .3s ease-in-out,width .3s ease-in-out;-moz-transition:-moz-transform .3s ease-in-out,width .3s ease-in-out;-o-transition:-o-transform .3s ease-in-out,width .3s ease-in-out;transition:transform .3s ease-in-out,width .3s ease-in-out}@media (max-width:767px){.main-sidebar{padding-top:100px}}@media (max-width:767px){.main-sidebar{-webkit-transform:translate(-230px, 0);-ms-transform:translate(-230px, 0);-o-transform:translate(-230px, 0);transform:translate(-230px, 0)}}@media (min-width:768px){.sidebar-collapse .main-sidebar{-webkit-transform:translate(-230px, 0);-ms-transform:translate(-230px, 0);-o-transform:translate(-230px, 0);transform:translate(-230px, 0)}}@media (max-width:767px){.sidebar-open .main-sidebar{-webkit-transform:translate(0, 0);-ms-transform:translate(0, 0);-o-transform:translate(0, 0);transform:translate(0, 0)}}.sidebar{padding-bottom:10px}.sidebar-form input:focus{border-color:transparent}.user-panel{position:relative;width:100%;padding:10px;overflow:hidden}.user-panel:before,.user-panel:after{content:" ";display:table}.user-panel:after{clear:both}.user-panel>.image>img{width:100%;max-width:45px;height:auto}.user-panel>.info{padding:5px 5px 5px 15px;line-height:1;position:absolute;left:55px}.user-panel>.info>p{font-weight:600;margin-bottom:9px}.user-panel>.info>a{text-decoration:none;padding-right:5px;margin-top:3px;font-size:11px}.user-panel>.info>a>.fa,.user-panel>.info>a>.ion,.user-panel>.info>a>.glyphicon{margin-right:3px}.sidebar-menu{list-style:none;margin:0;padding:0}.sidebar-menu>li{position:relative;margin:0;padding:0}.sidebar-menu>li>a{padding:12px 5px 12px 15px;display:block}.sidebar-menu>li>a>.fa,.sidebar-menu>li>a>.glyphicon,.sidebar-menu>li>a>.ion{width:20px}.sidebar-menu>li .label,.sidebar-menu>li .badge{margin-right:5px}.sidebar-menu>li .badge{margin-top:3px}.sidebar-menu li.header{padding:10px 25px 10px 15px;font-size:12px}.sidebar-menu li>a>.fa-angle-left,.sidebar-menu li>a>.pull-right-container>.fa-angle-left{width:auto;height:auto;padding:0;margin-right:10px;-webkit-transition:transform .5s ease;-o-transition:transform .5s ease;transition:transform .5s ease}.sidebar-menu li>a>.fa-angle-left{position:absolute;top:50%;right:10px;margin-top:-8px}.sidebar-menu .menu-open>a>.fa-angle-left,.sidebar-menu .menu-open>a>.pull-right-container>.fa-angle-left{-webkit-transform:rotate(-90deg);-ms-transform:rotate(-90deg);-o-transform:rotate(-90deg);transform:rotate(-90deg)}.sidebar-menu .active>.treeview-menu{display:block}@media (min-width:768px){.sidebar-mini.sidebar-collapse .content-wrapper,.sidebar-mini.sidebar-collapse .right-side,.sidebar-mini.sidebar-collapse .main-footer{margin-left:50px !important;z-index:840}.sidebar-mini.sidebar-collapse .main-sidebar{-webkit-transform:translate(0, 0);-ms-transform:translate(0, 0);-o-transform:translate(0, 0);transform:translate(0, 0);width:50px !important;z-index:850}.sidebar-mini.sidebar-collapse .sidebar-menu>li{position:relative}.sidebar-mini.sidebar-collapse .sidebar-menu>li>a{margin-right:0}.sidebar-mini.sidebar-collapse .sidebar-menu>li>a>span{border-top-right-radius:4px}.sidebar-mini.sidebar-collapse .sidebar-menu>li:not(.treeview)>a>span{border-bottom-right-radius:4px}.sidebar-mini.sidebar-collapse .sidebar-menu>li>.treeview-menu{padding-top:5px;padding-bottom:5px;border-bottom-right-radius:4px}.sidebar-mini.sidebar-collapse .main-sidebar .user-panel>.info,.sidebar-mini.sidebar-collapse .sidebar-form,.sidebar-mini.sidebar-collapse .sidebar-menu>li>a>span,.sidebar-mini.sidebar-collapse .sidebar-menu>li>.treeview-menu,.sidebar-mini.sidebar-collapse .sidebar-menu>li>a>.pull-right,.sidebar-mini.sidebar-collapse .sidebar-menu li.header{display:none !important;-webkit-transform:translateZ(0)}.sidebar-mini.sidebar-collapse .main-header .logo{width:50px}.sidebar-mini.sidebar-collapse .main-header .logo>.logo-mini{display:block;margin-left:-15px;margin-right:-15px;font-size:18px}.sidebar-mini.sidebar-collapse .main-header .logo>.logo-lg{display:none}.sidebar-mini.sidebar-collapse .main-header .navbar{margin-left:50px}}@media (min-width:768px){.sidebar-mini:not(.sidebar-mini-expand-feature).sidebar-collapse .sidebar-menu>li:hover>a>span:not(.pull-right),.sidebar-mini:not(.sidebar-mini-expand-feature).sidebar-collapse .sidebar-menu>li:hover>.treeview-menu{display:block !important;position:absolute;width:180px;left:50px}.sidebar-mini:not(.sidebar-mini-expand-feature).sidebar-collapse .sidebar-menu>li:hover>a>span{top:0;margin-left:-3px;padding:12px 5px 12px 20px;background-color:inherit}.sidebar-mini:not(.sidebar-mini-expand-feature).sidebar-collapse .sidebar-menu>li:hover>a>.pull-right-container{position:relative !important;float:right;width:auto !important;left:180px !important;top:-22px !important;z-index:900}.sidebar-mini:not(.sidebar-mini-expand-feature).sidebar-collapse .sidebar-menu>li:hover>a>.pull-right-container>.label:not(:first-of-type){display:none}.sidebar-mini:not(.sidebar-mini-expand-feature).sidebar-collapse .sidebar-menu>li:hover>.treeview-menu{top:44px;margin-left:0}}.sidebar-expanded-on-hover .main-footer,.sidebar-expanded-on-hover .content-wrapper{margin-left:50px}.sidebar-expanded-on-hover .main-sidebar{box-shadow:3px 0 8px rgba(0,0,0,0.125)}.sidebar-menu,.main-sidebar .user-panel,.sidebar-menu>li.header{white-space:nowrap;overflow:hidden}.sidebar-menu:hover{overflow:visible}.sidebar-form,.sidebar-menu>li.header{overflow:hidden;text-overflow:clip}.sidebar-menu li>a{position:relative}.sidebar-menu li>a>.pull-right-container{position:absolute;right:10px;top:50%;margin-top:-7px}.control-sidebar-bg{position:fixed;z-index:1000;bottom:0}.control-sidebar-bg,.control-sidebar{top:0;right:-230px;width:230px;-webkit-transition:right .3s ease-in-out;-o-transition:right .3s ease-in-out;transition:right .3s ease-in-out}.control-sidebar{position:absolute;padding-top:50px;z-index:1010}@media (max-width:767px){.control-sidebar{padding-top:100px}}.control-sidebar>.tab-content{padding:10px 15px}.control-sidebar.control-sidebar-open,.control-sidebar.control-sidebar-open+.control-sidebar-bg{right:0}.control-sidebar-open .control-sidebar-bg,.control-sidebar-open .control-sidebar{right:0}@media (min-width:768px){.control-sidebar-open .content-wrapper,.control-sidebar-open .right-side,.control-sidebar-open .main-footer{margin-right:230px}}.fixed .control-sidebar{position:fixed;height:100%;overflow-y:auto;padding-bottom:50px}.nav-tabs.control-sidebar-tabs>li:first-of-type>a,.nav-tabs.control-sidebar-tabs>li:first-of-type>a:hover,.nav-tabs.control-sidebar-tabs>li:first-of-type>a:focus{border-left-width:0}.nav-tabs.control-sidebar-tabs>li>a{border-radius:0}.nav-tabs.control-sidebar-tabs>li>a,.nav-tabs.control-sidebar-tabs>li>a:hover{border-top:none;border-right:none;border-left:1px solid transparent;border-bottom:1px solid transparent}.nav-tabs.control-sidebar-tabs>li>a .icon{font-size:16px}.nav-tabs.control-sidebar-tabs>li.active>a,.nav-tabs.control-sidebar-tabs>li.active>a:hover,.nav-tabs.control-sidebar-tabs>li.active>a:focus,.nav-tabs.control-sidebar-tabs>li.active>a:active{border-top:none;border-right:none;border-bottom:none}@media (max-width:768px){.nav-tabs.control-sidebar-tabs{display:table}.nav-tabs.control-sidebar-tabs>li{display:table-cell}}.control-sidebar-heading{font-weight:400;font-size:16px;padding:10px 0;margin-bottom:10px}.control-sidebar-subheading{display:block;font-weight:400;font-size:14px}.control-sidebar-menu{list-style:none;padding:0;margin:0 -15px}.control-sidebar-menu>li>a{display:block;padding:10px 15px}.control-sidebar-menu>li>a:before,.control-sidebar-menu>li>a:after{content:" ";display:table}.control-sidebar-menu>li>a:after{clear:both}.control-sidebar-menu>li>a>.control-sidebar-subheading{margin-top:0}.control-sidebar-menu .menu-icon{float:left;width:35px;height:35px;border-radius:50%;text-align:center;line-height:35px}.control-sidebar-menu .menu-info{margin-left:45px;margin-top:3px}.control-sidebar-menu .menu-info>.control-sidebar-subheading{margin:0}.control-sidebar-menu .menu-info>p{margin:0;font-size:11px}.control-sidebar-menu .progress{margin:0}.control-sidebar-dark{color:#b8c7ce}.control-sidebar-dark,.control-sidebar-dark+.control-sidebar-bg{background:#222d32}.control-sidebar-dark .nav-tabs.control-sidebar-tabs{border-bottom:#1c2529}.control-sidebar-dark .nav-tabs.control-sidebar-tabs>li>a{background:#181f23;color:#b8c7ce}.control-sidebar-dark .nav-tabs.control-sidebar-tabs>li>a,.control-sidebar-dark .nav-tabs.control-sidebar-tabs>li>a:hover,.control-sidebar-dark .nav-tabs.control-sidebar-tabs>li>a:focus{border-left-color:#141a1d;border-bottom-color:#141a1d}.control-sidebar-dark .nav-tabs.control-sidebar-tabs>li>a:hover,.control-sidebar-dark .nav-tabs.control-sidebar-tabs>li>a:focus,.control-sidebar-dark .nav-tabs.control-sidebar-tabs>li>a:active{background:#1c2529}.control-sidebar-dark .nav-tabs.control-sidebar-tabs>li>a:hover{color:#fff}.control-sidebar-dark .nav-tabs.control-sidebar-tabs>li.active>a,.control-sidebar-dark .nav-tabs.control-sidebar-tabs>li.active>a:hover,.control-sidebar-dark .nav-tabs.control-sidebar-tabs>li.active>a:focus,.control-sidebar-dark .nav-tabs.control-sidebar-tabs>li.active>a:active{background:#222d32;color:#fff}.control-sidebar-dark .control-sidebar-heading,.control-sidebar-dark .control-sidebar-subheading{color:#fff}.control-sidebar-dark .control-sidebar-menu>li>a:hover{background:#1e282c}.control-sidebar-dark .control-sidebar-menu>li>a .menu-info>p{color:#b8c7ce}.control-sidebar-light{color:#5e5e5e}.control-sidebar-light,.control-sidebar-light+.control-sidebar-bg{background:#f9fafc;border-left:1px solid #d2d6de}.control-sidebar-light .nav-tabs.control-sidebar-tabs{border-bottom:#d2d6de}.control-sidebar-light .nav-tabs.control-sidebar-tabs>li>a{background:#e8ecf4;color:#444}.control-sidebar-light .nav-tabs.control-sidebar-tabs>li>a,.control-sidebar-light .nav-tabs.control-sidebar-tabs>li>a:hover,.control-sidebar-light .nav-tabs.control-sidebar-tabs>li>a:focus{border-left-color:#d2d6de;border-bottom-color:#d2d6de}.control-sidebar-light .nav-tabs.control-sidebar-tabs>li>a:hover,.control-sidebar-light .nav-tabs.control-sidebar-tabs>li>a:focus,.control-sidebar-light .nav-tabs.control-sidebar-tabs>li>a:active{background:#eff1f7}.control-sidebar-light .nav-tabs.control-sidebar-tabs>li.active>a,.control-sidebar-light .nav-tabs.control-sidebar-tabs>li.active>a:hover,.control-sidebar-light .nav-tabs.control-sidebar-tabs>li.active>a:focus,.control-sidebar-light .nav-tabs.control-sidebar-tabs>li.active>a:active{background:#f9fafc;color:#111}.control-sidebar-light .control-sidebar-heading,.control-sidebar-light .control-sidebar-subheading{color:#111}.control-sidebar-light .control-sidebar-menu{margin-left:-14px}.control-sidebar-light .control-sidebar-menu>li>a:hover{background:#f4f4f5}.control-sidebar-light .control-sidebar-menu>li>a .menu-info>p{color:#5e5e5e}.dropdown-menu{box-shadow:none;border-color:#eee}.dropdown-menu>li>a{color:#777}.dropdown-menu>li>a>.glyphicon,.dropdown-menu>li>a>.fa,.dropdown-menu>li>a>.ion{margin-right:10px}.dropdown-menu>li>a:hover{background-color:#e1e3e9;color:#333}.dropdown-menu>.divider{background-color:#eee}.navbar-nav>.notifications-menu>.dropdown-menu,.navbar-nav>.messages-menu>.dropdown-menu,.navbar-nav>.tasks-menu>.dropdown-menu{width:280px;padding:0 0 0 0;margin:0;top:100%}.navbar-nav>.notifications-menu>.dropdown-menu>li,.navbar-nav>.messages-menu>.dropdown-menu>li,.navbar-nav>.tasks-menu>.dropdown-menu>li{position:relative}.navbar-nav>.notifications-menu>.dropdown-menu>li.header,.navbar-nav>.messages-menu>.dropdown-menu>li.header,.navbar-nav>.tasks-menu>.dropdown-menu>li.header{border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0;background-color:#ffffff;padding:7px 10px;border-bottom:1px solid #f4f4f4;color:#444444;font-size:14px}.navbar-nav>.notifications-menu>.dropdown-menu>li.footer>a,.navbar-nav>.messages-menu>.dropdown-menu>li.footer>a,.navbar-nav>.tasks-menu>.dropdown-menu>li.footer>a{border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px;font-size:12px;background-color:#fff;padding:7px 10px;border-bottom:1px solid #eeeeee;color:#444 !important;text-align:center}@media (max-width:991px){.navbar-nav>.notifications-menu>.dropdown-menu>li.footer>a,.navbar-nav>.messages-menu>.dropdown-menu>li.footer>a,.navbar-nav>.tasks-menu>.dropdown-menu>li.footer>a{background:#fff !important;color:#444 !important}}.navbar-nav>.notifications-menu>.dropdown-menu>li.footer>a:hover,.navbar-nav>.messages-menu>.dropdown-menu>li.footer>a:hover,.navbar-nav>.tasks-menu>.dropdown-menu>li.footer>a:hover{text-decoration:none;font-weight:normal}.navbar-nav>.notifications-menu>.dropdown-menu>li .menu,.navbar-nav>.messages-menu>.dropdown-menu>li .menu,.navbar-nav>.tasks-menu>.dropdown-menu>li .menu{max-height:200px;margin:0;padding:0;list-style:none;overflow-x:hidden}.navbar-nav>.notifications-menu>.dropdown-menu>li .menu>li>a,.navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a,.navbar-nav>.tasks-menu>.dropdown-menu>li .menu>li>a{display:block;white-space:nowrap;border-bottom:1px solid #f4f4f4}.navbar-nav>.notifications-menu>.dropdown-menu>li .menu>li>a:hover,.navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a:hover,.navbar-nav>.tasks-menu>.dropdown-menu>li .menu>li>a:hover{background:#f4f4f4;text-decoration:none}.navbar-nav>.notifications-menu>.dropdown-menu>li .menu>li>a{color:#444444;overflow:hidden;text-overflow:ellipsis;padding:10px}.navbar-nav>.notifications-menu>.dropdown-menu>li .menu>li>a>.glyphicon,.navbar-nav>.notifications-menu>.dropdown-menu>li .menu>li>a>.fa,.navbar-nav>.notifications-menu>.dropdown-menu>li .menu>li>a>.ion{width:20px}.navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a{margin:0;padding:10px 10px}.navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a>div>img{margin:auto 10px auto auto;width:40px;height:40px}.navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a>h4{padding:0;margin:0 0 0 45px;color:#444444;font-size:15px;position:relative}.navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a>h4>small{color:#999999;font-size:10px;position:absolute;top:0;right:0}.navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a>p{margin:0 0 0 45px;font-size:12px;color:#888888}.navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a:before,.navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a:after{content:" ";display:table}.navbar-nav>.messages-menu>.dropdown-menu>li .menu>li>a:after{clear:both}.navbar-nav>.tasks-menu>.dropdown-menu>li .menu>li>a{padding:10px}.navbar-nav>.tasks-menu>.dropdown-menu>li .menu>li>a>h3{font-size:14px;padding:0;margin:0 0 10px 0;color:#666666}.navbar-nav>.tasks-menu>.dropdown-menu>li .menu>li>a>.progress{padding:0;margin:0}.navbar-nav>.user-menu>.dropdown-menu{border-top-right-radius:0;border-top-left-radius:0;padding:1px 0 0 0;border-top-width:0;width:280px}.navbar-nav>.user-menu>.dropdown-menu,.navbar-nav>.user-menu>.dropdown-menu>.user-body{border-bottom-right-radius:4px;border-bottom-left-radius:4px}.navbar-nav>.user-menu>.dropdown-menu>li.user-header{height:175px;padding:10px;text-align:center}.navbar-nav>.user-menu>.dropdown-menu>li.user-header>img{z-index:5;height:90px;width:90px;border:3px solid;border-color:transparent;border-color:rgba(255,255,255,0.2)}.navbar-nav>.user-menu>.dropdown-menu>li.user-header>p{z-index:5;color:#fff;color:rgba(255,255,255,0.8);font-size:17px;margin-top:10px}.navbar-nav>.user-menu>.dropdown-menu>li.user-header>p>small{display:block;font-size:12px}.navbar-nav>.user-menu>.dropdown-menu>.user-body{padding:15px;border-bottom:1px solid #f4f4f4;border-top:1px solid #dddddd}.navbar-nav>.user-menu>.dropdown-menu>.user-body:before,.navbar-nav>.user-menu>.dropdown-menu>.user-body:after{content:" ";display:table}.navbar-nav>.user-menu>.dropdown-menu>.user-body:after{clear:both}.navbar-nav>.user-menu>.dropdown-menu>.user-body a{color:#444 !important}@media (max-width:991px){.navbar-nav>.user-menu>.dropdown-menu>.user-body a{background:#fff !important;color:#444 !important}}.navbar-nav>.user-menu>.dropdown-menu>.user-footer{background-color:#f9f9f9;padding:10px}.navbar-nav>.user-menu>.dropdown-menu>.user-footer:before,.navbar-nav>.user-menu>.dropdown-menu>.user-footer:after{content:" ";display:table}.navbar-nav>.user-menu>.dropdown-menu>.user-footer:after{clear:both}.navbar-nav>.user-menu>.dropdown-menu>.user-footer .btn-default{color:#666666}@media (max-width:991px){.navbar-nav>.user-menu>.dropdown-menu>.user-footer .btn-default:hover{background-color:#f9f9f9}}.navbar-nav>.user-menu .user-image{float:left;width:25px;height:25px;border-radius:50%;margin-right:10px;margin-top:-2px}@media (max-width:767px){.navbar-nav>.user-menu .user-image{float:none;margin-right:0;margin-top:-8px;line-height:10px}}.open:not(.dropup)>.animated-dropdown-menu{backface-visibility:visible !important;-webkit-animation:flipInX .7s both;-o-animation:flipInX .7s both;animation:flipInX .7s both}@keyframes flipInX{0%{transform:perspective(400px) rotate3d(1, 0, 0, 90deg);transition-timing-function:ease-in;opacity:0}40%{transform:perspective(400px) rotate3d(1, 0, 0, -20deg);transition-timing-function:ease-in}60%{transform:perspective(400px) rotate3d(1, 0, 0, 10deg);opacity:1}80%{transform:perspective(400px) rotate3d(1, 0, 0, -5deg)}100%{transform:perspective(400px)}}@-webkit-keyframes flipInX{0%{-webkit-transform:perspective(400px) rotate3d(1, 0, 0, 90deg);-webkit-transition-timing-function:ease-in;opacity:0}40%{-webkit-transform:perspective(400px) rotate3d(1, 0, 0, -20deg);-webkit-transition-timing-function:ease-in}60%{-webkit-transform:perspective(400px) rotate3d(1, 0, 0, 10deg);opacity:1}80%{-webkit-transform:perspective(400px) rotate3d(1, 0, 0, -5deg)}100%{-webkit-transform:perspective(400px)}}.navbar-custom-menu>.navbar-nav>li{position:relative}.navbar-custom-menu>.navbar-nav>li>.dropdown-menu{position:absolute;right:0;left:auto}@media (max-width:991px){.navbar-custom-menu>.navbar-nav{float:right}.navbar-custom-menu>.navbar-nav>li{position:static}.navbar-custom-menu>.navbar-nav>li>.dropdown-menu{position:absolute;right:5%;left:auto;border:1px solid #ddd;background:#fff}}.form-control{border-radius:0;box-shadow:none;border-color:#d2d6de}.form-control:focus{border-color:#3c8dbc;box-shadow:none}.form-control::-moz-placeholder,.form-control:-ms-input-placeholder,.form-control::-webkit-input-placeholder{color:#bbb;opacity:1}.form-control:not(select){-webkit-appearance:none;-moz-appearance:none;appearance:none}.form-group.has-success label{color:#00a65a}.form-group.has-success .form-control,.form-group.has-success .input-group-addon{border-color:#00a65a;box-shadow:none}.form-group.has-success .help-block{color:#00a65a}.form-group.has-warning label{color:#f39c12}.form-group.has-warning .form-control,.form-group.has-warning .input-group-addon{border-color:#f39c12;box-shadow:none}.form-group.has-warning .help-block{color:#f39c12}.form-group.has-error label{color:#dd4b39}.form-group.has-error .form-control,.form-group.has-error .input-group-addon{border-color:#dd4b39;box-shadow:none}.form-group.has-error .help-block{color:#dd4b39}.input-group .input-group-addon{border-radius:0;border-color:#d2d6de;background-color:#fff}.btn-group-vertical .btn.btn-flat:first-of-type,.btn-group-vertical .btn.btn-flat:last-of-type{border-radius:0}.icheck>label{padding-left:0}.form-control-feedback.fa{line-height:34px}.input-lg+.form-control-feedback.fa,.input-group-lg+.form-control-feedback.fa,.form-group-lg .form-control+.form-control-feedback.fa{line-height:46px}.input-sm+.form-control-feedback.fa,.input-group-sm+.form-control-feedback.fa,.form-group-sm .form-control+.form-control-feedback.fa{line-height:30px}.progress,.progress>.progress-bar{-webkit-box-shadow:none;box-shadow:none}.progress,.progress>.progress-bar,.progress .progress-bar,.progress>.progress-bar .progress-bar{border-radius:1px}.progress.sm,.progress-sm{height:10px}.progress.sm,.progress-sm,.progress.sm .progress-bar,.progress-sm .progress-bar{border-radius:1px}.progress.xs,.progress-xs{height:7px}.progress.xs,.progress-xs,.progress.xs .progress-bar,.progress-xs .progress-bar{border-radius:1px}.progress.xxs,.progress-xxs{height:3px}.progress.xxs,.progress-xxs,.progress.xxs .progress-bar,.progress-xxs .progress-bar{border-radius:1px}.progress.vertical{position:relative;width:30px;height:200px;display:inline-block;margin-right:10px}.progress.vertical>.progress-bar{width:100%;position:absolute;bottom:0}.progress.vertical.sm,.progress.vertical.progress-sm{width:20px}.progress.vertical.xs,.progress.vertical.progress-xs{width:10px}.progress.vertical.xxs,.progress.vertical.progress-xxs{width:3px}.progress-group .progress-text{font-weight:600}.progress-group .progress-number{float:right}.table tr>td .progress{margin:0}.progress-bar-light-blue,.progress-bar-primary{background-color:#3c8dbc}.progress-striped .progress-bar-light-blue,.progress-striped .progress-bar-primary{background-image:-webkit-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent)}.progress-bar-green,.progress-bar-success{background-color:#00a65a}.progress-striped .progress-bar-green,.progress-striped .progress-bar-success{background-image:-webkit-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent)}.progress-bar-aqua,.progress-bar-info{background-color:#00c0ef}.progress-striped .progress-bar-aqua,.progress-striped .progress-bar-info{background-image:-webkit-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent)}.progress-bar-yellow,.progress-bar-warning{background-color:#f39c12}.progress-striped .progress-bar-yellow,.progress-striped .progress-bar-warning{background-image:-webkit-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent)}.progress-bar-red,.progress-bar-danger{background-color:#dd4b39}.progress-striped .progress-bar-red,.progress-striped .progress-bar-danger{background-image:-webkit-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent)}.small-box{border-radius:2px;position:relative;display:block;margin-bottom:20px;box-shadow:0 1px 1px rgba(0,0,0,0.1)}.small-box>.inner{padding:10px}.small-box>.small-box-footer{position:relative;text-align:center;padding:3px 0;color:#fff;color:rgba(255,255,255,0.8);display:block;z-index:10;background:rgba(0,0,0,0.1);text-decoration:none}.small-box>.small-box-footer:hover{color:#fff;background:rgba(0,0,0,0.15)}.small-box h3{font-size:38px;font-weight:bold;margin:0 0 10px 0;white-space:nowrap;padding:0}.small-box p{font-size:15px}.small-box p>small{display:block;color:#f9f9f9;font-size:13px;margin-top:5px}.small-box h3,.small-box p{z-index:5}.small-box .icon{-webkit-transition:all .3s linear;-o-transition:all .3s linear;transition:all .3s linear;position:absolute;top:-10px;right:10px;z-index:0;font-size:90px;color:rgba(0,0,0,0.15)}.small-box:hover{text-decoration:none;color:#f9f9f9}.small-box:hover .icon{font-size:95px}@media (max-width:767px){.small-box{text-align:center}.small-box .icon{display:none}.small-box p{font-size:12px}}.box{position:relative;border-radius:3px;background:#ffffff;border-top:3px solid #d2d6de;margin-bottom:20px;width:100%;box-shadow:0 1px 1px rgba(0,0,0,0.1)}.box.box-primary{border-top-color:#3c8dbc}.box.box-info{border-top-color:#00c0ef}.box.box-danger{border-top-color:#dd4b39}.box.box-warning{border-top-color:#f39c12}.box.box-success{border-top-color:#00a65a}.box.box-default{border-top-color:#d2d6de}.box.collapsed-box .box-body,.box.collapsed-box .box-footer{display:none}.box .nav-stacked>li{border-bottom:1px solid #f4f4f4;margin:0}.box .nav-stacked>li:last-of-type{border-bottom:none}.box.height-control .box-body{max-height:300px;overflow:auto}.box .border-right{border-right:1px solid #f4f4f4}.box .border-left{border-left:1px solid #f4f4f4}.box.box-solid{border-top:0}.box.box-solid>.box-header .btn.btn-default{background:transparent}.box.box-solid>.box-header .btn:hover,.box.box-solid>.box-header a:hover{background:rgba(0,0,0,0.1)}.box.box-solid.box-default{border:1px solid #d2d6de}.box.box-solid.box-default>.box-header{color:#444;background:#d2d6de;background-color:#d2d6de}.box.box-solid.box-default>.box-header a,.box.box-solid.box-default>.box-header .btn{color:#444}.box.box-solid.box-primary{border:1px solid #3c8dbc}.box.box-solid.box-primary>.box-header{color:#fff;background:#3c8dbc;background-color:#3c8dbc}.box.box-solid.box-primary>.box-header a,.box.box-solid.box-primary>.box-header .btn{color:#fff}.box.box-solid.box-info{border:1px solid #00c0ef}.box.box-solid.box-info>.box-header{color:#fff;background:#00c0ef;background-color:#00c0ef}.box.box-solid.box-info>.box-header a,.box.box-solid.box-info>.box-header .btn{color:#fff}.box.box-solid.box-danger{border:1px solid #dd4b39}.box.box-solid.box-danger>.box-header{color:#fff;background:#dd4b39;background-color:#dd4b39}.box.box-solid.box-danger>.box-header a,.box.box-solid.box-danger>.box-header .btn{color:#fff}.box.box-solid.box-warning{border:1px solid #f39c12}.box.box-solid.box-warning>.box-header{color:#fff;background:#f39c12;background-color:#f39c12}.box.box-solid.box-warning>.box-header a,.box.box-solid.box-warning>.box-header .btn{color:#fff}.box.box-solid.box-success{border:1px solid #00a65a}.box.box-solid.box-success>.box-header{color:#fff;background:#00a65a;background-color:#00a65a}.box.box-solid.box-success>.box-header a,.box.box-solid.box-success>.box-header .btn{color:#fff}.box.box-solid>.box-header>.box-tools .btn{border:0;box-shadow:none}.box.box-solid[class*='bg']>.box-header{color:#fff}.box .box-group>.box{margin-bottom:5px}.box .knob-label{text-align:center;color:#333;font-weight:100;font-size:12px;margin-bottom:0.3em}.box>.overlay,.overlay-wrapper>.overlay,.box>.loading-img,.overlay-wrapper>.loading-img{position:absolute;top:0;left:0;width:100%;height:100%}.box .overlay,.overlay-wrapper .overlay{z-index:50;background:rgba(255,255,255,0.7);border-radius:3px}.box .overlay>.fa,.overlay-wrapper .overlay>.fa{position:absolute;top:50%;left:50%;margin-left:-15px;margin-top:-15px;color:#000;font-size:30px}.box .overlay.dark,.overlay-wrapper .overlay.dark{background:rgba(0,0,0,0.5)}.box-header:before,.box-body:before,.box-footer:before,.box-header:after,.box-body:after,.box-footer:after{content:" ";display:table}.box-header:after,.box-body:after,.box-footer:after{clear:both}.box-header{color:#444;display:block;padding:10px;position:relative}.box-header.with-border{border-bottom:1px solid #f4f4f4}.collapsed-box .box-header.with-border{border-bottom:none}.box-header>.fa,.box-header>.glyphicon,.box-header>.ion,.box-header .box-title{display:inline-block;font-size:18px;margin:0;line-height:1}.box-header>.fa,.box-header>.glyphicon,.box-header>.ion{margin-right:5px}.box-header>.box-tools{position:absolute;right:10px;top:5px}.box-header>.box-tools [data-toggle="tooltip"]{position:relative}.box-header>.box-tools.pull-right .dropdown-menu{right:0;left:auto}.box-header>.box-tools .dropdown-menu>li>a{color:#444!important}.btn-box-tool{padding:5px;font-size:12px;background:transparent;color:#97a0b3}.open .btn-box-tool,.btn-box-tool:hover{color:#606c84}.btn-box-tool.btn:active{box-shadow:none}.box-body{border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:3px;border-bottom-left-radius:3px;padding:10px}.no-header .box-body{border-top-right-radius:3px;border-top-left-radius:3px}.box-body>.table{margin-bottom:0}.box-body .fc{margin-top:5px}.box-body .full-width-chart{margin:-19px}.box-body.no-padding .full-width-chart{margin:-9px}.box-body .box-pane{border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:3px}.box-body .box-pane-right{border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:3px;border-bottom-left-radius:0}.box-footer{border-top-left-radius:0;border-top-right-radius:0;border-bottom-right-radius:3px;border-bottom-left-radius:3px;border-top:1px solid #f4f4f4;padding:10px;background-color:#fff}.chart-legend{margin:10px 0}@media (max-width:991px){.chart-legend>li{float:left;margin-right:10px}}.box-comments{background:#f7f7f7}.box-comments .box-comment{padding:8px 0;border-bottom:1px solid #eee}.box-comments .box-comment:before,.box-comments .box-comment:after{content:" ";display:table}.box-comments .box-comment:after{clear:both}.box-comments .box-comment:last-of-type{border-bottom:0}.box-comments .box-comment:first-of-type{padding-top:0}.box-comments .box-comment img{float:left}.box-comments .comment-text{margin-left:40px;color:#555}.box-comments .username{color:#444;display:block;font-weight:600}.box-comments .text-muted{font-weight:400;font-size:12px}.todo-list{margin:0;padding:0;list-style:none;overflow:auto}.todo-list>li{border-radius:2px;padding:10px;background:#f4f4f4;margin-bottom:2px;border-left:2px solid #e6e7e8;color:#444}.todo-list>li:last-of-type{margin-bottom:0}.todo-list>li>input[type='checkbox']{margin:0 10px 0 5px}.todo-list>li .text{display:inline-block;margin-left:5px;font-weight:600}.todo-list>li .label{margin-left:10px;font-size:9px}.todo-list>li .tools{display:none;float:right;color:#dd4b39}.todo-list>li .tools>.fa,.todo-list>li .tools>.glyphicon,.todo-list>li .tools>.ion{margin-right:5px;cursor:pointer}.todo-list>li:hover .tools{display:inline-block}.todo-list>li.done{color:#999}.todo-list>li.done .text{text-decoration:line-through;font-weight:500}.todo-list>li.done .label{background:#d2d6de !important}.todo-list .danger{border-left-color:#dd4b39}.todo-list .warning{border-left-color:#f39c12}.todo-list .info{border-left-color:#00c0ef}.todo-list .success{border-left-color:#00a65a}.todo-list .primary{border-left-color:#3c8dbc}.todo-list .handle{display:inline-block;cursor:move;margin:0 5px}.chat{padding:5px 20px 5px 10px}.chat .item{margin-bottom:10px}.chat .item:before,.chat .item:after{content:" ";display:table}.chat .item:after{clear:both}.chat .item>img{width:40px;height:40px;border:2px solid transparent;border-radius:50%}.chat .item>.online{border:2px solid #00a65a}.chat .item>.offline{border:2px solid #dd4b39}.chat .item>.message{margin-left:55px;margin-top:-40px}.chat .item>.message>.name{display:block;font-weight:600}.chat .item>.attachment{border-radius:3px;background:#f4f4f4;margin-left:65px;margin-right:15px;padding:10px}.chat .item>.attachment>h4{margin:0 0 5px 0;font-weight:600;font-size:14px}.chat .item>.attachment>p,.chat .item>.attachment>.filename{font-weight:600;font-size:13px;font-style:italic;margin:0}.chat .item>.attachment:before,.chat .item>.attachment:after{content:" ";display:table}.chat .item>.attachment:after{clear:both}.box-input{max-width:200px}.modal .panel-body{color:#444}.info-box{display:block;min-height:90px;background:#fff;width:100%;box-shadow:0 1px 1px rgba(0,0,0,0.1);border-radius:2px;margin-bottom:15px}.info-box small{font-size:14px}.info-box .progress{background:rgba(0,0,0,0.2);margin:5px -10px 5px -10px;height:2px}.info-box .progress,.info-box .progress .progress-bar{border-radius:0}.info-box .progress .progress-bar{background:#fff}.info-box-icon{border-top-left-radius:2px;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:2px;display:block;float:left;height:90px;width:90px;text-align:center;font-size:45px;line-height:90px;background:rgba(0,0,0,0.2)}.info-box-icon>img{max-width:100%}.info-box-content{padding:5px 10px;margin-left:90px}.info-box-number{display:block;font-weight:bold;font-size:18px}.progress-description,.info-box-text{display:block;font-size:14px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.info-box-text{text-transform:uppercase}.info-box-more{display:block}.progress-description{margin:0}.timeline{position:relative;margin:0 0 30px 0;padding:0;list-style:none}.timeline:before{content:'';position:absolute;top:0;bottom:0;width:4px;background:#ddd;left:31px;margin:0;border-radius:2px}.timeline>li{position:relative;margin-right:10px;margin-bottom:15px}.timeline>li:before,.timeline>li:after{content:" ";display:table}.timeline>li:after{clear:both}.timeline>li>.timeline-item{-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.1);box-shadow:0 1px 1px rgba(0,0,0,0.1);border-radius:3px;margin-top:0;background:#fff;color:#444;margin-left:60px;margin-right:15px;padding:0;position:relative}.timeline>li>.timeline-item>.time{color:#999;float:right;padding:10px;font-size:12px}.timeline>li>.timeline-item>.timeline-header{margin:0;color:#555;border-bottom:1px solid #f4f4f4;padding:10px;font-size:16px;line-height:1.1}.timeline>li>.timeline-item>.timeline-header>a{font-weight:600}.timeline>li>.timeline-item>.timeline-body,.timeline>li>.timeline-item>.timeline-footer{padding:10px}.timeline>li>.fa,.timeline>li>.glyphicon,.timeline>li>.ion{width:30px;height:30px;font-size:15px;line-height:30px;position:absolute;color:#666;background:#d2d6de;border-radius:50%;text-align:center;left:18px;top:0}.timeline>.time-label>span{font-weight:600;padding:5px;display:inline-block;background-color:#fff;border-radius:4px}.timeline-inverse>li>.timeline-item{background:#f0f0f0;border:1px solid #ddd;-webkit-box-shadow:none;box-shadow:none}.timeline-inverse>li>.timeline-item>.timeline-header{border-bottom-color:#ddd}.btn{border-radius:3px;-webkit-box-shadow:none;box-shadow:none;border:1px solid transparent}.btn.uppercase{text-transform:uppercase}.btn.btn-flat{border-radius:0;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;border-width:1px}.btn:active{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);-moz-box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);box-shadow:inset 0 3px 5px rgba(0,0,0,0.125)}.btn:focus{outline:none}.btn.btn-file{position:relative;overflow:hidden}.btn.btn-file>input[type='file']{position:absolute;top:0;right:0;min-width:100%;min-height:100%;font-size:100px;text-align:right;opacity:0;filter:alpha(opacity=0);outline:none;background:white;cursor:inherit;display:block}.btn-default{background-color:#f4f4f4;color:#444;border-color:#ddd}.btn-default:hover,.btn-default:active,.btn-default.hover{background-color:#e7e7e7}.btn-primary{background-color:#3c8dbc;border-color:#367fa9}.btn-primary:hover,.btn-primary:active,.btn-primary.hover{background-color:#367fa9}.btn-success{background-color:#00a65a;border-color:#008d4c}.btn-success:hover,.btn-success:active,.btn-success.hover{background-color:#008d4c}.btn-info{background-color:#00c0ef;border-color:#00acd6}.btn-info:hover,.btn-info:active,.btn-info.hover{background-color:#00acd6}.btn-danger{background-color:#dd4b39;border-color:#d73925}.btn-danger:hover,.btn-danger:active,.btn-danger.hover{background-color:#d73925}.btn-warning{background-color:#f39c12;border-color:#e08e0b}.btn-warning:hover,.btn-warning:active,.btn-warning.hover{background-color:#e08e0b}.btn-outline{border:1px solid #fff;background:transparent;color:#fff}.btn-outline:hover,.btn-outline:focus,.btn-outline:active{color:rgba(255,255,255,0.7);border-color:rgba(255,255,255,0.7)}.btn-link{-webkit-box-shadow:none;box-shadow:none}.btn[class*='bg-']:hover{-webkit-box-shadow:inset 0 0 100px rgba(0,0,0,0.2);box-shadow:inset 0 0 100px rgba(0,0,0,0.2)}.btn-app{border-radius:3px;position:relative;padding:15px 5px;margin:0 0 10px 10px;min-width:80px;height:60px;text-align:center;color:#666;border:1px solid #ddd;background-color:#f4f4f4;font-size:12px}.btn-app>.fa,.btn-app>.glyphicon,.btn-app>.ion{font-size:20px;display:block}.btn-app:hover{background:#f4f4f4;color:#444;border-color:#aaa}.btn-app:active,.btn-app:focus{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);-moz-box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);box-shadow:inset 0 3px 5px rgba(0,0,0,0.125)}.btn-app>.badge{position:absolute;top:-3px;right:-10px;font-size:10px;font-weight:400}.callout{border-radius:3px;margin:0 0 20px 0;padding:15px 30px 15px 15px;border-left:5px solid #eee}.callout a{color:#fff;text-decoration:underline}.callout a:hover{color:#eee}.callout h4{margin-top:0;font-weight:600}.callout p:last-child{margin-bottom:0}.callout code,.callout .highlight{background-color:#fff}.callout.callout-danger{border-color:#c23321}.callout.callout-warning{border-color:#c87f0a}.callout.callout-info{border-color:#0097bc}.callout.callout-success{border-color:#00733e}.alert{border-radius:3px}.alert h4{font-weight:600}.alert .icon{margin-right:10px}.alert .close{color:#000;opacity:.2;filter:alpha(opacity=20)}.alert .close:hover{opacity:.5;filter:alpha(opacity=50)}.alert a{color:#fff;text-decoration:underline}.alert-success{border-color:#008d4c}.alert-danger,.alert-error{border-color:#d73925}.alert-warning{border-color:#e08e0b}.alert-info{border-color:#00acd6}.nav>li>a:hover,.nav>li>a:active,.nav>li>a:focus{color:#444;background:#f7f7f7}.nav-pills>li>a{border-radius:0;border-top:3px solid transparent;color:#444}.nav-pills>li>a>.fa,.nav-pills>li>a>.glyphicon,.nav-pills>li>a>.ion{margin-right:5px}.nav-pills>li.active>a,.nav-pills>li.active>a:hover,.nav-pills>li.active>a:focus{border-top-color:#3c8dbc}.nav-pills>li.active>a{font-weight:600}.nav-stacked>li>a{border-radius:0;border-top:0;border-left:3px solid transparent;color:#444}.nav-stacked>li.active>a,.nav-stacked>li.active>a:hover{background:transparent;color:#444;border-top:0;border-left-color:#3c8dbc}.nav-stacked>li.header{border-bottom:1px solid #ddd;color:#777;margin-bottom:10px;padding:5px 10px;text-transform:uppercase}.nav-tabs-custom{margin-bottom:20px;background:#fff;box-shadow:0 1px 1px rgba(0,0,0,0.1);border-radius:3px}.nav-tabs-custom>.nav-tabs{margin:0;border-bottom-color:#f4f4f4;border-top-right-radius:3px;border-top-left-radius:3px}.nav-tabs-custom>.nav-tabs>li{border-top:3px solid transparent;margin-bottom:-2px;margin-right:5px}.nav-tabs-custom>.nav-tabs>li.disabled>a{color:#777}.nav-tabs-custom>.nav-tabs>li>a{color:#444;border-radius:0}.nav-tabs-custom>.nav-tabs>li>a.text-muted{color:#999}.nav-tabs-custom>.nav-tabs>li>a,.nav-tabs-custom>.nav-tabs>li>a:hover{background:transparent;margin:0}.nav-tabs-custom>.nav-tabs>li>a:hover{color:#999}.nav-tabs-custom>.nav-tabs>li:not(.active)>a:hover,.nav-tabs-custom>.nav-tabs>li:not(.active)>a:focus,.nav-tabs-custom>.nav-tabs>li:not(.active)>a:active{border-color:transparent}.nav-tabs-custom>.nav-tabs>li.active{border-top-color:#3c8dbc}.nav-tabs-custom>.nav-tabs>li.active>a,.nav-tabs-custom>.nav-tabs>li.active:hover>a{background-color:#fff;color:#444}.nav-tabs-custom>.nav-tabs>li.active>a{border-top-color:transparent;border-left-color:#f4f4f4;border-right-color:#f4f4f4}.nav-tabs-custom>.nav-tabs>li:first-of-type{margin-left:0}.nav-tabs-custom>.nav-tabs>li:first-of-type.active>a{border-left-color:transparent}.nav-tabs-custom>.nav-tabs.pull-right{float:none !important}.nav-tabs-custom>.nav-tabs.pull-right>li{float:right}.nav-tabs-custom>.nav-tabs.pull-right>li:first-of-type{margin-right:0}.nav-tabs-custom>.nav-tabs.pull-right>li:first-of-type>a{border-left-width:1px}.nav-tabs-custom>.nav-tabs.pull-right>li:first-of-type.active>a{border-left-color:#f4f4f4;border-right-color:transparent}.nav-tabs-custom>.nav-tabs>li.header{line-height:35px;padding:0 10px;font-size:20px;color:#444}.nav-tabs-custom>.nav-tabs>li.header>.fa,.nav-tabs-custom>.nav-tabs>li.header>.glyphicon,.nav-tabs-custom>.nav-tabs>li.header>.ion{margin-right:5px}.nav-tabs-custom>.tab-content{background:#fff;padding:10px;border-bottom-right-radius:3px;border-bottom-left-radius:3px}.nav-tabs-custom .dropdown.open>a:active,.nav-tabs-custom .dropdown.open>a:focus{background:transparent;color:#999}.nav-tabs-custom.tab-primary>.nav-tabs>li.active{border-top-color:#3c8dbc}.nav-tabs-custom.tab-info>.nav-tabs>li.active{border-top-color:#00c0ef}.nav-tabs-custom.tab-danger>.nav-tabs>li.active{border-top-color:#dd4b39}.nav-tabs-custom.tab-warning>.nav-tabs>li.active{border-top-color:#f39c12}.nav-tabs-custom.tab-success>.nav-tabs>li.active{border-top-color:#00a65a}.nav-tabs-custom.tab-default>.nav-tabs>li.active{border-top-color:#d2d6de}.pagination>li>a{background:#fafafa;color:#666}.pagination.pagination-flat>li>a{border-radius:0 !important}.products-list{list-style:none;margin:0;padding:0}.products-list>.item{border-radius:3px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.1);box-shadow:0 1px 1px rgba(0,0,0,0.1);padding:10px 0;background:#fff}.products-list>.item:before,.products-list>.item:after{content:" ";display:table}.products-list>.item:after{clear:both}.products-list .product-img{float:left}.products-list .product-img img{width:50px;height:50px}.products-list .product-info{margin-left:60px}.products-list .product-title{font-weight:600}.products-list .product-description{display:block;color:#999;overflow:hidden;white-space:nowrap;text-overflow:ellipsis}.product-list-in-box>.item{-webkit-box-shadow:none;box-shadow:none;border-radius:0;border-bottom:1px solid #f4f4f4}.product-list-in-box>.item:last-of-type{border-bottom-width:0}.table>thead>tr>th,.table>tbody>tr>th,.table>tfoot>tr>th,.table>thead>tr>td,.table>tbody>tr>td,.table>tfoot>tr>td{border-top:1px solid #f4f4f4}.table>thead>tr>th{border-bottom:2px solid #f4f4f4}.table tr td .progress{margin-top:5px}.table-bordered{border:1px solid #f4f4f4}.table-bordered>thead>tr>th,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>tbody>tr>td,.table-bordered>tfoot>tr>td{border:1px solid #f4f4f4}.table-bordered>thead>tr>th,.table-bordered>thead>tr>td{border-bottom-width:2px}.table.no-border,.table.no-border td,.table.no-border th{border:0}table.text-center,table.text-center td,table.text-center th{text-align:center}.table.align th{text-align:left}.table.align td{text-align:right}.label-default{background-color:#d2d6de;color:#444}.direct-chat .box-body{border-bottom-right-radius:0;border-bottom-left-radius:0;position:relative;overflow-x:hidden;padding:0}.direct-chat.chat-pane-open .direct-chat-contacts{-webkit-transform:translate(0, 0);-ms-transform:translate(0, 0);-o-transform:translate(0, 0);transform:translate(0, 0)}.direct-chat-messages{-webkit-transform:translate(0, 0);-ms-transform:translate(0, 0);-o-transform:translate(0, 0);transform:translate(0, 0);padding:10px;height:250px;overflow:auto}.direct-chat-msg,.direct-chat-text{display:block}.direct-chat-msg{margin-bottom:10px}.direct-chat-msg:before,.direct-chat-msg:after{content:" ";display:table}.direct-chat-msg:after{clear:both}.direct-chat-messages,.direct-chat-contacts{-webkit-transition:-webkit-transform .5s ease-in-out;-moz-transition:-moz-transform .5s ease-in-out;-o-transition:-o-transform .5s ease-in-out;transition:transform .5s ease-in-out}.direct-chat-text{border-radius:5px;position:relative;padding:5px 10px;background:#d2d6de;border:1px solid #d2d6de;margin:5px 0 0 50px;color:#444}.direct-chat-text:after,.direct-chat-text:before{position:absolute;right:100%;top:15px;border:solid transparent;border-right-color:#d2d6de;content:' ';height:0;width:0;pointer-events:none}.direct-chat-text:after{border-width:5px;margin-top:-5px}.direct-chat-text:before{border-width:6px;margin-top:-6px}.right .direct-chat-text{margin-right:50px;margin-left:0}.right .direct-chat-text:after,.right .direct-chat-text:before{right:auto;left:100%;border-right-color:transparent;border-left-color:#d2d6de}.direct-chat-img{border-radius:50%;float:left;width:40px;height:40px}.right .direct-chat-img{float:right}.direct-chat-info{display:block;margin-bottom:2px;font-size:12px}.direct-chat-name{font-weight:600}.direct-chat-timestamp{color:#999}.direct-chat-contacts-open .direct-chat-contacts{-webkit-transform:translate(0, 0);-ms-transform:translate(0, 0);-o-transform:translate(0, 0);transform:translate(0, 0)}.direct-chat-contacts{-webkit-transform:translate(101%, 0);-ms-transform:translate(101%, 0);-o-transform:translate(101%, 0);transform:translate(101%, 0);position:absolute;top:0;bottom:0;height:250px;width:100%;background:#222d32;color:#fff;overflow:auto}.contacts-list>li{border-bottom:1px solid rgba(0,0,0,0.2);padding:10px;margin:0}.contacts-list>li:before,.contacts-list>li:after{content:" ";display:table}.contacts-list>li:after{clear:both}.contacts-list>li:last-of-type{border-bottom:none}.contacts-list-img{border-radius:50%;width:40px;float:left}.contacts-list-info{margin-left:45px;color:#fff}.contacts-list-name,.contacts-list-status{display:block}.contacts-list-name{font-weight:600}.contacts-list-status{font-size:12px}.contacts-list-date{color:#aaa;font-weight:normal}.contacts-list-msg{color:#999}.direct-chat-danger .right>.direct-chat-text{background:#dd4b39;border-color:#dd4b39;color:#fff}.direct-chat-danger .right>.direct-chat-text:after,.direct-chat-danger .right>.direct-chat-text:before{border-left-color:#dd4b39}.direct-chat-primary .right>.direct-chat-text{background:#3c8dbc;border-color:#3c8dbc;color:#fff}.direct-chat-primary .right>.direct-chat-text:after,.direct-chat-primary .right>.direct-chat-text:before{border-left-color:#3c8dbc}.direct-chat-warning .right>.direct-chat-text{background:#f39c12;border-color:#f39c12;color:#fff}.direct-chat-warning .right>.direct-chat-text:after,.direct-chat-warning .right>.direct-chat-text:before{border-left-color:#f39c12}.direct-chat-info .right>.direct-chat-text{background:#00c0ef;border-color:#00c0ef;color:#fff}.direct-chat-info .right>.direct-chat-text:after,.direct-chat-info .right>.direct-chat-text:before{border-left-color:#00c0ef}.direct-chat-success .right>.direct-chat-text{background:#00a65a;border-color:#00a65a;color:#fff}.direct-chat-success .right>.direct-chat-text:after,.direct-chat-success .right>.direct-chat-text:before{border-left-color:#00a65a}.users-list>li{width:25%;float:left;padding:10px;text-align:center}.users-list>li img{border-radius:50%;max-width:100%;height:auto}.users-list>li>a:hover,.users-list>li>a:hover .users-list-name{color:#999}.users-list-name,.users-list-date{display:block}.users-list-name{font-weight:600;color:#444;overflow:hidden;white-space:nowrap;text-overflow:ellipsis}.users-list-date{color:#999;font-size:12px}.carousel-control.left,.carousel-control.right{background-image:none}.carousel-control>.fa{font-size:40px;position:absolute;top:50%;z-index:5;display:inline-block;margin-top:-20px}.modal{background:rgba(0,0,0,0.3)}.modal-content{border-radius:0;-webkit-box-shadow:0 2px 3px rgba(0,0,0,0.125);box-shadow:0 2px 3px rgba(0,0,0,0.125);border:0}@media (min-width:768px){.modal-content{-webkit-box-shadow:0 2px 3px rgba(0,0,0,0.125);box-shadow:0 2px 3px rgba(0,0,0,0.125)}}.modal-header{border-bottom-color:#f4f4f4}.modal-footer{border-top-color:#f4f4f4}.modal-primary .modal-header,.modal-primary .modal-footer{border-color:#307095}.modal-warning .modal-header,.modal-warning .modal-footer{border-color:#c87f0a}.modal-info .modal-header,.modal-info .modal-footer{border-color:#0097bc}.modal-success .modal-header,.modal-success .modal-footer{border-color:#00733e}.modal-danger .modal-header,.modal-danger .modal-footer{border-color:#c23321}.box-widget{border:none;position:relative}.widget-user .widget-user-header{padding:20px;height:120px;border-top-right-radius:3px;border-top-left-radius:3px}.widget-user .widget-user-username{margin-top:0;margin-bottom:5px;font-size:25px;font-weight:300;text-shadow:0 1px 1px rgba(0,0,0,0.2)}.widget-user .widget-user-desc{margin-top:0}.widget-user .widget-user-image{position:absolute;top:65px;left:50%;margin-left:-45px}.widget-user .widget-user-image>img{width:90px;height:auto;border:3px solid #fff}.widget-user .box-footer{padding-top:30px}.widget-user-2 .widget-user-header{padding:20px;border-top-right-radius:3px;border-top-left-radius:3px}.widget-user-2 .widget-user-username{margin-top:5px;margin-bottom:5px;font-size:25px;font-weight:300}.widget-user-2 .widget-user-desc{margin-top:0}.widget-user-2 .widget-user-username,.widget-user-2 .widget-user-desc{margin-left:75px}.widget-user-2 .widget-user-image>img{width:65px;height:auto;float:left}.treeview-menu{display:none;list-style:none;padding:0;margin:0;padding-left:5px}.treeview-menu .treeview-menu{padding-left:20px}.treeview-menu>li{margin:0}.treeview-menu>li>a{padding:5px 5px 5px 15px;display:block;font-size:14px}.treeview-menu>li>a>.fa,.treeview-menu>li>a>.glyphicon,.treeview-menu>li>a>.ion{width:20px}.treeview-menu>li>a>.pull-right-container>.fa-angle-left,.treeview-menu>li>a>.pull-right-container>.fa-angle-down,.treeview-menu>li>a>.fa-angle-left,.treeview-menu>li>a>.fa-angle-down{width:auto}.mailbox-messages>.table{margin:0}.mailbox-controls{padding:5px}.mailbox-controls.with-border{border-bottom:1px solid #f4f4f4}.mailbox-read-info{border-bottom:1px solid #f4f4f4;padding:10px}.mailbox-read-info h3{font-size:20px;margin:0}.mailbox-read-info h5{margin:0;padding:5px 0 0 0}.mailbox-read-time{color:#999;font-size:13px}.mailbox-read-message{padding:10px}.mailbox-attachments li{float:left;width:200px;border:1px solid #eee;margin-bottom:10px;margin-right:10px}.mailbox-attachment-name{font-weight:bold;color:#666}.mailbox-attachment-icon,.mailbox-attachment-info,.mailbox-attachment-size{display:block}.mailbox-attachment-info{padding:10px;background:#f4f4f4}.mailbox-attachment-size{color:#999;font-size:12px}.mailbox-attachment-icon{text-align:center;font-size:65px;color:#666;padding:20px 10px}.mailbox-attachment-icon.has-img{padding:0}.mailbox-attachment-icon.has-img>img{max-width:100%;height:auto}.lockscreen{background:#d2d6de}.lockscreen-logo{font-size:35px;text-align:center;margin-bottom:25px;font-weight:300}.lockscreen-logo a{color:#444}.lockscreen-wrapper{max-width:400px;margin:0 auto;margin-top:10%}.lockscreen .lockscreen-name{text-align:center;font-weight:600}.lockscreen-item{border-radius:4px;padding:0;background:#fff;position:relative;margin:10px auto 30px auto;width:290px}.lockscreen-image{border-radius:50%;position:absolute;left:-10px;top:-25px;background:#fff;padding:5px;z-index:10}.lockscreen-image>img{border-radius:50%;width:70px;height:70px}.lockscreen-credentials{margin-left:70px}.lockscreen-credentials .form-control{border:0}.lockscreen-credentials .btn{background-color:#fff;border:0;padding:0 10px}.lockscreen-footer{margin-top:10px}.login-logo,.register-logo{font-size:35px;text-align:center;margin-bottom:25px;font-weight:300}.login-logo a,.register-logo a{color:#444}.login-page,.register-page{background:#d2d6de}.login-box,.register-box{width:360px;margin:7% auto}@media (max-width:768px){.login-box,.register-box{width:90%;margin-top:20px}}.login-box-body,.register-box-body{background:#fff;padding:20px;border-top:0;color:#666}.login-box-body .form-control-feedback,.register-box-body .form-control-feedback{color:#777}.login-box-msg,.register-box-msg{margin:0;text-align:center;padding:0 20px 20px 20px}.social-auth-links{margin:10px 0}.error-page{width:600px;margin:20px auto 0 auto}@media (max-width:991px){.error-page{width:100%}}.error-page>.headline{float:left;font-size:100px;font-weight:300}@media (max-width:991px){.error-page>.headline{float:none;text-align:center}}.error-page>.error-content{margin-left:190px;display:block}@media (max-width:991px){.error-page>.error-content{margin-left:0}}.error-page>.error-content>h3{font-weight:300;font-size:25px}@media (max-width:991px){.error-page>.error-content>h3{text-align:center}}.invoice{position:relative;background:#fff;border:1px solid #f4f4f4;padding:20px;margin:10px 25px}.invoice-title{margin-top:0}.profile-user-img{margin:0 auto;width:100px;padding:3px;border:3px solid #d2d6de}.profile-username{font-size:21px;margin-top:5px}.post{border-bottom:1px solid #d2d6de;margin-bottom:15px;padding-bottom:15px;color:#666}.post:last-of-type{border-bottom:0;margin-bottom:0;padding-bottom:0}.post .user-block{margin-bottom:15px}.btn-social{position:relative;padding-left:44px;text-align:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.btn-social>:first-child{position:absolute;left:0;top:0;bottom:0;width:32px;line-height:34px;font-size:1.6em;text-align:center;border-right:1px solid rgba(0,0,0,0.2)}.btn-social.btn-lg{padding-left:61px}.btn-social.btn-lg>:first-child{line-height:45px;width:45px;font-size:1.8em}.btn-social.btn-sm{padding-left:38px}.btn-social.btn-sm>:first-child{line-height:28px;width:28px;font-size:1.4em}.btn-social.btn-xs{padding-left:30px}.btn-social.btn-xs>:first-child{line-height:20px;width:20px;font-size:1.2em}.btn-social-icon{position:relative;padding-left:44px;text-align:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;height:34px;width:34px;padding:0}.btn-social-icon>:first-child{position:absolute;left:0;top:0;bottom:0;width:32px;line-height:34px;font-size:1.6em;text-align:center;border-right:1px solid rgba(0,0,0,0.2)}.btn-social-icon.btn-lg{padding-left:61px}.btn-social-icon.btn-lg>:first-child{line-height:45px;width:45px;font-size:1.8em}.btn-social-icon.btn-sm{padding-left:38px}.btn-social-icon.btn-sm>:first-child{line-height:28px;width:28px;font-size:1.4em}.btn-social-icon.btn-xs{padding-left:30px}.btn-social-icon.btn-xs>:first-child{line-height:20px;width:20px;font-size:1.2em}.btn-social-icon>:first-child{border:none;text-align:center;width:100%}.btn-social-icon.btn-lg{height:45px;width:45px;padding-left:0;padding-right:0}.btn-social-icon.btn-sm{height:30px;width:30px;padding-left:0;padding-right:0}.btn-social-icon.btn-xs{height:22px;width:22px;padding-left:0;padding-right:0}.btn-adn{color:#fff;background-color:#d87a68;border-color:rgba(0,0,0,0.2)}.btn-adn:focus,.btn-adn.focus{color:#fff;background-color:#ce563f;border-color:rgba(0,0,0,0.2)}.btn-adn:hover{color:#fff;background-color:#ce563f;border-color:rgba(0,0,0,0.2)}.btn-adn:active,.btn-adn.active,.open>.dropdown-toggle.btn-adn{color:#fff;background-color:#ce563f;border-color:rgba(0,0,0,0.2)}.btn-adn:active,.btn-adn.active,.open>.dropdown-toggle.btn-adn{background-image:none}.btn-adn .badge{color:#d87a68;background-color:#fff}.btn-bitbucket{color:#fff;background-color:#205081;border-color:rgba(0,0,0,0.2)}.btn-bitbucket:focus,.btn-bitbucket.focus{color:#fff;background-color:#163758;border-color:rgba(0,0,0,0.2)}.btn-bitbucket:hover{color:#fff;background-color:#163758;border-color:rgba(0,0,0,0.2)}.btn-bitbucket:active,.btn-bitbucket.active,.open>.dropdown-toggle.btn-bitbucket{color:#fff;background-color:#163758;border-color:rgba(0,0,0,0.2)}.btn-bitbucket:active,.btn-bitbucket.active,.open>.dropdown-toggle.btn-bitbucket{background-image:none}.btn-bitbucket .badge{color:#205081;background-color:#fff}.btn-dropbox{color:#fff;background-color:#1087dd;border-color:rgba(0,0,0,0.2)}.btn-dropbox:focus,.btn-dropbox.focus{color:#fff;background-color:#0d6aad;border-color:rgba(0,0,0,0.2)}.btn-dropbox:hover{color:#fff;background-color:#0d6aad;border-color:rgba(0,0,0,0.2)}.btn-dropbox:active,.btn-dropbox.active,.open>.dropdown-toggle.btn-dropbox{color:#fff;background-color:#0d6aad;border-color:rgba(0,0,0,0.2)}.btn-dropbox:active,.btn-dropbox.active,.open>.dropdown-toggle.btn-dropbox{background-image:none}.btn-dropbox .badge{color:#1087dd;background-color:#fff}.btn-facebook{color:#fff;background-color:#3b5998;border-color:rgba(0,0,0,0.2)}.btn-facebook:focus,.btn-facebook.focus{color:#fff;background-color:#2d4373;border-color:rgba(0,0,0,0.2)}.btn-facebook:hover{color:#fff;background-color:#2d4373;border-color:rgba(0,0,0,0.2)}.btn-facebook:active,.btn-facebook.active,.open>.dropdown-toggle.btn-facebook{color:#fff;background-color:#2d4373;border-color:rgba(0,0,0,0.2)}.btn-facebook:active,.btn-facebook.active,.open>.dropdown-toggle.btn-facebook{background-image:none}.btn-facebook .badge{color:#3b5998;background-color:#fff}.btn-flickr{color:#fff;background-color:#ff0084;border-color:rgba(0,0,0,0.2)}.btn-flickr:focus,.btn-flickr.focus{color:#fff;background-color:#cc006a;border-color:rgba(0,0,0,0.2)}.btn-flickr:hover{color:#fff;background-color:#cc006a;border-color:rgba(0,0,0,0.2)}.btn-flickr:active,.btn-flickr.active,.open>.dropdown-toggle.btn-flickr{color:#fff;background-color:#cc006a;border-color:rgba(0,0,0,0.2)}.btn-flickr:active,.btn-flickr.active,.open>.dropdown-toggle.btn-flickr{background-image:none}.btn-flickr .badge{color:#ff0084;background-color:#fff}.btn-foursquare{color:#fff;background-color:#f94877;border-color:rgba(0,0,0,0.2)}.btn-foursquare:focus,.btn-foursquare.focus{color:#fff;background-color:#f71752;border-color:rgba(0,0,0,0.2)}.btn-foursquare:hover{color:#fff;background-color:#f71752;border-color:rgba(0,0,0,0.2)}.btn-foursquare:active,.btn-foursquare.active,.open>.dropdown-toggle.btn-foursquare{color:#fff;background-color:#f71752;border-color:rgba(0,0,0,0.2)}.btn-foursquare:active,.btn-foursquare.active,.open>.dropdown-toggle.btn-foursquare{background-image:none}.btn-foursquare .badge{color:#f94877;background-color:#fff}.btn-github{color:#fff;background-color:#444;border-color:rgba(0,0,0,0.2)}.btn-github:focus,.btn-github.focus{color:#fff;background-color:#2b2b2b;border-color:rgba(0,0,0,0.2)}.btn-github:hover{color:#fff;background-color:#2b2b2b;border-color:rgba(0,0,0,0.2)}.btn-github:active,.btn-github.active,.open>.dropdown-toggle.btn-github{color:#fff;background-color:#2b2b2b;border-color:rgba(0,0,0,0.2)}.btn-github:active,.btn-github.active,.open>.dropdown-toggle.btn-github{background-image:none}.btn-github .badge{color:#444;background-color:#fff}.btn-google{color:#fff;background-color:#dd4b39;border-color:rgba(0,0,0,0.2)}.btn-google:focus,.btn-google.focus{color:#fff;background-color:#c23321;border-color:rgba(0,0,0,0.2)}.btn-google:hover{color:#fff;background-color:#c23321;border-color:rgba(0,0,0,0.2)}.btn-google:active,.btn-google.active,.open>.dropdown-toggle.btn-google{color:#fff;background-color:#c23321;border-color:rgba(0,0,0,0.2)}.btn-google:active,.btn-google.active,.open>.dropdown-toggle.btn-google{background-image:none}.btn-google .badge{color:#dd4b39;background-color:#fff}.btn-instagram{color:#fff;background-color:#3f729b;border-color:rgba(0,0,0,0.2)}.btn-instagram:focus,.btn-instagram.focus{color:#fff;background-color:#305777;border-color:rgba(0,0,0,0.2)}.btn-instagram:hover{color:#fff;background-color:#305777;border-color:rgba(0,0,0,0.2)}.btn-instagram:active,.btn-instagram.active,.open>.dropdown-toggle.btn-instagram{color:#fff;background-color:#305777;border-color:rgba(0,0,0,0.2)}.btn-instagram:active,.btn-instagram.active,.open>.dropdown-toggle.btn-instagram{background-image:none}.btn-instagram .badge{color:#3f729b;background-color:#fff}.btn-linkedin{color:#fff;background-color:#007bb6;border-color:rgba(0,0,0,0.2)}.btn-linkedin:focus,.btn-linkedin.focus{color:#fff;background-color:#005983;border-color:rgba(0,0,0,0.2)}.btn-linkedin:hover{color:#fff;background-color:#005983;border-color:rgba(0,0,0,0.2)}.btn-linkedin:active,.btn-linkedin.active,.open>.dropdown-toggle.btn-linkedin{color:#fff;background-color:#005983;border-color:rgba(0,0,0,0.2)}.btn-linkedin:active,.btn-linkedin.active,.open>.dropdown-toggle.btn-linkedin{background-image:none}.btn-linkedin .badge{color:#007bb6;background-color:#fff}.btn-microsoft{color:#fff;background-color:#2672ec;border-color:rgba(0,0,0,0.2)}.btn-microsoft:focus,.btn-microsoft.focus{color:#fff;background-color:#125acd;border-color:rgba(0,0,0,0.2)}.btn-microsoft:hover{color:#fff;background-color:#125acd;border-color:rgba(0,0,0,0.2)}.btn-microsoft:active,.btn-microsoft.active,.open>.dropdown-toggle.btn-microsoft{color:#fff;background-color:#125acd;border-color:rgba(0,0,0,0.2)}.btn-microsoft:active,.btn-microsoft.active,.open>.dropdown-toggle.btn-microsoft{background-image:none}.btn-microsoft .badge{color:#2672ec;background-color:#fff}.btn-openid{color:#fff;background-color:#f7931e;border-color:rgba(0,0,0,0.2)}.btn-openid:focus,.btn-openid.focus{color:#fff;background-color:#da7908;border-color:rgba(0,0,0,0.2)}.btn-openid:hover{color:#fff;background-color:#da7908;border-color:rgba(0,0,0,0.2)}.btn-openid:active,.btn-openid.active,.open>.dropdown-toggle.btn-openid{color:#fff;background-color:#da7908;border-color:rgba(0,0,0,0.2)}.btn-openid:active,.btn-openid.active,.open>.dropdown-toggle.btn-openid{background-image:none}.btn-openid .badge{color:#f7931e;background-color:#fff}.btn-pinterest{color:#fff;background-color:#cb2027;border-color:rgba(0,0,0,0.2)}.btn-pinterest:focus,.btn-pinterest.focus{color:#fff;background-color:#9f191f;border-color:rgba(0,0,0,0.2)}.btn-pinterest:hover{color:#fff;background-color:#9f191f;border-color:rgba(0,0,0,0.2)}.btn-pinterest:active,.btn-pinterest.active,.open>.dropdown-toggle.btn-pinterest{color:#fff;background-color:#9f191f;border-color:rgba(0,0,0,0.2)}.btn-pinterest:active,.btn-pinterest.active,.open>.dropdown-toggle.btn-pinterest{background-image:none}.btn-pinterest .badge{color:#cb2027;background-color:#fff}.btn-reddit{color:#000;background-color:#eff7ff;border-color:rgba(0,0,0,0.2)}.btn-reddit:focus,.btn-reddit.focus{color:#000;background-color:#bcddff;border-color:rgba(0,0,0,0.2)}.btn-reddit:hover{color:#000;background-color:#bcddff;border-color:rgba(0,0,0,0.2)}.btn-reddit:active,.btn-reddit.active,.open>.dropdown-toggle.btn-reddit{color:#000;background-color:#bcddff;border-color:rgba(0,0,0,0.2)}.btn-reddit:active,.btn-reddit.active,.open>.dropdown-toggle.btn-reddit{background-image:none}.btn-reddit .badge{color:#eff7ff;background-color:#000}.btn-soundcloud{color:#fff;background-color:#f50;border-color:rgba(0,0,0,0.2)}.btn-soundcloud:focus,.btn-soundcloud.focus{color:#fff;background-color:#c40;border-color:rgba(0,0,0,0.2)}.btn-soundcloud:hover{color:#fff;background-color:#c40;border-color:rgba(0,0,0,0.2)}.btn-soundcloud:active,.btn-soundcloud.active,.open>.dropdown-toggle.btn-soundcloud{color:#fff;background-color:#c40;border-color:rgba(0,0,0,0.2)}.btn-soundcloud:active,.btn-soundcloud.active,.open>.dropdown-toggle.btn-soundcloud{background-image:none}.btn-soundcloud .badge{color:#f50;background-color:#fff}.btn-tumblr{color:#fff;background-color:#2c4762;border-color:rgba(0,0,0,0.2)}.btn-tumblr:focus,.btn-tumblr.focus{color:#fff;background-color:#1c2d3f;border-color:rgba(0,0,0,0.2)}.btn-tumblr:hover{color:#fff;background-color:#1c2d3f;border-color:rgba(0,0,0,0.2)}.btn-tumblr:active,.btn-tumblr.active,.open>.dropdown-toggle.btn-tumblr{color:#fff;background-color:#1c2d3f;border-color:rgba(0,0,0,0.2)}.btn-tumblr:active,.btn-tumblr.active,.open>.dropdown-toggle.btn-tumblr{background-image:none}.btn-tumblr .badge{color:#2c4762;background-color:#fff}.btn-twitter{color:#fff;background-color:#55acee;border-color:rgba(0,0,0,0.2)}.btn-twitter:focus,.btn-twitter.focus{color:#fff;background-color:#2795e9;border-color:rgba(0,0,0,0.2)}.btn-twitter:hover{color:#fff;background-color:#2795e9;border-color:rgba(0,0,0,0.2)}.btn-twitter:active,.btn-twitter.active,.open>.dropdown-toggle.btn-twitter{color:#fff;background-color:#2795e9;border-color:rgba(0,0,0,0.2)}.btn-twitter:active,.btn-twitter.active,.open>.dropdown-toggle.btn-twitter{background-image:none}.btn-twitter .badge{color:#55acee;background-color:#fff}.btn-vimeo{color:#fff;background-color:#1ab7ea;border-color:rgba(0,0,0,0.2)}.btn-vimeo:focus,.btn-vimeo.focus{color:#fff;background-color:#1295bf;border-color:rgba(0,0,0,0.2)}.btn-vimeo:hover{color:#fff;background-color:#1295bf;border-color:rgba(0,0,0,0.2)}.btn-vimeo:active,.btn-vimeo.active,.open>.dropdown-toggle.btn-vimeo{color:#fff;background-color:#1295bf;border-color:rgba(0,0,0,0.2)}.btn-vimeo:active,.btn-vimeo.active,.open>.dropdown-toggle.btn-vimeo{background-image:none}.btn-vimeo .badge{color:#1ab7ea;background-color:#fff}.btn-vk{color:#fff;background-color:#587ea3;border-color:rgba(0,0,0,0.2)}.btn-vk:focus,.btn-vk.focus{color:#fff;background-color:#466482;border-color:rgba(0,0,0,0.2)}.btn-vk:hover{color:#fff;background-color:#466482;border-color:rgba(0,0,0,0.2)}.btn-vk:active,.btn-vk.active,.open>.dropdown-toggle.btn-vk{color:#fff;background-color:#466482;border-color:rgba(0,0,0,0.2)}.btn-vk:active,.btn-vk.active,.open>.dropdown-toggle.btn-vk{background-image:none}.btn-vk .badge{color:#587ea3;background-color:#fff}.btn-yahoo{color:#fff;background-color:#720e9e;border-color:rgba(0,0,0,0.2)}.btn-yahoo:focus,.btn-yahoo.focus{color:#fff;background-color:#500a6f;border-color:rgba(0,0,0,0.2)}.btn-yahoo:hover{color:#fff;background-color:#500a6f;border-color:rgba(0,0,0,0.2)}.btn-yahoo:active,.btn-yahoo.active,.open>.dropdown-toggle.btn-yahoo{color:#fff;background-color:#500a6f;border-color:rgba(0,0,0,0.2)}.btn-yahoo:active,.btn-yahoo.active,.open>.dropdown-toggle.btn-yahoo{background-image:none}.btn-yahoo .badge{color:#720e9e;background-color:#fff}.fc-button{background:#f4f4f4;background-image:none;color:#444;border-color:#ddd;border-bottom-color:#ddd}.fc-button:hover,.fc-button:active,.fc-button.hover{background-color:#e9e9e9}.fc-header-title h2{font-size:15px;line-height:1.6em;color:#666;margin-left:10px}.fc-header-right{padding-right:10px}.fc-header-left{padding-left:10px}.fc-widget-header{background:#fafafa}.fc-grid{width:100%;border:0}.fc-widget-header:first-of-type,.fc-widget-content:first-of-type{border-left:0;border-right:0}.fc-widget-header:last-of-type,.fc-widget-content:last-of-type{border-right:0}.fc-toolbar{padding:10px;margin:0}.fc-day-number{font-size:20px;font-weight:300;padding-right:10px}.fc-color-picker{list-style:none;margin:0;padding:0}.fc-color-picker>li{float:left;font-size:30px;margin-right:5px;line-height:30px}.fc-color-picker>li .fa{-webkit-transition:-webkit-transform linear .3s;-moz-transition:-moz-transform linear .3s;-o-transition:-o-transform linear .3s;transition:transform linear .3s}.fc-color-picker>li .fa:hover{-webkit-transform:rotate(30deg);-ms-transform:rotate(30deg);-o-transform:rotate(30deg);transform:rotate(30deg)}#add-new-event{-webkit-transition:all linear .3s;-o-transition:all linear .3s;transition:all linear .3s}.external-event{padding:5px 10px;font-weight:bold;margin-bottom:4px;box-shadow:0 1px 1px rgba(0,0,0,0.1);text-shadow:0 1px 1px rgba(0,0,0,0.1);border-radius:3px;cursor:move}.external-event:hover{box-shadow:inset 0 0 90px rgba(0,0,0,0.2)}.select2-container--default.select2-container--focus,.select2-selection.select2-container--focus,.select2-container--default:focus,.select2-selection:focus,.select2-container--default:active,.select2-selection:active{outline:none}.select2-container--default .select2-selection--single,.select2-selection .select2-selection--single{border:1px solid #d2d6de;border-radius:0;padding:6px 12px;height:34px}.select2-container--default.select2-container--open{border-color:#3c8dbc}.select2-dropdown{border:1px solid #d2d6de;border-radius:0}.select2-container--default .select2-results__option--highlighted[aria-selected]{background-color:#3c8dbc;color:white}.select2-results__option{padding:6px 12px;user-select:none;-webkit-user-select:none}.select2-container .select2-selection--single .select2-selection__rendered{padding-left:0;padding-right:0;height:auto;margin-top:-4px}.select2-container[dir="rtl"] .select2-selection--single .select2-selection__rendered{padding-right:6px;padding-left:20px}.select2-container--default .select2-selection--single .select2-selection__arrow{height:28px;right:3px}.select2-container--default .select2-selection--single .select2-selection__arrow b{margin-top:0}.select2-dropdown .select2-search__field,.select2-search--inline .select2-search__field{border:1px solid #d2d6de}.select2-dropdown .select2-search__field:focus,.select2-search--inline .select2-search__field:focus{outline:none}.select2-container--default.select2-container--focus .select2-selection--multiple,.select2-container--default .select2-search--dropdown .select2-search__field{border-color:#3c8dbc !important}.select2-container--default .select2-results__option[aria-disabled=true]{color:#999}.select2-container--default .select2-results__option[aria-selected=true]{background-color:#ddd}.select2-container--default .select2-results__option[aria-selected=true],.select2-container--default .select2-results__option[aria-selected=true]:hover{color:#444}.select2-container--default .select2-selection--multiple{border:1px solid #d2d6de;border-radius:0}.select2-container--default .select2-selection--multiple:focus{border-color:#3c8dbc}.select2-container--default.select2-container--focus .select2-selection--multiple{border-color:#d2d6de}.select2-container--default .select2-selection--multiple .select2-selection__choice{background-color:#3c8dbc;border-color:#367fa9;padding:1px 10px;color:#fff}.select2-container--default .select2-selection--multiple .select2-selection__choice__remove{margin-right:5px;color:rgba(255,255,255,0.7)}.select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover{color:#fff}.select2-container .select2-selection--single .select2-selection__rendered{padding-right:10px}.box .datepicker-inline,.box .datepicker-inline .datepicker-days,.box .datepicker-inline>table,.box .datepicker-inline .datepicker-days>table{width:100%}.box .datepicker-inline td:hover,.box .datepicker-inline .datepicker-days td:hover,.box .datepicker-inline>table td:hover,.box .datepicker-inline .datepicker-days>table td:hover{background-color:rgba(255,255,255,0.3)}.box .datepicker-inline td.day.old,.box .datepicker-inline .datepicker-days td.day.old,.box .datepicker-inline>table td.day.old,.box .datepicker-inline .datepicker-days>table td.day.old,.box .datepicker-inline td.day.new,.box .datepicker-inline .datepicker-days td.day.new,.box .datepicker-inline>table td.day.new,.box .datepicker-inline .datepicker-days>table td.day.new{color:#777}.pad{padding:10px}.margin{margin:10px}.margin-bottom{margin-bottom:20px}.margin-bottom-none{margin-bottom:0}.margin-r-5{margin-right:5px}.inline{display:inline}.description-block{display:block;margin:10px 0;text-align:center}.description-block.margin-bottom{margin-bottom:25px}.description-block>.description-header{margin:0;padding:0;font-weight:600;font-size:16px}.description-block>.description-text{text-transform:uppercase}.bg-red,.bg-yellow,.bg-aqua,.bg-blue,.bg-light-blue,.bg-green,.bg-navy,.bg-teal,.bg-olive,.bg-lime,.bg-orange,.bg-fuchsia,.bg-purple,.bg-maroon,.bg-black,.bg-red-active,.bg-yellow-active,.bg-aqua-active,.bg-blue-active,.bg-light-blue-active,.bg-green-active,.bg-navy-active,.bg-teal-active,.bg-olive-active,.bg-lime-active,.bg-orange-active,.bg-fuchsia-active,.bg-purple-active,.bg-maroon-active,.bg-black-active,.callout.callout-danger,.callout.callout-warning,.callout.callout-info,.callout.callout-success,.alert-success,.alert-danger,.alert-error,.alert-warning,.alert-info,.label-danger,.label-info,.label-warning,.label-primary,.label-success,.modal-primary .modal-body,.modal-primary .modal-header,.modal-primary .modal-footer,.modal-warning .modal-body,.modal-warning .modal-header,.modal-warning .modal-footer,.modal-info .modal-body,.modal-info .modal-header,.modal-info .modal-footer,.modal-success .modal-body,.modal-success .modal-header,.modal-success .modal-footer,.modal-danger .modal-body,.modal-danger .modal-header,.modal-danger .modal-footer{color:#fff !important}.bg-gray{color:#000;background-color:#d2d6de !important}.bg-gray-light{background-color:#f7f7f7}.bg-black{background-color:#111 !important}.bg-red,.callout.callout-danger,.alert-danger,.alert-error,.label-danger,.modal-danger .modal-body{background-color:#dd4b39 !important}.bg-yellow,.callout.callout-warning,.alert-warning,.label-warning,.modal-warning .modal-body{background-color:#f39c12 !important}.bg-aqua,.callout.callout-info,.alert-info,.label-info,.modal-info .modal-body{background-color:#00c0ef !important}.bg-blue{background-color:#0073b7 !important}.bg-light-blue,.label-primary,.modal-primary .modal-body{background-color:#3c8dbc !important}.bg-green,.callout.callout-success,.alert-success,.label-success,.modal-success .modal-body{background-color:#00a65a !important}.bg-navy{background-color:#001f3f !important}.bg-teal{background-color:#39cccc !important}.bg-olive{background-color:#3d9970 !important}.bg-lime{background-color:#01ff70 !important}.bg-orange{background-color:#ff851b !important}.bg-fuchsia{background-color:#f012be !important}.bg-purple{background-color:#605ca8 !important}.bg-maroon{background-color:#d81b60 !important}.bg-gray-active{color:#000;background-color:#b5bbc8 !important}.bg-black-active{background-color:#000 !important}.bg-red-active,.modal-danger .modal-header,.modal-danger .modal-footer{background-color:#d33724 !important}.bg-yellow-active,.modal-warning .modal-header,.modal-warning .modal-footer{background-color:#db8b0b !important}.bg-aqua-active,.modal-info .modal-header,.modal-info .modal-footer{background-color:#00a7d0 !important}.bg-blue-active{background-color:#005384 !important}.bg-light-blue-active,.modal-primary .modal-header,.modal-primary .modal-footer{background-color:#357ca5 !important}.bg-green-active,.modal-success .modal-header,.modal-success .modal-footer{background-color:#008d4c !important}.bg-navy-active{background-color:#001a35 !important}.bg-teal-active{background-color:#30bbbb !important}.bg-olive-active{background-color:#368763 !important}.bg-lime-active{background-color:#00e765 !important}.bg-orange-active{background-color:#ff7701 !important}.bg-fuchsia-active{background-color:#db0ead !important}.bg-purple-active{background-color:#555299 !important}.bg-maroon-active{background-color:#ca195a !important}[class^="bg-"].disabled{opacity:.65;filter:alpha(opacity=65)}.text-red{color:#dd4b39 !important}.text-yellow{color:#f39c12 !important}.text-aqua{color:#00c0ef !important}.text-blue{color:#0073b7 !important}.text-black{color:#111 !important}.text-light-blue{color:#3c8dbc !important}.text-green{color:#00a65a !important}.text-gray{color:#d2d6de !important}.text-navy{color:#001f3f !important}.text-teal{color:#39cccc !important}.text-olive{color:#3d9970 !important}.text-lime{color:#01ff70 !important}.text-orange{color:#ff851b !important}.text-fuchsia{color:#f012be !important}.text-purple{color:#605ca8 !important}.text-maroon{color:#d81b60 !important}.link-muted{color:#7a869d}.link-muted:hover,.link-muted:focus{color:#606c84}.link-black{color:#666}.link-black:hover,.link-black:focus{color:#999}.hide{display:none !important}.no-border{border:0 !important}.no-padding{padding:0 !important}.no-margin{margin:0 !important}.no-shadow{box-shadow:none !important}.list-unstyled,.chart-legend,.contacts-list,.users-list,.mailbox-attachments{list-style:none;margin:0;padding:0}.list-group-unbordered>.list-group-item{border-left:0;border-right:0;border-radius:0;padding-left:0;padding-right:0}.flat{border-radius:0 !important}.text-bold,.text-bold.table td,.text-bold.table th{font-weight:700}.text-sm{font-size:12px}.jqstooltip{padding:5px !important;width:auto !important;height:auto !important}.bg-teal-gradient{background:#39cccc !important;background:-webkit-gradient(linear, left bottom, left top, color-stop(0, #39cccc), color-stop(1, #7adddd)) !important;background:-ms-linear-gradient(bottom, #39cccc, #7adddd) !important;background:-moz-linear-gradient(center bottom, #39cccc 0, #7adddd 100%) !important;background:-o-linear-gradient(#7adddd, #39cccc) !important;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7adddd', endColorstr='#39cccc', GradientType=0) !important;color:#fff}.bg-light-blue-gradient{background:#3c8dbc !important;background:-webkit-gradient(linear, left bottom, left top, color-stop(0, #3c8dbc), color-stop(1, #67a8ce)) !important;background:-ms-linear-gradient(bottom, #3c8dbc, #67a8ce) !important;background:-moz-linear-gradient(center bottom, #3c8dbc 0, #67a8ce 100%) !important;background:-o-linear-gradient(#67a8ce, #3c8dbc) !important;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#67a8ce', endColorstr='#3c8dbc', GradientType=0) !important;color:#fff}.bg-blue-gradient{background:#0073b7 !important;background:-webkit-gradient(linear, left bottom, left top, color-stop(0, #0073b7), color-stop(1, #0089db)) !important;background:-ms-linear-gradient(bottom, #0073b7, #0089db) !important;background:-moz-linear-gradient(center bottom, #0073b7 0, #0089db 100%) !important;background:-o-linear-gradient(#0089db, #0073b7) !important;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0089db', endColorstr='#0073b7', GradientType=0) !important;color:#fff}.bg-aqua-gradient{background:#00c0ef !important;background:-webkit-gradient(linear, left bottom, left top, color-stop(0, #00c0ef), color-stop(1, #14d1ff)) !important;background:-ms-linear-gradient(bottom, #00c0ef, #14d1ff) !important;background:-moz-linear-gradient(center bottom, #00c0ef 0, #14d1ff 100%) !important;background:-o-linear-gradient(#14d1ff, #00c0ef) !important;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#14d1ff', endColorstr='#00c0ef', GradientType=0) !important;color:#fff}.bg-yellow-gradient{background:#f39c12 !important;background:-webkit-gradient(linear, left bottom, left top, color-stop(0, #f39c12), color-stop(1, #f7bc60)) !important;background:-ms-linear-gradient(bottom, #f39c12, #f7bc60) !important;background:-moz-linear-gradient(center bottom, #f39c12 0, #f7bc60 100%) !important;background:-o-linear-gradient(#f7bc60, #f39c12) !important;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7bc60', endColorstr='#f39c12', GradientType=0) !important;color:#fff}.bg-purple-gradient{background:#605ca8 !important;background:-webkit-gradient(linear, left bottom, left top, color-stop(0, #605ca8), color-stop(1, #9491c4)) !important;background:-ms-linear-gradient(bottom, #605ca8, #9491c4) !important;background:-moz-linear-gradient(center bottom, #605ca8 0, #9491c4 100%) !important;background:-o-linear-gradient(#9491c4, #605ca8) !important;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#9491c4', endColorstr='#605ca8', GradientType=0) !important;color:#fff}.bg-green-gradient{background:#00a65a !important;background:-webkit-gradient(linear, left bottom, left top, color-stop(0, #00a65a), color-stop(1, #00ca6d)) !important;background:-ms-linear-gradient(bottom, #00a65a, #00ca6d) !important;background:-moz-linear-gradient(center bottom, #00a65a 0, #00ca6d 100%) !important;background:-o-linear-gradient(#00ca6d, #00a65a) !important;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ca6d', endColorstr='#00a65a', GradientType=0) !important;color:#fff}.bg-red-gradient{background:#dd4b39 !important;background:-webkit-gradient(linear, left bottom, left top, color-stop(0, #dd4b39), color-stop(1, #e47365)) !important;background:-ms-linear-gradient(bottom, #dd4b39, #e47365) !important;background:-moz-linear-gradient(center bottom, #dd4b39 0, #e47365 100%) !important;background:-o-linear-gradient(#e47365, #dd4b39) !important;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e47365', endColorstr='#dd4b39', GradientType=0) !important;color:#fff}.bg-black-gradient{background:#111 !important;background:-webkit-gradient(linear, left bottom, left top, color-stop(0, #111), color-stop(1, #2b2b2b)) !important;background:-ms-linear-gradient(bottom, #111, #2b2b2b) !important;background:-moz-linear-gradient(center bottom, #111 0, #2b2b2b 100%) !important;background:-o-linear-gradient(#2b2b2b, #111) !important;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#2b2b2b', endColorstr='#111111', GradientType=0) !important;color:#fff}.bg-maroon-gradient{background:#d81b60 !important;background:-webkit-gradient(linear, left bottom, left top, color-stop(0, #d81b60), color-stop(1, #e73f7c)) !important;background:-ms-linear-gradient(bottom, #d81b60, #e73f7c) !important;background:-moz-linear-gradient(center bottom, #d81b60 0, #e73f7c 100%) !important;background:-o-linear-gradient(#e73f7c, #d81b60) !important;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e73f7c', endColorstr='#d81b60', GradientType=0) !important;color:#fff}.description-block .description-icon{font-size:16px}.no-pad-top{padding-top:0}.position-static{position:static !important}.list-header{font-size:15px;padding:10px 4px;font-weight:bold;color:#666}.list-seperator{height:1px;background:#f4f4f4;margin:15px 0 9px 0}.list-link>a{padding:4px;color:#777}.list-link>a:hover{color:#222}.font-light{font-weight:300}.user-block:before,.user-block:after{content:" ";display:table}.user-block:after{clear:both}.user-block img{width:40px;height:40px;float:left}.user-block .username,.user-block .description,.user-block .comment{display:block;margin-left:50px}.user-block .username{font-size:16px;font-weight:600}.user-block .description{color:#999;font-size:13px}.user-block.user-block-sm .username,.user-block.user-block-sm .description,.user-block.user-block-sm .comment{margin-left:40px}.user-block.user-block-sm .username{font-size:14px}.img-sm,.img-md,.img-lg,.box-comments .box-comment img,.user-block.user-block-sm img{float:left}.img-sm,.box-comments .box-comment img,.user-block.user-block-sm img{width:30px !important;height:30px !important}.img-sm+.img-push{margin-left:40px}.img-md{width:60px;height:60px}.img-md+.img-push{margin-left:70px}.img-lg{width:100px;height:100px}.img-lg+.img-push{margin-left:110px}.img-bordered{border:3px solid #d2d6de;padding:3px}.img-bordered-sm{border:2px solid #d2d6de;padding:2px}.attachment-block{border:1px solid #f4f4f4;padding:5px;margin-bottom:10px;background:#f7f7f7}.attachment-block .attachment-img{max-width:100px;max-height:100px;height:auto;float:left}.attachment-block .attachment-pushed{margin-left:110px}.attachment-block .attachment-heading{margin:0}.attachment-block .attachment-text{color:#555}.connectedSortable{min-height:100px}.ui-helper-hidden-accessible{border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.sort-highlight{background:#f4f4f4;border:1px dashed #ddd;margin-bottom:10px}.full-opacity-hover{opacity:.65;filter:alpha(opacity=65)}.full-opacity-hover:hover{opacity:1;filter:alpha(opacity=100)}.chart{position:relative;overflow:hidden;width:100%}.chart svg,.chart canvas{width:100% !important}@media print{.no-print,.main-sidebar,.left-side,.main-header,.content-header{display:none !important}.content-wrapper,.right-side,.main-footer{margin-left:0 !important;min-height:0 !important;-webkit-transform:translate(0, 0) !important;-ms-transform:translate(0, 0) !important;-o-transform:translate(0, 0) !important;transform:translate(0, 0) !important}.fixed .content-wrapper,.fixed .right-side{padding-top:0 !important}.invoice{width:100%;border:0;margin:0;padding:0}.invoice-col{float:left;width:33.3333333%}.table-responsive{overflow:auto}.table-responsive>.table tr th,.table-responsive>.table tr td{white-space:normal !important}}


/* Base CSS */
.alignleft {
    float: left;
    margin-right: 15px;
}
.alignright {
    float: right;
    margin-left: 15px;
}
.aligncenter {
    display: block;
    margin: 0 auto 15px;
}
a:focus { outline: 0 solid; text-decoration: none }
img {
    max-width: 100%;
    height: auto;
}
h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0 0 15px;
    font-weight: 700;
}
body {
    background-color: #f5f5f5;
}
a:hover { text-decoration: none }

.section-padding {padding: 50px 0;}
.padding-top-20 {padding-top: 20px;}
.padding-top-0 {padding-top: 0;}
.left-side {
    background-color: #f5f5f5;
    width: 18%;
    height: 100%;
    position: fixed;
}
.right-side {
    background-color: #f5f5f5;
    width: 82%;
    margin-left: 18%;
    height: 100%;
    position: relative;
    z-index: 1;
}
.dashboard-wrapper {background-color: #f5f5f5;}
.add-product-box hr {margin-top: 10px; margin-bottom: 10px;}

/* Starting of Dashboard header items area */
.dashboard-header-area {padding: 30px 0 0px 0;}
.panel-body.dashboard-body {padding: 0 15px;}
.title-stats {
    position: relative;
    display: block;
    background-color: #303641;
    color: #fff;
    padding: 10px 20px 20px;
    margin-bottom: 30px;
    border-radius: 5px;
    transition: .4s;
}
.title-stats .icon {
    color: rgba(0, 0, 0, 0.1);
    position: absolute;
    right: 5px;
    bottom: 8px;
}
.title-stats .icon i {
    font-size: 100px;
    line-height: 0;
}
.title-stats.title-blue {background-color: #0073b7;}
.title-stats.title-green {background-color: #00a65a;}
.title-stats.title-skyblue {background-color: #00acd6;}
.title-stats.title-red {background-color: #f56954;}
.title-stats.title-gray {background-color: #8A6D3B;}
.title-stats.title-pink {background-color: #E91E63;}
.title-stats.title-cyan {background-color: #00BCD4;}
.title-stats.title-orange {background-color: #FF9800;}
.title-stats.title-purple {background-color: #9C27B0;}
.title-stats.title-blue {background-color: #2196F3;}
.title-stats.title-indigo {background-color: #3F51B5;}


.title-stats.title-blue:hover {background-color: #00639e;}
.title-stats.title-green:hover {background-color: #008d4c;}
.title-stats.title-skyblue:hover {background-color: #009AC0;}
.title-stats.title-red:hover {background: #f4543c;}
.title-stats.title-gray:hover {background-color: #7C6235;}
.title-stats.title-pink:hover {background-color: #bd0846;}
.title-stats.title-cyan:hover {background-color: #058696;}
.title-stats.title-orange:hover {background-color: #d88305;}
.title-stats.title-purple:hover {background-color: #87089c;}
.title-stats.title-blue:hover {background-color: #037ad8;}
.title-stats.title-indigo:hover {background-color: #2a3ca0;}

.title-stats .number {font-size: 38px; font-weight: 600;}
.title-stats h4 {margin-bottom: 10px; font-weight: 100;}
.title-view-btn {
    background-color: #fff;
    border-radius: 30px;
    display: inline-block;
    padding: 3px 8px;
    color: #000;
    font-size: 12px;
}
.title-stats:hover {color: #fff;}
.panel.admin {margin-top: 15px; margin-bottom: 30px; border-radius: 0;}
.panel.admin.top-reference-area {margin-top: 0;}
.panel-default.admin>.panel-heading {background-color: #fff;}
.product-sold-chart {margin-bottom: 30px;}
/* Ending of Dashboard header items area */

/* Starting of Dashboard Sidebar menu area */
.dashboard-sidebar-area .sidebar-header img {
    height: 35px;
    max-width: 192px;
}
.dashboard-sidebar-area {
    position: fixed;
    width: 18%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 99;
}
.dashboard-sidebar-area img {
    max-width: 100%;
    height: 100%;
}
.sidebar-menu-body {
    min-width: 18%;
    position: fixed;
    top: 0;
    left: 0;
    min-height: 100%;
    background-color: rgba(204, 37, 42, 0.79);
}
#sidebar-menu {
    min-width: 18%;
    position: fixed;
    top: 0;
    left: 0;
    max-height: 100%;
    color: #fff;
    transition: all 0.3s;
    overflow: hidden;
    overflow-y: auto;
}
.ps>.ps__scrollbar-y-rail>.ps__scrollbar-y {
    border-radius: 4px;
    width: 10px;
    background-color: #fff;
}
.ps > .ps__scrollbar-x-rail > .ps__scrollbar-x,
.ps.ps--active-x > .ps__scrollbar-x-rail {
    display: none;
}
.sidebar-header {font-size: 30px; padding: 15px 5px;}

ul.profile li.active img {
    height: 50px;
    min-width: 50px;
    border-radius: 100%;
    margin-left: 10px;
    margin-top: 7px;
}
#sidebar-menu ul.profile a {padding: 14px 0;}
#sidebar-menu ul.profile span {
    font-size: 11px;
    display: block;
}
#sidebar-menu ul.profile ul.profile-submenu {margin-top: 10px;}
#sidebar-menu ul.profile ul.profile-submenu li a {padding: 10px 10px}
#sidebar-menu ul.profile ul.profile-submenu li:hover {
    color: #fff;
    background: rgba(207, 55, 58, 0.40);
    border-radius: 5px;
}
#sidebar-menu ul.profile a[aria-expanded="false"]::before, 
#sidebar-menu ul.profile a[aria-expanded="true"]::before {
top: 17px;}
#sidebar-menu ul.profile li a:hover {
    color: #fff;
    background: transparent;
}
#sidebar-menu ul.components {
    height: 100%;
    width: 100%;
}
#sidebar-menu ul.components li {
    padding: 5px 0;
}
#sidebar-menu ul li a {
    padding: 8px;
    font-size: 1.1em;
    display: block;
    color: #fff;
    border-radius: 5px;
}
#sidebar-menu ul li a i.fa {margin-right: 5px;}
#sidebar-menu ul li a:hover {
    color: #fff;
    background: rgba(207, 55, 58, 0.40);
}

.profile a[aria-expanded="true"]::before {
    content: '\e260';
}
a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
    content: '\e259';
    display: block;
    position: absolute;
    top: 15px;
    right: 20px;
    font-family: 'Glyphicons Halflings';
    font-size: 0.6em;
}
a[data-toggle="collapse"] {
    position: relative;
}
.components a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
    content: '\e259';
    display: block;
    position: absolute;
    top: 15px;
    right: 20px;
    font-family: 'Glyphicons Halflings';
    font-size: 0.6em;
}
.components a[aria-expanded="true"]::before {
    content: '\e260';
}
#sidebar-menu ul.components ul li a {
    padding-left: 40px;
    transition: .4s;
    font-size: 14px;
}
#sidebar-menu ul.components ul li a:hover {background-color: rgb(165, 27, 27,0.9);}
.list-unstyled.submenu li{background-color: #be2e2e8a;}

/* Mobile menu collapse */
.navbar.navbar-default {
    display: none;
    visibility: hidden;
    opacity: 0;
}
.navbar {border: none;}
.navbar-default {
    background-color: transparent;
    border-color: none;
}
.navbar-default .navbar-header h2 {
    font-weight: 100;
    padding-top: 13px;
}
#sidebarCollapse {
    width: 50px;
    height: 45px;
    background: transparent;
    border: none;
    position: absolute;
    top: 0;
    right: 0;
}
#sidebarCollapse span {
    width: 80%;
    height: 2px;
    margin: 0 auto;
    display: block;
    background: #000;
    transition: all 0.8s cubic-bezier(0.810, -0.330, 0.345, 1.375);
    transition-delay: 0.2s;
}
#sidebarCollapse span:first-of-type {
    transform: rotate(45deg) translate(2px, 2px);
}
#sidebarCollapse span:nth-of-type(2) {
    opacity: 0;
}
#sidebarCollapse span:last-of-type {
    transform: rotate(-45deg) translate(1px, -1px);
}
#sidebarCollapse.active span {
    transform: none;
    opacity: 1;
    margin: 5px auto;
}
/* Ending of Dashboard Sidebar menu area */

/* Starting of Dashboard add-product-1 area */
.add-product-1 {
    background-color: #fff; 
    padding: 0;
    margin: 20px 0;
}
.add-product-box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid rgba(204, 37, 42, 0.79);;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}
.add-product-header {
    padding: 10px 15px 0 15px;
    display: flex;
    justify-content: space-between;
}
.add-product-header h2 {margin: 0; margin-top: 4px; font-size: 25px;}
.add-back-btn, .add-newProduct-btn {
    background-color: #009432;
    border: 1px solid #009432;
    display: inline-block;
    padding: 10px 15px;
    color: #ffffff;
    transition: .4s;
    border-radius: 30px;
}
.add-back-btn:hover, .add-newProduct-btn:hover, 
.add-product_btn:hover, .btn.product-btn:hover,
.pending-withdraw:hover {
    color: #009432;
    background-color: #ffffff;
}
.product-header-title h2 {
    font-size: 18px;
    margin-bottom: 6px;
}
.product__header {
    padding: 20px;
    border-bottom: 1px solid #eeeeee;
    position: relative;
    z-index: 9;
}
.add-back-btn:hover, .add-newProduct-btn:hover, 
.add-product_btn:hover, .btn.product-btn:hover,
.pending-withdraw:hover {
    color: #fff;
    background-color: #000;
}
.add-product-footer {padding-bottom: 20px;}
.add-product-box .form-horizontal {padding: 20px 0;}
.add-product-box .form-horizontal .form-group {margin-bottom: 20px;}
.add-product-box .form-horizontal .form-group:last-child {margin-bottom: 0;}
.add-product-box .form-horizontal .form-control {
    height: 40px;
    border-radius: 0;
    box-shadow: none;
}
.add-product-box .form-horizontal textarea.form-control {
    height: auto;
    border-radius: 0;
}
.add-product-footer {text-align: center;}
.add-product_btn {
    padding: 10px 30px;
    font-weight: 700;
    background-color: #009432;
    border: 1px solid #fff;
    color: #fff;
    border-radius: 30px;
    transition: .4s;
}
.add-product-box > .form-horizontal label {font-size: 16px;}
.add-product-box > .form-horizontal label span {
    display: block;
    font-weight: 400;
    font-size: 10px;
}
.margin-top {margin-top: 5px;}
.form-group-hidden {display: none;}
.checkbox1 input[type="checkbox"] + label::before {
    content: "";
    height: 25px;
    width: 25px;
    background-color: #fff;
    border: 1px solid #000;
    display: inline-block;
    vertical-align: top;
    margin-top: -2px;
    margin-right: 10px;
    border-radius: 3px;
}
.checkbox1 input[type="checkbox"]:checked + label::before {
    content: "\2713";
}
.checkbox1 input[type="checkbox"] {display: none;}
.btn.checkbox1 {padding-top: 14px;}

/* Bootstrap custom tags area */
.bootstrap-tags {
    padding-bottom: 0 !important;
}
.form-control.tags-input.input-md {
    height: 40px !important;
    width: 98% !important;
    padding-top: 0 !important;
    padding-left:  2% !important;
}
.bootstrap-tags .tag.md {
    font-size: 14px;
    margin-top: 8px;
    margin-left: 10px; 
}
/* Ending of Dashboard add-product-1 area */

/* Starting of Dashboard Social Links area */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}
.switch input {display:none;}
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #dddddd;
  -webkit-transition: .4s;
  transition: .4s;
}
.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}
input:checked + .slider {
  background-color: #009432;
}
input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}
input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}
.slider.round:before {
  border-radius: 50%;
}
/* Ending of Dashboard Social Links area */

/* Starting of Dashboard Products area */
#product-table_wrapper {
    padding: 20px;
}
.dataTables_length, 
.dataTables_wrapper .dataTables_info {
    padding-left: 20px;
}
.dataTables_wrapper .dataTables_filter,
.dataTables_wrapper .dataTables_paginate {
    padding-right: 20px;
}
.dataTables_wrapper .dataTables_length select {
    border: none;
    border-radius: 0;
    border-bottom: 1px solid #ddd;
}
.dataTables_wrapper .dataTables_length select.form-control,
.dataTables_wrapper .dataTables_filter input.form-control {
    box-shadow: none;
    transition: .4s ease;
}
.dataTables_wrapper .dataTables_length select {width: 100px;}
.dataTables_wrapper .dataTables_filter input.form-control {
    width: 300px;
    padding: 0px 2px;
}
.dataTables_wrapper .dataTables_filter input {
    border: none;
    border-bottom: 1px solid #ddd;
    border-radius: 0;
}
.dataTables_wrapper .dataTables_length select.form-control:focus, 
.dataTables_wrapper .dataTables_filter input.form-control:focus {
    border-bottom: 1px solid #D75357;
    box-shadow: 0 0 10px rgba(215, 83, 87, 0.12);
}
.table.products > thead > tr > th {
    border-bottom: none;
    font-size: 16px;
    font-weight: 400;
}
.table.products > tbody > tr > td {
    padding: 7px 5px;
    vertical-align: middle;
}
.table.products > tbody > tr:last-child td {border-bottom: 1px solid #ddd;}
table.table.products.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > td:first-child::before {
    top: 40%;
    border: 2px solid #D75357;
    box-shadow: none;
    background-color: #D75357;
    font-weight: 700;
    text-align: center;
}
.pagination > li > a {
    border: none;
    color: #000 !important;
}
.pagination > .active > a, 
.pagination > .active > a:focus, 
.pagination > .active > a:hover, 
.pagination > .active > span, 
.pagination > .active > span:focus, 
.pagination > .active > span:hover {
    background-color: #D75357;
    border-color: #D75357;
    color: #fff !important;
    border-radius: 50%;
}
.pagination > li > a:focus, .pagination > li > a:hover, 
.pagination > li > span:focus, 
.pagination > li > span:hover {
    background-color: transparent;
    border-color: transparent;
}
table.dataTable thead .sorting::after {
    opacity: 0.4;
    content: "\f0dc";
}
table.dataTable thead .sorting_asc::after {
    content: "\f0de";
    top: 2px;
}
table.dataTable thead .sorting_desc::after {
    content: "\f0dd";
    top: -3px;
}
table.dataTable thead .sorting::after,
table.dataTable thead .sorting_asc::after,
table.dataTable thead .sorting_desc::after, 
table.dataTable thead .sorting_asc_disabled::after, 
table.dataTable thead .sorting_desc_disabled::after {
    position: relative;
    display: inline-block;
    bottom: 1px;
    right: -7px;
    font-family: 'FontAwesome';
    opacity: 0.8;
    font-size: 12px;
}
.product-btn {
    transition: .4s;
    border: none;
    margin-right: 5px;
    border-radius: 30px;
    padding: 2px 8px;
    margin-bottom: 2px;
}
.product-btn:last-child {margin-bottom: 0;}
/* Ending of Dashboard Products area */

/* Starting of Dashboard Orders area */
.order-header-right {
    display: inline-block;
    float: right;
    margin-top: 8px;
    overflow: hidden;
}
.complete, .process {display: inline-block; position: relative;}
.process {margin-left: 15px;}
.complete div {
    background-color: #90EE90;
    height: 20px;
    width: 20px;
    display: inline-block; 
    position: absolute;
    left: 0;
    top: 0;
}
.complete span {margin-left: 25px;}
.process div {
    background-color: #D9EDF7;
    height: 20px;
    width: 20px;
    display: inline-block;
    position: absolute;
    left: 0;
    top: 0;  
}
.process span {margin-left: 25px;}
/* Ending of Dashboard Orders area */

/* Starting of Dashboard Withdraws area */
.pending-withdraw {
    color: #000;
    font-weight: 700;
    border: 1px solid #000;
    display: inline-block;
    padding: 10px 20px;
    transition: .4s;
    margin-left: 10px;
    border-radius: 30px;
}
/* Ending of Dashboard Withdraws area */

/* Starting of Dashboard faq area */
.add-product-header.faq {margin-bottom: 20px;}
/* Ending of Dashboard faq area */

/* Starting of Dashboard Website Contents area */
.website-content-lower-form {padding: 20px 20px 0px 20px;}
/* Ending of Dashboard Website Contents area */

/* Starting of Dashboard Website Order view Details area */
.table-responsive.order-details-table {padding: 20px;}
.o-pending {
    color: #FFFFFF;
    background-color: #985f0d;
}
.add-product_btn.order-details {
    margin: 5px 15px 25px 15px;
}
/* Ending of Dashboard Website Order view Details area */

/* Starting of Dashboard home Top refference & pie chart area */
#chartContainer, #chartContainer-topReference, #chartContainer-os {
    height: 390px;
    width: 100%;
}
.panel-default > .panel-heading {
    font-weight: 700;
}
.table.top-reference, .table.os-table {margin-top: 10px; margin-bottom: 0;}
.table.top-reference > tbody > tr > td, 
.table.os-table > tbody > tr > td
    {padding: 25px 0;}
.table.top-reference > tbody > tr:first-child > td, 
.table.os-table > tbody > tr:first-child > td
    {border-top: none;}
/* Ending of Dashboard home Top refference & pie chart area */

/*  Starting of Login area  */
.login-area {padding: 100px 0;background: #ffffff;}
.login-form {
    background-color: #fff;
    border-radius: 2px;
    padding: 100px;
    padding-bottom: 50px;
    margin-bottom: 50px;
    border: 1px solid #337AB7;
}
.login-icon {
    position: absolute;
    height: 100px;
    width: 100px;
    background-color: #337AB7;
    display: inline-block;
    top: 0;
    left: 50%;
    text-align: center;
    font-size: 40px;
    line-height: 95px; 
    color: #fff;
    border-radius: 50%;
    margin-top: -50px;
    margin-left: -50px;
}
.login-title {
    background-color: #337AB7;
    color: #fff;
    padding: 10px;
    border-radius: 3px;
    margin-bottom: 20px;
    font-weight: 600;
    font-size: 16px;
}
.section-borders {
    position: absolute;
    width: 100%;
    text-align: center;
    top: 60px;
    left: 0;
}
.section-borders span {
    height: 5px;
    width: 50px;
    display: inline-block;
    background-color: #337AB7;
    border-radius: 2px;
}
.section-borders span.black-border {
    background-color: #999;
    width: 30px;
    margin: 0 10px;
}
.login-form .input-group-addon {
    background-color: transparent;
    border-radius: 2px;
    color: #337AB7;
}
.login-form .input-group-addon i.fa {
    width: 20px;
    font-size: 20px;
}
.login-form .form-control {
    height: 40px;
    border-radius: 2px;
}
.login-btn {
    background-color: #337AB7;
    color: #fff;
    padding: 10px 30px;
    font-weight: 600;
    font-size: 12px;
    border-radius: 2px;
}
.login-btn:hover {color: #ffffff;}
/*  Ending of Login area  */

.qualification-area, .color-area, .single-color .qualification-area-open {position: relative;}

.single-color  {position: relative;}
.ui-close, .ui-close2, .ui-close3 {
    position: absolute;
    background-color: red;
    color: #fff;
    font-weight: 600;
    top: -10px;
    right: -5%;
    width: 20px;
    height: 20px;
    border-radius: 100%;
    text-align: center;
    line-height: 20px;
    cursor: pointer;
    font-size: 11px;
}
.ui-close1 {
    position: absolute;
    background-color: red;
    color: #fff;
    font-weight: 600;
    top: -11px;
    right: -2%;
    width: 20px;
    height: 20px;
    border-radius: 100%;
    text-align: center;
    line-height: 20px;
    cursor: pointer;
    font-size: 11px;
}
.ui-close4 {
    position: absolute;
    background-color: red;
    color: #fff;
    font-weight: 600;
    top: 13px;
    right: 1%;
    width: 20px;
    height: 20px;
    border-radius: 100%;
    text-align: center;
    line-height: 20px;
    cursor: pointer;
    font-size: 11px;
}
.profile-info {
    display: flex;
    justify-content: flex-end;
}
.profile-comments-title,
.single-comments-area,
.profile-notifi-title,
.single-notifi-area,
.profile-wishlist-title,
.single-wishlist-area {
    display: flex;
    justify-content: space-between;
}
.view-profile {position: relative;}
.profile__img {cursor: pointer;}
.profile__img img, 
.comments-img img {
    width: 30px;
    height: 30px;
    border-radius: 100%;
}
.profile__img span {padding: 0 5px;}
.profile-content, 
.profile-comments-content,
.profile-notifi-content,
.profile-wishlist-content {
    background: #ffffff;
    box-shadow: 0 0 5px #cccccc;
    padding: 20px 0;
    position: absolute;
    right: 0;
    top: 100%;
    width: 220px;
    z-index: 9999 !important;
    left: auto;
    border-radius: 0;
    margin-top: 20px;
}
.profile-comments-title p {font-size: 12px;}
.profile-content h5 {padding: 0 30px;}
.profile-content a {
    display: block;
    color: #333333;
    padding: 8px 30px;
    transition: all 400ms ease;
}
.profile-content a:hover {background: #f5f5f5;}
.profile-content a i {margin-right: 10px;}

.profile-comments-title,
.single-comments-area {margin-bottom: 10px;}
.profile-comments,
.profile-notifi,
.profile-wishlist {
    padding: 0 30px;
    position: relative;
    cursor: pointer;
}
.profile-notifi {padding: 0;}
.profile-comments span,
.profile-notifi span,
.profile-wishlist span {
    position: absolute;
    right: -5px;
    top: -10px;
    height: 20px;
    width: 20px;
    line-height: 20px;
    border-radius: 100%;
    background: #12CBC4;
    color: #ffffff;
    font-size: 10px;
    text-align: center;
}
.profile-notifi span {
    right: 0px;
    background: #009432;
}
.profile-wishlist span {
    background: #EE5A24;
}
.profile-comments-content,
.profile-notifi-content,
.profile-wishlist-content {
    width: 350px;
    padding: 20px;
    max-height: 300px;
}
.comments-img,
.notifi-img,
.wishlist-img {width: 20%;}
.single-comments-text,
.single-notifi-text,
.single-wishlist-text {width: 80%}
.single-comments-text h5,
.single-notifi-text h5,
.single-wishlist-text h5 {margin-bottom: 5px;}
.single-comments-text p,
.single-notifi-text p,
.single-wishlist-text p {
    font-size: 12px;
    color: #888888;
}
.notifi-img,
.wishlist-img {
    background: #0652DD;
    height: 30px;
    width: 30px;
    text-align: center;
    line-height: 30px;
    border-radius: 100%;
}
.wishlist-img {background: #6F1E51;}
.notifi-img i,
.wishlist-img i {
    font-size: 12px;
    color: #ffffff;
}
.product__header {
    padding: 20px;
    border-bottom: 1px solid #eeeeee;
}
.profile-info.dropdown a[aria-expanded="false"]::before, 
.profile-info.dropdown a[aria-expanded="true"]::before {display: none;}
.single-notifi-area {padding: 5px;}
.gray {background: #f3f3f3;}

.list-unstyled {
    margin-bottom: 3px;
}

/*  Starting of Invoice area  */
.invoice-wrap {
    padding: 20px;
    color: #000000;
}
.invoice__metaInfo {
    display: flex;
    justify-content: space-between;
}
.seller p, .buyer p {
    margin-bottom: 0;
    font-size: 18px;
    font-weight: 700;
}
.invoice__logo img {height: 50px; width: 250px;}
.invoce__date p, 
.invoce__number p,
.invoice__orderDetails p,
.invoice__shipping p {margin-bottom: 0;}
.invoice__metaInfo {margin-top: 20px;}
.invoce__date {font-weight: 700;}
.invoce__date strong {font-size: 18px;}
.invoice__orderDetails p strong,
.invoice__shipping p strong {
    font-size: 18px;
    font-weight: 700;
}


.invoice__table {
    margin-top: 40px;
}
.invoice__table .table>tbody>tr>td, 
.invoice__table .table>tbody>tr>th, 
.invoice__table .table>tfoot>tr>td, 
.invoice__table .table>tfoot>tr>th, 
.invoice__table .table>thead>tr>td, 
.invoice__table .table>thead>tr>th {
    text-align: right;
}

.invoice__table .table>tbody>tr>td:first-child {
    width: 40%;
}

.invoice__table .table>thead>tr>th {font-size: 18px;}
.invoice__table .table>thead>tr>th:first-child,
.invoice__table .table>tbody>tr>td:first-child {text-align: left;}

.invoice__table .table>tbody>tr>td:first-child span {
   display: block;
   font-size: 10px;
   color: #88897f;
}

.invoice__table .table>tfoot>tr>td {
    font-size: 16px;
    font-weight: 700;
}
.invoice__table .table>tfoot>tr>td {border-top: none;} 
.invoice__table .table>tfoot>tr:first-child>td {border-top: 1px solid #dddddd;} 
.invoice__table .table>tfoot>tr:last-child>td {
    font-size: 20px;
    border-top: 3px solid #000000;
}
.invoice__table .table>tfoot>tr:last-child>td:first-child {border: none;}
.invoice__orderDetails {margin: 20px 0;}
.invoice__orderDetails p strong,
.invoice__shipping p strong {
    margin-bottom: 10px; 
    display: block;
}
/*  Ending of Invoice area  */

/*  Starting of new view details area  */
.order-table-wrap {padding: 20px;}
.order-table-wrap .table>tbody>tr>td, 
.order-table-wrap .table>tbody>tr>th
 {border-top: none;}
.order-table-wrap .table>tbody>tr.tr-head {
    position: relative;
}
.order-table-wrap .table>tbody>tr.tr-head:after {
    position: absolute;
    content: "";
    left: 20px;
    top: 0;
    height: 40px;
    width: 50px;
    background-color: transparent;
    border-bottom: 2px solid #0165cbc2;
}
.order-table-wrap .table>tbody>tr>th.order-th {font-size: 22px;}
.order-table-wrap .table td,
.order-table-wrap .table th {padding: 0.50rem;}
/*  Ending of new view details area  */

.form-horizontal label span {
    display: block;
    font-weight: 400;
    font-size: 10px;
}
/*Star Rating Start*/
.starrr {
    display: inline-block;
}
.starrr a {
    font-size: 16px;
    padding: 0 1px;
    cursor: pointer;
    color: #ffc000;
    text-decoration: none;
}
.review-star{
    padding:20px 0;
}
/*Star Rating End*/

.ratings {
    position: relative;
    vertical-align: middle;
    display: inline-block;
    color: #b1b1b1;
    overflow: hidden;
}
.full-stars {
    position: absolute;
    left: 0;
    top: 0;
    white-space: nowrap;
    overflow: hidden;
    color: #ffc000;
}
.empty-stars:before, .full-stars:before {
    content:"\2605\2605\2605\2605\2605";
    font-size: 14pt;
}
.empty-stars:before {
    -webkit-text-stroke: 1px #ffc000;
    color:transparent;
}
.full-stars:before {
    -webkit-text-stroke: 1px #ffc000;
}
/* Webkit-text-stroke is not supported on firefox or IE */

/* Firefox */
@-moz-document url-prefix() {
    .full-stars {
        color: #ffc000;
    }
}
.full-stars {
    color: #ffc000;
}

/* email modal */
.modal.vendor .modal-header {
    padding: 1.5em;
    background: #0363D1;
    color: #ffffff;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.modal.vendor .close {
    font-size: 16px;
    color: #ffffff;
    text-shadow: none;
    opacity: 1;
    margin-top: 6px;
}
.modal.vendor .modal-title {
    margin-bottom: 0;
    line-height: 1.5;
    font-size: 20px;
    font-family: 'Work Sans', sans-serif;
    font-weight: 400;
}
.modal.vendor .modal-body {
    padding: 1.5em;
}
.modal.vendor .modal-footer {
    background: #f1f4fb;
    padding: 1.4rem;
    border-top: 1px solid #e9ecef;
    text-align: left;
}
.modal.vendor .email-btn {
    background: #0363D1;
    border: 1px solid #0363D1;
    color: #ffffff;
    border-radius: 60px;
    padding: 5px 18px;
    position: relative;
    cursor: pointer;
    display: inline-block;
    font-size: 14px;
    transition: all 0.1s ease-out;
    vertical-align: middle;
}
.modal.vendor .email-btn:hover {
    background: #ffffff;
    color: #0363D1;
}
.modal.vendor.in .modal-dialog {
    position:fixed;
    bottom:0px;
    right:0px;
    margin:0px;
    max-width: 500px;
}
.modal.vendor .modal-content {
    border: none;
    /*box-shadow: none;*/
}
.modal.vendor .form-control {
    border-top: none;
    border-left: none;
    border-right: none;
    border-radius: 0px;
    border-bottom-width: 1px;
}
.modal.vendor .form-group {margin-bottom: 24px;}
/*----------Ending of Vendor shop area----------*/

/  New CSS  /
.support-ticket-wrapper .panel-body img {
    height: 60px;
    width: 60px;
    border-radius: 100%;
}
.support-ticket-wrapper .panel-heading {font-size: 16px;}
.support-ticket-wrapper button {
    font-weight: 600; 
    padding: 8px 12px;
}
.support-ticket-wrapper .panel-footer {
    background-color: #ffffff;
    padding: 20px;
}
.support-ticket-wrapper table tr > td {
    width: 100%;
    border-top: none;
}
.support-ticket-wrapper .panel {border-color: #dddddd;}
.support-ticket-wrapper .panel,
.support-ticket-wrapper .panel-heading,
.support-ticket-wrapper textarea,
.support-ticket-wrapper button  {
    border-radius: 0;
}
.support-ticket-wrapper .ticket-date {
    font-size: 10px;
    color: #999999;
}
/*.support-ticket-wrapper .panel-body {padding: 0;}*/
.single-reply-area.user {background-color: #f1f1f1; padding: 10px;}
.support-ticket-wrapper .panel-body img {
    height: 60px;
    width: 60px;
    border-radius: 100%;
}
/*   Gallery modal area   */
.gallery-btn {
    border-radius: 30px;
    padding: 6px 10px;
    font-weight: 500;
}
.mr-5 {margin-right: 5px;}
.gallery-btn-area {margin-bottom: 30px;}
.modal.gallery .modal-header {
    border-bottom: none;
    padding-bottom: 0;
}
.modal.gallery .modal-body {
    max-height: 460px;
    overflow: hidden;
    overflow-y: auto;
}
.gallery__img {
    border: 1px solid #dddddd;
    padding: 5px;
    margin-bottom: 15px;
    position: relative;
    text-align: center;
}
.gallery__img img {
    width: 167.33px;
    height: 167.33px;
}
.gallery-wrap .row {
    margin-left: -7.5px;
    margin-right: -7.5px;
}
.gallery-wrap .row .col-sm-4 {
    padding-left: 7.5px;
    padding-right: 7.5px;
}
.gallery-close {
    height: 20px;
    width: 20px;
    border: 1px solid #cccccc;
    font-size: 12px;
    text-align: center;
    position: absolute;
    right: -10px;
    top: -10px;
    background-color: #ffffff;
    border-radius: 100%;
    cursor: pointer;
}
.profile-wishlist a, .profile-notifi a, .profile-comments a {position: relative;}

.profile-comments:first-child {
    padding-left: 0;
}

/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidh18Smxg.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkido18Smxg.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidg18Smxg.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidv18Smxg.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidj18Smxg.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidi18Smxg.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkids18Q.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7qsDJT9g.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7jsDJT9g.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7rsDJT9g.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7ksDJT9g.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7osDJT9g.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7psDJT9g.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7nsDI.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 600;
  src: local('Source Sans Pro SemiBold Italic'), local('SourceSansPro-SemiBoldItalic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZY4lCdh18Smxg.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 600;
  src: local('Source Sans Pro SemiBold Italic'), local('SourceSansPro-SemiBoldItalic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZY4lCdo18Smxg.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 600;
  src: local('Source Sans Pro SemiBold Italic'), local('SourceSansPro-SemiBoldItalic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZY4lCdg18Smxg.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 600;
  src: local('Source Sans Pro SemiBold Italic'), local('SourceSansPro-SemiBoldItalic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZY4lCdv18Smxg.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 600;
  src: local('Source Sans Pro SemiBold Italic'), local('SourceSansPro-SemiBoldItalic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZY4lCdj18Smxg.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 600;
  src: local('Source Sans Pro SemiBold Italic'), local('SourceSansPro-SemiBoldItalic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZY4lCdi18Smxg.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 600;
  src: local('Source Sans Pro SemiBold Italic'), local('SourceSansPro-SemiBoldItalic'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZY4lCds18Q.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmhduz8A.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwkxduz8A.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmxduz8A.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlBduz8A.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmBduz8A.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmRduz8A.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlxdu.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qNa7lqDY.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qPK7lqDY.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qNK7lqDY.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qO67lqDY.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qN67lqDY.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qNq7lqDY.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qOK7l.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 600;
  src: local('Source Sans Pro SemiBold'), local('SourceSansPro-SemiBold'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwmhduz8A.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 600;
  src: local('Source Sans Pro SemiBold'), local('SourceSansPro-SemiBold'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwkxduz8A.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 600;
  src: local('Source Sans Pro SemiBold'), local('SourceSansPro-SemiBold'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwmxduz8A.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 600;
  src: local('Source Sans Pro SemiBold'), local('SourceSansPro-SemiBold'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwlBduz8A.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 600;
  src: local('Source Sans Pro SemiBold'), local('SourceSansPro-SemiBold'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwmBduz8A.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 600;
  src: local('Source Sans Pro SemiBold'), local('SourceSansPro-SemiBold'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwmRduz8A.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 600;
  src: local('Source Sans Pro SemiBold'), local('SourceSansPro-SemiBold'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3i54rwlxdu.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmhduz8A.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwkxduz8A.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmxduz8A.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwlBduz8A.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmBduz8A.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmRduz8A.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://fonts.gstatic.com/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwlxdu.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

  </style>
</head>
<body>
    <div class="invoice-wrap">
            <div class="invoice__title">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="invoice__logo text-left">
                           <img src="{{ asset('assets/images/'.$gs->invoice_logo) }}" alt="woo commerce logo">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="invoice__metaInfo">
                <div class="col-lg-6">
                    <div class="invoice__orderDetails">
                        
                        <p><strong>{{ __('Order Details') }} </strong></p>
                        <span><strong>{{ __('Invoice Number') }} :</strong> {{ sprintf("%'.08d", $order->id) }}</span><br>
                        <span><strong>{{ __('Order Date') }} :</strong> {{ date('d-M-Y',strtotime($order->created_at)) }}</span><br>
                        <span><strong>{{  __('Order ID')}} :</strong> {{ $order->order_number }}</span><br>
                        @if($order->dp == 0)
                        <span> <strong>{{ __('Shipping Method') }} :</strong>
                            @if($order->shipping == "pickup")
                            {{ __('Pick Up') }}
                            @else
                            {{ __('Ship To Address') }}
                            @endif
                        </span><br>
                        @endif
                        <span> <strong>{{ __('Payment Method') }} :</strong> {{$order->method}}</span><br>
                        <span><strong>{{ __('Payment Status') }} :</strong> {{ $order->payment_status == 'Pending' ? "Unpaid":"Paid" }}</span>
                    </div>
                </div>
            </div>

            <div class="invoice__metaInfo" style="width: 50%">
                @if($order->dp == 0)
                <div class="col-lg-6">
                        <div class="invoice__orderDetails">
                            <p><strong>{{ __('Shipping Details') }}</strong></p>
                           <span><strong>{{ __('Customer Name') }}</strong>: {{ $order->shipping_name == null ? $order->customer_name : $order->shipping_name}}</span><br>
                           <span><strong>{{ __('Address') }}</strong>: {{ $order->shipping_address == null ? $order->customer_address : $order->shipping_address }}</span><br>
                           <span><strong>{{ __('City') }}</strong>: {{ $order->shipping_city == null ? $order->customer_city : $order->shipping_city }}</span><br>
                           <span><strong>{{ __('Country') }}</strong>: {{ $order->shipping_country == null ? $order->customer_country : $order->shipping_country }}</span>
                        </div>
                </div>
                @endif

            </div>

            <div class="invoice__metaInfo" >
                <div class="col-lg-6">
                        <div class="invoice__orderDetails">
                            <p><strong>{{ __('Billing Details') }}</strong></p>
                            <span><strong>{{ __('Customer Name') }}</strong>: {{ $order->customer_name}}</span><br>
                            <span><strong>{{ __('Address') }}</strong>: {{ $order->customer_address }}</span><br>
                            <span><strong>{{ __('City') }}</strong>: {{ $order->customer_city }}</span><br>
                            <span><strong>{{ __('Country') }}</strong>: {{ $order->customer_country }}</span>
                        </div>
                </div>
            </div>


                <div class="col-lg-12">
                    <div class="invoice_table">
                        <div class="mr-table">
                            <div class="table-responsive">
                                <table id="example2" class="table table-hover dt-responsive" cellspacing="0"
                                    width="100%">
                                    <thead style="border-top:1px solid rgba(0, 0, 0, 0.1) !important;">
                                        <tr>
                                            <th>{{ __('Product') }}</th>
                                            <th>{{ __('Details') }}</th>
                                            <th>{{ __('Total') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $subtotal = 0;
                                        $tax = 0;
                                        @endphp
                                        @foreach($cart->items as $product)
                                        <tr>
                                            <td width="50%">
                                                @if($product['item']['user_id'] != 0)
                                                @php
                                                $user = App\Models\User::find($product['item']['user_id']);
                                                @endphp
                                                @if(isset($user))
                                                {{ $product['item']['name']}}
                                                @else
                                                {{$product['item']['name']}}
                                                @endif

                                                @else
                                                {{ $product['item']['name']}}
                                                @endif
                                            </td>

                                            <td>
                                                @if($product['size'])
                                               <p>
                                                    Size : {{str_replace('-',' ',$product['size'])}}
                                               </p>
                                               @endif
                                               @if($product['color'])
                                                <p>
                                                        Color : <span style="margin-left: 40px; width: 20px; height: 0.2px; display: block; border: 10px solid {{$product['color'] == "" ? "white" : $product['color']}};"></span>
                                                </p>
                                                @endif
                                                <p>
                                                        Price : {{ App\Models\Currency::where('sign',$order->currency_sign)->first()->name }}{{ round($product['item']['price'] * $order->currency_value , 2) }}
                                                </p>
                                               <p>
                                                    Qty : {{$product['qty']}} {{ $product['item']['measure'] }}
                                               </p>
                                            </td>

                                            <td>{{ App\Models\Currency::where('sign',$order->currency_sign)->first()->name }}{{ round($product['price'] * $order->currency_value , 2) }}
                                            </td>
                                            @php
                                            $subtotal += round($product['price'] * $order->currency_value, 2);
                                            @endphp

                                        </tr>

                                        @endforeach

                                        <tr class="semi-border">
                                            <td colspan="1"></td>
                                            <td><strong>{{ __('Subtotal') }}</strong></td>
                                            <td>{{ App\Models\Currency::where('sign',$order->currency_sign)->first()->name }}{{ round($subtotal, 2) }}</td>

                                        </tr>
                                        @if($order->shipping_cost != 0)
                                        <tr class="no-border">
                                            <td colspan="1"></td>
                                            <td><strong>{{ __('Shipping Cost') }}({{ App\Models\Currency::where('sign',$order->currency_sign)->first()->name }})</strong></td>
                                            <td>{{ round($order->shipping_cost , 2) }}</td>
                                        </tr>
                                        @endif

                                        @if($order->packing_cost != 0)
                                        <tr class="no-border">
                                            <td colspan="1"></td>
                                            <td><strong>{{ __('Packaging Cost') }}({{ App\Models\Currency::where('sign',$order->currency_sign)->first()->name }})</strong></td>
                                            <td>{{ round($order->packing_cost , 2) }}</td>
                                        </tr>
                                        @endif

                                        @if($order->tax != 0)
                                        <tr class="no-border">
                                            <td colspan="1"></td>
                                            <td><strong>{{ __('TAX') }}({{ App\Models\Currency::where('sign',$order->currency_sign)->first()->name }})</strong></td>

                                            @php
                                            $tax = ($subtotal / 100) * $order->tax;
                                            @endphp

                                            <td>{{round($tax, 2)}}</td>
                                        </tr>

                                        @endif
                                        @if($order->coupon_discount != null)
                                        <tr class="no-border">
                                            <td colspan="1"></td>
                                            <td><strong>{{ __('Coupon Discount') }}({{ App\Models\Currency::where('sign',$order->currency_sign)->first()->name }})</strong></td>
                                            <td>{{ App\Models\Currency::where('sign',$order->currency_sign)->first()->name }}{{round($order->coupon_discount, 2)}}</td>
                                        </tr>
                                        @endif
                                        <tr class="final-border">
                                            <td colspan="1"></td>
                                            <td><strong>{{ __('Total') }}</strong></td>
                                            <td>{{ App\Models\Currency::where('sign',$order->currency_sign)->first()->name }}{{ round($order->pay_amount * $order->currency_value , 2) }}
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
<!-- ./wrapper -->



</body>
</html>
