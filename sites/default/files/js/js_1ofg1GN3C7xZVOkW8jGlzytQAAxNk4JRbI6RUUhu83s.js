/*!
 * clipboard.js v2.0.11
 * https://clipboardjs.com/
 *
 * Licensed MIT © Zeno Rocha
 */
!function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e():"function"==typeof define&&define.amd?define([],e):"object"==typeof exports?exports.ClipboardJS=e():t.ClipboardJS=e()}(this,function(){return n={686:function(t,e,n){"use strict";n.d(e,{default:function(){return b}});var e=n(279),i=n.n(e),e=n(370),u=n.n(e),e=n(817),r=n.n(e);function c(t){try{return document.execCommand(t)}catch(t){return}}var a=function(t){t=r()(t);return c("cut"),t};function o(t,e){var n,o,t=(n=t,o="rtl"===document.documentElement.getAttribute("dir"),(t=document.createElement("textarea")).style.fontSize="12pt",t.style.border="0",t.style.padding="0",t.style.margin="0",t.style.position="absolute",t.style[o?"right":"left"]="-9999px",o=window.pageYOffset||document.documentElement.scrollTop,t.style.top="".concat(o,"px"),t.setAttribute("readonly",""),t.value=n,t);return e.container.appendChild(t),e=r()(t),c("copy"),t.remove(),e}var f=function(t){var e=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{container:document.body},n="";return"string"==typeof t?n=o(t,e):t instanceof HTMLInputElement&&!["text","search","url","tel","password"].includes(null==t?void 0:t.type)?n=o(t.value,e):(n=r()(t),c("copy")),n};function l(t){return(l="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}var s=function(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{},e=t.action,n=void 0===e?"copy":e,o=t.container,e=t.target,t=t.text;if("copy"!==n&&"cut"!==n)throw new Error('Invalid "action" value, use either "copy" or "cut"');if(void 0!==e){if(!e||"object"!==l(e)||1!==e.nodeType)throw new Error('Invalid "target" value, use a valid Element');if("copy"===n&&e.hasAttribute("disabled"))throw new Error('Invalid "target" attribute. Please use "readonly" instead of "disabled" attribute');if("cut"===n&&(e.hasAttribute("readonly")||e.hasAttribute("disabled")))throw new Error('Invalid "target" attribute. You can\'t cut text from elements with "readonly" or "disabled" attributes')}return t?f(t,{container:o}):e?"cut"===n?a(e):f(e,{container:o}):void 0};function p(t){return(p="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function d(t,e){for(var n=0;n<e.length;n++){var o=e[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,o.key,o)}}function y(t,e){return(y=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}function h(n){var o=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],function(){})),!0}catch(t){return!1}}();return function(){var t,e=v(n);return t=o?(t=v(this).constructor,Reflect.construct(e,arguments,t)):e.apply(this,arguments),e=this,!(t=t)||"object"!==p(t)&&"function"!=typeof t?function(t){if(void 0!==t)return t;throw new ReferenceError("this hasn't been initialised - super() hasn't been called")}(e):t}}function v(t){return(v=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}function m(t,e){t="data-clipboard-".concat(t);if(e.hasAttribute(t))return e.getAttribute(t)}var b=function(){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&y(t,e)}(r,i());var t,e,n,o=h(r);function r(t,e){var n;return function(t){if(!(t instanceof r))throw new TypeError("Cannot call a class as a function")}(this),(n=o.call(this)).resolveOptions(e),n.listenClick(t),n}return t=r,n=[{key:"copy",value:function(t){var e=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{container:document.body};return f(t,e)}},{key:"cut",value:function(t){return a(t)}},{key:"isSupported",value:function(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:["copy","cut"],t="string"==typeof t?[t]:t,e=!!document.queryCommandSupported;return t.forEach(function(t){e=e&&!!document.queryCommandSupported(t)}),e}}],(e=[{key:"resolveOptions",value:function(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};this.action="function"==typeof t.action?t.action:this.defaultAction,this.target="function"==typeof t.target?t.target:this.defaultTarget,this.text="function"==typeof t.text?t.text:this.defaultText,this.container="object"===p(t.container)?t.container:document.body}},{key:"listenClick",value:function(t){var e=this;this.listener=u()(t,"click",function(t){return e.onClick(t)})}},{key:"onClick",value:function(t){var e=t.delegateTarget||t.currentTarget,n=this.action(e)||"copy",t=s({action:n,container:this.container,target:this.target(e),text:this.text(e)});this.emit(t?"success":"error",{action:n,text:t,trigger:e,clearSelection:function(){e&&e.focus(),window.getSelection().removeAllRanges()}})}},{key:"defaultAction",value:function(t){return m("action",t)}},{key:"defaultTarget",value:function(t){t=m("target",t);if(t)return document.querySelector(t)}},{key:"defaultText",value:function(t){return m("text",t)}},{key:"destroy",value:function(){this.listener.destroy()}}])&&d(t.prototype,e),n&&d(t,n),r}()},828:function(t){var e;"undefined"==typeof Element||Element.prototype.matches||((e=Element.prototype).matches=e.matchesSelector||e.mozMatchesSelector||e.msMatchesSelector||e.oMatchesSelector||e.webkitMatchesSelector),t.exports=function(t,e){for(;t&&9!==t.nodeType;){if("function"==typeof t.matches&&t.matches(e))return t;t=t.parentNode}}},438:function(t,e,n){var u=n(828);function i(t,e,n,o,r){var i=function(e,n,t,o){return function(t){t.delegateTarget=u(t.target,n),t.delegateTarget&&o.call(e,t)}}.apply(this,arguments);return t.addEventListener(n,i,r),{destroy:function(){t.removeEventListener(n,i,r)}}}t.exports=function(t,e,n,o,r){return"function"==typeof t.addEventListener?i.apply(null,arguments):"function"==typeof n?i.bind(null,document).apply(null,arguments):("string"==typeof t&&(t=document.querySelectorAll(t)),Array.prototype.map.call(t,function(t){return i(t,e,n,o,r)}))}},879:function(t,n){n.node=function(t){return void 0!==t&&t instanceof HTMLElement&&1===t.nodeType},n.nodeList=function(t){var e=Object.prototype.toString.call(t);return void 0!==t&&("[object NodeList]"===e||"[object HTMLCollection]"===e)&&"length"in t&&(0===t.length||n.node(t[0]))},n.string=function(t){return"string"==typeof t||t instanceof String},n.fn=function(t){return"[object Function]"===Object.prototype.toString.call(t)}},370:function(t,e,n){var f=n(879),l=n(438);t.exports=function(t,e,n){if(!t&&!e&&!n)throw new Error("Missing required arguments");if(!f.string(e))throw new TypeError("Second argument must be a String");if(!f.fn(n))throw new TypeError("Third argument must be a Function");if(f.node(t))return c=e,a=n,(u=t).addEventListener(c,a),{destroy:function(){u.removeEventListener(c,a)}};if(f.nodeList(t))return o=t,r=e,i=n,Array.prototype.forEach.call(o,function(t){t.addEventListener(r,i)}),{destroy:function(){Array.prototype.forEach.call(o,function(t){t.removeEventListener(r,i)})}};if(f.string(t))return t=t,e=e,n=n,l(document.body,t,e,n);throw new TypeError("First argument must be a String, HTMLElement, HTMLCollection, or NodeList");var o,r,i,u,c,a}},817:function(t){t.exports=function(t){var e,n="SELECT"===t.nodeName?(t.focus(),t.value):"INPUT"===t.nodeName||"TEXTAREA"===t.nodeName?((e=t.hasAttribute("readonly"))||t.setAttribute("readonly",""),t.select(),t.setSelectionRange(0,t.value.length),e||t.removeAttribute("readonly"),t.value):(t.hasAttribute("contenteditable")&&t.focus(),n=window.getSelection(),(e=document.createRange()).selectNodeContents(t),n.removeAllRanges(),n.addRange(e),n.toString());return n}},279:function(t){function e(){}e.prototype={on:function(t,e,n){var o=this.e||(this.e={});return(o[t]||(o[t]=[])).push({fn:e,ctx:n}),this},once:function(t,e,n){var o=this;function r(){o.off(t,r),e.apply(n,arguments)}return r._=e,this.on(t,r,n)},emit:function(t){for(var e=[].slice.call(arguments,1),n=((this.e||(this.e={}))[t]||[]).slice(),o=0,r=n.length;o<r;o++)n[o].fn.apply(n[o].ctx,e);return this},off:function(t,e){var n=this.e||(this.e={}),o=n[t],r=[];if(o&&e)for(var i=0,u=o.length;i<u;i++)o[i].fn!==e&&o[i].fn._!==e&&r.push(o[i]);return r.length?n[t]=r:delete n[t],this}},t.exports=e,t.exports.TinyEmitter=e}},r={},o.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return o.d(e,{a:e}),e},o.d=function(t,e){for(var n in e)o.o(e,n)&&!o.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:e[n]})},o.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},o(686).default;function o(t){if(r[t])return r[t].exports;var e=r[t]={exports:{}};return n[t](e,e.exports,o),e.exports}var n,r});;
/*
Vanilla JS replacement of JQuery slideUp, slideDown, slideToggle.

Based on https://gist.github.com/AaronF/bb6170329698277c7585d5be4ecb2583
*/

