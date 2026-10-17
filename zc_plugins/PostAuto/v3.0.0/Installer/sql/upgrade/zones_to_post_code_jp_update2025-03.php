<?php

$sql = "ALTER TABLE " . TABLE_ZONES_TO_POST_CODE_JP . " MODIFY COLUMN zone_city_name_romaji varchar(64);";
$this->executeInstallerSql($sql);

$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1940031' AND zone_name = '東京都' AND zone_city_name = '町田市' AND zone_street_name = '南大谷';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5600032' AND zone_name = '大阪府' AND zone_city_name = '豊中市' AND zone_street_name = '蛍池東町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5600036' AND zone_name = '大阪府' AND zone_city_name = '豊中市' AND zone_street_name = '蛍池西町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5600034' AND zone_name = '大阪府' AND zone_city_name = '豊中市' AND zone_street_name = '蛍池南町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5600031' AND zone_name = '大阪府' AND zone_city_name = '豊中市' AND zone_street_name = '蛍池北町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5600033' AND zone_name = '大阪府' AND zone_city_name = '豊中市' AND zone_street_name = '蛍池中町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '591362' AND zone_name = '北海道' AND zone_city_name = '苫小牧市' AND zone_street_name = '柏原';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '530053' AND zone_name = '北海道' AND zone_city_name = '苫小牧市' AND zone_street_name = '柳町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '9610973' AND zone_name = '福島県' AND zone_city_name = '白河市' AND zone_street_name = '北登リ町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '9610962' AND zone_name = '福島県' AND zone_city_name = '白河市' AND zone_street_name = '登リ町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '9610851' AND zone_name = '福島県' AND zone_city_name = '白河市' AND zone_street_name = '南登リ町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '2450003' AND zone_name = '神奈川県' AND zone_city_name = '横浜市泉区' AND zone_street_name = '岡津町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '2430402' AND zone_name = '神奈川県' AND zone_city_name = '海老名市' AND zone_street_name = '柏ケ谷';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '9530067' AND zone_name = '新潟県' AND zone_city_name = '新潟市西蒲区' AND zone_street_name = '潟頭';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8911275' AND zone_name = '鹿児島県' AND zone_city_name = '鹿児島市' AND zone_street_name = '川上町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3703321' AND zone_name = '群馬県' AND zone_city_name = '吾妻郡東吾妻町' AND zone_street_name = '泉沢';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3550047' AND zone_name = '埼玉県' AND zone_city_name = '東松山市' AND zone_street_name = '高坂';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5095403' AND zone_name = '岐阜県' AND zone_city_name = '土岐市' AND zone_street_name = '旭ケ丘町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8130008' AND zone_name = '福岡県' AND zone_city_name = '糟屋郡粕屋町' AND zone_street_name = '内橋西';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '5095403' AND zone_name = '岐阜県' AND zone_city_name = '土岐市' AND zone_street_name = '肥田町肥田';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '4400833' AND zone_name = '愛知県' AND zone_city_name = '豊橋市' AND zone_street_name = '飯村町西山、高山';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '4400032' AND zone_name = '愛知県' AND zone_city_name = '豊橋市' AND zone_street_name = '岩田町居村、北郷中';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '4400041' AND zone_name = '愛知県' AND zone_city_name = '豊橋市' AND zone_street_name = '岩田町宮下、道合';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '4520961' AND zone_name = '愛知県' AND zone_city_name = '清須市' AND zone_street_name = '春日夢の森';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8700836' AND zone_name = '大分県' AND zone_city_name = '大分市' AND zone_street_name = '上野南';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8700881' AND zone_name = '大分県' AND zone_city_name = '大分市' AND zone_street_name = '深河内';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8740842' AND zone_name = '大分県' AND zone_city_name = '別府市' AND zone_street_name = '小倉';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8740913' AND zone_name = '大分県' AND zone_city_name = '別府市' AND zone_street_name = '春木';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '8740912' AND zone_name = '大分県' AND zone_city_name = '別府市' AND zone_street_name = '南須賀';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3994501' AND zone_name = '長野県' AND zone_city_name = '伊那市' AND zone_street_name = '西箕輪';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6050037' AND zone_name = '京都府' AND zone_city_name = '京都市東山区' AND zone_street_name = '西町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6292313' AND zone_name = '京都府' AND zone_city_name = '与謝郡与謝野町' AND zone_street_name = '三河内';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '7450613' AND zone_name = '山口県' AND zone_city_name = '周南市' AND zone_street_name = '夢ケ丘';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '9820261' AND zone_name = '宮城県' AND zone_city_name = '仙台市青葉区' AND zone_street_name = '折立';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '9820262' AND zone_name = '宮城県' AND zone_city_name = '仙台市青葉区' AND zone_street_name = '西花苑';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '9820263' AND zone_name = '宮城県' AND zone_city_name = '仙台市青葉区' AND zone_street_name = '茂庭';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '2760035' AND zone_name = '千葉県' AND zone_city_name = '八千代市' AND zone_street_name = '大和田新田';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '2760035' AND zone_name = '千葉県' AND zone_city_name = '八千代市' AND zone_street_name = '高津';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '2760036' AND zone_name = '千葉県' AND zone_city_name = '八千代市' AND zone_street_name = '高津';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '2760037' AND zone_name = '千葉県' AND zone_city_name = '八千代市' AND zone_street_name = '高津東';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '1620855' AND zone_name = '東京都' AND zone_city_name = '新宿区' AND zone_street_name = '二十騎町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '391513' AND zone_name = '青森県' AND zone_city_name = '三戸郡五戸町' AND zone_street_name = '古館';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '391564' AND zone_name = '青森県' AND zone_city_name = '三戸郡五戸町' AND zone_street_name = '古館下川原';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '391513' AND zone_name = '青森県' AND zone_city_name = '三戸郡五戸町' AND zone_street_name = '古館向';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '391513' AND zone_name = '青森県' AND zone_city_name = '三戸郡五戸町' AND zone_street_name = '古館向川原';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '391513' AND zone_name = '青森県' AND zone_city_name = '三戸郡五戸町' AND zone_street_name = '古館脇';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3820071' AND zone_name = '長野県' AND zone_city_name = '須坂市' AND zone_street_name = '小河原町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3820033' AND zone_name = '長野県' AND zone_city_name = '須坂市' AND zone_street_name = '亀倉町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3820061' AND zone_name = '長野県' AND zone_city_name = '須坂市' AND zone_street_name = '北相之島町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3820002' AND zone_name = '長野県' AND zone_city_name = '須坂市' AND zone_street_name = '北旭ケ丘町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3820092' AND zone_name = '長野県' AND zone_city_name = '須坂市' AND zone_street_name = '北原町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3820026' AND zone_name = '長野県' AND zone_city_name = '須坂市' AND zone_street_name = '坂田町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3820005' AND zone_name = '長野県' AND zone_city_name = '須坂市' AND zone_street_name = '新田町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3820099' AND zone_name = '長野県' AND zone_city_name = '須坂市' AND zone_street_name = '墨坂';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3820073' AND zone_name = '長野県' AND zone_city_name = '須坂市' AND zone_street_name = '田の神町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3820032' AND zone_name = '長野県' AND zone_city_name = '須坂市' AND zone_street_name = '夏端町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3862211' AND zone_name = '長野県' AND zone_city_name = '須坂市' AND zone_street_name = '仁礼町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3820034' AND zone_name = '長野県' AND zone_city_name = '須坂市' AND zone_street_name = '仁礼町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3820011' AND zone_name = '長野県' AND zone_city_name = '須坂市' AND zone_street_name = '本郷町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '3820072' AND zone_name = '長野県' AND zone_city_name = '須坂市' AND zone_street_name = '南小河原町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6020854' AND zone_name = '京都府' AND zone_city_name = '京都市上京区' AND zone_street_name = '亀屋町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6028002' AND zone_name = '京都府' AND zone_city_name = '京都市上京区' AND zone_street_name = '鷹司町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6028143' AND zone_name = '京都府' AND zone_city_name = '京都市上京区' AND zone_street_name = '中之町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6048052' AND zone_name = '京都府' AND zone_city_name = '京都市中京区' AND zone_street_name = '鍛冶屋町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6040975' AND zone_name = '京都府' AND zone_city_name = '京都市中京区' AND zone_street_name = '菊屋町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '6008045' AND zone_name = '京都府' AND zone_city_name = '京都市下京区' AND zone_street_name = '茶磨屋町';");
$this->executeInstallerSql("DELETE FROM " . TABLE_ZONES_TO_POST_CODE_JP . " WHERE post_code = '7910223' AND zone_name = '愛媛県' AND zone_city_name = '東温市' AND zone_street_name = '上林';");


