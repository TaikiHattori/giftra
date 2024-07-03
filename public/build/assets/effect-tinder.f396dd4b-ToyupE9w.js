function T({swiper:t,on:c}){let y,p,l,u,f,h,w;t.tinder={no(){t.touches.currentX=0,t.touches.startX=t.size/2;const e=t.slides[t.activeIndex];e.translateY=0,e.style.transformOrigin="center bottom",e.transformOrigin="bottom",t.slideNext(),t.animating=!1},yes(){t.touches.currentX=t.size,t.touches.startX=t.size/2;const e=t.slides[t.activeIndex];e.translateY=0,e.style.transformOrigin="center bottom",e.transformOrigin="bottom",t.slideNext(),t.animating=!1}};const a=(e,i)=>{e&&i(e)},g=(e,i)=>{t.slides.forEach((n,o)=>{o<t.activeIndex||(n.style.transformOrigin=e,n.transformOrigin=i)})},S=(e,i,n,o,m)=>{if(l||m)if(o)a(document.querySelector(".swiper-tinder-button-yes"),r=>r.classList.add("swiper-tinder-button-hidden")),a(document.querySelector(".swiper-tinder-button-no"),r=>r.classList.add("swiper-tinder-button-hidden"));else{const r=Math.max(Math.min(10*i-.5,1),0);a(e.querySelector(".swiper-tinder-label-yes"),s=>s.style.opacity=n>0?r:0),a(e.querySelector(".swiper-tinder-label-no"),s=>s.style.opacity=n<0?r:0),a(document.querySelector(".swiper-tinder-button-yes"),s=>s.classList.remove("swiper-tinder-button-hidden")),a(document.querySelector(".swiper-tinder-button-no"),s=>s.classList.remove("swiper-tinder-button-hidden")),i>=t.params.longSwipesRatio&&!o?n>0?(a(document.querySelector(".swiper-tinder-button-yes"),s=>s.classList.add("swiper-tinder-button-active")),a(document.querySelector(".swiper-tinder-button-no"),s=>s.classList.remove("swiper-tinder-button-active"))):(a(document.querySelector(".swiper-tinder-button-yes"),s=>s.classList.remove("swiper-tinder-button-active")),a(document.querySelector(".swiper-tinder-button-no"),s=>s.classList.add("swiper-tinder-button-active"))):(a(document.querySelector(".swiper-tinder-button-yes"),s=>s.classList.remove("swiper-tinder-button-active")),a(document.querySelector(".swiper-tinder-button-no"),s=>s.classList.remove("swiper-tinder-button-active")))}};c("beforeInit",()=>{if(t.params.effect!=="tinder")return;t.classNames.push(`${t.params.containerModifierClass}tinder`),t.classNames.push(`${t.params.containerModifierClass}3d`);const e={watchSlidesProgress:!0,virtualTranslate:!0,longSwipesRatio:.1,oneWayMovement:!0};Object.assign(t.params,e),Object.assign(t.originalParams,e)}),c("init",()=>{t.el&&t.el.addEventListener&&t.el.addEventListener("click",e=>{e.target.closest(".swiper-tinder-button-yes")&&t.tinder.yes(),e.target.closest(".swiper-tinder-button-no")&&t.tinder.no()})}),c("touchStart",(e,i)=>{if(t.params.effect!=="tinder")return;l=!0,f=!0,h=!0;const{clientY:n}=i,{top:o,height:m}=t.el.getBoundingClientRect();p=!1;const r=i.target.closest(".swiper-slide, swiper-slide");r&&r.classList.contains("swiper-slide-active")&&(y=r,u=t.activeIndex,n-o>m/2?g("center top","top"):g("center bottom","bottom"))}),c("touchMove",e=>{if(t.params.effect!=="tinder")return;const i=e.touches.currentY-e.touches.startY;e.touches.currentX-e.touches.startX,p=(t.size,!1),y&&(y.translateY=i)}),c("touchEnd",()=>{t.params.effect==="tinder"&&(p=!1,f=!1,requestAnimationFrame(()=>{l=!1}))}),c("setTransition",(e,i)=>{t.params.effect==="tinder"&&(e.slides.forEach(n=>{n.style.transitionDuration=`${i}ms`,n.querySelectorAll(".swiper-tinder-label").forEach(o=>{o.style.transitionDuration=`${i}ms`,n.progress<=0&&(o.style.opacity=0)})}),requestAnimationFrame(()=>{a(document.querySelector(".swiper-tinder-button-yes"),n=>n.classList.remove("swiper-tinder-button-active")),a(document.querySelector(".swiper-tinder-button-no"),n=>n.classList.remove("swiper-tinder-button-active"))}))}),c("slideChange",()=>{if(t.activeIndex===t.slides.length-1&&!t.params.loop){const e=t.slides[t.slides.length-1],i=e.progress,n=Math.min(Math.max(i,-2),2),o=t.touches.currentX-t.touches.startX;S(e,n,o,!0,!0)}f||(h=!1,t.emit("tinderSwipe",w<0?"left":"right"))}),c("transitionStart",()=>{h&&t.activeIndex!==u&&(h=!1,t.emit("tinderSwipe",w<0?"left":"right"))}),c("setTranslate",(e,i)=>{if(t.params.effect!=="tinder"||p)return;if(f&&u!==void 0&&t.snapGrid[u+1]!==void 0){const r=Math.abs(t.snapGrid[u]),s=Math.abs(r+t.size)-8;if(Math.abs(i)>s)return void t.setTranslate(-s)}const n=t.touches.currentX-t.touches.startX;w=n;const{slides:o}=t,m=t.activeIndex===o.length-1&&!t.params.loop;o.forEach((r,s)=>{const x=r.progress,d=Math.min(Math.max(x,-2),2);let v=-r.swiperSlideOffset,q=0,L=100*d,b=0,M=1;(d>0||d===0&&l)&&(L=0,b=45*d*(n<0?-1:1),v=t.size*(n<0?-1:1)*d+v,r.translateY!==void 0&&(q=r.translateY),S(r,d,n,m)),r.transformOrigin==="top"&&(b=-b),d>1&&(M=5*(1.2-d));const I=`
        translate3d(${v}px, ${q}px, ${L}px)
        rotateZ(${b}deg)
      `;d>=1&&!r.tinderTransform&&(r.tinderTransform=I,r.tinderTransformSlideIndex=s),(r.tinderTransform&&r.tinderTransformSlideIndex!==s||!l)&&(r.tinderTransform=""),r.style.zIndex=-Math.abs(Math.round(x))+o.length,r.style.transform=r.tinderTransform||I,r.style.opacity=M})})}export{T as e};
