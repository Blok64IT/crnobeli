    
    <section id="central">
    	<div class="wrapper">
        
        	<main id="main">

   
                    <h1><?php echo $this->article->title; ?></h1>
                    <p><?php echo $this->article->autor; ?> / <?php echo $this->article->published; ?></p>
                  
                	<img src="<?php echo 'images/' . $this->article->main_image; ?>">
                    
                    <p>&nbsp;</p>
                    <p><?php echo $this->article->main_content; ?></p>

            </main>

            
            <aside id="sidebar">
            	<h2>Other news</h2>
                
                
                <?php foreach ($this->sideArticles as $sideArticle) : ?>
                
				<article class="article">
                	
                    
                    
                    	<h3><a href="?mvcctrl=site&mvcmethod=article&article=<?php echo $sideArticle->article_id; ?>"><?php echo $sideArticle->title;?></a></h3>
                        <p><?php echo $sideArticle->autor; ?> /<?php echo $sideArticle->published; ?> </p>
                   
                	<a href="?mvcctrl=site&mvcmethod=article&article=<?php echo $sideArticle->article_id; ?>"><img src="<?php echo 'images/'. $sideArticle->image;?>"></a>
                    
                	<p><a href="?mvcctrl=site&mvcmethod=article&article=<?php echo $sideArticle->article_id; ?>" class="button">Pročitaj ceo tekst &raquo;</a></p>
                </article>
                
				<?php endforeach; ?>
				
                
                
            </aside>
        
            
        </div>
    </section>
    
    























