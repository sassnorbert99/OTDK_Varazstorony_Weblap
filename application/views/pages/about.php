<h2>Rólunk</h2>
<p>Varázstorony</p>
<p>Eszterházy Károly Egyetem, Eger</p>

<style>


.image {
	display: block;
  margin-left: auto;
  margin-right: auto;
  
  width: 40%;
  height: auto;
}

.overlay {
	margin-left: auto;
  margin-right: auto;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 40%;
  height: 0;
  transition: .5s ease;
}

.container:hover .overlay {
	margin-left: auto;
  margin-right: auto;
  height: 80%;
}

.text {
  white-space: nowrap; 
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
</style>





<div class="container">
  <img src="assets/images/logo.png" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Varázstorony<br>  2020</div>
  </div>
  <div align="justify">
    <br>
    <br>
    Kutatásunk olyan múzeumokat céloz meg, ahol rengeteg kiállítás megtekinthető, azonban még a hagyományos módon ismerhetőek meg a kiállítási darabok idegenvezető segítségével. Kutatásunk helyeként az egri Természettudományos Pályaorientációs és Módszertani Központot választottuk, azaz a Varázstornyot mely az egri Líceum épületében található, mely kezdetben csillagvizsgálóként, majd csillagászati múzeumként funkcionál napjainkban, azonban számos más kiállítás is megtekinthető. Kémiai bemutatók, fizikai, biológiai, földrajzi, de még fényképészeti kiállításokat is megtekinthetünk ezen a varázslatos helyen. Ezt a sokszínű múzeumot szerettük volna a rendszerünk segítségével még vonzóbbá tenni minden korosztály számára. Található már itt egy pár interaktív kiállítás is, azonban egyik sem olyan formában nevezhető interaktívnak, mint ami a mi rendszerünkkel interaktív. Egy olyan komplex hardver és szoftver rendszert hoztunk létre, melynek segítségével a látogatók a saját mobileszközük segítségével tudják bejárni és megismerni a Varázstorony épületét, valamint az ott található kiállításokat.
    <br>
    Mivel csapatunk foglalkozik mikrokontrolleres vezérlésekkel, ezért szerettünk volna egyfajta plusz érdekességet belecsempészni ebbe a rendszerbe, amivel ez a létesítmény kitűnhet Magyarország interaktív múzeumjainak soraiból.
    <br>
    Ezt oly módon valósítottuk meg, hogy egyes eszközöket „felokosítottunk”, így az oda látogatók azont túl, hogy bejárhatják mobil eszközükkel a múzeumot, bizonyos eszközöket vezérelni is tudnak, amik valamilyen kísérlet bemutatására szolgálnak.
    <br>
    Ezeket a kísérleteket gyakorlatilag, olyan módon tudjuk játékos formában prezentálni az oda érkező látogatóknak, hogy bevonjuk őket a kísérletezésbe, még szórakoztatóbbá téve ezzel a tanulást.
    <br>
    Egy korábbi kutatásból kiderült, hogy a fiatalabb generációk egyre kevésbé érdeklődnek a múzeumok iránt. Ennek oka az is lehet, hogy szórakoztatóbbnak tartják azokat a tanulási módszereket, amin valami érdekes dolgot látnak, hallanak, mint ha csak egy leírást olvasnának el, hogy hogyan is működik az adott kísérlet. 
    <br>
    A rendszerünk fő szempontja, hogy mindenki a saját mobileszköze segítségével tudja bejárni a Varázstorony épületét és azon keresztül tudja vezérelni az egyes eszközöket. Ezzel gyakorlatilag két fontos szempontnak tudunk eleget tenni. Az első, ami minden publikus helyen problémát okoz, az az elhasználódás, vagy emberi gondatlanságból adódó meghibásodás. A rendszer vezérlés szempontjából fel lett készítve olyan hibalehetőségek kezelésére, melyet egy manuálisan vezérelt kísérletnél nem tudunk megtenni. Az ember szereti feszegetni a saját határait, így van ez az ilyen kísérleteséseknél is, hogy az eszköz határait is szeretjük tesztelni. A hibakezelésnek köszönhetően azonban a felhasználót tudjuk tájékoztatni, hogy esetlegesen, amit csinálni szeretne, az nem tartozik az eszköz rendeltetés szerű használatába.
    <br>
    Kutatásunk során számos más interaktív kiállítással, létesítménnyel is találkoztunk.
    <br>
    <ol>
    <li> Mobilis Győr:
    <br>
    Ennek a múzeumnak a segítségével a hétköznapok rejtelmeit, valamint napjaink legújabb technológiáit fedezhetjük fel és eközben alkotva, játszva tanulhatunk.
    <br></li>
    <li>Csodák palotája:
    <br>
    Itt élőben megtekinthetjük azt, amit eddig csak elképzelni tudtunk, vagy a természet különféle jeleségeiről kaphatunk választ, mindezt úgy, hogy szintén szórakozva tanulunk.
    <br></li>
    <li> Szépművészeti Múzeum:
    <br>
    Az egyetemes és a magyar művészet emlékeit mutatja be. Jelenleg itt már online tárlatvezetés is igénybe vehető, ahol textúra Streammel, virtuális kiállításokkal és oktatási segédanyagokkal várják a látogatókat.
    <br></li>

    </ol>
    Ezen 3 példán kívül természetesen még sok más hasonló remek múzeum található Magyarországon, azonban egyiknél sincs jelen egy olyan komplex, rendszer amelyről a kutatásunk szól.
    <br>
    A rendszer kialakításánál fontos szempontnak tartottuk, az alacsony költségvetést, ezért terveztük az interaktív vezérlést különböző, azonban pénztárca barát mikrokontrollerek megoldásával. Ha komoly árkategóriába sorolható mikrokotrollereket választottunk volna, gondoljunk csak bele mekkora kiadást jelentene ez a rendszer egy olyan múzeumban, ahol például 100 olyan kiállítás van melyet vezérelhetővé lehet tenni.
    <br>
    A rendszer másik fontos alkotóeleme a szerver, aminek a segítségével a felhasználókat kezelhetjük, valamint összeköthetjük őket az eszközökkel. Erre a célra egy Raspberry Pi nevezetű apró számítógépet választottunk, mely barátságos ára és kis mérete ellenére rendkívül jól használható erre a célra is.
    <br>
    Mint arról már szó volt a rendszer fő szempontja a mobilos vezérlés, így jogosan érezhetjük azt, hogy ez inkább a fiatalabb generációkat célozza meg, azonban fontos, hogy minden korosztály számára érthető és egyértelmű legyen az információ, ami a felületen megjelenik.
    <br>
    Első lépésként a látogatóknak regisztrálni kell a felület használatához. Ezután érhető el több funkció például:
    <ol>

    <br>
    <li> Körbevezetés:
    <br>
    A felület segítségével a felhasználók idegenvezető nélkül bejárhatják a Varázstorony termeit, és különböző leírások segítik az egyes eszközök megismerését.
    <br></li>
    <li>Interaktív vezérlés:
    <br>
    Miután bejelentkeztek és kapcsolódtak a Varázstorony vezeték nélküli hálózatához várólista segítségével tudják vezérelni az egyes eszközöket.
    <br>
    Fontos ez esetben, hogy a helyi hálózathoz legyenek kapcsolódva, mert enélkül nem érhető el a vezérlés.
    <br></li>
    <li> Pontok gyűjtése:
    <br>
    A látogató különböző kísérletek elvégzésével vagy egy kis teszt kitöltésével pontokat gyűjthetnek, melyeket különböző dolgokra levásárolhatnak. Ezzel egyfajta kreditrendszert hoztunk létre, melynek felhasználása az adott múzeumtól függ.
    <br></li>
    <li> Csoportok létrehozása:
    <br>
    Előfordulhat az, hogy egy osztály látogat el a múzeumba, így a kísérő tanár hozhat létre egy csoportot, majd hozzáadhatja a gyerekeket ahhoz, így egy kis versenyt is hirdethet, hogy ki gyűjti a legtöbb pontot a látogatás alkalmával.
    <br></li>
    <li> QR kód beolvasása:
    <br>
    A felületen lehetőségünk van QR kódot beolvasni, így ha valaki nem találja meg az adott eszközt a felületen, az adott kiállításoknál egy kis táblán lévő QR kódot láthatnak, melyet ha beolvasnak a felület az adott eszköz leírásához, vezérléséhez irányít át.
    <br></li>
  </ol>
    Fejlesztésünk során, több eszközt is megvizsgáltunk, és különböző kategóriákba soroltuk őket.
    <br>
    Az első csoportunk a kezdeti eszközök vagy az úgynevezett hagyományos eszközök melyeket nem szerettünk volna felokosítani, mert veszített volna tudományt népszerűsítő céljából. Ezeknél az eszközöknél, csak egy leírás jelenik meg vagy esetleg egy rövid kis kvíz a pontszerzés miatt.
    <br>
    A második csoport a továbbfejlesztett eszközök csoportja, melyeken valamit módosítottunk, azonban nem vezérelhetjük. Ebben az esetben is egy leírás jelenik meg az adott eszközről, illetve a fejlesztésről.
    <br>
    A harmadik csoport pedig az interaktív eszközök csoportja, melyről a leíráson túl egy vezérlő felület is megjelenik. Az ebbe a csoportba tartozó eszközöknél egy mikrokontrolleres vezérlő segítségével tudjuk egy adott kísérlet elvégzésére utasítani az eszközt. Ebben a csoportban már vannak olyan eszközök amelyek már megtalálhatóak valamilyen formában a Varázstoronyban, illetve olyanok is melyeket mi fejlesztettünk új eszközként.

</div>





</div>

