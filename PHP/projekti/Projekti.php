<!DOCTYPE html>
<html en="lang">
    <head>
        <meta charset="utf-8">
        <title>Top 18 faktet per filma</title>
      
        <link rel="stylesheet" href="css\reset.css">
        <link rel="stylesheet" href="css\stilizimi.css">
      
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="jquery-1.11.2.min.js"></script>
      
<script>
    $(document).ready(function(){
        $("#btn2").click(function(){
    alert("HTML: " + $("#test").html());
  });
        $("#btnhtml").click(function(){
    $("#test2").html("<h1>Tetëmbëdhjetë fakte që nuk i dini për filmat e famshëm (Foto)</h1>");
  });
});
</script>

<script>
    $(document).ready(function(){
        $("#btn3").click(function(){
        $("ul").append("<li><b>Duket sikur i gjithë emisioni televiziv ‘Friends’ është filmuar në New<br> York. Në realitet, nuk u xhirua asnjë skenë në qytet – gjithçka u<br> filmua në një studio.</b></li>");
  });
});
</script>

<script> 
    $(document).ready(function(){
      $("#flip").click(function(){
        $("#panel").slideToggle("slow");
        $("#flip").text("Klikoni per ta mbyllur");
        
      });
    });
</script>

<style> 
    #panel,#flip
    {
    padding:5px;
    text-align:center;
    background-color:#f8965e;
    border:solid 1px #585656;
    }
    #panel
    {
    padding:50px;
    display:none;
    }
    </style>

    </head>
    <body>
        <header>
            
            <p id="test2"><b>Titulli</b></p>
            <p>TV/Filmat</p>
        </header>
        <main>
            <section>
                <button id="btnhtml">Vendos titullin</button>
                
                <figure>
                    <a href="images/it3-780x439.jpg">
                    <img src="images/it3-780x439.jpg" width="700px"></a>
                </figure>
                <p id="test">
                <?php

                     $ip1 = " <b>Pa marrë parasysh se sa i tmerrshëm është filmi, ajo që shihni në
                     ekran nuk është gjithmonë më mirë se ajo që mbeti prapa 
                     skenave. Industria e filmit është shumë interesante!</b>";
                    $iparr1 = preg_split ("/\./", $ip1);
                     print "$iparr1[0] <br />";
                     print "$iparr1[1] <br />" ;
                      
 
                     ?>
                </p>
                   <button id="btn2">Trego ne HTML paragrafin me larte</button>
                <p>Bright Side bëri një listë prej 18 fakteve pak të njohura rreth<br>
                   filmave popullorë që janë shumë interesante për të lexuar.</p>
            </section>
            <section>
                <ul>
                    <li>
                    <?php


                
                $ip1 = "<b>Sipas romanit të Stephen King IT, kllouni Pennywise zgjohet çdo 27 
                vjet. Ky libër u adaptua për herë të parë në ekran në vitin 1990 dhe 
                adaptimi i ri u lirua 27 vjet më vonë. Bill Skarsgard, i cili luajti
                Pennywisen, ishte 27 vjeç gjatë xhirimeve.</b>";
                $iparr1 = preg_split ("/\./", $ip1);
                  print "$iparr1[0] <br />";
                 print "$iparr1[1] <br />" ;
                 print "$iparr1[2] <br />"  ;
                  print "$iparr1[3] <br />"  ;
                    
                 ?>
                        <figure>
                            <a href="images/1.jpg">
                            <img src="images/1.jpg"></a>
                        </figure>
                    <p></p></li>
                    <li>

                    <?php


                
                $ip1 = " <b>Kllouni Pennywise u frymëzua nga vrasësi i vërtetë dhe përdhunuesi
                John Wayne Gacy, i cili do të vishej si një klloun në një festë 
                fëmijësh. Ai u paraqit si një anëtar aktiv i komunitetit dhe ishte i
                njohur për fëmijët e sëmurë zbavitës dhe grumbullimin e të hollave 
                për bamirësi.</b>";
                $iparr1 = preg_split ("/\./", $ip1);
                 print "$iparr1[0] <br />";
                 print "$iparr1[1] <br />" ;
                 print "$iparr1[2] <br />"  ;
                 
                    
                 ?>
                
                        <figure>
                            <a href="images/2.jpg">
                            <img src="images/2.jpg"></a>
                        </figure>
                    <p></p></li>
                    <li>
                    
                    <?php

                $ip1 = " <b>Jackson Robert Scott i cili luan Georgien në ‘IT’ ka punuar tashmë në
                ‘Scary’ nga Walking Dead dhe Criminal Minds. Edhe pse ai është
                vetëm nëntë vjeç, ai nuk është i frikësuar nga kllounët apo
                përbindëshat dhe gjithmonë gëzon ndjenjën e të qenit i vendosur.";
                $iparr1 = preg_split ("/\./", $ip1);
                 print "$iparr1[0] <br />";
                 print "$iparr1[1] <br />" ;
                 print "$iparr1[2] <br />"  ;
                 
                    
                 ?>
                   
                        <figure>
                            <a href="images/3.jpg">
                            <img src="images/3.jpg"></a>
                        </figure>
                    <p></p></li>        
                    <li>
                  
                    <?php

                $ip1 = " <b>Vokalizimi i shpejtë i komunikimit në Jurassic Park ishte asgjë më
                shumë se zhurma e regjistruar e breshkave që kishin marrëdhënie 
                seksuale.</b>";
                $iparr1 = preg_split ("/\./", $ip1);
                 print "$iparr1[0] <br />";
                 print "$iparr1[1] <br />" ;
                 ?>
                   <p></p></li>
                    <li>
                     <?php

                $ip1 = " <b>“E Bukuria dhe Bisha” (1992) ishte filmi i parë i animuar që u 
                nominua për një ‘Oscar’ në kategorinë më të mirë. Megjithatë,
                ‘Heshtja e Qengjave’ fitoi çmimin në këtë kategori.";
                $iparr1 = preg_split ("/\./", $ip1);
                 print "$iparr1[0] <br />";
                 print "$iparr1[1] <br />" ;
                 print "$iparr1[2] <br />"  ;
                 
                 ?>
                    
                        <p></p></li>
                    <li>
                    
                    <?php

                $ip1 = " <b>Në filmin e kompanisë Pixar Up, shtëpia e Carl u hoq me 20,622
                balona. Në të vërtetë, do të duhej rreth 20 deri në 30 milionë balona
                për të ngritur një shtëpi. Dhe vetëm 10,297 balona u përdorën në
                shumicën e skenave.";
                $iparr1 = preg_split ("/\./", $ip1);
                 print "$iparr1[0] <br />";
                 print "$iparr1[1] <br />" ;
                 print "$iparr1[2] <br />"  ;
                 
                 ?>
                    
                        <figure>
                            <a href="images/4.jpg">
                            <img src="images/4.jpg"></a>
                        </figure>
                    <p></p></li>
                    <li>
                    
                    <?php

                     $ip1 = " <b>Një hulumtuese e hienave paditi Disneyn për “shpifje të karakterit”
                     për përfaqësimin e saj negativ të hienave në Mbretin Luan.";
                    $iparr1 = preg_split ("/\./", $ip1);
                     print "$iparr1[0] <br />";
                     print "$iparr1[1] <br />" ;
                      
 
                     ?>                    
                    
                    
                    
                        <p></p></li>
                    <li>
                    <?php

                     $ip1 = " <b>A e dini se çfarë kanë të përbashkët Leonardo DiCaprio, Will Smith,<br>
                     Nicolas Cage dhe Johnny Depp? Ata u konsideruan të gjitha për<br>
                     pjesën e Neos në ‘The Matrix’.</b>";
                    $iparr1 = preg_split ("/\./", $ip1);
                     print "$iparr1[0] <br />";
                     print "$iparr1[1] <br />" ;
                      
 
                     ?> 
                
                    
                    
                    
                        <p></p></li>
                    <li>
                    <?php

                     $ip1 = " <b>Duart që vizatojnë Rose në Titanik i përkasin James Cameron. Ai
                     gjithashtu tërhoqi çdo skicë të vetme nga lidhësja e Jackit. Regjisori
                     i famshëm është me të vërtetë i majtë, dhe të gjitha skenat e
                     vizatimit u kthyen.</b>";
                    $iparr1 = preg_split ("/\./", $ip1);
                     print "$iparr1[0] <br />";
                     print "$iparr1[1] <br />" ;
                      print "$iparr1[2] <br />"  ;
 
                     ?> 
                
                        <figure>
                            <a href="images/5.jpg">
                            <img src="images/5.jpg"></a>
                        </figure>
                    <p></p></li>           
                    <li>
                    <?php

                     $ip1 = " <b>Fjala “dude” përdoret rreth 161 herë në ‘The Big Lebowski’, dhe
                     numri i fjalëve të F-së arriti në 292. </b>";
                    $iparr1 = preg_split ("/\./", $ip1);
                     print "$iparr1[0] <br />";
                     print "$iparr1[1] <br />" ;
                      
 
                     ?> 
                    
                    
                    <p></p></li>  
                    <li>
                    <?php

                    $ip1 = "  <b>Buzz’s (vëllai i Kevin) ishte në të vërtetë një djalë i përbërë si një
                    vajzë në ‘Home Alone’. Prodhuesit menduan se do të ishte mizore
                    për të hedhur një vajzë të re për këtë pjesë.</b>";
                    $iparr1 = preg_split ("/\./", $ip1);
                    print "$iparr1[0] <br />";
                     print "$iparr1[1] <br />" ;
                     print "$iparr1[2] <br />"  ;

                    ?>
                    
                   
                        <figure>
                            <a href="images/6.jpg">
                            <img src="images/6.jpg"></a>
                        </figure>
                    <p></p></li>
                    <li>
                    <?php

                    $ip1 = "  <b>Panemi është një vend imagjinar dhe vendosja e përgjithshme e 
                    Lojrave të urisë. Emri “Panem” vjen nga shprehja latine “Panem et
                    circenses”, që do të thotë “bukë dhe cirqe”.</b>";
                    $iparr1 = preg_split ("/\./", $ip1);
                    print "$iparr1[0] <br />";
                     print "$iparr1[1] <br />" ;
                     print "$iparr1[2] <br />"  ;

                    ?>
                    
                    
                    
                        <p></p></li>
                    <li>
                    <?php

                    $ip1 = "  <b>Në fund të kredive të Harry Potter dhe Kupës së Zjarrit, thuhet: 
                    “Asnjë dragua nuk u dëmtua në bërjen e këtij filmi”. Le të
                    shpresojmë që kjo të jetë e vërtetë!</b>";
                    $iparr1 = preg_split ("/\./", $ip1);
                    print "$iparr1[0] <br />";
                     print "$iparr1[1] <br />" ;
                    

                    ?>
                    
                    
                    
                    
                    
                        <figure>
                            <a href="images/7.jpg">
                            <img src="images/7.jpg"></a>
                        </figure>
                    <p></p></li>
                    <li>

                    <?php

                    $ip1 = "  <b>Gal Gadot u desh të rimarrë disa skena nga ‘Wonder Woman’ kur
                    ajo ishte pesë muajshe shtatzënë, duke përfshirë disa skena ku ajo
                    kishte për të bërë truket.</b>";
                    $iparr1 = preg_split ("/\./", $ip1);
                    print "$iparr1[0] <br />";
                     print "$iparr1[1] <br />" ;
                    

                    ?>
                        
                          
                        <p></p></li>
                    <li>
                    
                    <?php

                    $ip1 = "  <b>Emma Watson fillimisht duhej të luante në ‘La La Land’, por ajo 
                    duhej të vonohej për shkak të kontratës së saj të nënshkruar më 
                    parë për filmin “E bukura dhe Bisha”.</b>";
                    $iparr1 = preg_split ("/\./", $ip1);
                    print "$iparr1[0] <br />";
                     print "$iparr1[1] <br />" ;
                    

                    ?>
                
                        <figure>
                            <a href="images/8.jpg">
                            <img src="images/8.jpg"></a>
                        </figure>
                    <p></p></li>
                    <li>
                    
                    <?php

                    $ip1 = " <b>Cameron Diaz bëri debutimin e saj duke vepruar si Tina Carlyle në
                    ‘The Mask’. Ajo kishte 12 audicione para se ajo të zgjidhej
                    përfundimisht për këtë rol vetëm shtatë ditë para fillimit të filmimit.</b>";
                    $iparr1 = preg_split ("/\./", $ip1);
                    print "$iparr1[0] <br />";
                     print "$iparr1[1] <br />" ;
                    

                    ?>
                  
                        <p></p></li>
                    <li><b>A ju kujtohet skena në ‘Twilight’ ku Bella dhe Charlie janë në<br> 
                           restorant, dhe ka një grua me flokë kafe të errët ulur pas tyre me një<br> 
                           kompjuter portativ? Kjo grua është autorja e librit, Stephenie Meyer. </b>
                        <figure>
                            <a href="images/9.jpg">
                            <img src="images/9.jpg"></a>
                        </figure>
                    <p></p></li>
                    <li><b>Duket sikur i gjithë emisioni televiziv ‘Friends’ është filmuar në New<br> 
                           York. Në realitet, nuk u xhirua asnjë skenë në qytet – gjithçka u<br> 
                           filmua në një studio.</b>
                        <p></p>
                        <button id="btn3">Shto paragrafin e fundit te listes</button></li>
                </ul>
                <div id="flip">Klikoni per me shume</div>
                <div id="panel">Keto pra ishin 18 faktet per filmat e famshem. Nuk ka rëndësi se sa fantastik është një film, ajo çfarë shihet në ekran shpesh nuk është më mirë se ajo që mbetet pas kamerave. Industria e kinematografisë është kurioze dhe magjepse.</div>
            </section>
        </main>
        <footer>
         <style>
         
         #myDIV {
         width: 430px;
         height: 90px;
         background: red;
         animation: mymove 5s infinite;
         border-radius:80px;
         } 
  
         @keyframes mymove {
         from {background-color: rgb(187, 187, 187);}
         to {background-color: rgb(59, 59, 70);}
         }


             </style>

        <div id="myDIV" style="margin-top:20px;border-radius:40px; width:400px;">
        <?php
//Am I a fruit or a berry? The fruit is Strawberry and the color is red.
class Fruit {
public $name;
public $color;
public function __construct($name, $color) {
$this->name = $name;
$this->color = $color; 
}
protected function intro() {
echo "<p style=color:white;margin-left:30px;margin-top:0px;font-size:30px;>www {$this->name} KFilma {$this->color}com</p>"; 
}
}
class Strawberry extends Fruit {
public function message() {
echo "<p style=color:white;margin-left:75px;margin-top:0px;font-size:23px;>Faqja jone zyrtare</p> ";
// Call protected function from within derived class - OK 
$this -> intro();
}
}
$strawberry = new Strawberry(".", ".");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
?>
</div>


              <div style="margin-left:435px;">
                <a href='#'>Home</a> |  <a href='#'>Search</a> |  <a href='#'>Browse</a>
                <p>Copyright &copy; - G22 Projekti n&euml; Internet</p>
             </div> 
        </footer>
    </body>
</html>