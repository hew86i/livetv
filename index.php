<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<title>
	SportLife.com.mk
</title>
<meta name="viewport" content="width = 390">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<!-- <link rel="shortcut icon" href="/images/favicon.ico"> -->

    <style type="text/css">
        .plav  {font-weight: normal;color: #0070A3;font-size:11px;}
        
        .ui-datepicker-trigger
        {
            vertical-align:middle;
            padding-left: 5px;
        }
    </style>
    
    <script src="/livetv/js/jquery-1.7.1.min.js" type="text/javascript"></script>    
    <link rel="stylesheet" href="/livetv/css/tv.css" type="text/css">
    <link rel="stylesheet" href="/livetv/css/animate.css" type="text/css">
    <link href="/livetv/css/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css">
    <script src="/livetv/js/jquery-ui-1.8.13.custom.min.js" type="text/javascript"></script>
    
    <script src="/livetv/js/visibility.js" type="text/javascript"></script> 

    
  <script type="text/javascript">

	function testAnim(x, div_id) {
    $(div_id).removeClass(x).addClass(x + ' animated ui-tabs ui-widget ui-widget-content ui-corner-all').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass(x);
    	});
  	};

    window.ListaNaSportovi = [];

       $(document).ready(function () {

           $('.sportovi').each(function() {
            
            $(this).hide();
            console.log("hide :" + $(this)[0]);
            
          });



           // Prikazi();
           // 
           // 
           
           // 
           // get the sport id's from ajax response
           // 
           // decide what to show and hide
           // 
           // get the heigth of the div with class .DivParovi
           // 
           // if(heigth > window.heigth()) {
           // 	display sport for defined amount of time
           // 	slide to left(right)
           // 	slide up the next sport (div)
           // 	
           // 	repeat
           // } else {
           // 
           // 	show only one sport (div)
           // }
           // 
           // 
           // primer :
           //
           // 
            
           // $('#s0').hide();
           // $('#s8').hide();
           // $('#s37').hide();

           var ListaNaSportovi = window.ListaNaSportovi;

          // za dobivanje na site sportski id - a
          console.log(' WINDOW HEIGHT : ' + $(window).height());

          $('.sportovi').each(function() {
            console.log('------detected : '+ $(this).attr('id'));
            ListaNaSportovi[ListaNaSportovi.length] = $(this).attr('id');
            console.log('lista : ' + ListaNaSportovi);
            $(this).show();
            console.log($(this)[0]);
            
          });
        
          // za dinamichko insertiranje

          $(document).on('DOMNodeInserted', '.sportovi', function(e) {
            console.log(e);            
          });

  

          // for (var i = 0; i < ListaNaSportovi.length; i++) 
          //  {
          //      // $('#divSport' + SkrieniSportovi[i]).attr("class", "NaslovContainerB");
          //      setTimeout(function(){
          //         console.log(' - timeout : 1500 ms');
          //         $('#' + ListaNaSportovi[1]).show();
          //         testAnim('slideInUp', '#'+ListaNaSportovi[1]);
          //      }, 1500);
               
          //  }
        var delay = 3000;
        (function myLoop (i, delay) { 

           setTimeout(function () {   
              // alert('hello');      
              console.log('delay : '+delay)    //  your code here                
              if (--i) myLoop(i);      //  decrement i and call myLoop again if i > 0
           }, delay)
        })(10);  


           //initial load
          //  setTimeout(function(){
          //  	var anim = 'slideInDown';
          // $('#s37').show();           	
         	// testAnim(anim, '#s37');
         	// $('#s8').show();           	
         	// testAnim(anim, '#s8');
         	// $('#s0').show();           	
         	// testAnim(anim, '#s0');

          //  },2000);

          //  //repeat
          //  setInterval(function(){
          //  	var anim = 'shake';
         	// testAnim(anim, '#8');
         	
          //  },3000); 

       });




       function Prikazi() {
           
          var datetime = $('#datepicker').val();
       		var momentalni = $('#chkMomentalniI').is(':checked');
       		var sport = $('#rbSport').is(':checked');

           	$.post("http://sportlife.com.mk/RezultatiZivo.aspx/RezultatiGetAll",
       			{Datum: datetime , Momentalni: momentalni ,sSort: sport },
       			function(msg) {
       				 $("#divParovi").html(msg);
       				},'jsonp'
          		);


       }
       		

       // var refreshId = Visibility.every(5000, 5000, function DoEventGetSiteParovi() 
       // {
           
       // 		var datetime = $('#datepicker').val();
       // 		var momentalni = $('#chkMomentalniI').is(':checked');
       // 		var sport = $('#rbSport').is(':checked');

       //     	$.post("http://sportlife.com.mk/RezultatiZivo.aspx/RezultatiGetAll",
       // 			{Datum: datetime , Momentalni: momentalni ,sSort: sport },
       // 			function(msg) {
       // 				 $("#divParovi").html(msg);
       // 				},'jsonp'
       //    		);

       // });


       function Sokri() {
           for (var i = 0; i < SkrieniSportovi.length; i++) 
           {
               $('#divSport' + SkrieniSportovi[i]).attr("class", "NaslovContainerB");
               $('#divSport' + SkrieniSportovi[i]).next().hide();
           }
       }

