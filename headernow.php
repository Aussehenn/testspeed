<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex" />

<?php
$idnews = '';
$idnews = $_GET['who'];
$titleseo = 'Что такое торговая марка';
$descriptionseo = '����������� �������� ����� � �������, ����� � ���� ����. �������� ����� � ����� UA. ������';
$keyseo = '�������� �����, �������� �����, ����������� �������� �����, �������� ����, ����������� �������� �����, �������� �����, �����, ����� UA, ����������� �������,  ������������� ����������� �������� �����, ������������� ����������� �������� �����, ����������� ������ UA';
if(isset($idnews)) {
  $sql=mysql_query("select * from news where id = '$idnews'") or die ("Wrong query");
	$data=mysql_fetch_array($sql);
	$titled = strip_tags($data['title']);
	$bodyd = $data['body'];
	$descriptionseostr = preg_replace("/\[(.*?)\]\s*(.*?)\s*\[\/(.*?)\]/", "[$1]$2[/$3]", html_entity_decode($bodyd));
	$descriptionseostr = strip_tags($descriptionseostr);

  if(empty($data['titleseo'])) {
  	$titleseo = trim($titled);
    $titleseo = explode('.', $titleseo, 2);
    $titleseo = $titleseo[0];
    if(mb_strlen($titleseo) > 90){
    	$titleseo = mb_substr($titleseo, 0, 90);
    	$titleseo = preg_replace('~(.*)\s[^\s]*$~s', '\\1', $titleseo);
    }
  } else {
  	$titleseo = trim($data['titleseo']);
    $titleseo = explode('.', $titleseo, 2);
    $titleseo = $titleseo[0];
    if(mb_strlen($titleseo) > 90){
    	$titleseo = mb_substr($titleseo, 0, 90);
    	$titleseo = preg_replace('~(.*)\s[^\s]*$~s', '\\1', $titleseo);
    }
  } 

  if(empty($data['keyseo'])) {
    $keyseo = $keyseo;
  } else {
    $keyseo = $data['keyseo'];
  }

  if(empty($data['descriptionseo'])) {
    $descriptionseo = str_replace(array("\r","\n"),"",trim($descriptionseostr));
    if(mb_strlen($descriptionseo) > 150){
    	$descriptionseo = mb_substr($descriptionseo, 0, 150);
    	$descriptionseo = preg_replace('~(.*)\s[^\s]*$~s', '\\1', $descriptionseo);
    }
  } else {
    $descriptionseo = str_replace(array("\r","\n"),"",trim($data['descriptionseo']));
    if(mb_strlen($descriptionseo) > 150){
    	$descriptionseo = mb_substr($descriptionseo, 0, 150);
    	$descriptionseo = preg_replace('~(.*)\s[^\s]*$~s', '\\1', $descriptionseo);
    }
  }
}
?>

