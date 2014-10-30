<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>

    <title>Фотограф Ксюша Буланова</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//cdn.rawgit.com/hilios/jQuery.countdown/2.0.4/dist/jquery.countdown.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


</head>

<body>

<div class="layout">

<div class="wrap">
<div class="content">

<div class="column">

    <div class="link">
        <div id="pop">
            <a href="#" id="apop">заказать сейчас</a>
        </div>
        <div class="testDiv">
            <div class="formOnPopUp">

                <form name="form" action="" method="post">


                    <input type="text" name="name" placeholder="Ваше имя" value="">

                    <input type="text" name="telephone" placeholder="Ваш телефон" value="">

                    <input type="text" name="email" placeholder="Ваш e-mail" value="">
                    <button type="submit" name="submit">заказать съемку</button>

            </div>

        </div>
        <div id="overlay"></div>
        <script type="text/javascript">
            $('#apop').click(function (e) {
                $('.testDiv').css('display', 'block');
                $('.testDiv').css('z-index', '1');
                $('#overlay').fadeIn(900);
            });

            $('#overlay').click(function (e) {
                $('#overlay').fadeOut(500, function () {
                    $('#apop').css('z-index', '1');
                    $('.testDiv').hide();
                })
            });


        </script>
    </div>

    <div class="logo"></div>
    <div class="form">

        <form name="form" action="" method="post">


            <input type="text" name="name" placeholder="Ваше имя" value="">

            <input type="text" name="telephone" placeholder="Ваш телефон" value="">

            <input type="text" name="email" placeholder="Ваш e-mail" value="">
            <button type="submit" name="submit">заказать съемку</button>


    </div>

</div>

<div class="time">
</div>
<div class="days_text_first">Дни</div>
<div class="hours_text_first">Часы</div>
<div class="minutes_text_first">Мин</div>
<div class="seconds_text_first">Сек</div>

<script>
    var sixMonths = new Date(new Date().valueOf() + 6 * 30 * 24 * 60 * 60 * 1000);

    $('.time').countdown(sixMonths).on('update.countdown', function (event) {
        var $this = $(this).html(event.strftime(''
        + '<div class="days_timer">%-d</div>  '
        + '<div class="hours_timer">%H</div>'
        + '<div class="minutes_timer">%M</div>'
        + '<div class="seconds_timer">%S</div>'));
    });
</script>


<div class="textheader">
    <p>Фотограф Ксения Буланова. Свадебная, семейная и портретная фотография</p>
</div>
<div class="list">
</div>

<div class="align">
    <div class="inneralign"> Почему именно я?</div>
</div>

<div class="text">
    <p><span id="color">Я люблю свою работу!</span> Фотография для меня не просто способ заработка - это стиль жизни.
        Со временем многие моменты исчезают из памяти, но взяв в руки фотокнигу или взглянув на снимок,
        мы снова можем пережить все те
        эмоции и чувства, которые нам так дороги.
    </p>

    <p><span id="color">Я люблю своих клиентов!</span> Нередко мои клиенты становятся моими хорошими друзьями.
        Для меня очень важно, что они доверяют мне съемку своих самых важных событий в жизни на протяжении не одного
        года.

    </p>

    <p><span id="color">Индивидуальный подход.</span> Со мной легко и весело работать, я стараюсь чтобы
        каждый клиент чувствовал себя комфортно и непринужденно на фотосессии.
        Моя главная задача, что бы время прошло так, как нравится именно вам!
    </p>

    <p><span id="color">Качество материала.</span> Я всегда отдаю материал в назначенный срок,
        а гарантией качества моих работ могут<br/> послужить положительные отзывы моих любимых клиентов!</p>

</div>


<div class="ordertwo">
    <div class="meetup">Хотите встретиться и более подробно обсудить съемку?</div>
</div>

<div class="formtwo">


    <form name="form" action="" method="post">


        <input type="text" name="name1" placeholder="Ваше имя" value="">

        <input type="text" name="telephone1" placeholder="Ваш телефон" value="">

        <input type="text" name="email1" placeholder="Ваш e-mail" value="">
        <button type="submit" name="submit1">заказать съемку</button>


    </form>

</div>

