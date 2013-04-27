<!DOCTYPE html>
<html>
  <?php
    // This is the composer autoloader. Used by
    // the markdown parser and RSS feed builder.
    require 'vendor/autoload.php';

    // Explicitly including the dispatch framework,
    // and our functions.php file
    require 'app/includes/dispatch.php';
    require 'app/includes/functions.php';

    // Load the configuration file
    config('source', 'app/config.ini');

    // The front page of the blog.
    // This will match the root url
    get('/index', function () {

        $page = from($_GET, 'page');
        $page = $page ? (int)$page : 1;

        $posts = get_posts($page);

        if(empty($posts) || $page < 1){
        // a non-existing page
        not_found();
      }

         render('main',array(
          'page' => $page,
            'posts' => $posts,
            'has_pagination' => has_pagination($page)
        ));
    });

    // The post page
    get('/:year/:month/:name',function($year, $month, $name){

        $post = find_post($year, $month, $name);

        if(!$post){
            not_found();
        }

        render('post', array(
            'title' => $post->title .' ⋅ ' . config('blog.title'),
            'p' => $post
        ));
    });

    // The JSON API
    get('/api/json',function(){

        header('Content-type: application/json');

        // Print the 10 latest posts as JSON
        echo generate_json(get_posts(1, 10));
    });

    // Show the RSS feed
    get('/rss',function(){

        header('Content-Type: application/rss+xml');

        // Show an RSS feed with the 30 latest posts
        echo generate_rss(get_posts(1, 30));
    });

    // If we get here, it means that
    // nothing has been matched above

    get('.*',function(){
        not_found();
    });

    // Serve the blog
    dispatch();
  ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Så Sjukt Mycket Bättre</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <header class="main-header">
      
    </header>
    <!-- /.main-header -->
    <section class="wrapper">
      <article class="post-01">
        <h1>Exit Strategy</h1>
        <p>Say goodbye to these, because it’s the last time! Well, what do you expect, mother? That’s what it said on 'Ask Jeeves.'</p>
        <h2>Forget-Me-Now</h2>
        <p>Now, when you do this without getting punched in the chest, you'll have more fun. Say goodbye to these, because it’s the last time! It’s called 'taking advantage.' It’s what gets you ahead in life. We just call it a sausage. Marry me.</p>
        <ul>
          <li>No&hellip; but I'd like to be asked!</li>
          <li>It’s called 'taking advantage.' It’s what gets you ahead in life.</li>
          <li>I've opened a door here that I regret.</li>
        </ul>
        <h3>Exit Strategy</h3>
        <p>Really? Did nothing cancel? I'm half machine. I'm a monster. I've opened a door here that I regret. Did you enjoy your meal, Mom? You drank it fast enough. Get me a vodka rocks. And a piece of toast.</p>
        <h4>Let 'Em Eat Cake</h4>
        <p>There’s so many poorly chosen words in that sentence. Michael! Bad news. Andy Griffith turned us down. He didn’t like his trailer. As you may or may not know, Lindsay and I have hit a bit of a rough patch. What’s Spanish for “I know you speak English?”</p>
        <ol>
          <li>Marry me.</li>
          <li>Marry me.</li>
        </ol>
        <h5>Let 'Em Eat Cake</h5>
        <p>Not tricks, Michael, illusions. Get me a vodka rocks. And a piece of toast. Now, when you do this without getting punched in the chest, you'll have more fun. Well, what do you expect, mother? Whoa, this guy’s straight?</p>
      </article>
      <article class="post-02">
        <h1>Hello Bandit</h1>
        <p>This man is a knight in shining armor. Keep your mind limber. Oh I beg to differ, I think we have a lot to discuss. After all, you are a client. Like a sloth. I can do that. I'm real proud of you for coming, bro. I know you hate funerals. I'm doing mental jumping jacks.</p>
        <h2>Take It!</h2>
        <p>I'm really more an apartment person. Pretend. You pretend the feelings are there, for the world, for the people around you. Who knows? Maybe one day they will be. You look&hellip;perfect.</p>
        <ul>
          <li>This man is a knight in shining armor.</li>
          <li>Makes me a &hellip; scientist.</li>
          <li>Only you could make those words cute.</li>
          <li>I have a dark side, too.</li>
          <li>Like a sloth. I can do that.</li>
        </ul>
        <h3>The Lion Sleeps Tonight</h3>
        <p>I'm not the monster he wants me to be. So I'm neither man nor beast. I'm something new entirely. With my own set of rules. I'm Dexter. Boo. Tell him time is of the essence. This man is a knight in shining armor. I am not a killer.</p>
        <h4>In the Beginning</h4>
        <p>This man is a knight in shining armor. He taught me a code. To survive. I will not kill my sister. I will not kill my sister. I will not kill my sister. Under normal circumstances, I'd take that as a compliment. I've lived in darkness a long time. Over the years my eyes adjusted until the dark became my world and I could see. You all right, Dexter?</p>
        <ol>
          <li>I'm real proud of you for coming, bro. I know you hate funerals.</li>
          <li>God created pudding, and then he rested.</li>
        </ol>
        <h5>First Blood</h5>
        <p>I'm partial to air conditioning. Finding a needle in a haystack isn’t hard when every straw is computerized. I love Halloween. The one time of year when everyone wears a mask &hellip; not just me. I'm really more an apartment person. I'm really more an apartment person.</p>
      </article>
      <article class="post-03">
        <h1>A Big Piece of Garbage</h1>
        <p>Yeah, I do that with my stupidness. Now, now. Perfectly symmetrical violence never solved anything. Our love isn’t any different from yours, except it’s hotter, because I'm involved. Your best is an idiot! Large bet on myself in round one. Is the Space Pope reptilian!?</p>
        <h2>The Late Philip J. Fry</h2>
        <p>Bender, we're trying our best. It’s okay, Bender. I like cooking too. Really?! Ah, yes! John Quincy Adding Machine.  He struck a chord with the voters when he pledged not to go on a killing spree. File not found. You won’t have time for sleeping, soldier, not with all the bed making you'll be doing.</p>
        <ul>
          <li>Does anybody else feel jealous and aroused and worried?</li>
          <li>Ah, yes! John Quincy Adding Machine.  He struck a chord with the voters when he pledged not to go on a killing spree.</li>
        </ul>
        <h3>Time Keeps on Slippin'</h3>
        <p>I was all of history’s great robot actors - Acting Unit 0.8; Thespomat; David Duchovny! Anyhoo, your net-suits will allow you to experience Fry’s worm infested bowels as if you were actually wriggling through them. Spare me your space age technobabble, Attila the Hun! Bite my shiny metal ass. Why yes! Thanks for noticing.</p>
        <h4>Obsoletely Fabulous</h4>
        <p>Tell her you just want to talk. It has nothing to do with mating. You're going back for the Countess, aren’t you? No! The kind with looting and maybe starting a few fires! Shut up and get to the point! Why did you bring us here? Also Zoidberg.</p>
        <ol>
          <li>You seem malnourished. Are you suffering from intestinal parasites?</li>
          <li>Who said that? SURE you can die! You want to die?!</li>
          <li>Hi, I'm a naughty nurse, and I really need someone to talk to. $9.95 a minute.</li>
        </ol>
        <h5>The Route of All Evil</h5>
        <p>Maybe I love you so much I love you no matter who you are pretending to be. And why did 'I' have to take a cab? Ugh, it’s filthy! Why not create a National Endowment for Strip Clubs while we're at it? In our darkest hour, we can stand erect, with proud upthrust bosoms.</p>
      </article>
      <article class="post-04">
        <h1>Homer Alone</h1>
        <p>Kids, we need to talk for a moment about Krusty Brand Chew Goo Gum Like Substance. We all knew it contained spider eggs, but the hantavirus? That came out of left field. So if you're experiencing numbness and/or comas, send five dollars to antidote, PO box&hellip; Get ready, skanks! It’s time for the truth train! Marge, just about everything’s a sin. Y'ever sat down and read this thing? Technically we're not supposed to go to the bathroom.</p>
        <h2>Homer Alone</h2>
        <p>You don’t like your job, you don’t strike. You go in every day and do it really half-assed. That’s the American way. Marge, you being a cop makes you the man! Which makes me the woman &mdash; and I have no interest in that, besides occasionally wearing the underwear, which as we discussed, is strictly a comfort thing. We started out like Romeo and Juliet, but it ended up in tragedy.</p>
        <ul>
          <li>I'll be back. You can’t keep the Democrats out of the White House forever, and when they get in, I'm back on the streets, with all my criminal buddies.</li>
          <li>Get ready, skanks! It’s time for the truth train!</li>
          <li>I'll be back. You can’t keep the Democrats out of the White House forever, and when they get in, I'm back on the streets, with all my criminal buddies.</li>
          <li>Kids, we need to talk for a moment about Krusty Brand Chew Goo Gum Like Substance. We all knew it contained spider eggs, but the hantavirus? That came out of left field. So if you're experiencing numbness and/or comas, send five dollars to antidote, PO box&hellip;</li>
        </ul>
        <h3>Marge vs. Monorail</h3>
        <p>This is the greatest case of false advertising I've seen since I sued the movie “The Never Ending Story.” Remember the time he ate my goldfish? And you lied and said I never had goldfish. Then why did I have the bowl, Bart? *Why did I have the bowl?* I like my beer cold, my TV loud and my homosexuals flaming. Attempted murder? Now honestly, what is that? Do they give a Nobel Prize for attempted chemistry?</p>
        <h4>Homer: Bad Man</h4>
        <p>Look out, Itchy! He’s Irish! You don’t win friends with salad. I didn’t get rich by signing checks. I like my beer cold, my TV loud and my homosexuals flaming.</p>
        <ol>
          <li>Son, a woman is like a beer. They smell good, they look good, you'd step over your own mother just to get one! But you can’t stop at one. You wanna drink another woman!</li>
          <li>You don’t like your job, you don’t strike. You go in every day and do it really half-assed. That’s the American way.</li>
          <li>Facts are meaningless. You could use facts to prove anything that’s even remotely true!</li>
        </ol>
        <h5>Natural Born Kissers</h5>
        <p>What good is money if it can’t inspire terror in your fellow man? Marge, it takes two to lie. One to lie and one to listen. Lisa, vampires are make-believe, like elves, gremlins, and Eskimos. And now, in the spirit of the season: start shopping. And for every dollar of Krusty merchandise you buy, I will be nice to a sick kid. For legal purposes, sick kids may include hookers with a cold.</p>
      </article>
    </section>
    <!-- /.wrapper -->
    <footer class="main-footer">
      
    </footer>
    <!-- /.main-footer -->
    <!-- Keep script import at bottom, right before closing </body> tag -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>