<?php 
        $dane = $this->getOpcje()['nauczycieldane'];
        ?>
<div id="szkoly_kontener">
    <div id="podmenu">
       <?php echo $this->getOpcje()['podmenu'];?>
    </div>
    <div id="szkola_dane_kontener">
        <div class="dane_sekcja">
            <div class="dane_tresc" id="szkola_kontener_opis">
                Szczegóły rejestracji
        </div> 
    </div>
        <div class="dane_sekcja">
            <div class="dane_opis">Data rejestracji:</div>
            <div class="dane_tresc">
                <?php echo $dane['Data_Rejestracji']; ?>
        </div> 
    </div>
        <div class="dane_sekcja">
            <div class="dane_opis">Imię i nazwisko:</div>
            <div class="dane_tresc">
                <?php echo $dane['Imie'].' '.$dane['Nazwisko']; ?>
        </div> 
    </div>
    <div class="dane_sekcja">
            <div class="dane_opis">Adres email:</div>
            <div class="dane_tresc">
                <?php echo $dane['Email']; ?>
        </div> 
    </div>
        <div class="dane_sekcja">
            <div class="dane_opis">Adres:</div>
            <div class="dane_tresc">
                <?php echo 'Ulica '.$dane['Ulica'].' '.$dane['Numer_budynku'];
                if(!empty($dane['Numer_Mieszkania'])){
                    echo ' / '.$dane['Numer_Mieszkania']; 
                }
                echo ' '.$dane['Kod_Pocztowy'].' '.$dane['Miejscowosc'];?>
        </div> 
    </div>
        <div class="dane_sekcja">
            <div class="dane_opis">Województwo:</div>
            <div class="dane_tresc">
                <?php echo $dane['Wojewodztwo']; ?>
        </div> 
    </div>
        <div class="dane_sekcja">
            <div class="dane_opis">Numer pesel:</div>
            <div class="dane_tresc">
                <?php echo $dane['Numer_Pesel']; ?>
        </div> 
    </div>
   
        <div class="dane_sekcja">
            <div class="dane_opis">Hasło:</div>
            <div class="dane_tresc">
                <?php 
                if(strlen($dane['Login']) == 0){
                echo $dane['Haslo']; 
                }
                ?>
                <?php 
                echo '<a href="'.$this->dolacz.'konta_nauczyciele.html/hasloreset/'.$dane['Id_Nauczyciel'].'">resetuj hasło</a>';
                ?>
        </div> 
    </div>
        <div class="dane_sekcja">
            <div class="dane_tresc">
                <a href="<?php echo $this->dolacz;?>konta_nauczyciele.html/nauczycieledycja/<?php echo $dane['Id_Nauczyciel']?>">edytuj</a>
                <a href="<?php echo $this->dolacz;?>konta_nauczyciele.html/nauczycielusun/<?php echo $dane['Id_Nauczyciel']?>">usuń</a>
                <a href="<?php echo $this->dolacz;?>konta_nauczyciele.html">anuluj</a>
        </div> 
    </div>
</div>