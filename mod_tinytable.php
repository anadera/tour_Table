<?php defined('_JEXEC') or die; ?>
<?php $id = $params->get("id"); ?>
<h1>Статистика</h1>
<div class="content">
<div id="standings">
<div id="standings-data" class="stat-block" data-type="school" data-list="30,36">
<div class="stat-block__team">
    <div class="stat-block__left" style="display: none;"></div>
     <span id="stat-block-season-title">Клубная лига</span>
     <div class="stat-block__right" style=""></div>
 </div>
    <table class="stat-block__table">
		<thead>
			<tr>
				<th title="Место">М</th>
				<th>Команда</th>
				<th title="Количество сыгранных матчей">И</th>
				<th title="Очки">О</th>
			</tr>
		</thead>
	</table>
</div>
<body>
<?php
$someArray = array(
"1" => array("num" => 1, "name" => Спартак, "num3" => 90, "num4" => 206),
"2" => array(num => 2, name => Динамо, num3 => 90, num4 => 194),
"3" => array(num => 3, name => ЦСКА, num3 => 90, num4 => 194),
"4" => array(num => 4, name => Локомотив, num3 => 90, num4 => 186),
"5" => array(num => 5, name => Чертаново, num3 => 90, num4 => 162),
"6" => array(num => 6, name => Строгино, num3 => 90, num4 => 105),
"7" => array(num => 7, name => Торпедо, num3 => 90, num4 => 82),
"8" => array(num => 8, name => "Локомотив-2", num3 => 90, num4 => 59),
"9" => array(num => 9, name => ФШМ, num3 => 90, num4 => 58),
"10" => array(num => 10, name => Химки, num3 => 90, num4 => 38),
);
?>
<table>
<?php foreach($someArray as $elOfSomeArray):?>
    <tr>
            <td><?= $elOfSomeArray['num']?></td>
            <td>
                    <a href=http://www.goalstream.org/school/4 target="_blank"><?= $elOfSomeArray['name']?></a>
            </td>
            <td><?= $elOfSomeArray['num3']?></td>
            <td><?= $elOfSomeArray['num4']?></td>
    </tr>
	
<?php endforeach; ?>
</table>
</body>
<div id="standings-loader"></div>
<a href="" class="match-block__link">Полный список</a>
</div>
</div>
