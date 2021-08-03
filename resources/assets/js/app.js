/*
 * MDA v1.0.0  
 * Copyright 2016 MDA 
 */
var themeColorCode,
    themeColorName,
    Vel;    

// window resize start and end function.
windowResize();

/* Usage:
    $(window).on('resizestart', function(event){
      do something right away when the window is being resized....
    });

    Or:

    $(window).on('resizeend', function(event){
      wait till window is done resizing.... then do something. 
    });  
*/

function windowResize() {
    var timer = 250,
        timeOut = null,
        e = null,
        r = false,
        h;

    h = function () {
        r = false;
        $(window).trigger('resizeend', e);
    };

    $(window).on('resize', function (event) {
        e = event || e;
        clearTimeout(timeOut);

        if (!r) {
            $(window).trigger('resizestart', e);
            r = true;
        }

        timeOut = setTimeout(h, timer);
    });
}

// Velocity has conflicts when loaded with jQuery, this will check for it
if ($) {
    Vel = $.Velocity;
}
else {
    Vel = Velocity;
}

Waves.init();

// Detect touch screen
function is_touch_device() {
    try {
        document.createEvent("TouchEvent");
        return true;
    } catch (e) {
        return false;
    }
}

/* Usage
    if (is_touch_device()) {
        when its a touch device do something...
    }

    Or:
    if (!is_touch_device()) {
        when its NOT a touch device do something...
    }
*/



/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 *
 * Open source under the BSD License.
 *
 * Copyright Â© 2008 George McGinley Smith
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list
 * of conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 *
 * Neither the name of the author nor the names of contributors may be used to endorse
 * or promote products derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED
 * OF THE POSSIBILITY OF SUCH DAMAGE.
 *
*/

// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});

/*
 *
 * TERMS OF USE - EASING EQUATIONS
 *
 * Open source under the BSD License.
 *
 * Copyright Â© 2001 Robert Penner
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list
 * of conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 *
 * Neither the name of the author nor the names of contributors may be used to endorse
 * or promote products derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED
 * OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 */
