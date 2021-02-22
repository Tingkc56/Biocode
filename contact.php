<?php
    include('header.php');
?>


<main class="pagewidth" id="details">


    <div id="contact">
        <h1>Contact</h1>
        <div class="horaire">
            <h2>Nos horaires</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti perferendis obcaecati sunt laudantium
                nam? Repellat suscipit cumque hic debitis consequatur quae! Commodi aperiam veniam dolorum delectus
                sequi saepe quos, sunt cumque maiores eos culpa maxime atque illo placeat ipsam, deserunt deleniti.
                Itaque tenetur laborum minima aspernatur doloribus. Suscipit, rem molestias!</p>

        </div>
        <form action="envoimail.php" method="post">

        <fieldset id="listContact">
        <p>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" placeholder=" Nom Prénom">
        </p>
        <p>
            <label for="mail">Email</label>
            <input type="email" name="email" id="mail" placeholder="mail@mail.com">
        </p>
        <p>
            <label for="address">Adresse </label>
            <input type="text" name="address" id="address" placeholder="Votre adresse">
        </p>
        <p>
            <label for="sujet">Sujet </label>
            <input type="text" name="sujet" id="sujet" placeholder="Votre sujet">
        </p>
        <p>
            <label for="message">Votre message</label>
            <Textarea name="message" id="message" placeholder=""></textarea>
        </p>
        <p class="button-form">
            <input id="envoie" type="button" value="ENVOYER">
             <!-- 之前type是submit,提交表单之后会自动刷新页面，换成了button之后就不会了，或者把form换成div，去看一下为什么, -->
             <!-- 问题是换完之后他不会再更新发送php表单了，应该是正常情况，要么发送表单，要么进去php表格 -->
            <input type="reset" value="ANNULER">
        </p>
    </fieldset>
        </form>

    </div>
    <div id="map">
        <h2>Nous trouver</h2>
        <div class="coordonee"></div>
        <p><strong>Email</strong> <br>infos@Biocode.com</p>
        <p><strong>Télephone</strong> <br>
            + 33 2 68 68 68 68</p>
        <address>
            <strong>Adresse</strong> <br>
            8 Lesteno, <br>
            56250 St-Nolff
            </Adress>
    </div>

    <div class="carte"><iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d85954.51203397017!2d-2.7554048775421847!3d47.6828954062933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc4c75430030ea52e!2sVannes%20Spiruline%20%3A%20Production%20de%20spiruline%20100%25%20fran%C3%A7aise%20en%20Bretagne%20-%20Morbihan%20(56)!5e0!3m2!1sfr!2sfr!4v1606337758867!5m2!1sfr!2sfr"
            width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>
</main>


<?php
    include('footer.php');
?>