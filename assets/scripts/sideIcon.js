! function(e, n) {
    "object" == typeof exports && "object" == typeof module ? module.exports = n() : "function" == typeof define && define.amd ? define([], n) : "object" == typeof exports ? exports.feather = n() : e.feather = n()
}("undefined" != typeof self ? self : this, function() {
    return function(e) {
        var n = {};

        function i(l) {
            if (n[l]) return n[l].exports;
            var t = n[l] = {
                i: l,
                l: !1,
                exports: {}
            };
            return e[l].call(t.exports, t, t.exports, i), t.l = !0, t.exports
        }
        return i.m = e, i.c = n, i.d = function(e, n, l) {
            i.o(e, n) || Object.defineProperty(e, n, {
                configurable: !1,
                enumerable: !0,
                get: l
            })
        }, i.r = function(e) {
            Object.defineProperty(e, "__esModule", {
                value: !0
            })
        }, i.n = function(e) {
            var n = e && e.__esModule ? function() {
                return e.default
            } : function() {
                return e
            };
            return i.d(n, "a", n), n
        }, i.o = function(e, n) {
            return Object.prototype.hasOwnProperty.call(e, n)
        }, i.p = "", i(i.s = 61)
    }([function(e, n, i) {
        var l = i(20)("wks"),
            t = i(11),
            r = i(1).Symbol,
            o = "function" == typeof r;
        (e.exports = function(e) {
            return l[e] || (l[e] = o && r[e] || (o ? r : t)("Symbol." + e))
        }).store = l
    }, function(e, n) {
        var i = e.exports = "undefined" != typeof window && window.Math == Math ? window : "undefined" != typeof self && self.Math == Math ? self : Function("return this")();
        "number" == typeof __g && (__g = i)
    }, function(e, n) {
        var i = e.exports = {
            version: "2.5.6"
        };
        "number" == typeof __e && (__e = i)
    }, function(e, n) {
        var i = {}.hasOwnProperty;
        e.exports = function(e, n) {
            return i.call(e, n)
        }
    }, function(e, n, i) {
        e.exports = !i(27)(function() {
            return 7 != Object.defineProperty({}, "a", {
                get: function() {
                    return 7
                }
            }).a
        })
    }, function(e, n, i) {
        var l = i(13);
        e.exports = function(e) {
            if (!l(e)) throw TypeError(e + " is not an object!");
            return e
        }
    }, function(e, n, i) {
        var l = i(5),
            t = i(56),
            r = i(55),
            o = Object.defineProperty;
        n.f = i(4) ? Object.defineProperty : function(e, n, i) {
            if (l(e), n = r(n, !0), l(i), t) try {
                return o(e, n, i)
            } catch (e) {}
            if ("get" in i || "set" in i) throw TypeError("Accessors not supported!");
            return "value" in i && (e[n] = i.value), e
        }
    }, function(e, n, i) {
        var l = i(6),
            t = i(12);
        e.exports = i(4) ? function(e, n, i) {
            return l.f(e, n, t(1, i))
        } : function(e, n, i) {
            return e[n] = i, e
        }
    }, function(e, n, i) {
        "use strict";
        Object.defineProperty(n, "__esModule", {
            value: !0
        });
        var l = o(i(35)),
            t = o(i(33)),
            r = o(i(32));

        function o(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        n.default = Object.keys(t.default).map(function(e) {
            return new l.default(e, t.default[e], r.default[e])
        }).reduce(function(e, n) {
            return e[n.name] = n, e
        }, {})
    }, function(e, n, i) {
        var l = i(20)("keys"),
            t = i(11);
        e.exports = function(e) {
            return l[e] || (l[e] = t(e))
        }
    }, function(e, n) {
        e.exports = {}
    }, function(e, n) {
        var i = 0,
            l = Math.random();
        e.exports = function(e) {
            return "Symbol(".concat(void 0 === e ? "" : e, ")_", (++i + l).toString(36))
        }
    }, function(e, n) {
        e.exports = function(e, n) {
            return {
                enumerable: !(1 & e),
                configurable: !(2 & e),
                writable: !(4 & e),
                value: n
            }
        }
    }, function(e, n) {
        e.exports = function(e) {
            return "object" == typeof e ? null !== e : "function" == typeof e
        }
    }, function(e, n) {
        e.exports = function(e) {
            if (void 0 == e) throw TypeError("Can't call method on  " + e);
            return e
        }
    }, function(e, n) {
        var i = Math.ceil,
            l = Math.floor;
        e.exports = function(e) {
            return isNaN(e = +e) ? 0 : (e > 0 ? l : i)(e)
        }
    }, function(e, n, i) {
        var l;

        ! function() {
            "use strict";
            var i = function() {
                function e() {}

                function n(e, n) {
                    for (var i = n.length, l = 0; l < i; ++l) t(e, n[l])
                }
                e.prototype = Object.create(null);
                var i = {}.hasOwnProperty;
                var l = /\s+/;

                function t(e, t) {
                    if (t) {
                        var r = typeof t;
                        "string" === r ? function(e, n) {
                            for (var i = n.split(l), t = i.length, r = 0; r < t; ++r) e[i[r]] = !0
                        }(e, t) : Array.isArray(t) ? n(e, t) : "object" === r ? function(e, n) {
                            for (var l in n) i.call(n, l) && (e[l] = !!n[l])
                        }(e, t) : "number" === r && function(e, n) {
                            e[n] = !0
                        }(e, t)
                    }
                }
                return function() {
                    for (var i = arguments.length, l = Array(i), t = 0; t < i; t++) l[t] = arguments[t];
                    var r = new e;
                    n(r, l);
                    var o = [];
                    for (var a in r) r[a] && o.push(a);
                    return o.join(" ")
                }
            }();
            void 0 !== e && e.exports ? e.exports = i : void 0 === (l = function() {
                return i
            }.apply(n, [])) || (e.exports = l)
        }()
    }, function(e, n, i) {
        var l = i(14);
        e.exports = function(e) {
            return Object(l(e))
        }
    }, function(e, n, i) {
        var l = i(6).f,
            t = i(3),
            r = i(0)("toStringTag");
        e.exports = function(e, n, i) {
            e && !t(e = i ? e : e.prototype, r) && l(e, r, {
                configurable: !0,
                value: n
            })
        }
    }, function(e, n) {
        e.exports = "constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf".split(",")
    }, function(e, n, i) {
        var l = i(2),
            t = i(1),
            r = t["__core-js_shared__"] || (t["__core-js_shared__"] = {});
        (e.exports = function(e, n) {
            return r[e] || (r[e] = void 0 !== n ? n : {})
        })("versions", []).push({
            version: l.version,
            mode: i(29) ? "pure" : "global",
            copyright: "© 2018 Denis Pushkarev (zloirock.ru)"
        })
    }, function(e, n, i) {
        var l = i(15),
            t = Math.min;
        e.exports = function(e) {
            return e > 0 ? t(l(e), 9007199254740991) : 0
        }
    }, function(e, n) {
        var i = {}.toString;
        e.exports = function(e) {
            return i.call(e).slice(8, -1)
        }
    }, function(e, n, i) {
        var l = i(48),
            t = i(14);
        e.exports = function(e) {
            return l(t(e))
        }
    }, function(e, n, i) {
        var l = i(54);
        e.exports = function(e, n, i) {
            if (l(e), void 0 === n) return e;
            switch (i) {
                case 1:
                    return function(i) {
                        return e.call(n, i)
                    };
                case 2:
                    return function(i, l) {
                        return e.call(n, i, l)
                    };
                case 3:
                    return function(i, l, t) {
                        return e.call(n, i, l, t)
                    }
            }
            return function() {
                return e.apply(n, arguments)
            }
        }
    }, function(e, n, i) {
        var l = i(1),
            t = i(7),
            r = i(3),
            o = i(11)("src"),
            a = Function.toString,
            c = ("" + a).split("toString");
        i(2).inspectSource = function(e) {
            return a.call(e)
        }, (e.exports = function(e, n, i, a) {
            var y = "function" == typeof i;
            y && (r(i, "name") || t(i, "name", n)), e[n] !== i && (y && (r(i, o) || t(i, o, e[n] ? "" + e[n] : c.join(String(n)))), e === l ? e[n] = i : a ? e[n] ? e[n] = i : t(e, n, i) : (delete e[n], t(e, n, i)))
        })(Function.prototype, "toString", function() {
            return "function" == typeof this && this[o] || a.call(this)
        })
    }, function(e, n, i) {
        var l = i(13),
            t = i(1).document,
            r = l(t) && l(t.createElement);
        e.exports = function(e) {
            return r ? t.createElement(e) : {}
        }
    }, function(e, n) {
        e.exports = function(e) {
            try {
                return !!e()
            } catch (e) {
                return !0
            }
        }
    }, function(e, n, i) {
        var l = i(1),
            t = i(2),
            r = i(7),
            o = i(25),
            a = i(24),
            c = function(e, n, i) {
                var y, p, h, x, s = e & c.F,
                    u = e & c.G,
                    d = e & c.S,
                    f = e & c.P,
                    v = e & c.B,
                    g = u ? l : d ? l[n] || (l[n] = {}) : (l[n] || {}).prototype,
                    m = u ? t : t[n] || (t[n] = {}),
                    M = m.prototype || (m.prototype = {});
                for (y in u && (i = n), i) h = ((p = !s && g && void 0 !== g[y]) ? g : i)[y], x = v && p ? a(h, l) : f && "function" == typeof h ? a(Function.call, h) : h, g && o(g, y, h, e & c.U), m[y] != h && r(m, y, x), f && M[y] != h && (M[y] = h)
            };
        l.core = t, c.F = 1, c.G = 2, c.S = 4, c.P = 8, c.B = 16, c.W = 32, c.U = 64, c.R = 128, e.exports = c
    }, function(e, n) {
        e.exports = !1
    }, function(e, n, i) {
        "use strict";
        Object.defineProperty(n, "__esModule", {
            value: !0
        });
        var l = Object.assign || function(e) {
                for (var n = 1; n < arguments.length; n++) {
                    var i = arguments[n];
                    for (var l in i) Object.prototype.hasOwnProperty.call(i, l) && (e[l] = i[l])
                }
                return e
            },
            t = o(i(16)),
            r = o(i(8));

        function o(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        n.default = function() {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
            if ("undefined" == typeof document) throw new Error("`feather.replace()` only works in a browser environment.");
            var n = document.querySelectorAll("[data-feather]");
            Array.from(n).forEach(function(n) {
                return function(e) {
                    var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                        i = function(e) {
                            return Array.from(e.attributes).reduce(function(e, n) {
                                return e[n.name] = n.value, e
                            }, {})
                        }(e),
                        o = i["data-feather"];
                    delete i["data-feather"];
                    var a = r.default[o].toSvg(l({}, n, i, {
                            class: (0, t.default)(n.class, i.class)
                        })),
                        c = (new DOMParser).parseFromString(a, "image/svg+xml").querySelector("svg");
                    e.parentNode.replaceChild(c, e)
                }(n, e)
            })
        }
    }, function(e, n, i) {
        "use strict";
        Object.defineProperty(n, "__esModule", {
            value: !0
        });
        var l, t = i(8),
            r = (l = t) && l.__esModule ? l : {
                default: l
            };
        n.default = function(e) {
            var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
            if (console.warn("feather.toSvg() is deprecated. Please use feather.icons[name].toSvg() instead."), !e) throw new Error("The required `key` (icon name) parameter is missing.");
            if (!r.default[e]) throw new Error("No icon matching '" + e + "'. See the complete list of icons at https://feathericons.com");
            return r.default[e].toSvg(n)
        }
    }, function(e) {
    
    }, function(e) {
        e.exports = {
            "x-circle": '<circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line>',
            "x-octagon": '<polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line>',
            "x-square": '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="9" x2="15" y2="15"></line><line x1="15" y1="9" x2="9" y2="15"></line>',
            x: '<line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line>',
           
        }
    }, function(e) {
        e.exports = {
            xmlns: "http://www.w3.org/2000/svg",
            width: 24,
            height: 24,
            viewBox: "0 0 24 24",
            fill: "none",
            stroke: "currentColor",
            "stroke-width": 2,
            "stroke-linecap": "round",
            "stroke-linejoin": "round"
        }
    }, function(e, n, i) {
        "use strict";
        Object.defineProperty(n, "__esModule", {
            value: !0
        });
        var l = Object.assign || function(e) {
                for (var n = 1; n < arguments.length; n++) {
                    var i = arguments[n];
                    for (var l in i) Object.prototype.hasOwnProperty.call(i, l) && (e[l] = i[l])
                }
                return e
            },
            t = function() {
                function e(e, n) {
                    for (var i = 0; i < n.length; i++) {
                        var l = n[i];
                        l.enumerable = l.enumerable || !1, l.configurable = !0, "value" in l && (l.writable = !0), Object.defineProperty(e, l.key, l)
                    }
                }
                return function(n, i, l) {
                    return i && e(n.prototype, i), l && e(n, l), n
                }
            }(),
            r = a(i(16)),
            o = a(i(34));

        function a(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        var c = function() {
            function e(n, i) {
                var t = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : [];
                ! function(e, n) {
                    if (!(e instanceof n)) throw new TypeError("Cannot call a class as a function")
                }(this, e), this.name = n, this.contents = i, this.tags = t, this.attrs = l({}, o.default, {
                    class: "feather feather-" + n
                })
            }
            return t(e, [{
                key: "toSvg",
                value: function() {
                    var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                    return "<svg " + function(e) {
                        return Object.keys(e).map(function(n) {
                            return n + '="' + e[n] + '"'
                        }).join(" ")
                    }(l({}, this.attrs, e, {
                        class: (0, r.default)(this.attrs.class, e.class)
                    })) + ">" + this.contents + "</svg>"
                }
            }, {
                key: "toString",
                value: function() {
                    return this.contents
                }
            }]), e
        }();
        n.default = c
    }, function(e, n, i) {
        "use strict";
        var l = o(i(8)),
            t = o(i(31)),
            r = o(i(30));

        function o(e) {
            return e && e.__esModule ? e : {
                default: e
            }
        }
        e.exports = {
            icons: l.default,
            toSvg: t.default,
            replace: r.default
        }
    }, function(e, n, i) {
        var l = i(0)("iterator"),
            t = !1;
        try {
            var r = [7][l]();
            r.return = function() {
                t = !0
            }, Array.from(r, function() {
                throw 2
            })
        } catch (e) {}
        e.exports = function(e, n) {
            if (!n && !t) return !1;
            var i = !1;
            try {
                var r = [7],
                    o = r[l]();
                o.next = function() {
                    return {
                        done: i = !0
                    }
                }, r[l] = function() {
                    return o
                }, e(r)
            } catch (e) {}
            return i
        }
    }, function(e, n, i) {
        var l = i(22),
            t = i(0)("toStringTag"),
            r = "Arguments" == l(function() {
                return arguments
            }());
        e.exports = function(e) {
            var n, i, o;
            return void 0 === e ? "Undefined" : null === e ? "Null" : "string" == typeof(i = function(e, n) {
                try {
                    return e[n]
                } catch (e) {}
            }(n = Object(e), t)) ? i : r ? l(n) : "Object" == (o = l(n)) && "function" == typeof n.callee ? "Arguments" : o
        }
    }, function(e, n, i) {
        var l = i(38),
            t = i(0)("iterator"),
            r = i(10);
        e.exports = i(2).getIteratorMethod = function(e) {
            if (void 0 != e) return e[t] || e["@@iterator"] || r[l(e)]
        }
    }, function(e, n, i) {
        "use strict";
        var l = i(6),
            t = i(12);
        e.exports = function(e, n, i) {
            n in e ? l.f(e, n, t(0, i)) : e[n] = i
        }
    }, function(e, n, i) {
        var l = i(10),
            t = i(0)("iterator"),
            r = Array.prototype;
        e.exports = function(e) {
            return void 0 !== e && (l.Array === e || r[t] === e)
        }
    }, function(e, n, i) {
        var l = i(5);
        e.exports = function(e, n, i, t) {
            try {
                return t ? n(l(i)[0], i[1]) : n(i)
            } catch (n) {
                var r = e.return;
                throw void 0 !== r && l(r.call(e)), n
            }
        }
    }, function(e, n, i) {
        "use strict";
        var l = i(24),
            t = i(28),
            r = i(17),
            o = i(42),
            a = i(41),
            c = i(21),
            y = i(40),
            p = i(39);
        t(t.S + t.F * !i(37)(function(e) {
            Array.from(e)
        }), "Array", {
            from: function(e) {
                var n, i, t, h, x = r(e),
                    s = "function" == typeof this ? this : Array,
                    u = arguments.length,
                    d = u > 1 ? arguments[1] : void 0,
                    f = void 0 !== d,
                    v = 0,
                    g = p(x);
                if (f && (d = l(d, u > 2 ? arguments[2] : void 0, 2)), void 0 == g || s == Array && a(g))
                    for (i = new s(n = c(x.length)); n > v; v++) y(i, v, f ? d(x[v], v) : x[v]);
                else
                    for (h = g.call(x), i = new s; !(t = h.next()).done; v++) y(i, v, f ? o(h, d, [t.value, v], !0) : t.value);
                return i.length = v, i
            }
        })
    }, function(e, n, i) {
        var l = i(3),
            t = i(17),
            r = i(9)("IE_PROTO"),
            o = Object.prototype;
        e.exports = Object.getPrototypeOf || function(e) {
            return e = t(e), l(e, r) ? e[r] : "function" == typeof e.constructor && e instanceof e.constructor ? e.constructor.prototype : e instanceof Object ? o : null
        }
    }, function(e, n, i) {
        var l = i(1).document;
        e.exports = l && l.documentElement
    }, function(e, n, i) {
        var l = i(15),
            t = Math.max,
            r = Math.min;
        e.exports = function(e, n) {
            return (e = l(e)) < 0 ? t(e + n, 0) : r(e, n)
        }
    }, function(e, n, i) {
        var l = i(23),
            t = i(21),
            r = i(46);
        e.exports = function(e) {
            return function(n, i, o) {
                var a, c = l(n),
                    y = t(c.length),
                    p = r(o, y);
                if (e && i != i) {
                    for (; y > p;)
                        if ((a = c[p++]) != a) return !0
                } else
                    for (; y > p; p++)
                        if ((e || p in c) && c[p] === i) return e || p || 0;
                return !e && -1
            }
        }
    }, function(e, n, i) {
        var l = i(22);
        e.exports = Object("z").propertyIsEnumerable(0) ? Object : function(e) {
            return "String" == l(e) ? e.split("") : Object(e)
        }
    }, function(e, n, i) {
        var l = i(3),
            t = i(23),
            r = i(47)(!1),
            o = i(9)("IE_PROTO");
        e.exports = function(e, n) {
            var i, a = t(e),
                c = 0,
                y = [];
            for (i in a) i != o && l(a, i) && y.push(i);
            for (; n.length > c;) l(a, i = n[c++]) && (~r(y, i) || y.push(i));
            return y
        }
    }, function(e, n, i) {
        var l = i(49),
            t = i(19);
        e.exports = Object.keys || function(e) {
            return l(e, t)
        }
    }, function(e, n, i) {
        var l = i(6),
            t = i(5),
            r = i(50);
        e.exports = i(4) ? Object.defineProperties : function(e, n) {
            t(e);
            for (var i, o = r(n), a = o.length, c = 0; a > c;) l.f(e, i = o[c++], n[i]);
            return e
        }
    }, function(e, n, i) {
        var l = i(5),
            t = i(51),
            r = i(19),
            o = i(9)("IE_PROTO"),
            a = function() {},
            c = function() {
                var e, n = i(26)("iframe"),
                    l = r.length;
                for (n.style.display = "none", i(45).appendChild(n), n.src = "javascript:", (e = n.contentWindow.document).open(), e.write("<script>document.F=Object<\/script>"), e.close(), c = e.F; l--;) delete c.prototype[r[l]];
                return c()
            };
        e.exports = Object.create || function(e, n) {
            var i;
            return null !== e ? (a.prototype = l(e), i = new a, a.prototype = null, i[o] = e) : i = c(), void 0 === n ? i : t(i, n)
        }
    }, function(e, n, i) {
        "use strict";
        var l = i(52),
            t = i(12),
            r = i(18),
            o = {};
        i(7)(o, i(0)("iterator"), function() {
            return this
        }), e.exports = function(e, n, i) {
            e.prototype = l(o, {
                next: t(1, i)
            }), r(e, n + " Iterator")
        }
    }, function(e, n) {
        e.exports = function(e) {
            if ("function" != typeof e) throw TypeError(e + " is not a function!");
            return e
        }
    }, function(e, n, i) {
        var l = i(13);
        e.exports = function(e, n) {
            if (!l(e)) return e;
            var i, t;
            if (n && "function" == typeof(i = e.toString) && !l(t = i.call(e))) return t;
            if ("function" == typeof(i = e.valueOf) && !l(t = i.call(e))) return t;
            if (!n && "function" == typeof(i = e.toString) && !l(t = i.call(e))) return t;
            throw TypeError("Can't convert object to primitive value")
        }
    }, function(e, n, i) {
        e.exports = !i(4) && !i(27)(function() {
            return 7 != Object.defineProperty(i(26)("div"), "a", {
                get: function() {
                    return 7
                }
            }).a
        })
    }, function(e, n, i) {
        "use strict";
        var l = i(29),
            t = i(28),
            r = i(25),
            o = i(7),
            a = i(10),
            c = i(53),
            y = i(18),
            p = i(44),
            h = i(0)("iterator"),
            x = !([].keys && "next" in [].keys()),
            s = function() {
                return this
            };
        e.exports = function(e, n, i, u, d, f, v) {
            c(i, n, u);
            var g, m, M, w = function(e) {
                    if (!x && e in k) return k[e];
                    switch (e) {
                        case "keys":
                        case "values":
                            return function() {
                                return new i(this, e)
                            }
                    }
                    return function() {
                        return new i(this, e)
                    }
                },
                b = n + " Iterator",
                z = "values" == d,
                A = !1,
                k = e.prototype,
                H = k[h] || k["@@iterator"] || d && k[d],
                V = H || w(d),
                j = d ? z ? w("entries") : V : void 0,
                O = "Array" == n && k.entries || H;
            if (O && (M = p(O.call(new e))) !== Object.prototype && M.next && (y(M, b, !0), l || "function" == typeof M[h] || o(M, h, s)), z && H && "values" !== H.name && (A = !0, V = function() {
                    return H.call(this)
                }), l && !v || !x && !A && k[h] || o(k, h, V), a[n] = V, a[b] = s, d)
                if (g = {
                        values: z ? V : w("values"),
                        keys: f ? V : w("keys"),
                        entries: j
                    }, v)
                    for (m in g) m in k || r(k, m, g[m]);
                else t(t.P + t.F * (x || A), n, g);
            return g
        }
    }, function(e, n, i) {
        var l = i(15),
            t = i(14);
        e.exports = function(e) {
            return function(n, i) {
                var r, o, a = String(t(n)),
                    c = l(i),
                    y = a.length;
                return c < 0 || c >= y ? e ? "" : void 0 : (r = a.charCodeAt(c)) < 55296 || r > 56319 || c + 1 === y || (o = a.charCodeAt(c + 1)) < 56320 || o > 57343 ? e ? a.charAt(c) : r : e ? a.slice(c, c + 2) : o - 56320 + (r - 55296 << 10) + 65536
            }
        }
    }, function(e, n, i) {
        "use strict";
        var l = i(58)(!0);
        i(57)(String, "String", function(e) {
            this._t = String(e), this._i = 0
        }, function() {
            var e, n = this._t,
                i = this._i;
            return i >= n.length ? {
                value: void 0,
                done: !0
            } : (e = l(n, i), this._i += e.length, {
                value: e,
                done: !1
            })
        })
    }, function(e, n, i) {
        i(59), i(43), e.exports = i(2).Array.from
    }, function(e, n, i) {
        i(60), e.exports = i(36)
    }])
});
//# sourceMappingURL=feather.min.js.map