/**handles:admin-bar**/
"undefined"!=typeof jQuery?("undefined"==typeof jQuery.fn.hoverIntent&&!function(e){e.fn.hoverIntent=function(t,n,o){var a={interval:100,sensitivity:6,timeout:0};a="object"==typeof t?e.extend(a,t):e.isFunction(n)?e.extend(a,{over:t,out:n,selector:o}):e.extend(a,{over:t,out:t,selector:n});var r,s,i,c,l=function(e){r=e.pageX,s=e.pageY},u=function(t,n){return n.hoverIntent_t=clearTimeout(n.hoverIntent_t),Math.sqrt((i-r)*(i-r)+(c-s)*(c-s))<a.sensitivity?(e(n).off("mousemove.hoverIntent",l),n.hoverIntent_s=!0,a.over.apply(n,[t])):(i=r,c=s,void(n.hoverIntent_t=setTimeout(function(){u(t,n)},a.interval)))},d=function(e,t){return t.hoverIntent_t=clearTimeout(t.hoverIntent_t),t.hoverIntent_s=!1,a.out.apply(t,[e])},m=function(t){var n=e.extend({},t),o=this;o.hoverIntent_t&&(o.hoverIntent_t=clearTimeout(o.hoverIntent_t)),"mouseenter"===t.type?(i=n.pageX,c=n.pageY,e(o).on("mousemove.hoverIntent",l),o.hoverIntent_s||(o.hoverIntent_t=setTimeout(function(){u(n,o)},a.interval))):(e(o).off("mousemove.hoverIntent",l),o.hoverIntent_s&&(o.hoverIntent_t=setTimeout(function(){d(n,o)},a.timeout)))};return this.on({"mouseenter.hoverIntent":m,"mouseleave.hoverIntent":m},a.selector)}}(jQuery),jQuery(document).ready(function(e){var t,n,o,a=e("#wpadminbar"),r=!1;t=function(t,n){var o=e(n),a=o.attr("tabindex");a&&o.attr("tabindex","0").attr("tabindex",a)},n=function(t){a.find("li.menupop").on("click.wp-mobile-hover",function(n){var o=e(this);o.parent().is("#wp-admin-bar-root-default")&&!o.hasClass("hover")?(n.preventDefault(),a.find("li.menupop.hover").removeClass("hover"),o.addClass("hover")):o.hasClass("hover")?e(n.target).closest("div").hasClass("ab-sub-wrapper")||(n.stopPropagation(),n.preventDefault(),o.removeClass("hover")):(n.stopPropagation(),n.preventDefault(),o.addClass("hover")),t&&(e("li.menupop").off("click.wp-mobile-hover"),r=!1)})},o=function(){var t=/Mobile\/.+Safari/.test(navigator.userAgent)?"touchstart":"click";e(document.body).on(t+".wp-mobile-hover",function(t){e(t.target).closest("#wpadminbar").length||a.find("li.menupop.hover").removeClass("hover")})},a.removeClass("nojq").removeClass("nojs"),"ontouchstart"in window?(a.on("touchstart",function(){n(!0),r=!0}),o()):/IEMobile\/[1-9]/.test(navigator.userAgent)&&(n(),o()),a.find("li.menupop").hoverIntent({over:function(){r||e(this).addClass("hover")},out:function(){r||e(this).removeClass("hover")},timeout:180,sensitivity:7,interval:100}),window.location.hash&&window.scrollBy(0,-32),e("#wp-admin-bar-get-shortlink").click(function(t){t.preventDefault(),e(this).addClass("selected").children(".shortlink-input").blur(function(){e(this).parents("#wp-admin-bar-get-shortlink").removeClass("selected")}).focus().select()}),e("#wpadminbar li.menupop > .ab-item").bind("keydown.adminbar",function(n){if(13==n.which){var o=e(n.target),a=o.closest(".ab-sub-wrapper"),r=o.parent().hasClass("hover");n.stopPropagation(),n.preventDefault(),a.length||(a=e("#wpadminbar .quicklinks")),a.find(".menupop").removeClass("hover"),r||o.parent().toggleClass("hover"),o.siblings(".ab-sub-wrapper").find(".ab-item").each(t)}}).each(t),e("#wpadminbar .ab-item").bind("keydown.adminbar",function(n){if(27==n.which){var o=e(n.target);n.stopPropagation(),n.preventDefault(),o.closest(".hover").removeClass("hover").children(".ab-item").focus(),o.siblings(".ab-sub-wrapper").find(".ab-item").each(t)}}),a.click(function(t){"wpadminbar"!=t.target.id&&"wp-admin-bar-top-secondary"!=t.target.id||(a.find("li.menupop.hover").removeClass("hover"),e("html, body").animate({scrollTop:0},"fast"),t.preventDefault())}),e(".screen-reader-shortcut").keydown(function(t){var n,o;13==t.which&&(n=e(this).attr("href"),o=navigator.userAgent.toLowerCase(),o.indexOf("applewebkit")!=-1&&n&&"#"==n.charAt(0)&&setTimeout(function(){e(n).focus()},100))}),e("#adminbar-search").on({focus:function(){e("#adminbarsearch").addClass("adminbar-focused")},blur:function(){e("#adminbarsearch").removeClass("adminbar-focused")}}),"sessionStorage"in window&&e("#wp-admin-bar-logout a").click(function(){try{for(var e in sessionStorage)e.indexOf("wp-autosave-")!=-1&&sessionStorage.removeItem(e)}catch(e){}}),navigator.userAgent&&document.body.className.indexOf("no-font-face")===-1&&/Android (1.0|1.1|1.5|1.6|2.0|2.1)|Nokia|Opera Mini|w(eb)?OSBrowser|webOS|UCWEB|Windows Phone OS 7|XBLWP7|ZuneWP7|MSIE 7/.test(navigator.userAgent)&&(document.body.className+=" no-font-face")})):!function(e,t){var n,o=function(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,function(){return n.call(e,window.event)})},a=new RegExp("\\bhover\\b","g"),r=[],s=new RegExp("\\bselected\\b","g"),i=function(e){for(var t=r.length;t--;)if(r[t]&&e==r[t][1])return r[t][0];return!1},c=function(t){for(var o,c,l,u,d,m,f=[],v=0;t&&t!=n&&t!=e;)"LI"==t.nodeName.toUpperCase()&&(f[f.length]=t,c=i(t),c&&clearTimeout(c),t.className=t.className?t.className.replace(a,"")+" hover":"hover",u=t),t=t.parentNode;if(u&&u.parentNode&&(d=u.parentNode,d&&"UL"==d.nodeName.toUpperCase()))for(o=d.childNodes.length;o--;)m=d.childNodes[o],m!=u&&(m.className=m.className?m.className.replace(s,""):"");for(o=r.length;o--;){for(l=!1,v=f.length;v--;)f[v]==r[o][1]&&(l=!0);l||(r[o][1].className=r[o][1].className?r[o][1].className.replace(a,""):"")}},l=function(t){for(;t&&t!=n&&t!=e;)"LI"==t.nodeName.toUpperCase()&&!function(e){var t=setTimeout(function(){e.className=e.className?e.className.replace(a,""):""},500);r[r.length]=[t,e]}(t),t=t.parentNode},u=function(t){for(var o,a,r,i=t.target||t.srcElement;;){if(!i||i==e||i==n)return;if(i.id&&"wp-admin-bar-get-shortlink"==i.id)break;i=i.parentNode}for(t.preventDefault&&t.preventDefault(),t.returnValue=!1,-1==i.className.indexOf("selected")&&(i.className+=" selected"),o=0,a=i.childNodes.length;o<a;o++)if(r=i.childNodes[o],r.className&&-1!=r.className.indexOf("shortlink-input")){r.focus(),r.select(),r.onblur=function(){i.className=i.className?i.className.replace(s,""):""};break}return!1},d=function(e){var t,n,o,a,r,s;if(!("wpadminbar"!=e.id&&"wp-admin-bar-top-secondary"!=e.id||(t=window.pageYOffset||document.documentElement.scrollTop||document.body.scrollTop||0,t<1)))for(s=t>800?130:100,n=Math.min(12,Math.round(t/s)),o=t>800?Math.round(t/30):Math.round(t/20),a=[],r=0;t;)t-=o,t<0&&(t=0),a.push(t),setTimeout(function(){window.scrollTo(0,a.shift())},r*n),r++};o(t,"load",function(){n=e.getElementById("wpadminbar"),e.body&&n&&(e.body.appendChild(n),n.className&&(n.className=n.className.replace(/nojs/,"")),o(n,"mouseover",function(e){c(e.target||e.srcElement)}),o(n,"mouseout",function(e){l(e.target||e.srcElement)}),o(n,"click",u),o(n,"click",function(e){d(e.target||e.srcElement)}),o(document.getElementById("wp-admin-bar-logout"),"click",function(){if("sessionStorage"in window)try{for(var e in sessionStorage)e.indexOf("wp-autosave-")!=-1&&sessionStorage.removeItem(e)}catch(e){}})),t.location.hash&&t.scrollBy(0,-32),navigator.userAgent&&document.body.className.indexOf("no-font-face")===-1&&/Android (1.0|1.1|1.5|1.6|2.0|2.1)|Nokia|Opera Mini|w(eb)?OSBrowser|webOS|UCWEB|Windows Phone OS 7|XBLWP7|ZuneWP7|MSIE 7/.test(navigator.userAgent)&&(document.body.className+=" no-font-face")})}(document,window);