 
    <article id="blackwhite" class="negative">
    	<div class="wrapper">
        
        
        	<h1>Crno &amp; Beli timovi</h1>
            <p>Dobrodošli na sajt posvećen crno belim fudbalskim klubovima</p>
            <p>Ovde možete pročitati i saznati nešto više o crno beloj fudbalskoj istoriji na različitim kontinentima, zanimljivostima vezanim za crno bele i još mnogo toga. Uživajte u crno beloj fudbalskoj magiji.</p>
            <p><a href="#about" class="button">Više detalja &raquo;</a></p>
        
        </div>    
    </article>
    
    
    <section id="shortcuts">
    	<div class="wrapper">
        	
            <header>
            	<h2>Crno Belo Duško Radović</h2>
                <p>Šta nas greje dok sneg veje? CRNO BELO! Šta nas nosi dok led kosi? CRNO BELO!
                   Šta nas drži dok jul prži? CRNO BELO! Šta se voli i kad boli? CRNO BELO!
                   Šta je boja našeg soja? CRNO BELO! Šta nam krila daje - šta je? CRNO BELO!
                   Šta se bira bez obzira? CRNO BELO! Šta je nada, odvajkada? CRNO BELO!
                   Podsetite me koje ime? PARTIZAN!</p>
            </header>
            
            <article class="shortcut">
            	<span>
                	<i class="fa fa-star"></i>
                </span>
                <h2>SRBIJA</h2>
                
                <p>Crno beli u Srbiji</p>
                
                 <?php  foreach($this->title as $rw) : ?>
                    
                            <?php foreach($rw as $r) : ?>
                
                
            	<p><?php if ($r['menu_id']==3) { ?><a href="?mvcctrl=site&mvcmethod=<?php echo $r['title'] ?>&id=<?=$r['menu_id']?>" class="button">CRNO BELO!&raquo;</a></p><?php } ; ?>
                
                            <?php endforeach;  ?>
                
                 <?php endforeach; ?> 
                
            </article>
        
            <article class="shortcut">
            	<span>
                	<i class="fa fa-star"></i>
                </span>
                
                <h2>TIMOVI</h2>
                
                <p>Crno beli širom sveta</p>
                
                <?php  foreach($this->title as $rw) : ?>
                    
                            <?php foreach($rw as $r) : ?>
                    
            	<p><?php if ($r['menu_id']==4) { ?><a href="?mvcctrl=site&mvcmethod=<?php echo $r['title'] ?>&id=<?=$r['menu_id']?>"  class="button">CRNO BELO!&raquo;</a></p><?php } ; ?>
                
                             <?php endforeach;  ?>
                
                 <?php endforeach; ?>  
                
            </article>
            
            <article class="shortcut">
            	<span>
                	<i class="fa fa-star"></i>
                </span>
                
                
                
                <h2>ISTORIJA</h2>
                
                <p>Od Crno belog je sve počelo</p>
                
                <?php  foreach($this->title as $rw) : ?>
                              
                            <?php foreach($rw as $r) : ?>
                
                <p><?php if ($r['menu_id']==5) { ?><a href="?mvcctrl=site&mvcmethod=<?php echo $r['title'] ?>&id=<?=$r['menu_id']?>" class="button">CRNO BELO!&raquo;</a></p><?php } ; ?>
                        
                             <?php endforeach;  ?>
                
                
                 <?php endforeach; ?>   
                
            </article>
            
            <article class="shortcut">
            	<span>
                	<i class="fa fa-star"></i>
                </span>
                
                <h2>KONTAKT</h2>
                
                <p>Kontaktirajte nas CRNO BELI!</p>
                
                <?php  foreach($this->title as $rw) : ?>
                              
                            <?php foreach($rw as $r) : ?>
                    
            	<p><?php if ($r['menu_id']==6) { ?><a href="?mvcctrl=site&mvcmethod=<?php echo $r['title'] ?>&id=<?=$r['menu_id']?>" class="button">CRNO BELO! &raquo;</a></p><?php } ; ?>
                        
                             <?php endforeach;  ?>
                
                
                 <?php endforeach; ?>       
                            
            </article>
            
        </div>    
    </section>
    
    
    
    <article id="about" class="negative">
    	<div class="wrapper">
        
        	<div class="back">
                <h2>O nama i samom sajtu</h2>
                <p>Odavno sam imao želju da napravim svoj blog ili sajt. Konačno kockice su sklopile i krenuo sam u njegovu realizaciju. U životu imam nekoliko pasija to su: sport (na prvom mestu fudbal), muzika, kompjuteri(sada programiranje) i putovanja. Izbor nije bio lak, ali sam odlučio da krenem sa sportom u kombinaciji sa programiranjem. Pred Vama se nalazi nešto u sta sam uložio dosta truda, volje i vremena. Uživajte u CRNO BELOM!</p>
                <p><?php  foreach($this->title as $rw) : ?>
                              
                            <?php foreach($rw as $r) : ?>
                    
                        <?php if ($r['menu_id']==2) { ?><a href="?mvcctrl=site&mvcmethod=<?php echo $r['title'] ?>&id=<?=$r['menu_id']?>" 
                        <?php } ; ?>
                                                           
                            <?php endforeach;  ?>
                                                           
                    <?php endforeach; ?>  class="button">Saznaj više &raquo;</a></p>
       		</div>
       
        </div>
    </article>
    
    
    <section id="timeline">
    	<div class="wrapper">
        
        	<h2>Crno beli vremeplov</h2>
            <p>Ova mini galerija je samo uvod za deo Istorija našeg sajta. Na ovim crno belim slikama se nalaze čuvene crno bele šampionske ekipe poput one Partizanovih "beba" iz 60tih, zatim Juventusa iz 70tih predvođenih legendarnim Dinom Zoffom, kao i timova bogate istorije poput brazilskog Botafoga itd. Ostali timovi koji se nalaze u ovoj galeriji St Mirren (Škotska), Newcastle United i Notts County (Engleska), Besiktaš (Turska), Udinese (Italija) i Jeunesse Esch (Luksemburg). </p>
        
            <div class="oldtimes">
              <div class="slide"><img src="images/juveold325260.jpg"></div>
              <div class="slide"><img src="images/botafogold325260.jpg"></div>
              <div class="slide"><img src="images/pfcold325260.jpg"></div>
              <div class="slide"><img src="images/stmold325260.jpg"></div>
              <div class="slide"><img src="images/JEold325260.jpg"></div>
              <div class="slide"><img src="images/nufcold325260.jpg"></div>
              <div class="slide"><img src="images/udineseold325260.jpg"></div>
              <div class="slide"><img src="images/besiktasold325260.jpg"></div>
              <div class="slide"><img src="images/NCFC325260.jpg"></div>
            </div>
        </div>
    </section>
    
























