import{c as f,t as h,b as _,a as p}from"./_baseSet.SHpzr1A5.js";import{S as l,b as c,e as g,t as d,u as x,w as y,q as P}from"./helpers.D5tYIqKS.js";import{a as S}from"./_getTag.Dxs-K0Yj.js";var o=l?l.isConcatSpreadable:void 0;function A(n){return c(n)||g(n)||!!(o&&n&&n[o])}function m(n,r,a,s,t){var e=-1,i=n.length;for(a||(a=A),t||(t=[]);++e<i;){var u=n[e];r>0&&a(u)?r>1?m(u,r-1,a,s,t):S(t,u):t[t.length]=u}return t}function v(n){var r=n==null?0:n.length;return r?m(n,1):[]}function w(n){return d(x(n,void 0,v),n+"")}function b(n,r){return n!=null&&r in Object(n)}function I(n,r,a){r=f(r,n);for(var s=-1,t=r.length,e=!1;++s<t;){var i=h(r[s]);if(!(e=n!=null&&a(n,i)))break;n=n[i]}return e||++s!=t?e:(t=n==null?0:n.length,!!t&&y(t)&&P(i,t)&&(c(n)||g(n)))}function L(n,r){return n!=null&&I(n,r,b)}function B(n){return n===void 0}function R(n,r,a){for(var s=-1,t=r.length,e={};++s<t;){var i=r[s],u=_(n,i);a(u,i)&&p(e,f(i,n),u)}return e}function k(n,r){return R(n,r,function(a,s){return L(n,s)})}var C=w(function(n,r){return n==null?{}:k(n,r)});export{w as a,m as b,v as f,L as h,B as i,C as p};