</script>



</head>
<body class="iphone shadow"> 


    <div class="MainDivContentPages">
        <div style="padding: 15px;">
            <div id="divHeader" class="ui-tabs ui-widget ui-widget-content ui-corner-all" style="margin-bottom: 2px">
                <table style="margin: auto; display:none;">
                    <tbody><tr>
                        <td width="180px">
                            
                           <input type="text" id="datepicker" style="width:80px; vertical-align:middle;" value="hide :" + 09.06.2014">

                        </td>
                        <td width="180px">
                            <label for="chkMomentalniI" class="plav">
                                
                                Моментални игри

                            </label> <input type="checkbox" id="chkMomentalniI" name="chkMomentalniI" class="plav" checked="checked"> 
                        </td>
                        <td width="250px">
                            <span class="plav">
                                Групирај по

                                <input type="radio" id="rbSport" checked="checked" name="rb"> <label for="rbSport" class="plav">Датум/Спорт</label>
                                <input type="radio" id="rbLiga" name="rb"> <label for="rbLiga" class="plav">Датум/Лига</label>
                                
                            </span>
                        </td>
                        <td>
                            <button type="button" style="width: 110px;" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" role="button" onclick="Prikazi(); return false;" aria-disabled="false">                                
                                ПРИКАЖИ
                            </button>
                        </td>
                    </tr>
                </tbody></table>
            </div>

  <div id="divParovi" style="margin-left: auto; margin-right: auto;">
    <div id="s0" class="sportovi ui-tabs ui-widget ui-widget-content ui-corner-all" style="margin-bottom:2px;">
        <div class="NaslovContainer" id="divSport0" onclick="NaslovContainer_click(this, 0)">
            <div class="NaslovNaGrupa">Фудбал</div>
        </div>
        <table class="TabelaGrupa Fudbal">
            <thead>
                <tr>
                    <th class="naslov_start">старт</th>
                    <th class="naslov_sifra">шифра</th>
                    <th class="naslov_liga">лига</th>
                    <th class="naslov_tim1">Тим 1</th>
                    <th class="naslov_1">1</th>
                    <th class="naslov_X">X</th>
                    <th class="naslov_2">2</th>
                    <th class="naslov_tim2">Тим 2</th>
                    <th class="naslov_pol">пол.</th>
                    <th class="naslov_rez">рез.</th>
                    <th class="naslov_status">статус</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="pocetok">15:30</td>
                    <td class="sifra">2501</td>
                    <td class="Liga">Norway Premier</td>
                    <td class="tim1">Sarpsborg 08</td>
                    <td class="kvota1">2,65</td>
                    <td class="kvotaX DobitnaKvota">3,25</td>
                    <td class="kvota2">2,70</td>
                    <td class="tim2">Viking</td>
                    <td class="pol">(0 : 0)</td>
                    <td class="rez">1 : 1</td>
                    <td class="status">Крај</td>
                </tr>
                <tr>
                    <td class="pocetok">15:30</td>
                    <td class="sifra">2502</td>
                    <td class="Liga">Norway Premier</td>
                    <td class="tim1">Stromsgodset</td>
                    <td class="kvota1 DobitnaKvota">1,45</td>
                    <td class="kvotaX">4,40</td>
                    <td class="kvota2">5,70</td>
                    <td class="tim2">Haugesund</td>
                    <td class="pol">(1 : 1)</td>
                    <td class="rez">2 : 1</td>
                    <td class="status">Крај</td>
                </tr>
                <tr>
                    <td class="pocetok">15:30</td>
                    <td class="sifra">2503</td>
                    <td class="Liga">Norway Premier</td>
                    <td class="tim1">Valerenga</td>
                    <td class="kvota1 DobitnaKvota">1,65</td>
                    <td class="kvotaX">3,80</td>
                    <td class="kvota2">5,10</td>
                    <td class="tim2">Aalesund</td>
                    <td class="pol">(3 : 0)</td>
                    <td class="rez">3 : 0</td>
                    <td class="status">Крај</td>
                </tr>
                <tr>
                    <td class="pocetok">15:30</td>
                    <td class="sifra">2535</td>
                    <td class="Liga">Norway 2 Division</td>
                    <td class="tim1">Medkila</td>
                    <td class="kvota1">4,20</td>
                    <td class="kvotaX">4,40</td>
                    <td class="kvota2 DobitnaKvota">1,40</td>
                    <td class="tim2">Moss</td>
                    <td class="pol">(0 : 0)</td>
                    <td class="rez">1 : 2</td>
                    <td class="status">Крај</td>
                </tr>
                <tr>
                    <td class="pocetok">16:00</td>
                    <td class="sifra">2536</td>
                    <td class="Liga">Norway 2 Division</td>
                    <td class="tim1">Raufoss</td>
                    <td class="kvota1">1,55</td>
                    <td class="kvotaX">3,80</td>
                    <td class="kvota2 DobitnaKvota">3,75</td>
                    <td class="tim2">Levanger</td>
                    <td class="pol">(0 : 0)</td>
                    <td class="rez">0 : 1</td>
                    <td class="status">Крај</td>
                </tr>
                <tr>
                    <td class="pocetok">16:00</td>
                    <td class="sifra">2537</td>
                    <td class="Liga">Norway 2 Division</td>
                    <td class="tim1">KFUM Oslo</td>
                    <td class="kvota1 DobitnaKvota">1,20</td>
                    <td class="kvotaX">5,20</td>
                    <td class="kvota2">6,50</td>
                    <td class="tim2">Drobak-Frogn</td>
                    <td class="pol">(3 : 1)</td>
                    <td class="rez">8 : 1</td>
                    <td class="status">Крај</td>
                </tr>
                <tr>
                    <td class="pocetok">16:00</td>
                    <td class="sifra">2538</td>
                    <td class="Liga">Norway 2 Division</td>
                    <td class="tim1">Skeid</td>
                    <td class="kvota1">2,20</td>
                    <td class="kvotaX">3,20</td>
                    <td class="kvota2">2,35</td>
                    <td class="tim2">Harstad</td>
                    <td class="pol">(0 : 0)</td>
                    <td class="rez">2 : 0</td>
                    <td class="status">Второ пол.</td>
                </tr>
                <tr>
                    <td class="pocetok">16:00</td>
                    <td class="sifra">2543</td>
                    <td class="Liga">Norway 2 Division</td>
                    <td class="tim1">Holmen</td>
                    <td class="kvota1">2,80</td>
                    <td class="kvotaX">3,30</td>
                    <td class="kvota2">1,85</td>
                    <td class="tim2">Flekkeroy</td>
                    <td class="pol">(0 : 1)</td>
                    <td class="rez">1 : 1</td>
                    <td class="status">Второ пол.</td>
                </tr>
                <tr>
                    <td class="pocetok">16:00</td>
                    <td class="sifra">2547</td>
                    <td class="Liga">Norway 2 Division</td>
                    <td class="tim1">Egersund</td>
                    <td class="kvota1">2,20</td>
                    <td class="kvotaX">3,20</td>
                    <td class="kvota2">2,35</td>
                    <td class="tim2">Vard Haugesund</td>
                    <td class="pol">(1 : 2)</td>
                    <td class="rez">5 : 2</td>
                    <td class="status">Второ пол.</td>
                </tr>
                <tr>
                    <td class="pocetok">16:00</td>
                    <td class="sifra">2548</td>
                    <td class="Liga">Norway 2 Division</td>
                    <td class="tim1">Vidar</td>
                    <td class="kvota1">1,75</td>
                    <td class="kvotaX DobitnaKvota">3,40</td>
                    <td class="kvota2">3,00</td>
                    <td class="tim2">Asane</td>
                    <td class="pol">(0 : 3)</td>
                    <td class="rez">3 : 3</td>
                    <td class="status">Крај</td>
                </tr>
                <tr>
                    <td class="pocetok">16:00</td>
                    <td class="sifra">2822</td>
                    <td class="Liga">Denmark 1 Division</td>
                    <td class="tim1">Hobro</td>
                    <td class="kvota1 DobitnaKvota">2,05</td>
                    <td class="kvotaX">3,10</td>
                    <td class="kvota2">2,90</td>
                    <td class="tim2">Hvidovre</td>
                    <td class="pol">(2 : 0)</td>
                    <td class="rez">2 : 0</td>
                    <td class="status">Крај</td>
                </tr>
                <tr>
                    <td class="pocetok">16:00</td>
                    <td class="sifra">2823</td>
                    <td class="Liga">Denmark 1 Division</td>
                    <td class="tim1">Fredericia</td>
                    <td class="kvota1">2,35</td>
                    <td class="kvotaX">3,35</td>
                    <td class="kvota2 DobitnaKvota">2,90</td>
                    <td class="tim2">Bronshoj</td>
                    <td class="pol">(1 : 1)</td>
                    <td class="rez">2 : 3</td>
                    <td class="status">Крај</td>
                </tr>
                <tr>
                    <td class="pocetok">16:00</td>
                    <td class="sifra">2824</td>
                    <td class="Liga">Denmark 1 Division</td>
                    <td class="tim1">Horsens</td>
                    <td class="kvota1">1,90</td>
                    <td class="kvotaX">3,15</td>
                    <td class="kvota2 DobitnaKvota">3,35</td>
                    <td class="tim2">Vendsyssel</td>
                    <td class="pol">(0 : 0)</td>
                    <td class="rez">1 : 2</td>
                    <td class="status">Крај</td>
                </tr>
                <tr>
                    <td class="pocetok">16:00</td>
                    <td class="sifra">2825</td>
                    <td class="Liga">Denmark 1 Division</td>
                    <td class="tim1">AB Kobenhavn</td>
                    <td class="kvota1">1,75</td>
                    <td class="kvotaX DobitnaKvota">3,25</td>
                    <td class="kvota2">3,60</td>
                    <td class="tim2">Koge</td>
                    <td class="pol">(0 : 2)</td>
                    <td class="rez">3 : 3</td>
                    <td class="status">Крај</td>
                </tr>
                <tr>
                    <td class="pocetok">16:00</td>
                    <td class="sifra">2826</td>
                    <td class="Liga">Denmark 1 Division</td>
                    <td class="tim1">Silkeborg</td>
                    <td class="kvota1 DobitnaKvota">1,80</td>
                    <td class="kvotaX">3,60</td>
                    <td class="kvota2">3,80</td>
                    <td class="tim2">Lyngby</td>
                    <td class="pol">(0 : 1)</td>
                    <td class="rez">3 : 2</td>
                    <td class="status">Крај</td>
                </tr>
                <tr>
                    <td class="pocetok">16:00</td>
                    <td class="sifra">3812</td>
                    <td class="Liga">Faroe Islands</td>
                    <td class="tim1">HB Torshavn</td>
                    <td class="kvota1">1,80</td>
                    <td class="kvotaX">3,60</td>
                    <td class="kvota2">3,80</td>
                    <td class="tim2">EB Streymur</td>
                    <td class="pol">(0 : 0)</td>
                    <td class="rez"><span class="gol">2</span> : <span class="gol">1</span>
                    </td>
                    <td class="status">Второ пол.</td>
                </tr>
                <tr>
                    <td class="pocetok">16:00</td>
                    <td class="sifra">3813</td>
                    <td class="Liga">Faroe Islands</td>
                    <td class="tim1">Klaksvik</td>
                    <td class="kvota1">1,90</td>
                    <td class="kvotaX">3,50</td>
                    <td class="kvota2">3,50</td>
                    <td class="tim2">IF Fuglafjordur</td>
                    <td class="pol">(2 : 0)</td>
                    <td class="rez">3 : 0</td>
                    <td class="status">Второ пол.</td>
                </tr>
                <tr>
                    <td class="pocetok">16:00</td>
                    <td class="sifra">3814</td>
                    <td class="Liga">Faroe Islands</td>
                    <td class="tim1">Skála</td>
                    <td class="kvota1">5,50</td>
                    <td class="kvotaX">4,00</td>
                    <td class="kvota2">1,55</td>
                    <td class="tim2">B36 Torshavn</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">16:00</td>
                    <td class="sifra">5192</td>
                    <td class="Liga">Iceland 2</td>
                    <td class="tim1">Haukar</td>
                    <td class="kvota1">1,90</td>
                    <td class="kvotaX">3,50</td>
                    <td class="kvota2">3,50</td>
                    <td class="tim2">Bolungarvik</td>
                    <td class="pol">(0 : 0)</td>
                    <td class="rez">3 : 1</td>
                    <td class="status">Второ пол.</td>
                </tr>
                <tr>
                    <td class="pocetok">16:30</td>
                    <td class="sifra">3851</td>
                    <td class="Liga">Lithuania 1</td>
                    <td class="tim1">Siauliai</td>
                    <td class="kvota1">5,25</td>
                    <td class="kvotaX">3,60</td>
                    <td class="kvota2">1,45</td>
                    <td class="tim2">Atlantas</td>
                    <td class="pol">(1 : 1)</td>
                    <td class="rez">2 : 1</td>
                    <td class="status">Второ пол.</td>
                </tr>
                <tr>
                    <td class="pocetok">17:30</td>
                    <td class="sifra">2715</td>
                    <td class="Liga">Finland 1 Division</td>
                    <td class="tim1">Viikingit</td>
                    <td class="kvota1">5,25</td>
                    <td class="kvotaX">3,85</td>
                    <td class="kvota2">1,60</td>
                    <td class="tim2">HIFK</td>
                    <td class="pol">( : )</td>
                    <td class="rez">0 : 0</td>
                    <td class="status">Прво полувреме</td>
                </tr>
                <tr>
                    <td class="pocetok">17:30</td>
                    <td class="sifra">2751</td>
                    <td class="Liga">Finland 3</td>
                    <td class="tim1">BK-46</td>
                    <td class="kvota1">1,45</td>
                    <td class="kvotaX">4,40</td>
                    <td class="kvota2">5,70</td>
                    <td class="tim2">KaPa</td>
                    <td class="pol">( : )</td>
                    <td class="rez">0 : <span class="gol">1</span>
                    </td>
                    <td class="status">Прво полувреме</td>
                </tr>
                <tr>
                    <td class="pocetok">17:30</td>
                    <td class="sifra">2752</td>
                    <td class="Liga">Finland 3</td>
                    <td class="tim1">Atlantis</td>
                    <td class="kvota1">1,40</td>
                    <td class="kvotaX">4,50</td>
                    <td class="kvota2">6,00</td>
                    <td class="tim2">Kuusysi</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">2504</td>
                    <td class="Liga">Norway Premier</td>
                    <td class="tim1">Molde</td>
                    <td class="kvota1">1,30</td>
                    <td class="kvotaX">5,50</td>
                    <td class="kvota2">7,00</td>
                    <td class="tim2">Brann</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">2505</td>
                    <td class="Liga">Norway Premier</td>
                    <td class="tim1">Odd</td>
                    <td class="kvota1">1,55</td>
                    <td class="kvotaX">4,00</td>
                    <td class="kvota2">5,70</td>
                    <td class="tim2">Sogndal</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">2506</td>
                    <td class="Liga">Norway Premier</td>
                    <td class="tim1">Stabaek</td>
                    <td class="kvota1">2,55</td>
                    <td class="kvotaX">3,30</td>
                    <td class="kvota2">2,75</td>
                    <td class="tim2">Start</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">2507</td>
                    <td class="Liga">Norway Premier</td>
                    <td class="tim1">Sandnes</td>
                    <td class="kvota1">2,65</td>
                    <td class="kvotaX">3,25</td>
                    <td class="kvota2">2,65</td>
                    <td class="tim2">Bodo/Glimt</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">2511</td>
                    <td class="Liga">Norway 1 Division</td>
                    <td class="tim1">Honefoss BK</td>
                    <td class="kvota1">1,90</td>
                    <td class="kvotaX">3,10</td>
                    <td class="kvota2">3,20</td>
                    <td class="tim2">Tromsdalen</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">2512</td>
                    <td class="Liga">Norway 1 Division</td>
                    <td class="tim1">Baerum</td>
                    <td class="kvota1">3,50</td>
                    <td class="kvotaX">3,50</td>
                    <td class="kvota2">1,90</td>
                    <td class="tim2">Fredrikstad</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">2513</td>
                    <td class="Liga">Norway 1 Division</td>
                    <td class="tim1">Mjondalen</td>
                    <td class="kvota1">2,25</td>
                    <td class="kvotaX">3,40</td>
                    <td class="kvota2">3,10</td>
                    <td class="tim2">Ranheim</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">2514</td>
                    <td class="Liga">Norway 1 Division</td>
                    <td class="tim1">Ham Kam</td>
                    <td class="kvota1">1,75</td>
                    <td class="kvotaX">3,65</td>
                    <td class="kvota2">4,85</td>
                    <td class="tim2">Ullensaker/Kisa</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">2515</td>
                    <td class="Liga">Norway 1 Division</td>
                    <td class="tim1">Nest-Sotra</td>
                    <td class="kvota1">1,90</td>
                    <td class="kvotaX">3,50</td>
                    <td class="kvota2">3,50</td>
                    <td class="tim2">Strommen</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">2516</td>
                    <td class="Liga">Norway 1 Division</td>
                    <td class="tim1">Alta</td>
                    <td class="kvota1">2,15</td>
                    <td class="kvotaX">3,40</td>
                    <td class="kvota2">3,20</td>
                    <td class="tim2">Bryne</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">2544</td>
                    <td class="Liga">Norway 2 Division</td>
                    <td class="tim1">Fram Larvik</td>
                    <td class="kvota1">1,40</td>
                    <td class="kvotaX">4,40</td>
                    <td class="kvota2">4,20</td>
                    <td class="tim2">Arendal</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">2545</td>
                    <td class="Liga">Norway 2 Division</td>
                    <td class="tim1">Notodden</td>
                    <td class="kvota1">2,20</td>
                    <td class="kvotaX">3,20</td>
                    <td class="kvota2">2,35</td>
                    <td class="tim2">Kongsvinger</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">2546</td>
                    <td class="Liga">Norway 2 Division</td>
                    <td class="tim1">Orn-Horten</td>
                    <td class="kvota1">2,15</td>
                    <td class="kvotaX">3,20</td>
                    <td class="kvota2">2,40</td>
                    <td class="tim2">Asker</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">2549</td>
                    <td class="Liga">Norway 2 Division</td>
                    <td class="tim1">Fyllingsdalen</td>
                    <td class="kvota1">1,40</td>
                    <td class="kvotaX">4,40</td>
                    <td class="kvota2">4,20</td>
                    <td class="tim2">Stord S.</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">3802</td>
                    <td class="Liga">Estonia 1</td>
                    <td class="tim1">Tallinna Kalev</td>
                    <td class="kvota1">2,10</td>
                    <td class="kvotaX">3,40</td>
                    <td class="kvota2">3,00</td>
                    <td class="tim2">Lokomotiv Johvi</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">5193</td>
                    <td class="Liga">Iceland 2</td>
                    <td class="tim1">KA Akureyri</td>
                    <td class="kvota1">3,00</td>
                    <td class="kvotaX">3,40</td>
                    <td class="kvota2">2,10</td>
                    <td class="tim2">Leiknir</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">5195</td>
                    <td class="Liga">Iceland 2</td>
                    <td class="tim1">Vikingur O.</td>
                    <td class="kvota1">1,70</td>
                    <td class="kvotaX">3,80</td>
                    <td class="kvota2">4,00</td>
                    <td class="tim2">Throttur</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">5196</td>
                    <td class="Liga">Iceland 2</td>
                    <td class="tim1">Selfoss</td>
                    <td class="kvota1">1,65</td>
                    <td class="kvotaX">3,80</td>
                    <td class="kvota2">4,50</td>
                    <td class="tim2">Tindastoll</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">5197</td>
                    <td class="Liga">Iceland 2</td>
                    <td class="tim1">KV</td>
                    <td class="kvota1">3,60</td>
                    <td class="kvotaX">3,60</td>
                    <td class="kvota2">1,85</td>
                    <td class="tim2">Grindavik</td>
                    <td class="pol">( : )</td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="s8" class="sportovi ui-tabs ui-widget ui-widget-content ui-corner-all" style="margin-bottom:2px;">
        <div class="NaslovContainer" id="divSport8" onclick="NaslovContainer_click(this,8)">
            <div class="NaslovNaGrupa">Хокеј</div>
        </div>
        <table class="TabelaGrupa Hokej">
            <thead>
                <tr>
                    <th class="naslov_start">старт</th>
                    <th class="naslov_sifra">шифра</th>
                    <th class="naslov_liga">лига</th>
                    <th class="naslov_tim1">Тим 1</th>
                    <th class="naslov_1">1</th>
                    <th class="naslov_X">X</th>
                    <th class="naslov_2">2</th>
                    <th class="naslov_tim2">Тим 2</th>
                    <th class="naslov_pol">третини</th>
                    <th class="naslov_rez">рез.</th>
                    <th class="naslov_status">статус</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="pocetok">16:00</td>
                    <td class="sifra">8412</td>
                    <td class="Liga">Field Hockey World Cup (W)</td>
                    <td class="tim1">Holland z</td>
                    <td class="kvota1 DobitnaKvota">1,10</td>
                    <td class="kvotaX">8,00</td>
                    <td class="kvota2">12,00</td>
                    <td class="tim2">South Korea z</td>
                    <td class="cetvrtini">1:0</td>
                    <td class="rez">3 : 0</td>
                    <td class="status">Крај</td>
                </tr>
                <tr>
                    <td class="pocetok">17:30</td>
                    <td class="sifra">8413</td>
                    <td class="Liga">Field Hockey World Cup (W)</td>
                    <td class="tim1">Japan z</td>
                    <td class="kvota1">1,90</td>
                    <td class="kvotaX">4,20</td>
                    <td class="kvota2">2,90</td>
                    <td class="tim2">Belgium z</td>
                    <td class="cetvrtini"></td>
                    <td class="rez">0 : 0</td>
                    <td class="status">Прво полувреме</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="s22" class="sportovi ui-tabs ui-widget ui-widget-content ui-corner-all" style="margin-bottom:2px;">
        <div class="NaslovContainer" id="divSport22" onclick="NaslovContainer_click(this,22)">
            <div class="NaslovNaGrupa">Кошарка</div>
        </div>
        <table class="TabelaGrupa Kosarka">
            <thead>
                <tr>
                    <th class="naslov_start">старт</th>
                    <th class="naslov_sifra">шифра</th>
                    <th class="naslov_liga">лига</th>
                    <th class="naslov_tim1">Тим 1</th>
                    <th class="naslov_1">1</th>
                    <th class="naslov_X">X</th>
                    <th class="naslov_2">2</th>
                    <th class="naslov_tim2">Тим 2</th>
                    <th class="naslov_pol">четвртини</th>
                    <th class="naslov_rez">рез.</th>
                    <th class="naslov_status">статус</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">8191</td>
                    <td class="Liga">Basketball VTB League Play Off</td>
                    <td class="tim1">Nizhny Novgorod</td>
                    <td class="kvota1">3,25</td>
                    <td class="kvotaX">16,00</td>
                    <td class="kvota2">1,35</td>
                    <td class="tim2">CSKA M.</td>
                    <td class="cetvrtini"></td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="s37" class="sportovi ui-tabs ui-widget ui-widget-content ui-corner-all" style="margin-bottom:2px;">
        <div class="NaslovContainer" id="divSport37" onclick="NaslovContainer_click(this,37)">
            <div class="NaslovNaGrupa">Тенис</div>
        </div>
        <table class="TabelaGrupa Tenis">
            <thead>
                <tr>
                    <th class="naslov_start">старт</th>
                    <th class="naslov_sifra">шифра</th>
                    <th class="naslov_liga">лига</th>
                    <th class="naslov_tim1">Тим 1</th>
                    <th class="naslov_1">1</th>
                    <th class="naslov_2">2</th>
                    <th class="naslov_tim2">Тим 2</th>
                    <th class="naslov_pol">сетови</th>
                    <th class="naslov_rez">рез.</th>
                    <th class="naslov_status">статус</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="pocetok">14:45</td>
                    <td class="sifra">7411</td>
                    <td class="Liga">WTA Birmingham Singles</td>
                    <td class="tim1">Fichman S.</td>
                    <td class="kvota1">1,55</td>
                    <td class="kvota2">2,40</td>
                    <td class="tim2">Kichenok N.</td>
                    <td class="setovi">7:6,6:7,1:1</td>
                    <td class="rez">1 : 1</td>
                    <td class="status">Во тек</td>
                </tr>
                <tr>
                    <td class="pocetok">15:30</td>
                    <td class="sifra">7283</td>
                    <td class="Liga">ATP Challenger Prague</td>
                    <td class="tim1">Carballes Baena R.</td>
                    <td class="kvota1">1,40</td>
                    <td class="kvota2 DobitnaKvota">2,70</td>
                    <td class="tim2">Zhang Ze</td>
                    <td class="setovi">6:3,2:6,3:6</td>
                    <td class="rez">1 : 2</td>
                    <td class="status">Крај</td>
                </tr>
                <tr>
                    <td class="pocetok">15:30</td>
                    <td class="sifra">7284</td>
                    <td class="Liga">ATP Challenger Prague</td>
                    <td class="tim1">Polansky P.</td>
                    <td class="kvota1">1,40</td>
                    <td class="kvota2">2,70</td>
                    <td class="tim2">Laaksonen H.</td>
                    <td class="setovi">6:7,0:0</td>
                    <td class="rez">0 : 1</td>
                    <td class="status">Во тек</td>
                </tr>
                <tr>
                    <td class="pocetok">15:30</td>
                    <td class="sifra">7346</td>
                    <td class="Liga">ATP Challenger Kosice</td>
                    <td class="tim1">Melzer G.</td>
                    <td class="kvota1">1,40</td>
                    <td class="kvota2">2,70</td>
                    <td class="tim2">Phau B.</td>
                    <td class="setovi">6:1,2:0</td>
                    <td class="rez">1 : 0</td>
                    <td class="status">Одложен</td>
                </tr>
                <tr>
                    <td class="pocetok">16:00</td>
                    <td class="sifra">7141</td>
                    <td class="Liga">ATP Halle Doubles</td>
                    <td class="tim1">Raonic M./Youzhny M.</td>
                    <td class="kvota1">1,60</td>
                    <td class="kvota2 DobitnaKvota">2,30</td>
                    <td class="tim2">Haase R./Nishikori K.</td>
                    <td class="setovi">4:6,6:7</td>
                    <td class="rez">0 : 2</td>
                    <td class="status">Крај</td>
                </tr>
                <tr>
                    <td class="pocetok">16:00</td>
                    <td class="sifra">7163</td>
                    <td class="Liga">ATP Challenger Caltanissetta</td>
                    <td class="tim1">Delic M.</td>
                    <td class="kvota1">1,30</td>
                    <td class="kvota2">3,40</td>
                    <td class="tim2">Donati M.</td>
                    <td class="setovi">5:5</td>
                    <td class="rez">0 : 0</td>
                    <td class="status">Во тек</td>
                </tr>
                <tr>
                    <td class="pocetok">16:05</td>
                    <td class="sifra">7413</td>
                    <td class="Liga">WTA Birmingham Singles</td>
                    <td class="tim1">Mladenovic K.</td>
                    <td class="kvota1">1,30</td>
                    <td class="kvota2">3,20</td>
                    <td class="tim2">Peer S.</td>
                    <td class="setovi">6:4,0:0</td>
                    <td class="rez">1 : 0</td>
                    <td class="status">Во тек</td>
                </tr>
                <tr>
                    <td class="pocetok">16:05</td>
                    <td class="sifra">7414</td>
                    <td class="Liga">WTA Birmingham Singles</td>
                    <td class="tim1">Keys M.</td>
                    <td class="kvota1 DobitnaKvota">1,12</td>
                    <td class="kvota2">5,50</td>
                    <td class="tim2">Pereira T.</td>
                    <td class="setovi">6:3,6:3</td>
                    <td class="rez">2 : 0</td>
                    <td class="status">Крај</td>
                </tr>
                <tr>
                    <td class="pocetok">16:05</td>
                    <td class="sifra">7415</td>
                    <td class="Liga">WTA Birmingham Singles</td>
                    <td class="tim1">Zhang Shuai</td>
                    <td class="kvota1">1,80</td>
                    <td class="kvota2">2,00</td>
                    <td class="tim2">Daniilidou E.</td>
                    <td class="setovi">3:4</td>
                    <td class="rez">0 : 0</td>
                    <td class="status">Во тек</td>
                </tr>
                <tr>
                    <td class="pocetok">16:05</td>
                    <td class="sifra">7416</td>
                    <td class="Liga">WTA Birmingham Singles</td>
                    <td class="tim1">Giorgi C.</td>
                    <td class="kvota1">1,15</td>
                    <td class="kvota2">4,50</td>
                    <td class="tim2">Dunne K.</td>
                    <td class="setovi"></td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">16:30</td>
                    <td class="sifra">7164</td>
                    <td class="Liga">ATP Challenger Caltanissetta</td>
                    <td class="tim1">Lama G.</td>
                    <td class="kvota1">1,85</td>
                    <td class="kvota2">1,95</td>
                    <td class="tim2">Fabbiano T.</td>
                    <td class="setovi">6:3,5:7,0:0</td>
                    <td class="rez">1 : <span class="gol">1</span>
                    </td>
                    <td class="status">Во тек</td>
                </tr>
                <tr>
                    <td class="pocetok">16:30</td>
                    <td class="sifra">7208</td>
                    <td class="Liga">ATP London Singles</td>
                    <td class="tim1">De Schepper K.</td>
                    <td class="kvota1">1,35</td>
                    <td class="kvota2">3,00</td>
                    <td class="tim2">Devvarman S.</td>
                    <td class="setovi">0:1</td>
                    <td class="rez">0 : 0</td>
                    <td class="status">Во тек</td>
                </tr>
                <tr>
                    <td class="pocetok">16:30</td>
                    <td class="sifra">7209</td>
                    <td class="Liga">ATP London Singles</td>
                    <td class="tim1">Hewitt L.</td>
                    <td class="kvota1">1,15</td>
                    <td class="kvota2">5,00</td>
                    <td class="tim2">Gimeno-Traver D.</td>
                    <td class="setovi">1:0</td>
                    <td class="rez">0 : 0</td>
                    <td class="status">Во тек</td>
                </tr>
                <tr>
                    <td class="pocetok">16:30</td>
                    <td class="sifra">7210</td>
                    <td class="Liga">ATP London Singles</td>
                    <td class="tim1">Mahut N.</td>
                    <td class="kvota1 DobitnaKvota">1,25</td>
                    <td class="kvota2">3,75</td>
                    <td class="tim2">Ilhan M.</td>
                    <td class="setovi">6:3,6:4</td>
                    <td class="rez">2 : 0</td>
                    <td class="status">Крај</td>
                </tr>
                <tr>
                    <td class="pocetok">16:30</td>
                    <td class="sifra">7211</td>
                    <td class="Liga">ATP London Singles</td>
                    <td class="tim1">Mannarino A.</td>
                    <td class="kvota1">1,30</td>
                    <td class="kvota2">3,40</td>
                    <td class="tim2">Cox D.</td>
                    <td class="setovi">1:2</td>
                    <td class="rez">0 : 0</td>
                    <td class="status">Во тек</td>
                </tr>
                <tr>
                    <td class="pocetok">17:00</td>
                    <td class="sifra">7305</td>
                    <td class="Liga">ATP Challenger Blois</td>
                    <td class="tim1">Collarini A.</td>
                    <td class="kvota1">1,45</td>
                    <td class="kvota2">2,60</td>
                    <td class="tim2">Londero J.I.</td>
                    <td class="setovi"></td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">17:30</td>
                    <td class="sifra">7105</td>
                    <td class="Liga">ATP Halle Singles</td>
                    <td class="tim1">Struff J.-L.</td>
                    <td class="kvota1">1,25</td>
                    <td class="kvota2">3,75</td>
                    <td class="tim2">Sousa J.</td>
                    <td class="setovi">2:1</td>
                    <td class="rez">0 : 0</td>
                    <td class="status">Во тек</td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">7165</td>
                    <td class="Liga">ATP Challenger Caltanissetta</td>
                    <td class="tim1">Volandri F.</td>
                    <td class="kvota1">1,20</td>
                    <td class="kvota2">4,20</td>
                    <td class="tim2">Balleret B.</td>
                    <td class="setovi"></td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">7212</td>
                    <td class="Liga">ATP London Singles</td>
                    <td class="tim1">Lopez F.</td>
                    <td class="kvota1">1,17</td>
                    <td class="kvota2">4,50</td>
                    <td class="tim2">Lajovic D.</td>
                    <td class="setovi"></td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">7213</td>
                    <td class="Liga">ATP London Singles</td>
                    <td class="tim1">Stakhovsky S.</td>
                    <td class="kvota1">1,75</td>
                    <td class="kvota2">2,05</td>
                    <td class="tim2">Brands D.</td>
                    <td class="setovi"></td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">7242</td>
                    <td class="Liga">ATP London Doubles</td>
                    <td class="tim1">Cilic M./Sa A.</td>
                    <td class="kvota1">1,45</td>
                    <td class="kvota2">2,60</td>
                    <td class="tim2">Monroe N./Pospisil V.</td>
                    <td class="setovi"></td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="pocetok">18:00</td>
                    <td class="sifra">7306</td>
                    <td class="Liga">ATP Challenger Blois</td>
                    <td class="tim1">Eysseric J.</td>
                    <td class="kvota1">1,55</td>
                    <td class="kvota2">2,40</td>
                    <td class="tim2">Burquier G.</td>
                    <td class="setovi"></td>
                    <td class="rez">:</td>
                    <td class="status"></td>
                </tr>
            </tbody>
        </table>
    </div>


<!-- ZA TESTIRANJE  -->
  <div id="s101" class="sportovi ui-tabs ui-widget ui-widget-content ui-corner-all" style="margin-bottom:2px;">
      <p>asdf asdf asdf asd f</p>
    </div>
</div>

        </div>
    </div>

    <div style="text-align:center;">
    <span style="font-size:8px;">
    Резултатите објавени тука се неофицијални и Sport Life не ја гарантира нивната точност
    </span>
    </div>
       <script type="text/javascript">



           var SkrieniSportovi = []; 

           function NaslovContainer_click(a, sportID) 
           {
               var tbl = a.nextSibling;
               if (a.className == 'NaslovContainer') 
               {
                   a.className = 'NaslovContainerB';
                   $(tbl).slideUp('fast');
                   SkrieniSportovi.push(sportID);
               }
               else {
                   a.className = 'NaslovContainer';
                   $(tbl).slideDown('fast');

                   // vrakja na pocetna pozicija
                   for (var i = 0; i < SkrieniSportovi.length; i++) {
                       if (SkrieniSportovi[i] == sportID) {
                           SkrieniSportovi.splice(i, 1);
                           break;
                       }
                   }

               }
           }
       </script>


</body>


</body>
</html>

