!(function (e) {
    "function" == typeof define && define.amd
        ? define(["jquery"], e)
        : "object" == typeof exports
        ? (module.exports = e(require("jquery")))
        : e(jQuery);
})(function (m) {
    var i = /\+/g;
    function x(e) {
        return v.raw ? e : encodeURIComponent(e);
    }
    function g(e, n) {
        var o = v.raw
            ? e
            : (function (e) {
                  0 === e.indexOf('"') &&
                      (e = e
                          .slice(1, -1)
                          .replace(/\\"/g, '"')
                          .replace(/\\\\/g, "\\"));
                  try {
                      return (
                          (e = decodeURIComponent(e.replace(i, " "))),
                          v.json ? JSON.parse(e) : e
                      );
                  } catch (e) {}
              })(e);
        return m.isFunction(n) ? n(o) : o;
    }
    var v = (m.cookie = function (e, n, o) {
        if (1 < arguments.length && !m.isFunction(n)) {
            if ("number" == typeof (o = m.extend({}, v.defaults, o)).expires) {
                var i = o.expires,
                    r = (o.expires = new Date());
                r.setMilliseconds(r.getMilliseconds() + 864e5 * i);
            }
            return (document.cookie = [
                x(e),
                "=",
                ((t = n), x(v.json ? JSON.stringify(t) : String(t))),
                o.expires ? "; expires=" + o.expires.toUTCString() : "",
                o.path ? "; path=" + o.path : "",
                o.domain ? "; domain=" + o.domain : "",
                o.secure ? "; secure" : "",
            ].join(""));
        }
        for (
            var t,
                c,
                u = e ? void 0 : {},
                s = document.cookie ? document.cookie.split("; ") : [],
                a = 0,
                d = s.length;
            a < d;
            a++
        ) {
            var p = s[a].split("="),
                f = ((c = p.shift()), v.raw ? c : decodeURIComponent(c)),
                l = p.join("=");
            if (e === f) {
                u = g(l, n);
                break;
            }
            e || void 0 === (l = g(l)) || (u[f] = l);
        }
        return u;
    });
    (v.defaults = {}),
        (m.removeCookie = function (e, n) {
            return (
                m.cookie(e, "", m.extend({}, n, { expires: -1 })), !m.cookie(e)
            );
        });
});
