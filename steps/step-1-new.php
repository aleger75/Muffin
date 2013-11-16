<!--
Si on a rentré un login non existant
-->

<aside>
    <div role="icon"><span class="icon-key"></span></div>
</aside>
<article>
    <header>
        <div role="title">
            <h1>Génial !</h1>
            <p>Maintenant, va vite consulter tes mails et rentre la passphrase dans le champ ci-dessous</p>
        </div>
    </header>
    <section>
        <form id="form-passphrase">
            <input type="text" placeholder="Passphrase" id="input-passphrase" name="passphrase">
            <input type="hidden" id="input-login" value="<?php echo $_POST['login']; ?>" name="login">
            <button type="submit"><span class='icon-chevron-sign-right'></span></button>
        </form>
    </section>

    <script>
        $(document).ready(function()
        {
            var verifierCode = function(code, login)
            {
                $.ajax({
                    type: "POST",
                    data: {
                        code: code,
                        login: login,
                        action: "checkCode"
                    },
                    url: "modules/code.php"
                }).done(function(e)
                {
                    if (e.toString()[0] === "1")
                    {
                        console.log("Code vérifié");
                        $.get("steps/step-2.php", function(data) {
                            $("#input-code").attr("disabled", "disabled");
                            $("#input-code + button").attr("disabled", "disabled")
                                .html("<span class='icon-checkmark'></span>");
                            var data = $(data);
                            data.addClass("loading");
                            $("div[data-role='container']").children().slideUp();
                            $("div[data-role='container']").html(data);
                            setTimeout(function() {
                                data.addClass("complete");
                            }, 200);
                        });
                    }
                    console.log("Done !", e);
                });
            };

            $("#form-passphrase").submit(function(ev)
            {
                ev.preventDefault();
                console.log("Submit !");
                verifierCode($("#input-passphrase").val(), $("#input-login").val());
                return false;
            });
        });
    </script>
</article>