$sql = "SET @coid = (SELECT countries_id FROM " . TABLE_COUNTRIES . " WHERE countries_iso_code_3 = 'JPN' ORDER BY countries_id DESC LIMIT 1);";
$this->executeInstallerSql($sql);

$sql = "
REPLACE INTO " . TABLE_ZONES_TO_POST_CODE_JP . " (zone_country_id, zone_id, post_code, zone_name, zone_city_name, zone_street_name, zone_name_romaji, zone_city_name_romaji, zone_street_name_romaji) VALUES
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1960005','東京都','昭島市','代官山','Tokyo','Akishima Shi','Daikanyama'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1940031','東京都','町田市','南大谷','Tokyo','Machida Shi','Minamioya'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0), '6210047','京都府','亀岡市','千代川町明晴','Kyoto','Kameoka Shi','Chiyokawachoasuhare'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0), '5600032','大阪府','豊中市','螢池東町','Osaka','Toyonaka Shi','Hotarugaikehigashimachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0), '5600036','大阪府','豊中市','螢池西町','Osaka','Toyonaka Shi','Hotarugaikenishimachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0), '5600034','大阪府','豊中市','螢池南町','Osaka','Toyonaka Shi','Hotarugaikeminamimachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0), '5600031','大阪府','豊中市','螢池北町','Osaka','Toyonaka Shi','Hotarugaikekitamachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0), '5600033','大阪府','豊中市','螢池中町','Osaka','Toyonaka Shi','Hotarugaikenakamachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0), '0591362','北海道','苫小牧市','柏原','Hokkaido','Tomakomai Shi','Kashiwahara'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0), '0530053','北海道','苫小牧市','柳町','Hokkaido','Tomakomai Shi','Yanagicho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kanagawa' AND zone_country_id = @coid), 0), '2450019','神奈川県','横浜市泉区','ゆめが丘','Kanagawa','Yokohama Shi Izumi Ku','Yumegaoka'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kanagawa' AND zone_country_id = @coid), 0), '2430127','神奈川県','厚木市','森の里紅葉台','Kanagawa','Atsugi Shi','Morinosatomomijidai'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hyogo' AND zone_country_id = @coid), 0), '6511224','兵庫県','神戸市北区','山の街','Hyogo','Kobe Shi Kita Ku','Yamanomachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukuoka' AND zone_country_id = @coid), 0), '8112419','福岡県','糟屋郡篠栗町','庄','Fukuoka','Kasuya Gun Sasaguri Machi','Sho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukushima' AND zone_country_id = @coid), 0), '9650840','福島県','会津若松市','飯寺南','Fukushima','Aizuwakamatsu Shi','Niideraminami'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukushima' AND zone_country_id = @coid), 0), '9610973','福島県','白河市','北登り町','Fukushima','Shirakawa Shi','Kitanoborimachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukushima' AND zone_country_id = @coid), 0), '9610962','福島県','白河市','登り町','Fukushima','Shirakawa Shi','Noborimachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukushima' AND zone_country_id = @coid), 0), '9610851','福島県','白河市','南登り町','Fukushima','Shirakawa Shi','Minaminoborimachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Saitama' AND zone_country_id = @coid), 0), '3620049','埼玉県','上尾市','東今泉','Saitama','Ageo Shi','Higashiimaizumi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kanagawa' AND zone_country_id = @coid), 0), '2450003','神奈川県','横浜市泉区','岡津町','Kanagawa','Yokohama Shi Izumi Ku','Okatsucho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kanagawa' AND zone_country_id = @coid), 0), '2430402','神奈川県','海老名市','柏ケ谷','Kanagawa','Ebina Shi','Kashiwagaya'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0), '9502029','新潟県','新潟市西区','小新流通東','Niigata','Niigata Shi Nishi Ku','Koshinryutsuhigashi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Niigata' AND zone_country_id = @coid), 0), '9530067','新潟県','新潟市西蒲区','潟頭','Niigata','Niigata Shi Nishikan Ku','Katagashira'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kagoshima' AND zone_country_id = @coid), 0), '8911275','鹿児島県','鹿児島市','川上町','Kagoshima','Kagoshima Shi','Kawakamicho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Miyagi' AND zone_country_id = @coid), 0), '9813620','宮城県','黒川郡大和町','しあわせの杜','Miyagi','Kurokawa Gun Taiwa Cho','Shiawasenomori'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Ibaraki' AND zone_country_id = @coid), 0), '3111706','茨城県','行方市','北浦','Ibaraki','Namegata Shi','Kitaura'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tochigi' AND zone_country_id = @coid), 0), '3214317','栃木県','真岡市','中萩','Tochigi','Moka Shi','Nakahagi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Saitama' AND zone_country_id = @coid), 0), '3501216','埼玉県','日高市','武蔵高萩','Saitama','Hidaka Shi','Musashitakahagi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076490','東京都','港区','赤坂赤坂トラストタワー（地階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(chikai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076401','東京都','港区','赤坂赤坂トラストタワー（１階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(１kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076402','東京都','港区','赤坂赤坂トラストタワー（２階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(２kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076403','東京都','港区','赤坂赤坂トラストタワー（３階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(３kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076404','東京都','港区','赤坂赤坂トラストタワー（４階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(４kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076405','東京都','港区','赤坂赤坂トラストタワー（５階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(５kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076406','東京都','港区','赤坂赤坂トラストタワー（６階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(６kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076407','東京都','港区','赤坂赤坂トラストタワー（７階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(７kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076408','東京都','港区','赤坂赤坂トラストタワー（８階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(８kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076409','東京都','港区','赤坂赤坂トラストタワー（９階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(９kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076410','東京都','港区','赤坂赤坂トラストタワー（１０階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(１０kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076411','東京都','港区','赤坂赤坂トラストタワー（１１階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(１１kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076412','東京都','港区','赤坂赤坂トラストタワー（１２階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(１２kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076413','東京都','港区','赤坂赤坂トラストタワー（１３階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(１３kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076414','東京都','港区','赤坂赤坂トラストタワー（１４階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(１４kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076415','東京都','港区','赤坂赤坂トラストタワー（１５階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(１５kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076416','東京都','港区','赤坂赤坂トラストタワー（１６階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(１６kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076417','東京都','港区','赤坂赤坂トラストタワー（１７階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(１７kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076418','東京都','港区','赤坂赤坂トラストタワー（１８階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(１８kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076419','東京都','港区','赤坂赤坂トラストタワー（１９階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(１９kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076420','東京都','港区','赤坂赤坂トラストタワー（２０階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(２０kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076421','東京都','港区','赤坂赤坂トラストタワー（２１階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(２１kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076422','東京都','港区','赤坂赤坂トラストタワー（２２階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(２２kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076423','東京都','港区','赤坂赤坂トラストタワー（２３階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(２３kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076424','東京都','港区','赤坂赤坂トラストタワー（２４階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(２４kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076425','東京都','港区','赤坂赤坂トラストタワー（２５階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(２５kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076426','東京都','港区','赤坂赤坂トラストタワー（２６階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(２６kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076427','東京都','港区','赤坂赤坂トラストタワー（２７階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(２７kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076428','東京都','港区','赤坂赤坂トラストタワー（２８階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(２８kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076429','東京都','港区','赤坂赤坂トラストタワー（２９階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(２９kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076430','東京都','港区','赤坂赤坂トラストタワー（３０階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(３０kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076431','東京都','港区','赤坂赤坂トラストタワー（３１階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(３１kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076432','東京都','港区','赤坂赤坂トラストタワー（３２階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(３２kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076433','東京都','港区','赤坂赤坂トラストタワー（３３階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(３３kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076434','東京都','港区','赤坂赤坂トラストタワー（３４階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(３４kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076435','東京都','港区','赤坂赤坂トラストタワー（３５階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(３５kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1076436','東京都','港区','赤坂赤坂トラストタワー（３６階）','Tokyo','Minato Ku','Akasakaakasakatorasutotawa(３６kai)'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aichi' AND zone_country_id = @coid), 0), '4540978','愛知県','名古屋市中川区','赤星','Aichi','Nagoya Shinakagawa Ku','Akaboshi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aichi' AND zone_country_id = @coid), 0), '4540977','愛知県','名古屋市中川区','千音寺','Aichi','Nagoya Shinakagawa Ku','Sennonji'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Osaka' AND zone_country_id = @coid), 0), '5980076','大阪府','泉佐野市','貝田町','Osaka','Izumisano Shi','Kaitacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukuoka' AND zone_country_id = @coid), 0), '8191643','福岡県','糸島市','福吉','Fukuoka','Itoshima Shi','Fukuyoshi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aomori' AND zone_country_id = @coid), 0), '0370515','青森県','北津軽郡中泊町','小泊築上','Aomori','Kitatsugaru Gun Nakadomari Machi','Kodomaritsukiage'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aomori' AND zone_country_id = @coid), 0), '0370516','青森県','北津軽郡中泊町','小泊山崎','Aomori','Kitatsugaru Gun Nakadomari Machi','Kodomariyamazaki'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Miyagi' AND zone_country_id = @coid), 0), '9811228','宮城県','名取市','飯野坂東','Miyagi','Natori Shi','Iinozakahigashi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Gunma' AND zone_country_id = @coid), 0), '3703321','群馬県','吾妻郡東吾妻町','泉沢','Gunma','Agatsuma Gun Higashiagatsuma Machi','Izumisawa'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Saitama' AND zone_country_id = @coid), 0), '3550047','埼玉県','東松山市','高坂','Saitama','Higashimatsuyama Shi','Takasaka'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukuoka' AND zone_country_id = @coid), 0), '8130008','福岡県','糟屋郡粕屋町','内橋西','Fukuoka','Kasuya Gun Kasuya Machi','Uchihashinishi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Fukushima' AND zone_country_id = @coid), 0), '9696269','福島県','大沼郡会津美里町','新布才地','Fukushima','Onuma Gun Aizumisato Machi','Shinfusaichi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Saitama' AND zone_country_id = @coid), 0), '3502207','埼玉県','鶴ヶ島市','若葉','Saitama','Tsurugashima Shi','Wakaba'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Gifu' AND zone_country_id = @coid), 0), '5095403','岐阜県','土岐市','肥田町肥田','Gifu','Toki Shi','Hidachohida'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aichi' AND zone_country_id = @coid), 0), '4400833','愛知県','豊橋市','飯村町','Aichi','Toyohashi Shi','Imurecho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aichi' AND zone_country_id = @coid), 0), '4400032','愛知県','豊橋市','岩田町','Aichi','Toyohashi Shi','Iwatacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aichi' AND zone_country_id = @coid), 0), '4400041','愛知県','豊橋市','岩田町','Aichi','Toyohashi Shi','Iwatacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aichi' AND zone_country_id = @coid), 0), '4520964','愛知県','清須市','春日さくら','Aichi','Kiyosu Shi','Haruhisakura'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aichi' AND zone_country_id = @coid), 0), '4520961','愛知県','清須市','春日夢の森','Aichi','Kiyosu Shi','Haruhiyumenomori'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamaguchi' AND zone_country_id = @coid), 0), '7540072','山口県','山口市','小郡昭和町','Yamaguchi','Yamaguchi Shi','Ogorishowamachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamaguchi' AND zone_country_id = @coid), 0), '7540071','山口県','山口市','小郡東津','Yamaguchi','Yamaguchi Shi','Ogorihigashizu'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0), '8700881','大分県','大分市','深河内','Oita','Oita Shi','Fukagawauchi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0), '8740842','大分県','別府市','小倉町','Oita','Beppu Shi','Oguracho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0), '8740913','大分県','別府市','春木町','Oita','Beppu Shi','Harukimachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Oita' AND zone_country_id = @coid), 0), '8740912','大分県','別府市','南須賀町','Oita','Beppu Shi','Minamisukamachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Miyagi' AND zone_country_id = @coid), 0), '9870039','宮城県','遠田郡美里町','新峯山','Miyagi','Toda Gun Misato Machi','Shinmineyama'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Chiba' AND zone_country_id = @coid), 0), '2700104','千葉県','流山市','森のロジスティクスパーク','Chiba','Nagareyama Shi','Morinorojisutikusupaku'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3960041','長野県','伊那市','西箕輪','Nagano','Ina Shi','Nishiminowa'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0), '6050037','京都府','京都市東山区','西町','Kyoto','Kyoto Shi Higashiyama Ku','Nishicho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0), '6292313','京都府','与謝郡与謝野町','三河内','Kyoto','Yosa Gun Yosano Cho','Migochi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Yamaguchi' AND zone_country_id = @coid), 0), '7450613','山口県','周南市','夢ヶ丘','Yamaguchi','Shunan Shi','Yumegaoka'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Hokkaido' AND zone_country_id = @coid), 0), '0613770','北海道','石狩郡当別町','ロイズタウン','Hokkaido','Ishikari Gun Tobetsu Cho','Roizutaun'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Miyagi' AND zone_country_id = @coid), 0), '9893161','宮城県','仙台市青葉区','折立','Miyagi','Sendai Shi Aoba Ku','Oritate'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Miyagi' AND zone_country_id = @coid), 0), '9893162','宮城県','仙台市青葉区','西花苑','Miyagi','Sendai Shi Aoba Ku','Seikaen'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Miyagi' AND zone_country_id = @coid), 0), '9893163','宮城県','仙台市青葉区','茂庭','Miyagi','Sendai Shi Aoba Ku','Moniwa'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Chiba' AND zone_country_id = @coid), 0), '2760035','千葉県','八千代市','大和田新田','Chiba','Yachiyo Shi','Owadashinden'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Chiba' AND zone_country_id = @coid), 0), '2760035','千葉県','八千代市','高津','Chiba','Yachiyo Shi','Takatsu'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Chiba' AND zone_country_id = @coid), 0), '2760036','千葉県','八千代市','高津','Chiba','Yachiyo Shi','Takatsu'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Chiba' AND zone_country_id = @coid), 0), '2760037','千葉県','八千代市','高津東','Chiba','Yachiyo Shi','Takatsuhigashi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Tokyo' AND zone_country_id = @coid), 0), '1620855','東京都','新宿区','二十騎町','Tokyo','Shinjuku Ku','Nijukkimachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Okayama' AND zone_country_id = @coid), 0), '7070017','岡山県','美作市','美来','Okayama','Mimasaka Shi','Mirai'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aomori' AND zone_country_id = @coid), 0), '0391513','青森県','三戸郡五戸町','古舘','Aomori','Sannohe Gun Gonohe Machi','Furudate'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aomori' AND zone_country_id = @coid), 0), '0391564','青森県','三戸郡五戸町','古舘下川原','Aomori','Sannohe Gun Gonohe Machi','Furudateshimokawara'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aomori' AND zone_country_id = @coid), 0), '0391513','青森県','三戸郡五戸町','古舘向','Aomori','Sannohe Gun Gonohe Machi','Furudatemukai'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aomori' AND zone_country_id = @coid), 0), '0391513','青森県','三戸郡五戸町','古舘向川原','Aomori','Sannohe Gun Gonohe Machi','Furudatemukaikawara'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Aomori' AND zone_country_id = @coid), 0), '0391513','青森県','三戸郡五戸町','古舘脇','Aomori','Sannohe Gun Gonohe Machi','Furudatewaki'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820901','長野県','須坂市','小河原','Nagano','Suzaka Shi','Ogawara'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820071','長野県','須坂市','小河原町','Nagano','Suzaka Shi','Ogawaramachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820924','長野県','須坂市','亀倉','Nagano','Suzaka Shi','Kamegura'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820033','長野県','須坂市','亀倉町','Nagano','Suzaka Shi','Kameguramachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820907','長野県','須坂市','北相之島','Nagano','Suzaka Shi','Kitaainoshima'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820061','長野県','須坂市','北相之島町','Nagano','Suzaka Shi','Kitaainoshimamachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820002','長野県','須坂市','北旭ケ丘町','Nagano','Suzaka Shi','Kitaasahigaokamachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820092','長野県','須坂市','北原町','Nagano','Suzaka Shi','Kitaharamachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820933','長野県','須坂市','九反田','Nagano','Suzaka Shi','Kutanda'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820914','長野県','須坂市','幸高','Nagano','Suzaka Shi','Kotaka'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820931','長野県','須坂市','五閑','Nagano','Suzaka Shi','Gokan'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820906','長野県','須坂市','小島','Nagano','Suzaka Shi','Kojima'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820912','長野県','須坂市','小山','Nagano','Suzaka Shi','Koyama'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820929','長野県','須坂市','坂田','Nagano','Suzaka Shi','Sakata'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820026','長野県','須坂市','坂田町','Nagano','Suzaka Shi','Sakatamachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820916','長野県','須坂市','塩川','Nagano','Suzaka Shi','Shiogawa'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820922','長野県','須坂市','塩野','Nagano','Suzaka Shi','Shiono'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820005','長野県','須坂市','新田町','Nagano','Suzaka Shi','Shindenmachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820911','長野県','須坂市','須坂','Nagano','Suzaka Shi','Suzaka'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820099','長野県','須坂市','墨坂','Nagano','Suzaka Shi','Sumisaka'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820932','長野県','須坂市','高梨','Nagano','Suzaka Shi','Takanashi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820917','長野県','須坂市','田の神','Nagano','Suzaka Shi','Tanogami'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820073','長野県','須坂市','田の神町','Nagano','Suzaka Shi','Tanogamimachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820926','長野県','須坂市','栃倉','Nagano','Suzaka Shi','Tochigura'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820921','長野県','須坂市','豊丘','Nagano','Suzaka Shi','Toyoka'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820908','長野県','須坂市','豊島','Nagano','Suzaka Shi','Toyoshima'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820935','長野県','須坂市','中島','Nagano','Suzaka Shi','Nakajima'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820032','長野県','須坂市','夏端町','Nagano','Suzaka Shi','Natsubatamachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3862211','長野県','須坂市','仁礼','Nagano','Suzaka Shi','Nirei'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820925','長野県','須坂市','仁礼','Nagano','Suzaka Shi','Nirei'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820034','長野県','須坂市','仁礼町','Nagano','Suzaka Shi','Nireimachi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820905','長野県','須坂市','沼目','Nagano','Suzaka Shi','Numame'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820913','長野県','須坂市','野辺','Nagano','Suzaka Shi','Nobe'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820927','長野県','須坂市','八町','Nagano','Suzaka Shi','Hatcho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820902','長野県','須坂市','日滝','Nagano','Suzaka Shi','Hitaki'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820934','長野県','須坂市','福島','Nagano','Suzaka Shi','Fukujima'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820011','長野県','須坂市','本郷町','Nagano','Suzaka Shi','Hongocho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820072','長野県','須坂市','南小河原町','Nagano','Suzaka Shi','Minamiogawaracho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820928','長野県','須坂市','明徳','Nagano','Suzaka Shi','Myotoku'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820904','長野県','須坂市','村山','Nagano','Suzaka Shi','Murayama'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820903','長野県','須坂市','八重森','Nagano','Suzaka Shi','Yaemori'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820923','長野県','須坂市','米子','Nagano','Suzaka Shi','Yonako'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Nagano' AND zone_country_id = @coid), 0), '3820915','長野県','須坂市','米持','Nagano','Suzaka Shi','Yonamochi'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0), '6020854','京都府','京都市上京区','亀屋町','Kyoto','Kyoto Shi Kamigyo Ku','Kameyacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0), '6028002','京都府','京都市上京区','鷹司町','Kyoto','Kyoto Shi Kamigyo Ku','Takatsukasacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0), '6028143','京都府','京都市上京区','中之町','Kyoto','Kyoto Shi Kamigyo Ku','Nakanocho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0), '6048052','京都府','京都市中京区','鍛冶屋町','Kyoto','Kyoto Shi Nakagyo Ku','Kajiyacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0), '6040975','京都府','京都市中京区','菊屋町','Kyoto','Kyoto Shi Nakagyo Ku','Kikuyacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Kyoto' AND zone_country_id = @coid), 0), '6008045','京都府','京都市下京区','茶磨屋町','Kyoto','Kyoto Shi Shimogyo Ku','Chamayacho'),
(@coid, IFNULL((SELECT zone_id FROM zones WHERE zone_name = 'Ehime' AND zone_country_id = @coid), 0), '7910223','愛媛県','東温市','上林','Ehime','Toon Shi','Kamihayashi');
";
$this->executeInstallerSql($sql);
