(function () {
    var app = {
        initAos: function () {
            setTimeout(function () {
                AOS.init();
            }, 1000);
        },

        initNavigation: function () {
            var $nav = jQuery("#nav, #nav2");
            if ($nav.length > 0) $nav.navTabDoubleTap();
        },

        initDetectScroll: function () {
            if (jQuery(window).width() > 991 && jQuery(window).scrollTop() > 56) {
                jQuery("header.header").addClass("show-fixed");
            } else {
                jQuery("header.header").removeClass("show-fixed");
            }
        },

        initSlideshow: function () {
            //code here
        },

        initProperties: function () {
            //code here

            var sectionSlick = ".properties-slick";
            $(sectionSlick).slick({
                slidesToShow: 1,
                slideToScroll: 1,
                infinite: true,
                dots: false,
                autoplay: true,
                autoplaySpeed: 7000,
                speed: 1000,
                arrows: true,
                prevArrow: ".hp-properties .prev",
                nextArrow: ".hp-properties .next",
                rows: 1,
                responsive: [
                    { breakpoint: 992, settings: { slidesToShow: 1 } },
                    { breakpoint: 768, settings: { slidesToShow: 1 } },
                ],
            });
            var isSliding = false;
            jQuery(sectionSlick).on("beforeChange", function () {
                isSliding = true;
            });
            jQuery(sectionSlick).on("afterChange", function () {
                isSliding = false;
            });
            jQuery(".hp-properties img").click(function (e) {
                if (isSliding) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                    return;
                }
            });
        },

        initSplitHeader: function () {
            /* Split Nav */
            jQuery(".header #nav").splitNav({
                logo: ".header-logo",
                navClasses: "header-item menu",
                splitCount: 3,
                splitCountEqual: false,
            });

            jQuery(".header-logo").addClass("no-padding");
        },

        initProcess: function () {
            //code here
        },

        initWelcome: function () {
            //code here
            if (jQuery(window).width() > 568) {
                jQuery(document).on(
                    "click",
                    ".mobile .map-inner area",
                    function (e) {
                        e.preventDefault();
                        if (jQuery(this).hasClass("clicked_once")) {
                            var item_link = jQuery(this).attr("href");
                            window.location.href = item_link;
                        } else {
                            jQuery(".mobile .map-inner area").removeClass("clicked_once");
                        }
                        jQuery(this).addClass("clicked_once");
                    }
                );
            }
        },

        initTeam: function () {
            //code here
            var map = jQuery(".map-inner");
            var mapOrigWidth = 1600;
            var mapOrigHeight = 1047;
            var container = jQuery(".map-wrap");
            var containerWidth = container.width();
            var scale = containerWidth / mapOrigWidth;
            scale = scale > 1 ? scale : scale;
            map.css({
                transform: 'scale(' + scale + ')',
                transformOrigin: '0 0'
            });
            container.css({
                height: (mapOrigHeight * scale)
            });

            console.log('reszed');
        },

        teamMapHover: function () {
            jQuery('.map-inner area').hover(
                function () {
                    var currentID = jQuery(this).attr('data-area-id');
                    var target = jQuery('.map-hover-item[data-area-id="' + currentID + '"], .map-details > div[data-area-id="' + currentID
                        + '"]');

                    target.addClass('active');
                    console.log(target);
                    console.log(currentID);
                },
                function () {
                    jQuery('.map-hover-item, .map-details > div').removeClass('active');
                }
            );
        },

        initCommunities: function () {
            //code here

            var sectionSlick = ".communities-slick";
            $(sectionSlick).slick({
                slidesToShow: 2,
                slideToScroll: 1,
                infinite: true,
                dots: false,
                autoplay: true,
                autoplaySpeed: 7000,
                speed: 1000,
                arrows: false,
                rows: 2,
                responsive: [
                    { breakpoint: 992, settings: { slidesToShow: 1 } },
                    { breakpoint: 768, settings: { slidesToShow: 1 } },
                ],
            });
            var isSliding = false;
            jQuery(sectionSlick).on("beforeChange", function () {
                isSliding = true;
            });
            jQuery(sectionSlick).on("afterChange", function () {
                isSliding = false;
            });
            jQuery(".hp-communities img").click(function (e) {
                if (isSliding) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                    return;
                }
            });
        },

        initSocial: function () {
            //code here
        },

        initContact: function () {
            //code here
        },
    };

    jQuery(document).ready(function () {
        app.initAos();
        app.initNavigation();

        app.initSlideshow();

        app.initProperties();


        app.initProcess();

        app.initWelcome();

        app.initTeam();
        app.teamMapHover();

        app.initCommunities();

        app.initSocial();

        app.initContact();
    });

    jQuery(window).on("scroll", function () {
        app.initDetectScroll();
    });

    jQuery(window).on("load", function () {
        setTimeout(function () {
            jQuery("a.introPopupTrigger").trigger("click");
            jQuery(".aios-popup-body").addClass("intro-popup-body");
        }, 1000);

        jQuery("header.header").css({ opacity: 1 });
    });

    jQuery(window).on("resize", function () {
        app.initTeam();
    });
})();
