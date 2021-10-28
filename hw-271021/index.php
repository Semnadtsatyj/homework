<?php
session_start();
 /*date_default_timezone_set("Asia/Yekaterinburg");
//date_default_timezone_set("America/Los_Angeles");

$val = date(G);
function timeStyle($dat) {
    if ($dat >= 0 && $dat < 8 || $dat > 19) {
        $now = ['n1', 'n2', 'n3', 'n4'];
    } else {
        $now = ['d1', 'd2', 'd3', 'd4'];
    }
    return $now;
}
$style = timeStyle($val);*/

// Задача про дату рождения
$my = "24.10.1982";
function birthday($dat) {
    $today = date("d.m.Y");
    $razn = (strtotime($today) - strtotime($dat)) / (60 * 60 * 24);
    return floor($razn);
}

//Задачи на цвета слов на моем сайте
$about_me = "<p>Родился в 1982 году. В 1989 году поступил в среднюю общеобразовательную 
школу №1, окончил в 1997 году. В этом же году поступил в колледж по специальности 
техническое обслуживание и ремонт промышленного оборудования. После окончания колледжа был 
призван в ВС РФ. Срочную службу проходил в 15 отдельном батальоне быстрого реагирования 
ФС ЖДВ РФ. Был демобилизован в 2003 году в связи с окончанием срока службы. 
В феврале 2005 года был принят в ФГУП «Ведомственная охрана» 
Министерства энергетики Российской Федерации. Осуществлял вооруженную охрану объектов 
теплоэнергетики. В 2009 году поступил в Челябинский государственный университет по 
специальности «Государственное и муниципальное управление». Окончил в 2013 году. В 
настоящее время работаю на одном из предприятий Уральской горно-металлургической компании. Не судим. Женат. Двое детей.</p>";
function about($str) {
    $anotherColor = substr($str, 0, strpos($str, ".", 0));
    $about = strstr($str, ".");
    echo "<span style='color: #800f00'>$anotherColor</span>";
    echo "<span style='color: black'>$about</span>";
    }


$about_lesson = "<p>Поступить на курс было, наверное, одним из лучших решений в моей 
жизни. Новая среда, полезные знания и знакомства, необычные задачи, преподаватель, 
который всегда поддержит в трудную минуту и доступно объяснит любую тему, всё это влияет 
на желание учиться. </p>
<p>Лично для меня Школа стала ответом на вопрос, Кем я хочу заниматься в дальнейшем, 
и дает возможность получить базовые знания для этого, так что это отличный вариант 
для начинающего программиста в области Bitrix-разработки. </p>
<p>Давайте продолжим!</p>";
function ables($str) {
    $arr = explode(" ", $str);
    foreach ($arr as $key => $word) {
        $key1 = $key % 2;
        if ($key1 == 0) {
            echo "<span style='color: red'>$word</span> ";
        } else {
            echo "<span style='color: green'>$word</span> ";
        }
    }
}

//Задача про количество слов

function wordCount($arr) {
    $summ = 0;
    foreach ($arr as $str) {
        $summ += count(explode(" ", $str));
    }
    return $summ;
}