!function(a,b,c,d){"use strict";function k(a,b,c){return setTimeout(q(a,c),b)}function l(a,b,c){return Array.isArray(a)?(m(a,c[b],c),!0):!1}function m(a,b,c){var e;if(a)if(a.forEach)a.forEach(b,c);else if(a.length!==d)for(e=0;e<a.length;)b.call(c,a[e],e,a),e++;else for(e in a)a.hasOwnProperty(e)&&b.call(c,a[e],e,a)}function n(a,b,c){for(var e=Object.keys(b),f=0;f<e.length;)(!c||c&&a[e[f]]===d)&&(a[e[f]]=b[e[f]]),f++;return a}function o(a,b){return n(a,b,!0)}function p(a,b,c){var e,d=b.prototype;e=a.prototype=Object.create(d),e.constructor=a,e._super=d,c&&n(e,c)}function q(a,b){return function(){return a.apply(b,arguments)}}function r(a,b){return typeof a==g?a.apply(b?b[0]||d:d,b):a}function s(a,b){return a===d?b:a}function t(a,b,c){m(x(b),function(b){a.addEventListener(b,c,!1)})}function u(a,b,c){m(x(b),function(b){a.removeEventListener(b,c,!1)})}function v(a,b){for(;a;){if(a==b)return!0;a=a.parentNode}return!1}function w(a,b){return a.indexOf(b)>-1}function x(a){return a.trim().split(/\s+/g)}function y(a,b,c){if(a.indexOf&&!c)return a.indexOf(b);for(var d=0;d<a.length;){if(c&&a[d][c]==b||!c&&a[d]===b)return d;d++}return-1}function z(a){return Array.prototype.slice.call(a,0)}function A(a,b,c){for(var d=[],e=[],f=0;f<a.length;){var g=b?a[f][b]:a[f];y(e,g)<0&&d.push(a[f]),e[f]=g,f++}return c&&(d=b?d.sort(function(a,c){return a[b]>c[b]}):d.sort()),d}function B(a,b){for(var c,f,g=b[0].toUpperCase()+b.slice(1),h=0;h<e.length;){if(c=e[h],f=c?c+g:b,f in a)return f;h++}return d}function D(){return C++}function E(a){var b=a.ownerDocument;return b.defaultView||b.parentWindow}function ab(a,b){var c=this;this.manager=a,this.callback=b,this.element=a.element,this.target=a.options.inputTarget,this.domHandler=function(b){r(a.options.enable,[a])&&c.handler(b)},this.init()}function bb(a){var b,c=a.options.inputClass;return b=c?c:H?wb:I?Eb:G?Gb:rb,new b(a,cb)}function cb(a,b,c){var d=c.pointers.length,e=c.changedPointers.length,f=b&O&&0===d-e,g=b&(Q|R)&&0===d-e;c.isFirst=!!f,c.isFinal=!!g,f&&(a.session={}),c.eventType=b,db(a,c),a.emit("hammer.input",c),a.recognize(c),a.session.prevInput=c}function db(a,b){var c=a.session,d=b.pointers,e=d.length;c.firstInput||(c.firstInput=gb(b)),e>1&&!c.firstMultiple?c.firstMultiple=gb(b):1===e&&(c.firstMultiple=!1);var f=c.firstInput,g=c.firstMultiple,h=g?g.center:f.center,i=b.center=hb(d);b.timeStamp=j(),b.deltaTime=b.timeStamp-f.timeStamp,b.angle=lb(h,i),b.distance=kb(h,i),eb(c,b),b.offsetDirection=jb(b.deltaX,b.deltaY),b.scale=g?nb(g.pointers,d):1,b.rotation=g?mb(g.pointers,d):0,fb(c,b);var k=a.element;v(b.srcEvent.target,k)&&(k=b.srcEvent.target),b.target=k}function eb(a,b){var c=b.center,d=a.offsetDelta||{},e=a.prevDelta||{},f=a.prevInput||{};(b.eventType===O||f.eventType===Q)&&(e=a.prevDelta={x:f.deltaX||0,y:f.deltaY||0},d=a.offsetDelta={x:c.x,y:c.y}),b.deltaX=e.x+(c.x-d.x),b.deltaY=e.y+(c.y-d.y)}function fb(a,b){var f,g,h,j,c=a.lastInterval||b,e=b.timeStamp-c.timeStamp;if(b.eventType!=R&&(e>N||c.velocity===d)){var k=c.deltaX-b.deltaX,l=c.deltaY-b.deltaY,m=ib(e,k,l);g=m.x,h=m.y,f=i(m.x)>i(m.y)?m.x:m.y,j=jb(k,l),a.lastInterval=b}else f=c.velocity,g=c.velocityX,h=c.velocityY,j=c.direction;b.velocity=f,b.velocityX=g,b.velocityY=h,b.direction=j}function gb(a){for(var b=[],c=0;c<a.pointers.length;)b[c]={clientX:h(a.pointers[c].clientX),clientY:h(a.pointers[c].clientY)},c++;return{timeStamp:j(),pointers:b,center:hb(b),deltaX:a.deltaX,deltaY:a.deltaY}}function hb(a){var b=a.length;if(1===b)return{x:h(a[0].clientX),y:h(a[0].clientY)};for(var c=0,d=0,e=0;b>e;)c+=a[e].clientX,d+=a[e].clientY,e++;return{x:h(c/b),y:h(d/b)}}function ib(a,b,c){return{x:b/a||0,y:c/a||0}}function jb(a,b){return a===b?S:i(a)>=i(b)?a>0?T:U:b>0?V:W}function kb(a,b,c){c||(c=$);var d=b[c[0]]-a[c[0]],e=b[c[1]]-a[c[1]];return Math.sqrt(d*d+e*e)}function lb(a,b,c){c||(c=$);var d=b[c[0]]-a[c[0]],e=b[c[1]]-a[c[1]];return 180*Math.atan2(e,d)/Math.PI}function mb(a,b){return lb(b[1],b[0],_)-lb(a[1],a[0],_)}function nb(a,b){return kb(b[0],b[1],_)/kb(a[0],a[1],_)}function rb(){this.evEl=pb,this.evWin=qb,this.allow=!0,this.pressed=!1,ab.apply(this,arguments)}function wb(){this.evEl=ub,this.evWin=vb,ab.apply(this,arguments),this.store=this.manager.session.pointerEvents=[]}function Ab(){this.evTarget=yb,this.evWin=zb,this.started=!1,ab.apply(this,arguments)}function Bb(a,b){var c=z(a.touches),d=z(a.changedTouches);return b&(Q|R)&&(c=A(c.concat(d),"identifier",!0)),[c,d]}function Eb(){this.evTarget=Db,this.targetIds={},ab.apply(this,arguments)}function Fb(a,b){var c=z(a.touches),d=this.targetIds;if(b&(O|P)&&1===c.length)return d[c[0].identifier]=!0,[c,c];var e,f,g=z(a.changedTouches),h=[],i=this.target;if(f=c.filter(function(a){return v(a.target,i)}),b===O)for(e=0;e<f.length;)d[f[e].identifier]=!0,e++;for(e=0;e<g.length;)d[g[e].identifier]&&h.push(g[e]),b&(Q|R)&&delete d[g[e].identifier],e++;return h.length?[A(f.concat(h),"identifier",!0),h]:void 0}function Gb(){ab.apply(this,arguments);var a=q(this.handler,this);this.touch=new Eb(this.manager,a),this.mouse=new rb(this.manager,a)}function Pb(a,b){this.manager=a,this.set(b)}function Qb(a){if(w(a,Mb))return Mb;var b=w(a,Nb),c=w(a,Ob);return b&&c?Nb+" "+Ob:b||c?b?Nb:Ob:w(a,Lb)?Lb:Kb}function Yb(a){this.id=D(),this.manager=null,this.options=o(a||{},this.defaults),this.options.enable=s(this.options.enable,!0),this.state=Rb,this.simultaneous={},this.requireFail=[]}function Zb(a){return a&Wb?"cancel":a&Ub?"end":a&Tb?"move":a&Sb?"start":""}function $b(a){return a==W?"down":a==V?"up":a==T?"left":a==U?"right":""}function _b(a,b){var c=b.manager;return c?c.get(a):a}function ac(){Yb.apply(this,arguments)}function bc(){ac.apply(this,arguments),this.pX=null,this.pY=null}function cc(){ac.apply(this,arguments)}function dc(){Yb.apply(this,arguments),this._timer=null,this._input=null}function ec(){ac.apply(this,arguments)}function fc(){ac.apply(this,arguments)}function gc(){Yb.apply(this,arguments),this.pTime=!1,this.pCenter=!1,this._timer=null,this._input=null,this.count=0}function hc(a,b){return b=b||{},b.recognizers=s(b.recognizers,hc.defaults.preset),new kc(a,b)}function kc(a,b){b=b||{},this.options=o(b,hc.defaults),this.options.inputTarget=this.options.inputTarget||a,this.handlers={},this.session={},this.recognizers=[],this.element=a,this.input=bb(this),this.touchAction=new Pb(this,this.options.touchAction),lc(this,!0),m(b.recognizers,function(a){var b=this.add(new a[0](a[1]));a[2]&&b.recognizeWith(a[2]),a[3]&&b.requireFailure(a[3])},this)}function lc(a,b){var c=a.element;m(a.options.cssProps,function(a,d){c.style[B(c.style,d)]=b?a:""})}function mc(a,c){var d=b.createEvent("Event");d.initEvent(a,!0,!0),d.gesture=c,c.target.dispatchEvent(d)}var e=["","webkit","moz","MS","ms","o"],f=b.createElement("div"),g="function",h=Math.round,i=Math.abs,j=Date.now,C=1,F=/mobile|tablet|ip(ad|hone|od)|android/i,G="ontouchstart"in a,H=B(a,"PointerEvent")!==d,I=G&&F.test(navigator.userAgent),J="touch",K="pen",L="mouse",M="kinect",N=25,O=1,P=2,Q=4,R=8,S=1,T=2,U=4,V=8,W=16,X=T|U,Y=V|W,Z=X|Y,$=["x","y"],_=["clientX","clientY"];ab.prototype={handler:function(){},init:function(){this.evEl&&t(this.element,this.evEl,this.domHandler),this.evTarget&&t(this.target,this.evTarget,this.domHandler),this.evWin&&t(E(this.element),this.evWin,this.domHandler)},destroy:function(){this.evEl&&u(this.element,this.evEl,this.domHandler),this.evTarget&&u(this.target,this.evTarget,this.domHandler),this.evWin&&u(E(this.element),this.evWin,this.domHandler)}};var ob={mousedown:O,mousemove:P,mouseup:Q},pb="mousedown",qb="mousemove mouseup";p(rb,ab,{handler:function(a){var b=ob[a.type];b&O&&0===a.button&&(this.pressed=!0),b&P&&1!==a.which&&(b=Q),this.pressed&&this.allow&&(b&Q&&(this.pressed=!1),this.callback(this.manager,b,{pointers:[a],changedPointers:[a],pointerType:L,srcEvent:a}))}});var sb={pointerdown:O,pointermove:P,pointerup:Q,pointercancel:R,pointerout:R},tb={2:J,3:K,4:L,5:M},ub="pointerdown",vb="pointermove pointerup pointercancel";a.MSPointerEvent&&(ub="MSPointerDown",vb="MSPointerMove MSPointerUp MSPointerCancel"),p(wb,ab,{handler:function(a){var b=this.store,c=!1,d=a.type.toLowerCase().replace("ms",""),e=sb[d],f=tb[a.pointerType]||a.pointerType,g=f==J,h=y(b,a.pointerId,"pointerId");e&O&&(0===a.button||g)?0>h&&(b.push(a),h=b.length-1):e&(Q|R)&&(c=!0),0>h||(b[h]=a,this.callback(this.manager,e,{pointers:b,changedPointers:[a],pointerType:f,srcEvent:a}),c&&b.splice(h,1))}});var xb={touchstart:O,touchmove:P,touchend:Q,touchcancel:R},yb="touchstart",zb="touchstart touchmove touchend touchcancel";p(Ab,ab,{handler:function(a){var b=xb[a.type];if(b===O&&(this.started=!0),this.started){var c=Bb.call(this,a,b);b&(Q|R)&&0===c[0].length-c[1].length&&(this.started=!1),this.callback(this.manager,b,{pointers:c[0],changedPointers:c[1],pointerType:J,srcEvent:a})}}});var Cb={touchstart:O,touchmove:P,touchend:Q,touchcancel:R},Db="touchstart touchmove touchend touchcancel";p(Eb,ab,{handler:function(a){var b=Cb[a.type],c=Fb.call(this,a,b);c&&this.callback(this.manager,b,{pointers:c[0],changedPointers:c[1],pointerType:J,srcEvent:a})}}),p(Gb,ab,{handler:function(a,b,c){var d=c.pointerType==J,e=c.pointerType==L;if(d)this.mouse.allow=!1;else if(e&&!this.mouse.allow)return;b&(Q|R)&&(this.mouse.allow=!0),this.callback(a,b,c)},destroy:function(){this.touch.destroy(),this.mouse.destroy()}});var Hb=B(f.style,"touchAction"),Ib=Hb!==d,Jb="compute",Kb="auto",Lb="manipulation",Mb="none",Nb="pan-x",Ob="pan-y";Pb.prototype={set:function(a){a==Jb&&(a=this.compute()),Ib&&(this.manager.element.style[Hb]=a),this.actions=a.toLowerCase().trim()},update:function(){this.set(this.manager.options.touchAction)},compute:function(){var a=[];return m(this.manager.recognizers,function(b){r(b.options.enable,[b])&&(a=a.concat(b.getTouchAction()))}),Qb(a.join(" "))},preventDefaults:function(a){if(!Ib){var b=a.srcEvent,c=a.offsetDirection;if(this.manager.session.prevented)return b.preventDefault(),void 0;var d=this.actions,e=w(d,Mb),f=w(d,Ob),g=w(d,Nb);return e||f&&c&X||g&&c&Y?this.preventSrc(b):void 0}},preventSrc:function(a){this.manager.session.prevented=!0,a.preventDefault()}};var Rb=1,Sb=2,Tb=4,Ub=8,Vb=Ub,Wb=16,Xb=32;Yb.prototype={defaults:{},set:function(a){return n(this.options,a),this.manager&&this.manager.touchAction.update(),this},recognizeWith:function(a){if(l(a,"recognizeWith",this))return this;var b=this.simultaneous;return a=_b(a,this),b[a.id]||(b[a.id]=a,a.recognizeWith(this)),this},dropRecognizeWith:function(a){return l(a,"dropRecognizeWith",this)?this:(a=_b(a,this),delete this.simultaneous[a.id],this)},requireFailure:function(a){if(l(a,"requireFailure",this))return this;var b=this.requireFail;return a=_b(a,this),-1===y(b,a)&&(b.push(a),a.requireFailure(this)),this},dropRequireFailure:function(a){if(l(a,"dropRequireFailure",this))return this;a=_b(a,this);var b=y(this.requireFail,a);return b>-1&&this.requireFail.splice(b,1),this},hasRequireFailures:function(){return this.requireFail.length>0},canRecognizeWith:function(a){return!!this.simultaneous[a.id]},emit:function(a){function d(d){b.manager.emit(b.options.event+(d?Zb(c):""),a)}var b=this,c=this.state;Ub>c&&d(!0),d(),c>=Ub&&d(!0)},tryEmit:function(a){return this.canEmit()?this.emit(a):(this.state=Xb,void 0)},canEmit:function(){for(var a=0;a<this.requireFail.length;){if(!(this.requireFail[a].state&(Xb|Rb)))return!1;a++}return!0},recognize:function(a){var b=n({},a);return r(this.options.enable,[this,b])?(this.state&(Vb|Wb|Xb)&&(this.state=Rb),this.state=this.process(b),this.state&(Sb|Tb|Ub|Wb)&&this.tryEmit(b),void 0):(this.reset(),this.state=Xb,void 0)},process:function(){},getTouchAction:function(){},reset:function(){}},p(ac,Yb,{defaults:{pointers:1},attrTest:function(a){var b=this.options.pointers;return 0===b||a.pointers.length===b},process:function(a){var b=this.state,c=a.eventType,d=b&(Sb|Tb),e=this.attrTest(a);return d&&(c&R||!e)?b|Wb:d||e?c&Q?b|Ub:b&Sb?b|Tb:Sb:Xb}}),p(bc,ac,{defaults:{event:"pan",threshold:10,pointers:1,direction:Z},getTouchAction:function(){var a=this.options.direction,b=[];return a&X&&b.push(Ob),a&Y&&b.push(Nb),b},directionTest:function(a){var b=this.options,c=!0,d=a.distance,e=a.direction,f=a.deltaX,g=a.deltaY;return e&b.direction||(b.direction&X?(e=0===f?S:0>f?T:U,c=f!=this.pX,d=Math.abs(a.deltaX)):(e=0===g?S:0>g?V:W,c=g!=this.pY,d=Math.abs(a.deltaY))),a.direction=e,c&&d>b.threshold&&e&b.direction},attrTest:function(a){return ac.prototype.attrTest.call(this,a)&&(this.state&Sb||!(this.state&Sb)&&this.directionTest(a))},emit:function(a){this.pX=a.deltaX,this.pY=a.deltaY;var b=$b(a.direction);b&&this.manager.emit(this.options.event+b,a),this._super.emit.call(this,a)}}),p(cc,ac,{defaults:{event:"pinch",threshold:0,pointers:2},getTouchAction:function(){return[Mb]},attrTest:function(a){return this._super.attrTest.call(this,a)&&(Math.abs(a.scale-1)>this.options.threshold||this.state&Sb)},emit:function(a){if(this._super.emit.call(this,a),1!==a.scale){var b=a.scale<1?"in":"out";this.manager.emit(this.options.event+b,a)}}}),p(dc,Yb,{defaults:{event:"press",pointers:1,time:500,threshold:5},getTouchAction:function(){return[Kb]},process:function(a){var b=this.options,c=a.pointers.length===b.pointers,d=a.distance<b.threshold,e=a.deltaTime>b.time;if(this._input=a,!d||!c||a.eventType&(Q|R)&&!e)this.reset();else if(a.eventType&O)this.reset(),this._timer=k(function(){this.state=Vb,this.tryEmit()},b.time,this);else if(a.eventType&Q)return Vb;return Xb},reset:function(){clearTimeout(this._timer)},emit:function(a){this.state===Vb&&(a&&a.eventType&Q?this.manager.emit(this.options.event+"up",a):(this._input.timeStamp=j(),this.manager.emit(this.options.event,this._input)))}}),p(ec,ac,{defaults:{event:"rotate",threshold:0,pointers:2},getTouchAction:function(){return[Mb]},attrTest:function(a){return this._super.attrTest.call(this,a)&&(Math.abs(a.rotation)>this.options.threshold||this.state&Sb)}}),p(fc,ac,{defaults:{event:"swipe",threshold:10,velocity:.65,direction:X|Y,pointers:1},getTouchAction:function(){return bc.prototype.getTouchAction.call(this)},attrTest:function(a){var c,b=this.options.direction;return b&(X|Y)?c=a.velocity:b&X?c=a.velocityX:b&Y&&(c=a.velocityY),this._super.attrTest.call(this,a)&&b&a.direction&&a.distance>this.options.threshold&&i(c)>this.options.velocity&&a.eventType&Q},emit:function(a){var b=$b(a.direction);b&&this.manager.emit(this.options.event+b,a),this.manager.emit(this.options.event,a)}}),p(gc,Yb,{defaults:{event:"tap",pointers:1,taps:1,interval:300,time:250,threshold:2,posThreshold:10},getTouchAction:function(){return[Lb]},process:function(a){var b=this.options,c=a.pointers.length===b.pointers,d=a.distance<b.threshold,e=a.deltaTime<b.time;if(this.reset(),a.eventType&O&&0===this.count)return this.failTimeout();if(d&&e&&c){if(a.eventType!=Q)return this.failTimeout();var f=this.pTime?a.timeStamp-this.pTime<b.interval:!0,g=!this.pCenter||kb(this.pCenter,a.center)<b.posThreshold;this.pTime=a.timeStamp,this.pCenter=a.center,g&&f?this.count+=1:this.count=1,this._input=a;var h=this.count%b.taps;if(0===h)return this.hasRequireFailures()?(this._timer=k(function(){this.state=Vb,this.tryEmit()},b.interval,this),Sb):Vb}return Xb},failTimeout:function(){return this._timer=k(function(){this.state=Xb},this.options.interval,this),Xb},reset:function(){clearTimeout(this._timer)},emit:function(){this.state==Vb&&(this._input.tapCount=this.count,this.manager.emit(this.options.event,this._input))}}),hc.VERSION="2.0.4",hc.defaults={domEvents:!1,touchAction:Jb,enable:!0,inputTarget:null,inputClass:null,preset:[[ec,{enable:!1}],[cc,{enable:!1},["rotate"]],[fc,{direction:X}],[bc,{direction:X},["swipe"]],[gc],[gc,{event:"doubletap",taps:2},["tap"]],[dc]],cssProps:{userSelect:"default",touchSelect:"none",touchCallout:"none",contentZooming:"none",userDrag:"none",tapHighlightColor:"rgba(0,0,0,0)"}};var ic=1,jc=2;kc.prototype={set:function(a){return n(this.options,a),a.touchAction&&this.touchAction.update(),a.inputTarget&&(this.input.destroy(),this.input.target=a.inputTarget,this.input.init()),this},stop:function(a){this.session.stopped=a?jc:ic},recognize:function(a){var b=this.session;if(!b.stopped){this.touchAction.preventDefaults(a);var c,d=this.recognizers,e=b.curRecognizer;(!e||e&&e.state&Vb)&&(e=b.curRecognizer=null);for(var f=0;f<d.length;)c=d[f],b.stopped===jc||e&&c!=e&&!c.canRecognizeWith(e)?c.reset():c.recognize(a),!e&&c.state&(Sb|Tb|Ub)&&(e=b.curRecognizer=c),f++}},get:function(a){if(a instanceof Yb)return a;for(var b=this.recognizers,c=0;c<b.length;c++)if(b[c].options.event==a)return b[c];return null},add:function(a){if(l(a,"add",this))return this;var b=this.get(a.options.event);return b&&this.remove(b),this.recognizers.push(a),a.manager=this,this.touchAction.update(),a},remove:function(a){if(l(a,"remove",this))return this;var b=this.recognizers;return a=this.get(a),b.splice(y(b,a),1),this.touchAction.update(),this},on:function(a,b){var c=this.handlers;return m(x(a),function(a){c[a]=c[a]||[],c[a].push(b)}),this},off:function(a,b){var c=this.handlers;return m(x(a),function(a){b?c[a].splice(y(c[a],b),1):delete c[a]}),this},emit:function(a,b){this.options.domEvents&&mc(a,b);var c=this.handlers[a]&&this.handlers[a].slice();if(c&&c.length){b.type=a,b.preventDefault=function(){b.srcEvent.preventDefault()};for(var d=0;d<c.length;)c[d](b),d++}},destroy:function(){this.element&&lc(this,!1),this.handlers={},this.session={},this.input.destroy(),this.element=null}},n(hc,{INPUT_START:O,INPUT_MOVE:P,INPUT_END:Q,INPUT_CANCEL:R,STATE_POSSIBLE:Rb,STATE_BEGAN:Sb,STATE_CHANGED:Tb,STATE_ENDED:Ub,STATE_RECOGNIZED:Vb,STATE_CANCELLED:Wb,STATE_FAILED:Xb,DIRECTION_NONE:S,DIRECTION_LEFT:T,DIRECTION_RIGHT:U,DIRECTION_UP:V,DIRECTION_DOWN:W,DIRECTION_HORIZONTAL:X,DIRECTION_VERTICAL:Y,DIRECTION_ALL:Z,Manager:kc,Input:ab,TouchAction:Pb,TouchInput:Eb,MouseInput:rb,PointerEventInput:wb,TouchMouseInput:Gb,SingleTouchInput:Ab,Recognizer:Yb,AttrRecognizer:ac,Tap:gc,Pan:bc,Swipe:fc,Pinch:cc,Rotate:ec,Press:dc,on:t,off:u,each:m,merge:o,extend:n,inherit:p,bindFn:q,prefixed:B}),typeof define==g&&define.amd?define(function(){return hc}):"undefined"!=typeof module&&module.exports?module.exports=hc:a[c]=hc}(window,document,"Hammer");
(function(factory) {
    if (typeof define === 'function' && define.amd) {
        define(['jquery', 'hammerjs'], factory);
    } else if (typeof exports === 'object') {
        factory(require('jquery'), require('hammerjs'));
    } else {
        factory(jQuery, Hammer);
    }
}(function($, Hammer) {
    function hammerify(el, options) {
        var $el = $(el);
        if(!$el.data("hammer")) {
            $el.data("hammer", new Hammer($el[0], options));
        }
    }

    $.fn.hammer = function(options) {
        return this.each(function() {
            hammerify(this, options);
        });
    };

    // extend the emit method to also trigger jQuery events
    Hammer.Manager.prototype.emit = (function(originalEmit) {
        return function(type, data) {
            originalEmit.call(this, type, data);
            $(this.element).trigger({
                type: type,
                gesture: data
            });
        };
    })(Hammer.Manager.prototype.emit);
}));

