<?php

$sql = "SET @coid = (SELECT countries_id FROM " . TABLE_COUNTRIES . " WHERE countries_iso_code_3 = 'JPN' ORDER BY countries_id DESC LIMIT 1);";
$this->executeInstallerSql($sql);

// Delete file number: 2504
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6028103' AND zone_name = '京都府' AND zone_city_name = '京都市上京区' AND zone_street_name LIKE '一町目%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6028135' AND zone_name = '京都府' AND zone_city_name = '京都市上京区' AND zone_street_name LIKE '三町目%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6028137' AND zone_name = '京都府' AND zone_city_name = '京都市上京区' AND zone_street_name LIKE '大黒町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6028286' AND zone_name = '京都府' AND zone_city_name = '京都市上京区' AND zone_street_name LIKE '玉屋町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6028128' AND zone_name = '京都府' AND zone_city_name = '京都市上京区' AND zone_street_name LIKE '二町目%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6028066' AND zone_name = '京都府' AND zone_city_name = '京都市上京区' AND zone_street_name LIKE '東橋詰町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6008050' AND zone_name = '京都府' AND zone_city_name = '京都市下京区' AND zone_street_name LIKE '堅田町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6008089' AND zone_name = '京都府' AND zone_city_name = '京都市下京区' AND zone_street_name LIKE '堅田町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6008060' AND zone_name = '京都府' AND zone_city_name = '京都市下京区' AND zone_street_name LIKE '雁金町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6008393' AND zone_name = '京都府' AND zone_city_name = '京都市下京区' AND zone_street_name LIKE '雁金町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6008252' AND zone_name = '京都府' AND zone_city_name = '京都市下京区' AND zone_street_name LIKE '川端町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6008382' AND zone_name = '京都府' AND zone_city_name = '京都市下京区' AND zone_street_name LIKE '塩屋町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6008042' AND zone_name = '京都府' AND zone_city_name = '京都市下京区' AND zone_street_name LIKE '俵屋町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6008053' AND zone_name = '京都府' AND zone_city_name = '京都市下京区' AND zone_street_name LIKE '塗師屋町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6008193' AND zone_name = '京都府' AND zone_city_name = '京都市下京区' AND zone_street_name LIKE '骨屋町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6008037' AND zone_name = '京都府' AND zone_city_name = '京都市下京区' AND zone_street_name LIKE '丸屋町%'");

// Add file number: 2504
$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamagata' AND zone_country_id = @coid), 0),'9902379','山形県','山形市','替所','Yamagata','Yamagata Shi','Kaesho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6028103','京都府','京都市上京区','一町目','Kyoto','Kyoto Shi Kamigyo Ku','Itchome'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6028135','京都府','京都市上京区','三町目','Kyoto','Kyoto Shi Kamigyo Ku','Sanchome'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6028137','京都府','京都市上京区','大黒町','Kyoto','Kyoto Shi Kamigyo Ku','Daikokucho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6028286','京都府','京都市上京区','玉屋町','Kyoto','Kyoto Shi Kamigyo Ku','Tamayacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6028128','京都府','京都市上京区','二町目','Kyoto','Kyoto Shi Kamigyo Ku','Nichome'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6028066','京都府','京都市上京区','東橋詰町','Kyoto','Kyoto Shi Kamigyo Ku','Higashihashizumecho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6008050','京都府','京都市下京区','堅田町','Kyoto','Kyoto Shi Shimogyo Ku','Katadacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6008089','京都府','京都市下京区','堅田町','Kyoto','Kyoto Shi Shimogyo Ku','Katadacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6008060','京都府','京都市下京区','雁金町','Kyoto','Kyoto Shi Shimogyo Ku','Kariganecho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6008393','京都府','京都市下京区','雁金町','Kyoto','Kyoto Shi Shimogyo Ku','Kariganecho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6008252','京都府','京都市下京区','川端町','Kyoto','Kyoto Shi Shimogyo Ku','Kawabatacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6008382','京都府','京都市下京区','塩屋町','Kyoto','Kyoto Shi Shimogyo Ku','Shioyacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6008042','京都府','京都市下京区','俵屋町','Kyoto','Kyoto Shi Shimogyo Ku','Tawarayacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6008053','京都府','京都市下京区','塗師屋町','Kyoto','Kyoto Shi Shimogyo Ku','Nushiyacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6008193','京都府','京都市下京区','骨屋町','Kyoto','Kyoto Shi Shimogyo Ku','Honeyacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6008037','京都府','京都市下京区','丸屋町','Kyoto','Kyoto Shi Shimogyo Ku','Maruyacho')
";
$this->executeInstallerSql($sql);

// Delete file number: 2505
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0990123' AND zone_name = '北海道' AND zone_city_name = '紋別郡遠軽町' AND zone_street_name LIKE '白滝上支湧別%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0990121' AND zone_name = '北海道' AND zone_city_name = '紋別郡遠軽町' AND zone_street_name LIKE '白滝北支湧別%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0990122' AND zone_name = '北海道' AND zone_city_name = '紋別郡遠軽町' AND zone_street_name LIKE '白滝支湧別%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5900809' AND zone_name = '大阪府' AND zone_city_name = '堺市堺区' AND zone_street_name LIKE '旭ケ丘北町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5900808' AND zone_name = '大阪府' AND zone_city_name = '堺市堺区' AND zone_street_name LIKE '旭ケ丘中町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5900807' AND zone_name = '大阪府' AND zone_city_name = '堺市堺区' AND zone_street_name LIKE '旭ケ丘南町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5900011' AND zone_name = '大阪府' AND zone_city_name = '堺市堺区' AND zone_street_name LIKE '香ケ丘町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5900812' AND zone_name = '大阪府' AND zone_city_name = '堺市堺区' AND zone_street_name LIKE '霞ケ丘町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5900021' AND zone_name = '大阪府' AND zone_city_name = '堺市堺区' AND zone_street_name LIKE '北三国ケ丘町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5900022' AND zone_name = '大阪府' AND zone_city_name = '堺市堺区' AND zone_street_name LIKE '中三国ケ丘町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5900028' AND zone_name = '大阪府' AND zone_city_name = '堺市堺区' AND zone_street_name LIKE '三国ケ丘御幸通%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5900023' AND zone_name = '大阪府' AND zone_city_name = '堺市堺区' AND zone_street_name LIKE '南三国ケ丘町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5938303' AND zone_name = '大阪府' AND zone_city_name = '堺市西区' AND zone_street_name LIKE '上野芝向ケ丘町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5900125' AND zone_name = '大阪府' AND zone_city_name = '堺市南区' AND zone_street_name LIKE '鉢ケ峯寺%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5918046' AND zone_name = '大阪府' AND zone_city_name = '堺市北区' AND zone_street_name LIKE '東三国ケ丘町%'");