<?php
if (isset($idnews) && !empty($idnews)) {
$urlnews = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$urlpath = parse_url($urlnews, PHP_URL_PATH);
if ($urlpath == '/show_news.php') echo '<link rel="canonical" href="' . $urlnews . '" />' . "\n";
}
?>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $titleseo;?></title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__contacts">
                    <div class="header__phones">
                        <span class="tell__phone">Тел.:</span>
                        <a href="tel:+380639425533:">063 942 55 33,</a>
                        <a href="tel:+380987733353">098 773 33 53,</a>
                        <a href="tel:+380994330133">099 433 01 33</a>
                    </div>
                    <div class="header__social">
                        <a href="">Telegram</a>
                        <a href="">Viber</a>
                        <a href="">Skype</a>
                        <a href="mail:info@tm.ua">info@tm.ua</a>
                        <a class="header__location" href="https://maps.app.goo.gl/6ejBiQsFa8Zc2PTe7" target="_blank">
                            <img src="../images/location2.svg" width="30" height="30" alt="location">
                        </a>
                    </div>
            </div>
            <nav class="mobile-nav menu">
                <div class="title__block">
                    <div class="menu__title">Содержание</div>
                    <a class="close__btn" href="#">
                        <svg width="25" height="25" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M47.6875 47.6875L1.3125 1.3125M1.3125 47.6875L47.6875 1.3125L1.3125 47.6875Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg> 
                    </a>
                </div>
                <div class="menu__inner">
                    <ul class="menu__list">
                        <li class="menu__item">
                            <a class="menu__link" href="index.php">Главная</a>
                        </li>
                        <li class="menu__item active-page">
                            <span class="menu__link active-page">Торговая марка</span>
                            <ul>
                                <li><a href="oznakahnow.php">Что такое торговая марка? Виды ТМ, требования к ним и термины</a></li>
                                <li><a href="#">Домен UA</a></li>
                                <li><a href="#">Что и как регистрируют? Порядок и сроки регистрации</a></li>
                                <li><a href="#">Регистрация торговой марки: процедура и порядок работы по регистрации</a></li>
                                <li><a href="#">Проверка торговой марки</a></li>
                                <li><a href="#">С кем регистрировать марку?</a></li>
                                <li><a href="#">Международная регистрация торговых марок</a></li>
                                <li><a href="#">Торговая марка Европы</a></li>
                                <li><a href="#">Торговые марки Польши</a></li>
                                <li><a href="#">Передача прав на торговую марку</a></li>
                                <li><a href="#">Суд торговая марка и авторское право</a></li>
                                <li><a href="#">Примеры торговых марок, зарегистрированных нами</a></li>
                                <li><a href="#">Интересные торговые марки</a></li>
                                <li><a href="#">Классификация товаров и услуг для регистрации знаков</a></li>
                                <li><a href="#">База зарегистрированных ТМ</a></li>
                            </ul>
                        </li>
                        <li class="menu__item">
                            <span class="menu__link">Штрих-код</span>
                            <ul>
                                <li><a href="#">Получение штрих-кода</a></li>
                                <li><a href="#">Штрих-коды стран</a></li>
                            </ul>
                        </li>
                        <li class="menu__item">
                            <span class="menu__link">Авторское право</span>
                            <ul>
                                <li><a href="#">Авторское право и смежные права</a></li>
                                <li><a href="#">Регистрация авторских прав</a></li>
                                <li><a href="#">Регистрация авторских прав в США</a></li>
                            </ul>
                        </li>
                        <li class="menu__item">
                            <span class="menu__link">Патент</span>
                            <ul>
                                <li><a href="#">Изобретение</a></li>
                                <li><a href="#">Промышленный образец</a></li>
                                <li><a href="#">Патентный поиск</a></li>
                            </ul>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#">Форум</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#">Статьи</a>
                            <ul>
                                <li><a href="#">Торговая марка в Украине</a></li>
                                <li><a href="#">Домен UA</a></li>
                                <li><a href="#">Международная регистрация</a></li>
                                <li><a href="#">Изобретение</a></li>
                                <li><a href="#">Полезная модель</a></li>
                                <li><a href="#">Промышленный образец</a></li>
                                <li><a href="#">Авторское право</a></li>
                                <li><a href="#">Лицензионныі договор</a></li>
                                <li><a href="#">Судебная практика</a></li>
                                <li><a href="#">Товарные знаки в России</a></li>
                                <li><a href="#">Ноу-хау</a></li>
                            </ul>
                        </li>
                        <li class="menu__item">
                            <span class="menu__link">Законы</span>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#">Прайс-лист</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#">Об агенстве</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#">Адрес офиса</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <div class="mobile-header__info">
                    <div class="title">
                        <div class="title__name"> <span>Регистрация торговой марки</span><br> <span class="title__place">Украина, Евросоюз и все страны мира</span></div>
                    </div>
                    <div class="mobile-header__inner">
                        <div class="mobile__btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>          
                        <a class="logo" href="https://tm.ua">
                            <span>tm.ua</span>
                            <span class="blue"></span>
                            <span class="yellow"></span>
                        </a>
                        <div class="header__lang">
                            <a id="langBtn-mobile"        class="lang-btn" href="#">UA</a><br>
                            <a id="langBtnInActiveMobile" class="lang-btn gray" href="#">RU</a>
                        </div>
                    </div>
                </div>
                <div class="header__info">
                        <a class="logo" href="https://tm.ua">
                            <span>tm.ua</span>
                            <span class="blue"></span>
                            <span class="yellow"></span>
                        </a>
                        <div class="title">
                            <div class="title__name">Регистрация торговой марки <br> <span class="title__place">Украина, Евросоюз и все страны мира</span></div>
                        </div>

                        <div class="header__lang">
                            <a id="langBtn" class="lang-btn" href="#">UA</a><br>
                            <a id="langBtnInActive"  class="lang-btn gray" href="#">RU</a>
                        </div>
                </div>
            </div>
        </header>

