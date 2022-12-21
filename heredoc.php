<?php 
    $author = 'Jules Okoye-ezeh';

    echo <<<_END
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
    Quisquam minus sapiente tempora repudiandae sint, provident quis cum praesentium porro, 
    pariatur distinctio blanditiis ratione fugit aperiam vitae asperiores. Quos, deleniti neque?
    
    
    -$author.
_END;


    $mike =  <<<_SECTION1
    Debugging is twice as hard as writing the code in the first place.
    Therefore, if you write the code as cleverly as possible, you are,
    by definition, not smart enough to debug it.
        
    - $author.
_SECTION1;

    echo $mike;
?>