// Add file number: 2505
$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0990123','北海道','紋別郡遠軽町','白滝上支湧別','Hokkaido','Monbetsu Gun Engaru Cho','Shirataki Kamishiyubetsu'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0990121','北海道','紋別郡遠軽町','白滝北支湧別','Hokkaido','Monbetsu Gun Engaru Cho','Shirataki Kitashiyubetsu'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0990122','北海道','紋別郡遠軽町','白滝支湧別','Hokkaido','Monbetsu Gun Engaru Cho','Shirataki Shiyubetsu'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5900809','大阪府','堺市堺区','旭ヶ丘北町','Osaka','Sakai Shi Sakai Ku','Asahigaoka Kitamachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5900808','大阪府','堺市堺区','旭ヶ丘中町','Osaka','Sakai Shi Sakai Ku','Asahigaoka Nakamachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5900807','大阪府','堺市堺区','旭ヶ丘南町','Osaka','Sakai Shi Sakai Ku','Asahigaoka Minamimachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5900011','大阪府','堺市堺区','香ヶ丘町','Osaka','Sakai Shi Sakai Ku','Kaorigaokacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5900812','大阪府','堺市堺区','霞ヶ丘町','Osaka','Sakai Shi Sakai Ku','Kasumigaokacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5900021','大阪府','堺市堺区','北三国ヶ丘町','Osaka','Sakai Shi Sakai Ku','Kitamikunigaokacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5900022','大阪府','堺市堺区','中三国ヶ丘町','Osaka','Sakai Shi Sakai Ku','Nakamikunigaokacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5900028','大阪府','堺市堺区','三国ヶ丘御幸通','Osaka','Sakai Shi Sakai Ku','Mikunigaokamiyukidori'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5900023','大阪府','堺市堺区','南三国ヶ丘町','Osaka','Sakai Shi Sakai Ku','Minamimikunigaokacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5938303','大阪府','堺市西区','上野芝向ヶ丘町','Osaka','Sakai Shi Nishii Ku','Uenoshibamukogaokacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5900125','大阪府','堺市南区','鉢ヶ峯寺','Osaka','Sakai Shi Minami Ku','Hachigamineji'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5918046','大阪府','堺市北区','東三国ヶ丘町','Osaka','Sakai Shi Kita Ku','Higashimikunigaokacho')
";
$this->executeInstallerSql($sql);

// Delete file number: 2506
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '9900017' AND zone_name = '山形県' AND zone_city_name = '山形市' AND zone_street_name LIKE '上宝沢%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8470043' AND zone_name = '佐賀県' AND zone_city_name = '唐津市' AND zone_street_name LIKE '新興町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8470816' AND zone_name = '佐賀県' AND zone_city_name = '唐津市' AND zone_street_name LIKE '新興町%'");

// Add file number: 2506
$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamagata' AND zone_country_id = @coid), 0),'9900880','山形県','山形市','上江','Yamagata','Yamagata Shi','Uwae'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamagata' AND zone_country_id = @coid), 0),'9902309','山形県','山形市','上宝沢','Yamagata','Yamagata Shi','Kamihozawa'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamagata' AND zone_country_id = @coid), 0),'9900017','山形県','山形市','上宝沢','Yamagata','Yamagata Shi','Kamihozawa'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamagata' AND zone_country_id = @coid), 0),'9902387','山形県','山形市','後明','Yamagata','Yamagata Shi','Gomyo'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamagata' AND zone_country_id = @coid), 0),'9902336','山形県','山形市','蔵王野際','Yamagata','Yamagata Shi','Zaonogiwa'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamagata' AND zone_country_id = @coid), 0),'9900078','山形県','山形市','大野目町','Yamagata','Yamagata Shi','Dainomemachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamagata' AND zone_country_id = @coid), 0),'9900840','山形県','山形市','柳田','Yamagata','Yamagata Shi','Yanagida'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Okayama' AND zone_country_id = @coid), 0),'7014217','岡山県','瀬戸内市','邑久町立坂','Okayama','Setochi Shi','Okuchotatesaka'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Saga' AND zone_country_id = @coid), 0),'8470818','佐賀県','唐津市','新興町','Saga','Karatsu Shi','Shinkomachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Okinawa' AND zone_country_id = @coid), 0),'9040317','沖縄県','中頭郡読谷村','ときわ','Okinawa','Nakagami Gun Yomitan Son','Tokiwa')
";
$this->executeInstallerSql($sql);

// Delete file number: 2507
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '9402416' AND zone_name = '新潟県' AND zone_city_name = '長岡市' AND zone_street_name LIKE '与板町槇原%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8710104' AND zone_name = '大分県' AND zone_city_name = '中津市' AND zone_street_name LIKE '三光諫山%'");

// Add file number: 2507
$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Iwate' AND zone_country_id = @coid), 0),'0200056','岩手県','盛岡市','太田','Iwate','Morioka Shi','Ota'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Ibaraki' AND zone_country_id = @coid), 0),'3060506','茨城県','坂東市','さしま台','Ibaraki','Bando Shi','Sashimadai'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9402416','新潟県','長岡市','与板町槙原','Niigata','Nagaoka Shi','Yoitamachi Makihara'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aichi' AND zone_country_id = @coid), 0),'4440830','愛知県','岡崎市','柱西','Aichi','Okazaki Shi','Hashiranishi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aichi' AND zone_country_id = @coid), 0),'4440829','愛知県','岡崎市','針崎西','Aichi','Okazaki Shi','Harisakinishi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aichi' AND zone_country_id = @coid), 0),'4440820','愛知県','岡崎市','若松西','Aichi','Okazaki Shi','Wakamatsunishi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8710104','大分県','中津市','三光諌山','Oita','Nakatsu Shi','Sanko Isayama')
";
$this->executeInstallerSql($sql);

// Delete file number: 2508
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0611414' AND zone_name = '北海道' AND zone_city_name = '恵庭市' AND zone_street_name LIKE '漁町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8760824' AND zone_name = '大分県' AND zone_city_name = '佐伯市' AND zone_street_name LIKE '新女島%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8760823' AND zone_name = '大分県' AND zone_city_name = '佐伯市' AND zone_street_name LIKE '女島%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8760825' AND zone_name = '大分県' AND zone_city_name = '佐伯市' AND zone_street_name LIKE '女島団地%'");

// Add file number: 2508
$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0611414','北海道','恵庭市','漁町','Hokkaido','Eniwa Shi','Izarimachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukuoka' AND zone_country_id = @coid), 0),'8114308','福岡県','遠賀郡遠賀町','駅みなみ','Fukuoka','Onga Gun Onga Cho','Ekiminami'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8760824','大分県','佐伯市','新女島','Oita','Saiki Shi','Shinmejima'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8760823','大分県','佐伯市','女島','Oita','Saiki Shi','Mejima')
";
$this->executeInstallerSql($sql);