const slideUp = (target, duration) => {
  target.style.transitionProperty = 'height, margin, padding';
  target.style.transitionDuration = duration + 'ms';
  target.style.boxSizing = 'border-box';
  target.style.height = target.offsetHeight + 'px';
  target.offsetHeight;
  target.style.overflow = 'hidden';
  target.style.height = 0;
  target.style.paddingTop = 0;
  target.style.paddingBottom = 0;
  target.style.marginTop = 0;
  target.style.marginBottom = 0;

  window.setTimeout(function () {
    target.style.display = 'none';
    target.style.removeProperty('height');
    target.style.removeProperty('padding-top');
    target.style.removeProperty('padding-bottom');
    target.style.removeProperty('margin-top');
    target.style.removeProperty('margin-bottom');
    target.style.removeProperty('overflow');
    target.style.removeProperty('transition-duration');
    target.style.removeProperty('transition-property');
  }, duration);
}

const slideDown = (target, duration) => {
  target.style.removeProperty('display');
  let display = window.getComputedStyle(target).display;

  if (display === 'none') {
    display = 'block';
  }

  target.style.display = display;
  let height = target.offsetHeight;
  target.style.overflow = 'hidden';
  target.style.height = 0;
  target.style.paddingTop = 0;
  target.style.paddingBottom = 0;
  target.style.marginTop = 0;
  target.style.marginBottom = 0;
  target.offsetHeight;
  target.style.boxSizing = 'border-box';
  target.style.transitionProperty = "height, margin, padding";
  target.style.transitionDuration = duration + 'ms';
  target.style.height = height + 'px';
  target.style.removeProperty('padding-top');
  target.style.removeProperty('padding-bottom');
  target.style.removeProperty('margin-top');
  target.style.removeProperty('margin-bottom');

  window.setTimeout(function () {
    target.style.removeProperty('height');
    target.style.removeProperty('overflow');
    target.style.removeProperty('transition-duration');
    target.style.removeProperty('transition-property');
  }, duration);
}

