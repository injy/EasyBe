"use strict";(self.webpackChunkeasybe=self.webpackChunkeasybe||[]).push([[290],{477:function(e,a){a.Z='<div id="particles"> <div class="particles-layer particles-layer--1"></div> <div class="particles-layer particles-layer--2"></div> <div class="particles-layer particles-layer--3"></div> </div>'},451:function(e,a,t){t.a(e,(async function(e,c){try{t.r(a),t.d(a,{default:function(){return l}});var i=t(477);function l(e){$("#footer").after(i.Z);let a=document.getElementById("particles"),t=[{el:a.querySelector(".particles-layer--1"),opacity:.07,speed:.06},{el:a.querySelector(".particles-layer--2"),opacity:.07,speed:.04},{el:a.querySelector(".particles-layer--3"),opacity:.07,speed:.05}];t.forEach((e=>{gsap.to(e.el,.6,{delay:Math.random(),opacity:e.opacity})})),document.addEventListener("mousemove",(function(e){let a={x:window.innerWidth/2,y:window.innerHeight/2},c={x:e.clientX||e.pageX,y:e.clientY||e.pageY},i={x:a.x-c.x,y:a.y-c.y};t.forEach((e=>{gsap.to(e.el,1,{x:i.x*e.speed,y:i.y*e.speed})}))}))}await $.__tools.dynamicLoadingJs($.__config.default.gsap).catch((e=>console.error("gsap.js",e))),c()}catch(r){c(r)}}),1)}}]);