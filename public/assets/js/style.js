(function(a, s, y, n, c, h, i, d, e) {
    s.className += " " + y;
    h.end = i = function() {
        s.className = s.className.replace(RegExp(" ?" + y), "")
    };
    (a[n] = a[n] || []).hide = h;
    setTimeout(function() {
        i();
        h.end = null
    }, c);
})(window, document.documentElement, "async-hide", "dataLayer", 4000, {
    "GTM-MN6HLB6": true
});
(function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        "gtm.start": new Date().getTime(),
        event: "gtm.js"
    });
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != "dataLayer" ? "&l=" + l : "";
    j.async = true;
    j.src =
        "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, "script", "dataLayer", "GTM-MN6HLB6");