// Delete file number: 2509
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0591374' AND zone_name = '北海道' AND zone_city_name = '苫小牧市' AND zone_street_name LIKE '晴海町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '2540903' AND zone_name = '神奈川県' AND zone_city_name = '平塚市' AND zone_street_name LIKE '河内%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '2540902' AND zone_name = '神奈川県' AND zone_city_name = '平塚市' AND zone_street_name LIKE '徳延%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '2540901' AND zone_name = '神奈川県' AND zone_city_name = '平塚市' AND zone_street_name LIKE '纒%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '9231272' AND zone_name = '石川県' AND zone_city_name = '能美郡川北町' AND zone_street_name LIKE '下田子島%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '4700343' AND zone_name = '愛知県' AND zone_city_name = '豊田市' AND zone_street_name LIKE '浄水町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8380125' AND zone_name = '福岡県' AND zone_city_name = '小郡市' AND zone_street_name LIKE '二タ%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8191301' AND zone_name = '福岡県' AND zone_city_name = '糸島市' AND zone_street_name LIKE '志摩井田原%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8191312' AND zone_name = '福岡県' AND zone_city_name = '糸島市' AND zone_street_name LIKE '志摩初%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8191314' AND zone_name = '福岡県' AND zone_city_name = '糸島市' AND zone_street_name LIKE '志摩師吉%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8112313' AND zone_name = '福岡県' AND zone_city_name = '糟屋郡粕屋町' AND zone_street_name LIKE '江辻%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8700148' AND zone_name = '大分県' AND zone_city_name = '大分市' AND zone_street_name LIKE '高城台%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8701135' AND zone_name = '大分県' AND zone_city_name = '大分市' AND zone_street_name LIKE '光吉新町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8701136' AND zone_name = '大分県' AND zone_city_name = '大分市' AND zone_street_name LIKE '光吉台%'");

// Add file number: 2509
$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0591374','北海道','苫小牧市','晴海町','Hokkaido','Tomakomai Shi','Harumicho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Miyagi' AND zone_country_id = @coid), 0),'9813314','宮城県','富谷市','高屋敷西','Miyagi','Tomiya Shi','Takayashikinishi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Chiba' AND zone_country_id = @coid), 0),'2780020','千葉県','野田市','梅郷','Chiba','Noda Shi','Umesato'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kanagawa' AND zone_country_id = @coid), 0),'2540903','神奈川県','平塚市','河内','Kanagawa','Hiratsuka Shi','Kochi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kanagawa' AND zone_country_id = @coid), 0),'2540902','神奈川県','平塚市','徳延','Kanagawa','Hiratsuka Shi','Tokunobu'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kanagawa' AND zone_country_id = @coid), 0),'2540901','神奈川県','平塚市','纒','Kanagawa','Hiratsuka Shi','Matoi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Ishikawa' AND zone_country_id = @coid), 0),'9231272','石川県','能美郡川北町','下田子島','Ishikawa','Nomi Gun Kawakita Machi','Shimotago Jima'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aichi' AND zone_country_id = @coid), 0),'4418094','愛知県','豊橋市','牟呂内田町','Aichi','Toyohashi Shi','Muro Chidacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aichi' AND zone_country_id = @coid), 0),'4418095','愛知県','豊橋市','牟呂坂津町','Aichi','Toyohashi Shi','Muro Sakatsucho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aichi' AND zone_country_id = @coid), 0),'4700343','愛知県','豊田市','浄水町','Aichi','Toyota Shi','Josuicho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukuoka' AND zone_country_id = @coid), 0),'8380125','福岡県','小郡市','二夕','Fukuoka','Ogori Shi','Futa'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukuoka' AND zone_country_id = @coid), 0),'8191301','福岡県','糸島市','志摩井田原','Fukuoka','Itoshima Shi','Shima Idawara'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukuoka' AND zone_country_id = @coid), 0),'8191307','福岡県','糸島市','志摩井田原南','Fukuoka','Itoshima Shi','Shima Idawaraminami'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukuoka' AND zone_country_id = @coid), 0),'8191317','福岡県','糸島市','志摩稲留東','Fukuoka','Itoshima Shi','Shima Inadomehigashi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukuoka' AND zone_country_id = @coid), 0),'8191312','福岡県','糸島市','志摩初','Fukuoka','Itoshima Shi','Shima Hatsu'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukuoka' AND zone_country_id = @coid), 0),'8191316','福岡県','糸島市','志摩ひかりが丘','Fukuoka','Itoshima Shi','Shima Hikarigaoka'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukuoka' AND zone_country_id = @coid), 0),'8191314','福岡県','糸島市','志摩師吉','Fukuoka','Itoshima Shi','Shima Moroyoshi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukuoka' AND zone_country_id = @coid), 0),'8112313','福岡県','糟屋郡粕屋町','江辻','Fukuoka','Kasuya Gun Kasuya Machi','Etsuji'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kumamoto' AND zone_country_id = @coid), 0),'8640058','熊本県','荒尾市','海陽町','Kumamoto','Arao Shi','Kaiyocho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8700169','大分県','大分市','明野高城','Oita','Oita Shi','Akenotakajo'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8700148','大分県','大分市','高城台','Oita','Oita Shi','Takajodai'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8701135','大分県','大分市','光吉新町','Oita','Oita Shi','Mitsuyoshi Shinmachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8701136','大分県','大分市','光吉台','Oita','Oita Shi','Mitsuyoshidai')
";
$this->executeInstallerSql($sql);

// Delete file number: 2510
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086390' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086301' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086302' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086303' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086304' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086305' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086306' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086307' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086308' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086309' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086310' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086311' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086312' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086313' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086314' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086315' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086316' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086317' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086318' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086319' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086320' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086321' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086322' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086323' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086324' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086325' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086326' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086327' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086328' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086329' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1086330' AND zone_name = '東京都' AND zone_city_name = '港区' AND zone_street_name LIKE '三田住友不動産三田ツインビル西館%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '9140044' AND zone_name = '福井県' AND zone_city_name = '敦賀市' AND zone_street_name LIKE '岡山町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5970107' AND zone_name = '大阪府' AND zone_city_name = '貝塚市' AND zone_street_name LIKE '地蔵堂%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5970053' AND zone_name = '大阪府' AND zone_city_name = '貝塚市' AND zone_street_name LIKE '地蔵堂%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5970054' AND zone_name = '大阪府' AND zone_city_name = '貝塚市' AND zone_street_name LIKE '堤%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8112413' AND zone_name = '福岡県' AND zone_city_name = '糟屋郡篠栗町' AND zone_street_name LIKE '尾仲%'");