//Задача про гласные
function letter($arr) {
    $str_glas = implode(" ", $arr);
    $strGlasLow = mb_strtolower($str_glas);
    $sumGlas = 0;
    $arrGlas = ['а', 'о', 'э', 'е', 'и', 'ы', 'у', 'ё', 'ю', 'я'];
    foreach ($arrGlas as $var) {
        $sumGlas += substr_count($strGlasLow, $var);
    }
        return $sumGlas;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Домашнее задание</title>
</head>
<body>
<?php include("header.php"); ?>
<section class="content">
    <figure class="<? echo $changeTheme->changeTheme()[1];?>">
        <img class="iam" src="image/iam.jpg" alt="Мое фото">
    </figure>

    <section class="name <? echo $changeTheme->changeTheme()[2]; ?>"><? echo $name = "Сергеев Сергей"; ?></section>
    <section class="about_me <? echo $changeTheme->changeTheme()[2]; ?>">
        <? about($about_me);

        ?>
    </section>

    <section class="about_lessons <? echo $changeTheme->changeTheme()[2]; ?>">
        <? ables($about_lesson);?>
        <a href="https://school.fact.digital/"><img class="logo" src="image/logo-f.png" alt="Факт-Школа"
                                                    title="Перейти на Факт-Школу"></a>
    </section>
</section>

<section class="block_pic <? echo $changeTheme->changeTheme()[2]; ?>">
    <h2 class="hdr">Шедевры живописи</h2>
    <div class="elem_pic <? echo $changeTheme->changeTheme()[3]; ?>">
        <img src="image/9val.jpg" alt="Айвазовский - Девятый вал">
        <p><? echo $elem1 = "Одна из самых знаменитых картин российского художника-мариниста Ивана Айвазовского. Живописец изображает море после очень сильного ночного шторм и людей, потерпевших кораблекрушение. Лучи солнца освещают громадные волны. Самая большая из них — девятый вал — готова обрушиться на людей, пытающихся спастись на обломках мачты. Несмотря на то, что корабль разрушен и осталась только мачта, люди на мачте живы и продолжают бороться со стихией. Тёплые тона картины делают море не таким суровым и дают надежду, что люди будут спасены." ?></p>
    </div>
    <div class="elem_pic <? echo $changeTheme->changeTheme()[3]; ?>">
        <img src="image/despair.jpg" alt="Курбе - Отчаяние">
        <p><? echo $elem2 = "На картине Гюстав Кюрбе талантливо изобразил самого себя в минуты негодования, смятения, отчаяния. В жизни у него были такие тяжёлые моменты, когда душа мечется и требует выхода наружу. В данной ситуации художник выплеснул своё эмоциональное состояние красками на холст. В центре полотна изображён красивый, молодой облик человека, с усами, бородкой и широко раскрытыми глазами, во взгляде которого заметен страх. Брови дугой говорят о каком – то удивлении, но в тот же момент о неизбежном событии, которое он узнал. Руки его подняты вверх, к голове. Художник очень потрясён этим моментом!" ?></p>
    </div>
    <div class="elem_pic <? echo $changeTheme->changeTheme()[3]; ?>">
        <img src="image/night.jpg" alt="Ван Гог - Черная ночь">
        <p><? echo $elem3 = "Одна из наиболее известных картин Винсента Ван Гога. Представляет вид из восточного окна спальни Ван Гога в Сен-Реми-де-Прованс на предрассветное небо и вымышленную деревню.Ночь окутала воображаемый город. На переднем плане — кипарисы. Эти деревья, в античной традиции символизировали печаль, смерть. В христианской же традиции кипарис — символ вечной жизни. У Ван Гога кипарис исполняет обе роли: это и печаль художника, который вскоре покончит с собой, и вечность бега Вселенной." ?> </p>     </div>
    <div class="elem_pic <? echo $changeTheme->changeTheme()[3]; ?>">
        <img src="image/pompei.jpg" alt="Брюллов - Последний день Помпей">
        <p><? echo $elem4 = "Последний день Помпеи» — крупноформатная картина русского художника Карла Брюллова. Карл Брюллов побывал на раскопках Помпей, там же ему и пришла мысль написать большое полотно, посвящённое гибели Помпей. Сюжет полотна был неслыханным в практике исторической живописи. Художник показал не подвиг одного героя, а затронувшее многих людей стихийное бедствие, тем самым «впервые в русскую историческую живопись вошёл народ». Произведение Брюллова стало «не просто одним из очередных достижений национальной школы, а явлением, ускорившим эволюцию искусства»." ?></p>
    </div>
    <div class="elem_pic2 <? echo $changeTheme->changeTheme()[3]; ?>">
        <img src="image/vavil.jpg" alt="Вавилонская башня">
        <p><? echo $elem5 = "«Вавилонская башня» — картина живописца Питера Брейгеля. 
        В основу картины положен сюжет из Первой книги Моисея о строительстве Вавилонской башни, которая должна была, по замыслу людей, достичь вершиной неба: «Построим себе город и башню высотою до небес». Чтобы усмирить их гордыню, Бог смешал языки строителей, так что они больше не могли понимать друг друга, и рассеял их по всей земле; таким образом, реализация задуманного грандиозного плана не была завершена. Мораль сюжета — бренность всего земного и тщетность стремлений смертных сравниться с Господом." ?></p>
    </div>
    <div class="elem_pic3 <? echo $changeTheme->changeTheme()[3]; ?>">
        <img src="image/vitiaz.jpg" alt="Три богатыря">
        <p><? echo $elem6 = "«Богатыри» — картина Виктора Васнецова. На картине изображены три богатыря — главные герои русских былин. 
        Посередине на вороном коне Илья Муромец, смотрит вдаль из-под ладони, в одной руке у богатыря копьё и щит, в другой булатная палица. Слева на белом коне Добрыня Никитич, вынимает меч-кладенец из ножен, готовый в любой момент ринуться в бой. Справа на коне бурой масти Алёша Попович, держит в руках лук со стрелами. На боку у Алёши Поповича колчан. На другом боку у него гусли. Трое богатырей стоят на широкой равнине, переходящей в невысокие холмы, посреди пожухлой травы и изредка проглядывающих маленьких ёлочек. Небо пасмурное и тревожное, означает грозящую богатырям опасность." ?></p>    </div>
    <div class="elem_pic2 <? echo $changeTheme->changeTheme()[3]; ?>">
        <img src="image/venera.jpg" alt="Рождение Венеры">
        <p><? echo $elem7 = "«Рождение Венеры» — картина итальянского художника тосканской школы Сандро Боттичелли. Картина иллюстрирует миф рождения Венеры (греч. Афродиты). Обнажённая богиня плывет к берегу в створке раковины ребристой сердцевидки или морского гребешка, подгоняемая ветром. В левой части картины Зефир (западный ветер) в объятиях своей супруги Хлориды (римский аналог — Флора) дует на раковину, создавая ветер, наполненный цветами. На берегу богиню встречает одна из граций." ?> </p>
    </div>
    <div class="elem_pic3 <? echo $changeTheme->changeTheme()[3]; ?>">
        <img src="image/war.jpg" alt="Апофеоз войны">
        <p><? echo $elem8 = "«Апофеоз войны» — одно из самых ярких произведений художника Василия Васильевича Верещагина. На раме сделана надпись: «Посвящается всем великим завоевателям — прошедшим, настоящим и будущим». На картине изображена пирамида из человеческих черепов на фоне разрушенного города и обугленных деревьев, среди раскалённой степи; вокруг пирамиды вьются вороны. Всe детали картины, в том числе жёлтый колорит полотна, символизируют смерть и опустошение. Ясное синее небо подчёркивает мёртвенность картины. Идею «Апофеоза войны» также ярко выражают шрамы от сабель и дыры от стрел на черепах." ?></p>    </div>
</section>


<footer class="footer">
    <section class="<? echo $changeTheme->changeTheme()[2]; ?>">
        <p><? echo $my; ?> - дата рождения.</p>
        <p><? echo date("d.m.Y"); ?> - текущее значение.</p>
        <p>Разность - <? echo birthday($my); ?> дня.</p>
        <hr>
        <? $summWord = [$about_lesson, $about_me, $elem1, $elem2, $elem3, $elem4, $elem5, $elem6, $elem7, $elem8, $name];
        echo "<p>Всего слов на странице: " .wordCount($summWord). "</p>";
        echo "<p>Всего гласных на странице: ". letter($summWord). "</p>";
        ?>
    </section>
</footer>
</body>
</html>