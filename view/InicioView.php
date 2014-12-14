<div id="dialog" title="Login">
    <p class="validateTips">Todos los campos son obligatorios</p>
    <form>
        <fieldset>
                <label for="email">Email</label>
                <input type="text" name="email" id="email"  class="text ui-widget-content ui-corner-all">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"  class="text ui-widget-content ui-corner-all">
                <!-- Allow form submission with keyboard without duplicating the dialog button -->
                <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
        </fieldset>
    </form>
</div>

<div class="grid-100 disVid">
    <div class="grid-50 disponibilidad">
        <form class="form" action="" method="post">
            <fieldset>
                <label>Entrada</label>
                <input type="text" id="entrada">
                <label>Adultos</label>
                <select name="adultos" id="number">
                    <option>1</option>
                    <option selected="selected">2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>
            </fieldset>
            <fieldset>
                <label>Salida</label>
                <input type="text" id="salida">
                <label>Niños</label>
                <select name="niños" id="niños">
                    <option selected="selected">0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>          
                <button role="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" id="button" type="submit">
                    <span class="ui-button-text boton">Disponibilidad</span>
                </button> 
            </fieldset>
        </form>    
    </div>
    <div class=" grid-50 video">
        <iframe width="570" height="250" src="//www.youtube-nocookie.com/embed/kPDnw3_1GOI?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
<div class="grid-100 lorem">
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet finibus felis. In hac habitasse platea dictumst. Quisque laoreet posuere lectus at porttitor. Donec vitae quam lacinia velit suscipit pulvinar. Aliquam sollicitudin libero nulla, quis tincidunt urna faucibus quis. Integer nec ipsum ut ex consectetur laoreet. Fusce a felis lacinia, placerat neque a, rhoncus lacus. Nulla egestas fermentum feugiat. Integer ut lacus vitae mauris interdum lacinia.

        Aliquam ac tincidunt nulla. Phasellus pulvinar elementum nisl at accumsan. Proin scelerisque volutpat posuere. Etiam lectus neque, finibus vestibulum vehicula at, porttitor et arcu. Vestibulum tincidunt blandit aliquet. Sed in dictum magna, eget cursus metus. Phasellus id laoreet quam. Etiam id tellus et risus dapibus auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris at metus elit. Donec at dignissim dui. Etiam cursus ipsum ac sapien lobortis, quis porta nisl feugiat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus convallis et ipsum eu gravida. Donec leo justo, fermentum sed erat in, imperdiet aliquam nisl. </p>
</div>
<div class="grid-100 images">
    <div class="grid-33">
        <div class="prefix-50 grid-50">
            <img id="wifi" src="view/img/wifi.png"  />
        </div>
    </div>
    <div class="grid-33">
        <div class="prefix-10 grid-33">
            <img id="mascotas" src="view/img/mascotas.png"  />
        </div>
    </div>
    <div class="grid-33">
        <img id="playa" src="view/img/playa.jpg"  />
    </div>  
</div>