// Add file number: 2510
$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086390','東京都','港区','三田住友不動産東京三田サウスタワー（地階・階層不明）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (chikai.kaisofumei)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086301','東京都','港区','三田住友不動産東京三田サウスタワー（１階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (1F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086302','東京都','港区','三田住友不動産東京三田サウスタワー（２階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (2F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086303','東京都','港区','三田住友不動産東京三田サウスタワー（３階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (3F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086304','東京都','港区','三田住友不動産東京三田サウスタワー（４階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (4F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086305','東京都','港区','三田住友不動産東京三田サウスタワー（５階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (5F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086306','東京都','港区','三田住友不動産東京三田サウスタワー（６階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (6F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086307','東京都','港区','三田住友不動産東京三田サウスタワー（７階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (7F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086308','東京都','港区','三田住友不動産東京三田サウスタワー（８階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (8F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086309','東京都','港区','三田住友不動産東京三田サウスタワー（９階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (9F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086310','東京都','港区','三田住友不動産東京三田サウスタワー（１０階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (10F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086311','東京都','港区','三田住友不動産東京三田サウスタワー（１１階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (11F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086312','東京都','港区','三田住友不動産東京三田サウスタワー（１２階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (12F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086313','東京都','港区','三田住友不動産東京三田サウスタワー（１３階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (13F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086314','東京都','港区','三田住友不動産東京三田サウスタワー（１４階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (14F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086315','東京都','港区','三田住友不動産東京三田サウスタワー（１５階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (15F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086316','東京都','港区','三田住友不動産東京三田サウスタワー（１６階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (16F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086317','東京都','港区','三田住友不動産東京三田サウスタワー（１７階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (17F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086318','東京都','港区','三田住友不動産東京三田サウスタワー（１８階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (18F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086319','東京都','港区','三田住友不動産東京三田サウスタワー（１９階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (19F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086320','東京都','港区','三田住友不動産東京三田サウスタワー（２０階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (20F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086321','東京都','港区','三田住友不動産東京三田サウスタワー（２１階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (21F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086322','東京都','港区','三田住友不動産東京三田サウスタワー（２２階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (22F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086323','東京都','港区','三田住友不動産東京三田サウスタワー（２３階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (23F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086324','東京都','港区','三田住友不動産東京三田サウスタワー（２４階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (24F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086325','東京都','港区','三田住友不動産東京三田サウスタワー（２５階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (25F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086326','東京都','港区','三田住友不動産東京三田サウスタワー（２６階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (26F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086327','東京都','港区','三田住友不動産東京三田サウスタワー（２７階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (27F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086328','東京都','港区','三田住友不動産東京三田サウスタワー（２８階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (28F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086329','東京都','港区','三田住友不動産東京三田サウスタワー（２９階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (29F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1086330','東京都','港区','三田住友不動産東京三田サウスタワー（３０階）','Tokyo','Minato Ku','Mita Sumitomofudosan Tokyo Mita South Tower (30F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukui' AND zone_country_id = @coid), 0),'9140044','福井県','敦賀市','岡山町','Fukui','Tsuruga Shi','Okayamacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5970107','大阪府','貝塚市','地藏堂','Osaka','Kaizuka Shi','Jizodo'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5970053','大阪府','貝塚市','地藏堂','Osaka','Kaizuka Shi','Jizodo'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5970054','大阪府','貝塚市','堤','Osaka','Kaizuka Shi','Tsutsumi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukuoka' AND zone_country_id = @coid), 0),'8112413','福岡県','糟屋郡篠栗町','尾仲','Fukuoka','Kasuya Gun Sasaguri Machi','Onaka')
";
$this->executeInstallerSql($sql);

// Delete file number: 2511
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0620912' AND zone_name = '北海道' AND zone_city_name = '札幌市豊平区' AND zone_street_name LIKE '水車町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3570038' AND zone_name = '埼玉県' AND zone_city_name = '飯能市' AND zone_street_name LIKE '仲町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3570036' AND zone_name = '埼玉県' AND zone_city_name = '飯能市' AND zone_street_name LIKE '南町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8700149' AND zone_name = '大分県' AND zone_city_name = '大分市' AND zone_street_name LIKE '高城団地%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8740849' AND zone_name = '大分県' AND zone_city_name = '別府市' AND zone_street_name LIKE '扇山%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8740848' AND zone_name = '大分県' AND zone_city_name = '別府市' AND zone_street_name LIKE '大畑%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8740822' AND zone_name = '大分県' AND zone_city_name = '別府市' AND zone_street_name LIKE '観海寺%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8740835' AND zone_name = '大分県' AND zone_city_name = '別府市' AND zone_street_name LIKE '実相寺%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8740834' AND zone_name = '大分県' AND zone_city_name = '別府市' AND zone_street_name LIKE '新別府%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8740838' AND zone_name = '大分県' AND zone_city_name = '別府市' AND zone_street_name LIKE '荘園%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8740841' AND zone_name = '大分県' AND zone_city_name = '別府市' AND zone_street_name LIKE '竹の内%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8740833' AND zone_name = '大分県' AND zone_city_name = '別府市' AND zone_street_name LIKE '鶴見%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8740831' AND zone_name = '大分県' AND zone_city_name = '別府市' AND zone_street_name LIKE '堀田%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8740839' AND zone_name = '大分県' AND zone_city_name = '別府市' AND zone_street_name LIKE '南立石一区%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8740827' AND zone_name = '大分県' AND zone_city_name = '別府市' AND zone_street_name LIKE '南立石二区%'");

// Add file number: 2511
$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0620912','北海道','札幌市豊平区','水車町','Hokkaido','Sapporo Shi Toyohira Ku','Suishamachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Akita' AND zone_country_id = @coid), 0),'0130310','秋田県','横手市','大雄佐加里西','Akita','Yokote Shi','Taiyu Sagarinishi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Saitama' AND zone_country_id = @coid), 0),'3570038','埼玉県','飯能市','仲町','Saitama','Hanno Shi','Nakamachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Saitama' AND zone_country_id = @coid), 0),'3570036','埼玉県','飯能市','南町','Saitama','Hanno Shi','Minamimachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Shizuoka' AND zone_country_id = @coid), 0),'4170818','静岡県','富士市','末広','Shizuoka','Fuji Shi','Suehiro'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8740849','大分県','別府市','扇山','Oita','Beppu Shi','Ogiyama'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8740848','大分県','別府市','大畑町','Oita','Beppu Shi','Obatakecho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8740822','大分県','別府市','観海寺','Oita','Beppu Shi','Kankaiji'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8740822','大分県','別府市','観海寺町','Oita','Beppu Shi','Kankaijicho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8740835','大分県','別府市','実相寺町','Oita','Beppu Shi','Jissojicho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8740834','大分県','別府市','新別府町','Oita','Beppu Shi','Shinbeppucho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8740838','大分県','別府市','荘園町','Oita','Beppu Shi','Soencho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8740841','大分県','別府市','竹の内町','Oita','Beppu Shi','Takenochicho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8740833','大分県','別府市','鶴見','Oita','Beppu Shi','Tsurumi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8740831','大分県','別府市','堀田町','Oita','Beppu Shi','Horitacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8740827','大分県','別府市','南立石公園町','Oita','Beppu Shi','Minamitateishikoencho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8740839','大分県','別府市','南立石中津留町','Oita','Beppu Shi','Minamitateishinakatsurucho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0),'8740830','大分県','別府市','山の手新町','Oita','Beppu Shi','Yamanoteshinmachi')
";
$this->executeInstallerSql($sql);

// Delete file number: 2512
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '2701446' AND zone_name = '千葉県' AND zone_city_name = '柏市' AND zone_street_name LIKE '岩井村新田%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5691114' AND zone_name = '大阪府' AND zone_city_name = '高槻市' AND zone_street_name LIKE '別所新町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5691113' AND zone_name = '大阪府' AND zone_city_name = '高槻市' AND zone_street_name LIKE '別所中の町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '7440061' AND zone_name = '山口県' AND zone_city_name = '下松市' AND zone_street_name LIKE '河内%'");

// Add file number: 2512
$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Chiba' AND zone_country_id = @coid), 0),'2701446','千葉県','柏市','岩井新田','Chiba','Kashiwa Shi','Iwaishinden'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Gifu' AND zone_country_id = @coid), 0),'5010110','岐阜県','岐阜市','鏡島東','Gifu','Gifu Shi','Kagashimahigashi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6170007','京都府','向日市','ニデックパーク','Kyoto','Muko Shi','Nidekkupaku'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5691114','大阪府','高槻市','別所新町','Osaka','Takatsuki Shi','Besshoshinmachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5691113','大阪府','高槻市','別所中の町','Osaka','Takatsuki Shi','Besshonakanocho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamaguchi' AND zone_country_id = @coid), 0),'7540076','山口県','山口市','小郡蔵敷','Yamaguchi','Yamaguchi Shi','Ogorikurashiki'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamaguchi' AND zone_country_id = @coid), 0),'7540075','山口県','山口市','小郡中央通','Yamaguchi','Yamaguchi Shi','Ogorichuodori'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamaguchi' AND zone_country_id = @coid), 0),'7540074','山口県','山口市','小郡津市','Yamaguchi','Yamaguchi Shi','Ogoritsuichi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamaguchi' AND zone_country_id = @coid), 0),'7540073','山口県','山口市','小郡本町','Yamaguchi','Yamaguchi Shi','Ogorihonmachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamaguchi' AND zone_country_id = @coid), 0),'7540077','山口県','山口市','小郡柳井田','Yamaguchi','Yamaguchi Shi','Ogoriyanaida'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamaguchi' AND zone_country_id = @coid), 0),'7440066','山口県','下松市','葉山','Yamaguchi','Kudamatsu Shi','Hayama')
";
$this->executeInstallerSql($sql);

// Delete file number: 2601
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0691336' AND zone_name = '北海道' AND zone_city_name = '夕張郡長沼町' AND zone_street_name LIKE '川沿%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0691336' AND zone_name = '北海道' AND zone_city_name = '夕張郡長沼町' AND zone_street_name LIKE '栄町%'");

// Add file number: 2601
$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0691336','北海道','夕張郡長沼町','栄町','Hokkaido','Yubari Gun Naganuma Cho','Sakaemachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6190248','京都府','相楽郡精華町','新精台','Kyoto','Soraku Gun Seika Cho','Shinseidai'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5670081','大阪府','茨木市','彩都あけぼの','Osaka','Ibaraki Shi','Saitoakebono')
";
$this->executeInstallerSql($sql);

// Delete file number: 2602
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '4080001' AND zone_name = '山梨県' AND zone_city_name = '北杜市' AND zone_street_name LIKE '高根町長沢%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6370013' AND zone_name = '奈良県' AND zone_city_name = '五條市' AND zone_street_name LIKE '居伝町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6370077' AND zone_name = '奈良県' AND zone_city_name = '五條市' AND zone_street_name LIKE '大沢町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6370102' AND zone_name = '奈良県' AND zone_city_name = '五條市' AND zone_street_name LIKE '西吉野町黒淵%'");

// Add file number: 2602
$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Ishikawa' AND zone_country_id = @coid), 0),'9240040','石川県','白山市','北安田南','Ishikawa','Hakusan Shi','Kitayasutaminami'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamanashi' AND zone_country_id = @coid), 0),'4080001','山梨県','北杜市','高根町長澤','Yamanashi','Hokuto Shi','Takanechonagasawa'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Gifu' AND zone_country_id = @coid), 0),'5010429','岐阜県','本巣郡北方町','森町北','Gifu','Motosu Gun Kitagata Cho','Morimachikita'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nara' AND zone_country_id = @coid), 0),'6370013','奈良県','五條市','居傳町','Nara','Gojo Shi','Idecho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nara' AND zone_country_id = @coid), 0),'6370077','奈良県','五條市','大澤町','Nara','Gojo Shi','Ozawacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nara' AND zone_country_id = @coid), 0),'6370102','奈良県','五條市','西吉野町黒渕','Nara','Gojo Shi','Nishiyoshinocho Kurobuchi')
";
$this->executeInstallerSql($sql);

// Delete file number: 2603
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613601' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '厚田区厚田%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613602' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '厚田区押琴%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613151' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '厚田区濃昼%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613603' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '厚田区小谷%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613521' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '厚田区古潭%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613331' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '厚田区聚富%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613441' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '厚田区聚富%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613332' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '厚田区虹が原%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613605' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '厚田区別狩%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613522' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '厚田区嶺泊%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613523' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '厚田区望来%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613606' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '厚田区安瀬%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613112' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '浜益区送毛%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0770351' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '浜益区雄冬%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613107' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '浜益区柏木%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613106' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '浜益区川下%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613102' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '浜益区群別%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613113' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '浜益区濃昼%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613109' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '浜益区御料地%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613105' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '浜益区千代志別%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613104' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '浜益区床丹%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613101' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '浜益区浜益%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613111' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '浜益区毘砂別%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613103' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '浜益区幌%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0613108' AND zone_name = '北海道' AND zone_city_name = '石狩市' AND zone_street_name LIKE '浜益区実田%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1980213' AND zone_name = '東京都' AND zone_city_name = '西多摩郡奥多摩町' AND zone_street_name LIKE '海沢%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1980103' AND zone_name = '東京都' AND zone_city_name = '西多摩郡奥多摩町' AND zone_street_name LIKE '梅沢%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1980106' AND zone_name = '東京都' AND zone_city_name = '西多摩郡奥多摩町' AND zone_street_name LIKE '棚沢%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3900851' AND zone_name = '長野県' AND zone_city_name = '松本市' AND zone_street_name LIKE '島内%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3998251' AND zone_name = '長野県' AND zone_city_name = '松本市' AND zone_street_name LIKE '島内%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406290' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406201' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406202' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406203' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406204' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406205' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406206' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406207' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406208' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406209' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406210' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406211' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406212' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406213' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406214' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406215' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406216' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406217' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406218' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406219' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406220' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406221' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406222' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406223' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406224' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406225' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406226' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406227' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406228' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406229' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406230' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406231' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406232' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406233' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406234' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406235' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406236' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406237' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5406238' AND zone_name = '大阪府' AND zone_city_name = '大阪市中央区' AND zone_street_name LIKE '城見パナソニックタワー%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8140132' AND zone_name = '福岡県' AND zone_city_name = '福岡市城南区' AND zone_street_name LIKE '干隈%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8140163' AND zone_name = '福岡県' AND zone_city_name = '福岡市早良区' AND zone_street_name LIKE '干隈%'");

// Add file number: 2603
$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613601','北海道','石狩市','厚田','Hokkaido','Ishikari Shi','Atsuta'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613602','北海道','石狩市','厚田押琴','Hokkaido','Ishikari Shi','Atsuta Oshikoto'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613151','北海道','石狩市','厚田濃昼','Hokkaido','Ishikari Shi','Atsuta Gokibiru'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613603','北海道','石狩市','厚田小谷','Hokkaido','Ishikari Shi','Atsuta Kotani'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613521','北海道','石狩市','厚田古潭','Hokkaido','Ishikari Shi','Atsuta Kotan'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613331','北海道','石狩市','厚田聚富','Hokkaido','Ishikari Shi','Atsuta Shippu'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613441','北海道','石狩市','厚田聚富','Hokkaido','Ishikari Shi','Atsuta Shippu'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613332','北海道','石狩市','厚田虹が原','Hokkaido','Ishikari Shi','Atsuta Nijigahara'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613605','北海道','石狩市','厚田別狩','Hokkaido','Ishikari Shi','Atsuta Bekkari'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613522','北海道','石狩市','厚田嶺泊','Hokkaido','Ishikari Shi','Atsuta Minetomari'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613523','北海道','石狩市','厚田望来','Hokkaido','Ishikari Shi','Atsuta Morai'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613606','北海道','石狩市','厚田安瀬','Hokkaido','Ishikari Shi','Atsuta Yasosuke'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613101','北海道','石狩市','浜益','Hokkaido','Ishikari Shi','Hamamasu'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613112','北海道','石狩市','浜益送毛','Hokkaido','Ishikari Shi','Hamamasu Okurige'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0770351','北海道','石狩市','浜益雄冬','Hokkaido','Ishikari Shi','Hamamasu Ofuyu'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613107','北海道','石狩市','浜益柏木','Hokkaido','Ishikari Shi','Hamamasu Kashiwagi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613106','北海道','石狩市','浜益川下','Hokkaido','Ishikari Shi','Hamamasu Kawashimo'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613102','北海道','石狩市','浜益群別','Hokkaido','Ishikari Shi','Hamamasu Kunbetsu'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613113','北海道','石狩市','浜益濃昼','Hokkaido','Ishikari Shi','Hamamasu Gokibiru'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613109','北海道','石狩市','浜益御料地','Hokkaido','Ishikari Shi','Hamamasu Goryochi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613105','北海道','石狩市','浜益千代志別','Hokkaido','Ishikari Shi','Hamamasu Chiyoshibetsu'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613104','北海道','石狩市','浜益床丹','Hokkaido','Ishikari Shi','Hamamasu Tokotan'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613111','北海道','石狩市','浜益毘砂別','Hokkaido','Ishikari Shi','Hamamasu Bishabetsu'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613103','北海道','石狩市','浜益幌','Hokkaido','Ishikari Shi','Hamamasu Poro'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0613108','北海道','石狩市','浜益実田','Hokkaido','Ishikari Shi','Hamamasu Mita'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukushima' AND zone_country_id = @coid), 0),'9610997','福島県','白河市','的石前','Fukushima','Shirakawa Shi','Matoishimae'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1980213','東京都','西多摩郡奥多摩町','海澤','Tokyo','Nishitama Gun Okutama Machi','Unazawa'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1980103','東京都','西多摩郡奥多摩町','梅澤','Tokyo','Nishitama Gun Okutama Machi','Umezawa'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0),'1980106','東京都','西多摩郡奥多摩町','棚澤','Tokyo','Nishitama Gun Okutama Machi','Tanazawa'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0),'3900851','長野県','松本市','島内','Nagano','Matsumoto Shi','Shimauchi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406290','大阪府','大阪市中央区','城見ＪＹＯタワー（地階・階層不明）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(Chikai.Kaisofumei)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406201','大阪府','大阪市中央区','城見ＪＹＯタワー（１階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(1-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406202','大阪府','大阪市中央区','城見ＪＹＯタワー（２階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(2-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406203','大阪府','大阪市中央区','城見ＪＹＯタワー（３階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(3-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406204','大阪府','大阪市中央区','城見ＪＹＯタワー（４階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(4-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406205','大阪府','大阪市中央区','城見ＪＹＯタワー（５階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(5-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406206','大阪府','大阪市中央区','城見ＪＹＯタワー（６階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(6-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406207','大阪府','大阪市中央区','城見ＪＹＯタワー（７階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(7-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406208','大阪府','大阪市中央区','城見ＪＹＯタワー（８階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(8-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406209','大阪府','大阪市中央区','城見ＪＹＯタワー（９階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(9-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406210','大阪府','大阪市中央区','城見ＪＹＯタワー（１０階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(10-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406211','大阪府','大阪市中央区','城見ＪＹＯタワー（１１階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(11-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406212','大阪府','大阪市中央区','城見ＪＹＯタワー（１２階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(12-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406213','大阪府','大阪市中央区','城見ＪＹＯタワー（１３階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(13-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406214','大阪府','大阪市中央区','城見ＪＹＯタワー（１４階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(14-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406215','大阪府','大阪市中央区','城見ＪＹＯタワー（１５階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(15-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406216','大阪府','大阪市中央区','城見ＪＹＯタワー（１６階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(16-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406217','大阪府','大阪市中央区','城見ＪＹＯタワー（１７階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(17-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406218','大阪府','大阪市中央区','城見ＪＹＯタワー（１８階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(18-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406219','大阪府','大阪市中央区','城見ＪＹＯタワー（１９階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(19-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406220','大阪府','大阪市中央区','城見ＪＹＯタワー（２０階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(20-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406221','大阪府','大阪市中央区','城見ＪＹＯタワー（２１階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(21-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406222','大阪府','大阪市中央区','城見ＪＹＯタワー（２２階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(22-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406223','大阪府','大阪市中央区','城見ＪＹＯタワー（２３階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(23-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406224','大阪府','大阪市中央区','城見ＪＹＯタワー（２４階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(24-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406225','大阪府','大阪市中央区','城見ＪＹＯタワー（２５階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(25-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406226','大阪府','大阪市中央区','城見ＪＹＯタワー（２６階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(26-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406227','大阪府','大阪市中央区','城見ＪＹＯタワー（２７階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(27-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406228','大阪府','大阪市中央区','城見ＪＹＯタワー（２８階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(28-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406229','大阪府','大阪市中央区','城見ＪＹＯタワー（２９階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(29-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406230','大阪府','大阪市中央区','城見ＪＹＯタワー（３０階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(30-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406231','大阪府','大阪市中央区','城見ＪＹＯタワー（３１階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(31-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406232','大阪府','大阪市中央区','城見ＪＹＯタワー（３２階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(32-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406233','大阪府','大阪市中央区','城見ＪＹＯタワー（３３階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(33-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406234','大阪府','大阪市中央区','城見ＪＹＯタワー（３４階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(34-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406235','大阪府','大阪市中央区','城見ＪＹＯタワー（３５階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(35-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406236','大阪府','大阪市中央区','城見ＪＹＯタワー（３６階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(36-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406237','大阪府','大阪市中央区','城見ＪＹＯタワー（３７階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(37-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5406238','大阪府','大阪市中央区','城見ＪＹＯタワー（３８階）','Osaka','Osaka Shi Chuo Ku','Shiromijo Tower(38-F)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukuoka' AND zone_country_id = @coid), 0),'8140132','福岡県','福岡市城南区','干隈','Fukuoka','Fukuoka Shi Jonan Ku','Hoshiguma'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukuoka' AND zone_country_id = @coid), 0),'8140163','福岡県','福岡市早良区','干隈','Fukuoka','Fukuoka Shi Sawara Ku','Hoshiguma')
";
$this->executeInstallerSql($sql);

// Delete file number: 2604
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '9811246' AND zone_name = '宮城県' AND zone_city_name = '名取市' AND zone_street_name LIKE '相互台%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '9811248' AND zone_name = '宮城県' AND zone_city_name = '名取市' AND zone_street_name LIKE '相互台東%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '9811241' AND zone_name = '宮城県' AND zone_city_name = '名取市' AND zone_street_name LIKE '高舘熊野堂%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '9811244' AND zone_name = '宮城県' AND zone_city_name = '名取市' AND zone_street_name LIKE '那智が丘%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '9811247' AND zone_name = '宮城県' AND zone_city_name = '名取市' AND zone_street_name LIKE 'みどり台%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '9811245' AND zone_name = '宮城県' AND zone_city_name = '名取市' AND zone_street_name LIKE 'ゆりが丘%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '4620841' AND zone_name = '愛知県' AND zone_city_name = '名古屋市北区' AND zone_street_name LIKE '黒川本通%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '4700117' AND zone_name = '愛知県' AND zone_city_name = '日進市' AND zone_street_name LIKE '藤塚%'");

// Add file number: 2604
$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Miyagi' AND zone_country_id = @coid), 0),'9820046','宮城県','名取市','相互台','Miyagi','Natori Shi','Sogodai'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Miyagi' AND zone_country_id = @coid), 0),'9820048','宮城県','名取市','相互台東','Miyagi','Natori Shi','Sogodaihigashi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Miyagi' AND zone_country_id = @coid), 0),'9820041','宮城県','名取市','高舘熊野堂','Miyagi','Natori Shi','Takadatekumanodo'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Miyagi' AND zone_country_id = @coid), 0),'9820044','宮城県','名取市','那智が丘','Miyagi','Natori Shi','Nachigaoka'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Miyagi' AND zone_country_id = @coid), 0),'9820047','宮城県','名取市','みどり台','Miyagi','Natori Shi','Midoridai'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Miyagi' AND zone_country_id = @coid), 0),'9820045','宮城県','名取市','ゆりが丘','Miyagi','Natori Shi','Yurigaoka'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aichi' AND zone_country_id = @coid), 0),'4620841','愛知県','名古屋市北区','黒川本通','Aichi','Nagoya Shi Kita Ku','Kurokawahondori'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aichi' AND zone_country_id = @coid), 0),'4700117','愛知県','日進市','藤塚','Aichi','Nisshin Shi','Fujizuka')
";
$this->executeInstallerSql($sql);

