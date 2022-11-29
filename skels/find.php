<?php
include_once("header.php");

main();
function main() {
    global $all_dim;
    $all_dim = array();
    $csv = array_map('str_getcsv', file('http://localhost/GottaSearchThemAll/data/pokemon.csv')); //leggiamo il file csv
    foreach ($csv as $line) {
        formula($line[5], $line[6], $line[7], $line[8], $line[9], $line[10], $all_dim);
    }
  
    ricerca($all_dim, $csv);
}

function formula($hp, $attack, $defense, $sp_attack, $sp_defense, $speed, &$all_dim) {
    // applico la formula euclideana
    $dim1 = ($_POST["hp"] - $hp);
    $dim2 = ($_POST["attack"] - $attack);
    $dim3 = ($_POST["defense"] - $defense);
    $dim4 = ($_POST["atkSp"] - $sp_attack);
    $dim5 = ($_POST["defSp"] - $sp_defense);
    $dim6 = ($_POST["speed"] - $speed);
    $pd1 = pow($dim1, 2);
    $pd2 = pow($dim2, 2);
    $pd3 = pow($dim3, 2);
    $pd4 = pow($dim4, 2);
    $pd5 = pow($dim5, 2);
    $pd6 = pow($dim6, 2);
    $dim = sqrt($pd1+$pd2+$pd3+$pd4+$pd5+$pd6);

    // popolo array delle dimensioni ottenute
    array_push($all_dim, $dim);
}   


