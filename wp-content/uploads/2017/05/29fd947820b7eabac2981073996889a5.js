/**handles:comment-reply**/
var addComment={moveForm:function(e,t,n,o){var r,i,d,m,l=this,a=l.I(e),c=l.I(n),s=l.I("cancel-comment-reply-link"),p=l.I("comment_parent"),f=l.I("comment_post_ID"),u=c.getElementsByTagName("form")[0];if(a&&c&&s&&p&&u){l.respondId=n,o=o||!1,l.I("wp-temp-form-div")||(r=document.createElement("div"),r.id="wp-temp-form-div",r.style.display="none",c.parentNode.insertBefore(r,c)),a.parentNode.insertBefore(c,a.nextSibling),f&&o&&(f.value=o),p.value=t,s.style.display="",s.onclick=function(){var e=addComment,t=e.I("wp-temp-form-div"),n=e.I(e.respondId);if(t&&n)return e.I("comment_parent").value="0",t.parentNode.insertBefore(n,t),t.parentNode.removeChild(t),this.style.display="none",this.onclick=null,!1};try{for(var y=0;y<u.elements.length;y++)if(i=u.elements[y],m=!1,"getComputedStyle"in window?d=window.getComputedStyle(i):document.documentElement.currentStyle&&(d=i.currentStyle),(i.offsetWidth<=0&&i.offsetHeight<=0||"hidden"===d.visibility)&&(m=!0),"hidden"!==i.type&&!i.disabled&&!m){i.focus();break}}catch(e){}return!1}},I:function(e){return document.getElementById(e)}};