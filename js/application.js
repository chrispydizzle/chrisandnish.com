let head;
let pages;
let header;
let eleph;
let pageContainer;

(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-6178016-14', 'auto');
ga('send', 'pageview');

$(document).ready(function () {
    let winHeight = $(window).height();
    let containerHeight = $('#scroll-container-height-helper').height();

    head = $('h1.title');
    pages = $('.page-outer');
    header = $('.header');
    pageContainer = $('#pages');

    pages.each(function (i, page) {
        $(page).attr('initLeft', $(page).position().left);
    });

    head.css('background-image', 'url(artifacts/bg/hotel.jpg), url(artifacts/bg/nishfaveofplace.png)');
    pages.css('background-image', 'url(artifacts/bg/hotel.jpg), url(artifacts/bg/nishfaveofplace.png)');

    TweenMax.to($('.bottom-sliding-section'), 4.5, {
        ease: Elastic.easeOut.config(1, 1),
        top: (winHeight - containerHeight) + 'px', onUpdate: backgroundCheck, onUpdateParams: ["{self}", 'top']
    });

    let windowHash = window.location.hash;

    if (windowHash === "#visa") {
        change("ustravel");
    }

    if (windowHash === "#home") {
        change("home");
    }


    eleph = $('.burger').children('span');
    fireRand(2000);
    setTimeout(pingit, 1000);
});

function fireRand(time) {
    if (eleph.css('background-color') === "rgba(0, 0, 0, 0)") {
        TweenMax.to(eleph, time / 1000, {
            ease: Elastic.easeInOut.config(1.2, .2), css: {transform: 'scale(1.4)'}, onComplete: function (a) {
                TweenMax.to(eleph, a / 1000, {
                    ease: Elastic.easeInOut.config(1, 1),
                    top: 0 + 'px',
                    css: {transform: 'scale(1)'},
                    onComplete: function () {
                        let nextTime = Math.random() * 4000;
                        setTimeout(fireRand(nextTime), nextTime);
                    }
                })
            }, onCompleteParams: [time]
        });
    }
    else {
        let nextTime = Math.random() * 4000;
        setTimeout(fireRand, nextTime);
    }
}


function pingit() {
    let winHeight = $(window).height();
    let containerHeight = $('#scroll-container-height-helper').height();
    TweenMax.to($('.bottom-sliding-section'), 4.5, {
        ease: Elastic.easeOut.config(1, 1),
        top: (winHeight - containerHeight) + 'px', onUpdate: backgroundCheck, onUpdateParams: ["{self}", 'top']
    });
}

function backgroundCheck(theVal) {
    let targets = theVal.target.css('top');
    head.css('background-position-y', "-" + targets);
}

function change(page) {
    let target = $('#' + page);
    let offset = target.position().left * -1;

    pages.each(function (i, content) {
        if (target === page) {
            TweenMax.to(content, 1, {ease: Expo.easeOut, css: {'left': offset + "px"}});
        }
        else {
            TweenMax.to(content, 1, {ease: Expo.easeOut, css: {'left': $(content).attr('initLeft')}});
        }
    });


    // TweenMax.to(pageContainer, 15, { ease: Expo.easeOut, 'margin-left': offset + "px"});

    // TMax($(document), 1, {ease: Expo.easeOut, })
}

function TMax(refvar, refTime = 1, props) {
    TweenMax.to(refvar, refTime, props);
}

/*function decide(choice1, choice2, parent) {
 let pagecontainer = $('.pages');
 let decision = $("<section id='decision' class='page-outer " + parent + "' ></section>");
 decision.append("<div class='decision-inner'><h1>Traveling from?</h1><div class='dividers dl "+ choice1 +"'>US</div><div class='dividers dr "+ choice2 +"'>Singapore</div></div>")
 pagecontainer.append(decision);

 }

 function indecision() {
 $('#decision').remove();
 }

 function iframethis(e) {
 $('#ustravel-inner').append('<iframe src="" width="100%" height="90%"></iframe>')
 e.preventBubble();
 e.preventDefault();
 return false;
 }*/