<div class="timetwo">
    <div class="time">

    </div>
    <div class="days_text">Дни</div>
    <div class="hours_text">Часы</div>
    <div class="minutes_text">Мин</div>
    <div class="seconds_text">Сек</div>

    <script>
        var sixMonths = new Date(new Date().valueOf() + 6 * 30 * 24 * 60 * 60 * 1000);

        $('.time').countdown(sixMonths).on('update.countdown', function (event) {
            var $this = $(this).html(event.strftime(''
            + '<div class="days_timer">%-d</div>  '
            + '<div class="hours_timer">%H</div>'
            + '<div class="minutes_timer">%M</div>'
            + '<div class="seconds_timer">%S</div>'));
        });
    </script>
</div>

<div class="myworks">
    <div class="innerworks">Мои работы</div>
</div>

<div class="portfolio">
    <a href="img/1.jpg"> <img src="thumb/1.jpg"/></a>
    <a href="img/2.jpg"> <img src="thumb/2.jpg"/></a>
    <a href="img/3.jpg"> <img src="thumb/3.jpg"/></a>
    <a href="img/4.jpg"> <img src="thumb/4.jpg"/></a>
    <a href="img/5.jpg"> <img src="thumb/5.jpg"/></a>
    <a href="img/6.jpg"> <img src="thumb/6.jpg"/></a>
    <a href="img/7.jpg"> <img src="thumb/7.jpg"/></a>
    <a href="img/8.jpg"> <img src="thumb/8.jpg"/></a>
    <a href="img/9.jpg"> <img src="thumb/9.jpg"/></a>
    <a href="img/10.jpg"> <img src="thumb/10.jpg"/></a>
    <a href="img/11.jpg"> <img src="thumb/11.jpg"/></a>
    <a href="img/12.jpg"> <img src="thumb/12.jpg"/></a>
    <a href="img/13.jpg"> <img src="thumb/13.jpg"/></a>
    <a href="img/14.jpg"> <img src="thumb/14.jpg"/></a>
    <a href="img/15.jpg"> <img src="thumb/15.jpg"/></a>
    <a href="img/16.jpg"> <img src="thumb/16.jpg"/></a>
    <a href="img/17.jpg"> <img src="thumb/17.jpg"/></a>
    <a href="img/18.jpg"> <img src="thumb/18.jpg"/></a>
    <a href="img/19.jpg"> <img src="thumb/19.jpg"/></a>
    <a href="img/20.jpg"> <img src="thumb/20.jpg"/></a>
</div>

<div class="textphoto">Еще больше фотографий Вы можете посмотреть у меня в блоге <a href="http://kseniyabulanova.com">kseniyabulanova.com</a>
</div>

<div class="orderthree">
    Вам понравились мои работы?
</div>