(function($) {  
  "use strict";

  var ColorSelector = function(select, options) {
    this.options = options;
    this.$select = $(select);
    this._init();
  };

  ColorSelector.prototype = {

    constructor : ColorSelector,

    _init : function() {

      var callback = this.options.callback;

      var selectValue = this.$select.val();
      var selectColor = this.$select.find("option:selected").data("color");

      var $markupUl = $("<ul>").addClass("dropdown-menu top-left");
      var $markupDiv = $("<div>").addClass("dropdown dropdown-colorselector");
      var $card = this.$select.closest(".card").css("background-color", selectColor);
      var $markupSpan = $("<span>").addClass("btn-colorselector");
      var $markupA = $("<a>").attr("data-toggle", "dropdown").addClass("dropdown-toggle").attr("href", "#").append($markupSpan);

      this.$select.addClass('color-selector');

      $("option", this.$select).each(function() {

        var option = $(this);
        var value = option.attr("value");
        var color = option.data("color");
        var title = option.text();

        var $markupA = $("<a>").addClass("color-btn");
        if (option.prop("selected") === true || selectValue === color) {
          $markupA.addClass("selected");
        }
        $markupA.css("background-color", color);
        $markupA.attr("href", "#").attr("data-color", color).attr("data-value", value).attr("title", title);

        $markupUl.append($("<li>").append($markupA));
      });

      $markupDiv.append($markupA);
      $markupDiv.append($markupUl);

      this.$select.hide();
      
      this.$selector = $($markupDiv).insertAfter(this.$select);

      this.$select.on("change", function() {

        var value = $(this).val();
        var color = $(this).find("option[value='" + value + "']").data("color");
        var title = $(this).find("option[value='" + value + "']").text();

        $(this).next().find("ul").find("li").find(".selected").removeClass("selected");
        $(this).next().find("ul").find("li").find("a[data-color='" + color + "']").addClass("selected");

        $(this).next().find(".btn-colorselector").css("background-color", color);
        $(this).closest(".card").css("background-color", color);
        
        callback(value, color, title);
      });

      $markupUl.on('click.colorselector', $.proxy(this._clickColor, this));
    },

    _clickColor : function(e) {

      var a = $(e.target);

      if (!a.is(".color-btn")) {
        return false;
      }

      this.$select.val(a.data("value")).change();

      e.preventDefault();
      return true;
    },

    setColor : function(color) {
      var value = $(this.$selector).find("li").find("a[data-color='" + color + "']").data("value");
      this.setValue(value);
    },

    setValue : function(value) {
      this.$select.val(value).change();
    },

  };

  $.fn.colorselector = function(option) {
    var args = Array.apply(null, arguments);
    args.shift();

    return this.each(function() {

      var $this = $(this), data = $this.data("colorselector"), options = $.extend({}, $.fn.colorselector.defaults, $this.data(), typeof option == "object" && option);

      if (!data) {
        $this.data("colorselector", (data = new ColorSelector(this, options)));
      }
      if (typeof option == "string") {
        data[option].apply(data, args);
      }
    });
  };

  $.fn.colorselector.defaults = {
    callback : function(value, color, title) {
    },
    colorsPerRow : 8
  };

  $.fn.colorselector.Constructor = ColorSelector;

})(jQuery, window, document);

