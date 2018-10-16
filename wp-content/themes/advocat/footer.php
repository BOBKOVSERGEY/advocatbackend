<?php if (is_page( 'kontakty' )) {?>
<section class="map">
  <div class="rd-google-map">
    <div id="google-map" data-zoom="15" data-x="37.5843909" data-y="55.81242" class="rd-google-map__model"></div>
    <ul class="rd-google-map__locations">
      <li data-x="37.5843909" data-y="55.81242">
        <h5>Адвокатский кабинет Тыняной И.И.</h5>
        <address class="contact-info">
          <p>127254, Россия, г. Москва, ул. Руставели, дом 3, корпус 2, 1 этаж, офис 6</p>
          <br>
          <dl>
            <dd><a href="tel:+74959699841"><i class="fa fa-phone" aria-hidden="true"></i> +7 (495) 969 98 41</a></dd>
          </dl>
          <dl>
            <dd><a href="mailto:info@lawyersoffice.ru"><i class="fa fa-envelope"></i> info@lawyersoffice.ru</a></dd>
          </dl>
          <dl>
            <dd><span>Время работы:<br>
            С понедельника по четверг с 10:00 до 20:00;<br>
            в пятницу с 10:00 до 17:00.</span></dd>
          </dl>
        </address>
      </li>
    </ul>
  </div>
</section>
<?php } ?>
<section class="form-main">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="form-main__wrapper-form">
          <h2 class="form-main__heading">Бесплатная консультация</h2>
          <div class="form-main__answer"></div>
          <form action="#" class="form-main__form" id="formMain" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <div class="form-main__form-wrapper-input">
                  <input class="form-main__form-input" type="text" autocomplete="off" name="name" placeholder="Ваше имя">
                </div>
                <div class="form-main__form-wrapper-input">
                  <input class="form-main__form-input" type="email" autocomplete="off" name="email" placeholder="Ваше email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-main__form-wrapper-input">
                  <input class="form-main__form-input" type="text" autocomplete="off" name="phone" placeholder="Ваш телефон">
                </div>
                <div class="form-main__form-wrapper-select">
                  <select data-minimum-results-for-search="Infinity" name="help" class="select-filter"><!--data-minimum-results-for-search="Infinity"-->
                    <option value="Юридическая помощь">Юридическая помощь</option>
                    <option value="Юридическое сопровождение">Юридическое сопровождение</option>
                    <option value="Арбитражные споры">Арбитражные споры</option>
                    <option value="Гражданские дела">Гражданские дела</option>
                    <option value="Вопросы недвижимости">Вопросы недвижимости</option>
                    <option value="Уголовные дела">Уголовные дела</option>
                    <option value="Гражданское право">Гражданское право</option>
                    <option value="Представление интересов в судах">Представление интересов в судах</option>
                    <option value="Жилищные споры">Жилищные споры</option>
                    <option value="Трудовые споры">Трудовые споры</option>
                    <option value="Экономические преступления">Экономические преступления</option>
                    <option value="Наследственные дела">Наследственные дела</option>
                    <option value="Взыскание долгов">Взыскание долгов</option>
                    <option value="Защита прав потребителей">Защита прав потребителей</option>
                    <option value="Защита прав собственников">Защита прав собственников</option>
                    <option value="Консультация по уголовным делам">Консультация по уголовным делам</option>
                    <option value="Налоговые споры">Налоговые споры</option>
                    <option value="Взыскание морального вреда">Взыскание морального вреда</option>
                    <option value="Личный или семейный адвокат">Личный или семейный адвокат</option>
                    <option value="Споры со страховыми компаниями">Споры со страховыми компаниями</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-main__form-wrapper-textarea">
                  <textarea class="form-main__form-textarea" autocomplete="off" name="comment" placeholder="Комментарий"></textarea>
                </div>
                <div class="form-main__form-wrapper-file">
                  <input type="file" id="file" autocomplete="off" class="hide-type-file inputfile" data-multiple-caption="{count} files selected" name="attachment">
                  <label class="upload-file" for="file">
                    <i class="fa fa-paperclip upload-file-icon" aria-hidden="true"></i>
                    <span class="upload-text-reset">Прикрепить файл</span>
                  </label>
                </div>
                <div class="form-main__wrapper-checkbox">
                  <input id="chk" type="checkbox" class="js-policy" checked=""><label for="chk">Подтверждаю свое согласие на <a href="#" class="form-main__checkbox-link" target="_blank">обработку</a> персональных данных</label>
                </div>
                <div class="form-main__form-wrapper-submit">
                  <button class="form-main__btn btn btn--large btn--gold-fool" type="submit" name="submit">Отправить</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!--<div class="col-lg-5 col-md-12">
        <div class="form-main__img">
          <img src="dist/images/form.png" alt="">
        </div>
      </div>-->
    </div>
  </div>