<div class="borderdown">
    <div class="howiwork">
        <div class="howiworktext">Как я работаю?</div>
    </div>

    <div class="howiworklist">
        <p align="center">Позвоните мне и мы договоримся о встрече</p>

        <div class="round"></div>

        <p align="center">На встрече мы подробно обсудим все интересующие Вас вопросы</p>

        <div class="round"></div>

        <p align="center">Мы заключаем договор и обсуждаем еще раз условия съемки</p>

        <div class="round"></div>

        <p align="center">Мы проводим Вашу фотосессию</p>

        <div class="round"></div>

        <p align="center">Я работаю над Вашими снимками, чтобы они стали еще лучше</p>

        <div class="round"></div>

        <p align="center">Вы получаете Ваши долгожданные фотографии</p>

        <div class="line"></div>

    </div>

    <div class="reviews">
        <div class="review">
            <div class="reviewtext">Отзывы</div>
        </div>

        <div style="margin-left: 100px;margin-top: -50px;"><img src="images/first.png">
        </div>
        <div style="margin-top: -180px; margin-left: 260px; font-size: 16px;"><p align="justify">Буланову Ксюшу я знаю с
                подросткового возраста: мы были в одной компании молодежи, ежегодно приезжающей на каникулы к бабушкам в
                деревню. Уже тогда я ее помню с фотоаппаратом в руках). Затем она была моим экскурсоводом в Минске,
                учась в Академии искусств. Ее особое творческое мышление всегда выделяло ее из толпы. И когда Ксюша
                становилась лауреатом множества выставок, – это меня не удивляло. Поэтому ответ на вопрос, кто будет
                моим фотографом на свадьбе, был однозначен – Буланова!
                Съемка свадьбы проходила в Измайловском Кремле Москвы. У нас не было никакого опыта работы с фотографом.
                Мы сильно волновались. Но Ксюша сразу нашла к нам подход, пара советов и муж быстро раскрепостился.
                Съемка прошла на «ура»! О, с каким трепетом мы ждали фотографий. И не зря ждали! Восторг до сих пор не
                прошел. Я счастлива, муж доволен: он все не на радуется своим шикарным портретам!
                Теперь ищем повод для следующей работы с Ксюшей! И желаем мирового успеха!<br/>
                <i>Юля и Паша</i></p></div>

        <div class="line1"></div>

        <div style="margin-left: 100px;margin-top: -102px;"><img src="images/second.png">
        </div>
        <div style="margin-top: -180px; margin-left: 260px; font-size: 16px;"><p align="justify">Когда увидели
                фотографии Ксении вопрос о том, кто будет нашим свадебным фотографом отпал сам собой - и мы не
                прогадали!!! Фотографии получились очень "живыми" и разнообразными!!! В восторге остались не только мы
                но и наши родные и друзья!!! И , что еще не мало важно, работать с Ксюшей было для нас сплошным
                удовольствием!!! Она во всем нам помогала и подсказывала!!! Ксюша, еще раз спасибо тебе за наши
                замечательные фотографии!!!
                <br/>
                <i>Оля и Максим</i></p></div>


        <div class="line1"></div>

        <div style="margin-left: 100px;margin-top: -100px;"><img src="images/third.png">
        </div>
        <div style="margin-top: -180px; margin-left: 260px; font-size: 16px;"><p align="justify">Наши фотографии самые
                лучшие на свете! Что еще можно сказать, перед нашей свадьбой, я была уверена, зная своего мужа, что
                ничего хорошего не выйдет, т.к. его не растормошить, НО это было глубочайшее заблуждение! Прошло пять
                минут съемок и я начала понимать, что мой муж позирует!!! Это было открытие для меня! Сейчас,
                пересматривая свои фотографии, до сих пор не верится, что это мы. Ни единого раза не пожалели о
                сделанном выборе на фотографе! Мне хотелось чего-то необычного, а мужу, все-равно "только сильно не
                трогайте меня", я получила даже больше. На сегодняшний день все спрашивают только два вопроса: "Это в
                Минске так красиво?" и "А телефон фотографа можно?" ))) Скоро у нас родится ребенок и я знаю кто будет
                его фотографировать!
                <br/>
                <i>Вероника и Дима</i></p></div>

        <div class="line1"></div>

        <div style="margin-left: 100px;margin-top: -110px;"><img src="images/fourth.png">
        </div>
        <div style="margin-top: -178px; margin-left: 260px; margin-bottom: 41px; font-size: 16px;"><p align="justify">
                Ксюш, спасибо тебе большое за эти чудесные фото!!!!Мы с огромным удовольствием пересматриваем фотографии
                и со свадьбы, и с лавстори!!)) Ты молодец!! Твои фото передают все эмоции и чувства, а это самое
                главное!! Ты настолько чувствуешь людей, что даже для двух слайдшоу с лавстори подбираешь самые наши
                любимые песни))) Твори и продолжай дарить улыбки своими работами))) Еще раз спасибо))) Нам будет что
                показать детям)))))))))
                <br/>
                <i>Яна и Ваня</i></p></div>

        <div class="line1"></div>

        <div style="margin-left: 100px;margin-top: -100px;"><img src="images/fifth.png">
        </div>
        <div style="margin-top: -180px; margin-left: 260px; font-size: 16px;"><p align="justify">Работая на телевидении
                не первый год, и ежедневно общаясь с творческими людьми, мы, к сожалению, давно заметили печальную
                закономерность: количество пафосных титулов у заслуженных лауреатов мегапремий по правильному обращению
                с камерой не всегда (а вернее совсем не часто) адекватно качеству снимаемой ими продукции.
                Поэтому, выбирая в море имен и картинок кандидатуру фотографа для собственной свадьбы, мы очень
                волновались
                и хотели найти молодого талантливого профессионала с горящим взглядом, без мании величия. Талант
                невозможно измерить вдлину, на вес или по курсу центробанка. Он либо есть, либо нет.
                Cпасибо Ксюше Булановой!
                Удачи, Ксюша! И до встречи на свадьбах наших друзей и выставках твоих работ!!!<br/>

                <i>С благодарностью, Даниил и Вероника Мишины</i></p></div>


    </div>


</div>


</div>
</div>
</div>


</body>

</html>