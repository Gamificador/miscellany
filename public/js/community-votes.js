!function(t){var e={};function n(r){if(e[r])return e[r].exports;var o=e[r]={i:r,l:!1,exports:{}};return t[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)n.d(r,o,function(e){return t[e]}.bind(null,o));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="/",n(n.s=11)}({11:function(t,e,n){t.exports=n("YV+x")},"YV+x":function(t,e){function n(t,e){return function(t){if(Array.isArray(t))return t}(t)||function(t,e){if(!(Symbol.iterator in Object(t)||"[object Arguments]"===Object.prototype.toString.call(t)))return;var n=[],r=!0,o=!1,u=void 0;try{for(var a,i=t[Symbol.iterator]();!(r=(a=i.next()).done)&&(n.push(a.value),!e||n.length!==e);r=!0);}catch(t){o=!0,u=t}finally{try{r||null==i.return||i.return()}finally{if(o)throw u}}return n}(t,e)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance")}()}var r,o,u;function a(t){o.each((function(){$(this).removeClass("vote-selected")}));var e={vote:t};u=t,$.post(r.val(),e).done((function(e,r,o){t&&$(".vote-body[data-option='"+u+"']").addClass("vote-selected"),e.data&&function(t){for(var e=0,r=Object.entries(t);e<r.length;e++){var o=n(r[e],2),u=o[0],a=o[1];$(".vote-progress[data-width='"+u+"']").width(a+"%"),$(".vote-result[data-result='"+u+"']").html(a+"%")}}(e.data)})).fail((function(t,e,n){}))}$(document).ready((function(){!function(){if(0===(r=$("#community-vote-url")).length)return;$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),(o=$(".vote-body")).click((function(){var t=$(this).data("option");$(this).hasClass("vote-selected")?a():a(t)}))}()}))}});