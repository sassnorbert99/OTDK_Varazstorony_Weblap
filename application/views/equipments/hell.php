<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.style1 {
	text-align: left;
}
.style2 {
	margin: 4px;
}
</style>
</head>

<h1>Hell-harang</h1>
<table style="width: 80%" align="center">
	<tr>
		
		<h4>Működési elv: </h4>
		<br>
<div align="justify">
<img class="style2" alt="hell.jpeg" align="left" src="<?php echo base_url()?>/assets/images/hell.jpeg" style="border-radius: 10%" width="300" >Az 1700-as évek végén Hell Miksa, csillagász, matematikus és fizikus jelölte ki az egri Líceum egyik termének padlóján az ott áthaladó észak-déli tájolású meridián vonalat. Ennek a vonalnak a segítségével tudták meghatározni a csillagászati dél pontos időpontját Egerben. Ez úgy történhetett, hogy a vonal felett kb 5 méter magasan a terem falán található egy kis nyílás, ahol a nap sugarai beszűrődnek, és egy kis fényfolt jelenik meg a terem padlóján napsütéses időben. Amikor a fény a meridián vonalra vetül, az a helyi dél időpontja.
<br>
Ez 11 óra 25 perc és 11 óra 50 perc körül ingadozik az évszaknak megfelelően, amit téli időszámítás szerint értünk. A vonalon jelölve van a fényfolt éves mozgásának 2 végpontja, ami a nyári és a téli napfordulóknak felel meg. Amikor még ezt a fajta időmeghatározást használták, akkor még egy zsineget is kifeszítettek a vonal fölé aminek a segítségével még pontosabban tudták meghatározni a delelés időpontját.
<br>
Amikor Egerben bekövetkezett a csillagászati dél időpontja, a Líceum teraszán egy kis harangot szólaltattak meg, melyet adományozója, Hell Miksa után Hell-harangnak neveznek. Ez a fajta időmeghatározás persze megfigyelés alapján történt. Lent a meridián vonalnál egy arra kijelölt személy figyelte a fényfolt mozgását, majd ha az középre ért, jelt adott a harang megszólaltatására. Ezzel jelezték a város lakói számára a helyi delet. Először a csillagvizsgalóban szólalt meg a kis harang, majd ahogy ezt meghallották, úgy szólaltak meg a település templomjainak harangjai is.
<br>
Azonban 1891-ben a zónaidő bevezetésével ez a hagyomány háttérbe szorult, és csak mint kiállítási darab volt megtekinthető maga a harang.
<br>
Célunk volt, hogy ezt a hagyományt visszaállítsuk, azonban már a mai modern informatikai eszközök segítségével, ezért egy olyan komplex rendszert alkottunk meg, mely emberi erőforrást nem igényel, azonban mégis a meglévő meridián vonal segítségével tudjuk meghatározni Egerben a helyi dél időpontját.
<br>
Kezdetben több lehetőséget is megvizsgáltunk, aminek a segítségével ezt megtehetjük, viszont mivel műemlékről van szó, így korlátozott lehetőségeink voltak. Ezért döntöttünk úgy, hogy egy kamera segítségével fogjuk figyelni a meridián vonalat, így nem volt szükség semmiféle módosításra az épületben (pl.: fal vésése, vezetékek kihúzása a padlóra).
<br>
A rendszer egyik fő alkotóeleme az úgynevezett Raspberry Pi, amely egy kis számítógép melynek tartozéka a kamera. A harang megszólaltatásáér a Líceum teraszán pedig egy mikrokontroller a felelős, mely rendelkezik vezeték nélküli kommunikációval.
<br>
A rendszer használatához legelőször egy kalibrációs eljárást kell végrehajtanunk, mellyel a 3 fő pontot határozzuk meg a meridián vonalon (nyári napforduló, téli napforduló, töréspont). A kamera rögzítése után 3 fényforrást helyezünk el ezeknél a nevezetes pontoknál. Ezt követően a cél ennek a 3 kalibrációs pontnak a meghatározása a képen, mely ugyan azon a képfeldolgozási lépéseken megy keresztül, mint a fényfolt detektálásakor, pixelkoordinátákkal kifejezve. Ezzel már tudjuk hogy a meridián vonal hol helyezkedik el a képen, és annak középvonala. Ezt a kalibrációt bizonyos időközönként érdemes megismételni azért, hogy meggyőződjünk róla, hogy nem mozdult el a kamera.
<br>
Miután végeztünk a kalibrációs folyamattal, a rendszer használatra kész. Bizonyos időközönként képeket készítünk a meridián vonalról, majd azokat elemezzük. Amikor a program úgy ítéli meg, hogy Egerben bekövetkezett a helyi dél időpontja utasítja a teraszon található harang vezérlését és megszólaltatja azt.
<br>
A fejlesztés során több hibalehetőséggel is számolnunk kellett. Például ha a terem lámpái túl erősen tükröződnek vissza a padlóról. Ezt kiküszöböltük a képelemző program fejlesztésével. Azonban felmerülhet a kérdés, hogy mi van akkor ha esős borús idő van és nincs fényfolt. Ebben az esetben matematikai számítások során kiszámoljuk, hogy az adott napon Egerben másodpercre pontosan mikor van a helyi dél. Mivel a fő célunk a régi hagyomány megőrzése volt, így elsősorban a megfigyelésre szeretnénk hagyatkozni, másodsorban pedig a számításra.
Felmerült egy olyan probléma is ha a kameraképet vagy a fényfoltot takarják ki a látogatók. Ebben az esetben is a számításra tudunk hagyatkozni, vagy esetlegesen a terem felügyelőre aki rendre utasítja a látogatókat.
<br>
A rendszer az időpontokat egy adatbázisban rögzíti, valamint azt is, hogy ez az időpont megfigyelés vagy számítás során állt elő. Ezzel az adatbázissal a későbbiekben különféle statisztikákat készíthetünk, melyek későbbi kutatások segítségére lehetnek.
<br>
Ezt az eszközt a második csoportba sorolhatjuk, hiszen vezérelni nem tudjuk, azonban automatikus vezérlési fejlesztésen esett át.

</div>
		
		</td>

	</tr>
	
	

</table>