/*!
 * Copyright 2015-2016 Materialize
 * MIT License (https://raw.githubusercontent.com/Dogfalo/materialize/master/LICENSE)
 */
(function ($) {  

    // jQuery reverse
    $.fn.reverse = [].reverse;

    // Hover behaviour: make sure this doesn't work on .click-to-toggle FABs!
    $(document).on('mouseenter.fixedActionBtn', '.fixed-action-btn:not(.click-to-toggle, .disabled)', function(e) {
        var $this = $(this);
        openFABMenu($this);
    });
    $(document).on('mouseleave.fixedActionBtn', '.fixed-action-btn:not(.click-to-toggle, .disabled)', function(e) {
        var $this = $(this);
        closeFABMenu($this);
    });

    // Toggle-on-click behaviour.
    $(document).on('click.fixedActionBtn', '.fixed-action-btn.click-to-toggle > a', function(e) {
        var $this = $(this);
        var $menu = $this.parent();
        if ($menu.hasClass('active')) {
            closeFABMenu($menu);
        } else {
            openFABMenu($menu);
        }
    });  

    $.fn.extend({
        openFAB: function() {
            var $this = $(this);
            openFABMenu($this);
        },
        closeFAB: function() {
            closeFABMenu($this);
        }
    });


    var openFABMenu = function (btn) {
        $this = btn;
        if ($this.hasClass('active') === false) {

            // Get direction option
            var horizontal = $this.hasClass('horizontal');
            var offsetY, offsetX;

            if (horizontal === true) {
                offsetX = 40;
            } else {
                offsetY = 40;
            }

            $this.addClass('active');
            $this.find('ul .btn-circle').velocity(
                { scaleY: ".4", scaleX: ".4", translateY: offsetY + 'px', translateX: offsetX + 'px'},
                { duration: 0 }
            );

            var time = 0;
            $this.find('ul .btn-circle').reverse().each( function () {
                $(this).velocity(
                    { opacity: "1", scaleX: "1", scaleY: "1", translateY: "0", translateX: '0'},
                    { duration: 80, delay: time }
                  );
                time += 40;
            });
        }
    };

    var closeFABMenu = function (btn) {
        $this = btn;
        // Get direction option
        var horizontal = $this.hasClass('horizontal');
        var offsetY, offsetX;

        if (horizontal === true) {
            offsetX = 40;
        } else {
            offsetY = 40;
        }

        $this.removeClass('active');
        var time = 0;
        $this.find('ul .btn-circle').velocity("stop", true);
        $this.find('ul .btn-circle').velocity(
            { opacity: "0", scaleX: ".4", scaleY: ".4", translateY: offsetY + 'px', translateX: offsetX + 'px'},
            { duration: 80 }
        );
    };

}(jQuery));

/*!
 * Copyright 2015-2016 Materialize
 * MIT License (https://raw.githubusercontent.com/Dogfalo/materialize/master/LICENSE)
 */