</section>
<footer class="footer">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-md-6">
        <div class="footer__copyright">© Адвокатский кабинет Тыняной И.И 2012 - <span id="copyright-year"></span>. </div>
      </div>
      <div class="col-md-6">

        <div class="footer__developer">
          <div class="footer__developer-img"><img src="<?php bloginfo('template_url')?>/dist/images/mylogo.svg" alt=""></div>
          <div class="footer__developer-text"><a href="//sitesdevelopment.ru/lp/" target="_blank">ЭСДИ — Разработка сайта</a></div>
        </div>
        <div class="footer__policy"><a href="#">Политика обработки персональных данных</a></div>
      </div>
    </div>
  </div>
</footer>
</div>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content modal-popup">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Бесплатная консультация</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-popup__answer"></div>
        <form action="#" class="modal-popup__form" id="formModal" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-6">
              <div class="modal-popup__form-wrapper-input">
                <input class="modal-popup__form-input" type="text" autocomplete="off" name="name" placeholder="Ваше имя">
              </div>
              <div class="modal-popup__form-wrapper-input">
                <input class="modal-popup__form-input" type="email" autocomplete="off" name="email" placeholder="Ваше email">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="modal-popup__form-wrapper-input">
                <input class="modal-popup__form-input" type="text" autocomplete="off" name="phone" placeholder="Ваш телефон">
              </div>
              <div class="modal-popup__form-wrapper-select">
                <select data-minimum-results-for-search="Infinity" name="help" class="select-filter"><!--data-minimum-results-for-search="Infinity"-->
                  <option value="Юридическая помощь">Юридическая помощь</option>
                  <option value="Юридическое сопровождение">Юридическое сопровождение</option>
                  <option value="Арбитражные споры">Арбитражные споры</option>
                  <option value="Гражданские дела">Гражданские дела</option>
                  <option value="Вопросы недвижимости">Вопросы недвижимости</option>
                  <option value="Уголовные дела">Уголовные дела</option>
                  <option value="Гражданское право">Гражданское право</option>
                  <option value="Представление интересов в судах">Представление интересов в судах</option>
                  <option value="Жилищные споры">Жилищные споры</option>
                  <option value="Трудовые споры">Трудовые споры</option>
                  <option value="Экономические преступления">Экономические преступления</option>
                  <option value="Наследственные дела">Наследственные дела</option>
                  <option value="Взыскание долгов">Взыскание долгов</option>
                  <option value="Защита прав потребителей">Защита прав потребителей</option>
                  <option value="Защита прав собственников">Защита прав собственников</option>
                  <option value="Консультация по уголовным делам">Консультация по уголовным делам</option>
                  <option value="Налоговые споры">Налоговые споры</option>
                  <option value="Взыскание морального вреда">Взыскание морального вреда</option>
                  <option value="Личный или семейный адвокат">Личный или семейный адвокат</option>
                  <option value="Споры со страховыми компаниями">Споры со страховыми компаниями</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="modal-popup__form-wrapper-textarea">
                <textarea class="modal-popup__form-textarea" autocomplete="off" name="comment" placeholder="Комментарий"></textarea>
              </div>
              <div class="modal-popup__form-wrapper-file">
                <input type="file" id="file-popup" autocomplete="off" class="hide-type-file inputfile" data-multiple-caption="{count} files selected" name="attachment">
                <label class="upload-file" for="file-popup">
                  <i class="fa fa-paperclip upload-file-icon" aria-hidden="true"></i>
                  <span class="upload-text-reset">Прикрепить файл</span>
                </label>
              </div>
              <div class="modal-popup__wrapper-checkbox">
                <input id="modal-popup-chk" type="checkbox" class="js-policy-modal" checked=""><label for="modal-popup-chk">Подтверждаю свое согласие на <a href="#" class="form-main__checkbox-link" target="_blank">обработку</a> персональных данных</label>
              </div>
              <div class="modal-popup__form-wrapper-submit">
                <button class="modal-popup__btn btn btn--large btn--gold-fool" type="submit" name="submit">Отправить</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>