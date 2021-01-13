const defaultDispCnt = 3; // 初期表示件数
const addDispCnt = 3; // 追加表示件数

//スライドの処理
$(function () {
    $('a[href^=#]').click(function () {
        var speed = 600;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - 70;
        $('body,html').animate({ scrollTop: position }, speed, 'swing');
        return false;
    });
});

(function (d) {
    var config = {
        kitId: 'tgl4lqh',
        scriptTimeout: 3000,
        async: true
    },
        h = d.documentElement, t = setTimeout(function () { h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive"; }, config.scriptTimeout), tk = d.createElement("script"), f = false, s = d.getElementsByTagName("script")[0], a; h.className += " wf-loading"; tk.src = 'https://use.typekit.net/' + config.kitId + '.js'; tk.async = true; tk.onload = tk.onreadystatechange = function () { a = this.readyState; if (f || a && a != "complete" && a != "loaded") return; f = true; clearTimeout(t); try { Typekit.load(config) } catch (e) { } }; s.parentNode.insertBefore(tk, s)
})(document);

//placeholderを今日の日付を入力
$(function () {
    var today = new Date();
    var dat = today.getFullYear() + "/" + (today.getMonth() + 1) + "/" + today.getDate();
    document.getElementsByName('text-476')[0].placeholder = dat;
});

//newsのスライド
$(function () {
    //swiper 735以下で起動
    var swiper;
    $(window).on('load resize', function () {
        var w = $(window).width();
        if (w <= 735) {
            if (swiper) {
                return;
            } else {
                swiper = new Swiper('.swiper-container', {
                    freeMode: true,
                    loop: false,
                    spaceBetween: 16,
                    width: 352,
                    slidesOffsetBefore: 16,
                    // slidesOffsetAfter: -32,
                    slidesPerView: 2
                });
            }
        } else {
            if (swiper) {
                swiper.destroy();
                swiper = undefined;
            }
        }
    });
});

//placeのスライド
$(function () {
    //swiper 735以下で起動
    var swiperPlace;
    $(window).on('load resize', function () {
        var w = $(window).width();
        if (w <= 735) {
            if (swiperPlace) {
                return;
            } else {
                swiperPlace = new Swiper('.swiper-container-place', {
                    freeMode: true,
                    loop: false,
                    spaceBetween: 20,
                    width: 304,
                    slidesOffsetBefore: 56,
                    slidesPerView: 1
                });
            }
        } else {
            if (swiperPlace) {
                swiperPlace.destroy();
                swiperPlace = undefined;
            }
        }
    });
});

//日付のplaceholderに今日の日付を代入
$(function () {
    $('#box_1').toggle();
    $('#btn-slide-toggle').click(function () {
        $('#box_1').slideToggle(650, 'swing');
    });
});

$(function () {
    $('#box_2').toggle();
    $('#btn-slide-toggle-2').click(function () {
        $('#box_2').slideToggle(650, 'swing');
    });
});

$(function () {
    $('#box_3').toggle();
    $('#btn-slide-toggle-3').click(function () {
        $('#box_3').slideToggle(650, 'swing');
    });
});

//headerのモーダルトグル
$(function () {
    var windowWidth = $(window).width();
    var windowSm = 750;
    if (windowWidth <= windowSm) {
        var tmp = document.getElementsByClassName("header_modal");
        var name = "header_slide";
        tmp[0].setAttribute("id", name);

        $('#header_slide').toggle();
        $('#menu_btn').click(function () {
            $('#header_slide').slideToggle(650, 'swing');
        });

        $("#header_slide a").on("click", function () {
            $("#header_slide").slideToggle(300);
            $("#menu_btn").toggleClass("active");
        });

        $("#menu_btn").on("click", function () {
            $(this).toggleClass("active");
            $(".modal-header").fadeToggle(700);
        })
    }
});


//varidate
$(function () {
    $('#reserve-form').validate({
        rules: {
            name: {
                required: true
            },
            kana: {
                required: true
            },
            phone: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            num: {
                required: true
            },
            date: {
                required: true
            },
            time: {
                required: true
            },
            smoke: {
                required: true
            },
            age: {
                required: true
            },
            type: {
                required: true
            },
        },
        messages: {
            name: {
                required: 'お名前を入力して下さい'
            },
            kana: {
                required: 'ふりがなを入力して下さい'
            },
            phone: {
                required: '電話番号を入力して下さい'
            },
            email: {
                required: 'emailを入力して下さい'
            },
            num: {
                required: '人数を入力して下さい'
            },
            date: {
                required: 'ご来店日を入力して下さい'
            },
            time: {
                required: '選択して下さい'
            },
            smoke: {
                required: '選択して下さい'
            },
            age: {
                required: '選択して下さい'
            },
            type: {
                required: '選択して下さい'
            }
        },
        errorPlacement: function (error, element) {
            error.appendTo(element.data('error_placement'));
        }
    });
});

//スマホのモーダルアニメーション
$(function () {
    if (window.matchMedia("(max-width: 750px)").matches) {
        $('a[href^=#]').click(function () {
            var speed = 600;
            var href = $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top - 55;
            $('body,html').animate({ scrollTop: position }, speed, 'swing');
            return false;
        });
    }
});

//footerのトグル
$(function () {
    var windowWidth = $(window).width();
    var windowSm = 750;
    if (windowWidth <= windowSm) {
        //footerのmodal
        $('#footer_slide').toggle();
        $('#footer-slide-toggle-1').click(function () {
            $('#footer_slide').slideToggle(650, 'swing');
        });

        $('#footer_slide_2').toggle();
        $('#footer-slide-toggle-2').click(function () {
            $('#footer_slide_2').slideToggle(650, 'swing');
        });
    }

});

//datapickerの処理
$(function () {

    $(function () {
        $.datepicker.setDefaults($.datepicker.regional['ja']);
        $('#datepicker').datepicker({
            dateFormat: 'yy-mm-dd',
            minDate: '+1d'
        });
    });

});

//トップ画像のスライドショー
$(document).on('ready', function () {
    $(".jumbtron").slick({
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 1500,
        fade: true,
        variableWidth: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
    });
});


(function ($) {
    $(function () {
        let maxDispCnt = 0; // 最大表示件数
        let currentDispCnt = 0; // 現在の表示件数
        let tileList = $('#fuga').children('#hoge'); // 一覧のli子要素をすべて取得

        // 一覧の初期表示
        $(tileList).each(function (i, elem) {
            // 初期表示件数のみ表示
            if (i < defaultDispCnt) {
                $(this).show();
                currentDispCnt++;
            }
            maxDispCnt++;

            // もっと見るボタンを表示
            let displayed = 0;
            if (maxDispCnt > currentDispCnt && !displayed) {
                $('.readMore').show();
                displayed = 1;
            }
        });

        jQuery(function () {
            jQuery(window).scroll(function () {
                jQuery('.fadein').each(function () {
                    var elemPos = jQuery(this).offset().top;
                    var scroll = jQuery(window).scrollTop();
                    var windowHeight = jQuery(window).height();
                    if (scroll > elemPos - windowHeight) {
                        jQuery(this).addClass('scrollin');
                    }
                });
            });
        });

        // もっと見るボタンクリックイベント
        $('.readMore').click(function () {
            let newCount = currentDispCnt + addDispCnt; // 新しく表示する件数

            // 新しく表示する件数のみ表示
            $(tileList).each(function (i, elem) {
                if (currentDispCnt <= i && i < newCount) {
                    $(this).show();
                    currentDispCnt++;
                }
            });

            // もっと見るボタンを非表示
            if (maxDispCnt <= newCount) {
                $(this).hide();
            }
            return false;
        });
    });
}(jQuery));