(function($) {
    "use strict";

    var input_selector = 'input[type=text], input[type=password], input[type=email], input[type=url], input[type=tel], input[type=number], input[type=search], textarea';

    updateInputFields();  

    // Function to update labels of text fields
    function updateInputFields() {
        //var input_selector = 'input[type=text], input[type=password], input[type=email], input[type=url], input[type=tel], input[type=number], input[type=search], textarea';
        $(input_selector).each(function(index, element) {
            if ($(element).val().length > 0 || $(this).attr('placeholder') !== undefined || $(element)[0].validity.badInput === true) {
                $(this).siblings('label').addClass('active');
            }
            else {
                $(this).siblings('label, i').removeClass('active');
            }
        });
    };

    $('input[autofocus]').siblings('label, i').addClass('active');

    // Add active if form auto complete
    $(document).on('change', input_selector, function () {
        if($(this).val().length !== 0 || $(this).attr('placeholder') !== undefined) {
            $(this).siblings('label').addClass('active');
        }
        validate_field($(this));
    });

    // HTML DOM FORM RESET handling
    $(document).on('reset', function(e) {
        var formReset = $(e.target);
        if (formReset.is('form')) {
            formReset.find(input_selector).removeClass('valid').removeClass('invalid');
            formReset.find(input_selector).each(function () {
                if ($(this).attr('value') === '') {
                    $(this).siblings('label, i').removeClass('active');
                }
            });

            // Reset select
            formReset.find('select.initialized').each(function () {
                var reset_text = formReset.find('option[selected]').text();
                formReset.siblings('input.select-dropdown').val(reset_text);
            });
        }
    });

    // Add active when element has focus
    $(document).on('focus', input_selector, function () {
        $(this).siblings('label, i').addClass('active');
    });

    $(document).on('blur', input_selector, function () {
        var $inputElement = $(this);
        if ($inputElement.val().length === 0 && $inputElement[0].validity.badInput !== true && $inputElement.attr('placeholder') === undefined) {
            $inputElement.siblings('label, i').removeClass('active');
        }

        if ($inputElement.val().length === 0 && $inputElement[0].validity.badInput !== true && $inputElement.attr('placeholder') !== undefined) {
            $inputElement.siblings('i').removeClass('active');
        }
        validate_field($inputElement);
    });

    window.validate_field = function(object) {
        var hasLength = object.attr('length') !== undefined;
        var lenAttr = parseInt(object.attr('length'));
        var len = object.val().length;

        if (object.val().length === 0 && object[0].validity.badInput === false) {
            if (object.hasClass('validate')) {
                object.removeClass('valid');
                object.removeClass('invalid');
            }
        }
        else {
            if (object.hasClass('validate')) {
                // Check for character counter attributes
                if ((object.is(':valid') && hasLength && (len <= lenAttr)) || (object.is(':valid') && !hasLength)) {
                    object.removeClass('invalid');
                    object.addClass('valid');
                }
                else {
                    object.removeClass('valid');
                    object.addClass('invalid');
                }
            }
        }
    };

    // Textarea Auto Resize
    var hiddenDiv = $('.hiddendiv').first();
    if (!hiddenDiv.length) {
        hiddenDiv = $('<div class="hiddendiv common"></div>');
        $('body').append(hiddenDiv);
    }
    var text_area_selector = '.textarea-auto-resize';

    function textareaAutoResize($textarea) {
        // Set font properties of hiddenDiv
        var fontFamily = $textarea.css('font-family');
        var fontSize = $textarea.css('font-size');

        if (fontSize) { hiddenDiv.css('font-size', fontSize); }
        if (fontFamily) { hiddenDiv.css('font-family', fontFamily); }

        if ($textarea.attr('wrap') === "off") {
            hiddenDiv.css('overflow-wrap', "normal")
                     .css('white-space', "pre");
        }

        hiddenDiv.text($textarea.val() + '\n');
        var content = hiddenDiv.html().replace(/\n/g, '<br>');
        hiddenDiv.html(content);

        if ($textarea.is(':visible')) {
            hiddenDiv.css('width', $textarea.width());
        }
        else {
            hiddenDiv.css('width', $(window).width()/2);
        }

        $textarea.css('height', hiddenDiv.height());
    }

    $(text_area_selector).each(function () {
        var $textarea = $(this);
        if ($textarea.val().length) {
            textareaAutoResize($textarea);
        }
    });

    $('body').on('keyup keydown autoresize', text_area_selector, function () {
        textareaAutoResize($(this));
    });

    // File Input Path
    $(document).on('change', '.file-field input[type="file"]', function () {
        var file_field = $(this).closest('.file-field');
        var path_input = file_field.find('input.file-path');
        var files      = $(this)[0].files;
        var file_names = [];
        for (var i = 0; i < files.length; i++) {
            file_names.push(files[i].name);
        }
        path_input.val(file_names.join(", "));
        path_input.trigger('change');
    });    

})(jQuery);

(function($) {
    "use strict";
    
    $.fn.characterCounter = function(){
        return this.each(function(){

            var itHasLengthAttribute = $(this).attr('data-length') !== undefined;

            if(itHasLengthAttribute){
                $(this).on('input', updateCounter);
                $(this).on('focus', updateCounter);
                $(this).on('blur', removeCounterElement);

                addCounterElement($(this));
            }

        });
    };

    function updateCounter(){
        var maxLength     = +$(this).attr('data-length'),
        actualLength      = +$(this).val().length,
        isValidLength     = actualLength <= maxLength;

        $(this).parent().find('span[class="character-counter"]')
                        .html( actualLength + '/' + maxLength);

        addInputStyle(isValidLength, $(this));
    }

    function addCounterElement($input){
        var $counterElement = $('<span/>')
                            .addClass('character-counter')
                            .css('float','right')
                            .css('font-size','12px')
                            .css('height', 1);

        $input.parent().append($counterElement);
    }

    function removeCounterElement(){
        $(this).parent().find('span[class="character-counter"]').html('');
    }

    function addInputStyle(isValidLength, $input){
        var inputHasInvalidClass = $input.hasClass('invalid');
        if (isValidLength && inputHasInvalidClass) {
            $input.removeClass('invalid');
        }
        else if(!isValidLength && !inputHasInvalidClass){
            $input.removeClass('valid');
            $input.addClass('invalid');
        }
    }

    $(document).ready(function(){
        $('input, textarea').characterCounter();
    });

}(jQuery));

/*!
 * Daemonite material (https://github.com/Daemonite/material)
 * Copyright (c) 2015 Daemon Internet Consultants
 * MIT License (https://github.com/Daemonite/material/blob/master/LICENSE)
 */
(function($){

	$('.list-group-animation').each(function(index) {
		var tileAnimationDelay = 0,
		    tileAnimationTransform = 100;

		$('> .list-group-item, > .list-group-divider, >.divider', $(this)).each(function(index) {
			$(this).css({
				'-webkit-transform': 'translate(0, ' + tileAnimationTransform + '%)',
				'-ms-transform': 'translate(0, ' + tileAnimationTransform + '%)',
				'transform': 'translate(0, ' + tileAnimationTransform + '%)',
				'-webkit-transition-delay': tileAnimationDelay + 's',
				'transition-delay': tileAnimationDelay + 's'
			});

			tileAnimationDelay = tileAnimationDelay + 0.2;
			tileAnimationTransform = tileAnimationTransform + 10;
		});
	});

	$(window).on('DOMContentLoaded scroll', function() {
		tileInView();
	});

	tileInView = function () {
		$('.list-group-animation:not(.isinview)').each(function() {
			var $this = $(this);
			if (tileInViewCheck($this) && (!$this.hasClass('avoid-fout') || ($this.hasClass('avoid-fout') && $this.hasClass('avoid-fout-done'))) && (!$this.hasClass('el-loading') || ($this.hasClass('el-loading') && $this.hasClass('el-loading-done'))) && !$this.parents('.avoid-fout:not(.avoid-fout-done)').length && !$this.parents('.el-loading:not(.el-loading-done)').length) {
				$this.addClass('isinview');
			}
		});
	};

	tileInViewCheck = function (tile) {
		tile = tile[0];

		var rect = tile.getBoundingClientRect();

		return (
			rect.top <= window.innerHeight &&
			rect.right >= 0 &&
			rect.bottom >= 0 &&
			rect.left <= window.innerWidth
		);
	};
	
})(jQuery);
/**
 * jQuery plugin for Sortable
 * @author	RubaXa   <trash@rubaxa.org>
 * @license MIT
 */
