<?php 
    if(isset($_GET['today'])){
        $today = $_GET['today'];
    } else {
        $today = date('l');
    }
    
    switch($today){
        case 'Tuesday':            
            $tvshow = 'The Walking Dead';                 
            $content = 'The Walking Dead is an American post-apocalyptic horror television series based on the comic book series of the same name by Robert Kirkman, Tony Moore, and Charlie Adlard—together forming the core of The Walking Dead franchise. The series features a large ensemble cast as survivors of a zombie apocalypse trying to stay alive under near-constant threat of attacks from zombies known as "walkers" (among other nicknames). However, with the collapse of modern civilization, these survivors must confront other human survivors who have formed groups and communities with their own sets of laws and morals, sometimes leading to open, a hostile conflict between them.';
            $bc ='style="background-color:#FCD2D1;"';
            break;        
        case 'Wednesday':            
            $tvshow = 'Money Heist';                  
            $content = 'Money Heist (also known as La Casa de Papel) is a Spanish television crime-drama series.';
            $content = ''.$content.'<br><br>An enigmatic man, nicknamed The Professor, plans the biggest heist in history. To carry out this plan, he recruits eight of the country\'s top criminals who have nothing to lose: Tokyo, an experienced robber, Berlin, the ringleader, Moscow, the drilling expert, Rio, the computer scientist, Nairobi, the counterfeiter, Denver, son of Moscow, and Helsinki and Oslo, the Balkan war veterans.';
            $content = ''.$content.'<br><br>The goal is to infiltrate the Royal Mint of Spain in order to print €2.4 billion in less than 11 days, without spelling a single drop of blood. The group takes 67 hostages, including the daughter of the British Ambassador. With the mastermind working on the outside, they always manage to stay one step ahead of the police.';
            $bc ='style="background-color:#CEE5D0;"';
            break;            
        case 'Thursday':           
            $tvshow = 'Game of Thrones';                    
            $content = 'The title sequence of the HBO fantasy television series Game of Thrones that introduces every episode serves as a guide to the physical landscape of the world of the series. It changes depending on the locations visited in the particular episode it introduces. The title sequence was created by Elastic for HBO, and is accompanied by a theme tune composed by Ramin Djawadi.';
            $content = ''.$content.'<br><br>The sequence depicts a three-dimensional map of the series\' fictional world, projected onto a concave earth, and lit by a small sun contained within an armilla (or spherical astrolabe) that metaphorically depicts major events in the history of the fictional world at the sphere\'s center. As the camera swoops across the map and focuses on the locations in which the episode\'s events take place, complicated clockwork mechanisms cause buildings and other structures to emerge from the map and unfold. Meanwhile, the names of the principal cast (with the sigils of the characters\' families next to the names) and creative staff are displayed. The sequence concludes after about one-and-a-half minutes with the title card and brief opening credits indicating the episode\'s writers and directors.';
            $bc ='style="background-color:#D7E9F7;"';
            break;
        case 'Friday':            
            $tvshow = 'Dark';                       
            $content = 'Dark is a German science fiction thriller streaming television series co-created by Baran bo Odar and Jantje Friese. It ran for three seasons from 2017 to 2020. In the aftermath of a child\'s disappearance, Dark follows characters from the fictional German town of Winden as they pursue the truth. They follow connections between four estranged families to unravel a sinister time travel conspiracy which spans several generations. The series explores the existential implications of time, and its effect on human nature. It features an ensemble cast including Louis Hofmann, Julika Jenkins, Andreas Pietschmann, Maja Schöne, Lisa Vicari, Lisa Kreuzer, Dietrich Hollinderbäumer, Jördis Triebel and Oliver Masucci.';
            $bc ='style="background-color:#D1E8E4;"';
            break;
        case 'Saturday':            
            $tvshow = 'The Boys';               
            $content = 'The Boys is an American superhero streaming television series developed by Eric Kripke for Amazon Prime Video. Based on the comic book of the same name by Garth Ennis and Darick Robertson, which was originally published by DC Comics under their Wildstorm imprint before moving to Dynamite Entertainment; it follows the eponymous team of vigilantes as they combat superpowered individuals who abuse their abilities. The series stars an ensemble cast that includes Karl Urban, Jack Quaid, Laz Alonso, Tomer Capon, and Karen Fukuhara as the vigilantes, and Antony Starr, Erin Moriarty, Dominique McElligott, Chace Crawford, Jessie T. Usher, and Nathan Mitchell as members of the "Seven", an official superhero group run by the conglomerate Vought International, who, while maintaining a lofty façade, are shallow celebrity figures prone to doing horrendous things in secret.';
            $bc ='style="background-color:#C8C6C6;"';
            break;
        case 'Sunday':           
            $tvshow = 'Vikings';          
            $content = 'Vikings is a historical drama television series created and written by Michael Hirst for the History channel, a Canadian network. Filmed in Ireland, it premiered on March 3, 2013, in Canada. The series concluded on December 30, 2020, when the second half of the sixth season was released in its entirety on Amazon Prime Video in Ireland, ahead of its broadcast on History in Canada from January 1 to March 3, 2021. A sequel series, titled Vikings: Valhalla, is still in development for Netflix.';
            $bc ='style="background-color:#C7BEA2;"';
            break;
        default:           
            $today = 'Monday';
            $tvshow = 'Squid Game';           
            $content = 'The newest addition in the list of k-dramas on Netflix is Squid Game. In this article, you will get to know about the full cast introductions of the series, preview, and more. The 2021 released television series has won the hearts of its audience, and viewers are already holding onto their breaths in the expectation of a season 2. Directed by Hwang Dong-hyuk, the nine-episode series got released on its original network Netflix on 17th September 2021. Hwang Dong-hyuk is also the writer of the series. You can check out the official trailer on Youtube. The series gained one of the highest ratings and claimed its spot in the Top 10 Netflix series.';
            $content = ''.$content.'<br><br>Squid Game is the name of the same game that children play in South Korea during their childhood. Have you ever wondered about the game which children play during their childhood, what will happen if it is played by elders with a deadly risk? This series brings this exact twist where adults are playing a series of children’s games only to gain something really big in return- prize money worth 45.6 billion won. ';
            $bc ='style="background-color:#F0E5CF;"';
            break;
    }
    $subtitle= ''.$today.' is '.$tvshow.' Day!';
    $pic = 'm_'.$today.'.jpg';      
?>