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

<h1>Terepasztal</h1>
<table style="width: 80%" align="center">
	<tr>
		
		<h4>Működési elv: </h4>
		<br>
<div align="justify">
<img class="style2" alt="table.png" align="left" src="<?php echo base_url()?>/assets/images/table.png" style="border-radius: 10%" width="300" >Napjainkban szinte természetesnek vesszük, hogy ha felkapcsoljuk a lámpát, akkor fény van, ha felrakjuk a telefont tölteni, akkor feltöltődik. A kettő között annyi az azonos, hogy áram kell, hogy ezeket meg tudjuk valósítani, áramot pedig termelőktől, energiaforrásoktól kapunk. Ilyen termelők például az atomerőművek, hőerőmű, szénerőmű, olajerőmű, szeméterőmű, illetve a napenergia, szélerőmű és a vízerőmű. Azonban energia termelés során ökológiai lábnyomot hagyunk magunk után, hiszen ezek közül számos olyan erőmű létezik, mely nem megújuló energiaforrás, a környezetre káros hatással vannak. Vannak azonban környezetbarát, megújuló energiaforrások, melyek használatával csökkenthetjük a magunk után hagyott ökológiai lábnyomot.
<br>
Megújuló energiaforrásnak nevezzük az energiahordozók azon csoportját, amelyek
emberi idő léptékben képesek megújulni, azaz nem fogynak el, ellentétben a nem megújuló
energiaforrásokkal. A mai civilizáció a zöld energiát helyezi előtérbe, és arra törekszik, hogy
minél kisebbre csökkentse az ökológiai lábnyomot.

<br>
A terepasztalunk célja a megújuló energiaforrások tudatos, és környezetvédő
felhasználásának modellezése. A modellünkben az energiaforrásokat mikrokontrollerrel
ötvözve szeretnénk a leghatékonyabban szabályozni intelligens módon, azaz a rendszer képes
önállóan optimalizálni a termelt és a felhasznált energia mennyiségét. Gyakorlati
felhasználásban terepasztalon elhelyezett kisméretű makettekkel szemléltetjük a különböző
erőműveket, illetve energiatároló technológiákat, fogyasztókat.
Modellezni szeretnénk egy intelligensen működő zöld energetikai rendszert.

<br>
Az elképzeléseink szerint két erőmű van:
<br>
⁃ napcella
<br>
⁃ vízerőmű
<br>
E kettő erőmű termeli a fogyasztóknak az áramot, ahol a fogyasztókat külön be lehet
majd állítani, hogy mennyi ember, ház, illetve gyár fogyaszt, és eszerint intelligensen fognak
az erőművek energiát termelni.

<br>
Külön lehet beállítani, hogy az erőművek milyen éghajlatok mellett modellezze a
termelést (több szél, kevesebb eső, több nap) és ezek adatok alapján intelligensen kapcsolják le a feleslegesen működő energiaforrásokat.

<br>
További beállításai: statisztikát is tud majd csinálni a rendszer, hogy mennyi
fogyasztót képes ellátni az éghajlattól függően, illetve kevés fogyasztó esetén optimálisan tudja beállítani az erőművek működését.
<br>
erőművek modellezése:
<br>
Vízerőmű
<br>
- kisméretű generátor
<br>
Napcella
<br>
- kisméretű eszközökben megtalálható napelem
<br>
elektromos töltőállomás modellezése:
<br>
Elektromos töltőállomásunk célja egy olyan önállóan termelő rendszer kiépítése, mely a napjainkban is egy igen fejlődő iparág, mellyel elektromos autókat lehessen tölteni.(Ilyen például a Tesla, ABB, e.on) Modellünkben az autók kisebb fogyasztók, melyek képesek lesznek különféle fogyasztási adatokkal szolgálni. Az elektromos töltőállomás nem külső termelőtől kapja az áramot, hanem maga termeli, (a Teslának számos ilyen töltőállomása van az Egyesült Államokban) ezáltal maga a töltőállomás is termelő. A töltőállomást egy 5W-os napcellával oldottuk meg, mely alkalmas akár egy powerbank, vagy egy telekommunikációs eszköz teljes feltöltésére is.
<br>
időjárási adatok méréséhez szükséges modell:
<br>
hőmérséklet-és páratartalom mérő műszer
<br>
Modellünk tartalmaz egy kis éghajlat elemző műszert is, melyre egy 16x2-es LCD kijelző van csatolva, amin adatokat tudunk leolvasni az éppen aktuális hőmérsékletről és páratartalomról. Ez a műszer szemlélteti modellünk aktuális éghajlati adottságait.
<br>
Az erőművekre rá van kötve egy led, mely állapot jelzőként szolgál, továbbá az áram
egy közös gyűjtőbe kerül.
<br>
<br>
Fogyasztók modellezése:
<br>
A fényforrások, és egyéb elektronikai eszközök a különböző energia felhasználású
fogyasztókat modellezik. Célunk valósághűen modellezni a fogyasztókat. (Kisméretű
házak, épületek, gyárak, iskolák, melyek más fogyasztási igényekkel vannak ellátva)
<br>
Terepasztalunkon dombok, folyók találhatók, mellyel jobban tudjuk szemléltetni egyes erőművek, fogyasztók működését. A domb tartalmaz egy gyűjtőt, mely igény esetén leenged, ezáltal megforgatva a turbinát, mely során áramot termelünk.
<br>
Célunk, hogy szemléltessük, milyen lehet egy élet nem megújuló energiaforrások nélkül, vajon képesek-e ezek az energiahordozók ellátni egy adott települést, akár egy országot is, mennyire vagyunk rászorulva a nem megújuló energiaforrásokra.

</div>
		
		</td>

	</tr>
	
	

</table>