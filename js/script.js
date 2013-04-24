// $Id: script.js,v 1.1.2.1 2009/07/06 08:03:14 agileware Exp $

/* begin Page */

/* Generated with Artisteer version 2.1.0.16090, file checksum is 0287F487. */

(function () {
  // fix ie blinking
  var m = document.uniqueID && document.compatMode && !window.XMLHttpRequest && document.execCommand;
  try{ if(!!m) { m("BackgroundImageCache", false, true); } }
  catch(oh){};
})();

function xGetElementsByClassName(clsName, parentEle, tagName) {
  var elements = null;
  var found = [];
  var slash = String.fromCharCode(92);
  var re = new RegExp(slash + "b" + clsName + slash + "b");
  if (!parentEle) parentEle = document;
  if (!tagName) tagName = '*';
  elements = parentEle.getElementsByTagName(tagName);
  if (elements) {
    for (var i = 0; i < elements.length; ++i) {
      if (elements[i].className.search(re) != -1) {
        found[found.length] = elements[i];
      }
    }
  }
  return found;
}

var styleUrlCached = null;
function GetStyleUrl() {
  if (null == styleUrlCached) {
    var ns;
    styleUrlCached = '';
    ns = document.getElementsByTagName('link');
    for (var i = 0; i < ns.length; i++) {
      var l = ns[i];
      if (l.href && /style\.css(\?.*)?$/.test(l.href)){
        return styleUrlCached = l.href.replace(/style\.css(\?.*)?$/,'');
      }
    }
    
    ns = document.getElementsByTagName('style');
    for (var i = 0; i < ns.length; i++) {
      var matches = new RegExp('import\\s+"([^"]+\\/)style\\.css"').exec(ns[i].innerHTML);
      if (null != matches && matches.length > 0)
        return styleUrlCached = matches[1];
    }
  }
  return styleUrlCached;
}


/* end Page */