// Delete file number: 2605
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '9480013' AND zone_name = '新潟県' AND zone_city_name = '十日町市' AND zone_street_name LIKE '川原町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6048846' AND zone_name = '京都府' AND zone_city_name = '京都市中京区' AND zone_street_name LIKE '壬生西桧町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6048843' AND zone_name = '京都府' AND zone_city_name = '京都市中京区' AND zone_street_name LIKE '壬生東桧町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6048844' AND zone_name = '京都府' AND zone_city_name = '京都市中京区' AND zone_street_name LIKE '壬生桧町%'");

// Add file number: 2605
$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9480013','新潟県','十日町市','川原町','Niigata','Tokamachi Shi','Kawaracho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aichi' AND zone_country_id = @coid), 0),'4440819','愛知県','岡崎市','岡崎駅前','Aichi','Okazaki Shi','Okazakiekimae'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aichi' AND zone_country_id = @coid), 0),'4440850','愛知県','岡崎市','柱東','Aichi','Okazaki Shi','Hashirahigashi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aichi' AND zone_country_id = @coid), 0),'4440818','愛知県','岡崎市','羽根','Aichi','Okazaki Shi','Hane'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6048846','京都府','京都市中京区','壬生西檜町','Kyoto','Kyoto Shi Nakagyo Ku','Mibu Nishihinokicho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6048843','京都府','京都市中京区','壬生東檜町','Kyoto','Kyoto Shi Nakagyo Ku','Mibu Higashihinokicho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0),'6048844','京都府','京都市中京区','壬生檜町','Kyoto','Kyoto Shi Nakagyo Ku','Mibu Hinokicho')
";
$this->executeInstallerSql($sql);

