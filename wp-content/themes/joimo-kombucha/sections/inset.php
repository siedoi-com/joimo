<style>
	.inset {
  background: #ededeb;
}
.inset__title {
  margin: 0 28%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 80px 0 60px 0;
  color: #221e1f;
}
.inset__title img {
  margin-bottom: 40px;
}
.inset__title h3 {
  font-family: Noe Display;
  font-weight: 500;
  font-style: Medium;
  font-size: 48px;
  line-height: 100%;
  letter-spacing: 0;
  text-align: center;
  margin-bottom: 15px;
}
.inset__title p {
  font-family: Cera Pro;
  font-weight: 400;
  font-size: 18px;
  line-height: 100%;
  letter-spacing: 0;
  text-align: center;
}
.inset__wrapper {
  display: flex;
}
.inset__wrapper_section {
  margin-top: 150px;
}
.inset__wrapper_sectionimg {
  margin-left: auto;
  margin-right: auto;
  position: relative;
  height: 800px;
  width: 700px;
}
.inset__wrapper_sectionimg img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
  position: absolute;
  left: 8%;
  top: 0;
}
.inset__section {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
}
.inset__section h4 {
  margin: 20px 0 5px 0;
  color: #2a4934;
  font-family: Noe Display;
  font-weight: 500;
  font-size: 24px;
  line-height: 100%;
  letter-spacing: 0;
  vertical-align: bottom;
}
.inset__section p {
  color: #7c7c7c;
  font-family: Cera Pro;
  font-weight: 500;
  font-style: Medium;
  font-size: 14px;
  line-height: 120%;
  letter-spacing: 0;
  margin-bottom: 50px;
}
.Ingredients {
  margin-top: 100px;
}
.Ingredients__title {
  margin-bottom: 30px;
  text-align: center;
}
.Ingredients__title h2 {
  color: #221e1f;
  font-family: Noe Display;
  font-weight: 500;
  font-style: Medium;
  font-size: 48px;
  line-height: 100%;
  letter-spacing: 0;
}
.Ingredients__content {
  display: flex;
  width: 100%;
}
.Ingredients__content_img {
  position: relative;
  width: 100%;
  height: 740px;
}
.Ingredients__content_img img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
  position: absolute;
}
.Ingredients__content_img-title {
  position: absolute;
  top: 78%;
  left: 0;
  padding: 0 40px 40px 40px;
  z-index: 2;
}
.Ingredients__content_img-title h3 {
  margin-right: 15%;
  font-family: Noe Display;
  font-weight: 500;
  font-size: 22px;
  line-height: 100%;
  letter-spacing: 0;
  margin-bottom: 20px;
}
.Ingredients__content_img-title p {
  font-family: Cera Pro;
  font-weight: 500;
  font-style: Medium;
  font-size: 14px;
  line-height: 120%;
  letter-spacing: 0;
  color: #7c7c7c;
}
</style>
<section class="inset">
    <div class="inset__title">
        <img src="<?= get_template_directory_uri() ?>/img/j-title.webp" alt="image">
        <h3>Sip the Difference</h3>
        <p>Our kombucha blends rich heritage with a refreshing, sophisticated taste. A delicate oolong base adds complexity, crafted for those who value quality and flavor.</p>
    </div>
    <div class="container">
        <div class="inset__wrapper">
            <div class="inset__wrapper_section">

                <div class="inset__section">
                    <img src="<?= get_template_directory_uri() ?>/img/j-1.webp" alt="image">
                    <h4>Refreshing Kombucha Taste</h4>
                    <p>Refreshing Kombucha Taste</p>
                </div>

                <div class="inset__section">
                    <img src="<?= get_template_directory_uri() ?>/img/j-2.webp" alt="image">
                    <h4>Full Of Raw And Crafted Probiotics</h4>
                    <p>Infused with nature’s finest,crafted to nurture your whole self.</p>
                </div>

                <div class="inset__section">
                    <img src="<?= get_template_directory_uri() ?>/img/j-3.webp" alt="image">
                    <h4>Made With Real Fruit</h4>
                    <p>Fresh fruit flavor with every sip.</p>
                </div>

            </div>

            <div class="inset__wrapper_sectionI">
                <div class="inset__wrapper_sectionimg">
                    <img src="<?= get_template_directory_uri() ?>/img/but.webp" alt="image">
                </div>
            </div>

            <div class="inset__wrapper_section">

                <div class="inset__section">
                    <img src="<?= get_template_directory_uri() ?>/img/j-4.webp" alt="image">
                    <h4>Delightfully Crisp &amp; Fizzy</h4>
                    <p>An effervescent joy that's asmart alternative to soda</p>
                </div>

                <div class="inset__section">
                    <img src="<?= get_template_directory_uri() ?>/img/j-5.webp" alt="image">
                    <h4>Made From The Best Oolong Tea</h4>
                    <p>Sourced from the high mountains of Taiwan,home of the world’s best oolong leaves.</p>
                </div>

                <div class="inset__section">
                    <img src="<?= get_template_directory_uri() ?>/img/j-6.webp" alt="image">
                    <h4>Meticulously Brewed for Quality</h4>
                    <p>A testament to our commitment
                        to perfection in every bottle.</p>
                </div>

            </div>
        </div>
    </div>
</section>