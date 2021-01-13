<?php get_header(); ?>
    <main>
        <section class="jumbtron" id="top">
            <div class="main01"></div>
            <div class="main02"></div>
            <div class="main03"></div>
        </section>

        <div class="take_out_btn">
            <button class="takeout_wrap" onclick="location.href='https://mmcoltd.wixsite.com/santachef'">
                <div class="take_out">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/takeout.svg" alt="" >
                    </div>
                    <div class="take_out_text">
                        テイクアウトは<br>こちら！
                    </div>
                </div>     
            </button>
        </div>

        <?php
            $instagram = null; // JSONデータ配列をここに格納
            $instagram_business_id = '17841405578027517'; // InstagramビジネスアカウントのID
            $access_token = 'EAAKmkuJTvFwBAM7JPQwzCBg3jIklfRZCyTkmcoL4E9LDS9MyRj9BB6KnOVMwxWZAxJwSwonE8CmOYUTz5g90RwQZCRjhVAo6pKui7WoXkQCCVziomsn76khXlUqZBL1FU3kmDaaJ4TuwusUve4MiS65oWWKjB8536sYF3ZAXcOUxwYbHZAUH5jg4rz9deUQxUZD'; // 有効期限無期限のアクセストークン
            $post_count = 5; // 表示件数
            $query = 'name,media.limit(' . $post_count. '){caption,like_count,media_url,permalink,timestamp,username,comments_count}';
            $get_url = 'https://graph.facebook.com/v5.0/' . $instagram_business_id . '?fields=' . $query . '&access_token=' . $access_token;
            
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $get_url);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  // curl_execの結果を文字列で返す
            $response = curl_exec($curl);
            curl_close($curl);
            
            if($response){
            $instagram = json_decode($response);
            if(isset($instagram->error)){
                $instagram = null;
            }
            }
        ?>

        <div class="news" id="news">
            <div class="container fadein">
                <div class="news_title">
                    <h2>
                        NEWS
                    </h2>
                </div>

                <div class="swiper-container">
                    <?php if(is_array($instagram->media->data)): ?>
                        <div class="news_container swiper-wrapper">
                            <?php
                                foreach($instagram->media->data as $post):
                                $caption = $post->caption;
                                $caption = preg_replace('/\n/', '<br>', $caption);
                            ?>
                            <a class="article_card swiper-slide" href="<?php echo $post->permalink; ?>" target="_blank" rel="noopener noreferrer">
                                <?php if($post->caption): ?>
                                    <div class="article_card_img">
                                        <img src="<?php if($post->media_type=='VIDEO'){ echo $post->thumbnail_url; }else{ echo $post->media_url; } ?>" alt="<?php echo $caption; ?>">
                                    </div>
                                    <div class="article_card_title">
                                        <?php 
                                            $capt=$post->caption;
                                            $capt = mb_strimwidth($capt, 0, 135, '', 'UTF-8');
                                            echo $capt;
                                        ?>
                                    </div>
                                    <div class="article_card_title_sp">
                                        <?php 
                                            $capt=$post->caption;
                                            $capt = mb_strimwidth($capt, 0, 56, '', 'UTF-8');
                                            echo $capt;
                                        ?>
                                    </div>
                                    <div class="article_card_data">
                                        <?php
                                            $time=$post->timestamp; 
                                            echo date('Y/m/d', strtotime($time));
                                        ?>
                                    </div>                        
                                <?php endif; ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="more">
                    <a href="https://www.instagram.com/restaurant.arpege1990/">
                        <div class="more_btn">
                            MORE
                        </div>
                    </a>
                </div>

            </div>
        </div>

        <div class="concept" id="concept">
            <div class="container fadein">
                <div class="concept_title">
                    <h2>
                        CONCEPT
                    </h2>
                </div>

                <div class="concept_section">
                    
                    <div class="concept_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/concept/no2.jpg" alt="arpege-place" >
                    </div>

                    <div class="concept_wrap">
                    
                        <div class="concept_img_sp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/concept/no2.jpg" alt="arpege-place" >
                        </div>

                        <div class="concept_text">
                            <h3>
                                世界各国２００本以上のワイン<br>
                                食材に拘った自家製料理<br>
                                ちょっと贅沢な大人のビストロ
                            </h3>
                        </div>

                        <div class="concept_sentence">
                            <p>
                                JR宇都宮駅から徒歩１分の場所にある<br class="br_pc">
                                赤いテントが目印の洒落たビストロ。<br class="br_pc">
                                一歩店内に踏み入れると、<br class="br_pc">
                                パリに訪れたような気分を味わます。<br class="br_pc">
                            </p>
                        </div>

                        <div class="concept_sentence">
                            <p>
                                本店フレンチの料理を活かしつつ、<br class="br_pc">
                                ワイン等のお酒に合わせて<br class="br_pc">
                                ビストロスタイルの料理にアレンジ<br class="br_pc">
                                特に肉料理が自慢で、種類も豊富<br class="br_pc">
                                ソースや付け合わせにも拘っております。
                                <br class="br_pc">
                                

                            </p>
                        </div>

                        <div class="concept_sentence">
                            <p>
                                料理もお酒もメニューが豊富にあるので<br class="br_pc">
                                様々なシーンに合わせてご利用頂けます。
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="menu" id="menu">
            <div class="container fadein">
                <div class="menu_title">
                    <h2>
                        MENU
                    </h2>
                </div>
            </div>       

                <div class="menu_top_img fadein">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section/no1.jpg" alt="">
                </div>

             <div class="container">
                <div class="menu_wrap fadein" id="btn-slide-toggle">

                    <div class="menu_img">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/no1.jpg" alt="">
                    </div>

                    <div class="menu_title_wrap" >

                        <div class="menu_info">
                            <div class="menu_text">
                                <h3>
                                    LUNCH
                                </h3>
                            </div>
                            <div class="menu_text_sm">
                                <p>
                                    ランチ
                                </p>
                            </div>
                        </div>
                        <div class="menu_arrow">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/arrow_menu.svg" alt="">
                        </div>
                    </div>

                </div>

                <div class="menu_dt_wrap" id="box_1">
                    <div class="menu_time_wrap">
                        <div class="menu_time_title">
                             <span class="semi_bold">TIME </span><span class="regular">11:30 - 15:00 </span><span class="italic">(L.O.14:15)</span>
                        </div>
                    </div>
                    <div class="menu_course_wrap">
                        <div class="menu_course">
                            <div class="menu_art_section">
                                <div class="menu_art_en">
                                    <P>
                                        季節のパスタランチ
                                    </P>
                                </div>
                                <div class="menu_art_jp">
                                    <P>
                                        毎週変わる６種類の季節のパスタ。<br class="br_sp">トマト・クリーム・オイル・和風等様々
                                    </P>
                                </div>
                            </div>
                            <div class="menu_price">
                                <p>
                                    ￥1,200
                                </p>
                            </div>
                        </div>

                         <div class="menu_course">
                            <div class="menu_art_section">
                                <div class="menu_art_en">
                                    <P>
                                        今週の若鶏ランチ
                                    </P>
                                </div>
                                <div class="menu_art_jp">
                                    <P>
                                        白ワインで一晩マリネをした特製モモ肉。<br class="br_sp">毎週違うスタイルでご提供致します
                                    </P>
                                </div>
                            </div>
                            <div class="menu_price">
                                <p>
                                    ￥1,200
                                </p>
                            </div>
                        </div>

                        <div class="menu_course">
                            <div class="menu_art_section">
                                <div class="menu_art_en">
                                    <P>
                                        ビストロのハンバーグランチ
                                    </P>
                                </div>
                                <div class="menu_art_jp">
                                    <P>
                                        和牛を使用した拘りの配合の合挽肉。<br class="br_sp">自家製のデミグラスor和風ソースで
                                    </P>
                                </div>
                            </div>
                            <div class="menu_price">
                                <p>
                                    ￥1,300
                                </p>
                            </div>
                        </div>

                        <div class="menu_course">
                            <div class="menu_art_section">
                                <div class="menu_art_en">
                                    <P>
                                        今週の真鯛ランチ
                                    </P>
                                </div>
                                <div class="menu_art_jp">
                                    <P>
                                        愛媛県産の活〆真鯛を贅沢に使用。<br class="br_sp">毎週変更になる様々なソースで
                                    </P>
                                </div>
                            </div>
                            <div class="menu_price">
                                <p>
                                    ￥1,500
                                </p>
                            </div>
                        </div>

                        <div class="menu_course">
                            <div class="menu_art_section">
                                <div class="menu_art_en">
                                    <P>
                                       那須熟成豚のステーキランチ
                                    </P>
                                </div>
                                <div class="menu_art_jp">
                                    <P>
                                        栃木県産の豚肉をしっかりと熟成。<br class="br_sp">旨味と香り、柔らかさが違います。
                                    </P>
                                </div>
                            </div>
                            <div class="menu_price">
                                <p>
                                    ￥1,600
                                </p>
                            </div>
                        </div>

                        <div class="menu_course">
                            <div class="menu_art_section">
                                <div class="menu_art_en">
                                    <P>
                                        牛サーロインステーキランチ
                                    </P>
                                </div>
                                <div class="menu_art_jp">
                                    <P>
                                        脂身の多すぎない肉厚サーロイン<br class="br_sp">胡麻風味の特製ステーキソース
                                    </P>
                                </div>
                            </div>
                            <div class="menu_price">
                                <p>
                                    ￥2,000
                                </p>
                            </div>
                        </div>

                        <div class="menu_course">
                            <div class="menu_art_section">
                                <div class="menu_art_en">
                                    <P>
                                        牛フィレ肉のポワレランチ
                                    </P>
                                </div>
                                <div class="menu_art_jp">
                                    <P>
                                        筋身の無い非常に柔らかな部位<br class="br_sp">さっぱりとした和風ソース
                                    </P>
                                </div>
                            </div>
                            <div class="menu_price">
                                <p>
                                    ￥2,000
                                </p>
                            </div>
                        </div>

                        <div class="menu_course">
                            <div class="menu_art_section">
                                <div class="menu_art_en">
                                    <P>
                                        その他、ランチコース等も<br class="br_sp">ご用意しております
                                    </P>
                                </div>
                                <div class="menu_art_jp">
                                    <P>
                                        ハーフコース ￥3,000 / フルコース ￥4,000
                                    </P>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu_wrap_dinner fadein" id="btn-slide-toggle-2">

                    <div class="menu_img_dn">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/no2.jpg" alt="">
                    </div>

                     <div class="menu_title_wrap" >

                        <div class="menu_info">
                            <div class="menu_text">
                                <h3>
                                    DINNER
                                </h3>
                            </div>
                            <div class="menu_text_sm">
                                <p>
                                    ディナー
                                </p>
                            </div>
                        </div>
                        <div class="menu_arrow">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/arrow_menu.svg" alt="">
                        </div>
                    </div>

                </div>

                <div class="menu_dt_wrap" id="box_2">
                    <div class="menu_time_wrap">
                        <div class="menu_time_title_dn">
                             <span class="semi_bold">TIME </span><span class="regular">17:00 - 22:00 </span><span class="italic">(L.O.21:00)</span>
                        </div>
                    </div>
                    <div class="menu_course_wrap">
                        <div class="menu_course">
                            <div class="menu_art_section">
                                <div class="menu_art_en">
                                    <P>
                                        Préfixe Dumi<br class="br_sp">デュミ・プリフィックス <span class="price">〔6皿〕</span>
                                    </P>
                                </div>
                                <div class="menu_art_jp">
                                    <P>
                                        メイン料理が選べるハーフコース。<br class="br_sp">魚料理もしくは肉料理からお選び下さい
                                    </P>
                                </div>
                            </div>
                            <div class="menu_price">
                                <p>
                                    ￥3,000
                                </p>
                            </div>
                        </div>

                         <div class="menu_course">
                            <div class="menu_art_section">
                                <div class="menu_art_en">
                                    <P>
                                        Préfixe<br class="br_sp">プリフィックス <span class="price">〔7皿〕</span>
                                    </P>
                                </div>
                                <div class="menu_art_jp">
                                    <P>
                                        メイン料理が選べるフルコース。<br class="br_sp">お好みの料理を召し上がりたい方にお勧めです
                                    </P>
                                </div>
                            </div>
                            <div class="menu_price">
                                <p>
                                    ￥4,000
                                </p>
                            </div>
                        </div>

                        <div class="menu_course">
                            <div class="menu_art_section">
                                <div class="menu_art_en">
                                    <P>
                                        Gourmand<br class="br_sp">グルマン<span class="price">〔9皿〕</span>
                                    </P>
                                </div>
                                <div class="menu_art_jp">
                                    <P>
                                        世界三大珍味をお気軽にお楽しみ頂けるコース
                                    </P>
                                </div>
                            </div>
                            <div class="menu_price">
                                <p>
                                    ￥5,500
                                </p>
                            </div>
                        </div>

                        <div class="menu_course">
                            <div class="menu_art_section">
                                <div class="menu_art_en">
                                    <P>
                                        Svenird Paris<br class="br_sp">スヴニールドパリ<span class="price">〔12皿〕</span>
                                    </P>
                                </div>
                                <div class="menu_art_jp">
                                    <P>
                                        世界三大珍味はもちろん、パリ修行時代の思い出を詰め込んだコース
                                    </P>
                                </div>
                            </div>
                            <div class="menu_price">
                                <p>
                                    ￥8,800
                                </p>
                            </div>
                        </div>

                        <div class="menu_course">
                            <div class="menu_art_section">
                                <div class="menu_art_en">
                                    <P>
                                       Spécial anniversaire<br class="br_sp">スペシャルアニバーサリー <span class="price">〔12皿〕</span>
                                    </P>
                                </div>
                                <div class="menu_art_jp">
                                    <P>
                                        特別な日の為にご用意するスペシャルコース。<br class="br_sp">前々日迄のご予約限定となります
                                    </P>
                                </div>
                            </div>
                            <div class="menu_price">
                                <p>
                                    ￥13,200
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="menu_wrap_party fadein" id="btn-slide-toggle-3">

                    <div class="menu_img">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/no3.jpg" alt="">
                    </div>

                    <div class="menu_title_wrap" >
                        <div class="menu_info">
                            <div class="menu_text">
                                <h3>
                                    PARTY
                                </h3>
                            </div>
                            <div class="menu_text_sm">
                                <p>
                                    パーティー
                                </p>
                            </div>
                        </div>
                        <div class="menu_arrow">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/arrow_menu.svg" alt="">
                        </div>
                    </div>

                </div>
                
                <div class="menu_dt_wrap" id="box_3">
                    <div class="menu_time_wrap">
                        <div class="menu_time_title_pt">
                             <span class="semi_bold">TIME </span><span class="regular">11:30 - 20:00 </span><span class="italic">(L.O.21:00)</span>
                        </div>
                    </div>
                    <div class="menu_course_wrap">
                        <div class="menu_course">
                            <div class="menu_art_section">
                                <div class="menu_art_en">
                                    <P>
                                        Cours Blue <br class="br_sp">コース・ブルー<span class="price">〔8皿〕</span>
                                    </P>
                                </div>
                                <div class="menu_art_jp">
                                    <P>
                                        １２０分フリードリンク　<br class="br_sp">一番リーズナブルなパーティープラン。
                                    </P>
                                </div>
                            </div>
                            <div class="menu_price">
                                <p>
                                    ￥5,000
                                </p>
                            </div>
                        </div>

                         <div class="menu_course">
                            <div class="menu_art_section">
                                <div class="menu_art_en">
                                    <P>
                                        Cours Blanc <br class="br_sp">コース・ブラン<span class="price">〔9皿〕</span>
                                    </P>
                                </div>
                                <div class="menu_art_jp">
                                    <P>
                                        １２０分フリードリンク　<br class="br_sp">人気メニューが食べられる定番プラン
                                    </P>
                                </div>
                            </div>
                            <div class="menu_price">
                                <p>
                                    ￥6,000
                                </p>
                            </div>
                        </div>

                        <div class="menu_course">
                            <div class="menu_art_section">
                                <div class="menu_art_en">
                                    <P>
                                        Cours Rouge <br class="br_sp">コース・ルージュ<span class="price">〔10皿〕</span>
                                    </P>
                                </div>
                                <div class="menu_art_jp">
                                    <P>
                                        １２０分フリードリンク　<br class="br_sp">高級な食材を使用した贅沢プラン
                                    </P>
                                </div>
                            </div>
                            <div class="menu_price">
                                <p>
                                    ￥7,000
                                </p>
                            </div>
                        </div>

                        <div class="menu_course">
                            <div class="menu_art_section">
                                <div class="menu_art_en">
                                    <P>
                                        Cours spécial <br class="br_sp">コース・スペシャル<span class="price">〔11皿〕</span>
                                    </P>
                                </div>
                                <div class="menu_art_jp">
                                    <P>
                                      １２０分フリードリンク　<br class="br_sp">予約限定。特別な食材等を使用
                                    </P>
                                </div>
                            </div>
                            <div class="menu_price">
                                <p>
                                    ￥10,000
                                </p>
                            </div>
                        </div>

                    </div>
                
                </div>
                             
            </div>
        </div>

        <div class="place" id="place">
                <div class="container fadein">
                    <div class="place_title">
                        <h2>
                            PLACE
                        </h2>
                    </div>
                </div>

                <div class="place_top_img fadein">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/section/no2.jpg" alt="arpege_info">
                </div>
            
            <div class="container fadein">
                <div class="place_text">
                    <h3>
                        店内のご案内
                    </h3>
                </div>

                <div class="place_section">
                    <p>
                        広々としたフロア席の他に<br class="br_sp">ワイン棚で仕切られた半個室が２つ<br class="br_pc">配置を変えて様々なシーンに対応可能
                    </p>
                </div>

                <div class="place_wrap swiper-container-place">
                    <div class="swiper-wrapper">
                        <div class="place_card swiper-slide">
                            <div class="place_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/place/no1.jpg" alt="arpege_place">
                            </div>
                            <div class="place_card_title">
                                <h3>
                                    半個室
                                </h3>
                            </div>
                            <div class="place_card_title_sub sm">
                                窓際
                            </div>
                            <div class="place_card_text">
                                <p>
                                    ４名席＆２名席<br>貸切の場合は<br>４名様～８名様迄
                                </p>
                            </div>
                        </div>
    
                        <div class="place_card swiper-slide">
                            <div class="place_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/place/no2.jpg" alt="arpege_place">
                            </div>
                            <div class="place_card_title">
                                <h3>
                                    半個室
                                </h3>
                            </div>
                            <div class="place_card_title_sub sm">
                                店内奥
                            </div>
                            <div class="place_card_text">
                                <p>
                                    ４名席が２つ<br>貸切の場合は<br>６名様～１０名様迄
                                </p>
                            </div>
                        </div>
    
                        <div class="place_card swiper-slide">
                            <div class="place_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/place/no3.jpg" alt="arpege_place">
                            </div>
                            <div class="place_card_title">
                                <h3>
                                    カウンター席
                                </h3>
                            </div>
                            <div class="place_card_title_sub sm">
                                Champs-Élysées
                            </div>
                            <div class="place_card_text">
                                <p>
                                    最大４名様迄<br>広々とした１枚板の<br>重厚なカウンター席
                                </p>
                            </div>
                        </div>
    
                        <div class="place_card swiper-slide">
                            <div class="place_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/place/no4.jpg" alt="arpege_place">
                            </div>
                            <div class="place_card_title">
                                <h3>
                                    フロア席
                                </h3>
                            </div>
                            <div class="place_card_title_sub sm">
                                入り口側
                            </div>
                            <div class="place_card_text">
                                <p>
                                    大小様々なテーブル席<br>ゆったりと出来る<br>大き目のテーブル<br>
                                </p>
                            </div>
                        </div>
    
                        <div class="place_card swiper-slide">
                            <div class="place_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/place/no5.jpg" alt="arpege_place">
                            </div>
                            <div class="place_card_title">
                                <h3>
                                    フロア席
                                </h3>
                            </div>
                            <div class="place_card_title_sub sm">
                                ホテル側
                            </div>
                            <div class="place_card_text">
                                <p>
                                    大小様々なテーブル席<br>１列に繋げると<br>１４名様程の席に
                                </p>
                            </div>
                        </div>
    
                        <div class="place_card swiper-slide">
                            <div class="place_card_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/place/no6.jpg" alt="arpege_place">
                            </div>
                            <div class="place_card_title">
                                <h3>
                                    テラス席
                                </h3>
                            </div>
                            <div class="place_card_title_sub sm">
                                テラス
                            </div>
                            <div class="place_card_text">
                                <p>
                                ４名席が２つ<br>天気の良い日は是非<br>ペット連れもＯＫな席
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>    


        <div class="info fadein" id="info">
            <div class="info_title_wrap">
            </div>
            
            <div class="container fadein">
                <div class="info_title">
                    <h2>
                        INFO&nbsp;&&nbsp;ACCESS
                    </h2>
                </div>
                <div class="info_wrap">
                    <div class="info_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/access/no3.jpg" alt="">
                    </div>
                    <div class="info_detail">
                        <div class="shop_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo_02.png" alt="">
                        </div>
                        <div class="info_arpege">
                            <h4>
                                ビストロ・キャトルズ
                            </h4>
                        </div>

                        <div class="ordertime_wrap">
                            <div class="info_lunch_wrap">
                                <div class="info_lunch_title">
                                    Lunch
                                </div>
                                <div class="info_lunch_box">
                                    <div class="info_lunch_text">
                                        11:30&nbsp;-&nbsp;15:00 <span class="lo_sm">《L.O. 14:15》</span>
                                    </div>
                                    <div class="info_lunch_text_sm">
                                        ランチ&nbsp; ¥1,080
                                    </div>
                                </div>
                            </div>

                            <div class="info_dinner_wrap">
                                <div class="info_dinner_title">
                                    Dinner
                                </div>
                                <div class="info_dinner_box">
                                    <div class="info_dinner_text">
                                        17:00&nbsp;-&nbsp;22:00 <span class="lo_sm">《L.O. 21:00》</span> 
                                    </div>
                                    <div class="info_dinner_text_sm">
                                        フルコース &nbsp; ¥4,000&nbsp;/&nbsp;¥5,500&nbsp;/&nbsp;¥8,800
                                    </div>
                                    <div class="info_dinner_text_sm">
                                        ハーフコース &nbsp; ¥3,000
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="info_section">
                            <div class="info_content">
                                <div class="address_title">
                                    <h4 class="weight-400">
                                        住所
                                    </h4>
                                </div>
                                <div class="address info_color">
                                    栃木県宇都宮市駅前通り１丁目５−２
                                </div>
                            </div>
        
                            <div class="info_content">
                                <div class="tel_title">
                                    <h4 class="weight-400">
                                        TEL&nbsp;/&nbsp;FAX
                                    </h4>
                                </div>
                                <div class="tell info_color">
                                    028-680-7526&nbsp;/&nbsp;028-680-7526
                                </div>
                            </div>
        
                            <div class="info_content">
                                <div class="holiday_title">
                                    <h4 class="weight-400">
                                        定休日
                                    </h4>
                                </div>
                                <div class="holiday info_color">
                                火曜日,第二月曜日&nbsp;※臨時休日あり｡　<br>
                                    遠方より御来店の際は事前にご確認ください｡
                                </div>
                            </div>
        
                            <div class="info_content">
                                <div class="parking_title">
                                    <h4 class="weight-400">
                                        駐車場
                                    </h4>
                                </div>
                                <div class="parking info_color">
                                    なし (近隣のコインパーキングをご利用下さい)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="map">
                <div class="access fadein" style="background-color: rgb(238, 241, 247)">
                    <div class="map-img">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d400.5371842037212!2d139.87957399178885!3d36.57104868522311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f50.1!3m3!1m2!1s0x601f67b49b3a1f4d%3A0xf006ec5625be7a8c!2z44Ki44Or44Oa44O844K444Ol!5e0!3m2!1sja!2sjp!4v1563463208340!5m2!1sja!2sjp"
                            width="100%" height="976px" frameborder="0" style="border:0" allowfullscreen>
                        </iframe>
                    </div>
                    <div class="map-img-sp">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d400.5371842037212!2d139.87957399178885!3d36.57104868522311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f50.1!3m3!1m2!1s0x601f67b49b3a1f4d%3A0xf006ec5625be7a8c!2z44Ki44Or44Oa44O844K444Ol!5e0!3m2!1sja!2sjp!4v1563463208340!5m2!1sja!2sjp"
                            width="100%" height="384px" frameborder="0" style="border:0" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="reserve" id="reserve">
            <div class="container fadein">
                <div class="reserve_title">
                    <h2>
                        RESERVATION
                    </h2>
                </div>
                
                <div class="tel_reception">
                    <h4>
                        お電話
                    </h4>
                    <a href="tel:0286505543">
                        <h1 class="tel_num">028-680-7526</h1>
                    </a>
                    <div class="attention_reserve" >
                        <p>《 電話受付時間 》<br> <span class="weight-400 ls-attention">10時 ～ 21時<br>　※火曜日・第二月曜日定休・その他不定休あり</span> </p>
                    </div>
                </div>

                <div class="reserve_container">
                    <?php echo do_shortcode('[contact-form-7 id="5" title="コンタクトフォーム 1"]'); ?>                
                 
                </div>

            </div>
        </div>

    </main>
<?php get_footer(); ?>