function ricerca($all_dim,$csv) {
    // Ricerca del valore minimo nell'array e della sua posizione ( KEY )
    $min = min($all_dim);
    $key = array_search($min, $all_dim);
    $n = 0;
    // stampo il risultato
    foreach ($csv as $line){
        if ($n == $key-2){
            //echo $line[1]." ".$line[2]." ".$line[5]." ".$line[6]." ".$line[7]." ".$line[8]." ".$line[9]." ".$line[10]." ".$line[11]."<br>";

            echo " <div class='cardcontainer'>
            <div class='container'>
              <div class='imgcontainer'>
                <img class='cardimg' name='pokemonIMG' src='http://localhost/GottaSearchThemAll/static/images/".$line[0].".png' alt=".$line[1]." />
              </div>
              <div class='statscotainer'>
                <h3 class='cardname' name='pokemonName'>".$line[1]."</h3>
                <p class='cardgen' name='generation'>".$line[11]."</p>
                <p class='cardtypes'>
                  Tipi: <span class='bold' name='cardType'>".$line[2]."</span>
                </p>
                <div class='cardstats'>
                  <div>
                    <p>HP <span class='bold' name='pokemonHP'>".$line[5]."</span></p>
                    <p>Atk <span class='bold' name='pokemonATK'>".$line[6]."</span></p>
                    <p>Def <span class='bold' name='pokemonDEF'>".$line[7]."</span></p>
                  </div>
                  <div class='secondstats'>
                    <p>Sp. Atk <span class='bold' name='pokemonSPATK'>".$line[8]."</span></p>
                    <p>Sp. Def <span class='bold' name='pokemonSPDEF'>".$line[9]."</span></p>
                    <p>Speed <span class='bold' name='pokemonSPEED'>".$line[10]."</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>";

        }
        if ($n == $key-1){
            echo " <div class='cardcontainer'>
            <div class='container'>
              <div class='imgcontainer'>
                <img class='cardimg' name='pokemonIMG' src='http://localhost/GottaSearchThemAll/static/images/".$line[0].".png' alt=".$line[1]." />
              </div>
              <div class='statscotainer'>
                <h3 class='cardname' name='pokemonName'>".$line[1]."</h3>
                <p class='cardgen' name='generation'>".$line[11]."</p>
                <p class='cardtypes'>
                  Tipi: <span class='bold' name='cardType'>".$line[2]."</span>
                </p>
                <div class='cardstats'>
                  <div>
                    <p>HP <span class='bold' name='pokemonHP'>".$line[5]."</span></p>
                    <p>Atk <span class='bold' name='pokemonATK'>".$line[6]."</span></p>
                    <p>Def <span class='bold' name='pokemonDEF'>".$line[7]."</span></p>
                  </div>
                  <div class='secondstats'>
                    <p>Sp. Atk <span class='bold' name='pokemonSPATK'>".$line[8]."</span></p>
                    <p>Sp. Def <span class='bold' name='pokemonSPDEF'>".$line[9]."</span></p>
                    <p>Speed <span class='bold' name='pokemonSPEED'>".$line[10]."</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>";
        }
        if ($n == $key){
            echo " <div class='cardcontainer'>
            <div class='container'>
              <div class='imgcontainer'>
                <img class='cardimg' name='pokemonIMG' src='http://localhost/GottaSearchThemAll/static/images/".$line[0].".png' alt=".$line[1]." />
              </div>
              <div class='statscotainer'>
                <h3 class='cardname' name='pokemonName'>".$line[1]."</h3>
                <p class='cardgen' name='generation'>".$line[11]."</p>
                <p class='cardtypes'>
                  Tipi: <span class='bold' name='cardType'>".$line[2]."</span>
                </p>
                <div class='cardstats'>
                  <div>
                    <p>HP <span class='bold' name='pokemonHP'>".$line[5]."</span></p>
                    <p>Atk <span class='bold' name='pokemonATK'>".$line[6]."</span></p>
                    <p>Def <span class='bold' name='pokemonDEF'>".$line[7]."</span></p>
                  </div>
                  <div class='secondstats'>
                    <p>Sp. Atk <span class='bold' name='pokemonSPATK'>".$line[8]."</span></p>
                    <p>Sp. Def <span class='bold' name='pokemonSPDEF'>".$line[9]."</span></p>
                    <p>Speed <span class='bold' name='pokemonSPEED'>".$line[10]."</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>";
        }
        if ($n == $key+1){
            echo " <div class='cardcontainer'>
            <div class='container'>
              <div class='imgcontainer'>
                <img class='cardimg' name='pokemonIMG' src='http://localhost/GottaSearchThemAll/static/images/".$line[0].".png' alt=".$line[1]." />
              </div>
              <div class='statscotainer'>
                <h3 class='cardname' name='pokemonName'>".$line[1]."</h3>
                <p class='cardgen' name='generation'>".$line[11]."</p>
                <p class='cardtypes'>
                  Tipi: <span class='bold' name='cardType'>".$line[2]."</span>
                </p>
                <div class='cardstats'>
                  <div>
                    <p>HP <span class='bold' name='pokemonHP'>".$line[5]."</span></p>
                    <p>Atk <span class='bold' name='pokemonATK'>".$line[6]."</span></p>
                    <p>Def <span class='bold' name='pokemonDEF'>".$line[7]."</span></p>
                  </div>
                  <div class='secondstats'>
                    <p>Sp. Atk <span class='bold' name='pokemonSPATK'>".$line[8]."</span></p>
                    <p>Sp. Def <span class='bold' name='pokemonSPDEF'>".$line[9]."</span></p>
                    <p>Speed <span class='bold' name='pokemonSPEED'>".$line[10]."</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>";        }
        if ($n == $key+2){
            echo " <div class='cardcontainer'>
            <div class='container'>
              <div class='imgcontainer'>
                <img class='cardimg' name='pokemonIMG' src='http://localhost/GottaSearchThemAll/static/images/".$line[0].".png' alt=".$line[1]." />
              </div>
              <div class='statscotainer'>
                <h3 class='cardname' name='pokemonName'>".$line[1]."</h3>
                <p class='cardgen' name='generation'>".$line[11]."</p>
                <p class='cardtypes'>
                  Tipi: <span class='bold' name='cardType'>".$line[2]."</span>
                </p>
                <div class='cardstats'>
                  <div>
                    <p>HP <span class='bold' name='pokemonHP'>".$line[5]."</span></p>
                    <p>Atk <span class='bold' name='pokemonATK'>".$line[6]."</span></p>
                    <p>Def <span class='bold' name='pokemonDEF'>".$line[7]."</span></p>
                  </div>
                  <div class='secondstats'>
                    <p>Sp. Atk <span class='bold' name='pokemonSPATK'>".$line[8]."</span></p>
                    <p>Sp. Def <span class='bold' name='pokemonSPDEF'>".$line[9]."</span></p>
                    <p>Speed <span class='bold' name='pokemonSPEED'>".$line[10]."</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>";        }

        $n++;
    }

}