(function (factory) {
	"use strict";

	if (typeof define === "function" && define.amd) {
		define(["jquery"], factory);
	}
	else {
		/* jshint sub:true */
		factory(jQuery);
	}
})(function ($) {
	"use strict";

	/**
	 * jQuery plugin for Sortable
	 * @param   {Object|String} options
	 * @param   {..*}           [args]
	 * @returns {jQuery|*}
	 */
	$.fn.sortable = function (options) {
		var retVal;

		this.each(function () {
			var $el = $(this),
				sortable = $el.data('sortable');

			if (!sortable && (options instanceof Object || !options)) {
				sortable = new Sortable(this, options);
				$el.data('sortable', sortable);
			}

			if (sortable) {
				if (options === 'widget') {
					return sortable;
				}
				else if (options === 'destroy') {
					sortable.destroy();
					$el.removeData('sortable');
				}
				else if (options in sortable) {
					retVal = sortable[sortable].apply(sortable, [].slice.call(arguments, 1));
				}
			}
		});

		return (retVal === void 0) ? this : retVal;
	};
});
// override jquery validate plugin defaults
(function($){
	"use strict";
	
	if ($.fn.validate){	

		$.validator.setDefaults({
			ignore: ':not(select:hidden, input:visible, textarea:visible, [data-role="tagsinput"])',
		    highlight: function(element) {
		        $(element).closest('.form-group').addClass('has-error');
		    },
		    unhighlight: function(element) {
		        $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
		    },
		    errorElement: 'div',
		    errorClass: 'help-block',
		    errorPlacement: function(error, element) {
		        if(element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
		            error.insertAfter(element.parent());
		        } else if (element.attr("class") == "selectpicker") {
		          error.insertAfter(".bootstrap-select");
		        } else if (element.attr("data-role") == "tagsinput") {
		          error.insertAfter(".bootstrap-tagsinput");
		        }  else {
		            error.insertAfter(element);
		        }
		    }
		});
	}

}(jQuery));
$(window).load(function(){
    "use strict";
    
	var body = $('body'),
        mw = $(".main-wrapper"),
		mm = $(".main-menu"),
        hb = $(".header-bar");

    init();    
    
    function init() {
        if (!store.enabled) {
            alert('Local storage is not supported by your browser. Please disable "Private Mode", or upgrade to a modern browser.');
            return;
        }
        var Theme = store.get('Theme'),
            skinType = store.get('skinType'),
            pageLayout = store.get('pageLayout'),
            menuStyle = store.get('menuStyle'),
            navbarStyle = store.get('navbarStyle'),
            menuPosition = store.get('menuPosition'),
            menuState = store.get('menuState'),
            direction = store.get('Direction');

        if (Theme) {        
            var currentColor = Theme;
            $('body').removeClass(function (index, css) {
                return (css.match (/\btheme-\S+/g) || []).join(' ');
            });
            $('body').addClass('theme-'+ currentColor);
        }

        if (skinType) {
            if (skinType === 'light') {
                body.removeClass("dark-skin").addClass("light-skin");
            } else if (skinType === 'dark') {
                body.removeClass("light-skin").addClass("dark-skin");
            } 
        }

        if (pageLayout) {
            if (pageLayout === 'elevated') {
                body.addClass("ev-page");
            } else {
                body.removeClass("ev-page");
            } 
        }

        if (menuStyle) {            
            if(menuStyle === 'light') {
                mm.removeClass("menu-dark").addClass("menu-light");              
            } else if (menuStyle === 'dark') {
                mm.removeClass("menu-light").addClass("menu-dark");       
            } else {
                mm.removeClass("menu-light menu-dark");
            }
        }

        if (navbarStyle) {            
            if(navbarStyle == 'theme') {
                hb.removeClass("theme-inverse").addClass("theme");              
            } else {
                hb.removeClass("theme").addClass("theme-inverse");       
            }
        }

        if (menuPosition) {
            if(menuPosition == 'vertical') {
                mw.addClass("side-menu");
                mm.removeClass("menu-js");
                mm.addClass("menu-vertical-js");               
            } else {
                mw.removeClass("side-menu");
                mm.removeClass("menu-vertical-js");
                mm.addClass("menu-js");
                mw.removeClass("menu-small"); 
                mm.removeClass("menu-small");
                setTimeout(function(){
                    $('.menu-js .submenu').css('display','none');        
                }, 50);       
            }
        }

        if (menuState) {                  
            if(menuState == 'small') {
                mw.addClass("menu-small");
                mm.addClass("menu-small");                
                $(".toggler-small-icon").addClass("closed");
                $('.main-menu .scroller').css("width", "50px");                
            }
        }

        if (direction) {
            var $link = $(".rtl_switch_css"),
            $linkpage = $(".rtl_switch_page_css");

            if (direction === "RTL") {
                $("html").attr("dir", "rtl");
                $.each($link, function(i) {
                    var $text = ($(this).attr('href'));
                    $text = $text.replace(/min/, "rtl.min");
                    $(this).attr('href', $text);
                });
                $.each($linkpage, function(i) {
                    var $text = ($(this).attr('href'));
                    $text = $text.trim().replace(".css", ".rtl.css");
                    $(this).attr('href', $text);
                });
            } else{
                $("html").removeAttr("dir");
                $.each($link, function(i) {
                    var $text = ($(this).attr('href'));
                    $text = $text.replace(/rtl.min/, "min");
                    $(this).attr('href', $text);
                });
                $.each($linkpage, function(i) {
                    var $text = ($(this).attr('href'));
                    $text = $text.trim().replace("rtl.css", "css");
                    $(this).attr('href', $text);
                });
            }
        }

    }    
    
});
(function ($) {
	"use strict";

	// Add class header-bar-hidden to the main-wrapper
	$('.header-bar .toggler-hide-icon').on('click', function(e){
		e.preventDefault();
		$('.main-wrapper').toggleClass('header-bar-hidden');
	});

	// Show the user menu dropdown
	$('#menuUserToggler').on('click', function(e){
		e.stopPropagation();
		var el = $('.user-menu-dropdown');
		el.toggleClass('open');
		$(document).click(function() {
			el.removeClass('open');
		});
	});

	$('.aside-panel-trigger').on('click', function(e) {
		e.preventDefault();
		var aside = $('.aside-panel'),
			href = $(this).attr('href');
		aside.load(href);	
		aside.addClass('open');
	});	

})(jQuery);
$(document).ready(function() {
	"use strict";
	
	var mainMenu = $('.main-menu'),
		mainWrapper = $('.main-wrapper'),
		togglerHide = $('.menu-toggler-hide.pos-left .toggler-hide-icon'),
		sideMenuWidth = null,
		sideMenuDropdownTrigger = $('.sidemenu-header-dropdown'),
    	sideMenuDropdown = $('.sidemenu-dropdown'),
    	contentWrapper = $('.content-wrapper'),
    	mms = $('.scroller', mainMenu);

	sideMenuWidth = mainMenu.width();	
	menuHorizontalResponsive();	
	submenuOffscreen();
	menuItemActive();	
	
	setTimeout(smallScreenMenuPush, 300);

	Waves.attach('.submenu-target', ['waves-theme']);
	Waves.attach('.menubar-target', ['waves-theme']);

    $(window).on("resize", function () {		
		submenuOffscreen();
	    menuHorizontalResponsive();
	    if ($('.main-wrapper').hasClass('side-menu')) {		    			    
	    	smallScreenMenuPush();
	    }
    });	

	// menu-small-toggler
    $('.toggler-small-icon').on('click', function(e) {
		e.preventDefault();
		var self = $(this);			

		self.closest('.menu-vertical-js').toggleClass('menu-small');
		
		self.toggleClass('closed');
		if (mainWrapper.hasClass('menu-small')) {
	    	store.set('menuState', 'open');
	    	mms.css("width", sideMenuWidth + "px");
	    } else {
	    	store.set('menuState', 'small');
	    	mms.css("width", "50px");
	    }
	    mainWrapper.toggleClass('menu-small');
	});			

    $('.header-bar .toggler-hide-icon').on('click', function(e) {
    	e.preventDefault();
    	var toggler = $(this);

		toggler.closest('.toggler-hide').toggleClass('menu-hidden');
		toggler.toggleClass('closed');
	});	

	togglerHide.on('click', function(e){
		e.preventDefault();
		mainWrapper.addClass('resizing');
		$(this).toggleClass('closed');
		mainWrapper.toggleClass('menu-hidden');
		mainMenu.toggleClass('menu-hidden');
		setTimeout(function(){
			mainWrapper.removeClass('resizing');
		}, 200);
	});		

	//add the navgoco plugin to the main menu.
	$('#mainMenu').navgoco({
		caretHtml: '<e></e>',
		accordion: true,
		openClass:'open',
		save: true,
		cookie: {
		  name: 'main menu',
		  expires: false,
		  path: '/'
		},
		slide: {
		  duration: 400,
		  easing: 'swing'
		}
	});

	// Add scroller plugin to the main menu scroller element.
	$(".scroller", mainMenu).mCustomScrollbar({
		autoHideScrollbar: 2,
		//theme:"dark",
		scrollInertia: 200
	});

	function menuHorizontalResponsive() {
		setTimeout(function(){
			if(mainMenu.hasClass('menu-js') && $(window).width() < 976) {
				mainMenu.removeClass('menu-js').addClass('menu-vertical-js menu-hidden');
				mainWrapper.addClass('side-menu menu-hidden');

				togglerHide.addClass('closed');
				store.set('menuState', 'open');
				
			} else if (store.get('menuPosition') == 'horizontal' && $(window).width() > 975) {
				mainMenu.removeClass('menu-vertical-js menu-hidden').addClass('menu-js');
				mainWrapper.removeClass('side-menu menu-hidden menu-small');
				mainMenu.removeClass('menu-small');
				togglerHide.removeClass('closed');
				$('.toggler-small-icon').removeClass('closed');
				mms.css("width", sideMenuWidth +"px");
				$('.menu-js').css("left", "0px");
			}
		}, 100);
	}

	function submenuOffscreen() {
		setTimeout(function(){
		    $('.menu-js .submenu').parent().hover(function() {
		    	var menu = $(this).children("ul"),
					menupos = $(menu).offset();

		    	if ("[data-dir='rtl']") {
					$('.menubar-item ul.lvl-1').css({right: 0});
			    	if($(window).width() > 768) {					    

					    if (menupos.left + menu.width() < menu.width()) {		        	
					        menu.css({
					        	right: -menu.width()
					        });
					        $(this).find('ul.lvl-1').css({left: 0, right: 'auto'});  
					    } 
					} 
				} else {
					$('.menubar-item ul.lvl-1').css({left: 0});
			    	if($(window).width() > 768) {

					    if (menupos.left + menu.width() > $(window).width()) {
					        menu.css({
					        	left: -menu.width()			        	
					        });
					        $(this).find('ul.lvl-1').css({right: 0, left: 'auto'});  
					    } 
					} 
				}	    	
			    	   
			});
		}, 100);
	}

	function menuItemActive() {
		// Add class active to the a tag in main menu based on location href
		$("a", mainMenu).filter(function(){
		     return this.href == location.href.replace(/#.*/, "");
		}).addClass("active");

		//  Add class active to menubar item
		if ($('a', mainMenu).hasClass('active') ) {
			$('.menubar-item', mainMenu).removeClass('active');
			$('a.active').parents('.menubar-item').addClass('active');			
		}
	}

	function smallScreenMenuPush() {
		if ($('.main-wrapper').hasClass('side-menu') && $(window).width() < 976) {
			if ($('.side-menu').hasClass('menu-small')) {
				return false;
			} else {		
				mainWrapper.addClass('menu-hidden');
				mainMenu.addClass('menu-hidden');
				togglerHide.addClass('closed');
			}
		} else if ($('.main-wrapper').hasClass('resizing')) {
			return false;
		} else {			
			mainWrapper.removeClass('menu-hidden');
			mainMenu.removeClass('menu-hidden');
			togglerHide.removeClass('closed');
		}	
	}

	$(document).on('click', function() {
		$('.menu-js .submenu').css('display','none');
	});

	$(window).on('resizeend', function(){
		$('.menu-js .submenu').css('display','none');
    });			

});
(function($){
	"use strict";

	$.fn.extend({
		openModal: function(options) {
			var defaults = {
				in_duration: 350,
				out_duration: 250,
				starting_top: '40%'
			},
			$modal = $(this),
			$modalDialog = $modal.find('.modal-dialog');

			$modal.css({
				display : "block",
				opacity: 0
			});
			$modal.find('[data-dismiss="modal"]').on('click.close', function(e) {
				$modal.closeModal(options);
			});
			if ($modalDialog.hasClass('bottom-sheet')) {
				$modal.css('opacity', 1);
				$modalDialog.velocity({bottom: "0", opacity: 1}, {
					duration: options.in_duration,
					queue: false,
					ease: "easeOutCubic"
				});				
			}
			else {
				$.Velocity.hook($modalDialog, "scaleX", 0.7);
				$modal.css('opacity', 1);
				$modalDialog.css({ top: options.starting_top });
				$modalDialog.velocity({top: 0, opacity: 1, scaleX: '1'}, {
					duration: options.in_duration,
					queue: false,
					ease: "easeOutCubic"
				});				
			}
		}
	});

	$.fn.extend({
		closeModal: function(options) {
			var defaults = {
				out_duration: 250
			},
			$modal = $(this),
			$modalDialog = $modal.find('.modal-dialog');

			options = $.extend(defaults, options);
			$modal.find('[data-dismiss="modal"]').off('click.close');
			$modal.addClass('modal-block');
			$('.modal-backdrop').addClass('modal-block');
			if ($modalDialog.hasClass('bottom-sheet')) {
				$modalDialog.velocity({bottom: "-100%", opacity: 0}, {
					duration: options.out_duration,
					queue: false,
					ease: "easeOutCubic",
					complete: function() {
						$modal.removeClass('modal-block');
					}
				});				
			}
			else {
				$modalDialog.velocity({ top: options.starting_top, opacity: 0, scaleX: 0.7}, {
					duration: options.out_duration,
					complete:
					function() {
						$modal.removeClass('modal-block');
						$('.modal-backdrop').removeClass('modal-block');					  
					}
				});				
			}			
		}
	});

	$.fn.extend({
		customModal: function(option) {
			return this.each(function() {
				var defaults = {
					starting_top: '40%'
				},
				options = $.extend(defaults, option);

				$(this).click(function(e) {
					var modal_id = $(this).attr("href") ||  $(this).data('target');
					$(modal_id).openModal(options);
					e.preventDefault();
				}); 
			});
		}
	});

	$('.modal-trigger').customModal();

})(jQuery);
(function ($) {
    "use strict";
  
    var tabs = {
        init : function() {
            return this.each(function() {
                var $this = $(this);
                
                if($('li.tab-active-border', $this).length == 0) {
                    $this.append('<li class="tab-active-border"></li>');
                }       

                function changePos() {    
                    var activeTab = $this.find(' > li.active').position();

                    if ($this.hasClass('tabs-left') || $this.hasClass('tabs-right')) {
                        $('.tab-active-border', $this).stop().css({
                            top: activeTab.top,
                            height: $(' > li.active', $this).height()
                        });
                    } else {
                        $('.tab-active-border', $this).stop().css({
                            left: activeTab.left,
                            width: $(' > li.active', $this).width()
                        });
                    }                         
                }

                setTimeout(changePos, 50);

                $(window).on('resize', function () {
                    changePos();
                });

                $this.on('click', 'a', function(e){
                    e.preventDefault();
                    setTimeout(changePos, 10);
                });
            });
        }    
    };

    $.fn.underlineTab = function() {
        tabs.init.apply(this);
    };
  
}(jQuery));

$(document).ready(function(){
    setTimeout(function(){
        $('.nav-tabs, .nav-justified').underlineTab();

    }, 500);
}); 

(function($) {
    "use strict";

    $.fn.timeline = function() {        
        var item = $('.tl-item', this);

        position();

        function position() {            

            item.each(function(index){
                var el = $(this);
                el.delay(300*index).queue(function() {
                    if (!$('body').attr("data-dir")) {
                        if (el.position().left > 50) { 
                            el.addClass('tl-item-inverted').dequeue();
                        } else {
                            el.removeClass('tl-item-inverted').dequeue();
                        }
                    } 
                });

            });

        }
        
        $(window).on('resizeend', function(event){      
            position();
        });
    }   
    
}(jQuery));

$(document).ready(function(){
    $('.timeline').not('.single').timeline();
});



(function($) {
    "use strict";

	var toolbar = $('.toolbar');

	// fullscreen function
	toolbar.on('click', '.toolbar-fullscreen', function() {
    	var target = $(this).closest('.toolbar-parent'),
    		trigger = $(this);   	
    	trigger.toggleClass('open');
    	target.toggleClass('fullscreen');
    	$('body').toggleClass('fullscreen-open');
        setTimeout(function(){
            $(window).resize();
        }, 10);
    });

    function collapsibleTarget(object) {
       if (object.hasClass('collapsed')){
            object.slideUp(350);          
        }
        else{
            object.slideDown(350);
        }
    }

    // collapse function
    toolbar.on('click', '.toolbar-collapse', function() {
        var el = $(this).closest('.toolbar-parent'),
        	trigger = $(this),
        	target = el.find('.collapsible-target');
        
        el.toggleClass('collapsed');	
    	trigger.toggleClass('closed');
    	target.toggleClass('collapsed');
        collapsibleTarget(target);
         
    });

    // Close any bodies that have the collapsed class
    if ($('.collapsible-target').hasClass('collapsed')) {
        var el = $('.collapsible-target');
        el.each(function() {
            collapsibleTarget($(this));
        });
        
    }

    // search function
    toolbar.on('click', '.toolbar-search', function() {
        var el = $(this).closest('.search-wrapper');
        
    	el.addClass('open');
    });

	// close the search input and clear input
    toolbar.on('click', '.search-form .toolbar-back', function() {
        var el = $(this).closest('.search-wrapper'),
        	target = el.find('input');

    	el.removeClass('open');
    	target.val('');
    });

    // remove function
    toolbar.on('click', '.toolbar-remove', function() {
        var el = $(this).closest('.toolbar-parent');

        swal({   
        	title: "Are you sure you want to remove this widget?",   
        	text: "You will not be able to recover it!",   
        	type: "warning",   
        	showCancelButton: true,     
        	confirmButtonText: "Yes, remove it!",   
        	closeOnConfirm: false }, function(){ 
        		el.remove();  
        		swal("Deleted!", "Widget is removed.", "success"); 
        	});
    	
    });

    $('.toolbar-trigger').on('click', function(){
        $(this).closest('.expanding-toolbar').toggleClass('open');
    })

    if (!is_touch_device()) {
        $(window).on('resizeend', function(){
            $('.search-wrapper').removeClass('open');
        });
    }

})(jQuery);

// Toolbar refresh
(function($) {
    "use strict";

    $.fn.toolbarRefresh = function(options) {

        // Options
        var settings = $.extend({
            //Refresh button selector
            trigger: ".toolbar-refresh",
            //File source to be loaded (e.g: path/file.php)
            source: "",
            // loader color
            loader: "white",
            //Callbacks
            onLoadStart: function(panel) {
            	// do something right after the button has been clicked...
            }, 
            onLoadDone: function(panel) {
            	// do something when the source has been loaded...
            } 

        }, options);

        var overlay = $('<div class="toolbar-refresh-overlay"></div>');

        var loader = $('<div class="progress bottom">' +
                            '<div class="indeterminate ' + settings.loader + '"></div>' +
                        '</div>');
        
        return this.each(function() {

            //the panel
            var panel = $(this),
            	button = panel.find(settings.trigger).first();

            //On trigger click
            button.click(function(e) {
                e.preventDefault();
                start(panel);

                //Perform ajax call
                panel.find(".toolbar-body").load(settings.source, function() {
                    done(panel);
                });
            });
        });

        function start(panel) {
            settings.onLoadStart.call(panel);
            panel.find('.toolbar-body').append(overlay);
            panel.find('.toolbar').append(loader);
        }

        function done(panel) {
            panel.find(overlay).remove();
            panel.find(loader).remove();
            settings.onLoadDone.call(panel);
        }
    };

})(jQuery);
(function($){
	'use strict'

	var themeColorValue;
	
	setThemeColor();

	function setThemeColor() {

		setTimeout(function() {
			
			getThemeColor();

			switch (themeColorValue) {
				case "theme-mda":
		        	themeColorName = 'mda';
		        	themeColorCode = '#4a7885';			  
		            break;
	            case "theme-red":
		        	themeColorName = 'red';
		        	themeColorCode = '#880e4f';			  
		            break;
	            case 'theme-deep-purple':
		        	themeColorName = 'deep-purple';
		        	themeColorCode = '#673AB7';				  
		            break;
	            case 'theme-dark':
		        	themeColorName = 'dark';
		        	themeColorCode = '#777da6';				  
		            break;
	            case 'theme-cyan-dark':
		        	themeColorName = 'cyan-dark';
		        	themeColorCode = '#0097a7';				  
		            break;
	             case 'theme-lavendar':
		        	themeColorName = 'blue-grey';
		        	themeColorCode = '#7C4DFF';				  
		            break;   
		        case 'theme-blue-dark':
		        	themeColorName = 'blue';
		        	themeColorCode = '#1266F1';				  
		            break;
	            case 'theme-indigo':
		        	themeColorName = 'indigo';
		        	themeColorCode = '#3f51b5';			  
		            break;
	            case 'theme-blue-grey':
		        	themeColorName = 'blue-grey';
		        	themeColorCode = '#607D8B';				  
		            break;         
			}
		}, 100);
	}

	function getThemeColor() {
		
		var themes = [
			"theme-mda",
			"theme-blue-dark",
			"theme-indigo",
			"theme-red",
			"theme-deep-purple",
			"theme-dark",
			"theme-cyan-dark",
			"theme-blue-grey",
			"theme-lavendar"
		];
		var url = $('body').prop('class').split(/\s+/);

	    var result = $.grep(themes, function (element) {
	    	return $.inArray(element, url) >= 0;
		});

	    themeColorValue = result[0];
		return themeColorValue;
	} 

})(jQuery);
(function($) {
    "use strict";
    
    $.fn.responsiveTable = function () {

        return this.each(function () {
            var table = $(this),
                header = [];

            // Get the column header text for each column
            for (var i = 0; i < $('thead th', table).length; i++) {
                var colTitle = $('thead th:eq(' + i + ')', table).text().trim();
                header.push(colTitle);
            }
            setTimeout(function(){
            // For each row within the table
                $('tbody tr', table).each(function (i) {
                    var tableRow = $(this);

                    // Assign the col title as a data-attr to each table cell
                    $('td', tableRow).each(function(i){
                        $(this).attr('data-title', header[i]);
                    });
                });
            }, 500);
        });
    };

})(jQuery);
// Miscellaneous
$(document).ready(function() {
	"use strict";

	// instantiate fastclick if touch device
	if (is_touch_device()) {
        FastClick.attach(document.body);
    }	

	$('[data-toggle="collapse"]').on('click', function(){
		$(this).closest('.panel').toggleClass('active').siblings().removeClass('active');		
	});	  	

	// select all checkboxes in a table
	$('.selectAllTableRows').click(function (e) {
	    var table = $(this).closest('table'),
	    	el = table.find('td input:checkbox').prop('checked', this.checked),
	    	row = el.closest('tr');

	    // add or remove class active from each table row.	
	    el.prop("checked") ? row.addClass('active') : row.removeClass('active');
	});

	// add class active to a table row on checked
	$(".row-select td input:checkbox").on('change', function(e) {
		var row = $(this).closest('tr');

		$(this).prop("checked") ? row.addClass('active') : row.removeClass('active');		
	});

	setTimeout(function() {
		$('.bootstrap-tagsinput').on('click', function(e){
	    	e.stopPropagation();        	
	    	$(this).addClass('active');
	    	$(document).click(function() {
				$('.bootstrap-tagsinput').removeClass("active");
			});
	    });
	}, 10);

	$('[data-toggle="tooltip"]').tooltip({
	 	container: 'body'
	});

	// initialize popover
	$('[data-toggle="popover"]').popover();

	$(document).on('click.twitter-card', '.card-block', function () {
        $('.twitter-card').not($(this).closest('.twitter-card')).removeClass('open theme');
        $(this).closest('.twitter-card').toggleClass('open theme');
    });
  
    $(document).on('click.card', '.card', function (e) {
        if ($(this).find('> .card-reveal').length) {            
            if ($(e.target).is($('.card-reveal .card-title')) || $(e.target).is($('.card-reveal .card-title i'))) {
                $(this).closest('.card').removeClass('active');
                $(this).find('.card-reveal').velocity(
                    {translateY: 0}, {
                        duration: 225,
                        queue: false,
                        easing: 'easeInOutQuad',
                        complete: function() { $(this).css({ display: 'none'}); }
                    }
                );
            }
            else if ($(e.target).is($('.card .activator')) ||
                     $(e.target).is($('.card .activator i')) ) {
                $(e.target).closest('.card').css('overflow', 'hidden');
                $(this).closest('.card').addClass('active');
                $(this).find('.card-reveal').css({ display: 'block'}).velocity("stop", false).velocity({translateY: '-100%'}, {duration: 300, queue: false, easing: 'easeInOutQuad'});
            }
        }
    });	

	// Back to top of page
	$(window).scroll(function () {
		var el = $('.back-to-top');

        if ($(this).scrollTop() > 50) {
            el.addClass('show');
        } else {
            el.removeClass('show');
        }
    });

    // scroll body to 0px on click
    $('.back-to-top').click(function () {
        $('.back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 600);
        return false;
    });
	     
});