// Delete file number: 2606
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3002327' AND zone_name = '茨城県' AND zone_city_name = 'つくばみらい市' AND zone_street_name LIKE '福原%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '2390843' AND zone_name = '神奈川県' AND zone_city_name = '横須賀市' AND zone_street_name LIKE '津久井%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '2390842' AND zone_name = '神奈川県' AND zone_city_name = '横須賀市' AND zone_street_name LIKE '長沢%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '2390804' AND zone_name = '神奈川県' AND zone_city_name = '横須賀市' AND zone_street_name LIKE '吉井%'");

// Add file number: 2606
$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Ibaraki' AND zone_country_id = @coid), 0),'3002327','茨城県','つくばみらい市','福原','Ibaraki','Tsukubamirai Shi','Fukuhara'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Saitama' AND zone_country_id = @coid), 0),'3410019','埼玉県','三郷市','彦郷','Saitama','Misato Shi','Hikosato'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kanagawa' AND zone_country_id = @coid), 0),'2390843','神奈川県','横須賀市','津久井','Kanagawa','Yokosuka Shi','Tsukui'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kanagawa' AND zone_country_id = @coid), 0),'2390842','神奈川県','横須賀市','長沢','Kanagawa','Yokosuka Shi','Nagasawa'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kanagawa' AND zone_country_id = @coid), 0),'2390804','神奈川県','横須賀市','吉井','Kanagawa','Yokosuka Shi','Yoshii'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Ehime' AND zone_country_id = @coid), 0),'7991109','愛媛県','西条市','小松町新宮','Ehime','Saijo Shi','Komatsucho Shingu')
";
$this->executeInstallerSql($sql);

