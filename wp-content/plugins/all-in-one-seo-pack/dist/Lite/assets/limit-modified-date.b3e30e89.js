import{_ as u}from"./js/_plugin-vue_export-helper.abeb2ae0.js";import{o as r,c as m,a as e,O as _,Z as f,b as l,t as w,Y as h}from"./js/vue.runtime.esm-bundler.4a881941.js";import{l as g}from"./js/index.5d3e32c8.js";import{l as x}from"./js/index.43a192b7.js";import{l as P}from"./js/index.0b123ab1.js";import{b as S,q as a,l as b}from"./js/links.7c59a081.js";import{e as E}from"./js/elemLoaded.9a6eb745.js";import{s as k}from"./js/metabox.09bcc5b8.js";import"./js/translations.6e7b2383.js";import"./js/default-i18n.3881921e.js";import"./js/constants.238e5b7b.js";import"./js/Caret.02d7c74a.js";import"./js/isArrayLikeObject.ab8f4241.js";const y={setup(){return{postEditorStore:S()}},emits:["standalone-update-post"],data(){return{strings:{label:this.$t.__("Don't update the modified date",this.$td)}}},methods:{addLimitModifiedDateAttribute(){a()&&window.wp.data.dispatch("core/editor").editPost({aioseo_limit_modified_date:this.postEditorStore.currentPost.limit_modified_date})}},computed:{canShowSvg(){return a()&&this.postEditorStore.currentPost.limit_modified_date}},watch:{"postEditorStore.currentPost.limit_modified_date"(t){window.aioseoBus.$emit("standalone-update-post",{limit_modified_date:t})}}},L={key:0},v={class:"components-checkbox-control__input-container"},B={key:0,xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24",width:"24",height:"24",role:"img",class:"components-checkbox-control__checked","aria-hidden":"true",focusable:"false"},D=e("path",{d:"M18.3 5.6L9.9 16.9l-4.6-3.4-.9 1.2 5.8 4.3 9.3-12.6z"},null,-1),M=[D],A={class:"components-checkbox-control__label",for:"aioseo-limit-modified-date-input"};function C(t,o,d,i,p,n){return i.postEditorStore.currentPost.id?(r(),m("div",L,[e("span",v,[_(e("input",{id:"aioseo-limit-modified-date-input",class:"components-checkbox-control__input",type:"checkbox","onUpdate:modelValue":o[0]||(o[0]=s=>i.postEditorStore.currentPost.limit_modified_date=s),onChange:o[1]||(o[1]=(...s)=>n.addLimitModifiedDateAttribute&&n.addLimitModifiedDateAttribute(...s))},null,544),[[f,i.postEditorStore.currentPost.limit_modified_date]]),n.canShowSvg?(r(),m("svg",B,M)):l("",!0)]),e("label",A,w(p.strings.label),1)])):l("",!0)}const V=u(y,[["render",C]]);if(a()&&window.wp){const{createElement:t}=window.wp.element,{registerPlugin:o}=window.wp.plugins,{PluginPostStatusInfo:d}=window.wp.editPost;o("aioseo-limit-modified-date",{render:()=>t(d,{},t("div",{id:"aioseo-limit-modified-date"}))})}const c=()=>{let t=h({...V,name:"Standalone/LimitModifiedDate"});t=g(t),t=x(t),t=P(t),b(t),t.mount("#aioseo-limit-modified-date")};k()&&window.aioseo&&window.aioseo.currentPost&&window.aioseo.currentPost.context==="post"&&(document.getElementById("aioseo-limit-modified-date")?c():(E("#aioseo-limit-modified-date","aioseoLimitModifiedDate"),document.addEventListener("animationstart",function(o){o.animationName==="aioseoLimitModifiedDate"&&c()},{passive:!0})));
