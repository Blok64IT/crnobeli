

    
    
    <section id="central">
    	<div class="wrapper">
        
        	<main id="mainFull">

            	<h1>Crno Bela Istorija</h1>
                <p>U ovom delu predstavićemo Vam samo jedan mali deo fudbalske crno belo istorije. Naravno prvo odakle je sve počelo tj. Engleska "kolevka fudbala" i široj javnosti ne tako poznati Nottc County, pa onda čuvena brazilska samba i njen neizostavni deo Botafogo. Za kraj ćemo Vam predstaviti popularnu "Staru damu" tj. torinski Juventus, zasigurno natrofejni crno beli klub u istoriji svetskog fudbala.</p>
           		<p>&nbsp;</p>



           



           
           		

                <?php foreach($this->articles as $article) : ?>
                    
                    <article class="article">
                    
                        <a href="?mvcctrl=site&mvcmethod=article&article=<?php echo $article->article_id; ?>" class="articleImg"><img src="<?php echo 'images/'. $article->image;?>"></a>
                        
                        <header>
                            <h2><a href="?mvcctrl=site&mvcmethod=article&article=<?php echo $article->article_id; ?>"><?php echo $article->title; ?></a></h2>
                            <p><?php echo $article->autor; ?> / <?php echo $article->published; ?></p>
                        </header>
                        
                        <p><?php echo $article->content; ?></p> 
                        <p><a href="?mvcctrl=site&mvcmethod=article&article=<?php echo $article->article_id; ?>" class="button">Pročitaj ceo tekst &raquo;</a></p>
                    </article>

                <?php endforeach; ?>






           		<!-- <article class="article">
                	
                	<a href="article.php" class="articleImg"><img src=images/botafogo62340240.jpg></a>
                    
                    <header>
                    	<h2><a href="one-article.html">Lorem ipsum dolor sit amet</a></h2>
                        <p>Petar petrović / 28.05.2016.</p>
                    </header>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, et, reprehenderit magnam exercitationem iure repellendus quisquam. Perferendis, aliquid, velit, ab corporis ex repellat distinctio eos vero nobis nesciunt labore laboriosam culpa adipisci perspiciatis suscipit quidem mollitia dolor accusamus unde ullam. Architecto, magnam voluptas placeat harum velit earum. Nisi, nulla, ratione esse quaerat molestias quis maiores praesentium ipsa possimus quod voluptatum sequi vero accusantium necessitatibus dolor quos et neque ullam adipisci molestiae dolorum. Maiores, unde, aspernatur tenetur minima culpa perferendis quo. Dolorem, illo, rerum dolorum libero incidunt fugiat quam nisi ab ipsam quidem aliquid corporis a. Aspernatur repudiandae cumque veniam ducimus!</p>
                	<p><a href="one-article.html" class="button">Pročitaj ceo tekst &raquo;</a></p>
                </article>
           		<article class="article">
                	
                	<a href="one-article.html" class="articleImg"><img src="images/juve834340240.jpg"></a>
                    
                    <header>
                    	<h2><a href="one-article.html">Lorem ipsum dolor sit amet</a></h2>
                        <p>Petar petrović / 28.05.2016.</p>
                    </header>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, et, reprehenderit magnam exercitationem iure repellendus quisquam. Perferendis, aliquid, velit, ab corporis ex repellat distinctio eos vero nobis nesciunt labore laboriosam culpa adipisci perspiciatis suscipit quidem mollitia dolor accusamus unde ullam. Architecto, magnam voluptas placeat harum velit earum. Nisi, nulla, ratione esse quaerat molestias quis maiores praesentium ipsa possimus quod voluptatum sequi vero accusantium necessitatibus dolor quos et neque ullam adipisci molestiae dolorum. Maiores, unde, aspernatur tenetur minima culpa perferendis quo. Dolorem, illo, rerum dolorum libero incidunt fugiat quam nisi ab ipsam quidem aliquid corporis a. Aspernatur repudiandae cumque veniam ducimus!</p>
                	<p><a href="one-article.html" class="button">Pročitaj ceo tekst &raquo;</a></p>
                </article> -->
           
            </main>
        
            
        </div>
    </section>
    
























