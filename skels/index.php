<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../static/css/style.css"/>
    <title>Skel</title>
  </head>
  <body>
    <section id="page">
      <h1 class="title">Gotta Check'em All</h1>
      <p class="subtitle">
        <strong>Benvenuto</strong> nel tuo motore di ricerca per Pokémon. Potrai
        inserire le caratteristiche di un <strong>Pokémon fittizio</strong> e il
        back-end <br />
        cercherà grazie all’algoritmo di Machine Learning
        <strong>KNN (K-Nearest Neighbors)</strong> i 5 Pokémon più simili a
        quello che hai<br />inserito.
      </p>
      <form action="find.php" method="post">
        <div class="firstRow">
          <div class="hp">
            <label class="label" for="">Punti Vita (HP)</label>
            <input
              required
              class="input-field"
              placeholder="Inserisci un numero da 0 a 300"
              type="text"
              name="hp"
            />
          </div>
          <div class="atk">
            <label class="label" for="">Punti Attacco (Attack)</label>
            <input
              required
              class="input-field"
              placeholder="Inserisci un numero da 0 a 300"
              type="text"
              name="attack"
            />
          </div>
          <div class="def">
            <label class="label" for="">Punti difesa (Defense)</label>
            <input
              required
              class="input-field"
              placeholder="Inserisci un numero da 0 a 300"
              type="text"
              name="defense"
            />
          </div>
        </div>

        <div class="secondRow">
          <div class="spatk">
            <label class="label" for="">Punti Attacco Speciale (Sp. Atk)</label>
            <input
              required
              class="input-field"
              placeholder="Inserisci un numero da 0 a 300"
              type="text"
              name="atkSp"
            />
          </div>
          <div class="spdef">
            <label class="label" for=""
              >Punti Difesa Speciale (Sp. Defense)</label
            >
            <input
              required
              class="input-field"
              placeholder="Inserisci un numero da 0 a 300"
              type="text"
              name="defSp"
            />
          </div>
          <div class="speed">
            <label class="label" for="">Punti velocità (Speed)</label>
            <input
              required
              class="input-field"
              placeholder="Inserisci un numero da 0 a 300"
              type="text"
              name="speed"
            />
          </div>
        </div>
        <div class="ktm">
          <input type="submit" class="btn" value="CERCA" />
        </div>
      </form>
      <div class="containers">
        <div class="cardcontainer">
          <div class="container">
            <div class="imgcontainer">
              <img class="cardimg" name="pokemonIMG" src="" alt="" />
            </div>
            <div class="statscotainer">
              <h3 class="cardname" name="pokemonName"></h3>
              <p class="cardgen" name="generation"></p>
              <p class="cardtypes">
                Tipi: <span class="bold" name="cardType"></span>
              </p>
              <div class="cardstats">
                <div>
                  <p>HP <span class="bold" name="pokemonHP"></span></p>
                  <p>Atk <span class="bold" name="pokemonATK"></span></p>
                  <p>Def <span class="bold" name="pokemonDEF"></span></p>
                </div>
                <div class="secondstats">
                  <p>Sp. Atk <span class="bold" name="pokemonSPATK"></span></p>
                  <p>Sp. Def <span class="bold" name="pokemonSPDEF"></span></p>
                  <p>Speed <span class="bold" name="pokemonSPEED"></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cardcontainer">
          <div class="container">
            <div class="imgcontainer">
              <img class="cardimg" name="pokemonIMG" src="#" alt="" />
            </div>
            <div class="statscotainer">
              <h3 class="cardname" name="pokemonName"></h3>
              <p class="cardgen" name="generation"></p>
              <p class="cardtypes">
                Tipi: <span class="bold" name="cardType"></span>
              </p>
              <div class="cardstats">
                <div>
                  <p>HP <span class="bold" name="pokemonHP"></span></p>
                  <p>Atk <span class="bold" name="pokemonATK"></span></p>
                  <p>Def <span class="bold" name="pokemonDEF"></span></p>
                </div>
                <div class="secondstats">
                  <p>Sp. Atk <span class="bold" name="pokemonSPATK"></span></p>
                  <p>Sp. Def <span class="bold" name="pokemonSPDEF"></span></p>
                  <p>Speed <span class="bold" name="pokemonSPEED"></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cardcontainer">
          <div class="container">
            <div class="imgcontainer">
              <img class="cardimg" name="pokemonIMG" src="#" alt="" />
            </div>
            <div class="statscotainer">
              <h3 class="cardname" name="pokemonName"></h3>
              <p class="cardgen" name="generation"></p>
              <p class="cardtypes">
                Tipi: <span class="bold" name="cardType"></span>
              </p>
              <div class="cardstats">
                <div>
                  <p>HP <span class="bold" name="pokemonHP"></span></p>
                  <p>Atk <span class="bold" name="pokemonATK"></span></p>
                  <p>Def <span class="bold" name="pokemonDEF"></span></p>
                </div>
                <div class="secondstats">
                  <p>Sp. Atk <span class="bold" name="pokemonSPATK"></span></p>
                  <p>Sp. Def <span class="bold" name="pokemonSPDEF"></span></p>
                  <p>Speed <span class="bold" name="pokemonSPEED"></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cardcontainer">
          <div class="container">
            <div class="imgcontainer">
              <img class="cardimg" name="pokemonIMG" src="#" alt="" />
            </div>
            <div class="statscotainer">
              <h3 class="cardname" name="pokemonName"></h3>
              <p class="cardgen" name="generation"></p>
              <p class="cardtypes">
                Tipi: <span class="bold" name="cardType"></span>
              </p>
              <div class="cardstats">
                <div>
                  <p>HP <span class="bold" name="pokemonHP"></span></p>
                  <p>Atk <span class="bold" name="pokemonATK"></span></p>
                  <p>Def <span class="bold" name="pokemonDEF"></span></p>
                </div>
                <div class="secondstats">
                  <p>Sp. Atk <span class="bold" name="pokemonSPATK"></span></p>
                  <p>Sp. Def <span class="bold" name="pokemonSPDEF"></span></p>
                  <p>Speed <span class="bold" name="pokemonSPEED"></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cardcontainer">
          <div class="container">
            <div class="imgcontainer">
              <img class="cardimg" name="pokemonIMG" src="#" alt="" />
            </div>
            <div class="statscotainer">
              <h3 class="cardname" name="pokemonName"></h3>
              <p class="cardgen" name="generation"></p>
              <p class="cardtypes">
                Tipi: <span class="bold" name="cardType"></span>
              </p>
              <div class="cardstats">
                <div>
                  <p>HP <span class="bold" name="pokemonHP"></span></p>
                  <p>Atk <span class="bold" name="pokemonATK"></span></p>
                  <p>Def <span class="bold" name="pokemonDEF"></span></p>
                </div>
                <div class="secondstats">
                  <p>Sp. Atk <span class="bold" name="pokemonSPATK"></span></p>
                  <p>Sp. Def <span class="bold" name="pokemonSPDEF"></span></p>
                  <p>Speed <span class="bold" name="pokemonSPEED"></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="../static/js/script.js"></script>
  </body>
</html>