const slideToggle = (target, duration) => {
  if (window.getComputedStyle(target).display === 'none') {
    return slideDown(target, duration);
  } else {
    return slideUp(target, duration);
  }
}
;
!function(e,n){"use strict";e.behaviors.materialBaseFunctions={attach:function(e,o){var t=function(e){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;n&&n.preventDefault(),document.body.classList.add(e)},r=function(e){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;n&&n.preventDefault(),document.body.classList.remove(e)},c=function(){document.querySelectorAll(".mb-dropdown").forEach((function(e){var n=e.querySelector(".mb-dropdown__panel");slideUp(n,200),e.classList.remove("mb-dropdown--expanded")}))},i=function(){t("search-open");var n=e.querySelector(".search-field input"),o=n.value.length;n.focus(),n.setSelectionRange(o,o)},a=function(){document.body.classList.contains("search-open")?r("search-open"):i()};n("materialBaseFunctions","html").forEach((function(){document.querySelectorAll(".overlay-open__button").forEach((function(e){e.addEventListener("click",(function(e){return t("overlay-open",e)}))})),document.querySelectorAll(".overlay-close__button").forEach((function(e){e.addEventListener("click",(function(e){return r("overlay-open",e)}))})),document.querySelectorAll(".overlay .menu-item a").forEach((function(e){e.addEventListener("click",(function(){return r("overlay-open")}))})),document.querySelectorAll(".drawer-open__button").forEach((function(e){e.addEventListener("click",(function(e){return t("drawer-open",e)}))})),document.querySelectorAll(".drawer-close__button").forEach((function(e){e.addEventListener("click",(function(e){return r("drawer-open",e)}))})),document.querySelectorAll(".drawer-toggle__button").forEach((function(e){e.addEventListener("click",(function(e){return function(e){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;n&&n.preventDefault(),document.body.classList.toggle(e)}("drawer-open",e)}))})),document.querySelectorAll(".drawer .menu-item a").forEach((function(e){e.addEventListener("click",(function(){return r("drawer-open")}))})),document.querySelectorAll(".drawer__overlay").forEach((function(e){e.addEventListener("click",(function(){return r("drawer-open")}))})),document.body.addEventListener("click",(function(e){e.target.closest(".mb-dropdown")||c()})),new ClipboardJS(".copy-target__button",{text:function(e){return e.getAttribute("data-target")}}).on("success",(function(e){var n=e.trigger.closest(".copy-target");n.classList.add("just-clicked"),setTimeout((function(){n.classList.remove("just-clicked")}),3e3),e.clearSelection()}))})),n("accordionToggleClick",".mb-accordion .mb-accordion__section-toggle",e).forEach((function(e){e.addEventListener("click",(function(n){return function(e,n){n.preventDefault();var o=e.closest(".mb-accordion__section");Array.from(e.closest(".mb-accordion").querySelectorAll(".mb-accordion__section")).filter((function(e){return e!==o})).forEach((function(e){var n=e.querySelector(".mb-accordion__section-panel");slideUp(n,200),e.classList.remove("mb-accordion__section--expanded")}));var t=o.querySelector(".mb-accordion__section-panel");t&&("none"===window.getComputedStyle(t).display?(slideDown(t,200),o.classList.add("mb-accordion__section--expanded")):(slideUp(t,200),o.classList.remove("mb-accordion__section--expanded")))}(e,n)}))})),n("dropdownToggleClick",".mb-dropdown .mb-dropdown__toggle",e).forEach((function(e){e.addEventListener("click",(function(n){return function(e,n){n.preventDefault();var o=e.closest(".mb-dropdown"),t=[];o.closest(".mb-dropdown__group")&&(t=Array.from(o.closest(".mb-dropdown__group").querySelectorAll(".mb-dropdown")).filter((function(e){return e!==o}))),t.forEach((function(e){var n=e.querySelector(".mb-dropdown__panel");e.classList.remove("mb-dropdown--expanded"),slideUp(n,200)}));var r=o.querySelector(".mb-dropdown__panel");r&&("none"===window.getComputedStyle(r).display?(slideDown(r,200),o.classList.add("mb-dropdown--expanded")):(slideUp(r,200),o.classList.remove("mb-dropdown--expanded")))}(e,n)}))})),n("dropdownLinkClick",".mb-dropdown__panel a",e).forEach((function(e){e.addEventListener("click",c)})),n("formItemFocusState",".form-item input",e).forEach((function(e){e.addEventListener("focus",(function(){return e.closest(".form-item").classList.add("form-item--focused")})),e.addEventListener("blur",(function(){return e.closest(".form-item").classList.remove("form-item--focused")}))})),n("formItemFocusState",".form-item textarea",e).forEach((function(e){e.addEventListener("focus",(function(){return e.closest(".form-item").classList.add("form-item--focused")})),e.addEventListener("blur",(function(){return e.closest(".form-item").classList.remove("form-item--focused")}))})),n("inputClearClick",".input-clear",e).forEach((function(e){e.addEventListener("click",(function(){return function(e){var n=e.closest(".form-item").querySelector("input");n.value="",n.focus()}(e)}))})),n("searchOpen",".search-open__button",e).forEach((function(e){e.addEventListener("click",i)})),n("searchClose",".search-close__button",e).forEach((function(e){e.addEventListener("click",(function(){return r("search-open")}))})),n("searchToggle",".search-toggle__button",e).forEach((function(e){e.addEventListener("click",a)})),n("searchAutocomplete",".search-field input.form-autocomplete",e).forEach((function(e){e.addEventListener("autocompleteopen",(function(){return t("search-autocomplete-open")})),e.addEventListener("autocompleteclose",(function(){return r("search-autocomplete-open")}))})),n("messageCloseClick",".messages .messages__close-button",e).forEach((function(e){e.addEventListener("click",(function(){return e.closest(".messages").style.display="none"}))})),n("messageAutoHide",".messages--fixed",e).forEach((function(e){setTimeout((function(){return e.style.display="none"}),5e3)}))}}}(Drupal,once);;
!function(e,n){"use strict";e.behaviors.materialBaseMdcFunctions={attach:function(e,t){window.mdc.autoInit();var o=document.querySelector(".mdc-drawer"),c=null==o?void 0:o.MDCDrawer,r=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null;e&&e.preventDefault(),c&&(c.open=!0)},d=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null;e&&e.preventDefault(),c&&(c.open=!1)},u=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null;e&&e.preventDefault(),c&&(c.open=!c.open)},a=function(e){var n=e.closest(".form-item"),t=e.closest(".mb-chip").querySelector(".mb-chip__icon");e.checked?(n.classList.add("input-checked"),t&&(t.dataset.icon=t.textContent,t.textContent="done")):(n.classList.remove("input-checked"),t&&(t.textContent=t.dataset.icon))},i=function(){document.querySelectorAll(".mdc-menu-dropdown").forEach((function(e){return e.classList.remove("mdc-menu-dropdown--expanded")}))};n("materialBaseMdcFunctions","html").forEach((function(){document.querySelectorAll(".drawer-open__button").forEach((function(e){e.addEventListener("click",r)})),document.querySelectorAll(".drawer-close__button").forEach((function(e){e.addEventListener("click",d)})),document.querySelectorAll(".drawer-toggle__button").forEach((function(e){e.addEventListener("click",u)})),document.querySelectorAll(".drawer .menu-item a").forEach((function(e){e.addEventListener("click",(function(){return d()}))})),document.body.addEventListener("click",(function(e){e.target.closest(".mdc-menu-dropdown")||i()}))})),n("chipBehavior",".form-item-chip input[type=checkbox]",e).forEach((function(e){e.checked&&a(e),e.addEventListener("click",(function(){return a(e)}))})),n("menuDropdownToggleClick",".mdc-menu-dropdown .mdc-menu-dropdown__toggle",e).forEach((function(e){e.addEventListener("click",(function(n){return function(e,n){n.preventDefault();var t=e.closest(".mdc-menu-dropdown"),o=t.querySelector(".mdc-menu").MDCMenu,c=t.classList.contains("mdc-menu-dropdown--expanded"),r=[];t.closest(".mdc-menu-dropdown__group")&&(r=Array.from(t.closest(".mdc-menu-dropdown__group").querySelectorAll(".mdc-menu-dropdown")).filter((function(e){return e!==t}))),r.forEach((function(e){return e.classList.remove("mdc-menu-dropdown--expanded")})),c?t.classList.remove("mdc-menu-dropdown--expanded"):(o.open=!0,t.classList.add("mdc-menu-dropdown--expanded"))}(e,n)}))})),n("menuDropdownItemClick",".mdc-menu-dropdown .mdc-deprecated-list-item",e).forEach((function(e){e.addEventListener("click",i)})),n("snackbarMessageShow",".messages.mdc-snackbar",e).forEach((function(e){e.MDCSnackbar&&e.MDCSnackbar.open()}))}}}(Drupal,once);;
/**
 * @file
 * Defines checkbox theme functions.
 */

