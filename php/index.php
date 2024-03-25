<!DOCTYPE html>
<?php
        // Sa se afiseze toate hobiurile persoanei. 
        // Ex: Marius has the following hobbies: cars, planes, music, arts.
    $sentence= " Mihai has the following hobbies: cars, planes, music, arts";

    $explodedSentence=explode(":",$sentence);
    $hobbiesString=array_splice($explodedSentence,1);

    $hobbiesString[0]=trim($hobbiesString[0]," ");
  
    $hobbiesArray=explode(",",$hobbiesString[0]);
        //Sa se afiseze numarul de vocale din  hobbi.
    
    $vowels="aeiou";
    $vowelsCounter=0;
    $allHobbiesLetterSplit=str_split($hobbiesString[0]);
    foreach($allHobbiesLetterSplit as $element){
        if(str_contains($vowels,$element))$vowelsCounter++;
    };
        //aflam length of a hobby string
        
    $maxHobbyLetterLength=0;
    foreach($hobbiesArray as $element){
        if(strlen($element)>$maxHobbyLetterLength) $maxHobbyLetterLength=strlen($element);

    };

        //Count elements in array: masina, blabla, mouse, laptop,lapte
    $sampleArray=array( "masina", "blabla", "mouse", "laptop","lapte");
    $sampleArrayNumber=count($sampleArray);

        //Merge two arrays
    
    $a1 = array("masina", "volan", "motorina");
    $a2 = array("pasageri", "carnet");
    $a1Anda2Merge=array_merge($a1,$a2);
    

        //Sterge ultimul element din array: "masina", "volan", "motorina"
    
    $a3=array("masina", "volan", "motorina");
    $a3P=array_pop($a3);

        //Adauga elemente in array
    array_push($a3,"oua","paine");
   

    $replacedArray=array_replace($a1,$a2);
    


    // Associative Arrays
    $person=array("name"=>"Ion","age"=>78,"gender"=>"male");

    //TOUPPER
    $upperPerson=array_change_key_case($person, CASE_UPPER);

    //TOLOWER
    $lowerPerson=array_change_key_case($person, CASE_LOWER);

    //fill
    $filledArray = array_fill(0, 12, '-');

    //fill Keys
    $filledArrayKeys = array_fill_keys([1,2,3], '-');

    //combine
    $k = ['nume', 'nume2'];
    $v = ["Xulescu", "Yulescu"];
    $combined = array_combine($k, $v);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container bg-dark text-light">
                <h1>Hobbies from:</h1>
                <p>"Mihai has the following hobbies: cars, planes, music, arts."</p>
                <ul>
                <?php
                    foreach($hobbiesArray as $element){
                        ?>
                    <li>
                        <?php echo $element?>
                    </li>
                        <?php
                    }
                ?>
                </ul>
    </div>  

    <div class="container bg-dark text-light">
        <h1>Nr de vocale din cars, planes, music, arts:</h1>
        <h2><?php  echo $vowelsCounter ?></h2>
    </div>

    <div class="container bg-dark text-light">
        <h1>Max length of hobby string:</h1>
        <h2><?php  echo $maxHobbyLetterLength ?></h2>
    </div>

    <div class="container bg-dark text-light">
        <h1>Count elements in array: masina, blabla, mouse, laptop,lapte</h1>
        <h2><?php  echo  $sampleArrayNumber?></h2>
    </div>

    <div class="container bg-dark text-light">
        <h1>Merge two arrays:</h1>
        <h2><?php 
            foreach( $a1Anda2Merge as $element){
                echo   $element ." ";
            };
            ?>
            </h2>
    </div>

    <div class="container bg-dark text-light">
        <h1>Sterge ultimul element din array: "masina", "volan", "motorina"</h1>
        <h2><?php echo $a3P; ?></h2>
    </div>

    <div class="container bg-dark text-light">
        <h1>Adauga elemente in array</h1>
        <h2><?php echo  implode(" ",$a3); ?></h2>
    </div>

    <div class="container bg-dark text-light">
        <h1>Replace</h1>
        <h2><?php echo  implode(" ",$replacedArray); ?></h2>
    </div>

    <!-- Associative -->
    <div class="container bg-dark text-light">
        <h1>Afisare doar valori array</h1>
        <h2><?php echo  implode(" ",array_values($person)); ?></h2>
    </div>

    <div class="container bg-dark text-light">
        <h1>Afisare doar keys array</h1>
        <h2><?php echo  implode(" ",array_keys($person)); ?></h2>
    </div>

    <div class="container bg-dark text-light">
        <h1>Verifica daca exista valoarea "Ion" </h1>
        <h2><?php
            if(array_search("Ion", $person)){
                echo "este";
            };
             
        ?></h2>
    </div>
    
    <div class="container bg-dark text-light">
        <h1>Schimbare caractere MARI</h1>
        <h2><?php echo  implode(" ",array_keys($upperPerson)); 
        ?></h2>
    </div> <div class="container bg-dark text-light">
        <h1>Schimbare caractere MICI</h1>
        <h2><?php echo  implode(" ",array_keys($lowerPerson)); 
        ?></h2>
    </div>
    <div class="container bg-dark text-light">
        <h1>FLIPPP</h1>
        <h2><?php echo  implode(" ",(array_flip(($upperPerson)))); 
        ?></h2>
    </div>

    <div class="container bg-dark text-light">
        <h1>fill function</h1>
        <h2><?php echo  implode("",  $filledArray); 
        ?></h2>
    </div>
    <div class="container bg-dark text-light">
        <h1>fill KEY function</h1>
        <h2><?php echo  implode("",  $filledArrayKeys); 
        ?></h2>
    </div>

    <div class="container bg-dark text-light">
        <h1>Combinare keys + values</h1>
        <h2><?php echo  implode(" ",  $combined ); 
        ?></h2>
    </div>

    <div class="container bg-dark text-light">
        <h1>Differences</h1>
        <h2><?php echo  implode(" ",  array_diff($k, $v)); 
        ?></h2>
    </div>
    <div class="container bg-dark text-light">
        <h1>Randm</h1>
        <h2><?php echo   array_rand($person); 
        ?></h2>
    </div>
</body>

</html>