// Delete file number: 2607
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0861135' AND zone_name = '北海道' AND zone_city_name = '標津郡中標津町' AND zone_street_name LIKE '旭ケ丘%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0861153' AND zone_name = '北海道' AND zone_city_name = '標津郡中標津町' AND zone_street_name LIKE '桜ケ丘%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0861156' AND zone_name = '北海道' AND zone_city_name = '標津郡中標津町' AND zone_street_name LIKE '並美ケ丘%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0861148' AND zone_name = '北海道' AND zone_city_name = '標津郡中標津町' AND zone_street_name LIKE '緑ケ丘%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0190503' AND zone_name = '秋田県' AND zone_city_name = '横手市' AND zone_street_name LIKE '十文字町西原１番町%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '0190502' AND zone_name = '秋田県' AND zone_city_name = '横手市' AND zone_street_name LIKE '十文字町西原２番町%'");

// Add file number: 2607
$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0861135','北海道','標津郡中標津町','旭ヶ丘','Hokkaido','Shibetsu Gun Nakashibetsu Cho','Asahigaoka'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0861153','北海道','標津郡中標津町','桜ヶ丘','Hokkaido','Shibetsu Gun Nakashibetsu Cho','Sakuragaoka'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0861156','北海道','標津郡中標津町','並美ヶ丘','Hokkaido','Shibetsu Gun Nakashibetsu Cho','Narabigaoka'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0),'0861148','北海道','標津郡中標津町','緑ヶ丘','Hokkaido','Shibetsu Gun Nakashibetsu Cho','Midorigaoka'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Akita' AND zone_country_id = @coid), 0),'0190503','秋田県','横手市','十文字町西原一番町','Akita','Yokote Shi','Jumonjimachinishiharaichibancho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Akita' AND zone_country_id = @coid), 0),'0190502','秋田県','横手市','十文字町西原二番町','Akita','Yokote Shi','Jumonjimachinishiharanibancho')
";
$this->executeInstallerSql($sql);

