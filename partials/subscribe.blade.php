<div id="bio-info" class="col-xs-12 col-sm-6">
    <div class="split-blue">&nbsp;</div>
    <h2>Newsletter</h2>
    <div class="block-content">
        <p>
            Jadilah orang pertama yang mendapatkan info produk terbaru, dan promo dari kami.
            <br><br>
            Daftarkan email anda dan dapatkan segera promo menarik.
        </p>
        <form class="newsletter-form inputfooter" action="{{@$mailing->action}}" method="post" target="_blank" novalidate>
            <input class="input-newsletter"  type="text" placeholder="masukkan email anda" name="email" class="input-medium required email" id="newsletter mce-EMAIL" {{ @$mailing->action==''?'disabled="disabled"':'' }} />
            <div class="fr">
                <button class="submitnewletter" type="submit" {{ @$mailing->action==''?'disabled="disabled" style="opacity:0.5"':'' }}>SUBSCRIBE</button>
            </div>
            <div class="clr"></div>
        </form>
    </div>
</div>