<?php
/***************************************************************************
 *
 *   NewPoints plugin (/inc/languages/newpoints.lang.php)
 *	 Author: Pirata Nervo
 *   Copyright: � 2014 Pirata Nervo
 *   
 *   Website: http://www.mybb-plugins.com
 *
 *   NewPoints plugin for MyBB - A complex but efficient points system for MyBB.
 *
 ***************************************************************************/
 
/****************************************************************************
	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
****************************************************************************/

$l['newpoints'] = "Para/Puan Sistemi";
$l['newpoints_home'] = 'Ana Sayfa';
$l['newpoints_menu'] = 'Menu';
$l['newpoints_donate'] = 'Bağış';
$l['newpoints_donated'] = 'Seçilen kullanıcıya {1} ı başarıyla bağış yaptınız.';
$l['newpoints_user'] = 'Kullanıcı';
$l['newpoints_user_desc'] = 'Bağış göndermek istediğiniz kullanıcının kullanıcı adını girin.';
$l['newpoints_amount'] = 'Miktar';
$l['newpoints_amount_desc'] = 'Kullanıcıya göndermek istediğiniz para miktarını girin.';
$l['newpoints_reason'] = 'Sebep';
$l['newpoints_reason_desc'] = '(İsteğe bağlı) Bağış için bir sebep girin.';
$l['newpoints_submit'] = 'Gönder';
$l['newpoints_donate_subject'] = 'Yeni Bağış';
$l['newpoints_donate_message'] = 'Merhaba, Size {1} bağış gönderdim.';
$l['newpoints_donate_message_reason'] = 'Merhaba, size {1} bağışını gönderdim.. Sebeb:[quote]{2}[/quote]';
$l['newpoints_donations_disabled'] = 'Bağışlar yönetici tarafından devre dışı bırakıldı.';
$l['newpoints_cant_donate_self'] = 'Kendine bağış gönderemezsin.';
$l['newpoints_invalid_amount'] = 'Geçersiz bir puan girdiniz.';
$l['newpoints_invalid_user'] = 'Geçersiz bir kullanıcı adı girdiniz.';
$l['newpoints_donate_log'] = '{1}-{2}-{3}';
$l['newpoints_stats_disabled'] = 'İSTATİSTİK Yönetici tarafından devre dışı bırakıldı.';
$l['newpoints_statistics'] = 'İstatistik';
$l['newpoints_richest_users'] = 'En zengin kullanıcılar';
$l['newpoints_last_donations'] = 'Son bağışlar';
$l['newpoints_from'] = 'Zaman';
$l['newpoints_to'] = 'İle';
$l['newpoints_noresults'] = 'Sonuç bulunamadı.';
$l['newpoints_date'] = 'Tarih';
$l['newpoints_not_enough_points'] = 'Yeterince puana sahip değilsin.Gerekli puan: {1}';
$l['newpoints_task_ran'] = 'Yedekleme Yeni Noktalar Görev Ran';
$l['newpoints_amount_paid'] = 'Ödenen miktar';
$l['newpoints_source'] = 'Kaynak';
$l['newpoints_home_desc'] = 'Para/Puan Sistemi..<br />Gördüğünüz gibi, soldaki menüde kullanabileceğiniz çeşitli seçenekler vardır..<br /><br /><strong>Nasıl puan kazanırsın?</strong><br /><table align="center"><tr><td align="left"><strong>Kaynak</strong></td><td align="right"><strong>Ödenen miktar</strong></td></tr>{1}</table><br />';
$l['newpoints_home_credits'] = '<br />Herhangi bir sorunuz varsa yöneticinize başvurun.<br />Bu Çeviri <a href="www.teknopasaj.net">Teknopasaj.net tarafından yapıldı</a> Detaylı Bilgi İçin <a href="www.teknopasaj.net">teknopasaj.net</a>.';
$l['newpoints_action'] = 'Eylem';
$l['newpoints_chars'] = 'Char';
$l['newpoints_max_donations_control'] = 'Son 15 dakikada en fazla {1} seviyesine ulaştınız.Lütfen yenisini yapmadan önce bekleyin.';

// Settings translation
$l['newpoints_setting_newpoints_income_newpost_title'] = 'Yeni posta';
$l['newpoints_setting_newpoints_income_newpost_desc'] = 'Yeni gönderide alınan puan miktarı.';
$l['newpoints_setting_newpoints_income_newthread_title'] = 'Yeni Konu';
$l['newpoints_setting_newpoints_income_newthread_desc'] = 'Yeni konuda alınan puan miktarı.';
$l['newpoints_setting_newpoints_income_newpoll_title'] = 'Yeni anket';
$l['newpoints_setting_newpoints_income_newpoll_desc'] = 'Yeni ankette alınan puan miktarı.';
$l['newpoints_setting_newpoints_income_perchar_title'] = 'Karakter başına';
$l['newpoints_setting_newpoints_income_perchar_desc'] = 'Karakter başına alınan puan miktarı (yeni konu ve yeni yazı).';
$l['newpoints_setting_newpoints_income_minchar_title'] = 'Minimum karakter';
$l['newpoints_setting_newpoints_income_minchar_desc'] = 'Karakter başına puan miktarını almak için gerekli minimum karakterler.';
$l['newpoints_setting_newpoints_income_newreg_title'] = 'Yeni kayıt';
$l['newpoints_setting_newpoints_income_newreg_desc'] = 'Kayıt yaparken kullanıcı tarafından alınan puan miktarı.';
$l['newpoints_setting_newpoints_income_pervote_title'] = 'Anket başına oy';
$l['newpoints_setting_newpoints_income_pervote_desc'] = 'Oy veren kullanıcının alındığı nokta miktarı.';
$l['newpoints_setting_newpoints_income_perreply_title'] = 'Cevap başına';
$l['newpoints_setting_newpoints_income_perreply_desc'] = 'Biri cevap verdiğinde, iş parçacığının yazarı tarafından alınan nokta miktarı.';
$l['newpoints_setting_newpoints_income_pmsent_title'] = 'Özel Mesaj ';
$l['newpoints_setting_newpoints_income_pmsent_desc'] = 'Bir kullanıcının her zaman özel bir mesaj gönderdiği zamanın alındığı puan.';
$l['newpoints_setting_newpoints_income_perrate_title'] = 'Oran başına';
$l['newpoints_setting_newpoints_income_perrate_desc'] = 'Bir kullanıcının her bir konuyu oyladığında alınan puan miktarı.';
$l['newpoints_setting_newpoints_income_pageview_title'] = 'Sayfa başına görünüm';
$l['newpoints_setting_newpoints_income_pageview_desc'] = 'Bir kullanıcı her sayfayı görüntülemesinde alınan puan miktarı.';
$l['newpoints_setting_newpoints_income_visit_title'] = 'Ziyaret başına';
$l['newpoints_setting_newpoints_income_visit_desc'] = 'Her kullanıcının forumu ziyaret ettiğinde alınan puan miktarı.("ziyaretler" = Yeni MyBB oturumu (15 dakika sonra sona eriyor))';
$l['newpoints_setting_newpoints_income_referral_title'] = 'Refferans Başına ';
$l['newpoints_setting_newpoints_income_referral_desc'] = 'Bir kullanıcının her yönlendirildiğinde alınan puan miktarı.(Davetilen kullanıcı puanları alan)';


?>