// Delete file number: 2608
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '7440011' AND zone_name = '山口県' AND zone_city_name = '下松市' AND zone_street_name LIKE '西豊井%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '7440002' AND zone_name = '山口県' AND zone_city_name = '下松市' AND zone_street_name LIKE '東豊井%'");

// Add file number: 2608
$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Saitama' AND zone_country_id = @coid), 0),'3510008','埼玉県','朝霞市','あずま','Saitama','Asaka Shi','Azuma'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591011','新潟県','五泉市','村松秋葉町','Niigata','Gosen Shi','Muramatsuakibacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591004','新潟県','五泉市','村松泉町','Niigata','Gosen Shi','Muramatsuizumicho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591024','新潟県','五泉市','村松浦寺','Niigata','Gosen Shi','Muramatsuradera'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591042','新潟県','五泉市','村松大手','Niigata','Gosen Shi','Muramatsuote'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591046','新潟県','五泉市','村松御徒士町','Niigata','Gosen Shi','Muramatsuokachimachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591023','新潟県','五泉市','村松鍛冶丁','Niigata','Gosen Shi','Muramatsukajicho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591035','新潟県','五泉市','村松春日','Niigata','Gosen Shi','Muramatsukasuga'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591036','新潟県','五泉市','村松片町','Niigata','Gosen Shi','Muramatsukatamachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591013','新潟県','五泉市','村松学校町','Niigata','Gosen Shi','Muramatsugakkocho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591016','新潟県','五泉市','村松上浦町','Niigata','Gosen Shi','Muramatsukamiuramachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591014','新潟県','五泉市','村松上宝町','Niigata','Gosen Shi','Muramatsukamitakaramachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591015','新潟県','五泉市','村松上根木町','Niigata','Gosen Shi','Muramatsukaminekomachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591025','新潟県','五泉市','村松上町','Niigata','Gosen Shi','Muramatsukamimachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591003','新潟県','五泉市','村松搦手','Niigata','Gosen Shi','Muramatsukaramete'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591001','新潟県','五泉市','村松小新保','Niigata','Gosen Shi','Muramatsukoshinbo'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591034','新潟県','五泉市','村松山王前','Niigata','Gosen Shi','Muramatsusannomae'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591017','新潟県','五泉市','村松下浦町','Niigata','Gosen Shi','Muramatsushimoramachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591012','新潟県','五泉市','村松下宝町','Niigata','Gosen Shi','Muramatsushimotakaramachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591018','新潟県','五泉市','村松下根木町','Niigata','Gosen Shi','Muramatsushimonekomachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591021','新潟県','五泉市','村松下町','Niigata','Gosen Shi','Muramatsushimomachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591031','新潟県','五泉市','村松城町','Niigata','Gosen Shi','Muramatsujomachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591047','新潟県','五泉市','村松城跡','Niigata','Gosen Shi','Muramatsushiroato'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591005','新潟県','五泉市','村松新丁','Niigata','Gosen Shi','Muramatsushincho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591033','新潟県','五泉市','村松新町','Niigata','Gosen Shi','Muramatsushinmachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591044','新潟県','五泉市','村松新道','Niigata','Gosen Shi','Muramatsushinmichi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591032','新潟県','五泉市','村松寺町','Niigata','Gosen Shi','Muramatsuteramachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591045','新潟県','五泉市','村松長柄町','Niigata','Gosen Shi','Muramatsunagaemachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591041','新潟県','五泉市','村松仲丁','Niigata','Gosen Shi','Muramatsunakacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591022','新潟県','五泉市','村松仲町','Niigata','Gosen Shi','Muramatsunakamachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591043','新潟県','五泉市','村松馬場丁','Niigata','Gosen Shi','Muramatsubabacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591037','新潟県','五泉市','村松本堂','Niigata','Gosen Shi','Muramatsuhondo'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0),'9591002','新潟県','五泉市','村松横町','Niigata','Gosen Shi','Muramatsuyokomachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamaguchi' AND zone_country_id = @coid), 0),'7440009','山口県','下松市','豊井西','Yamaguchi','Kudamatsu Shi','Toyoinishi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamaguchi' AND zone_country_id = @coid), 0),'7440011','山口県','下松市','西豊井','Yamaguchi','Kudamatsu Shi','Nishitoyoi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamaguchi' AND zone_country_id = @coid), 0),'7440002','山口県','下松市','東豊井','Yamaguchi','Kudamatsu Shi','Higashitoyoi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukuoka' AND zone_country_id = @coid), 0),'8112312','福岡県','糟屋郡粕屋町','江辻西','Fukuoka','Kasuya Gun Kasuya Machi','Etsujinishi')
";
$this->executeInstallerSql($sql);

// Delete file number: 2609
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '2210802' AND zone_name = '神奈川県' AND zone_city_name = '横浜市神奈川区' AND zone_street_name LIKE '六角橋%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6330085' AND zone_name = '奈良県' AND zone_city_name = '桜井市' AND zone_street_name LIKE '東田%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6408323' AND zone_name = '和歌山県' AND zone_city_name = '和歌山市' AND zone_street_name LIKE '太田%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6408341' AND zone_name = '和歌山県' AND zone_city_name = '和歌山市' AND zone_street_name LIKE '黒田%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6408344' AND zone_name = '和歌山県' AND zone_city_name = '和歌山市' AND zone_street_name LIKE '納定%'");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8560845' AND zone_name = '長崎県' AND zone_city_name = '大村市' AND zone_street_name LIKE '大里町%'");

// Add file number: 2609
$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Saitama' AND zone_country_id = @coid), 0),'3650006','埼玉県','鴻巣市','広田中央','Saitama','Konosu Shi','Hirodachuo'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kanagawa' AND zone_country_id = @coid), 0),'2210802','神奈川県','横浜市神奈川区','六角橋','Kanagawa','Yokohama Shi Kanagawa Ku','Rokukakubashi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0),'5980077','大阪府','泉佐野市','新家','Osaka','Izumisano Shi','Shinke'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nara' AND zone_country_id = @coid), 0),'6330085','奈良県','桜井市','東田','Nara','Sakurai Shi','Higaida'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Wakayama' AND zone_country_id = @coid), 0),'6408323','和歌山県','和歌山市','太田','Wakayama','Wakayama Shi','Oda'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Wakayama' AND zone_country_id = @coid), 0),'6408341','和歌山県','和歌山市','黒田','Wakayama','Wakayama Shi','Kuroda'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Wakayama' AND zone_country_id = @coid), 0),'6408344','和歌山県','和歌山市','納定','Wakayama','Wakayama Shi','Nojo'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukuoka' AND zone_country_id = @coid), 0),'8110126','福岡県','糟屋郡新宮町','人丸','Fukuoka','Kasuya Gun Shingu Machi','Hitomaru'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagasaki' AND zone_country_id = @coid), 0),'8560845','長崎県','大村市','大里町','Nagasaki','Omura Shi','Osatomachi')
";
$this->executeInstallerSql($sql);