((Drupal) => {
  /**
   * Theme function for a checkbox.
   *
   * @return {string}
   *   The HTML markup for the checkbox.
   */
  Drupal.theme.checkbox = () =>
    `<input type="checkbox" class="form-checkbox"/>`;
})(Drupal);
;
/**
 * @file
 * Table select functionality.
 */

(function ($, Drupal) {
  /**
   * Initialize tableSelects.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches tableSelect functionality.
   */
  Drupal.behaviors.tableSelect = {
    attach(context, settings) {
      // Select the inner-most table in case of nested tables.
      once(
        'table-select',
        $(context).find('th.select-all').closest('table'),
      ).forEach((table) => Drupal.tableSelect.call(table));
    },
  };

  /**
   * Callback used in {@link Drupal.behaviors.tableSelect}.
   */
  Drupal.tableSelect = function () {
    // Do not add a "Select all" checkbox if there are no rows with checkboxes
    // in the table.
    if ($(this).find('td input[type="checkbox"]').length === 0) {
      return;
    }

    // Keep track of the table, which checkbox is checked and alias the
    // settings.
    const table = this;
    let checkboxes;
    let lastChecked;
    const $table = $(table);
    const strings = {
      selectAll: Drupal.t('Select all rows in this table'),
      selectNone: Drupal.t('Deselect all rows in this table'),
    };
    const updateSelectAll = function (state) {
      // Update table's select-all checkbox (and sticky header's if available).
      $table
        .prev('table.sticky-header')
        .addBack()
        .find('th.select-all input[type="checkbox"]')
        .each(function () {
          const $checkbox = $(this);
          const stateChanged = $checkbox.prop('checked') !== state;

          $checkbox.attr(
            'title',
            state ? strings.selectNone : strings.selectAll,
          );

          /**
           * @checkbox {HTMLElement}
           */
          if (stateChanged) {
            $checkbox.prop('checked', state).trigger('change');
          }
        });
    };

    // Find all <th> with class select-all, and insert the check all checkbox.
    $table
      .find('th.select-all')
      .prepend($(Drupal.theme('checkbox')).attr('title', strings.selectAll))
      .on('click', (event) => {
        if ($(event.target).is('input[type="checkbox"]')) {
          // Loop through all checkboxes and set their state to the select all
          // checkbox' state.
          checkboxes.each(function () {
            const $checkbox = $(this);
            const stateChanged =
              $checkbox.prop('checked') !== event.target.checked;

            /**
             * @checkbox {HTMLElement}
             */
            if (stateChanged) {
              $checkbox.prop('checked', event.target.checked).trigger('change');
            }
            // Either add or remove the selected class based on the state of the
            // check all checkbox.

            /**
             * @checkbox {HTMLElement}
             */
            $checkbox.closest('tr').toggleClass('selected', this.checked);
          });
          // Update the title and the state of the check all box.
          updateSelectAll(event.target.checked);
        }
      });

    // For each of the checkboxes within the table that are not disabled.
    checkboxes = $table
      .find('td input[type="checkbox"]:enabled')
      .on('click', function (e) {
        // Either add or remove the selected class based on the state of the
        // check all checkbox.

        /**
         * @this {HTMLElement}
         */
        $(this).closest('tr').toggleClass('selected', this.checked);

        // If this is a shift click, we need to highlight everything in the
        // range. Also make sure that we are actually checking checkboxes
        // over a range and that a checkbox has been checked or unchecked before.
        if (e.shiftKey && lastChecked && lastChecked !== e.target) {
          // We use the checkbox's parent <tr> to do our range searching.
          Drupal.tableSelectRange(
            $(e.target).closest('tr')[0],
            $(lastChecked).closest('tr')[0],
            e.target.checked,
          );
        }

        // If all checkboxes are checked, make sure the select-all one is checked
        // too, otherwise keep unchecked.
        updateSelectAll(
          checkboxes.length === checkboxes.filter(':checked').length,
        );

        // Keep track of the last checked checkbox.
        lastChecked = e.target;
      });

    // If all checkboxes are checked on page load, make sure the select-all one
    // is checked too, otherwise keep unchecked.
    updateSelectAll(checkboxes.length === checkboxes.filter(':checked').length);
  };

  /**
   * @param {HTMLElement} from
   *   The HTML element representing the "from" part of the range.
   * @param {HTMLElement} to
   *   The HTML element representing the "to" part of the range.
   * @param {boolean} state
   *   The state to set on the range.
   */
  Drupal.tableSelectRange = function (from, to, state) {
    // We determine the looping mode based on the order of from and to.
    const mode =
      from.rowIndex > to.rowIndex ? 'previousSibling' : 'nextSibling';

    // Traverse through the sibling nodes.
    for (let i = from[mode]; i; i = i[mode]) {
      const $i = $(i);
      // Make sure that we're only dealing with elements.
      if (i.nodeType !== 1) {
        continue;
      }
      // Either add or remove the selected class based on the state of the
      // target checkbox.
      $i.toggleClass('selected', state);
      $i.find('input[type="checkbox"]').prop('checked', state);

      if (to.nodeType) {
        // If we are at the end of the range, stop.
        if (i === to) {
          break;
        }
      }
      // A faster alternative to doing $(i).filter(to).length.
      else if ($.filter(to, [i]).r.length) {
        break;
      }
    }
  };
})(jQuery, Drupal);
;
