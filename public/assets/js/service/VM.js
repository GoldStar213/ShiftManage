(function anonymous(e) {
    if (e && e.s_fe)
        return;
    var s = s_c_il[0], f, tcf, t, n, nrs, a, h;
    if (s.d && s.d.all && s.d.all.cppXYctnr)
        return;
    if (!s.bbc)
        s.useForcedLinkTracking = 0;
    else if (!s.useForcedLinkTracking) {
        s.b.removeEventListener("click", s.bc, true);
        s.bbc = s.useForcedLinkTracking = 0;
        return
    } else
        s.b.removeEventListener("click", s.bc, false);
    s.eo = e.srcElement ? e.srcElement : e.target;
    nrs = s.nrs;
    s.t();
    s.eo = 0;
    if (s.nrs > nrs && s.useForcedLinkTracking && e.target) {
        a = e.target;
        while (a && a != s.b && a.tagName.toUpperCase() != "A" && a.tagName.toUpperCase() != "AREA")
            a = a.parentNode;
        if (a) {
            h = a.href;
            if (h.indexOf("#") == 0 || h.indexOf("about:") == 0 || h.indexOf("javascript:") == 0)
                h = 0;
            t = a.target;
            if (e.target.dispatchEvent && h && (!t || t == "_self" || t == "_top" || t == "_parent" || (s.wd.name && t == s.wd.name))) {
                tcf = new Function("s","var x;try{n=s.d.createEvent(\"MouseEvents\")}catch(x){n=new MouseEvent}return n");
                n = tcf(s);
                if (n) {
                    tcf = new Function("n","e","var x;try{n.initMouseEvent(\"click\",e.bubbles,e.cancelable,e.view,e.detail,e.screenX,e.screenY,e.clientX,e.clientY,e.ctrlKey,e.altKey,e.shiftKey,e.metaKey,e.button,e.relatedTarget)}catch(x){n=0}return n");
                    n = tcf(n, e);
                    if (n) {
                        n.s_fe = 1;
                        e.stopPropagation();
                        if (e.stopImmediatePropagation) {
                            e.stopImmediatePropagation();
                        }
                        e.preventDefault();
                        s.bct = e.target;
                        s.bce = n
                    }
                }
            }
        }
    }
}
)
