!function(e){"object"==typeof exports&&"object"==typeof module?e(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror"],e):e(CodeMirror)}(function(e){"use strict";e.defineMode("scheme",function(){var e="comment",t="string",n="atom",r="number",i="bracket";function a(e){for(var t={},n=e.split(" "),r=0;r<n.length;++r)t[n[r]]=!0;return t}var c=a("λ case-lambda call/cc class define-class exit-handler field import inherit init-field interface let*-values let-values let/ec mixin opt-lambda override protect provide public rename require require-for-syntax syntax syntax-case syntax-error unit/sig unless when with-syntax and begin call-with-current-continuation call-with-input-file call-with-output-file case cond define define-syntax delay do dynamic-wind else for-each if lambda let let* let-syntax letrec letrec-syntax map or syntax-rules abs acos angle append apply asin assoc assq assv atan boolean? caar cadr call-with-input-file call-with-output-file call-with-values car cdddar cddddr cdr ceiling char->integer char-alphabetic? char-ci<=? char-ci<? char-ci=? char-ci>=? char-ci>? char-downcase char-lower-case? char-numeric? char-ready? char-upcase char-upper-case? char-whitespace? char<=? char<? char=? char>=? char>? char? close-input-port close-output-port complex? cons cos current-input-port current-output-port denominator display eof-object? eq? equal? eqv? eval even? exact->inexact exact? exp expt #f floor force gcd imag-part inexact->exact inexact? input-port? integer->char integer? interaction-environment lcm length list list->string list->vector list-ref list-tail list? load log magnitude make-polar make-rectangular make-string make-vector max member memq memv min modulo negative? newline not null-environment null? number->string number? numerator odd? open-input-file open-output-file output-port? pair? peek-char port? positive? procedure? quasiquote quote quotient rational? rationalize read read-char real-part real? remainder reverse round scheme-report-environment set! set-car! set-cdr! sin sqrt string string->list string->number string->symbol string-append string-ci<=? string-ci<? string-ci=? string-ci>=? string-ci>? string-copy string-fill! string-length string-ref string-set! string<=? string<? string=? string>=? string>? string? substring symbol->string symbol? #t tan transcript-off transcript-on truncate values vector vector->list vector-fill! vector-length vector-ref vector-set! with-input-from-file with-output-to-file write write-char zero?"),o=a("define let letrec let* lambda");function l(e,t,n){e.indentStack=new function(e,t,n){this.indent=e,this.type=t,this.prev=n}(t,n,e.indentStack)}var s=new RegExp(/^(?:[-+]i|[-+][01]+#*(?:\/[01]+#*)?i|[-+]?[01]+#*(?:\/[01]+#*)?@[-+]?[01]+#*(?:\/[01]+#*)?|[-+]?[01]+#*(?:\/[01]+#*)?[-+](?:[01]+#*(?:\/[01]+#*)?)?i|[-+]?[01]+#*(?:\/[01]+#*)?)(?=[()\s;"]|$)/i),d=new RegExp(/^(?:[-+]i|[-+][0-7]+#*(?:\/[0-7]+#*)?i|[-+]?[0-7]+#*(?:\/[0-7]+#*)?@[-+]?[0-7]+#*(?:\/[0-7]+#*)?|[-+]?[0-7]+#*(?:\/[0-7]+#*)?[-+](?:[0-7]+#*(?:\/[0-7]+#*)?)?i|[-+]?[0-7]+#*(?:\/[0-7]+#*)?)(?=[()\s;"]|$)/i),u=new RegExp(/^(?:[-+]i|[-+][\da-f]+#*(?:\/[\da-f]+#*)?i|[-+]?[\da-f]+#*(?:\/[\da-f]+#*)?@[-+]?[\da-f]+#*(?:\/[\da-f]+#*)?|[-+]?[\da-f]+#*(?:\/[\da-f]+#*)?[-+](?:[\da-f]+#*(?:\/[\da-f]+#*)?)?i|[-+]?[\da-f]+#*(?:\/[\da-f]+#*)?)(?=[()\s;"]|$)/i),m=new RegExp(/^(?:[-+]i|[-+](?:(?:(?:\d+#+\.?#*|\d+\.\d*#*|\.\d+#*|\d+)(?:[esfdl][-+]?\d+)?)|\d+#*\/\d+#*)i|[-+]?(?:(?:(?:\d+#+\.?#*|\d+\.\d*#*|\.\d+#*|\d+)(?:[esfdl][-+]?\d+)?)|\d+#*\/\d+#*)@[-+]?(?:(?:(?:\d+#+\.?#*|\d+\.\d*#*|\.\d+#*|\d+)(?:[esfdl][-+]?\d+)?)|\d+#*\/\d+#*)|[-+]?(?:(?:(?:\d+#+\.?#*|\d+\.\d*#*|\.\d+#*|\d+)(?:[esfdl][-+]?\d+)?)|\d+#*\/\d+#*)[-+](?:(?:(?:\d+#+\.?#*|\d+\.\d*#*|\.\d+#*|\d+)(?:[esfdl][-+]?\d+)?)|\d+#*\/\d+#*)?i|(?:(?:(?:\d+#+\.?#*|\d+\.\d*#*|\.\d+#*|\d+)(?:[esfdl][-+]?\d+)?)|\d+#*\/\d+#*))(?=[()\s;"]|$)/i);function p(e){return e.match(s)}function f(e){return e.match(d)}function h(e,t){return!0===t&&e.backUp(1),e.match(m)}function g(e){return e.match(u)}return{startState:function(){return{indentStack:null,indentation:0,mode:!1,sExprComment:!1}},token:function(a,s){if(null==s.indentStack&&a.sol()&&(s.indentation=a.indentation()),a.eatSpace())return null;var d,u=null;switch(s.mode){case"string":for(var m=!1;null!=(x=a.next());){if('"'==x&&!m){s.mode=!1;break}m=!m&&"\\"==x}u=t;break;case"comment":for(var x,b=!1;null!=(x=a.next());){if("#"==x&&b){s.mode=!1;break}b="|"==x}u=e;break;case"s-expr-comment":if(s.mode=!1,"("!=a.peek()&&"["!=a.peek()){a.eatWhile(/[^/s]/),u=e;break}s.sExprComment=0;default:var v=a.next();if('"'==v)s.mode="string",u=t;else if("'"==v)u=n;else if("#"==v)if(a.eat("|"))s.mode="comment",u=e;else if(a.eat(/[tf]/i))u=n;else if(a.eat(";"))s.mode="s-expr-comment",u=e;else{var k=null,y=!1,w=!0;a.eat(/[ei]/i)?y=!0:a.backUp(1),a.match(/^#b/i)?k=p:a.match(/^#o/i)?k=f:a.match(/^#x/i)?k=g:a.match(/^#d/i)?k=h:a.match(/^[-+0-9.]/,!1)?(w=!1,k=h):y||a.eat("#"),null!=k&&(w&&!y&&a.match(/^#[ei]/i),k(a)&&(u=r))}else if(/^[-+0-9.]/.test(v)&&h(a,!0))u=r;else if(";"==v)a.skipToEnd(),u=e;else if("("==v||"["==v){for(var E,q="",S=a.column();null!=(E=a.eat(/[^\s\(\[\;\)\]]/));)q+=E;q.length>0&&o.propertyIsEnumerable(q)?l(s,S+2,v):(a.eatSpace(),a.eol()||";"==a.peek()?l(s,S+1,v):l(s,S+a.current().length,v)),a.backUp(a.current().length-1),"number"==typeof s.sExprComment&&s.sExprComment++,u=i}else")"==v||"]"==v?(u=i,null!=s.indentStack&&s.indentStack.type==(")"==v?"(":"[")&&((d=s).indentStack=d.indentStack.prev,"number"==typeof s.sExprComment&&0==--s.sExprComment&&(u=e,s.sExprComment=!1))):(a.eatWhile(/[\w_\-!$%&*+\.\/:<=>?@\^~]/),u=c&&c.propertyIsEnumerable(a.current())?"builtin":"variable")}return"number"==typeof s.sExprComment?e:u},indent:function(e){return null==e.indentStack?e.indentation:e.indentStack.indent},closeBrackets:{pairs:'()[]{}""'},lineComment:";;"}}),e.defineMIME("text/x-scheme","scheme")});