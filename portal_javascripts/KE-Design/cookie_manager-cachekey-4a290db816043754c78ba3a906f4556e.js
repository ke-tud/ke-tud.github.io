
/* Merged Plone Javascript file
 * This file is dynamically assembled from separate parts.
 * Some of these parts have 3rd party licenses or copyright information attached
 * Such information is valid for that section,
 * not for the entire composite file
 * originating files are separated by - filename.js -
 */

/* - cookie_manager.js - */
// http://www.ke.tu-darmstadt.de/portal_javascripts/cookie_manager.js?original=1
function Cookiemanager(name,defaultExpiration,expirationUnits,defaultDomain,defaultPath){this.name=name;this.defaultExpiration=this.getExpiration(defaultExpiration,expirationUnits);this.defaultDomain='.ke.tu-darmstadt.de'
this.defaultPath='/';this.cookies=new Object();this.expiration=new Object();this.domain=new Object();this.path=new Object();window.onunload=new Function(this.name+'.setDocumentCookies();');this.getDocumentCookies()}
Cookiemanager.prototype.getExpiration=function(expiration,units){expiration=(expiration)?expiration:0;units=(units)?units:'days';var date=new Date();switch(units){case 'years':date.setFullYear(date.getFullYear()+expiration);break;case 'months':date.setMonth(date.getMonth()+expiration);break;case 'days':date.setTime(date.getTime()+(expiration*24*60*60*1000));break;case 'hours':date.setTime(date.getTime()+(expiration*60*60*1000));break;case 'minutes':date.setTime(date.getTime()+(expiration*60*1000));break;case 'seconds':date.setTime(date.getTime()+(expiration*1000));break;default:date.setTime(date.getTime()+expiration);break}
return date.toGMTString()}
Cookiemanager.prototype.getDocumentCookies=function(){var cookie,pair;var cookies=document.cookie.split(';');var len=cookies.length;for(var i=0;i<len;i++){cookie=cookies[i];while(cookie.charAt(0)==' ') cookie=cookie.substring(1,cookie.length);pair=cookie.split('=');this.cookies[pair[0]]=pair[1]}}
Cookiemanager.prototype.setDocumentCookies=function(){var expires='';var cookies='';var domain='';var path='';for(var name in this.cookies){if(name=="fontsize"){expires=(this.expiration[name])?this.expiration[name]:this.defaultExpiration;path=(this.path[name])?this.path[name]:this.defaultPath;domain=(this.domain[name])?this.domain[name]:this.defaultDomain;cookies=name+'='+this.cookies[name]+'; expires='+expires+'; path='+path+';domain='+domain+';';document.cookie=cookies}}
return true}
Cookiemanager.prototype.getCookie=function(cookieName){var cookie=this.cookies[cookieName]
return(cookie)?cookie:false}
Cookiemanager.prototype.setCookie=function(cookieName,cookieValue,expiration,expirationUnits,domain,path){this.cookies[cookieName]=cookieValue;if(expiration) this.expiration[cookieName]=this.getExpiration(expiration,expirationUnits);if(domain) this.domain[cookieName]=domain;if(path) this.path[cookieName]=path;return true}


/* - fontsize.js - */
// http://www.ke.tu-darmstadt.de/portal_javascripts/fontsize.js?original=1
var cookieManager=new Cookiemanager('cookieManager',1,'years','.ke.tu-darmstadt.de','/');var initialeGroesse=11;var groessen=new Array();groessen[0]=10;groessen[1]=11;groessen[2]=12;groessen[3]=13;groessen[4]=14;
function fontsize(modus){switch(modus){case 'inkrement':for(i=0;i<groessen.length;i++){if(groessen[i]==initialeGroesse){if(i<groessen.length-1){document.getElementsByTagName('body')[0].style.fontSize=groessen[i+1]+'px';cookieManager.setCookie('fontsize',groessen[i+1],1,'months','.ke.tu-darmstadt.de','/');initialeGroesse=groessen[i+1];break}}}
break;case 'dekrement':for(i=groessen.length-1;i>=0;i--){if(groessen[i]==initialeGroesse){if(i>0){document.getElementsByTagName('body')[0].style.fontSize=groessen[i-1]+'px';cookieManager.setCookie('fontsize',groessen[i-1],1,'months','.ke.tu-darmstadt.de','/');initialeGroesse=groessen[i-1];break}}}
break;default:document.getElementsByTagName('body')[0].style.fontSize=groessen[1]+'px';cookieManager.setCookie('fontsize',groessen[1],1,'months','.ke.tu-darmstadt.de','/');initialeGroesse=groessen[1]}}
function setzeInitialeFontgroesse(){var groesse=initialeGroesse;var cookie=cookieManager.getCookie('fontsize');if(cookie){groesse=parseInt(cookie)}
if(groesse!=initialeGroesse) document.getElementsByTagName('body')[0].style.fontSize=groesse+'px'}

